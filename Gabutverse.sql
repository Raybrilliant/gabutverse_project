-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 18, 2023 at 06:00 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gabutverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenApi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `tokenApi`, `created_at`, `updated_at`) VALUES
(1, 'raihan@gmail.com', '12345', 'Raihan Fikri', '8708b81c06bd4ed054aaaaae169623ca', '2023-01-18 05:50:00', '2023-01-17 22:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movieName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backdropPath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `movieName`, `slug`, `backdropPath`, `created_at`, `updated_at`) VALUES
(1, 'Autobiography', 'autobiography', '/vxZiXxMpLXkcK9oFvbJD0ndws8P.jpg', '2023-01-17 22:59:38', '2023-01-17 22:59:38'),
(2, 'Glass Onion: A Knives Out Mystery', 'glass-onion-a-knives-out-mystery', '/dKqa850uvbNSCaQCV4Im1XlzEtQ.jpg', '2023-01-17 22:59:42', '2023-01-17 22:59:42'),
(3, 'Stealing Raden Saleh', 'stealing-raden-saleh', '/wOjkbUL4tPioHwAIzDZaJsWkO8V.jpg', '2023-01-17 22:59:46', '2023-01-17 22:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_01_03_094714_create_movies_table', 1),
(3, '2023_01_03_095847_create_admins_table', 1),
(4, '2023_01_13_082826_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movieName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `originalName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieYear` date NOT NULL,
  `rating` double(8,2) NOT NULL,
  `popularity` double(8,2) NOT NULL,
  `genres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `posterPath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backdropPath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `watchLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movieName`, `slug`, `count`, `originalName`, `movieYear`, `rating`, `popularity`, `genres`, `language`, `overview`, `posterPath`, `backdropPath`, `trailer`, `watchLink`, `downloadLink`, `created_at`, `updated_at`) VALUES
(1, 'Glass Onion: A Knives Out Mystery', 'glass-onion-a-knives-out-mystery', 0, 'Glass Onion: A Knives Out Mystery', '2022-11-23', 7.08, 1539.21, 'Comedy,Crime,Mystery', 'en', 'World-famous detective Benoit Blanc heads to Greece to peel back the layers of a mystery surrounding a tech billionaire and his eclectic crew of friends.', '/vDGr1YdrlfbU9wxTOdpf3zChmv9.jpg', '/dKqa850uvbNSCaQCV4Im1XlzEtQ.jpg', '-xR_lBtEvSc', '-xR_lBtEvSc', NULL, '2023-01-17 22:52:04', '2023-01-17 22:52:04'),
(2, 'The Menu', 'the-menu', 0, 'The Menu', '2022-11-18', 7.30, 404.47, 'Comedy,Horror,Thriller', 'en', 'A young couple travels to a remote island to eat at an exclusive restaurant where the chef has prepared a lavish menu, with some shocking surprises.', '/fPtUgMcLIboqlTlPrq0bQpKK8eq.jpg', '/mSyQoValhBsJdq3JNGXJww2Q5yL.jpg', 'C_uTkUGcHv4', 'C_uTkUGcHv4', NULL, '2023-01-17 22:52:41', '2023-01-17 22:52:41'),
(3, 'Autobiography', 'autobiography', 0, 'Autobiography', '2023-01-19', 0.00, 19.26, 'Drama,Thriller,Crime', 'id', 'With his father in prison and his brother abroad for work, young Rakib works as the lone housekeeper in an empty mansion belonging to Purna, a retired general whose family Rakib’s clan have served for centuries in a rural Indonesian town.  After Purna returns home to start his mayoral election campaign, Rakib bonds with the older man, who becomes a close mentor and father figure, and finds his calling as Purna’s assistant in work and life. When Purna’s election poster is found vandalised one day, Rakib doesn’t hesitate to track down the culprit, kicking off an escalating chain of violence.', '/kt25dfq7Cc6vEjG8AH46YbhZoPC.jpg', '/vxZiXxMpLXkcK9oFvbJD0ndws8P.jpg', '4vf92ZJzou0', '4vf92ZJzou0', NULL, '2023-01-17 22:55:48', '2023-01-17 22:55:48'),
(4, 'Avatar: The Way of Water', 'avatar-the-way-of-water', 0, 'Avatar: The Way of Water', '2022-12-14', 7.72, 2960.25, 'Science Fiction,Adventure,Action', 'en', 'Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.', '/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg', '/s16H6tpK2utvwDtzZ8Qy4qm5Emw.jpg', 'XiSW80Z2PBU', 'XiSW80Z2PBU', NULL, '2023-01-17 22:58:32', '2023-01-17 22:58:32'),
(5, 'Stealing Raden Saleh', 'stealing-raden-saleh', 0, 'Mencuri Raden Saleh', '2022-08-25', 8.20, 12.89, 'Action,Crime,Drama', 'id', 'To save his father, a master forger sets out to steal an invaluable painting with the help of a motley crew of specialists.', '/66yOibmlqxASFoNyEZIORELJqBC.jpg', '/wOjkbUL4tPioHwAIzDZaJsWkO8V.jpg', 'ULmpge2jKMI', 'ULmpge2jKMI', NULL, '2023-01-17 22:59:32', '2023-01-17 22:59:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
