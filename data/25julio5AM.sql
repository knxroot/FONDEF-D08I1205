-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-07-2011 a las 09:02:39
-- Versión del servidor: 5.1.36
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
-- Estructura de tabla para la tabla `apartado_pregunta`
--

CREATE TABLE IF NOT EXISTS `apartado_pregunta` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pregunta_seccion_id` int(4) DEFAULT NULL COMMENT 'Pregunta a la que pertenece el apartado',
  `apartado_pregunta_id` int(4) DEFAULT NULL COMMENT 'Apart',
  `nombre` varchar(140) DEFAULT NULL COMMENT 'Nombre clave del apartado',
  `titulo` varchar(140) DEFAULT NULL COMMENT 'Titulo de presentacion del apartado',
  `descripcion` varchar(300) DEFAULT NULL COMMENT 'Descripcion del apartado',
  `unico` tinyint(1) DEFAULT NULL COMMENT 'Indica si el apartado es el unico de la pregunta',
  PRIMARY KEY (`id`),
  KEY `fk_apartado_pregunta_pregunta_seccion_id` (`pregunta_seccion_id`),
  KEY `fk_apartado_pregunta_pregunta` (`apartado_pregunta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Apartados de campos dentro de una pregunta' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `apartado_pregunta`
--

INSERT INTO `apartado_pregunta` (`id`, `pregunta_seccion_id`, `apartado_pregunta_id`, `nombre`, `titulo`, `descripcion`, `unico`) VALUES
(1, 1, NULL, 'cantidad_por_año', 'Cantidad de veces por edades en años', NULL, NULL),
(3, 1, NULL, 'total_veces', 'Total', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacsa2_preguntas`
--

CREATE TABLE IF NOT EXISTS `cacsa2_preguntas` (
  `id_pregunta_CACSA2` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_CACSA2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcar la base de datos para la tabla `cacsa2_preguntas`
--

INSERT INTO `cacsa2_preguntas` (`id_pregunta_CACSA2`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, 1, 'Me he preocupado por mis compañeros cuando tienen problemas', 1),
(2, 2, ' Organicé a mis compañeros en grupos de trabajo o estudio', 1),
(3, 3, ' Me escapé de clases ("cimarra")', 1),
(4, 4, ' Usé "torpedos" en las pruebas ', 1),
(5, 5, ' Me he desquitado o sacado la rabia pegándole a otros', 1),
(6, 6, ' He compartido mis materiales escolares con los demás ', 1),
(7, 7, ' He tenido que echarle la culpa a otro para evitarme un castigo ', 1),
(8, 8, ' Me llevé un objeto de un compañero/a, sin que nadie se entere', 1),
(9, 9, ' He vivido la experiencia de ser "buena onda" con mis compañeros.', 1),
(10, 10, ' He estado condicional por mal comportamiento', 1),
(11, 11, ' Me he sentido muy mal por las constantes bromas y acosos de mis compañero/as', 1),
(12, 12, ' Me he emborrachado ', 1),
(13, 13, ' Ha sido entretenido "postear" en internet para insultar o amenazar a otros', 1),
(14, 14, ' He tratado de "hackear" sitios privados de internet (cuentas de correo o bancarias, páginas web, etc.)', 1),
(15, 15, ' He cuidado y me he preocupado por rescatar o proteger las cosas de un compañero/a', 1),
(16, 16, ' Me he escondido para fumar durante los recreos', 1),
(17, 17, ' Obligué a un compañero/a "mateo" a hacerme las tareas', 1),
(18, 18, ' Me he metido en el libro de clases para cambiar las notas, registros,anotaciones, etc.', 1),
(19, 19, ' He participado, en compañía de mis amigos/as, en pegarle a otro compañero/a que me cae mal', 1),
(20, 20, ' He rayado en baños, paredes o lugares públicos', 1),
(21, 21, ' He inventado o divulgado cosas sobre los otros para causarles problemas', 1),
(22, 22, ' He defendido abiertamente, en una pelea o discusión, a un compañero/a', 1),
(23, 23, ' Fumé marihuana ', 1),
(24, 24, ' Me han golpeado en los recreos', 1),
(25, 25, ' En algunas peleas he dejado malheridos a otros', 1),
(26, 26, ' He sido detenido por carabineros', 1),
(27, 27, ' Me han puesto anotaciones positivas en el libro de clases', 1),
(28, 28, ' Vendí algunas cosas que llegaron a mis manos y que eran robadas', 1),
(29, 29, ' Me divertía en los recreos quitándole la colación o el dinero a los más chicos', 1),
(30, 30, ' Sacaba antenas o radios de los autos', 1),
(31, 31, ' Me esforzaba por tener un trato respetuoso con los profesores', 1),
(32, 32, ' Mentía para salir de mi casa si no me daban permiso', 1),
(33, 33, ' Participé en protestas y les daba con lo que tenia a los "pacos" para desquitarme', 1),
(34, 34, ' Me he sentido aislado/a por mis compañero/as', 1),
(35, 35, ' He acosado sexualmente a un compañero/a', 1),
(36, 36, ' Hice fuego en la sala o patio', 1),
(37, 37, ' He hecho destrozos en lugares públicos', 1),
(38, 38, ' Tomé pastillas o fármacos para escaparme de algún problema', 1),
(39, 39, ' En mi familia los problemas se solucionan conversando pacíficamente', 1),
(40, 40, ' Me he llevado chocolates u objetos pequeños de los supermercados sin que me pillen', 1),
(41, 41, ' He reaccionado violentamente con un compañero/a', 1),
(42, 42, ' En mi curso me han considerado como buen compañero/a', 1),
(43, 43, ' He vendido drogas para conseguir algo de dinero', 1),
(44, 44, ' Me he descontrolado y he golpeado a uno de mis padres', 1),
(45, 45, ' Me han destrozado mis trabajos', 1),
(46, 46, ' He robado cosas de familiares o conocidos sin que se den cuenta', 1),
(47, 47, ' Aspiré sustancias como neoprén, pegamentos o parafina ', 1),
(48, 48, ' Manejé a alta velocidad un auto o moto sin licencia de conducir', 1),
(49, 49, ' He ayudado a resolver problemas a mis amigos', 1),
(50, 50, ' He consumido drogas como pasta base, cocaína u otras', 1),
(51, 51, ' He esperado mi turno sin problemas', 1),
(52, 52, ' Me he llevado ropa de una gran tienda sin pagarla', 1),
(53, 53, ' He robado a personas desconocidas', 1),
(54, 54, ' Me he juntado con amigos/as a beber a la salida de clases', 1),
(55, 55, ' He recibido amenazas y anónimos desagradables', 1),
(56, 56, ' He vendido cosas para comprar droga', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacsa2_respuestas`
--

CREATE TABLE IF NOT EXISTS `cacsa2_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` int(11) NOT NULL,
  `respuesta2` varchar(255) DEFAULT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_CACSA2` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_CACSA2`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_CACSA2` (`id_pregunta_CACSA2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `cacsa2_respuestas`
--

INSERT INTO `cacsa2_respuestas` (`id_user`, `respuesta`, `respuesta2`, `comentario`, `id_encuestado`, `id_pregunta_CACSA2`) VALUES
(2, 0, '', '', 14, 1),
(2, 0, '', '', 14, 2),
(2, 0, '', '', 14, 3),
(2, 0, '', '', 14, 4),
(2, 0, '', '', 14, 5),
(2, 0, '', '', 14, 6),
(2, 0, '', '', 14, 7),
(2, 0, '', '', 14, 8),
(2, 0, '', '', 14, 9),
(2, 0, '', '', 14, 10),
(2, 0, '', '', 14, 11),
(2, 0, '', '', 14, 12),
(2, 0, '', '', 14, 13),
(2, 0, '', '', 14, 14),
(2, 0, '', '', 14, 15),
(2, 0, '', '', 14, 16),
(2, 0, '', '', 14, 17),
(2, 0, '', '', 14, 18),
(2, 0, '', '', 14, 19),
(2, 0, '', '', 14, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacsa3_preguntas`
--

CREATE TABLE IF NOT EXISTS `cacsa3_preguntas` (
  `id_pregunta_CACSA3` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_CACSA3`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcar la base de datos para la tabla `cacsa3_preguntas`
--

INSERT INTO `cacsa3_preguntas` (`id_pregunta_CACSA3`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, 1, 'Siempre he ayudado a las personas en problemas', 1),
(2, 2, ' Algunas veces me gusta "pelar" un poco a los demás ', 1),
(3, 3, ' En ocasiones me he aprovechado de alguien para lograr lo que quiero ', 1),
(4, 4, ' Cuando cometo algún error siempre estoy dispuesto a admitirlo ', 1),
(5, 5, ' A veces, cuando alguien ha tenido una desgracia, he pensado que se lo merecía', 1),
(6, 6, ' Nunca he dicho algo a propósito para herir los sentimientos de alguien ', 1),
(7, 7, ' Algunas veces he tratado de vengarme de alguien, en vez de perdonarlo y olvidar ', 1),
(8, 8, ' Siempre soy cortés, incluso con la gente que me cae mal ', 1),
(9, 9, ' Algunas veces, en contra de la opinión mayoritaria, he porfiado en hacer las cosas a mi modo', 1),
(10, 10, ' Siempre hago lo que he dicho que es bueno hacer ', 1),
(11, 11, ' Las normas escolares hay que respetarlas para mantener el orden', 1),
(12, 12, ' No necesito pelear porque hay otras formas de resolver los problemas', 1),
(13, 13, ' Las drogas deberían legalizarse para que todos las puedan probar', 1),
(14, 14, ' Cuando un equipo pierde es natural que sus hinchas hagan destrozos a la salida del estadio ', 1),
(15, 15, ' Es "bakán colarse" sin pagar la entrada', 1),
(16, 16, ' Es divertido burlarse de algunos compañeros', 1),
(17, 17, ' Si necesito dinero y lo puedo sacar de la billetera de alguien conocido, lo haría sin que se entere', 1),
(18, 18, ' Es entretenido romper cosas en la calle, hacer barricadas y tirar piedras', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cacsa3_respuestas`
--

CREATE TABLE IF NOT EXISTS `cacsa3_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_CACSA3` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_CACSA3`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_CACSA3` (`id_pregunta_CACSA3`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `cacsa3_respuestas`
--

INSERT INTO `cacsa3_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_CACSA3`) VALUES
(2, 'V', '', 112, 1),
(2, 'V', '', 112, 2),
(2, 'F', '', 112, 3),
(2, 'F', '', 112, 4),
(2, 'F', '', 112, 5),
(2, 'F', '', 112, 6),
(2, 'F', '', 112, 7),
(2, 'F', '', 112, 8),
(2, 'F', '', 112, 9),
(2, 'F', '', 112, 10),
(2, 'V', '', 112, 11),
(2, 'F', '', 112, 12),
(2, 'F', '', 112, 13),
(2, 'F', '', 112, 14),
(2, 'F', '', 112, 15),
(2, 'F', '', 112, 16),
(2, 'F', '', 112, 17),
(2, 'V', '', 112, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caie_preguntas`
--

CREATE TABLE IF NOT EXISTS `caie_preguntas` (
  `id_pregunta_CAIE` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_CAIE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Volcar la base de datos para la tabla `caie_preguntas`
--

INSERT INTO `caie_preguntas` (`id_pregunta_CAIE`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, 1, '¿Sabes hablar mapudungún, aunque sea poco?', 1),
(2, 2, '¿Vive tu madre como chilena?', 1),
(3, 3, '¿Hablas castellano en tu casa?', 1),
(4, 4, '¿Se siente mapuche tu padre?', 1),
(5, 5, '¿Entiendes, aunque sea poco, cuando te hablan en mapudungún?', 1),
(6, 6, '¿Te gusta hablar de tus asuntos personales con chilenos?', 1),
(7, 7, 'Cuando eras más chico ¿tenías amigos mapuches?', 1),
(8, 8, '¿Se siente chilena tu madre?', 1),
(9, 9, '¿Hablan tus padres mapudungún entre ellos?', 1),
(10, 10, '¿Te gustaría casarte con una persona chilena?', 1),
(11, 11, '¿Vive tu padre como mapuche?', 1),
(12, 12, '¿Te sientes mapuche?', 1),
(13, 13, 'En tu casa en el campo ¿practican el kejuwün?', 1),
(14, 14, '¿Sabes hablar bien castellano?', 1),
(15, 15, '¿Vive tu madre como mapuche?', 1),
(16, 16, '¿Hablas mapudungún en tu casa, aunque sea poco?', 1),
(17, 17, '¿Se siente chileno tu padre?', 1),
(18, 18, '¿Entiendes bien cuando te hablan en castellano?', 1),
(19, 19, '¿Te gusta hablar de tus asuntos personales con mapuches?', 1),
(20, 20, 'Cuando eras más chico ¿tenías amigos chilenos?', 1),
(21, 21, '¿Se siente mapuche tu madre?', 1),
(22, 22, '¿Hablan tus padres castellano entre ellos?', 1),
(23, 23, '¿Te gustaría casarte con una persona mapuche?', 1),
(24, 24, '¿Vive tu padre como chileno?', 1),
(25, 25, '¿Hablas mapudungún en el campo, aunque sea poco?', 1),
(26, 26, '¿Te sientes chileno?', 1),
(27, 27, '¿Eres tú mapuche?', 1),
(28, 28, '¿Tu padre es mapuche?', 1),
(29, 29, '¿Tu madre es mapuche?', 1),
(30, 30, '¿Tienes o tuviste abuelos chilenos?', 1),
(31, 31, '¿Tienes o tuviste abuelos mapuches?', 1),
(32, 32, '¿Participas de los ngillatun o kamarikun cuando éstos se realizan en tu rewe?', 1),
(33, 33, '¿Realizas habitualmente el llellipun?', 1),
(34, 34, '¿Cuando se enferman en tu familia, acuden a la/el machi?', 1),
(35, 35, '¿Tus abuelos, comparten habitualmente contigo epew, ngütram, ngülam?', 1),
(36, 36, '¿Vives en una comunidad mapuche?', 1),
(37, 37, '¿Formas parte de un lof mapuche?', 1),
(38, 38, '¿Con tus amigos hablas mapudungún, aunque sea poco?', 1),
(39, 39, '¿De cual de estas religiones participas más?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caie_respuestas`
--

CREATE TABLE IF NOT EXISTS `caie_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_CAIE` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_CAIE`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_CAIE` (`id_pregunta_CAIE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `caie_respuestas`
--

INSERT INTO `caie_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_CAIE`) VALUES
(2, 'NO', '', 112, 1),
(2, 'SI', '', 112, 2),
(2, 'SI', '', 112, 3),
(2, 'NO', '', 112, 4),
(2, 'NO', '', 112, 5),
(2, 'NO', '', 112, 6),
(2, 'NO', '', 112, 7),
(2, 'NO', '', 112, 8),
(2, 'NO', '', 112, 9),
(2, 'NO', '', 112, 10),
(2, 'NO', '', 112, 11),
(2, 'NO', '', 112, 12),
(2, 'NO', '', 112, 13),
(2, 'NO', '', 112, 14),
(2, 'NO', '', 112, 15),
(2, 'NO', '', 112, 16),
(2, 'SI', '', 112, 17),
(2, 'NO', '', 112, 18),
(2, 'NO', '', 112, 19),
(2, 'NO', '', 112, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campo_respuesta`
--

CREATE TABLE IF NOT EXISTS `campo_respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `apartado_pregunta_id` int(4) NOT NULL,
  `tipo_dato` varchar(45) DEFAULT NULL COMMENT 'Tipo de dato del campo. Se utiliza para la generacion de la presentacion',
  `nombre` varchar(45) DEFAULT NULL COMMENT 'Nombre del campo',
  `valor_defecto` varchar(1000) DEFAULT NULL COMMENT 'Valor por defecto',
  `calculado` tinyint(1) DEFAULT NULL COMMENT 'Indica si el campo es calculado o introducido manualmente',
  PRIMARY KEY (`id`),
  KEY `fk_campo_respuesta_apartado` (`apartado_pregunta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `campo_respuesta`
--

INSERT INTO `campo_respuesta` (`id`, `apartado_pregunta_id`, `tipo_dato`, `nombre`, `valor_defecto`, `calculado`) VALUES
(1, 1, 'integer', NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causasactuales_respuestas`
--

CREATE TABLE IF NOT EXISTS `causasactuales_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `causasactuales_respuestas`
--

INSERT INTO `causasactuales_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('input_ruk1', '', 2, 6, 0),
('select_sistema_tribunal1', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena1', '', 2, 6, 0),
('input_plazo1', '', 2, 6, 0),
('select_tipo_materia1', 'none', 2, 6, 0),
('input_ruk2', '', 2, 6, 0),
('select_sistema_tribunal2', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena2', '', 2, 6, 0),
('input_plazo2', '', 2, 6, 0),
('select_tipo_materia2', 'none', 2, 6, 0),
('input_ruk3', '', 2, 6, 0),
('select_sistema_tribunal3', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena3', '', 2, 6, 0),
('input_plazo3', '', 2, 6, 0),
('select_tipo_materia3', 'none', 2, 6, 0),
('input_ruk4', '', 2, 6, 0),
('select_sistema_tribunal4', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena4', '', 2, 6, 0),
('input_plazo4', '', 2, 6, 0),
('select_tipo_materia4', 'none', 2, 6, 0),
('input_ruk5', '', 2, 6, 0),
('select_sistema_tribunal5', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena5', '', 2, 6, 0),
('input_plazo5', '', 2, 6, 0),
('select_tipo_materia5', 'none', 2, 6, 0),
('input_ruk6', '', 2, 6, 0),
('select_sistema_tribunal6', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena6', '', 2, 6, 0),
('input_plazo6', '', 2, 6, 0),
('select_tipo_materia6', 'none', 2, 6, 0),
('input_ruk7', '', 2, 6, 0),
('select_sistema_tribunal7', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena7', '', 2, 6, 0),
('input_plazo7', '', 2, 6, 0),
('select_tipo_materia7', 'none', 2, 6, 0),
('input_ruk8', '', 2, 6, 0),
('select_sistema_tribunal8', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena8', '', 2, 6, 0),
('input_plazo8', '', 2, 6, 0),
('select_tipo_materia8', 'none', 2, 6, 0),
('input_ruk9', '', 2, 6, 0),
('select_sistema_tribunal9', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena9', '', 2, 6, 0),
('input_plazo9', '', 2, 6, 0),
('select_tipo_materia9', 'none', 2, 6, 0),
('input_ruk10', '', 2, 6, 0),
('select_sistema_tribunal10', 'Seleccione Tribunal', 2, 6, 0),
('input_fecha_inicio_condena10', '', 2, 6, 0),
('input_plazo10', '', 2, 6, 0),
('select_tipo_materia10', 'none', 2, 6, 0),
('CANT_CausasAnteriores', '1', 2, 6, 0),
('CLOSE_FLAG', 'CERRADO', 2, 6, 0),
('tstart', '00:29:49', 2, 6, 0),
('module', 'CausasActuales', 2, 6, 0),
('action', 'GuardarInstrumento', 2, 6, 0),
('idEncuestado', '6', 2, 6, 0),
('input_ruk1', '', 2, 112, 0),
('select_sistema_tribunal1', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena1', '', 2, 112, 0),
('input_plazo1', '', 2, 112, 0),
('select_tipo_materia1', 'none', 2, 112, 0),
('input_ruk2', '', 2, 112, 0),
('select_sistema_tribunal2', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena2', '', 2, 112, 0),
('input_plazo2', '', 2, 112, 0),
('select_tipo_materia2', 'none', 2, 112, 0),
('input_ruk3', '', 2, 112, 0),
('select_sistema_tribunal3', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena3', '', 2, 112, 0),
('input_plazo3', '', 2, 112, 0),
('select_tipo_materia3', 'none', 2, 112, 0),
('input_ruk4', '', 2, 112, 0),
('select_sistema_tribunal4', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena4', '', 2, 112, 0),
('input_plazo4', '', 2, 112, 0),
('select_tipo_materia4', 'none', 2, 112, 0),
('input_ruk5', '', 2, 112, 0),
('select_sistema_tribunal5', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena5', '', 2, 112, 0),
('input_plazo5', '', 2, 112, 0),
('select_tipo_materia5', 'none', 2, 112, 0),
('input_ruk6', '', 2, 112, 0),
('select_sistema_tribunal6', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena6', '', 2, 112, 0),
('input_plazo6', '', 2, 112, 0),
('select_tipo_materia6', 'none', 2, 112, 0),
('input_ruk7', '', 2, 112, 0),
('select_sistema_tribunal7', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena7', '', 2, 112, 0),
('input_plazo7', '', 2, 112, 0),
('select_tipo_materia7', 'none', 2, 112, 0),
('input_ruk8', '', 2, 112, 0),
('select_sistema_tribunal8', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena8', '', 2, 112, 0),
('input_plazo8', '', 2, 112, 0),
('select_tipo_materia8', 'none', 2, 112, 0),
('input_ruk9', '', 2, 112, 0),
('select_sistema_tribunal9', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena9', '', 2, 112, 0),
('input_plazo9', '', 2, 112, 0),
('select_tipo_materia9', 'none', 2, 112, 0),
('input_ruk10', '', 2, 112, 0),
('select_sistema_tribunal10', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena10', '', 2, 112, 0),
('input_plazo10', '', 2, 112, 0),
('select_tipo_materia10', 'none', 2, 112, 0),
('CANT_CausasAnteriores', '1', 2, 112, 0),
('CLOSE_FLAG', 'CERRADO', 2, 112, 0),
('tstart', '00:31:27', 2, 112, 0),
('module', 'CausasActuales', 2, 112, 0),
('action', 'GuardarInstrumento', 2, 112, 0),
('idEncuestado', '112', 2, 112, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causasanteriores_respuestas`
--

CREATE TABLE IF NOT EXISTS `causasanteriores_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `causasanteriores_respuestas`
--

INSERT INTO `causasanteriores_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('input_ruk_2', '', 2, 5, 0),
('select_sistema_tribunal2', '', 2, 5, 0),
('input_fecha_inicio_condena2', '', 2, 5, 0),
('input_fecha_termino_condena2', '', 2, 5, 0),
('input_fecha_detencion2', '', 2, 5, 0),
('input_fecha_control_detencion2', '', 2, 5, 0),
('select_tipo_materia2', '', 2, 5, 0),
('CANT_CausasAnteriores', '1', 2, 5, 0),
('Guardar', '', 2, 5, 0),
('CLOSE_FLAG', 'CERRADO', 2, 5, 0),
('tstart', '21:36:24', 2, 5, 0),
('module', 'CausasAnteriores', 2, 5, 0),
('action', 'GuardarInstrumento', 2, 5, 0),
('idEncuestado', '5', 2, 5, 0),
('input_ruk_2', '', 2, 6, 0),
('select_sistema_tribunal2', '', 2, 6, 0),
('input_fecha_inicio_condena2', '', 2, 6, 0),
('input_fecha_termino_condena2', '', 2, 6, 0),
('input_fecha_detencion2', '', 2, 6, 0),
('input_fecha_control_detencion2', '', 2, 6, 0),
('select_tipo_materia2', '', 2, 6, 0),
('CANT_CausasAnteriores', '1', 2, 6, 0),
('Guardar', '', 2, 6, 0),
('CLOSE_FLAG', 'CERRADO', 2, 6, 0),
('tstart', '21:45:27', 2, 6, 0),
('module', 'CausasAnteriores', 2, 6, 0),
('action', 'GuardarInstrumento', 2, 6, 0),
('idEncuestado', '6', 2, 6, 0),
('input_ruk1', '', 2, 112, 0),
('select_sistema_tribunal1', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena1', '', 2, 112, 0),
('input_fecha_termino_condena1', '', 2, 112, 0),
('input_fecha_detencion1', '', 2, 112, 0),
('input_fecha_control_detencion1', '', 2, 112, 0),
('select_tipo_materia1', 'none', 2, 112, 0),
('input_ruk2', '', 2, 112, 0),
('select_sistema_tribunal2', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena2', '', 2, 112, 0),
('input_fecha_termino_condena2', '', 2, 112, 0),
('input_fecha_detencion2', '', 2, 112, 0),
('input_fecha_control_detencion2', '', 2, 112, 0),
('select_tipo_materia2', 'none', 2, 112, 0),
('input_ruk3', '', 2, 112, 0),
('select_sistema_tribunal3', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena3', '', 2, 112, 0),
('input_fecha_termino_condena3', '', 2, 112, 0),
('input_fecha_detencion3', '', 2, 112, 0),
('input_fecha_control_detencion3', '', 2, 112, 0),
('select_tipo_materia3', 'none', 2, 112, 0),
('input_ruk4', '', 2, 112, 0),
('select_sistema_tribunal4', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena4', '', 2, 112, 0),
('input_fecha_termino_condena4', '', 2, 112, 0),
('input_fecha_detencion4', '', 2, 112, 0),
('input_fecha_control_detencion4', '', 2, 112, 0),
('select_tipo_materia4', 'none', 2, 112, 0),
('input_ruk5', '', 2, 112, 0),
('select_sistema_tribunal5', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena5', '', 2, 112, 0),
('input_fecha_termino_condena5', '', 2, 112, 0),
('input_fecha_detencion5', '', 2, 112, 0),
('input_fecha_control_detencion5', '', 2, 112, 0),
('select_tipo_materia5', 'none', 2, 112, 0),
('input_ruk6', '', 2, 112, 0),
('select_sistema_tribunal6', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena6', '', 2, 112, 0),
('input_fecha_termino_condena6', '', 2, 112, 0),
('input_fecha_detencion6', '', 2, 112, 0),
('input_fecha_control_detencion6', '', 2, 112, 0),
('select_tipo_materia6', 'none', 2, 112, 0),
('input_ruk7', '', 2, 112, 0),
('select_sistema_tribunal7', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena7', '', 2, 112, 0),
('input_fecha_termino_condena7', '', 2, 112, 0),
('input_fecha_detencion7', '', 2, 112, 0),
('input_fecha_control_detencion7', '', 2, 112, 0),
('select_tipo_materia7', 'none', 2, 112, 0),
('input_ruk8', '', 2, 112, 0),
('select_sistema_tribunal8', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena8', '', 2, 112, 0),
('input_fecha_termino_condena8', '', 2, 112, 0),
('input_fecha_detencion8', '', 2, 112, 0),
('input_fecha_control_detencion8', '', 2, 112, 0),
('select_tipo_materia8', 'none', 2, 112, 0),
('input_ruk9', '', 2, 112, 0),
('select_sistema_tribunal9', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena9', '', 2, 112, 0),
('input_fecha_termino_condena9', '', 2, 112, 0),
('input_fecha_detencion9', '', 2, 112, 0),
('input_fecha_control_detencion9', '', 2, 112, 0),
('select_tipo_materia9', 'none', 2, 112, 0),
('input_ruk10', '', 2, 112, 0),
('select_sistema_tribunal10', 'Seleccione Tribunal', 2, 112, 0),
('input_fecha_inicio_condena10', '', 2, 112, 0),
('input_fecha_termino_condena10', '', 2, 112, 0),
('input_fecha_detencion10', '', 2, 112, 0),
('input_fecha_control_detencion10', '', 2, 112, 0),
('select_tipo_materia10', 'none', 2, 112, 0),
('CANT_CausasAnteriores', '1', 2, 112, 0),
('CLOSE_FLAG', 'CERRADO', 2, 112, 0),
('tstart', '00:31:40', 2, 112, 0),
('module', 'CausasAnteriores', 2, 112, 0),
('action', 'GuardarInstrumento', 2, 112, 0),
('idEncuestado', '112', 2, 112, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causasvigentes_respuestas`
--

CREATE TABLE IF NOT EXISTS `causasvigentes_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `causasvigentes_respuestas`
--

INSERT INTO `causasvigentes_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('select_sistema_atencion_svigente1', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente1', '1212', 2, 13, 0),
('select_ciudad_programa_svigente1', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente1', '12', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente1', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente1', '12', 2, 13, 0),
('input_ruk_svigente1', '12', 2, 13, 0),
('input_fecha_detencion_svigente1', '12', 2, 13, 0),
('input_fecha_control_detencion_svigente1', '12', 2, 13, 0),
('select_tipo_materia_svigente1', 'none', 2, 13, 0),
('select_sistema_atencion_svigente2', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente2', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente2', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente2', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente2', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente2', '', 2, 13, 0),
('input_ruk_svigente2', '', 2, 13, 0),
('input_fecha_detencion_svigente2', 'lñ´lñ', 2, 13, 0),
('input_fecha_control_detencion_svigente2', '', 2, 13, 0),
('select_tipo_materia_svigente2', 'none', 2, 13, 0),
('select_sistema_atencion_svigente3', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente3', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente3', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente3', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente3', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente3', '', 2, 13, 0),
('input_ruk_svigente3', '', 2, 13, 0),
('input_fecha_detencion_svigente3', '', 2, 13, 0),
('input_fecha_control_detencion_svigente3', '', 2, 13, 0),
('select_tipo_materia_svigente3', 'none', 2, 13, 0),
('select_sistema_atencion_svigente4', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente4', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente4', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente4', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente4', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente4', '', 2, 13, 0),
('input_ruk_svigente4', '', 2, 13, 0),
('input_fecha_detencion_svigente4', '', 2, 13, 0),
('input_fecha_control_detencion_svigente4', '', 2, 13, 0),
('select_tipo_materia_svigente4', 'none', 2, 13, 0),
('select_sistema_atencion_svigente5', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente5', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente5', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente5', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente5', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente5', '', 2, 13, 0),
('input_ruk_svigente5', '', 2, 13, 0),
('input_fecha_detencion_svigente5', '', 2, 13, 0),
('input_fecha_control_detencion_svigente5', '', 2, 13, 0),
('select_tipo_materia_svigente5', 'none', 2, 13, 0),
('select_sistema_atencion_svigente6', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente6', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente6', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente6', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente6', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente6', '', 2, 13, 0),
('input_ruk_svigente6', '', 2, 13, 0),
('input_fecha_detencion_svigente6', '', 2, 13, 0),
('input_fecha_control_detencion_svigente6', '', 2, 13, 0),
('select_tipo_materia_svigente6', 'none', 2, 13, 0),
('select_sistema_atencion_svigente7', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente7', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente7', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente7', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente7', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente7', '', 2, 13, 0),
('input_ruk_svigente7', '', 2, 13, 0),
('input_fecha_detencion_svigente7', '', 2, 13, 0),
('input_fecha_control_detencion_svigente7', '', 2, 13, 0),
('select_tipo_materia_svigente7', 'none', 2, 13, 0),
('select_sistema_atencion_svigente8', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente8', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente8', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente8', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente8', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente8', '', 2, 13, 0),
('input_ruk_svigente8', '', 2, 13, 0),
('input_fecha_detencion_svigente8', '', 2, 13, 0),
('input_fecha_control_detencion_svigente8', '', 2, 13, 0),
('select_tipo_materia_svigente8', 'none', 2, 13, 0),
('select_sistema_atencion_svigente9', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente9', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente9', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente9', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente9', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente9', '', 2, 13, 0),
('input_ruk_svigente9', '', 2, 13, 0),
('input_fecha_detencion_svigente9', '', 2, 13, 0),
('input_fecha_control_detencion_svigente9', '', 2, 13, 0),
('select_tipo_materia_svigente9', 'none', 2, 13, 0),
('select_sistema_atencion_svigente10', 'MCA', 2, 13, 0),
('input_nombre_programa_svigente10', 'Escriba el nombre del programa', 2, 13, 0),
('select_ciudad_programa_svigente10', 'Chillán', 2, 13, 0),
('input_tiempo_total_condena_svigente10', '', 2, 13, 0),
('select_tipo_tiempo_total_condena_svigente10', 'D', 2, 13, 0),
('input_fecha_inicio_condena_svigente10', '', 2, 13, 0),
('input_ruk_svigente10', '', 2, 13, 0),
('input_fecha_detencion_svigente10', '', 2, 13, 0),
('input_fecha_control_detencion_svigente10', '', 2, 13, 0),
('select_tipo_materia_svigente10', 'none', 2, 13, 0),
('CANT_CAUSASVIGENTES', '2', 2, 13, 0),
('Guardar', '', 2, 13, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 13, 0),
('tstart', '03:31:09', 2, 13, 0),
('module', 'CausasVigentes', 2, 13, 0),
('action', 'GuardarInstrumento', 2, 13, 0),
('idEncuestado', '13', 2, 13, 0),
('select_sistema_atencion_svigente1', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente1', 'sdfsd234', 2, 113, 0),
('select_ciudad_programa_svigente1', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente1', '1212', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente1', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente1', '1212', 2, 113, 0),
('input_ruk_svigente1', '12121212', 2, 113, 0),
('input_fecha_detencion_svigente1', '12', 2, 113, 0),
('input_fecha_control_detencion_svigente1', '1212', 2, 113, 0),
('select_tipo_materia_svigente1', 'none', 2, 113, 0),
('select_sistema_atencion_svigente2', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente2', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente2', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente2', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente2', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente2', '', 2, 113, 0),
('input_ruk_svigente2', '', 2, 113, 0),
('input_fecha_detencion_svigente2', '', 2, 113, 0),
('input_fecha_control_detencion_svigente2', '', 2, 113, 0),
('select_tipo_materia_svigente2', 'none', 2, 113, 0),
('select_sistema_atencion_svigente3', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente3', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente3', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente3', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente3', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente3', '', 2, 113, 0),
('input_ruk_svigente3', '', 2, 113, 0),
('input_fecha_detencion_svigente3', '', 2, 113, 0),
('input_fecha_control_detencion_svigente3', '', 2, 113, 0),
('select_tipo_materia_svigente3', 'none', 2, 113, 0),
('select_sistema_atencion_svigente4', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente4', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente4', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente4', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente4', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente4', '', 2, 113, 0),
('input_ruk_svigente4', '', 2, 113, 0),
('input_fecha_detencion_svigente4', '', 2, 113, 0),
('input_fecha_control_detencion_svigente4', '', 2, 113, 0),
('select_tipo_materia_svigente4', 'none', 2, 113, 0),
('select_sistema_atencion_svigente5', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente5', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente5', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente5', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente5', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente5', '', 2, 113, 0),
('input_ruk_svigente5', '', 2, 113, 0),
('input_fecha_detencion_svigente5', '', 2, 113, 0),
('input_fecha_control_detencion_svigente5', '', 2, 113, 0),
('select_tipo_materia_svigente5', 'none', 2, 113, 0),
('select_sistema_atencion_svigente6', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente6', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente6', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente6', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente6', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente6', '', 2, 113, 0),
('input_ruk_svigente6', '', 2, 113, 0),
('input_fecha_detencion_svigente6', '', 2, 113, 0),
('input_fecha_control_detencion_svigente6', '', 2, 113, 0),
('select_tipo_materia_svigente6', 'none', 2, 113, 0),
('select_sistema_atencion_svigente7', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente7', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente7', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente7', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente7', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente7', '', 2, 113, 0),
('input_ruk_svigente7', '', 2, 113, 0),
('input_fecha_detencion_svigente7', '', 2, 113, 0),
('input_fecha_control_detencion_svigente7', '', 2, 113, 0),
('select_tipo_materia_svigente7', 'none', 2, 113, 0),
('select_sistema_atencion_svigente8', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente8', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente8', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente8', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente8', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente8', '', 2, 113, 0),
('input_ruk_svigente8', '', 2, 113, 0),
('input_fecha_detencion_svigente8', '', 2, 113, 0),
('input_fecha_control_detencion_svigente8', '', 2, 113, 0),
('select_tipo_materia_svigente8', 'none', 2, 113, 0),
('select_sistema_atencion_svigente9', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente9', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente9', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente9', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente9', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente9', '', 2, 113, 0),
('input_ruk_svigente9', '', 2, 113, 0),
('input_fecha_detencion_svigente9', '', 2, 113, 0),
('input_fecha_control_detencion_svigente9', '', 2, 113, 0),
('select_tipo_materia_svigente9', 'none', 2, 113, 0),
('select_sistema_atencion_svigente10', 'MCA', 2, 113, 0),
('input_nombre_programa_svigente10', 'Escriba el nombre del programa', 2, 113, 0),
('select_ciudad_programa_svigente10', 'Chillán', 2, 113, 0),
('input_tiempo_total_condena_svigente10', '', 2, 113, 0),
('select_tipo_tiempo_total_condena_svigente10', 'D', 2, 113, 0),
('input_fecha_inicio_condena_svigente10', '', 2, 113, 0),
('input_ruk_svigente10', '', 2, 113, 0),
('input_fecha_detencion_svigente10', '', 2, 113, 0),
('input_fecha_control_detencion_svigente10', '', 2, 113, 0),
('select_tipo_materia_svigente10', 'none', 2, 113, 0),
('CANT_CAUSASVIGENTES', '1', 2, 113, 0),
('Guardar', '', 2, 113, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 113, 0),
('tstart', '21:05:50', 2, 113, 0),
('module', 'CausasVigentes', 2, 113, 0),
('action', 'GuardarInstrumento', 2, 113, 0),
('idEncuestado', '113', 2, 113, 0),
('input_ruk_2', '', 2, 10, 0),
('select_sistema_tribunal2', '', 2, 10, 0),
('input_fecha_inicio_condena2', '', 2, 10, 0),
('input_fecha_termino_condena2', '', 2, 10, 0),
('input_fecha_detencion2', '', 2, 10, 0),
('input_fecha_control_detencion2', '', 2, 10, 0),
('select_tipo_materia2', '', 2, 10, 0),
('CANT_CAUSASVIGENTES', '1', 2, 10, 0),
('CLOSE_FLAG', 'CERRADO', 2, 10, 0),
('tstart', '20:57:30', 2, 10, 0),
('module', 'CausasVigentes', 2, 10, 0),
('action', 'GuardarInstrumento', 2, 10, 0),
('idEncuestado', '10', 2, 10, 0),
('select_sistema_atencion_svigente1', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente1', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente1', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente1', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente1', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente1', '', 2, 5, 0),
('input_ruk_svigente1', '345345', 2, 5, 0),
('input_fecha_detencion_svigente1', '', 2, 5, 0),
('input_fecha_control_detencion_svigente1', '', 2, 5, 0),
('select_tipo_materia_svigente1', 'none', 2, 5, 0),
('select_sistema_atencion_svigente2', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente2', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente2', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente2', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente2', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente2', '', 2, 5, 0),
('input_ruk_svigente2', '', 2, 5, 0),
('input_fecha_detencion_svigente2', '', 2, 5, 0),
('input_fecha_control_detencion_svigente2', '', 2, 5, 0),
('select_tipo_materia_svigente2', 'none', 2, 5, 0),
('select_sistema_atencion_svigente3', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente3', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente3', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente3', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente3', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente3', '', 2, 5, 0),
('input_ruk_svigente3', '', 2, 5, 0),
('input_fecha_detencion_svigente3', '', 2, 5, 0),
('input_fecha_control_detencion_svigente3', '', 2, 5, 0),
('select_tipo_materia_svigente3', 'none', 2, 5, 0),
('select_sistema_atencion_svigente4', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente4', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente4', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente4', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente4', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente4', '', 2, 5, 0),
('input_ruk_svigente4', '', 2, 5, 0),
('input_fecha_detencion_svigente4', '', 2, 5, 0),
('input_fecha_control_detencion_svigente4', '', 2, 5, 0),
('select_tipo_materia_svigente4', 'none', 2, 5, 0),
('select_sistema_atencion_svigente5', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente5', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente5', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente5', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente5', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente5', '', 2, 5, 0),
('input_ruk_svigente5', '', 2, 5, 0),
('input_fecha_detencion_svigente5', '', 2, 5, 0),
('input_fecha_control_detencion_svigente5', '', 2, 5, 0),
('select_tipo_materia_svigente5', 'none', 2, 5, 0),
('select_sistema_atencion_svigente6', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente6', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente6', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente6', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente6', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente6', '', 2, 5, 0),
('input_ruk_svigente6', '', 2, 5, 0),
('input_fecha_detencion_svigente6', '', 2, 5, 0),
('input_fecha_control_detencion_svigente6', '', 2, 5, 0),
('select_tipo_materia_svigente6', 'none', 2, 5, 0),
('select_sistema_atencion_svigente7', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente7', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente7', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente7', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente7', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente7', '', 2, 5, 0),
('input_ruk_svigente7', '', 2, 5, 0),
('input_fecha_detencion_svigente7', '', 2, 5, 0),
('input_fecha_control_detencion_svigente7', '', 2, 5, 0),
('select_tipo_materia_svigente7', 'none', 2, 5, 0),
('select_sistema_atencion_svigente8', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente8', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente8', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente8', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente8', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente8', '', 2, 5, 0),
('input_ruk_svigente8', '', 2, 5, 0),
('input_fecha_detencion_svigente8', '', 2, 5, 0),
('input_fecha_control_detencion_svigente8', '', 2, 5, 0),
('select_tipo_materia_svigente8', 'none', 2, 5, 0),
('select_sistema_atencion_svigente9', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente9', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente9', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente9', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente9', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente9', '', 2, 5, 0),
('input_ruk_svigente9', '', 2, 5, 0),
('input_fecha_detencion_svigente9', '', 2, 5, 0),
('input_fecha_control_detencion_svigente9', '', 2, 5, 0),
('select_tipo_materia_svigente9', 'none', 2, 5, 0),
('select_sistema_atencion_svigente10', 'MCA', 2, 5, 0),
('input_nombre_programa_svigente10', 'Escriba el nombre del programa', 2, 5, 0),
('select_ciudad_programa_svigente10', 'Chillán', 2, 5, 0),
('input_tiempo_total_condena_svigente10', '', 2, 5, 0),
('select_tipo_tiempo_total_condena_svigente10', 'D', 2, 5, 0),
('input_fecha_inicio_condena_svigente10', '', 2, 5, 0),
('input_ruk_svigente10', '', 2, 5, 0),
('input_fecha_detencion_svigente10', '', 2, 5, 0),
('input_fecha_control_detencion_svigente10', '', 2, 5, 0),
('select_tipo_materia_svigente10', 'none', 2, 5, 0),
('CANT_CAUSASVIGENTES', '1', 2, 5, 0),
('Guardar', '', 2, 5, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 5, 0),
('tstart', '21:30:25', 2, 5, 0),
('module', 'CausasVigentes', 2, 5, 0),
('action', 'GuardarInstrumento', 2, 5, 0),
('idEncuestado', '5', 2, 5, 0),
('select_sistema_atencion_svigente1', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente1', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente1', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente1', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente1', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente1', '', 2, 6, 0),
('input_ruk_svigente1', '', 2, 6, 0),
('input_fecha_detencion_svigente1', '', 2, 6, 0),
('input_fecha_control_detencion_svigente1', '', 2, 6, 0),
('select_tipo_materia_svigente1', 'none', 2, 6, 0),
('select_sistema_atencion_svigente2', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente2', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente2', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente2', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente2', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente2', '', 2, 6, 0),
('input_ruk_svigente2', '', 2, 6, 0),
('input_fecha_detencion_svigente2', '', 2, 6, 0),
('input_fecha_control_detencion_svigente2', '', 2, 6, 0),
('select_tipo_materia_svigente2', 'none', 2, 6, 0),
('select_sistema_atencion_svigente3', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente3', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente3', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente3', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente3', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente3', '', 2, 6, 0),
('input_ruk_svigente3', '', 2, 6, 0),
('input_fecha_detencion_svigente3', '', 2, 6, 0),
('input_fecha_control_detencion_svigente3', '', 2, 6, 0),
('select_tipo_materia_svigente3', 'none', 2, 6, 0),
('select_sistema_atencion_svigente4', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente4', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente4', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente4', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente4', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente4', '', 2, 6, 0),
('input_ruk_svigente4', '', 2, 6, 0),
('input_fecha_detencion_svigente4', '', 2, 6, 0),
('input_fecha_control_detencion_svigente4', '', 2, 6, 0),
('select_tipo_materia_svigente4', 'none', 2, 6, 0),
('select_sistema_atencion_svigente5', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente5', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente5', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente5', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente5', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente5', '', 2, 6, 0),
('input_ruk_svigente5', '', 2, 6, 0),
('input_fecha_detencion_svigente5', '', 2, 6, 0),
('input_fecha_control_detencion_svigente5', '', 2, 6, 0),
('select_tipo_materia_svigente5', 'none', 2, 6, 0),
('select_sistema_atencion_svigente6', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente6', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente6', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente6', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente6', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente6', '', 2, 6, 0),
('input_ruk_svigente6', '', 2, 6, 0),
('input_fecha_detencion_svigente6', '', 2, 6, 0),
('input_fecha_control_detencion_svigente6', '', 2, 6, 0),
('select_tipo_materia_svigente6', 'none', 2, 6, 0),
('select_sistema_atencion_svigente7', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente7', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente7', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente7', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente7', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente7', '', 2, 6, 0),
('input_ruk_svigente7', '', 2, 6, 0),
('input_fecha_detencion_svigente7', '', 2, 6, 0),
('input_fecha_control_detencion_svigente7', '', 2, 6, 0),
('select_tipo_materia_svigente7', 'none', 2, 6, 0),
('select_sistema_atencion_svigente8', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente8', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente8', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente8', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente8', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente8', '', 2, 6, 0),
('input_ruk_svigente8', '', 2, 6, 0),
('input_fecha_detencion_svigente8', '', 2, 6, 0),
('input_fecha_control_detencion_svigente8', '', 2, 6, 0),
('select_tipo_materia_svigente8', 'none', 2, 6, 0),
('select_sistema_atencion_svigente9', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente9', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente9', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente9', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente9', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente9', '', 2, 6, 0),
('input_ruk_svigente9', '', 2, 6, 0),
('input_fecha_detencion_svigente9', '', 2, 6, 0),
('input_fecha_control_detencion_svigente9', '', 2, 6, 0),
('select_tipo_materia_svigente9', 'none', 2, 6, 0),
('select_sistema_atencion_svigente10', 'MCA', 2, 6, 0),
('input_nombre_programa_svigente10', 'Escriba el nombre del programa', 2, 6, 0),
('select_ciudad_programa_svigente10', 'Chillán', 2, 6, 0),
('input_tiempo_total_condena_svigente10', '', 2, 6, 0),
('select_tipo_tiempo_total_condena_svigente10', 'D', 2, 6, 0),
('input_fecha_inicio_condena_svigente10', '', 2, 6, 0),
('input_ruk_svigente10', '', 2, 6, 0),
('input_fecha_detencion_svigente10', '', 2, 6, 0),
('input_fecha_control_detencion_svigente10', '', 2, 6, 0),
('select_tipo_materia_svigente10', 'none', 2, 6, 0),
('CANT_CAUSASVIGENTES', '1', 2, 6, 0),
('Guardar', '', 2, 6, 0),
('CLOSE_FLAG', 'CERRADO', 2, 6, 0),
('tstart', '21:53:51', 2, 6, 0),
('module', 'CausasVigentes', 2, 6, 0),
('action', 'GuardarInstrumento', 2, 6, 0),
('idEncuestado', '6', 2, 6, 0),
('select_sistema_atencion_svigente1', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente1', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente1', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente1', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente1', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente1', '', 2, 112, 0),
('input_ruk_svigente1', '', 2, 112, 0),
('input_fecha_detencion_svigente1', '', 2, 112, 0),
('input_fecha_control_detencion_svigente1', '', 2, 112, 0),
('select_tipo_materia_svigente1', 'none', 2, 112, 0),
('select_sistema_atencion_svigente2', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente2', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente2', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente2', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente2', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente2', '', 2, 112, 0),
('input_ruk_svigente2', '', 2, 112, 0),
('input_fecha_detencion_svigente2', '', 2, 112, 0),
('input_fecha_control_detencion_svigente2', '', 2, 112, 0),
('select_tipo_materia_svigente2', 'none', 2, 112, 0),
('select_sistema_atencion_svigente3', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente3', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente3', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente3', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente3', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente3', '', 2, 112, 0),
('input_ruk_svigente3', '', 2, 112, 0),
('input_fecha_detencion_svigente3', '', 2, 112, 0),
('input_fecha_control_detencion_svigente3', '', 2, 112, 0),
('select_tipo_materia_svigente3', 'none', 2, 112, 0),
('select_sistema_atencion_svigente4', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente4', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente4', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente4', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente4', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente4', '', 2, 112, 0),
('input_ruk_svigente4', '', 2, 112, 0),
('input_fecha_detencion_svigente4', '', 2, 112, 0),
('input_fecha_control_detencion_svigente4', '', 2, 112, 0),
('select_tipo_materia_svigente4', 'none', 2, 112, 0),
('select_sistema_atencion_svigente5', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente5', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente5', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente5', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente5', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente5', '', 2, 112, 0),
('input_ruk_svigente5', '', 2, 112, 0),
('input_fecha_detencion_svigente5', '', 2, 112, 0),
('input_fecha_control_detencion_svigente5', '', 2, 112, 0),
('select_tipo_materia_svigente5', 'none', 2, 112, 0),
('select_sistema_atencion_svigente6', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente6', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente6', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente6', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente6', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente6', '', 2, 112, 0),
('input_ruk_svigente6', '', 2, 112, 0),
('input_fecha_detencion_svigente6', '', 2, 112, 0),
('input_fecha_control_detencion_svigente6', '', 2, 112, 0),
('select_tipo_materia_svigente6', 'none', 2, 112, 0),
('select_sistema_atencion_svigente7', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente7', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente7', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente7', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente7', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente7', '', 2, 112, 0),
('input_ruk_svigente7', '', 2, 112, 0),
('input_fecha_detencion_svigente7', '', 2, 112, 0),
('input_fecha_control_detencion_svigente7', '', 2, 112, 0),
('select_tipo_materia_svigente7', 'none', 2, 112, 0),
('select_sistema_atencion_svigente8', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente8', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente8', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente8', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente8', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente8', '', 2, 112, 0),
('input_ruk_svigente8', '', 2, 112, 0),
('input_fecha_detencion_svigente8', '', 2, 112, 0),
('input_fecha_control_detencion_svigente8', '', 2, 112, 0),
('select_tipo_materia_svigente8', 'none', 2, 112, 0),
('select_sistema_atencion_svigente9', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente9', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente9', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente9', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente9', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente9', '', 2, 112, 0),
('input_ruk_svigente9', '', 2, 112, 0),
('input_fecha_detencion_svigente9', '', 2, 112, 0),
('input_fecha_control_detencion_svigente9', '', 2, 112, 0),
('select_tipo_materia_svigente9', 'none', 2, 112, 0),
('select_sistema_atencion_svigente10', 'MCA', 2, 112, 0),
('input_nombre_programa_svigente10', 'Escriba el nombre del programa', 2, 112, 0),
('select_ciudad_programa_svigente10', 'Chillán', 2, 112, 0),
('input_tiempo_total_condena_svigente10', '', 2, 112, 0),
('select_tipo_tiempo_total_condena_svigente10', 'D', 2, 112, 0),
('input_fecha_inicio_condena_svigente10', '', 2, 112, 0),
('input_ruk_svigente10', '', 2, 112, 0),
('input_fecha_detencion_svigente10', '', 2, 112, 0),
('input_fecha_control_detencion_svigente10', '', 2, 112, 0),
('select_tipo_materia_svigente10', 'none', 2, 112, 0),
('CANT_CAUSASVIGENTES', '1', 2, 112, 0),
('CLOSE_FLAG', 'CERRADO', 2, 112, 0),
('tstart', '00:31:03', 2, 112, 0),
('module', 'CausasVigentes', 2, 112, 0),
('action', 'GuardarInstrumento', 2, 112, 0),
('idEncuestado', '112', 2, 112, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesma_preguntas`
--

CREATE TABLE IF NOT EXISTS `cesma_preguntas` (
  `id_pregunta_CESMA` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  `bloque_num` int(11) NOT NULL,
  PRIMARY KEY (`id_pregunta_CESMA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `cesma_preguntas`
--

INSERT INTO `cesma_preguntas` (`id_pregunta_CESMA`, `num_pregunta`, `texto`, `es_requerido`, `bloque_num`) VALUES
(1, 1, '¿Piensas que el alcohol domina tu vida y que su consumo está fuera de control?', 1, 1),
(2, 2, '¿Te sientes deprimido, enojado o ansioso si no estás bebiendo?', 1, 1),
(3, 3, '¿Piensas que la droga domina tu vida y que su consumo está fuera de control?', 1, 1),
(4, 4, '¿La idea de no consumir te produce preocupación, enojo o tristeza?', 1, 1),
(5, 5, '¿Te sientes realmente triste o miserable?', 1, 1),
(6, 6, '¿Te sientes desagradado contigo mismo o con tu vida?', 1, 1),
(7, 7, '¿Tienes actualmente flashback acerca de eventos pasados perturbadores, que no puedes parar?', 1, 1),
(8, 8, '¿Tienes fuertes recuerdos  acerca de eventos pasados perturbadores, que te hacen sentir mal, asustado o enojado?', 1, 1),
(9, 9, '¿Tienes ataques de pánico (por ejemplo, miedo abrumador, palpitaciones, respiración acelerada o estómago revuelto)?', 1, 1),
(10, 10, '¿Te sientes preocupado y/o con miedo durante largos períodos de tiempo?', 1, 1),
(11, 11, '¿Te causas daño a ti mismo (por ejemplo, cortes o sobredosis)?*', 1, 1),
(12, 12, '¿Piensas en hacerte daño o suicidarte?*', 1, 2),
(13, 13, '¿Alguna vez has recibido tratamiento para cualquiera de los temas que acabamos de conversar (depresión, trastorno de estrés postraumático, ansiedad, uso de drogas / alcohol, autoagresiones)?', 1, 2),
(14, 14, '¿Alguna vez has consultado con un médico / consejero / terapeuta u otro profesional sobre cualquiera de estos temas?', 1, 2),
(15, 15, '¿Alguna vez has tomado pastillas / medicamentos relacionados con tu comportamiento o por cómo te sentías?', 1, 3),
(16, 16, '¿Presenta el joven una prolongada y severa hiperactividad y comportamientos impulsivos más allá de lo esperable?', 1, 3),
(17, 17, '¿Se producen la hiperactividad y comportamiento impulsivo en todo momento y contexto?', 1, 3),
(18, 18, '¿Parece el joven excesivamente preocupado / suspicaz o malinterpreta con frecuencia las situaciones?', 1, 3),
(19, 19, '¿Tiene el joven conductas extrañas o parece responder a voces o ver cosas que no están allí?', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `COMUNA_ID` int(5) NOT NULL DEFAULT '0',
  `COMUNA_NOMBRE` varchar(20) DEFAULT NULL,
  `COMUNA_PROVINCIA_ID` int(3) DEFAULT NULL,
  PRIMARY KEY (`COMUNA_ID`),
  KEY `COMUNA_PROVINCIA_ID` (`COMUNA_PROVINCIA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`COMUNA_ID`, `COMUNA_NOMBRE`, `COMUNA_PROVINCIA_ID`) VALUES
(1101, 'Iquique', 11),
(1107, 'Alto Hospicio', 11),
(1401, 'Pozo Almonte', 14),
(1402, 'Camiña', 14),
(1403, 'Colchane', 14),
(1404, 'Huara', 14),
(1405, 'Pica', 14),
(2101, 'Antofagasta', 21),
(2102, 'Mejillones', 21),
(2103, 'Sierra Gorda', 21),
(2104, 'Taltal', 21),
(2201, 'Calama', 22),
(2202, 'Ollagüe', 22),
(2203, 'San Pedro de Atacama', 22),
(2301, 'Tocopilla', 23),
(2302, 'María Elena', 23),
(3101, 'Copiapó', 31),
(3102, 'Caldera', 31),
(3103, 'Tierra Amarilla', 31),
(3201, 'Chañaral', 32),
(3202, 'Diego de Almagro', 32),
(3301, 'Vallenar', 33),
(3302, 'Alto del Carmen', 33),
(3303, 'Freirina', 33),
(3304, 'Huasco', 33),
(4101, 'La Serena', 41),
(4102, 'Coquimbo', 41),
(4103, 'Andacollo', 41),
(4104, 'La Higuera', 41),
(4105, 'Paiguano', 41),
(4106, 'Vicuña', 41),
(4201, 'Illapel', 42),
(4202, 'Canela', 42),
(4203, 'Los Vilos', 42),
(4204, 'Salamanca', 42),
(4301, 'Ovalle', 43),
(4302, 'Combarbalá', 43),
(4303, 'Monte Patria', 43),
(4304, 'Punitaqui', 43),
(4305, 'Río Hurtado', 43),
(5101, 'Valparaíso', 51),
(5102, 'Casablanca', 51),
(5103, 'Concón', 51),
(5104, 'Juan Fernández', 51),
(5105, 'Puchuncaví', 51),
(5107, 'Quintero', 51),
(5109, 'Viña del Mar', 51),
(5201, 'Isla de Pascua', 52),
(5301, 'Los Andes', 53),
(5302, 'Calle Larga', 53),
(5303, 'Rinconada', 53),
(5304, 'San Esteban', 53),
(5401, 'La Ligua', 54),
(5402, 'Cabildo', 54),
(5403, 'Papudo', 54),
(5404, 'Petorca', 54),
(5405, 'Zapallar', 54),
(5501, 'Quillota', 55),
(5502, 'Calera', 55),
(5503, 'Hijuelas', 55),
(5504, 'La Cruz', 55),
(5506, 'Nogales', 55),
(5601, 'San Antonio', 56),
(5602, 'Algarrobo', 56),
(5603, 'Cartagena', 56),
(5604, 'El Quisco', 56),
(5605, 'El Tabo', 56),
(5606, 'Santo Domingo', 56),
(5701, 'San Felipe', 57),
(5702, 'Catemu', 57),
(5703, 'Llaillay', 57),
(5704, 'Panquehue', 57),
(5705, 'Putaendo', 57),
(5706, 'Santa María', 57),
(5801, 'Quilpué', 58),
(5802, 'Limache', 58),
(5803, 'Olmué', 58),
(5804, 'Villa Alemana', 58),
(6101, 'Rancagua', 61),
(6102, 'Codegua', 61),
(6103, 'Coinco', 61),
(6104, 'Coltauco', 61),
(6105, 'Doñihue', 61),
(6106, 'Graneros', 61),
(6107, 'Las Cabras', 61),
(6108, 'Machalí', 61),
(6109, 'Malloa', 61),
(6110, 'Mostazal', 61),
(6111, 'Olivar', 61),
(6112, 'Peumo', 61),
(6113, 'Pichidegua', 61),
(6114, 'Quinta de Tilcoco', 61),
(6115, 'Rengo', 61),
(6116, 'Requínoa', 61),
(6117, 'San Vicente', 61),
(6201, 'Pichilemu', 62),
(6202, 'La Estrella', 62),
(6203, 'Litueche', 62),
(6204, 'Marchihue', 62),
(6205, 'Navidad', 62),
(6206, 'Paredones', 62),
(6301, 'San Fernando', 63),
(6302, 'Chépica', 63),
(6303, 'Chimbarongo', 63),
(6304, 'Lolol', 63),
(6305, 'Nancagua', 63),
(6306, 'Palmilla', 63),
(6307, 'Peralillo', 63),
(6308, 'Placilla', 63),
(6309, 'Pumanque', 63),
(6310, 'Santa Cruz', 63),
(7101, 'Talca', 71),
(7102, 'Constitución', 71),
(7103, 'Curepto', 71),
(7104, 'Empedrado', 71),
(7105, 'Maule', 71),
(7106, 'Pelarco', 71),
(7107, 'Pencahue', 71),
(7108, 'Río Claro', 71),
(7109, 'San Clemente', 71),
(7110, 'San Rafael', 71),
(7201, 'Cauquenes', 72),
(7202, 'Chanco', 72),
(7203, 'Pelluhue', 72),
(7301, 'Curicó', 73),
(7302, 'Hualañé', 73),
(7303, 'Licantén', 73),
(7304, 'Molina', 73),
(7305, 'Rauco', 73),
(7306, 'Romeral', 73),
(7307, 'Sagrada Familia', 73),
(7308, 'Teno', 73),
(7309, 'Vichuquén', 73),
(7401, 'Linares', 74),
(7402, 'Colbún', 74),
(7403, 'Longaví', 74),
(7404, 'Parral', 74),
(7405, 'Retiro', 74),
(7406, 'San Javier', 74),
(7407, 'Villa Alegre', 74),
(7408, 'Yerbas Buenas', 74),
(8101, 'Concepción', 81),
(8102, 'Coronel', 81),
(8103, 'Chiguayante', 81),
(8104, 'Florida', 81),
(8105, 'Hualqui', 81),
(8106, 'Lota', 81),
(8107, 'Penco', 81),
(8108, 'San Pedro de la Paz', 81),
(8109, 'Santa Juana', 81),
(8110, 'Talcahuano', 81),
(8111, 'Tomé', 81),
(8112, 'Hualpén', 81),
(8201, 'Lebu', 82),
(8202, 'Arauco', 82),
(8203, 'Cañete', 82),
(8204, 'Contulmo', 82),
(8205, 'Curanilahue', 82),
(8206, 'Los Álamos', 82),
(8207, 'Tirúa', 82),
(8301, 'Los Ángeles', 83),
(8302, 'Antuco', 83),
(8303, 'Cabrero', 83),
(8304, 'Laja', 83),
(8305, 'Mulchén', 83),
(8306, 'Nacimiento', 83),
(8307, 'Negrete', 83),
(8308, 'Quilaco', 83),
(8309, 'Quilleco', 83),
(8310, 'San Rosendo', 83),
(8311, 'Santa Bárbara', 83),
(8312, 'Tucapel', 83),
(8313, 'Yumbel', 83),
(8314, 'Alto Biobío', 83),
(8401, 'Chillán', 84),
(8402, 'Bulnes', 84),
(8403, 'Cobquecura', 84),
(8404, 'Coelemu', 84),
(8405, 'Coihueco', 84),
(8406, 'Chillán Viejo', 84),
(8407, 'El Carmen', 84),
(8408, 'Ninhue', 84),
(8409, 'Ñiquén', 84),
(8410, 'Pemuco', 84),
(8411, 'Pinto', 84),
(8412, 'Portezuelo', 84),
(8413, 'Quillón', 84),
(8414, 'Quirihue', 84),
(8415, 'Ránquil', 84),
(8416, 'San Carlos', 84),
(8417, 'San Fabián', 84),
(8418, 'San Ignacio', 84),
(8419, 'San Nicolás', 84),
(8420, 'Treguaco', 84),
(8421, 'Yungay', 84),
(9101, 'Temuco', 91),
(9102, 'Carahue', 91),
(9103, 'Cunco', 91),
(9104, 'Curarrehue', 91),
(9105, 'Freire', 91),
(9106, 'Galvarino', 91),
(9107, 'Gorbea', 91),
(9108, 'Lautaro', 91),
(9109, 'Loncoche', 91),
(9110, 'Melipeuco', 91),
(9111, 'Nueva Imperial', 91),
(9112, 'Padre las Casas', 91),
(9113, 'Perquenco', 91),
(9114, 'Pitrufquén', 91),
(9115, 'Pucón', 91),
(9116, 'Saavedra', 91),
(9117, 'Teodoro Schmidt', 91),
(9118, 'Toltén', 91),
(9119, 'Vilcún', 91),
(9120, 'Villarrica', 91),
(9121, 'Cholchol', 91),
(9201, 'Angol', 92),
(9202, 'Collipulli', 92),
(9203, 'Curacautín', 92),
(9204, 'Ercilla', 92),
(9205, 'Lonquimay', 92),
(9206, 'Los Sauces', 92),
(9207, 'Lumaco', 92),
(9208, 'Purén', 92),
(9209, 'Renaico', 92),
(9210, 'Traiguén', 92),
(9211, 'Victoria', 92),
(10101, 'Puerto Montt', 101),
(10102, 'Calbuco', 101),
(10103, 'Cochamó', 101),
(10104, 'Fresia', 101),
(10105, 'Frutillar', 101),
(10106, 'Los Muermos', 101),
(10107, 'Llanquihue', 101),
(10108, 'Maullín', 101),
(10109, 'Puerto Varas', 101),
(10201, 'Castro', 102),
(10202, 'Ancud', 102),
(10203, 'Chonchi', 102),
(10204, 'Curaco de Vélez', 102),
(10205, 'Dalcahue', 102),
(10206, 'Puqueldón', 102),
(10207, 'Queilén', 102),
(10208, 'Quellón', 102),
(10209, 'Quemchi', 102),
(10210, 'Quinchao', 102),
(10301, 'Osorno', 103),
(10302, 'Puerto Octay', 103),
(10303, 'Purranque', 103),
(10304, 'Puyehue', 103),
(10305, 'Río Negro', 103),
(10306, 'San Juan de la Costa', 103),
(10307, 'San Pablo', 103),
(10401, 'Chaitén', 104),
(10402, 'Futaleufú', 104),
(10403, 'Hualaihué', 104),
(10404, 'Palena', 104),
(11101, 'Coihaique', 111),
(11102, 'Lago Verde', 111),
(11201, 'Aisén', 112),
(11202, 'Cisnes', 112),
(11203, 'Guaitecas', 112),
(11301, 'Cochrane', 113),
(11302, 'O’Higgins', 113),
(11303, 'Tortel', 113),
(11401, 'Chile Chico', 114),
(11402, 'Río Ibáñez', 114),
(12101, 'Punta Arenas', 121),
(12102, 'Laguna Blanca', 121),
(12103, 'Río Verde', 121),
(12104, 'San Gregorio', 121),
(12201, 'Cabo de Hornos', 122),
(12202, 'Antártica', 122),
(12301, 'Porvenir', 123),
(12302, 'Primavera', 123),
(12303, 'Timaukel', 123),
(12401, 'Natales', 124),
(12402, 'Torres del Paine', 124),
(13101, 'Santiago', 131),
(13102, 'Cerrillos', 131),
(13103, 'Cerro Navia', 131),
(13104, 'Conchalí', 131),
(13105, 'El Bosque', 131),
(13106, 'Estación Central', 131),
(13107, 'Huechuraba', 131),
(13108, 'Independencia', 131),
(13109, 'La Cisterna', 131),
(13110, 'La Florida', 131),
(13111, 'La Granja', 131),
(13112, 'La Pintana', 131),
(13113, 'La Reina', 131),
(13114, 'Las Condes', 131),
(13115, 'Lo Barnechea', 131),
(13116, 'Lo Espejo', 131),
(13117, 'Lo Prado', 131),
(13118, 'Macul', 131),
(13119, 'Maipú', 131),
(13120, 'Ñuñoa', 131),
(13121, 'Pedro Aguirre Cerda', 131),
(13122, 'Peñalolén', 131),
(13123, 'Providencia', 131),
(13124, 'Pudahuel', 131),
(13125, 'Quilicura', 131),
(13126, 'Quinta Normal', 131),
(13127, 'Recoleta', 131),
(13128, 'Renca', 131),
(13129, 'San Joaquín', 131),
(13130, 'San Miguel', 131),
(13131, 'San Ramón', 131),
(13132, 'Vitacura', 131),
(13201, 'Puente Alto', 132),
(13202, 'Pirque', 132),
(13203, 'San José de Maipo', 132),
(13301, 'Colina', 133),
(13302, 'Lampa', 133),
(13303, 'Tiltil', 133),
(13401, 'San Bernardo', 134),
(13402, 'Buin', 134),
(13403, 'Calera de Tango', 134),
(13404, 'Paine', 134),
(13501, 'Melipilla', 135),
(13502, 'Alhué', 135),
(13503, 'Curacaví', 135),
(13504, 'María Pinto', 135),
(13505, 'San Pedro', 135),
(13601, 'Talagante', 136),
(13602, 'El Monte', 136),
(13603, 'Isla de Maipo', 136),
(13604, 'Padre Hurtado', 136),
(13605, 'Peñaflor', 136),
(14101, 'Valdivia', 141),
(14102, 'Corral', 141),
(14103, 'Lanco', 141),
(14104, 'Los Lagos', 141),
(14105, 'Máfil', 141),
(14106, 'Mariquina', 141),
(14107, 'Paillaco', 141),
(14108, 'Panguipulli', 141),
(14201, 'La Unión', 142),
(14202, 'Futrono', 142),
(14203, 'Lago Ranco', 142),
(14204, 'Río Bueno', 142),
(15101, 'Arica', 151),
(15102, 'Camarones', 151),
(15201, 'Putre', 152),
(15202, 'General Lagos', 152);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conclusiones`
--

CREATE TABLE IF NOT EXISTS `conclusiones` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `entrevista_respuestas_ibfk_5` (`id_user`),
  KEY `entrevista_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `conclusiones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conevidencia_respuestas`
--

CREATE TABLE IF NOT EXISTS `conevidencia_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `conevidencia_respuestas_ibfk_5` (`id_user`),
  KEY `conevidencia_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `conevidencia_respuestas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csve_preguntas`
--

CREATE TABLE IF NOT EXISTS `csve_preguntas` (
  `id_pregunta_CSVE` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_CSVE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Volcar la base de datos para la tabla `csve_preguntas`
--

INSERT INTO `csve_preguntas` (`id_pregunta_CSVE`, `num_pregunta`, `texto`, `es_requerido`) VALUES
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
-- Estructura de tabla para la tabla `csve_respuestas`
--

CREATE TABLE IF NOT EXISTS `csve_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `respuesta2a` varchar(30) DEFAULT NULL,
  `respuesta2b` varchar(30) DEFAULT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_CSVE` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_CSVE`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_CSVE` (`id_pregunta_CSVE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `csve_respuestas`
--

INSERT INTO `csve_respuestas` (`id_user`, `respuesta`, `respuesta2a`, `respuesta2b`, `respuesta3`, `comentario`, `id_encuestado`, `id_pregunta_CSVE`) VALUES
(2, 'si', '1', '0', 'si', '', 110, 1),
(2, 'no', '', '', 'no', '', 110, 2),
(2, 'no', '', '', 'no', '', 110, 3),
(2, 'no', '', '', 'no', '', 110, 4),
(2, 'no', '', '', 'no', '', 110, 5),
(2, 'no', '', '', 'no', '', 110, 6),
(2, 'no', '', '', 'no', '', 110, 7),
(2, 'no', '', '', 'no', '', 110, 8),
(2, 'no', '', '', 'no', '', 110, 9),
(2, 'no', '', '', 'no', '', 110, 10),
(2, 'no', '', '', 'no', '', 110, 11),
(2, 'no', '', '', 'no', '', 110, 12),
(2, 'no', '', '', 'no', '', 110, 13),
(2, 'no', '', '', 'no', '', 110, 14),
(2, 'si', '1', '0', 'no', '', 110, 15),
(2, 'no', '', '', 'no', '', 110, 16),
(2, 'no', '', '', 'no', '', 110, 17),
(2, 'no', '', '', 'no', '', 110, 18),
(2, 'no', '', '', 'no', '', 110, 19),
(2, 'no', '', '', 'no', '123123123123', 110, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_ingreso_causa`
--

CREATE TABLE IF NOT EXISTS `c_ingreso_causa` (
  `id_materia` int(10) NOT NULL,
  `id_causa` int(10) NOT NULL,
  `causa_nombre` varchar(255) NOT NULL,
  `codigo_delito` int(50) NOT NULL,
  PRIMARY KEY (`id_causa`),
  UNIQUE KEY `codigo_delito` (`codigo_delito`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `c_ingreso_causa`
--

INSERT INTO `c_ingreso_causa` (`id_materia`, `id_causa`, `causa_nombre`, `codigo_delito`) VALUES
(20, 2, 'secuestro', 202),
(20, 3, 'sustracción de menores', 203),
(20, 4, 'violación de morada', 204),
(13, 7, 'robo con intimidación', 802),
(13, 8, 'robo con violencia', 803),
(13, 11, 'robo por sorpresa', 804),
(13, 16, 'abigeato', 811),
(17, 18, 'homicidio', 702),
(17, 19, 'homicidio en riña o pelea', 705),
(17, 20, 'parricidio', 701),
(17, 21, 'infanticidio', 707),
(17, 23, 'lesiones graves o gravísimas', 717),
(17, 24, 'lesiones graves', 709),
(17, 25, 'lesiones menos graves', 710),
(19, 28, 'estupro', 608),
(19, 30, 'sodomía', 611),
(31, 32, 'conduccion estado de ebriedad (art. 196 ley 19.290)', 14052),
(22, 34, 'tráfico ilícito de drogas', 7007),
(45, 35, 'consumo/porte en lugares publicos o priv. con previo concierto (art. 50)', 7038),
(17, 41, 'lesiones leves', 13001),
(28, 42, 'hurto falta (494 bis código penal)', 13028),
(13, 105, 'receptacion', 812),
(26, 112, 'cuasidelito de homicidio', 905),
(13, 118, 'otros (libro ii,titulo ix) otros delitos contra la propiedad', 899),
(13, 119, 'robo con homicidio', 827),
(13, 120, 'robo con violación', 828),
(13, 121, 'robo con castración,mutilación o lesiones graves o gravísimas', 829),
(13, 122, 'robo con retención de víctimas con lesiones graves', 830),
(13, 123, 'robo en bienes nacionales de uso público', 808),
(13, 124, 'robo en lugar habitado o destinado a la habitación', 809),
(13, 125, 'robo en lugar habitado', 810),
(13, 126, 'hurto de hallazgo', 821),
(13, 128, 'destrucción o alteración de deslindes', 814),
(13, 129, 'infrac.art 454 presuncion robo o hurto de una cosa', 825),
(13, 130, 'usurpación violenta', 833),
(13, 131, 'usurpación violenta', 834),
(13, 132, 'usurpación de aguas', 836),
(13, 133, 'daños simples', 840),
(13, 134, 'daños calificados', 841),
(13, 135, 'extorsión', 806),
(13, 136, 'portar elementos destinados a cometer delito de robo', 832),
(13, 137, 'invasión de derechos ajenos', 835),
(17, 138, 'homicidio calificado', 703),
(17, 139, 'castracion y mutilacion', 718),
(26, 141, 'cuasidelito de lesiones', 901),
(26, 142, 'otros título x libro ii del codigo penal(4)', 999),
(19, 143, 'incesto', 609),
(19, 144, 'promover o facilitar la prostitución de menores', 610),
(19, 145, 'abuso sexual impropio mayor 14 años y menor de 18 años (sin contacto corporal)', 619),
(19, 146, 'abuso sexual impropio de menor de 14 años', 620),
(19, 147, 'violación de menor de 14 años sidelitos de acuerdo a la nomenclatura asociada a la codificacion de delitos elaborados por la', 621),
(19, 149, 'trata de personas con fines de prostitucion', 626),
(31, 151, 'conduccion estado de ebriedad con resultado de lesiones', 14002),
(31, 152, 'conduccion estado de ebriedad con resultado de daños', 14003),
(31, 153, 'conduccion estado de ebriedad con resultado de muerte', 14001),
(22, 154, 'cultivo,cosecha especies vegetales productoras estupefacientes', 7006),
(22, 155, 'asociación ilícitas ley de drogas', 7014),
(22, 156, 'elaboración, producción sustancias psicotrópicas o drogas', 7001),
(22, 159, 'suministro indebido', 7032),
(22, 160, 'prescripción medica abusiva de estupefacientes o psicotropicas', 7033),
(22, 161, 'suministro de hidrocarburos aromáticos a menores', 7034),
(28, 163, 'amenaza con arma (falta)', 13030),
(28, 164, 'otras faltas codigo penal nodelitos de acuerdo a la nomenclatura asociada a la codificacion de delitos elaborados por la', 13097),
(28, 166, 'daño falta (495 nº 21 código penal)', 13027),
(28, 167, 'ocultacion de identidad (496 nº 5 código penal)', 13024),
(27, 169, 'no especifica delito', 0),
(13, 170, 'hurto agravado', 826),
(13, 171, 'hurto simple sobre 40 utm', 846),
(13, 172, 'hurto simple de 4 a 40 utm', 847),
(13, 173, 'hurto simple de media a menos de 4 utm', 848),
(19, 174, 'violacion de mayor de 14 años', 637),
(19, 175, 'abuso sexual de 14 a menor de 18 años', 634),
(19, 176, 'abuso sexual de mayor 14 años (con circunstancias de violacion)', 635),
(19, 177, 'violacion con homicidio', 628),
(19, 178, 'produccion material pornografico utilizando menores de 18 años', 629),
(19, 179, 'comercializacion material pornografico elaborado utilizando menores de 18 años', 630),
(19, 180, 'adquisicion y almacenamiento de material pornografico infantil', 631),
(20, 181, 'delitos contra vida privada (art. 161 a', 221),
(22, 182, 'otros delitos de la ley n 20.000', 7099),
(25, 183, 'falsificacion de o uso malicioso de documentos privados', 303),
(13, 184, 'insolvencia punible', 815),
(13, 185, 'estafas y otras defraudaciones', 816),
(13, 186, 'usura', 817),
(13, 187, 'apropiacion indebida', 818),
(42, 188, 'giro doloso de cheques', 4001),
(42, 189, 'otros delitos ley de cuentas corrientes bancarias y cheques', 4099),
(33, 190, 'infracciones ley 18.175 de quiebras', 12040),
(41, 191, 'otros delitos ley general de bancos dfl 252', 3099),
(43, 192, 'delitos que contempla el codigo tributario', 5001),
(43, 193, 'infracciones tributarias contempladas en otras leyes', 5099),
(44, 194, 'otros delitos contra ley de propiedad industrial', 8003),
(34, 195, 'demas delitos contra ley de propiedad intelectual', 9099),
(33, 196, 'infraccion ordenanza aduanas (fraude y contrabando)', 12050),
(35, 198, 'sabotaje informatico', 2002),
(35, 199, 'acceso indebido', 2003),
(33, 200, 'infraccion ley 18.892 de pesca', 12020),
(32, 201, 'loteria, casas de juego y prestamos sobre prenda', 505),
(25, 203, 'falsificacion o uso malicioso de documento publico', 302),
(25, 204, 'falso testimonio, perjurio o denuncia calumniosa', 306),
(25, 205, 'presentacion de peritos, testigos o interpretes que faltaren a verdad o documentos falsos', 307),
(25, 206, 'ejercicio ilegal de la profesion', 308),
(25, 207, 'usurpacion de nombre', 309),
(25, 208, 'usurpacion de funciones', 310),
(25, 209, 'otros libro ii, titulo iv del codigo penal', 399),
(28, 210, 'desordenes en espectaculos publicos (494 nº 1 código penal)', 13035),
(28, 211, 'malversacion, defraudacion e incendio por menos de 1 utm (494 nº 19 código penal)', 13032),
(28, 212, 'arrojamiento de piedras u otros objetos (496 nº 26 código penal)', 13026),
(31, 213, 'otros delitos contra la ley del transito', 14060),
(25, 214, 'falsificacion de moneda y otros', 301),
(20, 220, 'secuestro con homicidio, violacion o lesiones art.141. inciso final.', 222),
(25, 221, 'falsificacion de pasaportes o permisos para porte de armas (art. 199 y 200 código penal)', 304),
(32, 222, 'maltrato animal', 509),
(32, 223, 'colaboracion evasion de detenidos', 512),
(32, 224, 'contra salud publica', 513),
(32, 225, 'infraccion normas inhumaciones y exhumaciones', 514),
(32, 226, 'atentados y amenazas contra la autoridad', 515),
(32, 227, 'oponerse a accion de la autoridad publica o sus agentes', 516),
(32, 228, 'porte de arma cortante o punzante (288 bis)', 518),
(19, 233, 'ultraje publico a las buenas costumbres', 615),
(19, 234, 'aborto consentido', 624),
(19, 235, 'aborto sin consentimiento', 625),
(19, 236, 'obtencion de servicio sexuales de menores', 632),
(19, 237, 'abuso sexual calificado', 633),
(13, 238, 'robo de vehiculo motorizado', 831),
(13, 239, 'incendio con resultado de muerte y/o lesiones', 838),
(13, 240, 'otros estragos', 839),
(13, 241, 'apropiacion de cables de tendido electrico o de comunicaciones', 849),
(13, 242, 'incendio de bosques (art. 476)', 851),
(22, 243, 'trafico de pequeñas cantidades (art. 4)', 7037),
(45, 244, 'consumo/porte de drogas en lugares calificados (art. 51)', 7039),
(34, 245, 'falsificacion de obras protegidas', 9002),
(34, 246, 'venta ilicita de obras protegidas', 9003),
(31, 247, 'conduccion sin la licencia debida (art. 196 d ley 18.290 del tránsito)', 12074),
(31, 248, 'instalacion indebida de señales del transito o barreras (art. 196 a ley 18.290)', 12076),
(31, 249, 'conduccion bajo la influencia del alcohol ( 196 c inc. 1 ley 18.290 del tránsito)', 12078),
(31, 250, 'conduccion bajo la influencia del alcohol causando lesiones menos graves (196 c inc. 2 ley 18.290)', 12079),
(31, 251, 'conduccion bajo la influencia del alcohol causando lesiones graves (196 cinc. 3 ley 18.290)', 12080),
(33, 252, 'maltrato de obra a carabineros (art. 416 y 416 bis código de justicia militar)', 12081),
(33, 253, 'amenazas a carabineros (art. 417 código de justicia militar)', 12082),
(31, 254, 'conduccion bajo la influencia del alcohol causando lesiones graves gravisimas o muerte', 12083),
(33, 255, 'transporte o distribucion de gas e instalacion clandestinas', 12143),
(33, 256, 'interrupcion de serv. electrico (art. 134 dfl 1, 1982, ley de serv. eléctricos)', 12144),
(33, 257, 'uso fraudulento de tarjetas de credito y debito (ley 20.009 sobre uso tarjetas crédito)', 12151),
(33, 258, 'daños o apropiacion sobre monumentos nacionales (art. 38', 12154),
(33, 259, 'violencia en los estadios (art. 6 ley 19.327)', 13018),
(28, 260, 'falta de respeto a la autoridad publica (495 nº 4 código penal)', 13031),
(28, 261, 'riña publica (496 nº 10 código penal)', 13033),
(31, 262, 'atentado a vehiculo motorizado en circulacion con objeto contundente u otro semejante', 14056),
(32, 263, 'falsa alarma a bomberos u otros (268 bis)', 519),
(36, 264, 'tenencia ilegal de armas de fuego, municiones y otros', 10001),
(36, 265, 'porte ilegal de arma de fuego, municiones y otros', 10004),
(36, 266, 'adquisicion y venta indebida de cartuchos y municiones', 10005),
(37, 272, 'quebrantamiento', 101),
(20, 273, 'promocion del odio o violencia contra grupos por motivo discriminatorio.', 226),
(32, 274, 'desordenes publicos', 501),
(32, 275, 'obstruccion a la investigacion', 502),
(32, 276, 'asociaciones ilicitas', 510),
(32, 277, 'obstruccion a la justicia por fiscal o asistente del fiscal, del ministerio publico', 520),
(32, 278, 'homicidio de fiscales o defensores en el desempeño de sus funciones', 521),
(32, 279, 'maltrato a fiscales o defensores en funciones, incluye castracion y mutilacion', 522),
(32, 280, 'amenaza a fiscales o defensores en el desempeño de sus funciones', 523),
(32, 281, 'amenazas simples contra personas y propiedades', 524),
(32, 282, 'amenazas condicionales contra personas y propiedades', 525),
(13, 283, 'hurto de bienes pertenecientes a redes de suministro publico', 853),
(13, 284, 'incendio con peligro para las personas', 854),
(13, 285, 'incendio solo con daños o sin peligro de propagacion.', 855),
(22, 286, 'produccion y trafico de precursores art. 2 ley 20.000', 7031),
(34, 287, 'utilizacion sin autorizacion de obras de dominio ajeno', 9004),
(36, 288, 'violacion de reserva de base de datos sobre inscripcion y registro de arma.', 10006),
(36, 289, 'abandono de armas', 10007),
(38, 290, 'maltrato de obra a personal de investigaciones con o sin lesiones', 11001),
(38, 291, 'causar la muerte a personal de la policia de investigaciones', 11003),
(38, 292, 'amenazar, simple o condicionalmente u ofender a personal de investigaciones', 11004),
(38, 293, 'falsificacion de placas, tarjetas, timbres y sellos de investigaciones', 11005),
(39, 294, 'homicidio de gendarme en el desempeño de sus funciones', 11101),
(39, 295, 'maltrato de obra a gendarme en el desempeño de sus funciones', 11102),
(39, 296, 'amenaza a gendarme en el desempeño de sus funciones', 11103),
(31, 297, 'accidente con resultado de muerte o lesiones graves', 12073),
(33, 298, 'falsificacion de billetes', 12031),
(33, 299, 'matar a carabinero en ejercicio de sus funciones.', 12086),
(33, 300, 'extranjeros que ingresan o egresa del pais con doc falsificados, adulterados o a nombre de otro', 12121),
(33, 301, 'extranjeros que ingresan o intentan egresar del pais clandestinamente nodelitos de acuerdo a la nomenclatura asociada a la codificacion de delitos elaborados por la', 12122),
(33, 302, 'enseñanza autorizada de artes marciales', 12136),
(33, 303, 'tala , destruccion o incendio de arboles o arbustos en contravencion leyes y regla', 12137),
(33, 304, 'caza y comercializacion de especies prohibidas', 12138),
(33, 305, 'delitos contra la ley de bosque nativo', 12170),
(40, 306, 'apoderamiento o atentado al transporte publico', 20002),
(40, 307, 'atentado explosivo o incendiario', 20004),
(40, 308, 'asociacion ilicita terrorista', 20005),
(28, 309, 'ofensas al pudor 495 nº 5 codigo penal', 13021),
(28, 310, 'lesiones leves. 494 nº 5 codigo penal', 13036),
(42, 311, 'tacha falsa de firma autentica', 4002),
(43, 312, 'comercio clandestino . art. 97 nº 9. codigo tributario', 5002),
(27, 313, 'soborno.art. 250.', 411),
(40, 314, 'envio de explosivos, homicidio, lesiones y secuestros terroristas. art. 2 nº 1 ley 18.314', 20001),
(40, 315, 'atentado contra jefe de estado o autoridad publica.art. 2 nº 3 ley 18.314', 20003),
(40, 316, 'recaudar o proveer fondos para la comision de delitos terroristas. art. 8 ley 18.134', 20006),
(40, 317, 'otros ley 18.314. art. 8 ley 18.314.', 20099);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_ingreso_materia`
--

CREATE TABLE IF NOT EXISTS `c_ingreso_materia` (
  `id_materia` int(10) NOT NULL,
  `materia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `c_ingreso_materia`
--

INSERT INTO `c_ingreso_materia` (`id_materia`, `materia`) VALUES
(13, 'delitos contra la propiedad'),
(17, 'delitos contra las personas'),
(19, 'delitos contra orden flia,moralidad publica e integridad sexual'),
(20, 'delitos contra la libertad e intimidad de las personas'),
(22, 'trafico ilicito de estupefacientes y sustancias sicotropicas'),
(25, 'delitos contra la fe publica, falsificaciones, falsos testimonios y perjurio'),
(26, 'cuasidelitos'),
(27, 'otros delitos'),
(28, 'faltas'),
(31, 'ley 18.290 transito'),
(32, 'delitos contra el orden y seguridad publica'),
(33, 'infracciones otros textos legales'),
(34, 'ley 17.336 de propiedad intelectual'),
(35, 'ley 19.223 delitos informaticos'),
(36, 'ley 17.798 control de armas'),
(37, 'quebrantamiento de sentencias y los que durante una condena delinquen'),
(38, 'infraccion al decreto ley 2.460 ley organica de investigaciones'),
(39, 'infraccion al decreto ley 2589 ley organica de gendarmeria'),
(40, 'ley 18.314 de conductas terroristas'),
(41, 'ley general de bancos d.f.l. 252 de 1960'),
(42, 'ley de cuentas corrientes bancarias y cheques'),
(43, 'delitos tributarios'),
(44, 'ley 19.039 de propiedad y privilegios industriales'),
(45, 'faltas ley 20.000 trafico ilicito de estupefacientes y sus. sicotropicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depado_respuestas`
--

CREATE TABLE IF NOT EXISTS `depado_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `depado_respuestas`
--

INSERT INTO `depado_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('1', 'No ha consumido', 2, 14, 0),
('2', 'No ha consumido', 2, 14, 0),
('3', 'No ha consumido', 2, 14, 0),
('4', 'No ha consumido', 2, 14, 0),
('5', 'No ha consumido', 2, 14, 0),
('6', 'No ha consumido', 2, 14, 0),
('7', 'No ha consumido', 2, 14, 0),
('8', 'No ha consumido', 2, 14, 0),
('9', 'Si', 2, 14, 0),
('esAlcoholANOS', '123', 2, 14, 0),
('esUnaOVariasDrogasANOS', '123', 2, 14, 0),
('11', 'Si', 2, 14, 0),
('12', 'No', 2, 14, 0),
('13', '0', 2, 14, 0),
('14', '0', 2, 14, 0),
('15', 'No', 2, 14, 0),
('16', 'No', 2, 14, 0),
('17', 'No', 2, 14, 0),
('18', 'No', 2, 14, 0),
('19', 'No', 2, 14, 0),
('20', 'No', 2, 14, 0),
('21', 'No', 2, 14, 0),
('22', 'No', 2, 14, 0),
('23', 'No', 2, 14, 0),
('24', 'No', 2, 14, 0),
('25', 'En ocasiones ', 2, 14, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 14, 0),
('module', 'DEP_ADO', 2, 14, 0),
('action', 'GuardarInstrumento', 2, 14, 0),
('idEncuestado', '14', 2, 14, 0),
('1', 'No ha consumido', 2, 110, 0),
('2', 'En ocasiones', 2, 110, 0),
('3', 'En ocasiones', 2, 110, 0),
('4', 'En ocasiones', 2, 110, 0),
('5', 'En ocasiones', 2, 110, 0),
('6', 'En ocasiones', 2, 110, 0),
('7', 'En ocasiones', 2, 110, 0),
('8', 'En ocasiones', 2, 110, 0),
('9', 'No', 2, 110, 0),
('esAlcoholANOS', '', 2, 110, 0),
('esUnaOVariasDrogasANOS', '', 2, 110, 0),
('11', 'No', 2, 110, 0),
('12', 'Si', 2, 110, 0),
('13', '0', 2, 110, 0),
('14', '121212', 2, 110, 0),
('15', 'Si', 2, 110, 0),
('16', 'Si', 2, 110, 0),
('17', 'Si', 2, 110, 0),
('18', 'Si', 2, 110, 0),
('19', 'No', 2, 110, 0),
('20', 'Si', 2, 110, 0),
('21', 'Si', 2, 110, 0),
('22', 'No', 2, 110, 0),
('23', 'Si', 2, 110, 0),
('24', 'Si', 2, 110, 0),
('25', 'Alrededor de una vez al mes', 2, 110, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 110, 0),
('module', 'DEP_ADO', 2, 110, 0),
('action', 'GuardarInstrumento', 2, 110, 0),
('idEncuestado', '110', 2, 110, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep_ado_preguntas`
--

CREATE TABLE IF NOT EXISTS `dep_ado_preguntas` (
  `id_pregunta_DEP_ADO` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  `bloque_DEP_ADO` varchar(255) NOT NULL,
  `bloque_num` int(255) NOT NULL,
  PRIMARY KEY (`id_pregunta_DEP_ADO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `dep_ado_preguntas`
--

INSERT INTO `dep_ado_preguntas` (`id_pregunta_DEP_ADO`, `num_pregunta`, `texto`, `es_requerido`, `bloque_DEP_ADO`, `bloque_num`) VALUES
(1, 'a', 'Alcohol', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(2, 'b', 'Marihuana (ej.: yerba, pito, caña, huiro, macoña, etc.)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(3, 'c', 'Cocaina (ej.: coca, haley, raya, pasta base, línea, angustia,etc.)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(4, 'd', 'Pegamento/solvente (ej.: neopren, bencina, laca, etc.)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(5, 'e', 'Alucinógenos (ej.: LSD, PCP, éxtasis, floripondio, peyote, etc.)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(6, 'f', 'Heroina (ej.: smack)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(7, 'g', 'Anfetaminas / speed (ej.: anfeta, pepa, tonaril, etc.)\r\n', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto )', 1),
(8, 'h', 'Otros ', 1, 'Durante los últimos 12 meses  ¿has consumido alguno de estos productos? si es así  ¿Cuál ha sido la frecuencia de tu consumo? (ennegrecer una sola respuesta por producto ) ', 1),
(9, 'a', 'Durante tu vida ¿Has consumido alguna vez uno de estos productos en forma regular? ', 1, ' ', 2),
(10, 'b', 'A que edad comenzaste a consumir regularmente? (regularmente se considera una vez por semana, por lo menos durante un mes)', 1, ' ', 2),
(11, 'a', 'Durante tu vida. ¿Te has inyectado drogas alguna vez?', 1, '', 3),
(12, 'a', '¿Has consumido alcohol u otras drogas en los 30 últimos días?', 1, '', 4),
(13, 'a', 'Joven Varón En los últimos 12 meses ¿cuántas veces has consumido 8 unidades de alcohol o más en una misma ocasión? ', 1, '', 5),
(14, 'b', 'Joven Dama En los últimos 12 meses ¿cuántas veces has consumido 5 unidades de alcohol o más en una misma ocasión? ', 1, '', 5),
(15, 'a', 'Se ha dañado tu salud física debido a tu consumo de alcohol u otras drogas (Ej.:  Problemas digestivos, sobredosis, infecciones, irritación nasal, lesiones, etc.)', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(16, 'b', 'Has tenido dificultades psicológicas debido a tu consumo de alcohol u otras drogas (Ej.: ansiedad, depresión, problemas de concentración, pensamientos suicidas, etc.)', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(17, 'c', 'Tu consumo de alcohol  u otras drogas ha dañado tus relaciones familiares', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(18, 'd', 'Tu consumo de alcohol u otras drogas ha dañado a una de tus amistades o tu relación amorosa', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(19, 'e', 'Has tenido dificultad en la escuela por tu consumo de alcohol u otras drogas (Ej.: Falta a clases, suspensión,  baja de notas, falta de motivación, etc.)', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(20, 'f', 'Has gastado o perdido mucho dinero debido a tu consumo de alcohol  u otras drogas', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(21, 'g', 'Has cometido delitos mientras consumías alcohol  u otras drogas, aún si la policía no te detuvo (Ej.: robo, herir a alguien ,vandalismo, venta de drogas, manejar auto con facultades debilitadas, etc.)', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(22, 'h', 'Has tomado riesgos mientras consumías alcohol o drogas (Ej.: relaciones sexuales sin protección, o inverosímiles para un  joven, conducir una bicicleta o actividad deportiva estando intoxicado, etc.)', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(23, 'i', 'Tienes la impresión que las mismas cantidades de alcohol u otras drogas hacen                  menos efecto en  ti', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(24, 'j', 'Has hablado de tu consumo de alcohol u otras drogas con un operador social', 1, 'En los últimos 12  meses, ¿te ha sucedido algunas de las siguientes situaciones?', 6),
(25, 'a', '¿Cuál ha sido tu consumo de tabaco en los últimos 12 meses? (ennegrecer la respuesta)', 1, ' ', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eda_preguntas`
--

CREATE TABLE IF NOT EXISTS `eda_preguntas` (
  `id_pregunta_EDA` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_EDA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `eda_preguntas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eda_respuestas`
--

CREATE TABLE IF NOT EXISTS `eda_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `eda_respuestas`
--

INSERT INTO `eda_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('block1-F1C1', '', 2, 112, 0),
('block1-F1C2', '', 2, 112, 0),
('block1-F1C3', '', 2, 112, 0),
('block1-F1C4', '', 2, 112, 0),
('block1-F1C5', '', 2, 112, 0),
('block1-F1C6', '', 2, 112, 0),
('block1-F1C7', '', 2, 112, 0),
('block1-resultadoF1_', '0', 2, 112, 0),
('block1-F2C1', '', 2, 112, 0),
('block1-F2C2', '', 2, 112, 0),
('block1-F2C3', '', 2, 112, 0),
('block1-F2C4', '', 2, 112, 0),
('block1-F2C5', '', 2, 112, 0),
('block1-F2C6', '', 2, 112, 0),
('block1-F2C7', '', 2, 112, 0),
('block1-resultadoF2_', '0', 2, 112, 0),
('block1-F3C1', '', 2, 112, 0),
('block1-F3C2', '', 2, 112, 0),
('block1-F3C3', '', 2, 112, 0),
('block1-F3C4', '', 2, 112, 0),
('block1-F3C5', '', 2, 112, 0),
('block1-F3C6', '', 2, 112, 0),
('block1-F3C7', '', 2, 112, 0),
('block1-resultadoF3_', '0', 2, 112, 0),
('block1-F4C1', '', 2, 112, 0),
('block1-F4C2', '', 2, 112, 0),
('block1-F4C3', '', 2, 112, 0),
('block1-F4C4', '', 2, 112, 0),
('block1-F4C5', '', 2, 112, 0),
('block1-F4C6', '', 2, 112, 0),
('block1-F4C7', '', 2, 112, 0),
('block1-resultadoF4_', '0', 2, 112, 0),
('block1-F5C1', '', 2, 112, 0),
('block1-F5C2', '', 2, 112, 0),
('block1-F5C3', '', 2, 112, 0),
('block1-F5C4', '', 2, 112, 0),
('block1-F5C5', '', 2, 112, 0),
('block1-F5C6', '', 2, 112, 0),
('block1-F5C7', '', 2, 112, 0),
('block1-resultadoF5_', '0', 2, 112, 0),
('block1-F6C1', '', 2, 112, 0),
('block1-F6C2', '', 2, 112, 0),
('block1-F6C3', '', 2, 112, 0),
('block1-F6C4', '', 2, 112, 0),
('block1-F6C5', '', 2, 112, 0),
('block1-F6C6', '', 2, 112, 0),
('block1-F6C7', '', 2, 112, 0),
('block1-resultadoF6_', '0', 2, 112, 0),
('block1-F7C1', '', 2, 112, 0),
('block1-F7C2', '', 2, 112, 0),
('block1-F7C3', '', 2, 112, 0),
('block1-F7C4', '', 2, 112, 0),
('block1-F7C5', '', 2, 112, 0),
('block1-F7C6', '', 2, 112, 0),
('block1-F7C7', '', 2, 112, 0),
('block1-resultadoF7_', '0', 2, 112, 0),
('block1-F8C1', '', 2, 112, 0),
('block1-F8C2', '', 2, 112, 0),
('block1-F8C3', '', 2, 112, 0),
('block1-F8C4', '', 2, 112, 0),
('block1-F8C5', '', 2, 112, 0),
('block1-F8C6', '', 2, 112, 0),
('block1-F8C7', '', 2, 112, 0),
('block1-resultadoF8_', '0', 2, 112, 0),
('block1-F9C1', '', 2, 112, 0),
('block1-F9C2', '', 2, 112, 0),
('block1-F9C3', '', 2, 112, 0),
('block1-F9C4', '', 2, 112, 0),
('block1-F9C5', '', 2, 112, 0),
('block1-F9C6', '', 2, 112, 0),
('block1-F9C7', '', 2, 112, 0),
('block1-resultadoF9_', '0', 2, 112, 0),
('block1-F10C1', '', 2, 112, 0),
('block1-F10C2', '', 2, 112, 0),
('block1-F10C3', '', 2, 112, 0),
('block1-F10C4', '', 2, 112, 0),
('block1-F10C5', '', 2, 112, 0),
('block1-F10C6', '', 2, 112, 0),
('block1-F10C7', '', 2, 112, 0),
('block1-resultadoF10_', '0', 2, 112, 0),
('block1-F11C1', '', 2, 112, 0),
('block1-F11C2', '', 2, 112, 0),
('block1-F11C3', '', 2, 112, 0),
('block1-F11C4', '', 2, 112, 0),
('block1-F11C5', '', 2, 112, 0),
('block1-F11C6', '', 2, 112, 0),
('block1-F11C7', '', 2, 112, 0),
('block1-resultadoF11_', '0', 2, 112, 0),
('block1-F12C1', '', 2, 112, 0),
('block1-F12C2', '', 2, 112, 0),
('block1-F12C3', '', 2, 112, 0),
('block1-F12C4', '', 2, 112, 0),
('block1-F12C5', '', 2, 112, 0),
('block1-F12C6', '', 2, 112, 0),
('block1-F12C7', '', 2, 112, 0),
('block1-resultadoF12_', '0', 2, 112, 0),
('block1-F13C1', '', 2, 112, 0),
('block1-F13C2', '', 2, 112, 0),
('block1-F13C3', '', 2, 112, 0),
('block1-F13C4', '', 2, 112, 0),
('block1-F13C5', '', 2, 112, 0),
('block1-F13C6', '', 2, 112, 0),
('block1-F13C7', '', 2, 112, 0),
('block1-resultadoF13_', '0', 2, 112, 0),
('block1-F14C1', '', 2, 112, 0),
('block1-F14C2', '', 2, 112, 0),
('block1-F14C3', '', 2, 112, 0),
('block1-F14C4', '', 2, 112, 0),
('block1-F14C5', '', 2, 112, 0),
('block1-F14C6', '', 2, 112, 0),
('block1-F14C7', '', 2, 112, 0),
('block1-resultadoF14_', '0', 2, 112, 0),
('block1-F15C1', '', 2, 112, 0),
('block1-F15C2', '', 2, 112, 0),
('block1-F15C3', '', 2, 112, 0),
('block1-F15C4', '', 2, 112, 0),
('block1-F15C5', '', 2, 112, 0),
('block1-F15C6', '', 2, 112, 0),
('block1-F15C7', '', 2, 112, 0),
('block1-resultadoF15_', '0', 2, 112, 0),
('block1-F16C1', '', 2, 112, 0),
('block1-F16C2', '', 2, 112, 0),
('block1-F16C3', '', 2, 112, 0),
('block1-F16C4', '', 2, 112, 0),
('block1-F16C5', '', 2, 112, 0),
('block1-F16C6', '', 2, 112, 0),
('block1-F16C7', '', 2, 112, 0),
('block1-resultadoF16_', '0', 2, 112, 0),
('block1-F17C1', '', 2, 112, 0),
('block1-F17C2', '', 2, 112, 0),
('block1-F17C3', '', 2, 112, 0),
('block1-F17C4', '', 2, 112, 0),
('block1-F17C5', '', 2, 112, 0),
('block1-F17C6', '', 2, 112, 0),
('block1-F17C7', '', 2, 112, 0),
('block1-resultadoF17_', '0', 2, 112, 0),
('block1-F18C1', '', 2, 112, 0),
('block1-F18C2', '', 2, 112, 0),
('block1-F18C3', '', 2, 112, 0),
('block1-F18C4', '', 2, 112, 0),
('block1-F18C5', '', 2, 112, 0),
('block1-F18C6', '', 2, 112, 0),
('block1-F18C7', '', 2, 112, 0),
('block1-resultadoF18_', '0', 2, 112, 0),
('block1-F19C1', '', 2, 112, 0),
('block1-F19C2', '33', 2, 112, 0),
('block1-F19C3', '', 2, 112, 0),
('block1-F19C4', '', 2, 112, 0),
('block1-F19C5', '', 2, 112, 0),
('block1-F19C6', '', 2, 112, 0),
('block1-F19C7', '', 2, 112, 0),
('block1-resultadoF19_', '33', 2, 112, 0),
('block1-F20C1', '', 2, 112, 0),
('block1-F20C2', '', 2, 112, 0),
('block1-F20C3', '', 2, 112, 0),
('block1-F20C4', '', 2, 112, 0),
('block1-F20C5', '', 2, 112, 0),
('block1-F20C6', '', 2, 112, 0),
('block1-F20C7', '', 2, 112, 0),
('block1-resultadoF20_', '0', 2, 112, 0),
('block1-F21C1', '', 2, 112, 0),
('block1-F21C2', '', 2, 112, 0),
('block1-F21C3', '', 2, 112, 0),
('block1-F21C4', '', 2, 112, 0),
('block1-F21C5', '', 2, 112, 0),
('block1-F21C6', '', 2, 112, 0),
('block1-F21C7', '', 2, 112, 0),
('block1-resultadoF21_', '0', 2, 112, 0),
('block1-F22C1', '', 2, 112, 0),
('block1-F22C2', '', 2, 112, 0),
('block1-F22C3', '', 2, 112, 0),
('block1-F22C4', '', 2, 112, 0),
('block1-F22C5', '', 2, 112, 0),
('block1-F22C6', '', 2, 112, 0),
('block1-F22C7', '', 2, 112, 0),
('block1-resultadoF22_', '0', 2, 112, 0),
('block1-F23C1', '', 2, 112, 0),
('block1-F23C2', '', 2, 112, 0),
('block1-F23C3', '', 2, 112, 0),
('block1-F23C4', '', 2, 112, 0),
('block1-F23C5', '', 2, 112, 0),
('block1-F23C6', '', 2, 112, 0),
('block1-F23C7', '', 2, 112, 0),
('block1-resultadoF23_', '0', 2, 112, 0),
('block1-F24C1', '', 2, 112, 0),
('block1-F24C2', '', 2, 112, 0),
('block1-F24C3', '', 2, 112, 0),
('block1-F24C4', '', 2, 112, 0),
('block1-F24C5', '', 2, 112, 0),
('block1-F24C6', '', 2, 112, 0),
('block1-F24C7', '', 2, 112, 0),
('block1-resultadoF24_', '0', 2, 112, 0),
('block1-F25C1', '', 2, 112, 0),
('block1-F25C2', '45', 2, 112, 0),
('block1-F25C3', '', 2, 112, 0),
('block1-F25C4', '', 2, 112, 0),
('block1-F25C5', '', 2, 112, 0),
('block1-F25C6', '', 2, 112, 0),
('block1-F25C7', '', 2, 112, 0),
('block1-resultadoF25_', '45', 2, 112, 0),
('block1-F26C1', '', 2, 112, 0),
('block1-F26C2', '', 2, 112, 0),
('block1-F26C3', '', 2, 112, 0),
('block1-F26C4', '', 2, 112, 0),
('block1-F26C5', '', 2, 112, 0),
('block1-F26C6', '', 2, 112, 0),
('block1-F26C7', '', 2, 112, 0),
('block1-resultadoF26_', '0', 2, 112, 0),
('block1-F27C1', '', 2, 112, 0),
('block1-F27C2', '', 2, 112, 0),
('block1-F27C3', '', 2, 112, 0),
('block1-F27C4', '', 2, 112, 0),
('block1-F27C5', '', 2, 112, 0),
('block1-F27C6', '', 2, 112, 0),
('block1-F27C7', '', 2, 112, 0),
('block1-resultadoF27_', '0', 2, 112, 0),
('block1-F28C1', '', 2, 112, 0),
('block1-F28C2', '', 2, 112, 0),
('block1-F28C3', '', 2, 112, 0),
('block1-F28C4', '', 2, 112, 0),
('block1-F28C5', '', 2, 112, 0),
('block1-F28C6', '', 2, 112, 0),
('block1-F28C7', '', 2, 112, 0),
('block1-resultadoF28_', '0', 2, 112, 0),
('block1-F29C1', '', 2, 112, 0),
('block1-F29C2', '', 2, 112, 0),
('block1-F29C3', '', 2, 112, 0),
('block1-F29C4', '', 2, 112, 0),
('block1-F29C5', '', 2, 112, 0),
('block1-F29C6', '', 2, 112, 0),
('block1-F29C7', '', 2, 112, 0),
('block1-resultadoF29_', '0', 2, 112, 0),
('block1-F30C1', '', 2, 112, 0),
('block1-F30C2', '', 2, 112, 0),
('block1-F30C3', '', 2, 112, 0),
('block1-F30C4', '', 2, 112, 0),
('block1-F30C5', '', 2, 112, 0),
('block1-F30C6', '', 2, 112, 0),
('block1-F30C7', '', 2, 112, 0),
('block1-resultadoF30_', '0', 2, 112, 0),
('block1-F31C1', '', 2, 112, 0),
('block1-F31C2', '', 2, 112, 0),
('block1-F31C3', '', 2, 112, 0),
('block1-F31C4', '', 2, 112, 0),
('block1-F31C5', '', 2, 112, 0),
('block1-F31C6', '', 2, 112, 0),
('block1-F31C7', '', 2, 112, 0),
('block1-resultadoF31_', '0', 2, 112, 0),
('block1-resultadoC1', '0', 2, 112, 0),
('block1-resultadoC2', '78', 2, 112, 0),
('block1-resultadoC3', '0', 2, 112, 0),
('block1-resultadoC4', '0', 2, 112, 0),
('block1-resultadoC5', '0', 2, 112, 0),
('block1-resultadoC6', '0', 2, 112, 0),
('block1-resultadoC7', '0', 2, 112, 0),
('block1-resultado', '78', 2, 112, 0),
('block1-comentarios', '', 2, 112, 0),
('block2-F1C1', '', 2, 112, 0),
('block2-F1C2', '', 2, 112, 0),
('block2-F1C3', '', 2, 112, 0),
('block2-F1C4', '', 2, 112, 0),
('block2-F1C5', '', 2, 112, 0),
('block2-F1C6', '', 2, 112, 0),
('block2-F1C7', '', 2, 112, 0),
('block2-resultadoF1_', '0', 2, 112, 0),
('block2-F2C1', '', 2, 112, 0),
('block2-F2C2', '', 2, 112, 0),
('block2-F2C3', '', 2, 112, 0),
('block2-F2C4', '', 2, 112, 0),
('block2-F2C5', '', 2, 112, 0),
('block2-F2C6', '', 2, 112, 0),
('block2-F2C7', '', 2, 112, 0),
('block2-resultadoF2_', '0', 2, 112, 0),
('block2-F3C1', '', 2, 112, 0),
('block2-F3C2', '', 2, 112, 0),
('block2-F3C3', '', 2, 112, 0),
('block2-F3C4', '', 2, 112, 0),
('block2-F3C5', '', 2, 112, 0),
('block2-F3C6', '', 2, 112, 0),
('block2-F3C7', '', 2, 112, 0),
('block2-resultadoF3_', '0', 2, 112, 0),
('block2-F4C1', '', 2, 112, 0),
('block2-F4C2', '', 2, 112, 0),
('block2-F4C3', '', 2, 112, 0),
('block2-F4C4', '', 2, 112, 0),
('block2-F4C5', '', 2, 112, 0),
('block2-F4C6', '', 2, 112, 0),
('block2-F4C7', '', 2, 112, 0),
('block2-resultadoF4_', '0', 2, 112, 0),
('block2-F5C1', '', 2, 112, 0),
('block2-F5C2', '', 2, 112, 0),
('block2-F5C3', '', 2, 112, 0),
('block2-F5C4', '', 2, 112, 0),
('block2-F5C5', '', 2, 112, 0),
('block2-F5C6', '', 2, 112, 0),
('block2-F5C7', '', 2, 112, 0),
('block2-resultadoF5_', '0', 2, 112, 0),
('block2-F6C1', '', 2, 112, 0),
('block2-F6C2', '', 2, 112, 0),
('block2-F6C3', '', 2, 112, 0),
('block2-F6C4', '', 2, 112, 0),
('block2-F6C5', '', 2, 112, 0),
('block2-F6C6', '', 2, 112, 0),
('block2-F6C7', '', 2, 112, 0),
('block2-resultadoF6_', '0', 2, 112, 0),
('block2-F7C1', '', 2, 112, 0),
('block2-F7C2', '', 2, 112, 0),
('block2-F7C3', '', 2, 112, 0),
('block2-F7C4', '', 2, 112, 0),
('block2-F7C5', '', 2, 112, 0),
('block2-F7C6', '', 2, 112, 0),
('block2-F7C7', '', 2, 112, 0),
('block2-resultadoF7_', '0', 2, 112, 0),
('block2-F8C1', '', 2, 112, 0),
('block2-F8C2', '', 2, 112, 0),
('block2-F8C3', '', 2, 112, 0),
('block2-F8C4', '', 2, 112, 0),
('block2-F8C5', '', 2, 112, 0),
('block2-F8C6', '', 2, 112, 0),
('block2-F8C7', '', 2, 112, 0),
('block2-resultadoF8_', '0', 2, 112, 0),
('block2-F9C1', '', 2, 112, 0),
('block2-F9C2', '', 2, 112, 0),
('block2-F9C3', '', 2, 112, 0),
('block2-F9C4', '', 2, 112, 0),
('block2-F9C5', '', 2, 112, 0),
('block2-F9C6', '', 2, 112, 0),
('block2-F9C7', '', 2, 112, 0),
('block2-resultadoF9_', '0', 2, 112, 0),
('block2-F10C1', '', 2, 112, 0),
('block2-F10C2', '', 2, 112, 0),
('block2-F10C3', '', 2, 112, 0),
('block2-F10C4', '', 2, 112, 0),
('block2-F10C5', '', 2, 112, 0),
('block2-F10C6', '', 2, 112, 0),
('block2-F10C7', '', 2, 112, 0),
('block2-resultadoF10_', '0', 2, 112, 0),
('block2-F11C1', '', 2, 112, 0),
('block2-F11C2', '', 2, 112, 0),
('block2-F11C3', '', 2, 112, 0),
('block2-F11C4', '', 2, 112, 0),
('block2-F11C5', '', 2, 112, 0),
('block2-F11C6', '', 2, 112, 0),
('block2-F11C7', '', 2, 112, 0),
('block2-resultadoF11_', '0', 2, 112, 0),
('block2-F12C1', '', 2, 112, 0),
('block2-F12C2', '', 2, 112, 0),
('block2-F12C3', '', 2, 112, 0),
('block2-F12C4', '', 2, 112, 0),
('block2-F12C5', '', 2, 112, 0),
('block2-F12C6', '', 2, 112, 0),
('block2-F12C7', '', 2, 112, 0),
('block2-resultadoF12_', '0', 2, 112, 0),
('block2-F13C1', '', 2, 112, 0),
('block2-F13C2', '', 2, 112, 0),
('block2-F13C3', '', 2, 112, 0),
('block2-F13C4', '', 2, 112, 0),
('block2-F13C5', '', 2, 112, 0),
('block2-F13C6', '', 2, 112, 0),
('block2-F13C7', '', 2, 112, 0),
('block2-resultadoF13_', '0', 2, 112, 0),
('block2-resultadoC1', '0', 2, 112, 0),
('block2-resultadoC2', '0', 2, 112, 0),
('block2-resultadoC3', '0', 2, 112, 0),
('block2-resultadoC4', '0', 2, 112, 0),
('block2-resultadoC5', '0', 2, 112, 0),
('block2-resultadoC6', '0', 2, 112, 0),
('block2-resultadoC7', '0', 2, 112, 0),
('block2-resultado', '0', 2, 112, 0),
('block2-comentarios', '', 2, 112, 0),
('block3-F1C1', '', 2, 112, 0),
('block3-F1C2', '', 2, 112, 0),
('block3-F1C3', '', 2, 112, 0),
('block3-F1C4', '', 2, 112, 0),
('block3-F1C5', '', 2, 112, 0),
('block3-F1C6', '', 2, 112, 0),
('block3-F1C7', '', 2, 112, 0),
('block3-resultadoF1_', '0', 2, 112, 0),
('block3-F2C1', '', 2, 112, 0),
('block3-F2C2', '', 2, 112, 0),
('block3-F2C3', '', 2, 112, 0),
('block3-F2C4', '', 2, 112, 0),
('block3-F2C5', '', 2, 112, 0),
('block3-F2C6', '', 2, 112, 0),
('block3-F2C7', '', 2, 112, 0),
('block3-resultadoF2_', '0', 2, 112, 0),
('block3-F3C1', '', 2, 112, 0),
('block3-F3C2', '', 2, 112, 0),
('block3-F3C3', '', 2, 112, 0),
('block3-F3C4', '', 2, 112, 0),
('block3-F3C5', '', 2, 112, 0),
('block3-F3C6', '', 2, 112, 0),
('block3-F3C7', '', 2, 112, 0),
('block3-resultadoF3_', '0', 2, 112, 0),
('block3-F4C1', '', 2, 112, 0),
('block3-F4C2', '', 2, 112, 0),
('block3-F4C3', '', 2, 112, 0),
('block3-F4C4', '', 2, 112, 0),
('block3-F4C5', '', 2, 112, 0),
('block3-F4C6', '', 2, 112, 0),
('block3-F4C7', '', 2, 112, 0),
('block3-resultadoF4_', '0', 2, 112, 0),
('block3-F5C1', '', 2, 112, 0),
('block3-F5C2', '', 2, 112, 0),
('block3-F5C3', '', 2, 112, 0),
('block3-F5C4', '', 2, 112, 0),
('block3-F5C5', '', 2, 112, 0),
('block3-F5C6', '', 2, 112, 0),
('block3-F5C7', '', 2, 112, 0),
('block3-resultadoF5_', '0', 2, 112, 0),
('block3-F6C1', '', 2, 112, 0),
('block3-F6C2', '', 2, 112, 0),
('block3-F6C3', '', 2, 112, 0),
('block3-F6C4', '', 2, 112, 0),
('block3-F6C5', '', 2, 112, 0),
('block3-F6C6', '', 2, 112, 0),
('block3-F6C7', '', 2, 112, 0),
('block3-resultadoF6_', '0', 2, 112, 0),
('block3-F7C1', '', 2, 112, 0),
('block3-F7C2', '', 2, 112, 0),
('block3-F7C3', '', 2, 112, 0),
('block3-F7C4', '', 2, 112, 0),
('block3-F7C5', '', 2, 112, 0),
('block3-F7C6', '', 2, 112, 0),
('block3-F7C7', '', 2, 112, 0),
('block3-resultadoF7_', '0', 2, 112, 0),
('block3-F8C1', '', 2, 112, 0),
('block3-F8C2', '', 2, 112, 0),
('block3-F8C3', '', 2, 112, 0),
('block3-F8C4', '', 2, 112, 0),
('block3-F8C5', '', 2, 112, 0),
('block3-F8C6', '', 2, 112, 0),
('block3-F8C7', '', 2, 112, 0),
('block3-resultadoF8_', '0', 2, 112, 0),
('block3-F9C1', '', 2, 112, 0),
('block3-F9C2', '', 2, 112, 0),
('block3-F9C3', '', 2, 112, 0),
('block3-F9C4', '', 2, 112, 0),
('block3-F9C5', '', 2, 112, 0),
('block3-F9C6', '', 2, 112, 0),
('block3-F9C7', '', 2, 112, 0),
('block3-resultadoF9_', '0', 2, 112, 0),
('block3-F10C1', '', 2, 112, 0),
('block3-F10C2', '', 2, 112, 0),
('block3-F10C3', '', 2, 112, 0),
('block3-F10C4', '', 2, 112, 0),
('block3-F10C5', '', 2, 112, 0),
('block3-F10C6', '', 2, 112, 0),
('block3-F10C7', '', 2, 112, 0),
('block3-resultadoF10_', '0', 2, 112, 0),
('block3-F11C1', '', 2, 112, 0),
('block3-F11C2', '', 2, 112, 0),
('block3-F11C3', '', 2, 112, 0),
('block3-F11C4', '', 2, 112, 0),
('block3-F11C5', '', 2, 112, 0),
('block3-F11C6', '', 2, 112, 0),
('block3-F11C7', '', 2, 112, 0),
('block3-resultadoF11_', '0', 2, 112, 0),
('block3-F12C1', '', 2, 112, 0),
('block3-F12C2', '', 2, 112, 0),
('block3-F12C3', '', 2, 112, 0),
('block3-F12C4', '', 2, 112, 0),
('block3-F12C5', '', 2, 112, 0),
('block3-F12C6', '', 2, 112, 0),
('block3-F12C7', '', 2, 112, 0),
('block3-resultadoF12_', '0', 2, 112, 0),
('block3-F13C1', '', 2, 112, 0),
('block3-F13C2', '', 2, 112, 0),
('block3-F13C3', '', 2, 112, 0),
('block3-F13C4', '', 2, 112, 0),
('block3-F13C5', '', 2, 112, 0),
('block3-F13C6', '', 2, 112, 0),
('block3-F13C7', '', 2, 112, 0),
('block3-resultadoF13_', '0', 2, 112, 0),
('block3-F14C1', '', 2, 112, 0),
('block3-F14C2', '', 2, 112, 0),
('block3-F14C3', '', 2, 112, 0),
('block3-F14C4', '', 2, 112, 0),
('block3-F14C5', '', 2, 112, 0),
('block3-F14C6', '', 2, 112, 0),
('block3-F14C7', '', 2, 112, 0),
('block3-resultadoF14_', '0', 2, 112, 0),
('block3-F15C1', '', 2, 112, 0),
('block3-F15C2', '', 2, 112, 0),
('block3-F15C3', '', 2, 112, 0),
('block3-F15C4', '', 2, 112, 0),
('block3-F15C5', '', 2, 112, 0),
('block3-F15C6', '', 2, 112, 0),
('block3-F15C7', '', 2, 112, 0),
('block3-resultadoF15_', '0', 2, 112, 0),
('block3-F16C1', '', 2, 112, 0),
('block3-F16C2', '', 2, 112, 0),
('block3-F16C3', '', 2, 112, 0),
('block3-F16C4', '', 2, 112, 0),
('block3-F16C5', '', 2, 112, 0),
('block3-F16C6', '', 2, 112, 0),
('block3-F16C7', '', 2, 112, 0),
('block3-resultadoF16_', '0', 2, 112, 0),
('block3-F17C1', '', 2, 112, 0),
('block3-F17C2', '', 2, 112, 0),
('block3-F17C3', '', 2, 112, 0),
('block3-F17C4', '', 2, 112, 0),
('block3-F17C5', '', 2, 112, 0),
('block3-F17C6', '', 2, 112, 0),
('block3-F17C7', '', 2, 112, 0),
('block3-resultadoF17_', '0', 2, 112, 0),
('block3-F18C1', '', 2, 112, 0),
('block3-F18C2', '', 2, 112, 0),
('block3-F18C3', '', 2, 112, 0),
('block3-F18C4', '', 2, 112, 0),
('block3-F18C5', '', 2, 112, 0),
('block3-F18C6', '', 2, 112, 0),
('block3-F18C7', '', 2, 112, 0),
('block3-resultadoF18_', '0', 2, 112, 0),
('block3-F19C1', '', 2, 112, 0),
('block3-F19C2', '', 2, 112, 0),
('block3-F19C3', '', 2, 112, 0),
('block3-F19C4', '', 2, 112, 0),
('block3-F19C5', '', 2, 112, 0),
('block3-F19C6', '', 2, 112, 0),
('block3-F19C7', '', 2, 112, 0),
('block3-resultadoF19_', '0', 2, 112, 0),
('block3-resultadoC1', '0', 2, 112, 0),
('block3-resultadoC2', '0', 2, 112, 0),
('block3-resultadoC3', '0', 2, 112, 0),
('block3-resultadoC4', '0', 2, 112, 0),
('block3-resultadoC5', '0', 2, 112, 0),
('block3-resultadoC6', '0', 2, 112, 0),
('block3-resultadoC7', '0', 2, 112, 0),
('block3-resultado', '0', 2, 112, 0),
('block3-comentarios', '', 2, 112, 0),
('Guardar', '', 2, 112, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 112, 0),
('module', 'EDA', 2, 112, 0),
('action', 'GuardarInstrumento', 2, 112, 0),
('idEncuestado', '112', 2, 112, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eged2_respuestas`
--

CREATE TABLE IF NOT EXISTS `eged2_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `eged2_respuestas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eged_preguntas`
--

CREATE TABLE IF NOT EXISTS `eged_preguntas` (
  `id_pregunta_EGED` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `instruccion` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_EGED`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `eged_preguntas`
--

INSERT INTO `eged_preguntas` (`id_pregunta_EGED`, `num_pregunta`, `texto`, `instruccion`, `es_requerido`) VALUES
(1, 1, 'Presencia de delincuencia contra las personas.', '(Consignar este enunciado si el adolescente comete por lo menos un delito contra las personas) ', 1),
(2, 2, 'Volumen de delitos superior a 5.', '(Consignar este enunciado si el adolescente, en el conjunto de su historia delictiva, acumula más de 5 delitos) ', 1),
(3, 3, 'Presencia de intoxicación durante su actuación.', '(Consignar este enunciado si el adolescente estaba intoxicado (droga o alcohol) durante la comisión de  \r\npor lo menos uno de los delitos)', 1),
(4, 4, 'Uso de instrumentos.', '(Consignar este enunciado si el adolescente tenía en su poder o utilizaba instrumentos o un arma durante la \r\ncomisión de por lo menos uno de los delitos)', 1),
(5, 5, 'Organización planificada.', '(Consignar este enunciado si el adolescente ha planeado u organizado sus delitos)', 1),
(6, 6, 'Presencia de cómplices delincuentes.', '(Consignar este enunciado si el adolescente comete por lo menos un delito en compañía de pares que tienen \r\nantecedentes criminales)', 1),
(7, 7, 'Frecuenta pares desadaptados y / o infractores.', '(Consignar este enunciado si el adolescente tiene entre sus conocidos o amigos (además de los cómplices) pares \r\ndesadaptados y / o infractores)', 1),
(8, 8, 'Ausencia de tensión durante sus actuaciones.', '(Consignar este enunciado si el adolescente no siente ningún tipo de tensión durante la comisión \r\n de por lo menos un delito)', 1),
(9, 9, 'Motivación utilitaria (para cometer los delitos).', '(Consignar este enunciado si el adolescente tiene motivaciones utilitarias en por lo menos uno de los delitos)', 1),
(10, 10, 'Presencia de  antecedentes.', '(Consignar este enunciado si el adolescente tiene antecedentes penales)', 1),
(11, 11, 'Precocidad (actos delictivos realizados antes de los 12 años).', '(Consignar este enunciado si el adolescente comete un delito antes de los 12 años)', 1),
(12, 12, 'Destrucción de objetos durante su actuación.', '(Consignar este enunciado si el adolescente ha presentado comportamientos destructivos durante la comisión  \r\nde uno o dos delitos)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eged_respuestas`
--

CREATE TABLE IF NOT EXISTS `eged_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_EGED` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_EGED`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_EGED` (`id_pregunta_EGED`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `eged_respuestas`
--

INSERT INTO `eged_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_EGED`) VALUES
(2, 'Si', '', 5, 1),
(2, 'Si', '', 5, 2),
(2, 'Si', '', 5, 3),
(2, 'No', '', 5, 4),
(2, 'Si', '', 5, 5),
(2, 'No', '', 5, 6),
(2, 'Si', '', 5, 7),
(2, 'No', '', 5, 8),
(2, 'Si', '', 5, 9),
(2, 'No', '', 5, 10),
(2, 'Si', '', 5, 11),
(2, 'No', '', 5, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestado`
--

CREATE TABLE IF NOT EXISTS `encuestado` (
  `id_encuestado` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user_responsable_principal` bigint(20) NOT NULL,
  `select_user_responsable_secundario1` int(11) NOT NULL,
  `id_user_responsable_secundario` bigint(20) DEFAULT NULL,
  `input_run_nconverificador` varchar(9) NOT NULL,
  `input_primer_nombre` varchar(255) NOT NULL,
  `input_otros_nombres` varchar(255) NOT NULL,
  `input_primer_apellido` varchar(255) NOT NULL,
  `input_segundo_apellido` varchar(255) NOT NULL,
  `radio_sexo` varchar(255) NOT NULL,
  `input_fnacimiento` datetime NOT NULL,
  `select_region` varchar(255) NOT NULL,
  `select_provincia` varchar(255) NOT NULL,
  `select_comuna` varchar(255) NOT NULL,
  `radio_procedencia` varchar(255) NOT NULL,
  `input_localidad_indigena` varchar(255) DEFAULT NULL,
  `select_origen_etnico` varchar(255) NOT NULL,
  `select_ingreso_familiar` varchar(255) NOT NULL,
  `select_residencia_regular` varchar(255) NOT NULL,
  `select_hijo` varchar(255) NOT NULL,
  `select_ultimcurso_aprobado` varchar(255) NOT NULL,
  `input_anio_ultimocurso` varchar(255) NOT NULL,
  `select_actesc_encurso` varchar(255) NOT NULL,
  `select_tipo_asistencia` varchar(255) NOT NULL,
  `select_asistencia_pconace` varchar(255) NOT NULL,
  `select_tipo_pconace` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `select_nacionalidad` varchar(254) NOT NULL,
  `input_domicilio` varchar(254) NOT NULL,
  PRIMARY KEY (`id_encuestado`),
  KEY `id_user_responsable_principal` (`id_user_responsable_principal`),
  KEY `id_user_responsable_secundario` (`id_user_responsable_secundario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Volcar la base de datos para la tabla `encuestado`
--

INSERT INTO `encuestado` (`id_encuestado`, `id_user_responsable_principal`, `select_user_responsable_secundario1`, `id_user_responsable_secundario`, `input_run_nconverificador`, `input_primer_nombre`, `input_otros_nombres`, `input_primer_apellido`, `input_segundo_apellido`, `radio_sexo`, `input_fnacimiento`, `select_region`, `select_provincia`, `select_comuna`, `radio_procedencia`, `input_localidad_indigena`, `select_origen_etnico`, `select_ingreso_familiar`, `select_residencia_regular`, `select_hijo`, `select_ultimcurso_aprobado`, `input_anio_ultimocurso`, `select_actesc_encurso`, `select_tipo_asistencia`, `select_asistencia_pconace`, `select_tipo_pconace`, `created_at`, `updated_at`, `select_nacionalidad`, `input_domicilio`) VALUES
(5, 2, 0, NULL, '155079622', 'Gustavo', 'Anibal', 'Lacoste', '', 'on', '2008-05-06 00:00:00', '6', '62', '6201', 'on', 'qweqe', 'Mapuche', '$500.000 a $900.000', 'Padre', 'No', '2º Básico', '2008', '4º Básico', 'Asiste regularmente', 'Sanción accesoria', 'Programa Ambulatorio Intensivo', '2010-11-15 23:54:00', '2010-11-15 23:54:00', '', ''),
(6, 2, 0, 2, '180810129', 'Gustavo', 'Anibal', 'Lacoste', '', 'on', '2008-05-06 00:00:00', '6', '62', '6201', 'on', 'qweqe', 'Mapuche', '$500.000 a $900.000', 'Padre', 'No', '2º Básico', '2008', '4º Básico', 'Asiste regularmente', 'Sanción accesoria', 'Programa Ambulatorio Intensivo', '2010-11-15 23:55:25', '2010-11-15 23:55:25', '', ''),
(10, 2, 0, NULL, '18022162K', 'Gustavo', 'Anibal', 'Lacoste', '', 'on', '2008-05-06 00:00:00', '6', '62', '6201', 'on', 'qweqe', 'Mapuche', '$500.000 a $900.000', 'Padre', 'No', '2º Básico', '2008', '4º Básico', 'Asiste regularmente', 'Sanción accesoria', 'Programa Ambulatorio Intensivo', '2010-11-16 00:02:06', '2010-11-16 00:02:06', '', ''),
(11, 2, 0, NULL, '181884711', 'Julio', 'Manuel', 'Cortés', '', 'on', '2008-05-06 00:00:00', '6', '62', '6201', 'on', 'qweqe', 'Mapuche', '$500.000 a $900.000', 'Padre', 'No', '2º Básico', '2008', '4º Básico', 'Asiste regularmente', 'Sanción accesoria', 'Programa Ambulatorio Intensivo', '2010-11-16 01:46:22', '2010-11-16 01:46:22', '', ''),
(13, 2, 0, NULL, '14756886k', 'Hector', 'Julio', 'Ramirez', 'Sagredo', 'on', '2008-05-03 00:00:00', '9', '92', '9203', 'on', 'wdaweqeqweq', 'Chileno', '$150.000 a $300.000', 'Madre', 'No', '6º Básico', '2005', '2º Básico', 'Asiste en forma interrumpida', 'Asistencia voluntaria', 'Programa Ambulatorio Intensivo', '2010-11-18 03:06:54', '2010-11-18 03:06:54', '', ''),
(14, 2, 0, NULL, '89046645', 'Juan', 'Marcelo', 'Reyes', 'Albornoz', 'on', '1971-07-13 00:00:00', '10', '101', '', 'on', 'Puerto Montt', 'Chileno', 'Menos de $150.000', 'Solo', 'Si', 'Termino enseñanza media completa', '1990', 'Fuera del sistema escolar', 'Termino enseñanza media completa', 'Asistencia voluntaria', 'Corta estadía', '2011-03-29 10:47:58', '2011-03-29 10:47:58', '', ''),
(15, 3, 0, NULL, '167741517', 'Absalon', 'Eleazar', 'Valdés', 'Ormeño', 'on', '1988-02-02 00:00:00', '8', '81', '8107', 'on', 'Penco', 'Chileno', 'Menos de $150.000', 'Ambos Padres', 'Si', 'Superior (instituto profesional y universidad)', '2011', 'Superior (instituto profesional y universidad)', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '2011-05-06 03:49:44', '2011-05-06 03:49:44', '', ''),
(107, 3, 2, NULL, '123123123', '111', '1111', '1111', '111', 'on', '2000-12-21 00:00:00', '3', '32', '3202', 'on', '1123', 'Mapuche', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '2000', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(108, 2, 3, NULL, '63736945', 'Joaquín', 'José', 'Lavín', 'Infante', 'on', '0000-00-00 00:00:00', '1', '14', '1401', 'on', '123123', 'Pascuense', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '2000', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(109, 2, 4, NULL, '56.789.01', 'coev', 'coev', 'coev', 'coev', 'on', '0000-00-00 00:00:00', '13', '132', '13202', 'on', 'lalaa', 'Chileno', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '2000', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(110, 2, 0, NULL, '', 'Primer Nombre', 'Otros Nombres', 'Primer Apellido', 'Segundo Apellido', '', '0000-00-00 00:00:00', 'none', '', '', '', 'Favor especifíque la comunidad', 'Chileno', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(111, 2, 0, NULL, '456456456', 'Julio', 'Idiotis', 'Ortega', 'Campos', 'on', '2005-06-05 00:00:00', '9', '92', '9203', 'on', 'COMUÑIQUEN', 'Chileno', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '2010', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Chilena', 'micalle 629'),
(112, 2, 3, NULL, '163027127', 'probando', 'instrumentos', 'asd', 'asd', 'on', '2005-06-05 00:00:00', '1', '14', '1403', 'on', 'asdasd', 'Kawésqar', '$150.000 a $300.000', 'Padre', 'Si', '1º Básico', '2011', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Peruana', 'asdasd'),
(113, 2, 4, NULL, '567567567', '12312', '123123', '123213', '123123', 'on', '2005-06-05 00:00:00', '2', '22', '2202', 'on', '123123', 'Chileno', 'Menos de $150.000', 'Ambos Padres', 'Si', '1º Básico', '2011', '1º Básico', 'Termino enseñanza media completa', 'No', 'Programa Ambulatorio Intensivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Chilena', '123123'),
(114, 2, 3, NULL, '789789789', 'prueba concenso', 'prueba concenso', 'concenso', 'concenso', 'on', '0000-00-00 00:00:00', '1', '14', '1402', 'on', '123123', 'Quechua', '$300.000 a $500.000', 'Solo', 'Si', '2º Medio Técnico Profesional', '1999', '2º Básico', 'Asiste en forma interrumpida', 'Asistencia voluntaria', 'Corta estadía', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Boliviana', '123123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestado_actinputado`
--

CREATE TABLE IF NOT EXISTS `encuestado_actinputado` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `input_fecha_inicio_investigacion3` date NOT NULL,
  `input_plazo_investigacion3` date NOT NULL,
  `select_tribunal3` varchar(254) NOT NULL,
  `select_tipo_materia3` int(10) NOT NULL,
  `select_causa_delito3` int(10) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `input_ruk3` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `select_causa_delito3` (`select_causa_delito3`),
  KEY `select_tipo_materia3` (`select_tipo_materia3`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `encuestado_actinputado`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestado_canteriores`
--

CREATE TABLE IF NOT EXISTS `encuestado_canteriores` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `input_fecha_inicio_condena2` datetime NOT NULL,
  `input_fecha_termino_condena2` datetime NOT NULL,
  `select_tribunal2` varchar(254) NOT NULL,
  `select_tipo_materia2` varchar(255) NOT NULL,
  `select_causa_delito2` varchar(255) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `input_ruk2` varchar(254) NOT NULL,
  `input_fecha_detencion2` varchar(254) NOT NULL,
  `input_fecha_control_detencion2` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_encuestado` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `encuestado_canteriores`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestado_sanciones`
--

CREATE TABLE IF NOT EXISTS `encuestado_sanciones` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `select_sistema_atencion` varchar(255) NOT NULL,
  `input_nombre_programa` varchar(255) NOT NULL,
  `select_ciudad_programa` varchar(255) NOT NULL,
  `input_tiempo_total_condena` int(10) NOT NULL,
  `input_fecha_inicio_condena` datetime NOT NULL,
  `select_tipo_materia` varchar(255) NOT NULL,
  `select_causa_delito` varchar(255) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `select_tipo_tiempo_total_condena` varchar(255) NOT NULL,
  `input_ruk` varchar(254) NOT NULL,
  `input_fecha_detencion` varchar(254) NOT NULL,
  `input_fecha_control_detencion` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_encuestado` (`id_encuestado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `encuestado_sanciones`
--

INSERT INTO `encuestado_sanciones` (`id`, `select_sistema_atencion`, `input_nombre_programa`, `select_ciudad_programa`, `input_tiempo_total_condena`, `input_fecha_inicio_condena`, `select_tipo_materia`, `select_causa_delito`, `id_encuestado`, `select_tipo_tiempo_total_condena`, `input_ruk`, `input_fecha_detencion`, `input_fecha_control_detencion`) VALUES
(1, 'ddddddddddddddd', 'ddddddddddddddd', '4', 45, '2008-07-15 13:16:00', 'ddddddddd', 'dddddddddddd', 5, 'ssssssssssss', 'sssssssss', 'ssssssssssss', 'sssssssssssssssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista_respuestas`
--

CREATE TABLE IF NOT EXISTS `entrevista_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `entrevista_respuestas_ibfk_5` (`id_user`),
  KEY `entrevista_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `entrevista_respuestas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_instrumentos`
--

CREATE TABLE IF NOT EXISTS `estados_instrumentos` (
  `id_reg_ins` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_encuestado` bigint(20) NOT NULL,
  `sigla_instrumento` varchar(10) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `tiempo_total_utilizado` time DEFAULT NULL,
  `modalidad_respuesta` varchar(20) NOT NULL,
  PRIMARY KEY (`id_reg_ins`),
  UNIQUE KEY `id_encuestado_2` (`id_encuestado`,`sigla_instrumento`,`id_user`,`modalidad_respuesta`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `estados_instrumentos`
--

INSERT INTO `estados_instrumentos` (`id_reg_ins`, `id_encuestado`, `sigla_instrumento`, `id_user`, `estado`, `fecha_inicio`, `fecha_cierre`, `tiempo_total_utilizado`, `modalidad_respuesta`) VALUES
(2, 11, 'IRNC', 2, 'CERRADO', '2011-01-18 06:11:05', '2011-01-14 06:30:36', '00:00:20', 'SOLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fcmf_respuestas`
--

CREATE TABLE IF NOT EXISTS `fcmf_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `fcmf_respuestas`
--

INSERT INTO `fcmf_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('11a1', '', 2, 108, 0),
('11a2', '', 2, 108, 0),
('11a3', '', 2, 108, 0),
('11a4', '', 2, 108, 0),
('11a5', '', 2, 108, 0),
('11a6', '', 2, 108, 0),
('11a7', '', 2, 108, 0),
('11asuma', '', 2, 108, 0),
('11a', '', 2, 108, 0),
('11b1', '', 2, 108, 0),
('11b2', '', 2, 108, 0),
('11b3', '', 2, 108, 0),
('11b41', '', 2, 108, 0),
('11b42', '', 2, 108, 0),
('11b43', '', 2, 108, 0),
('11b4', '', 2, 108, 0),
('11b5', '', 2, 108, 0),
('11b6', '', 2, 108, 0),
('11b7', '', 2, 108, 0),
('11bsuma', '', 2, 108, 0),
('11b', '', 2, 108, 0),
('11c1', '', 2, 108, 0),
('11c2', '', 2, 108, 0),
('11c3', '', 2, 108, 0),
('11c4', '', 2, 108, 0),
('11c5', '', 2, 108, 0),
('11csuma', '', 2, 108, 0),
('11c', '', 2, 108, 0),
('11d', '', 2, 108, 0),
('11suma', '', 2, 108, 0),
('11', '', 2, 108, 0),
('12a1', '', 2, 108, 0),
('12a2', '', 2, 108, 0),
('12a3', '', 2, 108, 0),
('12asuma', '', 2, 108, 0),
('12a', '', 2, 108, 0),
('12b', '', 2, 108, 0),
('12c', '', 2, 108, 0),
('12d1', '', 2, 108, 0),
('12d2', '', 2, 108, 0),
('12dsuma', '', 2, 108, 0),
('12d', '', 2, 108, 0),
('12suma', '', 2, 108, 0),
('12', '', 2, 108, 0),
('21a11', '', 2, 108, 0),
('21a12', '', 2, 108, 0),
('21a1', '', 2, 108, 0),
('21a21', '', 2, 108, 0),
('21a22', '', 2, 108, 0),
('21a2', '', 2, 108, 0),
('21a3', '', 2, 108, 0),
('21a4', '', 2, 108, 0),
('21asuma', '', 2, 108, 0),
('21a', '', 2, 108, 0),
('21b1', '', 2, 108, 0),
('21b21', '', 2, 108, 0),
('21b22', '', 2, 108, 0),
('21b2', '', 2, 108, 0),
('21b31', '', 2, 108, 0),
('21b32', '', 2, 108, 0),
('21b3', '', 2, 108, 0),
('21bsuma', '', 2, 108, 0),
('21b', '', 2, 108, 0),
('21c1', '', 2, 108, 0),
('21c2', '', 2, 108, 0),
('21c3', '', 2, 108, 0),
('21csuma', '', 2, 108, 0),
('21c', '', 2, 108, 0),
('21d1', '', 2, 108, 0),
('21d2', '', 2, 108, 0),
('21d3', '', 2, 108, 0),
('21d4', '', 2, 108, 0),
('21dsuma', '', 2, 108, 0),
('21d', '', 2, 108, 0),
('21suma', '', 2, 108, 0),
('21', '', 2, 108, 0),
('22a11', '', 2, 108, 0),
('22a12', '', 2, 108, 0),
('22a1', '', 2, 108, 0),
('22a21', '', 2, 108, 0),
('22a22', '', 2, 108, 0),
('22a2', '', 2, 108, 0),
('22a31', '', 2, 108, 0),
('22a32', '', 2, 108, 0),
('22a3', '', 2, 108, 0),
('22a41', '', 2, 108, 0),
('22a42', '', 2, 108, 0),
('22a4', '', 2, 108, 0),
('22asuma', '', 2, 108, 0),
('22a', '', 2, 108, 0),
('22b1', '', 2, 108, 0),
('22b2', '', 2, 108, 0),
('22b3', '', 2, 108, 0),
('22b41', '', 2, 108, 0),
('22b42', '', 2, 108, 0),
('22b4', '', 2, 108, 0),
('22bsuma', '', 2, 108, 0),
('22b', '', 2, 108, 0),
('22c1', '', 2, 108, 0),
('22c2', '', 2, 108, 0),
('22c3', '', 2, 108, 0),
('22c4', '', 2, 108, 0),
('22csuma', '', 2, 108, 0),
('22c', '', 2, 108, 0),
('22d1', '', 2, 108, 0),
('22d2', '', 2, 108, 0),
('22d3', '', 2, 108, 0),
('22dsuma', '', 2, 108, 0),
('22d', '', 2, 108, 0),
('22suma', '', 2, 108, 0),
('22', '', 2, 108, 0),
('cdelic', '', 2, 108, 0),
('csocial', '', 2, 108, 0),
('sumafinal', '', 2, 108, 0),
('indicecrim', '', 2, 108, 0),
('indicecrim', '', 2, 108, 0),
('CLOSE_FLAG', 'CERRADO', 2, 108, 0),
('tstart', '06:43:30', 2, 108, 0),
('tstart', '06:37:02', 2, 108, 0),
('tstart', '06:37:02', 2, 108, 0),
('idEncuestado', '108', 2, 108, 0),
('11a1', '', 3, 108, 0),
('11a2', '', 3, 108, 0),
('11a3', '', 3, 108, 0),
('11a4', '', 3, 108, 0),
('11a5', '', 3, 108, 0),
('11a6', '', 3, 108, 0),
('11a7', '', 3, 108, 0),
('11asuma', '', 3, 108, 0),
('11a', '', 3, 108, 0),
('11b1', '', 3, 108, 0),
('11b2', '', 3, 108, 0),
('11b3', '', 3, 108, 0),
('11b41', '', 3, 108, 0),
('11b42', '', 3, 108, 0),
('11b43', '', 3, 108, 0),
('11b4', '', 3, 108, 0),
('11b5', '', 3, 108, 0),
('11b6', '', 3, 108, 0),
('11b7', '', 3, 108, 0),
('11bsuma', '', 3, 108, 0),
('11b', '', 3, 108, 0),
('11c1', '', 3, 108, 0),
('11c2', '', 3, 108, 0),
('11c3', '', 3, 108, 0),
('11c4', '', 3, 108, 0),
('11c5', '', 3, 108, 0),
('11csuma', '', 3, 108, 0),
('11c', '', 3, 108, 0),
('11d', '', 3, 108, 0),
('11suma', '', 3, 108, 0),
('11', '', 3, 108, 0),
('12a1', '', 3, 108, 0),
('12a2', '', 3, 108, 0),
('12a3', '', 3, 108, 0),
('12asuma', '', 3, 108, 0),
('12a', '', 3, 108, 0),
('12b', '', 3, 108, 0),
('12c', '', 3, 108, 0),
('12d1', '', 3, 108, 0),
('12d2', '', 3, 108, 0),
('12dsuma', '', 3, 108, 0),
('12d', '', 3, 108, 0),
('12suma', '', 3, 108, 0),
('12', '', 3, 108, 0),
('21a11', '', 3, 108, 0),
('21a12', '', 3, 108, 0),
('21a1', '', 3, 108, 0),
('21a21', '', 3, 108, 0),
('21a22', '', 3, 108, 0),
('21a2', '', 3, 108, 0),
('21a3', '', 3, 108, 0),
('21a4', '', 3, 108, 0),
('21asuma', '', 3, 108, 0),
('21a', '', 3, 108, 0),
('21b1', '', 3, 108, 0),
('21b21', '', 3, 108, 0),
('21b22', '', 3, 108, 0),
('21b2', '', 3, 108, 0),
('21b31', '', 3, 108, 0),
('21b32', '', 3, 108, 0),
('21b3', '', 3, 108, 0),
('21bsuma', '', 3, 108, 0),
('21b', '', 3, 108, 0),
('21c1', '', 3, 108, 0),
('21c2', '', 3, 108, 0),
('21c3', '', 3, 108, 0),
('21csuma', '', 3, 108, 0),
('21c', '', 3, 108, 0),
('21d1', '', 3, 108, 0),
('21d2', '', 3, 108, 0),
('21d3', '', 3, 108, 0),
('21d4', '', 3, 108, 0),
('21dsuma', '', 3, 108, 0),
('21d', '', 3, 108, 0),
('21suma', '', 3, 108, 0),
('21', '', 3, 108, 0),
('22a11', '', 3, 108, 0),
('22a12', '', 3, 108, 0),
('22a1', '', 3, 108, 0),
('22a21', '', 3, 108, 0),
('22a22', '', 3, 108, 0),
('22a2', '', 3, 108, 0),
('22a31', '', 3, 108, 0),
('22a32', '', 3, 108, 0),
('22a3', '', 3, 108, 0),
('22a41', '', 3, 108, 0),
('22a42', '', 3, 108, 0),
('22a4', '', 3, 108, 0),
('22asuma', '', 3, 108, 0),
('22a', '', 3, 108, 0),
('22b1', '', 3, 108, 0),
('22b2', '', 3, 108, 0),
('22b3', '', 3, 108, 0),
('22b41', '', 3, 108, 0),
('22b42', '', 3, 108, 0),
('22b4', '', 3, 108, 0),
('22bsuma', '', 3, 108, 0),
('22b', '', 3, 108, 0),
('22c1', '', 3, 108, 0),
('22c2', '', 3, 108, 0),
('22c3', '', 3, 108, 0),
('22c4', '', 3, 108, 0),
('22csuma', '', 3, 108, 0),
('22c', '', 3, 108, 0),
('22d1', '', 3, 108, 0),
('22d2', '', 3, 108, 0),
('22d3', '', 3, 108, 0),
('22dsuma', '', 3, 108, 0),
('22d', '', 3, 108, 0),
('22suma', '', 3, 108, 0),
('22', '', 3, 108, 0),
('cdelic', '', 3, 108, 0),
('csocial', '', 3, 108, 0),
('sumafinal', '', 3, 108, 0),
('indicecrim', '', 3, 108, 0),
('CLOSE_FLAG', 'CERRADO', 3, 108, 0),
('tstart', '06:37:31', 3, 108, 0),
('tstart', '06:37:31', 3, 108, 0),
('tstart', '06:37:31', 3, 108, 0),
('idEncuestado', '108', 3, 108, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ferr2`
--

CREATE TABLE IF NOT EXISTS `ferr2` (
  `id_respuesta` char(255) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_encuestado` int(4) NOT NULL,
  `respuesta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `ferr2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ferr2_respuestas`
--

CREATE TABLE IF NOT EXISTS `ferr2_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `ferr2_respuestas`
--

INSERT INTO `ferr2_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('edad_inicio', '0', 2, 113, 0),
('A1', '0', 2, 113, 0),
('B1', '0', 2, 113, 0),
('C1', '0', 2, 113, 0),
('D1', '0', 2, 113, 0),
('E1', '0', 2, 113, 0),
('F1', '0', 2, 113, 0),
('G1', '0', 2, 113, 0),
('H1', '0', 2, 113, 0),
('I1', '0', 2, 113, 0),
('J1', '0', 2, 113, 0),
('K1', '0', 2, 113, 0),
('L1', '0', 2, 113, 0),
('M1', '0', 2, 113, 0),
('A2', '0', 2, 113, 0),
('B2', '0', 2, 113, 0),
('C2', '0', 2, 113, 0),
('D2', '0', 2, 113, 0),
('E2', '0', 2, 113, 0),
('F2', '0', 2, 113, 0),
('G2', '0', 2, 113, 0),
('H2', '0', 2, 113, 0),
('I2', '0', 2, 113, 0),
('J2', '0', 2, 113, 0),
('K2', '0', 2, 113, 0),
('L2', '0', 2, 113, 0),
('M2', '0', 2, 113, 0),
('A3', '0', 2, 113, 0),
('B3', '0', 2, 113, 0),
('C3', '0', 2, 113, 0),
('D3', '0', 2, 113, 0),
('E3', '0', 2, 113, 0),
('F3', '0', 2, 113, 0),
('G3', '0', 2, 113, 0),
('H3', '0', 2, 113, 0),
('I3', '0', 2, 113, 0),
('J3', '0', 2, 113, 0),
('K3', '0', 2, 113, 0),
('L3', '0', 2, 113, 0),
('M3', '0', 2, 113, 0),
('A4', '0', 2, 113, 0),
('B4', '0', 2, 113, 0),
('C4', '0', 2, 113, 0),
('D4', '0', 2, 113, 0),
('E4', '0', 2, 113, 0),
('F4', '0', 2, 113, 0),
('G4', '0', 2, 113, 0),
('H4', '0', 2, 113, 0),
('I4', '0', 2, 113, 0),
('J4', '0', 2, 113, 0),
('K4', '0', 2, 113, 0),
('L4', '0', 2, 113, 0),
('M4', '0', 2, 113, 0),
('A5', '0', 2, 113, 0),
('B5', '0', 2, 113, 0),
('C5', '0', 2, 113, 0),
('D5', '0', 2, 113, 0),
('E5', '0', 2, 113, 0),
('F5', '0', 2, 113, 0),
('G5', '0', 2, 113, 0),
('H5', '0', 2, 113, 0),
('I5', '0', 2, 113, 0),
('J5', '0', 2, 113, 0),
('K5', '0', 2, 113, 0),
('L5', '0', 2, 113, 0),
('M5', '0', 2, 113, 0),
('A6', '0', 2, 113, 0),
('B6', '0', 2, 113, 0),
('C6', '0', 2, 113, 0),
('D6', '0', 2, 113, 0),
('E6', '0', 2, 113, 0),
('F6', '0', 2, 113, 0),
('G6', '0', 2, 113, 0),
('H6', '0', 2, 113, 0),
('I6', '0', 2, 113, 0),
('J6', '0', 2, 113, 0),
('K6', '0', 2, 113, 0),
('L6', '0', 2, 113, 0),
('M6', '0', 2, 113, 0),
('A7', '0', 2, 113, 0),
('B7', '0', 2, 113, 0),
('C7', '0', 2, 113, 0),
('D7', '0', 2, 113, 0),
('E7', '0', 2, 113, 0),
('F7', '0', 2, 113, 0),
('G7', '0', 2, 113, 0),
('H7', '0', 2, 113, 0),
('I7', '0', 2, 113, 0),
('J7', '0', 2, 113, 0),
('K7', '0', 2, 113, 0),
('L7', '0', 2, 113, 0),
('M7', '0', 2, 113, 0),
('A8', '0', 2, 113, 0),
('B8', '0', 2, 113, 0),
('C8', '0', 2, 113, 0),
('D8', '0', 2, 113, 0),
('E8', '0', 2, 113, 0),
('F8', '0', 2, 113, 0),
('G8', '0', 2, 113, 0),
('H8', '0', 2, 113, 0),
('I8', '0', 2, 113, 0),
('J8', '0', 2, 113, 0),
('K8', '0', 2, 113, 0),
('L8', '0', 2, 113, 0),
('M8', '0', 2, 113, 0),
('A9', '0', 2, 113, 0),
('B9', '0', 2, 113, 0),
('C9', '0', 2, 113, 0),
('D9', '0', 2, 113, 0),
('E9', '0', 2, 113, 0),
('F9', '0', 2, 113, 0),
('G9', '0', 2, 113, 0),
('H9', '0', 2, 113, 0),
('I9', '0', 2, 113, 0),
('J9', '0', 2, 113, 0),
('K9', '0', 2, 113, 0),
('L9', '0', 2, 113, 0),
('M9', '0', 2, 113, 0),
('A10', '0', 2, 113, 0),
('B10', '0', 2, 113, 0),
('C10', '0', 2, 113, 0),
('D10', '0', 2, 113, 0),
('E10', '0', 2, 113, 0),
('F10', '0', 2, 113, 0),
('G10', '0', 2, 113, 0),
('H10', '0', 2, 113, 0),
('I10', '0', 2, 113, 0),
('J10', '0', 2, 113, 0),
('K10', '0', 2, 113, 0),
('L10', '0', 2, 113, 0),
('M10', '0', 2, 113, 0),
('A11', '0', 2, 113, 0),
('B11', '0', 2, 113, 0),
('C11', '0', 2, 113, 0),
('D11', '0', 2, 113, 0),
('E11', '0', 2, 113, 0),
('F11', '0', 2, 113, 0),
('G11', '0', 2, 113, 0),
('H11', '0', 2, 113, 0),
('I11', '0', 2, 113, 0),
('J11', '0', 2, 113, 0),
('K11', '0', 2, 113, 0),
('L11', '0', 2, 113, 0),
('anos_desaptacion', '0', 2, 113, 0),
('A12', '0', 2, 113, 0),
('B12', '0', 2, 113, 0),
('C12', '0', 2, 113, 0),
('D12', '0', 2, 113, 0),
('E12', '0', 2, 113, 0),
('F12', '0', 2, 113, 0),
('G12', '0', 2, 113, 0),
('H12', '0', 2, 113, 0),
('I12', '0', 2, 113, 0),
('J12', '0', 2, 113, 0),
('K12', '0', 2, 113, 0),
('L12', '0', 2, 113, 0),
('observaciones_otrosdelitos', '', 2, 113, 0),
('polimorfismo', 'No', 2, 113, 0),
('RCR_TPD', '0', 2, 113, 0),
('RCR_TDIF', '0', 2, 113, 0),
('edelictiva', 'No', 2, 113, 0),
('RCR_IEDSD', '0', 2, 113, 0),
('RCR_IEDSP', '0', 2, 113, 0),
('coment_tipoconductasdelictivas', '', 2, 113, 0),
('file', '', 2, 113, 0),
('pconlasquevive_comentario', '', 2, 113, 0),
('vsignificativosautoreportados_comentario', '', 2, 113, 0),
('autoreporte_comentario', '', 2, 113, 0),
('F3_1_frecuencia', '0', 2, 113, 0),
('F3_1_edad', '0', 2, 113, 0),
('F3_1_comentario', '', 2, 113, 0),
('F3_2_frecuencia', '0', 2, 113, 0),
('F3_2_comentario', '', 2, 113, 0),
('F3_3_frecuencia', '0', 2, 113, 0),
('F3_3_edad', '0', 2, 113, 0),
('F3_3_comentario', '', 2, 113, 0),
('F3_5_frecuencia', '0', 2, 113, 0),
('F3_5_edad', '0', 2, 113, 0),
('F3_5_comentario', '', 2, 113, 0),
('F3_6_frecuencia', '0', 2, 113, 0),
('F3_6_edad', '0', 2, 113, 0),
('F3_6_comentario', '', 2, 113, 0),
('F3_OTRO', '', 2, 113, 0),
('F3_nroderivaciones_a_programas', '0', 2, 113, 0),
('f4a', 'no_seleccionado', 2, 113, 0),
('f4b', 'no_seleccionado', 2, 113, 0),
('f4c', 'no_seleccionado', 2, 113, 0),
('f4d', 'no_seleccionado', 2, 113, 0),
('f5a', 'no_seleccionado', 2, 113, 0),
('f5b', 'no_seleccionado', 2, 113, 0),
('f5c', 'no_seleccionado', 2, 113, 0),
('f5d', 'no_seleccionado', 2, 113, 0),
('f5e', 'no_seleccionado', 2, 113, 0),
('f5f', 'no_seleccionado', 2, 113, 0),
('f5g', 'no_seleccionado', 2, 113, 0),
('f5h', 'no_seleccionado', 2, 113, 0),
('f5i', 'no_seleccionado', 2, 113, 0),
('f5j', 'no_seleccionado', 2, 113, 0),
('f6a', 'no_seleccionado', 2, 113, 0),
('f6b', 'no_seleccionado', 2, 113, 0),
('f6c', 'no_seleccionado', 2, 113, 0),
('f6d', 'no_seleccionado', 2, 113, 0),
('f6e', 'no_seleccionado', 2, 113, 0),
('f7a', 'no_seleccionado', 2, 113, 0),
('f7b', 'no_seleccionado', 2, 113, 0),
('f7c', 'no_seleccionado', 2, 113, 0),
('f7d', 'no_seleccionado', 2, 113, 0),
('f7e', 'no_seleccionado', 2, 113, 0),
('f7f', 'no_seleccionado', 2, 113, 0),
('f7g', 'no_seleccionado', 2, 113, 0),
('f7h', 'no_seleccionado', 2, 113, 0),
('f7i', 'no_seleccionado', 2, 113, 0),
('f7j', 'no_seleccionado', 2, 113, 0),
('f7k', 'no_seleccionado', 2, 113, 0),
('f7l', 'no_seleccionado', 2, 113, 0),
('f7m', 'no_seleccionado', 2, 113, 0),
('f7n', 'no_seleccionado', 2, 113, 0),
('f7o', 'no_seleccionado', 2, 113, 0),
('f7p', 'no_seleccionado', 2, 113, 0),
('f7q', 'no_seleccionado', 2, 113, 0),
('f8a', 'no_seleccionado', 2, 113, 0),
('f8b', 'no_seleccionado', 2, 113, 0),
('f8c', 'no_seleccionado', 2, 113, 0),
('f8d', 'no_seleccionado', 2, 113, 0),
('f8e', 'no_seleccionado', 2, 113, 0),
('f9a', 'no_seleccionado', 2, 113, 0),
('f9b', 'no_seleccionado', 2, 113, 0),
('f9c', 'no_seleccionado', 2, 113, 0),
('f9d', 'no_seleccionado', 2, 113, 0),
('f9e', 'no_seleccionado', 2, 113, 0),
('f9f', 'no_seleccionado', 2, 113, 0),
('f10a', 'no_seleccionado', 2, 113, 0),
('f10b', 'no_seleccionado', 2, 113, 0),
('f10c', 'no_seleccionado', 2, 113, 0),
('f10d', 'no_seleccionado', 2, 113, 0),
('f10e', 'no_seleccionado', 2, 113, 0),
('f10f', 'no_seleccionado', 2, 113, 0),
('f10g', 'no_seleccionado', 2, 113, 0),
('f11a', 'no_seleccionado', 2, 113, 0),
('f11b', 'no_seleccionado', 2, 113, 0),
('f11c', 'no_seleccionado', 2, 113, 0),
('f11d', 'no_seleccionado', 2, 113, 0),
('f11e', 'no_seleccionado', 2, 113, 0),
('f11f', 'no_seleccionado', 2, 113, 0),
('f11g', 'no_seleccionado', 2, 113, 0),
('f11h', 'no_seleccionado', 2, 113, 0),
('f11i', 'no_seleccionado', 2, 113, 0),
('f11j', 'no_seleccionado', 2, 113, 0),
('f11k', 'no_seleccionado', 2, 113, 0),
('f11l', 'no_seleccionado', 2, 113, 0),
('f11m', 'no_seleccionado', 2, 113, 0),
('f11n', 'no_seleccionado', 2, 113, 0),
('f11n', 'no_seleccionado', 2, 113, 0),
('CLOSE_FLAG', 'NOCERRADO', 2, 113, 0),
('tstart', '21:02:55', 2, 113, 0),
('tstart', '21:02:55', 2, 113, 0),
('tstart', '21:02:55', 2, 113, 0),
('idEncuestado', '113', 2, 113, 0),
('edad_inicio', '0', 2, 10, 0),
('A1', '0', 2, 10, 0),
('B1', '0', 2, 10, 0),
('C1', '0', 2, 10, 0),
('D1', '0', 2, 10, 0),
('E1', '0', 2, 10, 0),
('F1', '0', 2, 10, 0),
('G1', '0', 2, 10, 0),
('H1', '0', 2, 10, 0),
('I1', '0', 2, 10, 0),
('J1', '0', 2, 10, 0),
('K1', '0', 2, 10, 0),
('L1', '0', 2, 10, 0),
('M1', '0', 2, 10, 0),
('A2', '0', 2, 10, 0),
('B2', '0', 2, 10, 0),
('C2', '0', 2, 10, 0),
('D2', '0', 2, 10, 0),
('E2', '0', 2, 10, 0),
('F2', '0', 2, 10, 0),
('G2', '0', 2, 10, 0),
('H2', '0', 2, 10, 0),
('I2', '0', 2, 10, 0),
('J2', '0', 2, 10, 0),
('K2', '0', 2, 10, 0),
('L2', '0', 2, 10, 0),
('M2', '0', 2, 10, 0),
('A3', '0', 2, 10, 0),
('B3', '0', 2, 10, 0),
('C3', '0', 2, 10, 0),
('D3', '0', 2, 10, 0),
('E3', '0', 2, 10, 0),
('F3', '0', 2, 10, 0),
('G3', '0', 2, 10, 0),
('H3', '0', 2, 10, 0),
('I3', '0', 2, 10, 0),
('J3', '0', 2, 10, 0),
('K3', '0', 2, 10, 0),
('L3', '0', 2, 10, 0),
('M3', '0', 2, 10, 0),
('A4', '0', 2, 10, 0),
('B4', '0', 2, 10, 0),
('C4', '0', 2, 10, 0),
('D4', '0', 2, 10, 0),
('E4', '0', 2, 10, 0),
('F4', '0', 2, 10, 0),
('G4', '0', 2, 10, 0),
('H4', '0', 2, 10, 0),
('I4', '0', 2, 10, 0),
('J4', '0', 2, 10, 0),
('K4', '0', 2, 10, 0),
('L4', '0', 2, 10, 0),
('M4', '0', 2, 10, 0),
('A5', '0', 2, 10, 0),
('B5', '0', 2, 10, 0),
('C5', '0', 2, 10, 0),
('D5', '0', 2, 10, 0),
('E5', '0', 2, 10, 0),
('F5', '0', 2, 10, 0),
('G5', '0', 2, 10, 0),
('H5', '0', 2, 10, 0),
('I5', '0', 2, 10, 0),
('J5', '0', 2, 10, 0),
('K5', '0', 2, 10, 0),
('L5', '0', 2, 10, 0),
('M5', '0', 2, 10, 0),
('A6', '0', 2, 10, 0),
('B6', '0', 2, 10, 0),
('C6', '0', 2, 10, 0),
('D6', '0', 2, 10, 0),
('E6', '0', 2, 10, 0),
('F6', '0', 2, 10, 0),
('G6', '0', 2, 10, 0),
('H6', '0', 2, 10, 0),
('I6', '0', 2, 10, 0),
('J6', '0', 2, 10, 0),
('K6', '0', 2, 10, 0),
('L6', '0', 2, 10, 0),
('M6', '0', 2, 10, 0),
('A7', '0', 2, 10, 0),
('B7', '0', 2, 10, 0),
('C7', '0', 2, 10, 0),
('D7', '0', 2, 10, 0),
('E7', '0', 2, 10, 0),
('F7', '0', 2, 10, 0),
('G7', '0', 2, 10, 0),
('H7', '0', 2, 10, 0),
('I7', '0', 2, 10, 0),
('J7', '0', 2, 10, 0),
('K7', '0', 2, 10, 0),
('L7', '0', 2, 10, 0),
('M7', '0', 2, 10, 0),
('A8', '0', 2, 10, 0),
('B8', '0', 2, 10, 0),
('C8', '0', 2, 10, 0),
('D8', '0', 2, 10, 0),
('E8', '0', 2, 10, 0),
('F8', '0', 2, 10, 0),
('G8', '0', 2, 10, 0),
('H8', '0', 2, 10, 0),
('I8', '0', 2, 10, 0),
('J8', '0', 2, 10, 0),
('K8', '0', 2, 10, 0),
('L8', '0', 2, 10, 0),
('M8', '0', 2, 10, 0),
('A9', '0', 2, 10, 0),
('B9', '0', 2, 10, 0),
('C9', '0', 2, 10, 0),
('D9', '0', 2, 10, 0),
('E9', '0', 2, 10, 0),
('F9', '0', 2, 10, 0),
('G9', '0', 2, 10, 0),
('H9', '0', 2, 10, 0),
('I9', '0', 2, 10, 0),
('J9', '0', 2, 10, 0),
('K9', '0', 2, 10, 0),
('L9', '0', 2, 10, 0),
('M9', '0', 2, 10, 0),
('A10', '0', 2, 10, 0),
('B10', '0', 2, 10, 0),
('C10', '0', 2, 10, 0),
('D10', '0', 2, 10, 0),
('E10', '0', 2, 10, 0),
('F10', '0', 2, 10, 0),
('G10', '0', 2, 10, 0),
('H10', '0', 2, 10, 0),
('I10', '0', 2, 10, 0),
('J10', '0', 2, 10, 0),
('K10', '0', 2, 10, 0),
('L10', '0', 2, 10, 0),
('M10', '0', 2, 10, 0),
('A11', '0', 2, 10, 0),
('B11', '0', 2, 10, 0),
('C11', '0', 2, 10, 0),
('D11', '0', 2, 10, 0),
('E11', '0', 2, 10, 0),
('F11', '0', 2, 10, 0),
('G11', '0', 2, 10, 0),
('H11', '0', 2, 10, 0),
('I11', '0', 2, 10, 0),
('J11', '0', 2, 10, 0),
('K11', '0', 2, 10, 0),
('L11', '0', 2, 10, 0),
('anos_desaptacion', '0', 2, 10, 0),
('A12', '0', 2, 10, 0),
('B12', '0', 2, 10, 0),
('C12', '0', 2, 10, 0),
('D12', '0', 2, 10, 0),
('E12', '0', 2, 10, 0),
('F12', '0', 2, 10, 0),
('G12', '0', 2, 10, 0),
('H12', '0', 2, 10, 0),
('I12', '0', 2, 10, 0),
('J12', '0', 2, 10, 0),
('K12', '0', 2, 10, 0),
('L12', '0', 2, 10, 0),
('observaciones_otrosdelitos', '', 2, 10, 0),
('polimorfismo', 'No', 2, 10, 0),
('RCR_TPD', '0', 2, 10, 0),
('RCR_TDIF', '0', 2, 10, 0),
('edelictiva', 'No', 2, 10, 0),
('RCR_IEDSD', '0', 2, 10, 0),
('RCR_IEDSP', '0', 2, 10, 0),
('coment_tipoconductasdelictivas', '', 2, 10, 0),
('file', '', 2, 10, 0),
('pconlasquevive_comentario', '', 2, 10, 0),
('vsignificativosautoreportados_comentario', '', 2, 10, 0),
('autoreporte_comentario', '', 2, 10, 0),
('F3_1_frecuencia', '0', 2, 10, 0),
('F3_1_edad', '0', 2, 10, 0),
('F3_1_comentario', '', 2, 10, 0),
('F3_2_frecuencia', '0', 2, 10, 0),
('F3_2_comentario', '', 2, 10, 0),
('F3_3_frecuencia', '0', 2, 10, 0),
('F3_3_edad', '0', 2, 10, 0),
('F3_3_comentario', '', 2, 10, 0),
('F3_5_frecuencia', '0', 2, 10, 0),
('F3_5_edad', '0', 2, 10, 0),
('F3_5_comentario', '', 2, 10, 0),
('F3_6_frecuencia', '0', 2, 10, 0),
('F3_6_edad', '0', 2, 10, 0),
('F3_6_comentario', '', 2, 10, 0),
('F3_OTRO', '', 2, 10, 0),
('F3_nroderivaciones_a_programas', '0', 2, 10, 0),
('f4a', 'no_seleccionado', 2, 10, 0),
('f4b', 'no_seleccionado', 2, 10, 0),
('f4c', 'no_seleccionado', 2, 10, 0),
('f4d', 'no_seleccionado', 2, 10, 0),
('f5a', 'no_seleccionado', 2, 10, 0),
('f5b', 'no_seleccionado', 2, 10, 0),
('f5c', 'no_seleccionado', 2, 10, 0),
('f5d', 'no_seleccionado', 2, 10, 0),
('f5e', 'no_seleccionado', 2, 10, 0),
('f5f', 'no_seleccionado', 2, 10, 0),
('f5g', 'no_seleccionado', 2, 10, 0),
('f5h', 'no_seleccionado', 2, 10, 0),
('f5i', 'no_seleccionado', 2, 10, 0),
('f5j', 'no_seleccionado', 2, 10, 0),
('f6a', 'no_seleccionado', 2, 10, 0),
('f6b', 'no_seleccionado', 2, 10, 0),
('f6c', 'no_seleccionado', 2, 10, 0),
('f6d', 'no_seleccionado', 2, 10, 0),
('f6e', 'no_seleccionado', 2, 10, 0),
('f7a', 'no_seleccionado', 2, 10, 0),
('f7b', 'no_seleccionado', 2, 10, 0),
('f7c', 'no_seleccionado', 2, 10, 0),
('f7d', 'no_seleccionado', 2, 10, 0),
('f7e', 'no_seleccionado', 2, 10, 0),
('f7f', 'no_seleccionado', 2, 10, 0),
('f7g', 'no_seleccionado', 2, 10, 0),
('f7h', 'no_seleccionado', 2, 10, 0),
('f7i', 'no_seleccionado', 2, 10, 0),
('f7j', 'no_seleccionado', 2, 10, 0),
('f7k', 'no_seleccionado', 2, 10, 0),
('f7l', 'no_seleccionado', 2, 10, 0),
('f7m', 'no_seleccionado', 2, 10, 0),
('f7n', 'no_seleccionado', 2, 10, 0),
('f7o', 'no_seleccionado', 2, 10, 0),
('f7p', 'no_seleccionado', 2, 10, 0),
('f7q', 'no_seleccionado', 2, 10, 0),
('f8a', 'no_seleccionado', 2, 10, 0),
('f8b', 'no_seleccionado', 2, 10, 0),
('f8c', 'no_seleccionado', 2, 10, 0),
('f8d', 'no_seleccionado', 2, 10, 0),
('f8e', 'no_seleccionado', 2, 10, 0),
('f9a', 'no_seleccionado', 2, 10, 0),
('f9b', 'no_seleccionado', 2, 10, 0),
('f9c', 'no_seleccionado', 2, 10, 0),
('f9d', 'no_seleccionado', 2, 10, 0),
('f9e', 'no_seleccionado', 2, 10, 0),
('f9f', 'no_seleccionado', 2, 10, 0),
('f10a', 'no_seleccionado', 2, 10, 0),
('f10b', 'no_seleccionado', 2, 10, 0),
('f10c', 'no_seleccionado', 2, 10, 0),
('f10d', 'no_seleccionado', 2, 10, 0),
('f10e', 'no_seleccionado', 2, 10, 0),
('f10f', 'no_seleccionado', 2, 10, 0),
('f10g', 'no_seleccionado', 2, 10, 0),
('f11a', 'no_seleccionado', 2, 10, 0),
('f11b', 'no_seleccionado', 2, 10, 0),
('f11c', 'no_seleccionado', 2, 10, 0),
('f11d', 'no_seleccionado', 2, 10, 0),
('f11e', 'no_seleccionado', 2, 10, 0),
('f11f', 'no_seleccionado', 2, 10, 0),
('f11g', 'no_seleccionado', 2, 10, 0),
('f11h', 'no_seleccionado', 2, 10, 0),
('f11i', 'no_seleccionado', 2, 10, 0),
('f11j', 'no_seleccionado', 2, 10, 0),
('f11k', 'no_seleccionado', 2, 10, 0),
('f11l', 'no_seleccionado', 2, 10, 0),
('f11m', 'no_seleccionado', 2, 10, 0),
('f11n', 'no_seleccionado', 2, 10, 0),
('CLOSE_FLAG', 'CERRADO', 2, 10, 0),
('tstart', '21:18:31', 2, 10, 0),
('tstart', '21:18:31', 2, 10, 0),
('tstart', '21:18:31', 2, 10, 0),
('idEncuestado', '10', 2, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ferr_preguntas`
--

CREATE TABLE IF NOT EXISTS `ferr_preguntas` (
  `id_pregunta_IRNC` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  `bloque_IRNC` varchar(255) NOT NULL,
  `bloque_num` int(255) NOT NULL,
  PRIMARY KEY (`id_pregunta_IRNC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcar la base de datos para la tabla `ferr_preguntas`
--

INSERT INTO `ferr_preguntas` (`id_pregunta_IRNC`, `num_pregunta`, `texto`, `es_requerido`, `bloque_IRNC`, `bloque_num`) VALUES
(1, 'a', 'Tres (3) o más delitos oficiales en el pasado', 1, 'Infracciones anteriores y actuales / decisión', 1),
(2, 'b', 'Incumplimiento de sanciones impuestas por el juez dos (2) veces o más', 1, 'Infracciones anteriores y actuales / decisión', 1),
(3, 'c', 'Libertad asistida anterior', 1, 'Infracciones anteriores y actuales / decisión', 1),
(4, 'd', 'Privado/a de libertad anterior (Cárcel o CERECO)', 1, 'Infracciones anteriores y actuales / decisión', 1),
(5, 'e', 'Tres (3) delitos oficiales o más para la sanción en proceso', 1, 'Infracciones anteriores y actuales / decisión', 1),
(6, 'a', 'Supervisión inadecuada', 1, 'Situación familiar / rol parental', 2),
(7, 'b', 'Conducta difícil de manejar', 1, 'Situación familiar / rol parental', 2),
(8, 'c', 'Disciplina maltratadora', 1, 'Situación familiar / rol parental', 2),
(9, 'd', 'Rol parental incoherente', 1, 'Situación familiar / rol parental', 2),
(10, 'e', 'Pobreza de la relación entre padre y el o la adolescente', 1, 'Situación familiar / rol parental', 2),
(11, 'f', 'Pobreza de la relación entre la madre y el o la adolescente', 1, 'Situación familiar / rol parental', 2),
(12, 'a', 'Comportamiento perturbador en la sala de clases', 1, 'Educación / empleo', 3),
(13, 'b', 'Comportamiento perturbador en el patio de la escuela', 1, 'Educación / empleo', 3),
(14, 'c', 'Rendimiento mediocre', 1, 'Educación / empleo', 3),
(15, 'd', 'Relaciones difíciles con los compañeros', 1, 'Educación / empleo', 3),
(16, 'e', 'Relaciones difíciles con el/la profesor/a', 1, 'Educación / empleo', 3),
(17, 'f', 'Ausentismo escolar no justificado', 1, 'Educación / empleo', 3),
(18, 'g', 'Sin empleo / no busca empleo', 1, 'Educación / empleo', 3),
(19, 'a', 'Algunos conocidos con conductas transgresoras y/o delictivas', 1, 'Relaciones con pares', 4),
(20, 'b', 'Algunos amigos con conductas transgresoras y/o delictivas', 1, 'Relaciones con pares', 4),
(21, 'c', 'Poco o ningún conocido con conducta y/o actividades pro sociales', 1, 'Relaciones con pares', 4),
(22, 'd', 'Poco o ningún amigo con conducta y/o actividades pro sociales', 1, 'Relaciones con pares', 4),
(23, 'a', 'Consumo ocasional  o experimental de drogas', 1, 'Drogadicción.', 5),
(24, 'b', 'Consumo regular o habitual  de drogas', 1, 'Drogadicción.', 5),
(25, 'c', 'Consumo regular o habitual de alcohol', 1, 'Drogadicción.', 5),
(26, 'd', 'Consecuencias negativas derivadas del consumo de drogas y alcohol en su funcionamiento', 1, 'Drogadicción.', 5),
(27, 'e', 'Consumo de drogas y alcohol vinculado con infracciones a la ley', 1, 'Drogadicción.', 5),
(28, 'a', 'No participa  en actividades estructuradas', 1, 'Tiempos libres', 6),
(29, 'b', 'Podría utilizar mejor su tiempo', 1, 'Tiempos libres', 6),
(30, 'c', 'Ningún interés personal', 1, 'Tiempos libres', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ferr_respuestas`
--

CREATE TABLE IF NOT EXISTS `ferr_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_respuesta` int(255) NOT NULL,
  UNIQUE KEY `primaria` (`id_user`,`id_encuestado`,`id_respuesta`),
  KEY `id_encuestado` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `ferr_respuestas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento`
--

CREATE TABLE IF NOT EXISTS `instrumento` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nombre` varchar(140) NOT NULL COMMENT 'Nombre clave del instrumento',
  `titulo` varchar(140) NOT NULL COMMENT 'Titulo de presentacion del instrumento',
  `descripcion` varchar(300) NOT NULL COMMENT 'Descripcion del instrumento',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Definiciones de instrumentos de la bateria' AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `instrumento`
--

INSERT INTO `instrumento` (`id`, `nombre`, `titulo`, `descripcion`) VALUES
(1, 'eda', 'Escala de Delicuencia Autorevelada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irnc2_respuestas`
--

CREATE TABLE IF NOT EXISTS `irnc2_respuestas` (
  `id_respuesta` varchar(255) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL,
  KEY `ferr2_respuestas_ibfk_5` (`id_user`),
  KEY `ferr2_respuestas_ibfk_6` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `irnc2_respuestas`
--

INSERT INTO `irnc2_respuestas` (`id_respuesta`, `respuesta`, `id_user`, `id_encuestado`, `concensoMode`) VALUES
('b1-pa', 'no_seleccionado', 3, 108, 0),
('comentario_1', '141414', 3, 108, 0),
('b1-pb', 'no_seleccionado', 3, 108, 0),
('comentario_2', '', 3, 108, 0),
('b1-pc', 'no_seleccionado', 3, 108, 0),
('comentario_3', '', 3, 108, 0),
('b1-pd', 'no_seleccionado', 3, 108, 0),
('comentario_4', '', 3, 108, 0),
('b1-pe', 'no_seleccionado', 3, 108, 0),
('comentario_5', '', 3, 108, 0),
('b2-pa', 'no_seleccionado', 3, 108, 0),
('comentario_6', '', 3, 108, 0),
('b2-pb', 'no_seleccionado', 3, 108, 0),
('comentario_7', '', 3, 108, 0),
('b2-pc', 'no_seleccionado', 3, 108, 0),
('comentario_8', '', 3, 108, 0),
('b2-pd', 'no_seleccionado', 3, 108, 0),
('comentario_9', '', 3, 108, 0),
('b2-pe', 'no_seleccionado', 3, 108, 0),
('comentario_10', '', 3, 108, 0),
('b2-pf', 'no_seleccionado', 3, 108, 0),
('comentario_11', '', 3, 108, 0),
('b3-pa', 'no_seleccionado', 3, 108, 0),
('comentario_12', '', 3, 108, 0),
('b3-pb', 'no_seleccionado', 3, 108, 0),
('comentario_13', '', 3, 108, 0),
('b3-pc', 'no_seleccionado', 3, 108, 0),
('comentario_14', '', 3, 108, 0),
('b3-pd', 'no_seleccionado', 3, 108, 0),
('comentario_15', '', 3, 108, 0),
('b3-pe', 'no_seleccionado', 3, 108, 0),
('comentario_16', '', 3, 108, 0),
('b3-pf', 'no_seleccionado', 3, 108, 0),
('comentario_17', '', 3, 108, 0),
('b3-pg', 'no_seleccionado', 3, 108, 0),
('comentario_18', '', 3, 108, 0),
('b4-pa', 'no_seleccionado', 3, 108, 0),
('comentario_19', '', 3, 108, 0),
('b4-pb', 'no_seleccionado', 3, 108, 0),
('comentario_20', '', 3, 108, 0),
('b4-pc', 'no_seleccionado', 3, 108, 0),
('comentario_21', '', 3, 108, 0),
('b4-pd', 'no_seleccionado', 3, 108, 0),
('comentario_22', '', 3, 108, 0),
('b5-pa', 'no_seleccionado', 3, 108, 0),
('comentario_23', '', 3, 108, 0),
('b5-pb', 'no_seleccionado', 3, 108, 0),
('comentario_24', '', 3, 108, 0),
('b5-pc', 'no_seleccionado', 3, 108, 0),
('comentario_25', '', 3, 108, 0),
('b5-pd', 'no_seleccionado', 3, 108, 0),
('comentario_26', '', 3, 108, 0),
('b5-pe', 'no_seleccionado', 3, 108, 0),
('comentario_27', '', 3, 108, 0),
('b6-pa', 'no_seleccionado', 3, 108, 0),
('comentario_28', '', 3, 108, 0),
('b6-pb', 'no_seleccionado', 3, 108, 0),
('comentario_29', '', 3, 108, 0),
('b6-pc', 'no_seleccionado', 3, 108, 0),
('comentario_30', '', 3, 108, 0),
('b7-pa', 'no_seleccionado', 3, 108, 0),
('comentario_31', '', 3, 108, 0),
('b7-pb', 'no_seleccionado', 3, 108, 0),
('comentario_32', '', 3, 108, 0),
('b7-pc', 'no_seleccionado', 3, 108, 0),
('comentario_33', '', 3, 108, 0),
('b7-pd', 'no_seleccionado', 3, 108, 0),
('comentario_34', '', 3, 108, 0),
('b7-pe', 'no_seleccionado', 3, 108, 0),
('comentario_35', '', 3, 108, 0),
('b7-pf', 'no_seleccionado', 3, 108, 0),
('comentario_36', '', 3, 108, 0),
('b7-pg', 'no_seleccionado', 3, 108, 0),
('comentario_37', '', 3, 108, 0),
('b8-pa', 'no_seleccionado', 3, 108, 0),
('comentario_38', '', 3, 108, 0),
('b8-pb', 'no_seleccionado', 3, 108, 0),
('comentario_39', '', 3, 108, 0),
('b8-pc', 'no_seleccionado', 3, 108, 0),
('comentario_40', '', 3, 108, 0),
('b8-pd', 'no_seleccionado', 3, 108, 0),
('comentario_41', '', 3, 108, 0),
('b8-pe', 'no_seleccionado', 3, 108, 0),
('comentario_42', '', 3, 108, 0),
('b9p1', 'no', 3, 108, 0),
('b9p2', 'no', 3, 108, 0),
('b9p3', 'no', 3, 108, 0),
('b9p4', 'no', 3, 108, 0),
('b9p5', 'no', 3, 108, 0),
('b9p6', 'no', 3, 108, 0),
('b9p7', 'no', 3, 108, 0),
('b9p8', 'no', 3, 108, 0),
('b9p9', 'no', 3, 108, 0),
('b9p10', 'no', 3, 108, 0),
('check_VorF_IRNComfix_52', '', 3, 108, 0),
('b9p11', 'no', 3, 108, 0),
('check_VorF_IRNComfix_53', '', 3, 108, 0),
('comentario_bloque9', '', 3, 108, 0),
('b10p1', 'no', 3, 108, 0),
('b10p2', 'no', 3, 108, 0),
('b10p3', 'no', 3, 108, 0),
('b10p4', 'no', 3, 108, 0),
('b10p5', 'no', 3, 108, 0),
('b10p6', 'no', 3, 108, 0),
('b10p7', 'no', 3, 108, 0),
('b10p8', 'no', 3, 108, 0),
('b10p9', 'no', 3, 108, 0),
('b10p10', 'no', 3, 108, 0),
('b10p11', 'no', 3, 108, 0),
('b10p12', 'no', 3, 108, 0),
('b10p13', 'no', 3, 108, 0),
('b10p14', 'no', 3, 108, 0),
('b10p15', 'no', 3, 108, 0),
('b10p16', 'no', 3, 108, 0),
('b10p17', 'no', 3, 108, 0),
('b10p18', 'no', 3, 108, 0),
('b10p19', 'no', 3, 108, 0),
('b10p20', 'no', 3, 108, 0),
('b10p21', 'no', 3, 108, 0),
('b10p22', 'no', 3, 108, 0),
('b10p23', 'no', 3, 108, 0),
('b10p24', 'no', 3, 108, 0),
('b10p25', 'no', 3, 108, 0),
('b10p26', 'no', 3, 108, 0),
('b10p27', 'si', 3, 108, 0),
('check_VorF_IRNComfix_80', '1212', 3, 108, 0),
('comentario_bloque10', '', 3, 108, 0),
('Guardar', '', 3, 108, 0),
('tstart', '04:22:45', 3, 108, 0),
('module', 'IRNC', 3, 108, 0),
('action', 'GuardarInstrumento', 3, 108, 0),
('idEncuestado', '108', 3, 108, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irnc_preguntas`
--

CREATE TABLE IF NOT EXISTS `irnc_preguntas` (
  `id_pregunta_IRNC` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  `bloque_IRNC` varchar(255) NOT NULL,
  `bloque_num` int(255) NOT NULL,
  PRIMARY KEY (`id_pregunta_IRNC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Volcar la base de datos para la tabla `irnc_preguntas`
--

INSERT INTO `irnc_preguntas` (`id_pregunta_IRNC`, `num_pregunta`, `texto`, `es_requerido`, `bloque_IRNC`, `bloque_num`) VALUES
(1, 'a', 'Tres (3) o más delitos oficiales en el pasado', 1, 'Infracciones anteriores y actuales / decisión', 1),
(2, 'b', 'Incumplimiento de sanciones impuestas por el juez dos (2) veces o más', 1, 'Infracciones anteriores y actuales / decisión', 1),
(3, 'c', 'Libertad asistida anterior', 1, 'Infracciones anteriores y actuales / decisión', 1),
(4, 'd', 'Privado/a de libertad anterior (Cárcel o CERECO)', 1, 'Infracciones anteriores y actuales / decisión', 1),
(5, 'e', 'Tres (3) delitos oficiales o más para la sanción en proceso', 1, 'Infracciones anteriores y actuales / decisión', 1),
(6, 'a', 'Supervisión inadecuada', 1, 'Situación familiar / rol parental', 2),
(7, 'b', 'Conducta difícil de manejar', 1, 'Situación familiar / rol parental', 2),
(8, 'c', 'Disciplina maltratadora', 1, 'Situación familiar / rol parental', 2),
(9, 'd', 'Rol parental incoherente', 1, 'Situación familiar / rol parental', 2),
(10, 'e', 'Pobreza de la relación entre padre y el o la adolescente', 1, 'Situación familiar / rol parental', 2),
(11, 'f', 'Pobreza de la relación entre la madre y el o la adolescente', 1, 'Situación familiar / rol parental', 2),
(12, 'a', 'Comportamiento perturbador en la sala de clases', 1, 'Educación / empleo', 3),
(13, 'b', 'Comportamiento perturbador en el patio de la escuela', 1, 'Educación / empleo', 3),
(14, 'c', 'Rendimiento mediocre', 1, 'Educación / empleo', 3),
(15, 'd', 'Relaciones difíciles con los compañeros', 1, 'Educación / empleo', 3),
(16, 'e', 'Relaciones difíciles con el/la profesor/a', 1, 'Educación / empleo', 3),
(17, 'f', 'Ausentismo escolar no justificado', 1, 'Educación / empleo', 3),
(18, 'g', 'Sin empleo / no busca empleo', 1, 'Educación / empleo', 3),
(19, 'a', 'Algunos conocidos con conductas transgresoras y/o delictivas', 1, 'Relaciones con pares', 4),
(20, 'b', 'Algunos amigos con conductas transgresoras y/o delictivas', 1, 'Relaciones con pares', 4),
(21, 'c', 'Poco o ningún conocido con conducta y/o actividades pro sociales', 1, 'Relaciones con pares', 4),
(22, 'd', 'Poco o ningún amigo con conducta y/o actividades pro sociales', 1, 'Relaciones con pares', 4),
(23, 'a', 'Consumo ocasional  o experimental de drogas', 1, 'Drogadicción.', 5),
(24, 'b', 'Consumo regular o habitual  de drogas', 1, 'Drogadicción.', 5),
(25, 'c', 'Consumo regular o habitual de alcohol', 1, 'Drogadicción.', 5),
(26, 'd', 'Consecuencias negativas derivadas del consumo de drogas y alcohol en su funcionamiento', 1, 'Drogadicción.', 5),
(27, 'e', 'Consumo de drogas y alcohol vinculado con infracciones a la ley', 1, 'Drogadicción.', 5),
(28, 'a', 'No participa  en actividades estructuradas', 1, 'Tiempos libres', 6),
(29, 'b', 'Podría utilizar mejor su tiempo', 1, 'Tiempos libres', 6),
(30, 'c', 'Ningún interés personal', 1, 'Tiempos libres', 6),
(31, 'a', 'Sobrevaloración de si mismo', 1, 'Personalidad / comportamiento', 7),
(32, 'b', 'Agresividad física', 1, 'Personalidad / comportamiento', 7),
(33, 'c', 'Rabietas', 1, 'Personalidad / comportamiento', 7),
(34, 'd', 'Concentración limitada', 1, 'Personalidad / comportamiento', 7),
(35, 'e', 'Incapacidad de soportar las frustraciones', 1, 'Personalidad / comportamiento', 7),
(36, 'f', 'Insuficiente sentimiento de culpa', 1, 'Personalidad / comportamiento', 7),
(37, 'g', 'Agresividad verbal, insolencia', 1, 'Personalidad / comportamiento', 7),
(38, 'a', 'Actitudes antisociales / infractoras', 1, 'Actitudes / tendencias', 8),
(39, 'b', 'No busca ninguna ayuda', 1, 'Actitudes / tendencias', 8),
(40, 'c', 'Rechaza categóricamente cualquiera forma de ayuda', 1, 'Actitudes / tendencias', 8),
(41, 'd', 'Se rebela contra cualquiera forma de autoridad', 1, 'Actitudes / tendencias', 8),
(42, 'e', 'Insensible, indiferente a los demás', 1, 'Actitudes / tendencias', 8),
(43, 'a', 'Infraciones anteriores', 1, 'Familia / padres', 9),
(44, 'b', 'Desamparo afect / psiquiátrico', 1, 'Familia / padres', 9),
(45, 'c', 'Drogadicción', 1, 'Familia / padres', 9),
(46, 'd', 'Desacuerdos conyugales', 1, 'Familia / padres', 9),
(47, 'e', 'Probl. Económ. / alojamiento', 1, 'Familia / padres', 9),
(48, 'f', 'Desinterés vs problemas', 1, 'Familia / padres', 9),
(49, 'g', 'Probl. de orden cultural (étnico)', 1, 'Familia / padres', 9),
(50, 'h', 'Maltrato de parte del padre', 1, 'Familia / padres', 9),
(51, 'i', 'Maltrato de parte de la madre', 1, 'Familia / padres', 9),
(52, 'j', 'Trauma familiar grave', 1, 'Familia / padres', 9),
(53, 'k', 'Otro', 1, 'Familia / padres', 9),
(54, 'a', 'Problemas de salud', 1, 'Adolescente', 10),
(55, 'b', 'Discapacidad física', 1, 'Adolescente', 10),
(56, 'c', 'CI bajo / retraso del desarrollo', 1, 'Adolescente', 10),
(57, 'd', 'Dificultades de aprendizaje', 1, 'Adolescente', 10),
(58, 'e', 'Rendim. inferior a las expect.', 1, 'Adolescente', 10),
(59, 'f', 'Baja capac. resoluc. conflictos', 1, 'Adolescente', 10),
(60, 'g', 'Víct.de agresión física / sex.', 1, 'Adolescente', 10),
(61, 'h', 'Víctima de negligencia parent.', 1, 'Adolescente', 10),
(62, 'i', 'Tímido/a / cerrado/a', 1, 'Adolescente', 10),
(63, 'j', 'Compañero-as de otra edad', 1, 'Adolescente', 10),
(64, 'k', 'Estado depresivo', 1, 'Adolescente', 10),
(65, 'l', 'Baja auto estima', 1, 'Adolescente', 10),
(66, 'm', 'Actividad sexual inapropiada', 1, 'Adolescente', 10),
(67, 'n', 'Actitud racista / sexista', 1, 'Adolescente', 10),
(68, 'o', 'Bajas aptitudes sociales', 1, 'Adolescente', 10),
(69, 'p', 'Se niega a ver la realidad', 1, 'Adolescente', 10),
(70, 'q', 'Intento de suicidio', 1, 'Adolescente', 10),
(71, 'r', 'Diagnóstico de psicosis', 1, 'Adolescente', 10),
(72, 's', 'Amenazas de un tercero', 1, 'Adolescente', 10),
(73, 't', 'Agresiones sexuales / físicas', 1, 'Adolescente', 10),
(74, 'u', 'Agresión vs pers. en autoridad', 1, 'Adolescente', 10),
(75, 'v', 'Uso de armas', 1, 'Adolescente', 10),
(76, 'w', 'Piromanía', 1, 'Adolescente', 10),
(77, 'x', 'Evasión', 1, 'Adolescente', 10),
(78, 'y', 'Protección', 1, 'Adolescente', 10),
(79, 'z', 'Condiciones de vida difíciles', 1, 'Adolescente', 10),
(80, 'a1', 'Otro', 1, 'Adolescente', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irnc_respuestas`
--

CREATE TABLE IF NOT EXISTS `irnc_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_IRNC` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_IRNC`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_IRNC` (`id_pregunta_IRNC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `irnc_respuestas`
--

INSERT INTO `irnc_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_IRNC`) VALUES
(2, 'SI', 'aasfdsf', 112, 52),
(2, 'SI', '', 112, 53),
(2, 'SI', '', 112, 54),
(2, 'SI', '', 112, 55),
(2, 'SI', '', 112, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irnc_respuestas_fixed_comxbloque`
--

CREATE TABLE IF NOT EXISTS `irnc_respuestas_fixed_comxbloque` (
  `id_user` bigint(20) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `bloque_IRNC` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`bloque_IRNC`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `bloque_IRNC` (`bloque_IRNC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `irnc_respuestas_fixed_comxbloque`
--

INSERT INTO `irnc_respuestas_fixed_comxbloque` (`id_user`, `comentario`, `id_encuestado`, `bloque_IRNC`) VALUES
(2, 'efseHOLA', 5, 9),
(2, 'COMENTARIO DE BLOQUE', 5, 10),
(2, '', 6, 9),
(2, '', 6, 10),
(2, '', 10, 9),
(2, '', 10, 10),
(2, 'qq  qq  qq  qqq', 13, 9),
(2, '', 13, 10),
(2, 'klñklñklñ', 14, 9),
(2, '', 14, 10),
(2, '', 112, 9),
(2, '', 112, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jir_preguntas`
--

CREATE TABLE IF NOT EXISTS `jir_preguntas` (
  `id_pregunta_JIR` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_JIR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=161 ;

--
-- Volcar la base de datos para la tabla `jir_preguntas`
--

INSERT INTO `jir_preguntas` (`id_pregunta_JIR`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, 1, 'Cuando estoy en problemas, lo mejor es no hablar al respecto.\r\n', 1),
(2, 2, 'Me  pone nervioso tener que estar sentado por mucho rato.\r\n', 1),
(3, 3, 'Me meto en muchas peleas.\r\n', 1),
(4, 4, 'Me preocupo demasiado por hacer lo que es correcto.\r\n', 1),
(5, 5, 'Me gusta estar siempre con el mismo grupo de amigos.\r\n', 1),
(6, 6, 'Soy más inteligente que la mayoría de los que conozco.\r\n', 1),
(7, 7, 'Me molesta mucho cuando a quienes cometen delitos los dejan libres al tiro.\r\n', 1),
(8, 8, 'Me ofendo fácilmente cuando me critican.\r\n', 1),
(9, 9, 'La mayoría de los “pacos” tratan de ayudarte.\r\n', 1),
(10, 10, 'A veces siento ganas de golpear (paliza) a alguien.\r\n', 1),
(11, 11, 'Cuando me ordenan hacer algo, me dan ganas de hacer justo lo contrario.\r\n', 1),
(12, 12, 'La mayoría de la gente engañaría un poquito, con tal de obtener algún dinero.\r\n', 1),
(13, 13, 'Las personas nunca saben cuando se enojaran, o se meterán en problemas.\r\n', 1),
(14, 14, 'Si le caes mal a los “pacos”, ellos tratarán de “cargarte” por cualquier cosa.\r\n', 1),
(15, 15, 'Estas mucho mejor si no confías en la gente.\r\n', 1),
(16, 16, 'A veces desearía poder irme lejos y olvidar todo.\r\n', 1),
(17, 17, 'A veces siento que no tengo realmente un hogar.\r\n', 1),
(18, 18, 'La gente siempre parece preferir a ciertas personas por sobre otras\r\n', 1),
(19, 19, 'Yo nunca miento.\r\n', 1),
(20, 20, 'La mayoría de los “pacos” son bastante tontos.\r\n', 1),
(21, 21, 'Me enrolla  (preocupa) lo que otros puedan pensar de mí.\r\n', 1),
(22, 22, 'Alguien como yo pega primero y después pregunta.\r\n', 1),
(23, 23, 'Suelo tener pensamientos muy extraños y divertidos.\r\n', 1),
(24, 24, 'Cuesta mucho pasarlo bien si no estas con tus amigos.\r\n', 1),
(25, 25, 'Me pone nervioso pedirle a alguien un favor.\r\n', 1),
(26, 26, 'He sido cruel (malo) con personas o animales.\r\n', 1),
(27, 27, 'Si pudiera, me saldría de la escuela ahora mismo.\r\n', 1),
(28, 28, 'A veces da gusto aprovecharse de alguien.\r\n', 1),
(29, 29, 'Cuando la gente insiste en preguntarme cosas, mi corazón “se acelera”.\r\n', 1),
(30, 30, 'Cuando me da la rabia, soy capaz de hacer cualquier cosa.\r\n', 1),
(31, 31, 'Las mujeres me parecen más amigables y alegres que los hombres.\r\n', 1),
(32, 32, 'Para mi es fácil hablar con gente que no conozco.\r\n', 1),
(33, 33, 'Los “pacos” y los “ratis” meten sus narices en un montón de cosas que no les corresponde.\r\n', 1),
(34, 34, 'A muchos papás, parece que no les importa si te hacen sentir mal.\r\n', 1),
(35, 35, 'En secreto (pa’ callao) le tengo miedo a un montón de cosas.\r\n', 1),
(36, 36, 'Casi nunca salgo favorecido de alguna situación.\r\n', 1),
(37, 37, 'Pareciera que a los demás las cosas siempre les resultaran mejor.\r\n', 1),
(38, 38, 'Parece que yo “exploto” por pequeñas cosas que en realidad no tienen mayor importancia.\r\n', 1),
(39, 39, 'Sólo las guaguas lloran cuando algo duele.\r\n', 1),
(40, 40, 'La mayoría de la gente es realmente muy buena.\r\n', 1),
(41, 41, 'Ganar una pelea es una de las cosas más “bakanes” que hay.\r\n', 1),
(42, 42, 'Me pasan muchas cosas extrañas.\r\n', 1),
(43, 43, 'Tengo todos los amigos que necesito.\r\n', 1),
(44, 44, 'Me encanta “sacar de quicio” a algunas personas.\r\n', 1),
(45, 45, 'Hoy en día hacen que cualquier embarrada o travesura parezca un gran delito.\r\n', 1),
(46, 46, 'Me encantaría trabajar en un parque de diversiones o en un circo.\r\n', 1),
(47, 47, 'Mi padre estaba siempre demasiado ocupado para preocuparse de mi o pasar tiempo conmigo.\r\n', 1),
(48, 48, 'A veces me siento mareado sin ningún motivo.\r\n', 1),
(49, 49, 'A veces los adultos tratan a los chicos y chicas como si fueran “guaguas”.\r\n', 1),
(50, 50, 'Me siento mal cuando me gritonean, me retan o me critican.\r\n', 1),
(51, 51, 'He utilizado armas que podrían herir a alguien.\r\n', 1),
(52, 52, 'Cuando las cosas van mal, no es mucho lo que  se puede hacer.\r\n', 1),
(53, 53, 'Si alguien en la familia se mete en problemas, es mejor “apechugar” juntos que pedir ayuda a los carabineros o a la policía.\r\n', 1),
(54, 54, 'Parece que no puedo mantenerme concentrado en nada.\r\n', 1),
(55, 55, 'Parece que cuando estoy haciendo todo el empeño para hacer las cosas bien, todo me sale mal.\r\n', 1),
(56, 56, 'La mayoría de las personas con autoridad son mandonas y arrogantes.\r\n', 1),
(57, 57, 'No me importa si le gusto a la gente o no.\r\n', 1),
(58, 58, 'Parece que sin importar donde esté, siempre preferiría estar en otra parte.\r\n', 1),
(59, 59, 'De vez en cuando me enojo.\r\n', 1),
(60, 60, 'Pienso que ya a los 14 años se tiene edad suficiente para fumar.\r\n', 1),
(61, 61, 'La mayoría de los padres son demasiado estrictos.\r\n', 1),
(62, 62, 'Si la gente me hace algo malo, yo trato de vengarme.\r\n', 1),
(63, 63, 'Casi nunca se puede creer lo que te dicen tus padres.\r\n', 1),
(64, 64, 'Tengo un “lado” realmente malo.\r\n', 1),
(65, 65, 'Creo que nunca seré exitoso, ni llegaré muy lejos.\r\n', 1),
(66, 66, 'Por lo general, los “pacos” te tratan como si fueras basura.\r\n', 1),
(67, 67, 'La mayor parte del tiempo no encuentro nada que hacer.\r\n', 1),
(68, 68, 'Me cuesta mucho demostrar a las personas lo que pienso de ellos.\r\n', 1),
(69, 69, 'Con frecuencia me siento solo y triste.\r\n', 1),
(70, 70, 'No me importa que me tomen el pelo o se rían de mí.\r\n', 1),
(71, 71, 'En mi vida, nunca pasa nada.\r\n', 1),
(72, 72, 'Muchas veces hago cosas que mi familia me dice que no debería hacer.\r\n', 1),
(73, 73, 'Es divertido hacer pasar un mal rato a los “pacos”.\r\n', 1),
(74, 74, 'Un montón de gente dice cosas malas de mí a mis espaldas.\r\n', 1),
(75, 75, 'Desearía no ser tan tímido y preocupado.\r\n', 1),
(76, 76, 'He dañado o destruido propiedad ajena, a propósito.\r\n', 1),
(77, 77, 'Pareciera que la gente espera que yo siempre me meta en problemas.\r\n', 1),
(78, 78, 'Me caen bien todos los que conozco.\r\n', 1),
(79, 79, 'Otras personas son más felices que yo.\r\n', 1),
(80, 80, 'Si sólo tuviera más dinero, las cosas en casa mejorarían.\r\n', 1),
(81, 81, 'Realmente no tengo muchos problemas de que preocuparme.\r\n', 1),
(82, 82, 'Que me traten de "débil" es lo peor que me podrían decir.\r\n', 1),
(83, 83, 'Cuando estoy solo oigo cosas extrañas.\r\n', 1),
(84, 84, 'Si tu grupo se mete en problemas, deben mantenerse todos apegados a la misma historia.\r\n', 1),
(85, 85, 'Tengo muchos dolores de cabeza.\r\n', 1),
(86, 86, 'Los profesores siempre le tienen “buena” a algunos que pueden hacer cualquier cosa y no les dicen nada.\r\n', 1),
(87, 87, 'Cada día está lleno de cosas interesantes para mí.\r\n', 1),
(88, 88, 'Por lo general prefiero estar solo que con otros.\r\n', 1),
(89, 89, 'No soporto mucho que me saquen pica o que se burlen de mí.\r\n', 1),
(90, 90, 'No me importa mucho lo que pase conmigo.\r\n', 1),
(91, 91, 'Nunca me enojo con nadie.\r\n', 1),
(92, 92, 'Siempre mantengo esperanza de que ocurra algo emocionante.\r\n', 1),
(93, 93, 'Los policías y los jueces te dirán una cosa y harán otra.\r\n', 1),
(94, 94, 'Es difícil para mí hablar con mi familia y con mis padres acerca de mis problemas.\r\n', 1),
(95, 95, 'Soy querido por todos los que me conocen.\r\n', 1),
(96, 96, 'Es más fácil para mí portarme mal, que demostrar mis buenos sentimientos.\r\n', 1),
(97, 97, 'Muchas personas prefieren mostrarse duras y fuertes.\r\n', 1),
(98, 98, 'Soy siempre agradable con todos.\r\n', 1),
(99, 99, 'Se necesita a alguien muy inteligente para engañarme o superarme.\r\n', 1),
(100, 100, 'Contarle tus problemas a otra persona suele ser una pura pérdida de tiempo.\r\n', 1),
(101, 101, 'Cuando era chico, me gustaba salir y quedarme fuera de la casa o de la escuela sin permiso.\r\n', 1),
(102, 102, 'No es malo robarle a los dueños de tiendas que son deshonestos.\r\n', 1),
(103, 103, 'Yo nunca me echaría “para atrás” en una pelea.\r\n', 1),
(104, 104, 'Tengo un montón de cosas malas en mi mente que las personas no saben\r\n', 1),
(105, 105, 'Yo podría hacer muchas cosas locas si me desafiaran a hacerlas.\r\n', 1),
(106, 106, 'Me asusta tener que hablar delante de un grupo.\r\n', 1),
(107, 107, 'Los padres siempre están molestando y fastidiando a los jóvenes.\r\n', 1),
(108, 108, 'Algún día me gustaría manejar un auto de carreras.\r\n', 1),
(109, 109, 'Paso “echado” y soñando despierto más de lo que debiera.\r\n', 1),
(110, 110, 'De vez en cuando sufro de dolores de “guata” (estomago).\r\n', 1),
(111, 111, 'En mi casa se me culpa con demasiada frecuencia de cosas que no he hecho.\r\n', 1),
(112, 112, 'Mi vida en mi casa es siempre feliz.\r\n', 1),
(113, 113, 'Por la noche, cuando no tengo nada que hacer, me gusta salir a buscar un poco de emoción.\r\n', 1),
(114, 114, 'Muchas mujeres me parecen malas y mandonas.\r\n', 1),
(115, 115, 'Nadie parece entender, o cómo me siento.\r\n', 1),
(116, 116, 'Mucha gente se mete en problemas por pura mala suerte.\r\n', 1),
(117, 117, 'Siempre soy amable con los demás.\r\n', 1),
(118, 118, 'Conversar con mis padres es tan fácil como hablar con otras personas de mi edad.\r\n', 1),
(119, 119, 'A veces me carga la escuela, o el trabajo.\r\n', 1),
(120, 120, 'Si quieres salir adelante, no puedes preocuparte mucho por los demás.\r\n', 1),
(121, 121, 'A veces siento mucha rabia  sólo por pequeñas cosas.\r\n', 1),
(122, 122, 'Si estoy en problemas, no me importa mentir.\r\n', 1),
(123, 123, 'Una persona que no es capaz de pelear no sirve para nada.\r\n', 1),
(124, 124, 'Hoy en día, para salir adelante, hay que ser bastante duro.\r\n', 1),
(125, 125, 'La mayor parte del tiempo me siento preocupado.\r\n', 1),
(126, 126, 'A menudo le alego a los adultos que parecen creer que lo saben todo.\r\n', 1),
(127, 127, 'Si no estas en onda con las personas correctas, podrías meterte en graves  problemas.\r\n', 1),
(128, 128, 'Yo creo que tengo más personalidad que la mayoría de la gente que conozco.\r\n', 1),
(129, 129, 'Estoy lleno de malos pensamientos.\r\n', 1),
(130, 130, 'Cuando estás en problemas, a nadie le preocupa mucho ayudarte.\r\n', 1),
(131, 131, 'A veces, cuando en mi familia me dicen que no debo hacer algo, de todos modos lo hago.\r\n', 1),
(132, 132, 'Es mejor no pensar en tus problemas.\r\n', 1),
(133, 133, 'Casi nunca me siento entusiasmado o emocionado.\r\n', 1),
(134, 134, 'Cuando pasa algo malo, casi siempre me echo la culpa, en vez de culpar a otros.\r\n', 1),
(135, 135, 'Por lo general, la gente que “maneja las cosas” están en contra mía.\r\n', 1),
(136, 136, 'Me cuesta mucho tomar una decisión.\r\n', 1),
(137, 137, 'La mayoría de las personas que se portan bien, sólo están parando una fachada.\r\n', 1),
(138, 138, 'Cuando la suerte no está de tu lado, no hay mucho que se pueda hacer.\r\n', 1),
(139, 139, 'Me canso fácilmente.\r\n', 1),
(140, 140, 'Creo que mi mamá debió haber sido más estricta de lo que fue, en un montón de cosas.\r\n', 1),
(141, 141, 'Me gusta leer y estudiar.\r\n', 1),
(142, 142, 'Me siento solo, incluso cuando hay otras personas a mi alrededor.\r\n', 1),
(143, 143, 'Cuando quiero, soy bueno para engañar y “hacer leso” a los demás.\r\n', 1),
(144, 144, 'Siempre me carga tener que pedirle un favor a alguien.\r\n', 1),
(145, 145, 'Casi siempre me cuesta recuperar el aliento.\r\n', 1),
(146, 146, 'Independiente de lo que haga, siempre estoy preocupado de cuán bien lo estoy haciendo.\r\n', 1),
(147, 147, 'Para mi porte, soy realmente fuerte.\r\n', 1),
(148, 148, 'La gente casi nunca me da una oportunidad.\r\n', 1),
(149, 149, 'Me gusta fantasear más que cualquier otra cosa.\r\n', 1),
(150, 150, 'A veces el único camino para solucionar un conflicto es peleando.\r\n', 1),
(151, 151, 'Soy nervioso.\r\n', 1),
(152, 152, 'El robar no es tan malo si es que se le roba a una persona rica.\r\n', 1),
(153, 153, 'Mi familia piensa que  podría terminar siendo un vago.\r\n', 1),
(154, 154, 'A veces, las cosas no me parece que estén ocurriendo realmente.\r\n', 1),
(155, 155, 'Me siento mejor cuando sé exactamente lo que va a ocurrir de un día al siguiente.\r\n', 1),
(156, 156, 'Las familias discuten demasiado.\r\n', 1),
(157, 157, 'A veces pareciera que me gusta meterme en líos, en lugar de alejarme de ellos.\r\n', 1),
(158, 158, 'Creo que algo anda mal en mi cabeza.\r\n', 1),
(159, 159, 'Me enojo muy fácilmente.\r\n', 1),
(160, 160, 'Por lo general, cuando me meto en problemas, es por mi propia culpa.\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jir_respuestas`
--

CREATE TABLE IF NOT EXISTS `jir_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_JIR` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_JIR`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_JIR` (`id_pregunta_JIR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `jir_respuestas`
--

INSERT INTO `jir_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_JIR`) VALUES
(2, 'V', '', 5, 1),
(2, 'V', '', 5, 2),
(2, 'V', '', 5, 3),
(2, 'V', '', 5, 4),
(2, 'V', '', 5, 5),
(2, 'V', '', 5, 6),
(2, 'V', '', 5, 7),
(2, 'V', '', 5, 8),
(2, 'V', '', 5, 9),
(2, 'V', '', 5, 10),
(2, 'V', '', 5, 11),
(2, 'V', '', 5, 12),
(2, 'V', '', 5, 13),
(2, 'V', '', 5, 14),
(2, 'V', '', 5, 15),
(2, 'V', '', 5, 16),
(2, 'V', '', 5, 17),
(2, 'V', '', 5, 18),
(2, 'V', '', 5, 19),
(2, 'V', '', 5, 20),
(2, 'V', '', 5, 21),
(2, 'V', '', 5, 22),
(2, 'V', '', 5, 23),
(2, 'V', '', 5, 24),
(2, 'V', '', 5, 25),
(2, 'V', '', 5, 26),
(2, 'V', '', 5, 27),
(2, 'V', '', 5, 28),
(2, 'V', '', 5, 29),
(2, 'V', '', 5, 30),
(2, 'V', '', 5, 31),
(2, 'V', '', 5, 32),
(2, 'V', '', 5, 33),
(2, 'V', '', 5, 34),
(2, 'V', '', 5, 35),
(2, 'V', '', 5, 36),
(2, 'V', '', 5, 37),
(2, 'V', '', 5, 38),
(2, 'V', '', 5, 39),
(2, 'V', '', 5, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maci_preguntas`
--

CREATE TABLE IF NOT EXISTS `maci_preguntas` (
  `id_pregunta_maci` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta_maci`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=161 ;

--
-- Volcar la base de datos para la tabla `maci_preguntas`
--

INSERT INTO `maci_preguntas` (`id_pregunta_maci`, `num_pregunta`, `texto`, `es_requerido`) VALUES
(1, NULL, 'Preferiría seguir a alguien antes que ser el líder.', 1),
(2, NULL, 'Estoy bastante seguro(a) de saber quién soy y qué quiero en la vida.', 1),
(3, NULL, 'Yo no necesito tener amistades cercanas como otros chicos.', 1),
(4, NULL, 'Frecuentemente me desagrada hacer cosas que otros esperan de mí.', 1),
(5, NULL, 'Hago lo mejor que puedo para no herir los sentimientos de los demás.', 1),
(6, NULL, 'Puedo contar con que mis padres me entiendan.', 1),
(7, NULL, 'Algunas personas piensan que soy un poco presumido(a).', 1),
(8, NULL, 'Pase lo que pase, nunca consumiría drogas.', 1),
(9, NULL, 'Siempre trato de hacer lo que es correcto.', 1),
(10, NULL, 'Me gusta como me veo.', 1),
(11, NULL, 'Aunque me dan ataques incontrolables de hambre en los que como muchísimo, odio el peso que subo.', 1),
(12, NULL, 'Casi nada de lo que pasa parece hacerme sentir feliz o triste.', 1),
(13, NULL, 'Parece que tengo un problema para llevarme bien con otros adolescentes.', 1),
(14, NULL, 'Me siento muy avergonzado(a) contándole a la gente cómo fui abusado(a) cuando niño(a).', 1),
(15, NULL, 'Nunca he hecho algo por lo cual me pudieran haber arrestado.', 1),
(16, NULL, 'Pienso que todos estarían mejor si yo estuviera muerto(a).', 1),
(17, NULL, 'Algunas veces, cuando estoy lejos de casa, comienzo a sentirme tenso(a) y con pánico.', 1),
(18, NULL, 'Generalmente actúo rápido, sin pensar.', 1),
(19, NULL, 'Supongo que soy un(a) quejumbroso(a) que espera que suceda lo peor.', 1),
(20, NULL, 'No es raro sentirse solo(a) y no querido(a).', 1),
(21, NULL, 'El castigo nunca me detuvo para hacer lo que yo quería.', 1),
(22, NULL, 'Parece que el beber ha sido un problema para varios miembros de mi familia.', 1),
(23, NULL, 'Me gusta seguir instrucciones y hacer lo que otros esperan de mí.', 1),
(24, NULL, 'Parece que encajo bien con cualquier grupo nuevo de chicos que conozco.', 1),
(25, NULL, 'Muy poco de lo que he hecho ha sido apreciado por otros.', 1),
(26, NULL, 'Odio el hecho de no tener ni la apariencia ni la inteligencia que desearía.', 1),
(27, NULL, 'Me gusta estar en casa.', 1),
(28, NULL, 'A veces asusto a otros chicos para que hagan lo que yo quiero.', 1),
(29, NULL, 'Aunque la gente me dice que estoy delgado(a), yo me siento con sobrepeso.', 1),
(30, NULL, 'Cuando tomo unos tragos me siento más seguro(a) de mí mismo(a)', 1),
(31, NULL, 'La mayoría de la gente es más atractiva que yo.', 1),
(32, NULL, 'Frecuentemente temo desmayarme o sentir pánico cuando estoy en una multitud.', 1),
(33, NULL, 'A veces me fuerzo a vomitar después de comer mucho.', 1),
(34, NULL, 'Frecuentemente me siento como "flotando", como perdido(a) en la vida.', 1),
(35, NULL, 'Parece que no le caigo bien a la mayoría de los adolescentes.', 1),
(36, NULL, 'Cuando puedo escoger, prefiero hacer las cosas solo(a).', 1),
(37, NULL, 'Involucrarse en los problemas de los demás es una pérdida de tiempo.', 1),
(38, NULL, 'Frecuentemente siento que los demás no quieren ser amistosos conmigo.', 1),
(39, NULL, 'No me importa mucho lo que otros chicos piensen de mí.', 1),
(40, NULL, 'Solía quedar tan drogado(a) que no sabía lo que estaba haciendo.', 1),
(41, NULL, 'No me molesta decirle a la gente algo que no les gustaría escuchar.', 1),
(42, NULL, 'Veo que estoy muy lejos de lo que en realidad me gustaría ser.', 1),
(43, NULL, 'Las cosas en mi vida van de mal en peor. ', 1),
(44, NULL, 'Tan pronto como tengo el impulso de hacer algo, lo hago.', 1),
(45, NULL, 'Nunca he sido llamado(a) "delincuente juvenil".', 1),
(46, NULL, 'Frecuentemente yo soy mi peor enemigo.', 1),
(47, NULL, 'Muy pocas cosas o actividades parecen darme placer.', 1),
(48, NULL, 'Siempre pienso en hacer dieta, aún cuando la gente dice que estoy delgado(a)', 1),
(49, NULL, 'Me es difícil sentir lástima por personas que siempre están preocupadas por algo.', 1),
(50, NULL, 'Es bueno tener una rutina para hacer la mayoría de las cosas.', 1),
(51, NULL, 'No creo tener tanto interés en el sexo como otros de mi edad.', 1),
(52, NULL, 'No veo nada malo en usar a otros para obtener lo que quiero.', 1),
(53, NULL, 'Preferiría estar en cualquier lugar menos en casa.', 1),
(54, NULL, 'A veces me siento tan molesto(a) que quiero lastimarme seriamente.', 1),
(55, NULL, 'No creo que haya sido abusado(a)  sexualmente cuando era niño(a).', 1),
(56, NULL, 'Soy un tipo de persona dramática y me gusta llamar la atención.', 1),
(57, NULL, 'Yo puedo beber más cerveza o licor que la mayoría de mis amigos.', 1),
(58, NULL, 'Los padres y profesores son demasiado duros con los chicos que no siguen las reglas.', 1),
(59, NULL, 'Me gusta mucho coquetear.', 1),
(60, NULL, 'No me molesta ver a alguien sufriendo.', 1),
(61, NULL, 'Al parecer no tengo muchos sentimientos por los demás.', 1),
(62, NULL, 'Disfruto pensando en sexo.', 1),
(63, NULL, 'Me preocupa mucho pensar en que me dejen solo(a).', 1),
(64, NULL, 'A menudo me siento triste y no-querido(a).', 1),
(65, NULL, 'Se supone que soy delgado(a), pero siento mis muslos y mi trasero demasiado grandes.', 1),
(66, NULL, 'Frecuentemente merezco que otros me humillen.', 1),
(67, NULL, 'La gente me presiona para que haga más de lo que es justo.', 1),
(68, NULL, 'Creo que tengo una buena figura.', 1),
(69, NULL, 'Socialmente, me siento abandonado(a).', 1),
(70, NULL, 'Hago amigos fácilmente.', 1),
(71, NULL, 'Soy una persona algo asustadiza y ansiosa.', 1),
(72, NULL, 'Odio pensar en alguna de las formas en que fui abusado(a) cuando niño(a).', 1),
(73, NULL, 'No soy diferente de muchos de los chicos que roban cosas de vez en cuando.', 1),
(74, NULL, 'Prefiero actuar primero y pensarlo después.', 1),
(75, NULL, 'He pasado periodos en los que he fumado marihuana varias veces a la semana.', 1),
(76, NULL, 'Demasiadas reglas se cruzan en mi camino para hacer lo que quiero.', 1),
(77, NULL, 'Cuando las cosas se ponen aburridas, me gusta crear un poco de emoción.', 1),
(78, NULL, 'A veces yo haría algo cruel para hacer a alguien infeliz.', 1),
(79, NULL, 'Paso mucho tiempo preocupándome por mi futuro.', 1),
(80, NULL, 'Frecuentemente siento que no merezco las cosas buenas que hay en mi vida.', 1),
(81, NULL, 'Me siento algo triste cuando veo a alguien que está solo.', 1),
(82, NULL, 'Como poco delante de otros, pero después como demasiado y sin control cuando estoy solo(a).', 1),
(83, NULL, 'Mi familia está siempre gritando y peleando.', 1),
(84, NULL, 'A veces me siento muy infeliz de ser quien soy.', 1),
(85, NULL, 'Al parecer yo no disfruto estar con gente.', 1),
(86, NULL, 'Tengo talentos que otros chicos(as) desearían tener.', 1),
(87, NULL, 'Me siento muy incómodo(a) con la gente, a menos que esté seguro de que realmente les agrado.', 1),
(88, NULL, 'Matarme podría ser la forma más fácil de resolver mis problemas.', 1),
(89, NULL, 'A veces me confundo o me molesto cuando la gente es amable conmigo.', 1),
(90, NULL, 'El alcohol realmente parece ayudarme cuando me siento decaído(a).', 1),
(91, NULL, 'Rara vez espero algún acontecimiento con placer o emoción.', 1),
(92, NULL, 'Soy muy bueno(a) inventando excusas para salir de los problemas.', 1),
(93, NULL, 'Es muy importante que los niños aprendan a obedecer a los mayores.', 1),
(94, NULL, 'El sexo es placentero.', 1),
(95, NULL, 'A nadie realmente le importa si vivo o muero.', 1),
(96, NULL, 'Deberíamos respetar a nuestros mayores y no creer que nosotros sabemos más.', 1),
(97, NULL, 'A veces siento placer al lastimar a alguien físicamente.', 1),
(98, NULL, 'Frecuentemente me siento muy mal después de que algo bueno me ha pasado.', 1),
(99, NULL, 'No creo que la gente me vea como una persona atractiva.', 1),
(100, NULL, 'Socialmente soy un solitario y no me importa.', 1),
(101, NULL, 'Casi todo lo que intento me resulta fácil.', 1),
(102, NULL, 'Hay veces en las que me siento mucho más joven de lo que soy en realidad.', 1),
(103, NULL, 'Me gusta ser el centro de atención.', 1),
(104, NULL, 'Si quiero hacer algo, simplemente lo hago, sin pensar en lo que pueda pasar.', 1),
(105, NULL, 'Tengo un temor terrible de que aunque este muy delgado(a), si como, volveré a subir de peso.', 1),
(106, NULL, 'No me acerco mucho a las personas porque me da miedo de que se burlen de mí.', 1),
(107, NULL, 'Con más y más frecuencia yo he pensado en terminar con mi vida.', 1),
(108, NULL, 'A veces me critico  para que otra persona se sienta mejor.', 1),
(109, NULL, 'Me da mucho miedo cuando pienso en estar completamente solo(a) en el mundo.', 1),
(110, NULL, 'Las cosas buenas no perduran.', 1),
(111, NULL, 'He tenido algunos “encuentros” con la ley.', 1),
(112, NULL, 'Me gustaría cambiar mi cuerpo por el de otra persona.', 1),
(113, NULL, 'Hay muchas veces en las que deseo volver a ser mucho más joven', 1),
(114, NULL, 'No he visto un auto en los últimos diez años.', 1),
(115, NULL, 'Otras personas de mi edad parecen estar más seguras que yo de quiénes son y de lo que quieren.', 1),
(116, NULL, 'Pensar en sexo me confunde casi todo el tiempo.', 1),
(117, NULL, 'Hago lo que quiero sin preocuparme si afecta a los otros.', 1),
(118, NULL, 'Muchas de las cosas que parecen ser buenas hoy, se volverán malas después.', 1),
(119, NULL, 'Otras personas de mi edad nunca me llaman para juntarme con ellos.', 1),
(120, NULL, 'Ha habido veces en las que no he podido pasar el día sin un poco de marihuana.', 1),
(121, NULL, 'Hago mi vida peor de lo que tiene que ser.', 1),
(122, NULL, 'Prefiero que me digan qué hacer en vez  de decidir por mí mismo(a).', 1),
(123, NULL, 'He intentado suicidarme en el pasado.', 1),
(124, NULL, 'Me dan ataques incontrolables de hambre en los que como mucho un par de veces a la semana.', 1),
(125, NULL, 'Últimamente, pequeñas cosas parecen deprimirme.', 1),
(126, NULL, 'El año pasado crucé el Atlántico en avión 30 veces.', 1),
(127, NULL, 'Hay veces en que deseo ser otra persona.', 1),
(128, NULL, 'No me importa pasar por sobre otras personas para demostrar mi poder.', 1),
(129, NULL, 'Estoy avergonzado(a) de algunas cosas terribles que los adultos me hicieron cuando era joven.', 1),
(130, NULL, 'Trato de hacer todo lo que hago  tan perfecto como sea posible.', 1),
(131, NULL, 'Estoy contento(a) con la forma en que mi cuerpo se ha desarrollado.', 1),
(132, NULL, 'Frecuentemente me asusto cuando pienso en las cosas que tengo que hacer.', 1),
(133, NULL, 'Ultimamente me siento inquieto(a) y nervioso(a) casi todo el tiempo.', 1),
(134, NULL, 'Yo solía probar drogas fuertes para  ver qué efecto tendrían.', 1),
(135, NULL, 'Puedo "encantar" a la gente para que me den casi todo lo que yo quiero.', 1),
(136, NULL, 'A muchos otros chicos les dan facilidades que a mí no me dan.', 1),
(137, NULL, 'Cierta gente  me hizo cosas sexuales cuando yo era demasiado chico(a) para entender.', 1),
(138, NULL, 'Frecuentemente sigo comiendo hasta el punto de sentirme mal físicamente.', 1),
(139, NULL, 'Yo me burlaría de alguien en un grupo sólo para humillarlo(a)', 1),
(140, NULL, 'No me  gusta ser la persona en la que me he convertido.', 1),
(141, NULL, 'Al parecer hecho a perder las cosas buenas que me pasan.', 1),
(142, NULL, 'Aunque quiero tener amigos, no tengo casi ninguno.', 1),
(143, NULL, 'Me agrada que los sentimientos sobre el sexo sean parte de mi vida ahora.', 1),
(144, NULL, 'Estoy dispuesto(a) a "morirme de hambre" para ser más delgado(a) de lo que soy.', 1),
(145, NULL, 'Soy muy maduro(a) para mi edad y sé lo que quiero hacer en la vida.', 1),
(146, NULL, 'En muchas cosas me siento muy superior a la mayoría de la gente.', 1),
(147, NULL, 'Mi futuro parece sin esperanza.', 1),
(148, NULL, 'A mis padres les ha costado mucho trabajo disciplinarme.', 1),
(149, NULL, 'Cuando las cosas no resultan como quiero, rápidamente pierdo la calma.', 1),
(150, NULL, 'Frecuentemente me divierto haciendo ciertas cosas que son ilegales.', 1),
(151, NULL, 'Supongo que dependo demasiado de los otros para que me ayuden.', 1),
(152, NULL, 'Cuando estamos divirtiéndonos, mis amigos y yo podemos quedar bastante borrachos.', 1),
(153, NULL, 'Me siento solo(a) y vacío(a) la mayor parte del tiempo.', 1),
(154, NULL, 'Siento que mi vida no tiene sentido y no sé adónde voy.', 1),
(155, NULL, 'Decir mentiras es una cosa muy normal.', 1),
(156, NULL, 'He pensado en cómo y cuando podría suicidarme.', 1),
(157, NULL, 'A mí me gusta iniciar peleas.', 1),
(158, NULL, 'Hay veces en que nadie en mi casa parece preocuparse por mí.', 1),
(159, NULL, 'Es bueno tener una forma regular de hacer las cosas para evitar errores.', 1),
(160, NULL, 'Probablemente me merezco muchos de los problemas que tengo.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maci_respuestas`
--

CREATE TABLE IF NOT EXISTS `maci_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_maci` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_maci`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_maci` (`id_pregunta_maci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `maci_respuestas`
--

INSERT INTO `maci_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_maci`) VALUES
(2, 'V', '', 5, 1),
(2, 'V', '', 5, 2),
(2, 'V', '', 5, 3),
(2, 'V', '', 5, 4),
(2, 'V', '', 5, 5),
(2, 'V', '', 5, 6),
(2, 'V', '', 5, 7),
(2, 'V', '', 5, 8),
(2, 'V', '', 5, 9),
(2, 'V', '', 5, 10),
(2, 'V', '', 5, 11),
(2, 'V', '', 5, 12),
(2, 'F', '', 5, 13),
(2, 'V', '', 5, 14),
(2, 'V', '', 5, 15),
(2, 'V', '', 5, 16),
(2, 'V', '', 5, 17),
(2, 'V', '', 5, 18),
(2, 'V', '', 5, 19),
(2, 'V', '', 5, 20),
(2, 'V', '', 5, 21),
(2, 'V', '', 5, 22),
(2, 'V', '', 5, 23),
(2, 'V', '', 5, 24),
(2, 'V', '', 5, 25),
(2, 'V', '', 5, 26),
(2, 'V', '', 5, 27),
(2, 'V', '', 5, 28),
(2, 'V', '', 5, 29),
(2, 'V', '', 5, 30),
(2, 'V', '', 5, 31),
(2, 'V', '', 5, 32),
(2, 'F', '', 5, 33),
(2, 'V', '', 5, 34),
(2, 'F', '', 5, 35),
(2, 'V', '', 5, 36),
(2, 'V', '', 5, 37),
(2, 'V', '', 5, 38),
(2, 'V', '', 5, 39),
(2, 'V', '', 5, 40),
(2, 'V', '', 5, 41),
(2, 'V', '', 5, 42),
(2, 'V', '', 5, 43),
(2, 'V', '', 5, 44),
(2, 'V', '', 5, 45),
(2, 'V', '', 5, 46),
(2, 'V', '', 5, 47),
(2, 'V', '', 5, 48),
(2, 'V', '', 5, 49),
(2, 'V', '', 5, 50),
(2, 'V', '', 5, 51),
(2, 'V', '', 5, 52),
(2, 'V', '', 5, 53),
(2, 'V', '', 5, 54),
(2, 'V', '', 5, 55),
(2, 'V', '', 5, 56),
(2, 'V', '', 5, 57),
(2, 'V', '', 5, 58),
(2, 'V', '', 5, 59),
(2, 'V', '', 5, 60),
(2, 'V', '', 5, 61),
(2, 'V', '', 5, 62),
(2, 'F', '', 5, 63),
(2, 'V', '', 5, 64),
(2, 'V', '', 5, 65),
(2, 'V', '', 5, 66),
(2, 'V', '', 5, 67),
(2, 'V', '', 5, 68),
(2, 'V', '', 5, 69),
(2, 'V', '', 5, 70),
(2, 'V', '', 5, 71),
(2, 'V', '', 5, 72),
(2, 'V', '', 5, 73),
(2, 'V', '', 5, 74),
(2, 'V', '', 5, 75),
(2, 'V', '', 5, 76),
(2, 'V', '', 5, 77),
(2, 'V', '', 5, 78),
(2, 'V', '', 5, 79),
(2, 'V', '', 5, 80),
(2, 'V', '', 5, 81),
(2, 'V', '', 5, 82),
(2, 'V', '', 5, 83),
(2, 'V', '', 5, 84),
(2, 'V', '', 5, 85),
(2, 'V', '', 5, 86),
(2, 'V', '', 5, 87),
(2, 'V', '', 5, 88),
(2, 'V', '', 5, 89),
(2, 'V', '', 5, 90),
(2, 'V', '', 5, 91),
(2, 'V', '', 5, 92),
(2, 'V', '', 5, 93),
(2, 'V', '', 5, 94),
(2, 'V', '', 5, 95),
(2, 'V', '', 5, 96),
(2, 'V', '', 5, 97),
(2, 'V', '', 5, 98),
(2, 'V', '', 5, 99),
(2, 'V', '', 5, 100),
(2, 'V', '', 5, 101),
(2, 'V', '', 5, 102),
(2, 'V', '', 5, 103),
(2, 'V', '', 5, 104),
(2, 'V', '', 5, 105),
(2, 'V', '', 5, 106),
(2, 'V', '', 5, 107),
(2, 'V', '', 5, 108),
(2, 'V', '', 5, 109),
(2, 'V', '', 5, 110),
(2, 'V', '', 5, 111),
(2, 'V', '', 5, 112),
(2, 'V', '', 5, 113),
(2, 'V', '', 5, 114),
(2, 'V', '', 5, 115),
(2, 'V', '', 5, 116),
(2, 'V', '', 5, 117),
(2, 'V', '', 5, 118),
(2, 'V', '', 5, 119),
(2, 'V', '', 5, 120),
(2, 'V', '', 6, 1),
(2, 'V', '', 6, 2),
(2, 'V', '', 6, 3),
(2, 'V', '', 6, 4),
(2, 'V', '', 6, 5),
(2, 'V', '', 6, 6),
(2, 'V', '', 6, 7),
(2, 'V', '', 6, 8),
(2, 'V', '', 6, 9),
(2, 'V', '', 6, 10),
(2, 'V', '', 6, 11),
(2, 'V', '', 6, 12),
(2, 'V', '', 6, 13),
(2, 'V', '', 6, 14),
(2, 'V', '', 6, 15),
(2, 'V', '', 6, 16),
(2, 'V', '', 6, 17),
(2, 'V', '', 6, 18),
(2, 'V', '', 6, 19),
(2, 'V', '', 6, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_seccion`
--

CREATE TABLE IF NOT EXISTS `pregunta_seccion` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(140) DEFAULT NULL COMMENT 'Nombre clave de la pregunta',
  `enunciado` varchar(300) DEFAULT NULL,
  `seccion_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pregunta_seccion_seccion_id` (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Preguntas de una seccion' AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `pregunta_seccion`
--

INSERT INTO `pregunta_seccion` (`id`, `nombre`, `enunciado`, `seccion_id`) VALUES
(1, NULL, 'Hurto de dinero a personas desconocidas', 4),
(2, NULL, 'Hurto de dinero a personas desconocidas', 4),
(3, NULL, 'Hurto de dinero a conocidos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `PROVINCIA_ID` int(3) NOT NULL DEFAULT '0',
  `PROVINCIA_NOMBRE` varchar(23) DEFAULT NULL,
  `PROVINCIA_REGION_ID` int(2) DEFAULT NULL,
  PRIMARY KEY (`PROVINCIA_ID`),
  KEY `PROVINCIA_REGION_ID` (`PROVINCIA_REGION_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`PROVINCIA_ID`, `PROVINCIA_NOMBRE`, `PROVINCIA_REGION_ID`) VALUES
(11, 'Iquique', 1),
(14, 'Tamarugal', 1),
(21, 'Antofagasta', 2),
(22, 'El Loa', 2),
(23, 'Tocopilla', 2),
(31, 'Copiapó', 3),
(32, 'Chañaral', 3),
(33, 'Huasco', 3),
(41, 'Elqui', 4),
(42, 'Choapa', 4),
(43, 'Limarí', 4),
(51, 'Valparaíso', 5),
(52, 'Isla de Pascua', 5),
(53, 'Los Andes', 5),
(54, 'Petorca', 5),
(55, 'Quillota', 5),
(56, 'San Antonio', 5),
(57, 'San Felipe de Aconcagua', 5),
(58, 'Marga Marga', 5),
(61, 'Cachapoal', 6),
(62, 'Cardenal Caro', 6),
(63, 'Colchagua', 6),
(71, 'Talca', 7),
(72, 'Cauquenes', 7),
(73, 'Curicó', 7),
(74, 'Linares', 7),
(81, 'Concepción', 8),
(82, 'Arauco', 8),
(83, 'Biobío', 8),
(84, 'Ñuble', 8),
(91, 'Cautín', 9),
(92, 'Malleco', 9),
(101, 'Llanquihue', 10),
(102, 'Chiloé', 10),
(103, 'Osorno', 10),
(104, 'Palena', 10),
(111, 'Coihaique', 11),
(112, 'Aisén', 11),
(113, 'Capitán Prat', 11),
(114, 'General Carrera', 11),
(121, 'Magallanes', 12),
(122, 'Antártica Chilena', 12),
(123, 'Tierra del Fuego', 12),
(124, 'Última Esperanza', 12),
(131, 'Santiago', 13),
(132, 'Cordillera', 13),
(133, 'Chacabuco', 13),
(134, 'Maipo', 13),
(135, 'Melipilla', 13),
(136, 'Talagante', 13),
(141, 'Valdivia', 14),
(142, 'Ranco', 14),
(151, 'Arica', 15),
(152, 'Parinacota', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REGION_ID` int(2) NOT NULL DEFAULT '0',
  `REGION_NOMBRE` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`REGION_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `region`
--

INSERT INTO `region` (`REGION_ID`, `REGION_NOMBRE`) VALUES
(1, 'Tarapacá'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Coquimbo'),
(5, 'Valparaíso'),
(6, 'Región del Libertador Gral. Bernardo O’Higgins'),
(7, 'Región del Maule'),
(8, 'Región del Biobío'),
(9, 'Región de la Araucanía'),
(10, 'Región de Los Lagos'),
(11, 'Región Aisén del Gral. Carlos Ibáñez del Campo'),
(12, 'Región de Magallanes y de la Antártica Chilena'),
(13, 'Región Metropolitana de Santiago'),
(14, 'Región de Los Ríos'),
(15, 'Arica y Parinacota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `primerNombre` varchar(50) NOT NULL,
  `inicialSegundoNombre` varchar(50) NOT NULL,
  `primerApellido` varchar(50) NOT NULL,
  `segundoApellido` varchar(50) NOT NULL,
  `iniciales` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `usuario`, `primerNombre`, `inicialSegundoNombre`, `primerApellido`, `segundoApellido`, `iniciales`) VALUES
(6, 'anonimo', 'Pedro', 'F', 'COntreras', 'Soto', 'PFCS'),
(7, 'anonimo', 'Primer Nombre', 'O', 'Primer Apellido', 'Segundo Apellido', 'POPS'),
(8, 'anonimo', 'Primer Nombre', 'O', 'Primer Apellido', 'Segundo Apellido', 'POPS'),
(9, 'anonimo', 'qwe', 'Q', 'qwewe', 'qwee', 'QQQQ'),
(10, 'anonimo', 'Nelson', 'J', 'Cortés', 'Contreras', 'NJCC'),
(11, 'anonimo', 'Primer Nombre', 'O', 'Primer Apellido', 'Segundo Apellido', 'POPS'),
(12, 'anonimo', 'HOLA', '1', '2311', '1111', 'H121'),
(13, 'anonimo', 'pepoe', 'C', 'rojas', 'núñez', 'PCRN'),
(14, 'anonimo', '+plkopjoi', 'P', 'lmoijoiju', 'lmjokjoij', '+PLL'),
(15, 'anonimo', '+plkopjoi', 'P', 'lmoijoiju', 'lmjokjoij', '+PLL'),
(16, 'anonimo', 'Juan', 'P', 'Jaramillo', 'Lacoste', 'JPJL'),
(17, 'anonimo', 'adqadasdas', 'D', 'asdasdasd', 'asdasdasd', 'ADAA'),
(18, 'anonimo', 'werw34rwe', 'W', 'fserfsd', 'sdfrsdf', 'WWFS'),
(19, 'anonimo', 'Primer Nombre', 'O', 'Primer Apellido', '', 'POP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_instrumento`
--

CREATE TABLE IF NOT EXISTS `seccion_instrumento` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `instrumento_id` int(4) NOT NULL COMMENT 'Instrumento al que pertenece la seccion',
  `seccion_id` int(4) DEFAULT NULL COMMENT 'Seccion padre',
  `nombre` varchar(140) CHARACTER SET utf8 NOT NULL COMMENT 'Nombre clave de la seccion',
  `titulo` varchar(140) CHARACTER SET utf8 NOT NULL COMMENT 'Titulo de presentacion de la seccion',
  `descripcion` varchar(300) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_seccion_instrumento_padre` (`seccion_id`),
  KEY `fk_seccion_instrumento_instrumento_id` (`instrumento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Secciones de un Instrumento' AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `seccion_instrumento`
--

INSERT INTO `seccion_instrumento` (`id`, `instrumento_id`, `seccion_id`, `nombre`, `titulo`, `descripcion`) VALUES
(4, 1, NULL, 'eda_hurtos_robos', 'Hurtos y Robos', ''),
(5, 1, NULL, 'eda_agresiones', 'Agresiones', ''),
(6, 1, NULL, 'eda_otros_delitos', 'Otros delitos', ''),
(7, 1, NULL, 'eda_preguntas', 'Preguntas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_forgot_password`
--

CREATE TABLE IF NOT EXISTS `sf_guard_forgot_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `sf_guard_forgot_password`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Administrator group', '2010-10-19 01:48:58', '2010-10-19 01:48:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `sf_guard_group_permission`
--

INSERT INTO `sf_guard_group_permission` (`group_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(2, 2, '2010-10-19 01:48:58', '2010-10-19 01:48:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `sf_guard_permission`
--

INSERT INTO `sf_guard_permission` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Administrator permission', '2010-10-19 01:48:58', '2010-10-19 01:48:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `sf_guard_remember_key`
--

INSERT INTO `sf_guard_remember_key` (`id`, `user_id`, `remember_key`, `ip_address`, `created_at`, `updated_at`) VALUES
(2, 2, '8e7j1zcivqko4ckow4k8gc08wksoggk', '132.213.232.111', '2011-01-17 13:43:54', '2011-01-17 13:43:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `first_name`, `last_name`, `email_address`, `username`, `algorithm`, `salt`, `password`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`) VALUES
(2, 'Paula Andrea', 'Alarcón Bañares', 'john.doe@gmail.com', 'admini', 'sha1', 'af10c4c7f920e09cd5c7ec984a84408d', '7777a8289bf7f5c327ff38f4144e48d74047290f', 1, 1, '2011-07-25 03:39:10', '2010-10-19 01:48:58', '2011-07-25 03:39:10'),
(3, 'Gustavo Aníbal', 'Lacoste Zúñiga', 'gustavo@lacosox.org', 'gustavo', 'sha1', 'af10c4c7f920e09cd5c7ec984a84408d', '7777a8289bf7f5c327ff38f4144e48d74047290f', 1, 1, '2011-07-25 07:15:53', '2011-05-06 03:02:41', '2011-07-25 07:15:53'),
(4, 'Lorena Soledad', 'Wenger Amengual', 'ww', '1212', 'sha1', 'af10c4c7f920e09cd5c7ec984a84408d', '7777a8289bf7f5c327ff38f4144e48d74047290f', 1, 0, '2011-07-02 04:13:02', '0000-00-00 00:00:00', '2011-07-02 04:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(2, 2, '2010-10-19 01:48:58', '2010-10-19 01:48:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `sf_guard_user_permission`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sqifa_preguntas`
--

CREATE TABLE IF NOT EXISTS `sqifa_preguntas` (
  `id_pregunta_SQIFA` int(255) NOT NULL AUTO_INCREMENT,
  `num_pregunta` int(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `es_requerido` tinyint(1) DEFAULT NULL,
  `bloque_num` int(11) NOT NULL,
  PRIMARY KEY (`id_pregunta_SQIFA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `sqifa_preguntas`
--

INSERT INTO `sqifa_preguntas` (`id_pregunta_SQIFA`, `num_pregunta`, `texto`, `es_requerido`, `bloque_num`) VALUES
(1, 1, '¿Piensas que el alcohol domina tu vida y que su consumo está fuera de control?', 1, 1),
(2, 2, '¿Te sientes deprimido, enojado o ansioso si no estás bebiendo?', 1, 1),
(3, 3, '¿Piensas que la droga domina tu vida y que su consumo está fuera de control?', 1, 1),
(4, 4, '¿La idea de no consumir te produce preocupación, enojo o tristeza?', 1, 1),
(5, 5, '¿Te sientes realmente triste o miserable?', 1, 1),
(6, 6, '¿Te sientes desagradado contigo mismo o con tu vida?', 1, 1),
(7, 7, '¿Tienes actualmente flashback acerca de eventos pasados perturbadores, que no puedes parar?', 1, 1),
(8, 8, '¿Tienes fuertes recuerdos  acerca de eventos pasados perturbadores, que te hacen sentir mal, asustado o enojado?', 1, 1),
(9, 9, '¿Tienes ataques de pánico (por ejemplo, miedo abrumador, palpitaciones, respiración acelerada o estómago revuelto)?', 1, 1),
(10, 10, '¿Te sientes preocupado y/o con miedo durante largos períodos de tiempo?', 1, 1),
(11, 11, '¿Te causas daño a ti mismo (por ejemplo, cortes o sobredosis)?*', 1, 1),
(12, 12, '¿Piensas en hacerte daño o suicidarte?*', 1, 1),
(13, 13, '¿Alguna vez has recibido tratamiento para cualquiera de los temas que acabamos de conversar (depresión, trastorno de estrés postraumático, ansiedad, uso de drogas / alcohol, autoagresiones)?', 1, 2),
(14, 14, '¿Alguna vez has consultado con un médico / consejero / terapeuta u otro profesional sobre cualquiera de estos temas?', 1, 2),
(15, 15, '¿Alguna vez has tomado pastillas / medicamentos relacionados con tu comportamiento o por cómo te sentías?', 1, 2),
(16, 16, '¿Presenta el joven una prolongada y severa hiperactividad y comportamientos impulsivos más allá de lo esperable?', 1, 3),
(17, 17, '¿Se producen la hiperactividad y comportamiento impulsivo en todo momento y contexto?', 1, 3),
(18, 18, '¿Parece el joven excesivamente preocupado / suspicaz o malinterpreta con frecuencia las situaciones?', 1, 3),
(19, 19, '¿Tiene el joven conductas extrañas o parece responder a voces o ver cosas que no están allí?', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sqifa_respuestas`
--

CREATE TABLE IF NOT EXISTS `sqifa_respuestas` (
  `id_user` bigint(20) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `comentario` varchar(281) DEFAULT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  `id_pregunta_SQIFA` int(255) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_encuestado`,`id_pregunta_SQIFA`),
  KEY `id_encuestado` (`id_encuestado`),
  KEY `id_pregunta_SQIFA` (`id_pregunta_SQIFA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `sqifa_respuestas`
--

INSERT INTO `sqifa_respuestas` (`id_user`, `respuesta`, `comentario`, `id_encuestado`, `id_pregunta_SQIFA`) VALUES
(2, 'V', '', 5, 1),
(2, 'V', '', 5, 2),
(2, 'V', '', 5, 3),
(2, 'V', '', 5, 4),
(2, 'V', '', 5, 5),
(2, 'V', '', 5, 6),
(2, 'V', '', 5, 7),
(2, 'V', '', 5, 8),
(2, 'V', '', 5, 9),
(2, 'V', '', 5, 10),
(2, 'V', '', 5, 11),
(2, 'V', '', 5, 12),
(2, 'V', '', 5, 13),
(2, 'V', '', 5, 14),
(2, 'Si', '', 5, 15),
(2, 'No, nunca', '', 5, 16),
(2, 'A veces', '', 5, 17),
(2, 'A veces', '', 5, 18),
(2, 'A veces', '', 5, 19),
(2, 'V', 'holi', 10, 1),
(2, 'F', '', 10, 2),
(2, 'F', '', 10, 3),
(2, 'F', '', 10, 4),
(2, 'F', '', 10, 5),
(2, 'F', '', 10, 6),
(2, 'F', '', 10, 7),
(2, 'F', '', 10, 8),
(2, 'F', '', 10, 9),
(2, 'F', '', 10, 10),
(2, 'F', '', 10, 11),
(2, 'F', '', 10, 12),
(2, 'F', '', 10, 13),
(2, 'F', '', 10, 14),
(2, 'F', '', 10, 15),
(2, 'F', '', 10, 16),
(2, 'No, nunca', '', 10, 17),
(2, 'A veces', '', 10, 18),
(2, 'A veces', '', 10, 19),
(2, 'Si, mucho', '', 11, 1),
(2, 'Si, mucho', '', 11, 2),
(2, 'Si, mucho', '', 11, 3),
(2, 'Si, mucho', '', 11, 4),
(2, 'Si, mucho', '', 11, 5),
(2, 'Si, mucho', '', 11, 6),
(2, 'Si, mucho', '', 11, 7),
(2, 'Si, mucho', '', 11, 8),
(2, 'Si, mucho', '', 11, 9),
(2, 'Si, mucho', '', 11, 10),
(2, 'Si, mucho', '', 11, 11),
(2, 'Si, mucho', '', 11, 12),
(2, 'Si', '', 11, 13),
(2, 'Si', '', 11, 14),
(2, 'Si', '', 11, 15),
(2, 'No, nunca', '', 11, 16),
(2, 'No, nunca', '', 11, 17),
(2, 'No, nunca', '', 11, 18),
(2, 'No, nunca', '', 11, 19),
(2, 'No, nunca', '', 13, 1),
(2, 'No, nunca', '', 13, 2),
(2, 'No, nunca', '', 13, 3),
(2, 'No, nunca', '', 13, 4),
(2, 'No, nunca', '', 13, 5),
(2, 'No, nunca', '', 13, 6),
(2, 'No, nunca', '', 13, 7),
(2, 'No, nunca', '', 13, 8),
(2, 'No, nunca', '', 13, 9),
(2, 'No, nunca', '', 13, 10),
(2, 'No, nunca', '', 13, 11),
(2, 'No, nunca', '', 13, 12),
(2, 'Si', '', 13, 13),
(2, 'Si', '', 13, 14),
(2, 'Si', '', 13, 15),
(2, 'No, nunca', '', 107, 1),
(2, 'No, nunca', '', 107, 2),
(2, 'No, nunca', '', 107, 3),
(2, 'No, nunca', '', 107, 4),
(2, 'No, nunca', '', 107, 5),
(2, 'No, nunca', '', 107, 6),
(2, 'No, nunca', '', 107, 7),
(2, 'No, nunca', '', 107, 8),
(2, 'No, nunca', '', 107, 9),
(2, 'No, nunca', '', 107, 10),
(2, 'No, nunca', '', 107, 11),
(2, 'No, nunca', '', 107, 12),
(2, 'Si', '', 107, 13),
(2, 'Si', '', 107, 14),
(2, 'Si', '', 107, 15),
(2, 'No, nunca', '', 107, 16),
(2, 'No, nunca', '', 107, 17),
(2, 'No, nunca', '', 107, 18),
(2, 'No, nunca', '', 107, 19),
(2, 'A veces', '', 108, 1),
(2, 'A veces', '', 108, 2),
(2, 'A veces', '', 108, 3),
(2, 'A veces', '', 108, 4),
(2, 'A veces', '', 108, 5),
(2, 'A veces', '', 108, 6),
(2, 'A veces', '', 108, 7),
(2, 'Si, mucho', '', 108, 8),
(2, 'A veces', '', 108, 9),
(2, 'A veces', '', 108, 10),
(2, 'No, nunca', '', 108, 11),
(2, 'A veces', '', 108, 12),
(2, 'No', '', 108, 13),
(2, 'No', '', 108, 14),
(2, 'No', '', 108, 15),
(2, 'No, nunca', '', 108, 16),
(2, 'A veces', '', 108, 17),
(2, 'A veces', '', 108, 18),
(2, 'A veces', '', 108, 19),
(2, 'No, nunca', '', 109, 1),
(2, 'A veces', '', 109, 2),
(2, 'A veces', '', 109, 3),
(2, 'A veces', '', 109, 4),
(2, 'A veces', '', 109, 5),
(2, 'A veces', '', 109, 6),
(2, 'A veces', '', 109, 7),
(2, 'A veces', '', 109, 8),
(2, 'A veces', '', 109, 9),
(2, 'A veces', '', 109, 10),
(2, 'A veces', '', 109, 11),
(2, 'A veces', '', 109, 12),
(2, 'Si', '', 109, 13),
(2, 'No', '', 109, 14),
(2, 'No', '', 109, 15),
(2, 'A veces', '', 109, 16),
(2, 'A veces', '', 109, 17),
(2, 'A veces', '', 109, 18),
(2, 'A veces', '', 109, 19),
(2, 'No, nunca', '', 112, 1),
(2, 'A veces', '', 112, 2),
(2, 'A veces', '', 112, 3),
(2, 'Si, mucho', '', 112, 4),
(2, 'A veces', '', 112, 5),
(2, 'A veces', '', 112, 6),
(2, 'A veces', '', 112, 7),
(2, 'A veces', '', 112, 8),
(2, 'A veces', '', 112, 9),
(2, 'A veces', '', 112, 10),
(2, 'A veces', '', 112, 11),
(2, 'A veces', '', 112, 12),
(2, 'No', '', 112, 13),
(2, 'Si', '', 112, 14),
(2, 'Si', '', 112, 15),
(3, 'Si, mucho', '', 15, 1),
(3, 'Si, mucho', '', 15, 2),
(3, 'Si, mucho', '', 15, 3),
(3, 'Si, mucho', '', 15, 4),
(3, 'Si, mucho', '', 15, 5),
(3, 'Si, mucho', '', 15, 6),
(3, 'Si, mucho', '', 15, 7),
(3, 'Si, mucho', '', 15, 8),
(3, 'Si, mucho', '', 15, 9),
(3, 'Si, mucho', '', 15, 10),
(3, 'Si, mucho', '', 15, 11),
(3, 'Si, mucho', '', 15, 12),
(3, 'No', '', 15, 13),
(3, 'No', '', 15, 14),
(3, 'No', '', 15, 15),
(3, 'Si, mucho', '', 15, 16),
(3, 'Si, mucho', '', 15, 17),
(3, 'Si, mucho', '', 15, 18),
(3, 'Si, mucho', '', 15, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `prueba1` int(1) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `idtest` int(11) NOT NULL,
  PRIMARY KEY (`prueba1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `test`
--

INSERT INTO `test` (`prueba1`, `texto`, `idtest`) VALUES
(0, 'asd', 1),
(1, 'hola', 2),
(2, 'mundo', 2),
(3, 'como', 3),
(4, 'estas', 4),
(5, 'nice', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE IF NOT EXISTS `tiempo` (
  `tiempo` time NOT NULL,
  `nombre_modulo` varchar(255) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_encuestado` bigint(20) NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_encuestado` (`id_encuestado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`tiempo`, `nombre_modulo`, `id_user`, `id_encuestado`) VALUES
('00:00:55', 'FCMF', 3, 108),
('00:01:08', 'FCMF', 2, 108),
('00:02:39', 'CausasVigentes', 2, 13),
('00:01:11', 'FERR', 2, 11),
('00:02:21', 'FERR', 2, 109),
('00:00:27', 'FERR', 2, 113),
('00:01:26', 'CausasVigentes', 2, 113),
('00:00:55', 'CausasAnteriores', 2, 10),
('00:16:51', 'CausasVigentes', 2, 10),
('00:21:31', 'CausasVigentes', 2, 5),
('00:00:18', 'FERR', 2, 10),
('00:00:11', 'CausasAnteriores', 2, 5),
('00:00:45', 'CausasAnteriores', 2, 6),
('00:00:15', 'CausasVigentes', 2, 6),
('00:02:09', 'CausasActuales', 2, 6),
('00:00:11', 'CausasVigentes', 2, 112),
('00:00:06', 'CausasActuales', 2, 112),
('00:00:08', 'CausasAnteriores', 2, 112),
('01:26:58', 'CSVE', 2, 113),
('05:47:08', 'CSVE', 2, 110),
('00:05:08', 'IRNC', 2, 108),
('00:34:01', 'IRNC', 3, 107),
('01:21:55', 'IRNC', 3, 108);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `apartado_pregunta`
--
ALTER TABLE `apartado_pregunta`
  ADD CONSTRAINT `fk_apartado_pregunta_pregunta` FOREIGN KEY (`apartado_pregunta_id`) REFERENCES `apartado_pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apartado_pregunta_pregunta_seccion_id` FOREIGN KEY (`pregunta_seccion_id`) REFERENCES `pregunta_seccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cacsa2_respuestas`
--
ALTER TABLE `cacsa2_respuestas`
  ADD CONSTRAINT `CACSA2_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CACSA2_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CACSA2_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_CACSA2`) REFERENCES `cacsa2_preguntas` (`id_pregunta_CACSA2`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cacsa3_respuestas`
--
ALTER TABLE `cacsa3_respuestas`
  ADD CONSTRAINT `CACSA3_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CACSA3_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CACSA3_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_CACSA3`) REFERENCES `cacsa3_preguntas` (`id_pregunta_CACSA3`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `caie_respuestas`
--
ALTER TABLE `caie_respuestas`
  ADD CONSTRAINT `CAIE_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAIE_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAIE_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_CAIE`) REFERENCES `caie_preguntas` (`id_pregunta_CAIE`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `campo_respuesta`
--
ALTER TABLE `campo_respuesta`
  ADD CONSTRAINT `campo_respuesta_ibfk_1` FOREIGN KEY (`apartado_pregunta_id`) REFERENCES `apartado_pregunta` (`id`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `comuna_ibfk_1` FOREIGN KEY (`COMUNA_PROVINCIA_ID`) REFERENCES `provincia` (`PROVINCIA_ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `csve_respuestas`
--
ALTER TABLE `csve_respuestas`
  ADD CONSTRAINT `CSVE_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CSVE_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CSVE_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_CSVE`) REFERENCES `csve_preguntas` (`id_pregunta_CSVE`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `c_ingreso_causa`
--
ALTER TABLE `c_ingreso_causa`
  ADD CONSTRAINT `c_ingreso_causa_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `c_ingreso_materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eged_respuestas`
--
ALTER TABLE `eged_respuestas`
  ADD CONSTRAINT `EGED_respuestas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `EGED_respuestas_ibfk_2` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `EGED_respuestas_ibfk_3` FOREIGN KEY (`id_pregunta_EGED`) REFERENCES `eged_preguntas` (`id_pregunta_EGED`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuestado`
--
ALTER TABLE `encuestado`
  ADD CONSTRAINT `encuestado_ibfk_1` FOREIGN KEY (`id_user_responsable_principal`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `encuestado_ibfk_2` FOREIGN KEY (`id_user_responsable_secundario`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuestado_actinputado`
--
ALTER TABLE `encuestado_actinputado`
  ADD CONSTRAINT `encuestado_actinputado_ibfk_1` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encuestado_actinputado_ibfk_2` FOREIGN KEY (`select_tipo_materia3`) REFERENCES `c_ingreso_materia` (`id_materia`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `encuestado_actinputado_ibfk_3` FOREIGN KEY (`select_causa_delito3`) REFERENCES `c_ingreso_causa` (`codigo_delito`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuestado_canteriores`
--
ALTER TABLE `encuestado_canteriores`
  ADD CONSTRAINT `encuestado_canteriores_ibfk_1` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuestado_sanciones`
--
ALTER TABLE `encuestado_sanciones`
  ADD CONSTRAINT `encuestado_sanciones_ibfk_1` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estados_instrumentos`
--
ALTER TABLE `estados_instrumentos`
  ADD CONSTRAINT `estados_instrumentos_ibfk_1` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estados_instrumentos_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ferr_respuestas`
--
ALTER TABLE `ferr_respuestas`
  ADD CONSTRAINT `ferr_respuestas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`),
  ADD CONSTRAINT `ferr_respuestas_ibfk_2` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`);

--
-- Filtros para la tabla `irnc_respuestas`
--
ALTER TABLE `irnc_respuestas`
  ADD CONSTRAINT `IRNC_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `IRNC_respuestas_ibfk_53` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `IRNC_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `IRNC_respuestas_ibfk_63` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `IRNC_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_IRNC`) REFERENCES `irnc_preguntas` (`id_pregunta_IRNC`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `jir_respuestas`
--
ALTER TABLE `jir_respuestas`
  ADD CONSTRAINT `JIR_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `JIR_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `JIR_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_JIR`) REFERENCES `jir_preguntas` (`id_pregunta_JIR`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `maci_respuestas`
--
ALTER TABLE `maci_respuestas`
  ADD CONSTRAINT `maci_respuestas_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `maci_respuestas_ibfk_6` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `maci_respuestas_ibfk_7` FOREIGN KEY (`id_pregunta_maci`) REFERENCES `maci_preguntas` (`id_pregunta_maci`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta_seccion`
--
ALTER TABLE `pregunta_seccion`
  ADD CONSTRAINT `fk_pregunta_seccion_seccion_id` FOREIGN KEY (`seccion_id`) REFERENCES `seccion_instrumento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`PROVINCIA_REGION_ID`) REFERENCES `region` (`REGION_ID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_instrumento`
--
ALTER TABLE `seccion_instrumento`
  ADD CONSTRAINT `fk_seccion_instrumento_instrumento_id` FOREIGN KEY (`instrumento_id`) REFERENCES `instrumento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seccion_instrumento_padre` FOREIGN KEY (`seccion_id`) REFERENCES `seccion_instrumento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sf_guard_forgot_password`
--
ALTER TABLE `sf_guard_forgot_password`
  ADD CONSTRAINT `sf_guard_forgot_password_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sqifa_respuestas`
--
ALTER TABLE `sqifa_respuestas`
  ADD CONSTRAINT `SQIFA_respuestas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SQIFA_respuestas_ibfk_2` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SQIFA_respuestas_ibfk_3` FOREIGN KEY (`id_pregunta_SQIFA`) REFERENCES `sqifa_preguntas` (`id_pregunta_SQIFA`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD CONSTRAINT `tiempo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiempo_ibfk_2` FOREIGN KEY (`id_encuestado`) REFERENCES `encuestado` (`id_encuestado`) ON DELETE CASCADE ON UPDATE CASCADE;
