<?php
namespace App;
use App\Interfaces\IShip;

class Ship implements IShip
{
    public string $shipType;

    public function __construct($shipType)
    {
        $this->shipType = $shipType;
    }

    public function __toString(): string
    {
        return "{$this->shipType}";
    }
}