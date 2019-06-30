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

<?php session_start();
 ?>
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





<!--formulario cadastro deprodutos-->
<form class="form-cadastroProduto container" action="" method="post">

  <?php
  if(isset($_POST['cadastrar'])){
    $nomeProduto = $_POST['nomeProduto'];
    $tipoProduto = $_POST['tipoProduto'];
    $preco = $_POST['preProduto'];
    $trintaecinco = $_POST['35'];
    $trintaeseis = $_POST['36'];
    $trintaesete = $_POST['37'];
    $trintaeoito = $_POST['38'];
    $trintaenove = $_POST['39'];
    $quarenta = $_POST['40'];
    $quarentaeum = $_POST['41'];
    $quarentaedois = $_POST['42'];
    $quarentaetres = $_POST['43'];
    $quarentaequato = $_POST['44'];
    $imgProduto = $_POST['imgProduto'];
  }


  include_once "conexao.php";

  $sql_produtos = "insert into produtos
          (nome_produto, preco, marca, imagem) values
          ('$nomeProduto', '$preco', $tipoProduto, '$imgProduto')";
  if(mysqli_query($conexao, $sql_produtos)) echo "Produto cadastrado com sucesso!";

  $sql_id = "select id_produto from produtos where nome_produto = '$nomeProduto' ";
  $resultado = mysqli_query($conexao, $sql_id);


  if(isset($trintaecinco)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $trintaecinco)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($trintaeseis)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $trintaeseis)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($trintaesete)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $trintaesete)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($trintaeoito)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $trintaeoito)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($trintaenove)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $trintaenove)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($quarenta)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $quarenta)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($quarentaeum)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $quarentaeum)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($quarentaedois)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $quarentaedois)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($quarentaetres)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $quarentaetres)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }
  if(isset($quarentaequato)){
    $sql_tamanhos = "insert into tamanho (id_produto, numero) values ('$conexao', $quarentaequato)";
    if(mysqli_query($conexao, $sql_tamanhos)) echo "Tamanho inserido com sucesso!";
  }



  if(mysqli_query($conexao, $sql_produtos)){
    echo "Cadastrado com sucesso";
  }
  else{
    echo "Ocorreu um erro, verifique se esta preenchido corretamente";
    echo mysqli_error($conexao);
  }

   ?>

<div class= "form-cadastroProduto container">

      <p>
        Adicione um produto:
      </p>
      <hr><br>

      <label>Nome do produto: </label><br>
        <input type="text" name="nomeProduto" value=""><br><br>

      <label>Categoria:</label><br>
      <select class="tipoProduto" name="tipoProduto">
        <option value="0">Selecione</option>
        <option value="1">Adidas</option>
        <option value="2">Nike</option>
        <option value="3">Vans</option>
        <option value="4">Relogios</option>
      </select><br><br>

      <label>Insira um preço:</label><br>
        <input type="text" name="preProduto" value="R$"><br><br>


        <label>Tamanhos disponíveis:</label><br>
          <input type="radio" name="35" value="35">
            <label for="35">35</label>
          <input type="radio" name="36" value="36">
            <label for="36">36</label>
          <input type="radio" name="37" value="37">
            <label for="37">37</label>
          <input type="radio" name="38" value="38">
            <label for="38">38</label>
          <input type="radio" name="39" value="39">
            <label for="39">39</label>
          <input type="radio" name="40" value="40">
            <label for="40">40</label>
          <input type="radio" name="41" value="41">
            <label for="41">41</label>
          <input type="radio" name="42" value="42">
            <label for="42">42</label>
          <input type="radio" name="43" value="43">
            <label for="43">43</label>
          <input type="radio" name="44" value="44">
            <label for="44">44</label><br><br>



<form action="upload.php" method="post" enctype="multipart/form-data">
      <label>Insira uma imagem:</label><br>
        <input type="file" name="imgProduto" id="imgProduto"><br><br>

        <input type="submit" value="Upload Produto" name="submitProduto"><br><br>
      </form>
</form>

</div>

    <!--Rodapé da Página-->
    <footer>
      <hr><br>
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
