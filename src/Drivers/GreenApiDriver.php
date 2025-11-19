<?php

namespace Algmass\WhatsApp\Drivers;

use Algmass\WhatsApp\Contracts\WhatsAppDriverInterface;
use GreenApi\Client;

class GreenApiDriver implements WhatsAppDriverInterface
{
    protected $client;

    public function __construct(array $config)
    {
        $this->client = new Client($config['instance_id'], $config['token']);
    }

    public function sendMessage(string $to, string $message): array
    {
        return $this->client->message()->send([
            'chatId' => $to . '@c.us',
            'message' => $message,
        ]);
    }
}
