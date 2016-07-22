-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2016 at 03:18 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `green_konkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `gk_advertise`
--

CREATE TABLE IF NOT EXISTS `gk_advertise` (
  `advertise_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `decs` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `authar` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `feature` enum('Y','N') NOT NULL DEFAULT 'N',
  `category_name` varchar(255) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  PRIMARY KEY (`advertise_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `gk_advertise`
--

INSERT INTO `gk_advertise` (`advertise_id`, `package_id`, `name`, `email`, `mobile`, `phone`, `address`, `link`, `decs`, `image`, `authar`, `duration`, `feature`, `category_name`, `sub_category_id`, `status`, `longitude`, `latitude`, `banner_image`) VALUES
(22, 4, 'EyeCare', 'jadhav.raj22@gmail.com', '8888015766', '0235523658', 'At Post: Alore Tal: Chiplun Dist: Ratnagiri Pin: 4115603', 'http://greenkokan.com/admin/advertise-add.php', 'ABC', '', '4', '', 'Y', 'Hospital', 69, '1', '73.926026', '18.508920', 'uploadifive/uploads/9d8dfa184eab1d8247c8b1e1890319f2_Hydrangeas.jpg'),
(23, 4, 'Khatif', 'jadhav.raj22@gmail.com', '8888015766', '0255456513', 'At post:alore Tal : Chiplun Dist: Ratnagiri Pin: 415603', 'http://greenkokan.com/admin/advertise-add.php', 'ABC', '', '4', '', 'Y', 'Doctor', 10, '1', '73.517793', '17.532311', 'uploadifive/uploads/6b64ed89b7e6a7d47223f91f69c19958_Desert.jpg'),
(24, 4, 'AAAA', 'aaaa@gmail.com', '9730501945', '020440923699', 'Hadapsar pune 11025824', 'http://radical.com', 'DescriptionDescriptionDescriptionDescription\r\nDescriptionDescriptionDescriptionDescription\r\nDescriptionDescriptionDescriptionDescription\r\nDescriptionDescriptionDescriptionDescription', '', '5', '', 'Y', 'Doctor', 0, '1', '73.863591', '18.501832', 'uploadifive/uploads/5b458f0da441d0912e4948205d28b8fd_Tulips.jpg'),
(25, 4, 'BBBB', 'BBBB@gmail.com', '97858254987', '0204056699888', 'Hadapsar pune', 'http://www.killerphp.com/tutorials/object-oriented-php/0', 'Hadapsar puneHadapsar \r\npuneHadapsar puneHadapsa\r\nr puneHadapsar puneHadapsa\r\nr puneHadapsar puneHadapsar\r\n ', '', '5', '', 'Y', 'Doctor', 27, '1', '1254795585', '1254795585', 'uploadifive/uploads/d578c9f481af4f730f8fb33de5373b6e_Hydrangeas.jpg'),
(26, 5, 'CCCCCC', 'CCCCCC@gmail.com', '9723457852', '98231548752', 'Haddaksfkakafsx/lf', 'http://www.killerphp.com/tutorials/object-oriented-php/0', 'Haddaksfkakafsx/lfDescription\r\nDescriptionDescriptionDescription', '', '5', '', 'Y', 'Doctor', 0, '1', '73.863591', '18.501832', ''),
(27, 4, 'DDDDDD', 'DDDDDD@gmail.com', '9856457858', '020240058625', 'Hadapsar', 'http://www.killerphp.com/tutorials/object-oriented-php/', 'Descript', '', '4', '', 'Y', 'Doctor', 10, '1', '73.863591', '18.501832', 'uploadifive/uploads/ee91c88ee4a7660a1dfe4c02915f4a81_Jellyfish.jpg'),
(28, 4, 'EEEEEE', 'EEEEEE@gmail.com', '9856457898', '0202406888', 'EEEEEEEEEEEEEEEEEEEE\r\nEEEEEEEEEEEEEEEEEEEEEE\r\n\r\nEEEEEEEEEEEEEEEEEEEEEEEE', '', 'DescriptionDescriptionDescription\r\nDescriptionDescriptionDescription', '', '4', '', 'Y', 'Doctor', 0, '1', '73.863591', '18.501832', 'uploadifive/uploads/3a394c8e645cbb30347665a15546be6e_Penguins.jpg'),
(29, 4, 'ABVCDDDD', 'ABVCDDDD@gmail.com', '9730501945', '020422409', 'ECP Wastu', 'localhost/green-konkan/admin/advertise-add.php', 'ECP Wastu', '', '5', '', 'Y', 'Hotel', 0, '1', '9856422512', '12547955511', 'uploadifive/uploads/d9475c713ff2f88a7ffc39e4bc27eeba_Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gk_adv_images`
--

CREATE TABLE IF NOT EXISTS `gk_adv_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adv_id` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `gk_adv_images`
--

INSERT INTO `gk_adv_images` (`id`, `adv_id`, `image_name`) VALUES
(25, '22', '18133a90ea71e3307ebae0b77bbcbcbf_Desert.jpg'),
(24, '23', '9d9823fa60fc8b97a21666d5d8cd4422_Hydrangeas.jpg'),
(26, '24', '9e277123795a8564f7cbe11b3111dec9_Chrysanthemum.jpg'),
(27, '24', 'ef039c8a7f4f481064dd4db4e155e7b1_Hydrangeas.jpg'),
(28, '25', 'c01c6d3cbd056830a915d86eff16a643_Hydrangeas.jpg'),
(29, '26', '09712dd6a95599d4eac2c859c9883bea_Hydrangeas.jpg'),
(30, '27', '37985b988285afa8c07990ae40970a48_Chrysanthemum.jpg'),
(31, '28', '09dc5a23235ab12615860f43bc6fe7e5_Jellyfish.jpg'),
(32, '23', '2ebc89353f78dfea0780788b29ee9612_Chrysanthemum.jpg'),
(33, '23', 'fe62faa8d6f27f51c63e913547ad0b9e_Desert.jpg'),
(34, '23', '9cd26053235bd8def9b0e79b9e731621_Hydrangeas.jpg'),
(35, '23', '9157310dc093e3336e132d9a18803650_Tulips.jpg'),
(36, '23', '58e6e678808b541089a8a652eac539d5_Jellyfish.jpg'),
(37, '23', '6c133d6e6bb036e24b517f9127b8205c_Koala.jpg'),
(38, '23', '85066c9b5a7df1d3fb3567430a6533f4_Lighthouse.jpg'),
(39, '23', '72e434013f80b1a5058c934decd38849_Penguins.jpg'),
(40, '29', '55bde99b282d72fe78157313f7bc5218_Chrysanthemum.jpg'),
(41, '29', 'ae36727125c520384a45947d5c7e837b_rating.png');

-- --------------------------------------------------------

--
-- Table structure for table `gk_category`
--

CREATE TABLE IF NOT EXISTS `gk_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  `category_image` text NOT NULL,
  `type` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `severity` enum('1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `gk_category`
--

INSERT INTO `gk_category` (`category_id`, `category_name`, `category_image`, `type`, `status`, `severity`) VALUES
(30, 'Hotel', 'upload/category/06b5e7b1e9b4498dbd665a7ffbb0b8f2_Hotel.jpg', 'Hotel', '1', '1'),
(31, 'Hospital', 'upload/category/94a5dae32c5cff09e0212133bf0aacdc_Hospital.jpg', 'Hospital', '1', '1'),
(32, 'Doctor', 'upload/category/1157c60d1dff37ca029c2d9156431bb1_Doctor.jpg', 'Doctor', '1', '1'),
(33, 'Real Estate', 'upload/category/3df3730f9c2b17a8a9caa0aa8517334b_images.jpg', 'Real Estate', '1', '1'),
(34, 'Baby Care', 'upload/category/c9080970014c203c9fea6b3d63c52a23_baby-care.gif', 'Baby Care', '1', '2'),
(35, 'Automobile', 'upload/category/ad544ddcd7aa743d46d62e89301649a9_ferrari.jpg', 'Automobile', '1', '1'),
(36, 'Auto Care', 'upload/category/fb6c35271459b5cf2ab8bbc7500171f5_Auto Care.jpg', 'Auto Care', '1', '1'),
(37, 'Cabs & Cabs Rentals', 'upload/category/57af4282f3162d6e6e5d7ce9a5303ced_Car-Rentals-Services.jpg', 'Cabs & Cabs Rentals', '1', '2'),
(38, 'Autowala On Call', 'upload/category/7857ea70853b415a4c0618a5ea3ea999_AutowalaOnCall.jpg', 'Autowala On Call', '1', '1'),
(39, 'Chemists', 'upload/category/5c5ba69142d52390c21cbb3f4689905a_Chemists.jpg', 'Chemists', '1', '1'),
(40, 'Restaurants', 'upload/category/f3ddfc3982e871cb7c7a36e48247bd16_Restaurants.jpg', 'Restaurants', '1', '1'),
(41, 'Entertainment', 'upload/category/733a8f5a8c68efe386e158e055f53683_Entertainment.jpg', 'Entertainment', '1', '1'),
(42, 'Fitness Center', 'upload/category/babeaee328c2a5254a299bc395c098aa_FitnessCenter.jpg', '', '1', '1'),
(43, 'Home Decor', 'upload/category/441f3c0d0cff0f593188d14f07c5a444_HomeDecor.png', '', '1', '2'),
(44, 'Jewellery', 'upload/category/1f6c4e1dbd2d5799e999cbfc06f4bb1b_Jewellery.jpg', '', '1', '1'),
(45, 'Wedding', 'upload/category/86e87cda34fad943a4b11b385661d963_Wedding.jpg', '', '1', '2'),
(46, 'Personal Care', 'upload/category/791a08e436629d5356e3fc0283e83d63_Cosmetics.png', '', '1', '1'),
(47, 'Interior Designers', 'upload/category/6bb53db5777495debee92c73feabfb75_interiordesigner.jpg', '', '1', '1'),
(48, 'Education', 'upload/category/66f23be672b828364d2e1cda55c5f9cf_education.jpg', '', '1', '2'),
(49, 'Caterer', 'upload/category/5a6f671e43574bc071a843c8b65c75ba_caterer1.jpg', '', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gk_client_management`
--

CREATE TABLE IF NOT EXISTS `gk_client_management` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gk_client_management`
--

INSERT INTO `gk_client_management` (`client_id`, `client_name`, `contact_no`, `email`, `status`) VALUES
(4, 'EyeCare1', '8888015766', 'jadhav.raj22@gmail.com', '0'),
(5, 'Dentist', '8888015766', 'jadhav.raj22@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gk_contact_us`
--

CREATE TABLE IF NOT EXISTS `gk_contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `phone` varchar(50) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gk_contact_us`
--


-- --------------------------------------------------------

--
-- Table structure for table `gk_faq`
--

CREATE TABLE IF NOT EXISTS `gk_faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gk_faq`
--


-- --------------------------------------------------------

--
-- Table structure for table `gk_landing_text`
--

CREATE TABLE IF NOT EXISTS `gk_landing_text` (
  `input_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`input_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gk_landing_text`
--

INSERT INTO `gk_landing_text` (`input_id`, `title`, `heading`, `status`) VALUES
(9, 'WHAT WE DO', '<p>Marketing is the larger process of successfully selling products or services to the consumer from start to finish. Marketing may begin as early as the research and development stage and involves market research, product development, pricing, sales,&nbs', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gk_likes`
--

CREATE TABLE IF NOT EXISTS `gk_likes` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `adv_id` int(11) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gk_likes`
--

INSERT INTO `gk_likes` (`like_id`, `ip_address`, `adv_id`) VALUES
(4, '192.168.0.105', 23),
(11, '192.168.0.106', 23),
(5, '192.168.0.103', 25),
(6, '192.168.0.105', 24),
(16, '192.168.0.103', 23),
(9, '192.168.0.103', 26),
(10, '192.168.0.102', 24);

-- --------------------------------------------------------

--
-- Table structure for table `gk_logo`
--

CREATE TABLE IF NOT EXISTS `gk_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `gk_logo`
--


-- --------------------------------------------------------

--
-- Table structure for table `gk_most_visited_place`
--

CREATE TABLE IF NOT EXISTS `gk_most_visited_place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `placename` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gk_most_visited_place`
--

INSERT INTO `gk_most_visited_place` (`place_id`, `placename`, `description`, `address`, `location`, `status`) VALUES
(16, 'Savatsada Waterfall', 'Sawatsada Waterfall is a monsoon attraction that is situated just 3 km distance from chiplun mid center. it attracts the eyes of tourists in months of June and July.', 'From chiplun city 3 km distance on mumbai goa road  ', 'SawatSada WaterFall, Mumbai-Goa Road, Chiplun, Maharashtra, India', '0'),
(15, 'Ganpatipule', 'Ganpatipule is a small town located in the Ratnagiri district on the Konkan coast of Maharashtra The town of Chiplun is located to its north', 'From main road mumbai goa highway NH - 66 distance is about 31 km.  ', 'Ganpatipule Temple, Ratnagiri, Maharashtra, India', '0'),
(17, 'Marleshwar Temple', 'marleshwar shiva temple – its a popular shiva temple situated in a cave in maralgoan village. this cave temple must have been named after the village which lies in sangameshwar, ratnagiri district of maharashtra.', '38 Km - Distance from Sangameshwar to Marleshwar From Main Mumbai Goa Road. ', 'Marleshwar Shiva Temple, Ratnagiri, Maharashtra, India', '0'),
(18, 'Parshuram Temple', 'Parshurama is a Chiranjivi (immortal) avatar. After he rid the earth of all the Kshatriyas twenty-one times, Parshurama donated the entire earth to Maharshi Kashyap, thus he could not reside on that land. Parashuram had twenty-one battles to rid of those Kshatriyas Kings who had become brutal dictators and had given up principles of dharma. The Last Ruler to be killed was Kartavirya Arjuna. Rulers like Janak or Ikshwaku who ruled by principles were not harmed.', 'Parshuram Temple, village - Parshuram, taluka - Chiplun, district - Ratnagiri. Parshurama Temple (also known as Shree Kshetra Parshuram) is a temple of Lord Parshurama, the sixth avatar of Vishnu in Hinduism. On Main Road Mumbai Goa Highway', 'Parshuram Temple Lote chiplun Maharashtra', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gk_package`
--

CREATE TABLE IF NOT EXISTS `gk_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) NOT NULL,
  `visiting_place_image` varchar(255) NOT NULL,
  `pac_duration` varchar(50) NOT NULL,
  `package_cost` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gk_package`
--

INSERT INTO `gk_package` (`package_id`, `package_name`, `visiting_place_image`, `pac_duration`, `package_cost`, `status`) VALUES
(4, 'Platinum', 'upload/visit/cde02093423778731007229ce0958d2e_Hydrangeas.jpg', '3 Month', '800', '1'),
(5, 'Gold', 'upload/visit/cde02093423778731007229ce0958d2e_Hydrangeas.jpg', '2 Month', '500', '1'),
(6, 'Silver', 'upload/visit/29a660f465a7a558fa64bba020e866c2_Jellyfish.jpg', '05/25/2016 - 05/25/2016', '300', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gk_place_images`
--

CREATE TABLE IF NOT EXISTS `gk_place_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `gk_place_images`
--

INSERT INTO `gk_place_images` (`id`, `p_id`, `image_name`) VALUES
(28, '14', '4b97b474263b75dcf00877bdd0f3f6e2_Hydrangeas.jpg'),
(29, '15', '4caf7e92aa995ad115806f6f9ce249d4_Ganpatipule1.jpg'),
(30, '15', '3ef799e7af4f17ee37f16545e41fe765_Ganpatipule2.jpg'),
(31, '15', '01e7c972280cc4bf06f2cae781118826_Ganpatipule3.jpg'),
(32, '15', '648fd1c0cadec9c4db8b2199c5348765_Ganpatipule4.jpg'),
(33, '15', '1313d49b78dfdf231219e5bafa32c018_Ganpatipule5.jpg'),
(34, '16', '8502a74c2231a7b31735d93a0b1c9b47_Saavatsada1.jpg'),
(35, '16', 'f3254e2219de0d6b295ec04ecfcf41f3_Savatsada3.JPG'),
(36, '16', '0bc8eae6b96724989ae9ddaff2a2008d_Savatsada4.jpg'),
(37, '16', 'a7db8de595afe75358f8988a4cdb2a87_savatsada5.jpg'),
(38, '17', '88c163b442f45e4d2616d3197e586cd1_marleshwar.jpg'),
(39, '17', '4f7f3e19ab5b06ccdd441fd5af94e7f5_Marleshwarwaterfall.jpg'),
(40, '17', '5edef2a92decf5381e73333afc3708e2_MarleshwarTemplenWaterfallMaral.JPG'),
(41, '17', '48640b9b373aa6f756ada490d9af1bb9_MarleshwarTemple.jpg'),
(42, '17', 'a971a4c8c67727154b30974ad4fb4fe8_marleshwar-falls-river.jpg'),
(43, '17', 'd628a9ca3d759ce7e7caa3c6cfbbfd08_MarleshwarTempleRatnagiri18574.jpg'),
(44, '17', 'eb23caaa53deec646c8d5d0a5246fcb1_marleshwar-shiva-temple.jpg'),
(45, '18', '74807227aa2f836a235eaee74c4b43df_Lord-Parashuram1.jpg'),
(46, '18', 'fa6c53949d357e00c4199941aa44e8de_Lord-Parashuram2.jpg'),
(47, '18', 'b2a254a3ea101eb2162a9efc142fcd33_Lord-Parashuram4.jpg'),
(48, '18', '1928e55c14b604a66f0cf1ada3c30c1b_Lord-Parashuram5.jpg'),
(49, '18', '9a32b0f1911ff515851d67166eb61dc7_Lord-Parashuram52.jpg'),
(50, '18', '0f8f3bb54b3648e999ff8081901857d9_Lord-Parashuram6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gk_review`
--

CREATE TABLE IF NOT EXISTS `gk_review` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `adv_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gk_review`
--

INSERT INTO `gk_review` (`r_id`, `name`, `email`, `message`, `adv_id`, `rating`, `status`) VALUES
(1, 'Devidas', 'deva.shinde1@gmail.com', 'I like great', 23, 5, '1'),
(2, 'Smita Shinde', 'smita@gmail.com', 'This is really great concept', 23, 3, '1'),
(3, 'Mangesh', 'manemangesh143@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', 23, 2, '1'),
(4, 'Sagar', 'Sagarpdml@gmail.com', 'Hi\nThis is really great concept', 23, 4, '0'),
(5, 'Rajesh', 'Rajesh@gmail.com', 'Hi ,\nMake sure you enter the(*)required information where indicate.HTML code is not allowed', 23, 4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `gk_seo`
--

CREATE TABLE IF NOT EXISTS `gk_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descending` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `gk_seo`
--

INSERT INTO `gk_seo` (`id`, `keyword`, `title`, `descending`, `status`, `image`) VALUES
(31, 'Rajan1', 'Rajan2', 'Rajan3', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `gk_slider`
--

CREATE TABLE IF NOT EXISTS `gk_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `gk_slider`
--


-- --------------------------------------------------------

--
-- Table structure for table `gk_sub_category`
--

CREATE TABLE IF NOT EXISTS `gk_sub_category` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`sub_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `gk_sub_category`
--

INSERT INTO `gk_sub_category` (`sub_category_id`, `sub_category`, `category_name`, `type`, `status`) VALUES
(10, 'Dentists', 'Doctor', 'Doctor', '1'),
(11, 'Dermatologists', 'Doctor', 'Doctor', '1'),
(12, 'ENT Surgeons', 'Doctor', 'Doctor', '1'),
(13, 'General Physicians', 'Doctor', 'Doctor', '1'),
(14, 'Gynecologists & Obstetricians', 'Doctor', 'Doctor', '1'),
(15, 'Neurologists', 'Doctor', 'Doctor', '1'),
(16, 'Ophthalmologists', 'Doctor', 'Doctor', '1'),
(17, 'Orthopedic Surgeons', 'Doctor', 'Doctor', '1'),
(18, 'Paediatricians', 'Doctor', 'Doctor', '1'),
(19, 'Veterinary Doctors', 'Doctor', 'Doctor', '1'),
(20, 'Urologists', 'Doctor', 'Doctor', '1'),
(21, 'Trichologists', 'Doctor', 'Doctor', '1'),
(22, 'Thyroid Doctors', 'Doctor', 'Doctor', '1'),
(23, 'Sexologists For Male', 'Doctor', 'Doctor', '1'),
(24, 'Sexologists For Female', 'Doctor', 'Doctor', '1'),
(25, 'Sexologists', 'Doctor', 'Doctor', '1'),
(26, 'Speech Therapists', 'Doctor', 'Doctor', '1'),
(27, 'Rheumatologists', 'Doctor', 'Doctor', '1'),
(28, 'Radiologists', 'Doctor', 'Doctor', '1'),
(29, 'Pulmonologists', 'Doctor', 'Doctor', '1'),
(30, 'Psychotherapy Doctor', 'Doctor', 'Doctor', '1'),
(31, 'Psychologist Doctors', 'Doctor', 'Doctor', '1'),
(32, 'Psychiatrists', 'Doctor', 'Doctor', '1'),
(33, 'Piles Doctors', 'Doctor', 'Doctor', '1'),
(34, 'Physiotherapists', 'Doctor', 'Doctor', '1'),
(35, 'Physiotherapists For Home Visits', 'Doctor', 'Doctor', '1'),
(36, 'Pathologist Doctors', 'Doctor', 'Doctor', '1'),
(37, 'Orthodontists', 'Doctor', 'Doctor', '1'),
(38, 'Neurosurgeons', 'Doctor', 'Doctor', '1'),
(39, 'Nephrologists', 'Doctor', 'Doctor', '1'),
(40, 'Kidney Stone Specialist Doctors', 'Doctor', 'Doctor', '1'),
(41, 'Infertility Doctors', 'Doctor', 'Doctor', '1'),
(42, 'Homeopathic Doctors', 'Doctor', 'Doctor', '1'),
(43, 'Maxillofacial Surgeon Doctors', 'Doctor', 'Doctor', '1'),
(44, 'Gastroenterologists', 'Doctor', 'Doctor', '1'),
(45, 'Endocrinologists', 'Doctor', 'Doctor', '1'),
(46, 'Dietitians', 'Doctor', 'Doctor', '1'),
(47, 'Endodontist Doctor', 'Doctor', 'Doctor', '1'),
(48, 'Diabetologists', 'Doctor', 'Doctor', '1'),
(49, 'Cosmetic Surgeons', 'Doctor', 'Doctor', '1'),
(50, 'Cardiologist Doctors', 'Doctor', 'Doctor', '1'),
(51, 'Ayurvedic Doctors', 'Doctor', 'Doctor', '1'),
(52, 'Asthma Doctors', 'Doctor', 'Doctor', '1'),
(53, 'Veterinary Hospital', 'Hospital', 'Hospital', '1'),
(54, 'Tuberculosis Hospital', 'Hospital', 'Hospital', '1'),
(55, 'Swine Flu Testing Center', 'Hospital', 'Hospital', '1'),
(56, 'Public Hospitals', 'Hospital', 'Hospital', '1'),
(57, 'Private Hospitals', 'Hospital', 'Hospital', '1'),
(58, 'Orthopaedic Hospitals', 'Hospital', 'Hospital', '1'),
(59, 'Ophthalmologists', 'Hospital', 'Hospital', '1'),
(60, 'Nursing Homes', 'Hospital', 'Hospital', '1'),
(61, 'Neurological Hospitals', 'Hospital', 'Hospital', '1'),
(62, 'Multispeciality Hospitals', 'Hospital', 'Hospital', '1'),
(63, 'Mental Hospitals', 'Hospital', 'Hospital', '1'),
(64, 'Meternity Hospitals', 'Hospital', 'Hospital', '1'),
(65, 'Kidney Hospitals', 'Hospital', 'Hospital', '1'),
(66, 'Homeopathic Hospitals', 'Hospital', 'Hospital', '1'),
(67, 'HIV', 'Hospital', 'Hospital', '1'),
(68, 'Government veterinary Hospitals', 'Hospital', 'Hospital', '1'),
(69, 'Eye Hospitals', 'Hospital', 'Hospital', '1'),
(70, 'Esis Hospitals', 'Hospital', 'Hospital', '1'),
(71, 'ENT Hospitals', 'Hospital', 'Hospital', '1'),
(72, 'Diabetic Hospitals', 'Hospital', 'Hospital', '1'),
(73, 'Dental Hospitals', 'Hospital', 'Hospital', '1'),
(74, 'Children Hospitals', 'Hospital', 'Hospital', '1'),
(75, 'Charitable Hospitals', 'Hospital', 'Hospital', '1'),
(76, 'Cardiac Hospitals', 'Hospital', 'Hospital', '1'),
(77, 'Cancer Hospitals', 'Hospital', 'Hospital', '1'),
(78, 'Ayurvedic Hospitals', 'Hospital', 'Hospital', '1'),
(79, '24 Hours Veterinary Hospitals', 'Hospital', 'Hospital', '1'),
(80, 'Beauty Parlours', 'Personal Care', '', '1'),
(81, 'Beauty Services', 'Personal Care', '', '1'),
(82, 'Bridal Makeup', 'Personal Care', '', '1'),
(83, 'Bridegroom Makeup', 'Personal Care', '', '1'),
(84, 'Saloons', 'Personal Care', '', '1'),
(85, 'Spas', 'Personal Care', '', '1'),
(86, 'Wedding Halls', 'Wedding', '', '1'),
(87, 'Wedding Cards', 'Wedding', '', '1'),
(88, 'Tent House', 'Wedding', '', '1'),
(89, 'Sound System On Hire', 'Wedding', '', '1'),
(90, 'Readymade Garments', 'Wedding', '', '1'),
(91, 'Pandit', 'Wedding', '', '1'),
(92, 'Photographers', 'Wedding', '', '1'),
(93, 'Music Bands', 'Wedding', '', '1'),
(94, 'Mehendi Artists', 'Wedding', '', '1'),
(95, 'Matrimonial Bureaus', 'Wedding', '', '1'),
(96, 'Marriage Gardens', 'Wedding', '', '1'),
(97, 'Mandap Decorators', 'Wedding', '', '1'),
(98, 'Horses On Hire', 'Wedding', '', '1'),
(99, 'Guest Houses', 'Wedding', '', '1'),
(100, 'Generator & Power Backup', 'Wedding', '', '1'),
(101, 'Flower Decorators', 'Wedding', '', '1'),
(102, 'DJ On Hire', 'Wedding', '', '1'),
(103, 'Caterers', 'Wedding', '', '1'),
(104, 'Architects', 'Interior Designers', '', '1'),
(105, 'Schools', 'Education', '', '1'),
(106, 'Colleges', 'Education', '', '1'),
(107, 'Acting Classes', 'Education', '', '1'),
(108, 'Art & Craft Classes', 'Education', '', '1'),
(110, 'Coaching Classes & Tutorials', 'Interior Designers', '', '1'),
(111, 'Language Classes', 'Education', '', '1'),
(112, 'Music Classes', 'Education', '', '1'),
(113, 'Painting Classes', 'Education', '', '1'),
(114, 'Photography Classes', 'Education', '', '1'),
(115, 'Training Institutes', 'Education', '', '1'),
(116, 'Gym', 'Fitness Center', '', '1'),
(117, 'Dietitians', 'Fitness Center', '', '1'),
(118, 'Fitness Classes', 'Fitness Center', '', '1'),
(119, 'Health Equipments', 'Fitness Center', '', '1'),
(120, 'Health Food & Supplements', 'Fitness Center', '', '1'),
(121, 'Meditation & Relaxation', 'Fitness Center', '', '1'),
(122, 'Sport Clubs', 'Fitness Center', '', '1'),
(123, 'Swimmings clubs', 'Education', '', '1'),
(124, 'Yoga Classes', 'Fitness Center', '', '1'),
(125, 'Two Wheeler Accessories', 'Auto Care', '', '1'),
(126, 'Car Repair', 'Auto Care', '', '1'),
(127, 'Bike & Car Tyres', 'Auto Care', '', '1'),
(128, 'Car Batteries', 'Auto Care', '', '1'),
(130, 'Car Accessories', 'Auto Care', '', '1'),
(131, 'Car Wash', 'Auto Care', '', '1'),
(132, 'Motorcycle Repair', 'Auto Care', '', '1'),
(133, 'Two & Four Wheeler Batteries', 'Auto Care', '', '1'),
(134, 'Car Showrooms', 'Automobile', '', '1'),
(135, 'Used Car ', 'Automobile', '', '1'),
(136, 'Wipes', 'Baby Care', '', '1'),
(137, 'Utensils', 'Baby Care', '', '1'),
(138, 'Travel Accessories', 'Baby Care', '', '1'),
(139, 'Toys', 'Baby Care', '', '1'),
(140, 'Stationary', 'Baby Care', '', '1'),
(141, 'Safety', 'Baby Care', '', '1'),
(142, 'Pregnancy Care', 'Baby Care', '', '1'),
(143, 'Footwear', 'Baby Care', '', '1'),
(144, 'Maternity Wear', 'Baby Care', '', '1'),
(145, 'Food Feeding Accessories', 'Baby Care', '', '1'),
(146, 'Diapers', 'Baby Care', '', '1'),
(147, 'Diaper Accessories', 'Baby Care', '', '1'),
(148, 'Creams', 'Baby Care', '', '1'),
(149, 'Clothes', 'Baby Care', '', '1'),
(150, 'Breast Feeding Accessories', 'Baby Care', '', '1'),
(151, 'Books', 'Baby Care', '', '1'),
(152, 'Bath', 'Baby Care', '', '1'),
(153, 'Baby Sleep', 'Baby Care', '', '1'),
(154, 'Baby Food', 'Baby Care', '', '1'),
(155, 'Office Caterer', 'Caterer', '', '1'),
(156, 'Birthday Party caterer', 'Caterer', '', '1'),
(157, 'Party Caterers', 'Caterer', '', '1'),
(158, 'Weeding Caterers', 'Caterer', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gk_users`
--

CREATE TABLE IF NOT EXISTS `gk_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gk_users`
--

INSERT INTO `gk_users` (`user_id`, `user_name`, `password`, `email`, `user_role`, `status`) VALUES
(6, 'deva', 'deva', 'abcd@gmail.com', 'admin', '1'),
(7, 'rajesh', 'rajesh', 'rajesh@gmail.com', 'super user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gk_user_role`
--

CREATE TABLE IF NOT EXISTS `gk_user_role` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gk_user_role`
--

INSERT INTO `gk_user_role` (`user_id`, `user_role`) VALUES
(1, 'admin'),
(2, 'super user'),
(3, 'sub user');
