<?php

namespace App\Providers;

use App\Services\WhatsAppService;
use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;

class TwilioServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(WhatsAppService::class, function ($app) {
            $client = new Client(
                config('services.twilio.sid'),
                config('services.twilio.token')
            );
            
            return new WhatsAppService(
                $client,
                config('services.twilio.whatsapp_from')
            );
        });
    }

    public function boot()
    {
        //
    }
}