-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-02-2024 a las 18:49:19
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gallery2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autors`
--

DROP TABLE IF EXISTS `autors`;
CREATE TABLE IF NOT EXISTS `autors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `enabled` int NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `autors`
--

INSERT INTO `autors` (`id`, `name`, `email`, `password`, `enabled`, `created`) VALUES
(35, 'usuario1', 'usuario1@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2024-02-05 19:40:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `file` varchar(200) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `size` int NOT NULL,
  `text` text COLLATE utf8mb3_spanish2_ci NOT NULL,
  `enabled` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `author_id`, `name`, `file`, `size`, `text`, `enabled`, `created`) VALUES
(20, 35, 'Foto', 'imagen-negro.jpg ', 3420, 'Imagen de color negro', 1, '2024-02-05 19:40:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
