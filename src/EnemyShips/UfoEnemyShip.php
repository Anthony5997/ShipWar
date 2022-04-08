<?php

namespace App\EnemyShips;

class UfoEnemyShip extends EnemyShip
{
    public function dealDamages():int
    {
        return 30;
    }

    public static function resolve($ship):bool
    {
        return ($ship->shipType === "U");
    }

    public function getShipName():string
    {
        return "A Ufo Enemy Ship";
    }
}