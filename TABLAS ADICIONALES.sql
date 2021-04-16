-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 16:01:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gpc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `NOM_ACTIVIDAD` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `DESC_ACTIVIDAD` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_ACTIVIDAD` int(11) NOT NULL,
  `ID_PANEL` int(11) DEFAULT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `PORCENTAJE_ACTIVIDAD` int(11) NOT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_TERMINO` date DEFAULT NULL,
  `META_ACTIVIDAD` int(11) DEFAULT NULL,
  `AVANCE_ACTIVIDAD` int(11) DEFAULT NULL,
  `ENCARGADO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `POSICION` int(11) NOT NULL,
  `CREADO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE `fase` (
  `CP` int(11) NOT NULL,
  `ID_FASE` bigint(20) NOT NULL,
  `NOM_FASE` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `AVANCE_FASE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `ID_MEDIDA` int(11) NOT NULL,
  `NOM_MEDIDA` char(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel`
--

CREATE TABLE `panel` (
  `ID_PANEL` int(11) NOT NULL,
  `ID_FASE` bigint(20) DEFAULT NULL,
  `NOMBRE_PANEL` char(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_hist`
--

CREATE TABLE `registro_hist` (
  `ID_HIST` int(11) NOT NULL,
  `DET_HIST` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE `tipo_actividad` (
  `ID_TIPO` int(11) NOT NULL,
  `ID_MEDIDA` int(11) DEFAULT NULL,
  `NOM_TIPO` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `COMENTARIO` text COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`ID_ACTIVIDAD`),
  ADD KEY `FK_RELATIONSHIP_34` (`ID_PANEL`),
  ADD KEY `FK_RELATIONSHIP_37` (`ID_TIPO`);

--
-- Indices de la tabla `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`ID_FASE`),
  ADD KEY `FK_RELATIONSHIP_31` (`CP`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`ID_MEDIDA`);

--
-- Indices de la tabla `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`ID_PANEL`),
  ADD KEY `FK_RELATIONSHIP_32` (`ID_FASE`);

--
-- Indices de la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  ADD PRIMARY KEY (`ID_HIST`),
  ADD KEY `FK_RELATIONSHIP_35` (`CP`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`ID_TIPO`),
  ADD KEY `FK_RELATIONSHIP_36` (`ID_MEDIDA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `ID_ACTIVIDAD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fase`
--
ALTER TABLE `fase`
  MODIFY `ID_FASE` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `ID_MEDIDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `panel`
--
ALTER TABLE `panel`
  MODIFY `ID_PANEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  MODIFY `ID_HIST` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `FK_RELATIONSHIP_34` FOREIGN KEY (`ID_PANEL`) REFERENCES `panel` (`ID_PANEL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_37` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_actividad` (`ID_TIPO`);

--
-- Filtros para la tabla `fase`
--
ALTER TABLE `fase`
  ADD CONSTRAINT `FK_RELATIONSHIP_31` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

--
-- Filtros para la tabla `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `FK_RELATIONSHIP_32` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`);

--
-- Filtros para la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  ADD CONSTRAINT `FK_RELATIONSHIP_35` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

--
-- Filtros para la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD CONSTRAINT `FK_RELATIONSHIP_36` FOREIGN KEY (`ID_MEDIDA`) REFERENCES `medida` (`ID_MEDIDA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
