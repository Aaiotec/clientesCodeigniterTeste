-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2021 às 10:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao_cliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_cliente`
--

CREATE TABLE `login_cliente` (
  `login_id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login_cliente`
--

INSERT INTO `login_cliente` (`login_id`, `login`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_cliente`
--

CREATE TABLE `tabela_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `apelido_cliente` varchar(50) NOT NULL,
  `obs_cliente` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_cliente`
--

INSERT INTO `tabela_cliente` (`id_cliente`, `nome_cliente`, `apelido_cliente`, `obs_cliente`, `created_at`) VALUES
(20, 'Isabel Joao', 'João', 'Minha mãe querida', '2021-10-20'),
(22, 'António Pakas João Dombele', 'António', 'Programar é minha maior paixão, preciso de uma oportunidade', '2021-10-20');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login_cliente`
--
ALTER TABLE `login_cliente`
  ADD PRIMARY KEY (`login_id`);

--
-- Índices para tabela `tabela_cliente`
--
ALTER TABLE `tabela_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login_cliente`
--
ALTER TABLE `login_cliente`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tabela_cliente`
--
ALTER TABLE `tabela_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
