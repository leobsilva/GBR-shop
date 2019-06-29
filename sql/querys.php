<?php

	$sql = "insert into clientes (nome_cliente, fone, email, senha) values 
			('$nome', '$fone', '$email', '$senha');";
	$resultado = mysqli_query($conexao, $sql);

	$sql = "select nome_produto, preco from produto;";
	$resultado = mysqli_query($conexao, $sql);

	$sql = "insert into produtos (nome_produto, preco) values ('$nome', '$preco');";
	$resultado = mysqli_query($conexao, $sql);

?>