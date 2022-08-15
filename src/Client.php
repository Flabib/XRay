<?php

namespace Flabib\XRay;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    public static function factory()
    {
        $host = Config::get('host');
        $port = Config::get('port');

        return new GuzzleClient([
            'base_uri' => "http://$host:$port/"
        ]);
    }
}