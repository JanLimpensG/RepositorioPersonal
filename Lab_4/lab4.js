function ejercicio1() {
	let num = prompt("Escribe un numero, del cual quieras saber sus cuadrados y cubos:");

	for(let i = 1; 	i <= num; i++){
		document.write(Math.pow(i,2) + " ");
	}
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
		alert("El resultado es correcto, tardaste " +  difTiempo + " segundos en encotrar la respuesta");
	else 
		alert("El resultado es incorrecto, la respuesta correcta es: " + res);

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
	document.write("Cantidad de números positivos: " + numerosPositivos + " Cantidad de números negativos: " + numerosNegativos + " Cantidad de ceros: " + ceros);
}

function ejercicio4(){
	
}

function ejercicio5(){
	
}

function ejercicio6(){
	
}