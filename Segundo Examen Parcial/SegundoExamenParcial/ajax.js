//Función para crear el objeto para realizar una petición asíncrona
function getRequestObject() {
    // Asynchronous objec created, handles browser DOM differences
    if (window.XMLHttpRequest) {
        // Mozilla, Opera, Safari, Chrome IE 7+
        return (new XMLHttpRequest());
    } else if (window.ActiveXObject) {
        // IE 6-
        return (new ActiveXObject("Microsoft.XMLHTTP"));
    } else {
        // Non AJAX browsers
        return (null);
    }
}


//Función que detonará la petición asíncrona como se hacía en unos inicios
function buscar_old_style() {
    request = getRequestObject();
    if (request != null) {
        let lugar_id = document.getElementById("lugar").value;
        let estado_id = document.getElementById("estado").value;
        var url = 'controlador_buscar.php?lugar_id=' + lugar_id + '&estado_id=' + estado_id;

        request.open('GET', url, true);
        request.onreadystatechange =
            function () {
                if ((request.readyState == 4)) {
                    // Se recibió la respuesta asíncrona, entonces hay que actualizar el cliente.
                    // A esta parte comúnmente se le conoce como la función del callback
                    document.getElementById("resultados_consulta").innerHTML = request.responseText;
                }
            };
        // Limpiar la petición
        request.send(null);

    }
}

//Función que detonará la petición asíncrona como se hace ahora con js vanilla
//async sirve para indicar que la función hace una petición asíncrona
async function buscar_vanilla() {
    //Para poder pasar parámetros
    let parametros = new FormData();
    parametros.append("lugar_id", document.getElementById("lugar").value);
    parametros.append("estado_id", document.getElementById("estado").value);
    try {
        //await sirve para indicar que en este punto se espera una petición asíncrona
        //fetch es la función que hace la petición asíncrona
        await fetch('controlador_buscar.php', {
            method: 'POST', //El método GET de fetch no permite parámetros
            body: parametros
                //.then se ejecuta cuando concluye la petición asíncrona, pero esto también genera una promesa que se ejecuta de manera asíncrona
        }).then(function (response) {
            return response.text();
            //Este segundo then nos permite recuperar el contenido de la respuesta cuando se termina la promesa anterior
        }).then(function (data) { //
            document.getElementById("resultados_consulta").innerHTML = data;
        });
        //El uso de async y await permite que atrapar un error en la comunicación
    } catch (e) {
        console.log(e);
        document.getElementById("resultados_consulta").innerHTML = "Error en la comunicación con el servidor";
    }
}

//Función que detonará la petición asíncrona como se hace ahora con la librería jquery
function buscar() {
    //$.post manda la petición asíncrona por el método post. También existe $.get
    $.post("controlador_buscar.php", {
        id_lugar: $("#lugar").val(),
        id_tipo: $("#tipo").val()
    }).done(function (data) {
        $("#resultados_consulta").html(data);
    });
}

//Asignar al botón buscar, la función buscar()
document.getElementById("buscar").onclick = buscar;