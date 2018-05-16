-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 12:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software2`
--

-- --------------------------------------------------------

--
-- Table structure for table `metodopago`
--

CREATE TABLE `metodopago` (
  `id` int(11) NOT NULL,
  `reservapagada` int(11) NOT NULL,
  `metodopago` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pagosefectivo`
--

CREATE TABLE `pagosefectivo` (
  `id` int(11) NOT NULL,
  `reservapagada` int(11) NOT NULL,
  `cantidadefectivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pagostarjetacredito`
--

CREATE TABLE `pagostarjetacredito` (
  `id` int(11) NOT NULL,
  `reservapagada` int(11) NOT NULL,
  `numerotarjetacredito` bigint(45) NOT NULL,
  `ccv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pagostarjetainteligente`
--

CREATE TABLE `pagostarjetainteligente` (
  `id` int(11) NOT NULL,
  `reservapagada` int(45) NOT NULL,
  `numerotarjetainteligente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parqueaderos`
--

CREATE TABLE `parqueaderos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `carros` int(11) NOT NULL,
  `motos` int(11) NOT NULL,
  `bicicletas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parqueaderos`
--

INSERT INTO `parqueaderos` (`id`, `nombre`, `carros`, `motos`, `bicicletas`) VALUES
(1, 'galerias', 10, 10, 10),
(2, 'gratamira', 10, 10, 10),
(3, 'registraduria', 10, 10, 10),
(4, 'parking car', 10, 10, 11),
(5, 'quicklyparking', 10, 10, 10),
(6, 'vellavista', 10, 10, 10),
(7, 'helechales', 10, 10, 10),
(8, 'lenguerke', 10, 10, 10),
(9, 'basilica', 10, 10, 10),
(10, 'san carlos', 10, 10, 10),
(11, 'el bueno', 10, 10, 10),
(12, 'gran monarca', 10, 10, 10),
(13, 'la sexta', 10, 10, 9),
(14, 'genesis ', 10, 10, 10),
(15, 'central', 10, 10, 10),
(16, 'trapiches', 10, 10, 10),
(17, 'housecar57', 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `parqueadero` varchar(25) NOT NULL,
  `lugarentrega` varchar(45) NOT NULL,
  `minutos` int(45) NOT NULL,
  `fechareserva` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `reservadopor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `tipousuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `tipousuario`) VALUES
(1, 'dlopez', '1234', 'cliente'),
(2, 'rendon', '1234', 'cliente'),
(3, 'pedro', '1234', 'cliente'),
(4, 'darenas', '123456', 'cliente'),
(5, 'empleado1', '1234', 'empleado'),
(6, 'empleado2', '123456', 'empleado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagosefectivo`
--
ALTER TABLE `pagosefectivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagostarjetacredito`
--
ALTER TABLE `pagostarjetacredito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagostarjetainteligente`
--
ALTER TABLE `pagostarjetainteligente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parqueaderos`
--
ALTER TABLE `parqueaderos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pagosefectivo`
--
ALTER TABLE `pagosefectivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagostarjetacredito`
--
ALTER TABLE `pagostarjetacredito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagostarjetainteligente`
--
ALTER TABLE `pagostarjetainteligente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parqueaderos`
--
ALTER TABLE `parqueaderos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
