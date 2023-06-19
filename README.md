
# Project Title

Vip Sms is a Laravel package to Send Sms message 


## Support Drivers

[**Raygan Sms** ](https://raygansms.com)

[**Mediana** ](https://mediana.ir)



## Acknowledgements

 - [Alireza Abdolmaleki](https://github.com/alirezaabdolmaleki)
 
## Installation

with composer 

```bash
  composer require alirezaabdolmaleki/vip-sms
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
## Related

Here are some related projects

[Awesome README](https://github.com/alirezaabdolmaleki/vip-sms)


## 🔗 Links
[![github](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://github.com/alirezaabdolmaleki)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/alirezaabdolmaleki/)


