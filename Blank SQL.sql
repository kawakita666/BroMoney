-- phpMyAdmin SQL Dump
-- version 2.6.4-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 15, 2005 at 02:31 AM
-- Server version: 4.0.25
-- PHP Version: 4.3.11
-- 
-- Database: `bf2game_mafia`
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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `airport`
-- 

INSERT INTO `airport` VALUES (1, 'Admin', 'England', '100-167-175-100-143-146', '0-2839-7700-1900-858-1022');
INSERT INTO `airport` VALUES (2, 'Admin', 'Japan', '100-100-100-100-100-100', '2300-0-300-100-0-300');
INSERT INTO `airport` VALUES (3, 'Admin', 'France', '1000-1000-1000-1000-1000-1000', '45800-3000-0-400-2200-2200');
INSERT INTO `airport` VALUES (4, 'Admin', 'Usa', '100-100-100-100-100-95', '3300-300-100-0-100-570');
INSERT INTO `airport` VALUES (5, 'Admin', 'China', '1000-1000-1000-1000-1000-1000', '3500-1300-1250-1100-0-1300');
INSERT INTO `airport` VALUES (6, 'Admin', 'Canada', '1000-1000-1000-1000-1000-1000', '9100-100-4000-2300-3300-0');

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
) TYPE=MyISAM AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `attempts`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `auctions`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `ban`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `bank`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `bar`
-- 

INSERT INTO `bar` VALUES (1, 'Admin', 'England', 0);
INSERT INTO `bar` VALUES (2, 'Admin', 'Japan', 0);
INSERT INTO `bar` VALUES (3, 'Admin', 'France', 0);
INSERT INTO `bar` VALUES (4, 'Admin', 'Usa', 0);
INSERT INTO `bar` VALUES (5, 'Admin', 'China', 0);
INSERT INTO `bar` VALUES (6, 'Admin', 'Canada', 0);

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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `bf`
-- 

INSERT INTO `bf` VALUES (1, 'Admin', 1000, 'No', 4500, 'England', '0');
INSERT INTO `bf` VALUES (2, 'Admin', 13999, 'No', 4500, 'Japan', '0');
INSERT INTO `bf` VALUES (3, 'Admin', 7000, 'No', 101, 'France', '202000');
INSERT INTO `bf` VALUES (4, 'Admin', 7000, 'No', 101, 'Usa', '4040');
INSERT INTO `bf` VALUES (5, 'Admin', 7000, 'No', 200, 'China', '0');
INSERT INTO `bf` VALUES (6, 'Admin', 7000, 'No', 1000, 'Canada', '1000');

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
) TYPE=MyISAM AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `bidders`
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
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `car_sell`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `casino`
-- 

INSERT INTO `casino` VALUES (8, 'Roulette', 'Admin', '0', '0', 'England', '');
INSERT INTO `casino` VALUES (9, 'Roulette', 'Admin', '0', '0', 'Japan', '');
INSERT INTO `casino` VALUES (16, 'Roulette', 'Admin', '0', '0', 'France', '');
INSERT INTO `casino` VALUES (20, 'Roulette', 'Admin', '0', '0', 'Usa', '');
INSERT INTO `casino` VALUES (21, 'Roulette', 'Admin', '0', '0', 'China', '');
INSERT INTO `casino` VALUES (28, 'Roulette', 'Admin', '0', '0', 'Canada', '');

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
) TYPE=MyISAM AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `casinos`
-- 

INSERT INTO `casinos` VALUES (1, 'Admin', 'Slots', '', 100, 'England');
INSERT INTO `casinos` VALUES (2, 'Admin', 'Slots', '', 100, 'Japan');
INSERT INTO `casinos` VALUES (3, 'Admin', 'Slots', '', 100, 'France');
INSERT INTO `casinos` VALUES (4, 'Admin', 'Slots', '', 100, 'Usa');
INSERT INTO `casinos` VALUES (5, 'Admin', 'Slots', '', 100, 'China');
INSERT INTO `casinos` VALUES (6, 'Admin', 'Slots', '', 100, 'Canada');
INSERT INTO `casinos` VALUES (8, 'Admin', 'RPS', '', 100, 'Japan');
INSERT INTO `casinos` VALUES (7, 'Admin', 'RPS', '', 100, 'England');
INSERT INTO `casinos` VALUES (9, 'Admin', 'RPS', '', 100, 'Usa');
INSERT INTO `casinos` VALUES (10, 'Admin', 'RPS', '', 100, 'France');
INSERT INTO `casinos` VALUES (11, 'Admin', 'RPS', '', 100, 'China');
INSERT INTO `casinos` VALUES (12, 'Admin', 'RPS', '', 100, 'Canada');
INSERT INTO `casinos` VALUES (13, 'Admin', 'Race', '', 100, 'England');
INSERT INTO `casinos` VALUES (14, 'Admin', 'Race', '', 100, 'Japan');
INSERT INTO `casinos` VALUES (15, 'Admin', 'Race', '', 100, 'France');
INSERT INTO `casinos` VALUES (16, 'Admin', 'Race', '', 100, 'Usa');
INSERT INTO `casinos` VALUES (17, 'Admin', 'Race', '', 100, 'China');
INSERT INTO `casinos` VALUES (18, 'Admin', 'Race', '', 100, 'Canada');

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `crews`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `dealership`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `donaters`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `friends`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=343 ;

-- 
-- Dumping data for table `garage`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `get_away`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=10 ;

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
) TYPE=MyISAM AUTO_INCREMENT=230 ;

-- 
-- Dumping data for table `inbox`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=191 ;

-- 
-- Dumping data for table `items`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1300 ;

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=47 ;

-- 
-- Dumping data for table `matches`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `oc`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `replys`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rest`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `safe`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=126 ;

-- 
-- Dumping data for table `search`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `shop`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

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
) TYPE=MyISAM AUTO_INCREMENT=29 ;

-- 
-- Dumping data for table `street`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=28 ;

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
) TYPE=MyISAM AUTO_INCREMENT=67 ;

-- 
-- Dumping data for table `ticket`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `topics`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=151 ;

-- 
-- Dumping data for table `transfers`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `turf`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `updates`
-- 


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
) TYPE=MyISAM AUTO_INCREMENT=334 ;

-- 
-- Dumping data for table `user_info`
-- 

INSERT INTO `user_info` VALUES (333, 'Admin', 0, 0, 0, 0, 0, 0, 0, '0:0', 0, 0, '', '', '', '1', '', '', 'English', 0, '0', '', '1', 0);

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
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=235 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (234, 'Admin', 'Admin', '1', '600000000', '', '00-00-00-00-00-00-00', '', '', '2', '', 'Alive', '2005-12-16 00:00:00', 'Legendary Legend', '0', 'c-pullen@hotmail.co.uk', 'ADMIN', 'images/default.jpg', 'England', 600000000, '00-00-00', '', '', 0, '', '', '1', '', '0', '', '1', 9999, 9999, '', '', '0-0-0-0-0', '0-0-0-0-0', '0.0.0.0.0.0.', '0.0.0.0.0.0', 1, 600000000, 'Browning M2HB', 3, 0, '', '', '1', '1', '0-0-0', '', '', 'None', 'Safehouse', 'F-HSUN', '', '1', '', 'True', '', '', '', '456', '', '1', '', 0, '', '1', '', 0, 'Cambridgeshire', '', '', '0', '2', 600000000);
