-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Maio-2018 às 17:53
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
  `id_bebe` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_bebe` tinyint(4) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `semanas` int(4) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `Id_Fk_tipo_Usuario` (`id_fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebe`
--

INSERT INTO `bebe` (`id_bebe`, `tipo_bebe`, `nome`, `sobrenome`, `semanas`, `sexo`, `id_fk_usuario`, `data_nascimento`) VALUES
(1, 0, 'Fetolino', 'Aiaiai', 5, 1, 9, NULL),
(2, 1, 'JoÃ£o', 'Zanetti', NULL, 2, 12, '2018-05-04'),
(3, 1, 'shdlz', 'lkdh', NULL, 1, 12, '2001-01-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nome`) VALUES
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
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo_comentario` text,
  `id_fk_postagem` int(11) DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `Id_Fk_Postagem` (`id_fk_postagem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `id_fk_mensagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contato`),
  KEY `id_fk_usuario` (`id_fk_usuario`),
  KEY `id_fk_mensagem` (`id_fk_mensagem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

DROP TABLE IF EXISTS `imagem`;
CREATE TABLE IF NOT EXISTS `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `nome` varchar(37) DEFAULT NULL,
  `id_fk_postagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `id_fk_Usuario` (`id_fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(24) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` char(12) NOT NULL,
  `celular` varchar(13) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` text,
  `titulo` varchar(50) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `id_fk_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_postagem`),
  KEY `Id_Fk_usuario` (`id_fk_usuario`),
  KEY `Id_Fk_Categoria` (`id_fk_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `conteudo`, `titulo`, `data_hora`, `id_fk_usuario`, `id_fk_categoria`) VALUES
(1, 'Hello World!', 'hhhhhhhh', NULL, 12, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
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
  `senha` char(40) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `data_nascimento` varchar(20) DEFAULT NULL,
  `fk_id_tipo_usuario` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nome_juridico` varchar(30) NOT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `fk_Id_tipo_Usuario` (`id_usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `id_usuario`, `nome`, `sobrenome`, `sexo`, `data_nascimento`, `fk_id_tipo_usuario`, `email`, `nome_juridico`, `cnpj`) VALUES
('12345678', 1, 'José Eduardo', 'de Oliveira Zanetti', 1, '02/01/2001', 1, NULL, '', NULL),
('12345678', 2, 'Stefany', 'Gabriel', 2, '27/09/2001', 1, NULL, '', NULL),
('12345678', 3, 'Luana ', 'Sandes', 2, '18/09/2000', 1, NULL, '', NULL),
('12345678', 4, 'Ana Beatriz', 'Rodrigues Lopes', 2, '24/04/2001', 1, NULL, '', NULL),
('12345678', 5, 'Thalita', 'de Lira Amaje', 2, '14/02/2001', 1, NULL, '', NULL),
('12345678', 6, 'Silas ', 'Santana', 1, '03/09/2000', 1, NULL, '', NULL),
('12345678', 7, 'Eliane ', 'Alves', 2, '21/12/1971', 2, NULL, '', NULL),
('12345678', 8, 'João', 'Zanetti', 1, '26/06/1970', 3, NULL, '', NULL),
('12345678', 9, 'Maria', 'Adelaide', 2, '25/09/1965', 4, NULL, '', NULL),
('12345678', 10, 'Chapolin', 'Colorado', 1, '21/02/1989', 5, NULL, '', NULL),
('', 11, NULL, NULL, NULL, NULL, NULL, 'a', '', NULL),
('', 12, NULL, NULL, NULL, NULL, NULL, NULL, '', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

DROP TABLE IF EXISTS `vacinas`;
CREATE TABLE IF NOT EXISTS `vacinas` (
  `id_vacina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_vacina` varchar(35) DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `id_fk_bebe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vacina`),
  KEY `Id_Fk_Bebe` (`id_fk_bebe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas_aplicadas`
--

DROP TABLE IF EXISTS `vacinas_aplicadas`;
CREATE TABLE IF NOT EXISTS `vacinas_aplicadas` (
  `id_aplicacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk_bebe` int(11) NOT NULL,
  `id_fk_vacina` int(11) NOT NULL,
  PRIMARY KEY (`id_aplicacao`),
  KEY `id_fk_bebe` (`id_fk_bebe`),
  KEY `id_fk_vacina` (`id_fk_vacina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
