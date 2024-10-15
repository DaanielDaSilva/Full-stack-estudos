<?php

$host="localhost";
$db="tarefas";
$user="root";
$password="";

try {
    $con=new PDO("mysql:host=$host;dbname=$db", username: $user, password: $password);
    // echo "conexao ok";
}

catch (PDOException $e) {
    echo "Erro ao conectar;" .$e->getMessage();
}

?>
