SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
caie_preguntas.num_pregunta,
caie_preguntas.texto,
caie_respuestas.respuesta,
caie_respuestas.comentario
FROM
caie_respuestas
INNER JOIN caie_preguntas ON caie_preguntas.id_pregunta_CAIE = caie_respuestas.id_pregunta_CAIE
INNER JOIN encuestado ON encuestado.id_encuestado = caie_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = caie_respuestas.id_user
