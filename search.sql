-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2016 at 07:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `meta_keyword` varchar(256) NOT NULL,
  `meta_description` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `title`, `meta_keyword`, `meta_description`, `email`, `url`) VALUES
(1, 'Shibaji Debnath | Official Website', 'software development trainer, software engineer', 'I am a Technology trainer and Software consultant. I worked at various MNCs and love to learn new technology and spread the knowledge.', 'imshibaji@gmail.com', 'http://www.shibajidebnath.com/'),
(2, 'Medust Solution - Best Web solution provider.', 'Website development, hosting provider, domain service provider', 'The story of Medust has been that of the Midas story of turning dust into gold. Established in the year 2010, Medust Solution has achieved the most significant of the awards – satisfying its customers. With a 360 degree web solution service, this is no mean achievement. Every individual has his own needs and when those needs demand services in sectors spanning from customer software development to web hosting and web designing, it asks for even more challenge.', 'info@medust.com', 'http://www.medust.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
