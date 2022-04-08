<?php
namespace App;

use App\Interfaces\IShip;
use App\Interfaces\IHeroShip;

class HeroShip implements IHeroShip, IShip 
{
    public int $lifePoints; 

    public function __construct($lifePoints){
        $this->lifePoints = $lifePoints;
    }

    public function receiveDamages(int $damages):void
    {
        $this->lifePoints -= $damages;
    }

}