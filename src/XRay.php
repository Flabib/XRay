<?php

namespace Flabib\XRay;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class XRay
{
    public function message(string $message)
    {
        $port = config('xray.port');
        $client  = new Client([
            'base_uri' => "http://localhost:$port/"
        ]);

        $caller = debug_backtrace()[1];

        $json = [
            'backtrace' => $caller['file'] . ':' . $caller['line'],
            'message' => $message,
        ];

        try {
            $res = $client->request('POST', '/xray', [
                'json' => $json,
                'headers' => [
                    'x-ray-key' => '@dev'
                ]
            ]);

            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase()
            ]);
        } catch (GuzzleException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], status: 500);
        }
    }
}
