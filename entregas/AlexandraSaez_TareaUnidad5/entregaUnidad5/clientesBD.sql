DROP DATABASE IF EXISTS clientes_DB;
CREATE DATABASE clientes_DB;
USE clientes_DB;

CREATE TABLE IF NOT EXISTS clientes (
dni VARCHAR(9) NOT NULL ,
nombre VARCHAR(30) NOT NULL,
direccion VARCHAR(50) NOT NULL,
localidad VARCHAR(30) NOT NULL,
provincia VARCHAR(30) NOT NULL,
telefono VARCHAR(9) NOT NULL,
email VARCHAR(30) NOT NULL,
PRIMARY KEY (dni))
ENGINE = InnoDB;