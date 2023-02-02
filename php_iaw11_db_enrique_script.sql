DROP DATABASE IF EXISTS enrique;

CREATE DATABASE enrique;

USE enrique;

DROP TABLE IF EXISTS personas;

CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `enrique`.`personas` (`idpersona`,`nombre`,`apellido1`,`apellido2`) VALUES ('1','Enrique','García','Couce');