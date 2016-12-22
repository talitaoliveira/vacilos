-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Dez-2016 às 00:45
-- Versão do servidor: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacilos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `email`, `senha`, `data_cadastro`) VALUES
(4, 'talita', 'litaa.oliveira@gmail.com', '202cb962ac59075b964b07152d234b70', '2016-12-21 23:19:12'),
(5, 'toliveira', 'litaa.oliveira@gmail.com', 'fe0cd002010d33def4798da2cf9ddee9', '2016-12-21 23:37:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacilo`
--

CREATE TABLE `vacilo` (
  `id` int(11) NOT NULL,
  `descricao_vacilo` varchar(140) COLLATE utf8_bin NOT NULL,
  `data_vacilo` date NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `tipo_vacilo` int(11) NOT NULL DEFAULT '1',
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `vacilo`
--

INSERT INTO `vacilo` (`id`, `descricao_vacilo`, `data_vacilo`, `data_cadastro`, `tipo_vacilo`, `excluido`, `usuario_id`) VALUES
(27, 'nao to fazendo nada', '2016-12-21', '2016-12-21 00:16:23', 1, 0, NULL),
(28, 'nao to fazendo nada', '2016-12-21', '2016-12-21 00:16:25', 1, 0, NULL),
(29, 'nao to fazendo nada', '2016-12-21', '2016-12-21 00:17:26', 1, 0, NULL),
(30, 'nao to fazendo nada', '2016-12-21', '2016-12-21 00:17:45', 1, 0, NULL),
(31, 'nao to fazendo nada', '2016-12-21', '2016-12-21 00:20:05', 1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`,`email`);

--
-- Indexes for table `vacilo`
--
ALTER TABLE `vacilo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vacilo`
--
ALTER TABLE `vacilo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
