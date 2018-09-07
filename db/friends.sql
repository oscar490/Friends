DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE usuarios
(
	  id       BIGSERIAL    PRIMARY KEY
	, email    VARCHAR(255) NOT NULL UNIQUE
	, password VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (email, password)
	VALUES ('oscarvegaherrera59@gmail.com', 'oscarvega');






DROP TABLE IF EXISTS perfiles CASCADE;

CREATE TABLE perfiles
(
	   usuario_id BIGINT       REFERENCES usuarios (id) ON DELETE CASCADE
	  												    ON UPDATE CASCADE
	,  nombre     VARCHAR(255) NOT NULL
	,  apellidos  VARCHAR(255) NOT NULL
	,  imagen     VARCHAR(255) DEFAULT   'images/imagen_usuario.png'
);

INSERT INTO perfiles (usuario_id, nombre, apellidos, imagen)
	VALUES (1, 'Óscar', 'Vega Herrera', default);