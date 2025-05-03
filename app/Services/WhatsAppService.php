<?php

namespace App\Services;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    protected $client;
    protected $fromNumber;

    public function __construct(Client $client, $fromNumber)
    {
        $this->client = $client;
        $this->fromNumber = $fromNumber;
    }

    /**
     * Send a WhatsApp message
     *
     * @param string $to Recipient number in E.164 format
     * @param string $message Message content
     * @param array $options Additional options
     * @return array Response with status and details
     */
    public function sendMessage($to, $message, array $options = [])
    {
        // Format the number with WhatsApp prefix
        $to = $this->formatNumber($to);
        
        $messageParams = [
            'from' => $this->fromNumber,
            'body' => $message,
        ];
        
        // Merge additional options
        $messageParams = array_merge($messageParams, $options);
        
        try {
            $result = $this->client->messages->create($to, $messageParams);
            
            Log::info('WhatsApp message sent', [
                'to' => $to,
                'status' => $result->status,
                'sid' => $result->sid
            ]);
            
            return [
                'success' => true,
                'sid' => $result->sid,
                'status' => $result->status,
                'message' => 'Message sent successfully'
            ];
        } catch (\Exception $e) {
            Log::error('WhatsApp message failed', [
                'to' => $to,
                'error' => $e->getMessage()
            ]);
            
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Failed to send message'
            ];
        }
    }

    /**
     * Format a phone number for WhatsApp
     *
     * @param string $number Phone number
     * @return string Formatted WhatsApp number
     */
    private function formatNumber($number)
    {
        // Strip any non-numeric characters except +
        $number = preg_replace('/[^0-9+]/', '', $number);
        
        // If number doesn't start with "whatsapp:", add it
        if (strpos($number, 'whatsapp:') !== 0) {
            $number = 'whatsapp:' . $number;
        }
        
        return $number;
    }
    
    /**
     * Check if a message is valid to send based on WhatsApp rules
     *
     * @param string $to Recipient
     * @return bool Whether the message can be sent
     */
    public function canSendMessage($to)
    {
        // Check if user is opted in (implementation depends on your user storage)
        // You would typically check in your database if this user has opted in
        // and if the 24-hour window is still valid
        
        // For demonstration, we'll return true
        return true;
    }
    
    /**
     * Get WhatsApp message status
     *
     * @param string $messageSid The Twilio message SID
     * @return string Message status
     */
    public function getMessageStatus($messageSid)
    {
        try {
            $message = $this->client->messages($messageSid)->fetch();
            return $message->status;
        } catch (\Exception $e) {
            Log::error('Failed to get message status', [
                'messageSid' => $messageSid,
                'error' => $e->getMessage()
            ]);
            
            return 'unknown';
        }
    }
}