<?php 
use pdo\Mysql;
require_once "AutoLoad.php";
$load = new AutoLoad();
const config = [
    "host" => "localhost",
    "dbName" => "entra21",
    "username" => "root",
    "password" => "root" 
];
session_start();