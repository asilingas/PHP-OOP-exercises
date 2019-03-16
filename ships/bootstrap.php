<?php

require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';

$configuration = [
    'db_dsn' => 'mysql:host=localhost:3307;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'root'
];