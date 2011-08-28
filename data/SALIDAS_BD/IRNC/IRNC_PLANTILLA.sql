SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
irnc2_respuestas.concensoMode,
irnc2_respuestas.id_respuesta,
irnc2_respuestas.respuesta
FROM
irnc2_respuestas
INNER JOIN encuestado ON encuestado.id_encuestado = irnc2_respuestas.id_encuestado
INNER JOIN sf_guard_user ON sf_guard_user.id = irnc2_respuestas.id_user
