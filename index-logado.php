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
<?php
session_start();
 ?>

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
                  <li>=<? echo "Bem-Vindo".$_SESSION['nome'] ?></li>
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
          <li><a href="#adidas">ADIDAS</a></li>
          <li><a href="#nike">NIKE</a></li>
          <li><a href="#vans">VANS</a></li>
          <li><a href="#">RELOGIOS</a></li>
        </ul>
      </div>
    </nav>


    <!--Caixa de Produtos em Destaque-->
   <div id = "adidas">
    <h2>Adidas</h2><hr>

    <div class="produtos-destaque container">

      <div id="0014" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/adidas/adidas-Originals-Tênis-adidas-Originals-Nmd-Cinza-9247-3173664-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Adidas NMD</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0015" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/adidas/adidas-Originals-Tênis-adidas-Originals-Nmd-Preto-9268-7273664-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Adidas NMD Preto</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0016" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/adidas/adidas-Originals-Tênis-adidas-Originals-Nmd_R1-Stlt-Parley-Pk-Preto-7962-3268544-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Adidas NMD_R1 STLT</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0017" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/adidas/adidas-Tênis-adidas-Nmd_Ts1-Pk-Preto-7640-4727044-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Adidas NMD_TSI PK Preto</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0018" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/adidas/adidas-Tênis-adidas-Nmd_Ts1-Pk-Verde-7649-5627044-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Adidas NMD_TSI PK Verde</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

    </div>
  </div>

   <div id="nike">
    <h2>Nike</h2><hr>
    <div class="produtos-destaque container">

      <div id="0009" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/nike/Branco-7725-7791054-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Nike Air Max 97</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0010" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/nike/Nike-Sportswear-Tênis-Nike-Sportswear-Air-Max-Axix-Se-Marrom-7209-1426224-1-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Nike Air Max AXIX SE</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

      <div id="0011" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/nike/Nike-Tênis-Nike-Air-Max-Sequent-4-Azul-0602-2623054-1-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Nike Air Max Sequent 4 Azul</p>
          <p class="item-pre">R$319.00</p>
        </div>

      </div>

      <div id="0012" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/nike/Nike-Sportswear-Tênis-Nike-Sportswear-Air-Max-Nostalgic-Bege-0316-6384604-1-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Nike Air Max Nostalgic</p>
          <p class="item-pre">R$299.00</p>
        </div>

      </div>

      <div id="0013" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/nike/Nike-Sportswear-Tênis-Nike-Sportswear-Air-Max-Sequent-4-Utility-Cinza-9711-3041054-1-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Nike Air Max Sequent 4</p>
          <p class="item-pre">R$434.00</p>
        </div>

      </div>

    </div>
  </div>

   <div id="vans">
    <h2>Vans</h2><hr>
    <div class="produtos-destaque container">
      <div id="0001" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/vans/tenis_vans_era_preto_masculino_2_.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Vans New Era preto</p>
          <p class="item-pre">R$299.00</p>
        </div>

      </div>

      <div id="0002" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/vans/Vans-Slip-On-Vans-Asher-Rock-Cinza-3354-8026163-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Vans Classic preto</p>
          <p class="item-pre">R$249.00</p>
        </div>

      </div>

      <div id="0003" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/vans/Vans-Tênis-Vans-Filmore-Decon-Preto-7715-7523054-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Vans Filmore Decon</p>
          <p class="item-pre">R$279.00</p>
        </div>

      </div>

      <div id="0004" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/vans/Vans-Tênis-Vans-Mn-Ward-Preto-2136-4408154-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Vans Old School</p>
          <p class="item-pre">R$299.00</p>
        </div>

      </div>

      <div id="0005" class="item-box">
        <div class="item-img">
          <a href="#"><img src="tenis/vans/Vans-Tênis-Vans-Wm-Maddie-Hi-Preto-9602-1225204-3-zoom.jpg" alt="" class="imagem-item"></a>

        </div>

        <div class="item-leg">
          <p class="item-nome">Vans WM maddie</p>
          <p class="item-pre">R$349.00</p>
        </div>

      </div>

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
