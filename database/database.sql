-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 12 juin 2021 à 15:00
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `systaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `smallDesc` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `id_user`, `title`, `smallDesc`, `content`, `categorie`) VALUES
(6, 3, 'Lorem Ipsum', 'the first test (in lorem ipsum !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at semper dui, in interdum libero. Vestibulum eget tristique velit, sed tristique enim. Ut iaculis congue ultricies. Nulla ut gravida nunc, ac mattis elit. Quisque at volutpat ipsum. In in blandit libero. Proin sit amet convallis dolor, in rhoncus neque.  Morbi ac lectus nulla. Phasellus lobortis leo a urna eleifend, id rhoncus quam fringilla. Maecenas a odio bibendum, facilisis nibh eget, tincidunt odio. Phasellus nec erat mauris. Nunc congue non risus nec commodo. Integer magna nunc, pharetra nec enim at, pretium volutpat lorem. Vivamus tellus nulla, tristique faucibus dictum at, laoreet ut nisi. Donec volutpat sapien in velit placerat, nec fringilla ligula dapibus. Ut sed ipsum in nibh lobortis rutrum. Maecenas condimentum dignissim pellentesque. Donec feugiat lacus et tellus vehicula vehicula.  Ut efficitur urna non turpis cursus congue. Sed lacinia facilisis risus, vel iaculis arcu. Sed nec enim nec eros semper mollis at at nunc. Cras nec dignissim metus, ac sagittis sapien. Ut lorem felis, ornare quis nisi eu, venenatis consequat orci. Donec mauris purus, egestas ut ornare vitae, dictum eget elit. Morbi efficitur nunc ac dictum ullamcorper. Fusce et erat enim. Sed eu sagittis diam. Morbi vehicula massa et quam mattis, vitae imperdiet dui pellentesque. In sed justo maximus velit posuere elementum id quis arcu. Etiam at sem lacus. Morbi ac sapien eu magna gravida cursus eget quis sem. Duis ut turpis non est scelerisque tincidunt vel a arcu. Nunc convallis lacus id dui ullamcorper, non elementum turpis mattis.  Curabitur eu imperdiet augue, sit amet varius sapien. Proin consectetur sem vitae dolor tempor lobortis. Duis consequat blandit est, et efficitur quam vestibulum convallis. Donec dapibus velit sem, eget facilisis purus rutrum malesuada. Curabitur ligula leo, feugiat nec massa id, pellentesque interdum arcu. Proin semper tempor lorem ac ultrices. Nam ac mauris at sapien facilisis condimentum. Duis maximus mauris a nulla tincidunt blandit. Suspendisse dignissim quam vitae tortor feugiat, pharetra eleifend diam dictum. Vestibulum et erat sit amet tellus ultrices finibus. Sed a ultrices nisi, ac auctor lacus. Donec et sem ut orci mattis commodo. Quisque tempor, neque nec venenatis fringilla, sem libero commodo lorem, sit amet ultricies tellus sapien fringilla lorem. Nunc maximus metus est, at dictum sapien viverra vitae. Pellentesque odio ante, sagittis in pellentesque in, pretium eu libero.  Nulla fermentum dapibus suscipit. Sed a suscipit libero, vitae bibendum nisi. Phasellus sit amet auctor lacus. Vivamus et sem eros. Donec rhoncus ex et ligula iaculis, sed convallis mauris varius. Nulla venenatis purus dolor, in rhoncus tellus tristique nec. Nulla facilisi. Pellentesque eleifend tempus eros sit amet vestibulum. In sit amet tortor aliquam, tempus quam eget, ullamcorper libero. Vestibulum porttitor velit suscipit justo porttitor sagittis. Donec pellentesque at sem eget ullamcorper. Duis in elementum leo. Morbi sed justo non nisi sagittis luctus ac sit amet orci. Fusce eleifend metus in lectus pretium, quis viverra elit laoreet. Nulla commodo enim et velit congue, in fringilla quam ornare.', 'spaceX'),
(7, 3, 'Another lorem', 'the second test with lorem ipsum, and a longer description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at semper dui, in interdum libero. Vestibulum eget tristique velit, sed tristique enim. Ut iaculis congue ultricies. Nulla ut gravida nunc, ac mattis elit. Quisque at volutpat ipsum. In in blandit libero. Proin sit amet convallis dolor, in rhoncus neque.  Morbi ac lectus nulla. Phasellus lobortis leo a urna eleifend, id rhoncus quam fringilla. Maecenas a odio bibendum, facilisis nibh eget, tincidunt odio. Phasellus nec erat mauris. Nunc congue non risus nec commodo. Integer magna nunc, pharetra nec enim at, pretium volutpat lorem. Vivamus tellus nulla, tristique faucibus dictum at, laoreet ut nisi. Donec volutpat sapien in velit placerat, nec fringilla ligula dapibus. Ut sed ipsum in nibh lobortis rutrum. Maecenas condimentum dignissim pellentesque. Donec feugiat lacus et tellus vehicula vehicula.  Ut efficitur urna non turpis cursus congue. Sed lacinia facilisis risus, vel iaculis arcu. Sed nec enim nec eros semper mollis at at nunc. Cras nec dignissim metus, ac sagittis sapien. Ut lorem felis, ornare quis nisi eu, venenatis consequat orci. Donec mauris purus, egestas ut ornare vitae, dictum eget elit. Morbi efficitur nunc ac dictum ullamcorper. Fusce et erat enim. Sed eu sagittis diam. Morbi vehicula massa et quam mattis, vitae imperdiet dui pellentesque. In sed justo maximus velit posuere elementum id quis arcu. Etiam at sem lacus. Morbi ac sapien eu magna gravida cursus eget quis sem. Duis ut turpis non est scelerisque tincidunt vel a arcu. Nunc convallis lacus id dui ullamcorper, non elementum turpis mattis.  Curabitur eu imperdiet augue, sit amet varius sapien. Proin consectetur sem vitae dolor tempor lobortis. Duis consequat blandit est, et efficitur quam vestibulum convallis. Donec dapibus velit sem, eget facilisis purus rutrum malesuada. Curabitur ligula leo, feugiat nec massa id, pellentesque interdum arcu. Proin semper tempor lorem ac ultrices. Nam ac mauris at sapien facilisis condimentum. Duis maximus mauris a nulla tincidunt blandit. Suspendisse dignissim quam vitae tortor feugiat, pharetra eleifend diam dictum. Vestibulum et erat sit amet tellus ultrices finibus. Sed a ultrices nisi, ac auctor lacus. Donec et sem ut orci mattis commodo. Quisque tempor, neque nec venenatis fringilla, sem libero commodo lorem, sit amet ultricies tellus sapien fringilla lorem. Nunc maximus metus est, at dictum sapien viverra vitae. Pellentesque odio ante, sagittis in pellentesque in, pretium eu libero.  Nulla fermentum dapibus suscipit. Sed a suscipit libero, vitae bibendum nisi. Phasellus sit amet auctor lacus. Vivamus et sem eros. Donec rhoncus ex et ligula iaculis, sed convallis mauris varius. Nulla venenatis purus dolor, in rhoncus tellus tristique nec. Nulla facilisi. Pellentesque eleifend tempus eros sit amet vestibulum. In sit amet tortor aliquam, tempus quam eget, ullamcorper libero. Vestibulum porttitor velit suscipit justo porttitor sagittis. Donec pellentesque at sem eget ullamcorper. Duis in elementum leo. Morbi sed justo non nisi sagittis luctus ac sit amet orci. Fusce eleifend metus in lectus pretium, quis viverra elit laoreet. Nulla commodo enim et velit congue, in fringilla quam ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at semper dui, in interdum libero. Vestibulum eget tristique velit, sed tristique enim. Ut iaculis congue ultricies. Nulla ut gravida nunc, ac mattis elit. Quisque at volutpat ipsum. In in blandit libero. Proin sit amet convallis dolor, in rhoncus neque.  Morbi ac lectus nulla. Phasellus lobortis leo a urna eleifend, id rhoncus quam fringilla. Maecenas a odio bibendum, facilisis nibh eget, tincidunt odio. Phasellus nec erat mauris. Nunc congue non risus nec commodo. Integer magna nunc, pharetra nec enim at, pretium volutpat lorem. Vivamus tellus nulla, tristique faucibus dictum at, laoreet ut nisi. Donec volutpat sapien in velit placerat, nec fringilla ligula dapibus. Ut sed ipsum in nibh lobortis rutrum. Maecenas condimentum dignissim pellentesque. Donec feugiat lacus et tellus vehicula vehicula.  Ut efficitur urna non turpis cursus congue. Sed lacinia facilisis risus, vel iaculis arcu. Sed nec enim nec eros semper mollis at at nunc. Cras nec dignissim metus, ac sagittis sapien. Ut lorem felis, ornare quis nisi eu, venenatis consequat orci. Donec mauris purus, egestas ut ornare vitae, dictum eget elit. Morbi efficitur nunc ac dictum ullamcorper. Fusce et erat enim. Sed eu sagittis diam. Morbi vehicula massa et quam mattis, vitae imperdiet dui pellentesque. In sed justo maximus velit posuere elementum id quis arcu. Etiam at sem lacus. Morbi ac sapien eu magna gravida cursus eget quis sem. Duis ut turpis non est scelerisque tincidunt vel a arcu. Nunc convallis lacus id dui ullamcorper, non elementum turpis mattis.  Curabitur eu imperdiet augue, sit amet varius sapien. Proin consectetur sem vitae dolor tempor lobortis. Duis consequat blandit est, et efficitur quam vestibulum convallis. Donec dapibus velit sem, eget facilisis purus rutrum malesuada. Curabitur ligula leo, feugiat nec massa id, pellentesque interdum arcu. Proin semper tempor lorem ac ultrices. Nam ac mauris at sapien facilisis condimentum. Duis maximus mauris a nulla tincidunt blandit. Suspendisse dignissim quam vitae tortor feugiat, pharetra eleifend diam dictum. Vestibulum et erat sit amet tellus ultrices finibus. Sed a ultrices nisi, ac auctor lacus. Donec et sem ut orci mattis commodo. Quisque tempor, neque nec venenatis fringilla, sem libero commodo lorem, sit amet ultricies tellus sapien fringilla lorem. Nunc maximus metus est, at dictum sapien viverra vitae. Pellentesque odio ante, sagittis in pellentesque in, pretium eu libero.  Nulla fermentum dapibus suscipit. Sed a suscipit libero, vitae bibendum nisi. Phasellus sit amet auctor lacus. Vivamus et sem eros. Donec rhoncus ex et ligula iaculis, sed convallis mauris varius. Nulla venenatis purus dolor, in rhoncus tellus tristique nec. Nulla facilisi. Pellentesque eleifend tempus eros sit amet vestibulum. In sit amet tortor aliquam, tempus quam eget, ullamcorper libero. Vestibulum porttitor velit suscipit justo porttitor sagittis. Donec pellentesque at sem eget ullamcorper. Duis in elementum leo. Morbi sed justo non nisi sagittis luctus ac sit amet orci. Fusce eleifend metus in lectus pretium, quis viverra elit laoreet. Nulla commodo enim et velit congue, in fringilla quam ornare.', 'nasa');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`) VALUES
(1, 'Nasa'),
(2, 'Space x'),
(3, 'USA'),
(4, 'Europe');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `pass`) VALUES
(3, NULL, 'admin', '$2y$10$WZSdTtGNoYMWf/nn4nmKjOHDixwiY117Le3XyJh9U9NLnGjrEv30G'),
(4, NULL, 'a', '$2y$10$8vBc3Hs0uDXmzjFba84feupmM8Jd04shn77GZvEGCz8a5PXZpmhti');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
