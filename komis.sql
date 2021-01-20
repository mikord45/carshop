-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2021, 19:49
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `komis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `id` int(11) NOT NULL,
  `nazwa_marki` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`id`, `nazwa_marki`) VALUES
(1, 'Audi'),
(2, 'Alfa_Romeo'),
(3, 'Mercedes'),
(4, 'BMW'),
(5, 'Fiat'),
(6, 'Ford'),
(7, 'Honda');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `rocznik` int(11) NOT NULL,
  `przebieg` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `zdj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `nazwa`, `rocznik`, `przebieg`, `cena`, `zdj`) VALUES
(1, 1, 'A8', 2006, 436000, 35000, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjdqYTNhczhnMnljdTEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.2HEreBwpJDQjI5dsd_yKGGIyA7a4oLsgRwuuYrllCjQ/image;s=1080x720'),
(2, 1, 'A3 Premium', 2018, 52000, 78000, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImoxejhlbW8wbXE1djEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.t9YC_FzvgOSRdIi8Z_1dB1ARe20hkWfdLCJTalphksg/image;s=1080x720'),
(3, 1, 'A3', 2007, 142801, 16700, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Iml6ZDI5NTVkaDExMS1PVE9NT1RPUEwiLCJ3IjpbeyJmbiI6IndnNGducXA2eTFmLU9UT01PVE9QTCIsInMiOiIxNiIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.zDWrdPVg1qPZ2gQ133A0QDMMeRx58GnbMZ9fkB0ZwDY/image;s=1080x720'),
(4, 2, 'Mito', 2012, 104000, 28000, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImViNjV5ejJhNGZuNjEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.m3xs3YRRaX5-Riq7vCHceB327Aut7OLWBn6LijUY80A/image;s=1080x720'),
(5, 2, '159', 2007, 193000, 13900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Impoa2E2MWdjbnRuMy1PVE9NT1RPUEwiLCJ3IjpbeyJmbiI6IndnNGducXA2eTFmLU9UT01PVE9QTCIsInMiOiIxNiIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.Oy7M6yTua_xcQ6JAfT123E8JKiFy_Izg91yzSyjM0c4/image;s=1080x720'),
(6, 4, '5GT 535i', 2014, 140000, 99000, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InV6djVkcDgxOGpxei1PVE9NT1RPUEwiLCJ3IjpbeyJmbiI6IndnNGducXA2eTFmLU9UT01PVE9QTCIsInMiOiIxNiIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.CbtA7tHYZflCEM0vyicKFblYVVghmDwTrJcNrobLuS8/image;s=1080x720'),
(7, 4, 'E90', 2010, 340000, 33000, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6InZieGk0ZGdodWs0NjEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.ersSEBE0RbF4k0h_0u6F_ldv0n9Xhr0xRX2B475syWA/image;s=1080x720'),
(8, 4, '118d', 2008, 154000, 18900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImlnZTNtejEycTczczMtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.Mm9yhuEw-rmmOBuFunDX66e5I6eG4Y5HI0eKWha5Yt4/image;s=1080x720'),
(9, 5, 'Idea', 2004, 159250, 8900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Ijgxb3Y4ZDZteW9vZjItT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.m5UBJQGwT37OLt4ppdy9coljEh0lvTRYByFIpjmCUK0/image;s=1080x720'),
(10, 5, 'Bravo', 2007, 218000, 16900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImhlMTZvMHE5bzAzZjItT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.7kz0ytFDtz1eWC42Z6uENJ3BjQn3wbAUWgmFVkzuyYw/image;s=1080x720'),
(11, 6, 'Kuga', 2014, 199350, 46990, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjF0OG00bTd2bDJpOC1PVE9NT1RPUEwiLCJ3IjpbeyJmbiI6IndnNGducXA2eTFmLU9UT01PVE9QTCIsInMiOiIxNiIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.4j5RmFIoh2e_POqQGHcD9Q6PkTQBjYbSW7TukXrNQuM/image;s=1080x720'),
(12, 6, 'Mustang', 2011, 60000, 51500, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Iml5ZXN4ejFlMnJ0bjEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.uPfjfM6rWnQeeq6hQm-mBK7s_O7G8_hTvFoWvYjEmfk/image;s=1080x720'),
(13, 6, 'Fusion', 2017, 62260, 59700, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjFvc2hmaW4yNGFhcS1PVE9NT1RPUEwiLCJ3IjpbeyJmbiI6IndnNGducXA2eTFmLU9UT01PVE9QTCIsInMiOiIxNiIsInAiOiIxMCwtMTAiLCJhIjoiMCJ9XX0.XNZfuPIk2dJCNzEybr2XRVi7V6BmbuedWZBqHk8pPT4/image;s=1080x720'),
(14, 6, 'S-Max', 2006, 232000, 17900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Imo3Y3A0eWQ3cWhxMTMtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.Tg0UOk_m7caCwf8vUBT_Pvtm3uKUxPom5oD8cBoKfaM/image;s=1080x720'),
(15, 7, 'Civic', 2015, 151000, 42500, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImcxZHN2b2JtZjUxMzEtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.X2g-nmKoYVxhnj0cZej6PYZDv3mu7C5OfFwpwkA0ZrE/image;s=1080x720'),
(16, 7, 'Accord', 2011, 94000, 44900, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImsydndqMDZ5MWduYjItT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.3cFBn2ZDPCBzzEliFTDe_t0T7V9vr9q_bogp8GMnuJA/image;s=1080x720'),
(17, 7, 'Jazz', 2011, 92300, 21500, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6Im4wYjV6YzNvazI3bDMtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.d2Zc1faB30bNyvLaGrZh11ndPCsIZP8WiNIBFC-FHRQ/image;s=1080x720'),
(18, 7, 'CR-V', 2006, 219000, 27400, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjMzbDgzMTN3cmF3cTItT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.zmbHur3qZZIo8gdJq2QI3q_vJMXIw5E0JIwL2svATgs/image;s=1080x720'),
(19, 3, 'Klasa B 200', 2013, 184000, 44999, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6ImNlMzJsaHBxb28xNDItT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.22tQ-bZ8jvUEUkC_F8ec7DH6vBHluad1PlhhsQhWbr0/image;s=1080x720'),
(20, 3, 'GLE 400', 2019, 45775, 245877, 'https://ireland.apollo.olxcdn.com/v1/files/eyJmbiI6IjE1azU1OTM2cDU1dDMtT1RPTU9UT1BMIiwidyI6W3siZm4iOiJ3ZzRnbnFwNnkxZi1PVE9NT1RPUEwiLCJzIjoiMTYiLCJwIjoiMTAsLTEwIiwiYSI6IjAifV19.NqbC_FcHls4UviKqVhuCtH3fgYIvPdhXuJQ2gRQc9C0/image;s=1080x720');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `terminarz`
--

CREATE TABLE `terminarz` (
  `id` int(11) NOT NULL,
  `kiedy` date NOT NULL,
  `w_sprawie_marki` int(11) NOT NULL,
  `min_cena` int(11) NOT NULL,
  `max_cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy_uzytkownikow`
--

CREATE TABLE `typy_uzytkownikow` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `typy_uzytkownikow`
--

INSERT INTO `typy_uzytkownikow` (`id`, `nazwa`) VALUES
(1, 'administrator'),
(2, 'moderator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `nazwa_uzytkownika` varchar(255) NOT NULL,
  `haslo` text NOT NULL,
  `typ_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `nazwa_uzytkownika`, `haslo`, `typ_uzytkownika`) VALUES
(3, 'admin1', '$2y$10$Lpr5jxlhUWcLXDgmWwQGaugk4YuOzjjlO/L0knFbqL05IL5DLvlm2', 1),
(4, 'moderator1', '$2y$10$Lpr5jxlhUWcLXDgmWwQGaugk4YuOzjjlO/L0knFbqL05IL5DLvlm2', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `marki`
--
ALTER TABLE `marki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marka` (`marka`);

--
-- Indeksy dla tabeli `terminarz`
--
ALTER TABLE `terminarz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `w_sprawie_marki` (`w_sprawie_marki`);

--
-- Indeksy dla tabeli `typy_uzytkownikow`
--
ALTER TABLE `typy_uzytkownikow`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typ_uzytkownika` (`typ_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `terminarz`
--
ALTER TABLE `terminarz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `typy_uzytkownikow`
--
ALTER TABLE `typy_uzytkownikow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `marki` (`id`);

--
-- Ograniczenia dla tabeli `terminarz`
--
ALTER TABLE `terminarz`
  ADD CONSTRAINT `terminarz_ibfk_1` FOREIGN KEY (`w_sprawie_marki`) REFERENCES `marki` (`id`);

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_ibfk_1` FOREIGN KEY (`typ_uzytkownika`) REFERENCES `typy_uzytkownikow` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
