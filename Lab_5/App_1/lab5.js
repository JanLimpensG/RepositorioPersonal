
	


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