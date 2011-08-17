SELECT
encuestado.id_encuestado,
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
jir_preguntas.num_pregunta,
jir_respuestas.respuesta
FROM
jir_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = jir_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = jir_respuestas.id_user
INNER JOIN jir_preguntas ON jir_respuestas.id_pregunta_JIR = jir_preguntas.id_pregunta_JIR
