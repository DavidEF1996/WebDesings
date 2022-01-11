-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 02:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hm_eventos`
--

-- --------------------------------------------------------

--
-- Table structure for table `amplificacion`
--

CREATE TABLE `amplificacion` (
  `id_amp` int(11) NOT NULL,
  `desc_amp` varchar(255) NOT NULL,
  `precio_amp` decimal(6,2) DEFAULT NULL,
  `unidad_medida_amp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amplificacion`
--

INSERT INTO `amplificacion` (`id_amp`, `desc_amp`, `precio_amp`, `unidad_medida_amp`) VALUES
(1, 'DJ', '30.00', '1 hora'),
(4, 'Animación', '0.00', '1 hora'),
(5, 'Prirotécnia fría', '20.00', 'Detonador'),
(6, 'Confeti', '80.00', 'Funda'),
(7, 'Escenario', '150.00', 'ancho x largo'),
(8, 'Iluminación', '0.00', ''),
(9, 'Sonido convencional', '50.00', 'hora'),
(10, 'Sonido aereo', '70.00', 'hora');

-- --------------------------------------------------------

--
-- Table structure for table `artistas`
--

CREATE TABLE `artistas` (
  `id_art` int(11) NOT NULL,
  `desc_art` varchar(255) NOT NULL,
  `precio_art` decimal(6,2) DEFAULT NULL,
  `unidad_medida_art` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artistas`
--

INSERT INTO `artistas` (`id_art`, `desc_art`, `precio_art`, `unidad_medida_art`) VALUES
(5, 'Solistas', '150.00', 'hora'),
(6, 'Grupos musicales', '300.00', 'hora'),
(7, 'Mariachis', '200.00', 'hora'),
(8, 'Payasos', '100.00', 'hora');

-- --------------------------------------------------------

--
-- Table structure for table `decoracion`
--

CREATE TABLE `decoracion` (
  `id_dec` int(11) NOT NULL,
  `desc_dec` varchar(255) NOT NULL,
  `precio_dec` decimal(6,2) NOT NULL,
  `unidad_medida_dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoracion`
--

INSERT INTO `decoracion` (`id_dec`, `desc_dec`, `precio_dec`, `unidad_medida_dec`) VALUES
(1, 'Sillas', '1.25', 'unidad'),
(2, 'Manteles', '260.00', 'unidad'),
(3, 'Arreglo floral', '0.00', 'unidad'),
(4, 'Centro de mesa', '6.00', 'unidad'),
(5, 'Cofre para sobres', '15.00', 'unidad'),
(6, 'Arco de globos', '25.00', 'unidad'),
(7, 'Gotas florales', '8.00', ' '),
(8, 'Silla quinceañera', '20.00', 'unidad');

-- --------------------------------------------------------

--
-- Table structure for table `licores`
--

CREATE TABLE `licores` (
  `id_lic` int(11) NOT NULL,
  `desc_lic` varchar(255) NOT NULL,
  `precio_lic` decimal(6,2) DEFAULT NULL,
  `unidad_medida_lic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `licores`
--

INSERT INTO `licores` (`id_lic`, `desc_lic`, `precio_lic`, `unidad_medida_lic`) VALUES
(1, 'Ron', '0.00', 'litro'),
(2, 'Wiskie', '0.00', 'litro'),
(3, 'Tequila', '0.00', 'litro'),
(4, 'Champane', '0.00', 'litro'),
(5, 'Vino', '0.00', 'litro');

-- --------------------------------------------------------

--
-- Table structure for table `pasteleria`
--

CREATE TABLE `pasteleria` (
  `id_pas` int(11) NOT NULL,
  `desc_pas` varchar(255) NOT NULL,
  `precio_pas` decimal(6,2) NOT NULL,
  `unidad_medida_pas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasteleria`
--

INSERT INTO `pasteleria` (`id_pas`, `desc_pas`, `precio_pas`, `unidad_medida_pas`) VALUES
(1, 'Fondue', '120.00', 'para número de personas'),
(2, 'Bocaditos de s-d', '0.40', 'unidad'),
(3, 'Pastel', '1.10', 'porcióm'),
(4, 'Fruchetas', '0.00', 'unidad');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id_per` int(11) NOT NULL,
  `desc_per` varchar(255) NOT NULL,
  `precio_per` decimal(10,0) DEFAULT NULL,
  `unidad_medida_per` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id_per`, `desc_per`, `precio_per`, `unidad_medida_per`) VALUES
(1, 'Seguridad', '35', 'persona'),
(2, 'Meseros', '35', 'persona');

-- --------------------------------------------------------

--
-- Table structure for table `varios`
--

CREATE TABLE `varios` (
  `id_var` int(11) NOT NULL,
  `desc_var` varchar(255) NOT NULL,
  `precio_var` int(11) DEFAULT NULL,
  `unidad_medida_var` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varios`
--

INSERT INTO `varios` (`id_var`, `desc_var`, `precio_var`, `unidad_medida_var`) VALUES
(1, 'Hora loca', 80, 'hora');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amplificacion`
--
ALTER TABLE `amplificacion`
  ADD PRIMARY KEY (`id_amp`);

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_art`);

--
-- Indexes for table `decoracion`
--
ALTER TABLE `decoracion`
  ADD PRIMARY KEY (`id_dec`);

--
-- Indexes for table `licores`
--
ALTER TABLE `licores`
  ADD PRIMARY KEY (`id_lic`);

--
-- Indexes for table `pasteleria`
--
ALTER TABLE `pasteleria`
  ADD PRIMARY KEY (`id_pas`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_per`);

--
-- Indexes for table `varios`
--
ALTER TABLE `varios`
  ADD PRIMARY KEY (`id_var`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amplificacion`
--
ALTER TABLE `amplificacion`
  MODIFY `id_amp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `decoracion`
--
ALTER TABLE `decoracion`
  MODIFY `id_dec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `licores`
--
ALTER TABLE `licores`
  MODIFY `id_lic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasteleria`
--
ALTER TABLE `pasteleria`
  MODIFY `id_pas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `varios`
--
ALTER TABLE `varios`
  MODIFY `id_var` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
