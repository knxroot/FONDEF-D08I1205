SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
cacsa2_preguntas.num_pregunta,
cacsa2_preguntas.texto,
cacsa2_respuestas.respuesta,
cacsa2_respuestas.respuesta2,
cacsa2_respuestas.comentario
FROM
cacsa2_preguntas
INNER JOIN cacsa2_respuestas ON cacsa2_preguntas.id_pregunta_CACSA2 = cacsa2_respuestas.id_pregunta_CACSA2
INNER JOIN sf_guard_user ON sf_guard_user.id = cacsa2_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = cacsa2_respuestas.id_encuestado
