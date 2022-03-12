<?php

include('bd_conexao.php');

$cod = $_GET['cod'];

$sql_consulta = mysqli_query($conexao , "SELECT * FROM  gerente WHERE cod = '$cod' ");

$dados = mysqli_fetch_array($sql_consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cadastro_gerente.css">
    <title>Edição</title>
</head>
<body>

<h1 class="titulo">Página de Edição</h1>

<fieldset> 
<form action="atualizar_gerente.php" method="post">
  
<input type="hidden" name="cod" value='<?php echo $dados[0]?>' >

    <div>
      <p>  Nome: &nbsp;<input name="nome" type="text" size="21" value='<?php echo $dados[1]?>' required> </p>
    </div>
<br>
    <div>
       <p> Usuário: <input name="usuario" type="text" value='<?php echo $dados[2]?>' required > </p>
    </div>
<br>
    <div>
    <p> Senha: &nbsp;<input name="senha" type="password" required >  </p>
    </div>
<br>
</fieldset>

    <div class="cadastrar">
    <button class="botao" type="submit">Atualizar</button>
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