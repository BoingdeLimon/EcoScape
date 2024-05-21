-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 11:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoscapes`
--

-- --------------------------------------------------------

--
-- Table structure for table `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `detalles` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `imagen`, `precio`, `detalles`) VALUES
(1, 'Viaje a Nepal. Grupo verano. Sonrisas en el Himalaya', 'assets/nepal.jpg', '45000.00', 'Café\r\nWi-Fi\r\nRecorrido'),
(2, 'Viaje a Senegal. Semana Santa. Tierra de baobabs en grupo', 'assets/senegal.jpg', '17000.00', 'Desayuno incluido\r\nWi-Fi\r\nTour incluido'),
(3, 'Viaje a Marruecos. En familia. En grupo.Cultura y naturaleza en el corazón del Rif', 'assets/marruecos.jpg', '45000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido'),
(4, '7 días en los Cabos', 'assets/los_cabos.jpg', '25000.00', 'Desayuno incluido\r\nWi-Fi\r\nPaseo en buggy'),
(5, 'Paquete 14 días en Japon', 'assets/fuji.jpg', '20000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido'),
(6, 'Paquete de 14 días en el Gran Cañon', 'assets/grand_canyon.jpg', '12000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fecha_registro`, `imagen`) VALUES
(14, 'eco', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'green@ecoscapes.com', '2024-05-08 04:48:26', 'assets/profile_pics/pexels-pratik-gupta-2748716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_paquetes`
--

CREATE TABLE `usuarios_paquetes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `personas` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios_paquetes`
--

INSERT INTO `usuarios_paquetes` (`id`, `id_usuario`, `id_paquete`, `personas`, `fecha`) VALUES
(16, 14, 6, 1, '2024-06-01'),
(17, 14, 5, 1, '2024-06-01'),
(18, 14, 4, 1, '2024-06-01'),
(19, 14, 1, 1, '2024-06-01'),
(20, 14, 2, 1, '2024-06-01'),
(21, 14, 3, 1, '2024-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
