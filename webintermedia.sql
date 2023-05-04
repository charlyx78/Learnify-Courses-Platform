-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 04-05-2023 a las 21:07:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webintermedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `IDC` int(11) NOT NULL,
  `nombreC` varchar(30) NOT NULL,
  `categoriaC` varchar(30) NOT NULL,
  `precioC` float NOT NULL,
  `portadaC` varchar(100) NOT NULL,
  `videoC` varchar(100) NOT NULL,
  `profesorC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`IDC`, `nombreC`, `categoriaC`, `precioC`, `portadaC`, `videoC`, `profesorC`) VALUES
(1, 'curso1', 'PHP', 500, 'portada.png', 'video.mp4', 11),
(8, 'cursoConImagenyVideo', 'CSS', 535, '../Imagenes/brad.png', '../Videos/2023-04-14 23-36-19.mp4', 11),
(11, 'curso3', 'Javascript', 275, '../Imagenes/0c3d997d4bbb84208983612a2c215169.jpg', '../Videos/2023-04-14 23-36-19.mp4', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lecciones`
--

CREATE TABLE `lecciones` (
  `IDL` int(11) NOT NULL,
  `nombreL` varchar(30) NOT NULL,
  `FK_IDM` int(11) NOT NULL,
  `descripcionL` varchar(100) NOT NULL,
  `videoL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lecciones`
--

INSERT INTO `lecciones` (`IDL`, `nombreL`, `FK_IDM`, `descripcionL`, `videoL`) VALUES
(1, 'leccion1', 1, 'Primera leccion del primer modulo del primer curso', 'videoL.mp4'),
(2, 'LeccionDelModulo54', 2, 'Leccion que pertenece al modulo con nombre 54, pero su id es 2 ajaj', '../Lecciones/bob y patricio.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `IDM` int(11) NOT NULL,
  `nombreM` varchar(30) NOT NULL,
  `FK_IDC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`IDM`, `nombreM`, `FK_IDC`) VALUES
(1, 'modulo1', 1),
(2, 'ModuloNumero54', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `tipoCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `genero`, `fechaNacimiento`, `correo`, `contrasena`, `tipoCuenta`) VALUES
(1, 'Samuel', 'Castra', 'B0tellu', 'hombre', '2001-12-21', 'samy@hotmail.com', 'Contra9-', 0),
(10, 'Samuel', 'Castro', 'Juarez', 'mujer', '2020-01-31', 'lol2blover@outlook.com', '', 1),
(11, 'Jose', 'Aguilar', 'Lopez', 'hombre', '1990-10-30', 'profesor@hotmail.com', 'Contra5-', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`IDC`);

--
-- Indices de la tabla `lecciones`
--
ALTER TABLE `lecciones`
  ADD PRIMARY KEY (`IDL`),
  ADD KEY `FK_IDM` (`FK_IDM`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`IDM`),
  ADD KEY `FK_IDC` (`FK_IDC`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `lecciones`
--
ALTER TABLE `lecciones`
  MODIFY `IDL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `IDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lecciones`
--
ALTER TABLE `lecciones`
  ADD CONSTRAINT `lecciones_ibfk_1` FOREIGN KEY (`FK_IDM`) REFERENCES `modulos` (`IDM`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`FK_IDC`) REFERENCES `cursos` (`IDC`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
