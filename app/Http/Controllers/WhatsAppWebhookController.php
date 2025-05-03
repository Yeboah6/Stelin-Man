<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\WhatsAppService;

class WhatsAppWebhookController extends Controller
{
    protected $whatsapp;

    public function __construct(WhatsAppService $whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }

    /**
     * Handle incoming WhatsApp messages
     */
    public function handleIncomingMessage(Request $request)
    {
        // Log the incoming webhook for debugging
        Log::info('WhatsApp Webhook Received', $request->all());
        
        // Extract message data
        $from = $request->input('From');
        $body = $request->input('Body');
        $mediaUrl = $request->input('MediaUrl0');
        $messageSid = $request->input('MessageSid');
        
        // Process the message (example)
        // This is where you would add your business logic to process the message
        // For example, store in database, trigger notifications, etc.
        
        // Example: Auto-reply to incoming messages
        if ($body) {
            $response = "Thank you for your message: \"$body\". We'll get back to you soon!";
            $this->whatsapp->send($from, $response);
        }
        
        // Return a TwiML response
        return response()->xml('<?xml version="1.0" encoding="UTF-8"?><Response></Response>');
    }
}