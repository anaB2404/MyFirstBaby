-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2018 às 01:01
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `bebe` (
  `id_bebe` int(11) NOT NULL,
  `tipo_bebe` tinyint(4) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `semanas` int(4) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `foto_bebe` varchar(37) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(8, 1, 'Cristopher', 'Bernado', NULL, 2, 2, '2019-04-24', '87985b12637463b577ed871cb1578f86.jpg'),
(9, 1, 'Takeoff', 'Huncho', NULL, 2, 3, '2019-04-24', '1c5a6e1be58d6d068c42f26b0b306ca9.jpg'),
(10, 1, 'Chistian', 'Bernado', NULL, 2, 4, '2019-04-24', 'ba7616ec67a3e0272cdddf023d4fe262.jpg'),
(11, 1, 'Beatriz', 'Rodrigues', NULL, 1, 5, '2001-04-24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `conteudo_comentario` text,
  `id_fk_postagem` int(11) DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `id_fk_mensagem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `nome` varchar(37) DEFAULT NULL,
  `id_fk_postagem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `Nome` varchar(24) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` char(12) NOT NULL,
  `celular` varchar(13) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id_postagem` int(11) NOT NULL,
  `conteudo` text,
  `titulo` varchar(50) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `id_fk_categoria` int(11) DEFAULT NULL,
  `imagem` varchar(37) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `conteudo`, `titulo`, `data_hora`, `id_fk_usuario`, `id_fk_categoria`, `imagem`) VALUES
(1, '<p>AM&Eacute;M JAUREGUI</p>\r\n', 'EU AMO A LAUREN', '2018-05-30 21:23:25', 1, NULL, '108f897ea2de5d7335feab8392d809b0.png'),
(2, '<p>Meu nome &eacute; ana</p>\r\n', 'Hi bitches', '2018-05-30 21:23:53', 1, NULL, '12f9bbd8aba1caf4aac09010e6ab9382.jpg'),
(3, '<p>SOCORRO</p>\r\n', 'MAAAAE', '2018-05-30 21:25:51', 1, NULL, 'd8057ac69eebeddc8a45a09fd8dff152.jpg'),
(5, '2565565656', NULL, '2018-05-30 21:52:57', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(14) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `usuario` (
  `senha` char(40) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `data_nascimento` varchar(20) DEFAULT NULL,
  `fk_id_tipo_usuario` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nome_juridico` varchar(30) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `foto_perfil` varchar(37) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `id_usuario`, `nome`, `sobrenome`, `sexo`, `data_nascimento`, `fk_id_tipo_usuario`, `email`, `nome_juridico`, `cnpj`, `foto_perfil`) VALUES
('12345678', 1, 'Ana Beatriz', 'Rodrigues', 1, '24/04/2001', 1, 'ana@mfb.com', NULL, NULL, '1c5a6e1be58d6d068c42f26b0b306ca9.jpg'),
('12345678', 2, 'Amanda', 'Maria', 1, '1981', 2, 'amanda@gmail.com', NULL, NULL, '544add5f88283c0a12fe1689d8bb0d74.jpg'),
('12345678', 3, 'Ana', 'Bananinha', 1, '1973', 2, 'anabanana@gmail.com', NULL, NULL, '87985b12637463b577ed871cb1578f86.jpg'),
('12345678', 4, 'Shawn', 'Mendes', 2, '1977', 2, 'shawn@gmail.com', NULL, NULL, '1c5a6e1be58d6d068c42f26b0b306ca9.jpg'),
('12345678', 5, 'Evanilde', 'Rodrigues', 1, '1946', 2, 'dninha.wfbr@hotmail.com', NULL, NULL, 'ba7616ec67a3e0272cdddf023d4fe262.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `id_vacina` int(11) NOT NULL,
  `nome_vacina` varchar(35) DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `id_fk_bebe` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacinas`
--

INSERT INTO `vacinas` (`id_vacina`, `nome_vacina`, `dose`, `id_fk_bebe`) VALUES
(1, 'hgbkhgb', 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas_aplicadas`
--

CREATE TABLE `vacinas_aplicadas` (
  `id_aplicacao` int(11) NOT NULL,
  `id_fk_bebe` int(11) NOT NULL,
  `id_fk_vacina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebe`
--
ALTER TABLE `bebe`
  ADD PRIMARY KEY (`id_bebe`),
  ADD KEY `Id_Fk_tipo_Usuario` (`id_fk_usuario`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `Id_Fk_Postagem` (`id_fk_postagem`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `id_fk_usuario` (`id_fk_usuario`),
  ADD KEY `id_fk_mensagem` (`id_fk_mensagem`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `id_fk_Usuario` (`id_fk_usuario`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id_postagem`),
  ADD KEY `Id_Fk_usuario` (`id_fk_usuario`),
  ADD KEY `Id_Fk_Categoria` (`id_fk_categoria`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD KEY `fk_Id_tipo_Usuario` (`id_usuario`) USING BTREE;

--
-- Indexes for table `vacinas`
--
ALTER TABLE `vacinas`
  ADD PRIMARY KEY (`id_vacina`),
  ADD KEY `Id_Fk_Bebe` (`id_fk_bebe`);

--
-- Indexes for table `vacinas_aplicadas`
--
ALTER TABLE `vacinas_aplicadas`
  ADD PRIMARY KEY (`id_aplicacao`),
  ADD KEY `id_fk_bebe` (`id_fk_bebe`),
  ADD KEY `id_fk_vacina` (`id_fk_vacina`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bebe`
--
ALTER TABLE `bebe`
  MODIFY `id_bebe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_postagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vacinas`
--
ALTER TABLE `vacinas`
  MODIFY `id_vacina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vacinas_aplicadas`
--
ALTER TABLE `vacinas_aplicadas`
  MODIFY `id_aplicacao` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
