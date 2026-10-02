-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2025 a las 21:50:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_casamayab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_reservas`
--

CREATE TABLE `datos_reservas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `ine` varchar(20) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `habitacion` text DEFAULT NULL,
  `huespedes` int(11) DEFAULT NULL,
  `comprobante` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_reservas`
--

INSERT INTO `datos_reservas` (`id`, `nombre`, `telefono`, `correo`, `domicilio`, `ine`, `nacimiento`, `habitacion`, `huespedes`, `comprobante`) VALUES
(1, 'Aaron Carvajal', '9994178034', 'carvajalaaron44@gmail.com', 'Calle 13 239B Juan B Sosa Chuburna 97205', '1836577170', '2004-06-04', 'Doble', 2, 'comprobantes/2025-12-10-03-54-38-ComprobantePago.pdf'),
(2, 'Maria Sanchez Fernandez', '9999777777', 'maria@sanchez.com', 'Calle 10 566A Col. Francisco de Montejo ', '26863495', '2006-02-21', 'Cuadruple', 4, 'comprobantes/2025-12-10-05-31-27-ComprobanteFichaPago.pdf'),
(3, 'Mario Pérez Castillo ', '9994902074', 'mario@perez.com', 'Calle 20 517 San Ramón Norte Mérida', '45575454', '1999-10-26', 'Sencilla', 1, 'comprobantes/2025-12-10-05-35-09-pago.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'Juan Perez Montalvo', 'juan@perez.com', '9997234512', 'Hola me gustaría saber más sobre la habitación Deluxe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `pass`) VALUES
(2, 'admin', 'admin@admin.com', '123'),
(3, 'aaron04', 'carvajalaaron44@gmail.com', '040604');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_reservas`
--
ALTER TABLE `datos_reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_reservas`
--
ALTER TABLE `datos_reservas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
