
CREATE TABLE profil (
	iduser int PRIMARY KEY auto_increment not null,
	prenom VARCHAR(30),
	nom VARCHAR(30),
	mail VARCHAR(50),
	sexe BOOLEAN,
	date_debut DATE,
	SHARE_coach BOOLEAN,
	statut VARCHAR(30),
	password VARCHAR(2000)
);
CREATE TABLE  signalement
(
	userid int ,
	signal_id int PRIMARY KEY not null auto_increment,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	commentaire VARCHAR(200)

);


CREATE TABLE indice 
(
	userid int,
	indice INT,
	signalement_id int,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN KEY (signalement_id) REFERENCES signalement(signal_id)
);

CREATE TABLE emoji 
(
	emoid int PRIMARY key not NULL auto_increment,
	emoname varCHAR (20),
	emoval int not null

);

create table questionaire 
(
	questionnaire_id int PRIMARY KEY NOT NULL auto_increment,
	userid int,
	emoji1 int,
	emoji2 int,
	emoji3 int,
	questionaire_date DATE,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN key (emoji1) REFERENCES emoji(emoid),
	FOREIGN key (emoji2) REFERENCES emoji(emoid),
	FOREIGN key (emoji3) REFERENCES emoji(emoid)

)


INSERT INTO emoji (emoid, emoname, emoval) VALUES (1, 'Anxieux', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (2, 'Miserable', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (3, 'Nerveux', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (4, 'Ennuyé', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (5, 'Content', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (6, 'Surprit', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (7, 'Peur', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (8, 'Triste', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (9, 'Donfus', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (10, 'Septique', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (11, 'Incertain', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (12, 'Encouragé', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (13, 'Hésitant', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (14, 'Perplexe', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (15, 'Stupfait', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (16, 'Heureux', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (17, 'Pessimiste', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (18, 'Contrarié', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (19, 'Enchanté', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (20, 'Interessé', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (21, 'Coléreux', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (22, 'Effrayé', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (23, 'Jayful', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (24, 'Tendu', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (25, 'Timide', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (26, 'Amoureux', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (27, 'Agacé', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (28, 'Curieux', 0);
