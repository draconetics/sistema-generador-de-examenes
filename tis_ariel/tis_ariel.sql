-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2016 a las 06:25:19
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tis_ariel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(11) NOT NULL,
  `titulo_examen` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `hora_registro` time NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `estado_examen` int(2) NOT NULL,
  `descripcion_examen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_examen`, `titulo_examen`, `fecha_registro`, `hora_registro`, `hora_inicio`, `hora_fin`, `estado_examen`, `descripcion_examen`) VALUES
(1, '4353', '2016-06-07', '09:24:00', '09:24:00', '09:24:43', 0, 'gdfgdgdgfd'),
(2, 'fdsf', '2016-06-07', '09:24:00', '09:24:00', '09:24:43', 1, 'dfsfsfdds'),
(3, '32131', '2016-06-20', '02:39:40', '09:24:00', '09:32:00', 1, '3123123'),
(4, '342234', '2016-06-20', '03:02:34', '09:24:00', '09:25:00', 1, 'hjghf'),
(5, '4324', '2016-06-20', '03:07:01', '09:24:00', '09:32:00', 1, '423432'),
(6, '2342', '2016-06-20', '05:38:36', '09:24:00', '09:24:00', 1, '434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_examen` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `pregunta_descrip` varchar(100) NOT NULL,
  `tipo_pregunta` int(11) NOT NULL,
  `id_pregu_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_examen`, `id_pregunta`, `pregunta_descrip`, `tipo_pregunta`, `id_pregu_sub`) VALUES
(5, 22, 'unidad uno que es :', 2, 0),
(5, 23, '4324', 2, 0),
(5, 24, 'holas como estan ', 1, 0),
(5, 25, 'joder es que se valido', 3, 0),
(5, 26, 'donde la unidad educativa', 2, 0),
(5, 27, 'que fue del gato san lorenzo', 1, 0),
(5, 28, 'como estan', 2, 0),
(5, 29, '2342', 1, 0),
(5, 30, '4243', 3, 0),
(5, 31, '5fsdfsfds sdfsf', 3, 0),
(5, 32, 'fgd gdg d', 3, 0),
(5, 33, '53453', 3, 0),
(5, 34, 'holas como esta 11', 3, 0),
(5, 35, '5345', 1, 0),
(5, 36, '4323df', 1, 0),
(5, 37, '4323df', 2, 0),
(5, 38, '5435', 1, 0),
(5, 39, '345', 1, 0),
(5, 40, '656', 1, 0),
(5, 41, '3453', 1, 0),
(5, 42, '67546', 1, 0),
(5, 43, '4324 fg', 1, 0),
(5, 44, '7y45', 2, 0),
(5, 45, '5435', 1, 0),
(5, 46, '6456', 1, 0),
(5, 47, '2342', 3, 0),
(5, 48, 'hola como estasn ', 3, 0),
(5, 49, 'holas como estan como les fue ayer', 3, 0),
(5, 50, 'jghjg', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL,
  `respuesta_descrip` varchar(200) NOT NULL,
  `puntaje_respuesta` decimal(10,0) NOT NULL,
  `id_pregu` int(11) NOT NULL,
  `estado_respuesta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `respuesta_descrip`, `puntaje_respuesta`, `id_pregu`, `estado_respuesta`) VALUES
(5, 'fue en jaica', '12', 26, 1),
(6, 'no fue estados unidos', '3', 26, 0),
(7, 'fue en santa de fe', '0', 26, 1),
(8, 'un gato de sin patas', '12', 27, 1),
(9, 'no fue el gato ', '12', 27, 0),
(10, 'como fue ', '20', 28, 1),
(11, '4564', '12', 29, 0),
(12, '4324', '12', 29, 1),
(13, '43', '23', 34, 1),
(14, '435', '23', 34, 0),
(15, 'fdsf', '34', 35, 1),
(16, '5435', '11', 40, 1),
(17, '6546', '23', 42, 0),
(18, '654', '12', 43, 1),
(19, '4324', '12', 44, 1),
(20, '5435', '21', 45, 1),
(21, '6456', '34', 46, 1),
(22, '342', '34', 46, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_user` int(11) NOT NULL,
  `tipo_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_user`, `tipo_user`) VALUES
(1, 'estudiante'),
(2, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` char(50) DEFAULT NULL,
  `apellido` char(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `id_tipo_user` int(11) NOT NULL,
  `user_contr` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `pass`, `correo`, `telefono`, `id_tipo_user`, `user_contr`) VALUES
(45, '654', '654', '645', '6546', 6654, 1, '564'),
(46, 'gdfh', '543hj', 'fds', 'KDFJK', 787, 1, 'f'),
(47, 'gdg', 'gdfg', 'gfdg', 'fgdg', 0, 1, 'gd'),
(48, 'gdfh', 'gffdg', 'gdfggdgfd', 'gfd', 0, 1, 'gfdf'),
(49, 'gdfg', 'gdfg', 'gdfggdgfd', 'gdf', 0, 1, 'gfdg'),
(50, 'dsf', 'fsd', 'fdsf', 'fdsf', 787, 1, 'fdsf'),
(51, 'fsdf', 'fdsf', 'fds324', 'fsdf', 787, 1, 'fsdf'),
(52, 'dsa', 'dsad', 'das', 'dsad', 345, 1, 'das'),
(53, 'holas', 'sda', 'user1', '213', 4234, 1, 'user1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_examen` (`id_examen`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregu` (`id_pregu`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_user`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `id_tipo_user` (`id_tipo_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id_examen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_pregu`) REFERENCES `preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
