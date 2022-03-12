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
    <link rel="stylesheet" href="estilos/cadastro_fun.css">
    <title>Cadastro</title>
</head>
<body>


<h1 class="titulo">Página de Cadastro</h1>

<fieldset> 
<form action="cadastrar.php" method="post">

    <div>
      <p>  Nome: &nbsp;<input name="nome" type="text" size="21" placeholder="  Nome Completo"> </p>
    </div>
<br>
    <div>
       <p> Código: <input name="codigo" type="number"  > </p>
    </div>
<br>
    <div>
    <p> Sexo:&nbsp;&nbsp;&nbsp;
    <select name="sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>
    </p>
    </div>
<br>
    <div>
    <p> E-mail: &nbsp;<input name="email" type="email"> </p>
    </div>
<br>
    <div>
    <p> Telefone: <input name="telefone" type="text" size="11">   </p>
    </div>
<br>
    <div>
   <p> CPF: &nbsp;&nbsp;<input name="cpf" type="text" size="12">  </p>
    </div>
<br>
    <div>
    <p> RG: &nbsp;&nbsp;&nbsp;&nbsp;<input name="rg" type="text" size="12">  </p>
    </div>
<br>
<br>
    <div>
   <h3>Observação</h3>
<br>
    <p>&nbsp;&nbsp;<textarea name="obs" rows="6" cols="35"  placeholder="Faça uma descrição">  </textarea></p>
    </div>
<br>

</fieldset>

    <div class="cadastrar">
    <button class="botao" type="submit">Cadastrar</button>
    </div>

</form>

<br>

<div class="voltar">
    <form action="logout.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>