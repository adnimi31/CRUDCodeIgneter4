-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-05-22-113912', 'App\\Database\\Migrations\\Daftarnegara', 'default', 'App', 1621700740, 1),
(2, '2021-05-22-120449', 'App\\Database\\Migrations\\Users', 'default', 'App', 1621700740, 1);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id` int(5) UNSIGNED NOT NULL,
  `namanegara` varchar(255) NOT NULL,
  `kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `namanegara`, `kota`) VALUES
(1, 'Pitcairn Islands', 'Carrolltown'),
(2, 'Peru', 'Zemlakbury'),
(3, 'Antarctica (the territory South of 60 deg S)', 'South Anyafurt'),
(4, 'Gibraltar', 'Myahfort'),
(5, 'Bermuda', 'Lake Cordiaborough'),
(6, 'Qatar', 'Weberton'),
(7, 'Falkland Islands (Malvinas)', 'Mateoborough'),
(8, 'Dominican Republic', 'East Lilliefurt'),
(9, 'British Virgin Islands', 'Randallfort'),
(10, 'El Salvador', 'East Vestaport'),
(11, 'Solomon Islands', 'Brekkeside'),
(12, 'Russian Federation', 'Leschview'),
(13, 'Russian Federation', 'West Taylor'),
(14, 'Ethiopia', 'Jerrellview'),
(15, 'Mauritius', 'West Gianni'),
(16, 'Pitcairn Islands', 'West Haley'),
(17, 'Honduras', 'East Derekfort'),
(18, 'Tajikistan', 'Delilahhaven'),
(19, 'Mayotte', 'Port Tiffanytown'),
(20, 'Azerbaijan', 'Okunevaborough'),
(21, 'Brunei Darussalam', 'West Kadechester'),
(22, 'Niue', 'South Kasandraview'),
(23, 'Uzbekistan', 'McLaughlinside'),
(24, 'Slovenia', 'Port Sherwoodstad'),
(25, 'Papua New Guinea', 'Bethton'),
(26, 'Antarctica (the territory South of 60 deg S)', 'North Salma'),
(27, 'Guinea', 'Turcotteview'),
(28, 'Nigeria', 'South Josiahborough'),
(29, 'Belarus', 'South Araceliside'),
(30, 'Mauritius', 'South Evelinebury'),
(31, 'Barbados', 'New Jalen'),
(32, 'Iran', 'New Emelie'),
(33, 'Argentina', 'East Sebastian'),
(34, 'Qatar', 'South Magdalenaland'),
(35, 'Sudan', 'New Darian'),
(36, 'Ukraine', 'Quigleyshire'),
(37, 'Micronesia', 'Metztown'),
(38, 'Albania', 'East Jeffville'),
(39, 'Haiti', 'New Marcelinafort'),
(40, 'Croatia', 'Venafurt'),
(41, 'Saint Pierre and Miquelon', 'North Rahsaan'),
(42, 'Ecuador', 'Leoville'),
(43, 'Comoros', 'Sabrinaberg'),
(44, 'Morocco', 'Borerfurt'),
(45, 'Dominica', 'Lake Marjorie'),
(46, 'Brazil', 'South Berthamouth'),
(47, 'Guadeloupe', 'South Joanne'),
(48, 'Korea', 'East Isabelfort'),
(49, 'Guinea', 'South Thelma'),
(50, 'Barbados', 'North Leopoldomouth'),
(51, 'Estonia', 'Julieshire'),
(52, 'Mayotte', 'West Georgiana'),
(53, 'French Southern Territories', 'South Dakota'),
(54, 'Western Sahara', 'Parkerborough'),
(55, 'Turkmenistan', 'Boyerberg'),
(56, 'Estonia', 'Randallport'),
(57, 'Zambia', 'Ashtynburgh'),
(58, 'Martinique', 'Frankieland'),
(59, 'Luxembourg', 'West Gordonborough'),
(60, 'Belize', 'West Raymundomouth'),
(61, 'Dominica', 'Port Irma'),
(62, 'Haiti', 'Port Hoseaview'),
(63, 'Finland', 'South Dayton'),
(64, 'Equatorial Guinea', 'Port Hardymouth'),
(65, 'Niger', 'North Joshua'),
(66, 'Saudi Arabia', 'North Evangelinechester'),
(67, 'Norway', 'Emmettberg'),
(68, 'Philippines', 'Dorisport'),
(69, 'Tanzania', 'West Loren'),
(70, 'Svalbard & Jan Mayen Islands', 'South Robyn'),
(71, 'Algeria', 'Mannfurt'),
(72, 'Dominica', 'Lake Neoma'),
(73, 'Qatar', 'Beverlyshire'),
(74, 'Chad', 'East Janiefurt'),
(75, 'New Caledonia', 'Jillianton'),
(76, 'Ireland', 'Henryhaven'),
(77, 'Kyrgyz Republic', 'McKenzieport'),
(78, 'Micronesia', 'South Georgeberg'),
(79, 'Nauru', 'Elizabethville'),
(80, 'United States of America', 'Hahnburgh'),
(81, 'Montenegro', 'West Travis'),
(82, 'Dominica', 'Lennieville'),
(83, 'Nicaragua', 'New Boydport'),
(84, 'Monaco', 'Andytown'),
(85, 'Finland', 'Jamieton'),
(86, 'Burkina Faso', 'Shanelleville'),
(87, 'Guinea', 'Olsonland'),
(88, 'Denmark', 'Brookstown'),
(89, 'Nauru', 'Beattyhaven'),
(90, 'Liberia', 'Eichmannchester'),
(91, 'Faroe Islands', 'Toniside'),
(92, 'Niue', 'East Ollieview'),
(93, 'Netherlands', 'Russelhaven'),
(94, 'Papua New Guinea', 'Ceasarstad'),
(95, 'Chile', 'East Timothy'),
(96, 'Peru', 'New Bella'),
(97, 'Malaysia', 'New Freeda'),
(98, 'British Virgin Islands', 'New Websterview'),
(99, 'Tuvalu', 'Grahamport'),
(100, 'Grenada', 'East Amparoland'),
(101, 'Uganda', 'Sawayntown'),
(102, 'Seychelles', 'Lake Kayleyville'),
(103, 'Sudan', 'South Monroemouth'),
(104, 'Croatia', 'West Orenton'),
(105, 'Niger', 'West Jairofort'),
(106, 'Iran', 'Louveniamouth'),
(107, 'Guatemala', 'Marquardtbury'),
(108, 'Kenya', 'West Jermainville'),
(109, 'Mali', 'Juliettown'),
(110, 'Malaysia', 'Danielborough'),
(111, 'Morocco', 'Zoilastad'),
(112, 'Philippines', 'Langborough'),
(113, 'French Polynesia', 'West Dedrick'),
(114, 'Yemen', 'Liamtown'),
(115, 'Indonesia', 'South Marianne'),
(116, 'Saint Lucia', 'New Othomouth'),
(117, 'Oman', 'Trystanborough'),
(118, 'Uruguay', 'Port Rozella'),
(119, 'Turkey', 'Kenyattaton'),
(120, 'Tuvalu', 'Kareemchester'),
(121, 'Algeria', 'Vergieberg'),
(122, 'Armenia', 'Parkermouth'),
(123, 'Ireland', 'North Charlieborough'),
(124, 'Barbados', 'Port Erichside'),
(125, 'Kuwait', 'Crooksfort'),
(126, 'Mali', 'Lake Jerrod'),
(127, 'Reunion', 'Hermannport'),
(128, 'British Virgin Islands', 'Walterfurt'),
(129, 'Namibia', 'Lake Ginaview'),
(130, 'Sri Lanka', 'New Sarah'),
(131, 'Solomon Islands', 'Whitehaven'),
(132, 'Colombia', 'Mrazburgh'),
(133, 'Rwanda', 'Port Pinkiechester'),
(134, 'Costa Rica', 'Lake Revafurt'),
(135, 'Guernsey', 'Port Nialand'),
(136, 'Eritrea', 'Gerholdstad'),
(137, 'Isle of Man', 'Casperton'),
(138, 'Tokelau', 'Turcottestad'),
(139, 'Iran', 'Ellenmouth'),
(140, 'Malawi', 'Savannahville'),
(141, 'Palestinian Territories', 'Schaeferchester'),
(142, 'Macedonia', 'East Justinaberg'),
(143, 'Paraguay', 'West Zelda'),
(144, 'Bangladesh', 'Chesleymouth'),
(145, 'New Caledonia', 'Lake Demond'),
(146, 'Namibia', 'Summerstad'),
(147, 'Burundi', 'Johnathanburgh'),
(148, 'British Virgin Islands', 'Wilmahaven'),
(149, 'Malaysia', 'Clementinafurt'),
(150, 'Tokelau', 'Port Patmouth'),
(151, 'United Kingdom', 'East Reva'),
(152, 'Eritrea', 'Nealshire'),
(153, 'Guernsey', 'Sethhaven'),
(154, 'Latvia', 'North Camilla'),
(155, 'Brunei Darussalam', 'Vallieburgh'),
(156, 'Dominican Republic', 'New Chaunceyshire'),
(157, 'Lebanon', 'Port Janebury'),
(158, 'Somalia', 'West Kyleberg'),
(159, 'French Guiana', 'Gordonton'),
(160, 'United States Minor Outlying Islands', 'South Darrionton'),
(161, 'Guadeloupe', 'East Brandtfurt'),
(162, 'Belarus', 'Lake Tremaine'),
(163, 'Latvia', 'East Oma'),
(164, 'Armenia', 'Port Clemensville'),
(165, 'Ireland', 'South Axelberg'),
(166, 'Japan', 'West King'),
(167, 'Tonga', 'Hillshaven'),
(168, 'Tajikistan', 'North Ayana'),
(169, 'Norway', 'South Bradfordberg'),
(170, 'France', 'Hicklebury'),
(171, 'South Georgia and the South Sandwich Islands', 'Port Savanah'),
(172, 'Myanmar', 'Lake Alexandrine'),
(173, 'Venezuela', 'Tyreseburgh'),
(174, 'Iran', 'Lake Albina'),
(175, 'Korea', 'Kundeside'),
(176, 'Cape Verde', 'Ilianashire'),
(177, 'Thailand', 'Kertzmannberg'),
(178, 'Ethiopia', 'Port Myrtle'),
(179, 'Gabon', 'Kellenbury'),
(180, 'Guam', 'North Giannimouth'),
(181, 'Finland', 'West Annetta'),
(182, 'Thailand', 'West Patstad'),
(183, 'Saint Martin', 'Mertieview'),
(184, 'Benin', 'Parisiantown'),
(185, 'Macedonia', 'Tremblayview'),
(186, 'Turks and Caicos Islands', 'North Zeldaview'),
(187, 'Brunei Darussalam', 'North Lelah'),
(188, 'Guernsey', 'Generaltown'),
(189, 'Sao Tome and Principe', 'Halvorsonport'),
(190, 'Niger', 'West Andreaneport'),
(191, 'Kenya', 'Abdielborough'),
(192, 'Faroe Islands', 'Reidborough'),
(193, 'Uruguay', 'East Marguerite'),
(194, 'San Marino', 'South Yesenia'),
(195, 'Namibia', 'South Elisafort'),
(196, 'Greece', 'Bucktown'),
(197, 'Maldives', 'New Gusside'),
(198, 'Somalia', 'Madelineshire'),
(199, 'Martinique', 'Coleton'),
(200, 'Niger', 'Raymondmouth');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto`, `nama`, `alamat`, `nohp`) VALUES
(1, '1621700787_ac9ba66f9e05309dee23.jpg', 'coba', 'Jl. coba no.22', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
