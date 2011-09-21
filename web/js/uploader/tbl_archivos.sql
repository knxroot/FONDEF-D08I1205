CREATE TABLE IF NOT EXISTS `archivos` (
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `id_encuestado` bigint(20) DEFAULT NULL,
  `concensoMode` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;