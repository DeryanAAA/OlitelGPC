-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 05:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistproyectos`
--

-- --------------------------------------------------------

--
-- Table structure for table `agrupacion`
--

CREATE TABLE `agrupacion` (
  `ID_AGRUP` int(11) NOT NULL,
  `NOM_AGRUP` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agrupacion`
--

INSERT INTO `agrupacion` (`ID_AGRUP`, `NOM_AGRUP`) VALUES
(1, 'Administracion'),
(2, 'Adm - Instalaciones'),
(3, 'Cotizaciones'),
(4, 'Proyecto F.O.'),
(5, 'Inst - Piloto AT'),
(6, 'Inst - Team UM'),
(7, 'Inst TX VIII CRM'),
(8, 'Servicios RAN'),
(9, 'Retiros E Zapata'),
(10, 'Huawei'),
(11, 'Adm - Ranco'),
(12, 'Adm - Serv'),
(13, 'Adm - TX'),
(14, 'CCO'),
(15, 'Cierres Contables'),
(16, 'Ingeniería'),
(17, 'Servicio HH'),
(18, 'Soporte O&M Backhaul'),
(19, 'Gestores de Calidad'),
(20, 'Switch Microsens'),
(21, 'Arriendo Oficina'),
(22, 'Spirent');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `NOM_CARGO` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `NOM_CARGO`) VALUES
(1, 'SUPERVISOR'),
(2, 'COORDINADOR');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_de_persona`
--

CREATE TABLE `cargo_de_persona` (
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo_de_persona`
--

INSERT INTO `cargo_de_persona` (`ID_CARGO`, `ID_PERSONAS`) VALUES
(1, 1),
(1, 2),
(1, 35),
(1, 36),
(2, 1),
(2, 2),
(2, 35),
(2, 36),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `centro_de_costo`
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
-- Dumping data for table `centro_de_costo`
--

INSERT INTO `centro_de_costo` (`NOM_CC`, `ID_CC`, `ID_LINEA`, `ID_AGRUP`, `ID_DETALLE`, `ESTADO`) VALUES
('Administración', 1, 1, 1, 1, 'ACTIVO'),
('Área Comercial', 2, 1, 1, 1, 'ACTIVO'),
('Informática', 3, 1, 1, 1, 'ACTIVO'),
('Adm Instalaciones', 4, 2, 2, 2, 'ACTIVO'),
('Inst Crm', 5, 2, 3, 3, 'ACTIVO'),
('Inst Infra', 6, 2, 3, 3, 'ACTIVO'),
('Inst Mac', 7, 2, 3, 3, 'ACTIVO'),
('Inst UM', 8, 2, 3, 3, 'ACTIVO'),
('Ins FO RM', 9, 2, 4, 3, 'ACTIVO'),
('Ampliaciones Cra', 10, 2, 4, 3, 'ACTIVO'),
('Gpon Cluster Stgo', 11, 2, 4, 3, 'ACTIVO'),
('Gpon Cluster Alvarez De Toledo', 12, 2, 4, 3, 'ACTIVO'),
('Inst Piloto AT', 13, 2, 5, 4, 'ACTIVO'),
('Inst TX IV', 14, 2, 6, 4, 'ACTIVO'),
('Inst TX IX', 15, 2, 6, 4, 'ACTIVO'),
('Inst TX RM', 16, 2, 6, 4, 'ACTIVO'),
('Inst TX VI', 17, 2, 6, 4, 'ACTIVO'),
('Inst TX VII', 18, 2, 6, 4, 'ACTIVO'),
('Inst TX VIII', 19, 2, 6, 4, 'ACTIVO'),
('Inst TX VIII CRM', 20, 2, 7, 4, 'ACTIVO'),
('Integraciones Ranco', 21, 2, 8, 3, 'ACTIVO'),
('Integraciones Miguel Rivera', 22, 2, 8, 3, 'ACTIVO'),
('Integraciones UM', 23, 2, 8, 3, 'ACTIVO'),
('Inst Ranco Ag', 24, 2, 8, 3, 'ACTIVO'),
('Retiros E Zapata', 25, 2, 9, 3, 'ACTIVO'),
('Inst Huawei 100 Links', 26, 2, 10, 3, 'ACTIVO'),
('Inst Huawei Movistar Ran', 27, 2, 8, 3, 'ACTIVO'),
('Inst Huawei Wom', 28, 2, 10, 3, 'ACTIVO'),
('Bodega Huawei', 29, 2, 10, 6, 'ACTIVO'),
('Adm Ranco', 30, 3, 11, 6, 'ACTIVO'),
('Adm Serv', 31, 3, 12, 6, 'ACTIVO'),
('Adm Tx', 32, 3, 13, 6, 'ACTIVO'),
('CCO', 33, 3, 14, 6, 'ACTIVO'),
('CCO PE', 34, 3, 14, 6, 'ACTIVO'),
('Cierres Contables', 35, 3, 15, 6, 'ACTIVO'),
('Ingenieria', 36, 3, 16, 6, 'ACTIVO'),
('Servicio HH', 37, 3, 17, 6, 'ACTIVO'),
('Servicio técnico', 38, 3, 14, 6, 'ACTIVO'),
('Soporte OM Backhaul', 39, 3, 18, 6, 'ACTIVO'),
('Gestores De Calidad', 40, 3, 19, 6, 'ACTIVO'),
('Swicth Microsens', 41, 4, 20, 5, 'ACTIVO'),
('Arriendo Oficina', 42, 3, 21, 6, 'ACTIVO'),
('Spirent', 43, 3, 22, 7, 'ACTIVO');

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL,
  `ID_REGION` int(11) DEFAULT NULL,
  `NOM_CIUDAD` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`ID_CIUDAD`, `ID_REGION`, `NOM_CIUDAD`) VALUES
