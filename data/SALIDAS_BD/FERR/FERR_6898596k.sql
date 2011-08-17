SELECT
ferr2_respuestas.concensoMode,
ferr2_respuestas.id_respuesta,
ferr2_respuestas.respuesta,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.username,
encuestado.id_encuestado,
encuestado.input_primer_nombre,
encuestado.input_primer_apellido
FROM
ferr2_respuestas
INNER JOIN sf_guard_user ON sf_guard_user.id = ferr2_respuestas.id_user
INNER JOIN encuestado ON ferr2_respuestas.id_encuestado = encuestado.id_encuestado
WHERE
sf_guard_user.username LIKE '%6898596k%'