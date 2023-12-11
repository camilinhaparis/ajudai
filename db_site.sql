-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2022 às 02:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(11) NOT NULL,
  `cidade` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`nome`, `sobrenome`, `email`, `senha`, `cep`, `cidade`, `bairro`, `endereco`, `numero`, `telefone`) VALUES
('Camila', 'Russo', 'camilinhaparis@hotmail.com', '2409', 16200080, 'Birigüi', 'Centro', 'Rua Bandeirantes', '89', '(899) 111-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

CREATE TABLE `tb_postagens` (
  `id_postagem` int(11) NOT NULL,
  `postagem` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `capa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `atividade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(11) NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `semana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `servico` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fim` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nome`, `sobrenome`, `email`, `senha`, `capa`, `perfil`, `atividade`, `telefone`, `cep`, `estado`, `cidade`, `endereco`, `numero`, `bairro`, `semana`, `servico`, `inicio`, `fim`) VALUES
(4, 'camila', 'parise', 'camila@hotmail.com', '2409', '1.png', '2.jpeg', 'Desenhista', '18991111110', 16200080, 'SP', 'Birigüi', 'Rua Bandeirantes', '89', 'Centro', 'segunda,terca,quarta,quinta', 'Eu faço desenhos, plantas, quadrinhos', '21:02,21:03,,,,,', '22:03,21:03,,,,,');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
