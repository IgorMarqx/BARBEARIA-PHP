-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2022 às 18:36
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE IF NOT EXISTS `agendamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL DEFAULT '',
  `data` date NOT NULL DEFAULT '0000-00-00',
  `horario` varchar(15) NOT NULL,
  `barbeiro` varchar(255) NOT NULL,
  `tipCorte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `nome`, `telefone`, `data`, `horario`, `barbeiro`, `tipCorte`) VALUES
(1, 'Igor marques', '986531492', '2022-11-18', '13:00', 'Junior', 'Barba'),
(2, 'adalmir', '986531492123', '2022-12-08', '10:30', 'Wesley', 'DegradÃª'),
(3, 'Kaue', '98712312', '2022-11-25', '12:30', 'Wagner', 'DegradÃª'),
(4, 'Igor', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`) VALUES
(1, 'Igor', 'igormarquesdeazevedo11@gmail.com', 986531492, 'TESTE', 'OLA TESTE'),
(2, 'Igor marques', 'igormarquesdeazevedo11@gmail.com', 2147483647, 'CABELO', 'CABELO TESTE'),
(3, 'Igor marques', 'igormarquesdeazevedo11@gmail.com', 2147483647, 'CABELO', 'OLA TESTE'),
(4, 'Marcos', '', 9812371, '', ''),
(5, 'Marcos', '', 9812371, '', ''),
(6, 'Luan', 'luan@gmail.com', 2147483647, 'TESTANDO', 'TESTANDO 123'),
(7, 'Igor marques', 'igormarquesdeazevedo11@gmail.com', 9812371, 'CABELO', 'TESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home` varchar(255) NOT NULL,
  `sobrenos` varchar(255) NOT NULL,
  `servicos` varchar(255) NOT NULL,
  `faleconosco` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
