-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Jun-2018 às 17:05
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
  `foto_bebe` varchar(37) DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `Id_Fk_tipo_Usuario` (`id_fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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
(11, 1, 'Beatriz', 'Rodrigues', NULL, 1, 5, '2001-04-24', '13c22b75f7705fd6ecbae0d332d499d9.png'),
(12, 1, 'Cristopher', 'Bernado', NULL, 2, 7, '2019-06-29', 'c20114b534d37b388a4f011c361916d9.jpg'),
(13, 1, 'JosÃ©', 'Almeida', NULL, 2, 8, '2018-02-01', 'a3a61ecf3e856457040ed1e32c24ea46.jpg'),
(14, 1, 'Chistian', 'Bernado', NULL, 2, 9, '2019-05-31', NULL);

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
  `comentario` text,
  `id_fk_postagem` int(11) DEFAULT NULL,
  `id_fk_usuario` int(11) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `Id_Fk_Postagem` (`id_fk_postagem`),
  KEY `id_fk_usuario` (`id_fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `id_fk_postagem`, `id_fk_usuario`, `data_hora`) VALUES
(1, 'que legal rss', 4, 4, '2018-06-02 18:11:35'),
(2, 'iti malia ', 3, 4, '2018-06-02 18:12:02'),
(3, 'ficarei atento', 2, 4, '2018-06-02 18:12:53'),
(4, 'shawn jr e ja era', 1, 4, '2018-06-02 18:13:14'),
(5, 'iti bebe fofo VOU APERTAR AAAAAAAA', 4, 7, '2018-06-02 18:14:41'),
(6, 'e quando eles comeÃ§am a falar babababa ? o que significa?', 3, 7, '2018-06-02 18:17:46'),
(7, 'eu choro junto sou sensÃ­vel', 2, 7, '2018-06-02 18:18:09'),
(8, 'nÃ£o vai ser Clara nÃ£o Deus me free', 1, 7, '2018-06-02 18:18:38'),
(10, 'aaaaaaaaaaaaaaaaaaa', 4, 5, '2018-06-03 10:37:54');

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
-- Estrutura da tabela `parceiros`
--

