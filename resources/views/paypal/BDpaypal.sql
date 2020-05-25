CREATE TABLE paypal(
idpp INT NOT NULL AUTO_INCREMENT,
imagen VARCHAR(150),
descripcion TEXT,
precio DOUBLE,
PRIMARY KEY(idpp))

CREATE TABLE cliente(
idcl INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(100),
apellidoP VARCHAR(70),
apellidoM VARCHAR(70),
sexo VARCHAR(1),
edad INT(4),
PRIMARY KEY(idcl))

CREATE TABLE detalleCompra(
id_dc INT NOT NULL AUTO_INCREMENT,
idpp INT NOT NULL,
idcl INT NOT NULL,
PRIMARY KEY(id_dc),
FOREIGN KEY(idpp)REFERENCES paypal(idpp),
FOREIGN KEY(idcl)REFERENCES cliente(idcl))





SELECT a.id_dc AS folio,cl.nombre,p.producto,p.precio,
IF(p.precio>=500,'Si','NO')AS Descuento_50
FROM detalleCompra AS a 
INNER JOIN paypal AS p ON p.idpp=a.idpp 
INNER JOIN cliente AS cl ON cl.idcl=a.idcl