-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harmonyplaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `ID` int(2) NOT NULL,
  `Type` tinytext NOT NULL,
  `First Name` tinytext NOT NULL,
  `Last Name` tinytext NOT NULL,
  `Gender` tinytext NOT NULL,
  `ID. Number` int(24) NOT NULL,
  `Phone Number` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ballroom_hall_reservation`
--

CREATE TABLE `ballroom_hall_reservation` (
  `ID` int(5) NOT NULL,
  `First Name` tinytext NOT NULL,
  `Last Name` tinytext NOT NULL,
  `Phone Number` int(16) NOT NULL,
  `Email` tinytext NOT NULL,
  `Ballroom/Hall Type` tinytext NOT NULL,
  `Event Type` tinytext NOT NULL,
  `Other Type` tinytext NOT NULL,
  `Date of Event` date NOT NULL,
  `Special Request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bedroom_reservation`
--

CREATE TABLE `bedroom_reservation` (
  `ID` int(5) NOT NULL,
  `First Name` tinytext NOT NULL,
  `Last Name` tinytext NOT NULL,
  `Phone Number` int(16) NOT NULL,
  `Email` tinytext NOT NULL,
  `Room Type` tinytext NOT NULL,
  `Number of Adults` int(2) NOT NULL,
  `Number of Children` int(2) NOT NULL,
  `Check-in Date` date NOT NULL,
  `Check-out Date` date NOT NULL,
  `Special Request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(5) NOT NULL,
  `Title` tinytext NOT NULL,
  `First Name` tinytext NOT NULL,
  `Last Name` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `Contact Number` int(16) NOT NULL,
  `Enquiry` tinytext NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(2) NOT NULL,
  `Name` tinytext NOT NULL,
  `Username` tinytext NOT NULL,
  `Password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `Username`, `Password`) VALUES
(1, 'Mohammed Ali Hilal', 'Moha_Ali', 'Kaneki2002'),
(2, 'Ali Murtadha Lawati', 'Ali_Murtadha', 'Aliz333'),
(3, 'Sulaiman Khalifa Yousfi', 'Sulaiman', 'Slmn11z'),
(4, 'Hashim Moosawi', 'Moosa333', 'HM2020z'),
(5, 'Abdulaziz Saud Jabri', 'Jabri22', 'SquStude2'),
(6, 'Kumail Abbad Ajmi', 'Kumail', 'Ajmi2002'),
(7, 'Khalil Al Ajmi', 'Khalil', 'Sasuke2002');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `ID` int(5) NOT NULL,
  `Rate` tinytext NOT NULL,
  `Favorite thing` tinytext NOT NULL,
  `Recommend for others` tinytext NOT NULL,
  `Stay again` tinytext NOT NULL,
  `Review` text NOT NULL,
  `Full Name` tinytext NOT NULL,
  `Email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(2) NOT NULL,
  `Picture Directory` text NOT NULL,
  `Type` tinytext NOT NULL,
  `Room Name` tinytext NOT NULL,
  `Description` text NOT NULL,
  `size m*m (bedroom)/ number of people (ballroom/hall)` int(3) NOT NULL,
  `Price per night` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `Picture Directory`, `Type`, `Room Name`, `Description`, `size m*m (bedroom)/ number of people (ballroom/hall)`, `Price per night`) VALUES
(1, 'Pictures/standard-single-bedroom.jpg', 'Bedroom', 'Standard Single Bedroom', 'This room is suitable for couples who would like to have a comfortable stay without a very high budget. The room contains a king size bed, a small kitchennet, and one bathroom. It includes complimentry access to the swimming pool.', 55, 45),
(2, 'Pictures/premium-single-bedroom.jpg', 'Bedroom', 'Premium Single Bedroom', 'This room is suitable for a small family consisting of two adults and at most two children. The room contains a king size bed, a single size bed, a small kitchen, and two bathrooms. It includes complimentry breakfast and access to the swimming pool.', 80, 65),
(3, 'Pictures/standard-double-bedroom.jpg', 'Bedroom', 'Standard Double Bedroom', 'This room is suitable for a normal family consisting of four adult or two adults and at most four children. The room contains two king size beds, one single size bed, a small kitchen, and three bathrooms. It includes complimentry breakfast and access to the swimming pool.', 110, 90),
(4, 'Pictures/premium-double-bedroom.jpg', 'Bedroom', 'Premium Double Bedroom', 'This room is suitable for a large family consisting of six adults, four adults and three children, or three adults and five children. The room contains two king size beds, two single size beds, a proper kitchen with washing machine, and four bathrooms. It includes complimentry breakfast and access to the swimming pool and spa.', 145, 120),
(5, 'Pictures/deluxe-triple-bedroom.jpg', 'Bedroom', 'Deluxe Triple Bedroom', 'This bedroom is suitable for huge families consisting of more than six adults and four children. The room contains three king size beds, three single beds, a proper kitchen with washing machine, and six bathrooms. It includes complimentry breakfast and access to the swimming pool and spa.', 195, 160),
(6, 'Pictures/Ballroom1.JPG', 'Ballroom', 'Ballroom 1', 'This ballroom is the largest in our hotel! It could accomudate upto 280 person with a special area for buffet. It is suitable for weddings and big confrences.', 280, 450),
(7, 'Pictures/Ballrom2.jpg', 'Ballroom', 'Ballroom 2', 'This ballroom could accomudate upto 190 person with a special area for buffet. It is suitable for birthday and graduation parties, and for small confrences.', 190, 300),
(8, 'Pictures/Hall1.jpg', 'Hall', 'Hall 1', 'This is the best business hall in our hotel! It combines the luxurious style with the traditional ambience. It could accomudate upto 140 person, and it is equiped with all required technologies for proffesional business meetings.', 140, 250),
(9, 'Pictures/Hall2.jpg', 'Hall', 'Hall 2', 'This hall is more on the modern style. It can accomudate upto 100 person, and it is equiped with all necessary technologies for meetings.', 100, 175),
(10, 'Pictures/Hall3.jpg', 'Hall', 'Hall 3', 'This hall is the smallest in the hotel, but even though an extraordinary meeting could be held in it with the outstanding decor it has to offer! It can accomudate upto 60 person, and it is equiped with all the required technologies.', 60, 125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ballroom_hall_reservation`
--
ALTER TABLE `ballroom_hall_reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bedroom_reservation`
--
ALTER TABLE `bedroom_reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ballroom_hall_reservation`
--
ALTER TABLE `ballroom_hall_reservation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bedroom_reservation`
--
ALTER TABLE `bedroom_reservation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
