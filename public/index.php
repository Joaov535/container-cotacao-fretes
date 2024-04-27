<?php
require_once 'vendor/autoload.php';

use core\Core;

header('Access-Control-Allow-Origin: 192.168.*');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

$core = new Core();
$core->run();



