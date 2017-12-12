-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 07:00 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naeem`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `email` varchar(200) NOT NULL,
  `about` longtext,
  `marital_status` varchar(50) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `skintone` varchar(20) NOT NULL,
  `haircolor` varchar(20) NOT NULL,
  `eyecolor` varchar(20) NOT NULL,
  `freckles` int(20) NOT NULL,
  `dimple` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`email`, `about`, `marital_status`, `diet`, `image`, `height`, `skintone`, `haircolor`, `eyecolor`, `freckles`, `dimple`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 'Not set', 'groom-default.jpg', '5.6', '', '', '', 0, 0),
('gulugulu@gmail.com', 'Hei  I am gulu glue. this is my profile. I am a bangladeshi by birth', 'Divorced', 'Vegitarian', 'Not set', '5.7', '', '', '', 0, 0),
('kibria@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '', '', '', 0, 0),
('naeemzannat@gmail.com', 'I am zannat naeem. I m 22 years old. I m a CSE graduate from a reputed university in dhaka.', 'Not married', 'Vegitarian', 'naeem.jpg', '5.8', '', '', '', 0, 0),
('nasirkhancse@gmail.com', 'elominate that', 'Divorced', 'Vegitarian', 'groom-default.jpg', '5.0', '', '', '', 0, 0),
('ppp@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '', '', '', 0, 0),
('yyy@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '', '', '', 0, 0),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 'Not set', 'groom-default.jpg', 'Not set', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `email` varchar(200) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `contact_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`email`, `contact_name`, `contact_number`, `relation`, `contact_time`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set'),
('gulugulu@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set'),
('naeemzannat@gmail.com', 'Nasir ', '01763433486', 'Friend', '7:20PM'),
('nasirkhancse@gmail.com', 'Nayem', '1446574684', 'Friend', '12:50AM'),
('ppp@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set'),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `issue` varchar(50) DEFAULT NULL,
  `comments` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `name`, `issue`, `comments`) VALUES
(1, 'nasir@gmail.com', 'nsair', 'Category', 'asdfwrwer'),
(2, 'raihanuiu@gmail.com', 'raihan', 'Category', 'sowerasf'),
(3, '', '', 'select', ''),
(4, 'dfg@gmail.com', 'dsdf', 'Category', 'asfewr'),
(5, 'asfsf@gmail.com', 'asdfer', 'Category', 'esfdfg'),
(6, 'asfsf@gmail.com', 'asdfer', 'Category', 'esfdfg'),
(7, 'jhjsdf@fasjf', 'ksajdhf', 'Category', 'sakjfsafh'),
(8, 'hasan_al_jamy@gmail.com', 'hasan al jami', 'Category', 'skjfhwiuersj kjshfisa fksajf'),
(9, 'hasan_al_jamy@gmail.com', 'hasan al jami', 'Category', 'skjfhwiuersj kjshfisa fksajf');

-- --------------------------------------------------------

--
-- Table structure for table `educational_details`
--

