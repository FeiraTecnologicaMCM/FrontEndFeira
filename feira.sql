-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/10/2024 às 11:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `feira`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `id_stand` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `ods` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `integrantes` varchar(255) DEFAULT NULL,
  `turma` varchar(2) DEFAULT NULL,
  `local` varchar(15) DEFAULT NULL,
  `periodo` varchar(255) DEFAULT NULL,
  `curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `projetos`
--

INSERT INTO `projetos` (`id_stand`, `nome`, `ods`, `descricao`, `integrantes`, `turma`, `local`, `periodo`, `curso`) VALUES
(1, 'nome_1A', 1, 'DESCRICAO_1A', 'INTEGRANTES_1A', '1A', 'quadra', 'manha', 'ADM'),
(2, 'NOME_2A', 2, 'DESCRICAO_2A', 'INTEGRANATES_2A', '2A', 'bloco a', 'manha', 'ADM'),
(3, 'nome_3A', 1, 'DESCRICAO_3A', 'INTEGRANTES_3A', '3A', 'quadra', 'manha', 'ADM'),
(4, 'NOME_1B', 2, 'DESCRICAO_1B', 'INTEGRANATES_1B', '1B', 'bloco a', 'manha', 'RH'),
(5, 'nome_2B', 5, 'DESCRICAO_2B', 'INTEGRANTES_2B', '2B', 'quadra', 'manha', 'RH'),
(7, 'NOME_1C', 11, 'DESCRICAO_1C', 'INTEGRANTES_1C', '1C', 'biblioteca', 'manha', 'informatica'),
(8, 'NOME_2C', 8, 'DESCRICAO_2C', 'INTEGRANTES_2C', '2C', 'auditorio', 'manha', 'informatica'),
(9, 'NOME_1K', 13, 'ESCRICAO_1K', 'INTEGRANTES_1K', '1K', 'quadra', 'noite', 'logistica'),
(10, 'NOME_1G', 13, 'ESCRICAO_1G', 'INTEGRANTES_1G', '1G', 'quadra', 'noite', 'contabilidade'),
(11, 'NOME_1D', 13, 'ESCRICAO_1D', 'INTEGRANTES_1D', '1D', 'quadra', 'noite', 'ADM'),
(12, 'NOME_1H', 13, 'ESCRICAO_1H', 'INTEGRANTES_1H', '1H', 'quadra', 'noite', 'quimica'),
(13, 'NOME_1F', 13, 'ESCRICAO_1F', 'INTEGRANTES_1F', '1F', 'quadra', 'tarde', 'informatica'),
(14, 'NOME_1I', 13, 'ESCRICAO_1I', 'INTEGRANTES_1I', '1I', 'quadra', 'tarde', 'quimica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `votos`
--

CREATE TABLE `votos` (
  `id_voto` int(11) NOT NULL,
  `projeto_id` int(11) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `votos`
--

INSERT INTO `votos` (`id_voto`, `projeto_id`, `telefone`) VALUES
(3, 1, '11997076335'),
(4, 1, '11997076335'),
(5, 1, '11997076335'),
(6, 1, '11997076335'),
(7, 1, '11997076335'),
(8, 1, '11997076335'),
(9, 4, '11997076335'),
(10, 7, '11997076335'),
(11, 11, '11997076335'),
(12, 13, '11997076335'),
(13, 12, '11997076335'),
(14, 10, '11997076335'),
(15, 8, '11997076335'),
(16, 2, '11997076335'),
(17, 3, '11997076335'),
(18, 8, '11997076335'),
(19, 5, '11997076335'),
(20, 12, '11997076335'),
(21, 2, '11997076335'),
(22, 3, '11997076335'),
(23, 4, '11997076335'),
(24, 5, '11997076335'),
(25, 7, '11997076335'),
(26, 10, '11997076335'),
(27, 11, '11997076335'),
(28, 11, '11997076335');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id_stand`);

--
-- Índices de tabela `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id_voto`),
  ADD KEY `projeto_id` (`projeto_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `votos`
--
ALTER TABLE `votos`
  MODIFY `id_voto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`projeto_id`) REFERENCES `projetos` (`id_stand`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
