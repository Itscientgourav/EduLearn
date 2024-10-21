-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schools`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `currency_symbol` varchar(5) DEFAULT NULL,
  `exchange_rate_to_usd` decimal(10,4) NOT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `phone_prefix` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `currency_code`, `currency_symbol`, `exchange_rate_to_usd`, `timezone`, `phone_prefix`, `created_at`) VALUES
(1, 'India', 'IN', 'INR', '₹', '75.0000', 'Asia/Kolkata', '+91', '2024-10-21 11:41:40'),
(2, 'United States', 'US', 'USD', '$', '1.0000', 'America/New_York', '+1', '2024-10-21 11:41:40'),
(3, 'United Kingdom', 'GB', 'GBP', '£', '0.7500', 'Europe/London', '+44', '2024-10-21 11:41:40'),
(4, 'Australia', 'AU', 'AUD', 'A$', '1.3500', 'Australia/Sydney', '+61', '2024-10-21 11:41:40'),
(5, 'Canada', 'CA', 'CAD', 'C$', '1.2800', 'America/Toronto', '+1', '2024-10-21 11:41:40'),
(6, 'China', 'CN', 'CNY', '¥', '6.4500', 'Asia/Shanghai', '+86', '2024-10-21 11:41:40'),
(7, 'Russia', 'RU', 'RUB', '₽', '75.0000', 'Europe/Moscow', '+7', '2024-10-21 11:41:40'),
(8, 'Germany', 'DE', 'EUR', '€', '0.8500', 'Europe/Berlin', '+49', '2024-10-21 11:41:40'),
(9, 'Japan', 'JP', 'JPY', '¥', '110.0000', 'Asia/Tokyo', '+81', '2024-10-21 11:41:40'),
(10, 'Brazil', 'BR', 'BRL', 'R$', '5.3000', 'America/Sao_Paulo', '+55', '2024-10-21 11:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `course_credit` int(11) DEFAULT NULL,
  `course_duration` int(11) DEFAULT NULL,
  `course_fee` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_credit`, `course_duration`, `course_fee`) VALUES
