CREATE DATABASE IF NOT EXISTS `bancodb`;
USE `bancodb`;
CREATE Table IF NOT EXISTS `clientes` (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cedula int(20) NOT NULL,
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    direccion varchar(100) NOT NULL,
    telefono int(20) NOT NULL,
    email varchar(100) NOT NULL,
    passsword varchar(100) NOT NULL
);
