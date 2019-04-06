<html>

<head>
	<meta charset="utf-8" />

	<title>Curso PHP</title>

</head>


<body>
		
	<?php

		/*	
		// recuperação da data atual / data corrente 

		echo date('d/m/Y H:i');

		
		echo '<br /><br />';

		echo date_default_timezone_get();

		date_default_timezone_set('America/Sao_Paulo');

		echo '<br /><br />';

		echo date('d/m/Y H:i');

		*/

		$data_inicial = '2018-04-24';
		
		$data_final = '2018-05-15';

		//timestamp

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);

		echo $data_inicial . ' - ' . $time_inicial;

		echo '<br /><br />';

		echo $data_final . ' - ' . $time_final;

		$diferenca_times = $time_final - $time_inicial; // abs

		echo '<br /><br />';

		echo "A diferença de segundos entre a data inicial e final é " . $diferenca_times ;

		$segundos_existem_dias = 24 * 60 * 60;

		echo '<br /><br />';

		echo "Um dia possui " . $segundos_existem_dias . " segundos " ;

		$diferença_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dias ;

		echo '<br /><br />';

		echo "A diferença em dias é: ". $diferença_de_dias_entre_as_datas;



	?>

	

</body> 

 

</html>