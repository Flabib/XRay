<?php

namespace Flabib\XRay;

class Origin
{
    public static function factory()
    {
        $caller = debug_backtrace()[1];

        return [
            'backtrace' => $caller['file'] . ':' . $caller['line'],
        ];
    }
}