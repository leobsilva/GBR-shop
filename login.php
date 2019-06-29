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
                <h1><a href="index.html">GBR Shop</a></h1>
              </div>

              <ul class="menu-topo">
                  <li><a href="login.html">LOGIN</a></li>
                  <li><a href="cadastro.html">CADASTRE-SE</a></li>
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

<!--formulario login-->

    <section id="form-cadastro">
      <p>
        JÁ TENHO CONTA
      </p>

      <form id="caixa">
        <ul>

          <li>
            <label for="email">Email:</label><br>
            <input type="text" placeholder="Email..." id="email" name="email">
          </li>
          <li>
            <label for="senha">Senha:</label><br>
            <input type="passowrd" placeholder="******..." id="senha" name="senha">
          </li>
          <li>
            <button type="submit" value="Login" onclick="msg()">
          </li>

        </ul>
      </form>

    </section>
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
