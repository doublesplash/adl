<?php
// auth-generated by DatabaseConfigHandler
// date: 01/20/2015 10:56:32

$database = new \Mojavi\Database\MongoDatabase();
$database->initialize(array('method' => 'dsn', 'dsn' => 'mongodb://localhost', 'database' => 'main', 'port' => 27017));
$this->databases['default'] = $database;
?>