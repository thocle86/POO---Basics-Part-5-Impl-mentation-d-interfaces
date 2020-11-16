<?php

require_once "Vehicle.php";

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = ['fuel', 'electric'];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;
    private bool $start = false;
    private bool $switchOn;
    private bool $switchOff;

    public function switchOn(): bool
    {
        return $this->switchOn = true;
    }

    public function switchOff(): bool
    {
        return $this->switchOff = false;
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake() {
        if ($this->hasParkBrake === false) {
            $hasParkBrake = true;
        } else {
            $hasParkBrake = false;
        }
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start() {
        if ($this->hasParkBrake === true) {
            throw new Exception ("ATTENTION !!! Frein à main enclenché");
        }
        if ($this->start === false) {
            $start = true;
        }
        $this->start = $start;
    }
}
