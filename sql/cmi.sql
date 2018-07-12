-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2018 a las 01:05:59
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cmi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `vch_conttabla` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `int_contitem` int(11) NOT NULL,
  `int_contlongitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`vch_conttabla`, `int_contitem`, `int_contlongitud`) VALUES
('tusuarios', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cperfiles`
--

CREATE TABLE `cperfiles` (
  `idperfil` int(11) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  `coment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generador_id`
--

CREATE TABLE `generador_id` (
  `id_item` int(11) NOT NULL,
  `prefix` varchar(45) DEFAULT NULL,
  `table` varchar(45) NOT NULL,
  `item` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  `parent` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `cidmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `cidperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templeados`
--

CREATE TABLE `templeados` (
  `id_empleado` int(11) NOT NULL,
  `num_empleado` int(11) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `jefe_directo` varchar(45) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `ncompleto_empleado` varchar(45) DEFAULT NULL,
  `hostname` varchar(45) DEFAULT NULL,
  `clasificacion` varchar(45) DEFAULT NULL,
  `centro_costo` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `correo_electronico` varchar(120) DEFAULT NULL,
  `id_red` varchar(45) DEFAULT NULL,
  `area_negocio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuarios`
--

CREATE TABLE `tusuarios` (
  `idusuario` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `enable` bit(1) NOT NULL,
  `cidperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tusuarios`
--

INSERT INTO `tusuarios` (`idusuario`, `username`, `nombre`, `apaterno`, `amaterno`, `email`, `password`, `enable`, `cidperfil`) VALUES
(0, 'admon', 'admon', '', '', 'vgcruz@', 'vgcruz@', b'1', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`vch_conttabla`);

--
-- Indices de la tabla `cperfiles`
--
ALTER TABLE `cperfiles`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `templeados`
--
ALTER TABLE `templeados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tusuarios`
--
ALTER TABLE `tusuarios`
  ADD PRIMARY KEY (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
