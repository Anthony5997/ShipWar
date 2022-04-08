<?php
namespace App\Creational;

use App\Interfaces\IEnemyShip;

class ShipsFactory{

    public function create($ship, $shipType):IEnemyShip
    {
        return new $ship($shipType);
    }
}