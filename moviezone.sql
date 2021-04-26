-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `name`, `category`, `year`, `details`, `created_at`) VALUES
(1, 'Oggatonama', 'Bangla', 2016, 'Oggatonama (Bengali: অজ্ঞাতনামা, The Unnamed) is a 2016 Bangladeshi drama film directed and written by Tauquir Ahmed. It was selected as the Bangladeshi entry for the Best Foreign Language Film at the 89th Academy Awards, but it was not nominated.', '2021-04-22 14:57:24'),
(3, 'Forrest Gump', 'English', 1994, 'Forrest Gump is a 1994 American comedy-drama film directed by Robert Zemeckis and written by Eric Roth. It is based on the 1986 novel of the same name by Winston Groom and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses and unwittingly influences several defining historical events in the 20th century United States. The film differs substantially from the novel.\r\n\r\nPrincipal photography took place between August and December 1993, mainly in Georgia, North Carolina and South Carolina. Extensive visual effects were used to incorporate Hanks into archived footage and to develop other scenes. The soundtrack features songs reflecting the different periods seen in the film.\r\n\r\nForrest Gump was released in the United States on July 6, 1994 and received praise for Zemeckis\'s direction, performances, visual effects, music, and screenplay. The film was an enormous success at the box office; it became the top-grossing film in America released that year and earned over US$677 million worldwide during its theatrical run, making it the second highest-grossing film of 1994, behind The Lion King. The soundtrack sold over 12 million copies. Forrest Gump won six Academy Awards including Best Picture, Best Director, Best Actor for Hanks, Best Adapted Screenplay, Best Visual Effects, and Best Film Editing. It received many award nominations, including Golden Globes, British Academy Film Awards and Screen Actors Guild Awards.\r\n\r\nVarying interpretations have been made of the protagonist and the film\'s political symbolism. In 2011, the Library of Congress selected the film for preservation in the United States National Film Registry as being \"culturally, historically, or aesthetically significant\". ', '2021-04-22 15:01:38'),
(4, 'Terminator 2: Judgment Day', 'English', 1991, 'Terminator 2: Judgment Day (also promoted as T2) is a 1991 American science fiction action film produced and directed by James Cameron, who co-wrote the script with William Wisher. The film stars Arnold Schwarzenegger, Linda Hamilton, Robert Patrick, Edward Furlong and Joe Morton as its principal cast. It is the sequel to the 1984 film The Terminator, as well as the second installment in the Terminator franchise. Terminator 2 follows Sarah Connor (Hamilton) and her ten-year-old son John (Furlong) as they are pursued by a new, more advanced Terminator: the liquid metal, shapeshifting T-1000 (Patrick), sent back in time to kill John and prevent him from becoming the leader of the human resistance. A second, less-advanced Terminator (Schwarzenegger) is also sent back in time by the \"Resistance\" to protect John.\r\n\r\nWhile talks of a follow-up to The Terminator arose following its release, its development was stalled due to technical limitations regarding computer-generated imagery, a vital aspect of the film, and legal issues with original producer Hemdale Film Corporation, who controlled half of the franchise rights. In 1990, Carolco Pictures acquired the rights from Hemdale and production immediately began, with Schwarzenegger, Hamilton, and Cameron returning. Principal photography began in October 1990 and lasted until March 1991. Its visual effects saw breakthroughs in computer-generated imagery, including the first use of natural human motion for a computer-generated character and the first partially computer-generated main character.[4] At the time of its release, with a budget of $94–102 million, Terminator 2: Judgment Day was the most expensive film ever made.\r\n\r\nTerminator 2: Judgment Day was released in the United States on July 3, 1991 by TriStar Pictures. It was a critical success upon its release, with praise going towards the performances of its cast, the action scenes, and its visual effects. Regarded as superior to the original film and one of the best sequels ever made, the film influenced popular culture, especially the use of visual effects in films.[5] It grossed $520 million worldwide, becoming the highest-grossing film of 1991 and of Schwarzenegger\'s career, as well as the highest-grossing R-rated film of all time, until The Matrix Reloaded surpassed it in 2003. It received several accolades, including Academy Awards for Best Sound Effects Editing, Best Sound, Best Makeup, and Best Visual Effects, and the Hugo Award for Best Dramatic Presentation - Long Form.\r\n\r\nOther sequels followed, including Terminator 3: Rise of the Machines in 2003, Terminator Salvation in 2009 and Terminator Genisys in 2015. The 2019 Cameron-produced film Terminator: Dark Fate is an alternate sequel to Terminator 2 and disregards all other Terminator works as occurring in alternate timelines.[6] In 2017, Terminator 2 was re-released in 3D 4K resolution for AMC and Cineplex theaters, and internationally, debuting at number one in the United Kingdom on its release weekend.[7] ', '2021-04-22 15:06:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
