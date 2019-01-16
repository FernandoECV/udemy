<html>

<head>
	<meta charset="utf-8" />

	<title>Atividade PHP</title>

</head>


<body>
		
		<?php

			$nome = "Fernando Santos";
			$idade = 25;
			$peso = 70.5;
			$apto = "NÃO";

		if ($idade >= 16 && $idade <= 69 && $peso >= 50) {

				$apto = "SIM";					

				
				}		


		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome:  <?= $nome ?> </p>
		<p>Idade: <?= $idade ?> </p>
		<p>Peso:  <?= $peso ?> </p>
		<p>Apto a doar sangue: <?= $apto ?> </p>
		

</body> 



</html>