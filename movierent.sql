-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2018 a las 23:58:44
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movierent`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `apaterno` text NOT NULL,
  `amaterno` text NOT NULL,
  `nombre` text NOT NULL,
  `domicilio` text NOT NULL,
  `ciudad` text NOT NULL,
  `cp` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `apaterno`, `amaterno`, `nombre`, `domicilio`, `ciudad`, `cp`, `fecha`) VALUES
(5, 'sim', '', '', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `category`, `precio`) VALUES
(0, 'Furia de Titanes', '\'Furia de titanes\' es la adaptación al cine del mito de Perseo, hijo del dios Zeus. Perseo nació como un dios pero fue criado como un hombre. Éste, siendo un niño, y su madre Dánae son encerrados en un baúl, por el abuelo de Perseo, y tirados al mar. A duras penas, llegan a la isla de Sérifos, donde el protagonista crece y se convierte en adulto. Allí, Perseo tendrá que enfrentarse y vencer a su duro destino.', 'accion', 0),
(0, 'Wolverine Inmortal', 'Un Logan amnésico investiga su pasado en el mundo del crimen organizado japonés. Vulnerable por primera vez y desafiando sus límites físicos y emocionales, no sólo se enfrentará al letal acero samurái, sino que además mantendrá una lucha interna contra su inmortalidad, que lo hará más fuerte. Esta película es conocida también con el nombre de X-Men: Wolverine 2.', 'accion', 50),
(1, 'Terminator', 'Los Ángeles, año 2029. Las máquinas dominan el mundo. Los rebeldes que luchan contra ellas tienen como líder a John Connor, un hombre que nació en los años ochenta. Para acabar con la rebelión, las máquinas deciden enviar al pasado a un robot -Terminator- cuya misión será eliminar a Sarah Connor, la madre de John, e impedir así su nacimiento.', 'accion', 20),
(2, 'El Transportador', 'El ex operador de Fuerzas Especiales Frank Martin vive lo que parece ser una vida tranquila a orillas del Mediterráneo francés, donde presta sus servicios como un “transportador”, un mercenario que traslada bienes —humanos o de cualquier tipo— de un lugar a otro. Siempre sin preguntas de por medio. Frank, que en su Mercedes equipado lleva a cabo misiones secretas y a veces peligrosas, se apega a un estricto juego de 3 reglas que nunca rompe. Regla numero uno: Nunca modifiques el trato. Dos: Omitir nombres, Frank no quiere saber para quién trabaja o qué es lo que transporta. Tres: Nunca ver qué hay dentro del paquete. La carga más reciente de Frank aparenta ser igual a los incontables paquetes que ha entregado en el pasado. Ha sido contratado por un norteamericano conocido solamente como “Wall Street” para que lleve a cabo una entrega. Pero cuando Frank se detiene en el trayecto, se percata que su “paquete” se mueve…', 'accion', 50),
(3, 'Guardianes', ' Durante la Guerra Fría, una organización conocida como \"Patriotas\" experimentó con el ADN de cuatro individuos, los cuales adquirieron poderes con el objetivo de defender el país y a la humanidad de cualquier amenaza. También conocida con el nombre: \"Guardians\".', 'CienciaF', 100),
(4, 'El Titere', 'Jamie Ashen es un hombre que quiere vengar el asesinato de su mujer. Él sabe que su esposa recibió un extraño muñeco de un ventrílocuo y que eso fue lo que provocó su muerte. Ashen regresa a la escena del crimen, el pueblo de Raven\\\'s Fair y descubre cosas en su familia que el jamás imaginó. También conocida con el nombre: \"Dead Silence\".', 'Terror', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'David', 'velascod@aubc', 'qwertyuiop'),
(2, 'David', 'velascod@aubc', 'asdfg'),
(3, 'David', 'velascod@aubc', 'jajajajaja'),
(4, 'David', 'velascod@aubc', 'jajajajaja'),
(5, 'Juan', 'nose@uabc', 'qwetyuiop'),
(6, 'Mi nombre', 'velascod@uabc.edu.mx', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr_mov`
--

CREATE TABLE `usr_mov` (
  `id_usr` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `date_init` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` text NOT NULL,
  `contrasena` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`, `fecha`) VALUES
('juan', 'asdf', '2018-04-11'),
('juan', '', '2006-04-26'),
('juan', 'qwerty', '0000-00-00'),
('juan', 'qwerty', '0000-00-00'),
('juan', 'qwerty', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE `usuarios2` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `password` text NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `nombre`, `password`, `correo`) VALUES
(1, 'david', 'qwerty', 'prueba@gmail');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
