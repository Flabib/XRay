<?php

namespace Flabib\XRay\Payloads;

class ArrayPayload extends Payload
{
    protected $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getType(): string
    {
        return 'array';
    }

    public function getContent(): array
    {
        return $this->array;
    }
}