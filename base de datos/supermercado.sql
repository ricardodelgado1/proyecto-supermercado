-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-11-2015 a las 12:07:31
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `supermercado`
-- 
CREATE DATABASE `supermercado` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `supermercado`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `cat_codigo` int(3) NOT NULL auto_increment,
  `cat_nombre` varchar(25) NOT NULL,
  PRIMARY KEY  (`cat_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=568 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (1, 'electrodomesticos');
INSERT INTO `categorias` VALUES (34, 'salud');
INSERT INTO `categorias` VALUES (76, 'alimentos');
INSERT INTO `categorias` VALUES (435, 'limpieza');
INSERT INTO `categorias` VALUES (566, 'enlatados');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_transaccion`
-- 

CREATE TABLE `detalle_transaccion` (
  `trande_codigo` int(5) NOT NULL,
  `trande_fecha` date NOT NULL,
  `trande_producto` varchar(15) NOT NULL,
  `trande_usuario` varchar(100) NOT NULL,
  `trande_cantidad` int(20) NOT NULL,
  `trande_valorproducto` int(20) NOT NULL,
  `trande_valortotal` int(40) NOT NULL,
  PRIMARY KEY  (`trande_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `detalle_transaccion`
-- 

INSERT INTO `detalle_transaccion` VALUES (0, '2015-11-13', 'papa criolla', 'ttt', 7, 5000, 35000);
INSERT INTO `detalle_transaccion` VALUES (1, '2015-11-05', 'arroz', 'Ricardo', 4, 9000, 36000);
INSERT INTO `detalle_transaccion` VALUES (676, '2015-11-25', 'carne cerdo', 'ricardo', 6, 30000, 180000);
INSERT INTO `detalle_transaccion` VALUES (4353, '2015-11-20', 'algodon', 'ttt', 2, 13233, 26466);
INSERT INTO `detalle_transaccion` VALUES (7667, '2015-11-12', 'jabon', 'ricardo', 24, 2000, 48000);
INSERT INTO `detalle_transaccion` VALUES (65756, '2015-11-12', 'choclitos de li', 'ttt', 6756, 2500, 67567);
INSERT INTO `detalle_transaccion` VALUES (67567, '2015-11-21', 'papa criolla', 'ttt', 777, 5000, 2147483647);
INSERT INTO `detalle_transaccion` VALUES (67568, '2015-11-13', 'cepillo', 'Ricardo', 7, 645, 4515);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `paises`
-- 

CREATE TABLE `paises` (
  `id` int(11) NOT NULL auto_increment,
  `iso` char(2) default NULL,
  `nombre` varchar(80) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

-- 
-- Volcar la base de datos para la tabla `paises`
-- 

INSERT INTO `paises` VALUES (1, 'AF', 'Afganistán');
INSERT INTO `paises` VALUES (2, 'AX', 'Islas Gland');
INSERT INTO `paises` VALUES (3, 'AL', 'Albania');
INSERT INTO `paises` VALUES (4, 'DE', 'Alemania');
INSERT INTO `paises` VALUES (5, 'AD', 'Andorra');
INSERT INTO `paises` VALUES (6, 'AO', 'Angola');
INSERT INTO `paises` VALUES (7, 'AI', 'Anguilla');
INSERT INTO `paises` VALUES (8, 'AQ', 'Antártida');
INSERT INTO `paises` VALUES (9, 'AG', 'Antigua y Barbuda');
INSERT INTO `paises` VALUES (10, 'AN', 'Antillas Holandesas');
INSERT INTO `paises` VALUES (11, 'SA', 'Arabia Saudí');
INSERT INTO `paises` VALUES (12, 'DZ', 'Argelia');
INSERT INTO `paises` VALUES (13, 'AR', 'Argentina');
INSERT INTO `paises` VALUES (14, 'AM', 'Armenia');
INSERT INTO `paises` VALUES (15, 'AW', 'Aruba');
INSERT INTO `paises` VALUES (16, 'AU', 'Australia');
INSERT INTO `paises` VALUES (17, 'AT', 'Austria');
INSERT INTO `paises` VALUES (18, 'AZ', 'Azerbaiyán');
INSERT INTO `paises` VALUES (19, 'BS', 'Bahamas');
INSERT INTO `paises` VALUES (20, 'BH', 'Bahréin');
INSERT INTO `paises` VALUES (21, 'BD', 'Bangladesh');
INSERT INTO `paises` VALUES (22, 'BB', 'Barbados');
INSERT INTO `paises` VALUES (23, 'BY', 'Bielorrusia');
INSERT INTO `paises` VALUES (24, 'BE', 'Bélgica');
INSERT INTO `paises` VALUES (25, 'BZ', 'Belice');
INSERT INTO `paises` VALUES (26, 'BJ', 'Benin');
INSERT INTO `paises` VALUES (27, 'BM', 'Bermudas');
INSERT INTO `paises` VALUES (28, 'BT', 'Bhután');
INSERT INTO `paises` VALUES (29, 'BO', 'Bolivia');
INSERT INTO `paises` VALUES (30, 'BA', 'Bosnia y Herzegovina');
INSERT INTO `paises` VALUES (31, 'BW', 'Botsuana');
INSERT INTO `paises` VALUES (32, 'BV', 'Isla Bouvet');
INSERT INTO `paises` VALUES (33, 'BR', 'Brasil');
INSERT INTO `paises` VALUES (34, 'BN', 'Brunéi');
INSERT INTO `paises` VALUES (35, 'BG', 'Bulgaria');
INSERT INTO `paises` VALUES (36, 'BF', 'Burkina Faso');
INSERT INTO `paises` VALUES (37, 'BI', 'Burundi');
INSERT INTO `paises` VALUES (38, 'CV', 'Cabo Verde');
INSERT INTO `paises` VALUES (39, 'KY', 'Islas Caimán');
INSERT INTO `paises` VALUES (40, 'KH', 'Camboya');
INSERT INTO `paises` VALUES (41, 'CM', 'Camerún');
INSERT INTO `paises` VALUES (42, 'CA', 'Canadá');
INSERT INTO `paises` VALUES (43, 'CF', 'República Centroafricana');
INSERT INTO `paises` VALUES (44, 'TD', 'Chad');
INSERT INTO `paises` VALUES (45, 'CZ', 'República Checa');
INSERT INTO `paises` VALUES (46, 'CL', 'Chile');
INSERT INTO `paises` VALUES (47, 'CN', 'China');
INSERT INTO `paises` VALUES (48, 'CY', 'Chipre');
INSERT INTO `paises` VALUES (49, 'CX', 'Isla de Navidad');
INSERT INTO `paises` VALUES (50, 'VA', 'Ciudad del Vaticano');
INSERT INTO `paises` VALUES (51, 'CC', 'Islas Cocos');
INSERT INTO `paises` VALUES (52, 'CO', 'Colombia');
INSERT INTO `paises` VALUES (53, 'KM', 'Comoras');
INSERT INTO `paises` VALUES (54, 'CD', 'República Democrática del Congo');
INSERT INTO `paises` VALUES (55, 'CG', 'Congo');
INSERT INTO `paises` VALUES (56, 'CK', 'Islas Cook');
INSERT INTO `paises` VALUES (57, 'KP', 'Corea del Norte');
INSERT INTO `paises` VALUES (58, 'KR', 'Corea del Sur');
INSERT INTO `paises` VALUES (59, 'CI', 'Costa de Marfil');
INSERT INTO `paises` VALUES (60, 'CR', 'Costa Rica');
INSERT INTO `paises` VALUES (61, 'HR', 'Croacia');
INSERT INTO `paises` VALUES (62, 'CU', 'Cuba');
INSERT INTO `paises` VALUES (63, 'DK', 'Dinamarca');
INSERT INTO `paises` VALUES (64, 'DM', 'Dominica');
INSERT INTO `paises` VALUES (65, 'DO', 'República Dominicana');
INSERT INTO `paises` VALUES (66, 'EC', 'Ecuador');
INSERT INTO `paises` VALUES (67, 'EG', 'Egipto');
INSERT INTO `paises` VALUES (68, 'SV', 'El Salvador');
INSERT INTO `paises` VALUES (69, 'AE', 'Emiratos Árabes Unidos');
INSERT INTO `paises` VALUES (70, 'ER', 'Eritrea');
INSERT INTO `paises` VALUES (71, 'SK', 'Eslovaquia');
INSERT INTO `paises` VALUES (72, 'SI', 'Eslovenia');
INSERT INTO `paises` VALUES (73, 'ES', 'España');
INSERT INTO `paises` VALUES (74, 'UM', 'Islas ultramarinas de Estados Unidos');
INSERT INTO `paises` VALUES (75, 'US', 'Estados Unidos');
INSERT INTO `paises` VALUES (76, 'EE', 'Estonia');
INSERT INTO `paises` VALUES (77, 'ET', 'Etiopía');
INSERT INTO `paises` VALUES (78, 'FO', 'Islas Feroe');
INSERT INTO `paises` VALUES (79, 'PH', 'Filipinas');
INSERT INTO `paises` VALUES (80, 'FI', 'Finlandia');
INSERT INTO `paises` VALUES (81, 'FJ', 'Fiyi');
INSERT INTO `paises` VALUES (82, 'FR', 'Francia');
INSERT INTO `paises` VALUES (83, 'GA', 'Gabón');
INSERT INTO `paises` VALUES (84, 'GM', 'Gambia');
INSERT INTO `paises` VALUES (85, 'GE', 'Georgia');
INSERT INTO `paises` VALUES (86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur');
INSERT INTO `paises` VALUES (87, 'GH', 'Ghana');
INSERT INTO `paises` VALUES (88, 'GI', 'Gibraltar');
INSERT INTO `paises` VALUES (89, 'GD', 'Granada');
INSERT INTO `paises` VALUES (90, 'GR', 'Grecia');
INSERT INTO `paises` VALUES (91, 'GL', 'Groenlandia');
INSERT INTO `paises` VALUES (92, 'GP', 'Guadalupe');
INSERT INTO `paises` VALUES (93, 'GU', 'Guam');
INSERT INTO `paises` VALUES (94, 'GT', 'Guatemala');
INSERT INTO `paises` VALUES (95, 'GF', 'Guayana Francesa');
INSERT INTO `paises` VALUES (96, 'GN', 'Guinea');
INSERT INTO `paises` VALUES (97, 'GQ', 'Guinea Ecuatorial');
INSERT INTO `paises` VALUES (98, 'GW', 'Guinea-Bissau');
INSERT INTO `paises` VALUES (99, 'GY', 'Guyana');
INSERT INTO `paises` VALUES (100, 'HT', 'Haití');
INSERT INTO `paises` VALUES (101, 'HM', 'Islas Heard y McDonald');
INSERT INTO `paises` VALUES (102, 'HN', 'Honduras');
INSERT INTO `paises` VALUES (103, 'HK', 'Hong Kong');
INSERT INTO `paises` VALUES (104, 'HU', 'Hungría');
INSERT INTO `paises` VALUES (105, 'IN', 'India');
INSERT INTO `paises` VALUES (106, 'ID', 'Indonesia');
INSERT INTO `paises` VALUES (107, 'IR', 'Irán');
INSERT INTO `paises` VALUES (108, 'IQ', 'Iraq');
INSERT INTO `paises` VALUES (109, 'IE', 'Irlanda');
INSERT INTO `paises` VALUES (110, 'IS', 'Islandia');
INSERT INTO `paises` VALUES (111, 'IL', 'Israel');
INSERT INTO `paises` VALUES (112, 'IT', 'Italia');
INSERT INTO `paises` VALUES (113, 'JM', 'Jamaica');
INSERT INTO `paises` VALUES (114, 'JP', 'Japón');
INSERT INTO `paises` VALUES (115, 'JO', 'Jordania');
INSERT INTO `paises` VALUES (116, 'KZ', 'Kazajstán');
INSERT INTO `paises` VALUES (117, 'KE', 'Kenia');
INSERT INTO `paises` VALUES (118, 'KG', 'Kirguistán');
INSERT INTO `paises` VALUES (119, 'KI', 'Kiribati');
INSERT INTO `paises` VALUES (120, 'KW', 'Kuwait');
INSERT INTO `paises` VALUES (121, 'LA', 'Laos');
INSERT INTO `paises` VALUES (122, 'LS', 'Lesotho');
INSERT INTO `paises` VALUES (123, 'LV', 'Letonia');
INSERT INTO `paises` VALUES (124, 'LB', 'Líbano');
INSERT INTO `paises` VALUES (125, 'LR', 'Liberia');
INSERT INTO `paises` VALUES (126, 'LY', 'Libia');
INSERT INTO `paises` VALUES (127, 'LI', 'Liechtenstein');
INSERT INTO `paises` VALUES (128, 'LT', 'Lituania');
INSERT INTO `paises` VALUES (129, 'LU', 'Luxemburgo');
INSERT INTO `paises` VALUES (130, 'MO', 'Macao');
INSERT INTO `paises` VALUES (131, 'MK', 'ARY Macedonia');
INSERT INTO `paises` VALUES (132, 'MG', 'Madagascar');
INSERT INTO `paises` VALUES (133, 'MY', 'Malasia');
INSERT INTO `paises` VALUES (134, 'MW', 'Malawi');
INSERT INTO `paises` VALUES (135, 'MV', 'Maldivas');
INSERT INTO `paises` VALUES (136, 'ML', 'Malí');
INSERT INTO `paises` VALUES (137, 'MT', 'Malta');
INSERT INTO `paises` VALUES (138, 'FK', 'Islas Malvinas');
INSERT INTO `paises` VALUES (139, 'MP', 'Islas Marianas del Norte');
INSERT INTO `paises` VALUES (140, 'MA', 'Marruecos');
INSERT INTO `paises` VALUES (141, 'MH', 'Islas Marshall');
INSERT INTO `paises` VALUES (142, 'MQ', 'Martinica');
INSERT INTO `paises` VALUES (143, 'MU', 'Mauricio');
INSERT INTO `paises` VALUES (144, 'MR', 'Mauritania');
INSERT INTO `paises` VALUES (145, 'YT', 'Mayotte');
INSERT INTO `paises` VALUES (146, 'MX', 'México');
INSERT INTO `paises` VALUES (147, 'FM', 'Micronesia');
INSERT INTO `paises` VALUES (148, 'MD', 'Moldavia');
INSERT INTO `paises` VALUES (149, 'MC', 'Mónaco');
INSERT INTO `paises` VALUES (150, 'MN', 'Mongolia');
INSERT INTO `paises` VALUES (151, 'MS', 'Montserrat');
INSERT INTO `paises` VALUES (152, 'MZ', 'Mozambique');
INSERT INTO `paises` VALUES (153, 'MM', 'Myanmar');
INSERT INTO `paises` VALUES (154, 'NA', 'Namibia');
INSERT INTO `paises` VALUES (155, 'NR', 'Nauru');
INSERT INTO `paises` VALUES (156, 'NP', 'Nepal');
INSERT INTO `paises` VALUES (157, 'NI', 'Nicaragua');
INSERT INTO `paises` VALUES (158, 'NE', 'Níger');
INSERT INTO `paises` VALUES (159, 'NG', 'Nigeria');
INSERT INTO `paises` VALUES (160, 'NU', 'Niue');
INSERT INTO `paises` VALUES (161, 'NF', 'Isla Norfolk');
INSERT INTO `paises` VALUES (162, 'NO', 'Noruega');
INSERT INTO `paises` VALUES (163, 'NC', 'Nueva Caledonia');
INSERT INTO `paises` VALUES (164, 'NZ', 'Nueva Zelanda');
INSERT INTO `paises` VALUES (165, 'OM', 'Omán');
INSERT INTO `paises` VALUES (166, 'NL', 'Países Bajos');
INSERT INTO `paises` VALUES (167, 'PK', 'Pakistán');
INSERT INTO `paises` VALUES (168, 'PW', 'Palau');
INSERT INTO `paises` VALUES (169, 'PS', 'Palestina');
INSERT INTO `paises` VALUES (170, 'PA', 'Panamá');
INSERT INTO `paises` VALUES (171, 'PG', 'Papúa Nueva Guinea');
INSERT INTO `paises` VALUES (172, 'PY', 'Paraguay');
INSERT INTO `paises` VALUES (173, 'PE', 'Perú');
INSERT INTO `paises` VALUES (174, 'PN', 'Islas Pitcairn');
INSERT INTO `paises` VALUES (175, 'PF', 'Polinesia Francesa');
INSERT INTO `paises` VALUES (176, 'PL', 'Polonia');
INSERT INTO `paises` VALUES (177, 'PT', 'Portugal');
INSERT INTO `paises` VALUES (178, 'PR', 'Puerto Rico');
INSERT INTO `paises` VALUES (179, 'QA', 'Qatar');
INSERT INTO `paises` VALUES (180, 'GB', 'Reino Unido');
INSERT INTO `paises` VALUES (181, 'RE', 'Reunión');
INSERT INTO `paises` VALUES (182, 'RW', 'Ruanda');
INSERT INTO `paises` VALUES (183, 'RO', 'Rumania');
INSERT INTO `paises` VALUES (184, 'RU', 'Rusia');
INSERT INTO `paises` VALUES (185, 'EH', 'Sahara Occidental');
INSERT INTO `paises` VALUES (186, 'SB', 'Islas Salomón');
INSERT INTO `paises` VALUES (187, 'WS', 'Samoa');
INSERT INTO `paises` VALUES (188, 'AS', 'Samoa Americana');
INSERT INTO `paises` VALUES (189, 'KN', 'San Cristóbal y Nevis');
INSERT INTO `paises` VALUES (190, 'SM', 'San Marino');
INSERT INTO `paises` VALUES (191, 'PM', 'San Pedro y Miquelón');
INSERT INTO `paises` VALUES (192, 'VC', 'San Vicente y las Granadinas');
INSERT INTO `paises` VALUES (193, 'SH', 'Santa Helena');
INSERT INTO `paises` VALUES (194, 'LC', 'Santa Lucía');
INSERT INTO `paises` VALUES (195, 'ST', 'Santo Tomé y Príncipe');
INSERT INTO `paises` VALUES (196, 'SN', 'Senegal');
INSERT INTO `paises` VALUES (197, 'CS', 'Serbia y Montenegro');
INSERT INTO `paises` VALUES (198, 'SC', 'Seychelles');
INSERT INTO `paises` VALUES (199, 'SL', 'Sierra Leona');
INSERT INTO `paises` VALUES (200, 'SG', 'Singapur');
INSERT INTO `paises` VALUES (201, 'SY', 'Siria');
INSERT INTO `paises` VALUES (202, 'SO', 'Somalia');
INSERT INTO `paises` VALUES (203, 'LK', 'Sri Lanka');
INSERT INTO `paises` VALUES (204, 'SZ', 'Suazilandia');
INSERT INTO `paises` VALUES (205, 'ZA', 'Sudáfrica');
INSERT INTO `paises` VALUES (206, 'SD', 'Sudán');
INSERT INTO `paises` VALUES (207, 'SE', 'Suecia');
INSERT INTO `paises` VALUES (208, 'CH', 'Suiza');
INSERT INTO `paises` VALUES (209, 'SR', 'Surinam');
INSERT INTO `paises` VALUES (210, 'SJ', 'Svalbard y Jan Mayen');
INSERT INTO `paises` VALUES (211, 'TH', 'Tailandia');
INSERT INTO `paises` VALUES (212, 'TW', 'Taiwán');
INSERT INTO `paises` VALUES (213, 'TZ', 'Tanzania');
INSERT INTO `paises` VALUES (214, 'TJ', 'Tayikistán');
INSERT INTO `paises` VALUES (215, 'IO', 'Territorio Británico del Océano Índico');
INSERT INTO `paises` VALUES (216, 'TF', 'Territorios Australes Franceses');
INSERT INTO `paises` VALUES (217, 'TL', 'Timor Oriental');
INSERT INTO `paises` VALUES (218, 'TG', 'Togo');
INSERT INTO `paises` VALUES (219, 'TK', 'Tokelau');
INSERT INTO `paises` VALUES (220, 'TO', 'Tonga');
INSERT INTO `paises` VALUES (221, 'TT', 'Trinidad y Tobago');
INSERT INTO `paises` VALUES (222, 'TN', 'Túnez');
INSERT INTO `paises` VALUES (223, 'TC', 'Islas Turcas y Caicos');
INSERT INTO `paises` VALUES (224, 'TM', 'Turkmenistán');
INSERT INTO `paises` VALUES (225, 'TR', 'Turquía');
INSERT INTO `paises` VALUES (226, 'TV', 'Tuvalu');
INSERT INTO `paises` VALUES (227, 'UA', 'Ucrania');
INSERT INTO `paises` VALUES (228, 'UG', 'Uganda');
INSERT INTO `paises` VALUES (229, 'UY', 'Uruguay');
INSERT INTO `paises` VALUES (230, 'UZ', 'Uzbekistán');
INSERT INTO `paises` VALUES (231, 'VU', 'Vanuatu');
INSERT INTO `paises` VALUES (232, 'VE', 'Venezuela');
INSERT INTO `paises` VALUES (233, 'VN', 'Vietnam');
INSERT INTO `paises` VALUES (234, 'VG', 'Islas Vírgenes Británicas');
INSERT INTO `paises` VALUES (235, 'VI', 'Islas Vírgenes de los Estados Unidos');
INSERT INTO `paises` VALUES (236, 'WF', 'Wallis y Futuna');
INSERT INTO `paises` VALUES (237, 'YE', 'Yemen');
INSERT INTO `paises` VALUES (238, 'DJ', 'Yibuti');
INSERT INTO `paises` VALUES (239, 'ZM', 'Zambia');
INSERT INTO `paises` VALUES (240, 'ZW', 'Zimbabue');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `prod_codigo` int(5) NOT NULL,
  `prod_nombre` varchar(15) NOT NULL,
  `prod_fecha` date NOT NULL,
  `prod_categoria` varchar(100) NOT NULL,
  `prod_provedor` varchar(100) NOT NULL,
  `prod_precio` int(20) NOT NULL,
  `prod_descripcion` varchar(100) NOT NULL,
  `prod_imagen` varchar(100) NOT NULL,
  PRIMARY KEY  (`prod_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (43, 'cepillo', '2015-11-14', 'salud', 'colgate', 645, 'limpieza del hogar', 'imagenes/cepillo.jpg');
INSERT INTO `productos` VALUES (1234, 'arroz', '2015-11-21', 'alimentos', 'alimentos', 9000, 'los mejores alimentos del pais', 'imagenes/arroz.jpg');
INSERT INTO `productos` VALUES (4343, 'arequipe', '2015-11-19', 'alimentos', 'alimentos', 1233, 'delicioso ', 'imagenes/arequipe.jpg');
INSERT INTO `productos` VALUES (4344, 'jabon', '2015-11-13', 'limpieza', 'colgate', 2000, 'jabon para el baño', 'imagenes/jabon.jpg');
INSERT INTO `productos` VALUES (4345, 'Televisor LCD', '2015-11-19', 'electrodomesticos', 'electrodomesticos', 500000, 'el mejor televisor', 'imagenes/televisor.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedores`
-- 

CREATE TABLE `proveedores` (
  `prove_codigo` int(3) NOT NULL auto_increment,
  `prove_nombre` varchar(25) NOT NULL,
  PRIMARY KEY  (`prove_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=538 ;

-- 
-- Volcar la base de datos para la tabla `proveedores`
-- 

INSERT INTO `proveedores` VALUES (1, 'colgate palmolive');
INSERT INTO `proveedores` VALUES (12, 'arroz del hulia');
INSERT INTO `proveedores` VALUES (45, 'quimicos del sur');
INSERT INTO `proveedores` VALUES (56, 'alimentos del sur');
INSERT INTO `proveedores` VALUES (535, 'carnicos del sur');
INSERT INTO `proveedores` VALUES (536, 'electrodomesticos de nari');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios_servicio`
-- 

CREATE TABLE `usuarios_servicio` (
  `ususer_documento` varchar(10) NOT NULL,
  `ususer_apellidos` varchar(100) NOT NULL,
  `ususer_nombres` varchar(100) NOT NULL,
  `ususer_direccion` varchar(100) NOT NULL,
  `ususer_telefono` int(10) NOT NULL,
  `ususer_clave` int(5) NOT NULL,
  PRIMARY KEY  (`ususer_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios_servicio`
-- 

INSERT INTO `usuarios_servicio` VALUES ('1065323239', 'Delgado Obando', 'Ricardo', 'jongovito', 2147483647, 123);
INSERT INTO `usuarios_servicio` VALUES ('108532323', 'Delgado Obando', 'Deiby ', 'la floresta', 7220014, 111);
INSERT INTO `usuarios_servicio` VALUES ('1085323329', 'Delgado Obando', 'Ricardo ', 'manzana f casa 23 Jongovito', 2147483647, 4444);
INSERT INTO `usuarios_servicio` VALUES ('9508171714', 'Delgado ', 'Gustavo ', 'centro', 546789, 123);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios_sistema`
-- 

CREATE TABLE `usuarios_sistema` (
  `ususis_documento` varchar(10) NOT NULL,
  `ususis_apellidos` varchar(100) NOT NULL,
  `ususis_nombres` varchar(100) NOT NULL,
  `ususis_direccion` varchar(50) NOT NULL,
  `ususis_cargo` varchar(50) NOT NULL,
  `ususis_pais` varchar(100) NOT NULL,
  `ususis_telefono` int(10) NOT NULL,
  `ususis_clave` int(5) NOT NULL,
  PRIMARY KEY  (`ususis_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios_sistema`
-- 

INSERT INTO `usuarios_sistema` VALUES ('1004192804', 'delgado', 'deiby', 'jongovito', 'jefe ', 'Antigua', 2147483647, 123);
INSERT INTO `usuarios_sistema` VALUES ('1434234234', 'obando', 'dilan', 'santafe', 'vendedor', 'Argentina', 4543543, 123);
INSERT INTO `usuarios_sistema` VALUES ('9508171714', 'cabrera', 'ricardo', 'catanbuco', 'jefe de operaciones', 'Argelia', 646363, 123);
INSERT INTO `usuarios_sistema` VALUES ('98387234', 'admin', 'admin', 'admin', 'admin', 'Afganistán', 123, 0);
