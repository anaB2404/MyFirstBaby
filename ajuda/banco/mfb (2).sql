-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Maio-2018 às 02:54
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebe`
--

INSERT INTO `bebe` (`Id_Bebe`, `tipo_bebe`, `Nome`, `Sobrenome`, `Semanas`, `Sexo`, `Id_Fk_Usuario`, `data_nascimento`) VALUES
(1, 0, 'Fetolino', 'Aiaiai', 5, 1, 9, NULL),
(2, 1, 'JoÃ£o Geraldo', 'de Oliveira Zanetti', NULL, 2, 11, '2017-05-12'),
(3, 2, 'Clarice', 'Amaje', 5, 1, 12, '2019-02-10'),
(4, 2, 'Juao', 'Zanetti', 5, 2, 13, '2018-05-16'),
(5, 2, 'Fetolino', 'Amaje', 18, 2, 14, '2018-06-05'),
(6, 2, 'Fetolino', 'Amaje', 18, 2, 14, '2018-06-05'),
(7, 1, 'JoÃ£osinho', 'Sales', NULL, 2, 15, '2018-05-01'),
(8, 2, 'HeloÃ­sa', 'Gabriel', 14, 1, 16, '2024-12-05'),
(9, 1, 'aaaaa', 'aaaaa', NULL, 1, 17, '2001-01-02'),
(10, 1, 'aaaaa', 'aaaaa', NULL, 1, 17, '2001-01-02'),
(11, 2, 'Christopher', 'Bernardo', 8, 2, 18, '2019-04-24'),
(12, 2, 'Christopher', 'Bernardo', 8, 2, 18, '2019-04-24');

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
  `nome` varchar(37) DEFAULT NULL,
  `id_fk_Postagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `id_fk_Usuario` (`id_fk_Usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
  `Id_Fk_Imagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Postagem`),
  KEY `Id_Fk_usuario` (`Id_Fk_usuario`),
  KEY `Id_Fk_Categoria` (`Id_Fk_Categoria`),
  KEY `Id_Fk_Imagem` (`Id_Fk_Imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`Id_Postagem`, `Conteudo`, `Titulo`, `Data_Hora`, `Id_Fk_usuario`, `Id_Fk_Categoria`, `Id_Fk_Imagem`) VALUES
(90, 'issai', 'aishaihias', NULL, 4, 4, NULL),
(91, '<p>skzdfnk.sdzj</p>\r\n', 'zjhfnzksdj', '2018-05-16 19:48:50', 17, NULL, NULL),
(92, 'aaaaaaaa', NULL, NULL, 17, NULL, NULL),
(93, '<p>kcknsdkjbckjsdbvj</p>\r\n', 'eita', '2018-05-16 20:26:54', 18, NULL, NULL),
(94, '<p>hiohgiohwighioghreighr</p>\r\n', 'fjhiowiorwihiwjhwioh', '2018-05-16 20:36:15', 18, NULL, NULL),
(95, '<p>zlsdkfmzs;lkcd</p>\r\n', 'knkczksd', '2018-05-16 20:37:48', 18, NULL, NULL),
(96, '<p>sdxdrdfgdrg</p>\r\n', 'sadnszdjkf', '2018-05-16 20:38:25', 18, NULL, NULL),
(25, 'sdjsdkdc', 'ewkjdlei', '2018-05-16 17:37:46', 1, NULL, NULL),
(26, NULL, 'HHHHHHHH', NULL, NULL, NULL, NULL),
(27, '<p>hhhhhhhh</p>\r\n', 'bbbbbbbb', NULL, NULL, NULL, NULL),
(28, '<p>&nbsp; &nbsp;MMMMMMMMMMMMM</p>\r\n', 'BBBBBBBBBBB', '2018-05-16 18:03:21', NULL, NULL, NULL),
(29, '<p>sssssssssssss</p>\r\n', 'sssssssss', '2018-05-16 18:12:25', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
('chapolin@gmail.com', '12345678', 10, 'Chapolin', 'Colorado', 1, '21/02/1989', 5),
('jedu185@gmail.com', '12345678', 11, 'JosÃ© Eduardo ', 'Oliveira Zanetti', 2, '1998', 2),
('thalitaamaje14@gmail.com', '14012001', 12, 'Thalita', 'Amaje', 1, '1986', 3),
('jose@gmail.com', '12345678', 13, 'JosÃ© Eduardo ', 'Zanetti', 2, '1998', 3),
('thalita@gmail.com', '12345678', 14, 'Thalita', 'Amaje', 1, '1986', 3),
('marco@gmail.com', '12345678', 15, 'Marco', 'Sales', 2, '1976', 2),
('stefany@hotmail.com', '123456', 16, 'Stefany', 'Gabriel', 0, '1965', 3),
('a@gmail.com', '12345678', 17, 'AAAAA', 'AAAAA', 2, '1998', 2),
('amanda@gmail.com', '12345678', 18, 'Amanda', 'GonÃ§alves', 1, '1980', 3);

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
