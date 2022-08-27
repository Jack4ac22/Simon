<?php

require_once 'FlowerAPIManager.php';

use Flowers\Utilities\FlowerAPIManager;

$flowerManager = new FlowerAPIManager();
echo $flowerManager->findAll();
