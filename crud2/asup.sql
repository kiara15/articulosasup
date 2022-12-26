-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2022 a las 16:46:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asup`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `autores` varchar(250) NOT NULL,
  `revista` varchar(250) NOT NULL,
  `base` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `doi` varchar(250) NOT NULL,
  `observa` varchar(250) NOT NULL,
  `archivo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `autores`, `revista`, `base`, `fecha`, `doi`, `observa`, `archivo`) VALUES
(1, 'Lucha de las mujeres por el acceso a la Universidad, Latinoamérica: caso Perú', '\"Ada Gallegos Ruiz Conejo,\r\nFlor Marlene Luna Victoria,\r\nNancy Elizabeth Alberca Pintado,\r\nLuis Fernando Blanco Ayala,\r\nFelicita Malpartida Santos\"\r\n', 'Universidad y Sociedad', 'Scopus', '2022-01-16', 'https://rus.ucf.edu.cu/index.php/rus/article/view/2553', 'Publicada', 'https://rus.ucf.edu.cu/index.php/rus/article/view/2553/2502'),
(2, 'Reflexiones y antecedentes en torno a los fundamentos de la universidad peruana y su autonomía\r\n', '\"Ada Lucia Gallegos,\r\nJosé Ore León,\r\nLuisa Rodríguez Zavala,\r\nAlejandra Romero Díaz,\r\nKarina Bonilla Dulanto\"\r\n\r\n', 'Universidad y Sociedad\r\n', 'Scopus\r\n', '2022-01-15', 'https://rus.ucf.edu.cu/index.php/rus/article/view/2545', 'Publicado\r\n', 'https://rus.ucf.edu.cu/index.php/rus/article/view/2545/2494'),
(3, 'El licenciamiento: contrarreforma y camino a la supresión de la libertad en la universidad peruana', '\"Orlando Velásquez Benites, Ada Gallegos Ruiz Conejo, Cecilia Alicia Abensur Pinasco, Renata Teodori de la Puente, Juan Carlos Norabuena Castañeda\"', 'Universidad y Sociedad', 'Scopus', '2022-01-15', 'https://rus.ucf.edu.cu/index.php/rus/article/view/2543', 'Publicado', ''),
(4, 'Inequidad y desigualdad; bases para una nueva propuesta educativa en el Perú.\r\n', '\"Ada Gallegos,\r\nFrancisco Ganga Contreras,\r\nJuan Castillo,\r\nDoris Renata Teodori de la Puente,\r\nCecilia Abensur\"\r\n', 'Revista Dilemas Contemporáneos\r\n', 'Scielo\r\n', '2021-09-01', 'https://doi.org/10.46377/dilemas.v9i1.2864\r\n', 'Publicado\r\n', 'https://dilemascontemporaneoseducacionpoliticayvalores.com/index.php/dilemas/article/view/2864/2875'),
(5, 'Pensamiento crítico y su influencia en la autonomía del aprendizaje en estudiantes de secundaria\r\n', 'Victoria Gregoria Ramírez Chávez\r\n', 'IGOBERNANZA,\r\n', 'Latindex 2.0\r\n', '2021-09-15', 'https://doi.org/10.47865/igob.vol4.2021.121\r\n', 'Publicado\r\n', 'https://igobernanza.org/index.php/IGOB/article/view/121/171'),
(6, 'Liderazo docente universitario en los modelos del sistema gestion universitario, explorando enfoques\r\n', 'Ricardo Palacios Perez, Marco Tarifeño Ramirez, Ada Gallegos\r\n', 'Horizontes\r\n', 'Scielo\r\n', '0000-00-00', '\r\n', 'no localizado\r\n', ''),
(7, 'EL INCUMPLIMIENTO DE LAS GARANTÍAS CONSTITUCIONALES. CASO PARA LA FORMACIÓN DE VALORES DEMOCRÁTICOS EN LA UNIVERSIDAD\r\n', 'Waldo Albarracín Sanchez\r\n', 'Educación Superior \r\n', 'Scielo\r\n', '2020-09-01', 'https://ojs.cepies.umsa.bo/index.php/RCV/article/view/66\r\n', 'Publicado\r\n', 'https://ojs.cepies.umsa.bo/index.php/RCV/article/view/66/63');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
