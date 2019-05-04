
/*
	Base de datos diseñada por: Nelson Goncalves

	Implementación:

	Prefix: vdp_xxxxxx
	Relaciones M-M: A y B = AAA_BBB
*/

CREATE DATABASE webcontrol;

USE webcontrol;

CREATE TABLE vdp_usuario (
	ID int NOT NULL,
	nombre varchar(32) NOT NULL,
	apellido varchar(32) NOT NULL,
	pass varchar(32) NOT NULL,
	email varchar(128) NOT NULL,
	referencia int,
	fecha_registro DATE NOT NULL,
	PRIMARY KEY (ID),
	INDEX (referencia),
	FOREIGN KEY (referencia)
		REFERENCES vdp_usuario (ID)
);

CREATE TABLE vdp_rol (
	ID int NOT NULL,
	nombre varchar(32) NOT NULL,
	descripcion varchar(128),
	PRIMARY KEY (ID)
);

CREATE TABLE vdp_producto (
	ID int NOT NULL,
	nombre varchar(32) NOT NULL,
	descripcion varchar(256) NOT NULL,
	precio int NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE vdp_usu_rol (
	ID int NOT NULL,
	fk_usuario int NOT NULL,
	fk_rol int NOT NULL,
	PRIMARY KEY (ID),
	INDEX (fk_usuario),
	INDEX (fk_rol),
	FOREIGN KEY (fk_usuario)
		REFERENCES vdp_usuario (ID)
		ON DELETE CASCADE,
	FOREIGN KEY (fk_rol)
		REFERENCES vdp_rol (ID)
		ON DELETE CASCADE
);

CREATE TABLE vdp_usu_pro (
	ID int NOT NULL,
	fecha_compra TIMESTAMP NOT NULL,
	cantidad int NOT NULL,
	total int NOT NULL,
	fk_usuario int NOT NULL,
	fk_producto int NOT NULL,
	PRIMARY KEY (ID),
	INDEX (fk_usuario),
	INDEX (fk_producto),
	FOREIGN KEY (fk_usuario)
		REFERENCES vdp_usuario (ID)
		ON DELETE CASCADE,
	FOREIGN KEY (fk_producto)
		REFERENCES vdp_producto (ID)
		ON DELETE CASCADE
);