<?php
	include("partials/_header.html");
	include ("partials/_nav.html");
	include("partials/_promedio.html");



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
			echo "<br><br> El promedio es: ".promedio($arr)."<br>";

			echo "<br>Con el arreglo [41,36,611,12,76,954]";
			echo "<br><br> El promedio es: ".promedio($arr2);

	include("partials/_mediana.html");

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

	include("partials/_datos.html");

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

		

	include("partials/_cuadrados.html");

				function tabla($num){

					echo '<table border ="2" width = "40%"><thead><tr>';

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

	include("partials/_problema.html");


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




	include("partials/_preguntas.html");
	include("partials/_footer.html");

	?>
