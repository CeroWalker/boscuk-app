<?php

use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    protected $proxies = '*'; // Eğer sadece belirli bir proxy varsa bunu belirtin.

    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
