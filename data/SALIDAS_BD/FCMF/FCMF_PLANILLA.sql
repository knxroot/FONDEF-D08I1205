SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
fcmf_respuestas.concensoMode,
fcmf_respuestas.id_respuesta,
fcmf_respuestas.respuesta
FROM
fcmf_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = fcmf_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = fcmf_respuestas.id_user
