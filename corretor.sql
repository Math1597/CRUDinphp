-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Fev-2020 às 19:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `creci`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretor`
--

CREATE TABLE `corretor` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `SOBRENOME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `corretor`
--

INSERT INTO `corretor` (`ID`, `NOME`, `SOBRENOME`) VALUES
(1, 'Arnaldo', 'Batista'),
(2, 'Sergio', 'Batista'),
(3, 'Rita', 'Lee'),
(4, 'Gilberto', 'Gil'),
(5, 'Geraldo', 'Vandre'),
(16, 'Diego', 'Maradona'),
(24, 'Patati', 'Patata'),
(25, 'Adolf', 'Hitler'),
(26, 'Nego', 'Ney'),
(27, 'Ozzy', 'Osbourne'),
(28, 'Nina', 'Hagen'),
(29, 'Fernanda', 'Montenegro'),
(31, 'Ligia', 'Fonseca'),
(32, 'Hugo', 'Harada'),
(33, 'Pedro', 'Pomar'),
(34, 'Olga', 'Benario'),
(35, 'Mauricio', 'Souza'),
(36, 'Marcio', 'Rodrigues'),
(39, 'Mario', 'Quintana'),
(40, 'Enzo', 'Gabriel'),
(41, 'Maria', 'Valentina'),
(42, 'Aleister', 'Crowley'),
(43, 'Saori', 'Kidou'),
(44, 'Antonio', 'Palladino'),
(45, 'Cesar', 'Sampaio'),
(46, 'Tomie', 'Kawakami'),
(47, 'Gabriela', 'Schimidt'),
(48, 'Victor', 'Hugo'),
(49, 'Mariana', 'Salazar');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `corretor`
--
ALTER TABLE `corretor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `corretor`
--
ALTER TABLE `corretor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
