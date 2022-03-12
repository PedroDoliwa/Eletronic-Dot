<?php
// Conexao
include("bd_conexao.php");

$consulta = "SELECT * FROM funcionario ORDER BY data_cadastro ";
$con = $conexao->query($consulta) or die($conexao->error);


// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login_gerente2.php');
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/dados.css">
    <title>Dados</title>
</head>
<body>

<h1 class="titulo">Dados</h1>

    <table class="tabela">
        <tr class="menu">
            <td>Nome</td>
            <td>Código</td>
            <td>Sexo</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>RG</td>
            <td>Observação</td>
            <td>Data de Cadastro</td>
            <td>Ação</td>
        </tr>
            <?php while($dado = $con->fetch_assoc()) {?>
        <tr class="campos">
            <td><?php echo $dado["nome"]; ?></td>   
            <td><?php echo $dado["codigo"]; ?></td>
            <td><?php echo $dado["sexo"]; ?></td>
            <td><?php echo $dado["email"]; ?></td>
            <td><?php echo $dado["telefone"]; ?></td>
            <td><?php echo $dado["cpf"]; ?></td>
            <td><?php echo $dado["rg"]; ?></td>
            <td><?php echo $dado["obs"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["data_cadastro"])); ?></td>
            <td>
                <a href="editar.php?cod=<?php echo $dado['cod']; ?> ">Editar</a> /
                <a href="javascript: if(confirm('Tem certeza que deseja excluir o(a) funcionário(a) <?php echo $dado['nome']; ?> ?'))     
                 location.href='deletar.php?cod=<?php echo $dado['cod']; ?>';">Excluir</a>
            </td>
        </tr>   
        <?php } ?>
    </table>
<br>
<div class="voltar">
    <form action="logout.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>