-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 06:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `mem` int(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `image`, `place`, `mem`, `price`) VALUES
(2, 'ajmer1.jpg', 'Ajmer', 0, 2000),
(3, 'alwar.jpg', 'Alwar', 0, 1500),
(4, 'bharat.jpg', 'BHARATPUR', 0, 3000),
(5, 'bk3.jpg', 'BIKANER', 0, 3000),
(6, 'bu2.jpg', 'BUNDI', 0, 1500),
(7, 'ch33.jpg', 'CHITTORGARH', 0, 2000),
(8, 'duu.jpg', 'DUNGARPUR', 0, 1500),
(9, 'ja4.jpg', 'JAIPUR', 0, 2500),
(10, 'jaislma.jpg', 'JAISALMAR', 0, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `head` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `image`, `head`, `detail`, `link`) VALUES
(1, 'ajmer1.jpg', 'WELCOME TO AJMER', '               Ajmer is one of the major and oldest cities in the Indian state of Rajasthan and the centre of the eponymous Ajmer District.                                            Ajmer is surrounded by the Aravalli Mountains. It is the base for vi', 'ajmer.php'),
(2, 'himaachal.jpg', 'WELCOME TO ALWAR', '   Alwar District is a district in Rajasthan, a state in northern India, with capital in the city of Alwar.                        Alwar is a hub of tourism with several forts, lakes, heritage havelis and nature reserves.                      ', 'alwar.php'),
(3, 'up.jpg', 'Welcome To Bharatpur', ' Bharatpur District is a district of Rajasthan state in western India.\r\n                      Three rivers, the Ban Ganga, Rooparel, and Gambhir, cross the district. Bharatpur District has ten revenue subdivisions and eleven tehsils.\r\n                    ', 'bharat.php'),
(4, 'bihar.jpg', 'Welcome To Bikaner', '   Bikaner is a city in the northwest of the state of Rajasthan, India.\r\n                      Bikaner is situated in the middle of the Thar desert. The city is most famous for its savoury snack Bikaneri bhujia which is sold all over the world.\r\n         ', 'bikaner.php'),
(5, 'sik.jpg', 'Welcome To Bundi', '  Bundi District is a district in the state of Rajasthan in western India.\r\n                      Bundi is a town in the Hadoti region of Rajasthan state in northwest India.', 'bundi.php'),
(6, 'chit.jpg', 'Welcome To Chittorgarh', '  Chittorgarh is a major city and a municipality in Rajasthan state of western India.\r\n                      \r\n                      It is located beside a high hill near the Gambheri River.', 'chittorgarh.php'),
(7, 'man.jpg', 'Welcome To Dungarpur', '  Dungarpur is a city in the southernmost part of Rajasthan state of India.\r\n                      The climate of Dungarpur is quite dry. The summer season is hot, but milder than most of the other Rajasthan cities.\r\n                      ', 'dungarpur.php'),
(8, 'west.jpg', 'Welcome To Jaipur', ' Jaipur is the capital and the largest city of the Indian state of Rajasthan.\r\n                      Jaipur is also known as the Pink City.', 'jaipur.php'),
(9, 'jharkhand.jpg', 'WELCOME TO JAISALMER', ' Jaisalmer \"The Golden city\", is a city in the Indian state of Rajasthan.\r\n                      The town stands on a ridge of yellowish sandstone, and is crowned by the ancient Jaisalmer Fort.', 'jaisalmar.php'),
(10, 'mp.jpg', 'WELCOME TO JALORE.', ' Jalor, also known as granite city, is a city in Rajasthan state of western India.                       Jalore lies to south of Sukri river, a tributary of Luni river.Jalore is known as the \"Cradle of the Marwari horse\".', 'jalor.php'),
(11, 'guj.jpg', 'WELCOME TO JHALAWAR.', ' Jhalawar is a city in southeastern Rajasthan.\r\n                      Jhalawar was once known as Brijnagar.The district lies in the Hadoti region in southeast Rajasthan, on the edge of Malwa Plateau.\r\n                      ', 'jhalawar.php'),
(12, 'lonvala.jpg', 'WELCOME TO JHUNJHUNU.', '  Jhunjhunu city is in the northern state of Rajasthan, India. \r\n                      The city is famous for the frescos on its grand havelis. The Rani Sati temple is also located in Jhunjhunu.', 'jhunjhunu.php'),
(13, 'or.jpg', 'WELCOME TO JODHPUR.', '  Jodhpur is the second-largest city in the Indian state of Rajasthan. \r\n                      Jodhpur was historically the capital of the Kingdom of Marwar, which is now part of Rajasthan.\r\n                      ', 'jodhpur.php'),
(14, 'kar.jpg', 'WELCOME TO NAGAUR.', ' Nagaur District is one of the 33 districts of the state of Rajasthan in western India.\r\n                      The Aravalli Range extends across the southeastern portion of the district, and the saline Sambhar Lake.\r\n                      ', 'nagaur.php'),
(15, 'goa3.jpg', 'WELCOME TO SAWAI MADHOPUR', 'Sawai Madhopur is a district of Rajasthan state in North-Western India.\r\n                      It lies on the northern extension of the Vindhyan Plateau in an area of complex geology.\r\n                      ', 'sawai.php'),
(16, 'lad.jpg', 'WELCOME TO SIKAR.', ' Sikar district is a district of the Indian state Rajasthan in northern India.\r\n                      \r\n                      Sikar is a historical city and contains many old havelis. Sikar is a very fascinating and attractive spot for the tourist.\r\n     ', 'sikar.php'),
(17, 'sr.jpg', 'WELCOME TO SIROHI', '   Sirohi is a city in southern Rajasthan state in western India.\r\n                      \r\n                      Abu Road is the industrial town of Sirohi District. Sirohi District is broken up by hills and rocky ranges.\r\n', 'sirohi.php'),
(18, 'dad.jpg', 'WELCOME TO UDAIPUR', ' The city is located in the southernmost part of Rajasthan.\r\n                      Udaipur also known as the \"City of Lakes\", is a city governed by Municipal Corporation which comes under Udaipur Metropolitan Region.', 'udaipur.php');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(104) NOT NULL,
  `number` bigint(11) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `number`, `book`) VALUES
