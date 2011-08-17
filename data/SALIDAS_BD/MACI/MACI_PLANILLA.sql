SELECT
encuestado.input_primer_nombre,
encuestado.input_primer_apellido,
encuestado.id_encuestado,
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.id,
maci_preguntas.texto,
maci_respuestas.respuesta
FROM
maci_preguntas
INNER JOIN maci_respuestas ON maci_preguntas.id_pregunta_maci = maci_respuestas.id_pregunta_maci
INNER JOIN sf_guard_user ON sf_guard_user.id = maci_respuestas.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = maci_respuestas.id_encuestado