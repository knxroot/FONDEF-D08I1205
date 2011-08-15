SELECT
sf_guard_user.first_name,
sf_guard_user.last_name,
sf_guard_user.email_address,
tiempo.tiempo,
tiempo.nombre_modulo,
encuestado.input_primer_nombre,
encuestado.input_otros_nombres,
encuestado.input_primer_apellido,
encuestado.input_segundo_apellido,
encuestado.input_run_nconverificador,
sf_guard_user.username,
sf_guard_user.last_login
FROM
tiempo
INNER JOIN sf_guard_user ON sf_guard_user.id = tiempo.id_user
INNER JOIN encuestado ON encuestado.id_encuestado = tiempo.id_encuestado
ORDER BY
tiempo.tiempo DESC