CREATE TABLE Materiales(
    Clave NUMERIC(5),
    Descripcion VARCHAR(50),
    Costo NUMERIC(8, 2)
); 
CREATE TABLE Proveedores(
    RFC NUMERIC(13),
    RazonSocial VARCHAR(50)
);
CREATE TABLE Proyrectos(
    Numero NUMERIC(5),
    Denominacion VARCHAR(50)
);
CREATE TABLE Entregan(
    Clave NUMERIC(5),
    RFC NUMERIC(13),
    Numero NUMERIC(5),
    Fecha DATETIME
);