<html>

<head>
	<meta charset="utf-8" />

	<title>Curso PHP</title>

</head>


<body>

	<?php

		//

	$usuario_possui_cartao_loja = true;
	$valor_compra = 500;
	$valor_frete = 50;
	$recebeu_desconto_frete = false;

	$valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete ));

	$recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

	$valor_frete = $valor_frete_aux;

	/*

	if ($usuario_possui_cartao_loja && $valor_compra >= 100) {

		$valor_frete = 0;
		$recebeu_desconto_frete = true;

	} */

	?>

	<h1>Detalhes do pedido</h1>


	<p>Possui Cartão da loja ? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?> 

		
	</p>

	<p>Valor da compra: <?= $valor_compra ?></p>

	<p>Recebeu desconto no frete ? 

		<?= $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?> 

	</p>

	<p>Valor do frete: <?= $valor_frete ?></p>


</body> 

<h1>
</h1>

</html>