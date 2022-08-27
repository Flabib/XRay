<?php

namespace Flabib\XRay\Payloads;

class PayloadFactory
{
    public static function factory(...$arguments): Payload
    {
        $payload = null;

        if (count($arguments) != 1) {
            $payload = new ArgumentPayload(...$arguments);
        }

        if (is_string($arguments[0])) {
            $payload = new StringPayload($arguments[0]);
        }

        if (is_array($arguments[0])) {
            $payload = new ArrayPayload($arguments[0]);
        }

        return $payload;
    }
}
