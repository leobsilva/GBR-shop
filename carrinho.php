<?php
session_start();
?>
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

      <title id="title">GBR SHOP</title>
      <link rel="stylesheet" href="estilo.css"><!--importando o arquivo css-->


  </head>
    <body>
      <!--menu-->
      <header>
        <nav id="header">

            <div class="nav-wrapper">

                <div class="banner-logo">
                  <h1><a href="index.html">GBR Shop</a></h1>
                </div>

                <?
                if(isset($_SESSION['usuario'])){
                ?>
                  <ul class="menu-topo">
                    <li><a><? echo $_SESSION['usuario'] ?></a></li>
                    <li><input type="image" src="icones/cart.png" alt="cart" class="cart" ></li>
                  </ul>
                <?
                }else {
                ?>
                  <ul class="menu-topo">
                      <li><a href="login.php">LOGIN</a></li>
                      <li><a href="cadastro.php">CADASTRE-SE</a></li>
                      <li><a href="#"><input type="image" src="icones/cart.png" alt="" class="cart" ></a></li>
                  </ul>
                <?}?>
                
                <form class="form-pesquisa">
                    <input id="text" type="text" placeholder="Burcar...">
                    <input type="image" src="icones/lupa.png" alt="btn" class="btn">
                </form>

            </div>
        </nav>
        <div id="linha">
        </div>


        <div class="banner-container">
          <div class="banner">
            <img src="slide/banner.jpg" alt="banner">


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

      <!--carrinho-->
      <?php
        include_once "conexaoPHP/conexao.php";
        $sql_produtos = "select imagem, nome, preco from produtos where id_produto = ";
        $sql_tamanho = "select numero from tamanho join produto where id_produto = ";
        $sql_pedidos = "select qntd from pedido join cliente where id_cliente = ";
        $sql_clientes = "select nome, fone, email from cliente where id_cliente =";

      ?>
      <div class="carinho-produto container">
        <br><span>CARRRINHO</span><br>
        <div class="linha-produto">
            <div class="img-carrinho-produto">
              <a href="#">
              <img src="tenis/vans/tenis_vans_era_preto_masculino_2_.jpg" alt="" height="150px" width="150px"></a>
              <?php echo $sql_produtos[0];?>
            </div>

            <div class="detalhe-produto-carrinho">
              <p class="produto-carrinho-nome">=<? echo $sql_produtos[1]; ?></p>
              <p class="produto-carrinho-tamanho">=<? echo $sql_tamanho; ?></p>

            </div>

            <div class="preço-produto-carrinho">
              <p class="produto-carrinho-preco">=<? echo $sql_produtos[3]; ?></p><br>
              <label for="qnt">Quantidade: <?php echo $sql_pedidos; ?></label><br>
              <input type="number" name="points" min="0" max="10" step="1" value="0" class="qnt-produto-carrinho">
            </div>

        </div>

      </div>

      <div class="info-cliente container">
        <span>Info:</span>
        <div class="nome-cliente">
          <br><p>Nome: <? echo $sql_clientes[0]; ?></p><br>
        </div>
        <div class="telefone-cliente">
          <p>Fone: <? echo $sql_cliente[1]; ?></p><br>
        </div>
        <div class="email-cliente">
          <p>Email: <? echo $sql_clientes[2]; ?></p><br><br>
        </div>
      </div>


      <!--Rodapé da Página-->
      <footer>
        <hr>
        <div class="conteudo-container">
          <ul class="conteudo">
            <li><a href="#">Dúvidas</a></li>
            <li><a href="#">Cadastre-se</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
          <ul class="redes">
            <li><a href="#"><img src="icones/instagram.png" alt=""></a></li>
            <li><a href="#"><img src="icones/facebook.png" alt=""></a></li>
          </ul>
        </div>


      </footer>
    </body>
</html>
