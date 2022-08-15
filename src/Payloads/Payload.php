<?php

namespace Flabib\XRay\Payloads;

use Flabib\XRay\Origin;

abstract class Payload
{
    abstract public function getType(): string;

    public function toArray(): array
    {
        return [
            'origin' => $this->getOrigin(),
            'content' => $this->getContent(),
            'type' => $this->getType(),
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function getOrigin(): array
    {
        return Origin::factory();
    }

    public function getContent(): array
    {
        return [];
    }
}