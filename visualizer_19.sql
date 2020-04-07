-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 05:37 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visualizer_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_institute_data`
--

CREATE TABLE `health_institute_data` (
  `health_institute_id` int(11) NOT NULL,
  `health_institute_name` varchar(250) NOT NULL,
  `health_institute_district_name` varchar(50) NOT NULL,
  `health_institute_province_number` int(11) NOT NULL,
  `health_institute_zone_name` varchar(50) NOT NULL,
  `health_institute_geographical_region_name` varchar(20) NOT NULL,
  `health_institute_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_institute_data`
--

INSERT INTO `health_institute_data` (`health_institute_id`, `health_institute_name`, `health_institute_district_name`, `health_institute_province_number`, `health_institute_zone_name`, `health_institute_geographical_region_name`, `health_institute_url`) VALUES
(1, 'Mahakali Zonal Hospital', 'Kanchanpur', 7, 'Mahakali', 'Outer Terai', 'https://www.google.com/search?q=mahakali+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Mahakali+Zonal+Hospital&aqs=chrome.0.0l3.959j0j7&sourceid=chrome&ie=UTF-8'),
(2, 'Seti Zonal Hospital', 'Kailali', 7, 'Seti', 'Outer Terai', 'https://www.google.com/search?q=seti+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Seti+Zonal+Hospital&aqs=chrome.0.0l7.377j0j7&sourceid=chrome&ie=UTF-8'),
(3, 'Far-west Sub Regional Hospital', 'Dadeldhura', 7, 'Mahakali', 'Inner Terai', 'https://www.google.com/search?q=Far-west+Sub+Regional+Hospital&rlz=1C1CHBD_enNP892NP892&oq=Far-west+Sub+Regional+Hospital&aqs=chrome..69i57.511j0j7&sourceid=chrome&ie=UTF-8'),
(4, 'Narayani Sub Regional Hospital', 'Parsa', 2, 'Narayani', 'Outer Terai', 'https://www.google.com/search?q=narayani+sub+regional+hospital&rlz=1C1CHBD_enNP892NP892&oq=Narayani+Sub+Regional+Hospital&aqs=chrome.0.0l2.903j0j9&sourceid=chrome&ie=UTF-8'),
(5, 'Gajendra Narayan Singh Sagarmatha Zonal Hospital', 'Saptari', 2, 'Sagarmatha', 'Outer Terai', 'https://www.google.com/search?q=gajendra+narayan+singh+sagarmatha+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Gajendra+Narayan+Singh+Sagarmatha+Zonal+Hospital&aqs=chrome.0.0.3573j0j9&sourceid=chrome&ie=UTF-8'),
(6, 'Janakpur Zonal Hospital', 'Dhanusa', 2, 'Janakpur', 'Outer Terai', 'https://www.google.com/search?q=janakpur+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Janakpur+Zonal+Hospital&aqs=chrome.0.0l5.671j0j9&sourceid=chrome&ie=UTF-8'),
(7, 'Lumbini Zonal Hospital', 'Rupandehi', 5, 'Lumbini', 'Outer Terai', 'https://www.google.com/search?q=lumbini+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Lumbini+Zonal+Hospital&aqs=chrome.0.0l6.486j0j9&sourceid=chrome&ie=UTF-8'),
(8, 'Rapti Zonal Hospital', 'Dang', 5, 'Dang', 'Inner Terai', 'https://www.google.com/search?q=rapti+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Rapti+Zonal+Hospital&aqs=chrome.0.0.727j0j9&sourceid=chrome&ie=UTF-8'),
(9, 'Bheri Zonal Hospital', 'Banke', 5, 'Bheri`', 'Outer Terai', 'https://www.google.com/search?q=bheri+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Bheri+Zonal+Hospital&aqs=chrome.0.35i39j0l3.456j0j9&sourceid=chrome&ie=UTF-8'),
(10, 'Rapti Sub-Regional Hospital', 'Dang', 5, 'Dang', 'Outer Terai', 'https://www.google.com/search?q=Rapti+Sub-Regional+Hospital&rlz=1C1CHBD_enNP892NP892&oq=Rapti+Sub-Regional+Hospital&aqs=chrome..69i57j0l3.303j0j9&sourceid=chrome&ie=UTF-8'),
(11, 'Shree Birendra Hospital', 'Kathmandu', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=shree+birendra+hospital&rlz=1C1CHBD_enNP892NP892&oq=Shree+Birendra+Hospital&aqs=chrome.0.0l5.391j0j9&sourceid=chrome&ie=UTF-8'),
(12, 'Bir Hospital', 'Kathmandu', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=Bir+Hospital&rlz=1C1CHBD_enNP892NP892&oq=Bir+Hospital&aqs=chrome..69i57j0l7.1807j0j9&sourceid=chrome&ie=UTF-8'),
(13, 'Civil Service Hospital', 'Kathmandu', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=civil+service+hospital&rlz=1C1CHBD_enNP892NP892&oq=Civil+Service+Hospital&aqs=chrome.0.0l7j5.174j0j9&sourceid=chrome&ie=UTF-8'),
(14, 'Tribhuwan University Teaching Hospital', 'Kathmandu', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=Tribhuwan+University+Teaching+Hospital&rlz=1C1CHBD_enNP892NP892&oq=Tribhuwan+University+Teaching+Hospital&aqs=chrome..69i57j0l4.262j0j9&sourceid=chrome&ie=UTF-8'),
(15, 'Patan Academy of Health Science', 'Lalitpur', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=Patan+Academy+of+Health+Science&rlz=1C1CHBD_enNP892NP892&oq=Patan+Academy+of+Health+Science&aqs=chrome..69i57j46j0l5.397j0j9&sourceid=chrome&ie=UTF-8'),
(16, 'Pokhara Health Science Academy', 'Kaski', 4, 'Gandaki', 'Hill', 'https://www.google.com/search?q=pokhara+health+science+academy&rlz=1C1CHBD_enNP892NP892&oq=Pokhara+Health+Science+Academy&aqs=chrome.0.0l2.215j0j9&sourceid=chrome&ie=UTF-8'),
(17, 'Dhaulagiri Zonal Hospital', 'Baglung', 4, 'Dhawalagiri', 'Hill', 'https://www.google.com/search?q=dhaulagiri+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Dhaulagiri+Zonal+Hospital&aqs=chrome.0.0l2.263j0j9&sourceid=chrome&ie=UTF-8'),
(18, 'Koshi Zonal Hospital', 'Morang', 1, 'Koshi', 'Outer Terai', 'https://www.google.com/search?q=koshi+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Koshi+Zonal+Hospital&aqs=chrome.0.0l5.319j0j9&sourceid=chrome&ie=UTF-8'),
(19, 'Mechi Zonal Hospital', 'Jhapa', 1, 'Mechi', 'Outer Terai', 'https://www.google.com/search?q=mechi+zonal+hospital&rlz=1C1CHBD_enNP892NP892&oq=Mechi+Zonal+Hospital&aqs=chrome.0.0l4.305j0j9&sourceid=chrome&ie=UTF-8'),
(20, 'B.P Koirala Institute of Health Sciences', 'Sunsari', 1, 'Koshi', 'Outer Terai', 'https://www.google.com/search?q=b.p+koirala+institute+of+health+sciences&rlz=1C1CHBD_enNP892NP892&oq=B.P+Koirala+Institute+of+Health+Sciences&aqs=chrome.0.35i39j0l7.382j0j9&sourceid=chrome&ie=UTF-8'),
(21, 'Mid-Western Regional Hospital', 'Surkhet', 6, 'Bheri', 'Inner Terai', 'https://www.google.com/search?q=mid-western+regional+hospital&rlz=1C1CHBD_enNP892NP892&oq=Mid-Western+Regional+Hospital&aqs=chrome.0.0l8.374j0j9&sourceid=chrome&ie=UTF-8'),
(22, 'Bharatpur Hospital', 'Chitwan', 3, 'Narayani', 'Inner Terai', 'https://www.google.com/search?q=bharatpur+hospital&rlz=1C1CHBD_enNP892NP892&oq=Bharatpur+Hospital&aqs=chrome.0.0l8.318j0j9&sourceid=chrome&ie=UTF-8'),
(23, 'Bhaktapur Hospital', 'Bhaktapur', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=bhaktapur+hospital&rlz=1C1CHBD_enNP892NP892&oq=Bhaktapur+Hospital&aqs=chrome.0.35i39j0l7.550j0j9&sourceid=chrome&ie=UTF-8'),
(24, 'Karnali Academy of Health Science', 'Jumla', 6, 'Karnali', 'Mountain', 'https://www.google.com/search?q=Karnali+Academy+of+Health+Science&rlz=1C1CHBD_enNP892NP892&oq=Karnali+Academy+of+Health+Science&aqs=chrome..69i57j0l6.3216j0j9&sourceid=chrome&ie=UTF-8'),
(25, 'Dhulikhel Hospital', 'Kavrepalanchok', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?q=dhulikhel+hospital&rlz=1C1CHBD_enNP892NP892&oq=Dhulikhel+Hospital&aqs=chrome.0.0l8.255j0j9&sourceid=chrome&ie=UTF-8'),
(26, 'Vector Borne Disease Research and Training Center', 'Makwanpur', 3, 'Narayani', 'Inner Terai', 'https://www.google.com/search?rlz=1C1CHBD_enNP892NP892&sxsrf=ALeKk03MiJrkDm3M4GQTrLdZmpbElrC5Sw%3A1586181229344&ei=bTSLXrzMFKPDpgeg0rjgBg&q=Vector+Borne+Disease+Research+and+Training+Center&oq=Vector+Borne+Disease+Research+and+Training+Center&gs_lcp=CgZwc3ktYWIQAzIGCAAQFhAeOgQIABBHSg0IFxIJMTEtMTZnMTYxSgoIGBIGMTEtMWcxULQuWLQuYN0zaABwAXgAgAGgAYgBoAGSAQMwLjGYAQCgAQKgAQGqAQdnd3Mtd2l6&sclient=psy-ab&ved=0ahUKEwj8tuXF-dPoAhWjoekKHSApDmwQ4dUDCAw&uact=5'),
(27, 'National Public Health Laboratory', 'Kathmandu', 3, 'Bagmati', 'Hill', 'https://www.google.com/search?rlz=1C1CHBD_enNP892NP892&sxsrf=ALeKk03kioR63YIudfo8UAq95RChwzwA0A%3A1586181236819&ei=dDSLXqjSMYGK4-EP9ZKskAU&q=National+Public+Health+Laboratory&oq=National+Public+Health+Laboratory&gs_lcp=CgZwc3ktYWIQAzICCAAyBwgAEBQQhwIyBQgAEMsBMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADoECCMQJ0oKCBcSBjEyLTE2NEoICBgSBDEyLTJQnDpYnDpg3z9oAHAAeACAAZgBiAGvApIBAzAuMpgBAKABAqABAaoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwio3K3J-dPoAhUBxTgGHXUJC1IQ4dUDCAw&uact=5');

-- --------------------------------------------------------

--
-- Table structure for table `life_in_lockdown_data`
--

CREATE TABLE `life_in_lockdown_data` (
  `life_in_lockdown_data_id` int(11) NOT NULL,
  `life_in_lockdown_data_category` varchar(50) NOT NULL,
  `life_in_lockdown_data_name` varchar(50) NOT NULL,
  `life_in_lockdown_data_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `life_in_lockdown_data`
--

INSERT INTO `life_in_lockdown_data` (`life_in_lockdown_data_id`, `life_in_lockdown_data_category`, `life_in_lockdown_data_name`, `life_in_lockdown_data_link`) VALUES
(1, 'Movies', 'Atonement (2007)', ''),
(2, 'Movies', 'Full Metal Jacket (1987)', ''),
(3, 'Movies', 'Hacksaw ridge (2016)', ''),
(4, 'Movies', 'Valkyrie (2008)', ''),
(5, 'Movies', 'War Horse (2011)', ''),
(6, 'Movies', 'Enemy at the Gates (2001)', ''),
(7, 'Movies', 'The Thin Red Line (1998)', ''),
(8, 'Movies', 'The English Patient (1996)', ''),
(9, 'Movies', 'Downfall (2004)', ''),
(10, 'Movies', 'The Good the Bad and the Ugly (1966)', ''),
(11, 'Movies', 'Once upon a time in the West (1968)', ''),
(12, 'Movies', 'The Ballad of Buster Scruggs (2018)', ''),
(13, 'Movies', 'Dances with Wolves (1990)', ''),
(14, 'Movies', 'Butch Cassidy and the Sundance Kid (1969)', ''),
(15, 'Movies', 'The Searchers (1956)', ''),
(16, 'Movies', 'The Man Who Shot Liberty Valance (1962)', ''),
(17, 'Movies', 'The Assassination of Jesse James by the cowered Ro', ''),
(18, 'Movies', 'The Wild Punch (1969)', ''),
(19, 'Movies', 'Ned Kelly (2003)', ''),
(20, 'Movies', 'Django unchained (2012)', ''),
(21, 'Movies', 'The Matrix 1&2&3 (2003-2005)', ''),
(22, 'Movies', 'Annihilation (2018)', ''),
(23, 'Movies', 'Interstellar (2014)', ''),
(24, 'Movies', 'Arrival (2016)', ''),
(25, 'Movies', 'The Martian (2015)', ''),
(26, 'Movies', 'Bicentennial Man (1999)', ''),
(27, 'Movies', 'Contact (1997)', ''),
(28, 'Movies', 'A Clockwork Orange (1971)', ''),
(29, 'Movies', 'Passengers (2016)', ''),
(30, 'Movies', 'Lucy (2014)', ''),
(31, 'Movies', 'The Final Cut (2004)', ''),
(32, 'Movies', 'Back to the future 1&2&3 (1985-1989)', ''),
(33, 'Movies', '12 Monkeys (1995)', ''),
(34, 'Movies', 'Looper (2012)', ''),
(35, 'Movies', 'Predisposition (2014)', ''),
(36, 'Movies', 'About Time (2013)', ''),
(37, 'Movies', 'The Lake House (2006)', ''),
(38, 'Movies', 'The Jacket(2005)', ''),
(39, 'Movies', 'The Godfather (1&2&3)', ''),
(40, 'Movies', 'Once Upon a Time in America (1984)', ''),
(41, 'Movies', 'Scarface (1983)', ''),
(42, 'Movies', 'Donnie Brasco (1997)', ''),
(43, 'Movies', 'Casino (1995)', ''),
(44, 'Movies', 'Millerâ€™s Crossing (1990)', ''),
(45, 'Movies', 'A Bronx Tale (1993)', ''),
(46, 'Movies', 'American Gangster (2007)', ''),
(47, 'Movies', 'Mean Streets (1973)', ''),
(48, 'Movies', 'Carlitoâ€™s Way (1993)', ''),
(49, 'Movies', 'The Departed (2006)', ''),
(50, 'Movies', 'Pulp Fiction (1994)', ''),
(51, 'Movies', 'Her (2013)', ''),
(52, 'Movies', 'Lost in Translation (2003)', ''),
(53, 'Movies', 'Good Will Hunting (1997)', ''),
(54, 'Movies', 'Forrest gump (1994)', ''),
(55, 'Movies', 'Cast Away (2000)', ''),
(56, 'Movies', 'Green Mile (1999)', ''),
(57, 'Movies', 'Eternal Sunshine of Spotless Mind (2004)', ''),
(58, 'Movies', 'The curios case of Benjamin button (2008)', ''),
(59, 'Movies', 'The Shawshank redemption (1994)', ''),
(60, 'Movies', 'Pride and Predjudice (2005)', ''),
(61, 'Movies', 'One Flew Over the Cuckooâ€™s Nest (1975)', ''),
(62, 'Animated Pieces', 'The Girl Who Leapt Through Time (2006)', ''),
(63, 'Animated Pieces', 'A Silent Voice (2016)', ''),
(64, 'Animated Pieces', '5 Centimeters Per Second (2007)', ''),
(65, 'Animated Pieces', 'Children Who Chase Lost Voices (2011)', ''),
(66, 'Animated Pieces', 'The Anthem of the Heart (2015)', ''),
(67, 'Animated Pieces', 'I Want to Eat Your Pancreas (2018)', ''),
(68, 'Animated Pieces', 'A Letter to Momo (2011)', ''),
(69, 'Animated Pieces', 'Wall.E (2008)', ''),
(70, 'Animated Pieces', 'Toy story (1&2&3&4)', ''),
(71, 'Series', 'Vikings', ''),
(72, 'Series', 'The Crown', ''),
(73, 'Series', 'Better Call Saul', ''),
(74, 'Series', 'Russian Doll', ''),
(75, 'Series', 'Peaky Blinder', ''),
(76, 'Series', 'The Witcher', ''),
(77, 'Series', 'Stanger things', ''),
(78, 'Series', 'Ozark', ''),
(79, 'Series', 'Game of Thrones', ''),
(80, 'Series', 'Hannibal', ''),
(81, 'Series', 'Breaking Bad', ''),
(82, 'Games', 'Skyrim', ''),
(83, 'Games', 'Pokemon Series', ''),
(84, 'Games', 'Battle Chasers:Night War', ''),
(85, 'Games', 'Evoland 1&2', ''),
(86, 'Games', 'Death Road to Canada', ''),
(87, 'Games', 'Star Wars: Knights of the Old Republic', ''),
(88, 'Games', 'Call of Duty Mobile', ''),
(89, 'Games', 'JYDGE', ''),
(90, 'Games', 'PUBG Mobile', ''),
(91, 'Games', 'Tesla vs Lovecraft', ''),
(92, 'Games', 'Chameleon Run', ''),
(93, 'Games', 'Holedown', ''),
(94, 'Games', 'Monument Valley 1 & 2', ''),
(95, 'Games', 'The Room: Old Sins', ''),
(96, 'Games', 'Vectronom', ''),
(97, 'Games', 'Castlevania: Symphony of the Night', ''),
(98, 'Games', 'Dandara', ''),
(99, 'Games', 'Grimvalor', ''),
(100, 'Games', 'Oddmar', ''),
(101, 'Games', 'Suzy Cube', ''),
(102, 'Games', 'Majesty', ''),
(103, 'Games', 'Mindustry', ''),
(104, 'Games', 'Mini Metro', ''),
(105, 'Games', 'Reigns: Her Majesty', ''),
(106, 'Games', 'XCOM: Enemy Within', ''),
(107, 'Games', 'SIMS', ''),
(108, 'Games', 'Asphalt 9:Legends', ''),
(109, 'Games', 'GRID Autosport', ''),
(110, 'Games', 'Mario Kart Tour', ''),
(111, 'Games', 'Riptide Gp:Renegade', ''),
(112, 'Games', 'Grand Theft Auto:San Andreas', ''),
(113, 'Games', 'Graveyard Keeper', ''),
(114, 'Games', 'Stardew Valley', ''),
(115, 'Games', 'Godus', ''),
(116, 'Games', 'Australian Open Game', ''),
(117, 'Games', 'eFootball Pes 2020', ''),
(118, 'Games', 'Madden NFL Mobile Football', ''),
(119, 'Games', 'MLB Nine Innings 2020', ''),
(120, 'Games', 'NBA 2K20', ''),
(121, 'Games', 'Harry Potter:Wizards Unite', ''),
(122, 'Games', 'Pokemon GO', ''),
(123, 'Games', 'Retro Highways', ''),
(124, 'Games', 'Undead Horde', ''),
(125, 'Games', 'Fortnite', ''),
(126, 'Games', 'P.3', ''),
(127, 'Games', 'Stardew Valley', ''),
(128, 'Games', 'Gods of Boom', ''),
(129, 'Book Reading Sites', 'Bookish', 'https://bookish.netgalley.com/'),
(130, 'Book Reading Sites', 'Google Books', 'https://books.google.com/'),
(131, 'Book Reading Sites', 'Internet Archive', 'https://archive.org/'),
(132, 'Book Reading Sites', 'Open Library', 'https://openlibrary.org/'),
(133, 'Book Reading Sites', 'Project Gutenberg', 'https://www.gutenberg.org/'),
(134, 'Book Reading Sites', 'Scribd', 'https://www.scribd.com/?lohp=2'),
(135, 'Book Reading Sites', 'Smashwords', 'https://www.smashwords.com/'),
(136, 'Book Reading Sites', 'Wattpad', 'https://www.wattpad.com/'),
(137, 'Book Reading Sites', 'Librivox', 'https://librivox.org/'),
(138, 'Audio-book Sites', 'Lit2Go', 'https://etc.usf.edu/lit2go/'),
(139, 'Audio-book Sites', 'Loyal Books', 'http://www.loyalbooks.com/'),
(140, 'Audio-book Sites', 'Mind Webs', 'https://archive.org/details/Mindwebs_230'),
(141, 'Audio-book Sites', 'Open Culture', 'http://www.openculture.com/'),
(142, 'Audio-book Sites', 'Open drive', 'https://www.overdrive.com/'),
(143, 'Audio-book Sites', 'Podiobooks', 'https://scribl.com/info/podiobooks-now-scribl'),
(144, 'Movie Reviewing Sites', 'Rotten Tomatoes', 'https://www.rottentomatoes.com/'),
(145, 'Movie Reviewing Sites', 'IMDb', 'https://www.imdb.com/'),
(146, 'Movie Reviewing Sites', 'Metacritic', 'https://www.metacritic.com/'),
(147, 'Movie Reviewing Sites', 'Movie Review Query Engine', 'https://www.mrqe.com/'),
(148, 'Movie Reviewing Sites', 'FilmCrave', 'https://www.filmcrave.com/'),
(149, 'Movie Reviewing Sites', 'Filmsite', 'https://www.filmsite.org/'),
(150, 'Movie Reviewing Sites', 'PopMatters', 'https://www.popmatters.com/'),
(151, 'Movie Reviewing Sites', 'Mubi', 'https://mubi.com/'),
(152, 'Movie Reviewing Sites', 'Bloody Disgusting', 'https://bloody-disgusting.com/');

-- --------------------------------------------------------

--
-- Table structure for table `maps_districts_data`
--

CREATE TABLE `maps_districts_data` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `district_province_number` int(11) NOT NULL,
  `district_zone_name` varchar(100) NOT NULL,
  `district_geographical_region` varchar(100) NOT NULL,
  `district_total_cases` int(11) NOT NULL,
  `district_recovered` int(11) NOT NULL,
  `district_death` int(11) NOT NULL,
  `district_ongoing_cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps_districts_data`
--

INSERT INTO `maps_districts_data` (`district_id`, `district_name`, `district_province_number`, `district_zone_name`, `district_geographical_region`, `district_total_cases`, `district_recovered`, `district_death`, `district_ongoing_cases`) VALUES
(1, 'Bhojpur\r\n', 1, 'Koshi\r\n', 'Hill\r\n', 0, 0, 0, 0),
(2, 'Dhankuta\r\n', 1, 'Koshi', 'Hill', 0, 0, 0, 0),
(3, 'Ilam', 1, 'Mechi', 'Hill', 0, 0, 0, 0),
(4, 'Jhapa', 1, 'Mechi', 'Outer Terai', 0, 0, 0, 0),
(5, 'Khotang', 1, 'Sagarmatha', 'Hill', 0, 0, 0, 0),
(6, 'Morang', 1, 'Koshi', 'Outer Terai', 0, 0, 0, 0),
(7, 'Okhaldhunga', 1, 'Sagarmatha', 'Hill', 0, 0, 0, 0),
(8, 'Panchthar', 1, 'Mechi', 'Hill', 0, 0, 0, 0),
(9, 'Sankhuwasabha', 1, 'Koshi', 'Mountain', 0, 0, 0, 0),
(10, 'Solukhumbu', 1, 'Sagarmatha', 'Mountain', 0, 0, 0, 0),
(11, 'Sunsari', 1, 'Koshi', 'Outer Terai', 0, 0, 0, 0),
(12, 'Taplejung', 1, 'Mechi', 'Mountain', 0, 0, 0, 0),
(13, 'Terhathum', 1, 'Koshi', 'Hill', 0, 0, 0, 0),
(14, 'Udayapur', 1, 'Sagarmatha', 'Inner Terai', 0, 0, 0, 0),
(15, 'Parsa', 2, 'Narayani', 'Outer Terai', 0, 0, 0, 0),
(16, 'Bara', 2, 'Narayani', 'Outer Terai', 0, 0, 0, 0),
(17, 'Rautahat', 2, 'Narayani', 'Outer Terai', 0, 0, 0, 0),
(18, 'Sarlahi', 2, 'Janakpur', 'Outer Terai', 0, 0, 0, 0),
(19, 'Dhanusa', 2, 'Janakpur', 'Outer Terai', 0, 0, 0, 0),
(20, 'Siraha', 2, 'Sagarmatha', 'Outer Terai', 0, 0, 0, 0),
(21, 'Mahottari', 2, 'Janakpur', 'Outer Terai', 0, 0, 0, 0),
(22, 'Saptari', 2, 'Sagarmatha', 'Outer Terai', 0, 0, 0, 0),
(23, 'Sindhuli', 3, 'Janakpur', 'Inner Terai', 0, 0, 0, 0),
(24, 'Ramechhap', 3, 'Janakpur', 'Hill', 0, 0, 0, 0),
(25, 'Dolakha', 3, 'Janakpur', 'Mountain', 0, 0, 0, 0),
(26, 'Bhaktapur', 3, 'Bagmati', 'Hill', 0, 0, 0, 0),
(27, 'Dhading', 3, 'Bagmati', 'Hill', 0, 0, 0, 0),
(28, 'Kathmandu', 3, 'Bagmati', 'Hill', 3, 1, 0, 2),
(29, 'Kavrepalanchok', 3, 'Bagmati', 'Hill', 0, 0, 0, 0),
(30, 'Lalitpur', 3, 'Bagmati', 'Hill', 0, 0, 0, 0),
(31, 'Nuwakot', 3, 'Bagmati', 'Hill', 0, 0, 0, 0),
(32, 'Rasuwa', 3, 'Bagmati', 'Mountain', 0, 0, 0, 0),
(33, 'Sindhupalchok', 3, 'Bagmati', 'Mountain', 0, 0, 0, 0),
(34, 'Chitwan', 3, 'Narayani', 'Inner Terai', 0, 0, 0, 0),
(35, 'Makwanpur', 3, 'Narayani', 'Inner Terai', 0, 0, 0, 0),
(36, 'Baglung', 4, 'Dhawalagiri', 'Hill', 2, 0, 0, 2),
(37, 'Gorkha', 4, 'Gandaki', 'Hill', 0, 0, 0, 0),
(38, 'Kaski', 4, 'Gandaki', 'Hill', 0, 0, 0, 0),
(39, 'Lamjung', 4, 'Gandaki', 'Hill', 0, 0, 0, 0),
(40, 'Manang', 4, 'Gandaki', 'Mountain', 0, 0, 0, 0),
(41, 'Mustang', 4, 'Dhawalagiri', 'Mountain', 0, 0, 0, 0),
(42, 'Myagdi', 4, 'Dhawalagiri', 'Hill', 0, 0, 0, 0),
(43, 'Nawalpur', 4, 'Lumbini', 'Hill', 0, 0, 0, 0),
(44, 'Parbat', 4, 'Dhawalagiri', 'Hill', 0, 0, 0, 0),
(45, 'Syangja', 4, 'Gandaki', 'Hill', 0, 0, 0, 0),
(46, 'Tanahun', 4, 'Gandaki', 'Hill', 0, 0, 0, 0),
(47, 'Kapilvastu', 5, 'Kapilvastu', 'Outer Terai', 0, 0, 0, 0),
(48, 'Parasi', 5, 'Lumbini', 'Outer Terai', 0, 0, 0, 0),
(49, 'Rupandehi', 5, 'Lumbini', 'Outer Terai', 0, 0, 0, 0),
(50, 'Arghakhanchi', 5, 'Lumbini', 'Hill', 0, 0, 0, 0),
(51, 'Gulmi', 5, 'Lumbini', 'Hill', 0, 0, 0, 0),
(52, 'Palpa', 5, 'Lumbini', 'Hill', 0, 0, 0, 0),
(53, 'Dang Deukhuri', 5, 'Dang', 'Inner Terai', 0, 0, 0, 0),
(54, 'Pyuthan', 5, 'Rapti', 'Hill', 0, 0, 0, 0),
(55, 'Rolpa', 5, 'Rapti', 'Hill', 0, 0, 0, 0),
(56, 'Eastern Rukum', 5, 'Rapti', 'Hill', 0, 0, 0, 0),
(57, 'Banke', 5, 'Bheri', 'Outer Terai', 0, 0, 0, 0),
(58, 'Bardiya', 5, 'Bheri', 'Outer Terai', 0, 0, 0, 0),
(59, 'Western Rukum', 6, 'Rapti', 'Hill', 0, 0, 0, 0),
(60, 'Salyan', 6, 'Rapti', 'Hill', 0, 0, 0, 0),
(61, 'Dolpa', 6, 'Karnali', 'Mountain', 0, 0, 0, 0),
(62, 'Humla', 6, 'Karnali', 'Mountain', 0, 0, 0, 0),
(63, 'Jumla', 6, 'Karnali', 'Mountain', 0, 0, 0, 0),
(64, 'Kalikot', 6, 'Karnali', 'Mountain', 0, 0, 0, 0),
(65, 'Mugu', 6, 'Karnali', 'Mountain', 0, 0, 0, 0),
(66, 'Surkhet', 6, 'Bheri', 'Inner Terai', 0, 0, 0, 0),
(67, 'Dailekh', 6, 'Bheri', 'Hill', 0, 0, 0, 0),
(68, 'Jajarkot', 6, 'Bheri', 'Hill', 0, 0, 0, 0),
(69, 'Kailali', 7, 'Seti', 'Outer Terai', 3, 0, 0, 3),
(70, 'Achham', 7, 'Seti', 'Hill', 0, 0, 0, 0),
(71, 'Doti', 7, 'Seti', 'Hill', 0, 0, 0, 0),
(72, 'Bajhang', 7, 'Seti', 'Mountain', 0, 0, 0, 0),
(73, 'Bajura', 7, 'Seti', 'Mountain', 0, 0, 0, 0),
(74, 'Kanchanpur', 7, 'Mahakali', 'Outer Terai', 1, 0, 0, 1),
(75, 'Dadeldhura', 7, 'Mahakali', 'Inner Terai', 0, 0, 0, 0),
(76, 'Baitadi', 7, 'Mahakali', 'Hill', 0, 0, 0, 0),
(77, 'Darchula', 7, 'Mahakali', 'Mountain', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_data`
--

CREATE TABLE `news_data` (
  `news_id` int(11) NOT NULL,
  `news_heading` varchar(50) NOT NULL,
  `news_details` text NOT NULL,
  `news_photo` text NOT NULL,
  `news_date` date NOT NULL,
  `news_category` varchar(10) NOT NULL,
  `news_source` varchar(50) NOT NULL,
  `news_source_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_data`
--

INSERT INTO `news_data` (`news_id`, `news_heading`, `news_details`, `news_photo`, `news_date`, `news_category`, `news_source`, `news_source_url`) VALUES
(1, 'Fall in economic growth', 'In the annual Asian Development Outlook 2020 report, the multilateral funding agency slashed its growth forecast for Nepal to 5.3 percent this fiscal year, which ends mid-July, a sharp decrease from last year\'s 7.1 percent growth.\r\n', 'News-Photos/economy-falling-alalphabet-bear-down-fall-falling-economy-isolated-J678J7.jpg', '2020-04-07', 'Local', 'The Kathmandu Post', 'https://kathmandupost.com/money/2020/04/03/asian-development-bank-revises-nepal-s-economic-growth-rate-to-5-3-percent-in-light-of-covid-19-pandemic'),
(2, 'People returning from abroad', 'A division bench of justices Hari Krishna Karki and Ananda Mohan Bhattarai also said that all returnees should be identified by local governments and kept in quarantine facilities that meet the World Health Organization’s standards.', 'News-Photos/returnfabjsaks197393.jpg', '2020-04-07', 'Local', 'The Kathmandu Post', 'https://kathmandupost.com/national/2020/04/06/quarantine-everyone-returning-from-abroad-supreme-court-orders-government'),
(3, 'Non natives wishes to go to their hometowns', '“I thought that this would not go for long and I could resume my business, but it’s already been two weeks and the government has once again extended the lockdown,” said Timalsena, who hails from Sundarbazar Municipality-3 in Lamjung district.', 'News-Photos/ashajhs889a789s79a.jpg', '2020-04-07', 'Local', 'The Kathmandu Post', 'https://kathmandupost.com/national/2020/04/07/as-government-extends-lockdown-non-natives-of-kathmandu-valley-wish-to-return-to-their-hometowns\r\n'),
(4, 'Time to rethink Nepal\'s healthcare?', 'The callous behavior of private hospitals and clinics during the coronavirus pandemic has sparked a debate on the kind of health policy the country needs. There are also voices that private hospitals should be nationalized.', 'News-Photos/health-care-620_620x350_414782485831.jpg', '2020-04-07', 'Local', 'The Annapurna Express', 'https://theannapurnaexpress.com/news/time-to-rethink-nepals-healthcare-after-the-corona-fiasco-2382'),
(5, 'Psychology of the children?', 'Children may find their heads full of questions related to the virus. And with no one else in their immediate surrounding, they frequently turn to their parents to clear up these queries', 'News-Photos/child-psychology06460646661661562asas.jpg', '2020-04-07', 'Local', 'The Annapurna Express', 'https://theannapurnaexpress.com/news/nepal-and-coronavirus-dealing-with-children-during-lockdown-2383'),
(6, 'Second stage of virus transmission in Nepal', 'Nepal has entered the second stage of coronavirus transmission, Health Ministry’s spokesperson Dr Bikash Devkota said in the press briefing on Saturday, the day Nepal confirmed it is first locally transmitted case in the far-west.', 'News-Photos/_111173220_fad9b8e0-94c8-4a66-8061-a6f6b874672b.jpg', '2020-04-07', 'Local', 'The Himalayan Times', 'https://thehimalayantimes.com/nepal/nepal-enters-stage-2-of-coronavirus-transmission-mohp/'),
(7, 'A tough time for all', 'The US surgeon general said this week is going to be the \"hardest and the saddest\" for Americans, describing it as a \"Pearl Harbor moment\" and a \"9/11 moment.', 'News-Photos/ways-to-make-it-through-the-tough-times.jpg', '2020-04-07', 'Global', 'CNN', 'https://edition.cnn.com/world/live-news/coronavirus-pandemic-04-06-20/h_772ed09f02109754bc6ecad3f55b393f'),
(8, 'State of emergency in Japan', 'Japan is to declare a state of emergency in the capital Tokyo and six other regions in an attempt to tackle the rapid spread of coronavirus.\r\nPrime Minister Shinzo Abe said the move could come as early as Tuesday.', 'News-Photos/soephoto_l.jpg', '2020-04-07', 'Global', 'BBC', 'https://www.bbc.com/news/world-asia-52184375'),
(9, 'British Prime Minister admitted into the hospital', 'British Prime Minister Boris Johnson admitted to the London hospital with persistent symptoms of coronavirus, 10 days after first being diagnosed.', 'News-Photos/5e8a7d68a31012820667e91c.jpeg', '2020-04-07', 'Global', 'CNN', 'https://edition.cnn.com/world/live-news/coronavirus-pandemic-04-06-20/h_853a98171c90f4b79a0d1f11a42f7525\r\n'),
(10, 'Pregnant woman does not face any severe problem', 'Pregnant women with coronavirus don’t experience more severe illness than the general population, unlike in SARS and flu cases.', 'News-Photos/75019986.jpg', '2020-04-07', 'Global', 'CNN', 'https://edition.cnn.com/world/live-news/coronavirus-pandemic-04-06-20/h_636a2b26186f0a25a39cc1e509cd389a'),
(11, 'An affected Tiger?', 'The 4-year-old Nadia, female Malayan tiger tested positive after developing a dry cough and is expected to recover, the Wildlife Conservation Society\'s Bronx Zoo said in a news release.', 'News-Photos/nadia-covid-19.jpg', '2020-04-07', 'Global', 'CNN', 'https://edition.cnn.com/2020/04/05/us/tiger-coronavirus-new-york-trnd/index.html'),
(12, 'Coronavirus everywhere', 'The coronavirus COVID-19 is affecting 209 countries and territories around the world and 2 international conveyances. ', 'News-Photos/auhskjasakjshsajkksahs.png', '2020-07-04', 'Global', 'Worldometer', 'https://www.worldometers.info/coronavirus/');

-- --------------------------------------------------------

--
-- Table structure for table `test_your_knowledge_quiz`
--

CREATE TABLE `test_your_knowledge_quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_question` text NOT NULL,
  `quiz_number_of_options` int(11) NOT NULL,
  `quiz_option_A` text NOT NULL,
  `quiz_option_B` text NOT NULL,
  `quiz_option_C` text NOT NULL,
  `quiz_option_D` text NOT NULL,
  `quiz_correct_answer_option_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_your_knowledge_quiz`
--

INSERT INTO `test_your_knowledge_quiz` (`quiz_id`, `quiz_question`, `quiz_number_of_options`, `quiz_option_A`, `quiz_option_B`, `quiz_option_C`, `quiz_option_D`, `quiz_correct_answer_option_name`) VALUES
(1, 'How long do you need to wash your hands?', 4, 'For about 10 seconds.', 'For about 15 seconds.', 'For about 20 seconds.', 'For about 5 seconds.', 'C'),
(2, 'Is Corona also known as Covid-19?', 2, 'Yes', 'No', '', '', 'A'),
(3, 'How long does the novel coronavirus survive outside the body?', 3, 'A week in the air and on surfaces', 'Several hours to days', 'Up to a two and a half weeks', '', 'B'),
(4, 'What’s more important for preventing infection?', 2, 'Frequent hand-washing', 'Wearing a face mask', '', '', 'A'),
(5, 'What’s a safe distance to stay apart from someone who’s sick??', 2, '1 foot(30 cm)', '3 feet(1 meter)', '', '', 'B'),
(6, 'What is the toll-free hotline number of Ministry of Health and Population?', 4, '1115', '1116', '1117', '1118', 'A'),
(7, 'When did the 1st case of Corona was confirm in Nepal?', 4, '26 January 2020', '24 January 2020', '1 February 2020', '25 January 2020', 'B'),
(8, 'Is it good to use antibiotics as a means of prevention?', 2, 'Yes', 'No', '', '', 'B'),
(9, 'A couple of days before I got sick and developed symptoms,a man coughed me on the bus.This is how doctors believe I contracted COVID-19.What kind of transmission method is this?', 3, 'Droplet', 'Contact', 'Airborne', '', 'A'),
(10, 'What percent of alcohol is required at least in hand sanitizer to ensure hands are clean?', 4, '60%', '50%', '55.98%', '53.69%', 'A'),
(11, 'Why is it important to cover your mouth and nose when coughing and sneezing?', 3, 'because the sound of coughing and sneezing might make people nervous', 'to protect yourself from getting sick', 'to protect others from getting sick', '', 'C'),
(12, 'What type of transmission is prevented with regular cleaning of your everyday environment?', 2, 'Direct contact transmission', 'Indirect contact transmission', '', '', 'B'),
(13, 'To prevent the spread in the community, what type of mask would be suitable to be used by someone who is suspected to be infected with COVID-19?', 4, '3-ply Surgical mask', 'N95 Mask', 'Motorcycle Helmet', 'Scuba Diving Mask', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `test_your_knowledge_related_data`
--

CREATE TABLE `test_your_knowledge_related_data` (
  `data_id` int(11) NOT NULL,
  `data_description` text NOT NULL,
  `data_category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_your_knowledge_related_data`
--

INSERT INTO `test_your_knowledge_related_data` (`data_id`, `data_description`, `data_category`) VALUES
(1, 'DO wash your hands for at least 20 seconds, several times a day. Use soap and water or a hand sanitizer with at least 60% alcohol.', 'DO'),
(2, 'DO NOT touch your eyes, nose, and mouth. If you have somehow come into contact with the virus, touching your face can help it enter your body', 'DO NOT'),
(3, 'DO NOT wear a mask unless you are sick. ', 'DO NOT'),
(4, 'DO consider taking extra precautions and staying out of public places if you are over 60 years old, or have a condition, as you have a higher risk of developing the disease.', 'DO'),
(5, 'DO NOT assume young people will not get gravely ill or even die. As of March 16, 38% of all hospitalizations were of people 20-to-54 years old', 'DO NOT'),
(6, 'DO assume you have been exposed, if you live in an area with a lot of community transmission. That is what New Yorkers have been told.', 'DO'),
(7, 'DO NOT travel if you have a fever. If you get sick on flight, tell crew immediately. When you get home, contact a health professional.', 'DO NOT'),
(8, 'DO get ready to hunker down. The World Health Organization has declared COVID-19 to be a pandemic. ', 'DO'),
(9, 'DO NOT panic. Public health officials still say the risk of becoming infected with COVID-19 is low, but your risk level is likely to rise as the virus spreads across the country.', 'DO NOT'),
(10, 'DO practice social distancing: Stay 3- to 6-feet away from other people, especially if they are coughing or sneezing. Avoid gatherings of more than 10 people -- the government has ordered them canceled nationwide anyway -- and crowds in poorly-ventilated spaces.', 'DO'),
(11, 'DO NOT skip the flu shot. The symptoms of COVID-19 and flu overlap enough that it can complicate diagnosis. If you have had a flu shot, you are less likely to catch the flu or have a case serious enough to require treatment.', 'DO NOT'),
(12, 'DO prioritize your health. Now is not the time to burn the candle at both ends, skip workouts, or ignore a healthy diet, that can weaken your immune system. Take care of your mental health, too -- we are living in stressful times. ', 'DO'),
(13, 'DO NOT go to the doctor unless it is urgent. And reschedule your dental cleaning. The CDC is urging all health care professionals to focus on emergency treatments now.', 'DO NOT'),
(14, 'Exposing yourself to the sun or to temperatures higher than 25C degrees DOES NOT prevent the coronavirus disease (COVID-19)', 'BUSTING MYTHS'),
(15, 'You can recover from the coronavirus disease (COVID-19). Catching the new coronavirus DOES NOT mean you will have it for life.', 'BUSTING MYTHS'),
(16, 'Being able to hold your breath for 10 seconds or more without coughing or feeling discomfort DOES NOT mean you are free from the coronavirus disease (COVID-19) or any other lung disease.', 'BUSTING MYTHS'),
(17, 'Drinking alcohol does not protect you against COVID-19 and can be dangerous', 'BUSTING MYTHS'),
(18, 'COVID-19 virus can be transmitted in areas with hot and humid climates', 'BUSTING MYTHS'),
(19, 'Cold weather and snow CANNOT kill the new coronavirus.', 'BUSTING MYTHS'),
(20, 'Taking a hot bath does not prevent the new coronavirus disease', 'BUSTING MYTHS');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_details`
--

CREATE TABLE `user_login_details` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login_details`
--

INSERT INTO `user_login_details` (`user_id`, `username`, `user_email`, `user_password`) VALUES
(1, 'v19admin', '', '$2y$10$bBMbmBCrlQ4GXzOUSHOKLeFtDKP3B15vW0eWP/jx6Cr6pcUqMNLD.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_institute_data`
--
ALTER TABLE `health_institute_data`
  ADD PRIMARY KEY (`health_institute_id`);

--
-- Indexes for table `life_in_lockdown_data`
--
ALTER TABLE `life_in_lockdown_data`
  ADD PRIMARY KEY (`life_in_lockdown_data_id`);

--
-- Indexes for table `maps_districts_data`
--
ALTER TABLE `maps_districts_data`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `news_data`
--
ALTER TABLE `news_data`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `test_your_knowledge_quiz`
--
ALTER TABLE `test_your_knowledge_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `test_your_knowledge_related_data`
--
ALTER TABLE `test_your_knowledge_related_data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `user_login_details`
--
ALTER TABLE `user_login_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health_institute_data`
--
ALTER TABLE `health_institute_data`
  MODIFY `health_institute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `life_in_lockdown_data`
--
ALTER TABLE `life_in_lockdown_data`
  MODIFY `life_in_lockdown_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `maps_districts_data`
--
ALTER TABLE `maps_districts_data`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `news_data`
--
ALTER TABLE `news_data`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test_your_knowledge_quiz`
--
ALTER TABLE `test_your_knowledge_quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test_your_knowledge_related_data`
--
ALTER TABLE `test_your_knowledge_related_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login_details`
--
ALTER TABLE `user_login_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
