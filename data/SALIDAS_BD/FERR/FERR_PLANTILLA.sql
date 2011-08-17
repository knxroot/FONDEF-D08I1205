SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
ferr2_respuestas.concensoMode,
ferr2_respuestas.id_respuesta,
ferr2_respuestas.respuesta
FROM
ferr2_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = ferr2_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = ferr2_respuestas.id_user
