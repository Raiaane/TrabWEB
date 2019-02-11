-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Fev-2019 às 22:42
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `telefone`, `usuario`, `senha`, `email`, `cpf`) VALUES
(2, 'victor', '12345678', 'victor', '12345', 'victor@victor', '135.456.789-72'),
(3, 'raiane', '123-890706', 'raiane123', '123456', 'costa_raiane23@hotmail.com', '475859.554.32'),
(4, 'raiane', '123-890706', 'raiane123', '123456', 'costa_raiane23@hotmail.com', '475859.554.32'),
(5, 'valeria', '12345678', 'valeria', 'valeria', 'valeria@gmail.com', '1234567876234567654');

-- --------------------------------------------------------

--
-- Estrutura da tabela `humanas`
--

CREATE TABLE `humanas` (
  `id` int(11) NOT NULL,
  `id_professor` varchar(300) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagens`
--

CREATE TABLE `linguagens` (
  `id` int(11) NOT NULL,
  `id_professor` varchar(300) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matematica`
--

CREATE TABLE `matematica` (
  `id` int(11) NOT NULL,
  `id_prof` varchar(300) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(300) NOT NULL,
  `id_aluno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `natureza`
--

CREATE TABLE `natureza` (
  `id` int(11) NOT NULL,
  `id_professor` varchar(20) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanas`
--
ALTER TABLE `humanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linguagens`
--
ALTER TABLE `linguagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matematica`
--
ALTER TABLE `matematica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natureza`
--
ALTER TABLE `natureza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `humanas`
--
ALTER TABLE `humanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linguagens`
--
ALTER TABLE `linguagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matematica`
--
ALTER TABLE `matematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `natureza`
--
ALTER TABLE `natureza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
