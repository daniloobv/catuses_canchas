-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-04-2022 a las 03:01:46
-- Versión del servidor: 10.3.30-MariaDB-cll-lve
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catuses_canchas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `rol_id` int(1) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `sueldo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `rol_id`, `empresa_id`, `sucursal_id`, `sueldo`) VALUES
(1, 'admin', '$2y$10$G7OLz39qFMjGwFTn9ixG3.ablT1zxmIMzvtLhW0d3sKT4EEBsurx2', 'Administrador', 'Demostracion', 'FB_IMG_1564510597587.jpg', '2019-12-18 07:00:00', 1, 1, 1, NULL),
(2, 'admin', '$2y$10$9B0rP8Uq4MEAkrgw2QckRuMrIl.pyRgY9ec86duffijloSIVY9ZEK', '', '', '', '2022-03-17 13:57:26', 1, NULL, NULL, NULL),
(30, 'lapto2006', '$2y$10$zuNlYsDlN.MTPsJF4zLHA.z6AJ47halcZ3yvQVFYu8WC6G0DXKQ0u', 'Danilo', 'B. Vivas', 'dobvp1.jpg', '2021-11-08 07:00:00', 2, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'cancha de Tenis', 'cancha # 3'),
(2, 'Canchita Futbool', 'cancha # 2'),
(3, 'cancha Basquetball', 'cancha # 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(250) CHARACTER SET latin1 NOT NULL,
  `cedula` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo_cliente_id` int(11) DEFAULT NULL,
  `codigo_extra` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'localidad o departamento',
  `pais_id` int(11) DEFAULT NULL,
  `codigopostal` int(11) DEFAULT NULL,
  `tipodescuento_id` int(11) DEFAULT NULL,
  `cliente_exento_id` int(1) DEFAULT NULL,
  `cliente_credito_id` int(1) DEFAULT NULL,
  `limite_credito` decimal(10,2) DEFAULT NULL,
  `dias_creditos` int(11) DEFAULT NULL,
  `lista_precios_id` int(11) DEFAULT NULL,
  `vendedor_asignado_id` int(11) DEFAULT NULL,
  `cliente_categoria_id` int(11) DEFAULT NULL,
  `origen_id` int(11) DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id`, `foto`, `nombre`, `cedula`, `correo`, `tipo_cliente_id`, `codigo_extra`, `direccion`, `telefono`, `localidad`, `pais_id`, `codigopostal`, `tipodescuento_id`, `cliente_exento_id`, `cliente_credito_id`, `limite_credito`, `dias_creditos`, `lista_precios_id`, `vendedor_asignado_id`, `cliente_categoria_id`, `origen_id`, `photo`) VALUES
(60, NULL, 'danilo oswaldo berroteran vivas', '403-300189-0001X', 'daniloberroteranv@hotmail.com', NULL, NULL, '', '89065522', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(61, NULL, 'Emanuel Gianluca', '123-300189-0002N', 'emanuel.everth.gian@gmail.com', NULL, NULL, '', '89568956', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(62, NULL, 'GONZALO', '777123456789', 'GONZALO@GMAIL.COM', NULL, NULL, '', '147258369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_tipo`
--

CREATE TABLE `cliente_tipo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_descuento` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente_tipo`
--

INSERT INTO `cliente_tipo` (`id`, `descripcion`, `t_descuento`) VALUES
(1, 'PARTICULAR', 0.00),
(3, 'SOCIO', 50.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `eventoscalendar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `cliente_id`, `fecha`, `user_id`, `precio`, `descuento`, `sub_total`, `eventoscalendar_id`) VALUES
(6, 61, '2022-04-11 21:15:06', 1, 16000.00, 50.00, 15950.00, 73),
(7, 60, '2022-04-11 22:30:30', 1, 16000.00, 0.00, 16000.00, 74);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_abonos`
--

CREATE TABLE `cuentas_abonos` (
  `id` int(11) NOT NULL,
  `cuenta_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas_abonos`
--

INSERT INTO `cuentas_abonos` (`id`, `cuenta_id`, `fecha`, `monto`, `user_id`) VALUES
(1, 6, '2022-04-11 22:29:22', 6.00, 1),
(2, 6, '2022-04-11 22:29:22', 4.00, 1),
(3, 7, '2022-04-11 22:33:47', 350.00, 1),
(4, 7, '2022-04-11 22:33:47', 650.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cuenta` varchar(50) NOT NULL,
  `zona` int(11) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `sueldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`, `cedula`, `email`, `cuenta`, `zona`, `agencia`, `tipo`, `sueldo`) VALUES
