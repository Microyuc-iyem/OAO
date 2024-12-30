-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2023 a las 05:13:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oao`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `nomJuego` varchar(100) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `version` varchar(50) NOT NULL,
  `lenguaje` varchar(50) NOT NULL,
  `nomDesarrollador` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `ruta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`nomJuego`, `descripcion`, `version`, `lenguaje`, `nomDesarrollador`, `link`, `ruta`) VALUES
('Prueba 72', 'dddssd', '32', 'dsf', 'aleee', 'https://meet.google.com/uiu-vfxq-emy?pli=1', 'juegos/2023-11-14-04-01-30-compromiso.jpg'),
('Pueba desde usuario', 'pownpwenf{pqewnf\r\nfwoifiowebveiovq\r\nwefoowenvponvoerqbv eifbowbfow iowebfow if weifbiowqbfq\r\neiofbwiefhiowef ioefhoiwenfoiw fwiebfoiwbe ofiweoifoiwefoiwefnowe fiwefoiwenf fwbfiownoviriorevniiiiiiiiiiiirn fffffffffffioeqnhoire wifhwiqohiowgnwq giwghwbgiowbgiowqbgw weobgoiwbg\r\nwieogbowiebgiowebgoweq igw qegiowebgiowbqg wghiowqbgweq gwqegbiowqgboqw', '45', '2352', '324', 'https://play.hbomax.com/page/urn:hbo:page:home', 'juegos/2023-11-13-09-32-47-fondo-de-pantalla-de-panda-de-dibujos-animados-1024x640.jpg'),
('Prueba 3', 'verinvnroivnqwpo weijpowcr g wwcowqibg  wxeoinxoi eiwngijg hththd  htr hshest e hae htrjht rj rjfjd jd rjyjhgmsrrensjtsytus jyrdjjntjnf y fwoienfc weifhowiefn iefhwoienf eifhwoeifndc efihweoihgdnv eoiewogn sewnoicnidos eibewoivbewov ', 'w orjgqowrnowe', 'java', 'alejandra ', 'https://www.facebook.com/', 'juegos/2023-11-13-09-30-47-compromiso2.jpg'),
('Prueba 1', 'dsaaaaaaa fsda fds fwefwponposdfjpos cwincpodsnvodv ewoifnwopends vnvpojd  odvposdvs dvsjvopsd dfn opepojfd vdfnvpownv dvnosvo vdovdsv dv osidvos if no onoifndkovndf in odvpvpvmdsp o o onofd vonspovnfovf vsdvnsopvnsa vsdovnop wp ve dopvnpwoejvsd  vwe  erob erer  r v wevornopvpemvowqkp vnoenvdmvlkdve ronreove', '23', 'java', 'alejandra ', 'https://www.netflix.com/mx/login?nextpage=https%3A%2F%2Fwww.netflix.com%2Fbrowse', 'juegos/2023-11-13-09-29-41-10k.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombres` text NOT NULL,
  `apellidoPaterno` text NOT NULL,
  `apellidoMaterno` text NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombres`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `correo`, `contrasena`) VALUES
('-', '-', '-', 0, 'admin', 'admin'),
('-', '-', '-', 0, 'ale', '123'),
('danilo', 'ed', 'ssa', 2147483647, 'danilo', '12345'),
('Diego Armando', 'Martínez', 'Ruíz', 999392933, 'diego', '1234'),
('prueba', 'ed', 'ver', 0, 'panda', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`link`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
