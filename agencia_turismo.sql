-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2018 às 22:35
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencia_turismo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `idArquivo` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo_produto`
--

CREATE TABLE `arquivo_produto` (
  `idProduto` int(11) NOT NULL,
  `idArquivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `idTipoProduto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantDisponivel` int(11) NOT NULL,
  `preco` double(6,2) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `incluso` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `idTipoProduto`, `nome`, `quantDisponivel`, `preco`, `descricao`, `incluso`) VALUES
(2, 1, 'Canoa Quebrada', 20, 199.00, 'aaaaaaaaaaaaaaaaaaaaáaaaaaaaaaa', '# ÔNIBUS COM AR, SOM, BANHEIRO;\r\n# PASSEIO A SETE CIDADES;\r\n# GUIA TURÍSTICO;\r\n# ALMOÇO (NÃO INCLUSO)\r\n# HOSPEDAGEM EM HOTEL OU HOSTEL (A SER INFORMADO PELO CLIENTE NA COMPRA DO PACOTE, COM VALORES FIFERENCIADOS);\r\n# PASSEIO AO PORTO DAS BARCAS(PARNAÍBA-PI), CONHECENDO A CIDADE QUE É PORTA DE ENTRADA PARA O DELTA.\r\n# PASSEIO AO DELTA DO PARNAÍBA (LANCHE DE FRUTAS, ALMOÇO, CARANGUEJADA).'),
(3, 1, 'Porto de Galinhas', 20, 199.90, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '# ÔNIBUS COM AR, SOM, BANHEIRO;\r\n# PASSEIO NA CIDADE DE PEDRO II;\r\n# PASSEIO AO MORRO DO GRITADOR;\r\n# PASSEIO AO SÍTIO DO BURITIZINHO;\r\n# PASSEIO AO MUSEU DA ROÇA;\r\n# ALMOÇO (NÃO INCLUSO).');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `idTipoProduro` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`idTipoProduro`, `nome`) VALUES
(1, 'Pacote de viagens'),
(2, 'Passagens');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`idArquivo`);

--
-- Indexes for table `arquivo_produto`
--
ALTER TABLE `arquivo_produto`
  ADD PRIMARY KEY (`idProduto`,`idArquivo`),
  ADD KEY `idArquivo` (`idArquivo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idTipoProduto` (`idTipoProduto`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`idTipoProduro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `idTipoProduro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivo_produto`
--
ALTER TABLE `arquivo_produto`
  ADD CONSTRAINT `arquivo_produto_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`),
  ADD CONSTRAINT `arquivo_produto_ibfk_2` FOREIGN KEY (`idArquivo`) REFERENCES `arquivo` (`idArquivo`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`idTipoProduto`) REFERENCES `tipo_produto` (`idTipoProduro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