CREATE TABLE `educational_details` (
  `email` varchar(200) NOT NULL,
  `undergraduate` varchar(200) DEFAULT NULL,
  `postgraduate` varchar(200) DEFAULT NULL,
  `university` varchar(200) DEFAULT NULL,
  `college` varchar(200) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `salary` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_details`
--

INSERT INTO `educational_details` (`email`, `undergraduate`, `postgraduate`, `university`, `college`, `profession`, `company`, `designation`, `salary`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '0.00'),
('gulugulu@gmail.com', 'B.SC in CSE', 'M.Sc in CSE', 'United International university', 'Dhaka Imperial college', 'Student', 'No company', 'Student', '50000.00'),
('naeemzannat@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '0.00'),
('nasirkhancse@gmail.com', 'Computer Science and Engineering', '', 'United international university', 'Dhaka imperial college', 'Student', 'No Company', 'Student', '0.00'),
('ppp@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '0.00'),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `family_details`
--

CREATE TABLE `family_details` (
  `email` varchar(200) NOT NULL,
  `father_profession` varchar(200) DEFAULT NULL,
  `mother_profession` varchar(200) DEFAULT NULL,
  `brothers` int(11) DEFAULT NULL,
  `sister` int(11) DEFAULT NULL,
  `family_value` varchar(100) DEFAULT NULL,
  `family_type` varchar(50) NOT NULL,
  `family_affluence` varchar(50) NOT NULL,
  `live` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`email`, `father_profession`, `mother_profession`, `brothers`, `sister`, `family_value`, `family_type`, `family_affluence`, `live`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 0, 0, 'Not set', 'Not set', 'Not set', 'Not set'),
('gulugulu@gmail.com', 'Employee', 'Homemaker', 3, 5, 'Moderate', 'Not set', 'Middle class', 'Dhanmondi'),
('naeemzannat@gmail.com', 'Not set', 'Not set', 0, 0, 'Not set', 'Not set', 'Not set', 'Not set'),
('nasirkhancse@gmail.com', 'Professional', 'Home maker', 3, 4, 'Restricted', 'Nuclear', 'Middle Class', 'Comilla'),
('ppp@gmail.com', 'Not set', 'Not set', 0, 0, 'Not set', 'Not set', 'Not set', 'Not set'),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 0, 0, 'Not set', 'Not set', 'Not set', 'Not set');

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle`
--

CREATE TABLE `lifestyle` (
  `email` varchar(200) NOT NULL,
  `weight` varchar(200) DEFAULT NULL,
  `habits` varchar(200) DEFAULT NULL,
  `mother_tongue` varchar(200) NOT NULL,
  `language` varchar(200) DEFAULT NULL,
  `blood` varchar(200) DEFAULT NULL,
  `disability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle`
--

INSERT INTO `lifestyle` (`email`, `weight`, `habits`, `mother_tongue`, `language`, `blood`, `disability`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('gulugulu@gmail.com', '68 KG', 'Gardening', 'English', 'Bangla, Portugis, France', 'O+', 'I m 100% OK'),
('naeemzannat@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('nasirkhancse@gmail.com', '68 KG', 'Gardening', 'Bangla', 'English', 'O+', 'I m 100% OK'),
('ppp@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `email` varchar(200) NOT NULL,
  `min_age` varchar(200) DEFAULT NULL,
  `max_age` varchar(200) NOT NULL,
  `min_height` varchar(200) DEFAULT NULL,
  `max_height` varchar(200) NOT NULL,
  `partner_marital_status` varchar(200) DEFAULT NULL,
  `partner_religion` varchar(200) DEFAULT NULL,
  `partner_profession` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`email`, `min_age`, `max_age`, `min_height`, `max_height`, `partner_marital_status`, `partner_religion`, `partner_profession`) VALUES
('asmaul@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('gulugulu@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('naeemzannat@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Muslim', 'Not set'),
('nasirkhancse@gmail.com', '21', '25', '5.7', '5.6', 'Never married', 'Islam', 'Computer/IT'),
('ppp@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('yyy@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set'),
('zannatnaeem3@gmail.com', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title`, `details`) VALUES
(1, 'What Information Do We Collect?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.'),
(2, 'Description Of Service And Content Policy', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.\r\nLorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Do We Use Cookies?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.'),
(4, 'Conduct', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.'),
(5, 'Third Party Links', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.'),
(6, 'Changes To Our Privacy Policy', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.'),
(7, 'No Spam Policy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.'),
(8, 'Limitations Of Liability', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.'),
(9, 'Terms And Conditions', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.'),
(10, 'Ability To Accept Terms Of Service', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.\r\nAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.\r\nAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.'),
(11, ' Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.'),
(12, 'How Do We Protect Your Information?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage.'),
(13, 'Contact Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\nMy company name,\r\nLorem ipsum dolor,\r\nJasmin Dr 40 Fe 72.\r\nTel:1115550001\r\nFax:190-4509-494\r\nE-Mail: mail@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `creator` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `dateofbirth` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `creator`, `name`, `email`, `password`, `phone`, `dateofbirth`, `gender`, `religion`) VALUES
(24, 'myself', 'asmaul', 'asmaul@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '0145896325', '10/14/2017', 'Male', 'Muslim'),
(12, 'myself', 'Babor', 'babor@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', '555-01256', '10/19/2016', 'Male', 'Muslim'),
(18, 'myself', 'asfd', 'dsf@saf.com', '0cc175b9c0f1b6a831c399e269772661', '4527453', '10/24/2017', 'Male', 'Sikh'),
(23, 'myself', 'gulu', 'gulugulu@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d', '01798653244', '8/03/1998', 'Male', 'Muslim'),
(14, 'myself', 'Kibria sarkar', 'kibria@gmail.com', '8ce4b16b22b58894aa86c421e8759df3', '01578954', '10/18/2017', 'Male', 'Muslim'),
(19, 'parent', 'nasirkkk', 'kkk@gmail.com', '8ce4b16b22b58894aa86c421e8759df3', '565465', '2/08/2013', 'Male', 'Hindu'),
(25, 'myself', 'Naeem zannat', 'naeemzannat@gmail.com', '7b8b965ad4bca0e41ab51de7b31363a1', '01789562314', '3/5/1995', 'Male', 'Muslim'),
(11, 'myself', 'Nasir Khan', 'nasirkhancse@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '01763433486', '10/27/1995', 'Male', 'Muslim'),
(13, 'parent', 'Nazmus sakib', 'nazmus_sakib@gmail.com', '7b8b965ad4bca0e41ab51de7b31363a1', '01763433486', '8/03/1995', 'Male', 'Muslim'),
(22, 'myself', 'ppppp', 'ppp@gmail.com', '83878c91171338902e0fe0fb97a8c47a', '655646', '10/13/2017', 'Male', 'Muslim'),
(21, 'parent', 'yyy@gmail.com', 'yyy@gmail.com', '415290769594460e2e485922904f345d', '452453453', '10/25/2017', 'Female', 'Jain'),
(26, 'myself', 'naeem008', 'zannatnaeem3@gmail.com', 'fbade9e36a3f36d3d676c1b808451dd7', '01685726097', '20/10/1993', 'Male', 'Muslim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_details`
--
ALTER TABLE `educational_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `family_details`
--
ALTER TABLE `family_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `lifestyle`
--
ALTER TABLE `lifestyle`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD CONSTRAINT `basic_info_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD CONSTRAINT `contact_info_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `educational_details`
--
ALTER TABLE `educational_details`
  ADD CONSTRAINT `educational_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `family_details`
--
ALTER TABLE `family_details`
  ADD CONSTRAINT `family_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `lifestyle`
--
ALTER TABLE `lifestyle`
  ADD CONSTRAINT `lifestyle_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
