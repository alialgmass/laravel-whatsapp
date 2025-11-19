<?php

namespace Ali\WhatsApp\Jobs;
use Ali\WhatsApp\Services\WhatsAppService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SendWhatsAppMessageJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $payload;
    public $driverName;

    public function __construct(array $payload, ?string $driverName = null)
    {
        $this->payload = $payload;
        $this->driverName = $driverName;
    }

    public function handle(WhatsAppService $whatsapp)
    {
        // حاول تنفيذ الارسال — يمكن تسجيل الأخطاء والتكرار.
        $whatsapp->send($this->payload, null, $this->driverName);
    }
}