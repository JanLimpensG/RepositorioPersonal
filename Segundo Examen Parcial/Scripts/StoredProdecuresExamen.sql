DELIMITER $$
CREATE PROCEDURE AgregarTipo(IN nom varchar (255))
BEGIN 
	INSERT INTO tipo (nombre) VALUES (nom);
END 
$$ DELIMITER ;


DELIMITER $$
CREATE PROCEDURE AgregarLugar(IN nom varchar (255))
BEGIN 
	INSERT INTO lugar (nombre) VALUES (nom);
END 
$$ DELIMITER ;


DELIMITER $$
CREATE PROCEDURE consultar_todos()
BEGIN 
SELECT i.id_incidente as id_incidente, l.nombre as l_nombre, t.nombre as t_nombre, i.fecha as i_fecha   
                FROM incidente as i, tipo as t, lugar as l 
                WHERE i.id_tipo = t.id_tipo AND i.id_lugar = l.id_lugar
                ORDER BY i.fecha DESC;
END 
$$ DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarIncidente(IN lugar int (10),IN tipo int (10))
BEGIN 
	INSERT INTO incidente (id_lugar, id_tipo) VALUES (lugar,tipo);
END 
$$ DELIMITER ;

DELIMITER $$
CREATE PROCEDURE consultar_lugartipo(IN lugarSelect int(10), IN tipoSelect int (10))
BEGIN 
SELECT i.id_incidente as id_incidente, l.nombre as l_nombre, t.nombre as t_nombre, i.fecha as i_fecha   
                FROM incidente as i, tipo as t, lugar as l 
                WHERE i.id_tipo = t.id_tipo AND i.id_lugar = l.id_lugar 
                AND i.id_lugar = lugarSelect AND i.id_tipo = tipoSelect
                ORDER BY i.fecha DESC;
END 
$$ DELIMITER ;


