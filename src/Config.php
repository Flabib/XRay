<?php

namespace Flabib\XRay;

class Config
{
    const config = [
        'PORT' => 1945,
        'HOST' => 'localhost'
    ];

    public static function get(string $key) {
        return self::config[$key];
    }
}