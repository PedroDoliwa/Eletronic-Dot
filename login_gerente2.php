<?php
// Conexão
require_once 'bd_conexao.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $usuario = mysqli_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($usuario) or empty($senha)):
        $erros[] = "<li> O campo Usuário/Senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT usuario FROM gerente WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexao, $sql);


        if(mysqli_num_rows($resultado) > 0 ):
            $senha = md5($senha);
            $sql = "SELECT * FROM gerente WHERE usuario = '$usuario' AND senha = '$senha' ";
            $resultado = mysqli_query($conexao, $sql);

            
                if(mysqli_num_rows($resultado) == 1 ):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($conexao);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['$id'];
                    header('Location: dados.php');
                else: 
                    $erros[] = "<li> Usuário e senha não conferem </li><br>";
                
                endif;    
        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;    


    endif;

endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login do Gerente</title>
    <link rel="stylesheet" href="estilos/login_gerente.css">    
</head>
<body>

    <h2 class="titulo"> Login Gerente </h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<main class="container"> 

<?php
if(!empty ($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>


<a>Usuário:</a><input class="botao5" type="text" name="usuario"> <br/>
<a>Senha:</a>&nbsp;  <input class="botao5" type="password" name="senha"> <br/>
</main>


<div class="entrar">
<button class="botao" type="submit" name="btn-entrar"> Entrar </button>
</div>

</form>


<form action="index.php">
<div class="sair">    
<button class="botao" type="submit" name="btn-voltar"> Voltar </button>
</div>
</form>

<img class="logo" src="imagens/sigla-cacau2">

</body>
</html>