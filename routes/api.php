<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::post('/whatsapp/send', 'App\Http\Controllers\WhatsAppController@sendMessage');
// Route::post('/whatsapp/webhook', 'App\Http\Controllers\WhatsAppController@handleWebhook');
// Route::post('/whatsapp/status', 'App\Http\Controllers\WhatsAppController@handleStatusCallback');

// WhatsApp Routes
Route::prefix('whatsapp')->group(function () {
    // Route to send a WhatsApp message
    Route::post('/send', [App\Http\Controllers\WhatsAppController::class, 'sendMessage']);
    
    // Webhook for receiving WhatsApp messages from Twilio
    Route::post('/webhook', [App\Http\Controllers\WhatsAppController::class, 'receiveMessage']);
});