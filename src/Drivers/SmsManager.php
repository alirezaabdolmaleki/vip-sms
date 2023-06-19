<?php

namespace Alirezaabdolmaleki\VipSms\Drivers;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\Facades\Http;

class SmsManager
{
    /** @var HttpClient */
    protected $client;
    protected $url;
    protected $username;
    protected $password;
    protected $senderNumber;



    protected $reciverNumber;
    protected $message;


    public function __construct()
    {
     //   $this->client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
    }


    function getClient()
    {
        $this->client = new Http();
    }


    public function via($senderNumber)
    {
        $this->senderNumber = $senderNumber;
    }


    public function message(String $message)
    {
        $this->message = $message;
    }




}
