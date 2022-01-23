CREATE TABLE `despesa` (
  `descricao` varchar(255) PRIMARY KEY NOT NULL,
  `tipo_despesa` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `vencimento_fatura` date NOT NULL,
  `status_pagamento` ENUM ('pago', 'pendente') NOT NULL
);

CREATE TABLE `inquilino` (
  `idNome` varchar(255) PRIMARY KEY NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` ENUM ('masculino', 'feminino') NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
);

CREATE TABLE `unidade` (
  `identificacao` varchar(255) PRIMARY KEY NOT NULL,
  `proprietario` varchar(255) NOT NULL,
  `condominio` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
);

ALTER TABLE `despesa` ADD FOREIGN KEY (`descricao`) REFERENCES `unidade` (`identificacao`);
