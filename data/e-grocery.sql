-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2021 at 02:05 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17379126_grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) DEFAULT NULL,
  `username` char(10) DEFAULT NULL,
  `password` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('Saiful Islam', 'saiful', 'admin'),
('Mahmdud Imran', 'imran', 'admin'),
('Tasmira Jahan Toma', 'toma', 'admin'),
('Alvee Khondoker', 'alvee', 'admin'),
('Saheb Babu Sheikh', 'babu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `unit` char(10) DEFAULT NULL,
  `remain` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `unit`, `remain`) VALUES
('aata', 'aata.jpg', 'Flour', 'Pure wheat', 48, 'Kg', 50),
('apple', 'apple.jpg', 'Apple', 'China Fuji Apple', 200, '*kg', 20),
('Badhacopi', 'Badhacopi.jpeg', 'Badhacopi(cabbage)', 'Deshi badhacopi', 45, 'Kg', 60),
('bCumin', 'bCumin.jpg', 'Kalo Jeera (Black Cumin)', 'Fresh Kalo jeera', 50, '100gm', 10),
('beef', 'Beef.jpg', 'Beef', 'Fresh organic beef', 550, 'kg', 30),
('bgourd', 'bgourd.jpg', 'Korolla (Bitter gourd)', 'Deshi Korolla', 50, '*kg', 20),
('capsicum', 'capsicum.jpg', 'Capsicum (Green)', 'Fresh green capsicum', 300, '*kg', 20),
('carrot', 'carrot.jpg', 'Carrot', 'Fresh Carrot', 60, '*kg', 20),
('chicken-b', 'Chicken.jpg', 'Chicken', 'Organic broiler chicken', 150, 'pieces', 50),
('chilli', 'chilli.jpg', 'Chilli', 'Red chilli', 200, 'kg', 50),
('cloves', 'cloves.jpg', 'Lobongo (Cloves)', 'Fresh Lobongo (Cloves0', 130, '100gm', 10),
('daruchini', 'daruchini.jpg', 'Darichini (Cinnamon)', 'Fresh Imported Cinnamon (Daruchini)', 80, '100gm', 10),
('Dhoniya', 'Dhoniya.jpeg', 'Dhoniya pata(coriander leaves)', 'Dhoniya pata', 70, 'Kg', 20),
('dragon', 'dragon.jpg', 'dragon fruit', 'Imported Dragon fruiut', 320, '*kg', 20),
('egg', 'Egg.jpg', 'Egg', 'Broiler egg', 90, 'dozen', 200),
('elach', 'elach.jpg', 'Elach (Cardamom)', 'Imported Elach (Cardamom)', 150, '50gm', 10),
('Fulcopi', 'Fulcopi.jpeg', 'Fulcopi(cauliflower)', 'Deshi fulcopi', 50, 'Kg', 40),
('Garlic', 'Garlic.jpg', 'Garlic', 'Deshi garlic', 90, 'Kg', 60),
('ginger', 'ginger.jpg', 'Ginger', 'Pure ginger', 200, 'kg', 50),
('jeera', 'jeera.jpg', 'Cumin (Shahi Jeera)', 'Fresh Shahi Jeera', 90, '50gm', 10),
('kishmish', 'kishmish.jpg', 'Kishmish (Raisins)', 'fresh Iranian Kishmish', 40, '100gm', 20),
('Kumra', 'Kumra.jpeg', 'Misti Kumra (Sweet Pumpkin)', 'Misti kumra', 40, 'Kg', 60),
('Lal Shak', 'Lal Shak.jpeg', 'Lal Shak(Red spinach)', 'Deshi lal shak', 30, 'Kg', 20),
('Lebu', 'Lebu.jpeg', 'Kagozi Lebu(kagozi Lemon)', 'Goal kagozi lebu', 5, 'Pieces', 200),
('Lemon', 'Lemon.jpg', 'Lemon', 'Lemon', 5, 'Piece', 50),
('malta', 'malta.jpg', 'Malta', 'Frash Malta', 190, '*kg', 20),
('mosurdal', 'mosurdal.png', 'Moshur Dal', 'Deshi Moshur Dal (regular)', 105, '*kg', 50),
('mungdal', 'mungdal.jpg', 'Mung Dal', 'Deshi Mung Dal (fresh)', 180, '*kg', 30),
('mutton', 'mutton.jpg', 'Mutton', 'Fresh Organic Mutton', 795, '*kg', 30),
('Oil', 'Oil.jpg', 'Soyabeans oil', 'Pusti Soyabeans oil', 120, 'L', 20),
('onion', 'onion.jpg', 'Onion', 'Indian onion', 45, 'kg', 150),
('peanuts', 'peanuts.png', 'Cheena Badam (Raw Peanuts)', 'Fresh Cheena Badam (Raw peanuts)', 30, '100gm', 10),
('Pepe', 'Pepe.jpeg', 'Kacha Pepe (Green papaya)', 'Kacha pepe', 40, 'Kg', 70),
('potato', 'potato.jpg', 'Potato', 'Potato label - Diamond', 20, 'kg', 200),
('Potol', 'Potol.jpeg', 'Potol(Pointed Gourd)', 'Potol', 45, 'Kg', 50),
('pphoron', 'pphoron.jpg', 'Panch Phoron (Mix spice)', 'Fresh Panch Phoron', 30, '100gm', 20),
('pumpkin', 'pumpkin.jpeg', 'Mishti Kumra (Sweet Pumpkin)', 'Deshi Mishti Kumra', 30, '*kg', 20),
('rice', 'Rice.jpeg', 'Rice', '100% organic brown rice', 70, 'kg', 100),
('Rui', 'Rui .jpeg', 'Rui', 'Rui fish', 130, 'Kg', 20),
('salt', 'salt.jpeg', 'Salt', 'This is salt', 30, 'kg', 100),
('Shosha', 'Shosha.jpeg', 'Deshi Shosha(Local cucumber)', 'Local cucumber', 35, 'Kg', 50),
('tejpata', 'tejpata.jpg', 'Tej Pata (Bey Leaves)', 'Fresh Tej Pata (Bey Leaves)', 20, '100gm', 10),
('Telapiya', 'Telapiya .jpeg', 'Telapiya', 'Telapiya fish', 90, 'Kg', 30),
('tomato', 'Tomato.jpg', 'Tomato', 'Pure riped tomato', 120, 'kg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`image`, `name`, `username`, `password`) VALUES
('alvee khondokar.jpg', 'alvee khondokar', 'alvee@gmail.com', 'user'),
('Babu.jpg', 'Babu', 'babu@gmail.com', 'user'),
('Biden.jpeg', 'Biden', 'biden@gmail.com', 'user'),
('emran.jpeg', 'emran', 'emarn@gmail.com', 'user'),
('Imran.jpeg', 'Imran', 'imarn@gmail.com', 'user'),
('Mahmud Imran.jpg', 'Mahmud Imran', 'imran@gmail.com', 'user'),
('Imtiaj Hossain.png', 'Imtiaj Hossain', 'imtiaj1@gmail.com', 'user'),
('Tasmiara Jahan.png', 'Tasmiara Jahan', 'tasmiara@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
