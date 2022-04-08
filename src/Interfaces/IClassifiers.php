<?php

namespace App\Interfaces;

interface IClassifiers
{
   public function getNameSpace():array;
   public function categorize($ship):string;
}