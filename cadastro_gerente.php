<?php

// Conexão
require_once 'bd_conexao.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login_gerente.php');
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cadastro_gerente.css">
    <title>Cadastro</title>
</head>
<body>

<h1 class="titulo">Página de Cadastro</h1>

<fieldset> 
<form action="cadastrar_gerente.php" method="post">
  
    <div>
      <p>  Nome:  &nbsp;&nbsp;<input name="nome" type="text" size="21" placeholder="  Nome Completo" required> </p>
    </div>
<br>
    <div>
       <p> Usuário: <input name="usuario" type="text"  required> </p>
    </div>
<br>
    <div>
        <p> Senha: &nbsp;&nbsp;<input name="senha" type="text" size="12" required>  </p>
    </div>
<br>
</fieldset>

    <div class="cadastrar">
    <button class="botao" type="submit">Cadastrar</button>
    </div>

</form>

<br>

<div class="voltar">
    <form action="dados_gerente.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>