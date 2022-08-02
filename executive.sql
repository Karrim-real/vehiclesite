-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `executive`
--

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sedan / Saloon', NULL, NULL),
(2, 'Station Wagon', NULL, NULL),
(3, 'Coupe', NULL, NULL),
(4, 'Sport-Utility Vehicle SUV', NULL, NULL),
(5, 'Hatchback', NULL, NULL),
(6, 'Micro', NULL, NULL),
(7, 'Convertible', NULL, NULL),
(8, 'Van', NULL, NULL),
(9, 'Pickup Truck', NULL, NULL),
(10, 'Truck', NULL, NULL),
(11, 'Sports Car', NULL, NULL),
(12, 'Bus', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drive`
--

CREATE TABLE `drive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '4WD (4 wheel drive)', NULL, NULL),
(2, 'Rear Wheel Drive (RWD)', NULL, NULL),
(3, 'Front Wheel Drive (FWD)', NULL, NULL),
(4, 'All-Wheel-Drive (AWD))', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `name`, `code`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Audi', 'AUDI', NULL, NULL, NULL),
(2, 'Bentley', 'BENTL', NULL, NULL, NULL),
(3, 'BMW', 'BMW', NULL, NULL, NULL),
(4, 'Chevrolet', 'CHEV', NULL, NULL, NULL),
(5, 'Daewoo', 'DAEW', NULL, NULL, NULL),
(6, 'Daihatsu', 'DAIHAT', NULL, NULL, NULL),
(7, 'FIAT', 'FIAT', NULL, NULL, NULL),
(8, 'Ford', 'FORD', NULL, NULL, NULL),
(9, 'Honda', 'HONDA', NULL, NULL, NULL),
(10, 'HUMMER', 'AMGEN', NULL, NULL, NULL),
(11, 'Hyundai', 'HYUND', NULL, NULL, NULL),
(12, 'Infiniti', 'INFIN', NULL, NULL, NULL),
(13, 'Isuzu', 'ISU', NULL, NULL, NULL),
(14, 'Jaguar', 'JAG', NULL, NULL, NULL),
(15, 'Jeep', 'JEEP', NULL, NULL, NULL),
(16, 'Kia', 'KIA', NULL, NULL, NULL),
(17, 'Land Rover', 'ROV', NULL, NULL, NULL),
(18, 'Lexus', 'LEXUS', NULL, NULL, NULL),
(19, 'Maybach', 'MAYBACH', NULL, NULL, NULL),
(20, 'Mazda', 'MAZDA', NULL, NULL, NULL),
(21, 'Mercedes-Benz', 'MB', NULL, NULL, NULL),
(22, 'Mitsubishi', 'MIT', NULL, NULL, NULL),
(23, 'Nissan', 'NISSAN', NULL, NULL, NULL),
(24, 'Peugeot', 'PEUG', NULL, NULL, NULL),
(25, 'Porsche', 'POR', NULL, NULL, NULL),
(26, 'Renault', 'REN', NULL, NULL, NULL),
(27, 'Subaru', 'SUB', NULL, NULL, NULL),
(28, 'Suzuki', 'SUZUKI', NULL, NULL, NULL),
(29, 'Tesla', 'TESLA', NULL, NULL, NULL),
(30, 'Toyota', 'TOYOTA', NULL, NULL, NULL),
(31, 'Volkswagen', 'VOLKS', NULL, NULL, NULL),
(32, 'Volvo', 'VOLVO', NULL, NULL, NULL),
(33, 'Hino', 'HINO', NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_25_131818_create_transmission_table', 1),
(6, '2022_06_25_132001_create_drive_table', 1),
(7, '2022_06_25_132112_create_body_table', 1),
(8, '2022_07_02_080814_create_contacts_table', 1),
(9, '2022_07_05_090101_create_carousels_table', 1),
(10, '2022_07_06_101723_create_makes_table', 1),
(11, '2022_07_07_102504_create_models_table', 1),
(12, '2022_07_13_101900_create_vehicles_table', 1),
(13, '2022_07_13_102430_create_v_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `makes_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `makes_id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, '100', 'AUDI100', NULL, NULL),
(2, 1, '200', 'AUDI200', NULL, NULL),
(3, 1, '4000', '4000', NULL, NULL),
(4, 1, '5000', '5000', NULL, NULL),
(5, 1, '80', '80', NULL, NULL),
(6, 1, '90', '90', NULL, NULL),
(7, 1, 'A3', 'A3', NULL, NULL),
(8, 1, 'A4', 'A4', NULL, NULL),
(9, 1, 'A5', 'A5', NULL, NULL),
(10, 1, 'A6', 'A6', NULL, NULL),
(11, 1, 'A7', 'A7', NULL, NULL),
(12, 1, 'A8', 'A8', NULL, NULL),
(13, 1, 'allroad', 'ALLRDQUA', NULL, NULL),
(14, 1, 'Cabriolet', 'AUDICABRI', NULL, NULL),
(15, 1, 'Coupe', 'AUDICOUPE', NULL, NULL),
(16, 1, 'Q3', 'Q3', NULL, NULL),
(17, 1, 'Q5', 'Q5', NULL, NULL),
(18, 1, 'Q7', 'Q7', NULL, NULL),
(19, 1, 'Quattro', 'QUATTR', NULL, NULL),
(20, 1, 'R8', 'R8', NULL, NULL),
(21, 1, 'RS 4', 'RS4', NULL, NULL),
(22, 1, 'RS 5', 'RS5', NULL, NULL),
(23, 1, 'RS 6', 'RS6', NULL, NULL),
(24, 1, 'S4', 'S4', NULL, NULL),
(25, 1, 'S5', 'S5', NULL, NULL),
(26, 1, 'S6', 'S6', NULL, NULL),
(27, 1, 'S7', 'S7', NULL, NULL),
(28, 1, 'S8', 'S8', NULL, NULL),
(29, 1, 'TT', 'TT', NULL, NULL),
(30, 1, 'TT RS', 'TTRS', NULL, NULL),
(31, 1, 'TTS', 'TTS', NULL, NULL),
(32, 1, 'V8 Quattro', 'V8', NULL, NULL),
(33, 1, 'Other Audi Models', 'AUDOTH', NULL, NULL),
(34, 2, 'Arnage', 'ARNAGE', NULL, NULL),
(35, 2, 'Azure', 'AZURE', NULL, NULL),
(36, 2, 'Brooklands', 'BROOKLANDS', NULL, NULL),
(37, 2, 'Continental', 'BENCONT', NULL, NULL),
(38, 2, 'Corniche', 'CORNICHE', NULL, NULL),
(39, 2, 'Eight', 'BENEIGHT', NULL, NULL),
(40, 2, 'Mulsanne', 'BENMUL', NULL, NULL),
(41, 2, 'Turbo R', 'BENTURBO', NULL, NULL),
(42, 2, 'Other Bentley Models', 'UNAVAILBEN', NULL, NULL),
(43, 3, '1 Series (3)', '1_SERIES', NULL, NULL),
(44, 3, '128i', '128I', NULL, NULL),
(45, 3, '135i', '135I', NULL, NULL),
(46, 3, '135is', '135IS', NULL, NULL),
(47, 3, '3 Series (29)', '3_SERIES', NULL, NULL),
(48, 3, '318i', '318I', NULL, NULL),
(49, 3, '318iC', '318IC', NULL, NULL),
(50, 3, '318iS', '318IS', NULL, NULL),
(51, 3, '318ti', '318TI', NULL, NULL),
(52, 3, '320i', '320I', NULL, NULL),
(53, 3, '323ci', '323CI', NULL, NULL),
(54, 3, '323i', '323I', NULL, NULL),
(55, 3, '323is', '323IS', NULL, NULL),
(56, 3, '323iT', '323IT', NULL, NULL),
(57, 3, '325Ci', '325CI', NULL, NULL),
(58, 3, '325e', '325E', NULL, NULL),
(59, 3, '325es', '325ES', NULL, NULL),
(60, 3, '325i', '325I', NULL, NULL),
(61, 3, '325is', '325IS', NULL, NULL),
(62, 3, '325iX', '325IX', NULL, NULL),
(63, 3, '325xi', '325XI', NULL, NULL),
(64, 3, '328Ci', '328CI', NULL, NULL),
(65, 3, '328i', '328I', NULL, NULL),
(66, 3, '328iS', '328IS', NULL, NULL),
(67, 3, '328xi', '328XI', NULL, NULL),
(68, 3, '330Ci', '330CI', NULL, NULL),
(69, 3, '330i', '330I', NULL, NULL),
(70, 3, '330xi', '330XI', NULL, NULL),
(71, 3, '335d', '335D', NULL, NULL),
(72, 3, '335i', '335I', NULL, NULL),
(73, 3, '335is', '335IS', NULL, NULL),
(74, 3, '335xi', '335XI', NULL, NULL),
(75, 3, 'ActiveHybrid 3', 'ACTIVE3', NULL, NULL),
(76, 3, '325', 'BMW325', NULL, NULL),
(77, 3, '5 Series (19)', '5_SERIES', NULL, NULL),
(78, 3, '524td', '524TD', NULL, NULL),
(79, 3, '525i', '525I', NULL, NULL),
(80, 3, '525xi', '525XI', NULL, NULL),
(81, 3, '528e', '528E', NULL, NULL),
(82, 3, '528i', '528I', NULL, NULL),
(83, 3, '528iT', '528IT', NULL, NULL),
(84, 3, '528xi', '528XI', NULL, NULL),
(85, 3, '530i', '530I', NULL, NULL),
(86, 3, '530iT', '530IT', NULL, NULL),
(87, 3, '530xi', '530XI', NULL, NULL),
(88, 3, '533i', '533I', NULL, NULL),
(89, 3, '535i', '535I', NULL, NULL),
(90, 3, '535i Gran Turismo', '535IGT', NULL, NULL),
(91, 3, '535xi', '535XI', NULL, NULL),
(92, 3, '540i', '540I', NULL, NULL),
(93, 3, '545i', '545I', NULL, NULL),
(94, 3, '550i', '550I', NULL, NULL),
(95, 3, '550i Gran Turismo', '550IGT', NULL, NULL),
(96, 3, 'ActiveHybrid 5', 'ACTIVE5', NULL, NULL),
(97, 3, '6 Series (8)', '6_SERIES', NULL, NULL),
(98, 3, '633CSi', '633CSI', NULL, NULL),
(99, 3, '635CSi', '635CSI', NULL, NULL),
(100, 3, '640i', '640I', NULL, NULL),
(101, 3, '640i Gran Coupe', '640IGC', NULL, NULL),
(102, 3, '645Ci', '645CI', NULL, NULL),
(103, 3, '650i', '650I', NULL, NULL),
(104, 3, '650i Gran Coupe', '650IGC', NULL, NULL),
(105, 3, ' - L6', 'L6', NULL, NULL),
(106, 3, '7 Series (15)', '7_SERIES', NULL, NULL),
(107, 3, '733i', '733I', NULL, NULL),
(108, 3, '735i', '735I', NULL, NULL),
(109, 3, '735iL', '735IL', NULL, NULL),
(110, 3, '740i', '740I', NULL, NULL),
(111, 3, '740iL', '740IL', NULL, NULL),
(112, 3, '740Li', '740LI', NULL, NULL),
(113, 3, '745i', '745I', NULL, NULL),
(114, 3, '745Li', '745LI', NULL, NULL),
(115, 3, '750i', '750I', NULL, NULL),
(116, 3, '750iL', '750IL', NULL, NULL),
(117, 3, '750Li', '750LI', NULL, NULL),
(118, 3, '760i', '760I', NULL, NULL),
(119, 3, '760Li', '760LI', NULL, NULL),
(120, 3, 'ActiveHybrid 7', 'ACTIVE7', NULL, NULL),
(121, 3, 'Alpina B7', 'ALPINAB7', NULL, NULL),
(122, 3, '8 Series (4)', '8_SERIES', NULL, NULL),
(123, 3, '840Ci', '840CI', NULL, NULL),
(124, 3, '850Ci', '850CI', NULL, NULL),
(125, 3, '850CSi', '850CSI', NULL, NULL),
(126, 3, ' - 850i', '850I', NULL, NULL),
(127, 3, 'L Series (1)', 'L_SERIES', NULL, NULL),
(128, 3, ' - L7', 'L7', NULL, NULL),
(129, 3, 'M Series (8)', 'M_SERIES', NULL, NULL),
(130, 3, '1 Series M', '1SERIESM', NULL, NULL),
(131, 3, 'M Coupe', 'BMWMCOUPE', NULL, NULL),
(132, 3, 'M Roadster', 'BMWROAD', NULL, NULL),
(133, 3, 'M3', 'M3', NULL, NULL),
(134, 3, 'M5', 'M5', NULL, NULL),
(135, 3, 'M6', 'M6', NULL, NULL),
(136, 3, 'X5 M', 'X5M', NULL, NULL),
(137, 3, 'X6 M', 'X6M', NULL, NULL),
(138, 3, 'X Series (5)', 'X_SERIES', NULL, NULL),
(139, 3, 'ActiveHybrid X6', 'ACTIVEX6', NULL, NULL),
(140, 3, 'X1', 'X1', NULL, NULL),
(141, 3, 'X3', 'X3', NULL, NULL),
(142, 3, 'X5', 'X5', NULL, NULL),
(143, 3, 'X6', 'X6', NULL, NULL),
(144, 3, 'Z Series (3)', 'Z_SERIES', NULL, NULL),
(145, 3, 'Z3', 'Z3', NULL, NULL),
(146, 3, 'Z4', 'Z4', NULL, NULL),
(147, 3, 'Z8', 'Z8', NULL, NULL),
(148, 3, 'Other BMW Models', 'BMWOTH', NULL, NULL),
(149, 4, 'Astro', 'ASTRO', NULL, NULL),
(150, 4, 'Avalanche', 'AVALNCH', NULL, NULL),
(151, 4, 'Aveo', 'AVEO', NULL, NULL),
(152, 4, 'Aveo5', 'AVEO5', NULL, NULL),
(153, 4, 'Beretta', 'BERETT', NULL, NULL),
(154, 4, 'Blazer', 'BLAZER', NULL, NULL),
(155, 4, 'Camaro', 'CAM', NULL, NULL),
(156, 4, 'Caprice', 'CAP', NULL, NULL),
(157, 4, 'Captiva Sport', 'CHECAPS', NULL, NULL),
(158, 4, 'Cavalier', 'CAV', NULL, NULL),
(159, 4, 'Celebrity', 'CELE', NULL, NULL),
(160, 4, 'Chevette', 'CHEVETTE', NULL, NULL),
(161, 4, 'Citation', 'CITATION', NULL, NULL),
(162, 4, 'Cobalt', 'COBALT', NULL, NULL),
(163, 4, 'Colorado', 'COLORADO', NULL, NULL),
(164, 4, 'Corsica', 'CORSI', NULL, NULL),
(165, 4, 'Corvette', 'CORV', NULL, NULL),
(166, 4, 'Cruze', 'CRUZE', NULL, NULL),
(167, 4, 'El Camino', 'ELCAM', NULL, NULL),
(168, 4, 'Equinox', 'EQUINOX', NULL, NULL),
(169, 4, 'Express Van', 'G15EXP', NULL, NULL),
(170, 4, 'G Van', 'G10', NULL, NULL),
(171, 4, 'HHR', 'HHR', NULL, NULL),
(172, 4, 'Impala', 'CHEVIMP', NULL, NULL),
(173, 4, 'Kodiak C4500', 'KODC4500', NULL, NULL),
(174, 4, 'Lumina', 'LUMINA', NULL, NULL),
(175, 4, 'Lumina APV', 'LAPV', NULL, NULL),
(176, 4, 'LUV', 'LUV', NULL, NULL),
(177, 4, 'Malibu', 'MALI', NULL, NULL),
(178, 4, 'Metro', 'CHVMETR', NULL, NULL),
(179, 4, 'Monte Carlo', 'CHEVMONT', NULL, NULL),
(180, 4, 'Nova', 'NOVA', NULL, NULL),
(181, 4, 'Prizm', 'CHEVPRIZM', NULL, NULL),
(182, 4, 'S10 Blazer', 'CHVST', NULL, NULL),
(183, 4, 'S10 Pickup', 'S10PICKUP', NULL, NULL),
(184, 4, 'Silverado and other C/K1500', 'CHEV150', NULL, NULL),
(185, 4, 'Silverado and other C/K2500', 'CHEVC25', NULL, NULL),
(186, 4, 'Silverado and other C/K3500', 'CH3500PU', NULL, NULL),
(187, 4, 'Sonic', 'SONIC', NULL, NULL),
(188, 4, 'Spark', 'SPARK', NULL, NULL),
(189, 4, 'Spectrum', 'CHEVSPEC', NULL, NULL),
(190, 4, 'Sprint', 'CHSPRINT', NULL, NULL),
(191, 4, 'SSR', 'SSR', NULL, NULL),
(192, 4, 'Suburban', 'CHEVSUB', NULL, NULL),
(193, 4, 'Tahoe', 'TAHOE', NULL, NULL),
(194, 4, 'Tracker', 'TRACKE', NULL, NULL),
(195, 4, 'TrailBlazer', 'TRAILBLZ', NULL, NULL),
(196, 4, 'TrailBlazer EXT', 'TRAILBZEXT', NULL, NULL),
(197, 4, 'Traverse', 'TRAVERSE', NULL, NULL),
(198, 4, 'Uplander', 'UPLANDER', NULL, NULL),
(199, 4, 'Venture', 'VENTUR', NULL, NULL),
(200, 4, 'Volt', 'VOLT', NULL, NULL),
(201, 4, 'Other Chevrolet Models', 'CHEOTH', NULL, NULL),
(202, 5, 'Lanos', 'LANOS', NULL, NULL),
(203, 5, 'Leganza', 'LEGANZA', NULL, NULL),
(204, 5, 'Nubira', 'NUBIRA', NULL, NULL),
(205, 5, 'Other Daewoo Models', 'DAEOTH', NULL, NULL),
(206, 6, 'Charade', 'CHAR', NULL, NULL),
(207, 6, 'Rocky', 'ROCKY', NULL, NULL),
(208, 6, 'Other Daihatsu Models', 'DAIHOTH', NULL, NULL),
(209, 7, '2000 Spider', '2000', NULL, NULL),
(210, 7, '500', 'FIAT500', NULL, NULL),
(211, 7, 'Bertone X1/9', 'BERTON', NULL, NULL),
(212, 7, 'Brava', 'BRAVA', NULL, NULL),
(213, 7, 'Pininfarina Spider', 'PININ', NULL, NULL),
(214, 7, 'Strada', 'STRADA', NULL, NULL),
(215, 7, 'X1/9', 'FIATX19', NULL, NULL),
(216, 7, 'Other Fiat Models', 'UNAVAILFIA', NULL, NULL),
(217, 8, 'Aerostar', 'AERO', NULL, NULL),
(218, 8, 'Aspire', 'ASPIRE', NULL, NULL),
(219, 8, 'Bronco', 'BRON', NULL, NULL),
(220, 8, 'Bronco II', 'B2', NULL, NULL),
(221, 8, 'C-MAX', 'FOCMAX', NULL, NULL),
(222, 8, 'Club Wagon', 'FORDCLUB', NULL, NULL),
(223, 8, 'Contour', 'CONTOUR', NULL, NULL),
(224, 8, 'Courier', 'COURIER', NULL, NULL),
(225, 8, 'Crown Victoria', 'CROWNVIC', NULL, NULL),
(226, 8, 'E-150 and Econoline 150', 'E150ECON', NULL, NULL),
(227, 8, 'E-250 and Econoline 250', 'E250ECON', NULL, NULL),
(228, 8, 'E-350 and Econoline 350', 'E350ECON', NULL, NULL),
(229, 8, 'Edge', 'EDGE', NULL, NULL),
(300, 8, 'Escape', 'ESCAPE', NULL, NULL),
(301, 8, 'Escort', 'ESCO', NULL, NULL),
(302, 8, 'Excursion', 'EXCURSION', NULL, NULL),
(303, 8, 'EXP', 'EXP', NULL, NULL),
(304, 8, 'Expedition', 'EXPEDI', NULL, NULL),
(305, 8, 'Expedition EL', 'EXPEDIEL', NULL, NULL),
(306, 8, 'Explorer', 'EXPLOR', NULL, NULL),
(307, 8, 'Explorer Sport Trac', 'SPORTTRAC', NULL, NULL),
(308, 8, 'F100', 'F100', NULL, NULL),
(309, 8, 'F150', 'F150PICKUP', NULL, NULL),
(310, 8, 'F250', 'F250', NULL, NULL),
(311, 8, 'F350', 'F350', NULL, NULL),
(312, 8, 'F450', 'F450', NULL, NULL),
(313, 8, 'Fairmont', 'FAIRM', NULL, NULL),
(314, 8, 'Festiva', 'FESTIV', NULL, NULL),
(315, 8, 'Fiesta', 'FIESTA', NULL, NULL),
(316, 8, 'Five Hundred', 'FIVEHUNDRE', NULL, NULL),
(317, 8, 'Flex', 'FLEX', NULL, NULL),
(318, 8, 'Focus', 'FOCUS', NULL, NULL),
(319, 8, 'Freestar', 'FREESTAR', NULL, NULL),
(320, 8, 'Freestyle', 'FREESTYLE', NULL, NULL),
(321, 8, 'Fusion', 'FUSION', NULL, NULL),
(322, 8, 'Granada', 'GRANADA', NULL, NULL),
(323, 8, 'GT', 'GT', NULL, NULL),
(324, 8, 'LTD', 'LTD', NULL, NULL),
(325, 8, 'Mustang', 'MUST', NULL, NULL),
(326, 8, 'Probe', 'PROBE', NULL, NULL),
(327, 8, 'Ranger', 'RANGER', NULL, NULL),
(328, 8, 'Taurus', 'TAURUS', NULL, NULL),
(329, 8, 'Taurus X', 'TAURUSX', NULL, NULL),
(330, 8, 'Tempo', 'TEMPO', NULL, NULL),
(482, 8, 'Thunderbird', 'TBIRD', NULL, NULL),
(483, 8, 'Transit Connect', 'TRANSCONN', NULL, NULL),
(484, 8, 'Windstar', 'WINDST', NULL, NULL),
(485, 8, 'ZX2 Escort', 'FORDZX2', NULL, NULL),
(486, 8, 'Other Ford Models', 'FOOTH', NULL, NULL),
(519, 9, 'Accord', 'ACCORD', NULL, NULL),
(520, 9, 'Civic', 'CIVIC', NULL, NULL),
(521, 9, 'CR-V', 'CRV', NULL, NULL),
(522, 9, 'CR-Z', 'CRZ', NULL, NULL),
(523, 9, 'CRX', 'CRX', NULL, NULL),
(524, 9, 'Crosstour and Accord Crosstour Models (2)', 'CROSSTOUR_MODELS', NULL, NULL),
(525, 9, ' - Accord Crosstour', 'CROSSTOUR', NULL, NULL),
(526, 9, ' - Crosstour', 'HONCROSS', NULL, NULL),
(527, 9, 'Del Sol', 'HONDELSOL', NULL, NULL),
(528, 9, 'Element', 'ELEMENT', NULL, NULL),
(529, 9, 'Fit', 'FIT', NULL, NULL),
(530, 9, 'Insight', 'INSIGHT', NULL, NULL),
(531, 9, 'Odyssey', 'ODYSSEY', NULL, NULL),
(532, 9, 'Passport', 'PASSPO', NULL, NULL),
(533, 9, 'Pilot', 'PILOT', NULL, NULL),
(534, 9, 'Prelude', 'PRE', NULL, NULL),
(535, 9, 'Ridgeline', 'RIDGELINE', NULL, NULL),
(536, 9, 'S2000', 'S2000', NULL, NULL),
(537, 9, 'Other Honda Models', 'HONOTH', NULL, NULL),
(538, 10, 'H1', 'HUMMER', NULL, NULL),
(539, 10, 'H2', 'H2', NULL, NULL),
(540, 10, 'H3', 'H3', NULL, NULL),
(541, 10, 'H3T', 'H3T', NULL, NULL),
(542, 10, 'Other Hummer Models', 'AMGOTH', NULL, NULL),
(543, 11, 'Accent', 'ACCENT', NULL, NULL),
(544, 11, 'Azera', 'AZERA', NULL, NULL),
(545, 11, 'Elantra', 'ELANTR', NULL, NULL),
(546, 11, 'Elantra Coupe', 'HYUELANCPE', NULL, NULL),
(547, 11, 'Elantra Touring', 'ELANTOUR', NULL, NULL),
(548, 11, 'Entourage', 'ENTOURAGE', NULL, NULL),
(549, 11, 'Equus', 'EQUUS', NULL, NULL),
(550, 11, 'Excel', 'HYUEXCEL', NULL, NULL),
(551, 11, 'Genesis', 'GENESIS', NULL, NULL),
(552, 11, 'Genesis Coupe', 'GENESISCPE', NULL, NULL),
(553, 11, 'Santa Fe', 'SANTAFE', NULL, NULL),
(554, 11, 'Scoupe', 'SCOUPE', NULL, NULL),
(555, 11, 'Sonata', 'SONATA', NULL, NULL),
(556, 11, 'Tiburon', 'TIBURO', NULL, NULL),
(557, 11, 'Tucson', 'TUCSON', NULL, NULL),
(558, 11, 'Veloster', 'VELOSTER', NULL, NULL),
(559, 11, 'Veracruz', 'VERACRUZ', NULL, NULL),
(560, 11, 'XG300', 'XG300', NULL, NULL),
(561, 11, 'XG350', 'XG350', NULL, NULL),
(562, 11, 'Other Hyundai Models', 'HYUOTH', NULL, NULL),
(563, 12, 'EX Models (2)', 'EX_MODELS', NULL, NULL),
(564, 12, 'EX35', 'EX35', NULL, NULL),
(565, 12, 'EX37', 'EX37', NULL, NULL),
(566, 12, 'FX Models (4)', 'FX_MODELS', NULL, NULL),
(567, 12, 'FX35', 'FX35', NULL, NULL),
(568, 12, 'FX37', 'FX37', NULL, NULL),
(569, 12, 'FX45', 'FX45', NULL, NULL),
(570, 12, 'FX50', 'FX50', NULL, NULL),
(571, 12, 'G Models (4)', 'G_MODELS', NULL, NULL),
(572, 12, 'G20', 'G20', NULL, NULL),
(573, 12, 'G25', 'G25', NULL, NULL),
(574, 12, 'G35', 'G35', NULL, NULL),
(575, 12, 'G37', 'G37', NULL, NULL),
(576, 12, 'I Models (2)', 'I_MODELS', NULL, NULL),
(577, 12, 'I30', 'I30', NULL, NULL),
(578, 12, 'I35', 'I35', NULL, NULL),
(579, 12, 'J Models (1)', 'J_MODELS', NULL, NULL),
(580, 12, 'J30', 'J30', NULL, NULL),
(581, 12, 'JX Models (1)', 'JX_MODELS', NULL, NULL),
(582, 12, 'JX35', 'JX35', NULL, NULL),
(583, 12, 'M Models (6)', 'M_MODELS', NULL, NULL),
(584, 12, 'M30', 'M30', NULL, NULL),
(585, 12, 'M35', 'M35', NULL, NULL),
(586, 12, 'M35h', 'M35HYBRID', NULL, NULL),
(587, 12, 'M37', 'M37', NULL, NULL),
(588, 12, 'M45', 'M45', NULL, NULL),
(589, 12, 'M56', 'M56', NULL, NULL),
(590, 12, 'Q Models (1)', 'Q_MODELS', NULL, NULL),
(591, 12, ' - Q45', 'Q45', NULL, NULL),
(592, 12, 'QX Models (2)', 'QX_MODELS', NULL, NULL),
(593, 12, ' - QX4', 'QX4', NULL, NULL),
(594, 12, ' - QX56', 'QX56', NULL, NULL),
(595, 12, 'Other Infiniti Models', 'INFOTH', NULL, NULL),
(596, 13, 'Amigo', 'AMIGO', NULL, NULL),
(597, 13, 'Ascender', 'ASCENDER', NULL, NULL),
(598, 13, 'Axiom', 'AXIOM', NULL, NULL),
(599, 13, 'Hombre', 'HOMBRE', NULL, NULL),
(600, 13, 'i-280', 'I280', NULL, NULL),
(601, 13, 'i-290', 'I290', NULL, NULL),
(602, 13, 'i-350', 'I350', NULL, NULL),
(603, 13, 'i-370', 'I370', NULL, NULL),
(604, 13, 'I-Mark', 'ISUMARK', NULL, NULL),
(605, 13, 'Impulse', 'ISUIMP', NULL, NULL),
(606, 13, 'Oasis', 'OASIS', NULL, NULL),
(607, 13, 'Pickup', 'ISUPU', NULL, NULL),
(608, 13, 'Rodeo', 'RODEO', NULL, NULL),
(609, 13, 'Stylus', 'STYLUS', NULL, NULL),
(610, 13, 'Trooper', 'TROOP', NULL, NULL),
(611, 13, 'Trooper II', 'TRP2', NULL, NULL),
(612, 13, 'VehiCROSS', 'VEHICROSS', NULL, NULL),
(613, 13, 'Other Isuzu Models', 'ISUOTH', NULL, NULL),
(614, 14, 'S-Type', 'STYPE', NULL, NULL),
(615, 14, 'X-Type', 'XTYPE', NULL, NULL),
(616, 14, 'XF', 'XF', NULL, NULL),
(617, 14, 'XJ Series (10)', 'XJ_SERIES', NULL, NULL),
(618, 14, 'XJ12', 'JAGXJ12', NULL, NULL),
(619, 14, 'XJ6', 'JAGXJ6', NULL, NULL),
(620, 14, 'XJR', 'JAGXJR', NULL, NULL),
(621, 14, 'XJR-S', 'JAGXJRS', NULL, NULL),
(622, 14, 'XJS', 'JAGXJS', NULL, NULL),
(623, 14, 'XJ Vanden Plas', 'VANDEN', NULL, NULL),
(624, 14, 'XJ', 'XJ', NULL, NULL),
(625, 14, 'XJ8', 'XJ8', NULL, NULL),
(626, 14, 'XJ8 L', 'XJ8L', NULL, NULL),
(627, 14, 'XJ Sport', 'XJSPORT', NULL, NULL),
(628, 14, 'XK Series (3)', 'XK_SERIES', NULL, NULL),
(629, 14, 'XK8', 'JAGXK8', NULL, NULL),
(630, 14, 'XK', 'XK', NULL, NULL),
(631, 14, 'XKR', 'XKR', NULL, NULL),
(632, 14, 'Other Jaguar Models', 'JAGOTH', NULL, NULL),
(633, 15, 'Cherokee', 'CHER', NULL, NULL),
(634, 15, 'CJ', 'JEEPCJ', NULL, NULL),
(635, 15, 'Comanche', 'COMANC', NULL, NULL),
(636, 15, 'Commander', 'COMMANDER', NULL, NULL),
(637, 15, 'Compass', 'COMPASS', NULL, NULL),
(638, 15, 'Grand Cherokee', 'JEEPGRAND', NULL, NULL),
(639, 15, 'Grand Wagoneer', 'GRWAG', NULL, NULL),
(640, 15, 'Liberty', 'LIBERTY', NULL, NULL),
(641, 15, 'Patriot', 'PATRIOT', NULL, NULL),
(642, 15, 'Pickup', 'JEEPPU', NULL, NULL),
(643, 15, 'Scrambler', 'SCRAMBLE', NULL, NULL),
(644, 15, 'Wagoneer', 'WAGONE', NULL, NULL),
(645, 15, 'Wrangler', 'WRANGLER', NULL, NULL),
(646, 15, 'Other Jeep Models', 'JEOTH', NULL, NULL),
(647, 16, 'Amanti', 'AMANTI', NULL, NULL),
(648, 16, 'Borrego', 'BORREGO', NULL, NULL),
(649, 16, 'Forte', 'FORTE', NULL, NULL),
(650, 16, 'Forte Koup', 'FORTEKOUP', NULL, NULL),
(651, 16, 'Optima', 'OPTIMA', NULL, NULL),
(652, 16, 'Rio', 'RIO', NULL, NULL),
(653, 16, 'Rio5', 'RIO5', NULL, NULL),
(654, 16, 'Rondo', 'RONDO', NULL, NULL),
(655, 16, 'Sedona', 'SEDONA', NULL, NULL),
(656, 16, 'Sephia', 'SEPHIA', NULL, NULL),
(657, 16, 'Sorento', 'SORENTO', NULL, NULL),
(658, 16, 'Soul', 'SOUL', NULL, NULL),
(659, 16, 'Spectra', 'SPECTRA', NULL, NULL),
(660, 16, 'Spectra5', 'SPECTRA5', NULL, NULL),
(661, 16, 'Sportage', 'SPORTA', NULL, NULL),
(662, 16, 'Other Kia Models', 'KIAOTH', NULL, NULL),
(674, 17, 'Defender', 'DEFEND', NULL, NULL),
(675, 17, 'Discovery', 'DISCOV', NULL, NULL),
(676, 17, 'Freelander', 'FRELNDR', NULL, NULL),
(677, 17, 'LR2', 'LR2', NULL, NULL),
(678, 17, 'LR3', 'LR3', NULL, NULL),
(679, 17, 'LR4', 'LR4', NULL, NULL),
(680, 17, 'Range Rover', 'RANGE', NULL, NULL),
(681, 17, 'Range Rover Evoque', 'EVOQUE', NULL, NULL),
(682, 17, 'Range Rover Sport', 'RANGESPORT', NULL, NULL),
(683, 17, 'Other Land Rover Models', 'ROVOTH', NULL, NULL),
(684, 18, 'CT Models (1)', 'CT_MODELS', NULL, NULL),
(685, 18, 'CT 200h', 'CT200H', NULL, NULL),
(686, 18, 'ES Models (5)', 'ES_MODELS', NULL, NULL),
(687, 18, 'ES 250', 'ES250', NULL, NULL),
(688, 18, 'ES 300', 'ES300', NULL, NULL),
(689, 18, 'ES 300h', 'ES300H', NULL, NULL),
(690, 18, 'ES 330', 'ES330', NULL, NULL),
(691, 18, 'ES 350', 'ES350', NULL, NULL),
(692, 18, 'GS Models (6)', 'GS_MODELS', NULL, NULL),
(693, 18, 'GS 300', 'GS300', NULL, NULL),
(694, 18, 'GS 350', 'GS350', NULL, NULL),
(695, 18, 'GS 400', 'GS400', NULL, NULL),
(696, 18, 'GS 430', 'GS430', NULL, NULL),
(697, 18, 'GS 450h', 'GS450H', NULL, NULL),
(698, 18, 'GS 460', 'GS460', NULL, NULL),
(699, 18, 'GX Models (2)', 'GX_MODELS', NULL, NULL),
(700, 18, 'GX 460', 'GX460', NULL, NULL),
(701, 18, 'GX 470', 'GX470', NULL, NULL),
(702, 18, 'HS Models (1)', 'HS_MODELS', NULL, NULL),
(703, 18, 'HS 250h', 'HS250H', NULL, NULL),
(704, 18, 'IS Models (6)', 'IS_MODELS', NULL, NULL),
(705, 18, 'IS 250', 'IS250', NULL, NULL),
(706, 18, 'IS 250C', 'IS250C', NULL, NULL),
(707, 18, 'IS 300', 'IS300', NULL, NULL),
(708, 18, 'IS 350', 'IS350', NULL, NULL),
(709, 18, 'IS 350C', 'IS350C', NULL, NULL),
(710, 18, 'IS F', 'ISF', NULL, NULL),
(711, 18, 'LFA', 'LEXLFA', NULL, NULL),
(712, 18, 'LS Models (4)', 'LS_MODELS', NULL, NULL),
(713, 18, 'LS 400', 'LS400', NULL, NULL),
(714, 18, 'LS 430', 'LS430', NULL, NULL),
(715, 18, 'LS 460', 'LS460', NULL, NULL),
(716, 18, 'LS 600h', 'LS600H', NULL, NULL),
(717, 18, 'LX Models (3)', 'LX_MODELS', NULL, NULL),
(718, 18, 'LX 450', 'LX450', NULL, NULL),
(719, 18, 'LX 470', 'LX470', NULL, NULL),
(720, 18, 'LX 570', 'LX570', NULL, NULL),
(721, 18, 'RX Models (5)', 'RX_MODELS', NULL, NULL),
(722, 18, 'RX 300', 'RX300', NULL, NULL),
(723, 18, 'RX 330', 'RX330', NULL, NULL),
(724, 18, 'RX 350', 'RX350', NULL, NULL),
(725, 18, 'RX 400h', 'RX400H', NULL, NULL),
(726, 18, 'RX 450h', 'RX450H', NULL, NULL),
(727, 18, 'SC Models (3)', 'SC_MODELS', NULL, NULL),
(728, 18, 'SC 300', 'SC300', NULL, NULL),
(729, 18, 'SC 400', 'SC400', NULL, NULL),
(730, 18, 'SC 430', 'SC430', NULL, NULL),
(731, 18, 'Other Lexus Models', 'LEXOTH', NULL, NULL),
(763, 19, '57', '57MAYBACH', NULL, NULL),
(764, 19, '62', '62MAYBACH', NULL, NULL),
(765, 19, 'Other Maybach Models', 'UNAVAILMAY', NULL, NULL),
(766, 20, '323', 'MAZDA323', NULL, NULL),
(767, 20, '626', 'MAZDA626', NULL, NULL),
(768, 20, '929', '929', NULL, NULL),
(769, 20, 'B-Series Pickup', 'B-SERIES', NULL, NULL),
(770, 20, 'CX-5', 'CX-5', NULL, NULL),
(771, 20, 'CX-7', 'CX-7', NULL, NULL),
(772, 20, 'CX-9', 'CX-9', NULL, NULL),
(773, 20, 'GLC', 'GLC', NULL, NULL),
(774, 20, 'Mazda2 / Demio', 'MAZDA2_DEMIO', NULL, NULL),
(775, 20, 'MAZDA3', 'MAZDA3', NULL, NULL),
(776, 20, 'MAZDA5', 'MAZDA5', NULL, NULL),
(777, 20, 'MAZDA6', 'MAZDA6', NULL, NULL),
(778, 20, 'MAZDASPEED3', 'MAZDASPD3', NULL, NULL),
(779, 20, 'MAZDASPEED6', 'MAZDASPD6', NULL, NULL),
(780, 20, 'Miata MX5', 'MIATA', NULL, NULL),
(781, 20, 'Millenia', 'MILL', NULL, NULL),
(782, 20, 'MPV', 'MPV', NULL, NULL),
(783, 20, 'MX3', 'MX3', NULL, NULL),
(784, 20, 'MX6', 'MX6', NULL, NULL),
(785, 20, 'Navajo', 'NAVAJO', NULL, NULL),
(786, 20, 'Protege', 'PROTE', NULL, NULL),
(787, 20, 'Protege5', 'PROTE5', NULL, NULL),
(788, 20, 'RX-7', 'RX7', NULL, NULL),
(789, 20, 'RX-8', 'RX8', NULL, NULL),
(790, 20, 'Tribute', 'TRIBUTE', NULL, NULL),
(791, 20, 'Other Mazda Models', 'MAZOTH', NULL, NULL),
(793, 21, '190 Class (2)', '190_CLASS', NULL, NULL),
(794, 21, '190D', '190D', NULL, NULL),
(795, 21, '190E', '190E', NULL, NULL),
(796, 21, '240 Class (1)', '240_CLASS', NULL, NULL),
(797, 21, '240D', '240D', NULL, NULL),
(798, 21, '300 Class / E Class (6)', '300_CLASS_E_CLASS', NULL, NULL),
(799, 21, '300CD', '300CD', NULL, NULL),
(800, 21, '300CE', '300CE', NULL, NULL),
(801, 21, '300D', '300D', NULL, NULL),
(802, 21, '300E', '300E', NULL, NULL),
(803, 21, '300TD', '300TD', NULL, NULL),
(804, 21, '300TE', '300TE', NULL, NULL),
(805, 21, 'C Class (13)', 'C_CLASS', NULL, NULL),
(806, 21, 'C220', 'C220', NULL, NULL),
(807, 21, 'C230', 'C230', NULL, NULL),
(808, 21, 'C240', 'C240', NULL, NULL),
(809, 21, 'C250', 'C250', NULL, NULL),
(810, 21, 'C280', 'C280', NULL, NULL),
(811, 21, 'C300', 'C300', NULL, NULL),
(812, 21, 'C320', 'C320', NULL, NULL),
(813, 21, 'C32 AMG', 'C32AMG', NULL, NULL),
(814, 21, 'C350', 'C350', NULL, NULL),
(815, 21, 'C36 AMG', 'C36AMG', NULL, NULL),
(816, 21, 'C43 AMG', 'C43AMG', NULL, NULL),
(817, 21, 'C55 AMG', 'C55AMG', NULL, NULL),
(818, 21, 'C63 AMG', 'C63AMG', NULL, NULL),
(819, 21, 'CL Class (6)', 'CL_CLASS', NULL, NULL),
(820, 21, 'CL500', 'CL500', NULL, NULL),
(821, 21, 'CL550', 'CL550', NULL, NULL),
(822, 21, 'CL55 AMG', 'CL55AMG', NULL, NULL),
(823, 21, 'CL600', 'CL600', NULL, NULL),
(824, 21, 'CL63 AMG', 'CL63AMG', NULL, NULL),
(825, 21, 'CL65 AMG', 'CL65AMG', NULL, NULL),
(826, 21, 'CLK Class (7)', 'CLK_CLASS', NULL, NULL),
(827, 21, 'CLK320', 'CLK320', NULL, NULL),
(828, 21, 'CLK350', 'CLK350', NULL, NULL),
(829, 21, 'CLK430', 'CLK430', NULL, NULL),
(830, 21, 'CLK500', 'CLK500', NULL, NULL),
(831, 21, 'CLK550', 'CLK550', NULL, NULL),
(832, 21, 'CLK55 AMG', 'CLK55AMG', NULL, NULL),
(833, 21, 'CLK63 AMG', 'CLK63AMG', NULL, NULL),
(834, 21, 'CLS Class (4)', 'CLS_CLASS', NULL, NULL),
(835, 21, 'CLS500', 'CLS500', NULL, NULL),
(836, 21, 'CLS550', 'CLS550', NULL, NULL),
(837, 21, 'CLS55 AMG', 'CLS55AMG', NULL, NULL),
(838, 21, 'CLS63 AMG', 'CLS63AMG', NULL, NULL),
(839, 21, 'E Class (18)', 'E_CLASS', NULL, NULL),
(840, 21, '260E', '260E', NULL, NULL),
(841, 21, '280CE', '280CE', NULL, NULL),
(842, 21, '280E', '280E', NULL, NULL),
(843, 21, '400E', '400E', NULL, NULL),
(844, 21, '500E', '500E', NULL, NULL),
(845, 21, 'E300', 'E300', NULL, NULL),
(846, 21, 'E320', 'E320', NULL, NULL),
(847, 21, 'E320 Bluetec', 'E320BLUE', NULL, NULL),
(848, 21, 'E320 CDI', 'E320CDI', NULL, NULL),
(849, 21, 'E350', 'E350', NULL, NULL),
(850, 21, 'E350 Bluetec', 'E350BLUE', NULL, NULL),
(851, 21, 'E400 Hybrid', 'E400', NULL, NULL),
(852, 21, 'E420', 'E420', NULL, NULL),
(853, 21, 'E430', 'E430', NULL, NULL),
(854, 21, 'E500', 'E500', NULL, NULL),
(855, 21, 'E550', 'E550', NULL, NULL),
(856, 21, 'E55 AMG', 'E55AMG', NULL, NULL),
(857, 21, 'E63 AMG', 'E63AMG', NULL, NULL),
(858, 21, 'G Class (4)', 'G_CLASS', NULL, NULL),
(859, 21, 'G500', 'G500', NULL, NULL),
(860, 21, 'G550', 'G550', NULL, NULL),
(861, 21, 'G55 AMG', 'G55AMG', NULL, NULL),
(862, 21, 'G63 AMG', 'G63AMG', NULL, NULL),
(863, 21, 'GL Class (5)', 'GL_CLASS', NULL, NULL),
(864, 21, 'GL320 Bluetec', 'GL320BLUE', NULL, NULL),
(865, 21, 'GL320 CDI', 'GL320CDI', NULL, NULL),
(866, 21, 'GL350 Bluetec', 'GL350BLUE', NULL, NULL),
(867, 21, 'GL450', 'GL450', NULL, NULL),
(868, 21, 'GL550', 'GL550', NULL, NULL),
(869, 21, 'GLK Class (1)', 'GLK_CLASS', NULL, NULL),
(870, 21, 'GLK350', 'GLK350', NULL, NULL),
(871, 21, 'M Class (11)', 'M_CLASS', NULL, NULL),
(872, 21, 'ML320', 'ML320', NULL, NULL),
(873, 21, 'ML320 Bluetec', 'ML320BLUE', NULL, NULL),
(874, 21, 'ML320 CDI', 'ML320CDI', NULL, NULL),
(875, 21, 'ML350', 'ML350', NULL, NULL),
(876, 21, 'ML350 Bluetec', 'ML350BLUE', NULL, NULL),
(877, 21, 'ML430', 'ML430', NULL, NULL),
(878, 21, 'ML450 Hybrid', 'ML450HY', NULL, NULL),
(879, 21, 'ML500', 'ML500', NULL, NULL),
(880, 21, 'ML550', 'ML550', NULL, NULL),
(881, 21, 'ML55 AMG', 'ML55AMG', NULL, NULL),
(882, 21, 'ML63 AMG', 'ML63AMG', NULL, NULL),
(883, 21, 'R Class (6)', 'R_CLASS', NULL, NULL),
(884, 21, 'R320 Bluetec', 'R320BLUE', NULL, NULL),
(885, 21, 'R320 CDI', 'R320CDI', NULL, NULL),
(886, 21, 'R350', 'R350', NULL, NULL),
(887, 21, 'R350 Bluetec', 'R350BLUE', NULL, NULL),
(888, 21, 'R500', 'R500', NULL, NULL),
(889, 21, 'R63 AMG', 'R63AMG', NULL, NULL),
(890, 21, 'S Class (30)', 'S_CLASS', NULL, NULL),
(891, 21, '300SD', '300SD', NULL, NULL),
(892, 21, '300SDL', '300SDL', NULL, NULL),
(893, 21, '300SE', '300SE', NULL, NULL),
(894, 21, '300SEL', '300SEL', NULL, NULL),
(895, 21, '350SD', '350SD', NULL, NULL),
(896, 21, '350SDL', '350SDL', NULL, NULL),
(897, 21, '380SE', '380SE', NULL, NULL),
(898, 21, '380SEC', '380SEC', NULL, NULL),
(899, 21, '380SEL', '380SEL', NULL, NULL),
(900, 21, '400SE', '400SE', NULL, NULL),
(901, 21, '400SEL', '400SEL', NULL, NULL),
(902, 21, '420SEL', '420SEL', NULL, NULL),
(903, 21, '500SEC', '500SEC', NULL, NULL),
(904, 21, '500SEL', '500SEL', NULL, NULL),
(905, 21, '560SEC', '560SEC', NULL, NULL),
(906, 21, '560SEL', '560SEL', NULL, NULL),
(907, 21, '600SEC', '600SEC', NULL, NULL),
(908, 21, '600SEL', '600SEL', NULL, NULL),
(909, 21, 'S320', 'S320', NULL, NULL),
(910, 21, 'S350', 'S350', NULL, NULL),
(911, 21, 'S350 Bluetec', 'S350BLUE', NULL, NULL),
(912, 21, 'S400 Hybrid', 'S400HY', NULL, NULL),
(913, 21, 'S420', 'S420', NULL, NULL),
(914, 21, 'S430', 'S430', NULL, NULL),
(915, 21, 'S500', 'S500', NULL, NULL),
(916, 21, 'S550', 'S550', NULL, NULL),
(917, 21, 'S55 AMG', 'S55AMG', NULL, NULL),
(918, 21, 'S600', 'S600', NULL, NULL),
(919, 21, 'S63 AMG', 'S63AMG', NULL, NULL),
(920, 21, 'S65 AMG', 'S65AMG', NULL, NULL),
(921, 21, 'SL Class (13)', 'SL_CLASS', NULL, NULL),
(922, 21, '300SL', '300SL', NULL, NULL),
(923, 21, '380SL', '380SL', NULL, NULL),
(924, 21, '380SLC', '380SLC', NULL, NULL),
(925, 21, '500SL', '500SL', NULL, NULL),
(926, 21, '560SL', '560SL', NULL, NULL),
(927, 21, '600SL', '600SL', NULL, NULL),
(928, 21, 'SL320', 'SL320', NULL, NULL),
(929, 21, 'SL500', 'SL500', NULL, NULL),
(930, 21, 'SL550', 'SL550', NULL, NULL),
(931, 21, 'SL55 AMG', 'SL55AMG', NULL, NULL),
(932, 21, 'SL600', 'SL600', NULL, NULL),
(933, 21, 'SL63 AMG', 'SL63AMG', NULL, NULL),
(934, 21, 'SL65 AMG', 'SL65AMG', NULL, NULL),
(935, 21, 'SLK Class (8)', 'SLK_CLASS', NULL, NULL),
(936, 21, 'SLK230', 'SLK230', NULL, NULL),
(937, 21, 'SLK250', 'SLK250', NULL, NULL),
(938, 21, 'SLK280', 'SLK280', NULL, NULL),
(939, 21, 'SLK300', 'SLK300', NULL, NULL),
(940, 21, 'SLK320', 'SLK320', NULL, NULL),
(941, 21, 'SLK32 AMG', 'SLK32AMG', NULL, NULL),
(942, 21, 'SLK350', 'SLK350', NULL, NULL),
(943, 21, 'SLK55 AMG', 'SLK55AMG', NULL, NULL),
(944, 21, 'SLR Class (1)', 'SLR_CLASS', NULL, NULL),
(945, 21, ' - SLR', 'SLR', NULL, NULL),
(946, 21, 'SLS Class (1)', 'SLS_CLASS', NULL, NULL),
(947, 21, ' SLS AMG', 'SLSAMG', NULL, NULL),
(948, 21, 'Sprinter Class (1)', 'SPRINTER_CLASS', NULL, NULL),
(949, 21, 'Sprinter', 'MBSPRINTER', NULL, NULL),
(950, 21, 'Other Mercedes-Benz Models', 'MBOTH', NULL, NULL),
(987, 22, '3000GT', '3000GT', NULL, NULL),
(988, 22, 'Cordia', 'CORD', NULL, NULL),
(989, 22, 'Diamante', 'DIAMAN', NULL, NULL),
(990, 22, 'Eclipse', 'ECLIP', NULL, NULL),
(991, 22, 'Endeavor', 'ENDEAVOR', NULL, NULL),
(992, 22, 'Expo', 'MITEXP', NULL, NULL),
(993, 22, 'Galant', 'GALANT', NULL, NULL),
(994, 22, 'i', 'MITI', NULL, NULL),
(995, 22, 'Lancer', 'LANCERMITS', NULL, NULL),
(996, 22, 'Lancer Evolution', 'LANCEREVO', NULL, NULL),
(997, 22, 'Mighty Max', 'MITPU', NULL, NULL),
(998, 22, 'Mirage', 'MIRAGE', NULL, NULL),
(999, 22, 'Montero', 'MONT', NULL, NULL),
(1000, 22, 'Montero Sport', 'MONTSPORT', NULL, NULL),
(1001, 22, 'Outlander', 'OUTLANDER', NULL, NULL),
(1002, 22, 'Outlander Sport', 'OUTLANDSPT', NULL, NULL),
(1003, 22, 'Precis', 'PRECIS', NULL, NULL),
(1004, 22, 'Raider', 'RAIDERMITS', NULL, NULL),
(1005, 22, 'Sigma', 'SIGMA', NULL, NULL),
(1006, 22, 'Starion', 'MITSTAR', NULL, NULL),
(1007, 22, 'Tredia', 'TRED', NULL, NULL),
(1008, 22, 'Van', 'MITVAN', NULL, NULL),
(1009, 22, 'Other Mitsubishi Models', 'MITOTH', NULL, NULL),
(1010, 23, '200SX', 'NIS200SX', NULL, NULL),
(1011, 23, '240SX', '240SX', NULL, NULL),
(1012, 23, '300ZX', '300ZXTURBO', NULL, NULL),
(1013, 23, '350Z', '350Z', NULL, NULL),
(1014, 23, '370Z', '370Z', NULL, NULL),
(1015, 23, 'Altima', 'ALTIMA', NULL, NULL),
(1016, 23, 'Armada', 'PATHARMADA', NULL, NULL),
(1017, 23, 'Axxess', 'AXXESS', NULL, NULL),
(1018, 23, 'Cube', 'CUBE', NULL, NULL),
(1019, 23, 'Frontier', 'FRONTI', NULL, NULL),
(1020, 23, 'GT-R', 'GT-R', NULL, NULL),
(1021, 23, 'Juke', 'JUKE', NULL, NULL),
(1022, 23, 'Leaf', 'LEAF', NULL, NULL),
(1023, 23, 'Maxima', 'MAX', NULL, NULL),
(1024, 23, 'Murano', 'MURANO', NULL, NULL),
(1025, 23, 'Murano CrossCabriolet', 'MURANOCROS', NULL, NULL),
(1026, 23, 'NV', 'NV', NULL, NULL),
(1027, 23, 'NX', 'NX', NULL, NULL),
(1028, 23, 'Pathfinder', 'PATH', NULL, NULL),
(1029, 23, 'Pickup', 'NISPU', NULL, NULL),
(1030, 23, 'Pulsar', 'PULSAR', NULL, NULL),
(1031, 23, 'Quest', 'QUEST', NULL, NULL),
(1032, 23, 'Rogue', 'ROGUE', NULL, NULL),
(1033, 23, 'Sentra', 'SENTRA', NULL, NULL),
(1034, 23, 'Stanza', 'STANZA', NULL, NULL),
(1035, 23, 'Titan', 'TITAN', NULL, NULL),
(1036, 23, 'Van', 'NISVAN', NULL, NULL),
(1037, 23, 'Versa', 'VERSA', NULL, NULL),
(1038, 23, 'Xterra', 'XTERRA', NULL, NULL),
(1039, 23, 'Other Nissan Models', 'NISSOTH', NULL, NULL),
(1058, 24, '405', '405', NULL, NULL),
(1059, 24, '504', '504', NULL, NULL),
(1060, 24, '505', '505', NULL, NULL),
(1061, 24, '604', '604', NULL, NULL),
(1062, 24, 'Other Peugeot Models', 'UNAVAILPEU', NULL, NULL),
(1110, 25, '911', '911', NULL, NULL),
(1111, 25, '924', '924', NULL, NULL),
(1112, 25, '928', '928', NULL, NULL),
(1113, 25, '944', '944', NULL, NULL),
(1114, 25, '968', '968', NULL, NULL),
(1115, 25, 'Boxster', 'BOXSTE', NULL, NULL),
(1116, 25, 'Carrera GT', 'CARRERAGT', NULL, NULL),
(1117, 25, 'Cayenne', 'CAYENNE', NULL, NULL),
(1118, 25, 'Cayman', 'CAYMAN', NULL, NULL),
(1119, 25, 'Panamera', 'PANAMERA', NULL, NULL),
(1120, 25, 'Other Porsche Models', 'POROTH', NULL, NULL),
(1125, 26, '18i', '18I', NULL, NULL),
(1126, 26, 'Fuego', 'FU', NULL, NULL),
(1127, 26, 'Le Car', 'LECAR', NULL, NULL),
(1128, 26, 'R18', 'R18', NULL, NULL),
(1129, 26, 'Sportwagon', 'RENSPORT', NULL, NULL),
(1130, 26, 'Other Renault Models', 'UNAVAILREN', NULL, NULL),
(1189, 27, 'Baja', 'BAJA', NULL, NULL),
(1190, 27, 'Brat', 'BRAT', NULL, NULL),
(1191, 27, 'BRZ', 'SUBBRZ', NULL, NULL),
(1192, 27, 'Forester', 'FOREST', NULL, NULL),
(1193, 27, 'Impreza', 'IMPREZ', NULL, NULL),
(1194, 27, 'Impreza WRX', 'IMPWRX', NULL, NULL),
(1195, 27, 'Justy', 'JUSTY', NULL, NULL),
(1196, 27, 'L Series', 'SUBL', NULL, NULL),
(1197, 27, 'Legacy', 'LEGACY', NULL, NULL),
(1198, 27, 'Loyale', 'LOYALE', NULL, NULL),
(1199, 27, 'Outback', 'SUBOUTBK', NULL, NULL),
(1200, 27, 'SVX', 'SVX', NULL, NULL),
(1201, 27, 'Tribeca', 'B9TRIBECA', NULL, NULL),
(1202, 27, 'XT', 'XT', NULL, NULL),
(1203, 27, 'XV Crosstrek', 'XVCRSSTREK', NULL, NULL),
(1204, 27, 'Other Subaru Models', 'SUBOTH', NULL, NULL),
(1205, 28, 'Aerio', 'AERIO', NULL, NULL),
(1206, 28, 'Equator', 'EQUATOR', NULL, NULL),
(1207, 28, 'Esteem', 'ESTEEM', NULL, NULL),
(1208, 28, 'Forenza', 'FORENZA', NULL, NULL),
(1209, 28, 'Grand Vitara', 'GRANDV', NULL, NULL),
(1210, 28, 'Kizashi', 'KIZASHI', NULL, NULL),
(1211, 28, 'Reno', 'RENO', NULL, NULL),
(1212, 28, 'Samurai', 'SAMUR', NULL, NULL),
(1213, 28, 'Sidekick', 'SIDE', NULL, NULL),
(1214, 28, 'Swift', 'SWIFT', NULL, NULL),
(1215, 28, 'SX4', 'SX4', NULL, NULL),
(1216, 28, 'Verona', 'VERONA', NULL, NULL),
(1217, 28, 'Vitara', 'VITARA', NULL, NULL),
(1218, 28, 'X-90', 'X90', NULL, NULL),
(1219, 28, 'XL7', 'XL7', NULL, NULL),
(1220, 28, 'Other Suzuki Models', 'SUZOTH', NULL, NULL),
(1221, 29, 'Roadster', 'ROADSTER', NULL, NULL),
(1222, 30, '4Runner', '4RUN', NULL, NULL),
(1223, 30, 'Avalon', 'AVALON', NULL, NULL),
(1224, 30, 'Camry', 'CAMRY', NULL, NULL),
(1225, 30, 'Celica', 'CELICA', NULL, NULL),
(1226, 30, 'Corolla', 'COROL', NULL, NULL),
(1227, 30, 'Corona', 'CORONA', NULL, NULL),
(1228, 30, 'Cressida', 'CRESS', NULL, NULL),
(1229, 30, 'Echo', 'ECHO', NULL, NULL),
(1230, 30, 'FJ Cruiser', 'FJCRUIS', NULL, NULL),
(1231, 30, 'Highlander', 'HIGHLANDER', NULL, NULL),
(1232, 30, 'Land Cruiser', 'LC', NULL, NULL),
(1233, 30, 'Matrix', 'MATRIX', NULL, NULL),
(1234, 30, 'MR2', 'MR2', NULL, NULL),
(1235, 30, 'MR2 Spyder', 'MR2SPYDR', NULL, NULL),
(1236, 30, 'Paseo', 'PASEO', NULL, NULL),
(1237, 30, 'Pickup', 'PICKUP', NULL, NULL),
(1238, 30, 'Previa', 'PREVIA', NULL, NULL),
(1239, 30, 'Prius', 'PRIUS', NULL, NULL),
(1240, 30, 'Prius C', 'PRIUSC', NULL, NULL),
(1241, 30, 'Prius V', 'PRIUSV', NULL, NULL),
(1242, 30, 'RAV4', 'RAV4', NULL, NULL),
(1243, 30, 'Sequoia', 'SEQUOIA', NULL, NULL),
(1244, 30, 'Sienna', 'SIENNA', NULL, NULL),
(1245, 30, 'Solara', 'SOLARA', NULL, NULL),
(1246, 30, 'Starlet', 'STARLET', NULL, NULL),
(1247, 30, 'Supra', 'SUPRA', NULL, NULL),
(1248, 30, 'T100', 'T100', NULL, NULL),
(1249, 30, 'Tacoma', 'TACOMA', NULL, NULL),
(1250, 30, 'Tercel', 'TERCEL', NULL, NULL),
(1251, 30, 'Tundra', 'TUNDRA', NULL, NULL),
(1252, 30, 'Van', 'TOYVAN', NULL, NULL),
(1253, 30, 'Venza', 'VENZA', NULL, NULL),
(1254, 30, 'Yaris / Vitz', 'YARIS', NULL, NULL),
(1255, 30, 'Other Toyota Models', 'TOYOTH', NULL, NULL),
(1259, 31, 'Beetle', 'BEETLE', NULL, NULL),
(1260, 31, 'Cabrio', 'VOLKSCAB', NULL, NULL),
(1261, 31, 'Cabriolet', 'CAB', NULL, NULL),
(1262, 31, 'CC', 'CC', NULL, NULL),
(1263, 31, 'Corrado', 'CORR', NULL, NULL),
(1264, 31, 'Dasher', 'DASHER', NULL, NULL),
(1265, 31, 'Eos', 'EOS', NULL, NULL),
(1266, 31, 'Eurovan', 'EUROVAN', NULL, NULL),
(1267, 31, 'Fox', 'VOLKSFOX', NULL, NULL),
(1268, 31, 'GLI', 'GLI', NULL, NULL),
(1269, 31, 'Golf R', 'GOLFR', NULL, NULL),
(1270, 31, 'GTI', 'GTI', NULL, NULL),
(1271, 31, 'Golf and Rabbit Models (2)', 'GOLFANDRABBITMODELS', NULL, NULL),
(1272, 31, 'Golf', 'GOLF', NULL, NULL),
(1273, 31, 'Rabbit', 'RABBIT', NULL, NULL),
(1274, 31, 'Jetta', 'JET', NULL, NULL),
(1275, 31, 'Passat', 'PASS', NULL, NULL),
(1276, 31, 'Phaeton', 'PHAETON', NULL, NULL),
(1277, 31, 'Pickup', 'RABBITPU', NULL, NULL),
(1278, 31, 'Quantum', 'QUAN', NULL, NULL),
(1279, 31, 'R32', 'R32', NULL, NULL),
(1280, 31, 'Routan', 'ROUTAN', NULL, NULL),
(1281, 31, 'Scirocco', 'SCIR', NULL, NULL),
(1282, 31, 'Tiguan', 'TIGUAN', NULL, NULL),
(1283, 31, 'Touareg', 'TOUAREG', NULL, NULL),
(1284, 31, 'Vanagon', 'VANAG', NULL, NULL),
(1285, 31, 'Other Volkswagen Models', 'VWOTH', NULL, NULL),
(1286, 32, '240', '240', NULL, NULL),
(1287, 32, '260', '260', NULL, NULL),
(1288, 32, '740', '740', NULL, NULL),
(1289, 32, '760', '760', NULL, NULL),
(1290, 32, '780', '780', NULL, NULL),
(1291, 32, '850', '850', NULL, NULL),
(1292, 32, '940', '940', NULL, NULL),
(1293, 32, '960', '960', NULL, NULL),
(1294, 32, 'C30', 'C30', NULL, NULL),
(1295, 32, 'C70', 'C70', NULL, NULL),
(1296, 32, 'S40', 'S40', NULL, NULL),
(1297, 32, 'S60', 'S60', NULL, NULL),
(1298, 32, 'S70', 'S70', NULL, NULL),
(1299, 32, 'S80', 'S80', NULL, NULL),
(1300, 32, 'S90', 'S90', NULL, NULL),
(1301, 32, 'V40', 'V40', NULL, NULL),
(1302, 32, 'V50', 'V50', NULL, NULL),
(1303, 32, 'V70', 'V70', NULL, NULL),
(1304, 32, 'V90', 'V90', NULL, NULL),
(1305, 32, 'XC60', 'XC60', NULL, NULL),
(1306, 32, 'XC70', 'XC', NULL, NULL),
(1307, 32, 'XC90', 'XC90', NULL, NULL),
(1308, 32, 'Other Volvo Models', 'VOLOTH', NULL, NULL),
(1315, 33, 'LIESSE II', 'LIESSEII', NULL, NULL),
(1316, 28, 'Escudo', 'Escudo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Automatic', NULL, NULL),
(2, 'Manual', NULL, NULL),
(3, 'Automated Manual', NULL, NULL),
(4, 'Continuously Variable', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ESR Admin', 'executivesprd@gmail.com', NULL, '$2y$10$OuLaFm.nt1/ajpSpY32i1uNpJ6PHDItJ/qoAUMlNqevGBczQdVN5S', NULL, '2022-07-18 04:03:11', '2022-07-18 04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transmission_id` bigint(20) UNSIGNED NOT NULL,
  `body_id` bigint(20) UNSIGNED NOT NULL,
  `drive_id` bigint(20) UNSIGNED NOT NULL,
  `makes_id` bigint(20) UNSIGNED NOT NULL,
  `models_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `transmission_id`, `body_id`, `drive_id`, `makes_id`, `models_id`, `year`, `color`, `capacity`, `description`, `fuel`, `features`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 1, 8, '2016', 'Navy Blue', '1800CC', 'Effortlessly desirable. High-quality interior. Good to drive', 'Petrol', 'Radio,CD Player,Airbags,Navigation System,Alloy Rims,Electric Side Mirrors,Parking Sensors,Display Screen,Central Locking,Bluetooth,Fog Lights,Spare Wheel,Camera,Cup Holders,Armrest', 'uploads/main/1658128847.JPG', '2022-07-18 04:20:47', '2022-07-18 04:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `v_images`
--

CREATE TABLE `v_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `v_images`
--

INSERT INTO `v_images` (`id`, `vehicle_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/vehicles/16581288471.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(2, 1, 'uploads/vehicles/16581288472.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(3, 1, 'uploads/vehicles/16581288473.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(4, 1, 'uploads/vehicles/16581288474.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(5, 1, 'uploads/vehicles/16581288475.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(6, 1, 'uploads/vehicles/16581288476.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(7, 1, 'uploads/vehicles/16581288477.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(8, 1, 'uploads/vehicles/16581288478.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47'),
(9, 1, 'uploads/vehicles/16581288479.JPG', '2022-07-18 04:20:47', '2022-07-18 04:20:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_makes_id_foreign` (`makes_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_transmission_id_foreign` (`transmission_id`),
  ADD KEY `vehicles_body_id_foreign` (`body_id`),
  ADD KEY `vehicles_drive_id_foreign` (`drive_id`),
  ADD KEY `vehicles_makes_id_foreign` (`makes_id`),
  ADD KEY `vehicles_models_id_foreign` (`models_id`);

--
-- Indexes for table `v_images`
--
ALTER TABLE `v_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `v_images_vehicle_id_foreign` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drive`
--
ALTER TABLE `drive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1317;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `v_images`
--
ALTER TABLE `v_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_makes_id_foreign` FOREIGN KEY (`makes_id`) REFERENCES `makes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_body_id_foreign` FOREIGN KEY (`body_id`) REFERENCES `body` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_drive_id_foreign` FOREIGN KEY (`drive_id`) REFERENCES `drive` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_makes_id_foreign` FOREIGN KEY (`makes_id`) REFERENCES `makes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_models_id_foreign` FOREIGN KEY (`models_id`) REFERENCES `models` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_transmission_id_foreign` FOREIGN KEY (`transmission_id`) REFERENCES `transmission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `v_images`
--
ALTER TABLE `v_images`
  ADD CONSTRAINT `v_images_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
