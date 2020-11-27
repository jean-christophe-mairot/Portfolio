-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 nov. 2020 à 17:38
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web_dev_jcmairot`
--

-- --------------------------------------------------------

--
-- Structure de la table `dev_web`
--

CREATE TABLE `dev_web` (
  `id_dev_web` int(3) NOT NULL,
  `description` text DEFAULT NULL,
  `wd_image1` varchar(255) DEFAULT NULL,
  `wd_image2` varchar(255) DEFAULT NULL,
  `wd_video1` varchar(255) DEFAULT NULL,
  `wd_video2` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `poste_wd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dev_web`
--

INSERT INTO `dev_web` (`id_dev_web`, `description`, `wd_image1`, `wd_image2`, `wd_video1`, `wd_video2`, `titre`, `poste_wd`) VALUES
(1, 'En travaillant en front-end, je prends principalement en charge la création d’une interface claire et simple pour les internautes. Inversement, en back-end j\'interviens principalement sur le back-office ainsi que sur tous les éléments d’un projet web qui sont « invisibles » mais indispensables lorsque l’on navigue sur un site Internet.\r\n', '../asset/img/', '../asset/img/', NULL, NULL, 'Back-end | Front-end', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fiche_projet`
--

CREATE TABLE `fiche_projet` (
  `id_fiche_projet` int(3) NOT NULL,
  `objectif1` varchar(255) DEFAULT NULL,
  `objectif2` varchar(255) DEFAULT NULL,
  `objectif3` varchar(255) DEFAULT NULL,
  `objectif4` varchar(255) DEFAULT NULL,
  `objectif5` varchar(255) DEFAULT NULL,
  `objectf6` varchar(255) DEFAULT NULL,
  `objectif7` varchar(255) DEFAULT NULL,
  `objectif8` varchar(255) DEFAULT NULL,
  `objectif9` varchar(255) DEFAULT NULL,
  `objectif10` varchar(255) DEFAULT NULL,
  `techno1` varchar(255) DEFAULT NULL,
  `techno2` varchar(255) DEFAULT NULL,
  `techno3` varchar(255) DEFAULT NULL,
  `techno4` varchar(255) DEFAULT NULL,
  `techno5` varchar(255) DEFAULT NULL,
  `titre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `game_design`
--

CREATE TABLE `game_design` (
  `id_game_design` int(3) NOT NULL,
  `description` text DEFAULT NULL,
  `gd_image1` text DEFAULT NULL,
  `gd_image2` text DEFAULT NULL,
  `gd_video1` text DEFAULT NULL,
  `gd_video2` text DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `poste_gd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `game_design`
--

INSERT INTO `game_design` (`id_game_design`, `description`, `gd_image1`, `gd_image2`, `gd_video1`, `gd_video2`, `titre`, `poste_gd`) VALUES
(25, 'Je devais avoir un bon esprit de synthèse et être un bon communiquant afin de transmettre de manière claire et concise mes idées au reste de l\'équipe (édition de documentation). \r\nJe réalisais des esquisses avant d\'utiliser les logiciels spécialisés, ce qui suppose de bonnes aptitudes en dessin et une bonne vision de l\'espace et des perspectives. Dans le cadre de mon contrat, la société m\'a envoyé travailler chez Black Cactus à Londres sur un projet commun (Warrior King).\r\nJe travaillais en collaboration avec différentes entreprises : Kynogon, Eugen systèmes, Super X studio', 'asset/img/game_designer.png', 'asset/img/', NULL, NULL, 'GameDesigner', ''),
(26, 'Avant la mise sur le marché, je devais  repérer tous les points faibles et  les bugs. Mon rôle était de contrôler la qualité et la justesse du gameplay \r\n(maniabilité, fonctionnalités, ambiance et difficulté générale). J\'utilisais différents outils tels que des  bases de données, des logiciels de reporting,  \r\ndes logiciels de capture (vidéo, image)', 'asset/img/testeur.jpg', 'asset/img/', NULL, NULL, 'Testeur ', ''),
(27, 'Un vieil explorateur vous confie un terrible secret et vous demande de vous rendre dans une mystérieuse contrée nommée l\'Amerzone d\'où il a ramené - un demi-siècle plus tôt - un oeuf gigantesque et énigmatique pouvant expliquer le secret des \" grands oiseaux blancs d\'Amerzone \"...\r\nC\'est de vous désormais que dépend la survie de cette espèce animale inconnue et unique !', 'asset/img/amerzone.jpg', 'asset/img/ingame_lamerzone.jpg', 'https://www.jeuxvideo.com/jeux/pc/00002958-l-amerzone.htm', NULL, 'Amerzone', 'Testeur '),
(28, 'jeu vidéo de tir à la première personne sorti en 1998 sur PC. \r\nIl a été développé par Monolith Productions et a été porté sur AmigaOS, \r\nLinux et Mac OS par Hyperion Entertainment en 2001.', 'asset/img/shopo.jpg', 'asset/img/ingame_shogo.jpg', 'https://www.jeuxvideo.com/jeux/jeu-57343/', NULL, 'Shogo', 'Testeur'),
(29, 'Syberia est un jeu vidéo d\'aventure en pointer-et-cliquer belgo-canadien réalisé par Benoît Sokal. Développé et édité par Microïds, \r\nil est sorti en 2002 sur PC, puis a été porté sur PlayStation 2 et Xbox en 2003, sur Nintendo DS en 2008 et sur Nintendo Switch9 en 2017. \r\nL\'héroïne du jeu, Kate Walker, est une avocate américaine chargée de conclure le rachat de l\'usine d\'automates familiale des Voralberg \r\ndans le petit village alpin de Valadilène. Mais la révélation de l\'existence d\'un héritier potentiel, Hans Voralberg, qui a disparu en Europe de l\'Est, \r\ncontraint Kate à se lancer dans un voyage qui l\'emmène toujours plus loin sur les traces de Hans et de ses automates de génie, \r\nà travers des lieux de plus en plus étranges. \r\nSyberia est un succès critique et commercial. Le jeu donne lieu à deux suites, Syberia II en 2004 et Syberia III en 2017.\r\n', 'asset/img/syberia1.jpg', 'asset/img/ingame_syberia.jpg', 'https://www.jeuxvideo.com/jeux/switch/jeu-935649/', NULL, 'Syberia I & II', 'Game designer | Testeur'),
(30, 'Ben Hur sur PS2 est un jeu de courses de chars. \r\nPlusieurs variantes vous sont proposées, comme le Défi de Chronos vous permettant de jouer en \r\ncontre-la-montre ou encore la Course à la Mort où le gagnant est celui qui est capable de survivre à ces terribles jeux antiques. \r\nLe jeu vous permet également d\'utiliser des armes de jet et de lancer des sorts pour rendre la tâche un peu plus ardue à vos adversaires.', 'asset/img/benhur_ps2.jpg', 'asset/img/ingame_benhur.jpg', 'https://www.jeuxvideo.com/jeux/playstation-2-ps2/00009271-ben-hur.htm', NULL, 'Benhur (PS2)', 'Lead Game designer'),
(31, 'Halloween Racer sur Gameboy est un jeu de courses/action. Sorcières, \r\nlutins et monstres en tout genre veulent à tout prix le trophée d\'Halloween.\r\nPièges et armes, tous les moyens sont bons pour arriver le premier sur la ligne d\'arrivée.', 'asset/img/halloween_racer.jpg', 'asset/img/ingame_halloween-racer.png', 'https://www.jeuxvideo.com/jeux/gameboy-g-boy/00007367-halloween-racer.htm', NULL, 'Haloween racer (psx, game boy)', 'Game designer | Testeur'),
(32, 'Tennis Masters Series est un jeu de sport sur PC. \r\nLe jeu comporte un total de 67 joueurs aux caractéristiques diverses ainsi que 9 tournois réels fidèlement reproduits. \r\nLe mode solo permet de faire évoluer un joueur en remportant des tournois afin de suivre sa progression dans le classement des meilleurs joueurs. \r\nUn mode multijoueur pour jouer jusqu\'à 4 joueurs est aussi disponible.\r\n', 'asset/img/tennis_master_series.jpg', 'asset/img/ingame_tennis_master_serie.jpg', 'https://www.jeuxvideo.com/jeux/jeu-61265/', NULL, 'Tennis master  series (pc/xbox)', 'Game designer'),
(33, 'Far Gate est un jeu stratégie en 3D temps réel sur PC dans lequel vous devez conquérir d\'autres systèmes solaires. \r\nDe la science-fiction donc. Les 75 vaisseaux disponibles se répartissent en trois races différentes. \r\nLa campagne solo comporte 16 missions alors que quatre joueurs peuvent d\'affronter simultanément sur Internet.', 'asset/img/far_gate.jpg', 'asset/img/ingame_far-gate.jpg', 'https://www.jeuxvideo.com/jeux/pc/00004352-far-gate.htm', NULL, 'Fargate (pc)', '');

-- --------------------------------------------------------

--
-- Structure de la table `graph_vfx`
--

CREATE TABLE `graph_vfx` (
  `id_graphvfx` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `gvfx_image1` text DEFAULT NULL,
  `gvfx_image2` text DEFAULT NULL,
  `gvfx_video1` text DEFAULT NULL,
  `gvfx_video2` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `poste_vfx` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `graph_vfx`
--

INSERT INTO `graph_vfx` (`id_graphvfx`, `titre`, `gvfx_image1`, `gvfx_image2`, `gvfx_video1`, `gvfx_video2`, `description`, `poste_vfx`) VALUES
(2, 'Graphiste | VFX', 'asset/img/nuke_vfx.png', '../asset/img/', NULL, '', 'Digital effects (couramment abrégé en digital FX ou FX) \r\nsont les différents processus par lesquels les images sont créés ou manipulées. \r\nIls impliquent souvent l\'intégration de la photographie et de l\'image générée par ordinateur \r\n(CGI) afin de créer des environnements qui ont l\'air réaliste, \r\net qu\'il serait dangereux, coûteux, voire impossible, de capturer en prise de vues réelle.', NULL),
(3, ' Rotoscopie', 'asset/img/rotoscopie.png', '../asset/img/', NULL, '', 'La rotoscopie est une technique cinématographique qui consiste à relever image par image \r\nles contours d\'une figure filmée en prise de vue réelle pour en transcrire la forme et \r\nles actions. Ce procédé permet de reproduire avec réalisme la dynamique \r\ndes mouvements des sujets filmés.\r\n', NULL),
(4, 'Restauration Numérique', 'asset/img/restonum.jpg', '../asset/img/', NULL, '', 'J\'assure la retouche d\'images animées au moyen de logiciels spécialisés. \r\nAprès numérisation du support de départ ayant subi une détérioration avec le temps ou suite à de mauvaises manipulations, \r\nje restaure de manière automatique et/ou manuelle en respectant un cadre déontologique. \r\n\r\n\r\nCes films sont destinés à la sortie en dvd/blu-ray, \r\nau festival de Cannes, etc..... \r\npour les sociétés Gaumont, le CNC, TF1, ARTE......', NULL),
(6, 'Ne le dis à personne | VFX', 'asset/img/ne_le_dis_a_personne2.jpg', '../asset/img/', NULL, '    \r\n\r\nhttp://player.allocine.fr/18703711.html\r\n   \r\n\r\n\r\n', 'Graphiste VFX', NULL),
(10, 'Brigades du tigre | VFX', 'asset/img/ob_1e3078_lesbrigadesdutigre.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18414315.html', 'Graphiste VFX', NULL),
(11, 'Hors de prix | VFX', 'asset/img/51Ob3u0IeBL._SY355_.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18707307.html', 'Graphiste VFX', NULL),
(12, 'Alexandre | VFX', 'asset/img/alexandre_oliver_stone.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18373462.html', 'Graphiste VFX', NULL),
(13, 'Faubourg 36 | VFX Rotoscopie', 'asset/img/74254-faubourg-36-950x0-1.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18820902.html', 'Graphiste VFX | Rotoscopie', NULL),
(14, 'L’Enfer | VFX', 'asset/img/L_enfer.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18927121.html', 'Graphiste VFX', NULL),
(16, 'Films des fréres Lumière | Restauration Numérique', 'asset/img/572467.jpg', '../asset/img/', NULL, 'https://www.youtube.com/embed/MSU99gmzn0Q', 'Restauration Numérique', NULL),
(17, 'Les Tontons flingueurs | Restauration Numérique', 'asset/img/Tontons.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18738856.html', 'Restauration Numérique', NULL),
(18, 'L’ours | Restauration Numérique', 'asset/img/L_Ours.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/18806432.html', 'Restoration Numérique', NULL),
(19, 'Asterix et Cléopatre | Restauration Numérique', 'asset/img/b0f35fb9-43cc-4344-b1dc-f9153d324309_2.jpg', '../asset/img/', NULL, 'https://www.youtube.com/embed/HvKQjdhVRDo', 'Restoration Numérique', NULL),
(20, 'Lucky Luke : dasy town | Restauration Numérique', 'asset/img/lucky-luke-daisy-town-.webp', '../asset/img/', NULL, 'https://www.youtube.com/embed/UZsrwREzjig', 'Restoration Numérique', NULL),
(21, '17ème parallèle | Restauration Numérique', 'asset/img/17parallele.jpg', '../asset/img/', NULL, 'https://www.youtube.com/embed/22Gif6ZW2pw', 'Restoration Numérique', NULL),
(22, 'Le Corbeau | Restauration Numérique', 'asset/img/le_corbeau.jpg', '../asset/img/', NULL, 'http://player.allocine.fr/19442842.html', 'Restoration Numérique', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user` int(3) NOT NULL,
  `civilite` varchar(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(20) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user`, `civilite`, `nom`, `prenom`, `email`, `pseudo`, `mdp`, `ville`, `adresse`, `codepostal`, `statut`) VALUES
(1, 'm', 'Mairot', 'Jean Christophe', 'jcmairot@gmail.com', 'zaza', 'cc302142e25cf6ecb3419cf7b7f17579', 'Montereau-Fault-Yonne', '2 chemin de la porte de paris', 77130, 0),
(2, 'm', 'Mairot', 'Jean', 'zarastross@gmail.com', 'dada', 'c208ed8309cbee3145b0f4b17312f013', 'Montereau-Fault-Yonne', '2 chemin de la porte de paris', 77130, 0),
(3, 'm', 'Mairot', 'Jean', 'zarastros@gmail.com', 'tata', 'cc302142e25cf6ecb3419cf7b7f17579', 'Montereau-Fault-Yonne', '2 chemin de la porte de paris', 77130, 0),
(4, 'm', 'Mairot', 'Jean', 'zarastrs@gmail.com', 'fafa', 'cc302142e25cf6ecb3419cf7b7f17579', 'Montereau-Fault-Yonne', '2 chemin de la porte de paris', 77130, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dev_web`
--
ALTER TABLE `dev_web`
  ADD PRIMARY KEY (`id_dev_web`);

--
-- Index pour la table `fiche_projet`
--
ALTER TABLE `fiche_projet`
  ADD PRIMARY KEY (`id_fiche_projet`);

--
-- Index pour la table `game_design`
--
ALTER TABLE `game_design`
  ADD PRIMARY KEY (`id_game_design`);

--
-- Index pour la table `graph_vfx`
--
ALTER TABLE `graph_vfx`
  ADD PRIMARY KEY (`id_graphvfx`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dev_web`
--
ALTER TABLE `dev_web`
  MODIFY `id_dev_web` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fiche_projet`
--
ALTER TABLE `fiche_projet`
  MODIFY `id_fiche_projet` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `game_design`
--
ALTER TABLE `game_design`
  MODIFY `id_game_design` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `graph_vfx`
--
ALTER TABLE `graph_vfx`
  MODIFY `id_graphvfx` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
