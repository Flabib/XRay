<?php

namespace Flabib\XRay\Traits;

trait XRayColors {
    public function green(): void
    {
        $this->payload->setColor('green');

        $this->send();
    }

    public function orange(): void
    {
        $this->payload->setColor('orange');

        $this->send();
    }

    public function red(): void
    {
        $this->payload->setColor('red');

        $this->send();
    }

    public function purple(): void
    {
        $this->payload->setColor('purple');

        $this->send();
    }

    public function blue(): void
    {
        $this->payload->setColor('blue');

        $this->send();
    }

    public function gray(): void
    {
        $this->payload->setColor('gray');

        $this->send();
    }

}