(5, 'Mohak Patakk', 9695949393, 'book.php'),
(6, 'Faisal Shaik', 7989690054, 'book.php'),
(7, 'Robin Burt', 6553457891, 'book.php'),
(8, 'Pankaj Jain', 9786543210, 'book.php'),
(9, 'Viraj Iyer', 6889543208, 'book.php');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `detail`) VALUES
(1, 'bhar.jpg', 'Bharatpur'),
(3, 'adai.jpg', 'Ajmer '),
(4, 'bika1.jpg', 'Bikaner'),
(6, 'ajmer1.jpg', 'Ajmer Temple'),
(7, 'bang2.jpeg', 'Beauty of Udaipur'),
(8, 'adsa.jpg', 'Wildlife of Sawai Madhopur'),
(9, 'aj.jpg', 'Moutains of Ajmer'),
(10, 'ch33.jpg', 'Temple at Chittor'),
(11, 'bharat2.jpg', 'Wildlife of Bharatpur'),
(12, 'ja4.jpg', 'Jal Mahal of Jaipur'),
(13, 'chit.jpg', 'Beauty of Chittor'),
(14, 'jo3.jpg', 'Jodhpur'),
(15, 'jaisl.jpg', 'Jaisalmer'),
(16, 'meg.jpg', 'Sawai Madhopur');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num` bigint(11) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `uname`, `email`, `num`, `pass`, `type`) VALUES
(1, 'isha', '', 0, 'isha123', 'admin'),
(2, 'jatan', '', 0, 'jatan123', 'user'),
(3, 'mohit', '', 0, 'mohit123', 'user'),
(8, 'mohan', '', 0, 'mohan123', 'user'),
(40, 'neha', 'neha@gmail.com', 1234567890, '1234', ''),
(41, 'nihal', 'nhai@cpokc.com', 1234567890, '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `detail`) VALUES
(1, 'bbk.jpg', 'Bikaner'),
(2, 'jd.jpg', 'JODHPUR'),
(3, 'mad.jpeg', 'Jaisalmer'),
(4, 'raj.jpeg', 'Jaipur'),
(5, 'udap.jpg', 'Udaipur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `city`, `email`, `message`) VALUES
(2, 'bhawan', 'dungar', 'jiya@kiker.com', 'hi'),
(3, 'ov', 'jaipur', 'jatan@gmail.com', 'hello im ov'),
(5, 'mudit', '', 'isha@hoo.com', 'hi'),
(7, 'isha', 'bkn', 'moha@king.com', 'hi'),
(10, 'qwe', 'qwe', 'qwe@qw.com', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
