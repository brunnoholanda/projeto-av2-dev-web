-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2016 às 17:38
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_projeto_av2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataDeNascimento` date NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `rg`, `cpf`, `dataDeNascimento`, `telefone`, `email`, `foto`, `login`, `senha`, `endereco`) VALUES
(6, 'Nathanael', '9999999', '11111111111', '1996-03-19', '819911282', 'nathanaellimacpc@gmail.com', '123', 'nathan', '123', 'Rua Maria Anunciada Pinheiro Dias');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
