<?php

namespace Flabib\XRay\Payloads;

class ArgumentPayload extends Payload
{
    protected array $arguments;

    public function __construct(...$arguments)
    {
        $this->arguments = $arguments;
    }

    public function getType(): string
    {
        return 'argument';
    }

    public function getContent(): array
    {
        $contents = [];

        foreach ($this->arguments as $argument) {
            $content = PayloadFactory::factory($argument)->toArray();

            unset($contents["origin"]);
            array_push($contents, $content);
        }

        return $contents;
    }
}