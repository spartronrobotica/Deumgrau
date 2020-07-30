-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2020 às 03:50
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `grau`
--

CREATE DATABASE grau;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doador`
--

CREATE TABLE `tb_doador` (
  `id_pessoa` int(11) NOT NULL,
  `name_donate` varchar(100) NOT NULL,
  `cpf_donate` varchar(20) NOT NULL,
  `telefone_donate` varchar(15) NOT NULL,
  `endereco_donate` varchar(100) NOT NULL,
  `bairro_donate` varchar(50) NOT NULL,
  `municipio_donate` varchar(50) NOT NULL,
  `descricao_donate` varchar(200) NOT NULL,
  `item_donate` varchar(100) NOT NULL,
  `anonimo` varchar(10) NOT NULL,
  `ok` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_receptor`
--

CREATE TABLE `tb_receptor` (
  `id_pessoa` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `nis` int(11) NOT NULL,
  `data_de_nascimento` varchar(15) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `item` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `auxilio` varchar(10) NOT NULL,
  `qual_auxilio` varchar(50) DEFAULT NULL,
  `valor_auxilio` int(11) DEFAULT NULL,
  `auxilio_eme` varchar(10) NOT NULL,
  `valor_auxilio_eme` int(11) DEFAULT NULL,
  `localizacao` varchar(10) NOT NULL,
  `inseguro` varchar(10) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_doador`
--
ALTER TABLE `tb_doador`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `tb_receptor`
--
ALTER TABLE `tb_receptor`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_doador`
--
ALTER TABLE `tb_doador`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_receptor`
--
ALTER TABLE `tb_receptor`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
