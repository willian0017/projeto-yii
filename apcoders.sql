-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21-Jan-2022 às 15:15
-- Versão do servidor: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apcoders`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE `despesa` (
  `descricao` varchar(255) NOT NULL,
  `tipo_despesa` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `vencimento_fatura` enum('vencido','no prazo') NOT NULL,
  `status_pagamento` enum('pago','pendente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`descricao`, `tipo_despesa`, `valor`, `vencimento_fatura`, `status_pagamento`) VALUES
('Conta de água', 'Despesa de água', 150, 'vencido', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilino`
--

CREATE TABLE `inquilino` (
  `idNome` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` enum('masculino','feminino') NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inquilino`
--

INSERT INTO `inquilino` (`idNome`, `idade`, `sexo`, `telefone`, `email`) VALUES
('João', 18, 'masculino', '4934-4345', 'joao@ap.com'),
('Willian', 21, 'masculino', '9421-4129', 'willian@ap.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `identificacao` varchar(255) NOT NULL,
  `proprietario` varchar(255) NOT NULL,
  `condominio` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`identificacao`, `proprietario`, `condominio`, `endereco`) VALUES
('Apto 101', 'Willian', 'Residencial Condomínios', 'BR 470');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `despesa`
--
ALTER TABLE `despesa`
  ADD PRIMARY KEY (`descricao`);

--
-- Índices para tabela `inquilino`
--
ALTER TABLE `inquilino`
  ADD PRIMARY KEY (`idNome`);

--
-- Índices para tabela `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`identificacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
