
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

CREATE TABLE emoji 
(
	emoid int PRIMARY key not NULL auto_increment,
	emoname varCHAR (20),
	emoval int not null

);

CREATE TABLE  signalement
(
	userid int ,
	signal_userid int,
	signal_id int PRIMARY KEY not null auto_increment,
	emoji int,
    commentaire VARCHAR(2000),
    date_add DATE,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
    FOREIGN KEY (signal_userid) REFERENCES profil(iduser),
    FOREIGN key (emoji) REFERENCES emoji(emoid)
);

CREATE TABLE indice 
(
	userid int,
	indice INT,
	signalement_id int,
	FOREIGN KEY (userid) REFERENCES profil(iduser),
	FOREIGN KEY (signalement_id) REFERENCES signalement(signal_id)
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

);

create table conseil (
	coseilId int PRIMARY key not null auto_increment,
	leConseil varCHAR(200),
	titre varCHAR(50)

);


INSERT INTO `conseil` (`coseilId`, `leConseil`, `titre`) VALUES
(1, 'Veillez à une bonne qualité de sommeil ,cest tres imortant', 'Le Someil'),
(2, 'Optez pour une activité sportive ou physique régulière', 'Sport'),
(3, 'Gardez un équilibre alimentaire, ca fait un grand bien', 'Miam Miam'),
(4, 'Gardez le contrôle sur vos émotions', 'Gestion emotionnelle'),
(5, 'Cultivez votre vie personnelle', 'Deconnectez vous'),
(6, 'Préservez le sens que vous donnez à votre travail', 'Rappelez vous'),
(7, 'Favorisez l entraide et la collaboration au travail', 'vous n etes pas seul au travail'),
(8, 'Organisez votre temps de travail', 'La plannification '),
(9, 'Restez connecté à vos valeurs', 'Les valeur '),
(10, 'vous etre magnifique , continuez sur cette voie ', 'Quel Plaisir');







INSERT INTO profil (iduser, prenom, nom, mail, sexe, date_debut, SHARE_coach, password, statut) VALUES (1, 'Calvin', 'Djafari', 'c.djafari@epsi.fr', true, null, false, '$6$rounds=5000$usesomesillystri$5j.v6ib3.cm5DUA/FrY42w4XWlmRu/aDG5eONr/CKwrZ5/rCiCJhjmH4n/6KfsQw4LSXH8Z0MIC2NlnAfiKrK.', 'coath');
INSERT INTO profil (iduser, prenom, nom, mail, sexe, date_debut, SHARE_coach, password, statut) VALUES (2, 'Thibault', 'Hallard', 't.Hallard@epsi.fr', true, null, false, '$6$rounds=5000$usesomesillystri$5j.v6ib3.cm5DUA/FrY42w4XWlmRu/aDG5eONr/CKwrZ5/rCiCJhjmH4n/6KfsQw4LSXH8Z0MIC2NlnAfiKrK.', 'membre');
INSERT INTO profil (iduser, prenom, nom, mail, sexe, date_debut, SHARE_coach, password, statut) VALUES (3, 'Jules', 'Ravinet', 'j.Ravinet@epsi.fr', true, null, false, '$6$rounds=5000$usesomesillystri$5j.v6ib3.cm5DUA/FrY42w4XWlmRu/aDG5eONr/CKwrZ5/rCiCJhjmH4n/6KfsQw4LSXH8Z0MIC2NlnAfiKrK.', 'coath');
INSERT INTO profil (iduser, prenom, nom, mail, sexe, date_debut, SHARE_coach, password, statut) VALUES (4, 'Mathis', 'Crinchon', 'm.Crinchon@epsi.fr', true, null, false, '$6$rounds=5000$usesomesillystri$5j.v6ib3.cm5DUA/FrY42w4XWlmRu/aDG5eONr/CKwrZ5/rCiCJhjmH4n/6KfsQw4LSXH8Z0MIC2NlnAfiKrK.', 'membre');
INSERT INTO profil (iduser, prenom, nom, mail, sexe, date_debut, SHARE_coach, password, statut) VALUES (5, 'Mahrez', 'Saidi', 'm.saidi@epsi.fr', true, null, true, '$6$rounds=5000$usesomesillystri$5j.v6ib3.cm5DUA/FrY42w4XWlmRu/aDG5eONr/CKwrZ5/rCiCJhjmH4n/6KfsQw4LSXH8Z0MIC2NlnAfiKrK.', 'membre');

INSERT INTO emoji (emoid, emoname, emoval) VALUES (1, 'Anxieux', -4);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (2, 'Miserable', -9);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (3, 'Nerveux', -3);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (4, 'Ennuyé', -5);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (5, 'Content', 8);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (6, 'Surprit', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (7, 'Peur', -7);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (8, 'Triste', -10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (9, 'Confus', -2);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (10, 'Septique', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (11, 'Incertain', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (12, 'Encouragé', 9);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (13, 'Hésitant', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (14, 'Perplexe', -1);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (15, 'Stupfait', -4);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (16, 'Heureux', 10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (17, 'Pessimiste', -8);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (18, 'Contrarié', -6);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (19, 'Enchanté', 8);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (20, 'Interessé', 10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (21, 'Coléreux', -10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (22, 'Effrayé', -9);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (23, 'Joyeux', 10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (24, 'Tendu', -8);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (25, 'Timide', 0);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (26, 'Amoureux', 10);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (27, 'Agacé', -8);
INSERT INTO emoji (emoid, emoname, emoval) VALUES (28, 'Curieux', 6);



