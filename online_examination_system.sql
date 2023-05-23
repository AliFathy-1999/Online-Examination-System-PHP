-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2020 at 09:54 AM
-- Server version: 5.7.20
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_examination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Allahabad'),
(2, 'Varanasi');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL,
  `class_title` varchar(100) NOT NULL,
  `class_description` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_title`, `class_description`) VALUES
(7, 'BCA', 'BCA Class'),
(8, 'MCA', 'MCA Class'),
(12, 'B.Tech', 'B.Tech Class'),
(13, 'M.Tech', 'M.Tech Class'),
(14, 'MBA', 'MBA Class');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `department_description` varchar(255) NOT NULL,
  `department_code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_title`, `department_description`, `department_code`) VALUES
(4, 'College of Industrial Technology', 'College of Industrial Technology', 'COM'),
(5, 'Science Department', 'Science Department', 'Science'),
(6, 'School of Arts and Science', 'School of Arts and Science', 'SAS'),
(7, 'College of Education', 'College of Education', 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `login_level`
--

CREATE TABLE IF NOT EXISTS `login_level` (
  `level_id` int(11) NOT NULL,
  `level_title` varchar(255) NOT NULL,
  `level_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `marks_id` int(11) NOT NULL,
  `marks_exam_id` varchar(255) NOT NULL,
  `marks_student_id` varchar(255) NOT NULL,
  `marks_subject_id` varchar(255) NOT NULL,
  `marks_written` varchar(255) NOT NULL,
  `marks_practical` varchar(255) NOT NULL,
  `marks_semestor_id` varchar(255) NOT NULL,
  `marks_description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `marks_exam_id`, `marks_student_id`, `marks_subject_id`, `marks_written`, `marks_practical`, `marks_semestor_id`, `marks_description`) VALUES
(2, '1', '1', '1', '97', '49', '1', 'C Language and Prgramming Language Marks'),
(3, '1', '1', '2', '78', '65', '4', 'Advance Prgramming in C'),
(4, '1', '1', '6', '67', '87', '4', 'CAD paper'),
(5, '1', '1', '4', '86', '68', '4', 'RDBMS Written and Practical Language'),
(6, '1', '1', '5', '75', '54', '4', 'VB.Net Paper');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_class_id` varchar(255) NOT NULL,
  `quiz_teacher_id` varchar(255) NOT NULL,
  `quiz_title` varchar(255) NOT NULL,
  `quiz_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_class_id`, `quiz_teacher_id`, `quiz_title`, `quiz_description`) VALUES
