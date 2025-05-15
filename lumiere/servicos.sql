-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/04/2025 às 21:56
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
-- Banco de dados: `portifolio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `exibir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo`, `descricao`, `imagem`, `video`, `exibir`) VALUES
(1, '', '', '04-04-2025-16-45-17-download-(2).jpg', '', 'Imagem'),
(2, '', '', '04-04-2025-16-45-38-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(3, '', '', '04-04-2025-16-45-39-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(4, '', '', '04-04-2025-16-45-40-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(5, '', '', '04-04-2025-16-45-41-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(6, '', '', '04-04-2025-16-45-42-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(7, '', '', '04-04-2025-16-45-42-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(8, '', '', '04-04-2025-16-45-42-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(9, '', '', '04-04-2025-16-45-43-04-04-2025-16-22-49-rr.jpg', '', 'Imagem'),
(10, '', '', '04-04-2025-16-45-43-04-04-2025-16-22-49-rr.jpg', '', 'Imagem');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
