-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 01-Ago-2019 às 14:04
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10233550_alistados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `batalhao`
--

CREATE TABLE `batalhao` (
  `id` int(11) NOT NULL,
  `pessoa` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `paten` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `oficial` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ta` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `batalhao`
--

INSERT INTO `batalhao` (`id`, `pessoa`, `paten`, `oficial`, `ta`, `data`) VALUES
(2, 'Djchristian55', 'Ministro da Ciência e Tecnologia', 'Henrique-Dumont', '-', '2019-07-23 14:22:05'),
(6, 'bnn', 'teste', 'gcbgc', 'sdcd', '2019-08-01 00:23:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'Christian', '$2y$10$mfG8KdrBsMsh1FiZ3ODW4.5XNsr9d6XgKQowIKsDdiJlBVjljwIbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batalhao`
--
ALTER TABLE `batalhao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batalhao`
--
ALTER TABLE `batalhao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
