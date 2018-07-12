-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2018 às 02:10
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acesso_nivel`
--

CREATE TABLE `tbl_acesso_nivel` (
  `IDACESSONIVEL` char(1) NOT NULL,
  `ACE_NOMENIVEL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_acesso_nivel`
--

INSERT INTO `tbl_acesso_nivel` (`IDACESSONIVEL`, `ACE_NOMENIVEL`) VALUES
('G', 'GERENTE'),
('O', 'OPERADOR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cidade`
--

CREATE TABLE `tbl_cidade` (
  `IDCIDADE` int(11) NOT NULL,
  `CID_NOME` varchar(40) NOT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cidade`
--

INSERT INTO `tbl_cidade` (`IDCIDADE`, `CID_NOME`, `ID_ESTADO`) VALUES
(1, 'Guarulhos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cobranca`
--

CREATE TABLE `tbl_cobranca` (
  `IDCOBRANCA` int(11) NOT NULL,
  `COB_PLACA` varchar(50) NOT NULL,
  `COB_MARCA` varchar(100) NOT NULL,
  `COB_MODELO` varchar(100) NOT NULL,
  `COB_COR` varchar(50) NOT NULL,
  `COB_DATA_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `COB_DATA_SAI` datetime DEFAULT NULL,
  `COB_VALOR` decimal(10,2) DEFAULT NULL,
  `COB_OBS` varchar(150) DEFAULT NULL,
  `ID_TIPOCOBRANCA` int(11) DEFAULT NULL,
  `ID_FORMAPGTO` int(11) DEFAULT NULL,
  `ID_MENSALISTA` int(11) DEFAULT NULL,
  `ID_TIPO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cobranca`
--

INSERT INTO `tbl_cobranca` (`IDCOBRANCA`, `COB_PLACA`, `COB_MARCA`, `COB_MODELO`, `COB_COR`, `COB_DATA_ENT`, `COB_DATA_SAI`, `COB_VALOR`, `COB_OBS`, `ID_TIPOCOBRANCA`, `ID_FORMAPGTO`, `ID_MENSALISTA`, `ID_TIPO`) VALUES
(2, 'abc-1234', 'PEUGEOT', '207', '', '2018-07-11 23:33:37', NULL, NULL, 'Carro do joão', NULL, NULL, NULL, 1),
(3, 'ens-9758', 'Peugeot', '207', '', '2018-07-11 23:38:04', NULL, NULL, 'ArranhÃ£o na parte frontal', NULL, NULL, NULL, 1),
(4, 'ens-9758', 'Peugeot', '207', '', '2018-07-11 23:38:04', NULL, NULL, 'ArranhÃ£o na parte frontal', NULL, NULL, NULL, 1),
(5, 'abc-1234', 'honda', 'hornet', '', '2018-07-11 23:45:37', NULL, NULL, 'hornet laranja', NULL, NULL, NULL, 2),
(6, 'DBA-4321', 'TESTE', 'TESTE', '', '2018-07-11 23:49:45', NULL, NULL, 'TESTE', NULL, NULL, NULL, 1),
(7, 'aaaa', 'aaa', 'aaa', 'aaa', '2018-07-11 23:51:42', NULL, NULL, 'aaa', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cor`
--

CREATE TABLE `tbl_cor` (
  `IDCOR` int(11) NOT NULL,
  `COR_NOME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cor`
--

INSERT INTO `tbl_cor` (`IDCOR`, `COR_NOME`) VALUES
(1, 'PRETO'),
(2, 'BRANCO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_endereco`
--

CREATE TABLE `tbl_endereco` (
  `IDENDERECO` int(11) NOT NULL,
  `END_LOGRADOURO` varchar(100) NOT NULL,
  `END_NUMERO` varchar(10) DEFAULT NULL,
  `END_BAIRRO` varchar(50) NOT NULL,
  `END_CEP` varchar(20) DEFAULT NULL,
  `END_COMPLEMENTO` varchar(100) DEFAULT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL,
  `ID_CIDADE` int(11) DEFAULT NULL,
  `ID_MENSALISTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_endereco`
--

INSERT INTO `tbl_endereco` (`IDENDERECO`, `END_LOGRADOURO`, `END_NUMERO`, `END_BAIRRO`, `END_CEP`, `END_COMPLEMENTO`, `ID_ESTADO`, `ID_CIDADE`, `ID_MENSALISTA`) VALUES
(1, 'Av. Dois', '17', 'Jardim Tranquilidade', '07051220', 'Próximo ao estadio do flamenguinho de Guarulhos', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `IDESTADO` int(11) NOT NULL,
  `EST_NOME` varchar(30) NOT NULL,
  `EST_SIG` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_estado`
--

INSERT INTO `tbl_estado` (`IDESTADO`, `EST_NOME`, `EST_SIG`) VALUES
(1, 'São Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_forma_pgto`
--

CREATE TABLE `tbl_forma_pgto` (
  `IDFORMAPGTO` int(11) NOT NULL,
  `FORM_NOME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_forma_pgto`
--

INSERT INTO `tbl_forma_pgto` (`IDFORMAPGTO`, `FORM_NOME`) VALUES
(1, 'CARTÃO DE CRÉDITO'),
(2, 'CARTÃO DE DEBITO'),
(3, 'DINHEIRO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_marca`
--

CREATE TABLE `tbl_marca` (
  `IDMARCA` int(11) NOT NULL,
  `MAR_NOME` varchar(40) NOT NULL,
  `ID_TIPO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_marca`
--

INSERT INTO `tbl_marca` (`IDMARCA`, `MAR_NOME`, `ID_TIPO`) VALUES
(1, 'PEUGEOT', 1),
(2, 'HONDA', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_mensalista`
--

CREATE TABLE `tbl_mensalista` (
  `IDMENSALISTA` int(11) NOT NULL,
  `MEN_NOME` varchar(100) NOT NULL,
  `MEN_SEXO` enum('M','F') DEFAULT NULL,
  `MEN_DATA_NASC` date NOT NULL,
  `MEN_CPF` varchar(20) DEFAULT NULL,
  `MEN_DATA_CAD` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_mensalista`
--

INSERT INTO `tbl_mensalista` (`IDMENSALISTA`, `MEN_NOME`, `MEN_SEXO`, `MEN_DATA_NASC`, `MEN_CPF`, `MEN_DATA_CAD`) VALUES
(1, 'João Paulo Ferreira da Silva', 'M', '1995-09-11', '44634252805', '2018-07-08 16:21:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_modelo`
--

CREATE TABLE `tbl_modelo` (
  `IDMODELO` int(11) NOT NULL,
  `MOD_NOME` varchar(40) NOT NULL,
  `ID_MARCA` int(11) DEFAULT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `MOD_ANO` varchar(10) NOT NULL,
  `ID_MENSALISTA` int(11) DEFAULT NULL,
  `ID_COR` int(11) DEFAULT NULL,
  `MOD_PLACA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_modelo`
--

INSERT INTO `tbl_modelo` (`IDMODELO`, `MOD_NOME`, `ID_MARCA`, `ID_TIPO`, `MOD_ANO`, `ID_MENSALISTA`, `ID_COR`, `MOD_PLACA`) VALUES
(1, '207', 1, 1, '2010', 1, 1, 'ens-9758'),
(2, 'Hornet', 2, 2, '2018', 1, 2, 'hon-1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_cobranca`
--

CREATE TABLE `tbl_tipo_cobranca` (
  `IDTIPOCOBRANCA` int(11) NOT NULL,
  `TIP_COBRANCA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tipo_cobranca`
--

INSERT INTO `tbl_tipo_cobranca` (`IDTIPOCOBRANCA`, `TIP_COBRANCA`) VALUES
(1, 'AVULSO'),
(2, 'CORTESIA'),
(3, 'MENSALISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_veiculo`
--

CREATE TABLE `tbl_tipo_veiculo` (
  `IDTIPOVEICULO` int(11) NOT NULL,
  `TIP_NOME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tipo_veiculo`
--

INSERT INTO `tbl_tipo_veiculo` (`IDTIPOVEICULO`, `TIP_NOME`) VALUES
(1, 'CARRO'),
(2, 'MOTO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `IDUSUARIO` int(11) NOT NULL,
  `USU_NOME` varchar(30) NOT NULL,
  `USU_LOGIN` varchar(20) NOT NULL,
  `USU_SENHA` varchar(100) NOT NULL,
  `ID_ACESSONIVEL` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`IDUSUARIO`, `USU_NOME`, `USU_LOGIN`, `USU_SENHA`, `ID_ACESSONIVEL`) VALUES
(1, 'João Paulo Ferreira da Silva', 'joao.silva', '29c9350bdb09dd4ccb6cffe09dd106ea', 'G');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_veiculo`
--

CREATE TABLE `tbl_veiculo` (
  `IDVEICULO` int(11) NOT NULL,
  `VEI_PLACA` varchar(20) NOT NULL,
  `ID_MODELO` int(11) DEFAULT NULL,
  `ID_COR` int(11) DEFAULT NULL,
  `ID_MARCA` int(11) DEFAULT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `ID_MENSALISTA` int(11) DEFAULT NULL,
  `ID_TIPOVEICULO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acesso_nivel`
--
ALTER TABLE `tbl_acesso_nivel`
  ADD PRIMARY KEY (`IDACESSONIVEL`);

--
-- Indexes for table `tbl_cidade`
--
ALTER TABLE `tbl_cidade`
  ADD PRIMARY KEY (`IDCIDADE`),
  ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- Indexes for table `tbl_cobranca`
--
ALTER TABLE `tbl_cobranca`
  ADD PRIMARY KEY (`IDCOBRANCA`),
  ADD KEY `ID_FORMAPGTO` (`ID_FORMAPGTO`),
  ADD KEY `ID_TIPOCOBRANCA` (`ID_TIPOCOBRANCA`),
  ADD KEY `ID_MENSALISTA` (`ID_MENSALISTA`),
  ADD KEY `FK_COBRANCA_TIPO_VEICULO` (`ID_TIPO`);

--
-- Indexes for table `tbl_cor`
--
ALTER TABLE `tbl_cor`
  ADD PRIMARY KEY (`IDCOR`);

--
-- Indexes for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD PRIMARY KEY (`IDENDERECO`),
  ADD KEY `ID_ESTADO` (`ID_ESTADO`),
  ADD KEY `ID_CIDADE` (`ID_CIDADE`),
  ADD KEY `ID_MENSALISTA` (`ID_MENSALISTA`);

--
-- Indexes for table `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`IDESTADO`),
  ADD UNIQUE KEY `EST_NOME` (`EST_NOME`);

--
-- Indexes for table `tbl_forma_pgto`
--
ALTER TABLE `tbl_forma_pgto`
  ADD PRIMARY KEY (`IDFORMAPGTO`);

--
-- Indexes for table `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD PRIMARY KEY (`IDMARCA`),
  ADD KEY `ID_TIPO` (`ID_TIPO`);

--
-- Indexes for table `tbl_mensalista`
--
ALTER TABLE `tbl_mensalista`
  ADD PRIMARY KEY (`IDMENSALISTA`);

--
-- Indexes for table `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  ADD PRIMARY KEY (`IDMODELO`),
  ADD KEY `ID_MARCA` (`ID_MARCA`),
  ADD KEY `ID_TIPO` (`ID_TIPO`);

--
-- Indexes for table `tbl_tipo_cobranca`
--
ALTER TABLE `tbl_tipo_cobranca`
  ADD PRIMARY KEY (`IDTIPOCOBRANCA`);

--
-- Indexes for table `tbl_tipo_veiculo`
--
ALTER TABLE `tbl_tipo_veiculo`
  ADD PRIMARY KEY (`IDTIPOVEICULO`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`IDUSUARIO`),
  ADD KEY `ID_ACESSONIVEL` (`ID_ACESSONIVEL`);

--
-- Indexes for table `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  ADD PRIMARY KEY (`IDVEICULO`),
  ADD KEY `ID_MODELO` (`ID_MODELO`),
  ADD KEY `ID_COR` (`ID_COR`),
  ADD KEY `ID_MARCA` (`ID_MARCA`),
  ADD KEY `ID_TIPO` (`ID_TIPO`),
  ADD KEY `ID_MENSALISTA` (`ID_MENSALISTA`),
  ADD KEY `ID_TIPOVEICULO` (`ID_TIPOVEICULO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cidade`
--
ALTER TABLE `tbl_cidade`
  MODIFY `IDCIDADE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cobranca`
--
ALTER TABLE `tbl_cobranca`
  MODIFY `IDCOBRANCA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cor`
--
ALTER TABLE `tbl_cor`
  MODIFY `IDCOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `IDENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_estado`
--
ALTER TABLE `tbl_estado`
  MODIFY `IDESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_forma_pgto`
--
ALTER TABLE `tbl_forma_pgto`
  MODIFY `IDFORMAPGTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_marca`
--
ALTER TABLE `tbl_marca`
  MODIFY `IDMARCA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_mensalista`
--
ALTER TABLE `tbl_mensalista`
  MODIFY `IDMENSALISTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  MODIFY `IDMODELO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tipo_cobranca`
--
ALTER TABLE `tbl_tipo_cobranca`
  MODIFY `IDTIPOCOBRANCA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tipo_veiculo`
--
ALTER TABLE `tbl_tipo_veiculo`
  MODIFY `IDTIPOVEICULO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  MODIFY `IDVEICULO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbl_cidade`
--
ALTER TABLE `tbl_cidade`
  ADD CONSTRAINT `tbl_cidade_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `tbl_estado` (`IDESTADO`);

--
-- Limitadores para a tabela `tbl_cobranca`
--
ALTER TABLE `tbl_cobranca`
  ADD CONSTRAINT `FK_COBRANCA_TIPO_VEICULO` FOREIGN KEY (`ID_TIPO`) REFERENCES `tbl_tipo_veiculo` (`IDTIPOVEICULO`),
  ADD CONSTRAINT `tbl_cobranca_ibfk_1` FOREIGN KEY (`ID_FORMAPGTO`) REFERENCES `tbl_forma_pgto` (`IDFORMAPGTO`),
  ADD CONSTRAINT `tbl_cobranca_ibfk_2` FOREIGN KEY (`ID_TIPOCOBRANCA`) REFERENCES `tbl_tipo_cobranca` (`IDTIPOCOBRANCA`),
  ADD CONSTRAINT `tbl_cobranca_ibfk_3` FOREIGN KEY (`ID_MENSALISTA`) REFERENCES `tbl_mensalista` (`IDMENSALISTA`);

--
-- Limitadores para a tabela `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD CONSTRAINT `tbl_endereco_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `tbl_estado` (`IDESTADO`),
  ADD CONSTRAINT `tbl_endereco_ibfk_2` FOREIGN KEY (`ID_CIDADE`) REFERENCES `tbl_cidade` (`IDCIDADE`),
  ADD CONSTRAINT `tbl_endereco_ibfk_3` FOREIGN KEY (`ID_MENSALISTA`) REFERENCES `tbl_mensalista` (`IDMENSALISTA`);

--
-- Limitadores para a tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD CONSTRAINT `tbl_marca_ibfk_1` FOREIGN KEY (`ID_TIPO`) REFERENCES `tbl_tipo_veiculo` (`IDTIPOVEICULO`);

--
-- Limitadores para a tabela `tbl_modelo`
--
ALTER TABLE `tbl_modelo`
  ADD CONSTRAINT `tbl_modelo_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `tbl_marca` (`IDMARCA`),
  ADD CONSTRAINT `tbl_modelo_ibfk_2` FOREIGN KEY (`ID_TIPO`) REFERENCES `tbl_tipo_veiculo` (`IDTIPOVEICULO`);

--
-- Limitadores para a tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`ID_ACESSONIVEL`) REFERENCES `tbl_acesso_nivel` (`IDACESSONIVEL`);

--
-- Limitadores para a tabela `tbl_veiculo`
--
ALTER TABLE `tbl_veiculo`
  ADD CONSTRAINT `tbl_veiculo_ibfk_1` FOREIGN KEY (`ID_MODELO`) REFERENCES `tbl_modelo` (`IDMODELO`),
  ADD CONSTRAINT `tbl_veiculo_ibfk_2` FOREIGN KEY (`ID_COR`) REFERENCES `tbl_cor` (`IDCOR`),
  ADD CONSTRAINT `tbl_veiculo_ibfk_3` FOREIGN KEY (`ID_MARCA`) REFERENCES `tbl_marca` (`IDMARCA`),
  ADD CONSTRAINT `tbl_veiculo_ibfk_4` FOREIGN KEY (`ID_TIPO`) REFERENCES `tbl_tipo_veiculo` (`IDTIPOVEICULO`),
  ADD CONSTRAINT `tbl_veiculo_ibfk_5` FOREIGN KEY (`ID_MENSALISTA`) REFERENCES `tbl_mensalista` (`IDMENSALISTA`),
  ADD CONSTRAINT `tbl_veiculo_ibfk_6` FOREIGN KEY (`ID_TIPOVEICULO`) REFERENCES `tbl_tipo_veiculo` (`IDTIPOVEICULO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
