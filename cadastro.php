<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8"><!--faz o site aceitar o padrao universao de caracteres com acentos e cedilha-->
      <!--SEO BASICO-->
      <meta name="author" content="Leonardo Barros e Luiz Dendena">
      <meta name="description" content="GBR SHOP">
      <meta name="robots" content="index, nofollow"><!--robos de busca peguem o que o usuario digitou no campo de busca, nofollow-->


      <!--Design Responsivo-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>GBR SHOP</title>
      <link rel="stylesheet" href="estilo.css"><!--importando o arquivo css-->


  </head>

  <body>
    <!--menu-->
    <header>
      <nav id="header">

          <div class="nav-wrapper">

              <div class="banner-logo">
                <h1><a href="index.php">GBR Shop</a></h1>
              </div>

              <ul class="menu-topo">
                  <li><a href="login.php">LOGIN</a></li>
                  <li><a href="cadastro.php">CADASTRE-SE</a></li>
                  <li><a href="#"><input type="image" src="icones/cart.png" class="cart" ></a></li>
              </ul>

              <form class="form-pesquisa">
                  <input id="text" type="text" placeholder="Burcar...">
                  <input type="image" src="icones/lupa.png" class="btn">
              </form>

          </div>
      </nav>
      <div id="linha">
      </div>


      <div class="banner-container">
        <div class="banner">
          <img src="slide/banner.jpg" alt="">


      </div>
    </div>


    </header>

    <!--Barra media de navegação por categorias-->
    <nav id="menu-meio">
      <div class="menu-marcas container">
        <ul class="marcas">
          <li><a href="#">ADIDAS</a></li>
          <li><a href="#">NIKE</a></li>
          <li><a href="#">VANS</a></li>
          <li><a href="#">RELOGIOS</a></li>
        </ul>
      </div>
    </nav>
<!--formulario cadastro-->
    <section id="form-cadastro">
      <?php

        $countErro = 0;

        if(isset($_POST['Confirmar'])){
          $nome = $_POST['nome'];
          $sobrenome = $_POST['Sobrenome'];
          $fone = $_POST['telefone'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];
          $checkSenha = $_POST['confirmasenha'];
          if(empty($nome)){
            $countErro ++;
            echo "Campo nome não preenchido <br>";
          }
          if(empty($sobrenome)){
            $countErro ++;
            echo "Campo sobrenome não preenchido <br>";
          }
          if(empty($fone)){
            $countErro ++;
            echo "Campo telefone não preenchido <br>";
          }
          if(empty($email)){
            $countErro ++;
            echo "Campo email não preenchido <br>";
          }
          if(empty($senha)){
            $countErro ++;
            echo "Campo senha não preenchido <br>";
          }
          if(empty($checkSenha)){
            echo "Confirme sua senha, por favor! <br>";
          }
          if($countErro == 0){
            $nomeCompleto = "$sobrenome.$nome" ;
            if($senha === $checkSenha){
             $sql = "insert into clientes (nome_cliente, fone, email, senha) values
                  ('$nomeCompleto', '$fone', '$email', '$senha');";
              include_once "conexaoPHP/conexao.php";
              if(mysqli_query($conexao, $sql)){
                session_start();
                $sql = "select email, senha from cliente where email = '$email' and senha = '$senha'";
                $resultado = mysqli_query($conexao, $sql);
                $_SESSION['usuario'] = $login;
                $_SESSION['inicio'] = date("d/m/Y H:i");
                header("Location: index-logado.php");
              }
            }
          }
          else{
              echo "Ocorreu um erro no cadastro";
              echo "<p><a href=\"index.php\">Voltar</a></p>";
          }
        }
      ?>

      <p>
        Insira seus dados e clique em confirmar
        para fazer o cadastro!
      </p>

    	<form action="" method="post">
        <ul>
	        <li>
            <label for="nome">Nome:</label><br>
            <input type="text" placeholder="Nome..." id="nome" name="nome">
          </li>
	        <li>
            <label for="sobrenome">Sobrenome:</label><br>
            <input type="text" placeholder="Sobrenome..." id="sobrenome" name="Sobrenome">
          </li>
	        <li>
            <label for="telefone">Telefone:</label><br>
            <input type="text" placeholder="Telefone..." id="telefone" name="telefone">
          </li>
	        <li>
            <label for="email">Email:</label><br>
            <input type="text" placeholder="Email..." id="email" name="email">
          </li>
	        <li>
            <label for="senha">Senha:</label><br>
            <input type="passowrd" placeholder="******..." id="senha" name="senha">
          </li>
	        <li>
            <label for="confirmasenha">Confirme sua senha:</label><br>
            <input type="passowrd" placeholder="******..." id="confirmasenha" name="confirmasenha">
          </li>
          <li>
            <button type="submit" name = "Confirmar" value="Confirmar">
          </li>
        </ul>

    	</form>

    </section>

    <!--Rodapé da Página-->
    <footer>
      <hr>
      <div class="conteudo-container">
        <ul class="conteudo">
          <li><a href="#">Dúvidas</a></li><br>
          <li><a href="#">Cadastre-se</a></li><br>
          <li><a href="#">Sobre Nós</a></li><br>
          <li><a href="#">Contato</a></li><br>
        </ul>
        <ul class="redes">
          <li><a href="#"><img src="icones/instagram.png"></a></li>
          <li><a href="#"><img src="icones/facebook.png"></a></li>
      </div>


    </footer>

</body>
</html>
