-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 11:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl2project`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `ROW1B1` varchar(20) NOT NULL,
  `ROW1B2` varchar(20) NOT NULL,
  `ROW2B1` varchar(20) NOT NULL,
  `ROW2B2` varchar(20) NOT NULL,
  `ROW3B1` varchar(20) NOT NULL,
  `ROW3B2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`ROW1B1`, `ROW1B2`, `ROW2B1`, `ROW2B2`, `ROW3B1`, `ROW3B2`) VALUES
('21BTA3ARI10001', '21BBA3BFA10001', '21BTA3ARI10007', '21BBA3BFA10007', '21BTA3ARI10013', '21BBA3BFA10013'),
('21BTA3ARI10002', '21BBA3BFA10002', '21BTA3ARI10008', '21BBA3BFA10008', '21BTA3ARI10014', '21BBA3BFA10014'),
('21BTA3ARI10003', '21BBA3BFA10003', '21BTA3ARI10009', '21BBA3BFA10009', '21BTA3ARI10015', '21BBA3BFA10015'),
('21BTA3ARI10004', '21BBA3BFA10004', '21BTA3ARI1010', '21BBA3BFA10010', '21BTA3ARI10016', '21BBA3BFA10016'),
('21BTA3ARI10005', '21BBA3BFA10005', '21BTA3ARI10011', '21BBA3BFA10011', '21BTA3ARI10017', '21BBA3BFA10017'),
('21BTA3ARI10006', '21BBA3BFA10006', '21BTA3ARI10012', '21BBA3BFA10012', '21BTA3ARI10018', '21BBA3BFA10018');

-- --------------------------------------------------------

--
-- Table structure for table `stdent_data`
--

