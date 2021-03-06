/* =========== LIMPIEZA DE BASE DE DATOS EN CASO DE EXISTIR =========== */
DROP DATABASE IF EXISTS DB_COMPUTERS_INVENTORY;

/* =========== CREACION BASE DE DATOS =========== */
CREATE DATABASE DB_COMPUTERS_INVENTORY;
USE DB_COMPUTERS_INVENTORY;

/* =========== CREACION DE OBJETOS Y RELACIONES =========== */

DROP TABLE IF EXISTS COMPUTADOR;
CREATE TABLE COMPUTADOR(
ID_PC INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
MARCA_PC VARCHAR (15) NOT NULL,
MODELO_PC VARCHAR (15) NOT NULL,
SERIAL_PC VARCHAR (20) NOT NULL UNIQUE,
PROCESADOR_PC VARCHAR (20) NOT NULL,
RAM_PC INT (3) NOT NULL,
UNIDAD_RAM_PC CHAR (2) NOT NULL,
ALMACENAMIENTO_PC INT (3) NOT NULL,
UNIDAD_ALMACENAMIENTO_PC CHAR (2) NOT NULL,
TIPO_SISTEMA_PC INT (2) NOT NULL,
SISTEMA_OPERATIVO_PC VARCHAR (10) NOT NULL,
VERSION_SO_PC VARCHAR (7) NOT NULL,
DISPONIBILIDAD_PC CHAR(13) NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS ITEMS;
CREATE TABLE ITEMS(
ID_ITEM INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
MARCA_ITEM VARCHAR (50) NOT NULL,
MODELO_ITEM VARCHAR (50) NOT NULL,
TIPO_ITEM VARCHAR (50) NOT NULL,
CANTIDAD_ITEM INT (11) NOT NULL,
CANTIDAD_DISPONIBLE_ITEM INT (11)NOT NULL,
IMAGEN_ITEM VARCHAR (150) NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS PRESTAMO_ITEMS;
CREATE TABLE PRESTAMO_ITEMS(
ID_PRESTAMO INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
ID_EMPLEADO_FK INT,
ID_ITEM_FK INT,
CANTIDAD_ITEM INT (11) NOT NULL,
FECHA_INICIO_PRESTAMO DATETIME NOT NULL,
FECHA_FIN_PRESTAMO DATETIME NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS AREA_EMPRESA;
CREATE TABLE AREA_EMPRESA(
ID_AREA_EMPRESA INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
NOMBRE_AREA_EMPRESA VARCHAR (50) NOT NULL UNIQUE,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS ROL;
CREATE TABLE ROL(
ID_ROL INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
NOMBRE_ROL VARCHAR (13) NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS USUARIO;
CREATE TABLE USUARIO(
ID_USUARIO INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
ID_EMPRESA_FK INT,
ID_ROL_FK INT,
NOMBRE_COMPLETO_USUARIO VARCHAR (70) NOT NULL,
CORREO_USUARIO VARCHAR (30) NOT NULL UNIQUE,
PASSWORD_USUARIO VARCHAR (150) NOT NULL,
TIPO_DOCUMENTO_USUARIO VARCHAR (2) NOT NULL,
NUMERO_DOCUMENTO_USUARIO INT (10) NOT NULL UNIQUE ,
FECHA_NACIMIENTO_USUARIO DATE NOT NULL,
NUMERO_CELULAR_USUARIO CHAR (10) NOT NULL UNIQUE,
NUMERO_FIJO_USUARIO VARCHAR (7),
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS PRESTAMO;
CREATE TABLE PRESTAMO(
ID_PRESTAMO INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
ID_EMPLEADO_FK INT,
ID_PC_FK INT,
FECHA_INICIO_PRESTAMO DATETIME NOT NULL,
FECHA_FIN_PRESTAMO DATETIME NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

DROP TABLE IF EXISTS MANTENIMIENTOS;
CREATE TABLE MANTENIMIENTOS(
ID_MANTENIMIENTO INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
ID_PC_FK INT,
DESCRIPCION_MANTENIMIENTO VARCHAR (500) NOT NULL,
ESTADO VARCHAR (8) NOT NULL,
CREATED_AT DATETIME NOT NULL,
UPDATED_AT DATETIME NOT NULL
);

/* =========== ALTER TABLES =========== */

ALTER TABLE USUARIO ADD FOREIGN KEY (ID_EMPRESA_FK) REFERENCES AREA_EMPRESA (ID_AREA_EMPRESA);
ALTER TABLE USUARIO ADD FOREIGN KEY (ID_ROL_FK) REFERENCES ROL (ID_ROL);
ALTER TABLE PRESTAMO ADD FOREIGN KEY (ID_EMPLEADO_FK) REFERENCES USUARIO (ID_USUARIO);
ALTER TABLE PRESTAMO ADD FOREIGN KEY (ID_PC_FK) REFERENCES COMPUTADOR (ID_PC);
ALTER TABLE PRESTAMO_ITEMS ADD FOREIGN KEY (ID_EMPLEADO_FK) REFERENCES USUARIO (ID_USUARIO);
ALTER TABLE PRESTAMO_ITEMS ADD FOREIGN KEY (ID_ITEM_FK) REFERENCES ITEMS (ID_ITEM);
ALTER TABLE MANTENIMIENTOS ADD FOREIGN KEY (ID_PC_FK) REFERENCES COMPUTADOR (ID_PC);

/* =========== INSERCIONES =========== */
/* =========== ITEMS =========== */

INSERT INTO `items` (`ID_ITEM`, `MARCA_ITEM`, `MODELO_ITEM`, `TIPO_ITEM`, `CANTIDAD_ITEM`, `CANTIDAD_DISPONIBLE_ITEM`, `IMAGEN_ITEM`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`)
VALUES (NULL, 'Logitech', 'K380 QWERTY', 'TECLADO', '10', '5', '', 'ACTIVO', '2022-03-08 14:33:37.000000', '2022-03-08 14:33:37.000000');

INSERT INTO `items` (`ID_ITEM`, `MARCA_ITEM`, `MODELO_ITEM`, `TIPO_ITEM`, `CANTIDAD_ITEM`, `CANTIDAD_DISPONIBLE_ITEM`, `IMAGEN_ITEM`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`)
VALUES (NULL, 'SAMSUNG', 'SAMSUNG GALAXY A52', 'CELULAR', '5', '5', '', 'ACTIVO', '2022-02-22 07:22:56.000000', '2022-02-22 07:22:56.000000');

SELECT * FROM ITEMS WHERE ESTADO = 'ACTIVO';

/* =========== ROLES =========== */

INSERT INTO `rol` (`ID_ROL`, `NOMBRE_ROL`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES ('1', 'Administrador', 'ACTIVO', '2022-02-14 21:54:24.000000', '2022-02-14 21:54:24.000000'), ('2', 'Empleado', 'ACTIVO', '2022-02-14 21:54:24.000000', '2022-02-14 21:54:24.000000');

/* =========== AREAS =========== */
INSERT INTO `AREA_EMPRESA` (`ID_AREA_EMPRESA`, `NOMBRE_AREA_EMPRESA`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Direcci??n', 'ACTIVO', '2021-12-27 22:31:00', '2021-12-27 22:31:00');
INSERT INTO `AREA_EMPRESA` (`ID_AREA_EMPRESA`, `NOMBRE_AREA_EMPRESA`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Administraci??n', 'ACTIVO', '2021-12-27 10:53:39', '2021-12-27 10:53:39');
INSERT INTO `AREA_EMPRESA` (`ID_AREA_EMPRESA`, `NOMBRE_AREA_EMPRESA`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Ventas', 'ACTIVO', '2021-12-28 02:17:00', '2021-12-28 02:17:00');
INSERT INTO `AREA_EMPRESA` (`ID_AREA_EMPRESA`, `NOMBRE_AREA_EMPRESA`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Producci??n', 'ACTIVO', '2022-01-20 04:46:30', '2022-01-20 04:46:30');
INSERT INTO `AREA_EMPRESA` (`ID_AREA_EMPRESA`, `NOMBRE_AREA_EMPRESA`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Contabilidad y Finanzas', 'ACTIVO', '2022-01-31 13:43:25.000000', '2022-01-31 13:43:25.000000');
SELECT * FROM AREA_EMPRESA;
SELECT ID_AREA_EMPRESA,NOMBRE_AREA_EMPRESA FROM AREA_EMPRESA;

/* =========== COMPUTADORES =========== */

INSERT INTO `computador` (`ID_PC`, `MARCA_PC`, `MODELO_PC`, `SERIAL_PC`, `PROCESADOR_PC`, `RAM_PC`, `UNIDAD_RAM_PC`, `ALMACENAMIENTO_PC`, `UNIDAD_ALMACENAMIENTO_PC`, `TIPO_SISTEMA_PC`, `SISTEMA_OPERATIVO_PC`, `VERSION_SO_PC`, `DISPONIBILIDAD_PC`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'SAMSUNG', 'NOVA 4', 'GH44897K', 'INTEL i7', '16', 'Gb', '8', 'Tb', '64', 'LINUX', '3FF', 'Asignado','ACTIVO', '2021-12-28 00:00:00', '2021-12-28 00:00:00');
INSERT INTO `computador` (`ID_PC`, `MARCA_PC`, `MODELO_PC`, `SERIAL_PC`, `PROCESADOR_PC`, `RAM_PC`, `UNIDAD_RAM_PC`, `ALMACENAMIENTO_PC`, `UNIDAD_ALMACENAMIENTO_PC`, `TIPO_SISTEMA_PC`, `SISTEMA_OPERATIVO_PC`, `VERSION_SO_PC`, `DISPONIBILIDAD_PC`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'ASUS', 'ROG7K', '667JK9X', 'R 9 9550X', '32', 'Gb', '1', 'Tb', '64', 'WINDOWS 10', '45BH6', 'Disponible','ACTIVO', '2021-12-28 01:06:26', '2021-12-28 01:06:26');
INSERT INTO `computador` (`ID_PC`, `MARCA_PC`, `MODELO_PC`, `SERIAL_PC`, `PROCESADOR_PC`, `RAM_PC`, `UNIDAD_RAM_PC`, `ALMACENAMIENTO_PC`, `UNIDAD_ALMACENAMIENTO_PC`, `TIPO_SISTEMA_PC`, `SISTEMA_OPERATIVO_PC`, `VERSION_SO_PC`, `DISPONIBILIDAD_PC`,`ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'ASUS', 'ROG7K', '667JK9)', 'R 9 9550X', '32', 'Gb', '500', 'Gb', '64', 'WINDOWS 10', '45BH6', 'Mantenimiento','ACTIVO', '2021-12-28 01:06:26', '2021-12-28 01:06:26');
INSERT INTO `computador` (`ID_PC`, `MARCA_PC`, `MODELO_PC`, `SERIAL_PC`, `PROCESADOR_PC`, `RAM_PC`, `UNIDAD_RAM_PC`, `ALMACENAMIENTO_PC`, `UNIDAD_ALMACENAMIENTO_PC`, `TIPO_SISTEMA_PC`, `SISTEMA_OPERATIVO_PC`, `VERSION_SO_PC`, `DISPONIBILIDAD_PC`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, 'Huawei', 'Note Book 23', 'SH58869JK', 'Threadripper 5990x', '64', 'Gb', '16', 'Tb', '64', 'WINDOWS 11', 'HA778S', 'Disponible', 'ACTIVO', '2022-01-20 04:43:21', '2022-01-20 04:43:21');

SELECT * FROM COMPUTADOR;

/* =========== MANTENIMIENTOS =========== */

INSERT INTO `mantenimientos` (`ID_MANTENIMIENTO`, `ID_PC_FK`, `DESCRIPCION_MANTENIMIENTO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '4', 'No enciende, solo dos meses de uso...', 'ACTIVO', '2022-02-01 01:38:00.000000', '2022-02-01 01:38:00.000000');
SELECT * FROM MANTENIMIENTOS;

/* =========== EMPLEADOS =========== */

INSERT INTO `USUARIO` (`ID_USUARIO`, `ID_EMPRESA_FK`, `NOMBRE_COMPLETO_USUARIO`, `CORREO_USUARIO`, `TIPO_DOCUMENTO_USUARIO`, `NUMERO_DOCUMENTO_USUARIO`, `FECHA_NACIMIENTO_USUARIO`, `NUMERO_CELULAR_USUARIO`, `NUMERO_FIJO_USUARIO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '1', 'Martha Leonor Espitia Garcia', 'martha@gmail.com', 'CC', '1212346534', '2003-07-27', '1233425468', NULL, 'ACTIVO', '2021-12-30 00:00:00', '2021-12-30 00:00:00'),
(NULL, '3', 'Frank Llanos Diaz', 'franlladiaz@gmail.com', 'CC', '1810965804', '2000-04-06', '3156478348', '523333', 'ACTIVO', '2022-01-10 14:17:17', '2022-01-10 14:17:17');
INSERT INTO `USUARIO` (`ID_USUARIO`, `ID_EMPRESA_FK`, `NOMBRE_COMPLETO_USUARIO`, `CORREO_USUARIO`, `TIPO_DOCUMENTO_USUARIO`, `NUMERO_DOCUMENTO_USUARIO`, `FECHA_NACIMIENTO_USUARIO`, `NUMERO_CELULAR_USUARIO`, `NUMERO_FIJO_USUARIO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '3', 'Simon Alexander Orosco', 'sialosrco@gmail.com', 'TI', '1000693694', '1998-07-15', '3209670459', '2096700', 'ACTIVO', '2022-01-19 21:11:23.000000', '2022-01-19 21:11:23.000000');
INSERT INTO `USUARIO` (`ID_USUARIO`, `ID_EMPRESA_FK`, `NOMBRE_COMPLETO_USUARIO`, `CORREO_USUARIO`, `TIPO_DOCUMENTO_USUARIO`, `NUMERO_DOCUMENTO_USUARIO`, `FECHA_NACIMIENTO_USUARIO`, `NUMERO_CELULAR_USUARIO`, `NUMERO_FIJO_USUARIO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '1', 'Luis Ocampos Almendrales', 'luisoc@gmail.com', 'CC', '1019', '0000-00-00', '3124456690', '244566', 'ACTIVO', '2022-01-20 03:48:15', '2022-01-20 03:48:15');
INSERT INTO `USUARIO` (`ID_USUARIO`, `ID_EMPRESA_FK`, `NOMBRE_COMPLETO_USUARIO`, `CORREO_USUARIO`, `TIPO_DOCUMENTO_USUARIO`, `NUMERO_DOCUMENTO_USUARIO`, `FECHA_NACIMIENTO_USUARIO`, `NUMERO_CELULAR_USUARIO`, `NUMERO_FIJO_USUARIO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '3', 'Willy Diaz Ampelo', 'willyd@gmail.com', 'CE', '1919867845', '1999-07-20', '3155867845', '5558678', 'ACTIVO', '2022-01-20 04:34:48', '2022-01-20 04:34:48');

SELECT * FROM USUARIO;

/* =========== PRESTAMOS =========== */

INSERT INTO PRESTAMO (ID_EMPLEADO_FK, ID_PC_FK, FECHA_INICIO_PRESTAMO, ESTADO,  CREATED_AT, UPDATED_AT)VALUES ('1', '1', '2022-01-07','ACTIVO', '2022-01-06 00:00:00', '2022-01-06 00:00:00');
INSERT INTO `prestamo` (`ID_PRESTAMO`, `ID_EMPLEADO_FK`, `ID_PC_FK`, `FECHA_INICIO_PRESTAMO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '4', '4', '2022-01-20 16:53:00', 'ACTIVO', '2022-01-20 04:56:27', '2022-01-20 04:56:27');

SELECT ID_PC,MODELO_PC FROM COMPUTADOR WHERE DISPONIBILIDAD_PC LIKE 'DISPONIBLE';

INSERT INTO `prestamo_items` (`ID_PRESTAMO`, `ID_EMPLEADO_FK`, `ID_ITEM_FK`, `CANTIDAD_ITEM`, `FECHA_INICIO_PRESTAMO`, `FECHA_FIN_PRESTAMO`, `ESTADO`, `CREATED_AT`, `UPDATED_AT`) VALUES (NULL, '2', '2', '5', '2022-03-17 20:47:11.000000', '', 'ACTIVO', '2022-03-17 20:47:11.000000', '2022-03-17 20:47:11.000000');

/* =========== PRUEBA DE SENTENCIAS MULTITABLA Y ACTIVAS =========== */

SELECT MANTENIMIENTOS.ID_MANTENIMIENTO, COMPUTADOR.SERIAL_PC, MANTENIMIENTOS.DESCRIPCION_MANTENIMIENTO, MANTENIMIENTOS.ESTADO, MANTENIMIENTOS.CREATED_AT, MANTENIMIENTOS.UPDATED_AT
FROM MANTENIMIENTOS INNER JOIN COMPUTADOR
ON MANTENIMIENTOS.ID_PC_FK = COMPUTADOR.ID_PC
WHERE MANTENIMIENTOS.ESTADO = 'ACTIVO' ;

SELECT USUARIO.ID_USUARIO, AREA_EMPRESA.NOMBRE_AREA_EMPRESA, USUARIO.NOMBRE_COMPLETO_USUARIO, USUARIO.CORREO_USUARIO, USUARIO.TIPO_DOCUMENTO_USUARIO, USUARIO.NUMERO_DOCUMENTO_USUARIO, USUARIO.FECHA_NACIMIENTO_USUARIO, USUARIO.NUMERO_CELULAR_USUARIO, USUARIO.NUMERO_FIJO_USUARIO, USUARIO.ESTADO , USUARIO.CREATED_AT , USUARIO.UPDATED_AT 
FROM USUARIO INNER JOIN AREA_EMPRESA
ON USUARIO.ID_EMPRESA_FK=AREA_EMPRESA.ID_AREA_EMPRESA
WHERE USUARIO.ESTADO = 'ACTIVO' ;

SELECT PRESTAMO.ID_PRESTAMO ,USUARIO.NOMBRE_COMPLETO_USUARIO ,COMPUTADOR.SERIAL_PC ,PRESTAMO.FECHA_INICIO_PRESTAMO ,PRESTAMO.FECHA_FIN_PRESTAMO ,PRESTAMO.ESTADO ,PRESTAMO.CREATED_AT ,PRESTAMO.UPDATED_AT 
FROM PRESTAMO INNER JOIN USUARIO
ON PRESTAMO.ID_EMPLEADO_FK=USUARIO.ID_USUARIO
INNER JOIN COMPUTADOR
ON PRESTAMO.ID_PC_FK=COMPUTADOR.ID_PC
WHERE PRESTAMO.ESTADO = 'ACTIVO' ;


SELECT USUARIO.ID_USUARIO, AREA_EMPRESA.NOMBRE_AREA_EMPRESA, USUARIO.ID_ROL_FK, USUARIO.NOMBRE_COMPLETO_USUARIO, USUARIO.CORREO_USUARIO, USUARIO.TIPO_DOCUMENTO_USUARIO, USUARIO.NUMERO_DOCUMENTO_USUARIO, USUARIO.FECHA_NACIMIENTO_USUARIO, USUARIO.NUMERO_CELULAR_USUARIO, USUARIO.NUMERO_FIJO_USUARIO, USUARIO.ESTADO , USUARIO.CREATED_AT , USUARIO.UPDATED_AT 
FROM USUARIO INNER JOIN AREA_EMPRESA
ON USUARIO.ID_EMPRESA_FK=AREA_EMPRESA.ID_AREA_EMPRESA
WHERE USUARIO.ESTADO = 'ACTIVO' ;

SELECT ID_ITEM,MODELO_ITEM,CANTIDAD_DISPONIBLE_ITEM,IMAGEN_ITEM FROM ITEMS WHERE ESTADO LIKE 'ACTIVO' AND CANTIDAD_DISPONIBLE_ITEM <= '1';

SELECT PRESTAMO_ITEMS.ID_PRESTAMO ,USUARIO.NOMBRE_COMPLETO_USUARIO ,ITEMS.MODELO_ITEM ,ITEMS.TIPO_ITEM ,PRESTAMO_ITEMS.FECHA_INICIO_PRESTAMO ,PRESTAMO_ITEMS.FECHA_FIN_PRESTAMO ,PRESTAMO_ITEMS.ESTADO ,PRESTAMO_ITEMS.CREATED_AT ,PRESTAMO_ITEMS.UPDATED_AT 
FROM PRESTAMO_ITEMS INNER JOIN USUARIO
ON PRESTAMO_ITEMS.ID_EMPLEADO_FK=USUARIO.ID_USUARIO
INNER JOIN ITEMS
ON PRESTAMO_ITEMS.ID_ITEM_FK=ITEMS.ID_ITEM
WHERE PRESTAMO_ITEMS.ESTADO = 'ACTIVO' ;

SELECT ID_USUARIO,ID_EMPRESA_FK ,ID_ROL_FK ,NOMBRE_COMPLETO_USUARIO,CORREO_USUARIO ,TIPO_DOCUMENTO_USUARIO,NUMERO_DOCUMENTO_USUARIO ,FECHA_NACIMIENTO_USUARIO,NUMERO_CELULAR_USUARIO ,NUMERO_FIJO_USUARIO,ESTADO,CREATED_AT	,UPDATED_AT FROM USUARIO WHERE CORREO_USUARIO ='martha@gmail.com' AND PASSWORD_USUARIO ='0fe63dc3c55437b3ddc6abe42a0f9c91ceba26eed7fa6022ded0d02b3ffd2e0bd0c58ff7db985dd3c4498247635419dc506fd519983b066d0c3e983d2d023ad5' AND ESTADO = 'ACTIVO';