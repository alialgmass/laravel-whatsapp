<?php

namespace Algmass\WhatsApp\Providers {

    use Illuminate\Support\ServiceProvider;
    use Algmass\WhatsApp\Services\WhatsAppService;
    use Algmass\WhatsApp\Services\WhatsAppManager;

    class WhatsAppServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $this->mergeConfigFrom(__DIR__.'/../../config/whatsapp.php', 'whatsapp');

            $this->app->singleton('whatsapp.manager', function () {
                return new WhatsAppManager();
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
                __DIR__.'/../../config/whatsapp.php' => config_path('whatsapp.php')
            ], 'config');
        }
    }
}
