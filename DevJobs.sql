-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2022 at 02:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DevJobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aplicacao`
--

CREATE TABLE `Aplicacao` (
  `cpfFuncionario` char(11) NOT NULL,
  `cpfContratante` char(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `situacao` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Contratante`
--

CREATE TABLE `Contratante` (
  `cpfContratante` char(11) NOT NULL,
  `nomeEmpresa` varchar(45) NOT NULL,
  `CNPJ` char(14) NOT NULL,
  `dataAberturaEmpresa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Curriculo`
--

CREATE TABLE `Curriculo` (
  `cidadeOrigem` varchar(50) NOT NULL,
  `estadoOrigem` char(2) NOT NULL,
  `github` varchar(45) NOT NULL,
  `linkedIn` varchar(45) DEFAULT NULL,
  `objetivo` varchar(200) NOT NULL,
  `formacaoAcademica` varchar(150) NOT NULL,
  `expProfissionaisRelevantes` varchar(300) NOT NULL,
  `especialidade` varchar(30) NOT NULL,
  `cpfFuncionario` char(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Funcionario`
--

CREATE TABLE `Funcionario` (
  `cpfFuncionario` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Funcionario`
--

INSERT INTO `Funcionario` (`cpfFuncionario`) VALUES
('13124599701'),
('23145687901');

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

CREATE TABLE `Jobs` (
  `nome` varchar(50) NOT NULL,
  `qtdVagas` int(11) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `requisitos` varchar(200) NOT NULL,
  `beneficios` varchar(200) NOT NULL,
  `salario` decimal(8,2) DEFAULT NULL,
  `remoto` varchar(7) NOT NULL,
  `cpfContratante` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `cpf` char(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `funcionarioOrContratante` char(1) DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`cpf`, `nome`, `email`, `senha`, `dataNasc`, `telefone`, `funcionarioOrContratante`) VALUES
('13124599701', 'Roberto Carlos', 'robertoCarlos@gmail.com', 'robertoCarlos@gmail.com', '2022-04-16', '11950059976', 'F'),
('23145687901', 'Roberta Carla', 'carlaRoberta@gmail.com', 'novasenha', '2022-04-20', '11920029987', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aplicacao`
--
ALTER TABLE `Aplicacao`
  ADD PRIMARY KEY (`cpfFuncionario`),
  ADD UNIQUE KEY `cpfPessoaJuridica_UNIQUE` (`cpfContratante`);

--
-- Indexes for table `Contratante`
--
ALTER TABLE `Contratante`
  ADD PRIMARY KEY (`cpfContratante`),
  ADD UNIQUE KEY `CNPJ_UNIQUE` (`CNPJ`);

--
-- Indexes for table `Curriculo`
--
ALTER TABLE `Curriculo`
  ADD PRIMARY KEY (`cpfFuncionario`),
  ADD UNIQUE KEY `nome_UNIQUE` (`nome`);

--
-- Indexes for table `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD PRIMARY KEY (`cpfFuncionario`);

--
-- Indexes for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD PRIMARY KEY (`cpfContratante`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Aplicacao`
--
ALTER TABLE `Aplicacao`
  ADD CONSTRAINT `fk_cpfPessoaFisica3` FOREIGN KEY (`cpfFuncionario`) REFERENCES `Curriculo` (`cpfFuncionario`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cpfPessoaJuridica3` FOREIGN KEY (`cpfContratante`) REFERENCES `Jobs` (`cpfContratante`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `Contratante`
--
ALTER TABLE `Contratante`
  ADD CONSTRAINT `fk_cpfPessoaJuridica1` FOREIGN KEY (`cpfContratante`) REFERENCES `Usuario` (`cpf`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `Curriculo`
--
ALTER TABLE `Curriculo`
  ADD CONSTRAINT `fk_cpfPessoaFisica2` FOREIGN KEY (`cpfFuncionario`) REFERENCES `Funcionario` (`cpfFuncionario`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD CONSTRAINT `fk_cpfPessoaFisica1` FOREIGN KEY (`cpfFuncionario`) REFERENCES `Usuario` (`cpf`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD CONSTRAINT `fk_cpfPessoaJuridica2` FOREIGN KEY (`cpfContratante`) REFERENCES `Contratante` (`cpfContratante`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
