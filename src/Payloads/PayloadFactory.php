<?php

namespace Flabib\XRay\Payloads;

class PayloadFactory
{
    public static function factory(...$arguments): Payload
    {
        $payload = null;

        if (count($arguments) != 1) return new ArgumentPayload(...$arguments);

        $argument = $arguments[0];

        if (is_string($argument)) {
            $payload = new StringPayload($argument);
        }

        if (is_array($argument)) {
            $payload = new ArrayPayload($argument);
        }

        return $payload;
    }
}