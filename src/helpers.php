<?php

use Flabib\XRay\XRay;
use Illuminate\Contracts\Container\BindingResolutionException;

if (! function_exists('xray')) {
    /**
     * @param mixed ...$args
     *
     * @return \Flabib\XRay\XRay
     */
    function xray(...$args)
    {
        // TODO: Create Package For Laravel
        if (class_exists(XRay::class)) {
            try {
                return app(XRay::class)->args(...$args);
            } catch (BindingResolutionException $exception) {
                // this  exception can occur when requiring spatie/ray in an Orchestra powered
                // testsuite without spatie/laravel-ray's service provider being registered
                // in `getPackageProviders` of the base test suite
            }
        }

        $xrayClass = XRay::class;

        return (new $xrayClass())->args(...$args);
    }
}
