<?php
require_once __DIR__.'/../vendor/autoload.php';
$config_path = __DIR__.'/../core/config/config.php';

use WebLab\Core as AMKCore; 

$app = AMKCore::getInstance();
$app->run($config_path);
