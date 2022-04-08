<?php

namespace App;

use App\Exceptions\ShipUnknownException;
use App\Interfaces\IClassifiers;

class ShipClassifier implements IClassifiers
{
   public function getNameSpace():array
   {

   $fileList = glob('EnemyShips/*.php');
   $classListArray = [];
   foreach($fileList as $filename){
       if(is_file($filename)){
           $class = explode('/', $filename);
           $class2 = explode('.', $class[1]);
           $classList = $class2[0];
           array_push($classListArray, "\\App\\EnemyShips\\".$classList);
        }   
    }
   return $classListArray;
   }
   
   public function categorize($ship):string
   {
       $shipsType = $this->getNameSpace();
       foreach ($shipsType as $shipType) {
           
           if($shipType::resolve($ship)){
            return $shipType;
         }
      }
      throw new ShipUnknownException("Type de Bateau non valide.");
   }
}