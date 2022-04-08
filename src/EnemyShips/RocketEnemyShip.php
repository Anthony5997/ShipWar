<?php

namespace App\EnemyShips;

class RocketEnemyShip extends EnemyShip
{
    public function dealDamages():int
    {
        return 20;
    }
    
    public static function resolve($ship):bool
    {
        return ($ship->shipType === "R");
    }

    public function getShipName():string
    {
        return "A Rocket Enemy Ship";
    }
}