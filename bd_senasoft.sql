create database senasoft;
use senasoft;

CREATE TABLE rol( 
id_rol INT AUTO_INCREMENT,
nombre_rol VARCHAR(20),
 CONSTRAINT pk_rol PRIMARY KEY (id_rol)
);


CREATE TABLE usuarios(	
    id_usuario INT  AUTO_INCREMENT,
    nom_usuario VARCHAR(30) NOT NULL,
    docu_usuario INT NOT NULL,
    email_usuario VARCHAR (30) NOT NULL,
    tfl_usuario VARCHAR (15),
    contra_usuario VARCHAR (10) NOT NULL,
    id_rol_usu INT,   
    CONSTRAINT fk_rol_usu FOREIGN KEY (id_rol_usu) REFERENCES rol (id_rol),
    CONSTRAINT pk_usuarios PRIMARY KEY (dni_usuario)
   );