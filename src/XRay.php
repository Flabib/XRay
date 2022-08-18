<?php

namespace Flabib\XRay;

use Flabib\XRay\Payloads\ArrayPayload;
use Flabib\XRay\Payloads\PayloadFactory;
use Flabib\XRay\Payloads\ArgumentPayload;

class XRay
{
    protected $client, $payload;

    public function __construct()
    {
        $this->client = Client::factory();
    }

    public function send(...$arguments): self
    {
        $this->payload = PayloadFactory::factory(...$arguments);

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