(1, 'Mathematics', 4, 12, '600.00'),
(2, 'Physics', 3, 10, '500.00'),
(3, 'History', 2, 8, '400.00'),
(4, 'Computer Science', 5, 16, '800.00'),
(5, 'Data Structures', 3, 6, '400.00'),
(6, 'Machine Learning', 4, 8, '800.00'),
(7, 'Database Systems', 3, 6, '500.00'),
(8, 'Operating Systems', 2, 5, '300.00'),
(9, 'Web Development', 2, 4, '250.00'),
(10, 'Artificial Intelligence', 4, 7, '1000.00'),
(11, 'Mobile App Development', 3, 5, '600.00'),
(12, 'Cloud Computing', 4, 6, '900.00'),
(13, 'Software Engineering', 3, 6, '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `course_assignments`
--

CREATE TABLE `course_assignments` (
  `assignment_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `professor_id` int(11) DEFAULT NULL,
  `assignment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_assignments`
--

INSERT INTO `course_assignments` (`assignment_id`, `course_id`, `professor_id`, `assignment_date`) VALUES
(1, 1, 1, '2023-08-20'),
(2, 2, 2, '2023-08-21'),
(3, 3, 4, '2023-08-22'),
(4, 4, 3, '2023-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  `grade` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `student_id`, `course_id`, `enrollment_date`, `grade`) VALUES
(1, 1, 1, '2023-09-01', 'A'),
(2, 1, 2, '2023-09-02', 'B'),
(3, 2, 3, '2023-09-03', 'C'),
(4, 3, 1, '2023-09-04', 'B'),
(5, 3, 4, '2023-09-05', 'A'),
(6, 4, 4, '2023-09-06', 'F'),
(7, 1, 1, '2019-09-01', 'B'),
(8, 1, 2, '2019-09-15', 'A'),
(9, 2, 2, '2018-06-01', 'A'),
(10, 2, 3, '2018-06-05', 'B'),
(11, 3, 4, '2017-07-20', 'C'),
(12, 3, 5, '2017-08-10', 'A'),
(13, 4, 1, '2016-04-01', 'B'),
(14, 4, 3, '2016-04-15', 'A'),
(15, 5, 6, '2020-08-01', 'B'),
(16, 5, 7, '2020-08-10', 'A'),
(17, 6, 2, '2019-03-05', 'A'),
(18, 6, 8, '2019-03-20', 'A'),
(19, 7, 5, '2018-09-12', 'C'),
(20, 7, 9, '2018-09-25', 'B'),
(21, 8, 1, '2019-02-12', 'A'),
(22, 8, 3, '2019-02-28', 'A'),
(23, 9, 6, '2020-05-14', 'B'),
(24, 9, 8, '2020-06-01', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `payment_method` enum('Credit Card','Debit Card','UPI','Net Banking','Cash') DEFAULT NULL,
  `payment_status` enum('Pending','Completed','Failed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `student_id`, `course_id`, `payment_date`, `amount_paid`, `payment_method`, `payment_status`) VALUES
(1, 1, 1, '2019-09-10', '400.00', NULL, NULL),
(2, 1, 2, '2019-09-20', '800.00', NULL, NULL),
(3, 2, 2, '2018-06-10', '800.00', NULL, NULL),
(4, 2, 3, '2018-06-15', '500.00', NULL, NULL),
(5, 3, 4, '2017-07-25', '300.00', NULL, NULL),
(6, 3, 5, '2017-08-20', '250.00', NULL, NULL),
(7, 4, 1, '2016-04-05', '400.00', NULL, NULL),
(8, 4, 3, '2016-04-20', '500.00', NULL, NULL),
(9, 5, 6, '2020-08-05', '1000.00', NULL, NULL),
(10, 5, 7, '2020-08-15', '600.00', NULL, NULL),
(11, 6, 2, '2019-03-10', '800.00', NULL, NULL),
(12, 6, 8, '2019-03-25', '900.00', NULL, NULL),
(13, 7, 5, '2018-09-15', '250.00', NULL, NULL),
(14, 7, 9, '2018-09-30', '700.00', NULL, NULL),
(15, 8, 1, '2019-02-15', '400.00', NULL, NULL),
(16, 8, 3, '2019-03-05', '500.00', NULL, NULL),
(17, 9, 6, '2020-05-20', '1000.00', NULL, NULL),
(18, 9, 8, '2020-06-10', '900.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `professor_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`professor_id`, `first_name`, `last_name`, `email`, `department`) VALUES
(1, 'Alice', 'Williams', 'alice.williams@example.com', 'Mathematics'),
(2, 'Bob', 'Johnson', 'bob.johnson@example.com', 'Physics'),
(3, 'Charlie', 'Brown', 'charlie.brown@example.com', 'Computer Science'),
(4, 'Diana', 'Clark', 'diana.clark@example.com', 'History');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `age` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `enrollment_year` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `email`, `phone_number`, `gender`, `age`, `date_of_birth`, `enrollment_year`, `status`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '1234567890', 'Male', 23, '2000-01-15', 2018, 1),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '0987654321', 'Female', 23, '1999-05-25', 2017, 1),
(3, 'Nikky', 'Brown', 'sam.brown@example.com', '1122334455', 'Male', 22, '2001-07-10', 2019, 1),
(4, 'Anna', 'Green', 'anna.green@example.com', '2233445566', 'Female', 23, '2002-11-11', 2020, 1),
(5, 'David', 'Green', 'david.green@example.com', '555-9871234', 'Male', 23, '2001-03-12', 2019, 1),
(6, 'Sophia', 'Johnson', 'sophia.johnson@example.com', '555-9875678', 'Female', 23, '2000-07-25', 2018, 1),
(7, 'Isabella', 'Clark', 'isabella.clark@example.com', '555-1230987', 'Female', 23, '1999-10-30', 2017, 1),
(8, 'Ramesh', 'Brown', 'michael.brown@example.com', '555-4567890', 'Male', 21, '1998-02-18', 2016, 1),
(9, 'Emily', 'Williams', 'emily.williams@example.com', '555-6784321', 'Female', 23, '2002-06-22', 2020, 1),
(10, 'Liam', 'Smith', 'liam.smith@example.com', '555-7650981', 'Male', 23, '2001-05-14', 2019, 0),
(11, 'Noah', 'Jones', 'noah.jones@example.com', '555-9032145', 'Male', 23, '2000-09-05', 2018, 0),
(12, 'Putul', 'Davis', 'emma.davis@example.com', '555-4098761', 'Female', 44, '2001-11-12', 2019, 0),
(13, 'Olivia', 'Moore', 'olivia.moore@example.com', '555-3456781', 'Female', 23, '2003-04-09', 2020, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_assignments`
--
ALTER TABLE `course_assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_assignments`
--
ALTER TABLE `course_assignments`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_assignments`
--
ALTER TABLE `course_assignments`
  ADD CONSTRAINT `course_assignments_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `course_assignments_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`professor_id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
