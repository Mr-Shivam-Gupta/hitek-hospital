-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.0-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table hitekhos_database.admin_tbl
CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(80) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_password` varchar(350) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table hitekhos_database.admin_tbl: ~2 rows (approximately)
INSERT INTO `admin_tbl` (`id`, `full_name`, `user_name`, `user_password`, `user_type`, `user_status`, `ip_address`, `browser`, `create_date`) VALUES
	(11, 'admin', 'info@hitekhospital.com', 'e16d6b316f3bef1794c548b7a98b969a6aacb02f6ae5138efc1c443ae6643a6a77d92a0e33e382d6cbb7758f9ab25ab0f97504554d1904620a41fed463796fc2', 'admin', 1, '::1', 'Chrome', '2022-09-29 11:35:13'),
	(12, 'admin', 'admin@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', 'admin', 1, '171.49.140.225', 'Chrome', '2023-03-10 11:13:46');

-- Dumping structure for table hitekhos_database.tbl_apointment
CREATE TABLE IF NOT EXISTS `tbl_apointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paitent_name` varchar(50) NOT NULL,
  `paitent_number` decimal(10,0) NOT NULL,
  `paitent_email` varchar(50) NOT NULL,
  `consultancy` varchar(50) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `appointment_id` varchar(50) NOT NULL DEFAULT '',
  `doctor_id` varchar(50) NOT NULL,
  `department_id` decimal(2,0) NOT NULL,
  `message` text NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `browser` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table hitekhos_database.tbl_apointment: ~63 rows (approximately)
INSERT INTO `tbl_apointment` (`id`, `paitent_name`, `paitent_number`, `paitent_email`, `consultancy`, `appointment_date`, `appointment_id`, `doctor_id`, `department_id`, `message`, `ip_address`, `browser`, `status`, `create_at`) VALUES
	(1, 'test', 7984651798, 'test@gmail.com', NULL, '2022-10-12', '', '39', 21, 'test', '47.247.213.70', 'Firefox', 0, '2022-10-07 00:48:17'),
	(2, 'http://hitekhospital.sirmor.com/', 9868659599, 'test@admin.com', NULL, '2022-10-29', '', '37', 30, 'Test', '157.34.127.72', 'Chrome', 0, '2022-10-14 22:39:48'),
	(3, 'shrikant upadhyay', 9300119698, 'shreekant2010@gmail.com', NULL, '2022-11-25', '', '39', 21, 'Pls book the appointents', '136.232.185.198', 'Chrome', 0, '2022-11-18 02:54:16'),
	(4, 'rajesh singh', 7869965055, 'iamrajesh1804@gmail.com', NULL, '2022-11-20', '', '40', 23, '', '27.56.147.233', 'Chrome', 0, '2022-11-19 01:29:02'),
	(5, 'rajesh singh', 7869965055, 'iamrajesh1804@gmail.com', NULL, '2023-02-08', '', '39', 21, '', '27.56.146.37', 'Chrome', 0, '2023-02-07 00:49:27'),
	(6, 'shrikant ', 9300119698, 'shreekant2010@gmail.com', NULL, '2023-03-10', '', '39', 21, 'for appointmenbts', '182.70.237.108', 'Firefox', 0, '2023-03-10 05:47:28'),
	(7, 'rajesh singh', 7869965055, '', NULL, '2023-03-12', '', '39', 21, 'fasdfasdf', '182.70.237.108', 'Chrome', 0, '2023-03-11 00:24:52'),
	(8, 'Khushboo Sahu', 8871818906, '', NULL, '2023-03-25', '', '43', 24, '', '49.36.26.220', 'Chrome', 0, '2023-03-22 21:15:28'),
	(9, 'Shruti Agrawal', 8871309127, 'Anubhav.aoks@gmail.com', NULL, '2023-03-27', '', '46', 25, '', '106.212.171.136', 'Chrome', 0, '2023-03-25 23:42:30'),
	(10, 'Shishir Dewangan', 7000482881, 'devganshishir@gmail.com', NULL, '2023-04-01', '', '37', 30, '', '47.247.223.107', 'Chrome', 0, '2023-03-30 20:31:43'),
	(11, 'TANSHI SHAH', 9425554338, '', NULL, '2023-04-01', '', '39', 21, '', '49.36.18.75', 'Chrome', 0, '2023-03-31 22:18:07'),
	(12, 'Komal ram dewangan', 9009757795, 'dineshkumardewangan0@gmail.com', NULL, '2023-04-10', '', '39', 21, 'Arqent tha...', '27.62.185.228', 'Chrome', 0, '2023-04-08 20:43:08'),
	(13, 'Komal ram dewangan', 9009757795, 'dineshkumardewangan0@gmail.com', NULL, '2023-04-10', '', '39', 21, 'arqent tha sir*', '27.62.185.228', 'Chrome', 0, '2023-04-08 20:44:16'),
	(14, 'MADHURI SHARMA', 7000593109, 'susheelofficial@gmail.com', NULL, '2023-04-11', '', '39', 21, '', '122.180.237.196', 'Chrome', 0, '2023-04-09 23:22:30'),
	(15, 'MADHURI SHARMA', 7000593109, 'susheelofficial@gmail.com', NULL, '2023-04-11', '', '39', 21, '', '122.180.237.196', 'Chrome', 0, '2023-04-09 23:23:04'),
	(16, 'Vivek Sahu', 9739790011, 'viveksahu.2011@gmail.com', NULL, '2023-04-15', '', '39', 21, 'Left wrist pain, thumb and tendon muscles stiffness', '49.43.41.253', 'Chrome', 0, '2023-04-13 21:54:01'),
	(17, 'Dipti Raj', 9479050741, '', NULL, '2023-04-19', '', '50', 29, 'We required appointment time 4pm to 5pm, \r\nConsult for joint pain.', '110.224.189.9', 'Chrome', 0, '2023-04-18 06:45:08'),
	(18, 'Dipti Raj', 7415671782, '', NULL, '2023-04-19', '', '50', 29, 'Appointment time required between 4pm to 5pm only.', '110.224.189.9', 'Chrome', 0, '2023-04-18 06:49:00'),
	(19, 'Markandey rai', 7574894372, 'rai_avinashchand@yahoo.com', NULL, '2023-04-27', '', '39', 21, 'Wants t o make appointment for tomorrow morning', '45.251.50.80', 'Safari', 0, '2023-04-25 21:31:53'),
	(20, 'wasim alam', 9827795474, 'bushrayasmin1998@gmail.com', NULL, '2023-04-28', '', '39', 21, '', '117.228.212.224', 'Chrome', 0, '2023-04-28 00:03:33'),
	(21, 'preeti gupta', 9644885533, '', NULL, '2023-05-09', '', '43', 24, '', '157.34.80.181', 'Chrome', 0, '2023-05-07 23:03:28'),
	(22, 'Shobhit Ram Borkar', 7898542413, 'kamleshdw.idcs10@gmail.com', NULL, '2023-05-13', '', '55', 33, 'Breathing nose problem', '110.227.52.89', 'Chrome', 0, '2023-05-13 01:53:28'),
	(23, 'Saroj Kumar sahu', 7002698124, 'saroj3385@gmail.com', NULL, '2023-05-16', '', '44', 22, 'varicose veins problem', '157.34.130.188', 'Chrome', 0, '2023-05-14 22:59:29'),
	(24, 'Miss Deeksha tandiya', 7828510898, '', NULL, '2023-05-17', '', '48', 45, '', '110.224.172.219', 'Safari', 0, '2023-05-16 23:16:58'),
	(25, 'Ramesh ', 8377907942, '', NULL, '2023-05-27', '', '63', 43, 'Testing ', '42.111.17.73', 'Chrome', 0, '2023-05-26 03:57:10'),
	(26, 'Suresh', 8377907942, '', NULL, '2023-05-27', '', '55', 33, 'Testing ', '42.111.17.73', 'Chrome', 0, '2023-05-26 03:57:58'),
	(27, 'Rakhi kori', 9685068413, '', NULL, '2023-06-02', '', '43', 24, '', '27.62.150.118', 'Chrome', 0, '2023-06-02 06:58:45'),
	(28, 'Rakhi kori', 9685068413, '', NULL, '2023-06-02', '', '43', 24, '', '27.62.150.118', 'Chrome', 0, '2023-06-02 06:59:08'),
	(29, 'इंडमती सिन्हा ', 9285321232, 'pramcharan66@gmail.com', NULL, '2023-06-05', '', '39', 21, '', '49.35.138.151', 'Opera', 0, '2023-06-03 22:55:45'),
	(30, 'indu mati sinha', 9285321232, 'pramcharan66@gmail.comcom', NULL, '2023-06-05', '', '39', 21, '', '49.35.138.151', 'Opera', 0, '2023-06-03 22:56:35'),
	(31, 'SAJI', 8377907942, '', NULL, '2023-06-08', '', '39', 21, '', '27.56.144.225', 'Chrome', 0, '2023-06-07 02:05:52'),
	(32, 'Markandey Rai', 8976763882, 'ash.rai@gmail.com', NULL, '2023-06-09', '', '39', 21, 'Follow up consultation with Dr. Dixit', '122.11.214.67', 'Safari', 0, '2023-06-08 04:44:36'),
	(33, 'Phoolmati ', 8235233324, 'aks504852@gmail.com', NULL, '2023-06-10', '', '40', 23, 'For regular health checkup & follow ups', '223.228.242.160', 'Chrome', 0, '2023-06-08 21:39:20'),
	(34, 'Phoolmati ', 8235233324, 'aks504852@gmail.com', NULL, '2023-06-10', '', '40', 23, 'Check ups', '223.228.242.160', 'Chrome', 0, '2023-06-08 21:56:22'),
	(35, 'Mr. Suresh Chandrakar', 7974451419, 'adarshchandrakar279@gmaio.com', NULL, '2023-06-12', '', '39', 21, '', '49.35.147.20', 'Chrome', 0, '2023-06-11 20:56:06'),
	(36, 'S SUNITA', 6281588220, 'mcmohan105@gmail.com', NULL, '2023-06-16', '', '43', 24, '38 weeks running for pregnancy check up and update delivery situation .\r\nKindly confirm the appointment ', '27.62.155.251', 'Chrome', 0, '2023-06-13 05:16:20'),
	(37, 'Markandey rai', 9893647557, 'r.avinashchand@gmail.com', NULL, '2023-06-15', '', '39', 21, 'Want an appointment to consult Dr Nachiketa Dixit around 1100 am', '103.85.78.4', 'Safari', 0, '2023-06-14 02:07:29'),
	(38, 'Markandey rai', 9893647557, 'r.avinashchand@gmail.com', NULL, '2023-06-15', '', '39', 21, 'Want an appointment at 1100 am or afterwards for Dr Dixit ', '103.85.78.4', 'Safari', 0, '2023-06-14 02:08:45'),
	(39, 'sunita devi', 7049070042, 'shubhamoktey11@gmail.com', NULL, '2023-06-16', '', '39', 21, '', '152.58.56.108', 'Chrome', 0, '2023-06-16 02:39:11'),
	(40, 'Bhupesh dewangan', 8770734948, 'bhupeshnitr@gmail.com', NULL, '2023-06-21', '', '50', 29, '', '152.58.58.18', 'Chrome', 0, '2023-06-19 04:15:03'),
	(41, 'Archana Kandey', 7389466560, '', NULL, '2023-06-26', '', '39', 21, '', '45.124.146.107', 'Chrome', 0, '2023-06-25 23:22:51'),
	(42, 'Archana Kandey', 7389466560, '', NULL, '2023-06-26', '', '39', 21, '', '45.124.146.107', 'Chrome', 0, '2023-06-25 23:28:32'),
	(60, 'shivam gupta ', 9879876543, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 03:57:14'),
	(61, 'shivam gupta ', 9879876543, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 03:57:22'),
	(62, 'shivam gupta ', 9879876543, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 03:58:08'),
	(63, 'testing', 9669793200, '', '', '2023-08-09', '', '69', 40, 'test', '::1', 'Chrome', 0, '2023-08-09 04:03:37'),
	(64, 'test', 9876543210, '', '600', '2023-08-09', '', '40', 23, '', '::1', 'Chrome', 0, '2023-08-09 04:05:29'),
	(65, 'test', 9876543210, '', '600', '2023-08-09', '', '40', 23, '', '::1', 'Chrome', 0, '2023-08-09 04:06:15'),
	(66, 'test', 9876543210, '', '600', '2023-08-09', '', '40', 23, '', '::1', 'Chrome', 0, '2023-08-09 04:07:10'),
	(67, 'shivam gupta ', 9879876543, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 04:07:50'),
	(68, 'test', 9999999999, '', '600', '2023-08-09', '', '43', 24, 'test', '::1', 'Chrome', 0, '2023-08-09 04:09:26'),
	(69, 'test', 9999999999, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 04:13:24'),
	(70, 'test', 9877979879, '', '600', '2023-08-09', 'AP2023080958', '40', 23, 'teste', '::1', 'Chrome', 0, '2023-08-09 07:21:27'),
	(71, 'test', 9877979879, '', '600', '2023-08-09', 'AP2023080959', '40', 23, 'teste', '::1', 'Chrome', 0, '2023-08-09 07:22:04'),
	(72, 'test', 9877979879, '', '600', '2023-08-09', 'AP2023080960', '40', 23, 'teste', '::1', 'Chrome', 0, '2023-08-09 07:22:05'),
	(73, 'test', 8798797987, '', '600', '2023-08-09', 'AP2023080961', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 07:22:32'),
	(74, 'test', 9798798798, '', '600', '2023-08-09', 'AP2023080962', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 07:24:11'),
	(75, 'test', 8564564988, '', '600', '2023-08-09', 'AP2023080963', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-09 07:25:50'),
	(76, 'test', 9564564564, '', '450', '2023-08-09', 'AP2023080964', '45', 21, 'test', '::1', 'Chrome', 0, '2023-08-08 19:30:20'),
	(77, 'testing a ', 9789789879, '', '550', '2023-08-09', 'AP2023080965', '39', 21, 'test', '::1', 'Chrome', 0, '2023-08-08 19:36:26'),
	(78, 'test', 8798798798, '', '', '2023-08-09', '', '81', 23, 'test', '::1', 'Chrome', 0, '2023-08-08 19:44:10'),
	(79, 'shivam gupta ', 9898797898, '', '600', '2023-08-09', '', '40', 23, 'test', '::1', 'Chrome', 0, '2023-08-08 20:38:30');

-- Dumping structure for table hitekhos_database.tbl_careers
CREATE TABLE IF NOT EXISTS `tbl_careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(50) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `candidate_number` decimal(10,0) NOT NULL,
  `candidate_message` text NOT NULL,
  `candidate_resume` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip_address` varchar(16) NOT NULL,
  `browser` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table hitekhos_database.tbl_careers: ~77 rows (approximately)
INSERT INTO `tbl_careers` (`id`, `candidate_name`, `candidate_email`, `candidate_number`, `candidate_message`, `candidate_resume`, `created_at`, `ip_address`, `browser`) VALUES
	(1, 'test', 'test@gmail.com', 8946518794, 'test', 'Assurance_Modular_Operation_Theatre.jpg', '2023-02-24 03:19:12', '157.34.127.204', 'Firefox'),
	(2, 'Pooja', 'poojasahu9426@gmail.com', 8602341711, 'Hello Creative Hiring team\r\n\r\nMy name is Pooja Sahu and I’m writing to apply for the Physiotherapist role at your hospital. I recently completed my post graduation (master of physiotherapy) from SVNIRTAR Cuttack Odisha. \r\n\r\nI’ve attached my resume.  I look forward to discussing  role in more detail\r\nSincerely, \r\n\r\nPooja Sahu\r\n\r\n8602341711\r\n', 'RESUME_POOJA_SAHU_(Repaired)-1_230225_170724.pdf', '2023-03-10 07:56:32', '110.224.185.76', 'Chrome'),
	(3, 'MOBBASHEER KHAN', 'sonuraza.sr191@gmail.com', 8319981766, 'I worked as a Computer Operator, in Shankaracharya Hospital Junwani about 6 months.', 'Resume_sonu.pdf', '2023-03-14 00:32:28', '182.73.26.30', 'Chrome'),
	(4, 'Aastha Bais', 'aastha.bais95@gmail.com', 8309191286, 'I am interested in applying for the role of Junior Resident and joining your team at HI-TEK Hospital, Bhilai.\r\n\r\nI have always admired the level of patient care and compassion provided to the patients by your organization and I wish to contribute to the same.\r\n\r\nThank you for your time and consideration.', 'Adobe_Scan_14_Mar_2023.pdf', '2023-03-14 01:49:47', '49.204.225.135', 'Chrome'),
	(5, 'Dr Mrinal Sawai', 'dr.mrinalsawai@gmail.com', 8319955269, 'Sir / Ma\'am\r\n\r\nI am Dr Mrinal Sawai, a MBBS Graduate from CCM Govt. Medical College, Durg, Cg.\r\n\r\nI wanted to inquire about the position of Junior resident at your reputed institute so that I can expand my knowledge and learn various skills.\r\n\r\nPlease find my CV attached to this mail for your reference. And also, I would be happy to provide you with any additional information or answer any questions you may have.\r\n \r\nThank you for your time and consideration. I look forward to hearing back from you soon.\r\n', 'Resume__pm.pdf', '2023-03-23 22:51:44', '223.182.119.206', 'Chrome'),
	(6, 'Dr Mrinal Sawai', 'dr.mrinalsawai@gmail.com', 8319955269, 'Sir / Ma\'am\r\n\r\nI am Dr Mrinal Sawai, a MBBS Graduate from CCM Govt. Medical College, Durg, Cg.\r\n\r\nI wanted to inquire about the position of Junior resident at your reputed institute so that I can expand my knowledge and learn various skills.\r\n\r\nPlease find my CV attached to this mail for your reference. And also, I would be happy to provide you with any additional information or answer any questions you may have.\r\n \r\nThank you for your time and consideration. I look forward to hearing back from you soon.\r\n', 'Resume__pm1.pdf', '2023-03-23 22:51:46', '223.182.119.206', 'Chrome'),
	(7, 'Komal Chandrapaxi ', 'komalchandrapaxi143@gmail.com', 9098138145, 'Application for Pharmacist Internship at HI-TEK hospital.\r\nRespected Sir/Ma,am,\r\n\r\nAs a final year Master of Pharmacy in Pharmacology at GITAM Deemed To Be University, I\'d like to apply for the position of Pharmacist at your esteemed organization.\r\n\r\nI\'m skilled at Pharmacological physiology, pharmacovigilance guidelines, proficient in communication, and can use Excel\'s functions.\r\n\r\nYour company\'s vision aligns with my career goals and i\'d really like to explore working in the heth care sector.\r\n\r\nPlease find my resume enclosed for your kind perusal. Looking forward to hearing from you soon.\r\n\r\nRegards,\r\nKomal Chandrapaxi', 'Komal_Chandrapaxi_1RESUME.pdf', '2023-04-10 02:11:51', '103.23.29.122', 'Chrome'),
	(8, 'Komal Chandrapaxi ', 'komalchandrapaxi143@gmail.com', 9098138145, 'Application for Pharmacist Internship at HI-TEK hospital.\r\nRespected Sir/Ma,am,\r\n\r\nAs a final year Master of Pharmacy in Pharmacology at GITAM Deemed To Be University, I\'d like to apply for the position of Pharmacist at your esteemed organization.\r\n\r\nI\'m skilled at Pharmacological physiology, pharmacovigilance guidelines, proficient in communication, and can use Excel\'s functions.\r\n\r\nYour company\'s vision aligns with my career goals and i\'d really like to explore working in the heth care sector.\r\n\r\nPlease find my resume enclosed for your kind perusal. Looking forward to hearing from you soon.\r\n\r\nRegards,\r\nKomal Chandrapaxi', 'Komal_Chandrapaxi_1RESUME1.pdf', '2023-04-10 02:11:58', '103.23.29.122', 'Chrome'),
	(9, 'Komal Chandrapaxi ', 'komalchandrapaxi143@gmail.com', 9098138145, 'Application for Pharmacist Internship at HI-TEK hospital.\r\nRespected Sir/Ma,am,\r\n\r\nAs a final year Master of Pharmacy in Pharmacology at GITAM Deemed To Be University, I\'d like to apply for the position of Pharmacist at your esteemed organization.\r\n\r\nI\'m skilled at Pharmacological physiology, pharmacovigilance guidelines, proficient in communication, and can use Excel\'s functions.\r\n\r\nYour company\'s vision aligns with my career goals and i\'d really like to explore working in the heth care sector.\r\n\r\nPlease find my resume enclosed for your kind perusal. Looking forward to hearing from you soon.\r\n\r\nRegards,\r\nKomal Chandrapaxi', 'Komal_Chandrapaxi_1RESUME2.pdf', '2023-04-10 02:12:00', '103.23.29.122', 'Chrome'),
	(10, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute.', 'IMG_20220706_135716.jpg', '2023-04-12 14:17:16', '106.194.179.185', 'Chrome'),
	(11, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute.', 'IMG_20220706_1357161.jpg', '2023-04-12 14:17:36', '106.194.179.185', 'Chrome'),
	(12, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute.', 'IMG_20220706_1357162.jpg', '2023-04-12 14:17:37', '106.194.179.185', 'Chrome'),
	(13, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute. I want to work in laboratory for experience.', 'IMG_20220706_1357163.jpg', '2023-04-12 14:19:36', '106.194.179.185', 'Chrome'),
	(14, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute. I want to work in laboratory for experience.', 'IMG_20220706_1357164.jpg', '2023-04-12 14:19:37', '106.194.179.185', 'Chrome'),
	(15, 'Dhananjay Verma', 'dhananjayverma989@gmail.com', 9754972202, 'Hi my name is dhananjay i have passed 12th. I am a student of BMLT 1st year in Sri Chandra Nursing Institute. I want to work in laboratory for experience.', 'IMG_20220706_1357165.jpg', '2023-04-12 14:19:37', '106.194.179.185', 'Chrome'),
	(16, 'Taif Bux', 'sheikhtaif9@gmail.com', 7999499720, 'DATE : 13.APR.2023\r\n\r\nSub- Regarding vacancy in your reputed Hospital. \r\n\r\nDear Sir/Ma\'am \r\n\r\nI had done my Diploma/Bachelor\'s Degree from (Chhattisgarh Engineering college Danora Durg / ST. Thomas College Bhilai (C.G.) in 2015/18 / /20/22 .If you have any vacancy in your reputed organization please let me know. \r\n\r\nRegards,\r\n\r\nTaif Bux \r\n(7999499720,8889988030)', 'CV_2022092217403821.pdf', '2023-04-12 23:26:57', '49.35.195.165', 'Chrome'),
	(17, 'Taif Bux', 'sheikhtaif9@gmail.com', 7999499720, 'DATE : 13.APR.2023\r\n\r\nSub- Regarding vacancy in your reputed Hospital. \r\n\r\nDear Sir/Ma\'am \r\n\r\nI had done my Diploma/Bachelor\'s Degree from (Chhattisgarh Engineering college Danora Durg / ST. Thomas College Bhilai (C.G.) in 2015/18 / /20/22 .If you have any vacancy in your reputed organization please let me know. \r\n\r\nRegards,\r\n\r\nTaif Bux \r\n(7999499720,8889988030)', 'CV_20220922174038211.pdf', '2023-04-12 23:27:05', '49.35.195.165', 'Chrome'),
	(18, 'MD ASIF ', 'mdasif7828858512@gmail.com', 9131666483, 'I am service engineer ', 'Resume_Md_Asif.pdf', '2023-04-16 12:57:06', '49.43.41.221', 'Chrome'),
	(19, 'MANISH KUMAR', 'mk3854174@gmail.com', 9302703721, 'GIVE ME JOB OPPORTUNITY', 'MANISH_RESUME_registration-_Copy-2.pdf', '2023-04-18 05:04:37', '152.58.26.188', 'Chrome'),
	(20, 'MANISH KUMAR', 'mk3854174@gmail.com', 9302703721, 'GIVE ME JOB OPPORTUNITY', 'MANISH_RESUME_registration-_Copy-21.pdf', '2023-04-18 05:04:50', '152.58.26.188', 'Chrome'),
	(21, 'MANISH KUMAR', 'mk3854174@gmail.com', 9302703721, 'GIVE ME JOB OPPORTUNITY', 'MANISH_RESUME_registration-_Copy-22.pdf', '2023-04-18 05:04:59', '152.58.26.188', 'Chrome'),
	(22, 'ANUKRITI', 'anukritisonkar123@gmail.com', 6260211593, 'PROVIDE JOB OPPORTUNITY', 'ANU_RESUME_REGISTRATION.pdf', '2023-04-18 05:07:34', '152.58.26.188', 'Chrome'),
	(23, 'ANUKRITI', 'anukritisonkar123@gmail.com', 6260211593, 'PROVIDE JOB OPPORTUNITY', 'ANU_RESUME_REGISTRATION1.pdf', '2023-04-18 05:07:50', '152.58.26.188', 'Chrome'),
	(24, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format1.pdf', '2023-04-18 10:30:11', '110.227.62.10', 'Chrome'),
	(25, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format11.pdf', '2023-04-18 10:30:19', '110.227.62.10', 'Chrome'),
	(26, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format12.pdf', '2023-04-18 10:30:35', '110.227.62.10', 'Chrome'),
	(27, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format13.pdf', '2023-04-18 10:30:36', '110.227.62.10', 'Chrome'),
	(28, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format14.pdf', '2023-04-18 10:30:37', '110.227.62.10', 'Chrome'),
	(29, 'Yamini Singh Nayan', 'yaminisinghnayan@gmail.com', 9717110678, 'I would like to join as RMO, if you have vacancy then please let me know.', 'Resume_Yamini_Format15.pdf', '2023-04-18 10:30:37', '110.227.62.10', 'Chrome'),
	(30, 'Dt. Twinkle Sahu', 'twinklesahu219@gmail.com', 8770063511, 'I apply with enthusiasm for the position of Dietician at your hospital.\r\nPlease find attached my resume for your consideration.\r\n\r\nThank you very much for reviewing', 'Twinkle_Sahu_resume.pdf', '2023-04-21 00:58:41', '171.49.137.136', 'Chrome'),
	(31, 'Dt. Twinkle Sahu', 'twinklesahu219@gmail.com', 8770063511, 'I apply with enthusiasm for the position of Dietician at your hospital.\r\nPlease find attached my resume for your consideration.\r\n\r\nThank you very much for reviewing', 'Twinkle_Sahu_resume1.pdf', '2023-04-21 00:58:43', '171.49.137.136', 'Chrome'),
	(32, 'Dt. Twinkle Sahu', 'twinklesahu219@gmail.com', 8770063511, 'I apply with enthusiasm for the position of Dietician at your hospital.\r\nPlease find attached my resume for your consideration.\r\n\r\nThank you very much for reviewing', 'Twinkle_Sahu_resume2.pdf', '2023-04-21 00:58:44', '171.49.137.136', 'Chrome'),
	(33, 'Dt. Twinkle Sahu', 'twinklesahu219@gmail.com', 8770063511, 'I apply with enthusiasm for the position of Dietician at your hospital.\r\nPlease find attached my resume for your consideration.\r\n\r\nThank you very much for reviewing', 'Twinkle_Sahu_resume3.pdf', '2023-04-21 00:58:50', '171.49.137.136', 'Chrome'),
	(34, 'LAXMI SIVAN', 'LAXMISUJEESH@GMAIL.COM', 9078311941, '', 'LAXMI_docx.pdf', '2023-05-04 04:53:26', '103.92.47.192', 'Chrome'),
	(35, 'LAXMI SIVAN', 'LAXMISUJEESH@GMAIL.COM', 9078311941, '', 'LAXMI_docx1.pdf', '2023-05-04 04:53:28', '103.92.47.192', 'Chrome'),
	(36, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume.pdf', '2023-05-07 01:42:09', '59.88.102.203', 'Chrome'),
	(37, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume1.pdf', '2023-05-07 01:42:30', '59.88.102.203', 'Chrome'),
	(38, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume2.pdf', '2023-05-07 01:42:39', '59.88.102.203', 'Chrome'),
	(39, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume3.pdf', '2023-05-07 01:42:53', '59.88.102.203', 'Chrome'),
	(40, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume4.pdf', '2023-05-07 01:43:15', '59.88.102.203', 'Chrome'),
	(41, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume5.pdf', '2023-05-07 01:43:30', '59.88.102.203', 'Chrome'),
	(42, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume6.pdf', '2023-05-07 01:43:36', '59.88.102.203', 'Chrome'),
	(43, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume7.pdf', '2023-05-07 01:43:42', '59.88.102.203', 'Chrome'),
	(44, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume8.pdf', '2023-05-07 01:43:51', '59.88.102.203', 'Chrome'),
	(45, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume9.pdf', '2023-05-07 01:44:02', '59.88.102.203', 'Chrome'),
	(46, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume10.pdf', '2023-05-07 01:44:18', '59.88.102.203', 'Chrome'),
	(47, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume11.pdf', '2023-05-07 01:44:33', '59.88.102.203', 'Chrome'),
	(48, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume12.pdf', '2023-05-07 01:44:48', '59.88.102.203', 'Chrome'),
	(49, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume13.pdf', '2023-05-07 01:45:09', '59.88.102.203', 'Chrome'),
	(50, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume14.pdf', '2023-05-07 01:45:23', '59.88.102.203', 'Chrome'),
	(51, 'poshan lal yadav', 'poshan1980@rediffmail.com', 9827189922, 'i am interested for HR Manager in HI Tek', 'Resume15.pdf', '2023-05-07 01:45:31', '59.88.102.203', 'Chrome'),
	(52, 'DR MAYUR GUPTA', 'mayur.invisible@gmail.com', 8770107359, '', 'DR_MAYUR_GUPTA_CV.pdf', '2023-05-09 09:11:45', '27.56.146.253', 'Chrome'),
	(53, 'DR MAYUR GUPTA', 'mayur.invisible@gmail.com', 8770107359, '', 'DR_MAYUR_GUPTA_CV1.pdf', '2023-05-09 09:11:54', '27.56.146.253', 'Chrome'),
	(54, 'Jayant gosai', 'jayantgosai103@gmail.com', 9806615786, '', 'Resume___.pdf', '2023-05-10 13:49:25', '110.224.162.234', 'Chrome'),
	(55, 'Jayant gosai', 'jayantgosai103@gmail.com', 9806615786, '', 'Resume___1.pdf', '2023-05-10 13:49:26', '110.224.162.234', 'Chrome'),
	(56, 'Dr. Vrishali Singhania ', 'vrishali000@gmail.com', 7049868163, 'I would like to apply for the post of EMO or junior Doctor in your organisation ', 'RESUME_(1).pdf', '2023-05-15 12:40:49', '106.76.227.118', 'Chrome'),
	(57, 'Manish Singh', 'manishsignature3@gmail.com', 8839484876, 'Currently I working in bm shah hospital. \r\nAwaited for your revert', 'Manish_Singh_CV__(1)-converted_(1).pdf', '2023-05-19 04:18:20', '49.35.174.140', 'Safari'),
	(58, 'Anjali karsh', 'anjalikarsh7@gmail.com', 6260360546, 'Hello, is there any job ,any requirements for b.pharmacy student 4rth year. Please inform.', 'resume.docx', '2023-05-19 06:39:50', '110.224.161.98', 'Chrome'),
	(59, 'Dr. Aishwin M', 'aishwin.1164@gmail.com', 9176164858, '', 'Resume.docx', '2023-05-25 10:04:24', '103.117.213.194', 'Chrome'),
	(60, 'Priyanka Jha ', 'jhamansi85@gmail.com', 7489582758, '', 'CV____.pdf', '2023-05-29 14:00:07', '103.46.242.243', 'Chrome'),
	(61, 'Priyanka Jha ', 'jhamansi85@gmail.com', 7489582758, '', 'CV____1.pdf', '2023-05-29 14:00:08', '103.46.242.243', 'Chrome'),
	(62, 'P koti jagan Kishor', 'jagankishor1@gmail.com', 7770845184, 'To HR DEPARTMENT\r\n\r\nHello sir/mam\r\n\r\nI\'m interested in Assistant HR-Admin jobs because I can see that, in this role, my experience and skills could help solve the problem within your company.\r\n\r\nthanks and regards\r\n\r\n    KOTI JAGAN KISHOR\r\nP 7770845184\r\nE JAGANKISHOR1@GMAIL.COM\r\nA BHILAI NAGAR DURG,\r\nPIN CODE-490023 CHHATTISGARH INDIA', 'KOTI_JAGAN_KISHOR.pdf', '2023-06-04 01:12:09', '49.35.184.73', 'Chrome'),
	(63, 'P koti jagan Kishor', 'jagankishor1@gmail.com', 7770845184, 'To HR DEPARTMENT\r\n\r\nHello sir/mam\r\n\r\nI\'m interested in Assistant HR-Admin jobs because I can see that, in this role, my experience and skills could help solve the problem within your company.\r\n\r\nthanks and regards\r\n\r\n    KOTI JAGAN KISHOR\r\nP 7770845184\r\nE JAGANKISHOR1@GMAIL.COM\r\nA BHILAI NAGAR DURG,\r\nPIN CODE-490023 CHHATTISGARH INDIA', 'KOTI_JAGAN_KISHOR1.pdf', '2023-06-04 01:12:10', '49.35.184.73', 'Chrome'),
	(64, 'Anuj Joseph', 'anuj19thmarch@gmail.com', 8123459449, 'I wish to apply for the position of Administration Executive. Please find the attached CV for your kind persual.', 'Anuj_Joseph_2023_(1).pdf', '2023-06-12 06:56:28', '110.224.223.21', 'Chrome'),
	(65, 'Anubhuti Mishra', 'anubhuti401@gmail.com', 9109597355, '', 'Anubhuti_Resume.pdf', '2023-06-13 04:42:44', '47.247.198.112', 'Chrome'),
	(66, 'Anubhuti Mishra', 'anubhuti401@gmail.com', 9109597355, '', 'Anubhuti_Resume1.pdf', '2023-06-13 04:42:45', '47.247.198.112', 'Chrome'),
	(67, 'Anubhuti Mishra', 'anubhuti401@gmail.com', 9109597355, '', 'Anubhuti_Resume2.pdf', '2023-06-13 04:42:54', '47.247.198.112', 'Chrome'),
	(68, 'Komeshwar sahu', 'sahukomeshwar55@gmail.com', 9131852727, '', 'komeshwar_resu.docx', '2023-06-14 05:00:26', '157.34.49.252', 'Chrome'),
	(69, 'Komeshwar sahu', 'sahukomeshwar55@gmail.com', 9131852727, '', 'komeshwar_resu1.docx', '2023-06-14 05:00:35', '157.34.49.252', 'Chrome'),
	(70, 'Annu Thakur', 'annuthakur178@gmail.com', 7999069160, 'Resume', 'annu_resume_pdf.pdf', '2023-06-18 01:28:49', '49.35.147.37', 'Chrome'),
	(71, 'Nikhila Jyothi', 'p.swami143@gmail.com', 7382993586, 'Looking for Dietician / Nutritionist', 'Bio-data-job-1-1.docx', '2023-06-23 04:53:24', '136.232.184.110', 'Chrome'),
	(72, 'Nikhila Jyothi', 'p.swami143@gmail.com', 7382993586, 'Looking for Dietician / Nutritionist', 'Bio-data-job-1-11.docx', '2023-06-23 04:53:37', '136.232.184.110', 'Chrome'),
	(73, 'Raushan Kumar singh', 'raushancoolsingh@gmail.com', 7903402719, 'Hello sir ma\'am i have experience in hospital line i currently working in eye care and i also job in blood collection department  i have total experience of 3 year ', 'RAUSHAN_CV_TEMPLATE_0003-1_(1).pdf', '2023-07-21 13:22:22', '183.83.215.10', 'Chrome'),
	(74, 'Raushan Kumar singh', 'raushancoolsingh@gmail.com', 7903402719, 'Hello sir ma\'am i have experience in hospital line i currently working in eye care and i also job in blood collection department  i have total experience of 3 year ', 'RAUSHAN_CV_TEMPLATE_0003-1_(1)1.pdf', '2023-07-21 13:22:25', '183.83.215.10', 'Chrome'),
	(75, 'Raushan Kumar singh', 'raushancoolsingh@gmail.com', 7903402719, 'Hello sir ma\'am i have experience in hospital line i currently working in eye care and i also job in blood collection department  i have total experience of 3 year ', 'RAUSHAN_CV_TEMPLATE_0003-1_(1)2.pdf', '2023-07-21 13:22:29', '183.83.215.10', 'Chrome'),
	(76, 'Taif Bux', 'sheikhtaif9@gmail.com', 7999499720, 'TAIF BUX\r\nBhilai, Durg-Bhilai, (C. G.) | Contact : 7999499720, 8889988030 | Email: sheikhtaif9@gmail.com\r\n \r\nDear, HI-TEK SUPER SPECIALIST HOSPITAL \r\n\r\nWith the utmost eagerness, I want to express my interest & passion for the work in your Hospital. As a store manager & Site Engineer driven employee, I know my versatile skills and qualifications will make me an asset to the team.\r\n                                                              \r\nAs you will find on my resume, I have had a variety of experiences with many different roles in Medi Indian, or under Private Contractor, from my time  at 2019 my time at 2022.\r\n \r\nAs a prospective employee, I immediately can bring the following qualities to the team:\r\n\r\n \r\nWhile my resume provides a quick summary of my experiences, I hope to have the opportunity to share how I can bring value to your company’s needs.\r\n \r\nSincerely,\r\n \r\nTaif Bux\r\n\r\n', 'inbound3516054048284122541.pdf', '2023-07-27 02:29:18', '157.34.99.47', 'Chrome'),
	(77, 'Taif Bux', 'sheikhtaif9@gmail.com', 7999499720, 'TAIF BUX\r\nBhilai, Durg-Bhilai, (C. G.) | Contact : 7999499720, 8889988030 | Email: sheikhtaif9@gmail.com\r\n \r\nDear, HI-TEK SUPER SPECIALIST HOSPITAL \r\n\r\nWith the utmost eagerness, I want to express my interest & passion for the work in your Hospital. As a store manager & Site Engineer driven employee, I know my versatile skills and qualifications will make me an asset to the team.\r\n                                                              \r\nAs you will find on my resume, I have had a variety of experiences with many different roles in Medi Indian, or under Private Contractor, from my time  at 2019 my time at 2022.\r\n \r\nAs a prospective employee, I immediately can bring the following qualities to the team:\r\n\r\n \r\nWhile my resume provides a quick summary of my experiences, I hope to have the opportunity to share how I can bring value to your company’s needs.\r\n \r\nSincerely,\r\n \r\nTaif Bux\r\n\r\n', 'inbound35160540482841225411.pdf', '2023-07-27 02:29:35', '157.34.99.47', 'Chrome');

-- Dumping structure for table hitekhos_database.tbl_department
CREATE TABLE IF NOT EXISTS `tbl_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `browser` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table hitekhos_database.tbl_department: ~30 rows (approximately)
INSERT INTO `tbl_department` (`id`, `department_name`, `status`, `ip_address`, `browser`, `create_at`, `modified_at`) VALUES
	(21, 'Neurology', 0, '::1', 'Chrome', '2023-08-16 11:18:35', '2023-08-16 11:18:35'),
	(22, 'Neuro Surgery', 0, '::1', 'Chrome', '2022-09-29 09:41:43', NULL),
	(23, 'Cardiology', 0, '::1', 'Chrome', '2022-09-29 09:41:53', NULL),
	(24, 'Gynecologist', 0, '::1', 'Chrome', '2022-09-29 09:42:00', NULL),
	(25, 'Pulmonary & Respiratory Medicine', 0, '::1', 'Chrome', '2022-09-29 09:42:10', NULL),
	(26, 'Gastro Enterology', 0, '::1', 'Chrome', '2022-09-29 09:42:18', NULL),
	(27, 'Nephrology', 0, '::1', 'Chrome', '2022-09-29 09:42:50', NULL),
	(28, 'Consultant Physician', 0, '::1', 'Chrome', '2022-09-29 09:42:58', NULL),
	(29, 'Orthopedic', 0, '::1', 'Chrome', '2022-09-29 09:43:12', NULL),
	(30, 'Laparoscopic & General Surgeon', 0, '::1', 'Chrome', '2022-09-29 09:43:21', NULL),
	(31, 'Plastic Surgeon', 0, '::1', 'Chrome', '2022-09-29 09:43:29', NULL),
	(32, 'Paediatrics', 0, '::1', 'Chrome', '2022-09-29 09:43:36', NULL),
	(33, 'ENT', 0, '::1', 'Chrome', '2022-09-29 09:43:47', NULL),
	(34, 'Psychiatric', 0, '::1', 'Chrome', '2022-09-29 09:43:54', NULL),
	(35, 'Cardiac Anaesthesia', 0, '::1', 'Chrome', '2022-09-29 09:44:04', NULL),
	(36, 'Anaesthesia', 0, '::1', 'Chrome', '2022-09-29 09:44:13', NULL),
	(37, 'Diabetology', 0, '::1', 'Chrome', '2022-09-29 09:44:21', NULL),
	(38, 'Maxillofacial Surgeon', 0, '::1', 'Chrome', '2022-09-29 09:44:31', NULL),
	(39, 'Opthalmology', 0, '::1', 'Chrome', '2022-09-29 09:44:39', NULL),
	(40, 'Radiology', 0, '::1', 'Chrome', '2022-09-29 09:44:48', NULL),
	(41, 'Pathologist', 0, '::1', 'Chrome', '2022-09-29 09:44:55', NULL),
	(42, 'Advanced Dermatology', 0, '::1', 'Chrome', '2022-09-29 09:45:02', NULL),
	(43, 'Dentist', 0, '::1', 'Chrome', '2022-09-29 09:45:12', NULL),
	(44, 'Physiotherapist', 0, '::1', 'Chrome', '2022-09-29 09:45:19', NULL),
	(45, 'Medicine', 0, '127.0.0.1', 'Firefox', '2022-10-01 12:48:29', NULL),
	(46, 'Cardiac Surgeon & Medical Superintendent ', 0, '47.247.213.70', 'Chrome', '2022-10-07 17:07:47', NULL),
	(47, 'Ophthalmologist & Retina', 0, '182.77.95.108', 'Chrome', '2022-10-08 11:00:29', NULL),
	(48, 'Urology', 0, '182.77.95.108', 'Chrome', '2022-10-08 11:48:06', NULL),
	(49, 'Dietician & Nutritionist ', 0, '182.77.95.108', 'Chrome', '2022-10-08 12:24:37', NULL),
	(50, 'Anaesthesiology & Critical Care', 0, '157.34.52.180', 'Chrome', '2022-11-08 12:53:33', NULL);

