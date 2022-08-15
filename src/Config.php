<?php

namespace Flabib\XRay;

class Config
{
    const config = [
        'port' => 1945,
        'host' => 'localhost'
    ];

    public static function get(string $key) {
        return self::config[$key];
    }
}