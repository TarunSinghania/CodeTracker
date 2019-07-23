-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2019 at 06:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10147485_upsolve_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `165d374c0d9f472`
--

CREATE TABLE `165d374c0d9f472` (
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `685d34569fbf6c6`
--

CREATE TABLE `685d34569fbf6c6` (
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `685d34569fbf6c6`
--

INSERT INTO `685d34569fbf6c6` (`link`, `tag`, `time`, `status`) VALUES
('https://codeforces.com/problemset/problem/1056/B', '', 'Mon Jul 22 2019', 'PENDING'),
('https://www.spoj.com/problems/PRIME1/', 'interactive', 'Mon Jul 22 2019', 'SOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `1055d34569fbf6cb`
--

CREATE TABLE `1055d34569fbf6cb` (
  `id` int(11) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correct` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `1055d34569fbf6cb`
--

INSERT INTO `1055d34569fbf6cb` (`id`, `time`, `correct`) VALUES
(2, '21/07/2019', 'Y'),
(4, '21/07/2019', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `1845d374c0d9f477`
--

CREATE TABLE `1845d374c0d9f477` (
  `id` int(11) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correct` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `opA` varchar(25) DEFAULT NULL,
  `opB` varchar(25) DEFAULT NULL,
  `opC` varchar(25) DEFAULT NULL,
  `opD` varchar(25) DEFAULT NULL,
  `correctOp` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `tag`, `question`, `opA`, `opB`, `opC`, `opD`, `correctOp`) VALUES
(1, 'dp', 'sample dp', 'dp1', 'dp2', 'dp3', 'dp4', 'dp3'),
(2, 'Segment trees', 'sample segment trees', 'st1', 'st2', 'st3', 'st4', 'st2'),
(3, 'graph', 'graph sample', 'gr1', 'gr2', 'gr3', 'gr4', 'gr1'),
(4, 'dfs', 'dfs', 'dfs1', 'dfs2', 'dfs3', 'dfs4', 'dfs3');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `user` varchar(255) NOT NULL,
  `tableId` varchar(255) DEFAULT NULL,
  `quizinfoid` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`user`, `tableId`, `quizinfoid`) VALUES
('123@gmail.com', '685d34569fbf6c6', '1055d34569fbf6cb'),
('abc@gmail.com', '165d374c0d9f472', '1845d374c0d9f477');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `rating`) VALUES
(28, '123@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1500),
(29, 'abc@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `165d374c0d9f472`
--
ALTER TABLE `165d374c0d9f472`
  ADD PRIMARY KEY (`link`);

--
-- Indexes for table `685d34569fbf6c6`
--
ALTER TABLE `685d34569fbf6c6`
  ADD PRIMARY KEY (`link`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