(44, 'GNR841625390', 'Emanuel Gianluca', 'Berroteran Baltodano', 'prueba', '1989-01-30', '89065522', 'Hombre', 1, 1, 'leonardo.gif', '2020-08-21', '4033001890001X', 'dvivas@catuses.com', '0124-2563-9856-8745  ', 1, 'ban-00022', 'STAFF', 997),
(44, 'GNR841625390', 'Emanuel Gianluca', 'Berroteran Baltodano', 'prueba', '1989-01-30', '89065522', 'Hombre', 1, 1, 'leonardo.gif', '2020-08-21', '4033001890001X', 'dvivas@catuses.com', '0124-2563-9856-8745  ', 1, 'ban-00022', 'STAFF', 997),
(44, 'GNR841625390', 'Emanuel Gianluca', 'Berroteran Baltodano', 'prueba', '1989-01-30', '89065522', 'Hombre', 1, 1, 'leonardo.gif', '2020-08-21', '4033001890001X', 'dvivas@catuses.com', '0124-2563-9856-8745  ', 1, 'ban-00022', 'STAFF', 997);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventoscalendar`
--

CREATE TABLE `eventoscalendar` (
  `id` int(11) NOT NULL,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(255) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cancha_id` int(11) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descuento` decimal(10,2) DEFAULT NULL,
  `horario_id` int(11) DEFAULT NULL,
  `estado_pago` int(11) DEFAULT 1 COMMENT '1 pendiente, 2 abonos, 3 pagado',
  `estado_fecha_agenda` int(11) DEFAULT 1 COMMENT '1 evento activo, 2 evento inactivo'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventoscalendar`
--

INSERT INTO `eventoscalendar` (`id`, `evento`, `color_evento`, `fecha_inicio`, `fecha_fin`, `cliente_id`, `user_id`, `cancha_id`, `precio`, `descuento`, `horario_id`, `estado_pago`, `estado_fecha_agenda`) VALUES
(73, 'ALQUILER ', '#2196F3', '2022-04-11', '2022-04-12', 61, 0, 2, 16000.00, 50.00, 6, 1, 1),
(74, 'ALQUILER ', '#FFC107', '2022-04-11', '2022-04-12', 60, 0, 1, 16000.00, 0.00, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado_registro` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id`, `descripcion`, `estado_registro`) VALUES
(1, 'EFECTIVO', 1),
(2, 'TRANSFERNCIA', 1),
(3, 'TARJETA', 1),
(4, 'MIXTO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `estado_registro` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora_inicio`, `hora_final`, `estado_registro`) VALUES
(1, '08:00:00', '09:30:00', 1),
(6, '10:00:00', '11:30:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol_descrip` varchar(255) NOT NULL,
  `comentario` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol_descrip`, `comentario`) VALUES
(1, 'Super Usuario (Administrador)', 'acceso a la data de todas las empresas (clientes)'),
(2, 'Administrador', 'acceso a la data solo de una empresa'),
(9, 'Cliente', 'Usuario Cliente Privilegios basicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `descripcion`, `detalles`, `precio`) VALUES
(1, 'Económica ', 'por hora y media', 16000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente_tipo`
--
ALTER TABLE `cliente_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas_abonos`
--
ALTER TABLE `cuentas_abonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canchas`
--
ALTER TABLE `canchas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `cliente_tipo`
--
ALTER TABLE `cliente_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cuentas_abonos`
--
ALTER TABLE `cuentas_abonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
