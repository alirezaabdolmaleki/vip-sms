<?php

namespace Alirezaabdolmaleki\VipSms\Facades;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Str::studly(config('sms.default'));
    }
}
