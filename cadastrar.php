<?php
session_start();
include("bd_conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$codigo = mysqli_real_escape_string($conexao, trim($_POST["codigo"]));
$sexo = mysqli_real_escape_string($conexao, trim($_POST["sexo"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$telefone = mysqli_real_escape_string($conexao, trim($_POST["telefone"]));
$cpf = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
$rg = mysqli_real_escape_string($conexao, trim($_POST["rg"]));
$obs = mysqli_real_escape_string($conexao, trim($_POST["obs"]));


$sql_cadastro = mysqli_query($conexao , "INSERT INTO funcionario (nome, codigo, data_cadastro, sexo, email, telefone, cpf, rg, obs ) 
VALUES ('$nome','$codigo', NOW(), '$sexo','$email', '$telefone', '$cpf', '$rg', '$obs')");



if($sql_cadastro == true){

    echo "<script>  alert('Usuario Cadastrado com Sucesso');
    window.location.href='index.php';
    </script>";
    
    session_start();
    session_unset();
    session_destroy();
}
else{

    echo "<script>  alert('Falha no Cadastro');
    window.location.href='cadastro.php';
    </script>";
}
?>