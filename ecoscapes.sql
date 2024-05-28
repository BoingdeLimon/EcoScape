-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 07:08 PM
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
  `descripcion` mediumtext DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `detalles` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `detalles`) VALUES
(1, 'Viaje a Nepal. Grupo verano. Sonrisas en el Himalaya', 'Un viaje a Nepal es una experiencia envolvente que combina aventura, espiritualidad y una asombrosa diversidad natural y cultural. Desde las impresionantes alturas del Himalaya hasta las ricas planicies subtropicales, este país ofrece un mosaico de atracciones que cautivan a cualquier viajero.', 'assets/nepal.jpg', '45000.00', 'Café\r\nWi-Fi\r\nRecorrido'),
(2, 'Viaje a Senegal. Semana Santa. Tierra de baobabs en grupo', 'Un viaje a Senegal es una experiencia enriquecedora que combina sostenibilidad, cultura y naturaleza. Desde la vibrante vida urbana de Dakar hasta las tranquilas playas de Saly y los ecosistemas protegidos del delta del Saloum, este viaje ofrece una inmersión en prácticas ecológicas y el apoyo a comunidades locales, todo en un entorno de impresionante belleza natural y diversidad cultural.', 'assets/senegal.jpg', '17000.00', 'Desayuno incluido\r\nWi-Fi\r\nTour incluido'),
(3, 'Viaje a Marruecos. En familia. En grupo.Cultura y naturaleza en el corazón del Rif', 'Un viaje a Marruecos es una experiencia única que combina sostenibilidad, cultura y naturaleza. Desde los vibrantes mercados de Marrakech hasta las majestuosas montañas del Atlas y los tranquilos paisajes del desierto de Agafay, este viaje ofrece una inmersión en prácticas ecológicas y el apoyo a comunidades locales, todo en un entorno de impresionante belleza natural.', 'assets/marruecos.jpg', '45000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido'),
(4, '7 días en los Cabos', 'Un viaje a Los Cabos es una experiencia inolvidable que combina aventura, lujo y naturaleza. Desde las impresionantes playas y formaciones rocosas de El Arco hasta las vibrantes actividades acuáticas y la rica vida marina del Mar de Cortés, este destino ofrece una mezcla perfecta de relajación y emoción en un entorno de belleza natural espectacular.', 'assets/los_cabos.jpg', '25000.00', 'Desayuno incluido\r\nWi-Fi\r\nPaseo en buggy'),
(5, 'Paquete 14 días en Japon', 'Un viaje a Japón es una experiencia fascinante que combina tradición, modernidad y una increíble diversidad natural. Desde los templos históricos y jardines tranquilos de Kioto hasta la vibrante vida urbana de Tokio y los paisajes impresionantes del Monte Fuji, este país ofrece un mosaico de atracciones culturales y naturales que cautivan a cualquier viajero.', 'assets/fuji.jpg', '20000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido'),
(6, 'Paquete de 14 días en el Gran Cañon', 'Un viaje al Gran Cañón es una experiencia impresionante que combina aventura, geología y naturaleza. Desde las majestuosas vistas de sus acantilados y formaciones rocosas hasta las emocionantes rutas de senderismo y el sereno descenso por el río Colorado, este destino ofrece una inmersión en uno de los paisajes naturales más espectaculares del mundo.', 'assets/grand_canyon.jpg', '12000.00', 'Desayuno incluido\r\nWi-Fi\r\nRecorrido'),
(7, 'Viaje a Doha Qatar', 'Un viaje a qatar con todo lo necesario para disfrutar de la copa Mundial de fubol 2022', 'assets/doha qatar.jpg', '82599.00', 'Desayuno incluido, paseo en buggy, etc'),
(10, 'hola', 'si', 'assets/pexels-travis-blessing-1363876.jpg', '57825.99', 'Paseo en bote');

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
(14, 'eco', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'green@ecoscapes.com', '2024-05-08 04:48:26', 'assets/profile_pics/pexels-pratik-gupta-2748716.jpg'),
(36, 'admin', 'f1a915d3cbdb67e6d1f3789c441b576a7c586c18', 'admin@ecoscapes.com', '2024-05-23 21:16:32', 'assets/profile_pics/jr-korpa-SFT9G3pAxLY-unsplash.jpg');

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
(21, 14, 3, 1, '2024-06-01'),
(24, 14, 7, 3, '2024-06-01'),
(25, 14, 10, 1, '2024-06-01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usuarios_paquetes`
--
ALTER TABLE `usuarios_paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
