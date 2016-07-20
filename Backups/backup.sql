-- phpMyAdmin SQL Dump
-- version 2.6.4-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 06, 2006 at 10:55 PM
-- Server version: 4.1.14
-- PHP Version: 4.3.11
-- 
-- Database: `blood_bloodtown`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `airport`
-- 

CREATE TABLE `airport` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `travel_prices` varchar(100) NOT NULL default '100-100-100-100-100-100',
  `profit` varchar(100) NOT NULL default '0-0-0-0-0-0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `airport`
-- 

INSERT INTO `airport` VALUES (1, 'Mafia', 'England', '1000-1000-1000-1000-1000-1000', '0-18000-34000-15500-11000-13000');
INSERT INTO `airport` VALUES (2, 'leskepimpin', 'Japan', '1000-1000-1000-1000-1000-1000', '21000-0-9000-3000-2000-2000');
INSERT INTO `airport` VALUES (3, 'Liberate', 'France', '1000-1000-1000-1000-1000-1000', '23000-11000-0-6000-2000-9000');
INSERT INTO `airport` VALUES (4, 'Rafx10', 'Usa', '1000-1000-1000-500-1000-500', '17100-4000-2750-0-0-2500');
INSERT INTO `airport` VALUES (5, ':: Tiffer ::', 'China', '999-800-700-100-700-700', '5994-1600-1400-200-0-1400');
INSERT INTO `airport` VALUES (6, 'Rafx10', 'Canada', '1000-1000-1000-500-1000-1000', '2000-2000-2000-500-0-0');

-- --------------------------------------------------------

-- 
-- Table structure for table `attempts`
-- 

