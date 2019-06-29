<?php

$diretorio = "imagensUp/";
$imgProduto = $diretorio . basename($_FILES["imgProduto"]["name"]);
$arquivoTempProduto = $_FILES["imgProduto"]["tempName"];
move_uploaded_file( $arquivoTempProduto, $diretorio);

 ?>
