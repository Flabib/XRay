<?php

namespace Flabib\XRay;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    public static function factory()
    {
        return new GuzzleClient([
            'base_uri' => "http://localhost:$port/"
        ]);
    }
}