CREATE TABLE `stdent_data` (
  `Enrollment_no` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdent_data`
--

INSERT INTO `stdent_data` (`Enrollment_no`, `Name`, `Branch`) VALUES
('21BTA3ARI10001', 'Amit Patel', 'AI'),
('21BTA3ARI10002', 'Anshul Rathore', 'AI'),
('21BTA3ARI10003', 'Annu Siddhart', 'AI'),
('21BTA3ARI10004', 'Ayush Lokhande', 'AI'),
('21BTA3ARI10005', 'Deependra Patel', 'AI'),
('21BTA3ARI10006', 'Eshan Pandey', 'AI'),
('21BTA3ARI10007', 'Gaurav Kumar Gaur', 'AI'),
('21BTA3ARI10008', 'Karan ChoudharAI'),
('21BTA3ARI10013', 'Raj Choudhary', 'AI'),
('21BTA3ARI10014', 'Ritesh Sarathe', 'AI'),
('21BTA3ARI10015', 'Sakshi Rajput', 'AI'),
('21BTA3ARI10016', 'Shubhi Gaur', 'AI'),
('21BTA3ARI10017', 'Siddhant sahw', 'AI'),
('21BTA3ARI10018', 'Uttam Sagar', 'AI'),
('21BTA3ARI10019', 'Varun Gohe', 'AI'),
('21BTA3ARI10020', 'Vivek Mishra', 'AI'),
('21BTECSE10001', 'Aastha Lovanshi', 'CSE'),
('21BTECSE10002', 'Abdul Rauf', 'CSE'),
('21BTECSE10003', 'Abhishek Lodhi', 'CSE'),
('21BTECSE10004', 'Abhishek Suryavanshi', 'CSE'),
('21BTECSE10005', 'Aditya Raj', 'CSE'),
('21BTECSE10006', 'Aditya Sharma', 'CSE'),
('21BTECSE10007', 'Ajay kumar tiwari', 'CSE'),
('21BTECSE10008', 'Akshita Khandelwal', 'CSE'),
('21BTECSE10009', 'Amaan Ansari', 'CSE'),
('21BTECSE10010', 'Ananya Pandey', 'CSE'),
('21BTECSE10011', 'Aniket Khajania', 'CSE'),
('21BTECSE10012', 'Anjali Gayakwad', 'CSE'),
('21BTECSE10013', 'Anjali Lodhi', 'CSE'),
('21BTECSE10014', 'Ankit Bhukar', 'CSE'),
('21BTECSE10015', 'Ankit Chouhan', 'CSE'),
('21BTECSE10016', 'Anmol Rai', 'CSE'),
('21BTECSE10017', 'Ansh Gupta', 'CSE'),
('21BTECSE10018', 'Ariya Bharadwaj', 'CSE'),
('21BTECSE10019', 'Arpit Patel', 'CSE'),
('21BTECSE10020', 'Aryan Gupta', 'CSE'),
('21BTECSE10021', 'Atul lodhi', 'CSE'),
('21BTECSE10022', 'Ayush Chouksey', 'CSE'),
('21BTECSE10023', 'Balaram Kushwaha', 'CSE'),
('21BTECSE10024', 'Bennu Jayswal', 'CSE'),
('21BTECSE10025', 'Bhumika Rani Gupta', 'CSE'),
('21BTECSE10026', 'Chirayu Singh', 'CSE'),
('21BTECSE10027', 'Deepanshu Sahu', 'CSE'),
('21BTECSE10028', 'Dharmendra saini', 'CSE'),
('21BTECSE10029', 'Gautam Singh Chouhan', 'CSE'),
('21BTECSE10030', 'Gourav Patel', 'CSE'),
('21BTECSE10031', 'Hardik Sisodiya', 'CSE'),
('21BTECSE10032', 'Harsh Dubey', 'CSE'),
('21BTECSE10033', 'Harsh Kumar Singh', 'CSE'),
('21BTECSE10034', 'Harshal Pramod Gade', 'CSE'),
('21BTECSE10035', 'Jatin Bhargav', 'CSE'),
('21BTECSE10036', 'Kanish Pachouri', 'CSE'),
('21BTECSE10037', 'Keshav Vishwakarma', 'CSE'),
('21BTECSE10038', 'Khushi Rajput', 'CSE'),
('21BTECSE10039', 'Kripa Singh', 'CSE'),
('21BTECSE10040', 'Krishna Gupta', 'CSE'),
('21BTECSE10041', 'Krishna Vidua', 'CSE'),
('21BTECSE1004', 'Kuldeep lodhi', 'CSE'),
('21BTECSE10043', 'Kushagra Dubey', 'CSE'),
('21BTECSE10044', 'Mahek Sen', 'CSE'),
('21BTECSE10045', 'Mayank Gour', 'CSE'),
('21BTECSE10046', 'Muskan Sahu', 'CSE'),
('21BTECSE10047', 'Naman yadav', 'CSE'),
('21BTECSE10048', 'Nukhil Singh', 'CSE'),
('21BTECSE10049', 'Nikita Ahirwar', 'CSE'),
('21BTECSE10050', 'Pankaj Patel', 'CSE'),
('21BTECSE10051', 'Piyush Pandey', 'CSE'),
('21BTECSE10052', 'Prajjawal singh', 'CSE'),
('21BTECSE10053', 'Prateek Khatri', 'CSE'),
('21BTECSE10054', 'Priyansh Chouhan', 'CSE'),
('21BTECSE10055', 'Rishi Dubey', 'CSE'),
('21BTECSE10056', 'Rishikesh Moon', 'CSE'),
('21BTECSE10057', 'Ritik Meena', 'CSE'),
('21BTECSE10058', 'Ritik Singh Yadav', 'CSE'),
('21BTECSE10059', 'Rohit Kumar Choubey', 'CSE'),
('21BTECSE10060', 'Saloni Verma', 'CSE'),
('21BTECSE10061', 'Sandeep Yadav', 'CSE'),
('21BTECSE10062', 'Sandeep Kumar Piplod', 'CSE'),
('21BTECSE10063', 'Saud Abdullah', 'CSE'),
('21BTECSE10064', 'Aditya Pandit', 'CSE'),
('21BTECSE10065', 'Ajay Malviya', 'CSE'),
('21BTECSE10066', 'Aman Khan', 'CSE'),
('21BTECSE10067', 'Ankit Chourasiya', 'CSE'),
('21BTECSE10068', 'Aryan Rana', 'CSE'),
('21BTECSE10069', 'Ayush Chouhan', 'CSE'),
('21BTECSE10070', 'Hariom Sen', 'CSE'),
('21BTECSE10071', 'Kashish Satyarthi ', 'CSE'),
('21BTECSE10072', 'Kuldeep Yadav', 'CSE'),
('21BTECSE10073', 'Md Umad Belal', 'CSE'),
('21BTECSE10074', 'Mohit Yadav', 'CSE'),
('21BTECSE10075', 'Nishant Sinha', 'CSE'),
('21BTECSE10076', 'Prince Bundela', 'CSE'),
('21BTECSE10077', 'Rishabh Verma', 'CSE'),
('21BTECSE10078', 'Rohit Yadav', 'CSE'),
('21BTECSE10079', 'Sajjad Khan', 'CSE'),
('21BTECSE10080', 'Saurabh Baraskar', 'CSE'),
('21BTECSE10081', 'Shahnawaz Alam', 'CSE'),
('21BTECSE10082', 'Shan Gour', 'CSE'),
('21BTECSE10083', 'Shiksha Baranwal', 'CSE'),
('21BTECSE10084', 'Shivam Kumar', 'CSE'),
('21BTECSE10085', 'Shivani Shulekhiya', 'CSE'),
('21BTECSE10086', 'Shivankar Dangi', 'CSE'),
('21BTECSE10087', 'Shivanshu Khuswaha', 'CSE'),
('21BTECSE10088', 'Shivendra Raghuwansh', 'CSE'),
('21BTECSE10089', 'Shivendra Singh Chan', 'CSE'),
('21BTECSE10090', 'Shweta Singh', 'CSE'),
('21BTECSE10091', 'Siddhant Salve', 'CSE'),
('21BTECSE10092', 'Siya Nagar', 'CSE'),
('21BTECSE10093', 'Soumya Bhanupriya', 'CSE'),
('21BTECSE10094', 'Shubhamita Pradhan', 'CSE'),
('21BTECSE10095', 'Sumit Choudhary', 'CSE'),
('21BTECSE10096', 'Sumit Dhakad', 'CSE'),
('21BTECSE10097', 'Sunil Mewada', 'CSE'),
('21BTECSE10098', 'Taniya Kanojiya', 'CSE'),
('21BTECSE10099', 'Tushar Pal', 'CSE'),
('21BTECSE10100', 'Vijay Patel', 'CSE'),
('21BTECSE10101', 'Vijay Dhakad', 'CSE'),
('21BTECSE10102', 'Vikash Giri ', 'CSE'),
('21BTECSE10103', 'Vishal Gupta', 'CSE'),
('21BTECSE10104', 'Vivek Malviya', 'CSE'),
('21BTECSE10105', 'Yash Pandey', 'CSE'),
('21BTECSE10106', 'Yatra Vishwakarma', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `NAME` varchar(20) NOT NULL,
  `ENROLLMENT_NO` varchar(30) NOT NULL,
  `COURSE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NAME`, `ENROLLMENT_NO`, `COURSE`) VALUES
('ANNU SIDDHART', '21BTA3ARI10001', 'BTECH(AI)'),
('ANSHUL RATHORE', '21BTA3ARI10002', 'BTECH(AI)'),
('AYUSH LOKHANDE', '21BTA3ARI10003', 'BTECH(AI)'),
('ESHAN PANDEY', '21BTA3ARI10004', 'BTECH(AI)'),
('MEENAR UDDIN', '21BTA3ARI10005', 'BTECH(AI)'),
('DEEPENDRA PATEL', '21BTA3ARI10006', 'BTECH(AI)'),
('GAURAV KUMAR GAUR', '21BTA3ARI10007', 'BTECH(AI)'),
('GAURAV  KUMAR DIWEDI', '21BTA3ARI10008', 'BTECH(AI)'),
('Prateeksha Patel', '21BTA3ARI10009', 'BTECH(AI)'),
('', '', ''),
('RAJ CHOUDHARY', '21BTA3ARI10011', 'BTECH(AI)'),
('KARAN CHOUDHARY', '21BTA3ARI10012', 'BTECH(AI)'),
('SAKSHI RAJPUT', '21BTA3ARI10013', 'BTECH(AI)'),
('NEHA KANWAR', '21BTA3ARI10014', 'BTECH(AI)'),
('AMIT PATEL', '21BTA3ARI10015', 'BTECH(AI)'),
('VARUN GOHE', '21BTA3ARI10016', 'BTECH(AI)'),
('UTTAM SAGAR', '21BTA3ARI10017', 'BTECH(AI)'),
('SHUBHI GAUR', '21BTA3ARI10018', 'BTECH(AI)'),
('VIVEK MISHRA ', '21BTA3ARI10019', 'BTECH(AI)'),
('SIDDHANT SHAW', '21BTA3ARI10020', 'BTECH(AI)'),
('PRIYANSHI KASHYAP', '21BTA3ARI10021', 'BTECH(AI)'),
('AMIT PATEL', '21BTA3ARI10020', 'BTECH(AI)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
