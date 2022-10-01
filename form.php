<?php

$db = "imobiliaria";
$host = "localhost";
$user = "root";
$senha = "imobiliaria";

//Informações do Formulário
$tipo = $_POST['Tipo'];
$quartos = $_POST['Quartos'];
$preco = $_POST['Preço'];
$quintal = $_POST['Quintal'];
$descricao = $_POST['Descrição'];

echo($tipo.' '.$quartos.' '.$preco.' '.$quintal.' '.$descricao);


$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $senha);