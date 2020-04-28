<?php

	//Conexion con Base de Datos
	function conectar_bd() {
		$conexion_bd = mysqli_connect("localhost","root","","almacenciasa");

		//verificar si la base de datos se conecto
		if( $conexion_bd == NULL){
			die("No se pudo conectar con la base de datos");
		}
		return $conexion_bd;
	}

	//Cerrar conexion de Base de Datos
	//@param $conexion: Conexion que se cerrara
	function desconectar_bd($conexion_bd){
		mysqli_close($conexion_bd);
	}


	//Consulta de consultar Empleados
	function consultar_empleado($nombre="",$correo="",$id_empleado=""){
		//Primero conectarse a la bd
		$conexion_bd = conectar_bd();

		$resultado = "<table><thead><tr><th>Empleado ID</th><th>Nombre Empleado</th><th>Correo electrónico</th><th>Acciones</th></tr></thead>";

		$consulta = 'SELECT e.Id_Empleado as e_id, e.nombre as e_nombre, e.correo as e_correo FROM Empleado as e';
		
		$resultados = $conexion_bd->query($consulta);  

		while ($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
			$resultado .= "<tr>";
		    $resultado .= "<td>".$row['e_id']."</td>";
		    $resultado .= "<td>".$row['e_nombre']."</td>";
		    $resultado .= "<td>".$row['e_correo']."</td>";
		    $resultado .= "<td>";

		       if ($_SESSION["Registar"]) {
		    //Seccion de Entrada de Material
           $resultado.='<a href="salidaProductos.php?id='.$row['e_id'].'"';
           $resultado.="".'"'.">";
           $resultado.=" ". botonSalidas();
           $resultado.="</a>";
       }
		    
		    if ($_SESSION["Editar"]) {
		    //Seccion de Editar Boton
		   $resultado.='<a href="controlador_editar_producto.php?id='.$row['e_id'].'"';
           $resultado.="".'"'.">";
           $resultado.=" ". botonEditar();
           $resultado.="</a>";
           }

           if ($_SESSION["Eliminar"]) {
           	//Seccion de Borrar Boton
		   $resultado.='<a href="controlador_eliminar_proyecto.php?id='.$row['e_id'].'"';
           $resultado.="onclick=".'"'."return confirm('¿Estás seguro que deseas borrar el almacen:  ".$row['e_nombre']." ?')".'"'.">";
           $resultado.=" ". botonBorrar();
           $resultado.="</a>";
           }


		    $resultado .= "</tr>";
		}
		mysqli_free_result($resultados); //Liberar la memoria

		// desconectarse al termino de la consulta
		desconectar_bd($conexion_bd);

		$resultado .= "</tbody></table>";

		return $resultado;
	}

function botonBorrar(){
    $resultado = '<button class="btn waves-effect waves-light btn-small" type="submit" id="borrar" title = "Eliminar Producto">
    <i class="material-icons right">delete</i>
  </button>';
    return $resultado;
  }

  function botonEditar(){
    $resultado = '<button class="btn waves-effect waves-light btn-small" type="submit" id="editar" title="Editar Producto">
    <i class="material-icons right">edit</i>
  </button>';
    return $resultado;
  }

  function botonBarra(){
    $resultado = '<button class="btn waves-effect waves-light btn-small" type="submit" id="editar" title="Codigo de Barras">
    <i class="material-icons right">receipt</i>
  </button>';
    return $resultado;
  }

  function botonSalidas(){
    $resultado = '<button class="btn waves-effect waves-light btn-small" type="submit" id="editar" title="Salida de Producto">
    <i class="material-icons right">exit_to_app</i>
  </button>';
    return $resultado;
  }

?>