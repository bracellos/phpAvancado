<?php
// header("Access-Control-Allow-Origin: *");
session_start();

$_SESSION['TESTE'] = $_REQUEST;
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

?>