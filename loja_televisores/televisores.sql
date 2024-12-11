-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 12:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `televisores`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Cod_Funcionarios` int(11) NOT NULL,
  `nome_fun` varchar(45) NOT NULL,
  `login_fun` varchar(45) NOT NULL,
  `senha_fun` varchar(45) NOT NULL,
  `status_fun` varchar(45) NOT NULL,
  `funcao_fun` varchar(45) NOT NULL,
  `email_fun` varchar(45) NOT NULL,
  `cpf_fun` varchar(14) NOT NULL,
  `rg_fun` varchar(9) NOT NULL,
  `telefone_fun` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Cod_Funcionarios`, `nome_fun`, `login_fun`, `senha_fun`, `status_fun`, `funcao_fun`, `email_fun`, `cpf_fun`, `rg_fun`, `telefone_fun`) VALUES
(0, 'Administrador do sistema', 'admin', '87965', 'inativo', 'administrador', 'admin@gmail.com.br', '345-890-765.32', '5.123-987', 'Array'),
(1, 'André', 'andre', '5487', 'Ativo', 'vendedor', 'andremoura@gmail.com.br', '321-789-654.21', '8.254.240', '(61) 9-9432-6789'),
(2, 'Joaquim', 'joaq', '4102', 'Ativo', 'estoquista', 'joaquimalves@gmail.com.br', '360-218-760.10', '8.254.240', '(61) 9-9102-7458');

-- --------------------------------------------------------

--
-- Estrutura para tabela `televisores`
--

CREATE TABLE `televisores` (
  `Cod_televisores` int(11) NOT NULL,
  `tipo_telev` varchar(45) NOT NULL,
  `marca_telev` varchar(45) NOT NULL,
  `modelo_telev` varchar(45) NOT NULL,
  `preco_telev` decimal(10,2) NOT NULL,
  `fila_compra_telev` char(1) NOT NULL,
  `vendas_Cod_ven` int(11) NOT NULL,
  `qtd_portas_hdmi_telev` varchar(45) NOT NULL,
  `qtd_portas_usb_telev` varchar(45) NOT NULL,
  `qtd_polegadas_telev` varchar(45) NOT NULL,
  `resolucao_telev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `Cod_ven` int(11) NOT NULL,
  `data_ven` varchar(45) NOT NULL,
  `Funcionarios_Cod_Funcionarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Cod_Funcionarios`);

--
-- Índices de tabela `televisores`
--
ALTER TABLE `televisores`
  ADD PRIMARY KEY (`Cod_televisores`),
  ADD KEY `fk_televisores_vendas1_idx` (`vendas_Cod_ven`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`Cod_ven`),
  ADD KEY `fk_vendas_Funcionarios_idx` (`Funcionarios_Cod_Funcionarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `televisores`
--
ALTER TABLE `televisores`
  MODIFY `Cod_televisores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `Funcionarios_Cod_Funcionarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `televisores`
--
ALTER TABLE `televisores`
  ADD CONSTRAINT `fk_televisores_vendas1` FOREIGN KEY (`vendas_Cod_ven`) REFERENCES `vendas` (`Cod_ven`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_vendas_Funcionarios` FOREIGN KEY (`Funcionarios_Cod_Funcionarios`) REFERENCES `funcionarios` (`Cod_Funcionarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
