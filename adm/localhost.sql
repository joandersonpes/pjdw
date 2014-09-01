-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: August 28, 2014 as 09:28 AM
-- Versão do Servidor: 5.1.66
-- Versão do PHP: 5.3.3-7+squeeze15


CREATE DATABASE /*!32312 IF NOT EXISTS*/ `site` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `site`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;


CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
--
-- Extraindo dados da tabela `login`
--

LOCK TABLES `hosts` WRITE;

INSERT INTO `login` VALUES (1, 'jose', '123'), (7, 'joao', '1530'), (8, 'maria', '147');

UNLOCK TABLES
