-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2021 at 03:20 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandemic`
--

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `from_who` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `messages` varchar(1200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `from_who`, `messages`) VALUES
(1, 'Zinedine', 'It has been about two years we\'re doing online learning, it\'s been really hard. But I\'m sure we can overcome this together. 😭 Now keep do our best, at least it\'s the present that we focused on. '),
(3, 'Alifia', 'Hello'),
(4, 'Afif', '\"From the moment we are born, the world tends to have a box already built for us to fit inside. Our umbilical cord never seems to be severed; we only find new needs to fill. If we disconnected and severed our attachments, would we shatter our confinements and expand beyond our shell? Would the world look different? Would we recognize ourselves? Are we the box that we are inside, and to be authentically \'un-contained\' would we still be able to exist? This is the irony of containment. As long as we don\'t push on the walls of our surroundings, we may never know how strong we really are.\" ~ Paige Bradley'),
(6, 'Alicia', 'So the world goes round and round With all you ever knew They say the sky high above Is Caribbean blue? If every man says all he can If every man is true Do I believe the sky above Is Caribbean blue');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `user_id` varchar(6) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`user_id`, `password`) VALUES
('ikuyu', 'adminikuyu'),
('zee', 'adminzee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
