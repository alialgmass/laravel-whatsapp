<?php

namespace Algmass\WhatsApp\Services;

class WhatsAppService
{
    public function __construct(protected WhatsAppManager $manager) {}

    public function send(string $to, string $message)
    {
        return $this->manager->send($to, $message);
    }
}
