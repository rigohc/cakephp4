-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2021 a las 23:29:52
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bikestore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `details`, `created`, `modified`) VALUES
(1, '¡CARLSON GANA EL CAMPEONATO NACIONAL AUSSIE E-XC!', 'El corredor del Giant Factory Off-Road Team, Josh Carlson, obtuvo su segundo título consecutivo del campeonato nacional australiano en la carrera masculina E-XC en Tasmania. El ciclista de 34 años tomó la delantera temprano y mantuvo a raya a los perseguidores para defender su título.\r\nCarlson eligió su Trance X E + Pro 29 para la pista de carreras montañosa en Maydena Bike Park, que desafió a los ciclistas con una combinación de duras subidas, descensos rápidos y pistas rocosas y técnicas.\r\n\r\n“El recorrido fue muy empinado y se hizo para cuatro vueltas difíciles”, dijo Carlson, quien usó su casco Giant Rail SX y sus zapatillas de trail Line para ganar el título. \"Hice la primera vuelta muy duro para establecer una ventaja y manejé el resto de la carrera con un ritmo sólido y constante para llevarme la victoria\".', '2020-01-29 00:00:00', '2020-01-29 00:00:00'),
(2, 'LA BICICLETA DE GRAVEL REVOLT GANA EL PREMIO EDITOR\'S CHOICE DE OFF.ROAD.CC', 'El sitio web off.road.cc nombró a la Giant Revolt como su mejor opción entre las nuevas bicicletas de gravel para 2020/2021. Los editores escogieron 10 de sus opcines nuevas para gravel favoritas y seleccionaron a la Revolt como la mejor del grupo, otorgándole su premio Editor\'s Choice.\r\nExplicando sus criterios para seleccionar a la Revolt como su mejor opción entre todas las bicicletas de gravel disponibles para este año, los editores escribieron: \"La Editor\'s Choice es una bicicleta que, en nuestra opinión, te da la mejor combinación entre desempeño y relación calidad-precio. Es una bicicleta que no solo tiene un buen valor por tu dinero, es una bici que es más que capaz de avergonzar a máquinas con un precio el doble o triple que el de ella”.', '2020-01-29 00:00:00', '2020-01-29 00:00:00'),
(3, '¡PHILIPP OBTIENE LA PRIMERA VICTORIA DE 2021 EN LA CARRERA UCI EN TURQUÍA!', 'Los pilotos del Giant Factory Off-Road Team, Antoine Philipp y Reto Indergand, continuaron con su exitosa carrera de carreras a campo traviesa a principios de temporada en Alanya, Turquía, obteniendo victorias y podios por segundo fin de semana consecutivo.\r\nPhilipp, el campeón francés sub-23 de XC de 2019, obtuvo su primera victoria de 2021, ganando la final de las tres carreras que componen la Velo Alanya MTB Cup en su bicicleta del equipo Anthem Advanced Pro 29. \"Fue realmente genial volver a competir en Turquía\", dijo el piloto de 23 años. \"Estamos aquí para entrenar y competir por valiosos puntos UCI, pero los recorridos también son muy divertidos\".\r\n\r\nPhilipp también terminó tercero y segundo respectivamente en las dos primeras carreras, por lo que logró tres de tres en apariciones en el podio. \"Corrimos tres veces este fin de semana, y día tras día mi forma fue mejor, y mis resultados siguieron\", dijo. \"Me da el ritmo y el impulso adecuados para el inicio de la temporada de la Copa del Mundo en un par de meses\".', '2020-01-20 00:00:00', '2020-01-21 00:00:00'),
(4, '¡LOS CICLISTAS GIANT DE MTB COMIENZAN LA TEMPORADA 2021 CON FINALES DE PODIO!', 'La temporada de carreras de 2021 está en marcha para algunos de los ciclistas del equipo Giant Factory Off-Road, y sus primeras semanas produjeron victorias y podios en carreras de principios de temporada en Turquía y Australia.\r\nReto Indergand y Antoine Philipp estuvieron en Alanya, Turquía, para un par de eventos UCI consecutivos. Indergand terminó primero y tercero, mientras que Philipp terminó segundo en las dos carreras del fin de semana.\r\n\r\n\"Es bueno estar de vuelta en la pista de carreras en la apertura de la temporada en Alayna\", dijo el piloto suizo Indergand luego de su victoria en su bicicleta Anthem Advanced Pro 29. “Una victoria el sábado y el tercer puesto el domingo fue un gran comienzo de temporada. Me siento confiado de cara a la temporada al ver que los números de entrenamiento y los resultados coinciden, y espero seguir avanzando en esta dirección de cara a la primera Copa del Mundo en Albstadt [Alemania]”.', '2020-01-28 00:00:00', '2020-01-28 00:00:00'),
(6, '¡EL EQUIPO GIANT FACTORY OFF-ROAD AGREGA NUEVO TALENTO PARA 2021!', 'Con un fuerte grupo de contendientes a la Copa del Mundo y campeones nacionales, veteranos y estrellas en ascenso, el Giant Factory Off-Road Team ingresa a la temporada de carreras 2021 con una mezcla diversa de nuevos talentos y ciclistas que regresan. El equipo de este año está formado por 14 ciclistas que compiten en una variedad de disciplinas todoterreno que incluyen carreras de descenso, enduro, cross-country, gravel y bicicletas eléctricas.\r\nUna de las incorporaciones clave del equipo este año es el profesional francés de descenso Rémi Thirion, medallista de bronce en el Campeonato Mundial de Bicicleta de Montaña UCI 2020. Thirion, un profesional veterano con seis podios en la Copa del Mundo a su nombre, logró su primera victoria en la Copa del Mundo en 2013. El corredor de 31 años viene de una fuerte temporada 2020 que lo vio terminar segundo en una carrera de la Copa del Mundo en Maribor para ir con su podio en los Campeonatos del Mundo.', '2020-01-28 00:00:00', '2020-01-30 00:00:00'),
(8, 'HISTÓRICO TRIUNFO PARA EL CICLISMO INFANTIL DE LA HUASTECA', 'Histórico triunfo obtuvo Litzi Gardenia Mogica Martínez, niña ciclista de origen orgullosamente huejutlense que obtuvo el primer lugar en la Tercera Fecha de la Copa Nacional de Ciclismo de Montaña que se llevó a cabo el domingo 14 de marzo en el municipio hidalguense de Santiago de Anaya.\r\n\r\nEn dicho evento, Primera Fecha del Serial Estatal de Ciclismo de Montaña en Hidalgo, Litzi, de 8 años de edad e integrante de DMT Prana Bike-Tordos, destacó por su destreza y capacidad de hacer frente a los obstaculos que se le presentaron durante el trayecto pero que logró sortear y obtener la primera posición en la categoria infantil A Femenil.\r\n\r\nCon este triunfo, la pequeña atleta se coloca como referente obligado en cuanto a la practica de dicha disciplina sobre todo por destacar a tan corta edad en esta justa avalada por la Federación Mexicana de Ciclismo.\r\n\r\nCabe mencionar que la delegación huasteca representada por HH Ciclismo, DMT Prana Bike-Tordos, Balseros MTB, La Refa y Tordos: comunidad ciclista, logró resaltar en esta justa, sin embargo, en esta ocasión el mérito mayor es para esta niña que demostró un intenso amor al ciclismo al poner en alto a Huejutla y la región Huasteca.', '2021-03-22 15:43:01', '2021-03-22 15:47:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `tipo_bicicleta` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `rodada` varchar(20) NOT NULL,
  `material_cuadro` varchar(250) NOT NULL,
  `tipo_suspencion` varchar(250) NOT NULL,
  `tipo_frenos` varchar(250) NOT NULL,
  `transmision` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `tipo_bicicleta`, `marca`, `rodada`, `material_cuadro`, `tipo_suspencion`, `tipo_frenos`, `transmision`, `image`, `proveedor`) VALUES
