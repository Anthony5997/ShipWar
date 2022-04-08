<?php

namespace App\Creational;

use App\Interfaces\IClassifiers;

class DirectorFactory
{

        public ShipsFactory $shipsFactory;
        public IClassifiers $shipClassifier;
    
        function __construct(ShipsFactory $shipsFactory, IClassifiers $shipClassifier)
        {
            $this->shipsFactory = $shipsFactory;
            $this->shipClassifier = $shipClassifier;
        }
    
}

