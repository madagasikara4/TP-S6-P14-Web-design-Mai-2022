create database infoia;
\c infoia;

create table admin(
    idAdmin serial primary key,
    identifiant varchar(50) not null,
    mdp varchar(100) not null
);

create table information(
    idInfo serial primary key,
    titre varchar,
    descri varchar,
    photo varchar,
    contenue varchar
);

insert into admin(identifiant,mdp) values ('admin01','admin01');