<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('php-firebase-523bb-firebase-adminsdk-7ttvb-7fc32ca3d5.json')->withDatabaseUri('https://php-firebase-523bb-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>