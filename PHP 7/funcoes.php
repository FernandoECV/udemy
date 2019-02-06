<html>

<head>
	<meta charset="utf-8" />

	<title>Curso PHP</title>

</head>


<body>
	
	<?php
	
		// void(sem retorno)
		function exibirBoasVindas() {

			echo "Bem-vindo ao curso de PHP<br/>";

		}

		exibirBoasVindas();

		// return(com retorno)
		function calcularAreaTerreno($largura, $comprimento) {

			$area = $largura * $comprimento;

			return $area;

		}	

		echo calcularAreaTerreno(10, 5);
		echo "<br/>";
		echo calcularAreaTerreno(5, 25);
		echo "<br/>";
		echo calcularAreaTerreno(30, 15);
		echo "<br/>";
		echo calcularAreaTerreno(30, 50);
	?>

	

</body> 

 

</html>