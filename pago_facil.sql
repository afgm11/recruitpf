-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2018 a las 14:00:40
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pago_facil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_clientes`
--

CREATE TABLE IF NOT EXISTS `wd_clientes` (
  `idcliente` int(11) NOT NULL,
  `mailcliente` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `wd_clientes`
--

INSERT INTO `wd_clientes` (`idcliente`, `mailcliente`) VALUES
(1, 'afgm11@gmail.com'),
(2, 'afgm11@gmail.com'),
(3, 'afgm11@gmail.com'),
(4, 'afgm11@gmail.com'),
(5, 'andres@mentha.cl'),
(6, 'andres@mentha.cl'),
(7, 'andres@mentha.cl'),
(8, 'andres@mentha.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_opcionessistema`
--

CREATE TABLE IF NOT EXISTS `wd_opcionessistema` (
  `idopcsist` int(11) NOT NULL,
  `nropag` int(10) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `pagina` varchar(255) DEFAULT NULL,
  `estado` int(255) DEFAULT NULL,
  `tipo` int(255) DEFAULT NULL,
  `orden` int(255) DEFAULT NULL,
  `icono` varchar(255) DEFAULT NULL,
  `ordenint` int(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `wd_opcionessistema`
--

INSERT INTO `wd_opcionessistema` (`idopcsist`, `nropag`, `titulo`, `pagina`, `estado`, `tipo`, `orden`, `icono`, `ordenint`) VALUES
(266, 1, 'Dashboard', NULL, 0, 1, 1, 'fa-dashboard', 1),
(267, 1, 'Resumen', 'home', 0, 2, 2, NULL, 2),
(268, 2, 'Usuarios', NULL, 0, 1, 3, 'fa-dashboard', 1),
(269, 2, 'Listado Usuarios', 'usuarios/listado', 0, 2, 4, NULL, 2),
(270, 2, 'Crear Usuario', 'usuarios/nuevo', 0, 2, 5, NULL, 3),
(271, 2, 'Modificar Usuario', 'usuarios/modificacion', 0, 3, 6, NULL, 4),
(272, 3, 'Clientes', NULL, 0, 1, 7, 'fa-user', 1),
(273, 3, 'Listado de Clientes', 'clientes/listado', 0, 2, 8, NULL, 2),
(274, 3, 'Modificación clientes', 'clientes/modificacion', 0, 3, 9, NULL, 3),
(307, 4, 'Urls clientes', '', 0, 1, 10, 'fa-dashboard', 1),
(322, 4, 'Listado Urls', 'clientes/urlclientes', 0, 2, 11, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_permisos`
--

CREATE TABLE IF NOT EXISTS `wd_permisos` (
  `idpermiso` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idopsist` int(255) DEFAULT NULL,
  `estado` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=529 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `wd_permisos`
--

INSERT INTO `wd_permisos` (`idpermiso`, `iduser`, `idopsist`, `estado`) VALUES
(219, 3, 266, 0),
(220, 3, 267, 0),
(221, 3, 268, 0),
(222, 3, 269, 0),
(223, 3, 270, 0),
(224, 3, 271, 0),
(225, 3, 272, 0),
(226, 3, 273, 0),
(227, 3, 274, 0),
(228, 3, 275, 0),
(229, 3, 276, 0),
(230, 3, 277, 0),
(231, 3, 278, 0),
(232, 3, 279, 0),
(233, 3, 280, 0),
(234, 3, 281, 0),
(235, 3, 282, 0),
(236, 3, 283, 0),
(237, 3, 284, 0),
(238, 3, 285, 0),
(239, 3, 286, 0),
(240, 3, 287, 0),
(241, 3, 288, 0),
(242, 3, 289, 0),
(243, 3, 290, 0),
(244, 3, 291, 0),
(245, 3, 292, 0),
(246, 3, 293, 0),
(247, 3, 294, 0),
(248, 3, 296, 0),
(249, 3, 297, 0),
(250, 3, 298, 0),
(279, 2, 266, 0),
(280, 2, 267, 0),
(281, 2, 268, 0),
(282, 2, 269, 0),
(283, 2, 270, 0),
(284, 2, 271, 0),
(285, 2, 272, 0),
(286, 2, 273, 0),
(287, 2, 274, 0),
(288, 2, 278, 0),
(289, 2, 279, 0),
(290, 2, 280, 0),
(291, 2, 281, 0),
(292, 2, 282, 0),
(293, 2, 283, 0),
(294, 2, 284, 0),
(295, 2, 285, 0),
(296, 2, 286, 0),
(297, 2, 287, 0),
(298, 2, 288, 0),
(299, 2, 289, 0),
(300, 2, 290, 0),
(301, 2, 291, 0),
(302, 2, 292, 0),
(303, 2, 293, 0),
(304, 2, 294, 0),
(305, 2, 296, 0),
(306, 2, 297, 0),
(490, 1, 266, 0),
(491, 1, 267, 0),
(492, 1, 268, 0),
(493, 1, 269, 0),
(494, 1, 270, 0),
(495, 1, 271, 0),
(496, 1, 272, 0),
(497, 1, 273, 0),
(498, 1, 274, 0),
(499, 1, 307, 0),
(500, 1, 309, 0),
(501, 1, 310, 0),
(502, 1, 311, 0),
(503, 1, 312, 0),
(504, 1, 313, 0),
(505, 1, 322, 0),
(506, 1, 314, 0),
(507, 1, 315, 0),
(508, 1, 316, 0),
(509, 1, 317, 0),
(510, 1, 318, 0),
(511, 1, 319, 0),
(512, 1, 320, 0),
(513, 1, 321, 0),
(514, 1, 323, 0),
(515, 1, 324, 0),
(516, 1, 325, 0),
(517, 1, 326, 0),
(518, 1, 327, 0),
(519, 1, 328, 0),
(520, 1, 329, 0),
(521, 1, 330, 0),
(522, 1, 331, 0),
(523, 1, 332, 0),
(524, 1, 333, 0),
(525, 1, 334, 0),
(526, 1, 335, 0),
(527, 1, 336, 0),
(528, 1, 337, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_tpusuarios`
--

CREATE TABLE IF NOT EXISTS `wd_tpusuarios` (
  `idtpusuario` int(11) NOT NULL,
  `nomtipo` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `wd_tpusuarios`
--

INSERT INTO `wd_tpusuarios` (`idtpusuario`, `nomtipo`, `estado`) VALUES
(1, 'Administrador', 0),
(2, ' tp usuario 2', 0),
(3, 'tp usuario 3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_urls`
--

CREATE TABLE IF NOT EXISTS `wd_urls` (
  `id` int(10) unsigned NOT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `accessed` datetime DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `idcliente` int(11) DEFAULT NULL,
  `urlcorta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wd_urls`
--

INSERT INTO `wd_urls` (`id`, `url`, `created`, `accessed`, `hits`, `idcliente`, `urlcorta`) VALUES
(1, 'http://www.google.cl', NULL, NULL, 0, 2, 'MlJgn'),
(2, 'http://www.google.cl', NULL, NULL, 0, 3, 'ark7W'),
(3, 'http://www.google.cl', NULL, NULL, 0, 4, 'yDm6z'),
(4, 'http://www.mentha.cl', NULL, NULL, 0, 5, '2UDx0'),
(5, 'http://www.mentha.cl', NULL, NULL, 0, 6, '6seTa'),
(6, 'http://www.mentha.cl', NULL, NULL, 0, 7, 'ZFYQl'),
(7, 'http://www.mentha.cl', NULL, NULL, 0, 8, 'GkYF6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wd_usuarios`
--

CREATE TABLE IF NOT EXISTS `wd_usuarios` (
  `iduser` int(11) NOT NULL,
  `nomcompleto` varchar(255) DEFAULT NULL,
  `nuser` varchar(255) DEFAULT NULL,
  `npass` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT '0',
  `tpusuarios` int(11) DEFAULT NULL,
  `mailuser` varchar(500) DEFAULT NULL,
  `fingreso` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `wd_usuarios`
--

INSERT INTO `wd_usuarios` (`iduser`, `nomcompleto`, `nuser`, `npass`, `estado`, `tpusuarios`, `mailuser`, `fingreso`) VALUES
(1, 'Andres Gomez', 'admin', 'd8ef515592079d2a5e431a4d319d6185', 0, 1, NULL, '2018-02-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wd_clientes`
--
ALTER TABLE `wd_clientes`
  ADD UNIQUE KEY `unique_idcliente` (`idcliente`);

--
-- Indices de la tabla `wd_opcionessistema`
--
ALTER TABLE `wd_opcionessistema`
  ADD PRIMARY KEY (`idopcsist`);

--
-- Indices de la tabla `wd_permisos`
--
ALTER TABLE `wd_permisos`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `wd_tpusuarios`
--
ALTER TABLE `wd_tpusuarios`
  ADD PRIMARY KEY (`idtpusuario`);

--
-- Indices de la tabla `wd_urls`
--
ALTER TABLE `wd_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wd_usuarios`
--
ALTER TABLE `wd_usuarios`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wd_clientes`
--
ALTER TABLE `wd_clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `wd_opcionessistema`
--
ALTER TABLE `wd_opcionessistema`
  MODIFY `idopcsist` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=338;
--
-- AUTO_INCREMENT de la tabla `wd_permisos`
--
ALTER TABLE `wd_permisos`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=529;
--
-- AUTO_INCREMENT de la tabla `wd_tpusuarios`
--
ALTER TABLE `wd_tpusuarios`
  MODIFY `idtpusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `wd_urls`
--
ALTER TABLE `wd_urls`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `wd_usuarios`
--
ALTER TABLE `wd_usuarios`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
