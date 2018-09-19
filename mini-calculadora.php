<!DOCTYPE html>
<html>
<head>
	<title>Calculando</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$n = isset($_GET["num"])?$_GET["num"]:0; //pega o número passado como parâmetro
		$o = isset($_GET["oper"])?$_GET["oper"]:1; //pega o valor do radio

		/*                     --------ATENÇÃO------ 
		 No PHP 7 foi lançada uma nova funcionalidade, onde as linhas acima
		podem ser substituídas por 
		$n = $_GET['num'] ?? : 0;
		$o = $_GET['oper'] ?? : 1;
		*/
		switch ($o) {
			case '1': //caso seja 1, calcula o dobro
				$r = $n * 2;
				break;

			case '2': //caso seja 2, calcula a raiz quadrada
				$r = sqrt($n);
				break;

			case '3': // caso seja 3, calcula o cubo
				$r = $n ^ 3;
				break;
			//Não possui default pois o formulário passará o valor 1 como "default"
		}

		echo "O resultado da operação solicitada é $r"; //imprime o valor
	?>
	<a href="mini-calculadora.html">Voltar</a> <!-- Volta para a página anterior -->
</body>
</html>