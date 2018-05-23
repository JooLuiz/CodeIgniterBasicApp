-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Mar-2018 às 17:40
-- Versão do servidor: 5.5.59-MariaDB-1ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `gu1760815`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `date` date NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `money`
--

INSERT INTO `money` (`date`, `product`, `price`, `type`, `place`) VALUES
('2010-10-10', 'Leite', 10, 'perda', 'Extra'),
('2010-10-10', 'Salario', 50000, 'ganho', 'MeuTrabalho');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
