-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_descr` varchar(255) NOT NULL,
  `course_cost` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_descr`, `course_cost`, `course_duration`) VALUES
(2, 'CENSE Java', 'Awesome this should work', 'R64900', '2 Weeks'),
(3, 'Devins course', 'Great course which is highly advisable to do :)', '55654445', '3 Months'),
(4, 'Devs PHP course', 'Best in the west :) and south for that matter\r\n', 'Zeroty Seven Hundred and 60', '1 Week');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE IF NOT EXISTS `course_student` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year_start` date NOT NULL,
  `year_end` date NOT NULL,
  `final_mark` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_sname` varchar(255) NOT NULL,
  `student_initials` varchar(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_title` varchar(255) NOT NULL,
  `student_dob` varchar(11) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_lang` varchar(255) NOT NULL,
  `student_id_no` int(20) NOT NULL,
  `student_telh` varchar(100) NOT NULL,
  `student_telw` varchar(100) NOT NULL,
  `student_cell` varchar(100) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_sname`, `student_initials`, `student_fname`, `student_title`, `student_dob`, `student_gender`, `student_lang`, `student_id_no`, `student_telh`, `student_telw`, `student_cell`, `student_email`, `student_address`) VALUES
(4, 'Norgarb', 'DC', 'Devin Carl', 'Mr', '1996 11 28', 'Male', 'English', 2147483647, '21', '0', '74', 'dnorgarb@gmail.com', '1 Fish Eagle '),
(5, '', '', '', '', '', '', '', 2147483647, '021 783 5361', '021 783 5361', '074 889 4239', '', ''),
(6, 'hkujhj', 'jhjkhj', 'hjkhjh', 'jkhjhj', '9089890', 'jhjhjk', 'huhu', 88778, '889089', '989809', '9890809', '980989', '980898');
