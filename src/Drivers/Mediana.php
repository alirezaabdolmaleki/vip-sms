<?php

namespace Alirezaabdolmaleki\VipSms\Drivers;

use Illuminate\Support\Facades\Http;
use SoapClient;

class Mediana extends SmsManager
{
    public function __construct()
    {
        $this->getUrl();
        $this->getConfig();
        $this->getClient();
    }


    function getConfig()
    {
        $this->username = config('sms.drivers.mediana.username');
        $this->password = config('sms.drivers.mediana.password');
        $this->senderNumber = config('sms.drivers.mediana.sender_number');
    }

    function send($mobiles, $message)
    {
        return Http::get(
            $this->getUrl(),
            [
                'uname' =>  $this->username,
                'pass' =>  $this->password,
                'from' => $this->senderNumber,
                'to' => $mobiles,
                'msg' => $message
            ]
        );
    }

    function getUrl(): string
    {
        return "http://ippanel.com/class/sms/webservice/send_url.php";
    }


    function getClient()
    {
        $this->client = new Http();
    }
}
