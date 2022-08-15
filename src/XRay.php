<?php

namespace Flabib\XRay;

use Flabib\XRay\Payloads\StringPayload;

class XRay
{
    protected $client, $payload;

    public function __construct()
    {
        $this->client = Client::factory();
    }

    public function send(...$arguments): self
    {
        if (count($arguments) != 1) return $this;

        $argument = $arguments[0];

        if (is_string($argument)) {
            $this->payload = new StringPayload($argument);
        }

        try {
            $this->client->request('POST', '/xray', [
                'json' => $this->payload->toArray(),
                'headers' => [
                    'x-ray-key' => '@dev'
                ]
            ]);
        } catch (GuzzleException $e) {}

        return $this;
    }
}
