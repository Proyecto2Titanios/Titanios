-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2016 a las 15:06:53
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_titanio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencias`
--

CREATE TABLE `tbl_incidencias` (
  `inc_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `inc_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inc_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recursos`
--

CREATE TABLE `tbl_recursos` (
  `rec_id` int(3) NOT NULL,
  `rec_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `rec_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `rec_foto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `rec_estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Disponible',
  `tip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_recursos`
--

INSERT INTO `tbl_recursos` (`rec_id`, `rec_nombre`, `rec_descripcion`, `rec_foto`, `rec_estado`, `tip_id`) VALUES
(1, 'Aula Teoria', 'Aula planta primera. Aforo 25 personas.', 'img1.jpg', 'Disponible', 0),
(2, 'Aula Teoria', 'Aula planta segunda. Aforo 35 personas.', 'img2.jpg', 'Disponible', 0),
(3, 'Aula Teoria', 'Aula planta tercera. Aforo 25 personas.', 'img3.jpg', 'Disponible', 0),
(4, 'Aula Teoria', 'Aula planta cuarta. Aforo 30 personas.', 'img4.jpg', 'Disponible', 0),
(5, 'Aula Informatica', 'Aula planta primera. Aforo 15 personas.', 'img5.jpg', 'Disponible', 0),
(6, 'Aula Informatica', 'Aula planta segunda. Aforo 30 personas.', 'img6.jpg', 'Disponible', 0),
(7, 'Despacho Entrevista', 'Despacho 1. Individual.', 'img7.jpg', 'Disponible', 0),
(8, 'Despacho Entrevista', 'Despacho 2. Compartido.', 'img8.jpg', 'Disponible', 0),
(9, 'Sala de Reuniones', 'Planta baja. Tiene proyector y aforo de 20 personas.', 'img9.jpg', 'Disponible', 0),
(10, 'Proyector', 'Proyector de LCD', 'img10.jpg', 'Disponible', 0),
(11, 'Carro portatiles', 'Contiene 10 portatiles DELL i7', 'img11.jpg', 'Disponible', 0),
(12, 'Portatil', 'Thosiba Satellite P50', 'img12.jpg', 'Disponible', 0),
(13, 'Portatil', 'HP Pavilion 15 Notebook PC', 'img13.jpg', 'Disponible', 0),
(14, 'Portatil', 'Asus UX31E', 'img14.jpg', 'Disponible', 0),
(15, 'Movil', 'Nokia 5310 (Contiene el juego de la serpiente).', 'img15.jpg', 'Disponible', 0),
(16, 'Movil', 'ONE Plus 2 (Candy Crush integrado)', 'img16.jpg', 'Disponible', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservas`
--

CREATE TABLE `tbl_reservas` (
  `res_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `res_finicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `res_ffin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos`
--

CREATE TABLE `tbl_tipos` (
  `tip_id` int(11) NOT NULL,
  `tip_nombre` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usu_pwd` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usu_categoria` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`usu_id`, `usu_usuario`, `usu_pwd`, `usu_categoria`) VALUES
(1, 'david.marin', '1234', 'profesor'),
(2, 'sergio.jimenez', '12345', 'profesor'),
(3, 'agnes.plans', 'admin', 'administrador'),
(4, 'ignasi.romero', '123456', 'profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indices de la tabla `tbl_recursos`
--
ALTER TABLE `tbl_recursos`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indices de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  ADD PRIMARY KEY (`res_id`);

--
-- Indices de la tabla `tbl_tipos`
--
ALTER TABLE `tbl_tipos`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_incidencias`
--
ALTER TABLE `tbl_incidencias`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_recursos`
--
ALTER TABLE `tbl_recursos`
  MODIFY `rec_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_reservas`
--
ALTER TABLE `tbl_reservas`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipos`
--
ALTER TABLE `tbl_tipos`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
