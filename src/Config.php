<?php

namespace Flabib\XRay;

class Config
{
    public static function get(string $key) {
        switch ($key) {
            case 'port':
                return config('xray.port') ?: 1945;
            case 'host':
                return config('xray.host') ?: 'localhost';
        }
    }
}