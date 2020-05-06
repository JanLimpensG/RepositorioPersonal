<?php

	//conectarse con la base de datos
	function conectar(){
		$conexion_bd = mysqli_connect("mysql1008.mochahost.com", "dawbdorg_1704365", "1704365", "dawbdorg_A01704365");
    //$conexion_bd = mysqli_connect("localhost", "root", "", "jurasikpark");

		if($conexion_bd == NULL){
			die("No hay conexion con la base de datos");
		}
		return $conexion_bd;
	}

	//desconectar con la base de datos
	function desconectar($conexion_bd){
		mysqli_close($conexion_bd);
	}


	function consultar_incidentes($lugar = "", $tipo = ""){
		$conexion_bd = conectar();

		$res = "<table><thead><th>ID incidente</th><th>Lugar</th><th>Tipo</th><th>Fecha y hora</th></tr></thead>";


    if (($lugar == "")&&($tipo == "")) {

        $consulta = 'call consultar_todos()';
        
    } else {
          $consulta = 'SELECT i.id_incidente as id_incidente, l.nombre as l_nombre, t.nombre as t_nombre, i.fecha as i_fecha   
                FROM incidente as i, tipo as t, lugar as l 
                WHERE i.id_tipo = t.id_tipo AND i.id_lugar = l.id_lugar ';

    if ($lugar != "") {
        $consulta .= " AND i.id_lugar= ".$lugar;
    }
    if ($tipo != "") {
        $consulta .= " AND i.id_tipo= ".$tipo;
    } 
      $consulta .= ' ORDER BY i.fecha DESC'; 
     }

		$resultados = $conexion_bd->query($consulta);  

		while($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)){
			$res .= "<tr>";
        	$res .= "<td>".$row['id_incidente']."</td>";
        	$res .= "<td>".$row['l_nombre']."</td>";
        	$res .= "<td>".$row['t_nombre']."</td>";
          $res .= "<td>".$row['i_fecha']."</td>";
        	$res .= "</tr>";
		}

		mysqli_free_result($resultados);

		desconectar($conexion_bd);   
      
   		$res .= "</tbody></table>";
   		return $res;

	}

	   function crear_select($id, $columna_descripcion, $tabla, $seleccion=0) {
   		 $conexion_bd = conectar();  
      
   		 $resultado = '<div class="input-field"><select name="'.$tabla.'" id="'.$tabla.'"><option value="" disabled selected>Selecciona una opción</option>';
            
  		  $consulta = "SELECT $id, $columna_descripcion FROM $tabla";

  		  $resultados = $conexion_bd->query($consulta);

  		  while ($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
    		    $resultado .= '<option value="'.$row["$id"].'">'.$row["$columna_descripcion"].'</option>';
  		  }
  		  desconectar($conexion_bd);
  		  $resultado .=  "</select><label>".$tabla."</label></div>";

  		  return $resultado;
  }




	function insertar_incidente($id_tipo, $id_lugar){

			$conexion_bd = conectar();

		 $consulta = 'call AgregarIncidente(?,?)';
     //$consulta = 'INSERT INTO incidente (id_lugar, id_tipo) VALUES (?,?)';

			if ( !($statement = $conexion_bd->prepare($consulta)) ) {
       				 die("Error: (" . $conexion_bd->errno . ") " . $conexion_bd->error);
       				 return 0;
    		}
      
    		if (!$statement->bind_param("ii", $id_lugar,$id_tipo )) {
      				  die("Error en vinculación: (" . $statement->errno . ") " . $statement->error);
      				  return 0;
   			}
      
   			if (!$statement->execute()) {
    				 die("Error en ejecución: (" . $statement->errno . ") " . $statement->error);
       				 return 0;
   			}

    		desconectar($conexion_bd);
    		 return 1;

	}

?>