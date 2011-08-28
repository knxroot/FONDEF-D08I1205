SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
entrevista_respuestas.concensoMode,
entrevista_respuestas.id_respuesta,
entrevista_respuestas.respuesta
FROM
entrevista_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = entrevista_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = entrevista_respuestas.id_user
