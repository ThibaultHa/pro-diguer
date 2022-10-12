CREATE TABLE profil (
	iduser int PRIMARY KEY auto_increment not null,
	prenom VARCHAR,
	nom VARCHAR,
	mail VARCHAR,
	sexe BOOLEAN,
	date_debut DATE,
	SHARE_coach BOOLEAN,
	password VARCHAR
);
CREATE TABLE  signalement (
	signal_id int not null auto_increment,
	userid FOREIGN KEY,
	commentaire VARCHAR,
	PRIMARY KEY (signal_id)
	);
	
CREATE TABLE indice (
	userid int,
	indice INT,
	signalement.id int,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN KEY (signalement.id) REFERENCES signalement(signal_id)
);

CREATE TABLE emoji (
	emoid int not NULL auto_increment,
	emoname varCHAR,
	emoval varCHAR,
	PRIMARY key (emoid)
);

create table questionaire (
	questionnaireid int NOT NULL auto_increment,
	userid int,
	emoji1 int,
	emoji2 int,
	emoji3 int,
	questionaire_date DATE,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN key (emoji1) REFERENCES emoji(emoid),
	FOREIGN key (emoji2) REFERENCES emoji(emoid),
	FOREIGN key (emoji3) REFERENCES emoji(emoid)
);
