<!DOCTYPE html>
<html>
<head>
	<title> Lab 9 - A01704365</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1 class="display-2"> Lab 09 - Jan Limpens Gutiérrez </h1>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</header>
	<div>
		<h3> Promedio de elementos en un arreglo</h3>

		<?php 
		function promedio($nums){

			$suma = 0;

			for($i = 0; $i < sizeof($nums); $i++){
				$suma = $suma + $nums[$i];
			}
			$res = $suma/$i;
			return $res;
		}

		$arr = array(4,3,5,6,7,8,1,15);

		$arr2 = array(41,36,611,12,76,954);

		echo "<br>Con el arreglo [4,3,5,6,7,8,1,15]";
		echo "<br><br>".promedio($arr);

		echo "<br>Con el arreglo [41,36,611,12,76,954]";
		echo "<br><br>".promedio($arr2);

	?>
	</div>
	<div>
		<h3>Encontrar la mediana de un arreglo</h3>

		<?php 
			function mediana($nums){
				sort($nums);
				$mitad = sizeof($nums)/2;
				if($mitad % 2 <> 0){
					$mitad = $mitad - 0.5;
					$mediana = ($nums[$mitad] +$nums[$mitad+1] )/2;
					return $mediana;
				} else {
					return $nums[$mitad];
				}

			}

			echo "<br>Con el arreglo [1,2,3,4,5,6,7,8,9]";

			$arr3 = array(1,2,3,4,5,6,7,8,9);
			echo "<br><br>La mediana del arreglo es: ".mediana($arr3)."<br><br>";

			echo "<br>Con el arreglo [21,23,43,45,56,76]";
			$arr4 = array(21,23,43,45,56,76);
			echo "<br><br>La mediana del arreglo es: ".mediana($arr4)."<br><br>";
		?>

	</div>
	<div>
		<h3>Mostrar datos obtenidos en una lista</h3>

		<?php 
			function imprime($nums){

				for($i = 0; $i < sizeof($nums); $i++){
				echo $nums[$i].", ";
				}

			}


			function lista($nums){
				$prom = promedio($nums);
				$mediana = mediana($nums);

				echo "<ul>";
				echo "<li>Promedio: ".$prom."</li>";
				echo "<li>Mediana: ".$mediana."</li>";
				sort($nums);
				echo "<li>".imprime($nums)."</li>";
				rsort($nums);
				echo "<li>".imprime($nums)."</li>";
				echo "</ul>";

			}

			echo "<br>Con el arreglo [91,4,112,6,32,8,9,1]<br>";
			$arr5 = array(91,4,112,6,32,8,9,1);
			lista($arr5);

			echo "<br>Con el arreglo [123,54,56,86,3,2,312]<br>";
			$arr6 = array(123,54,56,86,3,2,312);
			lista($arr6);

		?>

	</div>
	<div>
		<h3>Mostrar cubos y cuadrados de un numero</h3>

		<?php
			function tabla($num){

				echo '<table><thead><tr>';

				for($i = 1; $i <= $num; $i++){
					echo "<th>".$i."</th>";
				}
				echo '</tr></thead><tbody><tr>';

				for($j = 1; $j <=$num; $j++){
					$cuadrado = pow($j,2);
					echo "<td>".$cuadrado."</td>";	
				}
				echo "</tr><tr>";
				for($k = 1; $k <= $num; $k++){
					$cubo = pow($k,3);
						echo "<td>".$cubo."</td>";
					}
				echo '</tr></tbody></table><br><br>';

			}
			echo "<br> Con n = 7 <br><br>";
			tabla(7);
			echo "<br> Con n = 10 <br><br>";
			tabla(10);

		?>

	</div>
	<div class="container-fluid">
		<h3>Problema: Monedas</h3>
		<p class="lead">
			In Berland a money reform is being prepared. New coins are being introduced. After long economic calculations was decided that the most expensive coin should possess the denomination of exactly n Berland dollars. Also the following restriction has been introduced for comfort: the denomination of each coin should be divisible by the denomination of any cheaper coin. It is known that among all the possible variants the variant with the largest number of new coins will be chosen. Find this variant. Print in the order of decreasing of the coins' denominations.
		</p>

		<?php 

		function monedas($valorIn){

			$aux = $valorIn;
			for($i = $valorIn; $i > 0; $i--){
				if($aux % $i == 0){
					$aux = $i;
					echo $i.", ";
				}
			}
		}

		echo "<br><br>Con el valor mas grande de las monedas siendo : 100<br><br>";
		monedas(100);

		echo "<br><br>Con el valor mas grande de las monedas siendo : 200<br><br>";
		monedas(200);




		?>
	</div>
	<div>
		<h3>Preguntas por responder: </h3>
		<article>
			<h4>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h4>
			<p>
				resp
			</p>
		</article>
		<article>
			<h4>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h4>
			<p>
				resp
			</p>
		</article>
		<article>
			<h4>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h4>
			<p>
				resp
			</p>
		</article>
	</div>
	
</body>
</html>