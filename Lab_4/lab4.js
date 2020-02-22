
function ejercicio1() {
	let num = prompt("Escribe un numero, del cual quieras saber sus cuadrados y cubos:");

	for(let i = 1; 	i <= num; i++){
		document.write(Math.pow(i,2) + " ");
	}
	document.write("<br>");
	for(let i = 1; i<= num; i++){
		document.write(Math.pow(i,3) + " ");
	}
}

function ejercicio2(){

	let num1 = Math.floor(Math.random() * (100 - 1)) + 1;
	let num2 = Math.floor(Math.random() * (100 - 1)) + 1;

	let res = num1 + num2;

	let tiempoInicial = Date.now();

	let suma = prompt("¿Cual es la suma de estos dos numeros :" + num1 + "+"+ num2 + " ?");

	let tiempoFinal = Date.now();

	let difTiempo = (tiempoFinal - tiempoInicial)/1000;

	if (suma == res)
		alert("El resultado es correcto, tardaste " +  difTiempo + " segundos en encontrar la respuesta");
	else 
		alert("El resultado es incorrecto, la respuesta correcta es: " + res + " Tardaste " + difTiempo +" segundos en contestar.");

}

function ejercicio3(arg){
	
	let numerosNegativos = 0;
	let numerosPositivos = 0;
	let ceros = 0;

	for(let i = 0; i < arg.length; i++){

		if(arg[i] == 0){
			ceros = ceros + 1;
		} else if ( arg[i] < 0){
			numerosPositivos = numerosPositivos + 1;
		} else {
			numerosNegativos = numerosNegativos + 1;
		}
	}
	document.write("Cantidad de números positivos: " + numerosPositivos + " Cantidad de números negativos: " + numerosNegativos +
	      	        " Cantidad de ceros: " + ceros);
}

function ejercicio4(matriz){

	console.log(matriz);
	
	let promedio = [0,0,0];

	for(let i = 0; i < 3; i++){
		for( let j = 0; j < 3; j++){
			promedio[i] = promedio[i] + matriz[i][j];
		}
		promedio[i] = promedio[i]/3;
	}

	document.write("El promedio del primer renglon de la matríz es : " +promedio[0], " ,el promedio del segundo renglón es: " + promedio[1] + 
				    " , y el promedio del ultimo renglon es: " + promedio[2]);
}

function ejercicio5(num){

	let numeroInvertido = 0;
	let numeroAux = num;

	while(numeroAux > 0){
		numeroInvertido = numeroInvertido*10 + (numeroAux % 10);
		numeroAux = Math.floor(numeroAux/10); 
	}

	document.write("El numero original es: " + num + " y el inverso de ese numero es: " + numeroInvertido);
	
}

function ejercicio6(n, k){

	document.write("Este problema fue parte de la actividad colaborativa de la clase de Algoritmos: <br><br>");
	document.write("Una compañía necesita genrar contraseñas con los siguientes criterios: <br> ");
	document.write("La longitud de la contraseña tiene que ser n (el primer nunmero del parametro) <br>");
	document.write("La contraseña solo puede estar hecha de numeros <br>");
	document.write("El numero de caracteres distintos debe ser k, (el segundo numero de los parametros) <br>");
	document.write("Todos los caracteres consecutivos deben ser distintos <br><br><br>");


	let res = new Object();
	res.respuesta = "";
	let letra = 1;

	for(let i = 0; i < k; i++){
		res.respuesta = res.respuesta + letra;
		letra = letra + 1;	
	}
	letra = 0;
	let dif = n - k;
	for(let j = 0; j < dif ; j++){
		letra = letra + 1;

		if(letra > k){
			letra = 1;
		}
		res.respuesta = res.respuesta + letra;


	}
	document.write("n = 6 , k = 2, Respuesta: <br><br>")
	document.write(res.respuesta);
}

