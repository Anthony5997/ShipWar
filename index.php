<?php
require 'vendor/autoload.php';

$heroShipPoints = 200;
if(isset($_POST['remainingPointsHeroShip'])) {
    if($_POST['remainingPointsHeroShip'] != ''){
        $heroShipPoints = $_POST['remainingPointsHeroShip'];
    }
}

// $degatEnemyShip = 10;
// if(isset($_POST['ship'])){
//     if($_POST['ship'] == 'E'){
//         $degatEnemyShip = 10;
//     }
//     if($_POST['ship'] == 'R'){
//         $degatEnemyShip = 20;
//     }
//     if($_POST['ship'] == 'U'){
//         $degatEnemyShip = 30;
//     }
//     if($_POST['ship'] == 'B'){
//         $degatEnemyShip = 40;
//     }

//     $heroShipPoints = $heroShipPoints - $degatEnemyShip;

// }


?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="src/ShipWarGame.php" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?php echo  $_GET['hero'] ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_GET['enemy'])): ?>
            You've been hit by <?= $_GET['enemy'] ?>
        <?php endif; ?>
        </p>
        <p>
            You still have <?php echo $_GET['hero'] ?>
        </p>
    </body>
</html>
