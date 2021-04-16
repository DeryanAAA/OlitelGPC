

CREATE TABLE `actividad` (
  `NOM_ACTIVIDAD` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `DESC_ACTIVIDAD` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_ACTIVIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PANEL` int(11) DEFAULT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `PORCENTAJE_ACTIVIDAD` int(11) NOT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_TERMINO` date DEFAULT NULL,
  `META_ACTIVIDAD` int(11) DEFAULT NULL,
  `AVANCE_ACTIVIDAD` int(11) DEFAULT NULL,
  `ENCARGADO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `POSICION` int(11) NOT NULL,
  `CREADO` date DEFAULT NULL,
  PRIMARY KEY (`ID_ACTIVIDAD`),
  KEY `FK_RELATIONSHIP_34` (`ID_PANEL`),
  KEY `FK_RELATIONSHIP_37` (`ID_TIPO`),
  CONSTRAINT `FK_RELATIONSHIP_34` FOREIGN KEY (`ID_PANEL`) REFERENCES `panel` (`ID_PANEL`),
  CONSTRAINT `FK_RELATIONSHIP_37` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_actividad` (`ID_TIPO`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO actividad VALUES("TST3","SAFAS","6","1","1","100","2020-10-01","2020-10-30","12","12","YTZA BRUNA","0","2020-09-14");
INSERT INTO actividad VALUES("Actividad 3","el team debe hacer blablablabal","7","4","1","140","2020-09-25","2020-09-26","50","70","YTZA BRUNA","1","2020-09-16");
INSERT INTO actividad VALUES("Actividad 4","SAFAS","8","2","1","100","2020-09-30","2020-09-06","100","100","YTZA BRUNA","0","2020-09-16");
INSERT INTO actividad VALUES("TST","SAFAS","9","3","1","100","2020-09-29","2020-09-19","800","800","YTZA BRUNA","2","2020-09-16");
INSERT INTO actividad VALUES("Actividad z","en esta actividad","10","3","1","100","2020-09-22","2020-09-24","800","800","YTZA BRUNA","1","2020-09-17");
INSERT INTO actividad VALUES("actividad y","asdf","11","1","1","100","2020-09-18","2020-09-18","900","900","YTZA BRUNA","1","2020-09-17");
INSERT INTO actividad VALUES("prueba de panel","probando","12","5","1","0","0000-00-00","0000-00-00","0","0","st1","0","2020-10-08");
INSERT INTO actividad VALUES("Lineas Anillo 3","tirar cables en anillo 3","13","3","1","100","2020-10-08","2020-10-15","100","100","st1","0","2020-10-08");
INSERT INTO actividad VALUES("Lineas Anillo 1,2 y 4"," prueba 1","14","8","1","0","2020-10-21","2020-10-01","100000","0","st1","0","2020-10-14");
INSERT INTO actividad VALUES("muffas","muffas odu","15","9","1","600","2020-10-21","2020-10-21","8","48","jenibeth D","0","2020-10-14");
INSERT INTO actividad VALUES("Lineas Anillo 1,2 y 4","linea 1, 2 y 4","16","9","1","600","0000-00-00","2020-10-20","10","60","jenibeth D","0","2020-10-14");
INSERT INTO actividad VALUES("linea 1","anillos","17","10","1","100","2020-11-06","2020-12-03","5","5","jenibeth D","0","2020-10-14");
INSERT INTO actividad VALUES("muffas ST","prueba muffas ST","18","11","1","0","2020-10-12","2020-10-31","100","0","st1","0","2020-10-14");
INSERT INTO actividad VALUES("linea 1","dsf","19","8","1","0","2020-10-28","2020-10-22","0","5","jenibeth D","0","2020-10-15");
INSERT INTO actividad VALUES("sd","asd","20","8","1","100","0000-00-00","0000-00-00","0","0","jenibeth D","0","2020-10-15");
INSERT INTO actividad VALUES("actividad 1"," prueba 1","21","15","1","100","2020-10-23","2020-10-28","5","0","   jenibeth D","0","2020-10-15");
INSERT INTO actividad VALUES("prueba de panel"," esto es una prueba para ver la longitud del campo y asi visualizar la tabla de observaciones de las actividades","23","4","1","500","2020-10-13","2020-10-31","2","10","st1","0","2020-10-20");
INSERT INTO actividad VALUES("actividad 1","","28","23","1","0","0000-00-00","0000-00-00","0","2","Jenibeth d","0","2020-10-21");
INSERT INTO actividad VALUES("linea 1","","32","24","1","0","0000-00-00","0000-00-00","0","0","st1","0","2020-10-21");
INSERT INTO actividad VALUES("actividad 1","","33","25","1","0","0000-00-00","0000-00-00","0","0","st1","0","2020-10-21");
INSERT INTO actividad VALUES("HPH","","34","29","1","100","2020-12-01","2020-12-04","220","220","jenibeth D","0","2020-10-22");
INSERT INTO actividad VALUES("ODF","","35","27","1","100","2020-10-22","2020-11-05","2","2","jenibeth D","0","2020-10-22");
INSERT INTO actividad VALUES("BSP","","36","28","1","0","2020-10-29","2020-10-28","0","0","st1","0","2020-10-22");



CREATE TABLE `agrupacion` (
  `ID_AGRUP` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_AGRUP` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_AGRUP`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO agrupacion VALUES("1","agrup1");



CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_CARGO` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_CARGO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cargo VALUES("1","Supervisor");
INSERT INTO cargo VALUES("2","Coordinador");



CREATE TABLE `cargo_de_persona` (
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  PRIMARY KEY (`ID_CARGO`,`ID_PERSONAS`),
  KEY `FK_RELATIONSHIP_2` (`ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PERSONAS`) REFERENCES `personas` (`ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_CARGO`) REFERENCES `cargo` (`ID_CARGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cargo_de_persona VALUES("1","1");
INSERT INTO cargo_de_persona VALUES("1","8");
INSERT INTO cargo_de_persona VALUES("2","1");
INSERT INTO cargo_de_persona VALUES("2","7");



CREATE TABLE `centro_de_costo` (
  `NOM_CC` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_CC` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LINEA` int(11) NOT NULL,
  `ID_AGRUP` int(11) NOT NULL,
  `ID_DETALLE` int(11) NOT NULL,
  `ESTADO` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_CC`),
  KEY `FK_RELATIONSHIP_19` (`ID_AGRUP`),
  KEY `FK_RELATIONSHIP_20` (`ID_LINEA`),
  KEY `FK_RELATIONSHIP_21` (`ID_DETALLE`),
  CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_AGRUP`) REFERENCES `agrupacion` (`ID_AGRUP`),
  CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_LINEA`) REFERENCES `linea_de_negocio` (`ID_LINEA`),
  CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_DETALLE`) REFERENCES `detalle` (`ID_DETALLE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO centro_de_costo VALUES("blabal","1","1","1","1","Activo");



CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_REGION` int(11) DEFAULT NULL,
  `NOM_CIUDAD` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_CIUDAD`),
  KEY `FK_RELATIONSHIP_22` (`ID_REGION`),
  CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`ID_REGION`) REFERENCES `region` (`ID_REGION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO ciudad VALUES("1","1","santiago");



CREATE TABLE `cliente` (
  `RUT_CL` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_CL` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_CL` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_CL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO cliente VALUES("121111111","Entel","1");



CREATE TABLE `comprometidos` (
  `CP` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  PRIMARY KEY (`CP`,`ID_CARGO`,`ID_PERSONAS`),
  KEY `FK_RELATIONSHIP_5` (`ID_CARGO`,`ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_CARGO`, `ID_PERSONAS`) REFERENCES `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO comprometidos VALUES("1","1","1");
INSERT INTO comprometidos VALUES("3","1","8");
INSERT INTO comprometidos VALUES("3","2","1");
INSERT INTO comprometidos VALUES("4","1","8");
INSERT INTO comprometidos VALUES("4","2","7");
INSERT INTO comprometidos VALUES("6","1","1");
INSERT INTO comprometidos VALUES("6","1","8");
INSERT INTO comprometidos VALUES("6","2","7");
INSERT INTO comprometidos VALUES("7","1","1");
INSERT INTO comprometidos VALUES("7","2","7");
INSERT INTO comprometidos VALUES("8","1","1");
INSERT INTO comprometidos VALUES("8","1","8");
INSERT INTO comprometidos VALUES("9","1","1");
INSERT INTO comprometidos VALUES("9","1","8");



CREATE TABLE `concepto` (
  `CP` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CC` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `ID_SUPENTEL` int(11) DEFAULT NULL,
  `ID_JDE` int(11) DEFAULT NULL,
  `ID_CIUDAD` int(11) DEFAULT NULL,
  `ID_EO_COB` int(11) DEFAULT NULL,
  `NOMBRE` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  `CIUDAD` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SITIO` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESTADO` char(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AVANCE` int(11) DEFAULT NULL,
  `DESCRIPCION` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `OTT` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `INI_ASIG` date DEFAULT NULL,
  `INI_REAL` date DEFAULT NULL,
  `TER_ASIG` date DEFAULT NULL,
  `TER_REAL` date DEFAULT NULL,
  `FEC_INF` date DEFAULT NULL,
  `FECHADEASIGNACION` date NOT NULL,
  `CREADOPOR` char(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VALORPROYECTO` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`CP`),
  KEY `FK_RELATIONSHIP_10` (`ID_TIPO`),
  KEY `FK_RELATIONSHIP_24` (`ID_SUPENTEL`),
  KEY `FK_RELATIONSHIP_25` (`ID_JDE`),
  KEY `FK_RELATIONSHIP_26` (`ID_CIUDAD`),
  KEY `FK_RELATIONSHIP_27` (`ID_EO_COB`),
  KEY `FK_RELATIONSHIP_7` (`ID_CC`),
  CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo` (`ID_TIPO`),
  CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`ID_SUPENTEL`) REFERENCES `supentel` (`ID_SUPENTEL`),
  CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`ID_JDE`) REFERENCES `jefe_entel` (`ID_JDE`),
  CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`ID_CIUDAD`) REFERENCES `ciudad` (`ID_CIUDAD`),
  CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`ID_EO_COB`) REFERENCES `estado_cobranza` (`ID_EO_COB`),
  CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_CC`) REFERENCES `centro_de_costo` (`ID_CC`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO concepto VALUES("1","1","1","1","1","1","","proyecto","2020-09-04","","sitiox","Activo","0","blabla","123","2020-10-01","2020-10-03","2020-09-22","2020-09-25","2020-10-03","2020-09-22","197462647","");
INSERT INTO concepto VALUES("2","1","1","1","1","1","","Prueba 2","2020-09-17","","st","Activo","0","blabla","123","2020-10-03","2020-09-24","2020-09-29","2020-09-26","2020-10-02","2020-09-18","111111111","");
INSERT INTO concepto VALUES("3","1","1","1","1","1","","alvarez","2020-10-09","","","Activo","0","ejemplo de proyecto","5","2020-10-12","2020-10-09","2020-10-16","2020-10-23","2020-10-30","2020-10-09","11111111-6","");
INSERT INTO concepto VALUES("4","1","1","1","1","1","","Toledo","2020-10-14","","AS201","Activo","0","proyecto alvarez toledo","1","2020-10-19","2020-10-26","2020-11-07","0000-00-00","2020-11-09","2020-10-12","11111111-6","");
INSERT INTO concepto VALUES("5","1","1","1","1","1","","rancos","2020-10-21","","AS201"," Activo","2","ejemplo de proyecto","1","0000-00-00","2020-10-07","0000-00-00","0000-00-00","0000-00-00","0000-00-00","11111111-6","");
INSERT INTO concepto VALUES("6","1","1","1","1","1","","santiago RM","2020-10-21","","AS2013","Pendiente","10","ejemplo de proyecto","1","2020-10-27","2020-10-07","2020-10-12","2020-10-28","2020-10-06","2020-10-19","11111111-6","");
INSERT INTO concepto VALUES("7","1","1","1","1","1","","santiago","2020-10-21","","","Activo","0","gfgh","4","0000-00-00","0000-00-00","0000-00-00","0000-00-00","0000-00-00","0000-00-00","11111111-6","");
INSERT INTO concepto VALUES("8","1","1","1","1","1","","Gto","2020-10-22","","AS2013"," Activo","10","proyecto prueba","251","2020-10-22","2020-10-29","2020-10-30","2020-10-17","2020-10-27","2020-10-22","11111111-6","");
INSERT INTO concepto VALUES("9","1","1","1","1","1","","Alvarez de Toledo","2020-10-22","","na"," Activo","61","pol�gono de 4 anillo y un uplink","0","2020-06-01","2020-06-01","2020-11-15","0000-00-00","0000-00-00","2020-05-01","11111111-6","");



CREATE TABLE `detalle` (
  `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_DET` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_DETALLE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO detalle VALUES("1","det 1");



CREATE TABLE `detalle_actividad` (
  `FECHA` date NOT NULL,
  `ID_ACTIVIDAD` int(11) DEFAULT NULL,
  `DESCRIPCION` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_DETALLE`),
  KEY `FK_RELATIONSHIP_33` (`ID_ACTIVIDAD`),
  CONSTRAINT `FK_RELATIONSHIP_33` FOREIGN KEY (`ID_ACTIVIDAD`) REFERENCES `actividad` (`ID_ACTIVIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO detalle_actividad VALUES("2020-09-16","6","Se completó la tarea exitosamente","1");
INSERT INTO detalle_actividad VALUES("2020-09-16","7","Se puso a llover uwu","2");
INSERT INTO detalle_actividad VALUES("2020-09-16","7","Se puso a llover uwu","3");
INSERT INTO detalle_actividad VALUES("2020-09-16","8","Se p","4");
INSERT INTO detalle_actividad VALUES("2020-09-16","8","Se p","5");
INSERT INTO detalle_actividad VALUES("2020-09-16","8","Se completó la tarea exitosamente","6");
INSERT INTO detalle_actividad VALUES("2020-09-16","9","blabl","7");
INSERT INTO detalle_actividad VALUES("2020-09-16","9","Se puso a llover uwu","8");
INSERT INTO detalle_actividad VALUES("2020-09-16","9","Se puso a llover uwu","9");
INSERT INTO detalle_actividad VALUES("2020-09-16","9","algo pasó","10");
INSERT INTO detalle_actividad VALUES("2020-09-16","9","Se completó la tarea exitosamente","11");
INSERT INTO detalle_actividad VALUES("2020-09-17","10","se puso a llover","12");
INSERT INTO detalle_actividad VALUES("2020-09-17","10","Se completó la tarea exitosamente","13");
INSERT INTO detalle_actividad VALUES("2020-09-17","11","Hubo un accidente","14");
INSERT INTO detalle_actividad VALUES("2020-09-17","11","Se completó la tarea exitosamente","15");
INSERT INTO detalle_actividad VALUES("2020-10-08","6","Se completó la tarea exitosamente","16");
INSERT INTO detalle_actividad VALUES("2020-10-08","6","Se completó la tarea exitosamente","17");
INSERT INTO detalle_actividad VALUES("2020-10-08","6","Se completó la tarea exitosamente","18");
INSERT INTO detalle_actividad VALUES("2020-10-08","6","Se completó la tarea exitosamente","19");
INSERT INTO detalle_actividad VALUES("2020-10-08","7","problemas de clima","20");
INSERT INTO detalle_actividad VALUES("2020-10-08","7","Se completó la tarea exitosamente","21");
INSERT INTO detalle_actividad VALUES("2020-10-08","7","Se completó la tarea exitosamente","22");
INSERT INTO detalle_actividad VALUES("2020-10-08","7","prueba","23");
INSERT INTO detalle_actividad VALUES("2020-10-08","8","Se completó la tarea exitosamente","24");
INSERT INTO detalle_actividad VALUES("2020-10-08","8","Se completó la tarea exitosamente","25");
INSERT INTO detalle_actividad VALUES("2020-10-08","8","Se completó la tarea exitosamente","26");
INSERT INTO detalle_actividad VALUES("2020-10-08","8","Se completó la tarea exitosamente","27");
INSERT INTO detalle_actividad VALUES("2020-10-08","8","Se completó la tarea exitosamente","28");
INSERT INTO detalle_actividad VALUES("2020-10-08","6","Se completó la tarea exitosamente","29");
INSERT INTO detalle_actividad VALUES("2020-10-13","8","Se completó la tarea exitosamente","30");
INSERT INTO detalle_actividad VALUES("2020-10-13","8","Se completó la tarea exitosamente","31");
INSERT INTO detalle_actividad VALUES("2020-10-14","13","Se completó la tarea exitosamente","32");
INSERT INTO detalle_actividad VALUES("2020-10-14","17","Se completó la tarea exitosamente","33");
INSERT INTO detalle_actividad VALUES("2020-10-14","17","Se completó la tarea exitosamente","34");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","se extendió el proceso","35");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","Se completó la tarea exitosamente","36");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","sa","37");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","s","38");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","s","39");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","dsf","40");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","fdg","41");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","fsdaf","42");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","dsf","43");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","sdsa","44");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","Se completó la tarea exitosamente","45");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","sdaf","46");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","Se completó la tarea exitosamente","47");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","jb","48");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","Se completó la tarea exitosamente","49");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","asdsad","50");
INSERT INTO detalle_actividad VALUES("2020-10-15","21","Se completó la tarea exitosamente","51");
INSERT INTO detalle_actividad VALUES("2020-10-15","15","faltó material","52");
INSERT INTO detalle_actividad VALUES("2020-10-15","16","Se completó la tarea exitosamente","53");
INSERT INTO detalle_actividad VALUES("2020-10-15","15","detalle actividad","54");
INSERT INTO detalle_actividad VALUES("2020-10-15","15","problemas en la vía con el clima","55");
INSERT INTO detalle_actividad VALUES("2020-10-16","16","prueba","56");
INSERT INTO detalle_actividad VALUES("2020-10-16","16","Se completó la tarea exitosamente","57");
INSERT INTO detalle_actividad VALUES("2020-10-16","16","prueba","58");
INSERT INTO detalle_actividad VALUES("2020-10-16","16","Se completó la tarea exitosamente","59");
INSERT INTO detalle_actividad VALUES("2020-10-16","19","Se completó la tarea exitosamente","60");
INSERT INTO detalle_actividad VALUES("2020-10-16","19","problemas de clima","61");
INSERT INTO detalle_actividad VALUES("2020-10-20","23","esto es una prueba para ver la longitud del campo y asi visualizar la tabla de observaciones de las actividades 	","62");
INSERT INTO detalle_actividad VALUES("2020-10-21","28","no pudimos llegar a tiempo para culminar el trabajo","63");
INSERT INTO detalle_actividad VALUES("2020-10-22","16","problemas en la via","64");
INSERT INTO detalle_actividad VALUES("2020-10-22","20","prueba","65");
INSERT INTO detalle_actividad VALUES("2020-10-22","15","Se completó la tarea exitosamente","66");
INSERT INTO detalle_actividad VALUES("2020-10-22","15","problemas en la via","67");
INSERT INTO detalle_actividad VALUES("2020-10-22","17","Se completó la tarea exitosamente","68");
INSERT INTO detalle_actividad VALUES("2020-10-22","34","se agregaron","69");
INSERT INTO detalle_actividad VALUES("2020-10-22","34","faltan materiales","70");
INSERT INTO detalle_actividad VALUES("2020-10-22","34","Se completó la tarea exitosamente","71");
INSERT INTO detalle_actividad VALUES("2020-10-22","35","se extendio el proyecto","72");
INSERT INTO detalle_actividad VALUES("2020-10-22","35","Se completó la tarea exitosamente","73");
INSERT INTO detalle_actividad VALUES("2020-10-22","15","falto material","74");
INSERT INTO detalle_actividad VALUES("2020-10-22","20","Se completó la tarea exitosamente","75");