(2, 'CITRÖEN TEAM', '30,000', 'Ruta', 'Alubike', 'R 29\"', 'Aluminio 7000', 'Tijera fibra de carbono/aluminio', 'V Vital', 'Shimano Tiagra 20 Velocidades', 'productos/citron.PNG', 1),
(4, 'Spark 940', '$94,900.00', 'MTB', 'Trek', 'R 29\"', 'Spark 3 Carbon /IMP Technology / HMF Main Frame, BB92 /Alloy SL 6011 swingarm, SW dropouts for Boost 12x148mm, 2.6” tire compatible / TBC Trunnion box construction', 'FOX Float EVOL Performace Trunnion, 3 modes / Lockout-Trail-Descend, DPS / Reb. Adj., Travel120mm /165X45mm', 'MT501 Disc, Shimano SM-RT54 CL / F&R 180mm', 'SRAM Eagle de 12 velocidades', 'productos/trek.PNG', 4),
(5, 'xta 3.0 liquid silver', '20,000', 'MTB', 'Alubike', 'R 29\"', 'Aluminio 6061-12mm', 'SR Suntour XCR32-AIR LOR DS 29\"-Boost 110mm', 'Frenos de disco: Hidraulicos Shimano MT200', 'Shimano SLX M7100 1x12 VEL', 'productos/xta3.0.PNG', 1),
(8, 'XTC ADVANCED 29 ALL OUT XC', '70,900', 'MTB', 'Giant', 'R 29\"', 'Spark 3 Carbon /IMP Technology / HMF Main Frame, BB92 /Alloy SL 6011 swingarm, SW dropouts for Boost 12x148mm, 2.6” tire compatible / TBC Trunnion box construction', 'FOX Float EVOL Performace Trunnion, 3 modes / Lockout-Trail-Descend, DPS / Reb. Adj., Travel120mm /165X45mm', 'Frenos de disco: Hidraulicos Shimano MT200', 'Shimano SLX M7100 1x12 VEL', 'productos/trek.PNG', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `sitio_web` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `razon_social`, `email`, `telefono`, `codigo_postal`, `direccion`, `sitio_web`) VALUES
(1, 'Alubike', 'alubikemx@gmail.com', '5514894652', '55000', '27 de Septiembre No.32 Pachuca de Soto, Hgo. Mexico', 'www.alubikehgo.com.mx'),
(2, 'Giant-Bicycles', 'giant-bicyclesMX@gmail.com', '5555312733', '11510', 'Lamartine 311 Polanco, CDMX. México', 'www.giant-bicycles.com/mx'),
(3, 'Scott', 'proveScott@gmail.com', '5551852763', '55000', 'Av. División del Nte, Del Valle Nte 423, Col del Valle Nte, Benito Juárez, 03103 Ciudad de México, CDMX', 'www.scott-sports.com/mx/es/sports/bike'),
(4, 'Trek', 'bicyclestore@gmail.com', '55 5801 5943', '14210', ' Carr. Picacho-Ajusco 72-Local 4, Jardines en la Montaña, Tlalpan, 14210 Ciudad de México, CDMX', 'www.bicyclestore.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `tipo` varchar(30) NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`, `phone`, `status`, `tipo`, `modified`) VALUES
(12, 'Administrador', 'adminbikestore@gmail.com', '$2y$10$VikcKI.e4vEjBho1Gfogz.n5j3tWC3GaGfk1pq6bpD/4nvJI7pkY6', 'user-img/Huejutla1.jpg', '7711357614', 1, 'administrador', '2021-03-25 12:07:41'),
(13, 'cliente0', 'cliente0@gmail.com', '$2y$10$DdfmhHGj4o229TKgdzRo2.rwJckPm69BOQt8IvfUbMIVqZtSQiDbm', 'user-img/trek.PNG', '7711867420', 1, 'cliente', '2021-03-25 12:14:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK-proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
