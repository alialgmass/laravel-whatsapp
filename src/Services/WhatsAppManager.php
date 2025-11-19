<?php

namespace Algmass\WhatsApp\Services;

use Algmass\WhatsApp\Drivers\GreenApiDriver;

class WhatsAppManager
{
    protected $drivers = [];

    public function driver($name = null)
    {
        $name = $name ?: config('whatsapp.default');

        if (! isset($this->drivers[$name])) {
            $config = config("whatsapp.connections.$name");

            $this->drivers[$name] = match ($name) {
                'greenapi' => new GreenApiDriver($config),
                default => throw new \Exception("Driver [$name] not supported"),
            };
        }

        return $this->drivers[$name];
    }

    public function send(string $to, string $message)
    {
        return $this->driver()->sendMessage($to, $message);
    }
}
