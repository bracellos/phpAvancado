<?php
$pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', 'root');

$produtos = $pdo->prepare("SELECT * FROM pdv_produtos WHERE from_categoria = {$_GET['cat']}");
$produtos->execute();
$resultado = $produtos->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($resultado);
echo '</pre>';