-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 12:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `joining_date` datetime DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `createdate` datetime DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `filename` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `type`, `status`, `phone`, `address`, `joining_date`, `email`, `password`, `createdate`, `subject_id`, `image`, `course_id`, `experience`, `filename`, `description`, `designation`) VALUES
(1, 'admin', '0', '1', '6256598978', NULL, NULL, 'admin', '12345', '2022-10-02 18:26:49', NULL, '8b655c248a5d448bf475fe97625fed72.jpeg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `id` int(11) NOT NULL,
  `b_name` varchar(255) DEFAULT NULL,
  `b_img` text DEFAULT NULL,
  `b_title` varchar(255) DEFAULT NULL,
  `b_heading` longtext DEFAULT NULL,
  `b_description` longtext DEFAULT NULL,
  `b_desc1` longtext DEFAULT NULL,
  `b_ques1` text DEFAULT NULL,
  `b_pic` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`id`, `b_name`, `b_img`, `b_title`, `b_heading`, `b_description`, `b_desc1`, `b_ques1`, `b_pic`, `status`, `createdate`) VALUES
(6, 'Sumit', 'd7dbe2162fff651b065aa728753ef48a.png', ' MAINTENANCE', ' Road Construction and Electric Road Work', 'The construction industry is home to the practice of building sites for many societies to use. Construction workers build skyscrapers for businesses to flourish, facilities for people to use, and roads for people to travel to different places. Roads are integral to the construction industry because they are constantly used for people to go drive to places far away, and construction workers need them to haul heavy equipment by transportation. Of course, technology advances as time goes on, and now electric road construction is part of the industry. Both road and electric road construction carry differences in how they are created with the aid of heavy equipment. Both serve a purpose of putting drivers on the road, except one of them is for electric vehicles.', '[\"Road construction involves many workers creating new roads and fixing hazardous ones. This of-heavy-construction-equipment-and-their-us es provides a list of heavy construction equipment on road construction projects. Some heavy equipment that are worth mentioning are motor graders, which can level grounds in a balanced manner, asphalt pavers which can place asphalt to where it should be, and cold planers which have large mill-like structures that can collect asphalt and concrete. Of course, there are more heavy vehicles and equipment for this kind of labor, so construction workers have plenty to work with.\",\"Electric roads differ because these roads accommodate electric vehicles, which use chargeable energy instead of gasoline. The construction of electric roads relies heavily on equipment and vehicles such as ones that are electric versions that trade chargeable energy for gasoline and diesel usage. According to an article called \\u201cElectrified Construction Equipment Gaining Momentum,\\u201d Sara Jensen talks about smaller heavy vehicles being more suited for electric batteries compared to bigger vehicles that are best suited for diesel. On the plus side, electric heavy vehicles such as the L25 electric compact wheel loader will reduce emissions just as an electric non-commercial vehicle would. Having an electric version of a mini excavator is a better alternative for reducing emissions and getting work done at a more consistent pace, whereas large heavy vehicles are more for getting huge portions of the work done.\",\"Electric roads differ because these roads accommodate electric vehicles, which use chargeable energy instead of gasoline. The construction of electric roads relies heavily on equipment and vehicles such as ones that are electric versions that trade chargeable energy for gasoline and diesel usage. According to an article called \\u201cElectrified Construction Equipment Gaining Momentum,\\u201d Sara Jensen talks about smaller heavy vehicles being more suited for electric batteries compared to bigger vehicles that are best suited for diesel. On the plus side, electric heavy vehicles such as the L25 electric compact wheel loader will reduce emissions just as an electric non-commercial vehicle would. Having an electric version of a mini excavator is a better alternative for reducing emissions and getting work done at a more consistent pace, whereas large heavy vehicles are more for getting huge portions of the work done.\"]', '[\"Heavy equipment used for road construction  \",\"Heavy equipment used for electric road construction  \",\"Heavy Vehicle Inspections  \"]', '', 1, '2022-10-07 16:33:32'),
(9, 'satish', '7017c7ba68f95329486b882e9187d72c.png', 'blog', ' 5 REASONS TO INSPECT & MAINTAIN YOUR HEAVY VEHICLES.   ', 'During heavy vehicle inspections, it is important for fleet managers to ensure steps into making each inspection as efficient as possible. After all, no heavy vehicle inspection should be poorly inspected, or else people might run the risk of operating unsafe heavy vehicles. This is where preventive maintenance comes in, which would ensure that each inspection would run as efficiently as possible, so that no problems arise. Having preventive maintenance would help heavy vehicle inspections because well planned inspections would reduce costs that fleet managers might have for heavy vehicles if they inspect the vehicles poorly.', '[\"                  As mentioned above, preventive maintenance aids heavy vehicle inspections would reduce costs of maintenance. What other benefits does preventive maintenance have on heavy vehicle inspections? Below are some of the benefits:                                                                          \",\"                    Nothing is more annoying than having to pay for repairs. Repairs can be very expensive, which could be avoided if preventive maintenance was used to create efficient inspections. Fleet managers would be saving money this way, instead of wasting it on repairs.                                                                          \",\"                  Having preventive maintenance can help fleet managers create efficient inspections by ensuring that the vehicles are safe to use. This is important because people use these heavy vehicles for work, and if they are put in danger because the vehicles are not properly inspected, then it is the responsibility of the fleet managers that inspected them.                                                                          \",\"                    It can be costly to replace car parts for when fleet managers need to. Preventive maintenance makes it so that fleet managers would not have to replace parts as frequently, because no maintenance means the parts wear out faster. If the parts were out slower, then the cost would be more manageable.                                                                          \"]', '[\" Why Have Preventive Maintenance                                                                        \",\"  Preventive Maintenance is more cost effective than repair              \",\"   Preventive Maintenance can improve heavy vehicle safety                                                                        \",\"   Preventive maintenance can increase the lifespan of heavy vehicles                                                                        \"]', '', 1, '2022-10-07 17:09:40'),
(12, 'sumit', 'ef57b874d3723a4219e62b13dac4f8a8.jpg', 'Cricket', ' Which team is the favourite for the 2022 T20 World Cup?', ' Australia will host a number of terrific teams in this tournament, many of whom are a genuine chance of reclaiming the title from Aaron Finch’s team. New Zealand are always thereabouts, India have too many good players to count out, England are packed with power, and the likes of Pakistan and South Africa are dark horses.', '[\"The host nation is favourite to successfully defend their title. Australia, at home, with the addition of Tim David and possible inclusion of Cameron Green, look strong. Also, David Warner, Mitchell Marsh and Mitchell Starc are all set to return after missing the recent India series.\",\" India are listed as second favourite for the title. The men in blue are seeking their first ICC trophy since their triumph in the 2013 Champions Trophy, and eyes will be fixed on whether Rohit Sharma\\u2019s team can hold their nerve in the big moments.\\r\\n<br><br>\\r\\nHowever, the absence of Jasprit Bumrah could prove to be a massive blow. Also, how India overcome the mental baggage of falling short in recent global tournaments will be interesting to see. But, they have too much talent to be written off.\",\" England have had a challenging year in T20Is. However, the talent and power they have on paper makes them too good to ignore. That consensus is also held by the bookmakers, with Jos Buttler\\u2019s team listed at third favourite for the title.\",\" In fact, New Zealand played in the 2015 and 2019 ODI World Cup Finals, as well as the 2021 T20 World Cup Final. However, they failed to win any of those three matches, and whether they can produce their best cricket in Australia remains to be seen.\\r\\n<br><br>\\r\\nPakistan are also at $9.00. The men in green are always a team to watch given the talent they have in their ranks. However, the reliance on key players such as openers Mohammad Rizwan and Babar Azam is a concern.\"]', '[\"Australia $3.50   \",\"  India $4.33  \",\" England $5.00  \",\" New Zealand & Pakistan $9.00  \"]', '', 1, '2022-10-10 15:43:06'),
(13, 'sumit', '9f2ff6ad32c5dc62e0f7267d518deede.jpg', 'Cricket', ' Jasprit Bumrah ruled out of T20 World Cup – reports', ' According to BCCI sources, Jasprit Bumrah is set to miss the 2022 T20 World Cup due to a back stress fracture injury. Bumrah missed the first T20I against South Africa on September 28 due to back soreness, and reports have emerged that the injury is worse than first thought.', '[\"According to reports, either Mohammed Shami or Mohammed Siraj are likely to be added to the squad as Bumrah\\u2019s replacement. Shami was set to feature in the T20Is against Australia and South Africa after he was left out for the Asia Cup, but he tested positive for COVID-19 and was subsequently ruled out. Fellow seamer Siraj\\u2019s inclusion may seem a risk on first glance given his last T20 was back in IPL 2022. However, the right-armer has improved his game over the past two years, particularly in the powerplay and middle overs.\"]', '[\"Bumrah out of T20 World Cup, Shami or Siraj likely to be added to squad \"]', '', 1, '2022-10-10 16:05:36'),
(14, 'sumit', 'b26caad4b6423d8c35f00b4ec8cae4ff.jpg', 'Women\'s cricket', ' First ever Women’s IPL set to kick off in 2023', ' The Board of Control for Cricket in India (BCCI) has already made changes to its women’s domestic calendar to make room for the showpiece tournament, with the season to begin in October rather than the usual November. It will begin with the T20 competition on October 11, ending with a one-day competition in February, soon before the Women’s IPL.', '[\"Earlier this year, both BCCI president Sourav Ganguly and BCCI secretary Jay Shah spoke positively about the possibility of a WIPL tournament.\\r\\n\\r\\n\\u201cWe are at the level of formulation to have a full-fledged WIPL. It is certainly going to happen,\\u201d Ganguly previously said. \\u201cI strongly believe that next year (2023) will be a very good time to start a full-fledged women\\u2019s IPL which will be as big and grand a success as men\\u2019s IPL.\\u201d\",\" Women\\u2019s cricket continues to grow and an IPL can help fast-track that growth even further. For India in particular, who continue to suffer near misses on a national level including the Commonwealth Games 2022 Final, a tournament of this scale can provide a great platform for players to learn their trade.\\r\\n<br>\\r\\n\\r\\nAlso, with the quality of overseas players that will play, the standard of cricket will be high in what is expected to be a five or six-team tournament.\\r\\n\\r\\nSuch an event is one not to miss. That could be the case for retired Indian legend Mithali Raj, who has kept the door open for a possible return.\"]', '[\"BCCI working to launch first ever Women\\u2019s IPL in 2023   \",\"  WIPL would be huge step for women\\u2019s cricket  \"]', '', 1, '2022-10-10 16:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_img`, `status`, `createdate`) VALUES
(22, 'Foreclosure', 'd88c66d777b05a9175b485beaa65b524.jpg', 1, '2022-08-30 17:41:24'),
(23, 'Civil', 'f1beafec504365e8ef3b17afd389f437.jpg', 1, '2022-08-22 18:40:48'),
(25, 'Revenue', '301d93246a3a83ca87cf03f77c4f2745.jpg', 1, '2022-08-22 18:39:47'),
(26, 'Taxation', '0acc70f71795f6ec3162238b7937c8da.jpg', 1, '2022-08-22 18:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `s_logo` text DEFAULT NULL,
  `s_project` varchar(255) DEFAULT NULL,
  `s_title` int(11) DEFAULT NULL,
  `s_phone` varchar(255) DEFAULT NULL,
  `s_email` varchar(255) DEFAULT NULL,
  `s_add` text DEFAULT NULL,
  `s_img` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_img` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `s_name`, `s_img`, `status`, `createdate`) VALUES
(4, 'UP', '6176d0409a2fc23a9702b0646a16c4bf.png', 1, '2022-08-08 23:26:24'),
(8, 'U.P', '0a1e6d3e01dd31078f63b1a84ad74109.jpg', 1, '2022-08-17 12:32:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
