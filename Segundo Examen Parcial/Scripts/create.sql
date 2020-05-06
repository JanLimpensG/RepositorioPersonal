
create table tipo (
	id_tipo int(10) NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    PRIMARY KEY (id_tipo)
);

create table lugar(
	id_lugar int(10)  NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    PRIMARY KEY (id_lugar)
);

create table incidente(
	id_incidente int(10) NOT NULL AUTO_INCREMENT,
    id_tipo int(10),
    id_lugar int(10),
    fecha TIMESTAMP,
    PRIMARY KEY (id_incidente,id_tipo, id_lugar),
    FOREIGN KEY (id_tipo) references tipo (id_tipo),
	FOREIGN KEY (id_lugar) references lugar (id_lugar)
);

call AgregarLugar('Centro Turistico');
call AgregarLugar('Laboratorios');
call AgregarLugar('Restaurante');
call AgregarLugar('Centro Operativo');
call AgregarLugar('Triceratops');
call AgregarLugar('Velociraptors');
call AgregarLugar('Dilofosaurios');
call AgregarLugar('TRex');
call AgregarLugar('Planicie de hervíboros');

call AgregarTipo('Falla eléctrica');
call AgregarTipo('Fuga de hervíboro');
call AgregarTipo('Fuga de Velocirraptors');
call AgregarTipo('Fuga de TRex');
call AgregarTipo('Robo de ADN');
call AgregarTipo('Auto descompuesto');
call AgregarTipo('Visitantes en zona no autorizada');





