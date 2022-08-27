<?php

namespace Flabib\XRay\Payloads;

use Flabib\XRay\Origin;
use voku\helper\ASCII;

abstract class Payload
{
    protected ?string $color = null;

    abstract public function getType(): string;

    public function toArray(): array
    {
        return [
            'origin' => $this->getOrigin(),
            'content' => $this->getContent(),
            'meta' => [
                'type' => $this->getType(),
                'color' => $this->color ?: 'gray',
            ],
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
