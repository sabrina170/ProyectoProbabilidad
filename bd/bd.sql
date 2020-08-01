CREATE DATABASE login
USE login


CREATE TABLE roles(
idrol INT  PRIMARY KEY AUTO_INCREMENT,
rol VARCHAR(20)
)

SELECT * FROM roles
DROP TABLE  usuarios

CREATE TABLE usuarios(
id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30),
password VARCHAR(30),
telefono INT,
gmail VARCHAR(40),
id_rol INT,
creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
constraint idrol FOREIGN KEY (id_rol)  REFERENCES roles(idrol)
)

