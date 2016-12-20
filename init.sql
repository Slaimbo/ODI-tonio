-- source ./init.sql

USE projet;

insert into user values
	('toto', '1234', 'toto@toto.fr', 'M', 'Toto', 'OtOt', '1995-04-28');

insert into user values
	('tata', '1234', 'tata@toto.fr', 'M', 'Tata', 'Atat', '1995-04-29');


insert into client values
	('toto', 0);


insert into magasinier values
	('tata', 5, 1500);



insert into produit values
	(0, 'gomme', 'sainte gomme', 'papeterie', 50, 10, 2, '2022-01-01', './photos/gomme.img', True);

insert into produit values
	(1, 'peinture', 'sainte peinture', 'plastique', 20, 5, 7, '2050-01-01', './photos/peinture.img', False);
