<?php

namespace Flabib\XRay;

use Flabib\XRay\Payloads\ArrayPayload;
use Flabib\XRay\Payloads\PayloadFactory;
use Flabib\XRay\Payloads\ArgumentPayload;
use Flabib\XRay\Traits\XRayColors;
use GuzzleHttp\Exception\GuzzleException;
use voku\helper\ASCII;

class XRay
{
    use XRayColors;

    protected $client, $payload;

    public function __construct()
    {
        $this->client = Client::factory();
    }

    public function args(...$arguments): self
    {
        $this->payload = PayloadFactory::factory(...$arguments);

        return $this;
    }

    public function send(): void
    {
        try {
            $this->client->request('POST', '/xray', [
                'json' => $this->payload->toArray(),
                'headers' => [
                    'x-ray-key' => '@dev'
                ]
            ]);
        } catch (GuzzleException $e) {}
    }
}
