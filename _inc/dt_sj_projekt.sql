-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 12.Máj 2024, 12:27
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `dt_sj_projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `researchers`
--

CREATE TABLE `researchers` (
  `id` int(2) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `handle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `researchers`
--

INSERT INTO `researchers` (`id`, `first_name`, `last_name`, `handle`) VALUES
(1, 'Patrik', 'Palffy', '1AI22B'),
(2, 'Jane', 'Smith', '1AI22B'),
(3, 'Michael', 'Johnson', '1AI22B'),
(4, 'Emily', 'Brown', '1AI22B'),
(5, 'David', 'Taylor', '1AI22B'),
(6, 'Emma', 'Anderson', '1AI22B'),
(7, 'Daniel', 'Martinez', '1AI22B'),
(8, 'Olivia', 'Garcia', '1AI22B'),
(9, 'William', 'Rodriguez', '1AI22B'),
(10, 'Sophia', 'Lopez', '1AI22B'),
(11, 'Alexander', 'Hernandez', '1AI22B'),
(12, 'Mia', 'Martinez', '1AI22B'),
(13, 'Ethan', 'Gonzalez', '1AI22B'),
(14, 'Isabella', 'Perez', '1AI22B'),
(15, 'James', 'Sanchez', '1AI22B'),
(16, 'Ava', 'Ramirez', '1AI22B'),
(17, 'Benjamin', 'Torres', '1AI22B'),
(18, 'Charlotte', 'Flores', '1AI22B'),
(19, 'Daniel', 'Rivera', '1AI22B'),
(20, 'Chloe', 'Gomez', '1AI22B');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `registration_time`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2024-05-09 17:34:43'),
(2, 'admin2@admin2.com', 'c84258e9c39059a89ab77d846ddab909', 1, '2024-05-09 17:34:43'),
(3, 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 0, '2024-05-09 17:35:17'),
(6, 'user2@user2.com', '7e58d63b60197ceb55a1c487989a3720', 0, '2024-05-09 17:53:06'),
(7, 'user3@user3.com', '92877af70a45fd6a2ed7fe81e1236b78', 0, '2024-05-09 17:53:38'),
(8, 'user4@user4.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 0, '2024-05-09 17:53:49'),
(9, 'user5@user5.com', '0a791842f52a0acfbb3a783378c066b8', 0, '2024-05-09 17:55:20'),
(10, 'user6@user6.com', 'affec3b64cf90492377a8114c86fc093', 0, '2024-05-09 17:55:38'),
(11, 'user7@user7.com', '3e0469fb134991f8f75a2760e409c6ed', 0, '2024-05-09 17:55:50'),
(12, 'user8@user8.com', '7668f673d5669995175ef91b5d171945', 0, '2024-05-09 17:56:04'),
(13, 'admin3@admin3.com', '32cacb2f994f6b42183a1300d9a3e8d6', 1, '2024-05-09 18:02:34'),
(14, 'patrikpalffy@gmail.com', '26a3e4c975bc1d185575e89d553daf1e', 0, '2024-05-11 15:46:31');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `researchers`
--
ALTER TABLE `researchers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
