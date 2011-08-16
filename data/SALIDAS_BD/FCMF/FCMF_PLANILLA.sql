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
sf_guard_user
Inner Join fcmf_respuestas ON sf_guard_user.id = fcmf_respuestas.id_user
Inner Join encuestado ON encuestado.id_encuestado = fcmf_respuestas.id_encuestado
