-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `role`) VALUES
('the_rajbansi_prajwol', '9818600762', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `description`) VALUES
(1, 'Nature', 'This album contains the images that showcase the Nature.'),
(2, 'Motorbikes', 'This album will contain motorbike images.'),
(3, 'Potraits', 'This album will contain Potrait images.'),
(400, 'Sports', 'this album will contain images about sports.');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `message` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`name`, `email`, `purpose`, `message`) VALUES
('hritika', 'bhandaridon@gmail.com', 'personal photography', 'afdadsfa'),
('Dipti', 'hyperprabhat@gmail.com', 'Motosport Photography', 'done'),
('Kalpana KC', 'kckalpana@gmail.com', 'personal photography', 'wedding photography'),
('yogesh', 'nirajghimire@live.com', 'personalphotography', 'family photography'),
('PRAJWOL', 'rajbansiprajwol@gmail.com', 'sport', 'I need a photographer'),
('Sameer', 'sameer@gmail.com', 'Motosport Photography', 'I have a race tomorrow and I w');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `album_id` int(11) NOT NULL,
  `photo_title` varchar(30) NOT NULL,
  `photo_description` varchar(100) NOT NULL,
  `photo_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`album_id`, `photo_title`, `photo_description`, `photo_file`) VALUES
(1, 'Mountain', 'Ganesh Himal view from Kathmandu.', 0x75706c6f6164732f48696d616c2e6a7067),
(3, 'Friends.', 'Guys with a cool pose for a photo.', 0x75706c6f6164732f32303138303530393033343631355f494d475f303736372e4a5047),
(1, 'Pharping', 'Foggy Morning in Pharping', 0x75706c6f6164732f5068617270696e672e6a7067),
(2, 'Fz', 'Yamaha Fz V2', 0x75706c6f6164732f32303138313231333030353335335f494d475f32373036202831292e6a7067),
(2, 'Fz-1', 'Yamaha Fz V2', 0x75706c6f6164732f494d472d313538362e6a7067),
(2, 'Fz-2', 'Yamaha Fz V2', 0x75706c6f6164732f494d472d31353735202831292e6a7067),
(3, 'Potrait', 'Potrait photography at Kulekhani.', 0x75706c6f6164732f4865726f202831292e6a7067),
(3, 'Potrait-1', 'Potrait photography at Kulekhani.', 0x75706c6f6164732f32303138303832303031333330335f494d475f32313233202831292e4a5047),
(1, 'Itahari', 'Mustard garden at Itahari.', 0x75706c6f6164732f7465726169313030202832292e6a7067),
(200, 'don2', 'photo of don 2', 0x75706c6f6164732f323032332d30332d32352e706e67),
(3, 'Vozraj', 'potrait', 0x75706c6f6164732f32303138303531353031343134325f494d475f30383830202831292e6a7067),
(3, 'dami photography', 'portarait photography', 0x75706c6f6164732f32303138303531353031343134325f494d475f30383830202831292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `available_from` date DEFAULT NULL,
  `available_to` date DEFAULT NULL,
  `EXPERTISE` varchar(50) DEFAULT NULL,
  `FEES` int(11) DEFAULT NULL,
  `username` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('abhaya', 'abhaya!2323', 'photographer'),
('astha', 'astha123@$', 'photographer'),
('bija123123', 'pakhe@1234asd', 'photographer'),
('bijay123', '98185555@asd', 'photographer'),
('bijayy', 'bijay@123', 'photographer'),
('bishnusir', 'hero@123', 'photographer'),
('dipti@123', 'dipti@123#$', 'photographer'),
('don1234', 'prajwol@1234', 'photographer'),
('hrida', 'password123@', 'photographer'),
('hritik123', 'hritiksr@123@', 'photographer'),
('nidhi', 'nidhi@12312', 'photographer'),
('praj1234', '12341234@1234aaa', 'photographer'),
('prajwol', '1234praj@1234', 'photographer'),
('prajwol1234', 'prajwol@123@', 'photographer'),
('prajwol4321', '9818600762@1234praj', 'photographer'),
('prashant1234', '9818600762@asd', 'photographer'),
('preetam123', 'preetam@123', 'photographer'),
('Rozena', 'rozenadon@1254', 'photographer'),
('votey123', '9818600762@asdss', 'photographer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
