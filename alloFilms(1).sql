-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 01:37 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alloFilms`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`movie_id`, `movie_title`, `movie_genre`, `movie_description`) VALUES
(1, 'Shining', 'horreur', 'IL PENSAIT SURVEILLER L''HÔTEL, MAIS IL ÉTAIT DÉJÀ GARDÉ… - Kubrick adapte le roman éponyme à la fois horrifique et fantastique de Stephen King. L''auteur fut d''ailleurs déçu par cette adaptation, ce qui n''est pas le cas des amateurs d''angoisse ... Véritable cauchemar visuel, Shining est une énigme, un mystère terrifiant. Jack Nicholson en auteur en panne d''inspiration, qui traque sa famille avec une hache à la main vous hantera à jamais. '),
(2, 'Bienvenue à Zombieland', 'horreur', ' ICI C''EST MORTEL - Cette comédie déjantée s''amuse avec les codes du film de zombies et raconte comment une équipe va lutter contre ces créatures dans une Amérique désertée. Gags et péripéties burlesques rythment cette comédie noire décalée. C''est après avoir visionné Shaun of the dead que Ruben Fleischer a eu envie de réaliser son premier long métrage, qui vous réserve des surprises ... '),
(3, 'Alien Le huitième passager', 'horreur', 'DANS L''ESPACE, PERSONNE NE VOUS ENTEND CRIER - Ridley Scott signe un film de science-fiction d''horreur devenu culte et raconte l''expédition cauchemardesque d''un équipage dans l''espace. Une créature inconnue et très hostile se retrouve enfermée avec les passagers et s''ensuit un survival éprouvant. Sigourney Weaver réinvente la féminité au cinéma en devenant la femme d''action par excellence. '),
(4, 'L''Exorciste', 'horreur', 'LE DIABLE A L''INTERIEUR - William Friedkin invente le film de possession avec L''Exorciste, dans lequel il met en scène une jeune fille possédée par le Diable qui doit se faire exorciser. Le réalisateur adapte l''oeuvre de William Peter Blatty et réinvente l''horreur à l''état pure. L''adaptation de la saga de l''auteur se poursuit après avec plusieurs autres films. '),
(5, 'Shaun of the Dead', 'horreur', 'UNE COMEDIE ROMANTIQUE ... AVEC DES ZOMBIES ! - Le réalisateur de Scott Pilgrim rassemble deux comiques dans cette comédie zombiesque loufoque. Des zombies envahissent Londres et s''ensuivent alors des péripéties cocasses et burlesques dans cette comédie mortelle, truffée de références aux films de zombies mais aussi d''horreur en général. '),
(6, 'Le Roi et l''Oiseau', 'animation', 'Charles V est un tyran mégalomane que seul un oiseau bavard ose défier et qui tombe amoureux d''une belle bergère dans un tableau de la chambre royale.'),
(7, 'Princesse Mononoké', 'animation', 'Ashitaka est à la recherche d''un remède à la malédiction de Tatarigami. Il se retrouve au milieu d''une guerre entre les dieux de la Forêt et Tatara.'),
(8, 'Le Voyage de Chihiro', 'animation', 'Lors du déménagement de sa famille, Chihiro, une fillette de 10 ans, erre dans un monde régi par les dieux, sorcières et monstres.'),
(9, 'New York : 11 septembre', 'documentaire', 'Le 11 septembre 2001, les deux buildings du World Trade Center s''écroulaient. Des milliers d''innocents et 343 pompiers disparaissent.'),
(10, 'De Nuremberg à Nuremberg', 'documentaire', 'De Nuremberg à Nuremberg est un film documentaire de Frédéric Rossif sur le régime nazi, dont le texte est écrit et lu par Philippe Meyer, et produit par Jean Frydman. Le titre fait référence aux rassemblements de masse nazis à partir de 1933 à Nuremberg, au début du règne de Hitler, et au procès de Nuremberg (1945-1946) après sa chute.'),
(11, 'When We Were Kings', 'documentaire', 'En 1974, à Kinshasa, a lieu une rencontre historique entre les 2 poids lourds les plus réputés des Etats-Unis, Mohammed Ali et George Foreman.'),
(12, 'Le Labyrinthe de Pan', 'fantastique', 'Dans l''Espagne fasciste de 1944, une jeune fille échappe à son beau-père cruel pour rejoindre un monde fantaisiste où elle est une princesse réincarnée.'),
(13, 'Edward aux mains d''argent', 'fantastique', 'Edward est la création d''un savant. Il possède des lames très tranchantes à la place des doigts. Il va faire l''objet de curiosité d''une petite ville.'),
(14, 'L''exorciste', 'horreur', 'Chris MacNeil ne sait plus quoi faire pour aider sa fille, victime de spasmes violents. On lui conseille de voir un exorciste, le Père Damien Karras.'),
(15, 'The Thing', 'horreur', 'Au cœur de l’Antarctique, une équipe de scientifiques découvre une créature gelée. Ramené à la vie, le monstre décime les membres de l''expédition.'),
(16, 'Massacre à la tronçonneuse', 'horreur', 'Une panne d''essence contraint 5 amis à s''arrêter. Non loin de là, une maison isolée attirent leur attention. 2 d''entre eux décident de s''y aventurer.'),
(17, 'L''Odyssée de l''espace', 'science-fiction', '2001 : L''Odyssée de l''espace" retrace, à travers différentes époques, le rôle joué par une intelligence inconnue dans l''évolution de l''humanité.'),
(18, 'Bienvenue à Gattaca', 'science-fiction', 'Dans un monde parfait, Gattaca est un centre d''études et de recherches spatiales pour des jeunes gens au patrimoine génétique impeccable.'),
(19, 'L''empire conte-attaque', 'science-fiction', 'Après la destruction de l''Etoile noire, l''Empire fait tout pour traquer et anéantir les rebelles qui se sont réfugiés sur la planète Hoth.'),
(20, 'Piège de cristal', 'action', 'John McClane, un flic de New York, débarque à Los Angeles. Mais au même moment, la tour qui abrite la soirée est envahie par un groupe de terroristes.'),
(21, 'Une journée en enfer', 'action', 'A New York, une bombe explose dans un grand magasin. Peu de temps après, un homme du nom de « Simon » contacte la police et revendique l''attentat.'),
(22, 'The raid 2', 'action', 'En mission d''infiltration au sein d’un syndicat du crime de Jakarta, Rama tente de protéger sa famille et de dénoncer la corruption.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
