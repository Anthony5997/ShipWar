<?php
namespace App\EnemyShips;
use App\Interfaces\IEnemyShip;
use App\Interfaces\IShip;

class EnemyShip implements IEnemyShip, IShip
{
    protected IShip $ship;

    public function __construct(IShip $ship){
        $this->ship = $ship;
    }

    public function dealDamages():int
    {
        return 10;
    }

    public static function resolve($ship):bool
    {
        return ($ship->shipType === "U");
    }

    public function getShipName():string
    {
        return "An Enemy Ship";
    }
}