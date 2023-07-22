-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 04:59 AM
-- Server version: 5.7.40-log
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_das`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `admin_password` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`) VALUES
('admin123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `appointment_id` int(100) NOT NULL,
  `doc_id` int(100) NOT NULL,
  `patient_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_age` varchar(255) DEFAULT NULL,
  `patient_gender` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_dob` date DEFAULT NULL,
  `patient_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `patient_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_contact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `patient_app-date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`appointment_id`, `doc_id`, `patient_name`, `patient_age`, `patient_gender`, `patient_dob`, `patient_address`, `patient_email`, `patient_contact`, `patient_app-date`) VALUES
(38, 34, 'Test', '22', 'male', '2001-08-01', 'West Tapinac, Olongapo City', 'col.2019010083@lsb.edu.ph', '09171741111', '2023-05-27'),
(43, 34, 'owen', '11', 'male', '1999-03-24', '83', 'ownvrgs24@gmail.com', '09995118754', '2023-12-25'),
(48, 33, 'Louise Pogi', '19', 'male', '2003-12-12', 'New Kalalake, Olongapo City', 'luwisatr@gmail.com', '09213414262', '2023-07-15'),
(49, 36, 'wyla', '22', 'male', '2000-12-08', '214 rizal st. new cab. kalapati, Olongapo City', 'paecful@gmail.com', '09564034989', '2023-11-01'),
(50, 34, 'Gabriel La Verne Dela Pena', '22', 'male', '2001-03-01', '776 San Sebastian Street, Barangay 390', 'eliassilvers35@gmail.com', '09282174766', '2023-07-15'),
(51, 33, 'Jerimee Ong', '21', 'male', '2001-06-04', '24 Canda St., East Bajac-bajac, Olongapo City, Zambales, Philippines', 'ongjerimee@gmail.com', '09081299487', '2023-05-21'),
(52, 36, 'Nicole', '19', 'female', '2003-08-15', 'Roosevelt Park Village Bataan', 'pagulayannicoleangelica@gmail.com', '0913499487', '2023-05-16'),
(53, 43, 'Nathalia Alexandra Pagulayan', '20', 'female', '2002-07-22', 'Roosevelt Park Village Bataan', 'nathaliaalexandrapagulayan124@gmail.com', '09613499467', '2023-05-16'),
(54, 39, 'Shaira Mae T. Cruz', '19', 'female', '2003-08-06', 'Blk 5 Lot 11 Cecilia Village 1 M. S Garcia, Cabanatuan City', 'shairamaetiangcocruz@gmail.com', '09984093457', '2023-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(100) NOT NULL,
  `doctor_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `doctor_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `doctor_password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clinic_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `specialty` varchar(50) CHARACTER SET latin1 NOT NULL,
  `specialty2` varchar(50) CHARACTER SET latin1 NOT NULL,
  `specialty3` varchar(50) CHARACTER SET latin1 NOT NULL,
  `is_disabled` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_password`, `description`, `contact`, `clinic_address`, `specialty`, `specialty2`, `specialty3`, `is_disabled`) VALUES