CREATE TABLE `attempts` (
  `id` int(11) NOT NULL auto_increment,
  `username` char(40) NOT NULL default '',
  `target` char(40) NOT NULL default '',
  `outcome` enum('Dead','Survived') NOT NULL default 'Dead',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- 
-- Dumping data for table `attempts`
-- 

INSERT INTO `attempts` VALUES (30, 'jebediah', 'solomona', 'Dead', '2005-12-28 11:22:10');
INSERT INTO `attempts` VALUES (29, 'tiffer', 'unownking', 'Survived', '2005-12-26 06:11:11');
INSERT INTO `attempts` VALUES (28, 'tiffer', 'unownking', 'Dead', '2005-12-26 06:11:11');
INSERT INTO `attempts` VALUES (31, 'jebediah', 'solomona', 'Survived', '2005-12-28 11:22:10');
INSERT INTO `attempts` VALUES (32, 'stateofwar', 'jebediah', 'Survived', '2005-12-30 03:47:50');
INSERT INTO `attempts` VALUES (33, 'stateofwar', 'jebediah', 'Survived', '2005-12-30 08:06:22');
INSERT INTO `attempts` VALUES (34, 'mafia', 'thepunisher91', 'Dead', '2005-12-31 01:37:17');
INSERT INTO `attempts` VALUES (35, 'mafia', 'thepunisher91', 'Survived', '2005-12-31 01:37:17');
INSERT INTO `attempts` VALUES (36, 'rafx10', 'Capone01', 'Dead', '2006-01-01 05:32:13');
INSERT INTO `attempts` VALUES (37, 'rafx10', 'Capone01', 'Survived', '2006-01-01 05:32:13');
INSERT INTO `attempts` VALUES (38, 'liberate', 'EvilCouncil', 'Dead', '2006-01-04 04:38:41');
INSERT INTO `attempts` VALUES (39, 'liberate', 'EvilCouncil', 'Survived', '2006-01-04 04:38:41');
INSERT INTO `attempts` VALUES (40, 'gunnboy', 'bloody', 'Dead', '2006-01-04 07:02:39');
INSERT INTO `attempts` VALUES (41, 'gunnboy', 'bloody', 'Survived', '2006-01-04 07:02:39');
INSERT INTO `attempts` VALUES (42, 'liberate', 'StateOfwar', 'Dead', '2006-01-06 03:13:49');
INSERT INTO `attempts` VALUES (43, 'liberate', 'StateOfwar', 'Survived', '2006-01-06 03:13:49');
INSERT INTO `attempts` VALUES (44, 'jebediah', 'blood', 'Dead', '2006-01-06 08:51:24');
INSERT INTO `attempts` VALUES (45, 'jebediah', 'blood', 'Survived', '2006-01-06 08:51:24');
INSERT INTO `attempts` VALUES (46, 'adrenaline', 'Liberate', 'Dead', '2006-01-06 10:38:09');
INSERT INTO `attempts` VALUES (47, 'adrenaline', 'Liberate', 'Survived', '2006-01-06 10:38:09');
INSERT INTO `attempts` VALUES (48, 'jebediah', 'Mafia', 'Survived', '2006-01-06 10:55:52');
INSERT INTO `attempts` VALUES (49, 'tempestuous', 'Rafx10', 'Survived', '2006-01-06 10:59:10');
INSERT INTO `attempts` VALUES (50, 'jebediah', 'angel', 'Dead', '2006-01-06 11:56:28');
INSERT INTO `attempts` VALUES (51, 'jebediah', 'angel', 'Survived', '2006-01-06 11:56:28');
INSERT INTO `attempts` VALUES (52, 'adrenaline', 'agent1', 'Survived', '2006-01-06 12:00:12');
INSERT INTO `attempts` VALUES (53, 'tempestuous', 'Mafia', 'Survived', '2006-01-06 12:14:05');
INSERT INTO `attempts` VALUES (54, 'adrenaline', 'Mafia', 'Survived', '2006-01-06 01:14:44');
INSERT INTO `attempts` VALUES (55, 'jebediah', 'agent1', 'Dead', '2006-01-06 01:16:22');
INSERT INTO `attempts` VALUES (56, 'jebediah', 'agent1', 'Survived', '2006-01-06 01:16:22');
INSERT INTO `attempts` VALUES (57, 'rafx10', 'AdrenalinE', 'Dead', '2006-01-06 03:34:36');
INSERT INTO `attempts` VALUES (58, 'rafx10', 'AdrenalinE', 'Survived', '2006-01-06 03:34:36');
INSERT INTO `attempts` VALUES (59, 'gunnboy', 'Tempestuous', 'Survived', '2006-01-06 03:52:52');
INSERT INTO `attempts` VALUES (60, 'mafia', 'SuperBeast', 'Dead', '2006-01-06 04:51:38');
INSERT INTO `attempts` VALUES (61, 'mafia', 'SuperBeast', 'Survived', '2006-01-06 04:51:38');
INSERT INTO `attempts` VALUES (62, 'mafia', 'jebediah', 'Survived', '2006-01-06 05:52:10');
INSERT INTO `attempts` VALUES (63, 'mafia', 'jebediah', 'Survived', '2006-01-06 06:52:35');
INSERT INTO `attempts` VALUES (64, 'rafx10', 'InsanePhatSouljah', 'Dead', '2006-01-06 06:54:42');
INSERT INTO `attempts` VALUES (65, 'rafx10', 'InsanePhatSouljah', 'Survived', '2006-01-06 06:54:42');
INSERT INTO `attempts` VALUES (66, 'mafia', 'Tempestuous', 'Survived', '2006-01-06 08:48:16');
INSERT INTO `attempts` VALUES (67, 'mafia', 'Tempestuous', 'Dead', '2006-01-06 09:48:34');
INSERT INTO `attempts` VALUES (68, 'mafia', 'Tempestuous', 'Survived', '2006-01-06 09:48:34');

-- --------------------------------------------------------

-- 
-- Table structure for table `auctions`
-- 

CREATE TABLE `auctions` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `min_starting` int(11) NOT NULL default '0',
  `current_bid` int(11) NOT NULL default '0',
  `winning` varchar(40) NOT NULL default '',
  `winning_bid` int(11) NOT NULL default '0',
  `item_type` varchar(100) NOT NULL default '',
  `time` varchar(100) NOT NULL default '',
  `item_id` varchar(100) NOT NULL default '',
  `an` enum('0','1') NOT NULL default '0',
  `pvt` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `auctions`
-- 

INSERT INTO `auctions` VALUES (9, 'tiffer', 1000000, 0, '0', 0, 'Bullets', '1136589650', '1000', '1', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `ban`
-- 

CREATE TABLE `ban` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `by` varchar(40) NOT NULL default '',
  `type` enum('0','1') NOT NULL default '0',
  `reason` text NOT NULL,
  `length` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `ban`
-- 

INSERT INTO `ban` VALUES (20, '62.252.64.18', 'Tiffer', '0', 'IP Banned', '');
INSERT INTO `ban` VALUES (19, 'a3man', 'tiffer', '0', 'Same IP Transfers - a3man > toyboi > agent1 > realdeal > MrMcBadman (IP: 62.252.64.18) Banned Be Tiffer', 'N/A');

-- --------------------------------------------------------

-- 
-- Table structure for table `bank`
-- 

CREATE TABLE `bank` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  `send_intrest` int(11) NOT NULL default '0',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` int(100) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `bank`
-- 

INSERT INTO `bank` VALUES (1, 'Mafia', 21, 'England', 0);
INSERT INTO `bank` VALUES (2, 'leskepimpin', 2, 'Japan', 0);
INSERT INTO `bank` VALUES (3, '0', 2, 'France', 0);
INSERT INTO `bank` VALUES (4, 'Rafx10', 3, 'Usa', 0);
INSERT INTO `bank` VALUES (5, ':: Tiffer ::', 3, 'China', 0);
INSERT INTO `bank` VALUES (6, ':: Tiffer ::', 3, 'Canada', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `bar`
-- 

CREATE TABLE `bar` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` int(50) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `bar`
-- 

INSERT INTO `bar` VALUES (1, 'Mafia', 'England', 0);
INSERT INTO `bar` VALUES (2, ':: Tiffer ::', 'Japan', 0);
INSERT INTO `bar` VALUES (3, '0', 'France', 0);
INSERT INTO `bar` VALUES (4, ':: Tiffer ::', 'Usa', 0);
INSERT INTO `bar` VALUES (5, ':: Tiffer ::', 'China', 0);
INSERT INTO `bar` VALUES (6, ':: Tiffer ::', 'Canada', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `bf`
-- 

CREATE TABLE `bf` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `stock` int(100) NOT NULL default '0',
  `producing` enum('Yes','No') NOT NULL default 'Yes',
  `price` int(100) NOT NULL default '100',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `bf`
-- 

INSERT INTO `bf` VALUES (1, 'mafia', 0, 'Yes', 2001, 'England', '11405700');
INSERT INTO `bf` VALUES (2, 'leskepimpin', 14399, 'Yes', 2001, 'Japan', '200100');
INSERT INTO `bf` VALUES (3, 'mafia', 0, 'Yes', 3000, 'France', '0');
INSERT INTO `bf` VALUES (4, 'rafx10', 17395, 'Yes', 2001, 'Usa', '748374');
INSERT INTO `bf` VALUES (5, 'tiffer', 90000, 'Yes', 4999, 'China', '39992000');
INSERT INTO `bf` VALUES (6, 'rafx10', 18150, 'Yes', 2001, 'Canada', '5602800');

-- --------------------------------------------------------

-- 
-- Table structure for table `bidders`
-- 

CREATE TABLE `bidders` (
  `id` int(11) NOT NULL auto_increment,
  `bidder` char(40) NOT NULL default '',
  `amount` int(11) NOT NULL default '0',
  `auction_id` int(11) NOT NULL default '0',
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  `an` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `bidders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `boats`
-- 

CREATE TABLE `boats` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `boat` varchar(100) NOT NULL default '',
  `damage` varchar(100) NOT NULL default '',
  `origion` varchar(100) NOT NULL default '',
  `location` varchar(100) NOT NULL default '',
  `upgrades` varchar(100) NOT NULL default '0-0-0-0-0-0-0-0',
  `status` enum('0','1','2','3','4') NOT NULL default '0',
  `worth` int(32) NOT NULL default '0',
  `shiptime` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=343 ;

-- 
-- Dumping data for table `boats`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `car_sell`
-- 

CREATE TABLE `car_sell` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  `car_id` int(50) NOT NULL default '0',
  `price` int(50) NOT NULL default '0',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `car_type` char(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

-- 
-- Dumping data for table `car_sell`
-- 

INSERT INTO `car_sell` VALUES (21, 'agent1', 2361, 50000, '0000-00-00 00:00:00', 'TVR Speed 12', 'England');
INSERT INTO `car_sell` VALUES (35, 'agent1', 2437, 90000, '0000-00-00 00:00:00', 'Mclaren f1', 'England');
INSERT INTO `car_sell` VALUES (19, 'agent1', 2358, 25000, '0000-00-00 00:00:00', 'Bmw m3', 'England');
INSERT INTO `car_sell` VALUES (18, 'agent1', 2322, 100000, '0000-00-00 00:00:00', 'Mclaren f1', 'England');
INSERT INTO `car_sell` VALUES (22, 'agent1', 2363, 100000, '0000-00-00 00:00:00', 'Mclaren f1', 'England');
INSERT INTO `car_sell` VALUES (23, 'agent1', 2365, 20000, '0000-00-00 00:00:00', 'Audi A3', 'England');
INSERT INTO `car_sell` VALUES (24, 'agent1', 2366, 70000, '0000-00-00 00:00:00', 'Cadilac Escelade', 'France');
INSERT INTO `car_sell` VALUES (25, 'agent1', 2367, 20000, '0000-00-00 00:00:00', 'Bmw m3', 'France');
INSERT INTO `car_sell` VALUES (26, 'agent1', 2371, 30000, '0000-00-00 00:00:00', 'Bmw m3', 'England');
INSERT INTO `car_sell` VALUES (27, 'agent1', 2372, 20000, '0000-00-00 00:00:00', 'Renault Clio Sport', 'England');
INSERT INTO `car_sell` VALUES (28, 'agent1', 2373, 40000, '0000-00-00 00:00:00', 'Porsche 911', 'England');
INSERT INTO `car_sell` VALUES (29, 'agent1', 2374, 90000, '0000-00-00 00:00:00', 'Lamborghini Murcielago', 'England');
INSERT INTO `car_sell` VALUES (30, 'agent1', 2407, 100000, '0000-00-00 00:00:00', 'Bugatti Veyron', 'England');
INSERT INTO `car_sell` VALUES (31, 'agent1', 2409, 100000, '0000-00-00 00:00:00', 'Bugatti Veyron', 'England');
INSERT INTO `car_sell` VALUES (32, 'agent1', 2410, 20000, '0000-00-00 00:00:00', 'Audi A3', 'England');
INSERT INTO `car_sell` VALUES (33, 'agent1', 2413, 20000, '0000-00-00 00:00:00', 'Renault Clio Sport', 'England');
INSERT INTO `car_sell` VALUES (36, 'agent1', 2443, 50000, '0000-00-00 00:00:00', 'Lamborghini Murcielago', 'England');
INSERT INTO `car_sell` VALUES (37, 'agent1', 2533, 40000, '0000-00-00 00:00:00', 'Mclaren f1', 'Japan');
INSERT INTO `car_sell` VALUES (38, 'agent1', 2566, 15000, '0000-00-00 00:00:00', 'Cadilac Escelade', 'Japan');
INSERT INTO `car_sell` VALUES (39, 'agent1', 2540, 10000, '0000-00-00 00:00:00', 'Renault Clio Sport', 'Japan');
INSERT INTO `car_sell` VALUES (40, 'agent1', 2582, 20000, '0000-00-00 00:00:00', 'Mclaren f1', 'Japan');
INSERT INTO `car_sell` VALUES (41, 'agent1', 2592, 20000, '0000-00-00 00:00:00', 'TVR Speed 12', 'Japan');
INSERT INTO `car_sell` VALUES (42, 'gunnboy', 2687, 50000, '0000-00-00 00:00:00', 'Ferrari Enzo', 'Japan');

-- --------------------------------------------------------

-- 
-- Table structure for table `casino`
-- 

CREATE TABLE `casino` (
  `id` int(11) NOT NULL auto_increment,
  `casino` varchar(100) NOT NULL default '',
  `owner` varchar(100) NOT NULL default '',
  `maxbet` varchar(100) NOT NULL default '0',
  `minoffer` varchar(100) NOT NULL default '0',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `earnings` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `casino`
-- 

INSERT INTO `casino` VALUES (8, 'Roulette', 'Admin', '300', '0', 'England', '');
INSERT INTO `casino` VALUES (9, 'Roulette', '', '0', '0', 'Japan', '0');
INSERT INTO `casino` VALUES (16, 'Roulette', 'Admin', '300', '0', 'France', '');
INSERT INTO `casino` VALUES (20, 'Roulette', 'Admin', '300', '0', 'Usa', '');
INSERT INTO `casino` VALUES (21, 'Roulette', 'Admin', '300', '0', 'China', '');
INSERT INTO `casino` VALUES (28, 'Roulette', 'Admin', '300', '0', 'Canada', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `casinos`
-- 

CREATE TABLE `casinos` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `casino` enum('Slots','Roulette','RPS','Race') NOT NULL default 'Slots',
  `profit` varchar(100) NOT NULL default '',
  `max` int(11) NOT NULL default '0',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `casinos`
-- 

INSERT INTO `casinos` VALUES (1, 'Mafia', 'Slots', '9167395', 4000000, 'England');
INSERT INTO `casinos` VALUES (2, 'GuNnBoY', 'Slots', '5000', 5000000, 'Japan');
INSERT INTO `casinos` VALUES (3, 'mafia', 'Slots', '0', 5000, 'France');
INSERT INTO `casinos` VALUES (4, 'mafia', 'Slots', '0', 300, 'Usa');
INSERT INTO `casinos` VALUES (5, 'rafx10', 'Slots', '0', 1000, 'China');
INSERT INTO `casinos` VALUES (6, 'rafx10', 'Slots', '-3644', 5000, 'Canada');
INSERT INTO `casinos` VALUES (8, 'Alejdin', 'RPS', '5', 500000, 'Japan');
INSERT INTO `casinos` VALUES (7, 'Mafia', 'RPS', '89182', 4000000, 'England');
INSERT INTO `casinos` VALUES (9, 'mafia', 'RPS', '0', 300, 'Usa');
INSERT INTO `casinos` VALUES (10, 'realdeal', 'RPS', '0', 10000000, 'France');
INSERT INTO `casinos` VALUES (11, 'rafx10', 'RPS', '0', 1000, 'China');
INSERT INTO `casinos` VALUES (12, 'rafx10', 'RPS', '0', 10000, 'Canada');
INSERT INTO `casinos` VALUES (13, 'Mafia', 'Race', '-95320', 4000000, 'England');
INSERT INTO `casinos` VALUES (14, 'FySicaL', 'Race', '0', 10000, 'Japan');
INSERT INTO `casinos` VALUES (15, 'GuNnBoY', 'Race', '0', 3000000, 'France');
INSERT INTO `casinos` VALUES (16, 'mafia', 'Race', '0', 300, 'Usa');
INSERT INTO `casinos` VALUES (17, 'rafx10', 'Race', '50000', 50000, 'China');
INSERT INTO `casinos` VALUES (18, 'rafx10', 'Race', '9999', 10000, 'Canada');

-- --------------------------------------------------------

-- 
-- Table structure for table `chat`
-- 

CREATE TABLE `chat` (
  `id` int(32) NOT NULL auto_increment,
  `user` varchar(100) NOT NULL default '',
  `chat` varchar(100) NOT NULL default '',
  `timeh` varchar(20) NOT NULL default '',
  `timem` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `chat`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `crews`
-- 

CREATE TABLE `crews` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `size` int(11) NOT NULL default '0',
  `name` varchar(60) NOT NULL default '',
  `quote` text NOT NULL,
  `music` tinytext NOT NULL,
  `picture` tinytext NOT NULL,
  `recruiting` enum('1','2') NOT NULL default '1',
  `rhm` varchar(40) NOT NULL default '0',
  `bank` int(50) NOT NULL default '0',
  `income` varchar(100) NOT NULL default '0-0-0',
  `payout` varchar(100) NOT NULL default '',
  `bullets` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `crews`
-- 

INSERT INTO `crews` VALUES (13, 'mafia', 25, ':Brutal.Force:', 'In The Death Of Hate .. Punishment is born.touch any of my mebers and i will kill you and you''r crew.BLOOD CREW WHIT:THE FIRM&BTM.BE WARRNED MESS WHIT THIS CREW YOU MESS WHIT A HOLE ARMY', '', 'http://img284.imageshack.us/img284/9560/vitriol18uo.jpg', '2', 'gunnboy', 10000, '28-3-11', '1136641451', 0);
INSERT INTO `crews` VALUES (10, 'tiffer', 25, 'BTM Staff', 'BTM Staff Only', '', '', '2', 'Tiffer', 100, '0-0-30', '1136524590', 0);
INSERT INTO `crews` VALUES (15, 'stateofwar', 25, 'The Dark Side (BFTD)', '', '', '', '1', '0', 0, '0-0-0', '', 0);
INSERT INTO `crews` VALUES (12, 'rafx10', 100, 'The Firm', '', '', 'http://img311.imageshack.us/img311/467/microshockscopy3ro.jpg', '1', 'nothingman', 692, '6-1-8', '1136656061', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `dealership`
-- 

CREATE TABLE `dealership` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` int(50) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `dealership`
-- 

INSERT INTO `dealership` VALUES (1, ':: Tiffer ::', 'England', 20505);
INSERT INTO `dealership` VALUES (2, ':: Tiffer ::', 'Japan', 0);
INSERT INTO `dealership` VALUES (3, ':: Tiffer ::', 'France', 0);
INSERT INTO `dealership` VALUES (4, ':: Tiffer ::', 'Usa', 0);
INSERT INTO `dealership` VALUES (5, ':: Tiffer ::', 'China', 0);
INSERT INTO `dealership` VALUES (6, ':: Tiffer ::', 'Canada', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `donaters`
-- 

CREATE TABLE `donaters` (
  `donater_id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `donater_pass` varchar(40) NOT NULL default '',
  `amount` int(50) NOT NULL default '0',
  `package` enum('None','1','2','3','4') NOT NULL default 'None',
  `on` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`donater_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=348 ;

-- 
-- Dumping data for table `donaters`
-- 

INSERT INTO `donaters` VALUES (338, 'Tiffer', 'tiftif', 500, 'None', 'Xmas Day');
INSERT INTO `donaters` VALUES (347, 'Mafia', 'MafMaf', 10, 'None', 'Xmas Day');
INSERT INTO `donaters` VALUES (339, 'Rafx10', 'RafRaf', 20, 'None', 'Xmas Day');

-- --------------------------------------------------------

-- 
-- Table structure for table `friends`
-- 

CREATE TABLE `friends` (
  `id` int(11) NOT NULL auto_increment,
  `username` char(40) NOT NULL default '',
  `person` char(40) NOT NULL default '',
  `type` enum('Friend','Blocked') NOT NULL default 'Friend',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

-- 
-- Dumping data for table `friends`
-- 

INSERT INTO `friends` VALUES (28, 'jebediah', 'tiffer', 'Friend');
INSERT INTO `friends` VALUES (27, 'jebediah', 'Tempestuous', 'Friend');
INSERT INTO `friends` VALUES (26, 'jebediah', 'adrenaline', 'Friend');
INSERT INTO `friends` VALUES (25, 'jebediah', 'rafx10', 'Friend');
INSERT INTO `friends` VALUES (24, 'rafx10', 'capone01', 'Friend');
INSERT INTO `friends` VALUES (23, 'rafx10', 'addict', 'Friend');
INSERT INTO `friends` VALUES (22, 'rafx10', 'Liberate', 'Friend');
INSERT INTO `friends` VALUES (21, 'rafx10', 'leskepimpin', 'Friend');
INSERT INTO `friends` VALUES (20, 'rafx10', 'angel', 'Friend');
INSERT INTO `friends` VALUES (29, 'jebediah', 'sirice', 'Friend');
INSERT INTO `friends` VALUES (30, 'jebediah', 'mafia', 'Friend');
INSERT INTO `friends` VALUES (31, 'jebediah', 'makebelieve', 'Friend');
INSERT INTO `friends` VALUES (32, 'jebediah', 'leskepimpin', 'Friend');
INSERT INTO `friends` VALUES (33, 'jebediah', 'angel', 'Friend');
INSERT INTO `friends` VALUES (34, 'adrenaline', 'jebediah', 'Friend');
INSERT INTO `friends` VALUES (35, 'adrenaline', 'Tempestuous', 'Friend');
INSERT INTO `friends` VALUES (36, 'adrenaline', 'sirice', 'Friend');
INSERT INTO `friends` VALUES (37, 'adrenaline', 'leskepimpin', 'Friend');
INSERT INTO `friends` VALUES (38, 'jebediah', 'solomona', 'Friend');
INSERT INTO `friends` VALUES (39, 'gunnboy', 'mafia', 'Friend');
INSERT INTO `friends` VALUES (40, 'gunnboy', 'riper', 'Friend');
INSERT INTO `friends` VALUES (41, 'gunnboy', 'angel', 'Friend');
INSERT INTO `friends` VALUES (42, 'gunnboy', 'stateofwar', 'Friend');
INSERT INTO `friends` VALUES (43, 'gunnboy', 'a3man', 'Friend');
INSERT INTO `friends` VALUES (44, 'gunnboy', 'Rafx10', 'Friend');
INSERT INTO `friends` VALUES (45, 'gunnboy', 'LadyLunos', 'Friend');
INSERT INTO `friends` VALUES (46, 'gunnboy', 'GuNnBoY', 'Friend');
INSERT INTO `friends` VALUES (47, 'gunnboy', 'tiffer', 'Friend');
INSERT INTO `friends` VALUES (48, 'gunnboy', '3man', 'Friend');
INSERT INTO `friends` VALUES (49, 'gunnboy', 'fysical', 'Friend');
INSERT INTO `friends` VALUES (50, 'gunnboy', 'Alejdin', 'Friend');

-- --------------------------------------------------------

-- 
-- Table structure for table `garage`
-- 

CREATE TABLE `garage` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `car` varchar(100) NOT NULL default '',
  `damage` varchar(100) NOT NULL default '',
  `origion` varchar(100) NOT NULL default '',
  `location` varchar(100) NOT NULL default '',
  `upgrades` varchar(100) NOT NULL default '0-0-0-0-0-0-0-0',
  `status` enum('0','1','2','3','4') NOT NULL default '0',
  `worth` int(32) NOT NULL default '0',
  `shiptime` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2704 ;

-- 
-- Dumping data for table `garage`
-- 

INSERT INTO `garage` VALUES (2316, 'liberate', 'Renault Clio Sport', '43', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 233, '');
INSERT INTO `garage` VALUES (2231, 'leskepimpin', 'Bmw m3', '29', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 690, '');
INSERT INTO `garage` VALUES (1582, 'rafx10', 'Bugatti Veyron', '0', 'Canada', 'Canada', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (1611, 'angel', 'Bugatti Veyron', '8', 'Canada', 'Canada', '0-0-0-0-0-0-0-0', '0', 15000, '');
INSERT INTO `garage` VALUES (2229, 'leskepimpin', 'Porsche 911', '7', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 5143, '');
INSERT INTO `garage` VALUES (2373, 'agent1', 'Porsche 911', '43', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 837, '');
INSERT INTO `garage` VALUES (2562, 'agent1', 'Bugatti Veyron', '21', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 5714, '');
INSERT INTO `garage` VALUES (2223, 'rafx10', 'Bugatti Veyron', '0', 'China', 'China', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (2355, 'liberate', 'Mclaren f1', '23', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 3217, '');
INSERT INTO `garage` VALUES (1462, 'liberate', 'Nissan Skyline', '28', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1143, '');
INSERT INTO `garage` VALUES (2359, 'mrmcbadman', 'Nissan Skyline', '0', 'England', 'England', '1-1-1-0-0-1-0-2', '0', 16000, '');
INSERT INTO `garage` VALUES (2585, 'agent1', 'Ferrari Enzo', '45', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 1289, '');
INSERT INTO `garage` VALUES (2352, 'liberate', 'Bmw m3', '33', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 606, '');
INSERT INTO `garage` VALUES (2530, '3mansgirl', 'Mclaren f1', '0', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 37000, '');
INSERT INTO `garage` VALUES (2322, 'agent1', 'Mclaren f1', '23', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 3217, '');
INSERT INTO `garage` VALUES (2371, 'agent1', 'Bmw m3', '3', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 6667, '');
INSERT INTO `garage` VALUES (2366, 'agent1', 'Cadilac Escelade', '25', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1040, '');
INSERT INTO `garage` VALUES (2324, 'leskepimpin', 'Ferrari Enzo', '2', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 29000, '');
INSERT INTO `garage` VALUES (1737, 'xander', 'Bugatti Veyron', '34', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 3529, '');
INSERT INTO `garage` VALUES (1980, 'liberate', 'TVR Speed 12', '31', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2065, '');
INSERT INTO `garage` VALUES (2661, 'lexberg', 'Nissan Skyline', '25', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 1280, '');
INSERT INTO `garage` VALUES (2139, 'liberate', 'TVR Speed 12', '34', 'Canada', 'Canada', '0-0-0-0-0-0-0-0', '0', 1882, '');
INSERT INTO `garage` VALUES (2224, 'leskepimpin', 'Ferrari Enzo', '38', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 1526, '');
INSERT INTO `garage` VALUES (1976, 'davidbarnes67', 'Renault Clio Sport', '18', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 556, '');
INSERT INTO `garage` VALUES (1972, 'davidbarnes67', 'Lamborghini Murcielago', '13', 'China', 'England', '1-2-1-1-1-1-1-0', '1', 3846, '1135972868');
INSERT INTO `garage` VALUES (2232, 'leskepimpin', 'Lamborghini Murcielago', '32', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1563, '');
INSERT INTO `garage` VALUES (2361, 'agent1', 'TVR Speed 12', '6', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 10667, '');
INSERT INTO `garage` VALUES (2372, 'agent1', 'Renault Clio Sport', '4', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2500, '');
INSERT INTO `garage` VALUES (1968, 'davidbarnes67', 'Cadilac Escelade', '32', 'China', 'England', '0-0-0-0-0-0-0-0', '1', 813, '1135972851');
INSERT INTO `garage` VALUES (2233, 'leskepimpin', 'Porsche 911', '18', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2000, '');
INSERT INTO `garage` VALUES (2495, 'leskepimpin', 'GT 40', '7', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 5714, '');
INSERT INTO `garage` VALUES (2583, 'agent1', 'Nissan Skyline', '36', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 889, '');
INSERT INTO `garage` VALUES (1708, 'liberate', 'Cadilac Escelade', '32', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 813, '');
INSERT INTO `garage` VALUES (2367, 'agent1', 'Bmw m3', '39', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 513, '');
INSERT INTO `garage` VALUES (2703, 'tiffer', 'Bmw m3', '45', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 444, '');
INSERT INTO `garage` VALUES (2677, 'fysical', 'Bugatti Veyron', '0', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (2363, 'agent1', 'Mclaren f1', '46', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1609, '');
INSERT INTO `garage` VALUES (2611, 'alejdin', 'Audi A3', '0', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 6000, '');
INSERT INTO `garage` VALUES (2702, 'mafia', 'Ferrari Enzo', '13', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 4462, '');
INSERT INTO `garage` VALUES (2365, 'agent1', 'Audi A3', '29', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 414, '');
INSERT INTO `garage` VALUES (2695, 'mafia', 'Audi A3', '32', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 375, '');
INSERT INTO `garage` VALUES (2692, '3mansgirl', 'Renault Clio Sport', '17', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 588, '');
INSERT INTO `garage` VALUES (2374, 'agent1', 'Lamborghini Murcielago', '17', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2941, '');
INSERT INTO `garage` VALUES (2701, 'gunnboy', 'Mclaren f1', '10', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 7400, '');
INSERT INTO `garage` VALUES (1516, 'liberate', 'Porsche 911', '42', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 857, '');
INSERT INTO `garage` VALUES (2437, 'agent1', 'Mclaren f1', '15', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 4933, '');
INSERT INTO `garage` VALUES (2651, 'rafx10', 'Bmw m3', '40', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 500, '');
INSERT INTO `garage` VALUES (2582, 'agent1', 'Mclaren f1', '21', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 3524, '');
INSERT INTO `garage` VALUES (2657, 'lexberg', 'Lamborghini Murcielago', '6', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 8333, '');
INSERT INTO `garage` VALUES (2407, 'agent1', 'Bugatti Veyron', '46', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2609, '');
INSERT INTO `garage` VALUES (2683, '3mansgirl', 'GT 40', '20', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2000, '');
INSERT INTO `garage` VALUES (2464, 'fysical', 'TVR Speed 12', '11', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 5818, '');
INSERT INTO `garage` VALUES (2700, '3mansgirl', 'Cadilac Escelade', '34', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 765, '');
INSERT INTO `garage` VALUES (2630, 'realdeal', 'Renault Clio Sport', '11', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 909, '');
INSERT INTO `garage` VALUES (2670, 'stateofwar', 'Bmw m3', '14', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 1429, '');
INSERT INTO `garage` VALUES (1506, 'liberate', 'Lamborghini Murcielago', '14', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 3571, '');
INSERT INTO `garage` VALUES (2693, 'samdagod', 'Ferrari Enzo', '0', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 29000, '');
INSERT INTO `garage` VALUES (2682, 'stateofwar', 'Bmw m3', '49', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 408, '');
INSERT INTO `garage` VALUES (2409, 'agent1', 'Bugatti Veyron', '21', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 5714, '');
INSERT INTO `garage` VALUES (1501, 'liberate', 'GT 40', '23', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 1739, '');
INSERT INTO `garage` VALUES (2546, 'liberate', 'Bugatti Veyron', '26', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 4615, '');
INSERT INTO `garage` VALUES (2699, 'tiffer', 'Renault Clio Sport', '29', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 345, '');
INSERT INTO `garage` VALUES (2545, 'agent1', 'Lamborghini Murcielago', '3', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 16667, '');
INSERT INTO `garage` VALUES (1497, 'primalforce', 'Bmw m3', '6', 'China', 'China', '0-0-0-0-0-0-0-0', '0', 3333, '');
INSERT INTO `garage` VALUES (2410, 'agent1', 'Audi A3', '30', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 400, '');
INSERT INTO `garage` VALUES (2411, 'agent1', 'Audi A3', '13', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 923, '');
INSERT INTO `garage` VALUES (2698, '3mansgirl', 'Mclaren f1', '28', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2643, '');
INSERT INTO `garage` VALUES (2697, '3mansgirl', 'Audi A3', '19', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 632, '');
INSERT INTO `garage` VALUES (2542, 'liberate', 'Porsche 911', '48', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 750, '');
INSERT INTO `garage` VALUES (2696, '3mansgirl', 'Porsche 911', '5', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 7200, '');
INSERT INTO `garage` VALUES (1559, 'tempestuous', 'Bugatti Veyron', '0', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (2581, 'agent1', 'Bmw m3', '49', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 408, '');
INSERT INTO `garage` VALUES (2665, 'rafx10', 'GT 40', '7', 'China', 'China', '0-0-0-0-0-0-0-0', '0', 5714, '');
INSERT INTO `garage` VALUES (1488, 'angel', 'Bugatti Veyron', '29', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 4138, '');
INSERT INTO `garage` VALUES (1487, 'liberate', 'Porsche 911', '48', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 750, '');
INSERT INTO `garage` VALUES (2550, 'agent1', 'Ferrari Enzo', '2', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 29000, '');
INSERT INTO `garage` VALUES (2664, 'stateofwar', 'Cadilac Escelade', '46', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 565, '');
INSERT INTO `garage` VALUES (2413, 'agent1', 'Renault Clio Sport', '49', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 204, '');
INSERT INTO `garage` VALUES (2414, 'alejdin', 'TVR Speed 12', '0', 'England', 'USA', '0-0-0-0-0-0-0-0', '0', 32000, '1136564400');
INSERT INTO `garage` VALUES (2659, 'lexberg', 'Cadilac Escelade', '18', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 1444, '');
INSERT INTO `garage` VALUES (2440, 'agent1', 'TVR Speed 12', '31', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2065, '');
INSERT INTO `garage` VALUES (2531, 'fysical', 'TVR Speed 12', '4', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 16000, '');
INSERT INTO `garage` VALUES (2666, 'stateofwar', 'Bugatti Veyron', '43', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 2791, '');
INSERT INTO `garage` VALUES (2578, 'agent1', 'Mclaren f1', '33', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 2242, '');
INSERT INTO `garage` VALUES (2522, 'ninisenxx', 'Bugatti Veyron', '31', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 3871, '');
INSERT INTO `garage` VALUES (2427, 'master9733', 'Bmw m3', '11', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1818, '');
INSERT INTO `garage` VALUES (2438, 'agent1', 'Renault Clio Sport', '12', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 833, '');
INSERT INTO `garage` VALUES (2443, 'agent1', 'Lamborghini Murcielago', '16', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 3125, '');
INSERT INTO `garage` VALUES (1364, 'leskepimpin', 'TVR Speed 12', '37', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 1730, '');
INSERT INTO `garage` VALUES (2358, 'agent1', 'Bmw m3', '40', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 500, '');
INSERT INTO `garage` VALUES (2210, 'leskepimpin', 'Bmw m3', '38', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 526, '');
INSERT INTO `garage` VALUES (2249, 'liberate', 'Cadilac Escelade', '49', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 531, '');
INSERT INTO `garage` VALUES (2445, 'agent1', 'Audi A3', '47', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 255, '');
INSERT INTO `garage` VALUES (1971, 'davidbarnes67', 'Ferrari Enzo', '21', 'China', 'England', '0-0-0-0-0-0-0-0', '1', 2762, '1135972838');
INSERT INTO `garage` VALUES (1889, 'blade377uk', 'Cadilac Escelade', '13', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 2000, '');
INSERT INTO `garage` VALUES (2100, 'liberate', 'Cadilac Escelade', '32', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 813, '');
INSERT INTO `garage` VALUES (2451, 'agent1', 'Audi A3', '45', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 267, '');
INSERT INTO `garage` VALUES (2148, 'liberate', 'GT 40', '15', 'Canada', 'Canada', '0-0-0-0-0-0-0-0', '0', 2667, '');
INSERT INTO `garage` VALUES (1260, 'angel', 'Bugatti Veyron', '0', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (2456, 'agent1', 'Mclaren f1', '31', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2387, '');
INSERT INTO `garage` VALUES (2455, 'stateofwar', 'TVR Speed 12', '18', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 3556, '');
INSERT INTO `garage` VALUES (2126, 'rafx10', 'Bugatti Veyron', '0', 'France', 'France', '3-3-0-0-3-0-3-0', '0', 43000, '');
INSERT INTO `garage` VALUES (1974, 'davidbarnes67', 'Porsche 911', '44', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 818, '');
INSERT INTO `garage` VALUES (2533, 'agent1', 'Mclaren f1', '36', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 2056, '');
INSERT INTO `garage` VALUES (1878, 'leskepimpin', 'Lamborghini Murcielago', '48', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1042, '');
INSERT INTO `garage` VALUES (2460, 'agent1', 'Porsche 911', '21', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1714, '');
INSERT INTO `garage` VALUES (1297, 'adrenaline', 'Bugatti Veyron', '0', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (1212, 'primalforce', 'Bmw m3', '31', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 645, '1135542403');
INSERT INTO `garage` VALUES (1211, 'primalforce', 'Audi A3', '44', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 273, '1135542047');
INSERT INTO `garage` VALUES (1209, 'primalforce', 'Audi A3', '49', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 245, '1135541042');
INSERT INTO `garage` VALUES (1208, 'primalforce', 'Audi A3', '5', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 2400, '1135540586');
INSERT INTO `garage` VALUES (1204, 'primalforce', 'Audi A3', '39', 'China', 'England', '0-0-0-0-0-0-0-0', '0', 308, '1135540290');
INSERT INTO `garage` VALUES (1203, 'primalforce', 'Bugatti Veyron', '31', 'China', 'England', '0-0-0-0-0-0-0-0', '0', 3871, '1135537445');
INSERT INTO `garage` VALUES (1202, 'primalforce', 'Renault Clio Sport', '29', 'China', 'England', '0-0-0-0-0-0-0-0', '0', 345, '1135540305');
INSERT INTO `garage` VALUES (1201, 'primalforce', 'Bugatti Veyron', '30', 'China', 'England', '0-0-0-0-0-0-0-0', '0', 4000, '1135540323');
INSERT INTO `garage` VALUES (1184, 'liberate', 'Lamborghini Murcielago', '26', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1923, '');
INSERT INTO `garage` VALUES (2452, 'agent1', 'Nissan Skyline', '49', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 653, '');
INSERT INTO `garage` VALUES (1367, 'leskepimpin', 'Nissan Skyline', '33', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 970, '');
INSERT INTO `garage` VALUES (2110, 'liberate', 'Porsche 911', '27', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1333, '');
INSERT INTO `garage` VALUES (2540, 'agent1', 'Renault Clio Sport', '50', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 0, '');
INSERT INTO `garage` VALUES (1199, 'primalforce', 'Nissan Skyline', '5', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 6400, '1135540341');
INSERT INTO `garage` VALUES (1177, 'rafx10', 'Bugatti Veyron', '0', 'Usa', 'Usa', '0-0-0-0-1-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (1176, 'liberate', 'Renault Clio Sport', '20', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 500, '');
INSERT INTO `garage` VALUES (1168, 'rafx10', 'Bugatti Veyron', '0', 'England', 'England', '4-0-4-0-5-0-3-0', '0', 43000, '1135563974');
INSERT INTO `garage` VALUES (2623, 'realdeal', 'Nissan Skyline', '39', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 821, '');
INSERT INTO `garage` VALUES (2561, 'liberate', 'TVR Speed 12', '5', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 12800, '');
INSERT INTO `garage` VALUES (2230, 'leskepimpin', 'Ferrari Enzo', '30', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1933, '');
INSERT INTO `garage` VALUES (1207, 'primalforce', 'Ferrari Enzo', '35', 'Japan', 'England', '0-0-0-0-0-0-0-0', '0', 1657, '1135540349');
INSERT INTO `garage` VALUES (1174, 'liberate', 'Lamborghini Murcielago', '45', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1111, '');
INSERT INTO `garage` VALUES (1161, 'liberate', 'Porsche 911', '20', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 1800, '');
INSERT INTO `garage` VALUES (1158, 'liberate', 'Bugatti Veyron', '50', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 0, '');
INSERT INTO `garage` VALUES (1159, 'liberate', 'Porsche 911', '9', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 4000, '');
INSERT INTO `garage` VALUES (1155, 'liberate', 'Bmw m3', '33', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 606, '');
INSERT INTO `garage` VALUES (1156, 'liberate', 'Mclaren f1', '10', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 7400, '');
INSERT INTO `garage` VALUES (1152, 'liberate', 'GT 40', '47', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 851, '');
INSERT INTO `garage` VALUES (1153, 'liberate', 'Renault Clio Sport', '42', 'France', 'France', '0-0-0-0-0-0-0-0', '0', 238, '');
INSERT INTO `garage` VALUES (2448, 'agent1', 'Porsche 911', '23', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 1565, '');
INSERT INTO `garage` VALUES (2532, 'ninisenxx', 'Bugatti Veyron', '40', 'Usa', 'Usa', '0-0-0-0-0-0-0-0', '0', 3000, '');
INSERT INTO `garage` VALUES (2668, 'stateofwar', 'TVR Speed 12', '3', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 21333, '');
INSERT INTO `garage` VALUES (2552, 'agent1', 'Lamborghini Murcielago', '24', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2083, '');
INSERT INTO `garage` VALUES (2554, 'liberate', 'Ferrari Enzo', '28', 'England', 'England', '0-0-0-0-0-0-0-0', '0', 2071, '');
INSERT INTO `garage` VALUES (2556, 'jebediah', 'Bugatti Veyron', '0', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 43000, '');
INSERT INTO `garage` VALUES (2566, 'agent1', 'Cadilac Escelade', '46', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 565, '');
INSERT INTO `garage` VALUES (2592, 'agent1', 'TVR Speed 12', '24', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 2667, '');
INSERT INTO `garage` VALUES (2593, 'agent1', 'Bmw m3', '16', 'Japan', 'Japan', '0-0-0-0-0-0-0-0', '0', 1250, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `get_away`
-- 

CREATE TABLE `get_away` (
  `id` int(11) NOT NULL auto_increment,
  `leader` char(40) NOT NULL default '',
  `person` char(40) NOT NULL default '',
  `weapon` enum('None','Sig Sauer P229','Jackhammer automatic shotgun','Heckler und Koch MP-5k','Browning M2HB') NOT NULL default 'None',
  `car` int(50) NOT NULL default '0',
  `share` enum('1','2') NOT NULL default '1',
  `person_ready` char(40) NOT NULL default '',
  `invite_get` char(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `get_away`
-- 

INSERT INTO `get_away` VALUES (16, 'angel', '0', 'None', 0, '1', '', 'rafx10');
INSERT INTO `get_away` VALUES (18, 'gunnboy', '0', 'None', 0, '1', '', 'bloody');

-- --------------------------------------------------------

-- 
-- Table structure for table `hitlist`
-- 

CREATE TABLE `hitlist` (
  `id` int(32) NOT NULL auto_increment,
  `paid` varchar(32) NOT NULL default '',
  `target` varchar(32) NOT NULL default '',
  `reason` varchar(120) NOT NULL default '',
  `amount` int(32) NOT NULL default '0',
  `anonymous` enum('1','2') NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `hitlist`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `inbox`
-- 

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL auto_increment,
  `to` varchar(40) NOT NULL default '',
  `from` varchar(40) NOT NULL default '',
  `message` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `read` enum('0','1') NOT NULL default '0',
  `saved` int(2) NOT NULL default '0',
  `event_id` int(11) NOT NULL default '0',
  `witness` enum('0','1') NOT NULL default '0',
  `witness_per` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4774 ;

-- 
-- Dumping data for table `inbox`
-- 

INSERT INTO `inbox` VALUES (4772, 'Tiffer', 'gunnboy', 'just wanna ask you somthing about crew\\''s on the crew\\''s it is boss and rhm you shud have \r\nboss\r\nunderboss\r\nrhm\r\nlhm\r\nrecntour1\r\nrecounter2\r\n\r\nif you can make that will you try cooz i thin evrybody will be happy for that please', '2006-01-06 10:41:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4773, 'gunnboy', 'tiffer', 'it ent that easy lol', '2006-01-06 10:52:00', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4760, 'Alejdin', 'Alejdin', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4761, 'samdagod', 'samdagod', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4762, 'MakeBelieve', 'MakeBelieve', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4766, 'GuNnBoY', 'engel', 'can you oc?', '2006-01-06 10:28:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4755, 'Lexberg', 'Lexberg', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4756, 'FySicaL', 'FySicaL', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4757, 'realdeal', 'realdeal', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4758, 'GuNnBoY', 'GuNnBoY', 'FROM GUNNBOY', '2006-01-06 10:20:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4759, 'master9733', 'master9733', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4767, 'engel', 'gunnboy', 'NO I DID ONE FOR 2 HOURS AGO SOOZ', '2006-01-06 10:29:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4752, 'CpKillR', 'CpKillR', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4753, 'Quiksilva', 'Quiksilva', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4754, 'ninisenxx', 'ninisenxx', 'FROM GUNNBOY', '2006-01-06 10:20:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4770, 'engel', 'gunnboy', 'lol', '2006-01-06 10:30:34', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4771, 'Mafia', 'gunnboy', 'what did you to get 19mill??', '2006-01-06 10:39:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4749, 'MakeBelieve', 'MakeBelieve', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4748, 'samdagod', 'samdagod', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4747, 'Alejdin', 'Alejdin', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4746, 'master9733', 'master9733', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4745, 'GuNnBoY', 'GuNnBoY', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4744, 'realdeal', 'realdeal', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4741, 'ninisenxx', 'ninisenxx', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4742, 'Lexberg', 'Lexberg', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4743, 'FySicaL', 'FySicaL', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4768, 'gunnboy', 'engel', 'damn it lol', '2006-01-06 10:29:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4769, 'Mafia', 'gunnboy', 'okei that borow\\''s i will  stopp...', '2006-01-06 10:30:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4739, 'CpKillR', 'CpKillR', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4740, 'Quiksilva', 'Quiksilva', 'I HAVE TO WAIT 6 HOURS WILL BUY HUR TOMOROW AND WELCOME BACK:d:d', '2006-01-06 10:19:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4736, 'MakeBelieve', 'MakeBelieve', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4735, 'samdagod', 'samdagod', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4733, 'master9733', 'master9733', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4734, 'Alejdin', 'Alejdin', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4732, 'GuNnBoY', 'GuNnBoY', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4731, 'realdeal', 'realdeal', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4716, '3mansgirl', 'gunnboy', 'yeah ofcourse;)', '2006-01-06 10:16:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4717, 'gunnboy', 'engel', 'thanx man. hows the crew... of didnt they kill anyone?', '2006-01-06 10:16:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4718, 'gunnboy', 'mafia', 'lol fine by me m8 ..\r\n\r\n\r\nkeep up the work lol ', '2006-01-06 10:16:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4714, 'gunnboy', '3mansgirl', 'when u r done with 6 hours will u still do an oc with me plss', '2006-01-06 10:16:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4711, 'gunnboy', 'engel', 'damn right!!', '2006-01-06 10:15:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4723, 'gunnboy', '3mansgirl', 'thanks i nee two people one will be u the other idk who it will be', '2006-01-06 10:17:47', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4730, 'FySicaL', 'FySicaL', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4709, 'gunnboy', 'mafia', 'Yeah ... ill leave u as RHM ... But when she get bk to criminal .. ill let her take RHM then u can sort the members out like u been doing allready .\r\n\r\n\r\n\r\nThat ok ?', '2006-01-06 10:14:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4722, 'gunnboy', 'engel', 'yeha i heard adam was texting me what was going on... i hear my dad got in it too.', '2006-01-06 10:17:32', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4727, 'Quiksilva', 'Quiksilva', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4728, 'ninisenxx', 'ninisenxx', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4700, 'gunnboy', 'mafia', 'lol you lil shit lol ... get ranking up all the members dude .. we dont need any more members we can fuck ppl up as it is lol\r\n', '2006-01-06 10:08:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4729, 'Lexberg', 'Lexberg', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4686, 'gunnboy', 'mafia', 'lol keep playing dude ... if u wannabe a crew owner ... buy 1 n ill protect u .. can be a blood crew', '2006-01-06 09:52:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4688, 'gunnboy', 'mafia', 'its up 2 u m8 i cant stop ya ... but we need ya 2 help build up players n shit', '2006-01-06 09:56:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4694, 'gunnboy', '3mansgirl', 'will u bein my oc', '2006-01-06 10:02:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4683, 'gunnboy', '3mansgirl', 'lol any time so what u gunna do this week end', '2006-01-06 09:49:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4684, 'gunnboy', 'mafia', 'tell me why buddie ...\r\n\r\n\r\nyou cant quit man we need ya \r\n\r\nCrimes 310 \r\nGta\\''s 129 \r\nOrganised crimes 0 \r\nKills 3 \r\nJail Busts 0 \r\nReferrals 1 \r\n', '2006-01-06 09:49:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4680, 'KeyLowz', 'KeyLowz', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4681, 'jebediah', 'jebediah', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4682, 'Liberate', 'Liberate', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4678, 'Tempestuous', 'Tempestuous', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4679, 'MakeBelieve', 'MakeBelieve', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4676, 'GuNnBoY', 'GuNnBoY', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '1', 1, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4677, 'xander', 'xander', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4629, 'gunnboy', 'fysical', 'okey good hes in..', '2006-01-06 08:56:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4630, 'FySicaL', 'gunnboy', 'he rank\\''d:P:P', '2006-01-06 08:57:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4644, 'gunnboy', 'mafia', 'Yup...', '2006-01-06 09:23:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4652, '3mansgirl', 'gunnboy', 'chillin heng out whit m8 and plaing the game....', '2006-01-06 09:39:47', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4650, '3mansgirl', 'gunnboy', 'ok....what you been up to???', '2006-01-06 09:36:29', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4651, 'gunnboy', '3mansgirl', 'notalot just chillin at home u ', '2006-01-06 09:39:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4635, 'lexberg', 'gunnboy', 'np;) and if you need help just msg me or mafia...and fysical', '2006-01-06 09:02:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4612, 'gunnboy', 'fysical', 'i havent been at the computer m8! hehe take it easy.. ofcourse im not mad at you you are my friend.. i have bought an hoe bussiness this week.. \r\nthanks', '2006-01-06 08:49:54', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4636, 'gunnboy', 'mafia', 'england is mine and mine only\r\nsoz m8\r\n', '2006-01-06 09:05:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4647, '3mansgirl', 'gunnboy', 'are you still maried to 3man???', '2006-01-06 09:33:54', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4642, 'gunnboy', 'mafia', 'lol means i beat u at an arm wrestle', '2006-01-06 09:14:30', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4609, 'gunnboy', 'mafia', 'yea m8', '2006-01-06 08:47:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4691, 'gunnboy', 'mafia', 'ok m8 nice meeting u ... send ya stuff over ill hold it case u deside 2 change ya mind', '2006-01-06 10:00:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4648, 'gunnboy', '3mansgirl', 'yea i am', '2006-01-06 09:36:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4597, 'GuNnBoY', 'GuNnBoY', 'FROM GUNNBOY', '2006-01-06 08:18:12', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4598, 'master9733', 'master9733', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4599, 'Alejdin', 'Alejdin', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4600, 'MakeBelieve', 'MakeBelieve', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4593, 'Quiksilva', 'Quiksilva', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4614, 'gunnboy', 'mafia', 'cant move yet 56mis left\r\n', '2006-01-06 08:50:36', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4596, 'realdeal', 'realdeal', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4592, 'CpKillR', 'CpKillR', 'FROM GUNNBOY', '2006-01-06 08:18:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4673, '3mansgirl', 'gunnboy', 'THX:)', '2006-01-06 09:47:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4674, 'agent1', 'agent1', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4590, 'MakeBelieve', 'MakeBelieve', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4675, 'TrickyMicky', 'TrickyMicky', 'You witnessed mafia kill Tempestuous with 7000 bullets!', '2006-01-06 09:48:33', '0', 0, 0, '1', 'Tempestuous');
INSERT INTO `inbox` VALUES (4588, 'master9733', 'master9733', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4589, 'Alejdin', 'Alejdin', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4625, 'gunnboy', 'gunnboy', 'Congratulations your oc was a success the money has already been shared out. into four sums of 773469', '2006-01-06 08:56:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4586, 'realdeal', 'realdeal', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4583, 'Quiksilva', 'Quiksilva', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4542, 'gunnboy', 'mafia', 'COS ITS ADMINS', '2006-01-06 05:15:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4539, 'nothingman', 'nothingman', 'You have been promoted to RHM in your crew!', '2006-01-06 05:11:36', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4575, 'gunnboy', 'fysical', '8 hours left tilli can buy beer again', '2006-01-06 08:06:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4570, 'MakeBelieve', 'MakeBelieve', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4537, 'MakeBelieve', 'MakeBelieve', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4534, 'GuNnBoY', 'GuNnBoY', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4535, 'master9733', 'master9733', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4533, 'realdeal', 'realdeal', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4554, 'primalforce', 'primalforce', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4555, 'King', 'King', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4530, 'Quiksilva', 'Quiksilva', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4529, 'CpKillR', 'CpKillR', 'THE FIRM HAS 11 Bussineses OwneRS MORE THEN OSS IF WE BUY WE WILL BE THE LEADER COME ON PEAPLE', '2006-01-06 05:10:26', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4667, '3mansgirl', 'gunnboy', 'LOOL I\\''M  HITMAN OWNS THE RACE TRACK ON FRANCE AND THE SLOTS ON JAPAN AND I AME RHM ON MY CREW', '2006-01-06 09:46:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4562, 'CpKillR', 'CpKillR', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4668, 'gunnboy', 'mafia', 'why?', '2006-01-06 09:46:47', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4669, 'gunnboy', 'tiffer', 'Busy ATM adding new things', '2006-01-06 09:46:52', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4525, 'Enthrone', 'gunnboy', 'DON\\''T ACCEPT THE FIRM ACCEPT US IT\\''S THE BEST TRUST ME M8', '2006-01-06 05:02:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4662, 'MakeBelieve', 'MakeBelieve', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4693, 'samdagod', 'samdagod', '\n  <div align=center>You have been invited to join 3mansgirl s Organised crime as the Weapons Master,<br> please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=we><input type=hidden name=oc_id value=38>\n', '2006-01-06 10:02:29', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4521, 'jebediah', 'nothingman', 'send back my BF or your crew will be wiped out and i take it, your choice', '2006-01-06 04:55:58', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4666, 'gunnboy', '3mansgirl', 'cool me to i am rankin fast lol and i am yellin at peopel on msn ', '2006-01-06 09:45:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4518, 'GuNnBoY', 'mafia', 'Casino settings updated \r\n\r\n\r\nGood luck lol u got another propertie ..again ..\r\n\r\nDONT SELL OR GIVE IT TO ANYONE WITHOUT ASKING ME', '2006-01-06 04:54:05', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4515, 'blade377uk', 'blade377uk', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4516, 'HideousBeast', 'HideousBeast', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4511, 'realdeal', 'realdeal', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4512, 'nnacarate22', 'nnacarate22', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4513, 'Rambo', 'Rambo', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4725, '3mansgirl', 'gunnboy', 'lool', '2006-01-06 10:18:24', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4726, 'CpKillR', 'CpKillR', 'ALL MEMBERS That Can Enter the Bar .. Please Buy  Engel A Cold Beer To HELP Her Rank .. Thanks Mafia.....', '2006-01-06 10:18:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4696, '3mansgirl', 'gunnboy', 'no cant have to wait 6 hours', '2006-01-06 10:03:24', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4661, 'Alejdin', 'Alejdin', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4508, 'Altman', 'Altman', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4509, 'SuperBeast', 'SuperBeast', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '0', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4485, 'gunnboy', 'mafia', 'send me it .. in kill part', '2006-01-06 04:25:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4502, 'gunnboy', 'mafia', 'go on then', '2006-01-06 04:48:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4507, 'NothingMan', 'NothingMan', 'You witnessed mafia kill SuperBeast with 1000 bullets!', '2006-01-06 04:51:38', '1', 0, 0, '1', 'SuperBeast');
INSERT INTO `inbox` VALUES (4488, 'gunnboy', 'mafia', 'send me the serch file ... cost 10k ... send it hurry so i can shoot', '2006-01-06 04:27:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4503, 'gunnboy', 'alejdin', 'lol.. i played 5k about 20 times on yours.. i lost some money but i won em back.. i think i just lost 5k:( ill make the max bet 500k', '2006-01-06 04:48:43', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4497, 'gunnboy', 'mafia', 'not yet wait', '2006-01-06 04:36:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4568, 'master9733', 'master9733', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4482, 'GuNnBoY', 'mafia', 'tempestuous send me his serching rcord hurry\r\nthe found bit i need', '2006-01-06 04:24:00', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4569, 'Alejdin', 'Alejdin', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4496, 'gunnboy', 'alejdin', 'ok, play 5 k on mine and ill play 5k on yours', '2006-01-06 04:34:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4492, 'gunnboy', 'mafia', 'click found ... and it will put it in the box for u ', '2006-01-06 04:29:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4479, 'MakeBelieve', 'MakeBelieve', 'COME ON LETS RANK REMEBER HOLD YOU''R FRIEND CLOSE AND YOU''R ENEMIES CLOSER....MAFIA&GUNNBOY', '2006-01-06 04:21:58', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4472, 'Quiksilva', 'Quiksilva', 'COME ON LETS RANK REMEBER HOLD YOU''R FRIEND CLOSE AND YOU''R ENEMIES CLOSER....MAFIA&GUNNBOY', '2006-01-06 04:21:58', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4422, 'LTFC', 'LTFC', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4567, 'GuNnBoY', 'GuNnBoY', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4420, 'toyboi', 'toyboi', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4419, 'spider', 'spider', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4418, 'Renegade', 'Renegade', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4551, 'primalforce', 'primalforce', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4416, 'GangsterX', 'GangsterX', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4415, 'CpKillR', 'CpKillR', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4414, 'blood', 'blood', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4243, 'agent1', 'rafx10', 'not right now but Iam looking for some one to in time', '2006-01-06 06:45:54', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4245, 'jebediah', 'rafx10', 'how much\r\n', '2006-01-06 06:47:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4230, 'jebediah', 'agent1', 'bet at my r.p.s in japan? are u gona sell the slots to mafia for 5mil them and the ones in france all for 5mil?', '2006-01-06 05:16:14', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4057, 'primalforce', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4477, 'master9733', 'master9733', 'COME ON LETS RANK REMEBER HOLD YOU''R FRIEND CLOSE AND YOU''R ENEMIES CLOSER....MAFIA&GUNNBOY', '2006-01-06 04:21:58', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4355, 'MakeBelieve', 'MakeBelieve', 'EVRY BODY ON THE CREW HUNT DOWN ADRENALIN AND R.I.P FOR ANGEL&AGENT1', '2006-01-06 02:43:44', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4056, 'leskepimpin', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4054, 'Addict', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4053, 'HideousBeast', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4051, 'Multigood', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4263, 'toyboi', 'toyboi', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (4049, 'imback', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4490, 'gunnboy', 'mafia', 'Mafia', '2006-01-06 04:29:12', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4476, 'GuNnBoY', 'GuNnBoY', 'COME ON LETS RANK REMEBER HOLD YOU''R FRIEND CLOSE AND YOU''R ENEMIES CLOSER....MAFIA&GUNNBOY', '2006-01-06 04:21:58', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4341, 'gunnboy', 'gunnboy', 'You have been promoted to RHM in your crew!', '2006-01-06 02:37:34', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4671, 'gunnboy', '3mansgirl', 'good job hun lol ', '2006-01-06 09:47:29', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4698, 'gunnboy', 'gunnboy', 'You <b>Won</b> in an arm wrestle!', '2006-01-06 10:06:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4659, 'GuNnBoY', 'GuNnBoY', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4046, 'Link', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4045, 'KeyLowz', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4471, 'CpKillR', 'CpKillR', 'COME ON LETS RANK REMEBER HOLD YOU''R FRIEND CLOSE AND YOU''R ENEMIES CLOSER....MAFIA&GUNNBOY', '2006-01-06 04:21:58', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4043, 'solomona', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4042, 'sirice', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4041, 'FrAnZfErDiNaNd', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4040, 'Flixion', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4084, 'gunnboy', 'fysical', 'Do you have msn? its good to communicate through the gang i think :)?', '2006-01-05 07:01:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4038, 'xander', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4037, 'LadyLunos', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4036, 'Donketz', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4035, 'thunderfalcon', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4034, '143143143', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4033, 'silverfox', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4032, 'fuck', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4031, 'Toaster', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4030, 'demonfromhell', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4029, 'danfordy377uk', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4028, 'davidbarnes67', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4115, 'gunnboy', 'fysical', 'Who did u kill?? :)\r\n', '2006-01-05 07:51:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4026, 'master9733', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4375, 'master9733', 'master9733', 'EVRY BODY THAT HAVE OVER 2MILL HAVE TO BUY Hoe training facility....GuNnBoY', '2006-01-06 03:01:03', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4024, 'Ultrabeat', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4023, 'Ziel', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4022, 'sierof', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4021, 'danfordy733uk', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4020, 'baslan', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4019, 'jujitsu', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4018, 'GuNnBoY', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4017, 'Jcon', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4016, 'GangsterX', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4015, 'Twinkle', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4014, 'RIPeR', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4013, 'ataya', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4012, 'LilOB', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4011, 'sowa', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4010, 'pukowietz', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4009, 'football', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4008, 'looney', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4007, 'Rambo', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4424, 'tempestuous', 'mafia', 'gary says:\r\nYou shot AdrenalinE and sent him 6ft under\r\n\r\nyour next unless u give me usa properties back now ..', '2006-01-06 03:42:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4183, '3mansgirl', 'jebediah', 'probably about 10milbut i really need money so ill sell one for however much you have, they dont take very long to make you money either so they are a good investment', '2006-01-06 02:45:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4413, 'Quiksilva', 'Quiksilva', 'You witnessed rafx10 kill AdrenalinE with 5000 bullets!', '2006-01-06 03:34:36', '0', 0, 0, '1', 'AdrenalinE');
INSERT INTO `inbox` VALUES (4005, 'hell', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4004, 'loosecannon', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4003, 'TrickyMicky', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4002, 'Kanti', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4001, 'ScarFace', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4000, '3man', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3999, 'tomdakilla', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4178, 'MakeBelieve', 'MakeBelieve', 'everyone with 1 mill+ please buy a hoe business weekly please ... or be kicked from the crew .. Thanks Mafia', '2006-01-06 02:35:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3997, 'Revolution', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3996, 'alpacino', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4100, 'ninisenxx', 'gunnboy', 'are you female or male???', '2006-01-05 07:33:47', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4111, 'gunnboy', 'fysical', 'dont know maybe :)', '2006-01-05 07:44:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4407, 'gunnboy', 'alejdin', 'sorry.. im not criminal yet cant buy anything in the bar.. and i have promises mafia one.. erm.. 2 :D lol', '2006-01-06 03:27:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3994, 'MrMcBadman', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3993, 'lamb', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4109, 'gunnboy', 'fysical', 'but i dont have anything there? :/', '2006-01-05 07:43:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4242, 'jebediah', 'agent1', '5mil for both or 5mil for one? cos mafia will buy both for 5 is dat a deal with him?', '2006-01-06 06:44:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4222, 'angel', 'agent1', 'could i have a cold beer? or would u do me a fav a bet r.p.s in japan', '2006-01-06 04:22:41', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3974, 'primalforce', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4411, 'gunnboy', 'mafia', 'no   u can stay rhm .. untill kerri is bk ', '2006-01-06 03:32:30', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3973, 'leskepimpin', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4262, 'spider', 'spider', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (3971, 'Addict', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4104, 'gunnboy', 'fysical', 'oh okey thanks!', '2006-01-05 07:36:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3970, 'HideousBeast', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3968, 'Multigood', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4660, 'master9733', 'master9733', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4261, 'Renegade', 'Renegade', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (3966, 'imback', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4403, 'gunnboy', 'alejdin', 'i know that i can use it.. i asked YOU if i can use it, lol =)', '2006-01-06 03:18:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4556, 'InsanePhatSouljah', 'InsanePhatSouljah', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4352, 'GuNnBoY', 'GuNnBoY', 'EVRY BODY ON THE CREW HUNT DOWN ADRENALIN AND R.I.P FOR ANGEL&AGENT1', '2006-01-06 02:43:44', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3963, 'Link', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3962, 'KeyLowz', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4265, 'jebediah', 'tempestuous', 'how much did you sell your slots for', '2006-01-06 08:57:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3960, 'solomona', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3959, 'sirice', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3958, 'FrAnZfErDiNaNd', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3957, 'Flixion', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4083, 'GuNnBoY', 'fysical', 'I mean if u have 50 000 why not buy it yourself? why send me to buy it? ;D', '2006-01-05 06:57:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3955, 'xander', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3954, 'LadyLunos', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3953, 'Donketz', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3952, 'thunderfalcon', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3950, 'silverfox', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3951, '143143143', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3949, 'fuck', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3948, 'Toaster', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4457, 'agent1', 'rafx10', 'danm give me a brack Iam doing kills now to help your net and mine so hold on \r\n', '2006-01-06 04:01:20', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4383, 'CpKillR', 'CpKillR', 'i''m starting a oc need 3 peapole message gunnboy', '2006-01-06 03:13:28', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3945, 'davidbarnes67', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3946, 'danfordy377uk', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3947, 'demonfromhell', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4439, 'Tempestuous', 'gunnboy', 'but you are dead anyway cozz i gonna shot you soon', '2006-01-06 03:55:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3943, 'master9733', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3940, 'Ziel', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3941, 'Ultrabeat', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4364, 'gunnboy', 'fysical', 'Oh nice going man :)', '2006-01-06 02:51:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3938, 'danfordy733uk', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3939, 'sierof', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3937, 'baslan', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3936, 'jujitsu', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3933, 'GangsterX', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3934, 'Jcon', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3935, 'GuNnBoY', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3928, 'sowa', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3929, 'LilOB', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3930, 'ataya', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3931, 'RIPeR', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3932, 'Twinkle', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3927, 'pukowietz', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3926, 'football', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3925, 'looney', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3921, 'loosecannon', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3922, 'hell', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4607, 'ninisenxx', 'gunnboy', 'do you want yyes or no???', '2006-01-06 08:46:12', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3924, 'Rambo', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3920, 'TrickyMicky', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3919, 'Kanti', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3916, 'tomdakilla', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3917, '3man', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3918, 'ScarFace', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4437, 'Tempestuous', 'gunnboy', 'i din\\''t mean to shot you what is you\\''r healt now???', '2006-01-06 03:54:21', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3914, 'Revolution', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3913, 'alpacino', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3912, 'agent1', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3911, 'MrMcBadman', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3906, 'spider', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3908, 'Advocate', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3909, 'LTFC', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3910, 'lamb', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3905, 'toyboi', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4234, 'Liberate', 'rafx10', 'hey I got 6000 bullets from you just so you know ', '2006-01-06 06:30:43', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4464, 'tempestuous', 'gunnboy', 'IF YOU START AGEIN I CAN GIVE YOU 15 MILL FOR STARTING AGEN....CAN I HAVE IT???', '2006-01-06 04:06:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3991, 'Advocate', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3904, 'Renegade', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3886, 'leskepimpin', 'gunnboy', 'just aksd', '2006-01-05 02:29:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4226, 'leskepimpin', 'agent1', 'wanna sell bullet factory for 1mil? or 2mil?', '2006-01-06 04:25:37', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4577, 'Rafx10', 'gunnboy', 'wanna join my oc in usa??', '2006-01-06 08:09:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4121, 'FySicaL', 'gunnboy', 'can you do me a fever m8???\r\n\r\ni give you my password and you can rank for me when i\\''m gone cozz i\\''m noton very musch and i have to be hitman before to day or i get killd can you do that to me????\r\n\r\nmy passowrd is 4766638\r\n\r\ni hope i can trust you', '2006-01-05 08:32:41', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3992, 'LTFC', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4102, 'gunnboy', 'fysical', 'Im male.. and what do i use the beer for?', '2006-01-05 07:34:50', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3879, 'GuNnBoY', 'GuNnBoY', 'ALL MEMBERS MUST BUY ATLEAST Weed plantation PERFER TO BUY Hoe BUSSINESS SO please start buying when we make so much we can split the cash we make perday so buy buy buy for the crew', '2006-01-05 01:22:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3880, 'master9733', 'master9733', 'ALL MEMBERS MUST BUY ATLEAST Weed plantation PERFER TO BUY Hoe BUSSINESS SO please start buying when we make so much we can split the cash we make perday so buy buy buy for the crew', '2006-01-05 01:22:33', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3989, 'spider', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4465, 'gunnboy', 'mafia', 'dont worry just hold it lol ... keep ya cash .. lol i aint that poor just yet lol', '2006-01-06 04:07:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3874, 'leskepimpin', 'leskepimpin', '\n  <div align=center>You have been invited to join mafia s Organised crime as the Weapons Master,<br> please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=we><input type=hidden name=oc_id value=35>\n', '2006-01-05 01:19:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4374, 'GuNnBoY', 'GuNnBoY', 'EVRY BODY THAT HAVE OVER 2MILL HAVE TO BUY Hoe training facility....GuNnBoY', '2006-01-06 03:01:03', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3900, 'CpKillR', 'Mass Message', 'Please All Vote : http://www.gamesites200.com/gaming/vote.php?id=5026', '2006-01-05 04:44:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4219, '3mansgirl', 'agent1', 'do u want to arm wreslte aswel accept my challenge', '2006-01-06 04:19:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3983, 'CpKillR', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4468, 'Tempestuous', 'gunnboy', 'can i get the slot???', '2006-01-06 04:16:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4463, 'gunnboy', 'tempestuous', 'I want to see you work for it', '2006-01-06 04:05:45', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4127, 'gunnboy', 'leskepimpin', 'are you a male or chick?', '2006-01-05 09:24:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3854, 'GuNnBoY', 'GuNnBoY', 'Can Everyone In the Crew Help Buy Hoe training facility''s  Please.. thanks', '2006-01-05 02:46:00', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4099, 'Lexberg', 'gunnboy', 'are you male or female???', '2006-01-05 07:33:24', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4119, 'gunnboy', 'fysical', 'Yeah it is not nice to talk about others parents at all..\r\nbut man im going to eat and stuff now but ill talk to you later man..\r\n', '2006-01-05 07:59:35', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4216, '3mansgirl', 'agent1', 'will u go tojapan and bet on my r.p.s?\r\n\r\n', '2006-01-06 04:14:05', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4235, 'jebediah', 'agent1', 'wanna sell me the slots in france? 1.5mil i will give u??? deal?', '2006-01-06 06:36:30', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4227, '3mansgirl', 'agent1', 'my m8s 3man lives round corner from me u got msn? wots ya add?', '2006-01-06 04:35:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3988, 'toyboi', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4181, '3mansgirl', 'jebediah', 'want to buy a slots? you get money form them when people bet on them they lose there money and it goes to you', '2006-01-06 02:39:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4461, 'tempestuous', 'gunnboy', 'if you don\\''t care can you give me the slot on usa???', '2006-01-06 04:02:49', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3890, 'master9733', 'master9733', 'You <b>Lost</b> in an arm wrestle!', '2006-01-05 03:58:36', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3826, 'gunnboy', '3mansgirl', 'u got msn ', '2006-01-04 10:48:08', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4557, 'primalforce', 'primalforce', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4369, 'CpKillR', 'CpKillR', 'EVRY BODY THAT HAVE OVER 2MILL HAVE TO BUY Hoe training facility....GuNnBoY', '2006-01-06 03:01:03', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3828, 'gunnboy', '3mansgirl', 'ok byebye talk to me latere', '2006-01-04 10:48:54', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4176, 'master9733', 'master9733', 'everyone with 1 mill+ please buy a hoe business weekly please ... or be kicked from the crew .. Thanks Mafia', '2006-01-06 02:35:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3869, 'leskepimpin', 'leskepimpin', 'Quality That cars blinging! We gotta take it out for a ride sometime!..<br>Anyways, im a man of my word heres your new stuff: <br>1000 Bullets<br>£200,000', '2006-01-05 04:30:14', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3817, 'gunnboy', '3mansgirl', 'lol i see well i dont know if i can get on of my friends to join but i will see ok ', '2006-01-04 10:39:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3815, 'gunnboy', 'tiffer', 'got other mods one sat nxt to me lol', '2006-01-04 10:36:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4249, 'jebediah', 'rafx10', 'I can right now I just got 10000 bullets from him so he has my cash', '2006-01-06 06:50:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4165, 'agent1', 'agent1', 'Congratulations your oc was a success the money has already been shared out. into four sums of 854161', '2006-01-06 02:25:36', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3822, 'gunnboy', '3mansgirl', '16-17', '2006-01-04 10:44:03', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4258, 'GangsterX', 'GangsterX', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (4587, 'GuNnBoY', 'GuNnBoY', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4211, 'jebediah', 'agent1', 'will u buy me a cold beer?', '2006-01-06 03:40:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4455, 'tempestuous', 'gunnboy', 'why did you sayd that for\\''????', '2006-01-06 03:59:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4458, 'agent1', 'rafx10', 'danm give me a brack Iam doing kills now to help your net and mine so hold on \r\n', '2006-01-06 04:01:33', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4358, 'FySicaL', 'gunnboy', 'did you get my mass messega i am RHM on the crew', '2006-01-06 02:48:06', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3811, 'primalforce', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4212, '3mansgirl', 'agent1', 'will u buy me a cold beer?', '2006-01-06 03:40:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3808, 'chin', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4257, 'CpKillR', 'CpKillR', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (4240, 'agent1', 'jebediah', 'no fuck off you cheapo  5 mil minimum cant you read?', '2006-01-06 06:43:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3810, 'leskepimpin', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4126, 'gunnboy', 'fysical', 'I havent been at the computer. Ofcourse you can trust me i have been in for a little while couldent get you to moore than 51% or something.. but i did some for you.. what u mean ull get killed.. i will help you! :) not that i am mutch of a help but ;D', '2006-01-05 09:21:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3806, 'HideousBeast', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3807, 'Addict', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4231, 'jebediah', 'agent1', 'ill buy ure slots in france for 1mil', '2006-01-06 05:23:45', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3804, 'Multigood', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4089, 'gunnboy', 'fysical', 'how do i do it? :)', '2006-01-05 07:15:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3987, 'Renegade', 'Mass Message', 'Want A New Bloodtown Mafia Email Account ??????@bloodtownmafia.com Now Selling Accounts ( 30Meg - 9Months - Only £4 Gets Yours Now Just Message Tiffer In Game For More Info On This)', '2006-01-05 04:53:09', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4470, 'gunnboy', 'alejdin', 'i own japan RPS lol u bet at mine for 250k one time and ill bet on yours for 250k one time:D', '2006-01-06 04:21:52', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4402, 'GuNnBoY', 'mafia', 'SuperBeast\r\n\r\nkill him aswell ... not too many bullets hes a scum ', '2006-01-06 03:18:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3802, 'imback', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4450, 'gunnboy', 'rafx10', 'who you going to kill\r\n', '2006-01-06 03:57:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4454, 'GuNnBoY', 'mafia', 'Casino settings updated \r\n\r\nKeep hold of it .. dont sell it and dont give it bk ...\r\n\r\n\r\nask me for permission for anything ,...\r\n\r\nJapan slots is owned by  u', '2006-01-06 03:59:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4334, 'master9733', 'master9733', 'ALL MEMBERS STOCK UP ... LOCK N LOAD .... ADRENALIN MUST DROP', '2006-01-06 02:34:51', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4436, 'gunnboy', 'mafia', 'lol in 58 mins ,,, hes dead by me lol', '2006-01-06 03:54:08', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4336, 'MakeBelieve', 'MakeBelieve', 'ALL MEMBERS STOCK UP ... LOCK N LOAD .... ADRENALIN MUST DROP', '2006-01-06 02:34:51', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4327, 'gunnboy', 'gunnboy', 'fysical bought you a Cold beer.', '2006-01-06 02:34:44', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4328, 'CpKillR', 'CpKillR', 'ALL MEMBERS STOCK UP ... LOCK N LOAD .... ADRENALIN MUST DROP', '2006-01-06 02:34:51', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4329, 'Quiksilva', 'Quiksilva', 'ALL MEMBERS STOCK UP ... LOCK N LOAD .... ADRENALIN MUST DROP', '2006-01-06 02:34:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3798, 'KeyLowz', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3799, 'Link', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3795, 'sirice', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3796, 'solomona', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4094, 'gunnboy', 'fysical', 'yes ofcouse', '2006-01-05 07:23:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3793, 'Flixion', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3794, 'FrAnZfErDiNaNd', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3791, 'xander', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4082, 'gunnboy', 'fysical', 'why dont you buy it yourself then? :/', '2006-01-05 06:57:21', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3789, 'Donketz', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3790, 'LadyLunos', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3788, 'thunderfalcon', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3787, '143143143', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3785, 'fuck', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3786, 'silverfox', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3783, 'demonfromhell', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3784, 'Toaster', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4092, 'gunnboy', 'fysical', 'i need to be ranked as a criminal and im not :/', '2006-01-05 07:19:19', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3781, 'davidbarnes67', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3782, 'danfordy377uk', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4606, 'ninisenxx', 'gunnboy', 'want to join my oc need one more it\\''s one usa???', '2006-01-06 08:44:15', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4256, 'blood', 'blood', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '0', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (4139, '3mansgirl', 'jebediah', 'would you like to buy a slots?', '2006-01-06 01:55:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4209, 'jebediah', 'liberate', 'yea im sure tiffer was giving him shit :p', '2006-01-06 03:23:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3776, 'Ziel', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3777, 'Ultrabeat', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3774, 'danfordy733uk', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3775, 'sierof', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3772, 'jujitsu', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3773, 'baslan', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3769, 'Twinkle', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3770, 'Jcon', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3771, 'GuNnBoY', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3767, 'ataya', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3768, 'RIPeR', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3765, 'sowa', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3766, 'LilOB', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3763, 'football', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3764, 'pukowietz', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4366, 'gunnboy', 'mafia', 'lol yeah send em out bro ... perferbly need ya on msn ', '2006-01-06 02:58:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4581, 'Rafx10', 'gunnboy', 'wanna join my oc yes or no???', '2006-01-06 08:16:28', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4582, 'CpKillR', 'CpKillR', 'TO ALL MEBER THAT ARE LOWER WANNABE MESSAGE ME I WILL HELP YOU RANK WHIT OC MESSAGE ME....AND DON''T DELETE THIS MESSAGE', '2006-01-06 08:17:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3761, 'Rambo', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3762, 'looney', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3758, 'loosecannon', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3759, 'hell', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3756, 'Kanti', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3757, 'TrickyMicky', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3754, '3man', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3755, 'ScarFace', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3753, 'tomdakilla', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3752, 'a3man', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4170, 'Quiksilva', 'Quiksilva', 'everyone with 1 mill+ please buy a hoe business weekly please ... or be kicked from the crew .. Thanks Mafia', '2006-01-06 02:35:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4133, 'FySicaL', 'ninisenxx', 'i love you baby(L)', '2006-01-06 12:04:20', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3749, 'alpacino', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3750, 'Revolution', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3746, 'lamb', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3747, 'MrMcBadman', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3745, 'LTFC', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3744, 'Advocate', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3741, 'toyboi', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3742, 'spider', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3724, 'gunnboy', '3mansgirl', 'sorry i am married to 3man i am sorry', '2006-01-04 09:31:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3845, 'GuNnBoY', 'GuNnBoY', 'Can Everyone Move ToEngland And Buy Mafia A Cold Beer Please .. If your Times Not Ready Buy Me A Cold Beer When Your ready to Order .. Thanks Mafia:.', '2006-01-05 02:25:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3731, 'gunnboy', '3mansgirl', 'lol he is my baby lol well what up wit u ', '2006-01-04 10:30:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4658, 'realdeal', 'realdeal', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3733, 'gunnboy', 'tiffer', 'in What ?', '2006-01-04 10:31:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3734, 'leskepimpin', 'gunnboy', 'are you a female or male???', '2006-01-04 10:32:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3875, 'master9733', 'mafia', 'Buy More Hoe Bussiness Now', '2006-01-05 01:20:48', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4460, 'gunnboy', 'tempestuous', 'Because i dont really care if you kill me, im waisting your time and money on it', '2006-01-06 04:02:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4400, 'gunnboy', 'alejdin', 'can i use ANY cars? only got a audi', '2006-01-06 03:17:29', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4117, 'gunnboy', 'fysical', 'what an stupid idiot :(\r\nim sorry m8!\r\nwhat was his name?', '2006-01-05 07:56:30', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3712, 'Advocate', 'Advocate', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3713, 'lamb', 'lamb', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3714, 'agent1', 'agent1', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '1', 1, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3715, 'bloody', 'bloody', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3716, '3mansgirl', '3mansgirl', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '1', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3707, 'Renegade', 'Renegade', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3708, 'spider', 'spider', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3709, 'toyboi', 'toyboi', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (4563, 'Quiksilva', 'Quiksilva', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3711, 'LTFC', 'LTFC', 'You witnessed gunnboy kill bloody with 900 bullets!', '2006-01-04 07:02:39', '0', 0, 0, '1', 'bloody');
INSERT INTO `inbox` VALUES (3700, 'gunnboy', 'bloody', 'fuck your mum', '2006-01-04 05:50:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3701, 'bloody', 'gunnboy', 'now i\\''m gonna fuck you\\''r mamy tonight and giv hur a smack:P', '2006-01-04 05:50:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3702, 'gunnboy', 'bloody', 'go and fuck your own mum w', '2006-01-04 05:53:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3703, 'bloody', 'gunnboy', 'ow no i want to fuck you\\''r mam', '2006-01-04 05:53:49', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3704, 'bloody', 'gunnboy', 'so you stop sending me messeges cooz you are dead in 13 minuts', '2006-01-04 06:01:44', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3705, 'GuNnBoY', 'rafx10', 'you want back it cool good luck', '2006-01-04 06:11:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4566, 'realdeal', 'realdeal', 'it'' good evrybody we make most money off ale the crew''s;) welldone....gunnboy', '2006-01-06 08:00:53', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4453, 'gunnboy', 'tempestuous', 'Ok have fun:)', '2006-01-06 03:59:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3665, 'LTFC', 'LTFC', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '0', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3666, 'Advocate', 'Advocate', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '0', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3667, 'lamb', 'lamb', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '0', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3668, 'MrMcBadman', 'MrMcBadman', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '1', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3669, 'bloody', 'bloody', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '1', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3676, 'bloody', 'gunnboy', 'do you have money for a do getaway whit me???', '2006-01-04 05:09:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3686, 'gunnboy', 'gunnboy', 'You <b>Won</b> in an arm wrestle!', '2006-01-04 05:39:39', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3678, 'bloody', 'gunnboy', 'i dont know you have to buy a wepon', '2006-01-04 05:10:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3679, 'bloody', 'gunnboy', 'i send you a invite', '2006-01-04 05:11:05', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3680, 'bloody', 'bloody', '<form name=invite_to_get_away method=post action=?accept=oc&oc_id=18>\n  <div align=center>You have been invited to join gunnboy s GetAway, please\n    choose one of the following options:<br>\n    <input name=Decline type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_get_away type=submit id=Accept value=Accept>\n  </div>\n</form>', '2006-01-04 05:11:20', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3510, 'gunnboy', 'angel', 'im in', '2006-01-03 08:44:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3497, 'GuNnBoY', 'a3man', 'hey whats goin on with the oc\r\n', '2006-01-03 08:27:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3685, 'bloody', 'gunnboy', 'you are dead in 40 minuts muhahahahahahahaha you punkd bitch fucking snitch', '2006-01-04 05:39:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4238, 'agent1', 'rafx10', 'will Hi there and yes I know him well', '2006-01-06 06:40:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4459, 'agent1', 'rafx10', 'danm give me a brack Iam doing kills now to help your net and mine so hold on \r\n', '2006-01-06 04:01:33', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4204, 'Liberate', 'jebediah', 'omg good work lol me and adrenaline booth had him hunted lmfao', '2006-01-06 03:17:03', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3549, 'gunnboy', 'a3man', 'yea how does tht work\r\n', '2006-01-03 09:08:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3508, 'gunnboy', 'angel', 'yeah i need an invite though', '2006-01-03 08:43:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3553, 'gunnboy', 'a3man', 'i keep clickin accept\r\n', '2006-01-03 09:09:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4205, 'jebediah', 'liberate', 'lol , who was it ?', '2006-01-06 03:19:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4206, 'liberate', 'jebediah', 'who was who? stateofwar?', '2006-01-06 03:19:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4207, 'jebediah', 'liberate', 'yea it wasnt infamous was it?', '2006-01-06 03:21:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4208, 'liberate', 'jebediah', 'i have no idea i just thought it was really unfair because 1hour after he signed up he beat m,e at a arm wrestle and i was level 30 and he had over 50mil', '2006-01-06 03:22:35', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3556, 'gunnboy', 'a3man', 'let me send u one', '2006-01-03 09:11:00', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3484, 'gunnboy', 'angel', 'yeah ill join if i can', '2006-01-03 08:10:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3693, 'bloody', 'bloody', 'You <b>Lost</b> in an arm wrestle!', '2006-01-04 05:44:41', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3694, 'bloody', 'gunnboy', 'so you don\\''t care if you dye???? whel why shoud you care cooz you are dead sone', '2006-01-04 05:45:24', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3545, 'gunnboy', 'angel', 'nice', '2006-01-03 09:06:49', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3483, 'gunnboy', 'angel', 'hes my soon to be husband yes, but were not married yet just engaged', '2006-01-03 08:09:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3699, 'bloody', 'gunnboy', 'what???', '2006-01-04 05:50:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3479, 'gunnboy', 'mafia', 'EE ONLY - ENGLAND ', '2006-01-03 08:08:09', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3501, 'gunnboy', 'a3man', 'kl kl - KewL KewL', '2006-01-03 08:33:29', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3687, 'gunnboy', 'bloody', 'your gay', '2006-01-04 05:40:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3697, 'bloody', 'gunnboy', 'fuck you asshold find you in you in your\\''s dady hold you punkd bitch fuking snitch', '2006-01-04 05:49:14', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3698, 'gunnboy', 'bloody', 'you do it all the time wanker', '2006-01-04 05:49:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3695, 'gunnboy', 'bloody', 'do i care\r\n', '2006-01-04 05:45:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3474, 'gunnboy', 'mafia', 'KK Np\r\n', '2006-01-03 08:05:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3475, 'gunnboy', 'angel', 'ok. well if you have any problems with a net member tell me or mafia ASAP ok? and i think my dad was talking to you on my account hes Rafx10. hes a faggot dont listen to him', '2006-01-03 08:05:30', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3464, 'gunnboy', 'mafia', 'Searching For master9733 Has Been Activated ', '2006-01-03 07:56:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3499, 'gunnboy', 'a3man', 'kl kl', '2006-01-03 08:28:58', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3671, 'a3man', 'a3man', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '1', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3538, 'gunnboy', 'angel', 'just click go and keep clicking it\r\n', '2006-01-03 09:05:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3539, 'gunnboy', 'gunnboy', 'Congratulations your oc was a success the money has already been shared out. into four sums of 750000', '2006-01-03 09:05:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3466, 'gunnboy', 'mafia', 'Please Leave The Firm And Message Me Back When u Wish To Rejoin', '2006-01-03 07:57:38', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3688, 'bloody', 'gunnboy', 'you are dead in 35 minuts don\\''t you belive me???\r\n\r\n\r\nSearching For bloody Has Been Activated ', '2006-01-04 05:41:32', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3469, 'gunnboy', 'angel', 'i added you you have to accept it though... and master is being shot so dont worry about that.. k', '2006-01-03 08:00:27', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3456, 'GuNnBoY', 'mafia', 'Why did u leave my crew ???', '2006-01-03 07:51:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3451, 'gunnboy', 'rafx10', 'got to go to work', '2006-01-03 07:46:52', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3446, 'gunnboy', 'rafx10', 'no but when you buy them you can talk to the owner and he may send you some cash back lol', '2006-01-03 07:41:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3435, 'gunnboy', 'rafx10', 'sent\r\n', '2006-01-03 07:29:28', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3342, 'gunnboy', 'a3man', 'what do you mean by lower ???', '2006-01-03 04:55:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3322, 'gunnboy', 'gunnboy', 'Thanks man..<br> Your a great guy i will give you all what ive got i almost got capped! <br><b>Your rewards:</b> £10,000 <br>50 Bullets ', '2006-01-03 03:38:44', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4657, 'FySicaL', 'FySicaL', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3460, 'GuNnBoY', 'angel', 'hey if you have MAN add me im trouble188@hotmail.com', '2006-01-03 07:54:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4324, 'Quiksilva', 'gunnboy', 'are you male or a female', '2006-01-06 02:30:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4325, 'gunnboy', 'mafia', 'lol ADRENALIN ... JIBBY DUDE ... AND OWNER OF USA SLOTS\r\n', '2006-01-06 02:32:44', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3529, 'gunnboy', 'angel', 'i dont know what your talking about... lol', '2006-01-03 08:56:28', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3737, 'gunnboy', 'tiffer', 'Admins Crew Anly', '2006-01-04 10:33:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3663, 'toyboi', 'toyboi', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '0', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3525, 'gunnboy', 'a3man', 'have u sorted it ???', '2006-01-03 08:53:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3211, 'Capone01', 'Capone01', 'You witnessed rafx10 kill Capone01 with 2500 bullets!', '2006-01-01 05:32:13', '0', 0, 0, '1', 'Capone01');
INSERT INTO `inbox` VALUES (4445, 'GuNnBoY', 'GuNnBoY', 'evry bodyon the crew buy mafia a cold beer...thx..... gunnboy', '2006-01-06 03:56:36', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4255, 'Quiksilva', 'Quiksilva', 'You witnessed jebediah kill blood with 1 bullets!', '2006-01-06 08:51:23', '1', 0, 0, '1', 'blood');
INSERT INTO `inbox` VALUES (4200, 'KeyLowz', 'KeyLowz', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '0', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (3419, 'gunnboy', 'rafx10', 'your rank bar will get to 0 then start going up but you just ranked up it will be fine hittman is fucked up to If you want to leave you can but that is up to you', '2006-01-03 07:22:45', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3156, 'master9733', 'master9733', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '1', 1, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (4410, 'gunnboy', 'alejdin', 'np', '2006-01-06 03:29:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4201, 'AdrenalinE', 'AdrenalinE', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '1', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (3407, 'gunnboy', 'a3man', 'sorri i am in england', '2006-01-03 07:16:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3662, 'spider', 'spider', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '0', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (3424, 'gunnboy', 'a3man', 'wot u get if u do it will u bring back Phencyclidine its for a mission', '2006-01-03 07:25:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3153, 'danfordy733uk', 'danfordy733uk', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (3154, 'Ziel', 'Ziel', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (3155, 'Ultrabeat', 'Ultrabeat', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (3440, 'gunnboy', 'a3man', 'oh ok\r\n', '2006-01-03 07:34:45', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3430, 'gunnboy', 'rafx10', 'no rhm is my nefew he looks after the crew when I at work', '2006-01-03 07:28:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4448, 'MakeBelieve', 'MakeBelieve', 'evry bodyon the crew buy mafia a cold beer...thx..... gunnboy', '2006-01-06 03:56:36', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4333, 'GuNnBoY', 'GuNnBoY', 'ALL MEMBERS STOCK UP ... LOCK N LOAD .... ADRENALIN MUST DROP', '2006-01-06 02:34:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3412, 'GuNnBoY', 'a3man', 'u still need someone for the oc. if u do i got a maclaren f1', '2006-01-03 07:19:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3691, 'bloody', 'gunnboy', 'you are dead hahahahahaha you shud be shame to be btm bigest loser', '2006-01-04 05:43:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3148, 'GuNnBoY', 'GuNnBoY', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '1', 1, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (4199, 'MakeBelieve', 'MakeBelieve', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '0', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (3431, 'gunnboy', 'a3man', 'where is it canada', '2006-01-03 07:28:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3683, 'bloody', 'gunnboy', 'Searching For bloody Has Been Activated \r\n\r\n\r\nwhy did you say mutherfucker to me i will kill you now', '2006-01-04 05:26:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3696, 'bloody', 'gunnboy', 'i don\\''t hope so or you are gonna cry to you\\''r mamma', '2006-01-04 05:46:21', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3327, 'leskepimpin', 'a3man', 'i have friends lol', '2006-01-03 04:32:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3333, 'gunnboy', 'a3man', 'yo im 3mans older bro and tht my bros gal ', '2006-01-03 04:48:14', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3335, 'gunnboy', 'a3man', 'y ???', '2006-01-03 04:52:03', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3534, 'gunnboy', 'a3man', 'you sorterd it yet m8, oh yea how much u givin me out of this oc', '2006-01-03 09:02:43', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3681, 'bloody', 'gunnboy', 'doos it work', '2006-01-04 05:16:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3472, 'gunnboy', 'mafia', 'buzz_box2003@msn.com\r\n\r\nContact me if he attempts to threten u again ... ill talk to my uncal see if i can get him auto killed or how many bullets ill need to kill him .', '2006-01-03 08:03:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3461, 'gunnboy', 'mafia', 'dont worry about master .. he will be delt with or killed .. you wanna rejoin .. if u have any more probs with master let me know .. and dont leave the crew unless u get aproval from me or u may find ur self shot .\r\nill deal with master now so would u like to rejoin ?', '2006-01-03 07:55:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3536, 'gunnboy', 'a3man', 'huh ???', '2006-01-03 09:04:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3331, 'gunnboy', 'gunnboy', 'Quality That cars blinging! We gotta take it out for a ride sometime!..<br>Anyways, im a man of my word heres your new stuff: <br>1000 Bullets<br>£200,000', '2006-01-03 04:39:02', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (3692, 'gunnboy', 'bloody', 'get lost you spastic', '2006-01-04 05:44:38', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3521, 'gunnboy', 'angel', 'you wanted me to repair the car and shit', '2006-01-03 08:52:36', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3661, 'kanti', 'kanti', 'You have been kicked from The Disreguarded Truth for the following reason: <br>', '2006-01-04 04:21:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3426, 'gunnboy', 'rafx10', 'yes but you have to leave yours frist\r\n', '2006-01-03 07:26:25', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4105, 'gunnboy', 'fysical', 'how do i drink it? :P', '2006-01-05 07:36:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3209, 'blade377uk', 'blade377uk', 'You witnessed rafx10 kill Capone01 with 2500 bullets!', '2006-01-01 05:32:13', '0', 0, 0, '1', 'Capone01');
INSERT INTO `inbox` VALUES (3047, 'blade377uk', 'angel', '12', '2005-12-29 11:53:17', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3050, 'blade377uk', 'blade377uk', 'You have been kicked from The Firm for the following reason: <br>', '2005-12-30 04:41:44', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4198, 'xander', 'xander', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '0', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (3008, 'primalforce', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3526, 'gunnboy', 'agent1', 'yer kk how much u gona pay me and wot shall i use as ii dnt have much money on 20k', '2006-01-03 08:54:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3403, 'gunnboy', 'rafx10', 'you cant it dont work it has a bug in it', '2006-01-03 07:15:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3673, 'a3man', 'agent1', 'sent u a cold beer ure rank shuld go up send me one now :)', '2006-01-04 05:43:52', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3404, 'gunnboy', 'a3man', 'i cnt oc im in china and whatsthe prison fing about', '2006-01-03 07:16:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3004, 'Addict', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3005, 'chin', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4347, 'CpKillR', 'CpKillR', 'EVRY BODY ON THE CREW HUNT DOWN ADRENALIN AND R.I.P FOR ANGEL&AGENT1', '2006-01-06 02:43:44', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3003, 'HideousBeast', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3001, 'Multigood', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4427, 'tempestuous', 'mafia', 'lol i aint killed no one .. its called blood crews lol ', '2006-01-06 03:46:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2999, 'imback', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4441, 'Quiksilva', 'Quiksilva', 'evry bodyon the crew buy mafia a cold beer...thx..... gunnboy', '2006-01-06 03:56:36', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4343, 'gunnboy', 'fysical', 'hehe you bought me one you know :)', '2006-01-06 02:38:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4388, 'GuNnBoY', 'GuNnBoY', 'i''m starting a oc need 3 peapole message gunnboy', '2006-01-06 03:13:28', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4360, 'gunnboy', 'fysical', 'RHM? what is that? no i didnt get it..', '2006-01-06 02:50:13', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2997, 'Capone01', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2995, 'Link', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4548, 'gunnboy', 'fysical', 'i can be in m8 :)', '2006-01-06 06:25:00', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2994, 'KeyLowz', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3012, '<font colour=blue>Liberate</font>', 'Liberate', 'Better Knock that fuckin shit off bitch You Have BEEN warned!', '2005-12-28 10:26:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3406, 'gunnboy', 'rafx10', 'I think you got in the worng crew LOL', '2006-01-03 07:16:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2992, 'sirice', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2989, 'Flixion', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2990, 'FrAnZfErDiNaNd', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3150, 'baslan', 'baslan', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (4202, 'jebediah', 'jebediah', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '1', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (3152, 'sierof', 'sierof', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (2986, 'LadyLunos', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2987, 'xander', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2984, 'thunderfalcon', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2985, 'Donketz', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2982, 'silverfox', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2983, '143143143', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2980, 'Toaster', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2981, 'fuck', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3111, 'davidbarnes67', 'gunnboy', 'yo!!! wanna be m8??? do you know how many that play this game???', '2005-12-30 11:21:06', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3082, 'blade377uk', 'davidbarnes67', 'hu is this', '2005-12-30 06:11:29', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3151, 'thepunisher91', 'thepunisher91', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (3455, 'gunnboy', 'angel', 'hey im really sorry i havent answered you i havent been on my computer.... and the whole thing about master dont worry about it you can come back in our crew he aint gunna touch you.', '2006-01-03 07:51:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2938, 'AdrenalinE', 'AdrenalinE', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '1', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2939, 'AdrenalinE', 'jebediah', 'You shot solomona and sent him 6ft under!\r\n\r\noh yeah!', '2005-12-28 11:22:26', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2934, 'FrAnZfErDiNaNd', 'FrAnZfErDiNaNd', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2935, 'sirice', 'sirice', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2936, 'solomona', 'solomona', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2937, 'Link', 'Link', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '1', 1, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (3454, 'LadyLunos', 'gunnboy', 'hey....wanna get maried???', '2006-01-03 07:48:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3210, 'HideousBeast', 'HideousBeast', 'You witnessed rafx10 kill Capone01 with 2500 bullets!', '2006-01-01 05:32:13', '1', 0, 0, '1', 'Capone01');
INSERT INTO `inbox` VALUES (2933, 'blade377uk', 'blade377uk', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '1', 1, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (4307, 'angel', 'angel', 'You have been kicked from :Brutal.Force: for the following reason: <br>', '2006-01-06 01:52:45', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3443, 'gunnboy', 'rafx10', 'what for free?????', '2006-01-03 07:38:20', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3449, 'gunnboy', 'rafx10', 'We are set up to be blood net and that would not be cool we have alot of power in this net money and bullets', '2006-01-03 07:46:27', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4314, 'leskepimpin', 'gunnboy', 'male why did you ask??', '2006-01-06 02:12:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3401, 'gunnboy', 'rafx10', 'I didnot get the invite but I have a oc open so I cant sorry', '2006-01-03 07:14:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3396, 'gunnboy', 'rafx10', 'I dont know if I can you can try but a3man can', '2006-01-03 07:11:31', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4615, 'fysical', 'gunnboy', 'okei sorry m8:( i will stopp whit that...and the oc soon done:D', '2006-01-06 08:51:01', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (2978, 'danfordy377uk', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4196, 'TrickyMicky', 'TrickyMicky', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '0', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (4191, 'Liberate', 'jebediah', '7mil for both?pleasse i need more bullets so i can lead tdt', '2006-01-06 03:03:14', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3690, 'bloody', 'gunnboy', 'Target Status Location Delete \r\nbloody 30 Minutes 58 Seconds Japan Delete \r\nbloody 30 Minutes 58 Seconds England Delete \r\nbloody 30 Minutes 58 Seconds France Delete \r\nbloody 30 Minutes 58 Seconds USA Delete \r\nbloody 30 Minutes 58 Seconds China Delete \r\nbloody 30 Minutes 58 Seconds Canada Delete \r\n', '2006-01-04 05:43:11', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2867, 'primalforce', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3149, 'jujitsu', 'jujitsu', 'You witnessed mafia kill thepunisher91 with 4850 bullets!', '2005-12-31 01:37:17', '0', 0, 0, '1', 'thepunisher91');
INSERT INTO `inbox` VALUES (3513, 'gunnboy', 'a3man', 'yea what issit about\r\n', '2006-01-03 08:46:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3516, 'gunnboy', 'angel', 'i know.. send me another invite', '2006-01-03 08:50:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2979, 'demonfromhell', 'Mass Message', 'Site was Down 2Day Because Of Police and My Boss Checking Server Because Of Some''1'' Trying to Access Bank Info However The Person Was Cought And Now Being Delt With By The Police', '2005-12-28 10:15:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2968, 'Link', 'mafia', 'reply with this Message plz \r\n\r\n        ...\\"SCRIPED CHECK\\"...', '2005-12-28 05:03:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2864, 'chin', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2863, 'Addict', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4346, 'quiksilva', 'gunnboy', 'okei', '2006-01-06 02:39:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4384, 'Quiksilva', 'Quiksilva', 'i''m starting a oc need 3 peapole message gunnboy', '2006-01-06 03:13:28', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3391, 'MrMcBadman', 'rafx10', 'Hi Iam Raf just so you know as a net we own over haft the game all the BFs but england and China and most the APs and tables once you rank past scum you can oc it takes about a hour or so', '2006-01-03 07:02:06', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2862, 'HideousBeast', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4311, 'AdrenalinE', 'mafia', 'if u got msn ... i sugest u get on it ...\r\n\r\nbuzz_box2003@msn.com', '2006-01-06 02:05:15', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2860, 'Multigood', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4428, 'King', 'gunnboy', 'are you gonna join the crew???', '2006-01-06 03:46:24', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4304, 'Tempestuous', 'mafia', 'Slots tempestuous  £300 \r\nRPS tempestuous  £300 \r\nRace track tempestuous  £300 \r\n\r\n\r\n\r\nSend me them Properties U Have 5 HRs Or ill Kill You For Them Back ', '2006-01-06 01:49:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4305, 'agent1', 'agent1', 'You have been kicked from :Brutal.Force: for the following reason: <br>', '2006-01-06 01:52:01', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4306, 'master9733', 'master9733', 'You have been promoted to RHM in your crew!', '2006-01-06 01:52:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2858, 'imback', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2930, 'Donketz', 'Donketz', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2931, 'LadyLunos', 'LadyLunos', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '1', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (4552, 'King', 'King', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4656, 'Lexberg', 'Lexberg', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4302, 'AdrenalinE', 'mafia', 'DO U KNOW WHO KILLED ANGEL ?', '2006-01-06 01:45:28', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4303, 'Tempestuous', 'mafia', 'DO U KNOW WHO KILLED ANGEL ', '2006-01-06 01:45:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2932, 'Flixion', 'Flixion', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2854, 'Link', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2853, 'KeyLowz', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4361, 'gunnboy', 'mafia', 'lol take out usa slots owner insted\r\n\r\nill take out the high ranks', '2006-01-06 02:50:38', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2851, 'solomona', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3727, 'gunnboy', '3mansgirl', 'but we can be friends lol ', '2006-01-04 10:27:45', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3670, '3mansgirl', '3mansgirl', 'You witnessed liberate kill EvilCouncil with 3000 bullets!', '2006-01-04 04:38:41', '1', 0, 0, '1', 'EvilCouncil');
INSERT INTO `inbox` VALUES (4317, 'Quiksilva', 'gunnboy', 'are you male or a female???', '2006-01-06 02:14:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2952, 'Link', 'rafx10', 'doing oc in london you want in\r\n', '2005-12-28 04:11:16', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2953, 'blade377uk', 'blade377uk', '\n  <div align=center>You have been invited to join rafx10 s Organised crime as the Explosives expert<br>, please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=ee><input type=hidden name=oc_id value=27>\n', '2005-12-28 04:15:45', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (2850, 'sirice', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2848, 'FrAnZfErDiNaNd', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3682, 'bloody', 'gunnboy', 'answer me for god damn', '2006-01-04 05:23:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2847, 'Flixion', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3103, 'davidbarnes67', 'davidbarnes67', 'You <b>Lost</b> in an arm wrestle!', '2005-12-30 07:29:51', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3107, 'thepunisher91', 'baslan', 'stygg ass', '2005-12-30 10:05:58', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4195, 'MrMcBadman', 'MrMcBadman', 'You witnessed liberate kill StateOfwar with 2000 bullets!', '2006-01-06 03:13:48', '1', 0, 0, '1', 'StateOfwar');
INSERT INTO `inbox` VALUES (2966, 'Toaster', 'mafia', 'reply with this Message plz \r\n\r\n        ...\\"SCRIPED CHECK\\"...', '2005-12-28 05:02:31', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2811, 'ladylunos', 'rafx10', 'ok good', '2005-12-27 09:02:12', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4288, 'toyboi', 'toyboi', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (4300, 'jebediah', 'nothingman', 'God that fuckin cheater', '2006-01-06 01:21:32', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2825, 'leskepimpin', 'tiffer', 'www.bloodtownmafia.com/mod\r\n\r\nLOGIN NAME : leskepimpin \r\nPASSWORD : adam01\r\n\r\nI WILL BE KEEPING TRACK OF ALL THINGS YOU DO', '2005-12-27 11:04:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2801, 'flixion', 'flixion', '<b>rafx10</b> busted you out of jail.', '2005-12-27 05:18:24', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4344, 'gunnboy', 'quiksilva', 'I\\''m male. ', '2006-01-06 02:38:52', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4310, 'tempestuous', 'mafia', 'kk np ', '2006-01-06 02:04:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2898, 'xander', 'adrenaline', 'Would you like to join TDT?', '2005-12-28 01:59:33', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4655, 'ninisenxx', 'ninisenxx', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4433, 'gunnboy', 'mafia', 'i havent shot yet lol', '2006-01-06 03:51:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4391, 'MakeBelieve', 'MakeBelieve', 'i''m starting a oc need 3 peapole message gunnboy', '2006-01-06 03:13:28', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4389, 'master9733', 'master9733', 'i''m starting a oc need 3 peapole message gunnboy', '2006-01-06 03:13:28', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2813, 'LadyLunos', 'rafx10', 'welcome to the crew', '2005-12-27 09:35:08', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4308, 'tempestuous', 'mafia', 'SEND ME BACK THEM PROPERTIES U OWN OR BE KILLED FOR THEM BACK .', '2006-01-06 02:00:20', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4296, 'MakeBelieve', 'MakeBelieve', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (4297, 'KeyLowz', 'KeyLowz', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (4298, 'Liberate', 'Liberate', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (4622, 'Lexberg', 'gunnboy', 'are you gonn join the oc or not???', '2006-01-06 08:54:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4626, 'Lexberg', 'Lexberg', 'Congratulations your oc was a success the money has already been shared out. into four sums of 773469', '2006-01-06 08:56:39', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4621, 'GuNnBoY', 'fysical', 'hehe you sended a message to my friend and asked if he wanted to join your oc :P hes sitting next to me and yes he wants in :P', '2006-01-06 08:54:19', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3740, 'Renegade', 'Mass Message', '10Mil Comp ( I Want A New theme Created For BTM MUST BE PHP No HTML Shit SO U MUST KNOW HOW TO USE PHP R YOUR FUCKED LOL.) Message Me If You Want To Be In The Comp This Will Stay Open For 1 Week so Get Building.', '2006-01-04 10:36:02', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4280, 'Quiksilva', 'Quiksilva', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '1', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (4281, 'blood', 'blood', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (3868, 'gunnboy', 'leskepimpin', 'male... why?', '2006-01-05 04:24:28', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4232, 'a3man', 'a3man', 'You have been kicked from The Firm for the following reason: <br>', '2006-01-06 05:38:47', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4087, 'gunnboy', 'fysical', 'hehe i cant fully understand what you mean.. :) if you have msn messenger we can communicate over that maybe? if you want send me your msn.. then maybe i can buy you a beer :)', '2006-01-05 07:10:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4275, 'Liberate', 'Liberate', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (4654, 'Quiksilva', 'Quiksilva', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4549, 'King', 'King', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4550, 'InsanePhatSouljah', 'InsanePhatSouljah', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4286, 'Renegade', 'Renegade', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (4287, 'spider', 'spider', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (3352, 'gunnboy', 'a3man', 'im already doin an oc with my boss sorri if u wana wait till my bro comes on', '2006-01-03 04:59:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4283, 'GangsterX', 'GangsterX', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (2845, 'xander', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2843, 'Donketz', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3368, 'GuNnBoY', 'a3man', 'wana join my boss oc', '2006-01-03 05:39:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4544, 'gunnboy', 'rafx10', 'cant now\r\n', '2006-01-06 05:17:32', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4639, 'FySicaL', 'gunnboy', 'don\\''t you have money???', '2006-01-06 09:11:27', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4640, 'gunnboy', 'gunnboy', 'You <b>Lost</b> the bout!', '2006-01-06 09:12:00', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4628, 'Alejdin', 'Alejdin', 'Congratulations your oc was a success the money has already been shared out. into four sums of 773469', '2006-01-06 08:56:39', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4446, 'master9733', 'master9733', 'evry bodyon the crew buy mafia a cold beer...thx..... gunnboy', '2006-01-06 03:56:36', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2905, 'sirice', 'sirice', '\n  <div align=center>You have been invited to join adrenaline s Organised crime as the Weapons Master,<br> please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=we><input type=hidden name=oc_id value=26>\n', '2005-12-28 02:13:32', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3866, 'gunnboy', 'tiffer', 'its me', '2006-01-05 03:39:40', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4293, 'TrickyMicky', 'TrickyMicky', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (4653, 'CpKillR', 'CpKillR', 'i will maybe qouit the game so if i qouit as mafia if you wanna be rhm;)....gunnboy', '2006-01-06 09:41:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4295, 'xander', 'xander', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (3360, 'gunnboy', 'a3man', 'l8rs', '2006-01-03 05:04:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4619, 'GuNnBoY', 'fysical', 'hehe its okey m8 :)\r\nok hope we will get lots and lots of cash then :)', '2006-01-06 08:53:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4393, 'Quiksilva', 'gunnboy', 'wanna join my oc \\''im the rhm on the crew', '2006-01-06 03:14:07', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4431, 'GuNnBoY', 'rafx10', 'can you fly\r\n', '2006-01-06 03:50:43', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4282, 'CpKillR', 'CpKillR', 'You witnessed jebediah kill angel with 4000 bullets!', '2006-01-06 11:56:27', '0', 0, 0, '1', 'angel');
INSERT INTO `inbox` VALUES (2637, 'primalforce', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2844, 'LadyLunos', 'Mass Message', '1st Person To Get 20 People To Sign Up and Stay online Will Get 8Million In Game money I Will Keep Track Of Stats in Background But i also want you to get your friends to tell me who invited them (STARTS FROM DAY SO WHOEVA SIGNES UP NOW IS IN IT TO WIN IT AND USE UR PRIVATE LINK UNDER MAIN ON MENU.', '2005-12-28 01:05:56', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2958, 'Link', 'rafx10', 'need driver in london for a oc', '2005-12-28 04:35:27', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3337, 'gunnboy', 'a3man', 'lol oh nah hes my younger bro and thts his gal.', '2006-01-03 04:53:54', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2632, 'HideousBeast', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2633, 'Addict', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2634, 'chin', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4623, 'fysical', 'gunnboy', ':P i invitet him to the crew help him to the oc then the oc is done;)', '2006-01-06 08:55:07', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2806, 'KeyLowz', 'rafx10', 'what is your rank bar', '2005-12-27 08:13:29', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2630, 'Multigood', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3347, 'gunnboy', 'a3man', 'ermm i dnt no m8 try doing an oc maybe tht will help you rank', '2006-01-03 04:57:33', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2612, 'Addict', 'Addict', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '0', 0, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (2613, 'chin', 'chin', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '0', 0, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (4631, 'Lexberg', 'gunnboy', 'you rank\\''d congratz;)', '2006-01-06 08:59:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4617, 'Lexberg', 'gunnboy', 'i invitet you to the crew wanna join my oc in usa???', '2006-01-06 08:51:37', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2628, 'imback', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4632, 'gunnboy', 'fysical', ':):)', '2006-01-06 09:00:19', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4633, 'gunnboy', 'lexberg', 'Thx\r\n', '2006-01-06 09:01:58', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2610, 'Multigood', 'Multigood', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '0', 0, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (2611, 'unownking', 'unownking', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '0', 0, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (4269, 'agent1', 'agent1', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (4270, 'TrickyMicky', 'TrickyMicky', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (2960, 'link', 'link', '<b>blade377uk</b> busted you out of jail.', '2005-12-28 04:37:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4618, 'Lexberg', 'Lexberg', '\n  <div align=center>You have been invited to join gunnboy s Organised crime as the Weapons Master,<br> please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=we><input type=hidden name=oc_id value=37>\n', '2006-01-06 08:52:43', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2690, 'imback', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4553, 'InsanePhatSouljah', 'InsanePhatSouljah', 'You witnessed rafx10 kill InsanePhatSouljah with 1100 bullets!', '2006-01-06 06:54:41', '0', 0, 0, '1', 'InsanePhatSouljah');
INSERT INTO `inbox` VALUES (4370, 'Quiksilva', 'Quiksilva', 'EVRY BODY THAT HAVE OVER 2MILL HAVE TO BUY Hoe training facility....GuNnBoY', '2006-01-06 03:01:03', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4313, 'adrenaline', 'mafia', 'come on msn ... i have a prop to sort out ...\r\n\r\nbuzz_box2003@msn.com', '2006-01-06 02:07:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2929, 'thunderfalcon', 'thunderfalcon', 'You witnessed jebediah kill solomona with 1050 bullets!', '2005-12-28 11:22:10', '0', 0, 0, '1', 'solomona');
INSERT INTO `inbox` VALUES (2699, 'primalforce', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3418, 'gunnboy', 'a3man', 'Your mate Jhon booti has been grassed on. Go to Canada and bust him out Watch out though its a high security jail, and you have a high risk of getting put in jail. Good Luck Hes a rich guy so it will be worth it. he aint in jail!!! where do i find him????   what is that about\r\n', '2006-01-03 07:22:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3519, 'gunnboy', 'a3man', 'hmm i dunno m8\r\n', '2006-01-03 08:51:02', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4292, 'agent1', 'agent1', 'You witnessed jebediah kill agent1 with 1498 bullets!', '2006-01-06 01:16:22', '0', 0, 0, '1', 'agent1');
INSERT INTO `inbox` VALUES (2694, 'HideousBeast', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3438, 'GuNnBoY', 'rafx10', 'wellcome in and you do know we own all the BFs but england and china so if you need bullets getthem in france japan usa or canada ok', '2006-01-03 07:33:59', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3415, 'gunnboy', 'a3man', 'yea ok', '2006-01-03 07:21:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2962, 'link', 'rafx10', 'can you drive', '2005-12-28 04:39:21', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2692, 'Multigood', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4268, 'MrMcBadman', 'jebediah', 'go offline now please for 1 hour or you will be killed', '2006-01-06 10:30:27', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2595, 'unownking', 'mafia', '.. you best watch what your saying to my girl .. other wise ill force you to quit this game... ', '2005-12-26 12:35:21', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2696, 'chin', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2515, 'keylowz', 'keylowz', 'jebediah bought you a Cold beer.', '2005-12-26 03:41:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4440, 'CpKillR', 'CpKillR', 'evry bodyon the crew buy mafia a cold beer...thx..... gunnboy', '2006-01-06 03:56:36', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2683, 'solomona', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3445, 'gunnboy', 'rafx10', 'Isent angel a msg not to shoot you and if they do I will kill the hole net lol', '2006-01-03 07:39:48', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2695, 'Addict', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4274, 'KeyLowz', 'KeyLowz', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (2497, 'hideousbeast', 'hideousbeast', '<b>adrenaline</b> busted you out of jail.', '2005-12-26 01:47:23', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4353, 'master9733', 'master9733', 'EVRY BODY ON THE CREW HUNT DOWN ADRENALIN AND R.I.P FOR ANGEL&AGENT1', '2006-01-06 02:43:44', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2685, 'KeyLowz', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3362, 'GuNnBoY', 'rafx10', 'want to oc\r\n', '2006-01-03 05:08:22', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3358, 'gunnboy', 'a3man', 'erm not at the moment m8 im doing fine where i am cheers any way tho. my bro ent in a firm and when he plays this hell be gd he spanked it on themafianetwork. add him hell be gd', '2006-01-03 05:02:46', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2462, 'Addict', 'Mass Message', '£ Props Only To Non donations Members', '2005-12-25 10:59:01', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2463, 'chin', 'Mass Message', '£ Props Only To Non donations Members', '2005-12-25 10:59:01', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2609, 'imback', 'imback', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '1', 0, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (4273, 'MakeBelieve', 'MakeBelieve', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (2446, 'primalforce', 'rafx10', 'I have to see if a friend is mod or not I have to go for now I will do the oc as soon has I can', '2005-12-25 08:59:20', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4396, 'gunnboy', 'alejdin', 'ill join', '2006-01-06 03:15:42', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4315, 'GuNnBoY', 'mafia', 'come on msn ... buzz_box2003@msn.com', '2006-01-06 02:13:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4377, 'MakeBelieve', 'MakeBelieve', 'EVRY BODY THAT HAVE OVER 2MILL HAVE TO BUY Hoe training facility....GuNnBoY', '2006-01-06 03:01:03', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2608, 'Link', 'Link', 'You witnessed tiffer kill unownking with 4500 bullets!', '2005-12-26 06:11:11', '1', 1, 0, '1', 'unownking');
INSERT INTO `inbox` VALUES (2457, 'imback', 'Mass Message', '£ Props Only To Non donations Members', '2005-12-25 10:59:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4272, 'xander', 'xander', 'You witnessed adrenaline kill Liberate with 2000 bullets!', '2006-01-06 10:38:09', '0', 0, 0, '1', 'Liberate');
INSERT INTO `inbox` VALUES (2459, 'Multigood', 'Mass Message', '£ Props Only To Non donations Members', '2005-12-25 10:59:01', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3423, 'GuNnBoY', 'rafx10', 'yes I do The Firm ', '2006-01-03 07:24:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2379, 'addict', 'rafx10', 'ok went I set up a net you want in', '2005-12-25 12:06:42', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2623, 'KeyLowz', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2686, 'Link', 'Mass Message', 'http://www.gamesites200.com/gaming/vote.php?id=5026\r\n\r\nDO IT NOW! :P', '2005-12-27 01:13:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2388, 'Multigood', 'Multigood', '\n  <div align=center>You have been invited to join tiffer s Organised crime as the Explosives expert<br>, please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=ee><input type=hidden name=oc_id value=20>\n', '2005-12-25 01:38:55', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4320, 'gunnboy', 'mafia', 'cant m8 ... im in war .. need all members with ammo to serch n help kill', '2006-01-06 02:19:08', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2375, 'addict', 'rafx10', 'canada\r\n', '2005-12-25 12:02:43', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2466, 'primalforce', 'Mass Message', '£ Props Only To Non donations Members', '2005-12-25 10:59:01', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2621, 'solomona', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2380, 'Addict', 'rafx10', 'time to eat bye', '2005-12-25 12:10:32', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3436, 'gunnboy', 'a3man', 'wot hes in england prison', '2006-01-03 07:31:04', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4380, 'GuNnBoY', 'GuNnBoY', 'mafia bought you a Cold beer.', '2006-01-06 03:03:25', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4169, 'CpKillR', 'CpKillR', 'everyone with 1 mill+ please buy a hoe business weekly please ... or be kicked from the crew .. Thanks Mafia', '2006-01-06 02:35:40', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2377, 'addict', 'rafx10', 'I have to eat so I will be getting off soon are you holding Juston shit for him\r\n', '2005-12-25 12:04:28', '1', 1, 0, '0', '');
INSERT INTO `inbox` VALUES (4608, 'ninisenxx', 'ninisenxx', '\n  <div align=center>You have been invited to join gunnboy s Organised crime as the Weapons Master,<br> please\n    choose one of the following options:<br>\n    <input name=Decline_OC type=submit id=Decline value=Decline>\n    |\n    <input name=Accept_OC type=submit value=Accept>\n  </div><input type=hidden name=place value=we><input type=hidden name=oc_id value=37>\n', '2006-01-06 08:46:30', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2381, 'Addict', 'unownking', 'hey dude... i get i n jail a lot if u see me n the jail mind busting me out??? thanx', '2005-12-25 12:36:16', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2624, 'Link', 'Mass Message', 'Script check you all have 5 mins to send a message to Tiffer just saysing (test) if no reply you will be banned', '2005-12-26 06:39:18', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (4348, 'Quiksilva', 'Quiksilva', 'EVRY BODY ON THE CREW HUNT DOWN ADRENALIN AND R.I.P FOR ANGEL&AGENT1', '2006-01-06 02:43:44', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (2708, 'Addict', 'rafx10', 'join my net fuckhead Gary', '2005-12-27 02:41:34', '0', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3689, 'gunnboy', 'bloody', 'shut up you horse', '2006-01-04 05:43:10', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3393, 'GuNnBoY', 'rafx10', 'are you doing a oc', '2006-01-03 07:08:57', '1', 0, 0, '0', '');
INSERT INTO `inbox` VALUES (3320, 'leskepimpin', 'leskepimpin', 'Thanks man..<br> Your a great guy i will give you all what ive got i almost got capped! <br><b>Your rewards:</b> £10,000 <br>50 Bullets ', '2006-01-03 06:51:16', '1', 0, 0, '0', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `items`
-- 

CREATE TABLE `items` (
  `id` int(11) NOT NULL auto_increment,
  `item` varchar(100) NOT NULL default '',
  `value` int(11) NOT NULL default '0',
  `owner` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=739 ;

-- 
-- Dumping data for table `items`
-- 

INSERT INTO `items` VALUES (445, 'Bandanna', 500, 'tempestuous');
INSERT INTO `items` VALUES (443, 'Bandanna', 500, 'tempestuous');
INSERT INTO `items` VALUES (442, 'Curry', 500, 'tempestuous');
INSERT INTO `items` VALUES (474, 'Chain', 3000, 'adrenaline');
INSERT INTO `items` VALUES (440, 'Tracking Device', 20000, 'adrenaline');
INSERT INTO `items` VALUES (464, 'Tracking Device', 20000, 'tempestuous');
INSERT INTO `items` VALUES (438, 'Black boots', 300, 'tempestuous');
INSERT INTO `items` VALUES (437, 'Chicken Nuggets', 180, 'adrenaline');
INSERT INTO `items` VALUES (436, 'Tracking Device', 20000, 'tempestuous');
INSERT INTO `items` VALUES (435, 'Black boots', 300, 'adrenaline');
INSERT INTO `items` VALUES (434, 'Bandanna', 500, 'tempestuous');
INSERT INTO `items` VALUES (433, 'Chicken Nuggets', 180, 'adrenaline');
INSERT INTO `items` VALUES (432, 'Black boots', 300, 'adrenaline');
INSERT INTO `items` VALUES (431, 'Crisps', 100, 'adrenaline');
INSERT INTO `items` VALUES (430, 'Crisps', 100, 'tempestuous');
INSERT INTO `items` VALUES (429, 'Fries', 110, 'adrenaline');
INSERT INTO `items` VALUES (428, 'Weed seeds', 4000, 'tempestuous');
INSERT INTO `items` VALUES (427, 'Black boots', 300, 'tempestuous');
INSERT INTO `items` VALUES (692, 'Fish', 250, 'ninisenxx');
INSERT INTO `items` VALUES (404, 'Weed seeds', 4000, 'adrenaline');
INSERT INTO `items` VALUES (679, 'Tracking Device', 20000, 'agent1');
INSERT INTO `items` VALUES (401, 'Chain', 3000, 'capone01');
INSERT INTO `items` VALUES (703, 'Yellow Pages', 10000, 'ninisenxx');
INSERT INTO `items` VALUES (399, 'Weed seeds', 4000, 'adrenaline');
INSERT INTO `items` VALUES (398, 'Bling', 3000, 'adrenaline');
INSERT INTO `items` VALUES (676, 'Bandanna', 500, '3mansgirl');
INSERT INTO `items` VALUES (395, 'Black boots', 300, 'adrenaline');
INSERT INTO `items` VALUES (660, 'Bling', 3000, 'angel');
INSERT INTO `items` VALUES (658, 'Weed seeds', 4000, 'a3man');
INSERT INTO `items` VALUES (392, 'Curry', 500, 'adrenaline');
INSERT INTO `items` VALUES (719, 'Fries', 110, 'jebediah');
INSERT INTO `items` VALUES (390, 'Fries', 110, 'adrenaline');
INSERT INTO `items` VALUES (520, 'Chicken Nuggets', 180, 'jebediah');
INSERT INTO `items` VALUES (519, 'Black boots', 300, 'jebediah');
INSERT INTO `items` VALUES (713, 'Bling', 3000, '3mansgirl');
INSERT INTO `items` VALUES (420, 'Fish', 250, 'adrenaline');
INSERT INTO `items` VALUES (385, 'Tracking Device', 20000, 'jebediah');
INSERT INTO `items` VALUES (411, 'Crisps', 100, 'adrenaline');
INSERT INTO `items` VALUES (518, 'Bandanna', 500, 'jebediah');
INSERT INTO `items` VALUES (381, 'Tracking Device', 20000, 'jebediah');
INSERT INTO `items` VALUES (510, 'Curry', 500, 'jebediah');
INSERT INTO `items` VALUES (696, 'Fish', 250, 'ninisenxx');
INSERT INTO `items` VALUES (410, 'Cheese Burger', 200, 'leskepimpin');
INSERT INTO `items` VALUES (375, 'Chain', 3000, 'primalforce');
INSERT INTO `items` VALUES (373, 'Fish', 250, 'primalforce');
INSERT INTO `items` VALUES (372, 'Yellow Pages', 10000, 'primalforce');
INSERT INTO `items` VALUES (371, 'Curry', 500, 'primalforce');
INSERT INTO `items` VALUES (370, 'Black boots', 300, 'primalforce');
INSERT INTO `items` VALUES (512, 'Tracking Device', 20000, 'adrenaline');
INSERT INTO `items` VALUES (507, 'Chicken Nuggets', 180, 'jebediah');
INSERT INTO `items` VALUES (365, 'Cheese Burger', 200, 'liberate');
INSERT INTO `items` VALUES (406, 'Fries', 110, 'adrenaline');
INSERT INTO `items` VALUES (415, 'Cheese Burger', 200, 'leskepimpin');
INSERT INTO `items` VALUES (736, 'Cheese Burger', 200, 'mafia');
INSERT INTO `items` VALUES (447, 'Fries', 110, 'adrenaline');
INSERT INTO `items` VALUES (738, 'Fish', 250, 'gunnboy');
INSERT INTO `items` VALUES (711, 'Chicken Nuggets', 180, 'fysical');
INSERT INTO `items` VALUES (735, 'Tracking Device', 20000, 'lexberg');
INSERT INTO `items` VALUES (469, 'Fish', 250, 'adrenaline');
INSERT INTO `items` VALUES (504, 'Weed seeds', 4000, 'jebediah');
INSERT INTO `items` VALUES (453, 'Cheese Burger', 200, 'adrenaline');
INSERT INTO `items` VALUES (501, 'Black boots', 300, 'xander');
INSERT INTO `items` VALUES (468, 'Cheese Burger', 200, 'adrenaline');
INSERT INTO `items` VALUES (493, 'Curry', 500, 'liberate');
INSERT INTO `items` VALUES (471, 'Bandanna', 500, 'adrenaline');
INSERT INTO `items` VALUES (494, 'Tracking Device', 20000, 'jebediah');
INSERT INTO `items` VALUES (476, 'Weed seeds', 4000, 'jebediah');
INSERT INTO `items` VALUES (478, 'Bling', 3000, 'jebediah');
INSERT INTO `items` VALUES (479, 'Yellow Pages', 10000, 'jebediah');
INSERT INTO `items` VALUES (574, 'Chain', 3000, 'jebediah');
INSERT INTO `items` VALUES (484, 'Cheese Burger', 200, 'sirice');
INSERT INTO `items` VALUES (483, 'Bling', 3000, 'sirice');
INSERT INTO `items` VALUES (502, 'Yellow Pages', 10000, 'jebediah');
INSERT INTO `items` VALUES (700, 'Crisps', 100, 'ninisenxx');
INSERT INTO `items` VALUES (526, 'Tracking Device', 20000, 'jebediah');
INSERT INTO `items` VALUES (527, 'Yellow Pages', 10000, 'adrenaline');
INSERT INTO `items` VALUES (528, 'Chain', 3000, 'jebediah');
INSERT INTO `items` VALUES (529, 'Cheese Burger', 200, 'jebediah');
INSERT INTO `items` VALUES (532, 'Bandanna', 500, 'link');
INSERT INTO `items` VALUES (534, 'Cheese Burger', 200, 'liberate');
INSERT INTO `items` VALUES (544, 'Weed seeds', 4000, 'jebediah');
INSERT INTO `items` VALUES (548, 'Bling', 3000, 'jebediah');
INSERT INTO `items` VALUES (708, 'Cheese Burger', 200, 'fysical');
INSERT INTO `items` VALUES (555, 'Tracking Device', 20000, 'jebediah');
INSERT INTO `items` VALUES (558, 'Black boots', 300, 'ziel');
INSERT INTO `items` VALUES (559, 'Fish', 250, 'ziel');
INSERT INTO `items` VALUES (712, 'Weed seeds', 4000, '3mansgirl');
INSERT INTO `items` VALUES (632, 'Bling', 3000, 'jebediah');
INSERT INTO `items` VALUES (698, 'Curry', 500, 'ninisenxx');
INSERT INTO `items` VALUES (630, 'Curry', 500, 'jebediah');
INSERT INTO `items` VALUES (576, 'Fries', 110, 'jebediah');
INSERT INTO `items` VALUES (605, 'Crisps', 100, 'liberate');
INSERT INTO `items` VALUES (578, 'Yellow Pages', 10000, 'jebediah');
INSERT INTO `items` VALUES (579, 'Fish', 250, 'jebediah');
INSERT INTO `items` VALUES (623, 'Chicken Nuggets', 180, 'jebediah');
INSERT INTO `items` VALUES (584, 'Curry', 500, 'jebediah');
INSERT INTO `items` VALUES (650, 'Chicken Nuggets', 180, 'angel');
INSERT INTO `items` VALUES (619, 'Yellow Pages', 10000, 'master9733');
INSERT INTO `items` VALUES (633, 'Cheese Burger', 200, 'jebediah');
INSERT INTO `items` VALUES (717, 'Fries', 110, 'jebediah');
INSERT INTO `items` VALUES (635, 'Curry', 500, 'leskepimpin');
INSERT INTO `items` VALUES (677, 'Chain', 3000, '3mansgirl');
INSERT INTO `items` VALUES (716, 'Tracking Device', 20000, 'nnacarate22');
INSERT INTO `items` VALUES (720, 'Cheese Burger', 200, 'jebediah');
INSERT INTO `items` VALUES (721, 'Fries', 110, 'insanephatsouljah');
INSERT INTO `items` VALUES (722, 'Fries', 110, 'jebediah');
INSERT INTO `items` VALUES (734, 'Black boots', 300, 'ninisenxx');

-- --------------------------------------------------------

-- 
-- Table structure for table `jail`
-- 

CREATE TABLE `jail` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `time_left` varchar(100) NOT NULL default '',
  `reason` varchar(100) NOT NULL default '',
  `bust_able` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3699 ;

-- 
-- Dumping data for table `jail`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `lotto`
-- 

CREATE TABLE `lotto` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `lotto`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `lotto_info`
-- 

CREATE TABLE `lotto_info` (
  `id` int(11) NOT NULL auto_increment,
  `price` int(11) NOT NULL default '0',
  `time_to` int(100) NOT NULL default '0',
  `jackpot` int(100) NOT NULL default '0',
  `lotto_num` int(50) NOT NULL default '0',
  `winning_ticket` int(50) NOT NULL default '0',
  `winner` char(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `lotto_info`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `married`
-- 

CREATE TABLE `married` (
  `id` int(32) NOT NULL auto_increment,
  `starter` varchar(100) NOT NULL default '',
  `other` varchar(100) NOT NULL default '',
  `done` enum('0','1') NOT NULL default '0',
  `ring` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `married`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `matches`
-- 

CREATE TABLE `matches` (
  `id` int(11) NOT NULL auto_increment,
  `username` char(40) NOT NULL default '',
  `bet` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

-- 
-- Dumping data for table `matches`
-- 

INSERT INTO `matches` VALUES (166, 'stateofwar', 8000000);
INSERT INTO `matches` VALUES (170, 'gunnboy', 100);

-- --------------------------------------------------------

-- 
-- Table structure for table `oc`
-- 

CREATE TABLE `oc` (
  `id` int(11) NOT NULL auto_increment,
  `leader` varchar(40) NOT NULL default '',
  `we` varchar(40) NOT NULL default '',
  `ee` varchar(40) NOT NULL default '',
  `driver` varchar(40) NOT NULL default '',
  `weapons` varchar(100) NOT NULL default '0-0-0-0-0',
  `explosives` varchar(100) NOT NULL default '0-0-0-0-0',
  `car` int(11) NOT NULL default '0',
  `we_inv` varchar(40) NOT NULL default '0',
  `ee_inv` varchar(40) NOT NULL default '0',
  `driver_inv` varchar(40) NOT NULL default '0',
  `share` enum('1','2') NOT NULL default '1',
  `we_ready` varchar(10) NOT NULL default '',
  `ee_ready` varchar(10) NOT NULL default '',
  `driver_ready` varchar(10) NOT NULL default '',
  `location` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- 
-- Dumping data for table `oc`
-- 

INSERT INTO `oc` VALUES (23, 'makebelieve', '0', '0', '0', '0-0-0-0-0', '0-0-0-0-0', 0, '0', '0', 'leskepimpin', '1', '0', '0', '0', 'Japan');
INSERT INTO `oc` VALUES (33, 'rafx10', 'liberate', '0', '0', '0-0-0-0-0', '0-0-0-0-0', 0, 'liberate', 'a3man', 'angel', '1', '0', '0', '0', 'China');
INSERT INTO `oc` VALUES (38, '3mansgirl', 'samdagod', '0', '0', '5-0-0-0-0', '0-0-0-0-0', 0, 'samdagod', 'Mafia', 'Engel', '1', 'Ready', '0', '0', 'England');

-- --------------------------------------------------------

-- 
-- Table structure for table `paper`
-- 

CREATE TABLE `paper` (
  `id` int(11) NOT NULL auto_increment,
  `edition` int(11) NOT NULL default '0',
  `news` text NOT NULL,
  `title` varchar(100) NOT NULL default '',
  `by` varchar(40) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `align` enum('Left','Right') NOT NULL default 'Left',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `paper`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `polls`
-- 

CREATE TABLE `polls` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `op1` varchar(40) NOT NULL default '',
  `op2` varchar(40) NOT NULL default '',
  `op3` varchar(40) NOT NULL default '',
  `op4` varchar(40) NOT NULL default '',
  `op5` varchar(40) NOT NULL default '',
  `v1` int(6) NOT NULL default '0',
  `v2` int(6) NOT NULL default '0',
  `v3` int(6) NOT NULL default '0',
  `v4` int(6) NOT NULL default '0',
  `v5` int(6) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `polls`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `replys`
-- 

CREATE TABLE `replys` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL default '',
  `text` text NOT NULL,
  `forum` enum('main','crew') NOT NULL default 'main',
  `idto` varchar(100) NOT NULL default '',
  `made` datetime NOT NULL default '0000-00-00 00:00:00',
  `crew` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

-- 
-- Dumping data for table `replys`
-- 

INSERT INTO `replys` VALUES (123, 'gunnboy', 'Max bet on the slots on japan is 4mill and the race track on france is 3mill;)', 'main', '83', '2006-01-06 09:04:43', '');
INSERT INTO `replys` VALUES (86, 'rafx10', 'http://www.gamesites200.com/gaming/vote.php?id=5026', 'main', '1', '2005-12-26 08:10:22', '');
INSERT INTO `replys` VALUES (85, 'makebelieve', 'I demand you to give me back my slots in China lol merry xmas', 'main', '58', '2005-12-26 07:58:54', '');
INSERT INTO `replys` VALUES (129, 'tiffer', '\\''Scum\\'', \\''Wannabe\\'', \\''Goon\\'', \\''Hired Thug\\'', \\''Criminal\\'', \\''Hitman\\'', \\''Wanted Criminal\\'', \\''Hired Gunner\\'', \\''Assassin\\'', \\''Boss\\'', \\''Don\\'', \\''Enemy of the State\\'', \\''Global Dominator\\'', \\''Legend\\'', \\''Legendary Legend\\''', 'main', '1', '2006-01-06 10:26:50', '');
INSERT INTO `replys` VALUES (80, 'unownking', 'hey hidious made it!\r\n\r\n\r\n/me kills hidious with his bullets(that he got and hopes nobody else has muahahahahahaha', 'main', '58', '2005-12-26 05:39:34', '');
INSERT INTO `replys` VALUES (77, 'hideousbeast', 'hello and this looks a lot better, merry christmas for yesterday :D', 'main', '58', '2005-12-26 12:53:12', '');
INSERT INTO `replys` VALUES (78, 'jebediah', 'yes i must agree with you hideousbeast you have done a great job getting this game up so quickly and smoothly it\\''s a great game, i think a congratulations is in order .\r\n\r\ncongratulations :P', 'main', '58', '2005-12-26 01:27:16', '');
INSERT INTO `replys` VALUES (124, 'gunnboy', 'if you bet max bet on japan slots one time....i will protect you for ever', 'main', '83', '2006-01-06 09:31:03', '');
INSERT INTO `replys` VALUES (70, 'unownking', 'aye merry xmas everyone', 'main', '58', '2005-12-25 04:49:15', '');
INSERT INTO `replys` VALUES (125, 'mafia', 'all of england = 4 mill ', 'main', '83', '2006-01-06 09:33:41', '');
INSERT INTO `replys` VALUES (69, 'jebediah', 'merry xmas! :)', 'main', '58', '2005-12-25 03:06:58', '');
INSERT INTO `replys` VALUES (67, 'tiffer', 'Please All Copy And Paste This Link In A New Window \r\n\r\nhttp://www.gamesites200.com/gaming/vote.php?id=5026', 'main', '1', '2005-12-24 09:12:43', '');
INSERT INTO `replys` VALUES (97, 'mafia', 'noobs', 'main', '58', '2005-12-26 01:03:25', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `rest`
-- 

CREATE TABLE `rest` (
  `id` int(11) NOT NULL auto_increment,
  `owner` varchar(40) NOT NULL default '',
  `prices` varchar(100) NOT NULL default '0-0-0-0-0-0-0-0-0',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` int(50) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `rest`
-- 

INSERT INTO `rest` VALUES (1, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'England', 0);
INSERT INTO `rest` VALUES (2, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'Japan', 0);
INSERT INTO `rest` VALUES (3, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'France', 0);
INSERT INTO `rest` VALUES (4, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'Usa', 0);
INSERT INTO `rest` VALUES (5, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'China', 0);
INSERT INTO `rest` VALUES (6, ':: Tiffer ::', '0-0-0-0-0-0-0-0-0', 'Canada', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `safe`
-- 

CREATE TABLE `safe` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `time` varchar(100) NOT NULL default '',
  `location` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `safe`
-- 

INSERT INTO `safe` VALUES (11, 'adrenaline', '1136542628', 'Japan');
INSERT INTO `safe` VALUES (9, 'tempestuous', '1136541680', 'France');
INSERT INTO `safe` VALUES (10, 'jebediah', '1136541880', 'England');
INSERT INTO `safe` VALUES (12, 'superbeast', '1136544987', 'France');

-- --------------------------------------------------------

-- 
-- Table structure for table `search`
-- 

CREATE TABLE `search` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `target` varchar(40) NOT NULL default '',
  `time` varchar(100) NOT NULL default '',
  `status` enum('0','1','2') NOT NULL default '0',
  `location` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=575 ;

-- 
-- Dumping data for table `search`
-- 

INSERT INTO `search` VALUES (135, 'inferno', 'mafia', '1134722823', '2', 'England');
INSERT INTO `search` VALUES (166, 'attendance', 'Mafia', '1134881586', '2', 'England');
INSERT INTO `search` VALUES (167, 'attendance', 'Mafia', '1134881586', '1', 'Japan');
INSERT INTO `search` VALUES (168, 'attendance', 'Mafia', '1134881586', '1', 'France');
INSERT INTO `search` VALUES (169, 'attendance', 'Mafia', '1134881586', '1', 'USA');
INSERT INTO `search` VALUES (170, 'attendance', 'Mafia', '1134881586', '1', 'China');
INSERT INTO `search` VALUES (171, 'attendance', 'Mafia', '1134881586', '1', 'Canada');
INSERT INTO `search` VALUES (187, 'angel', 'mafia', '1134944766', '1', 'France');
INSERT INTO `search` VALUES (186, 'angel', 'mafia', '1134944766', '1', 'Japan');
INSERT INTO `search` VALUES (185, 'angel', 'mafia', '1134944766', '2', 'England');
INSERT INTO `search` VALUES (189, 'angel', 'mafia', '1134944766', '1', 'China');
INSERT INTO `search` VALUES (190, 'angel', 'mafia', '1134944766', '1', 'Canada');
INSERT INTO `search` VALUES (574, 'stateofwar', 'Mafia', '1136590360', '0', 'Canada');
INSERT INTO `search` VALUES (433, 'adrenaline', 'angel', '1136543693', '1', 'USA');
INSERT INTO `search` VALUES (391, 'tempestuous', 'rafx10', '1136542553', '2', 'France');
INSERT INTO `search` VALUES (495, 'jebediah', 'adrenaline', '1136546725', '2', 'Canada');
INSERT INTO `search` VALUES (534, 'MAFIA', 'tempestuous', '1136562745', '2', 'Japan');
INSERT INTO `search` VALUES (454, 'adrenaline', 'angel', '1136547403', '2', 'England');
INSERT INTO `search` VALUES (432, 'adrenaline', 'angel', '1136543693', '1', 'France');
INSERT INTO `search` VALUES (309, 'a3man', 'toyboi', '1136345575', '0', 'England');
INSERT INTO `search` VALUES (291, 'EvilCouncil', 'EvilCouncil', '1136314464', '2', 'England');
INSERT INTO `search` VALUES (567, 'tiffer', 'Jebediah', '1136590123', '0', 'China');
INSERT INTO `search` VALUES (307, 'a3man', 'spider', '1136345031', '0', 'England');
INSERT INTO `search` VALUES (431, 'adrenaline', 'angel', '1136543693', '1', 'Japan');
INSERT INTO `search` VALUES (430, 'adrenaline', 'angel', '1136543693', '2', 'England');
INSERT INTO `search` VALUES (429, 'adrenaline', 'mafia', '1136543679', '1', 'Canada');
INSERT INTO `search` VALUES (428, 'adrenaline', 'mafia', '1136543679', '1', 'China');
INSERT INTO `search` VALUES (427, 'adrenaline', 'mafia', '1136543679', '1', 'USA');
INSERT INTO `search` VALUES (426, 'adrenaline', 'mafia', '1136543672', '1', 'France');
INSERT INTO `search` VALUES (367, 'liberate', 'StateOfwar', '1143717211', '0', 'Japan');
INSERT INTO `search` VALUES (368, 'jebediah', 'mafia', '1136544749', '2', 'England');
INSERT INTO `search` VALUES (564, 'tiffer', 'Jebediah', '1136590123', '0', 'Japan');
INSERT INTO `search` VALUES (565, 'tiffer', 'Jebediah', '1136590123', '0', 'France');
INSERT INTO `search` VALUES (566, 'tiffer', 'Jebediah', '1136590123', '0', 'USA');
INSERT INTO `search` VALUES (455, 'adrenaline', 'angel', '1136547403', '1', 'Japan');
INSERT INTO `search` VALUES (425, 'adrenaline', 'mafia', '1136543668', '1', 'Japan');
INSERT INTO `search` VALUES (422, 'adrenaline', 'Liberate', '1136543653', '1', 'China');
INSERT INTO `search` VALUES (423, 'adrenaline', 'Liberate', '1136543656', '1', 'Canada');
INSERT INTO `search` VALUES (424, 'adrenaline', 'mafia', '1136543664', '2', 'England');
INSERT INTO `search` VALUES (421, 'adrenaline', 'Liberate', '1136543648', '1', 'USA');
INSERT INTO `search` VALUES (420, 'adrenaline', 'Liberate', '1136543641', '1', 'France');
INSERT INTO `search` VALUES (419, 'adrenaline', 'Liberate', '1136543638', '2', 'Japan');
INSERT INTO `search` VALUES (418, 'adrenaline', 'Liberate', '1136543634', '1', 'England');
INSERT INTO `search` VALUES (353, 'agent1', 'jebediah', '1136515456', '2', 'Japan');
INSERT INTO `search` VALUES (354, 'liberate', 'StateOfwar', '1136517148', '1', 'England');
INSERT INTO `search` VALUES (355, 'liberate', 'StateOfwar', '1136517148', '2', 'Japan');
INSERT INTO `search` VALUES (356, 'liberate', 'StateOfwar', '1136517148', '1', 'France');
INSERT INTO `search` VALUES (357, 'liberate', 'StateOfwar', '1136517148', '1', 'USA');
INSERT INTO `search` VALUES (358, 'liberate', 'StateOfwar', '1136517148', '1', 'China');
INSERT INTO `search` VALUES (359, 'liberate', 'StateOfwar', '1136517148', '1', 'Canada');
INSERT INTO `search` VALUES (413, 'jebediah', 'liberate', '1136542998', '2', 'Japan');
INSERT INTO `search` VALUES (376, 'jebediah', 'rafx10', '1136544842', '2', 'France');
INSERT INTO `search` VALUES (563, 'tiffer', 'Jebediah', '1136590123', '0', 'England');
INSERT INTO `search` VALUES (552, 'rafx10', 'tempestuous', '1136572684', '2', 'Japan');
INSERT INTO `search` VALUES (380, 'jebediah', 'angel', '1136544899', '2', 'England');
INSERT INTO `search` VALUES (562, 'rafx10', 'Enthrone', '1136576815', '0', 'Canada');
INSERT INTO `search` VALUES (561, 'rafx10', 'Enthrone', '1136576815', '0', 'China');
INSERT INTO `search` VALUES (500, 'jebediah', 'agent1', '1136553347', '2', 'Japan');
INSERT INTO `search` VALUES (501, 'jebediah', 'quicksilva', '1136553544', '0', 'Japan');
INSERT INTO `search` VALUES (502, 'jebediah', 'lexberg', '1136553553', '0', 'Japan');
INSERT INTO `search` VALUES (395, 'tempestuous', 'angel', '1136542579', '2', 'England');
INSERT INTO `search` VALUES (573, 'stateofwar', 'Mafia', '1136590360', '0', 'China');
INSERT INTO `search` VALUES (572, 'stateofwar', 'Mafia', '1136590360', '0', 'USA');
INSERT INTO `search` VALUES (571, 'stateofwar', 'Mafia', '1136590360', '0', 'France');
INSERT INTO `search` VALUES (570, 'stateofwar', 'Mafia', '1136590360', '0', 'Japan');
INSERT INTO `search` VALUES (401, 'tempestuous', 'mafia', '1136542698', '2', 'England');
INSERT INTO `search` VALUES (560, 'rafx10', 'Enthrone', '1136576815', '0', 'USA');
INSERT INTO `search` VALUES (408, 'tempestuous', 'Liberate', '1136542755', '2', 'Japan');
INSERT INTO `search` VALUES (546, 'rafx10', 'Jebediah', '1136572694', '2', 'Japan');
INSERT INTO `search` VALUES (559, 'rafx10', 'Enthrone', '1136576815', '0', 'France');
INSERT INTO `search` VALUES (497, 'altman', 'mafia', '1136548745', '0', 'England');
INSERT INTO `search` VALUES (557, 'rafx10', 'Enthrone', '1136576815', '0', 'England');
INSERT INTO `search` VALUES (558, 'rafx10', 'Enthrone', '1136576815', '0', 'Japan');
INSERT INTO `search` VALUES (434, 'adrenaline', 'angel', '1136543693', '1', 'China');
INSERT INTO `search` VALUES (435, 'adrenaline', 'angel', '1136543693', '1', 'Canada');
INSERT INTO `search` VALUES (436, 'adrenaline', 'rafx10', '1136543746', '1', 'England');
INSERT INTO `search` VALUES (437, 'adrenaline', 'rafx10', '1136543746', '1', 'Japan');
INSERT INTO `search` VALUES (438, 'adrenaline', 'rafx10', '1136543746', '2', 'France');
INSERT INTO `search` VALUES (439, 'adrenaline', 'rafx10', '1136543746', '1', 'USA');
INSERT INTO `search` VALUES (440, 'adrenaline', 'rafx10', '1136543746', '1', 'China');
INSERT INTO `search` VALUES (441, 'adrenaline', 'rafx10', '1136543746', '1', 'Canada');
INSERT INTO `search` VALUES (442, 'adrenaline', 'leskepimpin', '1136543760', '1', 'England');
INSERT INTO `search` VALUES (443, 'adrenaline', 'leskepimpin', '1136543760', '1', 'Japan');
INSERT INTO `search` VALUES (444, 'adrenaline', 'leskepimpin', '1136543760', '1', 'France');
INSERT INTO `search` VALUES (445, 'adrenaline', 'leskepimpin', '1136543760', '1', 'USA');
INSERT INTO `search` VALUES (446, 'adrenaline', 'leskepimpin', '1136543760', '1', 'China');
INSERT INTO `search` VALUES (447, 'adrenaline', 'leskepimpin', '1136543760', '2', 'Canada');
INSERT INTO `search` VALUES (448, 'adrenaline', 'agent1', '1136543780', '1', 'England');
INSERT INTO `search` VALUES (449, 'adrenaline', 'agent1', '1136543780', '2', 'Japan');
INSERT INTO `search` VALUES (450, 'adrenaline', 'agent1', '1136543780', '1', 'France');
INSERT INTO `search` VALUES (451, 'adrenaline', 'agent1', '1136543780', '1', 'USA');
INSERT INTO `search` VALUES (452, 'adrenaline', 'agent1', '1136543780', '1', 'China');
INSERT INTO `search` VALUES (453, 'adrenaline', 'agent1', '1136543780', '1', 'Canada');
INSERT INTO `search` VALUES (456, 'adrenaline', 'angel', '1136547403', '1', 'France');
INSERT INTO `search` VALUES (457, 'adrenaline', 'angel', '1136547403', '1', 'USA');
INSERT INTO `search` VALUES (458, 'adrenaline', 'angel', '1136547403', '1', 'China');
INSERT INTO `search` VALUES (459, 'adrenaline', 'angel', '1136547403', '1', 'Canada');
INSERT INTO `search` VALUES (460, 'adrenaline', 'Liberate', '1136547413', '1', 'England');
INSERT INTO `search` VALUES (461, 'adrenaline', 'Liberate', '1136547413', '2', 'Japan');
INSERT INTO `search` VALUES (462, 'adrenaline', 'Liberate', '1136547413', '1', 'France');
INSERT INTO `search` VALUES (463, 'adrenaline', 'Liberate', '1136547413', '1', 'USA');
INSERT INTO `search` VALUES (464, 'adrenaline', 'Liberate', '1136547413', '1', 'China');
INSERT INTO `search` VALUES (465, 'adrenaline', 'Liberate', '1136547413', '1', 'Canada');
INSERT INTO `search` VALUES (466, 'adrenaline', 'mafia', '1136547423', '2', 'England');
INSERT INTO `search` VALUES (467, 'adrenaline', 'mafia', '1136547423', '1', 'Japan');
INSERT INTO `search` VALUES (468, 'adrenaline', 'mafia', '1136547423', '1', 'France');
INSERT INTO `search` VALUES (469, 'adrenaline', 'mafia', '1136547423', '1', 'USA');
INSERT INTO `search` VALUES (470, 'adrenaline', 'mafia', '1136547423', '1', 'China');
INSERT INTO `search` VALUES (471, 'adrenaline', 'mafia', '1136547423', '1', 'Canada');
INSERT INTO `search` VALUES (472, 'adrenaline', 'rafx10', '1136547436', '1', 'England');
INSERT INTO `search` VALUES (473, 'adrenaline', 'rafx10', '1136547436', '1', 'Japan');
INSERT INTO `search` VALUES (474, 'adrenaline', 'rafx10', '1136547436', '2', 'France');
INSERT INTO `search` VALUES (475, 'adrenaline', 'rafx10', '1136547436', '1', 'USA');
INSERT INTO `search` VALUES (476, 'adrenaline', 'rafx10', '1136547436', '1', 'China');
INSERT INTO `search` VALUES (477, 'adrenaline', 'rafx10', '1136547436', '1', 'Canada');
INSERT INTO `search` VALUES (478, 'adrenaline', 'leskepimpin', '1136547454', '1', 'England');
INSERT INTO `search` VALUES (479, 'adrenaline', 'leskepimpin', '1136547454', '1', 'Japan');
INSERT INTO `search` VALUES (480, 'adrenaline', 'leskepimpin', '1136547454', '1', 'France');
INSERT INTO `search` VALUES (481, 'adrenaline', 'leskepimpin', '1136547454', '1', 'USA');
INSERT INTO `search` VALUES (482, 'adrenaline', 'leskepimpin', '1136547454', '1', 'China');
INSERT INTO `search` VALUES (483, 'adrenaline', 'leskepimpin', '1136547454', '2', 'Canada');
INSERT INTO `search` VALUES (484, 'adrenaline', 'agent1', '1136547464', '1', 'England');
INSERT INTO `search` VALUES (485, 'adrenaline', 'agent1', '1136547464', '2', 'Japan');
INSERT INTO `search` VALUES (486, 'adrenaline', 'agent1', '1136547464', '1', 'France');
INSERT INTO `search` VALUES (487, 'adrenaline', 'agent1', '1136547464', '1', 'USA');
INSERT INTO `search` VALUES (488, 'adrenaline', 'agent1', '1136547464', '1', 'China');
INSERT INTO `search` VALUES (489, 'adrenaline', 'agent1', '1136547464', '1', 'Canada');
INSERT INTO `search` VALUES (490, 'jebediah', 'adrenaline', '1136546699', '1', 'England');
INSERT INTO `search` VALUES (491, 'jebediah', 'adrenaline', '1136546704', '1', 'USA');
INSERT INTO `search` VALUES (492, 'jebediah', 'adrenaline', '1136546709', '1', 'Japan');
INSERT INTO `search` VALUES (493, 'jebediah', 'adrenaline', '1136546713', '1', 'China');
INSERT INTO `search` VALUES (494, 'jebediah', 'adrenaline', '1136546719', '1', 'France');
INSERT INTO `search` VALUES (569, 'stateofwar', 'Mafia', '1136590360', '0', 'England');
INSERT INTO `search` VALUES (543, 'rafx10', 'InsanePhatSouljah', '1136572610', '2', 'China');
INSERT INTO `search` VALUES (568, 'tiffer', 'Jebediah', '1136590123', '0', 'Canada');

-- --------------------------------------------------------

-- 
-- Table structure for table `shop`
-- 

CREATE TABLE `shop` (
  `id` int(11) NOT NULL auto_increment,
  `owner` char(40) NOT NULL default '',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `profit` int(40) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `shop`
-- 

INSERT INTO `shop` VALUES (1, 'Mafia', 'England', 833333);
INSERT INTO `shop` VALUES (2, ':: Tiffer ::', 'Japan', 1333333);
INSERT INTO `shop` VALUES (3, '0', 'France', 704999);
INSERT INTO `shop` VALUES (4, ':: Tiffer ::', 'Usa', 66667);
INSERT INTO `shop` VALUES (5, ':: Tiffer ::', 'China', 6666);
INSERT INTO `shop` VALUES (6, ':: Tiffer ::', 'Canada', 3333);

-- --------------------------------------------------------

-- 
-- Table structure for table `site_stats`
-- 

CREATE TABLE `site_stats` (
  `id` int(11) NOT NULL auto_increment,
  `online` int(11) NOT NULL default '0',
  `CS` enum('0','1') NOT NULL default '0',
  `bullets` varchar(100) NOT NULL default '',
  `terr` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `site_stats`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `street`
-- 

CREATE TABLE `street` (
  `id` int(11) NOT NULL auto_increment,
  `leader` varchar(40) NOT NULL default '',
  `leader_car` varchar(40) NOT NULL default '',
  `prize` enum('Car','Money') NOT NULL default 'Car',
  `prize_win` int(11) NOT NULL default '0',
  `op_car` int(11) NOT NULL default '0',
  `op_ready` varchar(10) NOT NULL default '',
  `op_username` varchar(40) NOT NULL default '',
  `op_invite` varchar(40) NOT NULL default '',
  `location` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `street`
-- 

INSERT INTO `street` VALUES (1, 'Tiffer', 'Bugatti Veyron', 'Money', 100, 0, '', '', '', 'France');

-- --------------------------------------------------------

-- 
-- Table structure for table `swiss`
-- 

CREATE TABLE `swiss` (
  `id` int(32) NOT NULL auto_increment,
  `account` int(32) NOT NULL default '0',
  `pin` int(32) NOT NULL default '0',
  `money` int(32) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- 
-- Dumping data for table `swiss`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `ticket`
-- 

CREATE TABLE `ticket` (
  `id` int(32) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `answer` varchar(250) NOT NULL default '',
  `open` int(32) NOT NULL default '0',
  `started` varchar(100) NOT NULL default '',
  `bug` enum('0','1') NOT NULL default '0',
  `on` datetime NOT NULL default '0000-00-00 00:00:00',
  `answered_by` varchar(40) NOT NULL default '0',
  `status` enum('Pending','Fixed') NOT NULL default 'Pending',
  `cat` enum('Crimes','Casinos','Money','Street Races','OC','Getaway','Other') NOT NULL default 'Crimes',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

-- 
-- Dumping data for table `ticket`
-- 

INSERT INTO `ticket` VALUES (81, 'how to get money', 'how to collect money', 'None yet!', 1, 'davidbarnes67', '0', '0000-00-00 00:00:00', '0', 'Pending', 'Crimes');
INSERT INTO `ticket` VALUES (83, 'Mission 3', 'in mission three is tells you to do a jail break. there is no-one there to jail break ???', 'None yet!', 1, 'a3man', '0', '0000-00-00 00:00:00', '0', 'Pending', 'Crimes');
INSERT INTO `ticket` VALUES (78, 'killing', 'i got some bullets from a mission and i want to know how u go around klling people is it go from the bottom then up then kill???', 'i dont understand what your asking.. but if its about how many bullets kill the players (kill list) that is not givin out.. it has to be made by the players... if you have further questions message me when i am online and i can talk to you about it m', 0, 'unownking', '0', '0000-00-00 00:00:00', '0', 'Pending', 'Crimes');

-- --------------------------------------------------------

-- 
-- Table structure for table `topics`
-- 

CREATE TABLE `topics` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `topictext` text NOT NULL,
  `forum` enum('main','crew') NOT NULL default 'main',
  `locked` enum('0','1') NOT NULL default '0',
  `sticky` enum('0','1') NOT NULL default '0',
  `lastreply` varchar(100) NOT NULL default '',
  `made` datetime NOT NULL default '0000-00-00 00:00:00',
  `crew` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

-- 
-- Dumping data for table `topics`
-- 

INSERT INTO `topics` VALUES (58, 'tiffer', '<b>Welcome To BTM</b>', 'Just Like To Welcome Everyone Back. Props Will Be Handed Back Soon. Merry Xmas', 'main', '0', '1', '999999999999999', '2005-12-25 01:35:55', '');
INSERT INTO `topics` VALUES (81, 'gunnboy', 'IF YOU ARE LOWER THEN WANNABE', 'I THINK WE SHUD HELP LOWER RANKS TO RANK....SO I DISATED EVRY MEBER THAT ARE LOWER THEN WANNABE OR ARE WANNABE MSG ME GUNNBOY I THINK IT''S BETTER FOR THEM', 'crew', '0', '0', '1136579159', '2006-01-06 08:20:59', '');
INSERT INTO `topics` VALUES (82, 'stateofwar', 'OC''s', 'Post All OC''s Here Only', 'main', '0', '0', '1136579379', '2006-01-06 08:24:39', '');
INSERT INTO `topics` VALUES (83, 'stateofwar', 'Max Bets', 'Please Post Max Bets Here Only', 'main', '0', '0', '1136583221', '2006-01-06 08:25:05', '');
INSERT INTO `topics` VALUES (84, 'gunnboy', 'WAAAAAAAAAAAR!!!!!!!', 'HAHAHA JUST JONKING QHIT YOU GUY''S;)', 'crew', '0', '0', '1136584238', '2006-01-06 09:45:38', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `transfers`
-- 

CREATE TABLE `transfers` (
  `id` int(11) NOT NULL auto_increment,
  `to` char(40) NOT NULL default '',
  `from` char(40) NOT NULL default '',
  `amount` int(100) NOT NULL default '0',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=246 ;

-- 
-- Dumping data for table `transfers`
-- 

INSERT INTO `transfers` VALUES (220, 'mafia', 'agent1', 3000000, '2006-01-05 04:33:44');
INSERT INTO `transfers` VALUES (219, 'mafia', 'agent1', 8000000, '2006-01-05 04:33:03');
INSERT INTO `transfers` VALUES (218, 'mafia', 'agent1', 20000000, '2006-01-05 04:31:19');
INSERT INTO `transfers` VALUES (217, 'mafia', 'agent1', 20000000, '2006-01-05 04:30:20');
INSERT INTO `transfers` VALUES (216, 'agent1', 'realdeal', 150000, '2006-01-04 04:06:09');
INSERT INTO `transfers` VALUES (215, 'a3man', 'toyboi', 9990, '2006-01-04 02:19:02');
INSERT INTO `transfers` VALUES (214, 'a3man', 'toyboi', 10, '2006-01-04 02:18:36');
INSERT INTO `transfers` VALUES (213, 'agent1', 'a3man', 530, '2006-01-04 02:07:22');
INSERT INTO `transfers` VALUES (212, 'agent1', 'realdeal', 9000, '2006-01-03 10:38:25');
INSERT INTO `transfers` VALUES (211, 'MrMcBadman', 'rafx10', 200000, '2006-01-03 07:18:37');
INSERT INTO `transfers` VALUES (210, 'MrMcBadman', 'a3man', 50000, '2006-01-03 07:00:28');
INSERT INTO `transfers` VALUES (209, 'agent1', 'a3man', 35512, '2006-01-03 06:25:49');
INSERT INTO `transfers` VALUES (208, 'agent1', 'a3man', 35, '2006-01-03 06:25:13');
INSERT INTO `transfers` VALUES (207, 'a3man', 'rafx10', 100000, '2006-01-03 05:03:36');
INSERT INTO `transfers` VALUES (206, 'a3man', 'rafx10', 1000000, '2006-01-03 03:45:22');
INSERT INTO `transfers` VALUES (205, 'angel', 'master9733', 1000000, '2006-01-01 11:41:07');
INSERT INTO `transfers` VALUES (204, 'Mafia', 'master9733', 150000, '2005-12-30 11:13:32');
INSERT INTO `transfers` VALUES (203, 'master9733', 'davidbarnes67', 5000, '2005-12-30 07:14:15');
INSERT INTO `transfers` VALUES (202, 'master9733', 'davidbarnes67', 5, '2005-12-30 07:13:43');
INSERT INTO `transfers` VALUES (201, 'master9733', 'davidbarnes67', 12, '2005-12-30 06:51:41');
INSERT INTO `transfers` VALUES (200, 'master9733', 'angel', 1000000, '2005-12-30 06:33:28');
INSERT INTO `transfers` VALUES (199, 'master9733', 'mafia', 9574, '2005-12-30 10:56:22');
INSERT INTO `transfers` VALUES (198, 'rafx10', 'blade377uk', 92631, '2005-12-29 11:09:55');
INSERT INTO `transfers` VALUES (197, 'blade377uk', 'rafx10', 100000, '2005-12-29 11:02:21');
INSERT INTO `transfers` VALUES (196, 'mafia', 'alejdin', 9000, '2005-12-29 05:02:37');
INSERT INTO `transfers` VALUES (195, 'blade377uk', 'rafx10', 100000, '2005-12-28 04:20:51');
INSERT INTO `transfers` VALUES (194, 'Rafx10', 'capone01', 726314, '2005-12-28 06:54:35');
INSERT INTO `transfers` VALUES (193, 'sirice', 'jebediah', 240000, '2005-12-27 12:02:41');
INSERT INTO `transfers` VALUES (192, 'rafx10', 'tiffer', 25000000, '2005-12-27 12:54:47');
INSERT INTO `transfers` VALUES (191, 'jebediah', 'adrenaline', 7000000, '2005-12-26 11:12:39');
INSERT INTO `transfers` VALUES (190, 'jebediah', 'adrenaline', 10000000, '2005-12-26 10:26:08');
INSERT INTO `transfers` VALUES (189, 'Rafx10', 'capone01', 200000, '2005-12-26 04:28:11');
INSERT INTO `transfers` VALUES (188, 'Rafx10', 'capone01', 83548, '2005-12-26 03:52:29');
INSERT INTO `transfers` VALUES (187, 'Capone01', 'rafx10', 200000, '2005-12-26 03:51:40');
INSERT INTO `transfers` VALUES (186, 'adrenaline', 'jebediah', 30000, '2005-12-26 01:00:59');
INSERT INTO `transfers` VALUES (221, 'ninisenxx', 'fysical', 9000, '2006-01-05 04:38:37');
INSERT INTO `transfers` VALUES (222, 'ninisenxx', 'fysical', 20000, '2006-01-05 05:50:22');
INSERT INTO `transfers` VALUES (223, 'fysical', 'ninisenxx', 400000, '2006-01-05 05:51:44');
INSERT INTO `transfers` VALUES (224, 'fysical', 'gunnboy', 10, '2006-01-05 07:17:29');
INSERT INTO `transfers` VALUES (225, 'fysical', 'gunnboy', 100000, '2006-01-05 07:18:55');
INSERT INTO `transfers` VALUES (226, 'gunnboy', 'fysical', 100000, '2006-01-05 07:23:27');
INSERT INTO `transfers` VALUES (227, 'ninisenxx', 'fysical', 60000, '2006-01-05 11:56:36');
INSERT INTO `transfers` VALUES (228, 'jebediah', 'agent1', 1000000, '2006-01-06 02:06:47');
INSERT INTO `transfers` VALUES (229, 'FySicaL', 'ninisenxx', 869000, '2006-01-06 02:26:50');
INSERT INTO `transfers` VALUES (230, 'jebediah', 'agent1', 1000000, '2006-01-06 02:28:27');
INSERT INTO `transfers` VALUES (231, 'adrenaline', 'jebediah', 1600000, '2006-01-06 12:06:07');
INSERT INTO `transfers` VALUES (232, 'adrenaline', 'jebediah', 3000000, '2006-01-06 12:06:54');
INSERT INTO `transfers` VALUES (233, 'jebediah', 'adrenaline', 3000000, '2006-01-06 12:07:51');
INSERT INTO `transfers` VALUES (234, 'tempestuous', 'jebediah', 3000000, '2006-01-06 12:08:02');
INSERT INTO `transfers` VALUES (235, 'tempestuous', 'jebediah', 3000000, '2006-01-06 12:10:30');
INSERT INTO `transfers` VALUES (236, 'tempestuous', 'jebediah', 3000000, '2006-01-06 12:11:10');
INSERT INTO `transfers` VALUES (237, 'adrenaline', 'superbeast', 5998000, '2006-01-06 12:36:56');
INSERT INTO `transfers` VALUES (238, 'jebediah', 'tempestuous', 2000000, '2006-01-06 12:58:16');
INSERT INTO `transfers` VALUES (239, 'adrenaline', 'jebediah', 2000000, '2006-01-06 12:58:50');
INSERT INTO `transfers` VALUES (240, 'gunnboy', 'mafia', 1000000, '2006-01-06 02:38:04');
INSERT INTO `transfers` VALUES (241, 'realdeal', 'mafia', 375464, '2006-01-06 04:10:59');
INSERT INTO `transfers` VALUES (242, 'nothingman', 'rafx10', 6000000, '2006-01-06 05:03:01');
INSERT INTO `transfers` VALUES (243, 'ninisenxx', 'fysical', 793000, '2006-01-06 06:34:01');
INSERT INTO `transfers` VALUES (244, 'fysical', 'gunnboy', 100000, '2006-01-06 08:03:35');
INSERT INTO `transfers` VALUES (245, 'Engel', 'mafia', 1000000, '2006-01-06 10:13:04');

-- --------------------------------------------------------

-- 
-- Table structure for table `turf`
-- 

CREATE TABLE `turf` (
  `id` int(11) NOT NULL auto_increment,
  `location` char(40) NOT NULL default '',
  `owner` char(60) NOT NULL default '',
  `profit` int(11) NOT NULL default '0',
  `damage` int(3) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `turf`
-- 

INSERT INTO `turf` VALUES (1, 'England', 'Tiffer', 410000, 0);
INSERT INTO `turf` VALUES (2, 'Japan', 'Admin', 410000, 0);
INSERT INTO `turf` VALUES (3, 'France', 'Tiffer', 410000, 0);
INSERT INTO `turf` VALUES (4, 'Usa', 'Admin', 410000, 0);
INSERT INTO `turf` VALUES (5, 'China', 'Admin', 410000, 0);
INSERT INTO `turf` VALUES (6, 'Canada', 'Admin', 410000, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `updates`
-- 

CREATE TABLE `updates` (
  `id` int(32) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL default '',
  `update` text NOT NULL,
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `updates`
-- 

INSERT INTO `updates` VALUES (6, 'tiffer', 'Looking For Staff That Know PHP Must Be Advanced @ Script writing. If you Cant Write Scripts Dont Ask.', '2005-12-26 12:45:02');
INSERT INTO `updates` VALUES (7, 'tiffer', 'Auction House Added', '2006-01-06 09:43:16');

-- --------------------------------------------------------

-- 
-- Table structure for table `user_info`
-- 

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `crimes` int(100) NOT NULL default '0',
  `gtas` int(100) NOT NULL default '0',
  `busts` int(100) NOT NULL default '0',
  `get_aways` int(11) NOT NULL default '0',
  `food_crimes` int(40) NOT NULL default '0',
  `ocs` int(11) NOT NULL default '0',
  `kill_skill` int(11) NOT NULL default '0',
  `wl` varchar(40) NOT NULL default '0:0',
  `exp` int(3) NOT NULL default '0',
  `level` int(11) NOT NULL default '0',
  `last_train` varchar(100) NOT NULL default '',
  `jewl` varchar(40) NOT NULL default '',
  `foot` varchar(40) NOT NULL default '',
  `jail_able` enum('0','1') NOT NULL default '0',
  `last_bribe` varchar(100) NOT NULL default '',
  `jail_untill` varchar(100) NOT NULL default '',
  `lang` enum('English','Dutch') NOT NULL default 'English',
  `respect` int(11) NOT NULL default '0',
  `respect_rec` varchar(11) NOT NULL default '0',
  `last_respect` varchar(100) NOT NULL default '',
  `mem_gym` enum('0','1') NOT NULL default '0',
  `dealing` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=533 ;

-- 
-- Dumping data for table `user_info`
-- 

INSERT INTO `user_info` VALUES (512, 'Advocate', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (513, 'LTFC', 1, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136920942', '0', 0);
INSERT INTO `user_info` VALUES (511, 'lamb', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136918903', '0', 0);
INSERT INTO `user_info` VALUES (510, 'MrMcBadman', 49, 0, 0, 0, 0, 0, 0, '0:0', 30, 0, '1136458302', '', '', '0', '', '', 'English', 0, '0', '1136918433', '1', 3);
INSERT INTO `user_info` VALUES (509, 'agent1', 295, 159, 0, 0, 0, 0, 0, '12:11', 55, 23, '1136531938', 'Chain', '', '0', '', '', 'English', 0, '0', '1136916189', '1', 0);
INSERT INTO `user_info` VALUES (508, 'bloody', 19, 12, 0, 0, 0, 0, 0, '0:2', 50, 1, '1136397661', '', '', '0', '', '', 'English', 0, '0', '1136899061', '1', 0);
INSERT INTO `user_info` VALUES (507, 'alpacino', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (506, 'Revolution', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (505, '3mansgirl', 133, 72, 0, 0, 0, 0, 0, '0:0', 0, 0, '', 'Bling', '', '0', '', '', 'English', 0, '0', '1136860545', '0', 0);
INSERT INTO `user_info` VALUES (504, 'a3man', 228, 108, 0, 0, 0, 0, 0, '5:4', 50, 6, '1136370551', 'Bling', '', '0', '', '', 'English', 0, '0', '1136860390', '1', 0);
INSERT INTO `user_info` VALUES (503, '3man', 6, 2, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136860184', '0', 0);
INSERT INTO `user_info` VALUES (502, 'ScarFace', 7, 3, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136848837', '0', 0);
INSERT INTO `user_info` VALUES (501, 'EvilCouncil', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136847842', '0', 3);
INSERT INTO `user_info` VALUES (500, 'Kanti', 2, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136847666', '0', 0);
INSERT INTO `user_info` VALUES (499, 'TrickyMicky', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136818993', '0', 0);
INSERT INTO `user_info` VALUES (498, 'loosecannon', 5, 2, 0, 0, 0, 0, 0, '0:0', 30, 0, '1136215029', '', '', '0', '', '', 'English', 0, '0', '1136818545', '1', 0);
INSERT INTO `user_info` VALUES (497, 'hell', 9, 4, 0, 0, 0, 0, 0, '0:0', 30, 0, '1136184852', '', '', '0', '', '', 'English', 0, '0', '1136787735', '1', 0);
INSERT INTO `user_info` VALUES (496, 'nnacarate22', 67, 30, 0, 0, 0, 0, 0, '0:0', 20, 0, '1136522678', '', '', '0', '', '', 'English', 0, '0', '1137037703', '1', 0);
INSERT INTO `user_info` VALUES (495, 'Rambo', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (494, 'looney', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136752028', '0', 0);
INSERT INTO `user_info` VALUES (493, 'football', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (492, 'pukowietz', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (491, 'sowa', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136897933', '0', 0);
INSERT INTO `user_info` VALUES (490, 'LilOB', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (489, 'RIPeR', 2, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136835946', '0', 0);
INSERT INTO `user_info` VALUES (488, 'ataya', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136656251', '0', 0);
INSERT INTO `user_info` VALUES (487, 'Twinkle', 1, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136629890', '0', 0);
INSERT INTO `user_info` VALUES (486, 'Jcon', 7, 4, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136603037', '0', 0);
INSERT INTO `user_info` VALUES (485, 'GuNnBoY', 350, 178, 0, 0, 0, 0, 1, '4:3', 60, 9, '1136586873', '', '', '0', '', '', 'English', 5, '0', '1137192133', '1', 0);
INSERT INTO `user_info` VALUES (484, 'jujitsu', 0, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136586681', '0', 0);
INSERT INTO `user_info` VALUES (483, 'baslan', 1, 1, 0, 0, 0, 0, 0, '0:0', 5, 0, '1135980337', '', '', '0', '', '', 'English', 0, '0', '1136585031', '1', 0);
INSERT INTO `user_info` VALUES (482, 'thepunisher91', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136584352', '0', 0);
INSERT INTO `user_info` VALUES (481, 'sierof', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136576438', '0', 0);
INSERT INTO `user_info` VALUES (480, 'danfordy733uk', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (479, 'Ziel', 23, 14, 0, 0, 0, 0, 0, '0:1', 90, 0, '1135950457', 'Black boots', '', '0', '', '', 'English', 0, '0', '1136548876', '1', 2);
INSERT INTO `user_info` VALUES (478, 'Ultrabeat', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (477, 'master9733', 465, 217, 0, 0, 0, 0, 0, '4:4', 30, 12, '1136458373', 'Chain', '', '0', '', '', 'English', 0, '0', '1136539105', '1', 0);
INSERT INTO `user_info` VALUES (476, 'StateOfwar', 40, 22, 0, 0, 0, 0, 0, '3:1', 40, 81, '1136578459', '', '', '0', '', '', 'English', 1, '0', '1137180606', '1', 0);
INSERT INTO `user_info` VALUES (475, 'Alejdin', 89, 47, 0, 0, 0, 0, 0, '0:0', 80, 1, '1136574638', '', '', '0', '', '', 'English', 2, '0', '1137165006', '1', 0);
INSERT INTO `user_info` VALUES (474, 'davidbarnes67', 44, 19, 0, 0, 0, 0, 0, '0:1', 95, 0, '1135970851', '', '', '0', '', '', 'English', 0, '0', '1136415696', '1', 7);
INSERT INTO `user_info` VALUES (473, 'demonfromhell', 1, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136587424', '0', 0);
INSERT INTO `user_info` VALUES (472, 'danfordy377uk', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (471, 'Toaster', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136390523', '0', 0);
INSERT INTO `user_info` VALUES (470, 'fuck', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (469, 'silverfox', 8, 1, 0, 0, 0, 0, 0, '0:1', 35, 0, '1135777859', '', '', '0', '', '', 'English', 0, '0', '1136380963', '1', 0);
INSERT INTO `user_info` VALUES (468, '143143143', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136378613', '0', 0);
INSERT INTO `user_info` VALUES (467, 'thunderfalcon', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (466, 'Donketz', 2, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136326019', '0', 0);
INSERT INTO `user_info` VALUES (465, 'LadyLunos', 3, 1, 0, 0, 0, 0, 0, '0:0', 15, 0, '1135717642', '', '', '0', '', '', 'English', 0, '0', '1137085322', '1', 0);
INSERT INTO `user_info` VALUES (464, 'xander', 36, 20, 0, 0, 0, 0, 0, '0:0', 50, 1, '1135731471', 'Black boots', '', '0', '', '', 'English', 0, '0', '1136318466', '1', 0);
INSERT INTO `user_info` VALUES (463, 'samdagod', 45, 18, 0, 0, 0, 0, 0, '0:1', 35, 1, '1136585763', '', '', '0', '', '', 'English', 1, '0', '1137004484', '1', 7);
INSERT INTO `user_info` VALUES (462, 'Flixion', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136308619', '0', 0);
INSERT INTO `user_info` VALUES (461, 'blade377uk', 207, 98, 0, 0, 0, 0, 0, '4:5', 5, 6, '1135899888', 'Black boots', '', '0', '', '', 'English', 0, '0', '1136287697', '1', 0);
INSERT INTO `user_info` VALUES (460, 'FrAnZfErDiNaNd', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136258264', '1', 0);
INSERT INTO `user_info` VALUES (459, 'sirice', 15, 7, 0, 0, 0, 0, 0, '0:1', 45, 0, '1135687479', '', '', '0', '', '', 'English', 0, '0', '1136265932', '1', 0);
INSERT INTO `user_info` VALUES (458, 'solomona', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (457, 'Tempestuous', 226, 105, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 4, '0', '1137142439', '0', 5);
INSERT INTO `user_info` VALUES (455, 'KeyLowz', 16, 5, 0, 0, 0, 0, 0, '0:1', 60, 0, '1135713312', '', '', '0', '', '', 'English', 0, '0', '1136172737', '1', 0);
INSERT INTO `user_info` VALUES (456, 'MakeBelieve', 47, 27, 0, 0, 0, 0, 0, '0:0', 20, 6, '1136509436', '', '', '0', '', '', 'English', 2, '0', '1137113310', '1', 0);
INSERT INTO `user_info` VALUES (454, 'Link', 45, 18, 0, 0, 0, 0, 0, '0:1', 70, 1, '1135790495', '', '', '0', '', '', 'English', 0, '0', '1136168643', '1', 0);
INSERT INTO `user_info` VALUES (453, 'AdrenalinE', 413, 237, 0, 0, 0, 0, 1, '0:1', 55, 3, '1135734460', '', '', '0', '', '', 'English', 8, '0', '1136796195', '1', 0);
INSERT INTO `user_info` VALUES (452, 'HideousBeast', 20, 8, 0, 0, 0, 0, 0, '0:0', 5, 0, '1136451711', '', '', '0', '', '', 'English', 0, '0', '1137055727', '1', 0);
INSERT INTO `user_info` VALUES (451, 'Capone01', 56, 29, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136094592', '0', 1);
INSERT INTO `user_info` VALUES (450, 'imback', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136093884', '1', 0);
INSERT INTO `user_info` VALUES (449, 'jebediah', 923, 480, 0, 0, 0, 0, 4, '24:16', 10, 49, '1136551384', '', '', '0', '', '', 'English', 8, '0', '1136758840', '1', 0);
INSERT INTO `user_info` VALUES (448, 'Multigood', 4, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136078260', '0', 0);
INSERT INTO `user_info` VALUES (447, 'Mafia', 316, 131, 0, 0, 0, 0, 3, '1:10', 90, 9, '1136583717', 'Bandanna', '', '0', '', '', 'English', 6, '0', '1136682896', '1', 0);
INSERT INTO `user_info` VALUES (446, 'unownking', 81, 41, 0, 0, 0, 0, 0, '4:9', 85, 3, '1135576452', '', '', '0', '', '', 'English', 0, '0', '1136074887', '1', 4);
INSERT INTO `user_info` VALUES (445, 'Addict', 8, 3, 0, 0, 0, 0, 0, '0:0', 15, 0, '1135469167', '', '', '0', '', '', 'English', 0, '0', '1136073117', '1', 0);
INSERT INTO `user_info` VALUES (444, 'chin', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136064193', '0', 0);
INSERT INTO `user_info` VALUES (443, 'Liberate', 105, 60, 0, 0, 0, 0, 2, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136673947', '0', 0);
INSERT INTO `user_info` VALUES (442, 'leskepimpin', 72, 44, 0, 0, 0, 0, 0, '0:0', 95, 1, '1136413894', '', '', '0', '', '', 'English', 5, '0', '1136819267', '1', 7);
INSERT INTO `user_info` VALUES (441, 'primalforce', 70, 39, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136057052', '0', 1);
INSERT INTO `user_info` VALUES (440, 'angel', 244, 117, 0, 0, 0, 0, 0, '0:1', 10, 8, '1136519853', '', '', '0', '', '', 'English', 6, '0', '1136763282', '1', 0);
INSERT INTO `user_info` VALUES (438, 'Tiffer', 89, 59, 0, 0, 0, 0, 1, '0:0', 5, 1, '1136480863', 'Chain', '', '0', '', '', 'English', 0, '0', '1136729876', '1', 0);
INSERT INTO `user_info` VALUES (439, 'Rafx10', 1141, 544, 0, 0, 0, 0, 3, '0:1', 20, 4, '1136572919', '', '', '0', '', '', 'English', 8, '0', '1136660500', '1', 0);
INSERT INTO `user_info` VALUES (515, 'toyboi', 4, 3, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1136945698', '0', 0);
INSERT INTO `user_info` VALUES (514, 'realdeal', 13, 7, 0, 0, 0, 0, 0, '0:2', 60, 0, '1136564996', '', '', '0', '', '', 'English', 0, '0', '1136932477', '1', 0);
INSERT INTO `user_info` VALUES (516, 'spider', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (517, 'Renegade', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (518, 'tomdakilla', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (519, 'FySicaL', 170, 80, 0, 0, 0, 0, 0, '0:0', 80, 0, '1136500675', '', '', '0', '', '', 'English', 0, '0', '1137033825', '1', 0);
INSERT INTO `user_info` VALUES (520, 'ninisenxx', 141, 65, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137034358', '0', 0);
INSERT INTO `user_info` VALUES (521, 'GangsterX', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137062975', '0', 0);
INSERT INTO `user_info` VALUES (522, 'CpKillR', 11, 2, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137091802', '0', 0);
INSERT INTO `user_info` VALUES (523, 'Lexberg', 34, 17, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137083347', '0', 0);
INSERT INTO `user_info` VALUES (524, 'blood', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '', '0', 0);
INSERT INTO `user_info` VALUES (525, 'Quiksilva', 1, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137088666', '1', 0);
INSERT INTO `user_info` VALUES (526, 'SuperBeast', 4, 1, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137149069', '0', 0);
INSERT INTO `user_info` VALUES (527, 'InsanePhatSouljah', 16, 6, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137149580', '0', 0);
INSERT INTO `user_info` VALUES (528, 'Altman', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137149767', '0', 0);
INSERT INTO `user_info` VALUES (529, 'NothingMan', 10, 2, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137158408', '0', 0);
INSERT INTO `user_info` VALUES (530, 'King', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137166687', '0', 0);
INSERT INTO `user_info` VALUES (531, 'Enthrone', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137171360', '0', 0);
INSERT INTO `user_info` VALUES (532, 'Engel', 10, 6, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '0', '', '', 'English', 0, '0', '1137190124', '0', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `password` varchar(60) NOT NULL default '',
  `activated` enum('0','1') NOT NULL default '1',
  `money` varchar(100) NOT NULL default '500',
  `online` varchar(100) NOT NULL default '',
  `crimechance` varchar(100) NOT NULL default '0-0-0-0-0-0-0',
  `lastcrime` varchar(100) NOT NULL default '',
  `rankpoints` varchar(100) NOT NULL default '0',
  `userlevel` enum('0','1','2') NOT NULL default '0',
  `lasttop` varchar(100) NOT NULL default '',
  `status` enum('Alive','Dead','Banned') NOT NULL default 'Alive',
  `regged` datetime NOT NULL default '0000-00-00 00:00:00',
  `rank` enum('Scum','Wannabe','Goon','Hired Thug','Criminal','Hitman','Wanted Criminal','Hired Gunner','Assassin','Boss','Don','Enemy of the State','Global Dominator','Legend','Legendary Legend') NOT NULL default 'Scum',
  `layout` varchar(100) NOT NULL default '17',
  `email` varchar(100) NOT NULL default '',
  `quote` text NOT NULL,
  `image` varchar(100) NOT NULL default 'images/default.jpg',
  `location` enum('England','Japan','France','Usa','China','Canada') NOT NULL default 'England',
  `bullets` int(11) NOT NULL default '0',
  `gtachance` varchar(100) NOT NULL default '0-0-0',
  `lastgta` varchar(100) NOT NULL default '',
  `lasttravel` varchar(100) NOT NULL default '',
  `bank` int(40) NOT NULL default '0',
  `banktime` varchar(100) NOT NULL default '',
  `last_race` varchar(100) NOT NULL default '',
  `street` enum('0','1') NOT NULL default '0',
  `music` mediumtext NOT NULL,
  `crew` varchar(60) NOT NULL default '0',
  `get_away_time` varchar(100) NOT NULL default '',
  `get_away` enum('0','1') NOT NULL default '0',
  `health` int(3) NOT NULL default '100',
  `energy` int(3) NOT NULL default '2147483647',
  `last_ext` varchar(100) NOT NULL default '',
  `lasttran` varchar(100) NOT NULL default '',
  `drugprices` varchar(100) NOT NULL default '100-100-100-100-100',
  `drugs` varchar(100) NOT NULL default '0-0-0-0-0',
  `l_ip` varchar(15) NOT NULL default '127.0.0.1',
  `r_ip` varchar(15) NOT NULL default '',
  `crew_invite` int(11) NOT NULL default '0',
  `referral` int(11) NOT NULL default '0',
  `weapon` enum('None','Sig Sauer P229','Jackhammer automatic shotgun','Heckler und Koch MP-5k','FN SCAR','Browning M2HB') NOT NULL default 'None',
  `mission` int(11) NOT NULL default '1',
  `points` int(11) NOT NULL default '0',
  `lpv` varchar(32) NOT NULL default '',
  `page` varchar(10) NOT NULL default '',
  `editor` enum('0','1') NOT NULL default '0',
  `helper` enum('0','1') NOT NULL default '0',
  `food_chance` varchar(100) NOT NULL default '0-0-0',
  `last_food` varchar(100) NOT NULL default '',
  `last_order` varchar(100) NOT NULL default '',
  `freinds` varchar(40) NOT NULL default 'None',
  `protection` enum('None','Doberman','Body Guard','Armoured Car','House','Safehouse') NOT NULL default 'None',
  `plane` enum('None','Fokker','Boeing 777','LV-AZF','PR-GOC','F-HSUN') NOT NULL default 'None',
  `married` varchar(100) NOT NULL default '0',
  `oc` enum('0','1') NOT NULL default '0',
  `last_oc` varchar(100) NOT NULL default '',
  `atm` enum('False','True') NOT NULL default 'False',
  `last_bank` varchar(100) NOT NULL default '',
  `last_attempted` varchar(100) NOT NULL default '',
  `last_kill` varchar(100) NOT NULL default '',
  `ver_code` varchar(20) NOT NULL default '456',
  `last_script_check` varchar(100) NOT NULL default '',
  `global` enum('0','1') NOT NULL default '0',
  `poll` varchar(100) NOT NULL default '',
  `clicks` int(11) NOT NULL default '0',
  `click_rate` varchar(100) NOT NULL default '',
  `tut` enum('0','1') NOT NULL default '0',
  `drugs_from` varchar(40) NOT NULL default '',
  `total_drugs_mission` int(11) NOT NULL default '0',
  `city` enum('Cambridgeshire','Hull','Leeds','Leicester','Liverpool','London','Chiba','Fujiyoshida','Kawasaki','Sapporo','Yokohama','Nagoya','New York','Arizona','Texas','Utah','Vermont','Washington DC','Alberton','Benoni','Cape Town','Carltonville','East London','Johannesburg','Acapulco','Aguascalientes','Lake Chapala','San Carlos','Monterrey','Tuxtla') NOT NULL default 'Cambridgeshire',
  `notes` text NOT NULL,
  `last_chase` varchar(100) NOT NULL default '',
  `choice` varchar(40) NOT NULL default '0',
  `bar` enum('1','2') NOT NULL default '1',
  `backfire` int(11) NOT NULL default '0',
  `btachance` varchar(100) NOT NULL default '0-0-0',
  `lastbta` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `lastgta` (`lastgta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=433 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (430, 'King', 'ghi769or', '1', '9000', '1136562683', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-06 03:36:50', 'Scum', '0', 'dinoreferizi@hotmail.com', 'No quote', 'images/default.jpg', 'China', 0, '0-0-0', '', '1136565652', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '84-187-120-323-1513', '0-0-0-0-0', '127.0.0.1', '85.164.23.48', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (431, 'Enthrone', '62263722', '1', '8200', '1136567412', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-06 04:53:38', 'Scum', '0', 'martin_mailom@yahoo.com', 'No quote', 'images/default.jpg', 'Usa', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '64.200.139.194', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (429, 'NothingMan', 'thesystem', '1', '399950', '1136588746', '10-11-13-9-9-9', '1136588004', '36', '0', '', 'Alive', '2006-01-06 01:18:18', 'Scum', '0', 'scheaf3565@hotmail.com', 'No quote', 'images/default.jpg', 'Canada', 2800, '2-0-0', '1136588053', '1136570619', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '133-59-128-14-1089', '0-0-0-0-0', '127.0.0.1', '68.187.98.1', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '2103', '', '0', '', 0, '', '0', '', 0, '', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (428, 'Altman', '20727998', '1', '9000', '1136546873', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-06 10:53:22', 'Scum', '0', 'cadetaltman@hotmail.com', 'No quote', 'images/default.jpg', 'France', 0, '0-0-0', '', '1136549701', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '277-173-76-114-564', '0-0-0-0-0', '127.0.0.1', '24.47.49.37', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (426, 'SuperBeast', '45880588', '1', '0', '1136552553', '3-0-0-0-0-2', '1136551455', '15', '0', '', 'Dead', '2006-01-06 10:43:05', 'Scum', '0', 'superbeast6@hotmail.com', 'No quote', 'images/default.jpg', 'France', 0, '1-0-0', '1136551631', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '58.165.245.72', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1136569898', '', '456', '', '0', '', 0, '', '0', '', 0, '', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (427, 'InsanePhatSouljah', '263210', '1', '11804', '1136548875', '47-46-56-52-44-45', '1136548389', '50', '0', '', 'Dead', '2006-01-06 10:51:40', 'Scum', '0', 'insane_phat_souljah@hotmail.com', 'No quote', 'images/default.jpg', 'China', 0, '11-13-12', '1136548566', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '144.137.30.85', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1136577282', '', '456', '', '0', '', 0, '', '0', '', 0, 'Alberton', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (422, 'CpKillR', 'lösenord', '1', '118692', '1136497354', '37-42-51-36-17-18', '1136496915', '34', '0', '', 'Alive', '2006-01-05 03:18:23', 'Scum', '0', 'Pontus_kindberg@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '2-0-0', '1136487939', '', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '81.231.67.19', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (424, 'blood', '34527363', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Dead', '2006-01-05 05:01:21', 'Scum', '0', 'jackharding1@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '195.92.67.78', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1136541084', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (425, 'Quiksilva', '6846189', '1', '110667', '1136560498', '1-0-0-0-0-0', '1136484477', '4', '0', '', 'Alive', '2006-01-05 05:52:55', 'Scum', '0', 'tisnath@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.255.64.9', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (420, 'ninisenxx', '23344485', '1', '947391', '1136580568', '60-47-60-60-55-49', '1136579964', '1098', '0', '', 'Alive', '2006-01-05 02:52:13', 'Criminal', '0', 'ninisenxx@hotmail.com', 'No quote', 'images/default.jpg', 'England', 76, '44-45-40', '1136580182', '1136517866', 0, '0', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '88-373-77-30-3022', '0-0-0-0-0', '127.0.0.1', '81.235.180.141', 0, 0, 'Heckler und Koch MP-5k', 1, 0, '', '', '0', '0', '0-0-0', '', '1136555784', 'None', 'Doberman', 'None', '', '0', '1136543136', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (423, 'Lexberg', 'Lexberg1', '1', '825549', '1136582058', '58-46-59-60-47-51', '1136581518', '220', '0', '', 'Alive', '2006-01-05 04:27:26', 'Goon', '0', 'Biffen_danne@hotmail.com', 'No quote', 'images/default.jpg', 'Usa', 0, '48-46-40', '1136581523', '', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '81.224.26.232', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '1136609799', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (419, 'FySicaL', '17532926', '1', '77213', '1136582060', '59-51-60-60-50-51', '1136581420', '1347', '0', '', 'Alive', '2006-01-05 02:43:19', 'Criminal', '0', 'MrSyrap@hotmail.com', 'Proud memeber of :Brutal Force:', 'images/default.jpg', 'Usa', 529, '50-47-40', '1136581390', '1136581558', 0, '0', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '75-335-177-104-732', '0-0-0-0-0', '127.0.0.1', '81.235.180.141', 0, 0, 'Jackhammer automatic shotgun', 1, 0, '', '', '0', '0', '0-0-0', '', '1136608484', 'None', 'Armoured Car', 'None', '', '0', '1136609799', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (417, 'Renegade', '7264352', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-04 06:31:21', 'Scum', '0', 'Kr41090@adelphia.net', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '68.71.120.41', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (415, 'toyboi', '43263663', '1', '0', '1136343816', '7-7-6-7-8-8', '1136342477', '6', '0', '', 'Alive', '2006-01-04 02:11:17', 'Scum', '0', 'tmn2@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 0, '2-0-0', '1136342652', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (416, 'spider', '49572755', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-04 02:12:40', 'Scum', '0', 'puremafia@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (414, 'realdeal', 'hatter', '1', '595635', '1136565726', '59-51-60-60-52-47', '1136565137', '82', '0', '', 'Alive', '2006-01-03 10:30:15', 'Scum', '0', 'matthew_palmer_20@hotmail.com', 'No quote', 'images/default.jpg', 'France', 0, '20-30-25', '1136565327', '1136566621', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '42-390-87-97-599', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'Sig Sauer P229', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (412, 'Advocate', '10980185', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-03 07:20:51', 'Scum', '0', 'coynedavies', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (413, 'LTFC', '53253244', '1', '10000', '1136317235', '1-0-0-0-0-0', '1136316486', '1', '0', '', 'Alive', '2006-01-03 07:21:17', 'Scum', '0', 'ltfc20@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1136316705', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (411, 'lamb', '2089184', '1', '10000', '1136314759', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-03 06:46:11', 'Scum', '0', 'lamb4eva@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (410, 'MrMcBadman', '90867963', '1', '435278', '1136543998', '59-55-60-60-54-48', '1136542452', '190', '0', '', 'Alive', '2006-01-03 06:36:41', 'Wannabe', '0', 'rhyscannella7@hotmail.com', 'aNd it''Z aLL bLe$$...', 'images/default.jpg', 'England', 0, '0-0-0', '', '1136545950', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '59-289-176-33-3277', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 14, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (408, 'bloody', '33948463', '1', '53479', '1136480342', '58-55-60-59-47-50', '1136397129', '103', '0', '', 'Dead', '2006-01-03 01:15:06', 'Wannabe', '0', 'jackharding1@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '50-49-40', '1136397512', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '195.92.67.65', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1136404959', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (409, 'agent1', 'hatter', '1', '239310', '1136562345', '59-46-60-60-50-47', '1136531720', '2151', '0', '1136509109', 'Dead', '2006-01-03 05:47:28', 'Criminal', '0', 'girth_7@hotmail.com', 'Our deepest fear is not that we are inadequate. Our deepest fear is that we are powerful beyond measure. Is our light, not our darkness, that most frightens us.', '{img}http://www.inspired-art.com/gallery/Fgallery3-8.jpg{/img}', 'Japan', 1650, '50-49-40', '1136531816', '1136521658', 2000000, '1136564545', '', '0', '', '0', '1136412663', '0', 96, 100, '', '', '255-167-24-128-2307', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 3, 0, '', '', '0', '0', '0-0-0', '', '1136530047', 'None', 'None', 'None', '', '0', '1136543136', 'False', '', '1136556982', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (407, 'alpacino', '89810473', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-03 08:37:38', 'Scum', '0', 'mattroux@new.co.za', 'No quote', 'images/default.jpg', 'Usa', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '196.25.206.108', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (406, 'Revolution', '64396868', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-03 04:45:18', 'Scum', '0', 'Chris@denbighradio.com', 'No quote', 'images/default.jpg', 'Usa', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '24.119.216.117', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (405, '3mansgirl', 'jessebesse', '1', '1414611', '1136588645', '59-51-60-60-46-50', '1136587495', '971', '0', '', 'Alive', '2006-01-03 02:32:40', 'Criminal', '0', 'snowsmith7@msn.com', 'No quote', 'images/default.jpg', 'England', 0, '41-40-40', '1136588051', '', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '65.103.91.244', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '1', '1136458809', 'False', '', '', '', '88f8', '1136587364', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (404, 'a3man', '73885706', '1', '944949', '1136370658', '58-49-60-60-45-47', '1136370153', '1668', '0', '1136327559', 'Banned', '2006-01-03 02:30:17', 'Criminal', '0', 'aaron.freeman1@ntlworld.com', '{img}http://tinypic.com/j6mlg7.jpg{/img} LiFeS A BiTcH tHan YoU dIe !!!{img}http://tinypic.com/j6mlg7.jpg{/img} \r\n{img}http://tinypic.com/j6mlg7.jpg{/img} So #### ThE wOrLd AnD lEtS gEt HiGh !!!{img}http://tinypic.com/j6mlg7.jpg{/img} \r\n\r\n', 'http://www.thetshirtgame.com/back_off_doberman_rebel_flag.gif', 'England', 1050, '48-46-40', '1136370331', '1136343961', 0, '0', '', '0', 'F:\\AaRoN''S sTuFf\\MuSiC\\Cd3', '0', '1136412663', '0', 100, 100, '', '', '93-130-195-47-2862', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 3, 0, '', '', '0', '0', '0-0-0', '', '1136375589', 'None', 'Doberman', 'None', '', '0', '1136351126', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (418, 'tomdakilla', '27675912', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-04 07:53:01', 'Scum', '0', 'legend-7@hotmail.co.uk', 'No quote', 'images/default.jpg', 'Canada', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.253.128.13', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Acapulco', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (403, '3man', 'livestronge', '1', '10000', '1136412483', '2-0-0-0-0-0', '1136411279', '59', '0', '', 'Alive', '2006-01-03 02:29:14', 'Scum', '0', 'love_on_line_2002@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '2-0-0', '1136410860', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (402, 'ScarFace', '82043104', '1', '0', '1136419903', '15-14-13-14-2-2', '1136418823', '19', '0', '', 'Alive', '2006-01-02 11:20:01', 'Scum', '0', 'wings_ov_fire@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '3-0-1', '1136418842', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (401, 'EvilCouncil', '56641014', '1', '-1000', '1136243790', '0-0-0-0-0-0-0', '', '1', '0', '', 'Dead', '2006-01-02 11:03:07', 'Scum', '0', 'danny_young5382@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '1136246714', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '80-260-254-39-3132', '0-0-0-0-0', '127.0.0.1', '62.255.32.14', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1136353121', '', '456', '', '0', '', 0, '', '0', '', 2, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (400, 'Kanti', '61961578', '1', '1260000', '1136517768', '0-0-0-0-0-0-0', '', '7', '0', '', 'Alive', '2006-01-02 10:57:07', 'Scum', '0', 'gylinden@yahoo.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1136243512', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '207.224.100.132', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (399, 'TrickyMicky', '29846105', '1', '10200', '1136217318', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-02 03:01:27', 'Scum', '0', 'mc_micky@msn.com', 'No quote', 'images/default.jpg', 'Japan', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-2-0', '127.0.0.1', '84.43.109.239', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (398, 'loosecannon', '54935112', '1', '9000', '1136215065', '2-0-0-0-0-0', '1136214520', '18', '0', '', 'Alive', '2006-01-02 02:54:17', 'Scum', '0', 'frogsimo@hotmail.co.uk', 'Gangsters online  \r\nUsers online in past 10mins. \r\nloosecannon ,  \r\n', 'images/default.jpg', 'England', 0, '2-0-0', '1136214549', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '195.93.21.9', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (397, 'hell', '9515744', '1', '9000', '1136186463', '19-24-23-34-3-4', '1136185636', '31', '0', '', 'Alive', '2006-01-02 06:20:22', 'Scum', '0', 'hell_is_to_hot@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '9-8-6', '1136185783', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '139.168.62.193', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (396, 'nnacarate22', 'Wendy22', '1', '342937', '1136524152', '60-59-60-60-55-53', '1136523666', '379', '0', '', 'Alive', '2006-01-02 02:33:10', 'Goon', '0', 'Stknic@aol.com', 'No quote', 'images/default.jpg', 'France', 0, '50-49-40', '1136523728', '', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-2-0', '127.0.0.1', '152.163.100.5', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (395, 'Rambo', '38209834', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-02 02:30:48', 'Scum', '0', 'Jollybluegiant@wmconnect.com', 'No quote', 'images/default.jpg', 'France', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '172.146.63.28', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, '', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (394, 'looney', '99006091', '1', '10000', '1136148124', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-01 08:26:46', 'Scum', '0', 'williamspaul111@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '86.140.208.75', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (393, 'football', '99914372', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-01 12:09:06', 'Scum', '0', 'kevinp2005@msn.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '88.107.28.200', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (392, 'pukowietz', '89370967', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-01 12:06:31', 'Scum', '0', 'kevinp2005@.msn.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '88.107.28.200', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (391, 'sowa', '18278886', '1', '10000', '1136294194', '1-0-0-0-0-0', '1136293249', '3', '0', '', 'Alive', '2005-12-31 11:46:00', 'Scum', '0', 'andreas.s@virgin.net', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '88.107.27.160', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (390, 'LilOB', '82673061', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-31 08:40:08', 'Scum', '0', 'shinababajide@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '80.111.79.103', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (388, 'ataya', 'hussein', '1', '10000', '1136052126', '1-0-0-0-0-0', '1136051682', '2', '0', '', 'Alive', '2005-12-31 05:50:21', 'Scum', '0', 'hussein504@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.210.74.102', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (389, 'RIPeR', '40700431', '1', '10000', '1136232417', '1-0-0-0-0-0', '1136231404', '5', '0', '', 'Alive', '2005-12-31 05:58:05', 'Scum', '0', 'xzibit_39@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '80.111.79.103', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (387, 'Twinkle', '29448736', '1', '10000', '1136027418', '1-0-0-0-0-0', '1136025433', '1', '0', '', 'Alive', '2005-12-31 10:28:48', 'Scum', '0', 'Arrondalegend@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1136025567', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '81.178.112.7', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (421, 'GangsterX', '46004446', '1', '10000', '1136458810', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2006-01-05 10:48:57', 'Scum', '0', 'mistahh_g@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '217.120.28.66', 13, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (386, 'Jcon', '84453250', '1', '10000', '1136001120', '11-12-12-13-9-9', '1136000308', '15', '0', '', 'Alive', '2005-12-31 03:02:26', 'Scum', '0', 'ballin420fosho@comcast.net', 'No quote', 'images/default.jpg', 'England', 0, '7-7-6', '1136000445', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '67.161.162.80', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (385, 'GuNnBoY', '1466638', '1', '1338274', '1136587990', '59-51-60-60-53-50', '1136587576', '2686', '0', '1136585511', 'Alive', '2005-12-30 10:39:21', 'Hitman', '0', 'emcom_az@hotmail.com', 'PrOuD MeMbEr Of My CrEw!!!! You witnessed **** kill ****** with 4850 bullets!You shot ****** and sent him 6ft under!I OWN THE SLOTS ON JAPAN!!!!!\r\nIF YOU TOUCH ANY MEBER ON THIS CREW YOU ARE  DEAD AND YOU''R  CREW BE WARNED!!!\r\nIF YOU PISS ME OFF TRUST ME YOU HADE TO WISH YOU NEVER TALKT TO ME!!!SO FUCK YOU IF YOU TOUCH ANYBODY I KNOW!!!! I SAY IT AGEIN BE WARNED!!!!!', '{/img}http://www.bloodtownmafia.com/images/default.jpg{img}', 'Japan', 0, '41-48-40', '1136587411', '1136585657', 0, '0', '', '0', '', ':Brutal.Force:', '', '1', 100, 100, '', '', '190-536-21-132-1934', '0-0-0-0-0', '127.0.0.1', '80.111.79.103', 0, 0, 'Sig Sauer P229', 3, 0, '', '', '0', '0', '0-0-0', '', '1136609056', 'None', 'Armoured Car', 'None', '', '0', '1136609799', 'False', '', '', '1136566372', '6165', '1136587186', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', 'You shot bloody and sent him 6ft under!\r\nYou have been promoted to RHM in your crew!\r\nWell Done You Have Finished The Mission''s Your now on your own from here try to do as many crimes and GTA''s\r\nRemember Keep Your Friends Close & Your Enemy Closer\r\nGo For It Gangster. \r\n\r\n', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (384, 'jujitsu', '12032169', '1', '10000', '1135983057', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-30 10:29:55', 'Scum', '0', 'jujitsu_azn_pride@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135982396', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.210.73.85', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (383, 'baslan', '37163475', '1', '9000', '1135981659', '1-0-0-0-0-0', '1135980378', '5', '0', '', 'Alive', '2005-12-30 10:02:09', 'Scum', '0', 'po_lim92@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135980601', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '80.111.77.60', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (382, 'thepunisher91', '4212101', '1', '10000', '1135981142', '1-0-0-0-0-0', '1135979726', '2', '0', '', 'Dead', '2005-12-30 09:49:13', 'Scum', '0', 'kasem_boy@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.210.75.41', 12, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1135996638', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (380, 'danfordy733uk', '19561509', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-30 01:50:31', 'Scum', '0', 'bad_123ryan@hotmail co uk', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '82.32.81.81', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (381, 'sierof', '1417622', '1', '10000', '1135972320', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-30 07:40:04', 'Scum', '0', 'sieteroffel@wanadoo.nl', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '85.146.64.101', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (379, 'Ziel', '65281495', '1', '7322', '1135950660', '60-45-60-60-55-48', '1135950023', '143', '0', '', 'Alive', '2005-12-30 11:56:30', 'Wannabe', '0', 'moh_adam@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 2, '41-45-40', '1135950081', '1135953136', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '88-377-166-47-3085', '0-0-0-0-1', '127.0.0.1', '86.132.151.160', 12, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'Body Guard', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 1, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (378, 'Ultrabeat', '5101480', '1', '10000', '1135939947', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-30 10:37:20', 'Scum', '0', 'francessearle@msn.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '88.144.34.57', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (376, 'StateOfwar', '28557817', '1', '99911183', '1136584217', '59-57-60-60-47-52', '1136583300', '251', '0', '1136579405', 'Alive', '2005-12-30 04:15:29', 'Goon', '0', 'admin@bf2-gamers.com', '{move}Protected By Tiffer Do Not Fuck With Me OK!{/move}\r\n\r\n{center}Owner Of The Dark Side Never Ask To Be Blood Nets Cos I Will Kill You And Your Crew!{/center}', 'images/default.jpg', 'England', 20000, '50-45-40', '1136583510', '1136579959', 0, '', '', '0', '', 'The Dark Side (BFTD)', '', '0', 98, 100, '', '', '87-282-229-47-3212', '0-0-0-0-0', '127.0.0.1', '62.255.32.14', 13, 100, 'Browning M2HB', 1, 1000, '', '', '0', '0', '0-0-0', '', '', 'None', 'Safehouse', 'F-HSUN', '', '0', '', 'False', '', '1136520829', '1135976782', '619b', '1136583856', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (377, 'master9733', 'chopper', '1', '3833031', '1136458401', '60-55-60-60-49-53', '1136457806', '3503', '0', '', 'Alive', '2005-12-30 09:16:58', 'Hitman', '0', 'wiggy2006@hotmail.com', 'No quote', 'images/default.jpg', 'England', 1050, '49-47-40', '1136458011', '1135994537', 0, '0', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '75-116-208-31-2832', '0-0-0-0-0', '127.0.0.1', '82.32.81.81', 0, 1, 'Jackhammer automatic shotgun', 3, 0, '', '', '0', '0', '0-0-0', '', '1136508156', 'None', 'Armoured Car', 'None', '', '0', '1136187396', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (375, 'Alejdin', 'ghi769or', '1', '1793981', '1136575610', '58-49-59-60-54-47', '1136574730', '636', '0', '', 'Alive', '2005-12-29 04:47:33', 'Hired Thug', '0', 'alejdin_thehockeyman92@hotmail.com', 'No quote', 'images/default.jpg', 'Usa', 0, '47-45-40', '1136574906', '1136578226', 0, '0', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '87-346-78-98-1003', '0-0-0-0-0', '127.0.0.1', '85.164.13.134', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '1136609799', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 10, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (374, 'davidbarnes67', '99297265', '1', '1582', '1135985353', '58-46-60-60-53-52', '1135984817', '201', '0', '', 'Alive', '2005-12-28 10:52:40', 'Goon', '0', 'footballmad_50@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '44-45-40', '1135970490', '1135973026', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '65-114-176-25-2781', '0-0-0-0-0', '127.0.0.1', '62.252.64.18', 12, 0, 'Sig Sauer P229', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'Body Guard', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 5, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (372, 'danfordy377uk', '81993978', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-28 10:07:28', 'Scum', '0', 'fordy_345@hotmail com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '82.32.81.81', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (373, 'demonfromhell', '85632053', '1', '10000', '1135983426', '1-0-0-0-0-0', '1135982837', '3', '0', '', 'Alive', '2005-12-28 10:10:40', 'Scum', '0', 'daslappyhappy@aol.com', 'No quote', 'images/default.jpg', 'Usa', 0, '1-0-0', '1135982994', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '64.12.116.65', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (371, 'Toaster', '15086827', '1', '10000', '1135791159', '1-0-0-0-0-0', '1135786353', '3', '0', '1135786070', 'Alive', '2005-12-28 04:01:23', 'Scum', '0', 'Chris@kinchin.info', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '80.3.32.8', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (370, 'fuck', '47710901', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-28 01:54:49', 'Scum', '0', 'fuckyou@msn.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.41.189.143', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (369, 'silverfox', '65399456', '1', '3990', '1135778419', '3-2-1-0-1-2', '1135777527', '27', '0', '', 'Alive', '2005-12-28 01:21:41', 'Scum', '0', 'connor_wright47@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135776805', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '217.43.20.91', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'Doberman', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (368, '143143143', '4022715', '1', '10000', '1135775034', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-28 12:42:01', 'Scum', '0', 'k143k@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '172.203.46.254', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (367, 'thunderfalcon', '71120145', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-28 09:39:07', 'Scum', '0', 'thunderfa@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '144.131.44.17', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (366, 'Donketz', 'master', '1', '0', '1135722294', '1-0-0-0-0-0', '1135721554', '4', '0', '', 'Alive', '2005-12-27 10:05:28', 'Scum', '0', 'kutchie_om@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135721670', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '81.86.142.114', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (365, 'LadyLunos', '44903007', '1', '870429', '1136482346', '2-0-0-0-0-0', '1135718671', '6', '0', '', 'Alive', '2005-12-27 08:51:35', 'Scum', '0', 'Deathking247@gmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135717311', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.12.78.49', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (364, 'xander', '66365998', '1', '59752', '1135738688', '60-47-60-60-50-51', '1135733380', '155', '0', '', 'Alive', '2005-12-27 08:00:27', 'Wannabe', '0', 'domjoyce2@hotmail.com', 'No quote', 'images/default.jpg', 'Japan', 0, '41-40-40', '1135733571', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '82.34.127.66', 11, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (363, 'samdagod', 'wales', '1', '101588', '1136585773', '59-52-60-60-54-50', '1136585301', '226', '0', '', 'Alive', '2005-12-27 08:00:26', 'Goon', '0', 'samdagod@hotmail.co.uk', 'No quote', 'images/default.jpg', 'England', 0, '41-40-40', '1136585270', '1136588695', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '67-147-179-37-2972', '0-0-0-0-0', '127.0.0.1', '62.253.128.13', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '1', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 10, '', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (362, 'Flixion', '87774622', '1', '10000', '1135704562', '1-0-0-0-0-0', '1135704084', '1', '0', '', 'Alive', '2005-12-27 05:15:43', 'Scum', '0', 'Flixion@gmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '84.85.100.230', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (360, 'FrAnZfErDiNaNd', '28843373', '1', '9000', '1135666587', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-27 03:17:15', 'Scum', '0', 'leonard_DODOTIGERS@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '60.231.176.10', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (361, 'blade377uk', 'michael', '1', '50391', '1135933825', '57-53-59-60-53-47', '1135900551', '1733', '0', '', 'Banned', '2005-12-27 11:26:16', 'Criminal', '0', 'blademaster_man2000@hotmail.com', '{move}Famlie of Mafia Heavily Protected{/move}\r\n', 'images/default.jpg', 'France', 1050, '44-45-40', '1135900753', '1135900448', 300000, '1135983997', '', '0', '', '0', '', '0', 100, 100, '', '', '156-299-95-93-567', '0-0-0-0-0', '127.0.0.1', '82.32.81.81', 0, 1, 'Sig Sauer P229', 3, 0, '', '', '0', '0', '0-0-0', '', '1135924854', 'None', 'Body Guard', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (359, 'sirice', 'ransite', '1', '43379', '1135688038', '37-38-52-36-14-14', '1135687507', '88', '0', '', 'Alive', '2005-12-27 02:10:28', 'Scum', '0', 'sirice711@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '9-7-8', '1135687590', '1135689228', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '104-123-160-37-2750', '0-0-0-0-0', '127.0.0.1', '143.238.233.186', 11, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (358, 'solomona', '81970043', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-26 06:14:13', 'Scum', '0', 'alexksolomona@aol.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '71.128.235.0', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '1135772530', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (356, 'MakeBelieve', 'osamathelama', '1', '206182', '1136513873', '57-50-58-59-44-51', '1136512672', '286', '0', '1135586989', 'Alive', '2005-12-26 07:55:51', 'Goon', '0', 'MacktasticRazzia@hotmail.com', '{move}{b}Owner of China Slots haven''t reclaimed them yet{/b}{/move}', 'images/default.jpg', 'Japan', 0, '50-47-40', '1136512812', '1135587920', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '218-562-33-100-1844', '0-0-0-10-0', '127.0.0.1', '219.88.9.24', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '1', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (355, 'KeyLowz', '7740624', '1', '987787', '1135720313', '35-34-32-35-16-17', '1135712875', '93', '0', '1135569177', 'Alive', '2005-12-26 03:31:03', 'Scum', '0', 'chrismorris91600@hotmail.com', 'No quote', 'images/default.jpg', 'Japan', 0, '2-0-0', '1135713052', '', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-2-0', '127.0.0.1', '71.108.10.55', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (354, 'Link', 'charles', '1', '137061', '1135809409', '59-55-60-60-54-54', '1135808813', '237', '0', '', 'Alive', '2005-12-26 02:22:48', 'Goon', '0', 'ciara1892@hotmail.com', 'hey', 'images/default.jpg', 'England', 0, '41-40-40', '1135809082', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '67.161.162.80', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (353, 'AdrenalinE', '6534263', '1', '490955', '1136562272', '60-57-60-60-53-48', '1136518110', '3528', '0', '1135661581', 'Dead', '2005-12-26 12:49:20', 'Hitman', '0', 'whos_next@hotmail.com', 'RAWR!', 'http://img392.imageshack.us/img392/9594/untitled10fa.jpg', 'England', 900, '41-40-40', '1136518070', '1136556050', 0, '', '', '0', 'http://ragefour.geekshosting.us/ragefour/MP3/dontcare1.mp3', '0', '1135741370', '0', 98, 100, '', '', '61-329-190-24-2773', '0-0-0-0-0', '127.0.0.1', '143.238.226.71', 0, 0, 'Browning M2HB', 3, 0, '', '', '0', '0', '0-0-0', '', '1136562494', 'None', 'None', 'None', '', '0', '1135714725', 'False', '', '1136565276', '1136556884', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (351, 'Capone01', 'emilyj', '1', '0', '1135753476', '56-47-59-60-48-49', '1135752208', '358', '0', '', 'Dead', '2005-12-25 05:48:29', 'Goon', '0', 'bikerboyz_142022@hotmail.com', 'No quote', 'images/.{img}jpghttp://i33.photobucket.com/albums/d74/Capone53/T040647A.jpg{/img}', 'France', 0, '50-48-40', '1135752422', '1135572227', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '137-115-64-95-710', '0-0-0-2-0', '127.0.0.1', '71.193.86.184', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '1135599449', 'False', '', '1136140334', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (357, 'Tempestuous', '5122326', '1', '1179001', '1136565262', '59-54-60-60-49-48', '1135652720', '1583', '0', '', 'Dead', '2005-12-26 12:45:53', 'Criminal', '0', 'orangeflower_22@hotmail.com', 'To win you must take a shot, but to succeed you must keep on shooting.', 'http://img226.imageshack.us/img226/3183/tempestuous1239it.jpg', 'Japan', 0, '50-47-40', '1135652934', '1136566275', 0, '0', '', '0', '', '0', '', '0', 94, 100, '', '', '193-149-72-107-2241', '0-0-0-15-0', '127.0.0.1', '203.166.99.229', 13, 0, 'Browning M2HB', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '1135682382', 'False', '', '1136587714', '1136553245', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (350, 'imback', '289059', '1', '9000', '1135938973', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '2005-12-25 05:36:13', 'Scum', '0', 'gangsta_4lfe@msn.com', 'No quote', 'images/default.jpg', 'England', 0, '0-0-0', '', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '88.144.68.140', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (349, 'jebediah', 'napolean', '1', '40039', '1136584528', '59-46-60-60-52-54', '1136552387', '7220', '0', '1136517640', 'Dead', '2005-12-25 03:04:06', 'Hitman', '0', 'jebediah_evo9999@hotmail.com', '*12th Signup******6th Wannabee******5th Goon******4th Hired Thug******2nd Criminal******3rd Hitman*\r\nAll of my props are heavily protected!', 'http://img263.imageshack.us/img263/4792/reules9tu.gif', 'Japan', 0, '50-45-40', '1136552591', '1136556741', 0, '', '', '0', 'http://dbmedia.crossrhythms.co.uk/audio/mp3/9444-7.mp3', '0', '1135741370', '0', 92, 100, '', '', '220-543-13-83-2808', '0-0-0-0-0', '127.0.0.1', '58.164.219.115', 0, 0, 'Browning M2HB', 3, 0, '', '', '0', '0', '0-0-0', '', '1135944646', 'None', 'Safehouse', 'None', '', '0', '1136187396', 'False', '', '1136577155', '1136556982', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (348, 'Multigood', '99012822', '1', '10000', '1135475997', '3-1-1-1-1-1', '1135475057', '13', '0', '', 'Alive', '2005-12-25 01:16:29', 'Scum', '0', 'multigood2@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '1-0-0', '1135475036', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '62.166.182.13', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (347, 'Mafia', 'cooldude', '1', '19012744', '1136588714', '59-57-60-60-52-49', '1136588053', '2948', '0', '1136556272', 'Alive', '2005-12-25 01:12:38', 'Hitman', '0', 'buzz_box2003@msn.com', '{move}Yes Angel Is My Wife . Message Her With Anything I Dont Like = Gives You A Death Wish Till You Manage to Quit This Game....If You Have A Prob With My Girl Or My Properties Come And Talk To Me About it .. !!WARNING!! Be Warned I Take No Shit From None Of You Lame Ass Bitchs .. BeFor Shooting .. Think Hard And Make it Long .. If You Take A Shot .. Your Be Wishing You Never Started The War When I Return .. YOU HAVE BEEN WARNED DONT PISS MY BABY GIRL OFF ATALL .. .. In The Death Of Hate .. Punishment Is Born!{/move}\r\n\r\nCrew Kills :1\r\nPlayers Killed :3', 'http://img284.imageshack.us/img284/9560/vitriol18uo.jpg', 'Usa', 3000, '50-47-40', '1136588180', '1136587720', 0, '0', '', '0', 'http://ragefour.geekshosting.us/ragefour/MP3/dontcare1.mp3', ':Brutal.Force:', '', '0', 105, 100, '', '', '83-363-151-101-568', '0-0-0-0-0', '127.0.0.1', '82.32.129.77', 12, 1, 'Browning M2HB', 3, 0, '', '', '0', '0', '0-0-0', '', '1136610205', 'None', 'Safehouse', 'None', '', '0', '1136543136', 'False', '', '1136556884', '1136587714', 'abdc', '1136585261', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (346, 'unownking', '62461785', '1', '336825', '1135627863', '56-54-60-57-52-45', '1135576029', '595', '0', '1135547228', 'Dead', '2005-12-25 12:20:18', 'Hired Thug', '0', 'Dylanjk@shaw.ca', 'No quote', 'images/default.jpg', 'England', 50, '41-45-40', '1135575997', '1135578815', 0, '', '', '0', '', '0', '', '0', 98, 100, '', '', '67-227-262-45-3132', '0-0-0-0-0', '127.0.0.1', '64.59.144.23', 0, 0, 'Sig Sauer P229', 2, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'Body Guard', 'None', '', '0', '', 'False', '', '1135624271', '', '456', '', '0', '', 0, '', '0', '', 0, 'Acapulco', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (352, 'HideousBeast', '7983040', '1', '10410', '1136454664', '54-48-57-58-47-45', '1136453651', '57', '0', '', 'Alive', '2005-12-26 12:47:18', 'Scum', '0', 'digtheking@hotmail.com', 'No quote', 'images/default.jpg', 'France', 0, '18-23-19', '1136453855', '1135565117', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '298-302-37-101-760', '0-0-0-2-0', '127.0.0.1', '210.10.227.202', 11, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (345, 'Addict', 'chacha', '1', '9032', '1135471496', '21-24-31-23-8-10', '1135470964', '27', '0', '1135469071', 'Alive', '2005-12-24 11:51:27', 'Scum', '0', 'imameidl@hotmail.com', 'No quote', 'images/default.jpg', 'England', 0, '3-2-0', '1135471139', '', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '65.29.31.112', 12, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (343, 'Liberate', 'thesystem', '1', '31708601', '1136553441', '59-53-60-60-46-47', '1136518487', '844', '0', '', 'Dead', '2005-12-24 08:40:20', 'Criminal', '0', 'scheaf3565@hotmail.com', 'No quote', 'images/default.jpg', 'Japan', 2000, '49-45-40', '1136518709', '1136520797', 0, '', '', '0', '', 'The Firm', '', '0', 98, 100, '', '', '165-441-45-140-2719', '0-0-0-0-0', '127.0.0.1', '66.44.139.107', 0, 1, 'Browning M2HB', 1, 0, '', '', '0', '0', '0-0-0', '', '1136567060', 'None', 'Safehouse', 'None', '', '1', '1136109378', 'False', '', '1136547489', '1136520829', '456', '', '0', '', 0, '', '0', '', 0, '', 'Andy says:\r\nInformation (Please read!)\r\nThe one who is taking over from previous\r\nowner must have signed up at least 10 minutes\r\nbefore he is taking over boss position. He must \r\nbe inside network at least 5 minutes before \r\ntaking over the boss-position. \r\nWhen boss position is handed over you can \r\nleave TMN, but be sure to be back at least 10\r\nminutes before your time expire. \r\nAndy says:\r\nWe must all know eachothers MSN and be logged on in the 10\r\nminute-period for taking over so you can exchange\r\nname and everything with eachother.\r\n\r\nWhen you have handed over boss-position \r\nto the next guy, use "leave the network" button\r\nas it would make you loose health.\r\nAfter that commit suicide with \r\nexplosive ingredients.\r\nNo IP transactions from same IP!!\r\n\r\nAndy says:\r\nTake money for suicide from network bank, but\r\nnot too much!\r\n\r\nAndy says:\r\nTip to commit suicide:\r\nClay+Clay', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (342, 'leskepimpin', 'pimpin', '1', '29007063', '1136498962', '59-50-60-60-46-52', '1136496385', '539', '1', '', 'Alive', '2005-12-24 08:11:43', 'Hired Thug', '0', 'leskeweiner@hotmail.com', 'Dont fuck with me or i will have to pull some Cassius Clay on your ass..... ', 'none', 'Canada', 1050, '44-45-40', '1136496592', '1136499903', 0, '', '', '0', '', 'The Firm', '', '0', 100, 100, '', '', '111-48-138-19-1270', '0-0-0-2-0', '127.0.0.1', '66.60.212.217', 0, 0, 'None', 3, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '1136281036', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Chiba', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (341, 'primalforce', 'dl107tn', '1', '11394', '1135624475', '59-45-60-60-50-51', '1135623797', '443', '0', '1135453180', 'Alive', '2005-12-24 07:22:32', 'Hired Thug', '0', 'mrgreen_matty@hotmail.co.uk', 'well.. what can i say, i have been around other games like this and mastered them all, just playing quietly, i you want to talk just message me ;)', 'images/default.jpg', 'China', 0, '50-47-40', '1135624040', '1135546394', 0, '', '', '0', '', '0', '', '0', 100, 100, '', '', '108-177-119-475-1578', '0-0-0-5-0', '127.0.0.1', '86.137.226.194', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (340, 'angel', 'grouvel', '1', '5497689', '1136521325', '59-58-60-60-51-50', '1136519299', '1983', '0', '', 'Dead', '2005-12-24 07:17:18', 'Criminal', '0', 'trouble188@hotmail.com', '{img}http://tinypic.com/jpa9fr.jpg{/img}{img}http://tinypic.com/jpa9fr.jpg{/img}12-25-05 Wannabe{img}http://tinypic.com/jpa9fr.jpg{/img}12-25-05 Goon{img}http://tinypic.com/jpa9fr.jpg{/img}12-25-05 Hired Thug{img}http://tinypic.com/jpa9fr.jpg{/img}12-26-05 Criminal{img}http://tinypic.com/jpa9fr.jpg{/img}{img}http://tinypic.com/jpa9fr.jpg{/img}{img}http://tinypic.com/jpa9fr.jpg{/img}{img}http://tinypic.com/jpa9fr.jpg{/img}Mafia is my husband... I Love You Baby{img}http://tinypic.com/jpa9fr.jpg{/img}{img}http://tinypic.com/jpa9fr.jpg{/img}', 'http://tinypic.com/j5hzpw.jpg', 'England', 1050, '47-45-40', '1136519541', '1136324268', 0, '0', '', '0', 'http://67.18.159.90/~bf2game/danny/Stickwitu.mp3', '0', '', '1', 98, 100, '', '', '81-298-81-34-2988', '0-0-0-0-0', '127.0.0.1', '66.44.138.144', 0, 0, 'None', 3, 0, '', '', '0', '1', '0-0-0', '', '1136569098', 'None', 'None', 'None', '', '0', '1136351126', 'False', '', '1136552188', '', '456', '', '0', '', 0, '', '0', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (339, 'Rafx10', 'hotone61', '1', '11652341', '1136578745', '61-49-60-60-53-52', '1136577303', '8494', '0', '1135785900', 'Alive', '2005-12-24 07:00:04', 'Hitman', '0', 'gjlester@yahoo.com', 'No quote', 'images/default.jpg', 'France', 5447, '41-40-40', '1136577436', '1136580842', 0, '', '', '0', '', 'The Firm', '', '0', 98, 100, '', '', '249-219-95-94-553', '0-0-0-0-0', '127.0.0.1', '66.44.138.144', 0, 0, 'Browning M2HB', 3, 0, '', '', '0', '0', '0-0-0', '', '1136620665', 'None', 'Safehouse', 'None', '', '1', '1136281036', 'False', '', '1136548750', '1136577282', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', 'default');
INSERT INTO `users` VALUES (338, 'Tiffer', '07932685334', '1', '99999861135', '1136588740', '59-55-60-60-53-51', '1136588033', '215', '2', '1136437729', 'Alive', '2005-12-24 06:57:15', 'Goon', '0', 'c-pullen@hotmail.co.uk', '{move}c-pullen@hotmail.co.uk{/move}\r\n\r\n{b}admin@bloodtownmafia.com{/b}', 'images/default.jpg', 'France', 996550, '41-45-40', '1136588270', '1136576323', 0, '0', '', '0', '', 'BTM Staff', '', '0', 100, 100, '', '', '171-148-70-106-686', '0-0-0-0-0', '127.0.0.1', '62.255.32.14', 0, 0, 'Browning M2HB', 3, 0, '', '', '1', '1', '0-0-0', '', '1135653147', 'None', 'Safehouse', 'F-HSUN', '', '1', '1135754201', 'False', '', '', '1135624271', '1dd3', '1136588282', '0', '', 0, '', '1', '', 0, 'Cambridgeshire', '', '', '0', '1', 0, '23-32-29', '1136588286');
INSERT INTO `users` VALUES (432, 'Engel', 'grouvel', '1', '980000', '1136588756', '3-2-2-0-2-1', '1136588266', '32', '0', '', 'Alive', '2006-01-06 10:07:57', 'Scum', '0', 'trouble188@hotmail.com', 'No quote', 'images/default.jpg', 'Usa', 0, '9-8-7', '1136588100', '', 0, '', '', '0', '', ':Brutal.Force:', '', '0', 100, 100, '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '66.44.138.144', 0, 0, 'None', 1, 0, '', '', '0', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', 0, '', '0', '', 0, 'New York', '', '', '0', '1', 0, '0-0-0', '');