DROP TABLE IF EXISTS `parceiros`;
CREATE TABLE IF NOT EXISTS `parceiros` (
  `id_parceiros` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nome` text NOT NULL,
  `nomejuri` text NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_parceiros`)
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
  `imagem` varchar(37) DEFAULT NULL,
  PRIMARY KEY (`id_postagem`),
  KEY `Id_Fk_usuario` (`id_fk_usuario`),
  KEY `Id_Fk_Categoria` (`id_fk_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `conteudo`, `titulo`, `data_hora`, `id_fk_usuario`, `id_fk_categoria`, `imagem`) VALUES
(1, '<p><strong>Cuidados b&aacute;sicos</strong>&nbsp;<br />\r\n<br />\r\nAlguns pontos devem ser estudados na hora de dar um nome ao rebento. Siga essas dicas:&nbsp;<br />\r\n<br />\r\n- N&atilde;o leve em conta apenas a sonoridade do nome. Procure conhecer e se identificar tamb&eacute;m com o significado.&nbsp;<br />\r\n<br />\r\n- Evite formas lingu&iacute;sticas que voc&ecirc; n&atilde;o conhece. Por exemplo, nomes japoneses, se voc&ecirc; n&atilde;o domina a l&iacute;ngua.&nbsp;<br />\r\n<br />\r\n- Pense nos apelidos que aquele nome pode trazer. Talvez voc&ecirc; n&atilde;o goste tanto deles e n&atilde;o tem como controlar apelidos.&nbsp;<br />\r\n<br />\r\n- Fale em voz alta o nome e o sobrenome da crian&ccedil;a que vai nascer. Veja se a sonoridade entre eles combina.&nbsp;<br />\r\n<br />\r\n- Muito cuidado com nomes ex&oacute;ticos e de dif&iacute;cil pron&uacute;ncia. Lembre que seu filho vai carreg&aacute;-lo para o resto da vida.&nbsp;<br />\r\n<br />\r\n- Economize nas letras dobradas e sem fun&ccedil;&atilde;o. Elas s&oacute; v&atilde;o fazer com que voc&ecirc; e seu filho tenham de soletrar o nome mais vezes.&nbsp;<br />\r\n<br />\r\n- Seguir a tradi&ccedil;&atilde;o familiar, dando o nome do pai ou dos av&oacute;s, &eacute; louv&aacute;vel. Mas, se for homenagear duas pessoas, prefira um nome composto &agrave; jun&ccedil;&atilde;o de dois nomes.&nbsp;<br />\r\n<br />\r\n- Depois que o nome estiver devidamente decidido, nada impede que voc&ecirc; mude assim que olhar para o rostinho do beb&ecirc;. Essa emo&ccedil;&atilde;o do primeiro contato deve ser levada em considera&ccedil;&atilde;o.</p>\r\n', 'Como escolher o nome do seu filho?', '2018-06-02 17:42:32', 1, NULL, 'd3793c597f8436fee5c98b85dfe9011f.jpg'),
(2, '<p><strong>De primeira viagem</strong></p>\r\n\r\n<p>Entre m&atilde;es de primeira viagem, o choro do beb&ecirc; costuma causar mais ang&uacute;stia. Para aliviar a afli&ccedil;&atilde;o, as netas de &Aacute;urea buscam a sabedoria da av&oacute; &ndash; principalmente nos primeiros dias do beb&ecirc; em casa. Mas n&atilde;o existe uma f&oacute;rmula. &ldquo;Tem de prestar aten&ccedil;&atilde;o e, em quest&atilde;o de dias, voc&ecirc; j&aacute; sabe mais ou menos do que seu filho precisa&rdquo;, afirma ela.</p>\r\n\r\n<p>A ang&uacute;stia da m&atilde;e &eacute; considerada natural, se n&atilde;o for em demasia. Mas ela precisa aprender a dominar este sentimento. &ldquo;Se n&atilde;o for controlada, a ang&uacute;stia pode prejudicar a rela&ccedil;&atilde;o entre m&atilde;e e filho&rdquo;, ressalta o puericulturista Olivier. Claudia concorda: &ldquo;Quando a m&atilde;e coloca o beb&ecirc; no ber&ccedil;o e ele n&atilde;o quer ficar l&aacute;, ele chora. A m&atilde;e vai ficar um pouco aflita no in&iacute;cio, mas em alguns dias o sentimento passa &ndash; e a choradeira tamb&eacute;m&rdquo;.</p>\r\n\r\n<p><strong>Sinais de alerta</strong></p>\r\n\r\n<p>O choro pode ser um bom term&ocirc;metro para avaliar a sa&uacute;de da crian&ccedil;a. &ldquo;&Eacute; preciso observar o conforto, o bem-estar. Se o choro &eacute; consol&aacute;vel, ele &eacute; natural, inerente a uma situa&ccedil;&atilde;o. No entanto, se a crian&ccedil;a n&atilde;o est&aacute; suja, nem com fome, nem com c&oacute;lica, &eacute; preciso ficar atenta &agrave; sua temperatura ou a sua pele&rdquo;, explica a neonatologista Celia. Para qualquer altera&ccedil;&atilde;o nesse sentido, o melhor &eacute; ligar para o pediatra ou levar para um exame.</p>\r\n\r\n<p>Apesar de a reclama&ccedil;&atilde;o mais comum ser relacionada ao choro em excesso, a falta de l&aacute;grimas tamb&eacute;m pode incomodar muitas m&atilde;es. Nat&aacute;lia Viandre &eacute; m&atilde;e de Vinicius, hoje com seis anos. O menino, no primeiro ano de vida, chorou apenas quando tomou vacina. &ldquo;Eu estranhava muito, porque ele quase n&atilde;o chorava. Quando estava com fome, ele resmungava um pouquinho, baixinho. Cheguei a ficar preocupada&rdquo;, relata.</p>\r\n\r\n<p>A falta do choro pode mesmo ser um problema. &ldquo;Quando a crian&ccedil;a n&atilde;o se manifesta dessa forma, &eacute; preciso ficar atento a outros aspectos cl&iacute;nicos: se ela mama bem, se &eacute; ativa, se abre os olhos para olhar as coisas ao redor e se segura a m&atilde;o da m&atilde;e&rdquo;, recomenda Celia.</p>\r\n', 'Aprenda a lidar com o choro do bebÃª', '2018-06-02 17:47:12', 1, NULL, '80429822b984b84d2dca15538e68bb2c.jpg'),
(3, '<p><strong>Primeiros meses</strong>&nbsp;</p>\r\n\r\n<p>Segundo Kimbrough Oller, professor de audiologia e patologias da fala na Universidade de Memphis, algumas das mais recentes pesquisas analisam os sons que beb&ecirc;s produzem no primeiro semestre de suas vidas, quando eles est&atilde;o &ldquo;guinchando, murmurando e produzindo sons b&aacute;sicos&rdquo;. Esses sons s&atilde;o a funda&ccedil;&atilde;o da linguagem posterior, disse ele, e aparecem em todo tipo de intera&ccedil;&otilde;es sociais e brincadeiras entre pais e beb&ecirc;s &ndash; ainda sem envolver s&iacute;labas formadas, ou qualquer coisa que soe como uma palavra.</p>\r\n\r\n<p>&ldquo;Ultrapassando os seis meses de idade, os beb&ecirc;s come&ccedil;am a produzir balbucios gerais, s&iacute;labas bem formadas&rdquo;, disse Oller. &ldquo;Os pais n&atilde;o tratam esses sons iniciais como palavras; quando as s&iacute;labas gerais come&ccedil;am a aparecer, os pais as reconhecem como abertas a discuss&otilde;es&rdquo;. Ou seja, quando o beb&ecirc; diz algo como &ldquo;ba ba ba&rdquo;, os pais podem entender como uma tentativa de dar nome a algo, e propor uma palavra em resposta.&nbsp;</p>\r\n\r\n<p>Na maioria das vezes, o pediatra pergunta aos pais: &ldquo;Ele faz barulhos? Ela soa como se estivesse falando?&rdquo; E na maioria das vezes, os pais acenam positivamente e sorriem, reconhecendo as vozes de beb&ecirc;s que se tornaram parte das conversas de fam&iacute;lia.&nbsp;<br />\r\n<br />\r\n<strong>Aos 7 meses</strong>&nbsp;</p>\r\n\r\n<p>Mas a nova pesquisa sugere uma linha mais detalhada de perguntas que devem ser feitas aproximadamente aos 7 meses: os sons se desenvolveram em balbucios gerais, incluindo vogais e consoantes? Beb&ecirc;s que partem para vocaliza&ccedil;&otilde;es sem muitas consoantes, fazendo apenas sons como &ldquo;aaa&rdquo; ou &ldquo;ooo&rdquo;, n&atilde;o est&atilde;o praticando os sons que os levar&atilde;o a formar palavras, e n&atilde;o est&atilde;o treinando os m&uacute;sculos da boca necess&aacute;rios ao surgimento de uma linguagem compreens&iacute;vel.&nbsp;</p>\r\n\r\n<p>&ldquo;Um beb&ecirc; ouve todos esses sons e &eacute; capaz de diferenci&aacute;-los antes de poder reproduzi-los&rdquo;,&nbsp; disse Carol Stoel-Gammon, professora em&eacute;rita de ci&ecirc;ncias da fala e da audi&ccedil;&atilde;o na Universidade de Washington. &ldquo;Para fazer um &lsquo;m&rsquo;, voc&ecirc; precisa fechar a boca e o ar tem de sair pelo nariz. Isso n&atilde;o nasce em algum lugar de seu c&eacute;rebro, &eacute; algo que se precisa aprender&rdquo;. As consoantes no balbucio significam que o beb&ecirc; est&aacute; praticando, moldando sons ao aprender a manobrar boca e l&iacute;ngua, e escutando os resultados.&nbsp;</p>\r\n\r\n<p>&ldquo;Eles chegam nesse ponto aos 12 meses&rdquo;, continuou Stoel-Gammon, &ldquo;e acredito que eles consigam isso porque se tornam cientes dos movimentos motores orais que diferenciam um &lsquo;b&rsquo; de um &lsquo;m&rsquo;&rdquo;.&nbsp;</p>\r\n\r\n<p>Os beb&ecirc;s precisam ouvir uma linguagem real, de pessoas reais, para aprender absorver essa habilidade. A televis&atilde;o n&atilde;o faz o mesmo, e tampouco os v&iacute;deos educacionais; pesquisas recentes sugerem que esse aprendizado &eacute;, em parte, moldado pela qualidade e pelo contexto da rea&ccedil;&atilde;o adulta.</p>\r\n', ' A linguagem dos bebÃªs', '2018-06-02 17:51:34', 6, NULL, 'aa6cf8b03868a30d199ef7e2f9443bee.jpg'),
(4, '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:10px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong><span style=\"color:#ea2b68\"><span style=\"font-size:medium\">Como escolher um pediatra para o meu filho?</span></span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">De acordo com Gabel, existe uma s&eacute;rie de&nbsp;<strong>questionamentos</strong>&nbsp;que a fam&iacute;lia deve levar em conta na hora de decidir quem vai cuidar do beb&ecirc;. A escolha deve ser feita preferencialmente atrav&eacute;s de&nbsp;<strong>indica&ccedil;&atilde;o profissional</strong>&nbsp;, acredita o m&eacute;dico.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">Os aspectos a serem analisados pelos pais v&atilde;o al&eacute;m da&nbsp;<strong>empatia</strong>&nbsp;. E preciso prestar aten&ccedil;&atilde;o na&nbsp;<strong>linha de conduta</strong>&nbsp;adotada pelo pediatra. Em geral, um m&eacute;dico pode ser&nbsp;<strong>alopata&nbsp;</strong>(tradicional, que combate as doen&ccedil;as com rem&eacute;dios reagem com sintomas opostos),&nbsp;<strong>homeopata</strong>&nbsp;(trata os sintomas com vers&otilde;es dilu&iacute;das de seus pr&oacute;prios agentes, buscando um tratamento menos intervencionista) ou a&nbsp;<strong>ntropos&oacute;fico&nbsp;</strong>(que n&atilde;o enxerga somente a doen&ccedil;a, mas busca ver o paciente como um todo na hora de tratar).</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">Verifique se o profissional faz parte da&nbsp;<strong>Sociedade Brasileira de Pediatria</strong>&nbsp;e tente conhecer um pouco sobre ele antes de decidir. Al&eacute;m disso, e preciso lembrar de&nbsp;<strong>detalhes pr&aacute;ticos</strong>&nbsp;, como a disponibilidade do pediatra, a dist&acirc;ncia entre o consult&oacute;rio e sua casa, se o profissional atende seu conv&ecirc;nio.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong><span style=\"color:#ea2b68\">E quando devo escolher?</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">Acho que a melhor hora de tomar essa decis&atilde;o e&nbsp;<strong>no &uacute;ltimo m&ecirc;s da gravidez</strong>&nbsp;, afirma Gabel.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:10px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong><span style=\"color:#ea2b68\"><span style=\"font-size:medium\">Quando visitar o pediatra pela primeira vez?</span></span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">De acordo com o m&eacute;dico, o ideal e que a primeira visita seja feita&nbsp;<strong>antes mesmo de o beb&ecirc; nascer</strong>&nbsp;, pois conhecer aquele que vai cuidar e interagir com a fam&iacute;lia e muito importante.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">Se tudo estiver bem, a primeira visita ao pediatra ap&oacute;s a alta da maternidade deve acontecer no m&aacute;ximo&nbsp;<strong>at&eacute; uma semana ap&oacute;s o nascimento</strong>&nbsp;, explica Gabel.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:10px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong><span style=\"color:#ea2b68\"><span style=\"font-size:medium\">O que devo perguntar para o pediatra na primeira consulta?</span></span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">O m&eacute;dico afirma que as primeiras consultas servem, em geral, para dar&nbsp;<strong>orienta&ccedil;&otilde;es gerais&nbsp;</strong>e tranquilizar os novos pais. Para ele, essses momentos tamb&eacute;m s&atilde;o fundamentais para realizar o&nbsp;<strong>controle de peso</strong>&nbsp;do beb&ecirc;.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"font-family:Lato,Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">O pediatra cita uma s&eacute;rie de&nbsp;<strong>assuntos</strong>&nbsp;que fazem parte dessas primeiras visitas ao consult&oacute;rio. S&atilde;o abordados assuntos como&nbsp;<strong>aleitamento materno</strong>&nbsp;, c&oacute;licas, icter&iacute;cia, regurgita&ccedil;&otilde;es, v&ocirc;mitos, gases, sons e ru&iacute;dos emitidos pelo beb&ecirc;, solu&ccedil;os, caracter&iacute;sticas de fezes,&nbsp;<strong>higiene corporal</strong>&nbsp;, o banho de sol,&nbsp;<strong>vacinas</strong>&nbsp;, quantidade de roupas, controle de temperatura, al&eacute;m de temas de interesse particular de cada fam&iacute;lia, elenca.</span></span></span></p>\r\n', 'A Primeira consulta com o Pediatra', '2018-06-02 17:57:07', 6, NULL, '1acbcb92160777b6e60b8fe135644a72.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `id_usuario`, `nome`, `sobrenome`, `sexo`, `data_nascimento`, `fk_id_tipo_usuario`, `email`, `nome_juridico`, `cnpj`, `foto_perfil`) VALUES
('12345678', 1, 'Ana Beatriz', 'Rodrigues', 1, '24/04/2001', 1, 'ana@mfb.com', NULL, NULL, '1c5a6e1be58d6d068c42f26b0b306ca9.jpg'),
('12345678', 7, 'Lauren', 'Jauregui', 1, '1963', 2, 'lolo@gmail.com', NULL, NULL, '13c22b75f7705fd6ecbae0d332d499d9.png'),
('12345678', 4, 'Shawn', 'Mendes', 2, '1977', 2, 'shawn@gmail.com', NULL, NULL, 'images.jpg'),
('12345678', 5, 'Evanilde', 'Rodrigues', 1, '1946', 2, 'dninha.wfbr@hotmail.com', NULL, NULL, 'ba7616ec67a3e0272cdddf023d4fe262.jpg'),
('12345678', 6, 'My First Baby', ' Baby', 0, '04/08/2018', 1, 'myfirstbaby@mfb.com', NULL, NULL, 'Logo_Perfeito.png'),
('12345678', 9, 'Raquel', 'Rodrigues', 1, '1969', 2, 'raquel@gmail.com', NULL, NULL, 'a3a61ecf3e856457040ed1e32c24ea46.jpg');

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
