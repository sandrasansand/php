DROP DATABASE IF EXISTS tiendaOnline;
CREATE DATABASE tiendaOnline;
USE tiendaOnline;

CREATE TABLE IN NOT EXISTS productos(
id INT NOT NULL AUTO_INCREMENT,
imagen VARCHAR(100) NULL,
nombre VARCHAR(30) NULL,
descripcion VARCHAR(50) NULL,
precio DECIMAL(9,2) NULL,
stock VARCHAR(10) NULL,
fecha date NULL,
primary key(id))
ENGINE = InnoDB;

CREATE TABLE IN NOT EXISTS provedores(
id INT NOT NULL AUTO_INCREMENT,
dni VARCHAR(9) NOT NULL ,
nombre VARCHAR(30) NOT NULL,
direccion VARCHAR(50) NOT NULL,
localidad VARCHAR(30) NOT NULL,
provincia VARCHAR(30) NOT NULL,
telefono VARCHAR(9) NOT NULL,
email VARCHAR(30) NOT NULL,
primary key(id))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS usuarios(
id INT NOT NULL AUTO_INCREMENT,
nombre varchar(30) null,
usuario varchar(30),
pass varchar(30),
permisos int(1),
imagen varchar(100) null,
fecha date null,
primary key(id)
)ENGINE = InnoDB;

-- añadir la FK en la práctica solo serás cliente si compras. Y los guardo en la bd
CREATE TABLE IF NOT EXISTS clientes (
dni VARCHAR(9) NOT NULL ,
nombre VARCHAR(30) NOT NULL,
direccion VARCHAR(50) NOT NULL,
localidad VARCHAR(30) NOT NULL,
provincia VARCHAR(30) NOT NULL,
telefono VARCHAR(9) NOT NULL,
email VARCHAR(30) NOT NULL,
id_usuario INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (dni),
CONSTRAINT Fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
ON DELETE CASCADE
ON UPDATE CASCADE
)ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS compras(
dni_cliente VARCHAR(9) NOT NULL,
id_producto INT NOT NULL AUTO_INCREMENT,
fecha date NULL,
PRIMARY KEY (dni_cliente,id_producto,fecha),
CONSTRAINT Fk_compra_por FOREIGN KEY (dni_cliente) REFERENCES clientes(dni) 
ON DELETE NO ACTION 
ON UPDATE CASCADE,
CONSTRAINT Fk_compra_de FOREIGN KEY (id_producto) REFERENCES productos(id) 
ON DELETE NO ACTION 
ON UPDATE CASCADE
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS suministros(
id_producto INT NOT NULL AUTO_INCREMENT,
id_provedor INT NOT NULL AUTO_INCREMENT,
fecha date NULL,
PRIMARY KEY (id_provedor,id_producto),
CONSTRAINT Fk_compra_por FOREIGN KEY (id_provedor) REFERENCES provedores(id) 
ON DELETE NO ACTION 
ON UPDATE CASCADE,
CONSTRAINT Fk_compra_de FOREIGN KEY (id_producto) REFERENCES productos(id) 
ON DELETE NO ACTION 
ON UPDATE CASCADE
)ENGINE = InnoDB;