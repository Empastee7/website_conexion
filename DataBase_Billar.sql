-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2024 a las 22:42:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `billar_exotico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `CitaID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `MesaID` int(11) DEFAULT NULL,
  `FechaHoraInicio` datetime NOT NULL,
  `FechaHoraFin` datetime NOT NULL,
  `Estado` enum('Pendiente','Confirmada','Cancelada') NOT NULL,
  `CantidadJugadores` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`CitaID`, `UserID`, `MesaID`, `FechaHoraInicio`, `FechaHoraFin`, `Estado`, `CantidadJugadores`) VALUES
(1, 5, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 4),
(2, 5, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 4),
(3, 6, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 2),
(4, 7, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 6),
(5, 8, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 3),
(6, 9, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 4),
(7, 10, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 5),
(8, 11, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 2),
(9, 12, 13, '2024-07-21 15:37:56', '2024-07-21 15:37:56', 'Confirmada', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesasbillar`
--

CREATE TABLE `mesasbillar` (
  `MesaID` int(11) NOT NULL,
  `TipoMesa` enum('3 bandas','Pool','Libres') NOT NULL,
  `Estado` enum('Disponible','Ocupada','Reservada','Mantenimiento') NOT NULL,
  `PrecioHora` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesasbillar`
--

INSERT INTO `mesasbillar` (`MesaID`, `TipoMesa`, `Estado`, `PrecioHora`) VALUES
(11, '3 bandas', 'Disponible', 7000.00),
(12, '3 bandas', 'Disponible', 7000.00),
(13, '3 bandas', 'Disponible', 7000.00),
(21, 'Libres', 'Disponible', 7000.00),
(22, 'Libres', 'Disponible', 7000.00),
(23, 'Libres', 'Disponible', 7000.00),
(24, 'Libres', 'Disponible', 7000.00),
(31, 'Pool', 'Disponible', 7000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Tipo` enum('Bebida','Comida','Accesorio') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Rol_id` int(11) NOT NULL,
  `Rol_Nombre` varchar(12) NOT NULL,
  `Descripción` varchar(1234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Rol_id`, `Rol_Nombre`, `Descripción`) VALUES
(1, 'Administrado', 'hola, modifica, crea y borra citas y usuarios y gay'),
(2, 'Usuario', 'agenda citas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UserID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `CorreoElectronico` varchar(255) NOT NULL,
  `Usu_clave` varchar(100) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `NivelJuego` enum('Principiante','Intermedio','Avanzado') DEFAULT NULL,
  `id_rol_fk` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UserID`, `Nombre`, `CorreoElectronico`, `Usu_clave`, `Telefono`, `Edad`, `NivelJuego`, `id_rol_fk`) VALUES
(5, 'Juan', 'juan.malaver1000@gmail.com', '$2y$10$WxTG756mIptSKoYGoYAatuHvzIyUilBkGzW1lc.z5BnrzA.Riah.e', '3024876589', 19, 'Principiante', 1),
(6, 'Copita', 'copita1000@gmail.com', '$2y$10$PhxgCAFXonTRJf7fbpha9e2pbdHxd1iytyPiOXzf0TlqKp56QIo6y', '3213177783', 37, 'Intermedio', 1),
(7, 'Andres', 'Andorg@gmail.com', '$2y$10$HUN.96MS3kq.cLGkAH3qyeXORZU9tNNawUd1glR3/gOl23kXjaQLS', '3517896532', 38, 'Intermedio', 1),
(8, 'David', 'david777@gmail.com', '$2y$10$.w/0h8avWmp/2y4qQp.szOH3eFyz9pwi/wsOvdBCHco/sC9fiNsLW', '3048396578', 27, 'Intermedio', 1),
(9, 'Samuel', 'samuel@gmail.com', '$2y$10$Xe.A/E7UuhvjofYQ14gU0.bxgmzVa7eR4BY4P.IDBNYZvp712WXkK', '3572905634', 18, 'Principiante', 1),
(10, 'Adriana', 'adry@gmail.com', '$2y$10$1j0MSQNSiGZTk8thhzXam.Gfy8XkMU6q6p/GgApkKcd8q5w0CBweq', '3345673498', 23, 'Principiante', 1),
(11, 'Bibi', 'bibi@gmail.com', '$2y$10$Eq.eSRJ/SBiA8/2KrLPpTO8krN1U5A3HOc.R91hEBuai0zHPSrqBi', '3428769087', 44, 'Intermedio', 1),
(12, 'Jhon', 'jhon89412@gmail.com', '$2y$10$k6jcY91V7pRxD4sDNcz15uMPdCYlFp0Pv87o2e5VbWNkrHmLvCj5i', '3124563498', 34, 'Avanzado', 1),
(13, 'Martha', 'martha@gmail.com', '$2y$10$HHFT5evEYNIzq9eQzBvHZe8HSBSezb/Tt2G7jf9pXK/lhlIs39hky', '3022955759', 54, 'Intermedio', 1),
(14, 'Jairo', 'jairo@gmail.com', '$2y$10$7XD/esr5tOKsPo9M4cbcJe/oaIDBAVrjMpSdr4wfZvuf8CjtF4HYS', '3025643872', 58, 'Avanzado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VentaID` int(11) NOT NULL,
  `CitaID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL DEFAULT 1,
  `FechaHora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`CitaID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `MesaID` (`MesaID`);

--
-- Indices de la tabla `mesasbillar`
--
ALTER TABLE `mesasbillar`
  ADD PRIMARY KEY (`MesaID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `id_rol_fk` (`id_rol_fk`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VentaID`),
  ADD KEY `CitaID` (`CitaID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `CitaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `mesasbillar`
--
ALTER TABLE `mesasbillar`
  MODIFY `MesaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VentaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usuarios` (`UserID`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`MesaID`) REFERENCES `mesasbillar` (`MesaID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol_fk`) REFERENCES `rol` (`Rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`CitaID`) REFERENCES `citas` (`CitaID`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
