-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 12:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educational_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `score_math`
--

CREATE TABLE `score_math` (
  `id` int NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_math`
--

INSERT INTO `score_math` (`id`, `question`, `answer`, `user_id`) VALUES
(21, 'What is 9 - 6?', 'Correct! The answer is: 3', 1),
(22, 'What is 43 - 10?', 'Correct! The answer is: -33', 3),
(23, 'What is 4 + 83', 'Correct! The answer is: 87', 1),
(24, 'What is 1 + 26', 'Correct! The answer is: 27', 2),
(25, 'What is 62 + 30', 'Correct! The answer is: 92', 2),
(26, 'What is 8 + 28', 'Correct! The answer is: 36', 2),
(27, 'What is 98 + 35', 'Incorrect! The answer is not 36', 2),
(28, 'What is 9 x 9?', 'Correct! The answer is: 81', 3),
(29, 'What is 9 x 9?', 'Correct! The answer is: 81', 3),
(30, 'What is 9 x 9?', 'Correct! The answer is: 81', 3),
(31, 'What is 5 + 60', 'Incorrect! The answer is not 123', 1),
(32, 'What is 52 + 68', 'Incorrect! The answer is not sad', 2),
(33, 'What is 1 x 10?', 'Correct! The answer is: 10', 3),
(34, 'What is 47 + 22', 'Correct! The answer is: 69', 3),
(35, 'What is 6 x 1?', 'Correct! The answer is: 6', 3);

-- --------------------------------------------------------

--
-- Table structure for table `score_memory`
--

CREATE TABLE `score_memory` (
  `id` int NOT NULL,
  `score` int NOT NULL,
  `tries` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_memory`
--

INSERT INTO `score_memory` (`id`, `score`, `tries`, `user_id`) VALUES
(10, 5, 13, 1),
(11, 6, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `score_quiz`
--

CREATE TABLE `score_quiz` (
  `id` int NOT NULL,
  `correct_answers` int NOT NULL,
  `wrong_answers` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_quiz`
--

INSERT INTO `score_quiz` (`id`, `correct_answers`, `wrong_answers`, `user_id`) VALUES
(1, 1, 2, 1),
(2, 1, 2, 1),
(3, 0, 3, 1),
(4, 3, 0, 1),
(5, 2, 1, 3),
(6, 3, 0, 2),
(7, 3, 0, 2),
(8, 2, 1, 3),
(9, 2, 1, 3),
(10, 1, 2, 3),
(11, 2, 1, 1),
(12, 2, 1, 1),
(13, 1, 2, 1),
(14, 1, 2, 1),
(15, 1, 2, 3),
(16, 1, 2, 1),
(17, 1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'John Doe', 'john', '123'),
(2, 'Mary Joe', 'mary', '123'),
(3, 'A', 'A', '123'),
(4, 'Meowmeow@gmail.com', 'Meow', '123'),
(5, 'meow', 'meow', '123'),
(6, 'Ajay', 'ajay01', '123'),
(7, 'Ajay', 'ajay01', '123'),
(8, 'test', 'test', 'test'),
(9, 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score_math`
--
ALTER TABLE `score_math`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id_math` (`user_id`);

--
-- Indexes for table `score_memory`
--
ALTER TABLE `score_memory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id_memory` (`user_id`);

--
-- Indexes for table `score_quiz`
--
ALTER TABLE `score_quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id_quiz` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score_math`
--
ALTER TABLE `score_math`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `score_memory`
--
ALTER TABLE `score_memory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `score_quiz`
--
ALTER TABLE `score_quiz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score_math`
--
ALTER TABLE `score_math`
  ADD CONSTRAINT `FK_user_id_math` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `score_memory`
--
ALTER TABLE `score_memory`
  ADD CONSTRAINT `FK_user_id_memory` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `score_quiz`
--
ALTER TABLE `score_quiz`
  ADD CONSTRAINT `FK_user_id_quiz` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
