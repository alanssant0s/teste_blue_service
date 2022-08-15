-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 15, 2022 at 01:48 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_blue_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qtd` int(11) NOT NULL DEFAULT '1',
  `price` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`user_id`, `product_id`, `qtd`, `price`, `total`) VALUES
(1, 1, 2, 1297.00, 2594.00),
(1, 2, 2, 69.90, 139.80),
(1, 3, 2, 697.50, 1395.00);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, 'Categoria 1', '2022-08-13 12:04:12', '2022-08-13 12:05:13', NULL),
(2, 'Categoria 2', '2022-08-13 12:05:22', '2022-08-13 12:05:22', NULL),
(3, 'Categoria 3', '2022-08-13 12:06:18', '2022-08-13 12:06:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `created`, `modified`, `deleted`) VALUES
(1, 'Caracteristica 1', '2022-08-13 12:17:00', '2022-08-13 12:17:00', NULL),
(2, 'Caracteristica 2', '2022-08-13 12:17:13', '2022-08-13 12:17:13', NULL),
(3, 'Caracteristica 3', '2022-08-13 12:17:19', '2022-08-13 12:17:19', NULL),
(4, 'Caracteristica 4', '2022-08-13 12:17:25', '2022-08-13 12:17:25', NULL),
(5, 'Caracteristica 5', '2022-08-13 12:17:31', '2022-08-13 12:17:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `price` double(9,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `imagem`, `price`, `created`, `modified`, `deleted`) VALUES
(1, 'Produto 1', 'asdasdasdas', NULL, 1297.00, '2022-08-13 13:11:33', '2022-08-13 18:52:36', NULL),
(2, 'Produto 2', 'Descrição', NULL, 69.90, '2022-08-13 18:56:23', '2022-08-13 18:59:32', NULL),
(3, 'Produto 3', 'asdasd asd asd ad as das d', NULL, 697.50, '2022-08-13 19:00:30', '2022-08-13 19:00:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 1),
(2, 2),
(1, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `product_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`product_id`, `feature_id`) VALUES
(1, 1),
(2, 3),
(3, 4),
(1, 5),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` double(9,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `total`, `created`, `modified`, `deleted`) VALUES
(12, 1, 3459.40, '2022-08-15 00:35:17', '2022-08-15 00:35:17', NULL),
(13, 1, 3459.40, '2022-08-15 00:35:50', '2022-08-15 00:35:50', NULL),
(14, 1, 3459.40, '2022-08-15 00:35:57', '2022-08-15 00:35:57', NULL),
(15, 1, 3459.40, '2022-08-15 00:36:01', '2022-08-15 00:36:01', NULL),
(16, 1, 3459.40, '2022-08-15 00:36:18', '2022-08-15 00:36:18', NULL),
(17, 1, 3459.40, '2022-08-15 00:37:14', '2022-08-15 00:37:14', NULL),
(18, 1, 767.40, '2022-08-15 01:15:44', '2022-08-15 01:15:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_products`
--

CREATE TABLE `request_products` (
  `request_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `price` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_products`
--

INSERT INTO `request_products` (`request_id`, `product_id`, `qtd`, `price`, `total`) VALUES
(12, 1, 1, 1297.00, 1297.00),
(12, 2, 1, 69.90, 69.90),
(12, 3, 3, 697.50, 2092.50),
(13, 1, 1, 1297.00, 1297.00),
(13, 2, 1, 69.90, 69.90),
(13, 3, 3, 697.50, 2092.50),
(14, 1, 1, 1297.00, 1297.00),
(14, 2, 1, 69.90, 69.90),
(14, 3, 3, 697.50, 2092.50),
(15, 1, 1, 1297.00, 1297.00),
(15, 2, 1, 69.90, 69.90),
(15, 3, 3, 697.50, 2092.50),
(16, 1, 1, 1297.00, 1297.00),
(16, 2, 1, 69.90, 69.90),
(16, 3, 3, 697.50, 2092.50),
(17, 1, 1, 1297.00, 1297.00),
(17, 2, 1, 69.90, 69.90),
(17, 3, 3, 697.50, 2092.50),
(18, 2, 1, 69.90, 69.90),
(18, 3, 1, 697.50, 697.50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `created`, `modified`, `deleted`) VALUES
(1, 1, 'Alan Santos', 'santos.alansousa@gmail.com', '$2y$10$DVsld5lCsAzkB.rMZTZ6pOxxcgVg0gYWL1LwzCzbHfU3jxUUceul6', '2022-08-13 09:51:35', '2022-08-15 01:15:44', NULL),
(2, 5, 'Junior da Dulce', 'emailteste@mail.com', '$2y$10$IusQGxmmq5rMYyCfNF.1j.m8RGihb67Ip9Hbb2oZIZT39FeRlaAAq', '2022-08-13 11:08:24', '2022-08-13 11:41:33', NULL),
(3, 1, 'Thayana Regina', 'thayanareginaalmeida@gmail.com', '$2y$10$jx7QZrgbJ5.A/t0Hfi3Pk.V.QF/yVeC6/AlDyAo9iJ4aYW/.ot34G', '2022-08-13 12:09:50', '2022-08-13 12:09:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `fk_users_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_users_has_products_users1_idx` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `fk_products_has_categories_categories1_idx` (`category_id`),
  ADD KEY `fk_products_has_categories_products1_idx` (`product_id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`product_id`,`feature_id`),
  ADD KEY `fk_products_has_features_features1_idx` (`feature_id`),
  ADD KEY `fk_products_has_features_products_idx` (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_users1_idx` (`user_id`);

--
-- Indexes for table `request_products`
--
ALTER TABLE `request_products`
  ADD PRIMARY KEY (`request_id`,`product_id`),
  ADD KEY `fk_order_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_order_has_products_order1_idx` (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_users_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_products_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `fk_products_has_categories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_categories_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_features`
--
ALTER TABLE `product_features`
  ADD CONSTRAINT `fk_products_has_features_features1` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_features_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `fk_order_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request_products`
--
ALTER TABLE `request_products`
  ADD CONSTRAINT `fk_order_has_products_order1` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
