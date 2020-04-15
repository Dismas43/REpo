CREATE DATABASE  control_usuarios;
USE control_usuarios;

CREATE TABLE usuarios(
idusuario INT(255) auto_increment not null,
apaterno VARCHAR(255) NOT NULL, 
amaterno VARCHAR(255) NOT NULL , 
nombre VARCHAR(255) NOT NULL , 
usuario VARCHAR(255) NOT NULL , 
clave VARCHAR(255) NOT NULL , 
tipo INT(1) NOT NULL , 
status INT(1) NOT NULL , 
fregistro DATETIME NOT NULL ,
CONSTRAINT pk_usuarios PRIMARY KEY(idusuario)
)ENGINE=InnoDb;

INSERT INTO usuarios (`idusuario`, `aPaterno`, `aMaterno`, `nombre`, `usuario`, `clave`, `tipo`, `status`, `fRegistro`) VALUES
(1, 'Tobar', 'Barrientos', 'kevin', 'admin', 'fakepass', 1, 1, '2020-01-18 16:02:42');
