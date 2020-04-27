USE pawtp;

CREATE TABLE appointments (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT NOT NULL,
    email TEXT NOT NULL,
    telefono TEXT NOT NULL,
    edad SMALLINT,
    talla_calzado SMALLINT,
    altura SMALLINT,
    color_pelo TEXT,
    fecha_nacimiento DATE NOT NULL,
    fecha_turno DATETIME NOT NULL,
    diagnotico MEDIUMBLOB
);
