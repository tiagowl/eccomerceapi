<?php

require_once 'Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios
    (nome, email, senha)
    VALUES
    ('$nome', '$email', '$senha')";

if($connect->query($sql) === TRUE){
    echo 'inserido com sucesso';

    header('Location: ../index.php');
}
     
}

?>