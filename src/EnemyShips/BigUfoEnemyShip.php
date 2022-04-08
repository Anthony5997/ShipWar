<?php

namespace App\EnemyShips;

class BigUfoEnemyShip extends EnemyShip
{
    public function dealDamages():int
    {
        return 40;
    }

    public static function resolve($ship):bool
    {
        return ($ship->shipType === "B");
    }

    public function getShipName():string
    {
        return "A Big Ufo Enemy Ship";
    }
}