-- Dumping structure for table hitekhos_database.tbl_doctor
CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(50) NOT NULL,
  `consultancy` varchar(50) DEFAULT NULL,
  `role` varchar(8) NOT NULL,
  `department_id` varchar(50) NOT NULL,
  `specialisation` varchar(80) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `educational_background` text NOT NULL,
  `key_skills` text NOT NULL,
  `award` text NOT NULL,
  `publications` text NOT NULL,
  `doctor_photo` text NOT NULL,
  `doctor_detial` text NOT NULL,
  `unit` varchar(20) NOT NULL,
  `new_url` varchar(50) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `browser` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table hitekhos_database.tbl_doctor: ~41 rows (approximately)
INSERT INTO `tbl_doctor` (`id`, `doctor_name`, `consultancy`, `role`, `department_id`, `specialisation`, `qualification`, `educational_background`, `key_skills`, `award`, `publications`, `doctor_photo`, `doctor_detial`, `unit`, `new_url`, `ip_address`, `browser`, `status`, `create_at`, `modified_at`) VALUES
	(37, 'Mr.  Manoj Agrawal', NULL, 'Director', '30', 'General & Laparoscopic Surgery ', 'MBBS', '[""]', '[""]', '[""]', '[""]', 'doctor.jpg', 'From the Director, With advancements in medical and health care facilities, treatment options have improved many folds. But it has also raised the operating and treatment costs. Moving out of the comfort of your own city, adds to the misery. We have tried to address this issue by providing accessible and cost effective neighborhood healthcare facility for the entire Durg Division. The Hi-Tek boasts of a ‘state-of-the-art’ infrastructure committed to provide comprehensive & cost effective healthcare services through a team of qualified, competent, highly skilled & committed team of health care professionals. We already have comprehensive cardiac care, neurology and neurosurgery department, General & Laparoscopic Surgery including VATS facility. We also have a 24x7 monitored dialysis centre and joint replacement facilities. Our next step would be to come up with the first organ transplant centre of the region.\r\n', 'Regular', 'Mr.--Manoj-Agrawal', '122.175.132.139', 'Chrome', 0, '2022-10-04 12:09:13', '0000-00-00 00:00:00'),
	(39, 'Dr. Nachiket Dixit ', '600', 'Doctor', '21', 'Neurologist', 'MBBS, MD(Med.),  DM(Neuro)', '["MBBS"," MD(Med.)","DM(Neuro)"]', '["Consultant Neurologist at Wadia Hospital, Solapur from 1997 - 1998.","Consultant Neurologist at CM Hospital, Bhilai from 2000-2020.","Consultant Neurologist at Hi Tek Superspeciality Hospital Bhilai from 2020 till date."]', 'null', 'null', 'Dr-Nachiket-Dixit114.jpg', 'MBBS, MD(Med.), DM (Neuro) A veteran in the field with around four decades of experience, is the most sought after neurologist of the twin city. ', 'Regular', 'Dr.-Nachiket-Dixit-', '::1', 'Chrome', 0, '2023-08-19 12:17:08', '0000-00-00 00:00:00'),
	(40, 'Dr. Akash Bakhshi', '600', 'Doctor', '23', 'Cardiologist', 'MBBS, DNB(Med.) , DNB (Card.)', '["MBBS","DNB(Med.) ","DNB (Card.)"]', '["Visiting Consultant Cardiologist, June 2014 - till now","Served as Associate Consultant at Medanta Heart Institute, Medanta - The Medicity, Gurgaon. April 2012 to April 2014 ","Served as a Senior Resident\\/DNB Cardiology Fellow at Department of Cardiology, Sir Ganga Ram Hospital, New Delhi, August 2005-April 2012","Served as a Junior Resident\\/ DNB Medicine Fellow at Department of Medicine, Jawahar Lal Nehru Hospital & Research Centre, Bhilai, Chhattisgarh October 2000 - July 2005 ","October 1998-October 1999: 1 year of rotator MBBS inrernship at Govt. Medical College allied hospitals, Raipur"]', 'null', 'null', 'Dr-Akash-Bakhshi1.jpg', 'MBBS, DNB (Cardio) is a popular intervention cardiologist of the region having more than three decades of experience. With more than 95% success rate he is the family doctor to hundreds of cardiac arrest survivors. ', 'Regular', 'Dr.-Akash-Bakhshi', '::1', 'Chrome', 0, '2023-05-20 16:52:29', '0000-00-00 00:00:00'),
	(41, 'Dr. Ranjan Sen Gupta ', NULL, 'Doctor', '46', 'Cardiac Surgeon & Medical Superintendent ', 'MBBS, MS , MCH ', '["MBBS","MS","M.ch (CVTS)"]', '["Internship: April 1979 to May 1980: Done in a large industrial hospital (Bhilai Steel Plant) and attended various medical and surgical and obstetric emergencies. Participated in various family planning, child health and eye camps.","House Job: (in General Surgery)- May 1980 to September 1981: Worked in Department of Surgery in Bhilai Steel Plant Hospital, affiliated to Pt. J.L.N Medical college, Raipur, Ravishankar University, and, assisted in all routine surgical operations including abdominal, & neck operations and vascular emergencies. First assistant in operations like closed mitral valvotomy, esophageal surgeries and surgery for portal hypertension. Participated actively in weekly clinical presentations, including journal clubs.","Post Graduation: February 1983 to May 1985: Department of Surgery, Medical College, Jabalpur: Independently performed all routine and emergency surgical procedures. Assisted in closed heart and vascular cases, pediatric surgery and urology cases. Took active participation in undergraduate teaching sessions, presented seminars with special reference to current trends in the management of various surgical operations. Independently performed abdominal surgical procedures as a senior resident, during emergency duties. Managed the E.R.(Casualty), as a senior resident on emergency duty, on a weekly rotation basis.","Senior Registrar (Cardiothoracic Surgery): Jaslok Hospital and Research Center, Bombay: May 1986 to February 1987: Assisted in about 200 open heart surgical cases including congenital heart disorders, coronary artery diseases, lung and vascular cases and managed independently post operative open heart surgical cases in intensive care unit.","M.Ch. Student: First assistant in all open heart cases including cyanotic heart diseases. valvular and coronary artery surgeries, ventricular and aortic aneurysms (including cases done in total circulatory arrest). Independently operated cases like ASD and open mitral valvotomy, operated closed heart surgical cases, c.g. closed mitral valvotomy and surgery for PDA. First assistant in all thoracic surgical cases e.g. pneumonectomy, decortication and traumatic injuries of the lungs. Managed post operative complications independently in the thoracic surgical ICU. Worked as Senior Registrar in N.M. Wadia Institute of Cardiology, Poona, equipped with all modern cardiac surgical equipment. Visited All India Institute of Medical Sciences as an Observer for surgery of complex congenital heart disease."]', 'null', 'null', 'Dr-Ranjan-Sen-Gupta1.jpg', 'MBBS, MS, MCh (CTVS) is a veteran cardiothoracic vascular surgeon with more than four decades of experience. He serves in the dual capacity of a CTVS surgeon and Medical Superintendent. He completes the cardiac care team.', 'Regular', 'Dr.-Ranjan-Sen-Gupta-', '::1', 'Chrome', 0, '2023-05-20 17:00:31', '0000-00-00 00:00:00'),
	(42, 'Dr. Ashish Chand Dewangan ', '400', 'Doctor', '26', 'Gastroenterologist', 'MBBS , MD, DNB', '["MBBS\\u00a0","MD(Med.)"," DNB (Gastro)\\u00a0"]', 'null', 'null', 'null', 'Dr_-Ashish-Chand-Dewangan.jpg', 'MBBS, MD (Medicine), DNB (Gastro) is a popular gastroenterologist of the region. Known for his conservative attitude, he is also well versed in endoscopic procedures.', 'Regular', 'Dr.-Ashish-Chand-Dewangan-', '110.224.200.223', 'Chrome', 0, '2022-11-28 16:28:16', '0000-00-00 00:00:00'),
	(43, 'Dr. Rekha Ratnani', '600', 'Doctor', '24', 'OBS, Gyn & Infertility', 'MBBS, MD (Obs & Gynae)', '["MBBS","MS","MD(OBS\\/GYNEAC)"]', '["Senior Consultant Neurosurgery, Hitek Superspeciality Hospital, Bhilai,  Chattisgarh. Feb 2020 - Continue","Consultant Neurosurgery, Sparsh Multispeciality Hospital, Bhilai, Chhattisgarh, July 2019- January 2020","Associate Consultant Neurosurgery, Paras Hospital, Gurugram, Haryana, April 2019 - June 2019","Consultant Neurosurgery, Sparsh Multispeciality Hospital, Bhilai, Chhattisgarh, December 2018 - March 2019","Senior Resident, Department Of Neurosurgery, SCB Medical College, Cuttack, Odisha, September 2018 - November 2018","MCh Resident, Department Of Neurosurgery, SCB Medical College. Cuttack, Odisha, 2015-2018","General Surgery Resident, MKCG Medical College, Berhampur, Odisha, 2012-2015","Medical Officer, CHC Kolnara, District - Rayagada, Odisha, 2011-2012","Medical Officer, PHC Kelluapalli, District - Ganjam, Odisha, 2009 - 2011."]', 'null', 'null', 'Dr-Rekha-Ratnani1.jpg', 'MBBS, MD (Obs.& Gynae) MS (Gen. Surgery). She has done her fellowship in IVF from Boston, USA. She also has fellowship in Minimal Access Surgery. With more than three decades of experience she has carved herself a niche in the field of fertility treatment.', 'Regular', 'Dr.-Rekha-Ratnani', '::1', 'Chrome', 0, '2023-05-20 17:06:58', '0000-00-00 00:00:00'),
	(44, 'Dr. Deepak Bansal', '400', 'Doctor', '22', 'Neuro-Surgeon', 'MBBS, MS , MCh', '["MBBS","MS ","M.Ch"]', '["Senior Consultant Neurosurgery, Hitek Superspeciality Hospital, Bhilai, Chattisgarh. Feb 2020 - Continue","Consultant Neurosurgery, Sparsh Multispeciality Hospital, Bhilai, Chhattisgarh, July 2019- January 2020","Associate Consultant Neurosurgery, Paras Hospital, Gurugram, Haryana, April 2019-June 2019","Consultant Neurosurgery, Sparsh Multispeciality Hospital, Bhilai, Chhattisgarh, December 2018 - March 2019","Senior Resident, Department Of Neurosurgery, SCB Medical College, Cuttack, Odisha, September 2018 - November 2018","MCh Resident, Department Of Neurosurgery, SCB Medical College, Cuttack, Odisha, 2015-2018","General Surgery Resident, MKCG Medical College, Berhampur, Odisha, 2012-2015","Medical Officer, CHC Kolnara, District - Rayagada, Odisha, 2011-2012","Medical Officer, PHC Kelluapalli, District - Ganjam, Odisha, 2009 2011"]', 'null', 'null', 'Dr-Deepak-Bansal1.jpg', 'MBBS, MS, MCh (Neuro) A well known spine/neurosurgeon of central India, he is one of the most cherished members of our trauma and surgical team. He has a success rate of more than 90%. He completes the neurology team along with a battery of highly professional physiotherapists.', 'Regular', 'Dr.-Deepak-Bansal', '::1', 'Chrome', 0, '2023-05-20 17:09:09', '0000-00-00 00:00:00'),
	(45, 'Dr. Suman Rao', '450', 'Doctor', '21', 'Nephrology ', 'MBBS, MD, Fellowship in Nephrology', '["MBBS","MD ","DNB(NEPHROLOGY)"]', '["2020-Current Consultant and Head, Dept. Of Nephrology, Mittal Hospital, Bhilai","2015-2022 Altis Hospital Bhilai Consultant and Head of the Department of Nephrology","2013-2015 Consultant and Head of the Department of Nephrology at Sparsh Hospital in Bhilai.","2004-2013 Consultant and Head of the Department of Nephrology at the CM Hospital in Bhilal.","2000-2004 Registrar, Dept. Of Nephrology, BMHRC, Bhopal"]', 'null', 'null', 'Dr-Suman-Rao.jpg', 'MBBS, MD (Medicine) is a known figure in the field of dialysis. She has done her fellowship in Nephrology and heads the ultramodern dialysis unit  of the hospital.', 'Regular', 'Dr.-Suman-Rao', '110.224.200.223', 'Chrome', 0, '2022-11-28 16:34:16', '0000-00-00 00:00:00'),
	(46, 'Dr. S S Ghosh', NULL, 'Doctor', '25', 'Chest & Respiratory ', 'MBBS, MD', '[""]', '[""]', 'null', 'null', 'Doctor151.jpg', 'MBBS, MD is a well known chest physician of the twin-city with vast experience in treatment of chronic patients. He was instrumental in saving hundreds of lives during the Covid Pandemic.', 'Visiting Consultant', 'Dr.-S-S-Ghosh', '182.77.95.108', 'Chrome', 0, '2022-10-08 10:35:42', '0000-00-00 00:00:00'),
	(47, 'Dr. Navil Sharma', '200', 'Doctor', '26', 'Consultant Gastro & Laproscopic Surgeon', 'MBBS, MS, EFIAGES,FMAS,FALS(Colo Rectal )', '["MBBS, ","MS","FIAGES ","EFIAGES","FMAS","FALS(Colo Rectal )"]', '["Currently working as a Consultant (General & Laparoscopic surgeon) Hitek Superspeciality Hospital (165 Beded), Bhilai, District- Durg, CG","Lead and assist in a variety of surgical procedures to address abnormalities, injuries, birth defects, and occasionally unwanted growths from patients under a variety of circumstances. Communicate with patients and other medical professionals to create a treatment plan that includes preoperative preparations, surgical protocols, and postoperative care.","Prepare reports and other forms of documentation to keep patient charts updated around the clock during pre- and post-surgical hospital stays."]', 'null', 'null', 'Dr-Navil-Sharma1.jpg', 'MBBS, MS, FIAGES, EFIAGES, FMAS, FALS (Colo-Rectal) is a Gastro and Laparoscopic Surgeon having experience of more than a decade. He is one of the most cherished members of our trauma team. With specialization in minimal access surgeries and Video Assisted Thoracoscopic  Surgeries (VATS), a minimally invasive surgical technique used to diagnose and treat problems in your chest. ', 'Regular', 'Dr.-Navil-Sharma', '::1', 'Chrome', 0, '2023-05-20 17:15:40', '0000-00-00 00:00:00'),
	(48, 'Dr. Rajesh Singhal ', NULL, 'Doctor', '45', 'Medicine', 'MD, DNB (Medicine)', '["MBBS, ","MD","DNB (Med.) ","CCEBDM","ACMDC(Diabetes)"]', 'null', 'null', 'null', 'Dr-Rajesh-Singhal1.jpg', 'MD, DNB (Medicine) is a well known physician of the twin city. Having experience of more than a decade he is a well known diabetes management consultant. He is an expert in the field of life style modification advisor', 'Regular', 'Dr.-Rajesh-Singhal-', '182.77.95.108', 'Chrome', 0, '2022-10-08 11:10:54', '0000-00-00 00:00:00'),
	(49, 'Dr. Devendra Sahu', '200', 'Doctor', '45', 'Medicine', 'MBBS , MD ( Medicine ) ', '["MBBS", "MD ( Med.)"]', '["Worked as junior resident and senior resident at Dr. Bhim Rao Ambedkar Memorial Hospital. Raipur","Internship: Assisting the senior doctors in patient\'s treatment","Periodic meetings with patients with observation for patient improvement and report preparations.","Experience of providing basic treatment in case of emergency."]', 'null', 'null', 'Doctor152.jpg', 'MBBS, MD (Medicine) is a well know physician of the region. Having more than ten years of experience he has vast experience in treatment of critical and chronic diseases.', 'Regular', 'Dr.-Devendra-Sahu', '182.77.95.108', 'Chrome', 0, '2022-10-08 11:31:16', '0000-00-00 00:00:00'),
	(50, 'Dr. Rahul Thakur', '200', 'Doctor', '29', 'Orthopaedic & Joint Replacement', 'MBBS, MS (Ortho)', '["MBBS","MS (Ortho)"]', '["Currently  working  as  Consultant  Orthopaedic surgeon at HITEK Super Speciality Hospital Bhilai from 01\\/01\\/2021 and continuing in same post","Worked as Assistant Professor  since  15\\/07\\/2020 at department of Orthopaedics at Shri Shanakaracharya Institute Of Medical Sciences till  31\\/12\\/2020","Worked as Senior resident in department of Orthopaedics at Shri Shanakaracharya Institute Of Medical Sciences from 14\\/06\\/2019 till 14 \\/07\\/2020."]', 'null', 'null', 'Dr-Rahul-Thakur-11.jpg', 'MBBS, MS (Ortho) is a well known orthopedic and joint replacement surgeon. A young, dynamic and committed surgeon he has carved himself a niche in Bhilai-Durg. His knowledge of sports related injuries is commendable.', 'Regular', 'Dr.-Rahul-Thakur', '::1', 'Chrome', 0, '2023-05-20 17:20:27', '0000-00-00 00:00:00'),
	(54, 'Dr. Mithlesh Dewangan', '200', 'Doctor', '32', 'Peadtric', 'MBBS, MD', '["MBBS", "MD ( Pead.)"]', '["Performed extensive out patient,indoor ward duties and community health clinics.","Worked in Neonatal Intensive Care Unit (NICU), Pediatrics Intensive Care Unit (PICU).","Performed liver biopsy, kidney biopsy,bone marrow aspiration and biopsy, thoracocentesis  ascitic tap and ventricular tap independently.","Well versed in IVcannula insertion, Endo-tracheal tube insertion, Umbilical catheterization, Exchange transfusion, Lumbar puncture, Intra-osseous needle insertion,peritoneal dialysis, Central line insertion, and Ventilator and Pediatric ICU management.","Well versed in handling Pediatrics emergencies like shock,arrhythmias, status asthamaticus, status epilepticus, diabetes ketoacidosis, meningo-encephalitis etc.","Expert in managing malnourished children, worked in MTU (MALNUTRITION TREATMENT UNIT) funded by UNICEF.","Expert in managing acute diarrheal illness under DTTU(DIARRHEA TREATMENT AND TRAINING UNIT).","Attended and worked in Sub-speciality Clinics like Immunisation Clinic, Well Baby Clinic, High Risk Clinic, Nephrology Clinic, Pulmonology and Infectious Disease Clinic, Pediatrics Hematology, Hemophilia and Thalassemia Clinic, Gastroenterology Clinic and Pediatrics Cardiology Clinics."]', 'null', 'null', 'Dr-Mithilesh-Dewangan.jpg', 'MBBS, MD (Pediatrics) Is a well known and popular child specialist of the twin city. Having more than a decade of experience he specializes in care of babies with birth defects and deformities.  ', 'Regular', 'Dr.-Mithlesh-Dewangan', '182.77.95.108', 'Chrome', 0, '2022-10-08 12:29:41', '0000-00-00 00:00:00'),
	(55, 'Dr. Apurv Verma', '200', 'Doctor', '33', 'Ent Surgeon', 'MBBS, MS', '["MBBS", "MS (Ent)"]', '["A Year Bonded Senior Resident (SMO) July 2019- August 2020 At Bhabha Bandra Hospital, Bandra Mumbai, M.H-400050"]', 'null', 'null', 'Dr-Apoorva-Verma.jpg', 'MBBS, MS (ENT) is a well known ENT surgeon. He has been part of the medics team for the President of India. He has a vast experience in facilitating ICU procedures. Having worked in intensive care unit of renowned hospitals in Mumbai.', 'Regular', 'Dr.-Apurv-Verma', '182.77.95.108', 'Chrome', 0, '2022-10-08 13:42:14', '0000-00-00 00:00:00'),
	(56, 'Dr. Garima Balpande', NULL, 'Doctor', '42', 'Dermatologist & Cosmetologist', 'MBBS, MD', '["MBBS", "MD(DERMATOLOGIST)"]', '["Registration No. 2016\\/05\\/0879: Maharshtra Medical  Council, Mumbai","Member of Indian Association of Dermatologists  (IADVL): Registration No. PLM\\/M\\/11931"]', 'null', 'null', 'Dr-Garima-Balpande.jpg', 'MBBS, MD (Dermatology) is a young and dynamic dermatologist and cosmetologist of the city. Apart from treating skin and VD issues she specializes in cosmetic treatments for hair, skin and nails related problems.', 'Regular', 'Dr.-Garima-Balpande', '182.77.95.108', 'Chrome', 0, '2022-10-08 13:59:51', '0000-00-00 00:00:00'),
	(57, 'Dr.  Awani Tiwari ', NULL, 'Doctor', '35', 'Anaesthialogy & Critical Care', 'MBBS, MD', '["MBBS, MD"]', '["Anaesthialogy & Critical Care"]', 'null', 'null', 'female_doctor3.jpg', 'MBBS, MD is a young and dynamic anesthetist and critical care specialist. He is an indispensible member of the ICUs and critical care team.', 'Regular', 'Dr.--Awani-Tiwari-', '182.77.95.108', 'Chrome', 0, '2022-10-08 14:06:34', '0000-00-00 00:00:00'),
	(59, 'Dr. Anup wasnaskar ', NULL, 'Doctor', '35', 'Consultant - Anesthesiologist ', 'MBBS, DNB', '["Secondary DNB in Anaesthesia at JLN Hospital & Research Center, Bhilai","Post Graduate in Diploma  Anaesthesia Government Medical College,  Nagpur, Maharashtra","MBBS  Dr. Panjabrao Alias Bhausaheb"]', '["GMC Super Specialty Hospital, GMC, 05\\/2019-04\\/2020 Nagpur MO\\/Anesthesiologist in Urology & Neuro-Anaesthesia Department"]', 'null', 'null', 'Doctor155.jpg', 'MBBS, DNB is an anesthetist and supports the various surgical teams with round the clock availability.', 'Regular', 'Dr.-Anup-wasnaskar-', '182.77.95.108', 'Chrome', 0, '2022-10-08 16:28:34', '0000-00-00 00:00:00'),
	(60, 'Dr. Preetam Raj Kurrey', '450', 'Doctor', '47', 'Ophthalmologist & Retina', 'MBBS, MS ', '["MBBS","MS "]', '["Ophthalmologist & Retina"]', 'null', 'null', 'female_doctor4.jpg', '', 'Visiting Consultant', 'Dr.-Preetam-Raj-Kurrey', '182.77.95.108', 'Chrome', 0, '2022-10-08 16:36:11', '0000-00-00 00:00:00'),
	(61, 'Dr. Rajni Prajapati', NULL, 'Doctor', '41', 'Pathologist', 'MBBS, DCP, DNB', '["MBBS"," DCP"," DNB", "MD (Path.)"]', '["Peoples medical college Bhopal (MP) (2010-2011) as Demonstrator","Peoples medical college Bhopal (MP) (2010-2011) as Demonstrator","CCM Medical College Kachandur Durg (CC) (2014-2017) as Demonstrator","SSIMS Medical College Junwani, Durg (CG) (2019 till now us Assistant professor"]', 'null', 'null', 'female_doctor5.jpg', 'MBBS, DCP, DNB heads the department of pathology. With a vast experience of over a decade she has been instrumental in making diagnosis fast and reliable.', 'Regular', 'Dr.-Rajni-Prajapati', '182.77.95.108', 'Chrome', 0, '2022-10-08 16:44:24', '0000-00-00 00:00:00'),
	(62, 'Dr. Shivendra Tiwari ', NULL, 'Doctor', '48', 'Urologist ', 'MBBS, MS , DNB( Uro-Surg)', '["MBBS","MS", "DNB (Urology) "]', '["Urologist, Andrologist & Kidney Transplant Surgeon who specializes in congenital, pediatric and geriatric patients"]', 'null', 'null', 'Doctor156.jpg', ' MBBS, MS, DNB (Urology) heads the urology department of the hospital. He is a well known Urologist, Andrologist & Kidney Transplant Surgeon who specializes in congenital, pediatric and geriatric patients. ', 'Visiting Consultant', 'Dr.-Shivendra-Tiwari-', '182.77.95.108', 'Chrome', 0, '2022-10-08 17:21:42', '0000-00-00 00:00:00'),
	(63, 'Dr. Roshni Gohil', '150', 'Doctor', '43', 'Dentist ', 'BDS , FS (Dental & Cosmetology)', '["BDS","FS (Dental & Cosmetology)"]', '["Currently Practicing Keyur Dental Clinic, Nandini Road Bhilai.","2 Years of Practice In Bardia Dental Clinic, Pachpedinaka Raipur (C.G.) From May 2017 to April 2019.","1 Year 3 Months of Practice In Chhattisgarh Dental College, Rajnandgaon (C.G.) From January 2016 to April 2017."]', 'null', 'null', 'Dr-Roshni-Gohil.jpg', 'BDS takes care of the oral health of in-patients. At the same time she is available for consultation and treatment of various oral health issues including cosmetic dentistry.', 'Regular', 'Dr.-Roshni-Gohil', '182.77.95.108', 'Chrome', 0, '2022-10-08 17:43:57', '0000-00-00 00:00:00'),
	(64, 'Dr. Mainak Deb Sikdar', NULL, 'Doctor', '44', 'Psychiatrist ', 'MBBS , Diploma in Psychiatrist', 'null', 'null', 'null', 'null', 'Dr_-Mainak-Deb-Sikdar.jpg', 'MBBS (Dip. Psychiatry) is a well established psychiatrist of the region with vast experience of over 4 decades. He is a well known figure in the field of de-addiction and mental health problems of the senior citizens.', 'Regular', 'Dr.-Mainak-Deb-Sikdar', '110.224.200.223', 'Chrome', 0, '2022-11-28 16:55:02', '0000-00-00 00:00:00'),
	(65, 'Dr. Archana lachhwani', '350', 'Doctor', '44', 'Physiotherapist ', 'BPT ', '["BPT "]', '["Physiotherapist "]', 'null', 'null', 'Dr-Archana-Lachhwani.jpg', '', 'Regular', 'Dr.-Archana-lachhwani', '182.77.95.108', 'Chrome', 0, '2022-10-08 17:51:45', '0000-00-00 00:00:00'),
	(66, 'Dr. Romila Raj ', NULL, 'Doctor', '44', 'Physiotherapist ', 'BPT', '["BPT"]', '["Physiotherapist "]', 'null', 'null', 'Doctor158.jpg', '', 'Regular', 'Dr.-Romila-Raj-', '182.77.95.108', 'Chrome', 0, '2022-10-08 17:53:09', '0000-00-00 00:00:00'),
	(67, 'Dr. Pratha Bhatt', '250', 'Doctor', '49', 'Dietician & Nutritionist ', 'M.Sc (Food & Nutritions ) , Diploma in CCN (Certified Critical care nutri CDE)', '["M.Sc (Food & Nutritions )"]', 'null', 'null', 'null', 'Dr-Ptatha-Bhatt.jpg', '', 'Regular', 'Dr.-Pratha-Bhatt', '110.224.200.223', 'Chrome', 0, '2022-11-28 16:52:36', '0000-00-00 00:00:00'),
	(68, 'Dr. Avani Tiwari ', NULL, 'Doctor', '50', 'Anaesthesiology & Critical Care', 'MBBS, MD', '["MBBS","MD","DNB\',"DA"]', '[""]', 'null', 'null', 'pngtree-female-doctor-vector-illustration-png-image_2026067_(1)11.jpg', '', 'Regular', 'Dr.-Avani-Tiwari-', '157.34.52.180', 'Chrome', 0, '2022-11-08 18:24:52', '0000-00-00 00:00:00'),
	(69, 'Dr. Shri Ranjan Rao', NULL, 'Doctor', '40', 'Radiologist', 'MBBS, MD, DNB (Radiology)', '["DNB","(MD/MS)"]', 'null', 'null', 'null', 'Dr-Shri-Ranjan-Rao.jpg', '', 'Regular', 'Dr.-Shri-Ranjan-Rao', '110.224.200.223', 'Chrome', 0, '2022-11-28 16:49:43', '0000-00-00 00:00:00'),
	(70, 'Dr. Pratik Jain ', NULL, 'Doctor', '50', 'Critical Care Medicine', 'MBBS,MD Anesthesia,IDCCM,DNB Critical Care', '["","MBBS","MD Anesthesia","IDCCM","DNB Critical Care"]', '[""]', 'null', 'null', 'Doctor27.jpg', '', 'Regular', 'Dr.-Pratik-Jain-', '::1', 'Chrome', 0, '2023-05-20 18:10:13', '0000-00-00 00:00:00'),
	(71, 'Dr.Ajita Mishra ', NULL, 'Director', '36', 'Anaesthesiology', 'MBBS,  Diploma In Anaesthesiology ', '["MBBS  ","Diploma In Anaesthesiology "]', '[""]', 'null', 'null', 'female_doctor6.jpg', '', 'Regular', 'Dr.Ajita-Mishra-', '::1', 'Chrome', 0, '2023-05-20 18:12:38', '0000-00-00 00:00:00'),
	(72, 'Dr. Jyoti Joshi ', NULL, 'Doctor', '36', 'Anaesthesiology', 'MBBS, DNB ', '["MBBS","DNB "]', '[""]', 'null', 'null', 'female_doctor7.jpg', '', 'Regular', 'Dr.-Jyoti-Joshi-', '::1', 'Chrome', 0, '2023-05-20 18:15:16', '0000-00-00 00:00:00'),
	(73, 'Dr. Deepak Ku Sinha', '200', 'Doctor', '29', 'Orthopaedic & Joint Replacement', 'MBBS, DNB (Ortho) SURGEON', '["MBBS","DNB (Ortho) SURGEON"]', '[""]', 'null', 'null', 'Doctor28.jpg', '', 'Regular', 'Dr.-Deepak-Ku-Sinha', '::1', 'Chrome', 0, '2023-05-20 18:16:48', '0000-00-00 00:00:00'),
	(74, 'Dr. Mithlesh Kumar Yadu', NULL, 'Doctor', '32', 'Pediatrics', 'MBBS, DNB, Pediatrics', '["MBBS","DNB","Pediatrics"]', '[""]', 'null', 'null', 'Doctor29.jpg', '', 'Regular', 'Dr.-Mithlesh-Kumar-Yadu', '::1', 'Chrome', 0, '2023-05-20 18:18:29', '0000-00-00 00:00:00'),
	(75, 'Dr. C Sudhakar ', '500', 'Doctor', '32', 'Pediatrics', 'MBBS, MD (Pediatrics)', '["MBBS,","MD (Pediatrics)"]', '[""]', 'null', 'null', 'Doctor30.jpg', '', 'Visiting Consultant', 'Dr.-C-Sudhakar-', '::1', 'Chrome', 0, '2023-05-20 18:20:21', '0000-00-00 00:00:00'),
	(76, 'Dr. Yasha Upendra', NULL, 'Doctor', '37', 'Dermatology', 'MBBS,MD(DERMATOLOGIST)', '["MBBS","MD(DERMATOLOGIST)"]', '[""]', 'null', 'null', 'Doctor31.jpg', '', 'Visiting Consultant', 'Dr.-Yasha-Upendra', '::1', 'Chrome', 0, '2023-05-20 18:22:28', '0000-00-00 00:00:00'),
	(77, 'Dr. Prashant  Kaser ', NULL, 'Doctor', '29', 'Oncologist', 'MBBS, MD Radiation Oncology & Radiation Medicine', '["MBBS"," MD Radiation Oncology & Radiation Medicine"]', '[""]', 'null', 'null', 'Doctor32.jpg', '', 'Visiting Consultant', 'Dr.-Prashant--Kaser-', '::1', 'Chrome', 0, '2023-05-20 18:24:25', '0000-00-00 00:00:00'),
	(78, 'Dr. Anjali Goyal ', NULL, 'Doctor', '40', 'Radiology', 'MD, Radiology', '["MD","Radiology"]', '[""]', 'null', 'null', 'female_doctor6.jpg', '', 'Regular', 'Dr.-Anjali-Goyal-', '::1', 'Chrome', 0, '2023-05-20 18:25:20', '0000-00-00 00:00:00'),
	(79, 'Dr. Chandra Shekhar Ghosh', NULL, 'Doctor', '45', 'Respiratory Medicine', 'MBBS,MD,DNB(Respiratory Disease)', '["MBBS","MD","DNB(Respiratory Disease)"]', '[""]', 'null', 'null', 'Doctor34.jpg', '', 'Regular', 'Dr.-Chandra-Shekhar-Ghosh', '::1', 'Chrome', 0, '2023-05-20 18:27:10', '0000-00-00 00:00:00'),
	(80, 'Dr. Smaran Cladius', '450', 'Doctor', '45', 'Respiratory Medicine', 'MBBS,MD (Respiratory Disease)', '["MBBS","MD (Respiratory Disease)"]', '[""]', 'null', 'null', 'Doctor35.jpg', '', 'Visiting Consultant', 'Dr.-Smaran-Cladius', '::1', 'Chrome', 0, '2023-05-20 18:28:38', '0000-00-00 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
