<?php

use SorenmesselierSentis\InfernalDependance\Api;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new Api();

echo $api->getName("Lilith");