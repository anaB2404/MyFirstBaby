-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Maio-2018 às 18:29
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
-- Database: `myfirstbaby`
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
  `foto_bebe` varchar(37) DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `Id_Fk_tipo_Usuario` (`id_fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebe`
--

INSERT INTO `bebe` (`id_bebe`, `tipo_bebe`, `nome`, `sobrenome`, `semanas`, `sexo`, `id_fk_usuario`, `data_nascimento`, `foto_bebe`) VALUES
(1, 0, 'Fetolino', 'Aiaiai', 5, 1, 9, NULL, NULL),
(2, 1, 'JoÃ£o', 'Zanetti', NULL, 2, 12, '2018-05-04', NULL),
(3, 1, 'shdlz', 'lkdh', NULL, 1, 12, '2001-01-02', NULL),
(4, 2, 'Kkmkd', 'Kkmdkf', 5, 1, 13, '2001-01-05', NULL),
(5, 1, 'aaaaa', 'Amaje', NULL, 1, 15, '2001-02-02', NULL),
(6, 1, 'drxtdr', 'zerfxdr', NULL, 2, 15, '2000-01-02', NULL),
(7, 1, 'drxtdr', 'zerfxdr', NULL, 2, 15, '2000-01-02', '544add5f88283c0a12fe1689d8bb0d74.jpg'),
(8, 1, 'Cristopher', 'Bernado', NULL, 2, 2, '2019-04-24', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id_imagem`, `id_fk_usuario`, `nome`, `id_fk_postagem`) VALUES
(17, 14, 'd7e0455c41fa2588c1fa29903f7b5b32.jpg', NULL),
(16, 15, 'd2134faa11885d3d66c5fda814696b75.jpg', NULL),
(15, 15, 'e98f1eaa8e5e8a059df79917063d1a5a.jpg', NULL),
(14, NULL, 'eee2967f073d3f919c5f52d49434b9e4.jpg', NULL),
(13, NULL, '4ea65793d13ba18aeb66d8e7d1077079.jpg', NULL),
(12, NULL, '38ad9689e041132e285d22190692e7ee.jpg', NULL),
(18, 14, 'c54a987620c82025dd80ea64554be1ec.jpg', NULL),
(19, 14, '8807c58628e055982c5ada91ebd56c79.jpg', NULL),
(20, 14, '7ff2450daa01bae4ee4f857614e95294.jpg', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `conteudo`, `titulo`, `data_hora`, `id_fk_usuario`, `id_fk_categoria`) VALUES
(18, '<p>ok&ccedil;fldfk;</p>\r\n', 'lek;lskae', '2018-05-27 12:03:31', 14, NULL),
(19, '<p>kjhkj.</p>\r\n', 'k,hjnk', '2018-05-27 12:05:18', 14, NULL),
(20, '<p>ekfj</p>\r\n', 'kfjÃ§s', '2018-05-27 12:05:36', 14, NULL),
(21, '<p>dskj</p>\r\n', 'kxdfj.', '2018-05-27 12:05:59', 14, NULL),
(22, 'krxdj', NULL, NULL, 14, NULL),
(23, 'aaaaaaaaaaaaaaaaaaaaaa', NULL, '2018-05-27 15:27:41', 2, NULL);

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
  `nome_juridico` varchar(30) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `foto_perfil` varchar(37) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `fk_Id_tipo_Usuario` (`id_usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `id_usuario`, `nome`, `sobrenome`, `sexo`, `data_nascimento`, `fk_id_tipo_usuario`, `email`, `nome_juridico`, `cnpj`, `foto_perfil`) VALUES
('12345678', 1, 'Ana Beatriz', 'Rodrigues', 1, '24/04/2001', 1, 'ana@mfb.com', NULL, NULL, ''),
('12345678', 2, 'Amanda', 'Maria', 1, '1981', 2, 'amanda@gmail.com', NULL, NULL, '544add5f88283c0a12fe1689d8bb0d74.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacinas`
--

INSERT INTO `vacinas` (`id_vacina`, `nome_vacina`, `dose`, `id_fk_bebe`) VALUES
(1, 'hgbkhgb', 5, 5);

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
