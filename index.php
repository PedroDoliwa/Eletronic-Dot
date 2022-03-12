<?php

include("bd_conexao.php");

session_start();

// BOTAO ENTRAR

    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ponto</title>
    <link rel="stylesheet" href="estilos/inicio.css">
    
</head>

<body>

<header>
      <nav class="menu"> 
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="cadastro.php">&nbsp;&nbsp;Cadastro<br/>Funcionário</a></li>
          <li><a href="dados.php">Dados</a></li>
          <li><a href="relatorio.php">Relatório</a></li> 
          <li><a href="dados_gerente.php">Gerente</a></li>

        </ul>   
      </nav>
</header>

<div class="relogio">
    <div class="display">00:00:00</div>
</div>

<form action="relatorio_entrar.php" method="POST" >

    <main class="container">  
            
                <div class="codigo">
                    <a class="codigo">Código:</a>
                    <input class="insira" type="number" name="codigo" id="codigo" placeholder="  Insira seu código"  >
                </div>
                <div class="underline"></div>
               
    </main>
  
    <div class="entrar">
        <input class="entrar" type="submit" value="Entrar" name="bt-entrar">
    </div>

    <div class="sair">
        <input class="sair" type="submit" value="Sair" name="bt-sair">
    </div>

</form> 

    <img class="cacau" src="imagens/logo-cacau.png">
    <img class="trufa1 "src="imagens/trufa1">
    <img class="trufa2 "src="imagens/trufa2">
    <img class="trufa3 "src="imagens/trufa3">

</body>
<script src="JavaScript/mobile-navbar.js"></script>
<script src="JavaScript/relogio.js"></script>
</html>