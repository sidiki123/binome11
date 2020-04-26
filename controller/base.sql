drop table if exists Client;

drop table if exists Moto;

drop table if exists Vente;

/*==============================================================*/
/* Table: Client                                                */
/*==============================================================*/
create table Client
(
   clientId             int not null auto_increment,
   nom                  varchar(254),
   prenom               varchar(254),
   cnib                 varchar(254),
   primary key (clientId)
);

/*==============================================================*/
/* Table: Moto                                                  */
/*==============================================================*/
create table Moto
(
   id              int not null auto_increment,
   marque               varchar(254),
   modele               varchar(254),
   cylindre             varchar(254),
   categorie            varchar(254),
   serie                int,
   prix                 int,
   commentaire          varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table: Vente                                                 */
/*==============================================================*/
create table Vente
(
   id                   int not null auto_increment,
   clientId             int,
   date                 int,
   primary key (id)
);

-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 09 Avril 2020 à 23:00
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `moto`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`,`username`,`pass`) VALUES
(1,'simplon', '77015fb3a067258009438258a4b00fa8');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
