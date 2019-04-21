-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 06:07 PM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_ventas`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_04_14_182554_create_clientes_table', 1),
(28, '2019_04_14_182606_create_proveedors_table', 1),
(29, '2019_04_14_182627_create_tipo_productos_table', 1),
(30, '2019_04_14_182639_create_productos_table', 1),
(31, '2019_04_14_182649_create_ventas_table', 2);

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
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_producto_id` bigint(20) UNSIGNED NOT NULL,
  `agrocosur` int(11) NOT NULL,
  `centralpecuaria` int(11) NOT NULL,
  `disprovet` int(11) NOT NULL,
  `erma` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `tipo_producto_id`, `agrocosur`, `centralpecuaria`, `disprovet`, `erma`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ATROPINA X 10 ML', 6, 6150, 6113, 7000, 5700, '2019-04-21 01:27:19', '2019-04-21 01:27:19', NULL),
(2, 'ATROPINA X 50 ML', 6, 26050, 25898, 29700, 25200, '2019-04-21 01:28:37', '2019-04-21 01:28:37', NULL),
(3, 'ALAPIEL X 35G', 1, 8900, 9670, 10200, 9300, '2019-04-21 01:29:06', '2019-04-21 01:29:06', NULL),
(4, 'AMITRAZ 12,5% X 33 ML', 3, 4500, 4446, 5100, 4000, '2019-04-21 01:29:37', '2019-04-21 01:29:37', NULL),
(5, 'AMITRAZ 12,5% X 100 ML', 3, 10300, 10287, 11700, 9200, '2019-04-21 01:30:12', '2019-04-21 01:30:12', NULL),
(6, 'AMITRAZ 12,5% X 1000 ML', 3, 45000, 0, 0, 39900, '2019-04-21 01:31:10', '2019-04-21 02:40:02', NULL),
(7, 'BOLDENONA  X 50 ML', 4, 21650, 0, 26800, 21000, '2019-04-21 01:31:49', '2019-04-21 02:42:04', NULL),
(8, 'BOLDENONA X 250 ML', 4, 79800, 0, 0, 71400, '2019-04-21 01:32:15', '2019-04-21 02:42:15', NULL),
(9, 'DEXTROMIN B X 500 ML', 7, 8950, 9015, 10000, 9800, '2019-04-21 01:32:56', '2019-04-21 01:32:56', NULL),
(10, 'DEXTROMIN RB12 X 500 ML', 7, 19300, 17506, 27800, 20400, '2019-04-21 01:33:47', '2019-04-21 01:33:47', NULL),
(11, 'DEXTROMIN B X 1000 ML', 7, 15000, 14894, 17000, 13400, '2019-04-21 01:34:20', '2019-04-21 01:34:20', NULL),
(12, 'DEXTROMIN SIXPACK X 500 ML', 7, 0, 54090, 0, 52000, '2019-04-21 01:34:52', '2019-04-21 02:42:32', NULL),
(13, 'DISTROSEL EQUINOS 20 gr', 3, 7700, 0, 10600, 9100, '2019-04-21 01:35:22', '2019-04-21 02:42:44', NULL),
(14, 'ERMAFOS X 500 ML', 8, 17000, 16929, 19500, 17800, '2019-04-21 01:36:00', '2019-04-21 01:36:00', NULL),
(15, 'ERMASID X 120 ML', 1, 11300, 11226, 12900, 11200, '2019-04-21 01:37:02', '2019-04-21 01:37:02', NULL),
(16, 'ESPECIFICO X 235 ML', 5, 6500, 6051, 0, 6100, '2019-04-21 01:37:31', '2019-04-21 02:43:26', NULL),
(17, 'ESPECIFICO X 960 ML', 5, 20800, 0, 0, 20000, '2019-04-21 01:37:59', '2019-04-21 02:43:48', NULL),
(18, 'ESPECIFICO X 3800 ML', 5, 68000, 0, 0, 63000, '2019-04-21 01:38:30', '2019-04-21 02:43:38', NULL),
(19, 'ESPIRAMICINA X 50 ML', 1, 28050, 28074, 31800, 29000, '2019-04-21 01:39:13', '2019-04-21 01:39:13', NULL),
(20, 'FENCOB 25% X 12 ML', 3, 5250, 5224, 6000, 5000, '2019-04-21 01:39:44', '2019-04-21 01:39:44', NULL),
(21, 'FENCOB 25% X 120 ML', 3, 22700, 22563, 0, 21000, '2019-04-21 01:40:10', '2019-04-21 02:44:01', NULL),
(22, 'FENCOB 25% X 500 ML', 3, 57200, 57707, 0, 53000, '2019-04-21 01:40:52', '2019-04-21 02:44:11', NULL),
(23, 'FLOXAVET X 10 ML', 2, 11400, 11337, 10500, 10500, '2019-04-21 01:41:23', '2019-04-21 01:41:23', NULL),
(24, 'FLOXAVET X 50 ML', 2, 35100, 34901, 40000, 34000, '2019-04-21 01:42:05', '2019-04-21 01:42:05', NULL),
(25, 'FLUVIPEN X 3 MILL', 1, 12650, 0, 0, 11900, '2019-04-21 01:42:41', '2019-04-21 02:44:24', NULL),
(26, 'FLUVIPEN X 6 MILL', 1, 18250, 0, 0, 18300, '2019-04-21 01:43:11', '2019-04-21 02:44:40', NULL),
(27, 'FLUVIPEN X 9 MILL', 1, 20950, 20746, 0, 21500, '2019-04-21 01:43:52', '2019-04-21 02:44:50', NULL),
(28, 'GLOBULIN B X 50 ML', 8, 16550, 16450, 0, 16000, '2019-04-21 01:44:21', '2019-04-21 02:45:15', NULL),
(29, 'GLOBULIN B X 250 ML', 8, 34550, 0, 0, 33300, '2019-04-21 01:44:57', '2019-04-21 02:45:03', NULL),
(30, 'GLOBULIN SALES X 50 ML', 8, 15200, 14910, 18700, 16000, '2019-04-21 01:45:40', '2019-04-21 01:45:40', NULL),
(31, 'GLOBULIN SALES X 250 ML', 8, 32900, 0, 36100, 33300, '2019-04-21 01:46:39', '2019-04-21 02:45:26', NULL),
(32, 'GUAYACOLATO X 500 ML', 6, 32300, 32122, 0, 30000, '2019-04-21 01:47:12', '2019-04-21 02:45:37', NULL),
(33, 'HEMOBULIN SE 50 ML', 8, 8950, 8892, 10200, 8500, '2019-04-21 01:47:44', '2019-04-21 01:47:44', NULL),
(34, 'HEMOBULIN SE X 250 ML', 8, 22800, 18371, 23900, 21000, '2019-04-21 01:48:16', '2019-04-21 01:48:16', NULL),
(35, 'HEMOBULIN SE X 500 ML', 8, 38000, 0, 39700, 36000, '2019-04-21 01:48:47', '2019-04-21 02:45:48', NULL),
(36, 'HIERRO DEXTRAN  X 20 ML', 8, 6700, 6670, 7100, 6600, '2019-04-21 01:49:15', '2019-04-21 01:49:15', NULL),
(37, 'IVERMECTINA 1% X 10 ML', 3, 3350, 3335, 3800, 3000, '2019-04-21 01:49:51', '2019-04-21 01:49:51', NULL),
(38, 'IVERMECTINA 1% X 50 ML', 3, 6250, 6224, 7100, 5600, '2019-04-21 01:50:20', '2019-04-21 01:50:20', NULL),
(39, 'IVERMECTINA 1% X 200 ML', 3, 17650, 17562, 20200, 15800, '2019-04-21 01:50:54', '2019-04-21 01:50:54', NULL),
(40, 'IVERMECTINA 1% X 500 ML', 3, 32400, 32789, 37400, 29500, '2019-04-21 01:51:28', '2019-04-21 01:51:28', NULL),
(41, 'IVERMECTINA TC X 50 ML', 3, 9150, 9114, 10500, 8200, '2019-04-21 01:51:57', '2019-04-21 01:51:57', NULL),
(42, 'IVERMECTINA TC X 200 ML', 3, 22800, 22675, 26000, 20400, '2019-04-21 01:52:30', '2019-04-21 01:52:30', NULL),
(43, 'IVERMECTINA TC X 500 ML', 3, 53950, 57559, 69000, 56100, '2019-04-21 01:53:22', '2019-04-21 01:53:22', NULL),
(44, 'LEVAMISOL 15% X 100 ML', 3, 11200, 0, 8500, 12000, '2019-04-21 01:53:52', '2019-04-21 02:46:19', NULL),
(45, 'LEVAMISOL 15% X 500 ML', 3, 22450, 22808, 26100, 24700, '2019-04-21 01:54:25', '2019-04-21 01:54:25', NULL),
(46, 'LACTOPART X 10 ML', 4, 5100, 5337, 0, 5000, '2019-04-21 01:55:06', '2019-04-21 02:46:07', NULL),
(47, 'NEOBACTERIOL X 50 ML', 5, 25600, 22887, 25000, 24700, '2019-04-21 01:55:39', '2019-04-21 01:55:39', NULL),
(48, 'NEOBACTERIOL X 100 ML', 5, 0, 0, 0, 39900, '2019-04-21 01:56:05', '2019-04-21 02:46:33', NULL),
(49, 'NORMIN X 1gr', 3, 11200, 0, 0, 11000, '2019-04-21 01:56:27', '2019-04-21 02:46:49', NULL),
(50, 'OXITETRACICLINA X 10 ML', 1, 2550, 2556, 2900, 2500, '2019-04-21 01:56:58', '2019-04-21 01:56:58', NULL),
(51, 'OXITETRACICLINA X 50 ML', 1, 4250, 4244, 5000, 4500, '2019-04-21 01:57:33', '2019-04-21 01:57:33', NULL),
(52, 'OXITETRACICLINA X 100 ML', 1, 6050, 6002, 6900, 5700, '2019-04-21 01:58:01', '2019-04-21 01:58:01', NULL),
(53, 'OXITETRACICLINA X 250 ML', 1, 11200, 10670, 12200, 10600, '2019-04-21 01:58:27', '2019-04-21 01:58:27', NULL),
(54, 'OXITETRACICLINA X 500 ML', 1, 12700, 12638, 14500, 14000, '2019-04-21 01:58:54', '2019-04-21 01:58:54', NULL),
(55, 'OXITETRACICLINA L.A. X 50 ML', 1, 10450, 10568, 11900, 11300, '2019-04-21 01:59:29', '2019-04-21 01:59:29', NULL),
(56, 'OXITETRACICLINA L.A. X 250 ML', 1, 26450, 26295, 35000, 30000, '2019-04-21 02:00:00', '2019-04-21 02:00:00', NULL),
(57, 'OXITETRACICLINA L.A. X 500 ML', 1, 49200, 47558, 62000, 51500, '2019-04-21 02:00:34', '2019-04-21 02:00:34', NULL),
(58, 'PROGESTERONA X 20 ML', 4, 14400, 14338, 16400, 13900, '2019-04-21 02:01:08', '2019-04-21 02:01:08', NULL),
(59, 'PROSOPEN X 8 MILL', 1, 17000, 0, 0, 16000, '2019-04-21 02:01:31', '2019-04-21 02:47:06', NULL),
(60, 'SUPLEMENTO MINERAL X 1 KG', 8, 14200, 13421, 14900, 11500, '2019-04-21 02:02:11', '2019-04-21 02:02:11', NULL),
(61, 'TIAMINA X 20 ML', 8, 28850, 10115, 11500, 10000, '2019-04-21 02:02:38', '2019-04-21 02:02:38', NULL),
(62, 'TIAMINA X 100 ML', 8, 10150, 28677, 32700, 28300, '2019-04-21 02:03:11', '2019-04-21 02:03:11', NULL),
(63, 'UNGÜENTO 100 X 50 gr', 2, 4300, 4279, 4900, 4200, '2019-04-21 02:03:56', '2019-04-21 02:03:56', NULL),
(64, 'UNGÜENTO 100 X 120 gr', 2, 10450, 10393, 11900, 10300, '2019-04-21 02:04:27', '2019-04-21 02:04:27', NULL),
(65, 'UNGÜENTO 100 X 300 gr', 2, 17250, 20909, 26600, 20500, '2019-04-21 02:04:58', '2019-04-21 02:04:58', NULL),
(66, 'VERDEMINT X 50 gr', 1, 10400, 8270, 11900, 10200, '2019-04-21 02:05:44', '2019-04-21 02:05:44', NULL),
(67, 'VERDEMINT X 300 gr', 1, 23450, 23342, 26600, 23000, '2019-04-21 02:06:22', '2019-04-21 02:06:22', NULL),
(68, 'VIGAERMA X 10 ML', 8, 7500, 0, 0, 7000, '2019-04-21 02:06:40', '2019-04-21 02:49:06', NULL),
(69, 'VIGAERMA X 50 ML', 8, 26600, 0, 0, 25700, '2019-04-21 02:07:08', '2019-04-21 02:49:42', NULL),
(70, 'VIGAERMA X 100 ML', 8, 0, 0, 0, 34600, '2019-04-21 02:07:37', '2019-04-21 02:49:21', NULL),
(71, 'VIGAERMA X 250 ML', 8, 74850, 0, 0, 72400, '2019-04-21 02:08:05', '2019-04-21 02:49:33', NULL),
(72, 'VIGAERMA X 500 ML', 8, 133000, 0, 0, 132000, '2019-04-21 02:08:33', '2019-04-21 02:49:52', NULL),
(73, 'VIGAERMA ORAL X 20 ML', 8, 900, 0, 1300, 1100, '2019-04-21 02:10:03', '2019-04-21 22:58:28', NULL),
(74, 'RINGER LACTATO X 500', 7, 2000, 0, 2600, 2400, '2019-04-21 02:10:28', '2019-04-21 02:47:32', NULL),
(75, 'RINGER LACTATO CV X 1500', 7, 6550, 0, 7600, 5600, '2019-04-21 02:11:00', '2019-04-21 02:47:20', NULL),
(76, 'CANAPET X 300 gr', 8, 11000, 10970, 13500, 10000, '2019-04-21 02:11:31', '2019-04-21 02:11:31', NULL),
(77, 'GLUCONATO DE CALCIO X 80 TAB', 8, 16550, 15783, 18100, 15000, '2019-04-21 02:12:03', '2019-04-21 02:12:03', NULL),
(78, 'JABON PIOJIDERMA X 100 gr', 3, 4350, 4335, 4600, 4300, '2019-04-21 02:12:30', '2019-04-21 02:12:30', NULL),
(79, 'PULFEN N DOS X 1 ML', 3, 7300, 8123, 9300, 8700, '2019-04-21 02:12:56', '2019-04-21 02:12:56', NULL),
(80, 'PULFEN N DOS X 3.2 ML', 3, 11600, 10806, 13800, 12950, '2019-04-21 02:13:23', '2019-04-21 02:13:23', NULL),
(81, 'VERMACAP X 5 ML', 3, 4150, 0, 4400, 4000, '2019-04-21 02:13:45', '2019-04-21 02:48:14', NULL),
(82, 'DERMAPEL X 300 gr', 8, 18500, 17506, 21400, 16500, '2019-04-21 02:14:11', '2019-04-21 02:14:11', NULL),
(83, 'STOPPAR X 5 ML', 3, 4200, 5224, 4800, 4900, '2019-04-21 02:14:39', '2019-04-21 02:14:39', NULL),
(84, 'VERRUEX X 50 ML', 5, 25800, 25676, 29500, 24200, '2019-04-21 02:15:20', '2019-04-21 02:15:20', NULL),
(85, 'VERRUEX X 250 ML', 5, 76550, 76138, 82300, 71800, '2019-04-21 02:15:59', '2019-04-21 02:15:59', NULL),
(86, 'VITAMINA K X 20 ML', 8, 9200, 9670, 9900, 9300, '2019-04-21 02:16:26', '2019-04-21 02:16:26', NULL),
(87, 'XILACINA 2% X 20 ML', 6, 35200, 43987, 41000, 37000, '2019-04-21 02:16:57', '2019-04-21 02:16:57', NULL),
(88, 'XILACINA 10% X 50 ML', 6, 76000, 75582, 0, 75000, '2019-04-21 02:17:31', '2019-04-21 02:50:01', NULL),
(89, 'SULFADIAZIDINA  X 60 ML', 1, 9150, 8335, 8900, 8200, '2019-04-21 02:17:58', '2019-04-21 02:17:58', NULL),
(90, 'TONCAVIT  X 50 ML', 8, 15650, 14335, 0, 15400, '2019-04-21 02:18:25', '2019-04-21 02:47:58', NULL),
(91, 'TONCAVIT  X 100 ML', 8, 22900, 21350, 0, 22500, '2019-04-21 02:18:49', '2019-04-21 02:47:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proveedors`
--

CREATE TABLE `proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_proveedor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proveedors`
--

INSERT INTO `proveedors` (`id`, `nombre_proveedor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AGROCOSUR', NULL, NULL, NULL),
(2, 'CENTRALPECUARIA', NULL, NULL, NULL),
(3, 'DISPROVET', NULL, NULL, NULL),
(4, 'ERMA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_productos`
--

CREATE TABLE `tipo_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_tipo_producto` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipo_productos`
--

INSERT INTO `tipo_productos` (`id`, `nombre_tipo_producto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Antibióticos', NULL, NULL, NULL),
(2, 'Antiinflamatórios y Analgésicos', NULL, NULL, NULL),
(3, 'Antiparasitários', NULL, NULL, NULL),
(4, 'Hormonales', NULL, NULL, NULL),
(5, 'Otros', NULL, NULL, NULL),
(6, 'Preanestésicos', NULL, NULL, NULL),
(7, 'Soluciones Rehidratantes', NULL, NULL, NULL),
(8, 'Vitaminas y Minerales', NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `proveedor_id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_venta` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_tipo_producto_id_foreign` (`tipo_producto_id`);

--
-- Indexes for table `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_productos`
--
ALTER TABLE `tipo_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_producto_id_foreign` (`producto_id`),
  ADD KEY `ventas_proveedor_id_foreign` (`proveedor_id`),
  ADD KEY `ventas_cliente_id_foreign` (`cliente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipo_productos`
--
ALTER TABLE `tipo_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_tipo_producto_id_foreign` FOREIGN KEY (`tipo_producto_id`) REFERENCES `tipo_productos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_proveedor_id_foreign` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
