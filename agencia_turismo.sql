SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `arquivo` (
  `idArquivo` int(11) NOT NULL,
  `idTipoArquivo` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `arquivo_produto` (
  `idProduto` int(11) NOT NULL,
  `idArquivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `idTipoProduto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantDisponivel` int(11) NOT NULL,
  `preco` double(6,2) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_arquivo` (
  `idTipoArquivo` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_produto` (
  `idTipoProduro` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tipo_produto` (`idTipoProduro`, `nome`) VALUES
(1, 'Pacote de viagens'),
(2, 'Passagens');


ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`idArquivo`),
  ADD KEY `idTipoArquivo` (`idTipoArquivo`);

ALTER TABLE `arquivo_produto`
  ADD PRIMARY KEY (`idProduto`,`idArquivo`),
  ADD KEY `idArquivo` (`idArquivo`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idTipoProduto` (`idTipoProduto`);

ALTER TABLE `tipo_arquivo`
  ADD PRIMARY KEY (`idTipoArquivo`);

ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`idTipoProduro`);


ALTER TABLE `arquivo`
  MODIFY `idArquivo` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `tipo_arquivo`
  MODIFY `idTipoArquivo` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tipo_produto`
  MODIFY `idTipoProduro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `arquivo`
  ADD CONSTRAINT `arquivo_ibfk_1` FOREIGN KEY (`idTipoArquivo`) REFERENCES `tipo_arquivo` (`idTipoArquivo`);

ALTER TABLE `arquivo_produto`
  ADD CONSTRAINT `arquivo_produto_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`),
  ADD CONSTRAINT `arquivo_produto_ibfk_2` FOREIGN KEY (`idArquivo`) REFERENCES `arquivo` (`idArquivo`);

ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`idTipoProduto`) REFERENCES `tipo_produto` (`idTipoProduro`);

--Criar usuário próprio do banco
GRANT USAGE ON *.* TO 'agencia_turismo'@'localhost' IDENTIFIED BY PASSWORD '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9';

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON `agencia_turismo`.* TO 'agencia_turismo'@'localhost';