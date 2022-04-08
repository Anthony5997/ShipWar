<?php

namespace App;

use App\Creational\DirectorFactory;
use App\HeroShip;
use App\Interfaces\IEnemyShip;
use App\Interfaces\IHeroShip;
use App\Interfaces\IShip;

class ShipWar
{
    protected $directorFactory;
    public $heroShip;

    public function __construct(DirectorFactory $directorFactory, HeroShip $heroShip){

        $this->heroShip = $heroShip;
        $this->directorFactory = $directorFactory;
    }


    public function getEnemysType(IShip $enemyShip):IEnemyShip
    {
        $enemyShipClassFound = $this->directorFactory->shipClassifier->categorize($enemyShip);
        $enemyShip = $this->directorFactory->shipsFactory->create($enemyShipClassFound, $enemyShip);
        
        return $enemyShip;
    }
    
    public function enemysAttackHero(IEnemyShip $enemyShip, IHeroShip $heroShip):void
    {
        $heroShip->receiveDamages($enemyShip->dealDamages());
    }
}