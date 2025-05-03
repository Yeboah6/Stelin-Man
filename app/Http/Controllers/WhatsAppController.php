<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;
use Log;

class WhatsAppController extends Controller
{

    public function showForm()
    {
        return view('whatsapp-test');
    }

    protected $twilioSid;
    protected $twilioToken;
    protected $twilioWhatsAppNumber;
    protected $client;

    public function __construct()
    {
        // Load Twilio credentials from environment variables
        $this->twilioSid = env('TWILIO_SID');
        $this->twilioToken = env('TWILIO_AUTH_TOKEN');
        $this->twilioWhatsAppNumber = env('TWILIO_WHATSAPP_NUMBER');
        
        // Initialize Twilio client
        $this->client = new Client($this->twilioSid, $this->twilioToken);
    }

    /**
     * Send a WhatsApp message
     */
    public function sendMessage(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'to' => 'required|string',
                'message' => 'required|string'
            ]);

            $to = $request->input('to');
            $message = $request->input('message');
            
            // Format the phone number for WhatsApp
            $to = $this->formatPhoneNumber($to);
            
            // Send the message via Twilio
            $message = $this->client->messages->create(
                "whatsapp:$to",
                [
                    'from' => "whatsapp:{$this->twilioWhatsAppNumber}",
                    'body' => $message
                ]
            );
            
            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully',
                'sid' => $message->sid
            ]);
            
        } catch (\Exception $e) {
            Log::error('WhatsApp error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Receive and handle incoming WhatsApp messages
     */
    public function receiveMessage(Request $request)
    {
        try {
            // Get the message details from the request
            $from = $request->input('From');
            $body = $request->input('Body');
            
            // Log the incoming message
            Log::info("Received WhatsApp message from $from: $body");
            
            // Create a TwiML response
            $response = new MessagingResponse();
            
            // Add a reply message
            $response->message("Thanks for your message: $body");
            
            // Process the message based on content
            // This is where you'd add your custom logic to handle different messages
            
            return response($response, 200)
                ->header('Content-Type', 'text/xml');
                
        } catch (\Exception $e) {
            Log::error('WhatsApp webhook error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Error processing webhook: ' . $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Format phone number for WhatsApp
     */
    private function formatPhoneNumber($phone)
    {
        // Remove any non-digit characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Ensure the number has the country code
        if (substr($phone, 0, 1) !== '+') {
            // Add your default country code if not present
            // This example adds +1 (US/Canada) if missing
            if (strlen($phone) == 10) {
                $phone = '233' . $phone;
            }
        }
        
        return $phone;
    }
}