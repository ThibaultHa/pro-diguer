CREATE TABLE profil 
(
	iduser int PRIMARY KEY not null auto_increment,
	prenom VARCHAR,
	nom VARCHAR,
	mail VARCHAR,
	sexe BOOLEAN,
	date_debut DATE,
	SHARE_coach BOOLEAN,
	passord VARCHAR
)
CREATE TABLE  signalement
(
	userid int ,
	signal_id int PRIMARY KEY not null auto_increment,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	commentaire VARCHAR(200)

)
	
CREATE TABLE indice 
(
	userid int,
	indice INT,
	signalement_id int,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN KEY (signalement_id) REFERENCES signalement(signal_id)
)

CREATE TABLE emoji 
(
	emoid int PRIMARY key not NULL auto_increment,
	emoname varCHAR (20),
	emoval int not null

)

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
