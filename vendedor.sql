-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Nov-2018 às 15:31
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fannypastor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

DROP TABLE IF EXISTS `vendedor`;
CREATE TABLE IF NOT EXISTS `vendedor` (
  `id` varchar(10) DEFAULT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `direitaPoint` varchar(10) DEFAULT NULL,
  `esquerdaPoint` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `Nome`, `sobrenome`, `puntaje`, `direitaPoint`, `esquerdaPoint`) VALUES
('001', 'Juan', 'Lopez', 0, '002', '003'),
('002', 'Maria', 'Jimenez', 0, '004', '005'),
('003', 'Isaura', 'Cintra', 0, '006', '007'),
('004', 'Paulo', 'Goncalvez', 0, '008', '009'),
('005', 'Dalmata', 'Cardoso', 0, NULL, NULL),
('006', 'Silas', 'Lopes', 0, NULL, NULL),
('007', 'Celso', 'Mendes', 0, NULL, NULL),
('008', 'Gabriel', 'Camargo', 0, NULL, NULL),
('009', 'Darcy', 'Neto', 0, NULL, NULL),
('010', 'Marcelo', 'Silva', 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
