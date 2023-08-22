<?php

namespace Alirezaabdolmaleki\VipSms\Drivers;

use Exception;
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

    function send($mobile, $message)
    {
        return Http::get(
            $this->getUrl(),
            [
                'uname' =>  $this->username,
                'pass' =>  $this->password,
                'from' => $this->senderNumber,
                'to' => $mobile,
                'msg' => $message
            ]
        );
    }


    // function sendByPattern($mobile, $datas,$pattern)
    // {
    //     return Http::get(
    //         $this->getUrl(),
    //         [
    //             'uname' =>  $this->username,
    //             'pass' =>  $this->password,
    //             'from' => $this->senderNumber,
    //             'to' => $mobile,
    //             'msg' => $message
    //         ]
    //     );
    // }


    function sendByPattern($mobile, $datas,$pattern)
    {
        try {
            $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");

            return $client->sendPatternSms($this->senderNumber,
             $mobile,
             $this->username, $this->password,
              $pattern, $datas);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
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
