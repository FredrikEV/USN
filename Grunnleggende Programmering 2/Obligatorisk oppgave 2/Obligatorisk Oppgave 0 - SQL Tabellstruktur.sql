DROP TABLE IF EXISTS klasse;

CREATE TABLE IF NOT EXISTS klasse

(
    klassekode  VARCHAR(3),
    klassenavn  VARCHAR(100),
    studiumkode VARCHAR(4),
    PRIMARY KEY (klassekode)
)   DEFAULT CHARSET=utf8; 

INSERT INTO klasse (klassekode, klassenavn, studiumkode)
VALUES
    ('IT1', 'IT og informasjonssystemer 1.år', 'ITIS'),
    ('IT2', 'IT og informasjonssystemer 2.år', 'ITIS'),
    ('IT3', 'IT og informasjonssystemer 3.år', 'ITIS');


COMMIT;


DROP TABLE IF EXISTS bilde;

CREATE TABLE IF NOT EXISTS bilde

(
    bildenr INTEGER,
    dato  DATE,
    filnavn VARCHAR(100),
    beskrivelse MEDIUMTEXT,  
    PRIMARY KEY (bildenr)
)   DEFAULT CHARSET=utf8; 

INSERT INTO bilde (bildenr, dato, filnavn, beskrivelse)
VALUES
    (001, '2020-03-01', 'tb.jpg', 'flott bilde av Tove'),
    (002, '2020-04-01', 'gb.jpg', 'grusomt bilde av Geir'),
    (003, '2020-04-15', 'mj.jpg', 'Marius i solnedgang');


COMMIT;

DROP TABLE IF EXISTS student;

CREATE TABLE IF NOT EXISTS student

(

    brukernavn VARCHAR(10),
    fornavn VARCHAR(50),
    etternavn VARCHAR(50),
    klassekode VARCHAR(3), 
    bildenr INTEGER, 
    CONSTRAINT brukernavnPN PRIMARY KEY (brukernavn),
    CONSTRAINT klassekodeFN 
        FOREIGN KEY (klassekode)
        REFERENCES klasse (klassekode),
    CONSTRAINT bildenrFN 
        FOREIGN KEY (bildenr)
        REFERENCES bilde (bildenr)
)   DEFAULT CHARSET=utf8; 

INSERT INTO student (brukernavn, fornavn, etternavn, klassekode, bildenr)
VALUES
    ('gb', 'Geir', 'Bjarvin', 'IT1', 002),
    ('mrj', 'Marius R.', 'Johannesen', 'IT1', 003),
    ('tb', 'Tove', 'Bøe', 'IT2', 001);


COMMIT;

DROP TABLE IF EXISTS bruker;

CREATE TABLE IF NOT EXISTS bruker

(
    brukernavn VARCHAR(100),
    passord VARCHAR(100),
    PRIMARY KEY (brukernavn)
)   DEFAULT CHARSET=utf8; 

INSERT INTO bruker (brukernavn, passord)
VALUES
    ('bruker1', 'passord1'),
    ('bruker2', 'passord2');

COMMIT;
