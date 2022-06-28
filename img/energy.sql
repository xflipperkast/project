-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 08:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `energy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aanbiedingen`
--

CREATE TABLE `aanbiedingen` (
  `aanbiedingen_id` int(11) NOT NULL,
  `titel` varchar(50) DEFAULT NULL,
  `begindatum` datetime DEFAULT NULL,
  `einddatum` datetime DEFAULT NULL,
  `omschrijving` varchar(100) DEFAULT NULL,
  `afbeelding` varchar(50) DEFAULT NULL,
  `artiest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aanbiedingen`
--

INSERT INTO `aanbiedingen` (`aanbiedingen_id`, `titel`, `begindatum`, `einddatum`, `omschrijving`, `afbeelding`, `artiest_id`) VALUES
(1, 'Knalkorting', '2021-02-01 00:00:00', '2021-02-28 00:00:00', 'Met deze knalkorting ga je helemaal knallen', 'knal.png', 101),
(2, 'Volle voor lege', '2021-03-04 00:00:00', '2021-03-10 00:00:00', 'Bij inlevering van 12 lege blikjes krijg je 1 volle', 'cheap.png', 102),
(3, 'Vroegdrinkkorting', '2021-03-11 00:00:00', '2021-03-24 00:00:00', 'Voor 9 uur in de ochtend 50% korting!', 'clock.png', 104),
(4, 'Grote X knaller', '2021-04-01 00:00:00', '2021-04-30 00:00:00', 'Met deze knalkorting ga je helemaal knallen', 'knal.png', 101),
(5, 'Voorjaarsaanbieding', '2021-03-01 00:00:00', '2021-04-01 00:00:00', 'Bij inlevering van 11 lege blikjes krijg je 1 volle', 'cheap.png', 103),
(6, 'Doldwaze dagen', '2021-04-01 00:00:00', '2021-04-30 00:00:00', 'Elk 2e blikje gratis', 'dwaas.png', 105),
(7, 'Lenteactie', '2021-05-01 00:00:00', '2021-05-31 00:00:00', 'Nieuwe energie voor halve prijs', 'lente.png', 102);

-- --------------------------------------------------------

--
-- Table structure for table `artiesten`
--

CREATE TABLE `artiesten` (
  `artiest_id` int(11) NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `achternaam` varchar(50) DEFAULT NULL,
  `voornaam` varchar(50) DEFAULT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `statement` varchar(100) DEFAULT NULL,
  `telefoon` varchar(20) DEFAULT '+31 6 28271134',
  `actief` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artiesten`
--

INSERT INTO `artiesten` (`artiest_id`, `naam`, `achternaam`, `voornaam`, `tussenvoegsel`, `statement`, `telefoon`, `actief`) VALUES
(101, 'Elvis Presley', 'Presley', 'Elvis Aaron', NULL, '... has left the building!', '+31 6 28271134', 1),
(102, 'Tones and I', 'Watson', 'Toni', NULL, 'Energy Monkey Energy!', '+31 6 28271134', 1),
(103, 'Post Malone', 'Post', 'Austin Richard', NULL, 'Broken energy can.', '+31 6 28271134', 1),
(104, 'Miley Cyrus', 'Cyrus', 'Destiny Hope', NULL, 'Energy isn\'t just a color, it\'s an attitude!', '+31 6 28271134', 1),
(105, 'Rapper Sjors', 'Peter', 'Sjors', NULL, 'Yeah, let\'s go!', '+31 6 28271134', 0),
(121, 'Dua Lipa', 'Lipa', 'Dua', NULL, 'One Sip is all I need!', '+31 6 28271134', 1),
(122, 'Duncan', 'Rijssel', 'Duncan', 'van', 'Ben jij ook zo.... energiek vandaag', '+31 6 28271134', 1),
(123, 'Justin Bieber', 'Bieber', 'Justin Drew', NULL, 'Energy should be honest, loving and trustworthy.', '+31 6 28271134', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reactie` mediumtext NOT NULL,
  `eventnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `reactie`, `eventnaam`) VALUES
(15, 'hans ', 'kut event', 'echt een kut event', 'lightpop'),
(17, 'a-aron', 'ik ben a-aron', 'ik hou van iedereen erg veel a-arons gegeten', 'kaaspop'),
(25, 'ronald', 'mijn hoofd', 'ik heb geen hersens en ben echt kapot dom groetjes ronald', 'rippop'),
(61, 'e', 'e', 'e', 'e'),
(63, '-webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini -webkit-animation:spin', '-webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini -webkit-animation:spin', '-webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini-webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini', '-webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infinite; -webkit-animation:spin 4s linear infinite; -moz-animation:spin 4s linear infinite; animation:spin 4s linear infini -webkit-animation:spin'),
(64, 'bitch', 'hoer', 'fuck', 'lol');

-- --------------------------------------------------------

--
-- Table structure for table `evenementen`
--

CREATE TABLE `evenementen` (
  `evenement_id` int(11) NOT NULL,
  `datum` datetime DEFAULT NULL,
  `artiest_id` int(11) DEFAULT NULL,
  `locatie_id` int(11) DEFAULT NULL,
  `max_bezoekers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evenementen`
--

INSERT INTO `evenementen` (`evenement_id`, `datum`, `artiest_id`, `locatie_id`, `max_bezoekers`) VALUES
(501, '2021-03-01 00:00:00', 101, 51, 1000),
(502, '2021-03-04 00:00:00', 105, 53, 3000),
(503, '2021-03-09 00:00:00', 102, 54, 1000),
(504, '2021-03-11 00:00:00', 101, 55, 3000),
(505, '2021-03-15 00:00:00', 101, 51, 1000),
(506, '2021-03-16 00:00:00', 103, 53, 3000),
(507, '2021-03-20 00:00:00', 104, 52, 2000),
(508, '2021-03-22 00:00:00', 101, 51, 1000),
(509, '2021-03-24 00:00:00', 102, 56, 5000),
(510, '2021-03-25 00:00:00', 103, 53, 3000),
(511, '2021-03-30 00:00:00', 102, 52, 2000),
(512, '2021-03-31 00:00:00', 101, 51, 5000),
(513, '2021-04-01 00:00:00', 102, 54, 5000),
(514, '2021-04-05 00:00:00', 103, 59, 3000),
(515, '2021-04-12 00:00:00', 102, 52, 2000),
(516, '2021-03-13 00:00:00', 101, 55, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruiker_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `permission` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`gebruiker_id`, `username`, `password`, `permission`) VALUES
(1, 'admin', 'welkom1', 2),
(2, 'user1', 'welkom2', 1),
(3, 'user2', 'welkom3', 1),
(31, 'ddwdwa', 'dwd', 1),
(32, 'waadd', 'dadadada', 1),
(36, 'aqwsedbml', '12345678', 1),
(38, 'rtfvgdugvergrehvyuerhsuyeguire', 'rtfvgdugvergrehvyuerhsuyeguire', 1),
(40, 'hfhfh', '234565434567', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locaties`
--

CREATE TABLE `locaties` (
  `locatie_id` int(11) NOT NULL,
  `plaatsnaam` varchar(50) DEFAULT NULL,
  `gebouw` varchar(50) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locaties`
--

INSERT INTO `locaties` (`locatie_id`, `plaatsnaam`, `gebouw`, `adres`, `postcode`, `img`) VALUES
(51, 'Den Haag', 'Kurhaus', NULL, NULL, 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Den_haag_Kurhaus_Hotel.JPG'),
(52, 'Den Haag', 'Strand Scheveningen', NULL, NULL, 'https://www.rtlnieuws.nl/sites/default/files/content/images/2019/08/26/ANP-75666538.jpg?itok=BfwI1ayL&offsetX=0&offsetY=0&cropWidth=1024&cropHeight=576&width=1024&height=576&impolicy=dynamic'),
(53, 'Den Haag', 'Malieveld', NULL, NULL, 'https://denhaag.com/sites/default/files/styles/image_paragraph_1000x580/public/b1d4290f-f7d0-4636-8332-69fe285e4ccd.jpg?h=2a397465&itok=gDtinD30'),
(54, 'Voorburg', 'St Maartenscollege', NULL, NULL, 'https://www.st-maartenscollege.nl/portals/795/images/Maartens%20gebouw_2019_07_17_3050.jpg?ver=2019-11-21-111300-563'),
(55, 'Leiden', 'mboRijnland', NULL, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_oXZX0Rw-C8R1KFXzKK7ccn8dlRKv9XjGYXCkNUNYQB301uJqRYfLEqA4-fncNomWSy4&usqp=CAU'),
(56, 'Leiden', 'Centraal Station', NULL, NULL, 'https://upload.wikimedia.org/wikipedia/commons/f/f2/Leiden%2C_ingang_station_Leiden_Centraal_foto10_2017-06-11_09.16.jpg'),
(57, 'Alphen a/d Rijn', 'Winkelcentrum Ridderhof', NULL, NULL, 'https://s3.amazonaws.com/gs-waymarking-images/08994319-f6a7-404e-aacc-b3e959cc3aa7_d.JPG'),
(58, 'Lisse', 'Veilinghallen', NULL, NULL, 'https://www.stedenbouw.nl/wp-content/uploads/2020/08/een-levendige-wijk-met-een-bloembollenverleden-kopieren.jpg'),
(59, 'Rotterdam', 'Erasmusbrug', NULL, NULL, 'https://live.staticflickr.com/1928/44964687792_65af51b449_b.jpg'),
(60, 'Delft', 'Grote Markt', NULL, NULL, 'https://assets-global.website-files.com/581110f944272e4a11871c01/591f5500f6db856bcc2a4dff_grand_place_brussels_belgium_05.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aanbiedingen`
--
ALTER TABLE `aanbiedingen`
  ADD PRIMARY KEY (`aanbiedingen_id`),
  ADD KEY `artiest_id` (`artiest_id`);

--
-- Indexes for table `artiesten`
--
ALTER TABLE `artiesten`
  ADD PRIMARY KEY (`artiest_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evenementen`
--
ALTER TABLE `evenementen`
  ADD PRIMARY KEY (`evenement_id`),
  ADD KEY `artiest_id` (`artiest_id`),
  ADD KEY `locatie_id` (`locatie_id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruiker_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `locaties`
--
ALTER TABLE `locaties`
  ADD PRIMARY KEY (`locatie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aanbiedingen`
--
ALTER TABLE `aanbiedingen`
  MODIFY `aanbiedingen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `artiesten`
--
ALTER TABLE `artiesten`
  MODIFY `artiest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `evenementen`
--
ALTER TABLE `evenementen`
  MODIFY `evenement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `locaties`
--
ALTER TABLE `locaties`
  MODIFY `locatie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aanbiedingen`
--
ALTER TABLE `aanbiedingen`
  ADD CONSTRAINT `aanbiedingen_ibfk_1` FOREIGN KEY (`artiest_id`) REFERENCES `artiesten` (`artiest_id`);

--
-- Constraints for table `evenementen`
--
ALTER TABLE `evenementen`
  ADD CONSTRAINT `evenementen_ibfk_1` FOREIGN KEY (`artiest_id`) REFERENCES `artiesten` (`artiest_id`),
  ADD CONSTRAINT `evenementen_ibfk_2` FOREIGN KEY (`locatie_id`) REFERENCES `locaties` (`locatie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
