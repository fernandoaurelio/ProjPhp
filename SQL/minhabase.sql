-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Ago-2017 às 15:04
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
-- Database: `minhabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `razaosocial` varchar(200) COLLATE utf8_bin NOT NULL,
  `nomefantasia` varchar(200) COLLATE utf8_bin NOT NULL,
  `cnpj` varchar(30) COLLATE utf8_bin NOT NULL,
  `ddd` varchar(10) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `site` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `razaosocial`, `nomefantasia`, `cnpj`, `ddd`, `telefone`, `site`) VALUES
(42, 'Delete', 'Delete-me', '12.399.339/0001-45', '47', '4799177828', ''),
(44, 'Meia', 'Meia Teste', '78.887.777/6666-55', '34', '8787.87878', ''),
(45, 'Samuel Tarly ME', 'Livraria Escama Gri', '10.992.837/0001-44', '57', '3988.4736', ''),
(46, 'Jon Snow Ltda', 'VidraÃ§aria Vidro de DragÃ£o', '12.098.877/0001-33', '46', '9912.28837', ''),
(47, 'Percy Jackson S/A', 'Raios e Trovoes BrechÃ³', '12.345.678/0001-97', '99', '6577.6655', ''),
(48, 'Katuperi ME', 'Katy Perry Music', '23.117.866/0001-76', '48', '3477.8877', 'www.swichtaylor.com'),
(49, 'Taylor Swift ME', 'Taylor Music', '12.034.577/8001-87', '48', '3988.3476', 'www.odeioakaty.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
