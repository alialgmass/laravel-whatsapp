<?php

namespace Algmass\WhatsApp\Facades;

use Illuminate\Support\Facades\Facade;

class WhatsApp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'whatsapp';
    }
}
