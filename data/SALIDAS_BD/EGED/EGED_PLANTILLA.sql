SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
eged2_respuestas.concensoMode,
eged2_respuestas.id_respuesta,
eged2_respuestas.respuesta
FROM
eged2_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = eged2_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = eged2_respuestas.id_user