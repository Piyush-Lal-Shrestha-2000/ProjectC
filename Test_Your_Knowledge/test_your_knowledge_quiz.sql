-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 07:55 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visualizer_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_your_knowledge_quiz`
--

CREATE TABLE `test_your_knowledge_quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_question` text NOT NULL,
  `quiz_number_of_options` int(11) NOT NULL,
  `quiz_option_A` text NOT NULL,
  `quiz_option_B` text NOT NULL,
  `quiz_option_C` text NOT NULL,
  `quiz_option_D` text NOT NULL,
  `quiz_correct_answer_option_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_your_knowledge_quiz`
--

INSERT INTO `test_your_knowledge_quiz` (`quiz_id`, `quiz_question`, `quiz_number_of_options`, `quiz_option_A`, `quiz_option_B`, `quiz_option_C`, `quiz_option_D`, `quiz_correct_answer_option_name`) VALUES
(1, 'How long do you need to wash your hands?', 4, 'For about 10 seconds.', 'For about 15 seconds.', 'For about 20 seconds.', 'For about 5 seconds.', 'C'),
(2, 'Is Corona also known as Covid-19?', 2, 'Yes', 'No', '', '', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_your_knowledge_quiz`
--
ALTER TABLE `test_your_knowledge_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_your_knowledge_quiz`
--
ALTER TABLE `test_your_knowledge_quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
