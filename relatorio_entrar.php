<?php
session_start();
include("bd_conexao.php");

if(isset($_POST['bt-entrar'])):
    $erros = array();
    $codigo = mysqli_escape_string($conexao, $_POST['codigo']);

    if(empty($codigo)):
         echo "<script> alert('O campo Código precisa ser preenchido.');
                window.location.href='index.php'; </script>";
    else:
        $sql = "SELECT codigo FROM funcionario WHERE codigo = '$codigo'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0 ):
            $sql_entrar = mysqli_query($conexao, "INSERT INTO leitura (data , hora_entrada, hora_saida) VALUES ( NOW(), NOW(), '00:00:00') ");
            $resultado = mysqli_query($conexao, $sql_entrar);
            $last_cod = $conexao->insert_id;

            echo "<script> alert('Sucesso.');
                window.location.href='index.php'; </script>";

        else: 
            echo "<script> alert('Código inválido.');
                window.location.href='index.php'; </script>";
        endif;    
    endif;    
endif;


if(isset($_POST['bt-sair'])):
    $erros = array();
    $codigo = mysqli_escape_string($conexao, $_POST['codigo']);

    if(empty($codigo)):
         echo "<script> alert('O campo Código precisa ser preenchido.');
                window.location.href='index.php'; </script>";
    else:
        $sql = "SELECT codigo FROM funcionario WHERE codigo = '$codigo'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0 ):
            $sql_entrar = mysqli_query($conexao, " UPDATE leitura set hora_saida=NOW() ORDER BY cod DESC LIMIT 1 ");
            $resultado = mysqli_query($conexao, $sql_entrar);
            echo "<script> alert('Sucesso.');
            window.location.href='index.php';
             </script>";
        else: 
            echo "<script> alert('Código inválido.');
                window.location.href='index.php'; </script>";
        endif;    
    endif;    
endif;

?>