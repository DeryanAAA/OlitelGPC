-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2020 a las 14:28:30
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

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`NOM_ACTIVIDAD`, `DESC_ACTIVIDAD`, `ID_ACTIVIDAD`, `ID_PANEL`, `ID_TIPO`, `PORCENTAJE_ACTIVIDAD`, `FECHA_INICIO`, `FECHA_TERMINO`, `META_ACTIVIDAD`, `AVANCE_ACTIVIDAD`, `ENCARGADO`, `POSICION`, `CREADO`) VALUES
('TST3', 'SAFAS', 6, 1, 1, 100, '2020-10-01', '2020-10-30', 12, 12, 'YTZA BRUNA', 0, '2020-09-14'),
('Actividad 3', 'el team debe hacer blablablabal', 7, 4, 1, 140, '2020-09-25', '2020-09-26', 50, 70, 'YTZA BRUNA', 1, '2020-09-16'),
('Actividad 4', 'SAFAS', 8, 2, 1, 100, '2020-09-30', '2020-09-06', 100, 100, 'YTZA BRUNA', 0, '2020-09-16'),
('TST', 'SAFAS', 9, 3, 1, 100, '2020-09-29', '2020-09-19', 800, 800, 'YTZA BRUNA', 2, '2020-09-16'),
('Actividad z', 'en esta actividad', 10, 3, 1, 100, '2020-09-22', '2020-09-24', 800, 800, 'YTZA BRUNA', 1, '2020-09-17'),
('actividad y', 'asdf', 11, 1, 1, 100, '2020-09-18', '2020-09-18', 900, 900, 'YTZA BRUNA', 1, '2020-09-17'),
('prueba de panel', 'probando', 12, 5, 1, 0, '0000-00-00', '0000-00-00', 0, 0, 'st1', 0, '2020-10-08'),
('Lineas Anillo 3', 'tirar cables en anillo 3', 13, 3, 1, 100, '2020-10-08', '2020-10-15', 100, 100, 'st1', 0, '2020-10-08'),
('Lineas Anillo 1,2 y 4', ' prueba 1', 14, 8, 1, 0, '2020-10-21', '2020-10-01', 100000, 0, 'st1', 0, '2020-10-14'),
('muffas', 'muffas odu', 15, 9, 1, 600, '2020-10-21', '2020-10-21', 8, 48, 'jenibeth D', 0, '2020-10-14'),
('Lineas Anillo 1,2 y 4', 'linea 1, 2 y 4', 16, 9, 1, 600, '0000-00-00', '2020-10-20', 10, 60, 'jenibeth D', 0, '2020-10-14'),
('linea 1', 'anillos', 17, 10, 1, 100, '2020-11-06', '2020-12-03', 5, 5, 'jenibeth D', 0, '2020-10-14'),
('muffas ST', 'prueba muffas ST', 18, 11, 1, 0, '2020-10-12', '2020-10-31', 100, 0, 'st1', 0, '2020-10-14'),
('linea 1', 'dsf', 19, 8, 1, 0, '2020-10-28', '2020-10-22', 0, 5, 'jenibeth D', 0, '2020-10-15'),
('sd', 'asd', 20, 8, 1, 100, '0000-00-00', '0000-00-00', 0, 0, 'jenibeth D', 0, '2020-10-15'),
('actividad 1', ' prueba 1', 21, 15, 1, 100, '2020-10-23', '2020-10-28', 5, 0, '   jenibeth D', 0, '2020-10-15'),
('prueba de panel', ' esto es una prueba para ver la longitud del campo y asi visualizar la tabla de observaciones de las actividades', 23, 4, 1, 500, '2020-10-13', '2020-10-31', 2, 10, 'st1', 0, '2020-10-20'),
('actividad 1', '', 28, 23, 1, 0, '0000-00-00', '0000-00-00', 0, 2, 'Jenibeth d', 0, '2020-10-21'),
('linea 1', '', 32, 24, 1, 0, '0000-00-00', '0000-00-00', 0, 0, 'st1', 0, '2020-10-21'),
('actividad 1', '', 33, 25, 1, 0, '0000-00-00', '0000-00-00', 0, 0, 'st1', 0, '2020-10-21'),
('HPH', '', 34, 29, 1, 100, '2020-12-01', '2020-12-04', 220, 220, 'jenibeth D', 0, '2020-10-22'),
('ODF', '', 35, 27, 1, 100, '2020-10-22', '2020-11-05', 2, 2, 'jenibeth D', 0, '2020-10-22'),
('BSP', '', 36, 28, 1, 0, '2020-10-29', '2020-10-28', 0, 0, 'st1', 0, '2020-10-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrupacion`
--

CREATE TABLE `agrupacion` (
  `ID_AGRUP` int(11) NOT NULL,
  `NOM_AGRUP` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `agrupacion`
--

INSERT INTO `agrupacion` (`ID_AGRUP`, `NOM_AGRUP`) VALUES
(1, 'agrup1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `NOM_CARGO` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `NOM_CARGO`) VALUES
(1, 'Supervisor'),
(2, 'Coordinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_de_persona`
--

CREATE TABLE `cargo_de_persona` (
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo_de_persona`
--

INSERT INTO `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`) VALUES
(1, 1),
(1, 8),
(2, 1),
(2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_de_costo`
--

CREATE TABLE `centro_de_costo` (
  `NOM_CC` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_CC` int(11) NOT NULL,
  `ID_LINEA` int(11) NOT NULL,
  `ID_AGRUP` int(11) NOT NULL,
  `ID_DETALLE` int(11) NOT NULL,
  `ESTADO` char(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro_de_costo`
--

INSERT INTO `centro_de_costo` (`NOM_CC`, `ID_CC`, `ID_LINEA`, `ID_AGRUP`, `ID_DETALLE`, `ESTADO`) VALUES
('blabal', 1, 1, 1, 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL,
  `ID_REGION` int(11) DEFAULT NULL,
  `NOM_CIUDAD` char(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ID_CIUDAD`, `ID_REGION`, `NOM_CIUDAD`) VALUES
(1, 1, 'santiago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `RUT_CL` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_CL` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_CL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`RUT_CL`, `NOM_CL`, `ID_CL`) VALUES
('121111111', 'Entel', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprometidos`
--

CREATE TABLE `comprometidos` (
  `CP` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comprometidos`
--

INSERT INTO `comprometidos` (`CP`, `ID_CARGO`, `ID_PERSONAS`) VALUES
(1, 1, 1),
(3, 1, 8),
(3, 2, 1),
(4, 1, 8),
(4, 2, 7),
(6, 1, 1),
(6, 1, 8),
(6, 2, 7),
(7, 1, 1),
(7, 2, 7),
(8, 1, 1),
(8, 1, 8),
(9, 1, 1),
(9, 1, 8);

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
  `VALORPROYECTO` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `concepto`
--

INSERT INTO `concepto` (`CP`, `ID_CC`, `ID_TIPO`, `ID_SUPENTEL`, `ID_JDE`, `ID_CIUDAD`, `ID_EO_COB`, `NOMBRE`, `FECHA_CREACION`, `CIUDAD`, `SITIO`, `ESTADO`, `AVANCE`, `DESCRIPCION`, `OTT`, `INI_ASIG`, `INI_REAL`, `TER_ASIG`, `TER_REAL`, `FEC_INF`, `FECHADEASIGNACION`, `CREADOPOR`, `VALORPROYECTO`) VALUES
(1, 1, 1, 1, 1, 1, NULL, 'proyecto', '2020-09-04', NULL, 'sitiox', 'Activo', 0, 'blabla', '123', '2020-10-01', '2020-10-03', '2020-09-22', '2020-09-25', '2020-10-03', '2020-09-22', '197462647', NULL),
(2, 1, 1, 1, 1, 1, NULL, 'Prueba 2', '2020-09-17', NULL, 'st', 'Activo', 0, 'blabla', '123', '2020-10-03', '2020-09-24', '2020-09-29', '2020-09-26', '2020-10-02', '2020-09-18', '111111111', NULL),
(3, 1, 1, 1, 1, 1, NULL, 'alvarez', '2020-10-09', NULL, '', 'Activo', 0, 'ejemplo de proyecto', '5', '2020-10-12', '2020-10-09', '2020-10-16', '2020-10-23', '2020-10-30', '2020-10-09', '11111111-6', NULL),
(4, 1, 1, 1, 1, 1, NULL, 'Toledo', '2020-10-14', NULL, 'AS201', 'Activo', 0, 'proyecto alvarez toledo', '1', '2020-10-19', '2020-10-26', '2020-11-07', '0000-00-00', '2020-11-09', '2020-10-12', '11111111-6', NULL),
(5, 1, 1, 1, 1, 1, NULL, 'rancos', '2020-10-21', NULL, 'AS201', ' Activo', 2, 'ejemplo de proyecto', '1', '0000-00-00', '2020-10-07', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '11111111-6', NULL),
(6, 1, 1, 1, 1, 1, NULL, 'santiago RM', '2020-10-21', NULL, 'AS2013', 'Pendiente', 10, 'ejemplo de proyecto', '1', '2020-10-27', '2020-10-07', '2020-10-12', '2020-10-28', '2020-10-06', '2020-10-19', '11111111-6', NULL),
(7, 1, 1, 1, 1, 1, NULL, 'santiago', '2020-10-21', NULL, '', 'Activo', 0, 'gfgh', '4', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '11111111-6', NULL),
(8, 1, 1, 1, 1, 1, NULL, 'Gto', '2020-10-22', NULL, 'AS2013', ' Activo', 10, 'proyecto prueba', '251', '2020-10-22', '2020-10-29', '2020-10-30', '2020-10-17', '2020-10-27', '2020-10-22', '11111111-6', NULL),
(9, 1, 1, 1, 1, 1, NULL, 'Alvarez de Toledo', '2020-10-22', NULL, 'na', ' Activo', 61, 'pol�gono de 4 anillo y un uplink', '0', '2020-06-01', '2020-06-01', '2020-11-15', '0000-00-00', '0000-00-00', '2020-05-01', '11111111-6', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `ID_DETALLE` int(11) NOT NULL,
  `DESC_DET` char(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`ID_DETALLE`, `DESC_DET`) VALUES
(1, 'det 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_actividad`
--

CREATE TABLE `detalle_actividad` (
  `FECHA` date NOT NULL,
  `ID_ACTIVIDAD` int(11) DEFAULT NULL,
  `DESCRIPCION` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_DETALLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_actividad`
--

INSERT INTO `detalle_actividad` (`FECHA`, `ID_ACTIVIDAD`, `DESCRIPCION`, `ID_DETALLE`) VALUES
('2020-09-16', 6, 'Se completó la tarea exitosamente', 1),
('2020-09-16', 7, 'Se puso a llover uwu', 2),
('2020-09-16', 7, 'Se puso a llover uwu', 3),
('2020-09-16', 8, 'Se p', 4),
('2020-09-16', 8, 'Se p', 5),
('2020-09-16', 8, 'Se completó la tarea exitosamente', 6),
('2020-09-16', 9, 'blabl', 7),
('2020-09-16', 9, 'Se puso a llover uwu', 8),
('2020-09-16', 9, 'Se puso a llover uwu', 9),
('2020-09-16', 9, 'algo pasó', 10),
('2020-09-16', 9, 'Se completó la tarea exitosamente', 11),
('2020-09-17', 10, 'se puso a llover', 12),
('2020-09-17', 10, 'Se completó la tarea exitosamente', 13),
('2020-09-17', 11, 'Hubo un accidente', 14),
('2020-09-17', 11, 'Se completó la tarea exitosamente', 15),
('2020-10-08', 6, 'Se completó la tarea exitosamente', 16),
('2020-10-08', 6, 'Se completó la tarea exitosamente', 17),
('2020-10-08', 6, 'Se completó la tarea exitosamente', 18),
('2020-10-08', 6, 'Se completó la tarea exitosamente', 19),
('2020-10-08', 7, 'problemas de clima', 20),
('2020-10-08', 7, 'Se completó la tarea exitosamente', 21),
('2020-10-08', 7, 'Se completó la tarea exitosamente', 22),
('2020-10-08', 7, 'prueba', 23),
('2020-10-08', 8, 'Se completó la tarea exitosamente', 24),
('2020-10-08', 8, 'Se completó la tarea exitosamente', 25),
('2020-10-08', 8, 'Se completó la tarea exitosamente', 26),
('2020-10-08', 8, 'Se completó la tarea exitosamente', 27),
('2020-10-08', 8, 'Se completó la tarea exitosamente', 28),
('2020-10-08', 6, 'Se completó la tarea exitosamente', 29),
('2020-10-13', 8, 'Se completó la tarea exitosamente', 30),
('2020-10-13', 8, 'Se completó la tarea exitosamente', 31),
('2020-10-14', 13, 'Se completó la tarea exitosamente', 32),
('2020-10-14', 17, 'Se completó la tarea exitosamente', 33),
('2020-10-14', 17, 'Se completó la tarea exitosamente', 34),
('2020-10-15', 21, 'se extendió el proceso', 35),
('2020-10-15', 21, 'Se completó la tarea exitosamente', 36),
('2020-10-15', 21, 'sa', 37),
('2020-10-15', 21, 's', 38),
('2020-10-15', 21, 's', 39),
('2020-10-15', 21, 'dsf', 40),
('2020-10-15', 21, 'fdg', 41),
('2020-10-15', 21, 'fsdaf', 42),
('2020-10-15', 21, 'dsf', 43),
('2020-10-15', 21, 'sdsa', 44),
('2020-10-15', 21, 'Se completó la tarea exitosamente', 45),
('2020-10-15', 21, 'sdaf', 46),
('2020-10-15', 21, 'Se completó la tarea exitosamente', 47),
('2020-10-15', 21, 'jb', 48),
('2020-10-15', 21, 'Se completó la tarea exitosamente', 49),
('2020-10-15', 21, 'asdsad', 50),
('2020-10-15', 21, 'Se completó la tarea exitosamente', 51),
('2020-10-15', 15, 'faltó material', 52),
('2020-10-15', 16, 'Se completó la tarea exitosamente', 53),
('2020-10-15', 15, 'detalle actividad', 54),
('2020-10-15', 15, 'problemas en la vía con el clima', 55),
('2020-10-16', 16, 'prueba', 56),
('2020-10-16', 16, 'Se completó la tarea exitosamente', 57),
('2020-10-16', 16, 'prueba', 58),
('2020-10-16', 16, 'Se completó la tarea exitosamente', 59),
('2020-10-16', 19, 'Se completó la tarea exitosamente', 60),
('2020-10-16', 19, 'problemas de clima', 61),
('2020-10-20', 23, 'esto es una prueba para ver la longitud del campo y asi visualizar la tabla de observaciones de las actividades 	', 62),
('2020-10-21', 28, 'no pudimos llegar a tiempo para culminar el trabajo', 63),
('2020-10-22', 16, 'problemas en la via', 64),
('2020-10-22', 20, 'prueba', 65),
('2020-10-22', 15, 'Se completó la tarea exitosamente', 66),
('2020-10-22', 15, 'problemas en la via', 67),
('2020-10-22', 17, 'Se completó la tarea exitosamente', 68),
('2020-10-22', 34, 'se agregaron', 69),
('2020-10-22', 34, 'faltan materiales', 70),
('2020-10-22', 34, 'Se completó la tarea exitosamente', 71),
('2020-10-22', 35, 'se extendio el proyecto', 72),
('2020-10-22', 35, 'Se completó la tarea exitosamente', 73),
('2020-10-22', 15, 'falto material', 74),
('2020-10-22', 20, 'Se completó la tarea exitosamente', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cobranza`
--

CREATE TABLE `estado_cobranza` (
  `ID_EO_COB` int(11) NOT NULL,
  `NOM_EO_COB` char(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `NFACT` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `VALOR` bigint(20) NOT NULL,
  `ID_FACT` int(11) NOT NULL,
  `ID_CL` int(11) NOT NULL,
  `F_FACTURA` date DEFAULT NULL,
  `POR_FACTURAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`NFACT`, `VALOR`, `ID_FACT`, `ID_CL`, `F_FACTURA`, `POR_FACTURAR`) VALUES
('456', 5000, 1, 1, '2020-09-26', 5000);

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

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`CP`, `ID_FASE`, `NOM_FASE`, `AVANCE_FASE`) VALUES
(1, 1, 'Fase 1', 67),
(1, 2, 'Fase 2', 0),
(2, 3, 'Prueba', 0),
(3, 4, 'Fase 1', 0),
(3, 5, 'fase 2', 50),
(4, 6, 'Anillo 1', 0),
(4, 7, 'Anillo 2', 0),
(4, 8, 'Anillo 3', 100),
(5, 9, 'fase 2', 0),
(5, 10, 'pueba1', 0),
(5, 11, 'prueba3', 0),
(5, 12, 'prueba4', 0),
(5, 13, 'se', 0),
(6, 14, 'Inicial', 0),
(6, 15, 'fase 2', 0),
(7, 16, 'Fase 1', 0),
(8, 17, 'anillo', 0),
(8, 18, 'tirado de cables', 0),
(8, 19, 'w28', 0),
(9, 20, 'Anillo 1', 67),
(9, 21, 'Anillo 2', 0),
(9, 22, 'Anillo 2', 0),
(1, 23, 'anillo3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_de_pago`
--

CREATE TABLE `informe_de_pago` (
  `ID_IP` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `NRO_COTI` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESTADO` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAENVIOIP` date DEFAULT NULL,
  `NIP` char(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VALOR_IP` bigint(20) DEFAULT NULL,
  `VALOR_FACTURADO` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `involucrados_en_cc`
--

CREATE TABLE `involucrados_en_cc` (
  `ID_CC` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_entel`
--

CREATE TABLE `jefe_entel` (
  `ID_JDE` int(11) NOT NULL,
  `NOM_JDE` char(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `jefe_entel`
--

INSERT INTO `jefe_entel` (`ID_JDE`, `NOM_JDE`) VALUES
(1, 'jefazo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_de_negocio`
--

CREATE TABLE `linea_de_negocio` (
  `ID_LINEA` int(11) NOT NULL,
  `NOM_LINEA` char(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `linea_de_negocio`
--

INSERT INTO `linea_de_negocio` (`ID_LINEA`, `NOM_LINEA`) VALUES
(1, 'li1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `ID_MEDIDA` int(11) NOT NULL,
  `NOM_MEDIDA` char(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`ID_MEDIDA`, `NOM_MEDIDA`) VALUES
(1, 'UNIDAD'),
(2, 'METROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oc`
--

CREATE TABLE `oc` (
  `ID_OC` int(11) NOT NULL,
  `ID_FACT` int(11) NOT NULL,
  `NOC` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `oc`
--

INSERT INTO `oc` (`ID_OC`, `ID_FACT`, `NOC`) VALUES
(2, 1, 1235);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_fact`
--

CREATE TABLE `pago_fact` (
  `ID_IP` int(11) NOT NULL,
  `ID_FACT` int(11) NOT NULL
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

--
-- Volcado de datos para la tabla `panel`
--

INSERT INTO `panel` (`ID_PANEL`, `ID_FASE`, `NOMBRE_PANEL`) VALUES
(1, 1, 'Panel 1'),
(2, 1, 'Panel 2'),
(3, 1, 'Panel 3'),
(4, 1, 'Panel 4'),
(5, 1, 'panel 5'),
(6, 1, 'panel 6'),
(7, 3, 'Panel'),
(8, 4, 'Iniciar'),
(9, 5, 'Inicio'),
(10, 5, 'en proceso'),
(11, 5, 'En Ejecución'),
(12, 6, 'Inicio'),
(13, 6, 'En Proceso'),
(14, 6, 'Terminado'),
(15, 8, 'inicial'),
(16, 11, 'd'),
(17, 14, 'Inicio'),
(18, 14, 'en proceso'),
(19, 14, 'ejecutando'),
(20, 14, 'termino'),
(21, 14, 'final'),
(22, 14, 'g'),
(23, 15, 'Inicio'),
(24, 15, 'en proceso'),
(25, 16, 'Panel 1'),
(26, 2, 'inicio'),
(27, 20, 'Cubicación'),
(28, 20, 'Panel2'),
(29, 20, 'En Ejecución'),
(30, 20, 'Terminado'),
(31, 23, 'Inicio'),
(32, 23, 'en proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `RUT` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_PERSONAS` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `CLAVE` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `ACTIVO` char(3) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`RUT`, `NOM_PERSONAS`, `ID_PERSONAS`, `ID_ROL`, `CLAVE`, `ACTIVO`) VALUES
('222222222', 'st1', 1, 4, 'Oli2020', 'si'),
('111111111', 'PEPE', 2, 1, 'Oli2020', 'si'),
('333333333', 'cobr1', 3, 3, 'blabla', 'si'),
('26047185-6', 'Jenibeth Garcia', 4, 3, 'Oli2020', 'si'),
('11111111-6', 'Jenibeth', 5, 2, '2020Oli', 'si'),
('11111111-0', 'Jenibeth G', 6, 1, 'Oli2020.', 'si'),
('11111111-1', 'Jenibeth d', 7, 4, '2020Oli.', 'si'),
('260471856', 'jenibeth D', 8, 4, '2020Oli.', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `ID_REGION` int(11) NOT NULL,
  `NOM_REGION` char(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`ID_REGION`, `NOM_REGION`) VALUES
(1, 'RM');

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
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `NOM_ROL` char(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `NOM_ROL`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO NORMAL'),
(3, 'COBRANZA'),
(4, 'Supervisor Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `ID_SITIO` int(11) NOT NULL,
  `CP` int(11) DEFAULT NULL,
  `NOM_SITIO` char(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supentel`
--

CREATE TABLE `supentel` (
  `ID_SUPENTEL` int(11) NOT NULL,
  `NOM_SUPENTEL` char(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `supentel`
--

INSERT INTO `supentel` (`ID_SUPENTEL`, `NOM_SUPENTEL`) VALUES
(1, 'pepe lota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_TIPO` int(11) NOT NULL,
  `NOM_TIPO` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_TIPO`, `NOM_TIPO`) VALUES
(1, 'Por Proyecto');

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
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`ID_TIPO`, `ID_MEDIDA`, `NOM_TIPO`, `COMENTARIO`) VALUES
(1, 2, 'Tirado de cables', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_informe`
--

CREATE TABLE `tipo_informe` (
  `ID_TIPO` int(11) NOT NULL,
  `NOMBRE` char(50) COLLATE utf8_spanish2_ci NOT NULL
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
-- Indices de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD PRIMARY KEY (`ID_DETALLE`),
  ADD KEY `FK_RELATIONSHIP_33` (`ID_ACTIVIDAD`);

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
-- Indices de la tabla `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`ID_FASE`),
  ADD KEY `FK_RELATIONSHIP_31` (`CP`);

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
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`ID_MEDIDA`);

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
  ADD PRIMARY KEY (`ID_IP`,`ID_FACT`),
  ADD KEY `FK_RELATIONSHIP_29` (`ID_FACT`);

--
-- Indices de la tabla `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`ID_PANEL`),
  ADD KEY `FK_RELATIONSHIP_32` (`ID_FASE`);

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
-- Indices de la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  ADD PRIMARY KEY (`ID_HIST`),
  ADD KEY `FK_RELATIONSHIP_35` (`CP`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`ID_SITIO`),
  ADD KEY `FK_RELATIONSHIP_28` (`CP`);

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
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`ID_TIPO`),
  ADD KEY `FK_RELATIONSHIP_36` (`ID_MEDIDA`);

--
-- Indices de la tabla `tipo_informe`
--
ALTER TABLE `tipo_informe`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `ID_ACTIVIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `ID_CC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `CP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  MODIFY `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `estado_cobranza`
--
ALTER TABLE `estado_cobranza`
  MODIFY `ID_EO_COB` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_FACT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fase`
--
ALTER TABLE `fase`
  MODIFY `ID_FASE` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  MODIFY `ID_IP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jefe_entel`
--
ALTER TABLE `jefe_entel`
  MODIFY `ID_JDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `linea_de_negocio`
--
ALTER TABLE `linea_de_negocio`
  MODIFY `ID_LINEA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `ID_MEDIDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oc`
--
ALTER TABLE `oc`
  MODIFY `ID_OC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `panel`
--
ALTER TABLE `panel`
  MODIFY `ID_PANEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `ID_PERSONAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID_REGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  MODIFY `ID_HIST` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sitio`
--
ALTER TABLE `sitio`
  MODIFY `ID_SITIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `supentel`
--
ALTER TABLE `supentel`
  MODIFY `ID_SUPENTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_informe`
--
ALTER TABLE `tipo_informe`
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
-- Filtros para la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD CONSTRAINT `FK_RELATIONSHIP_33` FOREIGN KEY (`ID_ACTIVIDAD`) REFERENCES `actividad` (`ID_ACTIVIDAD`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_CL`) REFERENCES `cliente` (`ID_CL`);

--
-- Filtros para la tabla `fase`
--
ALTER TABLE `fase`
  ADD CONSTRAINT `FK_RELATIONSHIP_31` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

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
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`ID_FACT`) REFERENCES `factura` (`ID_FACT`),
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`ID_IP`) REFERENCES `informe_de_pago` (`ID_IP`);

--
-- Filtros para la tabla `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `FK_RELATIONSHIP_32` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_ROL`) REFERENCES `rol` (`ID_ROL`);

--
-- Filtros para la tabla `registro_hist`
--
ALTER TABLE `registro_hist`
  ADD CONSTRAINT `FK_RELATIONSHIP_35` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

--
-- Filtros para la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`CP`) REFERENCES `concepto` (`CP`);

--
-- Filtros para la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD CONSTRAINT `FK_RELATIONSHIP_36` FOREIGN KEY (`ID_MEDIDA`) REFERENCES `medida` (`ID_MEDIDA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
