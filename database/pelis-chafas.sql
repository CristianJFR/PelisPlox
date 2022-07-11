-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 16:19:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pelis-chafas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Puntuacion` int(10) NOT NULL,
  `Trailer` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `Titulo`, `Genero`, `Descripcion`, `Puntuacion`, `Trailer`, `Imagen`) VALUES
(9, 'Los minions', 'aventura', '                                Los minions, ingenuos y torpes ayudantes de villano, llevan buscando, desde el principio de los tiempos, un verdadero malhechor al que servir.                            ', 25, 'D_hxHlORX1I', '6.jpg'),
(13, 'Guardianes de la galaxia', 'Accion', '                              Un aventurero espacial se convierte en la presa de unos cazadores de tesoros después de robar el orbe de un villano traicionero.                            ', 19, 'qdIuXCfUKM8', '2.jpg'),
(22, 'Batman Inicia', 'Accion', '                              Después de la muerte de sus padres, el joven heredero Bruce Wayne se convierte en un vengador enmascarado que lucha contra las fuerzas del mal en Ciudad Gótica.                            ', 22, 'BUt97Dv0y9E', 'batman.jpg'),
(23, 'Resident evil', 'Accion', '                              En un centro clandestino de investigación genética, se produce un virus mortal. Para contener la fuga, se cierra toda la instalación y se cree que mueren todos los empleados, pero en realidad se convierten en zombis.    ', 15, 'kEutwdia8n0', 'resident.jpg'),
(24, 'Mickey Mouse', 'Aventura', '                              Vive la diversión y la emoción con Mickey y sus amigos cuando se embarcan en las mayores aventuras de su vida, esquivando los obstáculos y los peligros de un munto loco y salvaje donde la magia de Disney hace que lo impo', 21, 'JaqJOCW7iSM', '4.jpg'),
(26, 'Your name', 'Romance', '                                                            El joven Taki vive en Tokio: la joven Mitsuha, en un pequeño pueblo en las montañas. Durante el sueño, los cuerpos de ambos se intercambian. Recluidos en un cuerpo que les resulta extraño, c', 18, 'yPPaLgSXYlM', 'YourName.jpg'),
(28, 'Deadpool', 'Accion', '                                                            Un exmercenario quien, tras haber sido sometido a un cruel experimento, adquiere el superpoder de sanar rápidamente y pretende vengarse del hombre que destrozó su vida.                      ', 20, '0JnRdfiUMa8', 'deadpool.jpg'),
(29, 'Saw', 'Terror', '                                                                                                                        Adam y Lawrence se despiertan encadenados en un baño infecto con un cadáver entre ellos. Su secuestrador es un maniaco, cuyo juego', 14, 'S-1QgOMQ-ls', 'saw.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Clave`) VALUES
(8, 'Cristian', '123'),
(9, 'Gerson', '123'),
(10, 'Steven', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
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
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
