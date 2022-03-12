<?php

include("bd_conexao.php");

$cod = $_GET['cod'];

$sql_code = "DELETE FROM funcionario WHERE cod = '$cod'";
$sql_query = $conexao->query($sql_code) or die($conexao->error);

    if($sql_query){
        echo "
        <script>
        location='dados.php';
        </script>";
    }else{
        echo "
        <script>
        alert('Não foi possível deletar o funcionário.');
        location='dados.php';
        </script>";
    }
?>