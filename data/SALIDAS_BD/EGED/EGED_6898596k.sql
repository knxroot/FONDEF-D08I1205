SELECT
eged2_respuestas.concensoMode,
eged2_respuestas.id_respuesta,
eged2_respuestas.respuesta,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.username,
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
encuestado.input_run_nconverificador
FROM
eged2_respuestas
INNER JOIN sf_guard_user ON sf_guard_user.id = eged2_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = eged2_respuestas.id_encuestado
WHERE
sf_guard_user.username LIKE '%6898596k%'