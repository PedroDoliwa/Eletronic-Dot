<?php
session_start();
include("bd_conexao.php");

$cod = $_POST['cod'];
$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$usuario = mysqli_real_escape_string($conexao, trim($_POST["usuario"]));
$senha = mysqli_real_escape_string($conexao, trim($_POST["senha"]));
$senha2 = md5($senha);



$sql_atualizar =mysqli_query($conexao , "UPDATE gerente SET nome='$nome', usuario='$usuario', senha='$senha2' WHERE cod='$cod' ");

if($sql_atualizar == true){

    echo "<script>  alert('Gerente Atualizado com Sucesso');
    window.location.href='dados_gerente.php';
    </script>";

}
else{

    echo "<script>  alert('Falha na Edição');
    window.location.href='dados_gerente.php';
    </script>";
}
?>