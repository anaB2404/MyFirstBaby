-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Maio-2018 às 18:45
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebe`
--

DROP TABLE IF EXISTS `bebe`;
CREATE TABLE IF NOT EXISTS `bebe` (
  `Id_Bebe` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_bebe` tinyint(4) NOT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `Sobrenome` varchar(20) DEFAULT NULL,
  `Semanas` int(4) DEFAULT NULL,
  `Sexo` tinyint(1) DEFAULT NULL,
  `Id_Fk_Usuario` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`Id_Bebe`),
  KEY `Id_Fk_tipo_Usuario` (`Id_Fk_Usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebe`
--

INSERT INTO `bebe` (`Id_Bebe`, `tipo_bebe`, `Nome`, `Sobrenome`, `Semanas`, `Sexo`, `Id_Fk_Usuario`, `data_nascimento`) VALUES
(1, 0, 'Fetolino', 'Aiaiai', 5, 1, 9, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id_Categorias` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Categorias`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`Id_Categorias`, `Nome`) VALUES
(1, 'Saude'),
(2, 'Nutrição'),
(3, 'Pré_Natal'),
(4, 'Papais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `Id_Comentario` int(11) NOT NULL AUTO_INCREMENT,
  `Conteudo_comentario` text,
  `Id_Fk_Postagem` int(11) DEFAULT NULL,
  `Id_Fk_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Comentario`),
  KEY `Id_Fk_Postagem` (`Id_Fk_Postagem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

DROP TABLE IF EXISTS `imagem`;
CREATE TABLE IF NOT EXISTS `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk_Usuario` int(11) DEFAULT NULL,
  `nome` varchar(46) DEFAULT NULL,
  `id_fk_Postagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `id_fk_Usuario` (`id_fk_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `Id_Postagem` int(11) NOT NULL AUTO_INCREMENT,
  `Conteudo` text,
  `Titulo` varchar(50) DEFAULT NULL,
  `Data_Hora` datetime DEFAULT NULL,
  `Id_Fk_usuario` int(11) DEFAULT NULL,
  `Id_Fk_Categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Postagem`),
  KEY `Id_Fk_usuario` (`Id_Fk_usuario`),
  KEY `Id_Fk_Categoria` (`Id_Fk_Categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `Id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_usuario` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`Id_tipo_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id_tipo_usuario`, `Tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'Parceiro'),
(3, 'Gestante'),
(4, 'Pais'),
(5, 'Visitante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(30) NOT NULL,
  `Senha` char(40) NOT NULL,
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Sobrenome` varchar(20) DEFAULT NULL,
  `Sexo` tinyint(1) DEFAULT NULL,
  `Data_Nascimento` varchar(20) DEFAULT NULL,
  `fk_Id_tipo_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuario`),
  KEY `fk_Id_tipo_Usuario` (`Id_Usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `Senha`, `Id_Usuario`, `Nome`, `Sobrenome`, `Sexo`, `Data_Nascimento`, `fk_Id_tipo_Usuario`) VALUES
('jose@mfb.com', '12345678', 1, 'José Eduardo', 'de Oliveira Zanetti', 1, '02/01/2001', 1),
('stefany@mfb.com', '12345678', 2, 'Stefany', 'Gabriel', 2, '27/09/2001', 1),
('luana@mfb.com', '12345678', 3, 'Luana ', 'Sandes', 2, '18/09/2000', 1),
('ana@mfb.com', '12345678', 4, 'Ana Beatriz', 'Rodrigues Lopes', 2, '24/04/2001', 1),
('thalita@mfb.com', '12345678', 5, 'Thalita', 'de Lira Amaje', 2, '14/02/2001', 1),
('silas@mfb.com', '12345678', 6, 'Silas ', 'Santana', 1, '03/09/2000', 1),
('eliane@gmail.com', '12345678', 7, 'Eliane ', 'Alves', 2, '21/12/1971', 2),
('joao@gmail.com', '12345678', 8, 'João', 'Zanetti', 1, '26/06/1970', 3),
('maria@gmail.com', '12345678', 9, 'Maria', 'Adelaide', 2, '25/09/1965', 4),
('chapolin@gmail.com', '12345678', 10, 'Chapolin', 'Colorado', 1, '21/02/1989', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

DROP TABLE IF EXISTS `vacinas`;
CREATE TABLE IF NOT EXISTS `vacinas` (
  `Id_vacina` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Vacina` varchar(35) DEFAULT NULL,
  `Dose` int(11) DEFAULT NULL,
  `Id_Fk_Bebe` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_vacina`),
  KEY `Id_Fk_Bebe` (`Id_Fk_Bebe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
