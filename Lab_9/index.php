<!DOCTYPE html>
<html>
<head>
	<title> Lab 9 - A01704365</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1> Lab 09 - Jan Limpens Gutiérrez </h1>
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
			echo "<br><br>".$res;
		}

		$arr = array(4,3,5,6,7,8,1,15);

		$arr2 = array(41,36,611,12,76,954);

		echo "<br>Con el arreglo [4,3,5,6,7,8,1,15]";
		promedio($arr);

		echo "<br>Con el arreglo [41,36,611,12,76,954]";
		promedio($arr2);

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
					echo "<br><br>La mediana del arreglo es: ".$mediana."<br>";
				} else {
					echo "<br><br>La mediana del arreglo es: ".$nums[$mitad]."<br>";
				}

			}

			echo "<br>Con el arreglo [1,2,3,4,5,6,7,8,9]";

			$arr3 = array(1,2,3,4,5,6,7,8,9);
			mediana($arr3);

			echo "<br>Con el arreglo [21,23,43,45,56,76]";
			$arr4 = array(21,23,43,45,56,76);
			mediana($arr4);
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
	
</body>
</html>