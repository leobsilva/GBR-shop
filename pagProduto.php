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
      <script src="mascara_login.ls"></script>


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
                  <li><input type="image" src="icones/cart.png" alt="cart" class="cart" ></li>
              </ul>

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

<!--pagina do produto-->
 <?php
  include_once "conexaoPHP/conexao.php";
  $sql = "select nome_produto, preco, marca, imagem from produto where id_produto = ;";
  $resultado = mysqli_query($conexao, $sql);
 ?>

  <main class="carrinho container">
    <div class="parte-esquerda">

      <div class="imagem-produto"> <!--parte esquerda-->
      <!--<img src="tenis/vans/tenis_vans_era_preto_masculino_2_.jpg" alt="" height="60%" width="60%">-->
      <?echo $resultado[4]?>
      </div>
    </div>

    <div class="parte-direita">
      <div class="desc-produto"> <!--parte direita-->

        <span>=<?echo $resultado[2]?></span>
        <h1>=<?echo $resultado[0]?></h1><br><hr>
        <br><p>Coleçao classic da Vans, marca que se construiu sobre esse modelo no ano de 1987 na California</p><br><hr>

      </div>

      <div class="tamanhos">
        <span>Tamanhos</span><br>
        <form action="" method="post">
          
          <?php
            $sql = "insert into tamanho (numero, id_produto) values ('$number', '$id')";
            $resultado = mysqli_query($conexao, $sql);
            if(isset($_POST['b1'])) $number = $_POST['b1'];
            if(isset($_POST['b2'])) $number = $_POST['b2'];
            if(isset($_POST['b3'])) $number = $_POST['b3'];
            if(isset($_POST['b4'])) $number = $_POST['b4'];
            if(isset($_POST['b5'])) $number = $_POST['b5'];
            if(isset($_POST['b6'])) $number = $_POST['b6'];
            if(isset($_POST['b7'])) $number = $_POST['b7'];

          ?>

          <button name="b1">38</button>
          <button name="b2">39</button>
          <button name="b3">40</button>
          <button name="b4">41</button>
          <button name="b5">42</button>
          <button name="b6">43</button>
          <button name="b7">44</button>

        </form>

      </div>

      <div class="preço">
        <span>=<?echo $resultado[1]?></span>
      <a href="carrinho.html" class="add-carrinho">Comprar</a>

      </div>

    </div>

  </main>

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
