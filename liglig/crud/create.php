<?php
include '../global/config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $nomemae = $_POST["nomemae"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $fixo = $_POST["fixo"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];$sql = "INSERT INTO usuarios (nome, nascimento, sexo, nomemae, cpf, email, celular, fixo, login, senha, confirmar) VALUES ('$nome', '$nascimento', '$sexo', '$email', '$celular', '$fixo', '$login', '$senha', '$confirmar')";
}   
?>