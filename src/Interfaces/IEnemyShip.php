<?php
namespace App\Interfaces;

use App\Ship;

interface IEnemyShip
{
    public function dealDamages():int;
    public static function resolve(Ship $ship):bool;    
    public function getShipName():string;
}