-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 22:48:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `i_montechelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_publications` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id_documents` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(150) NOT NULL,
  `id_area` int(11) NOT NULL,
  `description` text NOT NULL,
  `url_doc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_request`
--

CREATE TABLE `i_request` (
  `id` bigint(20) NOT NULL,
  `id_request` bigint(20) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `date_reply` datetime NOT NULL,
  `observations` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_publications` bigint(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(150) NOT NULL,
  `date_notifications` datetime NOT NULL,
  `id_publication` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrf`
--

CREATE TABLE `pqrf` (
  `id_pqrf` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publications`
--

CREATE TABLE `publications` (
  `id_publications` bigint(20) NOT NULL,
  `type_publications` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_publication` datetime NOT NULL,
  `content` text NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `level_importance` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `url_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE `request` (
  `id_request` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_request` datetime NOT NULL,
  `state` varchar(20) NOT NULL,
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `document` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `num_cel` bigint(11) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `role` varchar(15) NOT NULL,
  `estate` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `deparment` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `charge` varchar(255) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `type_contract` varchar(150) NOT NULL,
  `id_area` int(11) NOT NULL,
  `campus` varchar(200) NOT NULL,
  `img_profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name`, `last_name`, `type_id`, `document`, `email`, `password`, `date_birth`, `gender`, `num_cel`, `tel`, `role`, `estate`, `address`, `deparment`, `city`, `charge`, `salary`, `type_contract`, `id_area`, `campus`, `img_profile`) VALUES
(1, 'Carlos', 'Lopez', '1', 1003558228, 'carlitos@montechelo.com', '827ccb0eea8a706c4c34a16891f84e7b', '2000-06-03', '1', 3227700908, '', '1', '1', 'Centro', '12', '601', 'Programador', '300000', '2', 0, 'cos', 'user.png'),
(2, 'Juan Sebastian', 'Bustos Virguez', '1', 1077976715, 'sebastianbustos1509@montechelo.com', '25f9e794323b453885f5181f1b624d0b', '1999-09-15', '2', 3134877517, '', '1', '1', 'Barrio Topacio', '12', '601', 'Programador', '850000', '1', 0, 'cos', 'animated-gifs-corporate-training.gif'),
(3, 'Jaider Alejandro', 'Bernal Camacho', '1', 1003558224, 'jaider.bernal90@montechelo.com', '827ccb0eea8a706c4c34a16891f84e7b', '2000-01-26', '1', 3227700908, '', '1', '1', 'Centro', '1', '80', 'Programador', '3000000', '2', 0, '', 'user.png'),
(5, 'Carmén', 'Perez', '1', 1000255847, 'carmen.p@montechelo.com', '67e881a6e1ffdaef0194118b8cd447d0', '2001-12-31', '2', 3615245454, '', '2', '1', 'Centro', '20', '787', 'Programador', '3000000', '1', 0, '', 'user.png'),
(6, 'Zamir', 'Zamora', '1', 1235874555, 'za.m@montechelo.com', 'd5769f4c83a1bec3a95c5d66f8825da9', '1998-01-14', '1', 3124578998, '', '2', '1', 'Cra 4. #6a', '0', '1', 'Diseñador', '850000', '1', 0, '', 'user.png'),
(7, 'Alvaro', 'Mejia', '1', 1233564848, 'alvarito.m@montechelo.com', 'c3e0c7ca703c0569c2a903fe4f1d417a', '1997-12-29', '1', 3134875517, '', '3', '1', 'Cra 4. #6a-22', '14', '638', 'Programador', '850000', '1', 0, '', 'user.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_publication` (`id_publications`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_documents`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `i_request`
--
ALTER TABLE `i_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_request` (`id_request`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_publications` (`id_publications`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_publication` (`id_publication`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `pqrf`
--
ALTER TABLE `pqrf`
  ADD PRIMARY KEY (`id_pqrf`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id_documents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_request`
--
ALTER TABLE `i_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pqrf`
--
ALTER TABLE `pqrf`
  MODIFY `id_pqrf` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `request`
--
ALTER TABLE `request`
  MODIFY `id_request` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `publications` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_publications`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `i_request`
--
ALTER TABLE `i_request`
  ADD CONSTRAINT `i_request_ibfk_2` FOREIGN KEY (`id_request`) REFERENCES `request` (`id_request`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `i_request_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_publications`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pqrf`
--
ALTER TABLE `pqrf`
  ADD CONSTRAINT `pqrf_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
