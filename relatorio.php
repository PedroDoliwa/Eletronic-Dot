<?php
// Conexao
include("bd_conexao.php");

$consulta = "SELECT * FROM leitura ORDER BY data desc, cod desc  ";
$con = $conexao->query($consulta) or die($conexao->error);

$consulta2 = "SELECT f.nome from funcionario f inner join leitura l on f.cod = l.cod_funcionario";
$con2 = $conexao->query($consulta2) or die($conexao->error);



// Sessão
session_start();



// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login_gerente4.php');
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/dados.css">
    <title>Relatório</title>
</head>
<body>

<h1 class="titulo">Relatório</h1>
<div class="rolagem">
    <table class="tabela">
        <tr class="menu">
            <td>Código</td>
            <td>Data</td>
            <td>Hora de Entrada</td>
            <td>Hora de Saida</td>
        </tr>
            <?php while($relatorio = $con->fetch_assoc() ) {?>
        <tr class="campos">
       
            <td><?php echo $relatorio["cod"] ?></td>   
            <td><?php echo date("d/m/Y", strtotime($relatorio["data"])); ?></td>
            <td><?php echo $relatorio["hora_entrada"]; ?></td>
            <td><?php echo $relatorio["hora_saida"]; ?></td>
         
        </tr>   
        <?php } ?>
    </table>
</div>    
<br>
<div class="voltar">
    <form action="logout.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>