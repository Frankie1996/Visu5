-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Okt 2020 um 18:21
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `oekologisch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `title`, `text`) VALUES
(1, 'Über uns und das Projekt', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. \r\n\r\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. \r\n\r\nNam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `text`, `img_url`) VALUES
(1, 'Energie', 'Energie ist eine fundamentale physikalische Größe, die in allen Teilgebieten der Physik sowie in der Technik, Chemie, Biologie und der Wirtschaft eine zentrale Rolle spielt. Ihre SI-Einheit ist das Joule. Die praktische Bedeutung der Energie liegt oft darin, dass ein physikalisches System in dem Maß Wärme abgeben, Arbeit leisten oder Strahlung aussenden kann, in dem seine Energie sich verringert. In einem gegenüber der Umgebung abgeschlossenen System ändert sich die Gesamtenergie nicht (Energieerhaltungssatz). Die Bedeutung der Energie in der theoretischen Physik liegt unter anderem darin, dass der Energieerhaltungssatz, ursprünglich eine Erfahrungstatsache, schon daraus gefolgert werden kann, dass die grundlegenden physikalischen Naturgesetze zeitlich unveränderlich sind.\r\n\r\nEnergie gibt es in verschiedenen Energieformen, die ineinander umgewandelt werden können. Beispiele von Energieformen sind potentielle, kinetische, elektrische, chemische und Wärmeenergie (thermische Energie). Beispiele für solche Umwandlungen von Energie sind, dass ein Mensch ein Paket hochhebt oder ein Fahrrad beschleunigt, dass eine Batterie geladen wird, ein Lebewesen Stoffwechsel betreibt oder eine Heizung Wärme abgibt.\r\n\r\nDie Energie eines Systems ist von seinem Zustand abhängig, d. h. von den Parametern des Systems und den momentanen Werten seiner Variablen. Die Form dieser Abhängigkeit bestimmt nach den hamiltonschen Bewegungsgleichungen, der Schrödingergleichung oder der Dirac-Gleichung in allen Einzelheiten die zeitliche Entwicklung des Systems. ', 'assets/img/header_energy.jpg'),
(2, 'Nachhaltiger Konsum und Produktion', 'Nachhaltigkeit ist ein Handlungsprinzip zur Ressourcen-Nutzung, bei dem eine dauerhafte Bedürfnisbefriedigung durch die Bewahrung der natürlichen Regenerationsfähigkeit der beteiligten Systeme (vor allem von Lebewesen und Ökosystemen) gewährleistet werden soll. Im entsprechenden englischen Wort sustainable ist dieses Prinzip wörtlich erkennbar: to sustain im Sinne von aushalten bzw. ertragen. Mit anderen Worten: Die beteiligten Systeme können ein bestimmtes Maß an Ressourcennutzung dauerhaft aushalten, ohne Schaden zu nehmen. Das Prinzip wurde zuerst in der Forstwirtschaft angewendet: Im Wald ist nur soviel Holz zu schlagen wie permanent nachwächst. Als in der zweiten Hälfte des 20. Jahrhunderts erkannt wurde, dass alle Rohstoffe und Energievorräte auf der Welt auszugehen drohen, ging sein Gebrauch auf den Umgang mit allen Ressourcen über.\r\nIn seiner früheren und umgangssprachlichen Bedeutung weist nachhaltig als Adjektiv oder bei adverbialem Gebrauch darauf hin, dass eine Handlung längere Zeit anhaltend wirkt.[1] Beispiel: Die (ungeregelte) Ressourcennutzung führt über längere Zeit zum Verlust der Ressourcen. Da das oben genannte Handlungsprinzip das Gegenteil, nämlich die Ressourcenerhaltung trotz Nutzung zum Ziel hat, ist darauf zu achten, dass die umgangssprachliche und die hinzugekommene Bedeutung[2] zueinander nicht widerspruchsfrei sind. ', 'assets/img/header_sustainability.jpg'),
(3, 'Klimaveränderung', 'Klimawandel, auch Klimaveränderung, Klimaänderung oder Klimawechsel, ist eine weltweit auftretende Veränderung des Klimas auf der Erde oder erdähnlichen Planeten/Monden, die eine Atmosphäre besitzen. Die mit einem Klimawandel verbundene Abkühlung oder Erwärmung kann über unterschiedlich lange Zeiträume erfolgen. Es ist wichtig zu unterscheiden zwischen Wetteränderungen, die innerhalb eines Klimas variieren und dem Klimawandel, der die zugrundeliegenden Auftrittswahrscheinlichkeiten von Wetterergebnissen verändert.\r\n\r\nDie gegenwärtige, vor allem durch den Menschen verursachte (anthropogene) globale Erwärmung (siehe dort) ist ein Beispiel für einen sehr rasch verlaufenden, aber noch nicht abgeschlossenen Klimawandel. Hierfür wird in der öffentlichen Diskussion ebenfalls der Begriff Klimawandel synonym genutzt (dann aber als „Der Klimawandel“). Die durch diesen Klimawandel hervorgerufene ökologische und soziale Krise wird auch als „Klimakrise“ bezeichnet. ', 'assets/img/header_climateChange.jpg'),
(4, 'Entsorgung - Food-Waste', 'Die Ursachen der Verschwendung sind vielfältig. Sie wird zum Beispiel zu viel eingekauft, die Lebensmittel werden vom Endverbraucher falsch gelagert.[1] Auch die Überschreitung von Mindesthaltsbarkeitsdaten spielt eine wichtige Rolle. Aber auch bei der Produktion von Lebensmitteln kann es zu Verschwendung kommen, etwa bei einer nicht-nachhaltige Fischerei, wenn etwa Beifang weggeschmissen wird.[2] Weitere Ursachen sind eine vermeidbare falsche Lagerung, Schädlingsbefall, Überproduktion, wodurch zu viele Lebensmittel hergestellt werden, die dann keinen Abnehmer finden; Transportschäden, Vorstellungen beim Kunden, die etwa nicht normgerechte Produkte ablehnen bzw. nicht kaufen usw.[3]', 'assets/img/header_foodWaste.jpg'),
(5, 'Entsorgung - Recycling', 'Beim Recycling (gelegentlich als RC abgekürzt), Rezyklierung bzw. Müllverwertung werden Abfallprodukte wiederverwertet bzw. deren Ausgangsmaterialien werden zu Sekundärrohstoffen.\r\n\r\nDer Begriff „Recycling“ ist ein Lehnwort aus dem Englischen (recycling – ausgesprochen [ɹɪˈsaɪklɪŋ] – für „Wiederverwertung“ oder „Wiederaufbereitung“); etymologisch leitet es sich vom griechischen kýklos (Kreis) sowie dem lateinischen Präfix re- (zurück, wieder) ab.\r\n\r\n„Recycling“ ist definiert als „jedes Verwertungsverfahren, durch das Abfälle zu Erzeugnissen, Materialien oder Stoffen entweder für den ursprünglichen Zweck oder für andere Zwecke aufbereitet werden. Es schließt die Aufbereitung organischer Materialien ein, aber nicht die energetische Verwertung und die Aufbereitung zu Materialien, die für die Verwendung als Brennstoff oder zur Verfüllung bestimmt sind“ (§ 3 Abs. 25 deutsches Kreislaufwirtschaftsgesetz).[1] Die so produzierten Stoffe werden als Recyclat oder Regenerat bezeichnet.\r\n\r\nGesetzlich wird erst von „Recycling“ gesprochen, wenn der Rohstoff zuvor als „Abfall“ einzustufen war; andernfalls handelt es sich um „Wiederverwendung“. Der umgangssprachliche Gebrauch des Begriffs Recycling umfasst oft beide Bedeutungen.[2][3] ', 'assets/img/header_recycling.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_intro`
--

