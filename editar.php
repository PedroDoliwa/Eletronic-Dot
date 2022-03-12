<?php

include('bd_conexao.php');

$cod = $_GET['cod'];

$sql_consulta = mysqli_query($conexao , "SELECT * FROM  funcionario WHERE cod = '$cod' ");

$dados = mysqli_fetch_array($sql_consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cadastro_fun.css">
    <title>Edição</title>
</head>
<body>

<h1 class="titulo">Página de Edição</h1>

<fieldset> 
<form action="atualizar.php" method="post">
  
<input type="hidden" name="cod" value='<?php echo $dados[0]?>' >

    <div>
      <p>  Nome: &nbsp;<input name="nome" type="text" size="21" value='<?php echo $dados[1]?>'> </p>
    </div>
<br>
    <div>
       <p> Código: <input name="codigo" type="number" value='<?php echo $dados[2]?>' > </p>
    </div>
<br>
    <div>
    <p> Sexo:&nbsp;&nbsp;&nbsp;
    <select name="sexo"  >
        <option value='<?php echo $dados[4]?>'><?php echo $dados[4]?></option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>
    </p>
    </div>
<br>
    <div>
    <p> E-mail: &nbsp;<input name="email" type="email" value='<?php echo $dados[5]?>'> </p>
    </div>
<br>
    <div>
    <p> Telefone: <input name="telefone" type="text" size="11" value='<?php echo $dados[6]?>'>   </p>
    </div>
<br>
    <div>
   <p> CPF: &nbsp;&nbsp;<input name="cpf" type="text" size="12" value='<?php echo $dados[7]?>'>  </p>
    </div>
<br>
    <div>
    <p> RG: &nbsp;&nbsp;&nbsp;&nbsp;<input name="rg" type="text" size="12" value='<?php echo $dados[8]?>'>  </p>
    </div>
<br>
<br>
    <div>
   <h3>Observação</h3>
<br>
    <p>&nbsp;&nbsp;<textarea  placeholder="Faça uma descrição"  name="obs" rows="6" cols="35" > <?php  echo $dados[9] ?> </textarea></p>
    </div>
<br>

</fieldset>
    <div class="cadastrar">
    <button class="botao" type="submit">Atualizar</button>
    </div>
</form>
<br>

<div class="voltar">
    <form action="dados.php">
       <input class="botao" type="submit" value="Voltar">
    </form>
</div>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>