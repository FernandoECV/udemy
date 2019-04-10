<html>

<head>
	<meta charset="utf-8" />

	<title>Curso PHP</title>

</head>


<body>
	
	<?php
	
		//sequencias (numéricos)

	// $lista_frutas = array('Banana','Maça','Morango','Uva');

	/*
	$lista_frutas = ['Banana','Maça','Morango','Uva'];

	$lista_frutas[] = 'Abacaxi';

	/*
	echo "<pre>";
		var_dump($lista_frutas);
	echo "<pre>";
	echo "<hr />";
	echo "<pre>";
		print_r($lista_frutas);
	echo "<pre>";
	

	echo $lista_frutas[2];
	*/

		//associativos


	$lista_frutas = [
		'a' =>'Banana',
		'b' =>'Maça',
		'c' =>'Morango',
		'd' =>'Uva',
		'e' =>'Abacate'];

		$lista_frutas['f'] = 'Abacaxi';

		echo "<pre>";
			var_dump($lista_frutas);
		echo "<pre>";

		echo $lista_frutas['f'];







	?>

	

</body> 



</html>