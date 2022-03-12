<?php
session_start();
include("bd_conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$usuario = mysqli_real_escape_string($conexao, trim($_POST["usuario"]));
$senha = mysqli_real_escape_string($conexao, trim($_POST["senha"]));
$senha2 = md5($senha);



$sql_cadastro = mysqli_query($conexao , "INSERT INTO gerente (nome, usuario, senha) VALUES ('$nome','$usuario', '$senha2')");

if($sql_cadastro == true){

    echo "<script>  alert('Gerente Cadastrado com Sucesso');
    window.location.href='dados_gerente.php';
    </script>";
}
else{

    echo "<script>  alert('Falha no Cadastro');
    window.location.href='dados_gerente.php';
    </script>";


}


?>