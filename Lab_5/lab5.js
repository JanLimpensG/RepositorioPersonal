function checarContra(){

	let contra = document.getElementById("contra").value;

	if (contra.match(/[a-z]/g) && contra.match(/[A-Z]/g) && contra.match(/[0-9]/g) && contra.match(/[^a-zA-Z\d]/g) && contra.length >= 8) {
		alert("Contraseña adecuada");
	} else {
		
		alert("La contraseña no cumple con los requisitos señalados");
	}

}

contra.onkeyup = function requisitos(){

	let contra = document.getElementById("contra").value;


	if(contra.length >= 8){
		char.classList.remove("invalido");
		char.classList.add("valido");
	} else {
		char.classList.remove("valido");
		char.classList.add("invalido");
	}

	if(contra.match(/[a-z]/g)){
		minus.classList.remove("invalido");
		minus.classList.add("valido");
	} else {
		minus.classList.remove("valido");
		minus.classList.add("invalido");
	}

	if(contra.match(/[A-Z]/g)){
		mayus.classList.remove("invalido");
		mayus.classList.add("valido");
	} else {
		mayus.classList.remove("valido");
		mayus.classList.add("invalido");
	}

	if(contra.match(/[0-9]/g)){
		num.classList.remove("invalido");
		num.classList.add("valido");
	} else {
		num.classList.remove("valido");
		num.classList.add("invalido");
	}

	if(contra.match(/[^a-zA-Z\d]/g)){
		especial.classList.remove("invalido");
		especial.classList.add("valido");
	} else {
		especial.classList.remove("valido");
		especial.classList.add("invalido");
	}


}


function checkout(){

	let numC = document.getElementById("num_camisetas").value;
	let numZ = document.getElementById("num_zapatos").value;
	let numS = document.getElementById("num_shorts").value;

	subTotal = (numC * 1200) + (numZ * 850) + (numS * 450) ;
	iva = subTotal * 0.16;
	total = iva + subTotal;

	alert(" Sub Total : "+subTotal+" IVA: " +iva+" Total: " +total);
}

function resultados(){

	let puntos = 0;
	let res1 = document.getElementById("pregunta1").value;
	let res2 = document.getElementById("pregunta2").value;
	let res3 = document.getElementById("pregunta3").value;
	let res4 = document.getElementById("pregunta4").value;
	let res5 = document.getElementById("pregunta5").value;
	let res6 = document.getElementById("pregunta6").value;
	let res7 = document.getElementById("pregunta7").value;
	let res8 = document.getElementById("pregunta8").value;
	let res9 = document.getElementById("pregunta9").value;
	let res10 = document.getElementById("pregunta10").value;

	if(res1 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res2 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res3 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res4 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res5 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res10 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res9 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res8 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res7 == 'correcto'){
		puntos = puntos + 1;
	}
	if(res6 == 'correcto'){
		puntos = puntos + 1;
	}

	alert("Acertaste en " +puntos +" preguntas" );
}