(2, '13', '6', 'Quiz for Class BSIS-3A First Year ', 'Quiz for Class BSIS-3A First Year '),
(3, '12', '6', 'Java Quiz', 'Quiz 2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE IF NOT EXISTS `quiz_question` (
  `qq_id` int(11) NOT NULL,
  `qq_quiz_id` varchar(100) NOT NULL,
  `qq_question` text NOT NULL,
  `qq_option1` varchar(500) NOT NULL,
  `qq_option2` varchar(500) NOT NULL,
  `qq_option3` varchar(500) NOT NULL,
  `qq_option4` varchar(500) NOT NULL,
  `qq_correct` varchar(500) NOT NULL,
  `qq_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`qq_id`, `qq_quiz_id`, `qq_question`, `qq_option1`, `qq_option2`, `qq_option3`, `qq_option4`, `qq_correct`, `qq_description`) VALUES
(2, '2', 'int stands for in PHP ?', 'Integer', 'Integrated', 'Init', 'Insert', 'Integer', 'int stands for in PHP ?'),
(3, '3', 'What is an applet?', 'An applet is a Java program that runs in a Web browser.', 'Applet is a standalone java program.', 'Applet is a tool.', 'Applet is a run time environment.   Show Answer', 'An applet is a Java program that runs in a Web browser.', 'What is an applet?'),
(4, '2', 'What is full form of PHP ?', 'Hyper text PHP', 'PHP Hyper Text', 'Pharmacy Photon', 'Personal Home Page', 'Personal Home Page', 'Personal Home Page'),
(5, '2', 'All variables in PHP start with which symbol?', '&', '!', '$', '=', '$', 'All variables in PHP start with which symbol?'),
(6, '2', 'How do you write "Hello World" in PHP', 'Document.Write("Hello World");', '"Hello World";', 'echo "Hello World";', 'count  "Hello World";', 'echo "Hello World";', 'How do you write "Hello World" in PHP'),
(7, '2', 'What is the correct way to end a PHP statement?', 'New line', ':', ';', 'Enld', ';', 'What is the correct way to end a PHP statement?'),
(8, '3', 'What is correct syntax for main method of a java class?', 'public static int main(String[] args)', 'public int main(String[] args)', 'public static void main(String[] args)', 'None of the above.', 'public static void main(String[] args)', 'What is correct syntax for main method of a java class?'),
(9, '3', 'Method Overloading is an example of', 'Static Binding.', 'Static Binding.  B - Dynamic Binding.', 'Both of the above.', 'None of the above.   Show Answer', 'Static Binding.', 'Method Overloading is an example of'),
(10, '3', ' In which case, a program is expected to recover?', 'If an error occurs.', 'If an exception occurs.', 'Both of the above.', 'None of the above.', 'If an exception occurs.', ' In which case, a program is expected to recover?');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

CREATE TABLE IF NOT EXISTS `quiz_result` (
  `qr_id` int(11) NOT NULL,
  `qr_quiz_id` varchar(255) NOT NULL,
  `qr_student_id` varchar(255) NOT NULL,
  `qr_total_question` varchar(255) NOT NULL,
  `qr_answer` varchar(255) NOT NULL,
  `qr_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_result`
--

INSERT INTO `quiz_result` (`qr_id`, `qr_quiz_id`, `qr_student_id`, `qr_total_question`, `qr_answer`, `qr_date`) VALUES
(3, '2', '1', '5', '1', '2020-03-27 09:31:53'),
(4, '3', '1', '5', '2', '2020-03-27 09:32:23'),
(5, '2', '6', '5', '2', '2020-03-27 13:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UP'),
(2, 'MP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `student_course_id` varchar(255) NOT NULL,
  `student_rollno` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_father_name` varchar(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_mobile` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `student_details` varchar(500) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_course_id`, `student_rollno`, `student_name`, `student_father_name`, `student_dob`, `student_mobile`, `student_photo`, `student_details`, `student_username`, `student_password`) VALUES
(1, '12', '100011', 'Kaushal Kishore', 'Sumit Kumar', '1 January, 1990', '987654343', 'p4.jpg', '', 'student', 'test'),
(3, '1', '100112', 'Sunil Singh', 'Anil Singh', '12 January, 1992', '9898786756', 'p5.jpg', 'Sunil Singh', '', ''),
(5, '13', '123456', 'Jay Kumar', 'Kaushal Kishore', '14 May,2016', '9876787654', 'p6.jpg', 'Jay Kumar', 'jay', 'test'),
(6, '13', '957649586', 'Anil Kumar', 'Sunil Kumar', '6 March,2020', '9876543212', 'p7.jpg', 'Testing', 'anil', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(4, '1', 'admin', 'test', 'Kaushal Kishore', 'House no : 768', 'Sector 2B', '1', '1', '2', 'kaushal.rahuljaiswal@gmail.com', '987654321', '', '12 january, 2013', 'p1.jpg'),
(6, '2', 'teacher', 'test', 'Atul Kumar', 'House no : 712', 'Sector 2A', '1', '2', '1', 'atul@gmail.com', '987654321', '', '12 january, 2013', 'p2.jpg'),
(9, '2', 'kaushal', 'test', 'Kaushal Kishore', 'New Lahore Colony', 'Shirur', '2', '2', '2', 'kaushal.rahuljaiswal@gmail.com', '9876543212', '', '19 May,2016', 'p3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `login_level`
--
ALTER TABLE `login_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`qq_id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`qr_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login_level`
--
ALTER TABLE `login_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `qq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `quiz_result`
--
ALTER TABLE `quiz_result`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
