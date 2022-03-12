<?php
session_start();
include("bd_conexao.php");

$cod = $_POST['cod'];
$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$codigo = mysqli_real_escape_string($conexao, trim($_POST["codigo"]));
$sexo = mysqli_real_escape_string($conexao, trim($_POST["sexo"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$telefone = mysqli_real_escape_string($conexao, trim($_POST["telefone"]));
$cpf = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
$rg = mysqli_real_escape_string($conexao, trim($_POST["rg"]));
$obs = mysqli_real_escape_string($conexao, trim($_POST["obs"]));


$sql_atualizar =mysqli_query($conexao , "UPDATE funcionario SET nome='$nome', codigo='$codigo', sexo='$sexo', email='$email', telefone='$telefone', cpf='$cpf', rg='$rg', obs='$obs' WHERE cod='$cod' ");


if($sql_atualizar == true){

    echo "<script>  alert('Usuario Atualizado com Sucesso');
    window.location.href='dados.php';
    </script>";

}
else{

    echo "<script>  alert('Falha na Edição');
    window.location.href='dados.php';
    </script>";
}
?>