<?php

namespace Alirezaabdolmaleki\VipSms\Drivers;

interface Driver
{
    function getConfig();
    function send();
    function getClient();
    function Client();
}
