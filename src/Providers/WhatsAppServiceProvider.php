<?php

namespace Algmass\WhatsApp\Providers {

    use Algmass\WhatsApp\Services\WhatsAppManager;
    use Algmass\WhatsApp\Services\WhatsAppService;
    use Illuminate\Support\ServiceProvider;

    class WhatsAppServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $this->mergeConfigFrom(__DIR__.'/../../config/whatsapp.php', 'whatsapp');

            $this->app->singleton('whatsapp.manager', function () {
                return new WhatsAppManager;
            });

            $this->app->singleton('whatsapp', function ($app) {
                return new WhatsAppService(
                    $app->make('whatsapp.manager')
                );
            });
        }

        public function boot()
        {
            // publish config
            $this->publishes([
                __DIR__.'/../../config/whatsapp.php' => config_path('whatsapp.php'),
            ], 'config');
        }
    }
}
