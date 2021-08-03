-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/08/2021 às 00:45
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hortifrutti`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atribuicao`
--

CREATE TABLE `atribuicao` (
  `id_atribuicao` varchar(10) NOT NULL,
  `titulo_funcao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `atribuicao`
--

INSERT INTO `atribuicao` (`id_atribuicao`, `titulo_funcao`) VALUES
('EST', 'Estoquista'),
('REP', 'Reposição'),
('VND', 'Vendas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` varchar(15) NOT NULL,
  `nome_funcionario` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `localidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `nome_funcionario`, `cep`, `logradouro`, `numero`, `bairro`, `complemento`, `localidade`) VALUES
('RJ', 'Yuri Augusto dos Reis', '01001-000', 'Praça da Sé', 100, 'Sé', 'lado ímpar', 'São Paulo'),
('SP', 'Ana Clara Moraes dos Reis', '14811-240', 'Avenida América', 917, 'Jardim América (Vila Xavier)', 'Bloco 08 Ap 301', 'Araraquara');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(10) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `cnpj`, `telefone`, `nome`) VALUES
(1, '414.728.0001/21', '(15) 9.9998-8899', 'MV Frutas'),
(2, '828.828.0001/41', '(15) 9.9998-8899', 'Congelados S.A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fruta`
--

CREATE TABLE `fruta` (
  `id_fruta` varchar(10) NOT NULL,
  `nome_fruta` varchar(50) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `quantia` varchar(50) NOT NULL,
  `datachegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `fruta`
--

INSERT INTO `fruta` (`id_fruta`, `nome_fruta`, `valor`, `quantia`, `datachegada`) VALUES
('B', 'Maça', '9.70', '50kgs', '2021-05-24'),
('A', 'Manga', '5.58', '150kgs', '2021-07-06'),
('A', 'Pera', '5.40', '100Kgs', '2021-07-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_atribuicao` varchar(10) NOT NULL,
  `fruta_responsavel` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `salario` float(22,2) NOT NULL,
  `datanascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_atribuicao`, `fruta_responsavel`, `nome`, `telefone`, `cpf`, `salario`, `datanascimento`) VALUES
('EST', 'A', 'Ana Clara Moraes dos Reis', '997792203', '44592263839', 5000.00, '2021-05-10'),
('EST', 'B', 'Yuri Augusto dos Reis', '997792203', '446.893.968-09', 4500.00, '1997-05-20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`) VALUES
(1, 'email@teste.com', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atribuicao`
--
ALTER TABLE `atribuicao`
  ADD PRIMARY KEY (`id_atribuicao`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices de tabela `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`nome_fruta`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `id_atribuicao` (`id_atribuicao`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `id_atribuicao` FOREIGN KEY (`id_atribuicao`) REFERENCES `atribuicao` (`id_atribuicao`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