(1, 1, 'Arica'),
(2, 1, 'Parinacota'),
(3, 2, 'Iquique'),
(4, 2, 'El Tamarugal'),
(5, 3, 'Antofagasta'),
(6, 3, 'El Loa'),
(7, 3, 'Tocopilla'),
(8, 4, 'Chañaral'),
(9, 4, 'Copiapó'),
(10, 4, 'Huasco'),
(11, 5, 'Choapa'),
(12, 5, 'Elqui'),
(13, 5, 'Limarí'),
(14, 6, 'Isla de Pascua'),
(15, 6, 'Los Andes'),
(16, 6, 'Petorca'),
(17, 6, 'Quillota'),
(18, 6, 'San Antonio'),
(19, 6, 'San Felipe de Aconcagua'),
(20, 6, 'Valparaiso'),
(21, 7, 'Chacabuco'),
(22, 7, 'Cordillera'),
(23, 7, 'Maipo'),
(24, 7, 'Melipilla'),
(25, 7, 'Santiago'),
(26, 7, 'Talagante'),
(27, 7, 'Cachapoal'),
(28, 8, 'Cardenal Caro'),
(29, 8, 'Colchagua'),
(30, 9, 'Cauquenes'),
(31, 9, 'Curicó'),
(32, 9, 'Linares'),
(33, 9, 'Talca'),
(34, 10, 'Arauco'),
(35, 10, 'Bio Bío'),
(36, 10, 'Concepción'),
(37, 10, 'Ñuble'),
(38, 11, 'Cautín'),
(39, 11, 'Malleco'),
(40, 12, 'Valdivia'),
(41, 12, 'Ranco'),
(42, 13, 'Chiloé'),
(43, 13, 'Llanquihue'),
(44, 13, 'Osorno'),
(45, 13, 'Palena'),
(46, 14, 'Aisén'),
(47, 14, 'Capitán Prat'),
(48, 14, 'Coihaique'),
(49, 14, 'General Carrera'),
(50, 15, 'Antártica Chilena'),
(51, 15, 'Magallanes'),
(52, 15, 'Tierra del Fuego'),
(53, 15, 'Última Esperanza');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `RUT_CL` char(9) NOT NULL,
  `NOM_CL` char(50) NOT NULL,
  `ID_CL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`RUT_CL`, `NOM_CL`, `ID_CL`) VALUES
('758956325', 'entel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comprometidos`
--

