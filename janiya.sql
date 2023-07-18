-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 01:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Go-Green`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Augustus Ledner', 'chrimu25@gmail.com', '+17347179880', '2022-02-17 18:55:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OUE93MUPbNtC706l00loKVQwkBFlON4Os2cdAwfH35kyegLFfIfUtXlJY4Rs', '2022-02-17 18:55:56', '2022-02-17 18:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#7d4545', NULL, NULL),
(2, 'Green', '#255', NULL, NULL),
(3, 'best red', '#7d4545', '2022-03-01 01:49:10', '2022-03-01 01:49:10'),
(5, 'green ever', '#89d29b', '2022-03-01 01:49:52', '2022-03-01 01:49:52'),
(6, 'Mixed color', '#000000', '2022-03-03 18:39:07', '2022-03-03 18:39:07'),
(7, 'Kaki', '#f4e09a', '2022-03-03 18:47:06', '2022-03-03 18:47:06'),
(8, 'Gray', '#707070', '2022-03-03 18:47:19', '2022-03-03 18:47:19'),
(9, 'Brown', '#3d1414', '2022-03-03 18:48:00', '2022-03-03 18:48:00'),
(10, 'Pink', '#af4197', '2022-03-03 18:48:20', '2022-03-03 18:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` enum('Bronze','Silver','Gold','Platinum') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Bronze',
  `rate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Bronze', 2.00, NULL, NULL),
(2, 'Silver', 2.50, NULL, NULL),
(3, 'Gold', 3.00, NULL, NULL),
(4, 'Platinum', 3.50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Fixed','Percentage') COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_at` date DEFAULT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `coupon_code`, `type`, `expire_at`, `value`, `created_at`, `updated_at`) VALUES
(4, 'FamilyFirst01', 'familyfirst01', 'Percentage', '2022-09-10', 20, '2022-02-18 08:08:12', '2022-02-18 08:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(101, 'Nyarugenge', NULL, NULL),
(102, 'Gasabo', NULL, NULL),
(103, 'Kicukiro', NULL, NULL),
(201, 'Nyanza', NULL, NULL),
(202, 'Gisagara', NULL, NULL),
(203, 'Nyaruguru', NULL, NULL),
(204, 'Huye', NULL, NULL),
(205, 'Nyamagabe', NULL, NULL),
(206, 'Ruhango', NULL, NULL),
(207, 'Muhanga', NULL, NULL),
(208, 'Kamonyi', NULL, NULL),
(301, 'Karongi', NULL, NULL),
(302, 'Rutsiro', NULL, NULL),
(303, 'Rubavu', NULL, NULL),
(304, 'Nyabihu', NULL, NULL),
(305, 'Ngororero', NULL, NULL),
(306, 'Rusizi', NULL, NULL),
(307, 'Nyamasheke', NULL, NULL),
(401, 'Rulindo', NULL, NULL),
(402, 'Gakenke', NULL, NULL),
(403, 'Musanze', NULL, NULL),
(404, 'Burera', NULL, NULL),
(405, 'Gicumbi', NULL, NULL),
(501, 'Rwamagana', NULL, NULL),
(502, 'Nyagatare', NULL, NULL),
(503, 'Gatsibo', NULL, NULL),
(504, 'Kayonza', NULL, NULL),
(505, 'Kirehe', NULL, NULL),
(506, 'Ngoma', NULL, NULL),
(507, 'Bugesera', NULL, NULL);

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
(5, '2022_02_15_234856_create_product_categories_table', 1),
(6, '2022_02_16_072723_create_colors_table', 1),
(7, '2022_02_16_090948_create_product_sizes_table', 1),
(8, '2022_02_16_104143_create_admins_table', 1),
(9, '2022_02_16_104200_create_vendors_table', 1),
(10, '2022_02_16_105921_create_products_table', 1),
(12, '2022_02_16_234239_create_carts_table', 1),
(13, '2022_02_17_075716_add_shop_name_to_vendors_table', 1),
(15, '2022_02_17_101804_add_clicks_to_users_table', 1),
(16, '2022_02_17_123808_create_transactions_table', 1),
(24, '2022_02_18_075702_create_coupons_table', 3),
(25, '2022_02_18_085650_create_commissions_table', 3),
(26, '2022_02_18_085906_add_level_to_users_table', 4),
(28, '2022_02_21_063543_add_details_to_vendors_table', 5),
(34, '2022_02_21_081213_add_slug_to_products_table', 8),
(35, '2022_02_23_070817_add_shipping_info_to_users_table', 9),
(36, '2022_02_23_113337_add_addiotional_fees_to_product_sizes_table', 10),
(40, '2022_02_23_115543_create_stores_table', 13),
(43, '2022_02_23_120347_create_product_images_table', 14),
(44, '2022_02_23_123842_add_price_to_products_table', 15),
(48, '2022_02_27_164151_create_product_attributes_table', 16),
(49, '2022_02_27_164914_create_store_attributes_table', 16),
(51, '2022_02_28_102534_add_status_to_store_attributes_table', 17),
(52, '2022_02_28_102950_create_shop_orders_table', 17),
(53, '2022_02_28_183638_add_size_to_store_attributes_table', 18),
(64, '2022_03_02_095518_create_orders_table', 19),
(65, '2022_03_02_095629_create_order_items_table', 19),
(66, '2022_03_03_114616_create_districts_table', 20),
(67, '2022_03_03_122452_add_banner_to_vendors_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promoter` bigint(20) UNSIGNED DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` decimal(10,0) NOT NULL,
  `payment_method` enum('On Delivery','Card','Phone') COLLATE utf8mb4_unicode_ci DEFAULT 'On Delivery',
  `Status` enum('Pending','Paid','On Delivery','Completed','Error','Cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNo`, `user_id`, `name`, `email`, `phone`, `address`, `street`, `neighborhood`, `promoter`, `discount`, `total`, `payment_method`, `Status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Order000001', 1, 'Jack Saunders', 'jupyqane@mailinator.com', '0787786573', 'Kigali, Nyarugenge, Karuruma', 'KN 25 Street', 'Gatsata', 2, 1000, '4000', 'On Delivery', 'Error', NULL, '2022-03-01 19:08:52', '2022-03-03 06:49:15'),
(3, 'Order000002', 3, 'Ima Schaefer', 'test@exa.com', '07854564', 'Kigali', 'KG 14 Ave', 'Rugando', NULL, NULL, '5000', 'Phone', 'Paid', NULL, '2022-03-03 07:40:49', '2022-03-03 06:50:24'),
(6, 'Order000004', 1, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '15000', 'On Delivery', 'Error', NULL, '2022-03-03 17:39:05', '2022-03-03 17:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `shop` bigint(20) UNSIGNED DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(9,0) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `shop`, `color`, `size`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'green ever', 'XL', '2500', 2, '2022-03-02 16:16:39', '2022-03-02 16:16:39'),
(2, 1, 1, 1, 'Red', 'M', '7000', 4, NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,0) DEFAULT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `product_category_id`, `description`, `product_image`, `created_at`, `updated_at`) VALUES
(7, 'short sleeved Polo t\'shirt with piping', 'short-sleeved-polo-tshirt-with-piping', '6619', 2, 'Color: Black and white; Style: Neckless Polo t\'shirt; Pattern type: Ligne; Season: All; Sleeve length: short; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 70%; spandex: 30%\n\n\n', 'null', '2022-03-03 17:54:37', '2022-03-03 17:54:37'),
(8, 'Long sleeved Polo t\'shirt with piping ', 'long-sleeved-polo-tshirt-with-piping', '10800', 2, 'Color: Black and white; Style: Neckless Polo t\'shirt; Pattern type: Ligne; Season: All; Sleeve length: short; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 70%; spandex: 30%\n', 'null', '2022-03-03 18:03:01', '2022-03-03 18:03:01'),
(9, 'POLO T-Shirt', 'polo-t-shirt', '10800', 2, 'Color: Black and white; Style: Neckless Polo t\'shirt; Pattern type: Ligne; Season: All; Sleeve length: short; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 70%; spandex: 30%', 'null', '2022-03-03 18:04:33', '2022-03-03 18:04:33'),
(10, 'Longsleeve shirt (High Quality) for men', 'longsleeve-shirt-high-quality-for-men', '20250', 2, 'Color:Mixed  Style: Shirt; Pattern type: Mixed ; Season: All; fit type: Regular; Sleeve length: long; Fabric: fine cotton ; Composition: cotton 100%\n', 'null', '2022-03-03 18:06:40', '2022-03-03 18:06:40'),
(11, 'Round neck t\'shirts ', 'round-neck-tshirts', '4995', 1, 'Color:white, Red, navy blue & black; Style: Round neck t-shirt; Pattern type: plain; Season: Summer; Sleeve length: short; fit type: Regular; Fabric: cotton Material: Cotton; Composition: Cotton 95%; spandex: 5%\n\n\n', 'null', '2022-03-03 18:09:11', '2022-03-03 18:09:11'),
(12, 'Baby floral bow dress', 'baby-floral-bow-dress', '8775', 1, 'Color: Mixed Style: Dress; Pattern type: floral; Season: All; Sleeve length: sleeveless; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 100%\n\n', 'null', '2022-03-03 18:10:38', '2022-03-03 18:10:38'),
(13, 'Velvet bodycon long slay dress (single color)', 'velvet-bodycon-long-slay-dress-single-color', '6075', 3, 'Color:Red, maroon, blue; Style: bodycon dress; Pattern type: Plain; Season: Summer; Sleeve length: sleeveless; fit type: Regular; Fabric: velvet Material: cotton; Composition: cotton 100%\n', 'null', '2022-03-03 18:13:47', '2022-03-03 18:13:47'),
(14, 'Stripped T\'shirt dresses with cap', 'stripped-tshirt-dresses-with-cap', '11475', 3, 'Color:Mixed, blue; Style: t\'shirt dress; Pattern type: Mixed ; Season: Summer; Sleeve length: short; fit type: Regular; Fabric: spandex Material: cotton; Composition: cotton 70%, spandex: 30%', 'null', '2022-03-03 18:15:08', '2022-03-03 18:15:08'),
(15, 'Kimono with design', 'kimono-with-design', '12150', 3, 'Color:Mixed  Style: Kimono; Pattern type: Plain and Mixed ; Season: All; fit type: Regular; Sleeve length: half long; Fabric: fine cotton ; Composition: cotton 100%\n', 'null', '2022-03-04 03:31:25', '2022-03-04 03:31:25'),
(16, 'Barbie Top Dress', 'barbie-top-dress', '10800', 3, 'Color:Mixed; Style: Top Dress; Pattern type: Mixed; Season: Summer; Sleeve length: short; fit type: Regular; Fabric: cotton Material: polyestrer; Composition: Polyester 65%; spandex: 5%', 'null', '2022-03-04 03:34:33', '2022-03-04 03:34:33'),
(17, 'Pleated baby dress', 'pleated-baby-dress', '10125', 1, 'Color: Mixed Style: Dress; Pattern type: floral; Season: All; Sleeve length: sleeveless; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 100%\n', 'null', '2022-03-04 03:36:46', '2022-03-04 03:36:46'),
(18, 'POLO T-Shirt for kids', 'polo-t-shirt-for-kids', '6075', 1, 'Color:Mixed; Style: Polo t\'shirt; Pattern type: mixed; Season: All; Sleeve length: short; fit type: Regular; Fabric: Stretch; Material: Cotton; Composition: Cotton 75%; polyester:25%\n\n\n', 'null', '2022-03-04 03:39:55', '2022-03-04 03:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `product_size_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `color_id`, `product_size_id`, `image`, `quantity`, `created_at`, `updated_at`) VALUES
(8, 7, 1, 1, 'public/products/gallery/color/jsy0PFHRvZLSW9d1dLV1lej8FE6TLfMwCqEC9giP.jpg', 10, '2022-03-03 17:54:38', '2022-03-03 17:56:25'),
(9, 8, 1, 3, 'public/products/gallery/color/R1oppzJj5xuHUibdjoQ9VYKMgARIdbjbrnxnf1Ne.jpg', 10, '2022-03-03 18:03:01', '2022-03-03 18:03:01'),
(10, 8, 2, 1, 'public/products/gallery/color/yAZSfCKEXy1OdTc2uyzhPAFAwRV5IFWsMMaldoNS.jpg', 10, '2022-03-03 18:03:02', '2022-03-03 18:03:02'),
(11, 8, 3, 4, 'public/products/gallery/color/e4HS8pjm2B2jDEU597jXAbKRLP5m1Zn7h7KIYhT9.jpg', 10, '2022-03-03 18:03:02', '2022-03-03 18:03:02'),
(12, 9, 2, 1, 'public/products/gallery/color/x9sos3vJLo2sohXSKFBxxrEctOEpQg5739tXJRgd.jpg', 10, '2022-03-03 18:04:34', '2022-03-03 18:04:34'),
(13, 9, 2, 2, 'public/products/gallery/color/PBobhrYycdSVPksNDlMd86eAIkKOua16HmViL5VM.jpg', 10, '2022-03-03 18:04:34', '2022-03-03 18:04:34'),
(14, 10, 5, 1, 'public/products/gallery/color/JMXlZi7hncUz0I3cPc9uwg4teScdayTg53WjmM3e.jpg', 20, '2022-03-03 18:06:40', '2022-03-03 18:06:40'),
(15, 10, 1, 3, 'public/products/gallery/color/kedePR2tB2736EYIr0XwhFkVSeIK5FNS70UfJwSz.jpg', 10, '2022-03-03 18:06:41', '2022-03-03 18:06:41'),
(16, 11, 1, 1, 'public/products/gallery/color/Q5Ueokh40Xhgjjt3hbOI6PD2i3W0LraBrDv5MIA7.jpg', 10, '2022-03-03 18:09:11', '2022-03-03 18:09:11'),
(17, 12, 3, 4, 'public/products/gallery/color/MxD0ad22iGbtnRAjVvwzlx8LPhmWJSenKTiD8HSY.jpg', 20, '2022-03-03 18:10:38', '2022-03-03 18:10:38'),
(18, 12, 2, 1, 'public/products/gallery/color/Igax0VTyarmBE2zJc6MSnJgbpH73kYHSrdKMNGBJ.jpg', 10, '2022-03-03 18:10:38', '2022-03-03 18:10:38'),
(19, 13, 2, 3, 'public/products/gallery/color/GdK6lttBAAdVCutaOqS9tasFfuWcEF9Pf9B21Hyv.jpg', 10, '2022-03-03 18:13:47', '2022-03-03 18:13:47'),
(20, 14, 3, 1, 'public/products/gallery/color/BwLpxuKgOB8afObcIfoTKcYT6jhOOlYYqFNOw2jf.jpg', 10, '2022-03-03 18:15:08', '2022-03-03 18:15:08'),
(21, 15, 8, 2, 'public/products/gallery/color/D2ZoAx2xQiAXKrGQvwFobTkkXPJJxATzN1xFDdnH.jpg', 20, '2022-03-04 03:31:26', '2022-03-04 03:31:26'),
(22, 15, 9, 4, 'public/products/gallery/color/dQct2EjSmmw44rgdqOS2jgWbn3XWs4O9BN9uZ3G0.jpg', 20, '2022-03-04 03:31:26', '2022-03-04 03:31:26'),
(23, 15, 7, 2, 'public/products/gallery/color/XRDVlkTGNQUc9YAegHqErqtew8MEt0vfTYxldZjD.jpg', 20, '2022-03-04 03:31:26', '2022-03-04 03:31:26'),
(24, 16, 9, 2, 'public/products/gallery/color/xnbDYS8cOIH2ep7y54nO2zgaa3TS2h4uItfxv7R4.jpg', 50, '2022-03-04 03:34:33', '2022-03-04 03:34:33'),
(25, 16, 6, 1, 'public/products/gallery/color/Q5WTou0LgnK7mbGXkCTMptWXz05HbNE3gbXcS8VH.jpg', 50, '2022-03-04 03:34:33', '2022-03-04 03:34:33'),
(26, 16, 6, 4, 'public/products/gallery/color/vcY1tjZi0eQQXmSGkVscdGbjcl2zuX7H2R3KOdNR.jpg', 30, '2022-03-04 03:34:33', '2022-03-04 03:34:33'),
(27, 17, 6, 4, 'public/products/gallery/color/lhRb10aEnHaiWDwyBDr9pJcbZ81E6zIpDdqzM2BC.jpg', 50, '2022-03-04 03:36:47', '2022-03-04 03:36:47'),
(28, 17, 6, 1, 'public/products/gallery/color/psel5HnpDUgkT7T7IWj3bneC75TVEMDgAaoK3JDD.jpg', 30, '2022-03-04 03:36:47', '2022-03-04 03:36:47'),
(29, 18, 6, 4, 'public/products/gallery/color/qIBSbwDLR2oyGW00b06jBWN9pK3rhZS0Alc2HZgq.jpg', 30, '2022-03-04 03:39:55', '2022-03-04 03:39:55'),
(30, 18, 6, 1, 'public/products/gallery/color/EkXFvJ4Jt87wlwpmprVeSlqRcVA7qFbSiQFtRRzC.jpg', 20, '2022-03-04 03:39:55', '2022-03-04 03:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Kids', '', NULL, NULL),
(2, 'Men', '', NULL, NULL),
(3, 'Women', '', NULL, NULL),
(4, 'Unisex', '202203032040343241.jpg', '2022-03-03 18:40:34', '2022-03-03 18:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(25, 7, 'public/products/gallery/xwdkiKoVeSMnkAG9Ee1nIStLnDVeZkgPUluBsHZR.jpg', '2022-03-03 17:54:37', '2022-03-03 17:54:37'),
(26, 8, 'public/products/gallery/r60BlJyT3VmMH6CuWCt5oWDMXwwybM4HuFBmxmM6.jpg', '2022-03-03 18:03:01', '2022-03-03 18:03:01'),
(27, 9, 'public/products/gallery/D6bDRaQ0BVhyrwao9DihvfvuBPBD7AnpwG0ixlkA.jpg', '2022-03-03 18:04:33', '2022-03-03 18:04:33'),
(28, 10, 'public/products/gallery/Cbn9wk32rla9TMi7mnmwA6CR3NB1r4r9HtUyzcmC.jpg', '2022-03-03 18:06:40', '2022-03-03 18:06:40'),
(29, 11, 'public/products/gallery/dBR0ohO29xTcWod1vAoUXEggspbDAEa9C2Fkt5Ds.jpg', '2022-03-03 18:09:11', '2022-03-03 18:09:11'),
(30, 12, 'public/products/gallery/P4dO0nmo2spcXJ9V8DUahXXVcdkKGFJnZFKMukDI.jpg', '2022-03-03 18:10:38', '2022-03-03 18:10:38'),
(31, 13, 'public/products/gallery/wqJEKqOBBnBVKvNlJWyth9zTVUcrhwnDaTpzWzqw.jpg', '2022-03-03 18:13:47', '2022-03-03 18:13:47'),
(32, 14, 'public/products/gallery/60vviHIuDvNVxA13M2qo5NttVxz1Ve7iSxA8p2UY.jpg', '2022-03-03 18:15:08', '2022-03-03 18:15:08'),
(33, 14, 'public/products/gallery/V6mCHsoFe9VX3X9QQUyZdzfpsXyMhSvajHehoX5U.jpg', '2022-03-03 18:15:08', '2022-03-03 18:15:08'),
(34, 14, 'public/products/gallery/jJCUIJTcsbYlz9kgA3JcT0Sc2J0wmD4X8fJr0EQl.jpg', '2022-03-03 18:15:08', '2022-03-03 18:15:08'),
(35, 15, 'public/products/gallery/7g9wUhwH59zbS2Hr6t7E8IS2EhwjDueITEn2wmmD.jpg', '2022-03-04 03:31:25', '2022-03-04 03:31:25'),
(36, 16, 'public/products/gallery/m0XAoumfile34CYwCWGTS4NxEkDLNvDfgZ3bVYLN.jpg', '2022-03-04 03:34:33', '2022-03-04 03:34:33'),
(37, 17, 'public/products/gallery/YOJznfFL5kwDta96a5e5w42KADpoaeA3XhVwY1aE.jpg', '2022-03-04 03:36:47', '2022-03-04 03:36:47'),
(38, 18, 'public/products/gallery/Tjp7DPfZGogzF0JlAgiQYFcR9wQIM27bVke2Xvh1.jpg', '2022-03-04 03:39:55', '2022-03-04 03:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_fees` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `size`, `additional_fees`, `created_at`, `updated_at`) VALUES
(1, 'M', NULL, NULL, NULL),
(2, 'L', NULL, NULL, NULL),
(3, 'XL', 500, NULL, NULL),
(4, 'S', NULL, NULL, NULL),
(5, 'XXL', 5000, '2022-02-23 10:18:41', '2022-02-23 10:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `shop_orders`
--

CREATE TABLE `shop_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` decimal(12,0) NOT NULL,
  `payment_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('Pending','Approved','Denied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_orders`
--

INSERT INTO `shop_orders` (`id`, `orderNo`, `store_id`, `total_amount`, `payment_confirmed`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Order000003', 3, '66190', 0, 'Pending', '2022-03-03 17:56:25', '2022-03-03 17:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `slug`, `vendor_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'short sleeved Polo t\'shirt with piping', 'short-sleeved-polo-tshirt-with-piping', 1, 7, '2022-03-03 17:56:24', '2022-03-03 17:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `store_attributes`
--

CREATE TABLE `store_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `product_size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `new_quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pre_order` tinyint(1) NOT NULL DEFAULT 0,
  `order_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `pre_order_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_attributes`
--

INSERT INTO `store_attributes` (`id`, `store_id`, `product_size_id`, `color_id`, `quantity`, `new_quantity`, `pre_order`, `order_confirmed`, `pre_order_confirmed`, `created_at`, `updated_at`) VALUES
(5, 3, 1, 1, 10, 0, 0, 1, 0, '2022-03-03 17:56:25', '2022-03-03 17:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tx_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charged_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor_response` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_total_sales` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `commission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `affiliate_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `clicks` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `promo_code`, `partner_total_sales`, `commission_id`, `affiliate_link`, `sales`, `clicks`, `active`, `address1`, `neighborhood`, `street_name`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AHORUPA Patrick', 'ahorupa@gmail.com', '250797935306', NULL, 0, NULL, 'hfnmvy332u', 3, 1, 1, 'Kigali, Gasabo, Kimihurura', 'Rugando', 'KK 3 Ave', '2022-02-17 18:55:55', '$2y$10$keHYpFpbL0UbGH1Dn2mjveoag5oNArnboIypdtXAOZ6A.VA4ZIvdO', NULL, 'dRTrdIieSD', '2022-02-17 18:55:55', '2022-03-02 16:36:04'),
(2, 'Elva Gleason', 'kyle75@example.com', '0703759716', 'elvag', 5, 1, NULL, 0, 0, 1, NULL, NULL, NULL, '2022-02-17 18:55:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'SEIg28B226', '2022-02-17 18:55:55', '2022-03-02 16:36:04'),
(3, 'Ms. Ima Schaefer II', 'joanne.lebsack@example.org', '+16264166097', NULL, 0, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2022-02-17 18:55:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'zNqrtQivu4', '2022-02-17 18:55:55', '2022-02-17 18:55:55'),
(4, 'Gustave Kautzer', 'witting.aubree@example.org', '+15415075714', NULL, 0, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2022-02-17 18:55:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'QyhWNbdrf6', '2022-02-17 18:55:55', '2022-02-17 18:55:55'),
(5, 'Prof. Willard Stamm', 'jbailey@example.net', '+19014817831', NULL, 0, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2022-02-17 18:55:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Uc3Y5AmjRA', '2022-02-17 18:55:55', '2022-02-17 18:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `shop_name`, `banner`, `district_id`, `email`, `phone`, `confirmed`, `active`, `details`, `slug`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Willow Stark', 'Moshions', NULL, 207, 'eric@gmail.com', '250782138738', 1, 1, 'In a pursuit to reveal beauty in fluidity, the Creative Director, Moses Turahirwa, designed an expressive collection with interplay of traditional and contemporary aesthetics. \r\nImandwa celebrates fashion freedom of ancient generations from across the African continent. It is timeless art that combines organic fabrics, natural dyes and high-end couture.', 'moshions', '2022-02-17 18:55:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Uibd38jZ7W', '2022-02-17 18:55:56', '2022-02-21 04:58:08'),
(2, 'Keenan Steuber', 'Tesila Collections', NULL, 403, 'rosalee86@example.com', '+17042971099', 0, 1, NULL, 'tesila-collections', '2022-02-17 18:55:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'itCLtmYTEY', '2022-02-17 18:55:56', '2022-02-17 18:55:56'),
(3, 'MISIGARO Nelson', 'Iwawe Shop', NULL, 503, 'misigaro@gmail.com', '0783344540', 1, 1, NULL, 'iwawe-shop', NULL, '$2y$10$W3h/tU1lpz/LAVdNq1xajeCd0dmoVOEPaMlGrBOIMu6laSFSXgPcK', NULL, NULL, '2022-02-18 08:58:39', '2022-02-18 08:58:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_name_unique` (`name`),
  ADD UNIQUE KEY `coupons_coupon_code_unique` (`coupon_code`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_orderno_unique` (`orderNo`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_promoter_foreign` (`promoter`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_shop_foreign` (`shop`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`),
  ADD KEY `product_attributes_color_id_foreign` (`color_id`),
  ADD KEY `product_attributes_product_size_id_foreign` (`product_size_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_orders`
--
ALTER TABLE `shop_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_orders_orderno_unique` (`orderNo`),
  ADD KEY `shop_orders_store_id_foreign` (`store_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stores_name_unique` (`name`),
  ADD UNIQUE KEY `stores_slug_unique` (`slug`),
  ADD KEY `stores_vendor_id_foreign` (`vendor_id`),
  ADD KEY `stores_product_id_foreign` (`product_id`);

--
-- Indexes for table `store_attributes`
--
ALTER TABLE `store_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_attributes_store_id_foreign` (`store_id`),
  ADD KEY `store_attributes_product_size_id_foreign` (`product_size_id`),
  ADD KEY `store_attributes_color_id_foreign` (`color_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_commission_id_foreign` (`commission_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`),
  ADD UNIQUE KEY `vendors_phone_unique` (`phone`),
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`),
  ADD KEY `vendors_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shop_orders`
--
ALTER TABLE `shop_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store_attributes`
--
ALTER TABLE `store_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_promoter_foreign` FOREIGN KEY (`promoter`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_shop_foreign` FOREIGN KEY (`shop`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_attributes_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `shop_orders`
--
ALTER TABLE `shop_orders`
  ADD CONSTRAINT `shop_orders_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stores_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `store_attributes`
--
ALTER TABLE `store_attributes`
  ADD CONSTRAINT `store_attributes_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `store_attributes_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`),
  ADD CONSTRAINT `store_attributes_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `commissions` (`id`);

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
