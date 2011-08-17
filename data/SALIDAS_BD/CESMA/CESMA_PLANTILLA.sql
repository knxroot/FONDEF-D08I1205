SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
sqifa_preguntas.num_pregunta,
sqifa_preguntas.texto,
sqifa_respuestas.respuesta,
sqifa_respuestas.comentario
FROM
sqifa_preguntas
INNER JOIN sqifa_respuestas ON sqifa_preguntas.id_pregunta_SQIFA = sqifa_respuestas.id_pregunta_SQIFA
INNER JOIN sf_guard_user ON sf_guard_user.id = sqifa_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = sqifa_respuestas.id_encuestado
