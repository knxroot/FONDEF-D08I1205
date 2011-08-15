-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2011 a las 03:10:26
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `psico`
--

-- --------------------------------------------------------

--
-- BORRA LAS 2 TABLAS QUE ERAN DEL CACSA

DROP TABLE 'cacsa_respuestas';
DROP TABLE 'cacsa_preguntas';

--
-- Estructura de tabla para la tabla `CSVE_preguntas`
--

CREATE TABLE IF NOT EXISTS `CSVE_preguntas` (
  `id_pregunta_CSVE` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_CSVE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Volcar la base de datos para la tabla `CSVE_preguntas`
--

INSERT INTO `CSVE_preguntas` (`id_pregunta_CSVE`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, 1, 'Cambié de escuela', 1),
(2, 2, ' Mi papá perdió su trabajo', 1),
(3, 3, ' Me sorprendieron haciendo trampa o mintiendo en la escuela', 1),
(4, 4, ' Algún hermano/a se fue de la casa', 1),
(5, 5, ' Murió un amigo/a cercano', 1),
(6, 6, ' Abusaron sexualmente de mí o fui violada/o', 1),
(7, 7, ' Tuve un fracaso (en la escuela, deportes o alguna otra actividad)', 1),
(8, 8, ' Mi mamá perdió su trabajo', 1),
(9, 9, ' Robé algo valioso', 1),
(10, 10, ' Mi padre se fue de la casa', 1),
(11, 11, ' Me expulsaron de la escuela o de algún curso', 1),
(12, 12, ' Disminuyeron los ingresos económicos de mi familia', 1),
(13, 13, ' Estuve detenido por carabineros', 1),
(14, 14, ' Mi madre se fue de la casa', 1),
(15, 15, ' Tuve problemas en la escuela con algún(os) profesor(es)', 1),
(16, 16, ' Comparto más tiempo con mis amigos(as) o compañeros(as)', 1),
(17, 17, ' Tuve relaciones sexuales por primera vez', 1),
(18, 18, ' Perdi mi trabajo', 1),
(19, 19, ' Subí mucho de peso', 1),
(20, 20, ' He estado detenido por robar', 1),
(21, 21, ' El trabajo de mi papá cambió y está más tiempo fuera de casa', 1),
(22, 22, ' Repetí de curso ', 1),
(23, 23, ' Tuve algún tipo de contacto sexual con una persona de mi mismo sexo', 1),
(24, 24, ' Conseguí mi primer trabajo ', 1),
(25, 25, ' Consumí drogas', 1),
(26, 26, ' Tengo dos o más promedios rojos', 1),
(27, 27, ' Mi mamá empezó a trabajar fuera de casa', 1),
(28, 28, ' Me suspendieron de la escuela o liceo', 1),
(29, 29, ' Empecé a pololear', 1),
(30, 30, ' Me embaracé (si eres mujer) o embaracé a una chica (si eres hombre)', 1),
(31, 31, ' Tuve un gran éxito (en la escuela, deportes o alguna otra actividad)', 1),
(32, 32, ' Tuve un accidente grave', 1),
(33, 33, ' Empecé a tomar alcohol', 1),
(34, 34, ' Un miembro de la familia se suicidó', 1),
(35, 35, ' Mis padres se separaron o divorciaron', 1),
(36, 36, ' Gané un premio deportivo importante', 1),
(37, 37, ' Un amigo/a de la familia se suicidó', 1),
(38, 38, ' Mi papá se casó o convive de nuevo', 1),
(39, 39, ' Me corrí de clases', 1),
(40, 40, ' Me dieron permiso para pololear por primera vez', 1),
(41, 41, ' Empecé a fumar', 1),
(42, 42, ' Tuve cambios negativos en mi forma de ser', 1),
(43, 43, ' Mi hermano/a fue detenido/a', 1),
(44, 44, ' Estuve condicional en la escuela', 1),
(45, 45, ' Dejé de robar', 1),
(46, 46, ' Mi papá fue enviado a la cárcel por un año o más', 1),
(47, 47, ' Me golpearon violentamente otros chicos/as', 1),
(48, 48, ' Siento el rechazo de algunos profesores', 1),
(49, 49, ' La curiosidad sexual me llevó a mi primera relación sexual', 1),
(50, 50, ' Empecé a consumir drogas', 1),
(51, 51, ' Me castigaron por haber robado', 1),
(52, 52, ' Perdí la calma y le pegue o trate mal a alguien', 1),
(53, 53, ' Mi mamá fue enviada a la cárcel por un año o más', 1),
(54, 54, ' Tuve un hijo/a', 1),
(55, 55, ' He pensado en matarme', 1),
(56, 56, ' Me he emborrachado ', 1),
(57, 57, ' Mi mamá se casó o convive de nuevo', 1),
(58, 58, ' Tengo problemas con las drogas', 1),
(59, 59, ' Se murió mi abuelo/a', 1),
(60, 60, ' Dejé de ir a la escuela o liceo', 1),
(61, 61, ' Ingresé a un nuevo equipo de fútbol u otro deporte', 1),
(62, 62, ' Murió mi papá', 1),
(63, 63, ' Fui seleccionado para representar a mi colegio', 1),
(64, 64, ' Me deprimí', 1),
(65, 65, ' Murió mi mamá', 1),
(66, 66, ' Participé en una competencia deportiva', 1),
(67, 67, ' Provoqué un accidente', 1),
(68, 68, ' Murió un hermano/a', 1),
(69, 69, ' Tuve serios problemas con mi papá, mamá o con ambos', 1),
(70, 70, ' Me dejé de juntar con malas compañías', 1),
(71, 71, ' Me echaron de la casa', 1),
(72, 72, ' Mi papá o mamá fue hospitalizado por una enfermedad grave', 1),
(73, 73, ' Empecé a realizar una actividad que no me gustaba, sólo para darle el gusto a mis papás', 1),
(74, 74, ' Fui golpeado físicamente por algún miembro de mi familia', 1),
(75, 75, ' Mi mascota se enfermo', 1),
(76, 76, ' Me empecé a juntar con lo que otros dicen son “malas compañías”', 1),
(77, 77, ' Tengo más responsabilidades', 1),
(78, 78, ' Mi mamá tuvo un problema nervioso grave que requirió tratamiento', 1),
(79, 79, ' Mejoró la relación con mi pololo/a', 1),
(80, 80, ' Me fui de la casa', 1),
(81, 81, ' Cambié de pareja', 1),
(82, 82, ' Varias veces me castigaron injustamente', 1),
(83, 83, ' Tuve un aborto provocado (si eres mujer) o mi pareja tuvo un aborto provocado (si eres hombre)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CSVE_respuestas`
--

CREATE TABLE IF NOT EXISTS `CSVE_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `respuesta2` int(11) DEFAULT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_CSVE` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_CSVE`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_CSVE` (`id_pregunta_CSVE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Filtros para la tabla `CSVE_respuestas`
--
ALTER TABLE `CSVE_respuestas`
  ADD CONSTRAINT `CSVE_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CSVE_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CSVE_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_CSVE`) REFERENCES `CSVE_preguntas` (`id_pregunta_CSVE`) ON UPDATE CASCADE;
