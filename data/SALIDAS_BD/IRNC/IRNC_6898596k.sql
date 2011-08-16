SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
sf_guard_user.first_name,
sf_guard_user.last_name,
irnc2_respuestas.concensoMode,
irnc2_respuestas.id_respuesta,
irnc2_respuestas.respuesta,
sf_guard_user.username,
encuestado.id_encuestado
FROM
irnc2_respuestas
INNER JOIN sf_guard_user ON sf_guard_user.id = irnc2_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = irnc2_respuestas.id_encuestado
WHERE
sf_guard_user.username LIKE '%6898596k%'