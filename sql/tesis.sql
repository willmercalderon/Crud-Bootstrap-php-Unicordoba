-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2016 a las 00:48:12
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `Id_Proyecto` int(20) NOT NULL,
  `NomProyecto` varchar(20) NOT NULL,
  `NomUno` varchar(20) NOT NULL,
  `NomDos` varchar(20) DEFAULT NULL,
  `NomTres` varchar(20) DEFAULT NULL,
  `NomAsesor` varchar(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Nota` int(20) NOT NULL,
  `Linea` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`Id_Proyecto`, `NomProyecto`, `NomUno`, `NomDos`, `NomTres`, `NomAsesor`, `Fecha`, `Nota`, `Linea`) VALUES
(1, 'Sistemas', 'Juan Andrades', 'Lucas Ocampo', 'Aljadith Palomino', 'Larry Pacheco', '03/10/2016', 5, 'DSW'),
(2, 'APP2', 'Willmer', 'Fabio', 'Faber', 'Larry', '03/10/2016', 5, 'REDES'),
(3, 'wally', 'waldo', '', '', 'garcia', '03/10/2016', 3, 'BD'),
(4, 'Aplicacion', 'miguel', 'Lucas Ocampo', '', 'Jairo Rober Galarga', '03/10/2016', 4, 'redes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`Id_Proyecto`),
  ADD UNIQUE KEY `NomProyecto` (`NomProyecto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
