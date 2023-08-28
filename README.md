
# Vip sms

Vip Sms is a Laravel package that provides a convenient and easy-to-use way to send SMS messages. With this package, developers can quickly integrate SMS functionality into their Laravel applications. Whether it's sending notifications, alerts, or marketing messages, Vip Sms simplifies the process and allows for seamless communication with users via SMS.

## Support Drivers

[**Raygan Sms** ](https://raygansms.com)

[**Mediana** ](https://mediana.ir)



## Installation

with composer 

```bash
  composer require alirezaabdolmaleki/vip-sms:1.1.1
```
    

    
## Usage

```config/app.php
//config/app.php


//providers
.
.
Alirezaabdolmaleki\VipSms\VipSmsServiceProvider::class,
.
.


//aliases
.
.
 'Sms' => Alirezaabdolmaleki\VipSms\Facades\VipSms::class
.
.

```


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`SMS_DRIVER`

`SMS_USERNAME`

`SMS_PASSWORD`

`SMS_SENDER_NUMBER`


 ---
if you want to publish config

`php artisan vendor:publish --provider=Alirezaabdolmaleki\VipSms\VipSmsServiceProvider`
## Documentation

Send Message 

```bash
use Alirezaabdolmaleki\VipSms\Facades\Sms;

Sms::send("09123456789", "your message");
```


Send Message by Pattern (`only mediana driver`)

```bash
use Alirezaabdolmaleki\VipSms\Facades\Sms;

   $datas = [
        'variable1' => "test variable 1",
        'variable1' => 'test variable 2',
    ];
    
Sms::sendByPattern("09123456789", $datas, 'c207ascp17oglp8');

```

## Related

Here are some related projects

[Awesome README](https://github.com/alirezaabdolmaleki/vip-sms)


## 🔗 Links
[![github](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://github.com/alirezaabdolmaleki)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/alirezaabdolmaleki/)


