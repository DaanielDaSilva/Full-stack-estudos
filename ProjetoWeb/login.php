<?php

include_once "conexao.php";

//vamos pegar o conteudo do usuarios e armazenar nas variaveis de memoria

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email= $_POST ['email'];
    $senha=$_POST ['senha'];
}

//vamos procurar este email e senha no banco de dados

$select=$con->query("SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'");

if ($result=$select->fetch()){
    //header('location: tarefas.php')
    echo ("usuario encontrado");
}

else {
    header('location: index.html');
}

?>