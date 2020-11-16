<?php

require_once "Vehicle.php";

class Bicycle extends Vehicle implements LightableInterface
{
    private bool $switchOn;
    private bool $switchOff;

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->currentSpeed = 0;
    }

    public function switchOn(): bool
    {
        if($this->currentSpeed > 10) {
            return $this->switchOn = true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return $this->switchOff = false;
    }
}
