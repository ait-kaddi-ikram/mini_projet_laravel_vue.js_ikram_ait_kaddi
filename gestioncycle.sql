-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 juin 2021 à 17:09
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestioncycle`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_Passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `email`, `mot_Passe`, `name`, `created_at`, `updated_at`) VALUES
(1, 'hjkkk52', '1234', 'djjfhfh', '2021-06-08 14:00:05', '2021-06-08 14:00:05'),
(2, 'admin88@gmail.com', '1234', 'admin', '2021-06-16 12:26:44', '2021-06-16 12:26:44');

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

CREATE TABLE `emplois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semestre` int(11) NOT NULL,
  `num_seance` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_Passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `cne`, `email`, `mot_Passe`, `nom`, `prenom`, `semestre`, `created_at`, `updated_at`) VALUES
(5, '556', 'ikram88@gmail.com', '1234', 'ikram', 'jjjj', 2, '2021-06-07 19:21:14', '2021-06-14 09:03:11'),
(9, '55655', 'tee@gmail.com', '1234', 'med', 'jjjj', 2, '2021-06-07 19:24:19', '2021-06-07 22:36:08'),
(10, '5565', 'teee@gmail.com', '1234', 'jjhh', 'jjjj', 2, '2021-06-07 19:25:08', '2021-06-07 19:25:08'),
(12, '56666', 'xksjhd', '1234', 'jshhd', 'kdkkd', 1, NULL, NULL),
(13, '56336', 'kskk', '1234', 'sjdkdk', 'kdkldl', 1, NULL, NULL),
(14, '4555', 'djj@fjjf.com', '1234', 'dndjj', 'hdjd', 6, NULL, NULL),
(15, '53666', 'jjf@jff.com', '1234', 'jfjj', 'kfkk', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2021_06_06_132240_create_séances_table', 12),
(28, '2021_06_06_131929_create_salles_table', 13),
(56, '2021_06_06_125108_create_profs_table', 30),
(61, '2021_06_06_125614_create_etudiants_table', 35),
(62, '2021_06_06_125434_create_pves_table', 36),
(67, '2021_06_06_124605_create_admins_table', 39),
(68, '2014_10_12_000000_create_users_table', 40),
(88, '2021_06_06_203207_create_ensiegnes_table', 57),
(128, '2021_06_06_131044_create_modules_table', 90),
(129, '2021_06_06_164634_create_seancs_table', 91),
(130, '2021_06_06_133127_create_emplois_table', 92),
(132, '2021_06_06_131506_create_suits_table', 93);

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_prof` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `semestre`, `id_prof`) VALUES
(1, 'jhhfhf', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_Passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id`, `email`, `mot_Passe`, `nom`, `prenom`, `created_at`, `updated_at`) VALUES
(5, 'prof@hjd.vjjf', '1234', 'prof', 'p', '2021-06-08 13:45:14', '2021-06-08 13:45:14'),
(6, 'prof109@gmail.com', '1234', 'p1', 'p1', '2021-06-08 15:48:50', '2021-06-13 22:02:58'),
(7, 'prof1@gmail.com', '1234', 'prof1', 'prof1', NULL, NULL),
(8, 'prof2@gmail.com', '1234', 'prof2', 'prof2', NULL, NULL),
(9, 'prof3@gmail.com', '1234', 'prof3', 'prof3', NULL, NULL),
(10, 'prof4@gmail.com', '1234', 'prof4', 'prof4', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pves`
--

CREATE TABLE `pves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_pfe` date NOT NULL,
  `id_etudiant` bigint(20) UNSIGNED NOT NULL,
  `id_prof` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_salle` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `seancs`
--

CREATE TABLE `seancs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_module` bigint(20) UNSIGNED NOT NULL,
  `num_salle` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suits`
--

CREATE TABLE `suits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` decimal(4,2) NOT NULL,
  `id_etudiant` bigint(20) UNSIGNED NOT NULL,
  `id_module` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `suits`
--

INSERT INTO `suits` (`id`, `note`, `id_etudiant`, `id_module`, `created_at`, `updated_at`) VALUES
(2, '15.00', 5, 1, NULL, '2021-06-16 12:28:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mot_Passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fonction`, `email`, `email_verified_at`, `mot_Passe`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '1234', NULL, NULL, NULL),
(2, 'Etudiant', 'ikram88@gmail.com', NULL, '1234', NULL, '2021-06-08 14:10:18', '2021-06-14 09:03:11'),
(3, 'proffesseur', 'prof109@gmail.com', NULL, '1234', NULL, '2021-06-08 15:48:50', '2021-06-13 22:02:58'),
(9, 'admin', 'admin88@gmail.com', NULL, '1234', NULL, '2021-06-16 12:26:44', '2021-06-16 12:26:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etudiants_cne_unique` (`cne`),
  ADD UNIQUE KEY `etudiants_email_unique` (`email`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_nom_unique` (`nom`),
  ADD KEY `modules_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profs_email_unique` (`email`);

--
-- Index pour la table `pves`
--
ALTER TABLE `pves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pves_id_etudiant_foreign` (`id_etudiant`),
  ADD KEY `pves_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seancs`
--
ALTER TABLE `seancs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seancs_id_module_foreign` (`id_module`),
  ADD KEY `seancs_num_salle_foreign` (`num_salle`);

--
-- Index pour la table `suits`
--
ALTER TABLE `suits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suits_id_etudiant_foreign` (`id_etudiant`),
  ADD KEY `suits_id_module_foreign` (`id_module`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pves`
--
ALTER TABLE `pves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `seancs`
--
ALTER TABLE `seancs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suits`
--
ALTER TABLE `suits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `profs` (`id`);

--
-- Contraintes pour la table `pves`
--
ALTER TABLE `pves`
  ADD CONSTRAINT `pves_id_etudiant_foreign` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pves_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `profs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `seancs`
--
ALTER TABLE `seancs`
  ADD CONSTRAINT `seancs_id_module_foreign` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seancs_num_salle_foreign` FOREIGN KEY (`num_salle`) REFERENCES `salles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `suits`
--
ALTER TABLE `suits`
  ADD CONSTRAINT `suits_id_etudiant_foreign` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `suits_id_module_foreign` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
