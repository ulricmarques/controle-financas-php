-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Abr-2015 às 20:22
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exemplo_ntwi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` int(1) NOT NULL,
  `classe` int(1) NOT NULL,
  `mes_referencia` int(11) NOT NULL,
  `datahora` datetime NOT NULL,
  `valor` float NOT NULL,
  `usuario` int(11) NOT NULL,
  `descricao` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `nome`, `tipo`, `classe`, `mes_referencia`, `datahora`, `valor`, `usuario`, `descricao`) VALUES
(1, 'Ulric', 1, 1, 1, '2015-04-08 04:32:26', 20, 1, 'lklklklklk'),
(2, 'Batata', 1, 1, 1, '2015-04-17 06:30:58', 50, 1, 'asf'),
(3, 'Dinheiro', 1, 1, 3, '2015-04-17 06:43:19', 10, 2, 'Batatas'),
(4, 'Perdendo dinheiro', 2, 1, 2, '2015-04-17 06:43:53', 50, 2, 'AFDAG'),
(5, 'ULRIC MARQUES FERREIRA', 2, 2, 1, '2015-04-17 06:48:19', 20, 2, 'SD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` int(11) NOT NULL,
  `identidade` varchar(20) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `funcao_empresa` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(8) NOT NULL,
  `perfil` int(11) NOT NULL,
  `cad_usuario` int(11) NOT NULL,
  `cad_datahora` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `sexo`, `identidade`, `cpf`, `nascimento`, `estado_civil`, `funcao_empresa`, `email`, `telefone`, `perfil`, `cad_usuario`, `cad_datahora`) VALUES
(1, 'admin', 'admin', 'Administrador Padrao', 2, NULL, '00000000000', '2011-08-09', 1, 'Administracao', 'admin@minhaempresa.com.br', '00000000', 2, 1, '2011-08-09 17:44:54'),
(2, 'ulric', '123', 'Ulric Marques Ferreira', 2, '90002055231', '06120190392', '0000-00-00', 0, 'Gerente', 'ulricmarques@hotmail.com', '(85)9754', 1, 1, '0000-00-00 00:00:00'),
(12, 'batata', 'batata', 'Batata', 1, '23421521423412', '223123123-9', '0000-00-00', 0, 'Gerente', 'batata@batata.gmail.com', '85872104', 1, 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`login`,`identidade`,`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
