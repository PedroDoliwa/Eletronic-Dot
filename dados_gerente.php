<?php
// Conexao
include("bd_conexao.php");

$consulta = "SELECT * FROM gerente ORDER BY nome ";
$con = $conexao->query($consulta) or die($conexao->error);


// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login_gerente3.php');
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/dados_gerente.css">
    <title>Dados</title>
</head>
<body>

<h1 class="titulo">Dados Gerente</h1>

    <table class="tabela">
        <tr class="menu">
            <td>Nome</td>
            <td>Usuário</td>
            <td>Senha</td>
            <td>Ação</td>
        </tr>
            <?php while($dado = $con->fetch_assoc()) {?>
        <tr class="campos">
            <td><?php echo $dado["nome"]; ?></td>   
            <td><?php echo $dado["usuario"]; ?></td>
            <td><?php echo $dado["senha"]; ?></td>
            <td>
                <a href="editar_gerente.php?cod=<?php echo $dado['cod']; ?> ">Editar</a> /
                <a href="javascript: if(confirm('Tem certeza que deseja excluir o(a) gerente <?php echo $dado['nome']; ?> ?'))     
                 location.href='deletar_gerente.php?cod=<?php echo $dado['cod']; ?>';">Excluir</a>
            </td>
        </tr>   
        <?php } ?>
    </table>
<br>

<div class="cadastrar">
    <form action="cadastro_gerente.php">
       <input class="botao" type="submit" value="Cadastrar">
    </form>
</div>

<div class="voltar">
    <form action="logout.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>