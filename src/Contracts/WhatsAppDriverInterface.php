<?php

namespace Ali\WhatsApp\Contracts;

interface WhatsAppDriverInterface
{
    public function sendMessage(string $to, string $message): array;
}
