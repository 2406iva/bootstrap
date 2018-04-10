#mysql -uedunova -pedunova --default_character_set=utf8 <C:\xampp\htdocs\bootstrap\dnevnikcitanja.sql
drop database if exists dnevnikcitanja;
create database dnevnikcitanja character set utf8;

use dnevnikcitanja;

create table korisnik (
sifra int not null primary key auto_increment,
ime varchar (10) not null,
prezime varchar (20) not null,
korisnickoime varchar (20) not null,
email varchar (40) not null,
lozinka varchar (32) not null,
imednevnika varchar (100) not null
);   

create table knjiga (
sifra int not null  primary key auto_increment,
naslov varchar (60) not null,
autor varchar (60) not null
);

create table procitao (
sifra int not null  primary key auto_increment,
korisnik int not null,
knjiga int not null
);

create table citanje (
sifra int not null primary key auto_increment,
knjiga int not null,
biljeska varchar (50000) not null
);


alter table citanje add foreign key (knjiga) references knjiga (sifra);
alter table procitao add foreign key (knjiga) references knjiga (sifra);
alter table procitao add foreign key (korisnik) references korisnik (sifra);

insert into korisnik (ime,prezime,korisnickoime,email,lozinka,imednevnika) values 
('Ivana', 'Martinović','ivadiva','imartinovic97@gmail.com', md5('im'), 'knjiškimoljac');


INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (1,'Tvrđava','Meša Selimović');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (2,'Magla i Mjesečina','Meša Selimović');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (3,'Tišine','Meša Selimović');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (4,'Ex ponto','Ivo Andrić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (5,'Derviš i smrt','Meša Selimović');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (6,'Ostrvo','Meša Selimović');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (7,'Nemiri','Ivo Andrić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (8,'Na Drini ćuprija','Ivo Andrić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (9,'Travnička kronika','Ivo Andrić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (10,'Prokleta avlija','Ivo Andrić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (15,'Harry Potter i Red feniksa','J.K.Rowling');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (16,'Harry Potter i Princ miješane krvi','J.K.Rowling');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (17,'Harry Potter i darovi smrti','J.K.Rowling');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (18,'Prstenova družina','J.R.R.Tolkien');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (19,'Dvije kule','J.R.R.Tolkien');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (20,'Povratak kralja','J.R.R.Tolkien');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (21,'Hobit','J.R.R.Tolkien');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (22,'Ponos i predrasude','Jane Austen');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (36,'Ubojstvo u Orient Expressu','Agatha Christie');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (42,'Nijemi svjedok','Agatha Christie');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (46,'Tessa','Thomas Hardy');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (58,'Kome zvono zvoni','Ernest Hemingway');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (74,'Najljepša žena u gradu','Charles Bukowski');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (80,'Inferno','Dan Brown');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (81,'Anđeli i Demoni','Dan Brown');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (82,'Da Vincijev kod','Dan Brown');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (83,'Digitalna tvrđava','Dan Brown');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (102,'Madame Bovary','Gustave Flaubert');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (113,'Božanstvena komedija','Dante Alighieri');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (123,'Stepski vuk','Herman Hesse');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (133,'Zločin i kazna','F.M.Dostojevski');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (134,'Idiot','F.M.Dostojevski');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (139,'Ana Karenjina','Lav N. Tolstoj');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (205,'Čudnovate zgode šegrta Hlapića','Ivana-Brlić Mažuranić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (266,'Smrt Smail-age Čengića','Ivan Mažuranić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (323,'Kontesa Nera','Marija Jurić Zagorka');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (330,'Kći Lotrščaka','Marija Jurić Zagorka');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (331,'Gordana','Marija Jurić Zagorka');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (359,'Gospoda Glembajevi','Miroslav Krleža');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (368,'Ubiti pticu rugalicu','Harper Lee');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (381,'Alkemičar','Paulo Coelho');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (386,'Zajedno sami','Marko Šelić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (387,'Higijena nesećanja','Marko Šelić');
INSERT INTO `knjiga` (`sifra`,`naslov`,`autor`) VALUES (388,'Rubikova stolica','Marko Šelić');