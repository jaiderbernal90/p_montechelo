-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 18:36:10
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
  `salary` decimal(10,2) NOT NULL,
  `type_contract` varchar(150) NOT NULL,
  `id_area` int(11) NOT NULL,
  `campus` varchar(200) NOT NULL,
  `img_profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name`, `last_name`, `type_id`, `document`, `email`, `password`, `date_birth`, `gender`, `num_cel`, `tel`, `role`, `estate`, `address`, `deparment`, `city`, `charge`, `salary`, `type_contract`, `id_area`, `campus`, `img_profile`) VALUES
(1, 'juan', 'benito', 'CC', 123, 'benito@montechelo.com', '827ccb0eea8a706c4c34a16891f84e7b', '1999-09-15', 'Masculino', 3134877517, NULL, '3', 'activo', 'Centro ', '20', '30', 'programador', '600000.00', 'aprendizaje', 0, 'montechelo', NULL),
(2, 'pepito', 'perez', 'CC', 12345, 'pepito@montechelo.com', '827ccb0eea8a706c4c34a16891f84e7b', '1999-09-15', 'Masculino', 3134877517, NULL, '2', 'activo', 'cra 3 #77-99 ', '1', '4', 'diseñador', '800000.00', 'laboral', 0, 'montechelo', NULL),
(3, 'Juan Sebastian', 'Bustos Virguez', 'CC', 1077976715, 'sebastianbustos1509@montechelo.com', '827ccb0eea8a706c4c34a16891f84e7b', '1999-09-15', 'Masculino', 3134877517, NULL, '1', 'activo', 'Av 3 #56-69', '30', '200', 'programador', '600000.00', 'aprendizaje', 0, 'cos', NULL),
(4, 'Jaider Alejandro', 'Bernal Camacho', 'CC', 1003558224, 'jaider.bernal90@montechelo.com', 'f9d50d3dae8d5a4008d5d428538bf92d', '2000-01-26', 'Masculino', 3227700908, NULL, '1', 'activo', 'Calle 5 #63-5', '10', '50', 'analista', '2000000.00', 'laboral', 0, 'montechelo', NULL);

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
  ADD KEY `id_user` (`id_user`);

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_publications` (`id_publications`);

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_area` (`id_area`);

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
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1077976717;

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
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_publications`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `i_request`
--
ALTER TABLE `i_request`
  ADD CONSTRAINT `i_request_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `i_request_ibfk_2` FOREIGN KEY (`id_request`) REFERENCES `request` (`id_request`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_publications`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`id_publication`) REFERENCES `publications` (`id_publications`) ON DELETE CASCADE ON UPDATE CASCADE;

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
