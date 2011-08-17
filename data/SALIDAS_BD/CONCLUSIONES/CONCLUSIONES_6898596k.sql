SELECT
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.username,
conclusiones.id_respuesta,
conclusiones.respuesta,
conclusiones.concensoMode,
encuestado.id_encuestado,
encuestado.input_run_nconverificador,
encuestado.input_primer_nombre,
encuestado.input_primer_apellido
FROM
sf_guard_user
INNER JOIN conclusiones ON sf_guard_user.id = conclusiones.id_user
INNER JOIN encuestado ON conclusiones.id_encuestado = encuestado.id_encuestado
WHERE
sf_guard_user.username LIKE '%6898596k%'