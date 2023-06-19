<?php

namespace Alirezaabdolmaleki\VipSms\Drivers;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\Facades\Log;

class RayganSms extends SmsManager
{
    public function __construct()
    {
        $this->getUrl();
        $this->getConfig();
        $this->getClient();
    }


    function getConfig()
    {

        $this->username = config('sms.drivers.raygan_sms.username');
        $this->password = config('sms.drivers.raygan_sms.password');
        $this->senderNumber = config('sms.drivers.raygan_sms.sender_number');
    }


    function getUrl(): string
    {
        return "https://RayganSMS.com/SendMessageWithPost.ashx";
    }


    function getClient()
    {
        $this->client = new HttpClient([
            'timeout'         => 10,
            'connect_timeout' => 10,
        ]);
    }


    function send( $mobiles, $message)
    {

        // return ("send from raygan sms $mobiles  $message");
        $params = [
            'UserName'    => $this->username,
            'Password'    => $this->password,
            'PhoneNumber' => $this->senderNumber,
            'Smsclass'    => '1',
            'RecNumber'   => $mobiles,
            'MessageBody' => $message,
        ];
        $response = $this->client->request('POST', $this->getUrl(), ['form_params' => $params]);
        return $response = \json_decode((string) $response->getBody(), true);
    }
}