CREATE TABLE `comprometidos` (
  `CP` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  `NI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comprometidos`
--

INSERT INTO `comprometidos` (`CP`, `ID_CARGO`, `ID_PERSONAS`, `NI`) VALUES
(1, 1, 4, 20),
(1, 1, 8, 10),
(1, 2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `concepto`
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

--
-- Dumping data for table `concepto`
--

INSERT INTO `concepto` (`CP`, `ID_CC`, `ID_TIPO`, `ID_SUPENTEL`, `ID_JDE`, `ID_CIUDAD`, `ID_EO_COB`, `NOMBRE`, `FECHA_CREACION`, `CIUDAD`, `SITIO`, `ESTADO`, `AVANCE`, `DESCRIPCION`, `OTT`, `INI_ASIG`, `INI_REAL`, `TER_ASIG`, `TER_REAL`, `FEC_INF`, `FECHADEASIGNACION`, `CREADOPOR`, `VALORPROYECTO`) VALUES
(1, 6, 1, 1, 1, 1, NULL, 'dsa', '2020-07-14', NULL, 'sdf', ' activo', 10, 'sdf', 'dsf', '2020-07-25', '2020-07-22', '2020-07-17', '2020-07-14', '2020-07-24', '0000-00-00', '152532474', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
--

CREATE TABLE `detalle` (
  `ID_DETALLE` int(11) NOT NULL,
  `DESC_DET` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle`
--

INSERT INTO `detalle` (`ID_DETALLE`, `DESC_DET`) VALUES
(1, 'Administración'),
(2, 'Administración de Instalaciones'),
(3, 'Proyectos por demanda'),
(4, 'Team Fijo'),
(5, 'Venta de Productos'),
(6, 'Servicio Mensual'),
(7, 'Servicio por demanda');

-- --------------------------------------------------------

--
-- Table structure for table `estado_cobranza`
--

CREATE TABLE `estado_cobranza` (
  `ID_EO_COB` int(11) NOT NULL,
  `NOM_EO_COB` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estado_cobranza`
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
-- Table structure for table `factura`
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
-- Table structure for table `informe_de_pago`
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
-- Table structure for table `involucrados_en_cc`
--

CREATE TABLE `involucrados_en_cc` (
  `ID_CC` int(11) NOT NULL,
  `ID_CARGO` int(11) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jefe_entel`
--

CREATE TABLE `jefe_entel` (
  `ID_JDE` int(11) NOT NULL,
  `NOM_JDE` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jefe_entel`
--

INSERT INTO `jefe_entel` (`ID_JDE`, `NOM_JDE`) VALUES
(1, 'Hector Badilla'),
(2, 'Flavio Gomez'),
(3, 'Alejandro Toledo'),
(4, 'Alejandro Arro'),
(5, 'German Rojas'),
(6, 'Leonardo Caddeo'),
(7, 'Alejandro Guzman'),
(8, 'Patricio Retamales'),
(9, 'Mauricio Diaz'),
(10, 'Alexis Pino'),
(11, 'Jose Valenzuela'),
(12, 'Carlos Gallenguillos'),
(13, 'Patricio Quezada'),
(14, 'Andres Cerda');

-- --------------------------------------------------------

--
-- Table structure for table `linea_de_negocio`
--

CREATE TABLE `linea_de_negocio` (
  `ID_LINEA` int(11) NOT NULL,
  `NOM_LINEA` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `linea_de_negocio`
--

INSERT INTO `linea_de_negocio` (`ID_LINEA`, `NOM_LINEA`) VALUES
(1, 'Administración'),
(2, 'Instalaciones'),
(3, 'Servicios'),
(4, 'Venta de Productos');

-- --------------------------------------------------------

--
-- Table structure for table `oc`
--

CREATE TABLE `oc` (
  `ID_OC` int(11) NOT NULL,
  `ID_FACT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pago_fact`
--

CREATE TABLE `pago_fact` (
  `ID_FACT` int(11) NOT NULL,
  `ID_IP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `RUT` char(10) NOT NULL,
  `NOM_PERSONAS` char(30) NOT NULL,
  `ID_PERSONAS` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `CLAVE` char(10) NOT NULL,
  `activo` varchar(3) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`RUT`, `NOM_PERSONAS`, `ID_PERSONAS`, `ID_ROL`, `CLAVE`, `activo`) VALUES
('197462647', 'Ytza Bruna', 1, 1, 'Olitel2020', 'si'),
('268475273', 'kristina El-Ghory', 2, 3, 'Olitel2020', 'si'),
('17151730-3', 'Juan Cavieres', 3, 2, 'Olitel2020', 'si'),
('0', 'Seleccionar', 4, 2, '0', 'si'),
('26567914-5', 'Hector Padilla', 5, 2, 'Olitel2020', 'si'),
('265086446', 'Eusebio Diaz', 6, 2, 'Olitel2020', 'si'),
('152532474', 'Fernando Pinilla', 7, 2, 'Olitel2020', 'si'),
('141512145', 'Isaac Soto', 8, 2, 'Olitel2020', 'si'),
('170542576', 'Bastian Morales', 9, 2, 'Olitel2020', 'si'),
('169391297', 'Miguel Soto', 10, 2, 'Olitel2020', 'si'),
('17565994-3', 'Bryan Ureta', 11, 2, 'Olitel2020', 'si'),
('166819725', 'Daniel Gonzalez', 12, 2, 'Olitel2020', 'si'),
('115182781', 'David Perry', 13, 2, 'Olitel2020', 'si'),
('164768279', 'Felipe Muñoz', 14, 2, 'Olitel2020', 'si'),
('173588836', 'Edison Gomez', 15, 2, 'Olitel2020', 'si'),
('25894503-4', 'Ernesto Serrano', 16, 1, 'Olitel2020', 'si'),
('89404029', 'Eugenio Suarez', 17, 2, 'Olitel2020', 'si'),
('180718125', 'Francisco Muñoz', 18, 2, 'Olitel2020', 'si'),
('263191404', 'Francisco Sanchez G', 19, 2, 'Olitel2020', 'si'),
('17396370K', 'Jesus Espinoza', 20, 2, 'Olitel2020', 'si'),
('150448921', 'José M Olivares', 21, 2, 'Olitel2020', 'si'),
('13474751K', 'Juan Aldana', 22, 2, 'Olitel2020', 'si'),
('169500800', 'Juan Escalona', 23, 2, 'Olitel2020', 'si'),
('172777791', 'Juan Montecino', 24, 2, 'Olitel2020', 'si'),
('267343632', 'Luis Alcantara', 25, 2, 'Olitel2020', 'si'),
('176915900', 'Marco Bravo', 26, 2, 'Olitel2020', 'si'),
('6596760K', 'Mariano Escobedo', 27, 2, 'Olitel2020', 'si'),
('170055233', 'Nicolas Gallardo', 28, 2, 'Olitel2020', 'si'),
('26419380K', 'Rafael Martinez', 29, 2, 'Olitel2020', 'si'),
('168761260', 'Rodolfo Soto', 30, 2, 'Olitel2020', 'si'),
('152190727', 'Sandro Soto', 31, 2, 'Olitel2020', 'si'),
('177372196', 'Pedro Rodriguez', 32, 2, 'Olitel2020', 'si'),
('331788090', 'Bernardo Ojeda', 33, 2, 'Olitel2020', 'si'),
('160964669', 'Julio Antonio Olivares', 35, 3, 'Olitel2020', 'si'),
('136245198', 'Julio Alejandro Olivares', 36, 3, 'Olitel2020', 'si');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `ID_REGION` int(11) NOT NULL,
  `NOM_REGION` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`ID_REGION`, `NOM_REGION`) VALUES
(1, 'XV - Arica y Parinacota'),
(2, 'I - Tarapacá'),
(3, 'II - Antofagasta'),
(4, 'III - Atacama'),
(5, 'IV - Coquimbo'),
(6, 'V - Valparaiso'),
(7, 'RM - Metropolitana de Santiago'),
(8, 'VI - Libertador General Bernar'),
(9, 'VII - Maule'),
(10, 'XVI - Ñuble'),
(11, 'VIII - Biobío'),
(12, 'IX - La Araucanía'),
(13, 'XIV - Los Ríos'),
(14, 'X - Los Lagos'),
(15, 'XI - Aysén del General Carlos'),
(16, 'XII - Magallanes y de la Antár');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `NOM_ROL` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`ID_ROL`, `NOM_ROL`) VALUES
(1, 'Administrador'),
(2, 'Normal'),
(3, 'Cobranza');

-- --------------------------------------------------------

--
-- Table structure for table `supentel`
--

CREATE TABLE `supentel` (
  `ID_SUPENTEL` int(11) NOT NULL,
  `NOM_SUPENTEL` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supentel`
--

INSERT INTO `supentel` (`ID_SUPENTEL`, `NOM_SUPENTEL`) VALUES
(1, 'Alex Curihuinca'),
(2, 'Alfonso Alvarado'),
(3, 'Andres Cerda'),
(4, 'Benjamin Hernandez'),
(5, 'Bruno Contreras'),
(6, 'Carlos Aguilar Castro'),
(7, 'Carlos Arce'),
(8, 'Carlos Sersen'),
(9, 'Carolina Toro'),
(10, 'Claudio Espinoza'),
(11, 'Cristobal Segura'),
(12, 'Daniel Salazar'),
(13, 'Daniel Sepulveda'),
(14, 'David Parra'),
(15, 'David Rojas'),
(16, 'Demicio Garrido'),
(17, 'Edgardo Iturra'),
(18, 'Esteban Zapata'),
(19, 'Fabian Gonzalez'),
(20, 'Flavio Gomez'),
(21, 'Franco Fernandez'),
(22, 'Franklin Urra'),
(23, 'Gabriel Ruz'),
(24, 'Gonzalo Quiroga'),
(25, 'Gonzalo Ubilla'),
(26, 'Gustavo Varela'),
(27, 'Hector Badilla'),
(28, 'Hector Vega'),
(29, 'Hugo Vidal'),
(30, 'Ignacio Ibañez'),
(31, 'Ignacio Rachner'),
(32, 'Ignacio Zepeda'),
(33, 'Jorge Martinez'),
(34, 'Jorge Rojas Contreras'),
(35, 'Jose Ochoa'),
(36, 'Juan Acevedo'),
(37, 'Juan Escalona'),
(38, 'Juan Montecinos'),
(39, 'Juan Nuñez'),
(40, 'Juan Reyes'),
(41, 'Juan Rojas'),
(42, 'Leonardo Caddeo'),
(43, 'Luis Cruz'),
(44, 'Luis Dominguez'),
(45, 'Luis Ibaceta'),
(46, 'Luis Leal'),
(47, 'Luis Venegas'),
(48, 'Marcial Muñoz'),
(49, 'Marco Ortiz'),
(50, 'Marco Ulloa'),
(51, 'Mauricio Nuñez'),
(52, 'Michael Zuñiga'),
(53, 'Miguel Rivera'),
(54, 'Monica Feria'),
(55, 'Nestor Videla'),
(56, 'Nicolas Fuenzalida'),
(57, 'Nicolas Garcia'),
(58, 'Nicolas Meza'),
(59, 'Orlando Correa'),
(60, 'Oscar Obreque'),
(61, 'Patricio Aravena'),
(62, 'Patricio Barrera'),
(63, 'Patricio Quezada'),
(64, 'Patricio Urrutia'),
(65, 'Pedro Ortiz'),
(66, 'Ramiro Ramirez'),
(67, 'Raymi Cruz'),
(68, 'Rene Gutierrez'),
(69, 'Reyner Campos'),
(70, 'Ricardo Victoriano'),
(71, 'Richard Astorga'),
(72, 'Richard Jofre'),
(73, 'Roberto Epuyao'),
(74, 'Rodolfo Silva'),
(75, 'Rodrigo Herrera'),
(76, 'Rodrigo Nuñez'),
(77, 'Ruben Cifuentes'),
(78, 'Tania Medina'),
(79, 'Victor Quezada'),
(80, 'Washington Hernandez'),
(81, 'Carlos Zurita');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `ID_TIPO` int(11) NOT NULL,
  `NOM_TIPO` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`ID_TIPO`, `NOM_TIPO`) VALUES
(1, 'Por proyecto'),
(2, 'servicio');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_informe`
--

CREATE TABLE `tipo_informe` (
  `ID_TIPO` int(11) NOT NULL,
  `NOMBRE` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_informe`
--

INSERT INTO `tipo_informe` (`ID_TIPO`, `NOMBRE`) VALUES
(1, 'tipoinf1'),
(2, 'tipoinf2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agrupacion`
--
ALTER TABLE `agrupacion`
  ADD PRIMARY KEY (`ID_AGRUP`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`);

--
-- Indexes for table `cargo_de_persona`
--
ALTER TABLE `cargo_de_persona`
  ADD PRIMARY KEY (`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_PERSONAS`);

--
-- Indexes for table `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  ADD PRIMARY KEY (`ID_CC`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_AGRUP`),
  ADD KEY `FK_RELATIONSHIP_20` (`ID_LINEA`),
  ADD KEY `FK_RELATIONSHIP_21` (`ID_DETALLE`);

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_CIUDAD`),
  ADD KEY `FK_RELATIONSHIP_22` (`ID_REGION`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CL`);

--
-- Indexes for table `comprometidos`
--
ALTER TABLE `comprometidos`
  ADD PRIMARY KEY (`CP`,`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_CARGO`,`ID_PERSONAS`);

--
-- Indexes for table `concepto`
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
-- Indexes for table `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`ID_DETALLE`);

--
-- Indexes for table `estado_cobranza`
--
ALTER TABLE `estado_cobranza`
  ADD PRIMARY KEY (`ID_EO_COB`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_FACT`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_CL`);

--
-- Indexes for table `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  ADD PRIMARY KEY (`ID_IP`),
  ADD KEY `FK_RELATIONSHIP_17` (`CP`),
  ADD KEY `FK_RELATIONSHIP_18` (`ID_TIPO`);

--
-- Indexes for table `involucrados_en_cc`
--
ALTER TABLE `involucrados_en_cc`
  ADD PRIMARY KEY (`ID_CC`,`ID_CARGO`,`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_CARGO`,`ID_PERSONAS`);

--
-- Indexes for table `jefe_entel`
--
ALTER TABLE `jefe_entel`
  ADD PRIMARY KEY (`ID_JDE`);

--
-- Indexes for table `linea_de_negocio`
--
ALTER TABLE `linea_de_negocio`
  ADD PRIMARY KEY (`ID_LINEA`);

--
-- Indexes for table `oc`
--
ALTER TABLE `oc`
  ADD PRIMARY KEY (`ID_OC`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_FACT`);

--
-- Indexes for table `pago_fact`
--
ALTER TABLE `pago_fact`
  ADD PRIMARY KEY (`ID_FACT`,`ID_IP`),
  ADD KEY `FK_RELATIONSHIP_29` (`ID_IP`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID_PERSONAS`),
  ADD KEY `FK_RELATIONSHIP_23` (`ID_ROL`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID_REGION`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indexes for table `supentel`
--
ALTER TABLE `supentel`
  ADD PRIMARY KEY (`ID_SUPENTEL`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indexes for table `tipo_informe`
--
ALTER TABLE `tipo_informe`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agrupacion`
--
ALTER TABLE `agrupacion`
  MODIFY `ID_AGRUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  MODIFY `ID_CC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comprometidos`
--
ALTER TABLE `comprometidos`
  MODIFY `CP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `concepto`
--
ALTER TABLE `concepto`
  MODIFY `CP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detalle`
--
ALTER TABLE `detalle`
  MODIFY `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estado_cobranza`
--
ALTER TABLE `estado_cobranza`
  MODIFY `ID_EO_COB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_FACT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informe_de_pago`
--
ALTER TABLE `informe_de_pago`
  MODIFY `ID_IP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jefe_entel`
--
ALTER TABLE `jefe_entel`
  MODIFY `ID_JDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `linea_de_negocio`
--
ALTER TABLE `linea_de_negocio`
  MODIFY `ID_LINEA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `ID_PERSONAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `ID_REGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supentel`
--
ALTER TABLE `supentel`
  MODIFY `ID_SUPENTEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_informe`
--
ALTER TABLE `tipo_informe`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `centro_de_costo`
--
ALTER TABLE `centro_de_costo`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_AGRUP`) REFERENCES `agrupacion` (`ID_AGRUP`),
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_LINEA`) REFERENCES `linea_de_negocio` (`ID_LINEA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_DETALLE`) REFERENCES `detalle` (`ID_DETALLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
