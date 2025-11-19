<?php

namespace Algmass\WhatsApp\Contracts;

interface WhatsAppDriverInterface
{
    public function sendMessage(string $to, string $message): array;
}
