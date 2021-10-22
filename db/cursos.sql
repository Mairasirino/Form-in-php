-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 22:28
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(8) NOT NULL,
  `nome` text NOT NULL,
  `endereco` text NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL,
  `cargo` text NOT NULL,
  `interesse` text NOT NULL,
  `minicurso` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `endereco`, `cidade`, `estado`, `cargo`, `interesse`, `minicurso`) VALUES
(14, 'Romeu Afecto', 'Rua teste', 'SAO PAULO', 'SP', 'gerencia', 'biologia', 'zxcxzc'),
(15, 'Romeu Afecto', 'Rua ', 'SAO PAULO', 'SP', 'gerencia', 'biologia', 'zX|zXXzXXzX'),
(16, 'Romeu Afecto', 'Rua ', 'SAO PAULO', 'SP', 'gerencia', 'biologiameio_ambienteengenharia', 'zX|zXXzXXzX'),
(17, 'Romeu Afecto', 'Rua A', 'SAO PAULO', 'SP', 'gerencia', 'meio_ambiente', 'adfsfsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro2`
--

CREATE TABLE `cadastro2` (
  `id` int(8) NOT NULL,
  `nome` text NOT NULL,
  `endereco` text NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL,
  `imagem` text NOT NULL,
  `cargo` text NOT NULL,
  `area` text NOT NULL,
  `obs` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro2`
--

INSERT INTO `cadastro2` (`id`, `nome`, `endereco`, `cidade`, `estado`, `imagem`, `cargo`, `area`, `obs`) VALUES
(39, 'Romeu Afecto', 'rua sao jorge 560 - tatuape', 'sao Paulo', 'SP', 'imagens/15671964985d698552c0d54.png', 'gerencia', 'computacao', 'zcXCXZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro2`
--
ALTER TABLE `cadastro2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cadastro2`
--
ALTER TABLE `cadastro2`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
