-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 13:56:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `numeroDocumento` varchar(15) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`numeroDocumento`, `nombre`, `apellido`, `edad`) VALUES
('1066348636', 'vanessa', 'garcia', '18'),
('76307332', 'WILLIAM', 'ABELLA', '18'),
('10547808', 'JOSE', 'ACOSTA', '19'),
('10516932', 'Mario', 'ACOSTA', '19'),
('34532270', 'MARIA', 'ACOSTA', '19'),
('76323459', 'GUEFRY', 'AGREDO', '19'),
('34531725', 'XIMENA', 'AGREDO', '19'),
('76305729', 'GUILLERMO', 'AGREDO', '19'),
('42870562', 'LOPEZ', 'AGUDELO', '19'),
('75076432', 'JUAN', 'AGUIRRE', '19'),
('10537683', 'NOE', 'ALBAN', '19'),
('76288230', 'DIEGO', 'ALEGRIA', '19'),
('76317155', 'CARLOS', 'ALEGRIA', '19'),
('10536636', 'LUIS', 'ALVAREZ', '19'),
('41733718', 'MARIA', 'ALVAREZ', '22'),
('4613691', 'LUIS', 'ALVEAR', '22'),
('34538776', 'MARY', 'ALZATE', '22'),
('10545657', 'LUIS', 'ANAYA', '22'),
('10539634', 'CARLOS', 'ANAYA', '22'),
('34528262', 'VALENCIA', 'ANDRADE', '22'),
('2899818', 'GERARDO', 'ANDRADE', '34'),
('34540977', 'ESPERANZA', 'ANDRADE', '34'),
('79459964', 'CAMILO', 'ANDRADE', '34'),
('43040911', 'IRMA', 'ARANGO', '34'),
('79390100', 'MILTON', 'ARANGO', '34'),
('10256615', 'CARLOS', 'ARBOLEDA', '34'),
('31223228', 'LUCIA', 'ARCINIEGAS', '34'),
('4773058', 'VICTOR', 'ARCOS', '34'),
('25559177', 'CHILITO', 'ARCOS', '34'),
('34542749', 'YOLANDA', 'ARCOS', '22'),
('34530532', 'ESCOBAR', 'ARENAS', '22'),
('14877481', 'HUGO', 'ARENAS', '22'),
('25611423', 'MARTHA', 'AREVALO', '22'),
('34551673', 'LUZ', 'ARIAS', '22'),
('31266482', '', 'ARISTIZABAL', '18'),
('10544662', 'JOSE', 'ARTEAGA', '18'),
('34562400', 'ELIZABET', 'ASTAIZA', '18'),
('10521362', 'ANTONIO', 'ASTAIZA', '18'),
('10517940', '', 'ASTUDILLO', '18'),
('66923034', 'MARIA', 'ASTUDILLO', '18'),
('76307516', 'EDGAR', 'ASTUDILLO', '19'),
('10542190', 'FABIO', 'ASTUDILLO', '19'),
('34562778', 'MARIA', 'ASTUDILLO', '19'),
('10535084', 'FERNANDO', 'ASTUDILLO', '19'),
('3014070', 'SILVIO', 'AVENDANO', '19'),
('34544560', 'GLORIA', 'AVILA', '19'),
('10529631', 'HUGO', 'AYALA', '19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` varchar(11) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `importado` varchar(50) NOT NULL,
  `precio` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `seccion`, `producto`, `origen`, `importado`, `precio`) VALUES
('ar01', 'CERÁMICA', 'Tubos', 'China', 'VERDADERO', 1400),
('ar02', 'CERÁMICA', 'Plato Decorativo', 'China', 'FALSO', 4500),
('ar03', 'CERÁMICA', 'Juego de te', 'China', 'FALSO', 36000),
('ar04', 'CERÁMICA', 'Cenicero', 'Japón', 'VERDADERO', 16000),
('ar05', 'CERÁMICA', 'Maceta', 'España', 'VERDADERO', 24000),
('ar06', 'CERÁMICA', 'Jarra china', 'China', 'VERDADERO', 106000),
('ar07', 'CONFECCIÓN', 'Tarje Caballero', 'Italia', 'FALSO', 800000),
('ar08', 'CONFECCIÓN', 'Pantalón Señora', 'Marruecos', 'VERDADERO', 138000),
('ar09', 'CONFECCIÓN', 'Camisa Caballero', 'España', 'VERDADERO', 57000),
('ar10', 'CONFECCIÓN', 'Blusa Sra.', 'China', 'VERDADERO', 62999),
('ar11', 'CONFECCIÓN', 'Cazadora piel', 'Italia', 'VERDADERO', 436000),
('ar12', 'CONFECCIÓN', 'Abrigo Caballero', 'Italia', 'VERDADERO', 203000),
('ar13', 'CONFECCIÓN', 'Abrigo Sra', 'Marruecos', 'VERDADERO', 300000),
('ar14', 'CONFECCIÓN', 'Cinturón de piel', 'España', 'VERDADERO', 40000),
('ar15', 'DEPORTE', 'Raqueta Tenis', 'Usa', 'VERDADERO', 78000),
('ar16', 'DEPORTE', 'Chándal', 'Usa', 'FALSO', 193000),
('ar17', 'DEPORTE', 'Tren Eléctrico', 'Japón', 'FALSO', 125400),
('ar18', 'DEPORTE', 'Pistola Olímpica', 'Suecia', 'VERDADERO', 39000),
('ar19', 'DEPORTE', 'Monopatín', 'Marruecos', 'VERDADERO', 93000),
('ar20', 'DEPORTE', 'Balón baloncesto', 'Japón', 'VERDADERO', 63000),
('ar21', 'DEPORTE', 'Balón Fútbol', 'España', 'VERDADERO', 37000),
('ar22', 'DEPORTE', 'Sudadera', 'Usa', 'VERDADERO', 366000),
('ar23', 'DEPORTE', 'Bicicleta de montaña', 'Usa', 'VERDADERO', 470000),
('ar24', 'FERRETERÍA', 'Destornillador', 'España', 'FALSO', 6000),
('ar25', 'FERRETERÍA', 'Serrucho', 'Francia', 'FALSO', 25000),
('ar26', 'FERRETERÍA', 'Llave Inglesa', 'Usa', 'VERDADERO', 20000),
('ar27', 'FERRETERÍA', 'Alicates', 'Italia', 'VERDADERO', 6000),
('ar28', 'FERRETERÍA', 'Martillo', 'España', 'VERDADERO', 10000),
('ar29', 'FERRETERÍA', 'Destornillador', 'Francia', 'VERDADERO', 8000),
('ar30', 'FERRETERÍA', 'Lima Grande', 'España', 'VERDADERO', 18000),
('ar31', 'FERRETERÍA', 'Juego de brocas', 'Taiwán', 'FALSO', 13000),
('ar32', 'JUGUETERÍA', 'Coche Teledirigido', 'Marruecos', 'FALSO', 133000),
('ar33', 'JUGUETERÍA', 'Correpasillos', 'Japón', 'VERDADERO', 86000),
('ar34', 'JUGUETERÍA', 'Consola Video', 'Usa', 'VERDADERO', 3690000),
('ar35', 'JUGUETERÍA', 'Muñeca Andadora', 'España', 'VERDADERO', 88000),
('ar36', 'JUGUETERÍA', 'Fuerte de soldados', 'Japón', 'FALSO', 120000),
('ar37', 'JUGUETERÍA', 'Pistola con sonidos', 'España', 'FALSO', 48000),
('ar38', 'JUGUETERÍA', 'Pie de lámpara', 'Turquía', 'VERDADERO', 33000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
