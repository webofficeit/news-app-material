-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 02:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_homoeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_news`
--

CREATE TABLE `article_news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `video` longtext COLLATE utf8_unicode_ci,
  `media_id` int(11) DEFAULT NULL,
  `comment` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `article_news`
--

INSERT INTO `article_news` (`id`, `category_id`, `title`, `content`, `created`, `enabled`, `video`, `media_id`, `comment`) VALUES
(60, 20, 'BASIC VIDEO PART 1', '<p>BASIC VIDEO PART 1</p>', '2018-05-25 04:39:06', 1, 'https://www.youtube.com/watch?v=WHYVjjcooHE&feature=youtu.be', 77, 1),
(61, 20, 'BASIC VIDEO PART 2', '<p>BASIC VIDEO PART 2</p>', '2018-05-25 04:40:04', 1, 'https://www.youtube.com/watch?v=0UBSi2-BVjg&feature=youtu.be', 78, 1),
(62, 20, 'BASIC VIDEO PART 3', '<p>BASIC VIDEO PART 3</p>', '2018-05-25 04:40:45', 1, 'https://www.youtube.com/watch?v=a5S-bw6K3g0&feature=youtu.be', 79, 1),
(63, 20, 'BASIC VIDEO PART 4', '<p>BASIC VIDEO PART 4</p>', '2018-05-25 04:41:24', 1, 'https://www.youtube.com/watch?v=eU8hPDvkwuI&feature=youtu.be', 80, 1),
(64, 20, 'BASIC VIDEO PART 5', '<p>BASIC VIDEO PART 5</p>', '2018-05-25 04:42:03', 1, 'https://www.youtube.com/watch?v=YCab52xogpE&feature=youtu.be', 81, 1),
(65, 20, 'BASIC VIDEO PART 6', '<p>BASIC VIDEO PART 6</p>', '2018-05-25 04:43:35', 1, 'https://www.youtube.com/watch?v=CloX-QgbVU8&feature=youtu.be', 82, 1),
(66, 20, 'BASIC VIDEO PART 7', '<p>BASIC VIDEO PART 7</p>', '2018-05-25 04:45:48', 1, 'https://www.youtube.com/watch?v=gkzAW9Q9JLs&feature=youtu.be', 83, 1),
(67, 20, 'BASIC VIDEO PART 8', '<p>BASIC VIDEO PART 8</p>', '2018-05-25 04:51:19', 1, 'https://www.youtube.com/watch?v=ODm5mnZ68_c&feature=youtu.be', 84, 1),
(68, 20, 'Aphorism 001 Hindi', '<p>Aphorism 001 Hindi</p>', '2018-05-25 04:53:04', 1, 'https://www.youtube.com/watch?v=QQUxVgwyajQ&feature=youtu.be', 85, 1),
(69, 20, 'Cookery show final1', '<p>Cookery show final1</p>', '2018-05-25 04:58:43', 1, 'https://www.youtube.com/watch?v=tDV3W1kh7t8&feature=youtu.be', 86, 1),
(70, 20, 'Surrogates final', '<p>Surrogates final</p>', '2018-05-25 05:10:51', 1, 'https://www.youtube.com/watch?v=L08Ptv8ozPY&feature=youtu.be', 87, 1),
(71, 21, 'Is it safe to depend on Borieck’s Repertory ?', '<p>Is it safe to depend on Borieck&rsquo;s Repertory ?</p>', '2018-05-25 05:13:24', 1, 'https://www.youtube.com/watch?v=5VkNbIKibFc&feature=youtu.be', 88, 1),
(72, 21, 'How to manage an acute case', '<p>How to manage an acute case</p>', '2018-05-25 05:20:32', 1, 'https://www.youtube.com/watch?v=lTsxDcnlumc&feature=youtu.be', 89, 1),
(73, 21, 'Polypharmacy', '<p>Polypharmacy final video interview</p>', '2018-05-25 05:31:12', 1, 'https://www.youtube.com/watch?v=d39-gmMMXZU&feature=youtu.be', 90, 1),
(74, 21, 'A review on different Methodologies', '<p>A review on different Methodologies</p>', '2018-05-25 05:35:20', 1, 'https://www.youtube.com/watch?v=zXhh7NcpFwI&feature=youtu.be', 91, 1),
(75, 21, 'Do we have pain killers in Homoeopathy?', '<p>Do we have pain killers in Homoeopathy?</p>', '2018-05-25 05:40:18', 1, 'https://www.youtube.com/watch?v=mkxMLva0Dcc&feature=youtu.be', 92, 1),
(76, 21, 'Answering our critics', '<p>Answering our critics</p>', '2018-05-25 05:41:45', 1, 'https://www.youtube.com/watch?v=NT3C3xmzgdo&feature=youtu.be', 93, 1),
(77, 21, 'Importance of clinical diagnosis in Homoeopathy', '<p>Importance of clinical diagnosis in Homoeopathy</p>', '2018-05-25 05:42:24', 1, 'https://www.youtube.com/watch?v=aFG-zRqYjVk&feature=youtu.be', 94, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id`, `title`, `position`, `description`) VALUES
(19, 'Latest Videos', 1, 'Latest videos about us'),
(20, 'Organon & Philosophy', 2, 'Organon & Philosophy'),
(21, 'Interviews & Discussions', 3, 'Interviews'),
(22, 'Cases', 4, 'cases'),
(23, 'Contests & Polls', 5, 'Contests & Polls'),
(24, 'Rubrics', 6, 'Rubrics');

-- --------------------------------------------------------

--
-- Table structure for table `comment_news`
--

CREATE TABLE `comment_news` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `device_news`
--

CREATE TABLE `device_news` (
  `id` int(11) NOT NULL,
  `token` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `device_news`
--

INSERT INTO `device_news` (`id`, `token`) VALUES
(14, 'fFb9STSEmhE:APA91bFx3nGcsSShw-DAELanF3clxqtnh11v6VuyotUtTEE9aXXcyMj02D3fzUzkTwtO28IrG2l7q-VKXaWK_IWh-oXkrmDB9tNHTDM40fSonTEOWFKR7CkNT_YWljqrsIPu5Qnv0yTi'),
(15, 'fZLzwuPtD0s:APA91bGy7KDqxHT720jPntGuH5xfTbHX8E7E_MaZYd1lBvibSBH--e165f0hjz03OAjyYONvdsHafGmbMM8IUN6MSPeEkWnyXHT8lYUeBNdBJ9dgo0SyYSTsnpSOMMqMRRwfduPlzgRD'),
(16, 'fEGfl_4TKH8:APA91bFbaRgIjWrO13FjwCHUy5HcAZEoPAzMDMCEkqAmBHByiNxiUvJ1N8FYeuuxyHEqJHve1j0rtEVYSyvRIP8Qi3QBc836KkzaqOqCcv7iJ2ncGq3mqUj2_9SNu5CFSIhPEyYWZC8y'),
(17, 'c061bDmOoxg:APA91bFqMGXqdpm2RAWlpI87-gAN-WBUH90tJXg9EaGMu7qdHz0WsqAfobg3hzq3ljKGeV9dbTnBevhyrJNFgve8TQVI7RajPsY9EYcDiVzjgdkkZncrvKa6ikLZbu6zKfk_MsO6uV-x');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_news`
--

CREATE TABLE `fos_user_news` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `fos_user_news`
--

INSERT INTO `fos_user_news` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `name`, `type`) VALUES
(1, 'ADMIN', 'admin', 'ADMIN', 'admin', 1, 'djtfgbufxr4gwk4k0gss4sgs4k48wc4', '$2y$13$djtfgbufxr4gwk4k0gss4e/GWxLE60yfqNel24unSLeYzhjG19VqS', '2018-05-30 07:09:18', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 0, NULL, 'samir toni', 'email'),
(2, '114032365975275477653', '114032365975275477653', '114032365975275477653', '114032365975275477653', 1, 'pttxvg2z4v4k4k44s400gggoc08scog', '$2y$13$pttxvg2z4v4k4k44s400geHb/DeF2yDb/iRnxddF9ms/l3QP8OdXa', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Hassan Boutannoura', 'google'),
(3, '1470139833005133', '1470139833005133', '1470139833005133', '1470139833005133', 1, 'f9mps5l4mog8cc80s8o8ow0ggwccscg', '$2y$13$f9mps5l4mog8cc80s8o8ourJIR4JPPIupluXC6AiM5Wy4IgIX/rE2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'HaSsan BouTannoura', 'facebook'),
(4, '115810725989979150958', '115810725989979150958', '115810725989979150958', '115810725989979150958', 1, 'h1v5204xn5s0wsgsgs44okk4okkggws', '$2y$13$h1v5204xn5s0wsgsgs44oedb/2Na67CJmZGmaaYLSyuCDM8Shay52', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Hassan Boutannoura', 'google'),
(5, 'has-_-san@live.com', 'has-_-san@live.com', 'has-_-san@live.com', 'has-_-san@live.com', 1, 'loh9jb0uu68wkko44oc8gckwwggg44o', '$2y$13$loh9jb0uu68wkko44oc8gOstyGPq5pykTz8nOf3ma9i9UGCsaPS9y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'RIstana Inc', 'email'),
(6, 'kevin.shah50@gmail.com', 'kevin.shah50@gmail.com', 'kevin.shah50@gmail.com', 'kevin.shah50@gmail.com', 1, 'rzrdsnw8ev44w0oksskkgcsgocsw80k', '$2y$13$rzrdsnw8ev44w0oksskkgOWFg1aHqj/VN3fwd5UszQRVQADxGNPVa', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'kevin shah', 'email'),
(7, '1986667354679343', '1986667354679343', '1986667354679343', '1986667354679343', 1, 'gcri4zwgqhkcog08ogkg8go48g44kwc', '$2y$13$gcri4zwgqhkcog08ogkg8eUQv34xeXlmt9/SdI.sdXzE4.8Vfe8Mu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Kevin Shah', 'facebook');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_news`
--

CREATE TABLE `gallery_news` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `medias_gallerys_news`
--

CREATE TABLE `medias_gallerys_news` (
  `gallery_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `media_news`
--

CREATE TABLE `media_news` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `media_news`
--

INSERT INTO `media_news` (`id`, `titre`, `url`, `type`, `date`, `enabled`) VALUES
(77, 'logo-1.png', '78e11963a28eb555f113d9af4c46bfa1.png', 'image', '2018-05-25 04:39:06', 1),
(78, 'logo-1.png', '4ac02cfc48949570a3ea3e400ca49f8c.png', 'image', '2018-05-25 04:40:04', 1),
(79, 'logo-1.png', '87548afe0e055d3650545df2aa4795ce.png', 'image', '2018-05-25 04:40:45', 1),
(80, 'logo-1.png', 'acd819e5c00fed56a402e9e0db5706ba.png', 'image', '2018-05-25 04:41:24', 1),
(81, 'logo-1.png', '57f54d9a508197b895743a24946b5034.png', 'image', '2018-05-25 04:42:04', 1),
(82, 'logo-1.png', '3b1e824b10fd4ffec5590100578a0327.png', 'image', '2018-05-25 04:43:35', 1),
(83, 'logo-1.png', '3d70290da7dcabb7120404d2433a2916.png', 'image', '2018-05-25 04:45:48', 1),
(84, 'logo-1.png', '872420019a6fa33e1b88a2f68fa8a3cd.png', 'image', '2018-05-25 04:51:20', 1),
(85, 'logo-1.png', '64c8c2d4c8e632c20ea1b460658ed47f.png', 'image', '2018-05-25 04:53:04', 1),
(86, 'logo-1.png', '798bac63602ff47218745bf3b2bd1c8d.png', 'image', '2018-05-25 04:58:43', 1),
(87, 'logo-1.png', '569c66107a0dbaccd1262bfa3a8a6bac.png', 'image', '2018-05-25 05:10:52', 1),
(88, 'logo-1.png', '280414769c9ea4b6c9842d605bb82ff3.png', 'image', '2018-05-25 05:13:24', 1),
(89, 'logo-1.png', 'e8e8b2393683c8052c50eccac3b1db02.png', 'image', '2018-05-25 05:20:33', 1),
(90, 'logo-1.png', '0c2679cfed019be689b86e89ad1742d0.png', 'image', '2018-05-25 05:31:12', 1),
(91, 'logo-1.png', '2cba8e9cbcf8fac34bc5ad0311b9de80.png', 'image', '2018-05-25 05:35:20', 1),
(92, 'logo-1.png', '878ef1e5003709d4d40eaa7d1401289f.png', 'image', '2018-05-25 05:40:18', 1),
(93, 'logo-1.png', '8f03e07a8928f695f03902cc3b6129fd.png', 'image', '2018-05-25 05:42:24', 1),
(94, 'logo-1.png', 'e9547d18b5a5752f62336995345f57ee.png', 'image', '2018-05-25 05:42:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `support_contact_news`
--

CREATE TABLE `support_contact_news` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `support_contact_news`
--

INSERT INTO `support_contact_news` (`id`, `email`, `subject`, `message`, `created`) VALUES
(2, 'kevin.shah50@gmail.com', 'kevin', 'issue', '2018-05-17 15:58:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_news`
--
ALTER TABLE `article_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AD911E5112469DE2` (`category_id`),
  ADD KEY `IDX_AD911E51EA9FDD75` (`media_id`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9648E3172B36786B` (`title`);

--
-- Indexes for table `comment_news`
--
ALTER TABLE `comment_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3BE53BBC7294869C` (`article_id`),
  ADD KEY `IDX_3BE53BBCA76ED395` (`user_id`);

--
-- Indexes for table `device_news`
--
ALTER TABLE `device_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user_news`
--
ALTER TABLE `fos_user_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5520987892FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_55209878A0D96FBF` (`email_canonical`);

--
-- Indexes for table `gallery_news`
--
ALTER TABLE `gallery_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias_gallerys_news`
--
ALTER TABLE `medias_gallerys_news`
  ADD PRIMARY KEY (`gallery_id`,`media_id`),
  ADD KEY `IDX_1750DF314E7AF8F` (`gallery_id`),
  ADD KEY `IDX_1750DF31EA9FDD75` (`media_id`);

--
-- Indexes for table `media_news`
--
ALTER TABLE `media_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_contact_news`
--
ALTER TABLE `support_contact_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_news`
--
ALTER TABLE `article_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comment_news`
--
ALTER TABLE `comment_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `device_news`
--
ALTER TABLE `device_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fos_user_news`
--
ALTER TABLE `fos_user_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery_news`
--
ALTER TABLE `gallery_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_news`
--
ALTER TABLE `media_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `support_contact_news`
--
ALTER TABLE `support_contact_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_news`
--
ALTER TABLE `article_news`
  ADD CONSTRAINT `FK_23A0E6612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category_news` (`id`),
  ADD CONSTRAINT `FK_23A0E66EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media_news` (`id`);

--
-- Constraints for table `comment_news`
--
ALTER TABLE `comment_news`
  ADD CONSTRAINT `FK_9474526C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article_news` (`id`),
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_news` (`id`);

--
-- Constraints for table `medias_gallerys_news`
--
ALTER TABLE `medias_gallerys_news`
  ADD CONSTRAINT `FK_838428714E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `gallery_news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_83842871EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media_news` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
