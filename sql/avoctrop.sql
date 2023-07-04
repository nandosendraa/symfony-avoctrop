-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2023 a las 13:33:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avoctrop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `familia` varchar(40) NOT NULL,
  `subfamilia` varchar(40) NOT NULL,
  `calibre` varchar(40) NOT NULL,
  `kg` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `img` varchar(60) NOT NULL,
  `img_principal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230615143702', '2023-06-15 16:37:18', 24),
('DoctrineMigrations\\Version20230615144900', '2023-06-15 16:49:08', 28),
('DoctrineMigrations\\Version20230615145006', '2023-06-15 16:50:15', 10),
('DoctrineMigrations\\Version20230615145437', '2023-06-19 09:21:39', 23),
('DoctrineMigrations\\Version20230619072229', '2023-06-19 09:23:45', 10),
('DoctrineMigrations\\Version20230619074523', '2023-06-19 09:45:55', 58),
('DoctrineMigrations\\Version20230619083156', '2023-06-19 10:32:02', 18),
('DoctrineMigrations\\Version20230619100438', '2023-06-19 12:04:43', 20),
('DoctrineMigrations\\Version20230620081107', '2023-06-20 10:11:32', 19),
('DoctrineMigrations\\Version20230620090945', '2023-06-20 11:09:49', 25),
('DoctrineMigrations\\Version20230621080956', '2023-06-21 10:10:09', 34),
('DoctrineMigrations\\Version20230621081542', '2023-06-21 10:15:45', 9),
('DoctrineMigrations\\Version20230621115026', '2023-06-21 13:50:32', 17),
('DoctrineMigrations\\Version20230629110730', '2023-06-29 13:10:28', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `img` varchar(70) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `relevante` tinyint(1) NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `img`, `relevante`, `updated_at`) VALUES
(33, 'NOTICIA DE PRUEBA', 'NHpsdskdm sdmsalodmskldsm lkdmg fmgd ñlgmflgm fldñgmfgfgkfgjf gflgfñdl gflglgkfl gdflgfdlgkfdl gdfñlflñg', '198883467-l-normal-none-649d69150f24c438405655.jpg', 0, '2023-06-29 13:20:53'),
(34, 'dadwda', 'dawdwdas a wsad sd asd sad asdas dasd asdsdadsdasdas dasd asda dawd asd asdsadaw dasdw dawdasdaw', '198883467-l-normal-none-649d6a73d81a1785491223.jpg', 0, '2023-06-29 13:26:43'),
(35, 'dsadsadadsada', 'dasddadsad s as sa da dsa asd ad asdsada', '198883467-l-normal-none-649d6a82951de449093200.jpg', 0, '2023-06-29 13:26:58'),
(36, 'dsadsadsdas', 'dasdsds asdasdas egfhdf gf  fdfdf dfd', '198883467-l-normal-none-649d6a8e3e835700563869.jpg', 0, '2023-06-29 13:27:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fecha_prevista` datetime NOT NULL,
  `fecha_pedido` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `pasos` varchar(255) NOT NULL,
  `img` varchar(150) NOT NULL,
  `top` tinyint(1) NOT NULL,
  `color` varchar(60) NOT NULL,
  `mas_ingredientes` varchar(255) DEFAULT NULL,
  `mas_pasos` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre`, `ingredientes`, `pasos`, `img`, `top`, `color`, `mas_ingredientes`, `mas_pasos`, `updated_at`) VALUES
(39, 'Batido Detox', '2 aguacates medianos|Medio pepino|50 g tofu blando|60 ml de zumo de limón|1 cda. de perejil picado|Hojas de menta al gusto|1 cdta. de sal|750 ml de agua', 'Introduce todos los ingrediente en la batidora hasta lograr una crema suave y homogénea.|Para tomarla fría deja que repose durante una hora aproximadamente en la nevera.|Puedes añadirle frutos secos picados para darle un toque \"crunchy\".', 'copia-de-batido-649ec1318bf80149207996.png', 0, '#edf1d6', NULL, NULL, '2023-06-30 13:49:05'),
(40, 'Guacamole con mango', '3 Aguacates|1 Mango|Media cebolla morada|Cilantro fresco|2 cucharadas de zumo de limón|1 pizca de sal', 'Ponga los aguacates pelados y deshuesados en un bol y tritúrelos.|Pique y agregue el resto de ingredientes al bol y mézclelos bien hasta que queden integrados.', 'copia-de-guacamole-649ec13c57a6e907076932.png', 0, '#dfe4a7', NULL, 'Decore con queso fresco o feta desmenuzado.|Para darle más sabor, puede picar tomates y jalapeños y agregarlos a la mezcla.', '2023-06-30 13:49:16'),
(41, 'Té de hueso de aguacate', '1 hueso de aguacate', 'Lavar el hueso con agua.|Ponerlo a hervir con 1l de agua a fuego lento durante 15 minutos.|Dejarlo enfriar y ¡a disfrutar!|Puedes acompañarlo con una cucharada de miel para darle un toque más dulce.', 'copia-de-te-1-649ec14601b20289561151.png', 0, '#fcffd3', NULL, NULL, '2023-06-30 13:49:26'),
(47, 'Mascarilla facial para pieles secas', '1 aguacate|2 o 3 cucharadas de aceite de oliva', 'En un bol, mezcla el aguacate con 2-3 cucharadas de aceite de oliva.|Aplica la mezcla sobre la piel limpia y déjala actuar durante 15\'.|Retira la mascarilla con agua tibia y aplica crema hidratante en el rostro', 'copia-de-mascarillas-649ec15b345b3429655005.png', 1, '#ffdcbb', NULL, NULL, '2023-06-30 13:49:47'),
(48, 'Ensalada fresca', '1/2 tomate|1/2 cebolla|2 rodajas de piña|3 fresas|Maíz dulce|1/2 aguacate|1 huevo duro|100g de arroz integral', 'Pon una olla a hervir con abundante agua, como cuando vas a hervir pasta.|Lava el arroz integral con agua para quitarle el almidón y que quede más suelto|Una vez el agua empieze a hervir, hecha el arroz y déjalo cocinando durante unos 20\'', 'ensalada-1-649ec16395f49874488851.png', 0, '#eafffc', NULL, 'Mientras, corta todos los demás ingredientes y ponlos en un plato o bol|Una vez hecho el arroz , agrégalo al plato o bol con los demás ingredientes|Puedes adornarlo con especias y frutos secos al gusto', '2023-06-30 13:49:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `profile` varchar(60) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apellidos`, `email`, `password`, `telefono`, `profile`, `role`) VALUES
(16, 'Joel', 'Sendra Ye', 'correo@correo.com', '$2y$13$cgCbXRzZ4./pN0eYI71EQeXm5jzixMWCvSiAc6U3kQBUW5W95HSU2', '666777888', 'ye', 'ROLE_ADMIN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
