-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2018 às 21:05
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkedin_musical`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantor`
--

CREATE TABLE `cantor` (
  `user_Telefone` varchar(11) DEFAULT NULL,
  `estilo_musical` varchar(20) DEFAULT NULL,
  `user_Data_Nasc` date DEFAULT NULL,
  `user_sexo` varchar(10) DEFAULT NULL,
  `user_nome` varchar(50) DEFAULT NULL,
  `user_Email` varchar(30) DEFAULT NULL,
  `user_RG` varchar(10) DEFAULT NULL,
  `tempo_de_experiencia` int(2) DEFAULT NULL,
  `user_CPF` char(11) NOT NULL,
  `user_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musico`
--

CREATE TABLE `musico` (
  `user_nome` varchar(50) DEFAULT NULL,
  `user_sexo` varchar(10) DEFAULT NULL,
  `user_CPF` char(11) NOT NULL,
  `user_Email` varchar(30) DEFAULT NULL,
  `user_RG` varchar(10) DEFAULT NULL,
  `use_telefone` varchar(11) DEFAULT NULL,
  `user_Data_Nasc` date DEFAULT NULL,
  `tempo_de_experiencia` int(2) DEFAULT NULL,
  `estilo_musical` varchar(20) DEFAULT NULL,
  `user_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `Audio` varchar(30) DEFAULT NULL,
  `Video` varchar(30) DEFAULT NULL,
  `Imagem` varchar(30) DEFAULT NULL,
  `user_ID` varchar(50) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cantor`
--
ALTER TABLE `cantor`
  ADD PRIMARY KEY (`user_CPF`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `musico`
--
ALTER TABLE `musico`
  ADD PRIMARY KEY (`user_CPF`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`user_ID`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cantor`
--
ALTER TABLE `cantor`
  ADD CONSTRAINT `cantor_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `portifolio` (`user_ID`);

--
-- Limitadores para a tabela `musico`
--
ALTER TABLE `musico`
  ADD CONSTRAINT `musico_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `portifolio` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
