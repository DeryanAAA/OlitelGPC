-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2020 a las 17:16:30
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `1606`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrupacion`
--

CREATE TABLE `agrupacion` (
  `ID_AGRUP` int(11) NOT NULL,
  `NOM_AGRUP` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agrupacion`
--

INSERT INTO `agrupacion` (`ID_AGRUP`, `NOM_AGRUP`) VALUES
(1, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `NOM_CARGO` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `NOM_CARGO`) VALUES
(1, 'SUPERVISOR'),
(2, 'COORDINADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_de_persona`
--

CREATE TABLE `cargo_de_persona` (
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo_de_persona`
--

INSERT INTO `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_de_costo`
--

CREATE TABLE `centro_de_costo` (
  `NOM_CC` char(30) NOT NULL,
  `ID_CC` int(11) NOT NULL,
  `ID_LINEA` int(11) NOT NULL,
  `ID_AGRUP` int(11) NOT NULL,
  `ID_DETALLE` int(11) NOT NULL,
  `ESTADO` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centro_de_costo`
--

INSERT INTO `centro_de_costo` (`NOM_CC`, `ID_CC`, `ID_LINEA`, `ID_AGRUP`, `ID_DETALLE`, `ESTADO`) VALUES
('administración', 1, 1, 1, 1, 'activo'),
('cc2', 2, 2, 1, 1, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL,
  `ID_REGION` int(11) DEFAULT NULL,
  `NOM_CIUDAD` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ID_CIUDAD`, `ID_REGION`, `NOM_CIUDAD`) VALUES
(1, 1, 'SANTIAGO'),
(2, 1, 'ciudad2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `RUT_CL` char(9) NOT NULL,
  `NOM_CL` char(50) NOT NULL,
  `ID_CL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`RUT_CL`, `NOM_CL`, `ID_CL`) VALUES
('758956325', 'entel', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprometidos`
--

CREATE TABLE `comprometidos` (
  `CP` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  `NI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `CP` int(11) NOT NULL,
  `ID_CC` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `ID_SUPENTEL` int(11) DEFAULT NULL,
  `ID_JDE` int(11) DEFAULT NULL,
  `ID_CIUDAD` int(11) DEFAULT NULL,
  `ID_EO_COB` int(11) DEFAULT NULL,
  `NOMBRE` char(100) DEFAULT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  `CIUDAD` char(100) DEFAULT NULL,
  `SITIO` char(100) DEFAULT NULL,
  `ESTADO` char(20) DEFAULT NULL,
  `AVANCE` int(11) DEFAULT NULL,
  `DESCRIPCION` char(200) DEFAULT NULL,
  `OTT` char(200) DEFAULT NULL,
  `INI_ASIG` date DEFAULT NULL,
  `INI_REAL` date DEFAULT NULL,
  `TER_ASIG` date DEFAULT NULL,
  `TER_REAL` date DEFAULT NULL,
  `FEC_INF` date DEFAULT NULL,
  `FECHADEASIGNACION` date NOT NULL,
  `CREADOPOR` char(15) DEFAULT NULL,
  `VALORPROYECTO` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `ID_DETALLE` int(11) NOT NULL,
  `DESC_DET` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`ID_DETALLE`, `DESC_DET`) VALUES
(1, 'Administración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cobranza`
--

CREATE TABLE `estado_cobranza` (
  `ID_EO_COB` int(11) NOT NULL,
  `NOM_EO_COB` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_cobranza`
--

INSERT INTO `estado_cobranza` (`ID_EO_COB`, `NOM_EO_COB`) VALUES
(1, 'facturado'),
(2, 'por enviar'),
(3, 'enviado'),
(4, 'en ejecucion'),
(5, 'Nulo'),
(6, 'team'),
(7, 'por facturar'),
(8, 'oc por confirmar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_FACT` int(11) NOT NULL,
  `ID_CL` int(11) NOT NULL,
  `NFACT` char(200) NOT NULL,
  `VALOR` bigint(20) NOT NULL,
  `F_FACTURA` date NOT NULL,
  `POR_FACTURAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_de_pago`
--

CREATE TABLE `informe_de_pago` (
  `ID_IP` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `NRO_COTI` char(200) DEFAULT NULL,
  `ESTADO` char(200) DEFAULT NULL,
  `VALOR_IP` bigint(20) DEFAULT NULL,
  `FECHAENVIOIP` date DEFAULT NULL,
  `NIP` char(200) DEFAULT NULL,
  `VALOR_FACTURADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `involucrados_en_cc`
--

CREATE TABLE `involucrados_en_cc` (
  `ID_CC` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_entel`
--

CREATE TABLE `jefe_entel` (
  `ID_JDE` int(11) NOT NULL,
  `NOM_JDE` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_entel`
--

INSERT INTO `jefe_entel` (`ID_JDE`, `NOM_JDE`) VALUES
(1, 'German Rojas'),
(2, 'Alejandro Arro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_de_negocio`
--

CREATE TABLE `linea_de_negocio` (
  `ID_LINEA` int(11) NOT NULL,
  `NOM_LINEA` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea_de_negocio`
--

INSERT INTO `linea_de_negocio` (`ID_LINEA`, `NOM_LINEA`) VALUES
(1, 'Administración'),
(2, 'Instalaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oc`
--

CREATE TABLE `oc` (
  `ID_OC` int(11) NOT NULL,
  `ID_FACT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_fact`
--

CREATE TABLE `pago_fact` (
  `ID_FACT` int(11) NOT NULL,
  `ID_IP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `RUT` char(10) NOT NULL,
  `NOM_PERSONAS` char(30) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `CLAVE` char(10) NOT NULL,
  `activo` varchar(3) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `ID_REGION` int(11) NOT NULL,
  `NOM_REGION` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`ID_REGION`, `NOM_REGION`) VALUES
(1, 'Metropolitana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `NOM_ROL` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `NOM_ROL`) VALUES
(1, 'Administrador'),
(2, 'Normal'),
(3, 'Cobranza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supentel`
--

CREATE TABLE `supentel` (
  `ID_SUPENTEL` int(11) NOT NULL,
  `NOM_SUPENTEL` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `supentel`
--

INSERT INTO `supentel` (`ID_SUPENTEL`, `NOM_SUPENTEL`) VALUES
(1, 'patricio urrutia'),
(2, 'Jorge Martinez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_TIPO` int(11) NOT NULL,
  `NOM_TIPO` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_TIPO`, `NOM_TIPO`) VALUES
(1, 'Por proyecto'),
(2, 'servicio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_informe`
--

CREATE TABLE `tipo_informe` (
  `ID_TIPO` int(11) NOT NULL,
  `NOMBRE` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_informe`
--

INSERT INTO `tipo_informe` (`ID_TIPO`, `NOMBRE`) VALUES
(1, 'tipoinf1'),
(2, 'tipoinf2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agrupacion`
--
ALTER TABLE `agrupacion`
  ADD PRIMARY KEY (`ID_AGRUP`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`);

--
-- Indices de la tabla `cargo_de_persona`
--
ALTER TABLE `cargo_de_persona`
  ADD PRIMARY KEY (`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_PERSONAS`);

--
-- Indices de la tabla `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  ADD PRIMARY KEY (`ID_CC`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_AGRUP`),
  ADD KEY `FK_RELATIONSHIP_20` (`ID_LINEA`),
  ADD KEY `FK_RELATIONSHIP_21` (`ID_DETALLE`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_CIUDAD`),
  ADD KEY `FK_RELATIONSHIP_22` (`ID_REGION`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CL`);

--
-- Indices de la tabla `comprometidos`
--
ALTER TABLE `comprometidos`
  ADD PRIMARY KEY (`CP`,`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_CARGO`,`ID_PERSONAS`);

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`CP`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_TIPO`),
  ADD KEY `FK_RELATIONSHIP_24` (`ID_SUPENTEL`),
  ADD KEY `FK_RELATIONSHIP_25` (`ID_JDE`),
  ADD KEY `FK_RELATIONSHIP_26` (`ID_CIUDAD`),
  ADD KEY `FK_RELATIONSHIP_27` (`ID_EO_COB`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_CC`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`ID_DETALLE`);

--
-- Indices de la tabla `estado_cobranza`
--
ALTER TABLE `estado_cobranza`
  ADD PRIMARY KEY (`ID_EO_COB`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_FACT`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_CL`);

--
-- Indices de la tabla `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  ADD PRIMARY KEY (`ID_IP`),
  ADD KEY `FK_RELATIONSHIP_17` (`CP`),
  ADD KEY `FK_RELATIONSHIP_18` (`ID_TIPO`);

--
-- Indices de la tabla `involucrados_en_cc`
--
ALTER TABLE `involucrados_en_cc`
  ADD PRIMARY KEY (`ID_CC`,`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_CARGO`,`ID_PERSONAS`);

--
-- Indices de la tabla `jefe_entel`
--
ALTER TABLE `jefe_entel`
  ADD PRIMARY KEY (`ID_JDE`);

--
-- Indices de la tabla `linea_de_negocio`
--
ALTER TABLE `linea_de_negocio`
  ADD PRIMARY KEY (`ID_LINEA`);

--
-- Indices de la tabla `oc`
--
ALTER TABLE `oc`
  ADD PRIMARY KEY (`ID_OC`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_FACT`);

--
-- Indices de la tabla `pago_fact`
--
ALTER TABLE `pago_fact`
  ADD PRIMARY KEY (`ID_FACT`,`ID_IP`),
  ADD KEY `FK_RELATIONSHIP_29` (`ID_IP`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_23` (`ID_ROL`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID_REGION`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `supentel`
--
ALTER TABLE `supentel`
  ADD PRIMARY KEY (`ID_SUPENTEL`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `tipo_informe`
--
ALTER TABLE `tipo_informe`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agrupacion`
--
ALTER TABLE `agrupacion`
  MODIFY `ID_AGRUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  MODIFY `ID_CC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comprometidos`
--
ALTER TABLE `comprometidos`
  MODIFY `CP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `CP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado_cobranza`
--
ALTER TABLE `estado_cobranza`
  MODIFY `ID_EO_COB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_FACT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  MODIFY `ID_IP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jefe_entel`
--
ALTER TABLE `jefe_entel`
  MODIFY `ID_JDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `linea_de_negocio`
--
ALTER TABLE `linea_de_negocio`
  MODIFY `ID_LINEA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `ID_PERSONAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID_REGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `supentel`
--
ALTER TABLE `supentel`
  MODIFY `ID_SUPENTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_informe`
--
ALTER TABLE `tipo_informe`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo_de_persona`
--
ALTER TABLE `cargo_de_persona`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PERSONAS`) REFERENCES `personas` (`ID_PERSONAS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_CARGO`) REFERENCES `cargo` (`ID_CARGO`);

--
-- Filtros para la tabla `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_AGRUP`) REFERENCES `agrupacion` (`ID_AGRUP`),
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_LINEA`) REFERENCES `linea_de_negocio` (`ID_LINEA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_DETALLE`) REFERENCES `detalle` (`ID_DETALLE`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`ID_REGION`) REFERENCES `region` (`ID_REGION`);

--
-- Filtros para la tabla `comprometidos`
--
ALTER TABLE `comprometidos`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_CARGO`,`ID_PERSONAS`) REFERENCES `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

--
-- Filtros para la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo` (`ID_TIPO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`ID_SUPENTEL`) REFERENCES `supentel` (`ID_SUPENTEL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`ID_JDE`) REFERENCES `jefe_entel` (`ID_JDE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`ID_CIUDAD`) REFERENCES `ciudad` (`ID_CIUDAD`),
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`ID_EO_COB`) REFERENCES `estado_cobranza` (`ID_EO_COB`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_CC`) REFERENCES `centro_de_costo` (`ID_CC`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_CL`) REFERENCES `cliente` (`ID_CL`);

--
-- Filtros para la tabla `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_informe` (`ID_TIPO`);

--
-- Filtros para la tabla `involucrados_en_cc`
--
ALTER TABLE `involucrados_en_cc`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_CARGO`,`ID_PERSONAS`) REFERENCES `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_CC`) REFERENCES `centro_de_costo` (`ID_CC`);

--
-- Filtros para la tabla `oc`
--
ALTER TABLE `oc`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_FACT`) REFERENCES `factura` (`ID_FACT`);

--
-- Filtros para la tabla `pago_fact`
--
ALTER TABLE `pago_fact`
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`ID_IP`) REFERENCES `informe_de_pago` (`ID_IP`),
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`ID_FACT`) REFERENCES `factura` (`ID_FACT`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_ROL`) REFERENCES `rol` (`ID_ROL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
