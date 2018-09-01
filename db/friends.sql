DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE usuarios
(
	  id       BIGSERIAL    PRIMARY KEY
	, email    VARCHAR(255) NOT NULL UNIQUE
	, password VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (email, password)
	VALUES ('oscarvegaherrera59@gmail.com', 'oscarvega');