-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jan-2018 às 01:12
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opendiet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(99) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `inscricao_profissional` varchar(45) DEFAULT NULL,
  `nome_clinica` varchar(60) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(99) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `ocupacao` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `numero` varchar(25) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `observacao` varchar(1000) DEFAULT NULL,
  `nota` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
