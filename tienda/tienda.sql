DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda;
USE tienda;


CREATE TABLE IF NOT EXISTS products(
id INT NOT NULL AUTO_INCREMENT,
imagen VARCHAR(100) NULL,
nombre VARCHAR(30)NOT NULL,
descripcion VARCHAR(100)NOT NULL,
precio DECIMAL(9,2)NOT NULL,
stock VARCHAR(10)NOT NULL,
fecha date NOT NULL,
PRIMARY KEY(id))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS usuarios(
id INT NOT NULL AUTO_INCREMENT,
nombre varchar(30) NOT NULL,
usuario varchar(30) NOT NULL,
pass varchar(30) NOT NULL,
permisos int(1) NOT NULL,
imagen varchar(100) NULL,
fecha date NOT NULL,
PRIMARY KEY(id))
ENGINE = InnoDB;