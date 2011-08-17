SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
eda_respuestas.concensoMode,
eda_respuestas.id_respuesta,
eda_respuestas.respuesta
FROM
eda_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = eda_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = eda_respuestas.id_user
