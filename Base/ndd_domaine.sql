-- Generated by CRUDigniter v2.3 Beta 
-- www.crudigniter.com

-- Generation Time: Sep 17, 2018 04:33 PM

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `t_cms`
--

DROP TABLE IF EXISTS `t_cms`;
CREATE TABLE `t_cms` (
`id` int(255) NOT NULL,
`type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_cms`
--

ALTER TABLE `t_cms`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_cms`
--

ALTER TABLE `t_cms`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_domaine`
--

DROP TABLE IF EXISTS `t_domaine`;
CREATE TABLE `t_domaine` (
`id` int(255) NOT NULL,
`nom` varchar(255) NOT NULL,
`date_creation` date NOT NULL,
`id_cms` int(255) ,
`id_registrar` int(255) NOT NULL,
`ftp_login` varchar(255) ,
`ftp_password` varchar(255) ,
`ftp_server` varchar(255) ,
`admin_url` varchar(255) ,
`admin_login` varchar(255) ,
`admin_password` varchar(255) ,
`id_heberg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_domaine`
--

ALTER TABLE `t_domaine`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_domaine`
--

ALTER TABLE `t_domaine`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_domaine_theme_ip`
--

DROP TABLE IF EXISTS `t_domaine_theme_ip`;
CREATE TABLE `t_domaine_theme_ip` (
`id` int(255) NOT NULL,
`id_domaine` int(255) NOT NULL,
`id_ip` int(255) NOT NULL,
`id_theme` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_domaine_theme_ip`
--

ALTER TABLE `t_domaine_theme_ip`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_domaine_theme_ip`
--

ALTER TABLE `t_domaine_theme_ip`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_hebergement`
--

DROP TABLE IF EXISTS `t_hebergement`;
CREATE TABLE `t_hebergement` (
`id` int(255) NOT NULL,
`name` varchar(255) NOT NULL,
`url` varchar(255) NOT NULL,
`login` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_hebergement`
--

ALTER TABLE `t_hebergement`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_hebergement`
--

ALTER TABLE `t_hebergement`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ip`
--

DROP TABLE IF EXISTS `t_ip`;
CREATE TABLE `t_ip` (
`id` int(255) NOT NULL,
`id_heberg` int(255) NOT NULL,
`adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_ip`
--

ALTER TABLE `t_ip`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_ip`
--

ALTER TABLE `t_ip`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_registrar`
--

DROP TABLE IF EXISTS `t_registrar`;
CREATE TABLE `t_registrar` (
`id` int(255) NOT NULL,
`name` varchar(255) NOT NULL,
`url` varchar(255) NOT NULL,
`login` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_registrar`
--

ALTER TABLE `t_registrar`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_registrar`
--

ALTER TABLE `t_registrar`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

DROP TABLE IF EXISTS `t_role`;
CREATE TABLE `t_role` (
`id` int(250) NOT NULL,
`type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_role`
--

ALTER TABLE `t_role`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_role`
--

ALTER TABLE `t_role`
MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_techno`
--

DROP TABLE IF EXISTS `t_techno`;
CREATE TABLE `t_techno` (
`id` int(255) NOT NULL,
`name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_techno`
--

ALTER TABLE `t_techno`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_techno`
--

ALTER TABLE `t_techno`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_theme`
--

DROP TABLE IF EXISTS `t_theme`;
CREATE TABLE `t_theme` (
`id` int(255) NOT NULL,
`name` varchar(255) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_theme`
--

ALTER TABLE `t_theme`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_theme`
--

ALTER TABLE `t_theme`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
`id` int(250) NOT NULL,
`name` varchar(250) ,
`firstname` varchar(250) NOT NULL,
`email` varchar(250) ,
`id_role` int(11) NOT NULL,
`password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_user`
--

ALTER TABLE `t_user`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_user`
--

ALTER TABLE `t_user`
MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `t_domaine_techno`
--

DROP TABLE IF EXISTS `t_domaine_techno`;
CREATE TABLE `t_domaine_techno` (
`id` int(255) NOT NULL,
`id_domaine` int(255) NOT NULL,
`id_techno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `t_domaine_techno`
--

ALTER TABLE `t_domaine_techno`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `t_domaine_techno`
--

ALTER TABLE `t_domaine_techno`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
