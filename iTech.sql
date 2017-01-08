drop database if exists negozio;
create database negozio;
use negozio;

create table admin
( email varchar(50) not null,
  passw varchar(20) not null
  );

create table cliente
( cf varchar(16) primary key,
  nome varchar(10) not null,
  cognome varchar(10) not null,
  indirizzo varchar(20) not null,
  email varchar(50) not null,
  passw varchar(20) not null,
  telefono int(10) not null
  );
  
CREATE TABLE prodotto
( idP int(10) PRIMARY key AUTO_INCREMENT,
  marca varchar(10) not null,
  modello varchar(15) not null,
  prezzo_IN int(5) not null,
  prezzo_OUT int(5) not null,
  quantita int(5),
  immagine varchar(15),
  categoria varchar(10),
  descrizione varchar(200)
);

create table riparazione 
( idR int(10) PRIMARY key AUTO_INCREMENT,
  descrizione varchar(200) not null,
  prezzo int(5),
  stato varchar(20) not null,
  cliente varchar(16),
  foreign key(cliente) references cliente(cf)
  );
  
  
   create table ordine
   
 ( idO int(10) PRIMARY key AUTO_INCREMENT,
 	 cf varchar(16), 	 
   stato varchar(50),
   prezzo int(5),
   data date,
   foreign key(cf) references cliente(cf)
);



create table acquisto
(
  idP int(10) ,
  idO int(10) ,
  quantita int(3),
  
     foreign key(idP) references prodotto(idP),
     foreign key(idO) references ordine(idO)
);