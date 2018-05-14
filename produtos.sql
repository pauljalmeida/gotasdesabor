-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2016 às 22:31
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(240) NOT NULL,
  `conteudo` text NOT NULL,
  `imagem` varchar(240) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `conteudo`, `imagem`) VALUES
(1, 'Curso de HTML', 'O curso de HTML possui', 'um.png'),
(2, 'Curso de PHP', 'O curso de PHP possui', 'cinco.png'),
(3, 'Curso de CakePHP', 'O curso de CakePHP possui', 'um.png'),
(4, 'Curso de PHP OO', 'O curso de PHP possui', 'cinco.png'),
(5, 'Curso de Laravel', 'O curso de Laravel possui', 'um.png'),
(6, 'Curso de PHP OO', 'O curso de PHP possui', 'cinco.png'),
(7, 'Curso de php', 'O curso de php possui', 'um.png'),
(8, 'Curso de Phalcon', 'O curso de Phalcon possui', 'cinco.png'),
(9, 'Curso de Yii', 'O curso de Yii possui', 'um.png'),
(10, 'Curso de PHP', 'O curso de PHP possui', 'cinco.png'),
(11, 'Curso de PHP', 'O curso de PHP possui', 'quatro.png'),
(12, 'Curso de PHP', 'O curso de PHP possui', 'quatro.png'),
(13, 'Curso de PHP', 'O curso de PHP possui', 'quatro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
