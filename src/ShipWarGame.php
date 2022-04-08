<?php
namespace App;
require '../vendor/autoload.php';
use App\Creational\DirectorFactory;
use App\Creational\ShipsFactory;
use App\ShipWar;
use App\HeroShip;

function RUN(){
    
    if(isset($_POST['ship'])){
        $heroLifePoints = isset($_POST['remainingPointsHeroShip']) ? intval($_POST['remainingPointsHeroShip']) : 200;
        $shipEnemyType = new Ship($_POST['ship']);
        $directorFactory = new DirectorFactory(new ShipsFactory, new ShipClassifier);
        $shipWar = new ShipWar($directorFactory, new HeroShip($heroLifePoints));
        $shipEnemyReadyForBattle = $shipWar->getEnemysType($shipEnemyType);
        $shipWar->enemysAttackHero($shipEnemyReadyForBattle , $shipWar->heroShip);
        
        header('Location: ../index.php?hero='.$shipWar->heroShip->lifePoints.'&enemy='.$shipEnemyReadyForBattle->getShipName());

    }else{

        // TODO ...
        
    }

}

RUN();