CREATE TABLE `estado_cobranza` (
  `ID_EO_COB` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_EO_COB` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_EO_COB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `factura` (
  `NFACT` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `VALOR` bigint(20) NOT NULL,
  `ID_FACT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CL` int(11) NOT NULL,
  `F_FACTURA` date DEFAULT NULL,
  `POR_FACTURAR` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_FACT`),
  KEY `FK_RELATIONSHIP_12` (`ID_CL`),
  CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_CL`) REFERENCES `cliente` (`ID_CL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO factura VALUES("456","5000","1","1","2020-09-26","5000");



CREATE TABLE `fase` (
  `CP` int(11) NOT NULL,
  `ID_FASE` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOM_FASE` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `AVANCE_FASE` int(11) NOT NULL,
  PRIMARY KEY (`ID_FASE`),
  KEY `FK_RELATIONSHIP_31` (`CP`),
  CONSTRAINT `FK_RELATIONSHIP_31` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO fase VALUES("1","1","Fase 1","67");
INSERT INTO fase VALUES("1","2","Fase 2","0");
INSERT INTO fase VALUES("2","3","Prueba","0");
INSERT INTO fase VALUES("3","4","Fase 1","0");
INSERT INTO fase VALUES("3","5","fase 2","50");
INSERT INTO fase VALUES("4","6","Anillo 1","0");
INSERT INTO fase VALUES("4","7","Anillo 2","0");
INSERT INTO fase VALUES("4","8","Anillo 3","100");
INSERT INTO fase VALUES("5","9","fase 2","0");
INSERT INTO fase VALUES("5","10","pueba1","0");
INSERT INTO fase VALUES("5","11","prueba3","0");
INSERT INTO fase VALUES("5","12","prueba4","0");
INSERT INTO fase VALUES("5","13","se","0");
INSERT INTO fase VALUES("6","14","Inicial","0");
INSERT INTO fase VALUES("6","15","fase 2","0");
INSERT INTO fase VALUES("7","16","Fase 1","0");
INSERT INTO fase VALUES("8","17","anillo","0");
INSERT INTO fase VALUES("8","18","tirado de cables","0");
INSERT INTO fase VALUES("8","19","w28","0");
INSERT INTO fase VALUES("9","20","Anillo 1","67");
INSERT INTO fase VALUES("9","21","Anillo 2","0");
INSERT INTO fase VALUES("9","22","Anillo 2","0");
INSERT INTO fase VALUES("1","23","anillo3","0");



CREATE TABLE `informe_de_pago` (
  `ID_IP` int(11) NOT NULL AUTO_INCREMENT,
  `CP` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `NRO_COTI` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESTADO` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAENVIOIP` date DEFAULT NULL,
  `NIP` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VALOR_IP` bigint(20) DEFAULT NULL,
  `VALOR_FACTURADO` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID_IP`),
  KEY `FK_RELATIONSHIP_17` (`CP`),
  KEY `FK_RELATIONSHIP_18` (`ID_TIPO`),
  CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`),
  CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_informe` (`ID_TIPO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `involucrados_en_cc` (
  `ID_CC` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  PRIMARY KEY (`ID_CC`,`ID_CARGO`,`ID_PERSONAS`),
  KEY `FK_RELATIONSHIP_8` (`ID_CARGO`,`ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_CARGO`, `ID_PERSONAS`) REFERENCES `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`),
  CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_CC`) REFERENCES `centro_de_costo` (`ID_CC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `jefe_entel` (
  `ID_JDE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_JDE` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_JDE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO jefe_entel VALUES("1","jefazo");



CREATE TABLE `linea_de_negocio` (
  `ID_LINEA` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_LINEA` char(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_LINEA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO linea_de_negocio VALUES("1","li1");



CREATE TABLE `medida` (
  `ID_MEDIDA` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_MEDIDA` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_MEDIDA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO medida VALUES("1","UNIDAD");
INSERT INTO medida VALUES("2","METROS");



CREATE TABLE `oc` (
  `ID_OC` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FACT` int(11) NOT NULL,
  `NOC` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_OC`),
  KEY `FK_RELATIONSHIP_13` (`ID_FACT`),
  CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_FACT`) REFERENCES `factura` (`ID_FACT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO oc VALUES("2","1","1235");



CREATE TABLE `pago_fact` (
  `ID_IP` int(11) NOT NULL,
  `ID_FACT` int(11) NOT NULL,
  PRIMARY KEY (`ID_IP`,`ID_FACT`),
  KEY `FK_RELATIONSHIP_29` (`ID_FACT`),
  CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`ID_FACT`) REFERENCES `factura` (`ID_FACT`),
  CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`ID_IP`) REFERENCES `informe_de_pago` (`ID_IP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `panel` (
  `ID_PANEL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FASE` bigint(20) DEFAULT NULL,
  `NOMBRE_PANEL` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_PANEL`),
  KEY `FK_RELATIONSHIP_32` (`ID_FASE`),
  CONSTRAINT `FK_RELATIONSHIP_32` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO panel VALUES("1","1","Panel 1");
INSERT INTO panel VALUES("2","1","Panel 2");
INSERT INTO panel VALUES("3","1","Panel 3");
INSERT INTO panel VALUES("4","1","Panel 4");
INSERT INTO panel VALUES("5","1","panel 5");
INSERT INTO panel VALUES("6","1","panel 6");
INSERT INTO panel VALUES("7","3","Panel");
INSERT INTO panel VALUES("8","4","Iniciar");
INSERT INTO panel VALUES("9","5","Inicio");
INSERT INTO panel VALUES("10","5","en proceso");
INSERT INTO panel VALUES("11","5","En Ejecución");
INSERT INTO panel VALUES("12","6","Inicio");
INSERT INTO panel VALUES("13","6","En Proceso");
INSERT INTO panel VALUES("14","6","Terminado");
INSERT INTO panel VALUES("15","8","inicial");
INSERT INTO panel VALUES("16","11","d");
INSERT INTO panel VALUES("17","14","Inicio");
INSERT INTO panel VALUES("18","14","en proceso");
INSERT INTO panel VALUES("19","14","ejecutando");
INSERT INTO panel VALUES("20","14","termino");
INSERT INTO panel VALUES("21","14","final");
INSERT INTO panel VALUES("22","14","g");
INSERT INTO panel VALUES("23","15","Inicio");
INSERT INTO panel VALUES("24","15","en proceso");
INSERT INTO panel VALUES("25","16","Panel 1");
INSERT INTO panel VALUES("26","2","inicio");
INSERT INTO panel VALUES("27","20","Cubicación");
INSERT INTO panel VALUES("28","20","Panel2");
INSERT INTO panel VALUES("29","20","En Ejecución");
INSERT INTO panel VALUES("30","20","Terminado");
INSERT INTO panel VALUES("31","23","Inicio");
INSERT INTO panel VALUES("32","23","en proceso");



CREATE TABLE `personas` (
  `RUT` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_PERSONAS` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) NOT NULL,
  `CLAVE` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `ACTIVO` char(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PERSONAS`),
  KEY `FK_RELATIONSHIP_23` (`ID_ROL`),
  CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_ROL`) REFERENCES `rol` (`ID_ROL`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO personas VALUES("222222222","st1","1","4","Oli2020","si");
INSERT INTO personas VALUES("111111111","PEPE","2","1","Oli2020","si");
INSERT INTO personas VALUES("333333333","cobr1","3","3","blabla","si");
INSERT INTO personas VALUES("26047185-6","Jenibeth Garcia","4","3","Oli2020","si");
INSERT INTO personas VALUES("11111111-6","Jenibeth","5","2","2020Oli","si");
INSERT INTO personas VALUES("11111111-0","Jenibeth G","6","1","Oli2020.","si");
INSERT INTO personas VALUES("11111111-1","Jenibeth d","7","4","2020Oli.","si");
INSERT INTO personas VALUES("260471856","jenibeth D","8","4","2020Oli.","si");



CREATE TABLE `region` (
  `ID_REGION` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_REGION` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_REGION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO region VALUES("1","RM");



CREATE TABLE `registro_hist` (
  `ID_HIST` int(11) NOT NULL AUTO_INCREMENT,
  `DET_HIST` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_HIST`),
  KEY `FK_RELATIONSHIP_35` (`CP`),
  CONSTRAINT `FK_RELATIONSHIP_35` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_ROL` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO rol VALUES("1","ADMINISTRADOR");
INSERT INTO rol VALUES("2","USUARIO NORMAL");
INSERT INTO rol VALUES("3","COBRANZA");
INSERT INTO rol VALUES("4","Supervisor Técnico");



CREATE TABLE `sitio` (
  `ID_SITIO` int(11) NOT NULL AUTO_INCREMENT,
  `CP` int(11) DEFAULT NULL,
  `NOM_SITIO` char(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_SITIO`),
  KEY `FK_RELATIONSHIP_28` (`CP`),
  CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




CREATE TABLE `supentel` (
  `ID_SUPENTEL` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_SUPENTEL` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_SUPENTEL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO supentel VALUES("1","pepe lota");



CREATE TABLE `tipo` (
  `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_TIPO` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tipo VALUES("1","Por Proyecto");



CREATE TABLE `tipo_actividad` (
  `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_MEDIDA` int(11) DEFAULT NULL,
  `NOM_TIPO` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `COMENTARIO` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TIPO`),
  KEY `FK_RELATIONSHIP_36` (`ID_MEDIDA`),
  CONSTRAINT `FK_RELATIONSHIP_36` FOREIGN KEY (`ID_MEDIDA`) REFERENCES `medida` (`ID_MEDIDA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tipo_actividad VALUES("1","2","Tirado de cables","");



CREATE TABLE `tipo_informe` (
  `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