(32, 'Dr. Jack T. Cole', 'jack123@gmail.com', '123', '5 Years Experience in Cardiology', '09171751123', 'Roosevelt, Bataan', 'Pediatrics', 'Dental Care', 'Ears, Nose &amp; Throat', 0),
(33, 'Dr. Dummy', 'dummy@gmail.com', '123', '8 Years Experience', '09123456185', 'Kalaklan, Olongapo City', 'Cardiology', 'Dermatology', 'Ophthalmology &amp; Optician', 0),
(34, 'Dummy Doctor', 'dummy2@gmail.com', '123', '10 Years Experience', '09087914231', 'Donor St. East Tapinac, Olongapo City', 'Primary Care &amp; General Medicine', 'Cardiology', 'Ears, Nose &amp; Throat', 0),
(35, 'Dummy Doctor 8', 'dummy8@gmail.com', '123', '30 Years Experience', '09123432181', 'Kalaklan, Olongapo City', 'Alternative Medicine', 'Dermatology', 'Obstetrics &amp; Gynecology', 0),
(36, 'Doctor Testing', 'doctest@gmail.com', '123', '6 Years Experience in Dental Care', '09181851117', 'Dinalupihan, Bataan', 'Dental Care', 'Alternative Medicine', 'Ears, Nose &amp; Throat', 0),
(37, 'Doctor Dummy', 'dummy3@gmail.com', '123', '3 Years Experience', '09131321112', 'Subic, Zambaless', 'Ears, Nose &amp; Throat', 'Alternative Medicine', 'Obstetrics &amp; Gynecology', 0),
(38, 'Dr. Jack Snow', 'jsnow@gmail.com', '123', '10 years Experience', '12345677998', 'Olongapo, Zambales', 'Obstetrics &amp; Gynecology', 'Alternative Medicine', 'Pediatrics', 0),
(39, 'Dr. Bill Russell', 'bb@gmail.com', '123', '2 years Experience', '123456123456', 'Dinalupihan,Bataan', 'Dermatology', 'Lungs, Chest &amp; Pulmonology', 'Sports &amp; Rehab', 0),
(40, 'Dr. Allen Iverson', 'allen@gmail.com', '123', '20 Years Experience', '123456123456', 'Olongapo, Zambales', 'Ophthalmology &amp; Optician', 'Diet &amp; Nutrition', 'Pediatrics', 0),
(41, 'Dr. Michael Jordan', 'mj@gmail.com', '123', '13 Years Experience', '0912345682', 'Olongapo, Zambales', 'Lungs, Chest &amp; Pulmonology', 'Primary Care &amp; General Medicine', 'Dental Care', 0),
(42, 'Dr. Kobe Byrant', 'kobe@gmail.com', '123', '2 years Experience', '123456123456', 'Dinalupihan,Bataan', 'Sports &amp; Rehab', 'Pediatrics', 'Cardiology', 0),
(43, 'Dr. Damian Lilard', 'damian@gmail.com', '123', '8 Years Experience', '0912349324', 'Dinalupihan,Bataan', 'Diet &amp; Nutrition', 'Alternative Medicine', 'Cardiology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_specialty`
--

CREATE TABLE `doctor_specialty` (
  `ID` int(2) NOT NULL,
  `Specialty_Title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_specialty`
--

INSERT INTO `doctor_specialty` (`ID`, `Specialty_Title`) VALUES
(1, 'Primary Care & General Medicine'),
(2, 'Obstetrics & Gynecology'),
(3, 'Dermatology'),
(4, 'Ophthalmology & Optician'),
(5, 'Pediatrics'),
(6, 'Cardiology'),
(7, 'Alternative Medicine'),
(8, 'Ears, Nose & Throat'),
(9, 'Lungs, Chest & Pulmonology'),
(10, 'Sports & Rehab'),
(11, 'Dental Care'),
(12, 'Diet & Nutrition');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(100) NOT NULL,
  `patient_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `patient_contact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `patient_password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `patient_dob` date DEFAULT NULL,
  `verification_code` text CHARACTER SET utf8 NOT NULL,
  `email_verified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_email`, `patient_address`, `patient_contact`, `patient_password`, `patient_dob`, `verification_code`, `email_verified_at`) VALUES
(53, 'Ronnie Mappe', 'col.2019010083@lsb.edu.ph', '#23 9th Street, West Tapinac Olongapo City', '09171741111', '1234', '2000-10-01', '100683', '2023-04-24 23:23:06'),
(57, 'Ashley Anne Dela Cruz', 'delacruzashley16@gmail.com', 'Calapacuan Subic Zambales', '09509141159', 'leyanne16', '2000-11-16', '160780', '2023-04-26 15:38:10'),
(58, 'Lorbey Jane', 'santosljane1@gmail.com', 'Asinan Poblacion, Subic, Zambales', '09760333609', 'hehehe', '2001-06-01', '269277', '2023-04-26 15:47:53'),
(59, 'Jamie', 'jamielyneducalan@gmail.com', '#122 New Cabalan, Olongapo City', '09305138578', '123', '2000-01-10', '283820', '2023-04-26 15:53:29'),
(60, 'Ian Miles Esteves', 'iantabs40@gmail.com', 'West Tapinac, Olongapo City', '09171741117', '123', '2001-08-01', '268251', '2023-05-11 13:30:47'),
(61, 'Alvin Pat Ebuenga', 'alvin.ebuenga19@gmail.com', 'Olongapo City', '09395571416', 'Ebuenga@19', '1994-01-19', '839894', '2023-05-12 08:20:24'),
(62, 'Owen Jasper', 'ownvrgs24@gmail.com', '83 sander st.', '09995118754', '123456789', '1999-03-24', '115203', '2023-05-15 01:07:54'),
(64, 'Jazzie', 'jazzieladrillono@gmail.com', 'Lyceum', '09186878854', 'lyceum', '2021-05-15', '142958', '2023-05-15 02:37:11'),
(66, 'Ralph Lauren Q. Bravo', 'col.2019010003@lsb.edu.ph', 'San Antonio, Zambales', '09291069839', 'hatdog', '2000-08-04', '164418', '2023-05-15 06:23:43'),
(67, 'Miguel Magsaysay', 'miggymaggsy@gmail.com', 'Kalaklan, Olongapo City', '09123456789', 'Abc123', '2000-10-20', '130355', '2023-05-15 06:32:48'),
(68, 'Joshua Azuelo', 'joshuaazuelo7150@gmail.com', '#1462 Tabacuhan, Sta Rita, Olongapo City', '09489270077', 'passw0rd', '1998-03-20', '245920', '2023-05-15 06:48:16'),
(69, 'LA', 'laurencedejusto@gmail.com', '123456 Mabayuan', '0999122456', '12345', '2006-06-22', '290829', '2023-05-15 07:03:02'),
(70, 'Gabriel La Verne Dela Peña', 'eliassilvers35@gmail.com', '776 San Sebastian Street, Barangay 390', '+639282174766', 'JustMonika45', '1970-01-01', '175873', '2023-05-15 12:02:52'),
(71, 'Louise Andrei Reyel', 'luwisatr@gmail.com', 'New Kalalake, Olongapo City', '09213414262', '1234567890', '2003-12-15', '196965', '2023-05-15 12:08:10'),
(72, 'wyla', 'paecful@gmail.com', '214 rizal st. new cab. kalapati, Olongapo City', '09564034989', 'readthisifyouregay', '2000-12-08', '496062', '2023-05-15 12:08:57'),
(73, 'wyla', 'paecful@gmail.com', '214 rizal st. new cab. kalapati, Olongapo City', '09564034989', 'readthisifyouregay', '2000-12-08', '266158', NULL),
(74, 'Jerimee Justin B. Ong', 'ongjerimee@gmail.com', '24 Canda St., East Bajac-bajac, Olongapo City, Zambales, Philippines', '+639081299487', 'PastaMamaMia', '2001-06-04', '112299', '2023-05-15 12:35:54'),
(75, 'Nicole', 'pagulayannicoleangelica@gmail.com', 'Roosevelt Park Village Bataan', '0913499487', 'SpikeBunso143', '2003-08-15', '345039', '2023-05-15 12:48:16'),
(76, 'Nathalia Alexandra Pagulayan', 'nathaliaalexandrapagulayan124@gmail.com', 'Roosevelt Park Village Bataan', '09613499467', 'NATHALIA', '2002-07-22', '168695', '2023-05-15 12:54:14'),
(77, 'Shaira Mae T. Cruz', 'shairamaetiangcocruz@gmail.com', 'Blk 5 Lot 11 Cecilia Village 1 M.S Garcia, Cabanatuan City', '09984093457', 'VIVIZ@3.', '2003-08-06', '144610', '2023-05-15 12:58:17'),
(78, 'Ian Miles Dasig', 'col.2019010111@lsb.edu.ph', 'West Tapinac, Olongapo City', '09171741117', '123', '2001-08-01', '256444', '2023-05-16 02:40:07'),
(79, 'Nathaniel Pagulayan', 'nathanielpagulayan2001@gmail.com', 'Roosevelt Park Village Bataan', '09613499477', '1234', '2001-02-01', '154078', '2023-05-16 04:48:07'),
(80, 'Ian miles', 'iantabs40@gmail.com', 'West Tapinac, Olongapo City', '09171741117', '123', '2001-08-01', '307170', '2023-05-18 04:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `sched_doc_id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `sched_doc_id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(37, 30, 'Not Available', 'Vaca', '2023-04-26 02:16:00', '2023-04-28 02:16:00'),
(38, 12, 'Not Available', 'Sick', '2023-04-26 02:20:00', '2023-04-27 06:20:00'),
(39, 29, 'Not Available', '.....', '2023-04-26 03:28:00', '2023-04-26 04:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `website_user`
--

CREATE TABLE `website_user` (
  `Email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `usertype` char(1) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_user`
--

INSERT INTO `website_user` (`Email`, `usertype`) VALUES
('admin123@gmail.com', 'a'),
('allen@gmail.com', 'd'),
('alvin.ebuenga19@gmail.com', 'p'),
('bb@gmail.com', 'd'),
('col.2019010003@lsb.edu.ph', 'p'),
('col.2019010083@lsb.edu.ph', 'p'),
('col.2019010111@lsb.edu.ph', 'p'),
('damian@gmail.com', 'd'),
('delacruzashley16@gmail.com', 'p'),
('doctest@gmail.com', 'd'),
('dummy2@gmail.com', 'd'),
('dummy3@gmail.com', 'd'),
('dummy8@gmail.com', 'd'),
('dummy@gmail.com', 'd'),
('eliassilvers35@gmail.com', 'p'),
('iantabs40@gmail.com', 'p'),
('jack123@gmail.com', 'd'),
('jamielyneducalan@gmail.com', 'p'),
('jazzieladrillono@gmail.com', 'p'),
('joshuaazuelo7150@gmail.com', 'p'),
('jsnow@gmail.com', 'd'),
('kobe@gmail.com', 'd'),
('laurencedejusto@gmail.com', 'p'),
('luwisatr@gmail.com', 'p'),
('miggymaggsy@gmail.com', 'p'),
('mj@gmail.com', 'd'),
('nathaliaalexandrapagulayan124@gmail.com', 'p'),
('nathanielpagulayan2001@gmail.com', 'p'),
('ongjerimee@gmail.com', 'p'),
('ownvrgs24@gmail.com', 'p'),
('paecful@gmail.com', 'p'),
('pagulayannicoleangelica@gmail.com', 'p'),
('santosljane1@gmail.com', 'p'),
('shairamaetiangcocruz@gmail.com', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctor_specialty`
--
ALTER TABLE `doctor_specialty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sched_doc_id` (`sched_doc_id`);

--
-- Indexes for table `website_user`
--
ALTER TABLE `website_user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `appointment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `doctor_specialty`
--
ALTER TABLE `doctor_specialty`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
