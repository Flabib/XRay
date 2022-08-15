<?php

namespace Flabib\XRay\Payloads;

class StringPayload extends Payload
{
    protected $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getType(): string
    {
        return 'string';
    }

    public function getContent(): array
    {
        return [
            'message' => $this->message,
        ];
    }
}