CREATE TABLE `tbl_intro` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `goals` text NOT NULL,
  `problems` text NOT NULL,
  `gif_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_intro`
--

INSERT INTO `tbl_intro` (`id`, `category_id`, `title`, `text`, `goals`, `problems`, `gif_url`) VALUES
(1, 1, 'Einführung ins Thema Energie', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Energie Ziel Nummer 1, Energie Ziel Nummer 2, Energie Ziel Nummer 3, Energie Ziel Nummer 4  ', 'Energie Problem Nummer 1, Energie Problem Nummer 2, Energie Problem Nummer 3, Energie Problem Nummer 4', 'assets/img/energy/intro.gif'),
(2, 2, 'Einführung in Thema Nachhaltiger Kosum und Produktion', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Nachhaltigkeit Ziel Nummer 1, Nachhaltigkeit Ziel Nummer 2, Nachhaltigkeit Ziel Nummer 3, Nachhaltigkeit Ziel Nummer 4  ', 'Nachhaltigkeit Problem Nummer 1, Nachhaltigkeit Problem Nummer 2, Nachhaltigkeit Problem Nummer 3, Nachhaltigkeit Problem Nummer 4', 'assets/img/sustainability/intro.gif'),
(3, 3, 'Einführung ins Thema Klimaveränderung', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Klimaveränderung Ziel Nummer 1, Klimaveränderung Ziel Nummer 2, Klimaveränderung Ziel Nummer 3, Klimaveränderung Ziel Nummer 4 ', 'Klimaveränderung Problem Nummer 1, Klimaveränderung Problem Nummer 2, Klimaveränderung Problem Nummer 3, Klimaveränderung Problem Nummer 4 ', 'assets/img/climateChange/intro.gif'),
(4, 4, 'Einführung ins Thema Food Waste ', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Food Waste Ziel Nummer 1, Food Waste Ziel Nummer 2, Food Waste Ziel Nummer 3', 'Food Waste Problem Nummer 1, Food Waste Problem Nummer 2', 'assets/img/footWaste/intro.gif'),
(5, 5, 'Einführung ins Thema Recycling', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Recycling Ziel Nummer 1, Recycling Ziel Nummer 2', 'Recycling Problem Nummer 1, Recycling Problem Nummer 2, Recycling Problem Nummer 1, Recycling Problem Nummer 2', 'assets/img/recycling/intro.gif');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `gif_url` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `top_three` tinyint(1) NOT NULL,
  `lesson_nr` int(11) NOT NULL,
  `important` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_lesson`
--

INSERT INTO `tbl_lesson` (`id`, `category_id`, `title`, `text`, `img_url`, `gif_url`, `video_url`, `top_three`, `lesson_nr`, `important`) VALUES
(1, 1, 'Lektion 1', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', 'assets/img/energy/lesson01_1.jpg, assets/img/energy/lesson01_2.jpg, assets/img/energy/lesson01_3.jpg,  ', 'assets/img/energy/lesson01.gif', '', 1, 1, 'Energie Lektion 1 wichtiges01, Energie Lektion 1 wichtiges02, Energie Lektion 1 wichtiges03, Energie Lektion 1 wichtiges04, Energie Lektion 1 wichtiges05, '),
(2, 1, 'Lektion 2', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', 'assets/img/energy/lesson02_1.jpg, assets/img/energy/lesson02_2.jpg, assets/img/energy/lesson02_3.jpg,  ', 'assets/img/energy/lesson02.gif', '', 0, 2, 'Energie Lektion 2 wichtiges01, Energie Lektion 2 wichtiges02, Energie Lektion 2 wichtiges03, Energie Lektion 2 wichtiges04, Energie Lektion 2 wichtiges05, '),
(3, 1, 'Lektion 3', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', 'assets/img/energy/lesson03_1.jpg, assets/img/energy/lesson03_2.jpg, assets/img/energy/lesson03_3.jpg,  ', 'assets/img/energy/lesson03.gif', 'assets/video/energy.mp4', 0, 2, 'Energie Lektion 3 wichtiges01, Energie Lektion 3 wichtiges02, Energie Lektion 3 wichtiges03, Energie Lektion 3 wichtiges04, Energie Lektion 3 wichtiges05, ');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indizes für die Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);

--
-- Constraints der Tabelle `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
