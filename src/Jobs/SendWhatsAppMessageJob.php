<?php

namespace Algmass\WhatsApp\Jobs;

use Algmass\WhatsApp\Services\WhatsAppService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsAppMessageJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(private string $phone, private string $message) {}

    public function handle(WhatsAppService $whatsapp)
    {
        $whatsapp->send($this->phone, $this->message);
    }
}
