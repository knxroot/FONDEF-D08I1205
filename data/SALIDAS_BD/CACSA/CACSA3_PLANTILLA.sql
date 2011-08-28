SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
cacsa3_preguntas.num_pregunta,
cacsa3_preguntas.texto,
cacsa3_respuestas.respuesta,
cacsa3_respuestas.comentario
FROM
cacsa3_preguntas
INNER JOIN cacsa3_respuestas ON cacsa3_preguntas.id_pregunta_cacsa3 = cacsa3_respuestas.id_pregunta_cacsa3
INNER JOIN sf_guard_user ON sf_guard_user.id = cacsa3_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = cacsa3_respuestas.id_encuestado
