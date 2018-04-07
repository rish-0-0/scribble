-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 10:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `created_at`, `updated_at`, `user_id`, `title`, `content`) VALUES
(1, '2018-01-08 11:00:43', '0000-00-00 00:00:00', 0, 'note 1', 'mhhjjjjjjjjjjjjjjjjgf\r\njddddddddddf'),
(81, '2018-01-09 17:03:25', '0000-00-00 00:00:00', 0, 'test', 'jhjbbn'),
(82, '2018-01-09 17:06:17', '0000-00-00 00:00:00', 0, 'hkjj', 'jjnk'),
(94, '2018-01-10 08:13:18', '0000-00-00 00:00:00', 0, 'hhhhhhhhh', 'hhhhhhhhhhhhh'),
(138, '2018-01-10 23:00:35', '0000-00-00 00:00:00', 0, 'gggggggggggg', 'gggggggggggggggg'),
(147, '2018-01-10 23:07:05', '0000-00-00 00:00:00', 0, 'cccccccccccc', 'cccccccccccc'),
(148, '2018-01-10 23:08:49', '0000-00-00 00:00:00', 0, 'note5', 'feeeeeeeeeeeeeeeeeee'),
(149, '2018-01-10 23:15:22', '0000-00-00 00:00:00', 0, 'hhhhhhhhhhh', 'jjjjj'),
(154, '2018-01-11 07:51:51', '0000-00-00 00:00:00', 0, 'jjjjjjj', 'jjjjjjjj'),
(191, '2018-01-13 17:47:31', '0000-00-00 00:00:00', 50, 'sample', 'sample note 1jkhj'),
(192, '2018-01-11 19:07:41', '0000-00-00 00:00:00', 50, 'to do list', '- item 1\r\n- item 2\r\n- item 3'),
(193, '2018-01-12 20:50:53', '0000-00-00 00:00:00', 50, 'Items to buy', 'Lidl: Milk, juice, noodles\r\nRema100: Chicken\r\n'),
(194, '2018-01-12 20:52:34', '0000-00-00 00:00:00', 50, 'Things to do', 'send post\r\ndo this\r\ncall some one \r\n'),
(203, '2018-01-12 21:08:08', '0000-00-00 00:00:00', 50, 'dfd', 'dsfdfd'),
(204, '2018-01-12 21:08:17', '0000-00-00 00:00:00', 50, 'adfdf', 'sfdsafds'),
(205, '2018-01-12 21:09:05', '0000-00-00 00:00:00', 50, 'erre', 'werfwe'),
(206, '2018-01-12 21:09:14', '0000-00-00 00:00:00', 50, 'asdsa', 'sadas'),
(213, '2018-01-13 14:30:53', '0000-00-00 00:00:00', 49, 'asfs', 'dfddfd'),
(239, '2018-01-13 14:20:54', '0000-00-00 00:00:00', 49, 'bjhjhj', 'bjnmnm\r\nkjsklfjd'),
(240, '2018-01-13 13:42:42', '0000-00-00 00:00:00', 49, 'aas', 'aaa'),
(241, '2018-01-13 13:42:53', '0000-00-00 00:00:00', 49, 'dfdf', 'dfdfdf'),
(242, '2018-01-13 13:56:09', '0000-00-00 00:00:00', 49, 'adf', 'after adding new style'),
(243, '2018-01-13 14:53:23', '0000-00-00 00:00:00', 50, 'dfs', 'dsfd'),
(246, '2018-01-13 16:44:35', '0000-00-00 00:00:00', 50, 'new', 'new'),
(247, '2018-01-13 16:45:27', '0000-00-00 00:00:00', 50, 'new2', 'jhejf'),
(248, '2018-01-13 16:46:35', '0000-00-00 00:00:00', 50, 'note5', 'vhjnhb'),
(250, '2018-01-13 16:49:01', '0000-00-00 00:00:00', 50, 'note', 'jbsjfg'),
(253, '2018-01-13 17:10:42', '0000-00-00 00:00:00', 0, 'todo', '+ do this\r\n+ do next'),
(254, '2018-01-13 17:10:58', '0000-00-00 00:00:00', 0, 'todo', '- do this'),
(255, '2018-01-13 17:11:08', '0000-00-00 00:00:00', 0, 'todo', 'list\r\nlist'),
(256, '2018-01-13 17:12:08', '0000-00-00 00:00:00', 50, 'add', 'dadtio'),
(257, '2018-01-13 17:12:40', '0000-00-00 00:00:00', 54, 'dfd', 'dfd'),
(258, '2018-01-13 17:12:46', '0000-00-00 00:00:00', 54, 'safds', 'adfdsf'),
(259, '2018-01-13 17:12:57', '0000-00-00 00:00:00', 54, 'ask', '+123'),
(260, '2018-01-13 17:13:07', '0000-00-00 00:00:00', 54, 'this is ne', 'ldknfksajkjfds'),
(261, '2018-01-13 17:13:49', '0000-00-00 00:00:00', 0, 'daf', 'first not'),
(262, '2018-01-13 17:14:11', '0000-00-00 00:00:00', 55, 'make', 'makethis'),
(263, '2018-01-13 17:43:30', '0000-00-00 00:00:00', 0, 'skdlfkdj', 'djfdsjakf'),
(264, '2018-01-13 17:45:01', '0000-00-00 00:00:00', 0, 'sdkfjkdslsdkfjakl', 'kldsjfadsk'),
(268, '2018-01-13 18:39:12', '0000-00-00 00:00:00', 60, 'lkasdefj', 'jefnrejanfdjkAN'),
(269, '2018-01-13 18:38:47', '0000-00-00 00:00:00', 60, 'lkjfkj', 'ewlkjrkej'),
(270, '2018-01-13 18:39:52', '0000-00-00 00:00:00', 60, 'LJKEJKLF', 'DKFKLJ'),
(271, '2018-01-13 18:42:12', '0000-00-00 00:00:00', 60, 'SAD', 'SDAD'),
(272, '2018-01-13 18:46:15', '0000-00-00 00:00:00', 60, 'dfd', 'dfddfd'),
(273, '2018-01-13 18:46:21', '0000-00-00 00:00:00', 60, 'dfd', 'dfd'),
(274, '2018-01-13 18:46:48', '0000-00-00 00:00:00', 60, 'dfd', 'dfd'),
(275, '2018-01-13 19:16:12', '0000-00-00 00:00:00', 69, 'hjjh', 'hjbjn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `username`, `password`, `email`, `remember_token`) VALUES
(49, '2018-01-05 11:21:25', '0000-00-00 00:00:00', 'test', 'bcc720f2981d1a68dbd66ffd67560c37', 'sanmohan24@gmail.com', ''),
(50, '2018-01-05 11:56:02', '0000-00-00 00:00:00', 'eby', 'cd87cd5ef753a06ee79fc75dc7cfe66c', 'sanmohan24@gmail.com', ''),
(51, '2018-01-10 21:28:15', '0000-00-00 00:00:00', 'lars', 'a73f86ae408af70b67141843e7130723', 'lars@gmail.com', ''),
(52, '2018-01-10 21:31:49', '0000-00-00 00:00:00', 'mads', '9aee390f19345028f03bb16c588550e1', 'mads@gmail.com', ''),
(53, '2018-01-11 17:54:31', '0000-00-00 00:00:00', 'kasper', 'c08ac56ae1145566f2ce54cbbea35fa3', 'sanmohan24@gmail.com', ''),
(54, '2018-01-13 17:10:24', '0000-00-00 00:00:00', 'san', 'af15d5fdacd5fdfea300e88a8e253e82', 'san@mail.com', ''),
(55, '2018-01-13 17:13:41', '0000-00-00 00:00:00', 'user1', '96e79218965eb72c92a549dd5a330112', 'user1@mail.com', ''),
(56, '2018-01-13 17:38:42', '0000-00-00 00:00:00', 'user2', 'e3ceb5881a0a1fdaad01296d7554868d', 'user2@mail.com', ''),
(57, '2018-01-13 17:55:39', '0000-00-00 00:00:00', 'user3', '1a100d2c0dab19c4430e7d73762b3423', 'u@mail.com', ''),
(58, '2018-01-13 17:57:38', '0000-00-00 00:00:00', 'user4', '73882ab1fa529d7273da0db6b49cc4f3', 'u@mail.com', ''),
(59, '2018-01-13 17:58:59', '0000-00-00 00:00:00', 'user5', '5b1b68a9abf4d2cd155c81a9225fd158', 'u@mail.com', ''),
(60, '2018-01-13 18:05:39', '0000-00-00 00:00:00', 'user6', '96e79218965eb72c92a549dd5a330112', 'u@mail.com', ''),
(61, '2018-01-13 18:50:28', '0000-00-00 00:00:00', 'user7', '96e79218965eb72c92a549dd5a330112', 'hfdf@fhg.hh', ''),
(62, '2018-01-13 19:01:39', '0000-00-00 00:00:00', 'user8', '96e79218965eb72c92a549dd5a330112', 'sanmohan24@gmail.com', ''),
(63, '2018-01-13 19:01:39', '0000-00-00 00:00:00', 'user8', '96e79218965eb72c92a549dd5a330112', 'sanmohan24@gmail.com', ''),
(64, '2018-01-13 19:02:39', '0000-00-00 00:00:00', 'user9', '96e79218965eb72c92a549dd5a330112', 'sanmohan24@gmail.com', ''),
(65, '2018-01-13 19:02:39', '0000-00-00 00:00:00', 'user9', '96e79218965eb72c92a549dd5a330112', 'sanmohan24@gmail.com', ''),
(66, '2018-01-13 19:05:32', '0000-00-00 00:00:00', 'apple', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'sanmohan24@gmail.com', ''),
(67, '2018-01-13 19:11:30', '0000-00-00 00:00:00', 'orange', '9982b2a7fceaaee2c8444b5086aee008', 'sanmohan24@gmail.com', ''),
(68, '2018-01-13 19:12:09', '0000-00-00 00:00:00', 'ann', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'sanmohan24@gmail.com', ''),
(69, '2018-01-13 19:15:15', '0000-00-00 00:00:00', 'lol', 'a73f86ae408af70b67141843e7130723', 'sanmohan24@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
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
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
