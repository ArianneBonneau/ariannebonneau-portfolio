-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2022 at 05:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` text NOT NULL,
  `profile_pic` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_subtitle`, `profile_pic`, `about_desc`) VALUES
(1, 'Computer Science Student', 'Computer Science Student & Future Web Developer', '1651763339IMG_8482.JPG', 'I am a reliable person who is not afraid of new challenges and who always manage to reach my objectives in a timely fashion. Throughout my studies, I learned to prioritize my tasks to be more efficient and to be able to handle a heavy workload. My extracurricular activities taught me to accept criticisms openly and use them to improve myself. When I start a new job, I want to make a difference. For example, when I worked at Hydro Quebec, I took care of the oldest request that was open for more than a year, without no one asking me. I managed to close it before the end of my internship, which significantly improved the statistics of the company.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `admin_profile`, `email`, `password`) VALUES
(1, 'Arianne Bonneau', '1651769469mebeach.jpeg', 'arianne.bonneau@hotmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `mobile`) VALUES
(1, 'Montreal, Qc', 'arianne.bonneau@hotmail.com', '514-797-7673');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `showicons` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `subtitle`, `showicons`) VALUES
(1, 'Arianne Bonneau', 'Computer Science Student & Future Web Developer', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `label`, `value`) VALUES
(1, 'Email', 'arianne.bonneau@hotmail.com'),
(2, 'Phone', '514-797-7673');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `project_pic` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_pic`, `project_type`, `project_name`, `project_link`, `project_details`) VALUES
(1, 'image2.png', 'prog', 'Website for a Polishing Company ', 'https://github.com/ArianneBonneau/mozart', 'The website is made in PHP using Laravel framework. It contains information about all the offered services, a form to request a quotation that goes directly in the admin panel, a contact form to send messages by email, and more...'),
(2, 'bijou.jpg', 'other', 'Modeling for Jewelry Company', 'https://www.instagram.com/bleucommeleciel_official/?hl=en', 'A jewelry company offered me to model for them in exchange of free jewelry. It is a good way to promote their business.'),
(3, 'patin.JPG', 'other', 'Canadian Figure Skating Champion', 'https://www.lareleve.qc.ca/2015/03/17/deux-eleves-de-sport-etudes-sillustrent-en-danse-sur-glace-aux-jeux-du-canada/', 'I won the Canada Games in 2015 at Prince-Georges. The same year, I also broke a new national and Canadian scoring record.'),
(5, 'Picture1.png', 'prog', 'College Management Services Web Application', 'https://github.com/ArianneBonneau/AzureFinalProject', 'The MVC.Net web application serves to manage courses given by student as well as tasks students need to do with CRUD operations. It also has a strong authentication and authorization to differentiate different types of users.');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `about_exp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `type`, `title`, `time`, `org`, `about_exp`) VALUES
(1, 'p', 'Web Developer Intern', 'Now', 'Automobile en direct, Saint-Constant', 'Develop a web application in Javascript using React and Node'),
(4, 'e', 'Collegial Studies Diploma ', 'In progress', 'Champlain College, Saint-Lambert', 'Computer Science field'),
(5, 'e', 'High School Diploma', '2018', 'Collège Notre-Dame-De Lourdes, Longueuil', ''),
(6, 'p', 'IT Intern', 'Summer 2021', 'Hydro-Québec, Saint-Bruno', 'Analyse and recognize hardware and software problems'),
(7, 'p', 'Delivery Coordinator', '2020 - now', 'Automobile en direct, Saint-Constant', 'Communication, customer service, coordination of the tasks of several work teams'),
(8, 'p', 'Receptionist', '2018 - 2020', 'Automobile en direct, Longueuil', 'Customer service');

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

CREATE TABLE `section_control` (
  `id` int(11) NOT NULL,
  `home_section` varchar(11) NOT NULL,
  `about_section` varchar(11) NOT NULL,
  `resume_section` varchar(11) NOT NULL,
  `services_section` varchar(11) NOT NULL,
  `portfolio_section` varchar(11) NOT NULL,
  `contact_section` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `services_section`, `portfolio_section`, `contact_section`) VALUES
(1, 'on', 'on', 'on', '0', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `siteicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_title`, `keywords`, `description`, `siteicon`) VALUES
(1, 'Arianne Bonneau Portfolio', 'web developer', 'I am a computer science student at Champlain college', '1652063731icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `site_background`
--

CREATE TABLE `site_background` (
  `id` int(11) NOT NULL,
  `background_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_background`
--

INSERT INTO `site_background` (`id`, `background_img`) VALUES
(1, '1651769488cali.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_level`) VALUES
(1, 'HTML', 100),
(2, 'CSS', 100),
(3, 'PHP', 75),
(4, 'JavaScript', 75),
(5, 'Java', 70),
(7, 'Laravel', 76),
(8, 'SQL', 94),
(9, 'Python', 78),
(10, 'C#', 84),
(11, 'T-SQL', 73);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `instagram`, `linkedin`, `git`) VALUES
(1, 'https://www.facebook.com/ari.bonneau/', 'https://www.instagram.com/aribonneauxx/?hl=en', 'https://www.linkedin.com/in/arianne-bonneau-6692061b3/?originalSubdomain=ca', 'https://github.com/ArianneBonneau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_control`
--
ALTER TABLE `section_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_background`
--
ALTER TABLE `site_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_control`
--
ALTER TABLE `section_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_background`
--
ALTER TABLE `site_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
