SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
csve_preguntas.num_pregunta,
csve_respuestas.respuesta,
csve_respuestas.respuesta2a,
csve_respuestas.respuesta2b,
csve_respuestas.respuesta3,
csve_respuestas.comentario
FROM
csve_preguntas
INNER JOIN csve_respuestas ON csve_preguntas.id_pregunta_CSVE = csve_respuestas.id_pregunta_CSVE
INNER JOIN sf_guard_user ON sf_guard_user.id = csve_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = csve_respuestas.id_encuestado