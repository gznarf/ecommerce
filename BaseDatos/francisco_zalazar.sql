-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2021 a las 03:45:04
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `francisco_zalazar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabecera_ventas`
--

CREATE TABLE `cabecera_ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total_ventas` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cabecera_ventas`
--

INSERT INTO `cabecera_ventas` (`id_ventas`, `fecha`, `id_usuario`, `total_ventas`) VALUES
(188, '2021-06-20', 0, 2000.00),
(189, '2021-06-20', 0, 2000.00),
(190, '2021-06-20', 0, 2000.00),
(191, '2021-06-20', 0, 2000.00),
(192, '2021-06-20', 0, 2000.00),
(193, '2021-06-20', 0, 2000.00),
(194, '2021-06-20', 0, 2000.00),
(195, '2021-06-20', 0, 2000.00),
(196, '2021-06-20', 0, 2000.00),
(197, '2021-06-20', 0, 2000.00),
(198, '2021-06-20', 0, 2000.00),
(199, '2021-06-20', 0, 2000.00),
(200, '2021-06-20', 0, 2000.00),
(201, '2021-06-20', 0, 2000.00),
(202, '2021-06-20', 0, 0.00),
(203, '2021-06-20', 0, 0.00),
(204, '2021-06-20', 0, 0.00),
(205, '2021-06-20', 0, 0.00),
(206, '2021-06-20', 0, 0.00),
(207, '2021-06-20', 0, 0.00),
(208, '2021-06-20', 0, 0.00),
(209, '2021-06-20', 0, 0.00),
(210, '2021-06-20', 0, 0.00),
(211, '2021-06-20', 0, 0.00),
(212, '2021-06-20', 0, 0.00),
(213, '2021-06-20', 0, 0.00),
(214, '2021-06-20', 0, 0.00),
(215, '2021-06-20', 0, 0.00),
(216, '2021-06-20', 0, 0.00),
(217, '2021-06-20', 0, 0.00),
(218, '2021-06-20', 0, 0.00),
(219, '2021-06-20', 0, 0.00),
(220, '2021-06-20', 0, 0.00),
(221, '2021-06-20', 0, 0.00),
(222, '2021-06-20', 0, 0.00),
(223, '2021-06-20', 0, 0.00),
(224, '2021-06-20', 0, 0.00),
(225, '2021-06-20', 0, 0.00),
(226, '2021-06-20', 0, 0.00),
(227, '2021-06-20', 0, 0.00),
(228, '2021-06-20', 0, 0.00),
(229, '2021-06-20', 0, 0.00),
(230, '2021-06-20', 0, 0.00),
(231, '2021-06-20', 0, 0.00),
(232, '2021-06-20', 0, 0.00),
(233, '2021-06-20', 0, 0.00),
(234, '2021-06-20', 0, 0.00),
(235, '2021-06-20', 0, 0.00),
(236, '2021-06-20', 0, 0.00),
(237, '2021-06-20', 0, 0.00),
(238, '2021-06-20', 0, 0.00),
(239, '2021-06-20', 0, 0.00),
(240, '2021-06-20', 0, 0.00),
(241, '2021-06-20', 0, 0.00),
(242, '2021-06-20', 0, 0.00),
(243, '2021-06-20', 0, 0.00),
(244, '2021-06-20', 0, 0.00),
(245, '2021-06-20', 0, 0.00),
(246, '2021-06-20', 0, 0.00),
(247, '2021-06-20', 0, 0.00),
(248, '2021-06-20', 0, 0.00),
(249, '2021-06-20', 0, 0.00),
(250, '2021-06-20', 0, 0.00),
(251, '2021-06-20', 0, 0.00),
(252, '2021-06-20', 0, 0.00),
(253, '2021-06-20', 0, 0.00),
(254, '2021-06-20', 0, 0.00),
(255, '2021-06-20', 0, 0.00),
(256, '2021-06-20', 0, 0.00),
(257, '2021-06-20', 0, 0.00),
(258, '2021-06-20', 0, 0.00),
(259, '2021-06-20', 0, 0.00),
(260, '2021-06-20', 0, 0.00),
(261, '2021-06-20', 0, 0.00),
(262, '2021-06-20', 0, 0.00),
(263, '2021-06-20', 0, 0.00),
(264, '2021-06-20', 0, 0.00),
(265, '2021-06-21', 0, 2900.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria_prod` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_categoria` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria_prod`, `estado_categoria`) VALUES
(4, 'Destornillador', 1),
(5, 'Palas', 1),
(10, 'Herramientas', 1),
(11, 'Griferias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(18) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cod_postal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `email`, `telefono`, `nombre`, `apellido`, `direccion`, `ciudad`, `cod_postal`) VALUES
(110, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(111, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(112, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(113, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(114, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(115, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(116, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(117, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(118, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(119, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(120, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(121, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(122, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(123, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(124, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(125, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(126, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(127, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(128, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(129, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(130, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(131, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(132, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(133, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(134, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(135, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(136, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(137, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(138, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(139, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(140, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(141, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(142, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(143, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(144, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(145, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(146, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(147, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(148, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(149, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(150, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(151, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(152, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(153, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(154, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(155, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(156, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(157, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(158, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(159, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(160, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(161, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(162, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(163, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(164, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(165, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(166, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(167, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(168, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(169, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(170, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(171, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(172, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(173, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(174, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(175, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(176, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(177, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(178, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(179, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(180, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(181, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(182, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(183, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(184, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(185, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(186, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(187, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(188, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(189, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400),
(190, 'franz.zalazar@gmail.com', 455730, 'Francisco', 'Zalazar', 'Corcega 4500', 'Corrientes', 3400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consultas` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `consulta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `estado_consulta` int(11) NOT NULL,
  `registrado` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consultas`, `nombre`, `apellido`, `email`, `telefono`, `consulta`, `fecha`, `estado_consulta`, `registrado`) VALUES
(1, 'Francisco', 'Zalazar', 'franzi@gmail.com', 2147483647, 'asdadasd', '0000-00-00 00:00:00', 1, 'NO'),
(2, 'Francisco', 'Zalazar', 'franzi@gmail.com', 2147483647, 'Fuciono pero no del todo bien.', '0000-00-00 00:00:00', 1, 'SI'),
(3, 'Francisco', 'Zalazar', 'franzi@gmail.com', 2147483647, 'Cambiamos los controller', '0000-00-00 00:00:00', 1, 'NO'),
(9, 'Francisco', 'Zalazar', 'franzi@gmail.com', 352353, 'erysery', '2021-06-21 17:30:22', 1, 'SI'),
(10, 'Francisco', 'Zalazar', 'franzi@gmail.com', 352353, 'Probando modal.', '2021-06-21 17:53:25', 1, 'SI'),
(11, 'Francisco', 'Zalazar', 'franzi@gmail.com', 352353, 'weqewq', '2021-06-21 18:07:17', 1, 'NO'),
(12, 'Marimar', 'Lapobre', 'franz.zalazar@gmail.com', 455730, 'sdfsfd', '2021-06-21 18:21:53', 1, 'SI'),
(13, 'Francisco', 'Konn', 'franz.zalazar@gmail.com', 455730, 'Probando la consulta contacto', '2021-06-21 22:26:06', 1, 'NO'),
(14, 'Marimar', 'Lapobre', 'franz.zalazar@gmail.com', 455730, 'sdasdasd', '2021-06-21 22:43:19', 1, 'SI'),
(15, 'Francisco', 'Zalazar', 'franz.zalazar@gmail.com', 455730, 'Prueba contacto consulta.', '2021-06-21 22:53:27', 1, 'SI'),
(16, 'Francisco', 'Zalazar', 'franzi@gmail.com', 352353, 'Funciona todo??', '2021-06-21 23:03:45', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_detalle` int(11) NOT NULL,
  `id_ventas` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_detalle`, `id_ventas`, `id_producto`, `id_cliente`, `cantidad`, `precio`, `total`) VALUES
(74, 199, 3, 124, 1, 2000.00, 2000.00),
(75, 200, 3, 125, 1, 2000.00, 2000.00),
(76, 201, 3, 126, 1, 2000.00, 2000.00),
(77, 265, 1, 190, 1, 2900.00, 2900.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `titulo` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `copete` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `stock` decimal(11,0) NOT NULL,
  `imagen` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_producto` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `cod_producto`, `titulo`, `id_categoria`, `copete`, `descripcion`, `marca`, `precio`, `stock`, `imagen`, `estado_producto`) VALUES
(1, 1010, 'Pala de punta', 5, 'Pala de punta', 'Pala de punta reforzada con manillar metálico.-', 'Palön', 2900, '5', 'paladepunta.jpg', 0),
(2, 1011, 'Pala de ancha', 5, 'Pala ancha', 'Una sola pieza de acero forjado, templado y revenido.', 'Palön', 2297, '2', 'palaancha.jpg', 1),
(3, 1012, 'Pala Corazón', 5, 'Pala corazón', 'Pala forma de corazón reforzada.\r\n', 'Palön', 2000, '1', 'palacorazon.jpg', 1),
(4, 90, 'Juego de destornilladores', 4, 'Set de destornilladores', 'Juego de 20 destornilladores con puntas intercambiables.', 'Stanley', 3900, '16', 'juegodestornilladores.jpg', 1),
(5, 5, 'Juego de herramientas', 10, 'Kits de herramientas', 'Juego de herramientas de 148 unidades para reparación de viviendas con caja de herramientas de plástico.', 'Cartman', 15480, '9', 'juegoherramientas.jpg', 1),
(6, 1220692, 'Juego De Herramientas Manuales', 10, 'Juego De Herramientas Manuales', 'Juego De Herramientas Manuales 153 Piezas.', 'Black Decker', 30500, '3', 'herramientas.jpg', 1),
(7, 1220690, 'Llaves combinadas', 10, 'Combo de 20 piezas', 'Marca: Stanley\r\nModelo: STMT97570\r\nCantidad de piezas: 20\r\nLargo mínimo de la llave: 12.5 cm\r\nLargo máximo de la llave: 24 cm\r\nMaterial: Metal\r\nMedidas producto embalado: 26 x 24 x 11 cm\r\nPeso producto embalado: 2,2 Kg', 'STANLEY', 10380, '6', 'llaves.jpg', 1),
(17, 81716, 'Maza de Goma', 10, 'Cabeza de goma', 'Cabeza de goma y mango de madera\r\nPeso: 450Grs', 'Trade', 510, '11', 'mazo.jpg', 1),
(18, 215, 'Tornillos de Zinc', 10, 'Tornillos de Zinc Kreg', '    51MM 2\" de longitud\r\n    Cabeza de arandela Maxi-Loc\r\n    Rosca gruesa\r\n    Punta autorroscante\r\n    Portaherramientas cuadrado #2\r\n    Fabricado en Zinc\r\n    Caja con 50 unidades', 'Kreg', 510, '100', 'tornillos.jpg', 1),
(19, 2457, 'Espátula Recortada', 10, 'Espátula Recortada para Unione', 'Espátula recortada para unión para Drywall Stanley STHT26089LA.\r\nHoja de acero inoxidable cónica que proporciona flexibilidad.\r\nHoja de acero inoxidable para evitar la oxidación y mayor durabilidad\r\nTapa y mango de aleación de zinc para mayor durabilidad.\r\nMango bimaterial ergonómico para comodidad y protección.\r\nLa hoja cónica desde el mango hasta la punta proporciona un acabado suave y parejo.', 'Stanley', 680, '16', 'espatula.jpg', 1),
(20, 35698, 'Set de puntas', 4, 'Set de puntas con soporte', 'Con soporte universal de cambio rápido.\r\nLongitud de la broca: 25 mm\r\nPeso del artículo:  150 g\r\nDimensiones del producto: 8.3 x 8.5 x 9 cm\r\nNúmero de modelo del artículo:  2607002560\r\nNumero de piezas: 9', 'Bosch', 999, '5', 'setdepuntas.jpg', 1),
(21, 36548, 'Set de 5 Destornilladores', 4, 'Mango de goma bicomponente', 'Contenido del kit:\r\n1 Destornillador Plano P-3140-100\r\n1 Destornillador Plano P-3155-125\r\n1 Destornillador Plano P-3165-150\r\n1 Destornillador Philips P-3301-125\r\n1 Destornillador Philips P-3302-150', 'Bahco', 2316, '6', 'setdestornilladores.jpg', 1),
(22, 14555, 'Destornillador Crique', 4, 'Destornillador de 3 funciones', '    Destornillador Bahco de 3 funciones con crique, derecha, izquierda y posición de bloqueo\r\n    Mango de gran porte Soft Grip para mayor sujecion\r\n    Eje en cromo vanadio pulido\r\n    Porta puntas magnetico con encastre de 1/4\"\r\n    Alamcenador de puntas en el interior del mango: PZ 1/ PZ2/ PH1/ PH2/ recto de 4.5/ recto de 5.5\r\n    El eje presenta una parte estriada para mayor sujecion al forzado de torque\r\n    Largo total: 250 MM\r\n    Largo eje: 130 MM\r\n    Garantía total de Bahco ', 'Bahco', 2960, '33', 'criquet.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `estado_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `apellido`, `nombre`, `email`, `usuario`, `telefono`, `password`, `perfil_id`, `estado_usuario`) VALUES
(0, 'Zalazar', 'Francisco', 'franzi@gmail.com', 'franzi@gmail.com', 352353, 'cae0a00bd47746609f836d39e6abfce5161ebdc5', 2, 1),
(4, 'Zalazar', 'German Francisco', 'german@gmail.com', 'german@gmail.com', 15457899, 'cae0a00bd47746609f836d39e6abfce5161ebdc5', 1, 1),
(5, 'Konn', 'Mai', 'mai@gmail.com', 'mai@gmail.com', 457895747, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabecera_ventas`
--
ALTER TABLE `cabecera_ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consultas`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_id_producto` (`id_producto`),
  ADD KEY `fk_id_ventas` (`id_ventas`),
  ADD KEY `fk_id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabecera_ventas`
--
ALTER TABLE `cabecera_ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_id_ventas` FOREIGN KEY (`id_ventas`) REFERENCES `cabecera_ventas` (`id_ventas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
