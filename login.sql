-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2021 às 17:19
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atv2_pweb2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `nomeusu` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`nomeusu`, `email`, `senha`, `nome`) VALUES
('w1', '', '«ŽãA-þ¼Š*7Dð\Z”', ''),
('1', '123233@gmail.com', 'î@+Gqé›7ºJ,‰!', '1'),
('1234', '12323@gmail.com', 'dO=±\'PâŠ §j', '123'),
('1234d1', '1232sss311@gmail.com', 'Ô$à‹„Ô:_3õg´ð', '123d1'),
('1234d', '1232sss3@gmail.com', '®òŒtœ¨mÊþëe™]', '123d'),
('skdisjdijsd21221', 'aaaa1121212@gmail.com', 'éýò‰]j¬3/ùA®Ù<æ', 'ushdhsudhsd'),
('ju', 'ju@gmail.com', 'n1:ýÈ„OMÚâž–i', 'jumento11'),
('jumentao1', 'jumentao1@gmail.com', 'n1:ýÈ„OMÚâž–i', 'jumento1'),
('jumentao', 'jumentao@gmail.com', '>á5ÓM¶]Ñ³J³ÆV^Ä', 'jumento'),
('matheuseqc', 'matheuseqc11@gmail.com', 'ÞT° bqp]\nºg_!', 'matheus11'),
('n2', 'matheuseqc11f@gmail.com', '*õ\n^7QÂ	[^ªkc', 'm1'),
('matheuseqc', 'matheuseqc@gmail.com', 'éýò‰]j¬3/ùA®Ù<æ', 'matheus'),
('n2', 'matheuseqcf@gmail.com', 'n1:ýÈ„OMÚâž–i', 'm1'),
('sasas', 'saaaaaaa@gmail.com', 'Øý2hõ²R…Âvšy±Zå', 'asdad');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
