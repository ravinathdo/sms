-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 05:42 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankid` int(11) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `bankcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankid`, `bankname`, `bankcode`) VALUES
(1, 'Bank of Ceylon', 7010),
(2, 'Standard Chartered Bank', 7038),
(3, 'Citi Bank', 7047),
(4, 'Commercial Bank PLC', 7056),
(5, 'Habib Bank Ltd', 7074),
(6, 'Hatton National Bank PLC', 7083),
(7, 'Hongkong   Shanghai Bank', 7092),
(8, 'Indian Bank', 7108),
(9, 'Indian Overseas Bank', 7117),
(10, 'Peoples Bank', 7135),
(11, 'State Bank of India', 7144),
(12, 'Nations Trust Bank PLC', 7162),
(13, 'Deutsche Bank', 7205),
(14, 'National Development Bank PLC', 7214),
(15, 'MCB Bank Ltd', 7269),
(16, 'Sampath Bank PLC', 7278),
(17, 'Seylan Bank PLC', 7287),
(18, 'Public Bank', 7296),
(19, 'Union Bank of Colombo PLC', 7302),
(20, 'Pan Asia Banking Corporation PLC', 7311),
(21, 'ICICI Bank Ltd', 7384),
(22, 'DFCC Vardhana Bank Ltd', 7454),
(23, 'Amana Bank', 7463),
(24, 'Axis Bank', 7472),
(25, 'National Savings Bank', 7719),
(26, 'Sanasa Development Bank', 7728),
(27, 'HDFC Bank', 7737),
(28, 'Citizen Development Business Finance PLC', 7746),
(29, 'Regional Development Bank', 7755),
(30, 'State Mortgage & Investment Bank', 7764),
(31, 'LB Finance PLC', 7773),
(32, 'Central Bank of Sri Lanka', 8004),
(33, 'Bank of dkf', 230000);

-- --------------------------------------------------------

--
-- Table structure for table `bankbranch`
--

CREATE TABLE `bankbranch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankbranch`
--

INSERT INTO `bankbranch` (`branchid`, `branchname`) VALUES
(1, 'City Office'),
(2, 'Kandy'),
(3, 'Galle Fort'),
(4, 'Pettah'),
(5, 'Jaffna'),
(6, 'Trincomalee'),
(7, 'Panadura'),
(8, 'Kurunegala'),
(9, 'Badulla'),
(10, 'Batticaloa'),
(11, 'Central Office'),
(12, 'Kalutara'),
(13, 'Negombo'),
(14, 'Chilaw'),
(15, 'Ampara'),
(16, 'Anuradhapura'),
(17, 'Wellawatte'),
(18, 'Matara'),
(19, 'Main Street'),
(20, 'Kegalle'),
(21, 'Point Pedro'),
(22, 'Nuwara Eliya'),
(23, 'Katubedda'),
(24, 'Ratnapura'),
(25, 'Aluthkade'),
(26, 'Kollupitiya'),
(27, 'Haputale'),
(28, 'Bambalapitiya'),
(29, 'Borella'),
(30, 'Ja Ela'),
(31, 'Hatton'),
(32, 'Maradana'),
(33, 'Peliyagoda'),
(34, 'Union Place'),
(35, 'Vavuniya'),
(36, 'Gampaha'),
(37, 'Mannar'),
(38, 'Ambalangoda'),
(39, 'Puttalam'),
(40, 'Nugegoda'),
(41, 'Nattandiya'),
(42, 'Dehiwala'),
(43, 'Kuliyapitiya'),
(44, 'Chunnakam'),
(45, 'Horana'),
(46, 'Maharagama'),
(47, 'Tangalle'),
(48, 'Eheliyagoda'),
(49, 'Beruwala'),
(50, 'Kadawatha'),
(51, 'Fifth City'),
(52, 'Idama-Moratuwa'),
(53, 'Velanai'),
(54, 'Matale'),
(55, 'Monaragala'),
(56, 'Polonnaruwa New Town'),
(57, 'Hambantota'),
(58, 'International Division'),
(59, 'Mirigama'),
(60, 'Galle Bazaar'),
(61, 'Naula'),
(62, 'Kilinochchi'),
(63, 'Anuradhapura New Town'),
(64, 'Primary Dealer Unit'),
(65, 'Galaha'),
(66, 'Bentota'),
(67, 'Welpalla'),
(68, 'Muttur'),
(69, 'Galenbindunuwewa'),
(70, 'Padavi Parakramapura'),
(71, 'Imaduwa'),
(72, 'Weeraketiya'),
(73, 'Yatawatte'),
(74, 'Pemaduwa'),
(75, 'Tirappane'),
(76, 'Medawachchiya'),
(77, 'Rikillagaskada'),
(78, 'Kobeigane'),
(79, 'Sewagama'),
(80, 'Horowpathana'),
(81, 'Ipalogama'),
(82, 'Medagama'),
(83, 'Tawalama'),
(84, 'Malkaduwawa'),
(85, 'Thanthirimale'),
(86, 'Mawathagama'),
(87, 'Elakanda'),
(88, 'Rathgama'),
(89, 'Diyatalawa'),
(90, 'Katuwana'),
(91, 'Kekanadura'),
(92, 'Kosmodera'),
(93, 'Kudawella'),
(94, 'Lunugamvehera'),
(95, 'Maha-Edanda'),
(96, 'Makandura - Matara'),
(97, 'Malimbada'),
(98, 'Morawaka'),
(99, 'Pasgoda'),
(100, 'Pitabeddara'),
(101, 'Digana'),
(102, 'Weli-Oya'),
(103, 'Ahangama'),
(104, 'Aluthwala'),
(105, 'Barawakumbura'),
(106, 'Karapitiya'),
(107, 'Manipay'),
(108, 'Kitulgala'),
(109, 'Kolonna'),
(110, 'Kotiyakumbura'),
(111, 'Morontota'),
(112, 'Pinnawala'),
(113, 'Sabaragamuwa Provincial Council'),
(114, 'Seethawakapura'),
(115, 'Udawalawe'),
(116, 'Weligepola'),
(117, 'Dodangoda'),
(118, 'Karawanella'),
(119, 'Karawita'),
(120, 'Kegalle Hospital'),
(121, 'Urubokka'),
(122, 'Makandura'),
(123, 'Marawila'),
(124, 'Palaviya'),
(125, 'Pallama'),
(126, 'Paragahadeniya'),
(127, 'Thoduwawa'),
(128, 'Udappuwa'),
(129, 'Weerapokuna'),
(130, 'Wellawa'),
(131, 'Bulathkohupitiya'),
(132, 'Embilipitiya City'),
(133, 'Endana'),
(134, 'Galigamuwa'),
(135, 'Ratnapura Hospital'),
(136, 'Gonagaldeniya'),
(137, 'Kiriella'),
(138, 'Potuvil'),
(139, 'Mahawewa'),
(140, 'Ballaketuwa'),
(141, 'Thanamalwila'),
(142, 'Kochchikade'),
(143, 'Kumbukgete'),
(144, 'Kuruwita'),
(145, 'Thirumurukandi'),
(146, 'Visuvamadu'),
(147, 'Ambanpola'),
(148, 'Anawilundawa'),
(149, 'Dambadeniya'),
(150, 'Katuneriya'),
(151, 'Katupotha'),
(152, 'Kirimetiyana'),
(153, 'Mihintale'),
(154, 'Thalaimannar Pier'),
(155, 'Pussellawa'),
(156, 'Savalkaddu'),
(157, 'Sirupiddy'),
(158, 'Wattegama'),
(159, 'Puthukudieruppu'),
(160, 'Puthukulam'),
(161, 'Uva Paranagama'),
(162, 'Pesalai'),
(163, 'Poonagary'),
(164, 'Poovarasankulam'),
(165, 'Padiyatalawa'),
(166, 'Mallavi'),
(167, 'Manthikai'),
(168, 'Mulankavil'),
(169, 'Mulliyawalai'),
(170, 'Murungan'),
(171, 'Nainativu'),
(172, 'Nallur'),
(173, 'Nanatan'),
(174, 'Nedunkerny'),
(175, 'Oddusudan'),
(176, 'Omanthai'),
(177, 'Pallai'),
(178, 'Paranthan'),
(179, 'Jaffna Bus Stand'),
(180, 'Jaffna Main Street'),
(181, 'Jaffna University'),
(182, 'Kaithady'),
(183, 'Kalviyankadu'),
(184, 'Karanavai'),
(185, 'Kayts'),
(186, 'Kodikamam'),
(187, 'Kokuvil'),
(188, 'Madhu'),
(189, 'Wariyapola'),
(190, 'Alaveddy'),
(191, 'Andankulam'),
(192, 'Cheddikulam'),
(193, 'Meegahakiwula'),
(194, 'Vavunathivu'),
(195, 'Vellaveli'),
(196, 'Diyabeduma'),
(197, 'Diyasenpura'),
(198, 'Doramadalawa'),
(199, 'Galamuna'),
(200, 'General Hospital, A'' pura'),
(201, 'Habarana'),
(202, 'Minneriya'),
(203, 'Padaviya'),
(204, 'Rajanganaya'),
(205, 'Rajina Junction'),
(206, 'Ranajayapura'),
(207, 'Sevanapitiya'),
(208, 'Thalawa'),
(209, 'Ayagama'),
(210, 'Oddamavady'),
(211, 'Oluwil'),
(212, 'Palugamam'),
(213, 'Polwatte'),
(214, 'Palmuddai'),
(215, 'Sainthamarathu'),
(216, 'Serunuwara'),
(217, 'Thambiluvil'),
(218, 'Thampalakamam'),
(219, 'Thoppur'),
(220, 'Uhana'),
(221, 'Uppuvely'),
(222, 'Vakarai'),
(223, 'Siyambalanduwa'),
(224, 'Mollipothana'),
(225, 'Morawewa'),
(226, 'Navithanvely'),
(227, 'Nilavely'),
(228, 'Seeduwa'),
(229, 'Malwatte'),
(230, 'Mamangama'),
(231, 'Maruthamunai'),
(232, 'Pundaluoya'),
(233, 'Kallady'),
(234, 'Kallar'),
(235, 'Karadiyanaru'),
(236, 'Karaitivu'),
(237, 'Kiran'),
(238, 'Kokkadicholai'),
(239, 'Galewela'),
(240, 'Divulapitiya'),
(241, 'Wellawaya'),
(242, 'China Bay'),
(243, 'Gonagolla'),
(244, 'Irakkamam'),
(245, 'Samanthurai'),
(246, 'Pujapitiya'),
(247, 'Ragala'),
(248, 'Sigiriya'),
(249, 'Ukuwela'),
(250, 'Upcott'),
(251, 'Wilgamuwa'),
(252, 'Addalachchenai'),
(253, 'Alankerny'),
(254, 'Araiyampathy'),
(255, 'Batticaloa Town'),
(256, 'Independent  Square'),
(257, 'Kotagala'),
(258, 'Marassana'),
(259, 'Meepilimana'),
(260, 'Menikhinna'),
(261, 'Palapathwela'),
(262, 'Botanical Gardens Peradeniya'),
(263, 'Haldummulla'),
(264, 'Bokkawala'),
(265, 'Danture'),
(266, 'Daulagala'),
(267, 'Digana Village'),
(268, 'Gampola City'),
(269, 'Hatharaliyadda'),
(270, 'Ginigathhena'),
(271, 'Kandy City Centre'),
(272, 'Court Complex Kandy'),
(273, 'Ettampitiya'),
(274, 'Yatiyantota'),
(275, 'Adikarigama'),
(276, 'Agarapathana'),
(277, 'Akurana'),
(278, 'Ankumbura'),
(279, 'Bogawantalawa'),
(280, 'Padiyapelella'),
(281, 'Andiambalama'),
(282, 'Dankotuwa'),
(283, 'Alawwa'),
(284, 'Wijerama Junction'),
(285, 'Jaffna 2nd Branch'),
(286, 'Chavakachcheri'),
(287, 'Kaduruwela'),
(288, 'Passara'),
(289, 'Devinuwara'),
(290, 'Wattala'),
(291, 'Maskeliya'),
(292, 'Kahawatte'),
(293, 'Wennappuwa'),
(294, 'Hingurana'),
(295, 'Kalmunai'),
(296, 'Mullaitivu'),
(297, 'Thimbirigasyaya'),
(298, 'Kurunegala Bazaar'),
(299, 'Galnewa'),
(300, 'Bandarawela'),
(301, 'Thalawathugoda'),
(302, 'Walasmulla'),
(303, 'Middeniya'),
(304, 'Sri Jayawardenapura Hospital'),
(305, 'Hyde Park'),
(306, 'Batapola'),
(307, 'Geli Oya'),
(308, 'Baddegama'),
(309, 'Polgahawela'),
(310, 'Welisara'),
(311, 'Deniyaya'),
(312, 'Kamburupitiya'),
(313, 'Avissawella'),
(314, 'Talawakelle'),
(315, 'Ridigama'),
(316, 'Pitakotte'),
(317, 'Narammala'),
(318, 'Embilipitiya'),
(319, 'Kegalle Bazaar'),
(320, 'Ambalantota'),
(321, 'Tissamaharama'),
(322, 'Beliatta'),
(323, 'Badalkumbura'),
(324, 'Pelawatte City Kalutara'),
(325, 'Mahiyangana'),
(326, 'Kiribathgoda'),
(327, 'Madampe'),
(328, 'Minuwangoda'),
(329, 'Pannala'),
(330, 'Nikaweratiya'),
(331, 'Anamaduwa'),
(332, 'Galgamuwa'),
(333, 'Weligama'),
(334, 'Anuradhapura Bazzar'),
(335, 'Giriulla'),
(336, 'Bingiriya'),
(337, 'Melsiripura'),
(338, 'Matugama'),
(339, 'Moratumulla'),
(340, 'Waikkal'),
(341, 'Mawanella'),
(342, 'Buttala'),
(343, 'Dematagoda'),
(344, 'Warakapola'),
(345, 'Dharga Town'),
(346, 'Maho'),
(347, 'Madurankuliya'),
(348, 'Aranayake'),
(349, 'Dedicated Economic Centre - Meegoda'),
(350, 'Homagama'),
(351, 'Hiripitiya'),
(352, 'Hettipola'),
(353, 'Kirindiwela'),
(354, 'Negombo Bazzar'),
(355, 'Central Bus Stand'),
(356, 'Mankulam'),
(357, 'Gampola'),
(358, 'Dambulla'),
(359, 'Lunugala'),
(360, 'Yakkalamulla'),
(361, 'Bibile'),
(362, 'Dummalasuriya'),
(363, 'Madawala'),
(364, 'Rambukkana'),
(365, 'Mattegoda'),
(366, 'Wadduwa'),
(367, 'Ruwanwella'),
(368, 'Pilimatalawa'),
(369, 'Peradeniya'),
(370, 'Kalpitiya'),
(371, 'Akkaraipattu'),
(372, 'Nintavur'),
(373, 'Dikwella'),
(374, 'Milagiriya'),
(375, 'Rakwana'),
(376, 'Kolonnawa'),
(377, 'Talgaswela'),
(378, 'Nivitigala'),
(379, 'Nawalapitiya'),
(380, 'Aralaganwila'),
(381, 'Jayanthipura'),
(382, 'Hingurakgoda'),
(383, 'Kirulapana'),
(384, 'Lanka Hospital'),
(385, 'Ingiriya'),
(386, 'Kankesanthurai'),
(387, 'Uda Dumbara'),
(388, 'Panadura Bazaar'),
(389, 'Kaduwela'),
(390, 'Hikkaduwa'),
(391, 'Pitigala'),
(392, 'Kaluwanchikudy'),
(393, 'Lake View'),
(394, 'Akuressa'),
(395, 'Matara City'),
(396, 'Galagedera'),
(397, 'Kataragama'),
(398, 'Keselwatte'),
(399, 'Metropolitan'),
(400, 'Elpitiya'),
(401, 'Kesbewa'),
(402, 'Kebithigollawa'),
(403, 'Kahatagasdigiliya'),
(404, 'Kantale Bazaar'),
(405, 'Trincomalee Bazaar'),
(406, 'Katukurunda'),
(407, 'Valachchenai'),
(408, 'Regent Street'),
(409, 'Grandpass'),
(410, 'Koslanda'),
(411, 'Chenkalady'),
(412, 'Kandapola'),
(413, 'Dehiowita'),
(414, 'Lake House'),
(415, 'Nelliady'),
(416, 'Rattota'),
(417, 'Pallepola'),
(418, 'Medirigiriya'),
(419, 'Deraniyagala'),
(420, 'Gonapola'),
(421, 'Parliamentary Complex'),
(422, 'Kalawana'),
(423, 'Boralesgamuwa'),
(424, 'Lunuwatte'),
(425, 'Kattankudy'),
(426, 'Kandy 2nd'),
(427, 'Talatuoya'),
(428, 'Bombuwela'),
(429, 'Bakamuna'),
(430, 'Galkiriyagama'),
(431, 'Madatugama'),
(432, 'Tambuttegama'),
(433, 'Nochchiyagama'),
(434, 'Agalawatta'),
(435, 'Katunayake I.P.Z.'),
(436, 'Corporate'),
(437, 'Baduraliya'),
(438, 'Kotahena'),
(439, 'Pothuhera'),
(440, 'Bandaragama'),
(441, 'Katugastota'),
(442, 'Neluwa'),
(443, 'Borella  2nd'),
(444, 'Girandurukotte'),
(445, 'Kollupitiya 2nd'),
(446, 'Central Super Market'),
(447, 'Bulathsinhala'),
(448, 'Enderamulla'),
(449, 'Nittambuwa'),
(450, 'Kekirawa'),
(451, 'Weliweriya'),
(452, 'Padukka'),
(453, 'Battaramulla'),
(454, 'Aluthgama'),
(455, 'Personal'),
(456, 'Veyangoda'),
(457, 'Pelmadulla'),
(458, 'Ratnapura Bazaar'),
(459, 'Ward Place'),
(460, 'Dehiattakandiya'),
(461, 'Raddolugama'),
(462, 'Balangoda'),
(463, 'Ratmalana'),
(464, 'Pelawatta'),
(465, 'Hakmana'),
(466, 'Eppawala'),
(467, 'Ruhunu Campus'),
(468, 'Bogahakumbura'),
(469, 'Ella'),
(470, 'Keppetipola'),
(471, 'Batuwatte'),
(472, 'Bopitiya'),
(473, 'Asiri Central'),
(474, 'Katuwellegama Courtaulds Clothing Lanka (Pvt) Ltd'),
(475, 'Dalugama'),
(476, 'Delgoda'),
(477, 'Fish Market Peliyagoda'),
(478, 'Demanhandiya'),
(479, 'Ganemulla'),
(480, 'Gothatuwa'),
(481, 'Mulleriyawa New Town'),
(482, 'Katana'),
(483, 'Naiwala'),
(484, 'Meegalewa'),
(485, 'Badulla City'),
(486, 'Welimada'),
(487, 'CEYBANK Credit card centre'),
(488, 'Biyagama'),
(489, 'Kinniya'),
(490, 'Piliyandala'),
(491, 'Hanwella'),
(492, 'Walapane'),
(493, 'Walgama'),
(494, 'Rajagiriya'),
(495, 'Taprobane'),
(496, 'Uragasmanhandiya'),
(497, 'Karainagar'),
(498, 'Koggala E.P.Z'),
(499, 'Suriyawewa'),
(500, 'Thihagoda'),
(501, 'Udugama'),
(502, 'Ahungalla'),
(503, 'Athurugiriya'),
(504, 'Treasury Division'),
(505, 'Thirunelvely'),
(506, 'Narahenpita'),
(507, 'Malabe'),
(508, 'Ragama'),
(509, 'Pugoda'),
(510, 'Mount Lavinia'),
(511, 'Ranna'),
(512, 'Alawathugoda'),
(513, 'Yakkala'),
(514, 'Ibbagamuwa'),
(515, 'Kandana'),
(516, 'Hemmathagama'),
(517, 'Kottawa'),
(518, 'Angunakolapelessa'),
(519, 'Visakha'),
(520, 'Islamic Banking Unit'),
(521, 'Atchuvely'),
(522, 'Norchcholei'),
(523, 'Kadawatha 2nd City'),
(524, 'Teldeniya'),
(525, 'Rambewa'),
(526, 'Polpithigama'),
(527, 'Deiyandara'),
(528, 'Hali ela'),
(529, 'Godakawela'),
(530, 'Kopay'),
(531, 'BOC premier'),
(532, 'Makola'),
(533, 'Eravur'),
(534, 'Valvettithurai'),
(535, 'Chankanai'),
(536, 'Vavuniya City'),
(537, 'Urumpirai'),
(538, 'Mattala Airport'),
(539, 'Medawala'),
(540, 'Wanduramba'),
(541, 'Provincial Council Complex, Pallakelle'),
(542, 'Welioya-Sampath Nuwara'),
(543, 'Vaddukoddai'),
(544, 'Madawakkulama'),
(545, 'Mahaoya'),
(546, 'Bogaswewa'),
(547, 'Kurunduwatte'),
(548, 'Ethimale'),
(549, 'Central Camp'),
(550, 'Aladeniya'),
(551, 'Corporate 2nd'),
(552, 'Head Office'),
(553, 'jjjjk3'),
(554, 'adf222212'),
(555, 'asd2'),
(556, 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `bankbranchcode`
--

CREATE TABLE `bankbranchcode` (
  `codeid` int(11) NOT NULL,
  `bankid` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `branchcode` int(5) NOT NULL,
  `grade` int(11) NOT NULL,
  `address` text NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankbranchcode`
--

INSERT INTO `bankbranchcode` (`codeid`, `bankid`, `branchid`, `branchcode`, `grade`, `address`, `tel1`, `tel2`) VALUES
(1, 1, 1, 1, 0, '', '', ''),
(2, 1, 2, 2, 0, '', '', ''),
(3, 1, 3, 3, 0, '', '', ''),
(4, 1, 4, 4, 0, '', '', ''),
(5, 1, 5, 5, 0, '', '', ''),
(6, 1, 6, 6, 0, '', '', ''),
(7, 1, 7, 7, 0, '', '', ''),
(8, 1, 8, 9, 0, '', '', ''),
(9, 1, 9, 11, 0, '', '', ''),
(10, 1, 10, 12, 0, '', '', ''),
(11, 1, 11, 15, 0, '', '', ''),
(12, 1, 12, 16, 1, '', '', ''),
(13, 1, 13, 18, 0, '', '', ''),
(14, 1, 14, 20, 0, '', '', ''),
(15, 1, 15, 21, 0, '', '', ''),
(16, 1, 16, 22, 0, '', '', ''),
(17, 1, 17, 23, 0, '', '', ''),
(18, 1, 18, 24, 0, '', '', ''),
(19, 1, 19, 26, 0, '', '', ''),
(20, 1, 20, 27, 0, '', '', ''),
(21, 1, 21, 28, 0, '', '', ''),
(22, 1, 22, 29, 0, '', '', ''),
(23, 1, 23, 30, 0, '', '', ''),
(24, 1, 24, 31, 0, '', '', ''),
(25, 1, 25, 32, 0, '', '', ''),
(26, 1, 26, 34, 0, '', '', ''),
(27, 1, 27, 35, 0, '', '', ''),
(28, 1, 28, 37, 0, '', '', ''),
(29, 1, 29, 38, 1, '', '', ''),
(30, 1, 30, 39, 0, '', '', ''),
(31, 1, 31, 40, 0, '', '', ''),
(32, 1, 32, 41, 0, '', '', ''),
(33, 1, 33, 42, 0, '', '', ''),
(34, 1, 34, 43, 0, '', '', ''),
(35, 1, 35, 44, 0, '', '', ''),
(36, 1, 36, 45, 1, '', '', ''),
(37, 1, 37, 46, 0, '', '', ''),
(38, 1, 38, 47, 0, '', '', ''),
(39, 1, 39, 48, 0, '', '', ''),
(40, 1, 40, 49, 0, '', '', ''),
(41, 1, 41, 50, 0, '', '', ''),
(42, 1, 42, 51, 0, '', '', ''),
(43, 1, 43, 52, 0, '', '', ''),
(44, 1, 44, 53, 0, '', '', ''),
(45, 1, 45, 54, 0, '', '', ''),
(46, 1, 46, 55, 0, '', '', ''),
(47, 1, 47, 56, 0, '', '', ''),
(48, 1, 48, 57, 0, '', '', ''),
(49, 1, 49, 58, 0, '', '', ''),
(50, 1, 50, 59, 0, '', '', ''),
(51, 1, 51, 60, 0, '', '', ''),
(52, 1, 52, 61, 0, '', '', ''),
(53, 1, 53, 63, 0, '', '', ''),
(54, 1, 54, 68, 0, '', '', ''),
(55, 1, 55, 82, 0, '', '', ''),
(56, 1, 56, 83, 0, '', '', ''),
(57, 1, 57, 85, 0, '', '', ''),
(58, 1, 58, 87, 0, '', '', ''),
(59, 1, 59, 88, 0, '', '', ''),
(60, 1, 60, 89, 0, '', '', ''),
(61, 1, 61, 92, 0, '', '', ''),
(62, 1, 62, 93, 0, '', '', ''),
(63, 1, 63, 98, 0, '', '', ''),
(64, 1, 64, 99, 0, '', '', ''),
(65, 1, 65, 101, 0, '', '', ''),
(66, 1, 66, 102, 0, '', '', ''),
(67, 1, 67, 104, 0, '', '', ''),
(68, 1, 68, 118, 0, '', '', ''),
(69, 1, 69, 122, 0, '', '', ''),
(70, 1, 70, 127, 0, '', '', ''),
(71, 1, 71, 135, 0, '', '', ''),
(72, 1, 72, 139, 0, '', '', ''),
(73, 1, 73, 144, 0, '', '', ''),
(74, 1, 74, 152, 0, '', '', ''),
(75, 1, 75, 157, 0, '', '', ''),
(76, 1, 76, 162, 0, '', '', ''),
(77, 1, 77, 167, 0, '', '', ''),
(78, 1, 78, 172, 0, '', '', ''),
(79, 1, 79, 183, 0, '', '', ''),
(80, 1, 80, 217, 0, '', '', ''),
(81, 1, 81, 236, 0, '', '', ''),
(82, 1, 82, 238, 0, '', '', ''),
(83, 1, 83, 250, 0, '', '', ''),
(84, 1, 84, 255, 0, '', '', ''),
(85, 1, 85, 256, 0, '', '', ''),
(86, 1, 86, 257, 0, '', '', ''),
(87, 1, 87, 258, 0, '', '', ''),
(88, 1, 88, 259, 0, '', '', ''),
(89, 1, 89, 260, 0, '', '', ''),
(90, 1, 90, 261, 0, '', '', ''),
(91, 1, 91, 262, 0, '', '', ''),
(92, 1, 92, 263, 0, '', '', ''),
(93, 1, 93, 264, 0, '', '', ''),
(94, 1, 94, 265, 0, '', '', ''),
(95, 1, 95, 266, 0, '', '', ''),
(96, 1, 96, 267, 0, '', '', ''),
(97, 1, 97, 268, 0, '', '', ''),
(98, 1, 98, 270, 0, '', '', ''),
(99, 1, 99, 271, 0, '', '', ''),
(100, 1, 100, 272, 0, '', '', ''),
(101, 1, 101, 273, 0, '', '', ''),
(102, 1, 102, 274, 0, '', '', ''),
(103, 1, 103, 276, 0, '', '', ''),
(104, 1, 104, 277, 0, '', '', ''),
(105, 1, 105, 278, 0, '', '', ''),
(106, 1, 106, 280, 0, '', '', ''),
(107, 1, 107, 281, 0, '', '', ''),
(108, 1, 108, 282, 0, '', '', ''),
(109, 1, 109, 283, 0, '', '', ''),
(110, 1, 110, 284, 0, '', '', ''),
(111, 1, 111, 285, 0, '', '', ''),
(112, 1, 112, 287, 0, '', '', ''),
(113, 1, 113, 288, 0, '', '', ''),
(114, 1, 114, 290, 0, '', '', ''),
(115, 1, 115, 291, 0, '', '', ''),
(116, 1, 116, 292, 0, '', '', ''),
(117, 1, 117, 293, 0, '', '', ''),
(118, 1, 118, 294, 0, '', '', ''),
(119, 1, 119, 295, 0, '', '', ''),
(120, 1, 120, 297, 0, '', '', ''),
(121, 1, 121, 298, 0, '', '', ''),
(122, 1, 122, 299, 0, '', '', ''),
(123, 1, 123, 300, 0, '', '', ''),
(124, 1, 124, 301, 0, '', '', ''),
(125, 1, 125, 302, 0, '', '', ''),
(126, 1, 126, 303, 0, '', '', ''),
(127, 1, 127, 305, 0, '', '', ''),
(128, 1, 128, 306, 0, '', '', ''),
(129, 1, 129, 308, 0, '', '', ''),
(130, 1, 130, 309, 0, '', '', ''),
(131, 1, 131, 311, 0, '', '', ''),
(132, 1, 132, 312, 0, '', '', ''),
(133, 1, 133, 313, 0, '', '', ''),
(134, 1, 134, 314, 0, '', '', ''),
(135, 1, 135, 315, 0, '', '', ''),
(136, 1, 136, 316, 0, '', '', ''),
(137, 1, 137, 317, 0, '', '', ''),
(138, 1, 138, 318, 0, '', '', ''),
(139, 1, 139, 319, 0, '', '', ''),
(140, 1, 140, 320, 0, '', '', ''),
(141, 1, 141, 322, 0, '', '', ''),
(142, 1, 142, 323, 0, '', '', ''),
(143, 1, 143, 324, 0, '', '', ''),
(144, 1, 144, 325, 0, '', '', ''),
(145, 1, 145, 326, 0, '', '', ''),
(146, 1, 146, 328, 0, '', '', ''),
(147, 1, 147, 329, 0, '', '', ''),
(148, 1, 148, 330, 0, '', '', ''),
(149, 1, 149, 331, 0, '', '', ''),
(150, 1, 150, 332, 0, '', '', ''),
(151, 1, 151, 333, 0, '', '', ''),
(152, 1, 152, 334, 0, '', '', ''),
(153, 1, 153, 335, 0, '', '', ''),
(154, 1, 154, 336, 0, '', '', ''),
(155, 1, 155, 337, 0, '', '', ''),
(156, 1, 156, 338, 0, '', '', ''),
(157, 1, 157, 339, 0, '', '', ''),
(158, 1, 158, 340, 0, '', '', ''),
(159, 1, 159, 341, 0, '', '', ''),
(160, 1, 160, 342, 0, '', '', ''),
(161, 1, 161, 343, 0, '', '', ''),
(162, 1, 162, 344, 0, '', '', ''),
(163, 1, 163, 345, 0, '', '', ''),
(164, 1, 164, 346, 0, '', '', ''),
(165, 1, 165, 348, 0, '', '', ''),
(166, 1, 166, 349, 0, '', '', ''),
(167, 1, 167, 351, 0, '', '', ''),
(168, 1, 168, 353, 0, '', '', ''),
(169, 1, 169, 355, 0, '', '', ''),
(170, 1, 170, 356, 0, '', '', ''),
(171, 1, 171, 357, 0, '', '', ''),
(172, 1, 172, 358, 0, '', '', ''),
(173, 1, 173, 359, 0, '', '', ''),
(174, 1, 174, 360, 0, '', '', ''),
(175, 1, 175, 361, 0, '', '', ''),
(176, 1, 176, 362, 0, '', '', ''),
(177, 1, 177, 363, 0, '', '', ''),
(178, 1, 178, 364, 0, '', '', ''),
(179, 1, 179, 366, 0, '', '', ''),
(180, 1, 180, 368, 0, '', '', ''),
(181, 1, 181, 369, 0, '', '', ''),
(182, 1, 182, 370, 0, '', '', ''),
(183, 1, 183, 371, 0, '', '', ''),
(184, 1, 184, 372, 0, '', '', ''),
(185, 1, 185, 373, 0, '', '', ''),
(186, 1, 186, 375, 0, '', '', ''),
(187, 1, 187, 376, 0, '', '', ''),
(188, 1, 188, 378, 0, '', '', ''),
(189, 1, 189, 379, 0, '', '', ''),
(190, 1, 190, 380, 0, '', '', ''),
(191, 1, 191, 381, 0, '', '', ''),
(192, 1, 192, 382, 0, '', '', ''),
(193, 1, 193, 384, 0, '', '', ''),
(194, 1, 194, 385, 0, '', '', ''),
(195, 1, 195, 386, 0, '', '', ''),
(196, 1, 196, 388, 0, '', '', ''),
(197, 1, 197, 389, 0, '', '', ''),
(198, 1, 198, 390, 0, '', '', ''),
(199, 1, 199, 391, 0, '', '', ''),
(200, 1, 200, 392, 0, '', '', ''),
(201, 1, 201, 393, 0, '', '', ''),
(202, 1, 202, 394, 0, '', '', ''),
(203, 1, 203, 395, 0, '', '', ''),
(204, 1, 204, 396, 0, '', '', ''),
(205, 1, 205, 397, 0, '', '', ''),
(206, 1, 206, 398, 0, '', '', ''),
(207, 1, 207, 399, 0, '', '', ''),
(208, 1, 208, 400, 0, '', '', ''),
(209, 1, 209, 401, 0, '', '', ''),
(210, 1, 210, 402, 0, '', '', ''),
(211, 1, 211, 403, 0, '', '', ''),
(212, 1, 212, 404, 0, '', '', ''),
(213, 1, 213, 405, 0, '', '', ''),
(214, 1, 214, 406, 0, '', '', ''),
(215, 1, 215, 407, 0, '', '', ''),
(216, 1, 216, 408, 0, '', '', ''),
(217, 1, 217, 409, 0, '', '', ''),
(218, 1, 218, 410, 0, '', '', ''),
(219, 1, 219, 411, 0, '', '', ''),
(220, 1, 220, 413, 0, '', '', ''),
(221, 1, 221, 414, 0, '', '', ''),
(222, 1, 222, 415, 0, '', '', ''),
(223, 1, 223, 416, 0, '', '', ''),
(224, 1, 224, 417, 0, '', '', ''),
(225, 1, 225, 418, 0, '', '', ''),
(226, 1, 226, 419, 0, '', '', ''),
(227, 1, 227, 420, 0, '', '', ''),
(228, 1, 228, 421, 0, '', '', ''),
(229, 1, 229, 422, 0, '', '', ''),
(230, 1, 230, 423, 0, '', '', ''),
(231, 1, 231, 424, 0, '', '', ''),
(232, 1, 232, 425, 0, '', '', ''),
(233, 1, 233, 426, 0, '', '', ''),
(234, 1, 234, 427, 0, '', '', ''),
(235, 1, 235, 428, 0, '', '', ''),
(236, 1, 236, 429, 0, '', '', ''),
(237, 1, 237, 430, 0, '', '', ''),
(238, 1, 238, 431, 0, '', '', ''),
(239, 1, 239, 432, 0, '', '', ''),
(240, 1, 240, 433, 0, '', '', ''),
(241, 1, 241, 434, 0, '', '', ''),
(242, 1, 242, 436, 0, '', '', ''),
(243, 1, 243, 438, 0, '', '', ''),
(244, 1, 244, 439, 0, '', '', ''),
(245, 1, 245, 440, 0, '', '', ''),
(246, 1, 246, 441, 0, '', '', ''),
(247, 1, 247, 442, 0, '', '', ''),
(248, 1, 248, 443, 0, '', '', ''),
(249, 1, 249, 444, 0, '', '', ''),
(250, 1, 250, 446, 0, '', '', ''),
(251, 1, 251, 447, 0, '', '', ''),
(252, 1, 252, 448, 0, '', '', ''),
(253, 1, 253, 449, 0, '', '', ''),
(254, 1, 254, 451, 0, '', '', ''),
(255, 1, 255, 452, 0, '', '', ''),
(256, 1, 256, 453, 0, '', '', ''),
(257, 1, 257, 455, 0, '', '', ''),
(258, 1, 258, 456, 0, '', '', ''),
(259, 1, 259, 458, 0, '', '', ''),
(260, 1, 260, 459, 0, '', '', ''),
(261, 1, 261, 461, 0, '', '', ''),
(262, 1, 262, 462, 0, '', '', ''),
(263, 1, 263, 463, 0, '', '', ''),
(264, 1, 264, 465, 0, '', '', ''),
(265, 1, 265, 466, 0, '', '', ''),
(266, 1, 266, 467, 0, '', '', ''),
(267, 1, 267, 469, 0, '', '', ''),
(268, 1, 268, 470, 0, '', '', ''),
(269, 1, 269, 472, 0, '', '', ''),
(270, 1, 270, 471, 0, '', '', ''),
(271, 1, 271, 473, 0, '', '', ''),
(272, 1, 272, 474, 0, '', '', ''),
(273, 1, 273, 476, 0, '', '', ''),
(274, 1, 274, 477, 0, '', '', ''),
(275, 1, 275, 487, 0, '', '', ''),
(276, 1, 276, 488, 0, '', '', ''),
(277, 1, 277, 489, 0, '', '', ''),
(278, 1, 278, 490, 0, '', '', ''),
(279, 1, 279, 491, 0, '', '', ''),
(280, 1, 280, 492, 0, '', '', ''),
(281, 1, 281, 494, 0, '', '', ''),
(282, 1, 282, 497, 0, '', '', ''),
(283, 1, 283, 498, 0, '', '', ''),
(284, 1, 284, 499, 0, '', '', ''),
(285, 1, 285, 500, 0, '', '', ''),
(286, 1, 286, 501, 0, '', '', ''),
(287, 1, 287, 502, 0, '', '', ''),
(288, 1, 288, 503, 0, '', '', ''),
(289, 1, 289, 504, 0, '', '', ''),
(290, 1, 290, 505, 0, '', '', ''),
(291, 1, 291, 506, 0, '', '', ''),
(292, 1, 292, 507, 0, '', '', ''),
(293, 1, 293, 508, 0, '', '', ''),
(294, 1, 294, 509, 0, '', '', ''),
(295, 1, 295, 510, 0, '', '', ''),
(296, 1, 296, 511, 0, '', '', ''),
(297, 1, 297, 512, 0, '', '', ''),
(298, 1, 298, 513, 0, '', '', ''),
(299, 1, 299, 514, 0, '', '', ''),
(300, 1, 300, 515, 0, '', '', ''),
(301, 1, 301, 516, 0, '', '', ''),
(302, 1, 302, 517, 0, '', '', ''),
(303, 1, 303, 518, 0, '', '', ''),
(304, 1, 304, 520, 0, '', '', ''),
(305, 1, 305, 521, 0, '', '', ''),
(306, 1, 306, 522, 0, '', '', ''),
(307, 1, 307, 524, 0, '', '', ''),
(308, 1, 308, 525, 0, '', '', ''),
(309, 1, 309, 526, 0, '', '', ''),
(310, 1, 310, 527, 0, '', '', ''),
(311, 1, 311, 528, 0, '', '', ''),
(312, 1, 312, 529, 0, '', '', ''),
(313, 1, 313, 530, 0, '', '', ''),
(314, 1, 314, 531, 0, '', '', ''),
(315, 1, 315, 532, 0, '', '', ''),
(316, 1, 316, 533, 0, '', '', ''),
(317, 1, 317, 534, 0, '', '', ''),
(318, 1, 318, 535, 0, '', '', ''),
(319, 1, 319, 536, 0, '', '', ''),
(320, 1, 320, 537, 0, '', '', ''),
(321, 1, 321, 538, 0, '', '', ''),
(322, 1, 322, 539, 0, '', '', ''),
(323, 1, 323, 540, 0, '', '', ''),
(324, 1, 324, 541, 0, '', '', ''),
(325, 1, 325, 542, 0, '', '', ''),
(326, 1, 326, 543, 0, '', '', ''),
(327, 1, 327, 544, 0, '', '', ''),
(328, 1, 328, 545, 0, '', '', ''),
(329, 1, 329, 546, 0, '', '', ''),
(330, 1, 330, 547, 0, '', '', ''),
(331, 1, 331, 548, 0, '', '', ''),
(332, 1, 332, 549, 0, '', '', ''),
(333, 1, 333, 550, 0, '', '', ''),
(334, 1, 334, 551, 0, '', '', ''),
(335, 1, 335, 553, 0, '', '', ''),
(336, 1, 336, 554, 0, '', '', ''),
(337, 1, 337, 555, 0, '', '', ''),
(338, 1, 338, 556, 0, '', '', ''),
(339, 1, 339, 557, 0, '', '', ''),
(340, 1, 340, 558, 0, '', '', ''),
(341, 1, 341, 559, 0, '', '', ''),
(342, 1, 342, 560, 0, '', '', ''),
(343, 1, 343, 561, 0, '', '', ''),
(344, 1, 344, 562, 0, '', '', ''),
(345, 1, 345, 563, 0, '', '', ''),
(346, 1, 346, 564, 0, '', '', ''),
(347, 1, 347, 565, 0, '', '', ''),
(348, 1, 348, 566, 0, '', '', ''),
(349, 1, 349, 567, 0, '', '', ''),
(350, 1, 350, 568, 0, '', '', ''),
(351, 1, 351, 569, 0, '', '', ''),
(352, 1, 352, 570, 0, '', '', ''),
(353, 1, 353, 571, 0, '', '', ''),
(354, 1, 354, 572, 0, '', '', ''),
(355, 1, 355, 573, 0, '', '', ''),
(356, 1, 356, 574, 0, '', '', ''),
(357, 1, 357, 575, 0, '', '', ''),
(358, 1, 358, 576, 0, '', '', ''),
(359, 1, 359, 577, 0, '', '', ''),
(360, 1, 360, 578, 0, '', '', ''),
(361, 1, 361, 579, 0, '', '', ''),
(362, 1, 362, 580, 0, '', '', ''),
(363, 1, 363, 581, 0, '', '', ''),
(364, 1, 364, 582, 0, '', '', ''),
(365, 1, 365, 583, 0, '', '', ''),
(366, 1, 366, 584, 0, '', '', ''),
(367, 1, 367, 585, 0, '', '', ''),
(368, 1, 368, 587, 0, '', '', ''),
(369, 1, 369, 588, 0, '', '', ''),
(370, 1, 370, 589, 0, '', '', ''),
(371, 1, 371, 590, 0, '', '', ''),
(372, 1, 372, 591, 0, '', '', ''),
(373, 1, 373, 592, 0, '', '', ''),
(374, 1, 374, 593, 0, '', '', ''),
(375, 1, 375, 594, 0, '', '', ''),
(376, 1, 376, 595, 0, '', '', ''),
(377, 1, 377, 596, 0, '', '', ''),
(378, 1, 378, 597, 0, '', '', ''),
(379, 1, 379, 598, 0, '', '', ''),
(380, 1, 380, 599, 0, '', '', ''),
(381, 1, 381, 600, 0, '', '', ''),
(382, 1, 382, 601, 0, '', '', ''),
(383, 1, 383, 602, 0, '', '', ''),
(384, 1, 384, 603, 0, '', '', ''),
(385, 1, 385, 604, 0, '', '', ''),
(386, 1, 386, 605, 0, '', '', ''),
(387, 1, 387, 606, 0, '', '', ''),
(388, 1, 388, 607, 0, '', '', ''),
(389, 1, 389, 608, 0, '', '', ''),
(390, 1, 390, 609, 0, '', '', ''),
(391, 1, 391, 610, 0, '', '', ''),
(392, 1, 392, 611, 0, '', '', ''),
(393, 1, 393, 612, 0, '', '', ''),
(394, 1, 394, 613, 0, '', '', ''),
(395, 1, 395, 614, 0, '', '', ''),
(396, 1, 396, 615, 0, '', '', ''),
(397, 1, 397, 616, 0, '', '', ''),
(398, 1, 398, 617, 0, '', '', ''),
(399, 1, 399, 618, 0, '', '', ''),
(400, 1, 400, 619, 0, '', '', ''),
(401, 1, 401, 620, 0, '', '', ''),
(402, 1, 402, 621, 0, '', '', ''),
(403, 1, 403, 622, 0, '', '', ''),
(404, 1, 404, 623, 0, '', '', ''),
(405, 1, 405, 624, 0, '', '', ''),
(406, 1, 406, 625, 0, '', '', ''),
(407, 1, 407, 626, 0, '', '', ''),
(408, 1, 408, 627, 0, '', '', ''),
(409, 1, 409, 628, 0, '', '', ''),
(410, 1, 410, 629, 0, '', '', ''),
(411, 1, 411, 630, 0, '', '', ''),
(412, 1, 412, 633, 0, '', '', ''),
(413, 1, 413, 634, 0, '', '', ''),
(414, 1, 414, 636, 0, '', '', ''),
(415, 1, 415, 638, 0, '', '', ''),
(416, 1, 416, 639, 0, '', '', ''),
(417, 1, 417, 640, 0, '', '', ''),
(418, 1, 418, 641, 0, '', '', ''),
(419, 1, 419, 642, 0, '', '', ''),
(420, 1, 420, 643, 0, '', '', ''),
(421, 1, 421, 644, 0, '', '', ''),
(422, 1, 422, 645, 0, '', '', ''),
(423, 1, 423, 646, 0, '', '', ''),
(424, 1, 424, 647, 0, '', '', ''),
(425, 1, 425, 648, 0, '', '', ''),
(426, 1, 426, 649, 0, '', '', ''),
(427, 1, 427, 650, 0, '', '', ''),
(428, 1, 428, 651, 0, '', '', ''),
(429, 1, 429, 652, 0, '', '', ''),
(430, 1, 430, 653, 0, '', '', ''),
(431, 1, 431, 654, 0, '', '', ''),
(432, 1, 432, 655, 0, '', '', ''),
(433, 1, 433, 656, 0, '', '', ''),
(434, 1, 434, 657, 0, '', '', ''),
(435, 1, 435, 658, 0, '', '', ''),
(436, 1, 436, 660, 0, '', '', ''),
(437, 1, 437, 662, 0, '', '', ''),
(438, 1, 438, 663, 0, '', '', ''),
(439, 1, 439, 664, 0, '', '', ''),
(440, 1, 440, 665, 0, '', '', ''),
(441, 1, 441, 666, 0, '', '', ''),
(442, 1, 442, 667, 0, '', '', ''),
(443, 1, 443, 668, 0, '', '', ''),
(444, 1, 444, 669, 0, '', '', ''),
(445, 1, 445, 670, 0, '', '', ''),
(446, 1, 446, 672, 0, '', '', ''),
(447, 1, 447, 673, 0, '', '', ''),
(448, 1, 448, 674, 0, '', '', ''),
(449, 1, 449, 675, 0, '', '', ''),
(450, 1, 450, 676, 0, '', '', ''),
(451, 1, 451, 677, 0, '', '', ''),
(452, 1, 452, 678, 0, '', '', ''),
(453, 1, 453, 679, 0, '', '', ''),
(454, 1, 454, 680, 0, '', '', ''),
(455, 1, 455, 681, 0, '', '', ''),
(456, 1, 456, 682, 0, '', '', ''),
(457, 1, 457, 683, 0, '', '', ''),
(458, 1, 458, 684, 0, '', '', ''),
(459, 1, 459, 685, 0, '', '', ''),
(460, 1, 460, 686, 0, '', '', ''),
(461, 1, 461, 687, 0, '', '', ''),
(462, 1, 462, 688, 0, '', '', ''),
(463, 1, 463, 689, 0, '', '', ''),
(464, 1, 464, 690, 0, '', '', ''),
(465, 1, 465, 691, 0, '', '', ''),
(466, 1, 466, 692, 0, '', '', ''),
(467, 1, 467, 693, 0, '', '', ''),
(468, 1, 468, 699, 0, '', '', ''),
(469, 1, 469, 701, 0, '', '', ''),
(470, 1, 470, 703, 0, '', '', ''),
(471, 1, 471, 708, 0, '', '', ''),
(472, 1, 472, 711, 0, '', '', ''),
(473, 1, 473, 713, 0, '', '', ''),
(474, 1, 474, 714, 0, '', '', ''),
(475, 1, 475, 715, 0, '', '', ''),
(476, 1, 476, 716, 0, '', '', ''),
(477, 1, 477, 718, 0, '', '', ''),
(478, 1, 478, 717, 0, '', '', ''),
(479, 1, 479, 720, 0, '', '', ''),
(480, 1, 480, 721, 0, '', '', ''),
(481, 1, 481, 723, 0, '', '', ''),
(482, 1, 482, 722, 0, '', '', ''),
(483, 1, 483, 724, 0, '', '', ''),
(484, 1, 484, 728, 0, '', '', ''),
(485, 1, 485, 729, 0, '', '', ''),
(486, 1, 486, 730, 0, '', '', ''),
(487, 1, 487, 731, 0, '', '', ''),
(488, 1, 488, 732, 0, '', '', ''),
(489, 1, 489, 735, 0, '', '', ''),
(490, 1, 490, 736, 0, '', '', ''),
(491, 1, 491, 741, 0, '', '', ''),
(492, 1, 492, 743, 0, '', '', ''),
(493, 1, 493, 744, 0, '', '', ''),
(494, 1, 494, 746, 0, '', '', ''),
(495, 1, 495, 747, 0, '', '', ''),
(496, 1, 496, 748, 0, '', '', ''),
(497, 1, 497, 749, 0, '', '', ''),
(498, 1, 498, 750, 0, '', '', ''),
(499, 1, 499, 751, 0, '', '', ''),
(500, 1, 500, 752, 0, '', '', ''),
(501, 1, 501, 753, 0, '', '', ''),
(502, 1, 502, 754, 0, '', '', ''),
(503, 1, 503, 757, 0, '', '', ''),
(504, 1, 504, 760, 0, '', '', ''),
(505, 1, 505, 761, 0, '', '', ''),
(506, 1, 506, 762, 0, '', '', ''),
(507, 1, 507, 763, 0, '', '', ''),
(508, 1, 508, 764, 0, '', '', ''),
(509, 1, 509, 765, 0, '', '', ''),
(510, 1, 510, 766, 0, '', '', ''),
(511, 1, 511, 767, 0, '', '', ''),
(512, 1, 512, 768, 0, '', '', ''),
(513, 1, 513, 769, 0, '', '', ''),
(514, 1, 514, 770, 0, '', '', ''),
(515, 1, 515, 771, 0, '', '', ''),
(516, 1, 516, 772, 0, '', '', ''),
(517, 1, 517, 773, 0, '', '', ''),
(518, 1, 518, 774, 0, '', '', ''),
(519, 1, 519, 775, 0, '', '', ''),
(520, 1, 520, 776, 0, '', '', ''),
(521, 1, 521, 778, 0, '', '', ''),
(522, 1, 522, 779, 0, '', '', ''),
(523, 1, 523, 780, 0, '', '', ''),
(524, 1, 524, 781, 0, '', '', ''),
(525, 1, 525, 782, 0, '', '', ''),
(526, 1, 526, 783, 0, '', '', ''),
(527, 1, 527, 784, 0, '', '', ''),
(528, 1, 528, 785, 0, '', '', ''),
(529, 1, 529, 786, 0, '', '', ''),
(530, 1, 530, 787, 0, '', '', ''),
(531, 1, 531, 788, 0, '', '', ''),
(532, 1, 532, 789, 0, '', '', ''),
(533, 1, 533, 790, 0, '', '', ''),
(534, 1, 534, 791, 0, '', '', ''),
(535, 1, 535, 792, 0, '', '', ''),
(536, 1, 536, 793, 0, '', '', ''),
(537, 1, 537, 794, 0, '', '', ''),
(538, 1, 538, 796, 0, '', '', ''),
(539, 1, 539, 797, 0, '', '', ''),
(540, 1, 540, 800, 0, '', '', ''),
(541, 1, 541, 802, 0, '', '', ''),
(542, 1, 542, 803, 0, '', '', ''),
(543, 1, 543, 804, 0, '', '', ''),
(544, 1, 544, 805, 0, '', '', ''),
(545, 1, 545, 806, 0, '', '', ''),
(546, 1, 546, 808, 0, '', '', ''),
(547, 1, 547, 809, 0, '', '', ''),
(548, 1, 548, 810, 0, '', '', ''),
(549, 1, 549, 811, 0, '', '', ''),
(550, 1, 550, 812, 0, '', '', ''),
(551, 1, 551, 822, 0, '', '', ''),
(552, 1, 552, 999, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boardofdirectors`
--

CREATE TABLE `boardofdirectors` (
  `boardofdirid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `dirid` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `appointeddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardofdirectors`
--

INSERT INTO `boardofdirectors` (`boardofdirid`, `comid`, `dirid`, `designation`, `appointeddate`) VALUES
(5, 1, 1, '3', '2016-12-11'),
(7, 1, 2, 'erer', '2016-08-01'),
(10, 1, 3, 'ee', '2016-08-26'),
(11, 1, 8, 'ee', '2016-08-28'),
(12, 1, 7, '123', '2016-08-28'),
(13, 1, 12, 'df', '2016-09-01'),
(14, 2, 3, 'hh', '2016-09-03'),
(15, 2, 1, '3', '2016-09-04'),
(16, 2, 4, 'hh', '2016-09-04'),
(17, 2, 6, 'df', '2016-09-04'),
(18, 3, 3, '6', '2017-10-10'),
(19, 1, 6, '1', '2017-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `branchgrade`
--

CREATE TABLE `branchgrade` (
  `gradeid` int(11) NOT NULL,
  `gradename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchgrade`
--

INSERT INTO `branchgrade` (`gradeid`, `gradename`) VALUES
(1, 'Super Grade'),
(2, 'Grade A'),
(3, 'Grade B'),
(4, 'Grade C'),
(5, 'Grade I'),
(6, 'Grade II');

-- --------------------------------------------------------

--
-- Table structure for table `brokerbankacc`
--

CREATE TABLE `brokerbankacc` (
  `brobankid` int(11) NOT NULL,
  `brokercomid` int(11) NOT NULL,
  `bankid` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `bankaccno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brokercompany`
--

CREATE TABLE `brokercompany` (
  `brokercomid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `address5` varchar(100) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `tel3` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `contactperson` varchar(150) NOT NULL,
  `conpersondesignation` varchar(50) NOT NULL,
  `brokerid` int(11) NOT NULL,
  `brocomtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brokercompany`
--

INSERT INTO `brokercompany` (`brokercomid`, `name`, `symbol`, `address1`, `address2`, `address3`, `address4`, `address5`, `tel1`, `tel2`, `tel3`, `fax`, `email`, `website`, `contactperson`, `conpersondesignation`, `brokerid`, `brocomtypeid`) VALUES
(1, 'Lanka Securities', 'LSL', 'No 35', 'Gall road', 'Colombo 3', '----------', 'Sri Lanka', '', '', '', '', '', '', '', '', 0, 1),
(2, 'Asia Securities', 'ASL', 'No 1/115', 'Timbirigasyaya Road', 'Narahenpita', 'Colombo 5', '3434', '', '', '', '', '', '', '', '', 0, 2),
(3, 'Equity Stock Brokers', 'ESB', 'No 335', 'Nawam Nawatha', 'Colombo 2', 'dfkjd', 'dfjmmm', '', '', '', '', '', '', '', '', 0, 2),
(4, 'Sampath Stock Brokers', 'SSB', 'No 450', 'D. R. Wejewardana Mawatha', 'Colombo 10', 'dkj', 'dfjfff', '', '', '', '', '', '', '', '', 0, 3),
(5, 'NDB Stock Broker', 'NDB', '325/2', 'NDB House', '3rd Floor', 'Nawam Mawatha', 'Colombo 2', '', '', '', '', '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brokercomtype`
--

CREATE TABLE `brokercomtype` (
  `brocomtypeid` int(11) NOT NULL,
  `typeslug` varchar(30) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brokercomtype`
--

INSERT INTO `brokercomtype` (`brocomtypeid`, `typeslug`, `type`) VALUES
(1, 'members', 'Members'),
(2, 'trading-members', 'Trading Members'),
(3, 'debt-trading-members', 'Trading Members-Debt'),
(4, '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `broker_fund`
--

CREATE TABLE `broker_fund` (
  `brokercomid` int(5) NOT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `userid` int(5) NOT NULL,
  `lastupdated` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broker_fund`
--

INSERT INTO `broker_fund` (`brokercomid`, `balance`, `userid`, `lastupdated`) VALUES
(2, '1493.65', 10, '2017-10-08 09:33'),
(3, '-8992.46', 10, '2017-11-05 06:08');

-- --------------------------------------------------------

--
-- Table structure for table `broker_fund_history`
--

CREATE TABLE `broker_fund_history` (
  `id` int(5) NOT NULL,
  `brokercomid` int(5) DEFAULT NULL,
  `userid` int(5) DEFAULT NULL,
  `txntype` varchar(10) DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `withdraw` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `txntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broker_fund_history`
--

INSERT INTO `broker_fund_history` (`id`, `brokercomid`, `userid`, `txntype`, `deposit`, `withdraw`, `balance`, `txntime`) VALUES
(1, 2, 10, 'DEPOSIT', '2000.00', NULL, '2000.00', '2017-10-08 13:54:00'),
(2, 2, 10, 'WITHDRAW', NULL, '1000.00', '1000.00', '2017-10-08 13:54:00'),
(3, 2, 10, 'DEPOSIT', '500.00', NULL, '1500.00', '2017-10-08 13:54:00'),
(4, 2, 10, 'WITHDRAW', NULL, '1700.00', '-200.00', '2017-10-08 13:55:00'),
(5, 2, 10, 'DEPOSIT', '500.00', NULL, '300.00', '2017-10-08 13:55:00'),
(6, 3, 10, 'DEPOSIT', '1500.00', NULL, '1500.00', '2017-11-03 06:03:00'),
(7, 3, 10, 'DEPOSIT', '122.00', NULL, '122.00', '2017-11-03 06:12:00'),
(8, 3, 10, 'DEPOSIT', '100.00', NULL, '100.00', '2017-11-03 06:15:00'),
(9, 3, 10, 'DEPOSIT', '100.00', NULL, '100.00', '2017-11-03 06:15:00'),
(10, 3, 10, 'DEPOSIT', '120.00', NULL, '120.00', '2017-11-03 06:20:00'),
(11, 3, 10, 'DEPOSIT', '120.00', NULL, '120.00', '2017-11-03 06:22:00'),
(12, 3, 10, 'DEPOSIT', '1500.00', NULL, '1500.00', '2017-11-03 07:29:00'),
(13, 3, 10, 'WITHDRAW', NULL, '150.00', '1350.00', '2017-11-02 19:43:00'),
(14, 3, 10, 'WITHDRAW', NULL, '50.00', '1300.00', '2017-11-02 19:43:00'),
(15, 3, 10, 'DEPOSIT', '100.00', NULL, '1400.00', '2017-11-02 19:43:00'),
(16, 3, 10, 'WITHDRAW', NULL, '50.00', '1350.00', '2017-11-02 19:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `cal`
--

CREATE TABLE `cal` (
  `calid` int(11) NOT NULL,
  `transactionname` varchar(50) NOT NULL,
  `transcostupto50` double NOT NULL,
  `transcostover50` double NOT NULL,
  `units` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cal`
--

INSERT INTO `cal` (`calid`, `transactionname`, `transcostupto50`, `transcostover50`, `units`) VALUES
(1, 'Brrokerage Fee', 0.65, 0.3, 0.02),
(2, 'CSE Fee', 0.084, 0.0525, 0.01),
(3, 'CDS Fee', 0.024, 0.015, 0.02),
(4, 'SEC Cess', 0.072, 0.045, 0.02),
(5, 'SLT', 0.35, 0.35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `calender_event`
--

CREATE TABLE `calender_event` (
  `eventid` int(5) NOT NULL,
  `eventdate` varchar(20) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `marketclose` varchar(50) DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calender_event`
--

INSERT INTO `calender_event` (`eventid`, `eventdate`, `description`, `marketclose`) VALUES
(1, '2017-10-20', 'Market close for sale', 'YES'),
(2, '2017-11-11', 'Bank Holiday', 'YES'),
(3, '2017-11-10', 'Poya Day', 'YES'),
(4, '2017-10-03', 'Poya Daya', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `cal_history`
--

CREATE TABLE `cal_history` (
  `calid` int(11) NOT NULL,
  `effectdate` varchar(20) DEFAULT NULL,
  `transactionname` varchar(50) NOT NULL,
  `transcostupto50` double NOT NULL,
  `transcostover50` double NOT NULL,
  `units` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cal_history`
--

INSERT INTO `cal_history` (`calid`, `effectdate`, `transactionname`, `transcostupto50`, `transcostover50`, `units`) VALUES
(1, '2017-09-17', 'Brrokerage Fee', 0.74, 0.3, 0.02),
(2, '2017-09-17', 'CSE Fee', 0.094, 0.0625, 0.01),
(3, '2017-09-17', 'CDS Fee', 0.034, 0.025, 0.02),
(4, '2017-09-17', 'SEC Cess', 0.082, 0.055, 0.02),
(5, '2017-09-17', 'SLT', 0.4, 0.4, 0),
(6, '2017-09-10', 'Brrokerage Fee', 0.84, 0.4, 0.02),
(7, '2017-09-10', 'CSE Fee', 0.104, 0.0725, 0.01),
(8, '2017-09-10', 'CDS Fee', 0.044, 0.035, 0.02),
(9, '2017-09-10', 'SEC Cess', 0.092, 0.065, 0.02),
(10, '2017-09-10', 'SLT', 0.5, 0.4, 0),
(13, '2017-09-12', 'Brrokerage Fee', 0.84, 0.4, 0.02),
(14, '2017-09-12', 'CSE Fee', 0.104, 0.0725, 0.01),
(15, '2017-09-12', 'CDS Fee', 0.044, 0.035, 0.02),
(16, '2017-09-12', 'SEC Cess', 0.092, 0.065, 0.02),
(17, '2017-09-12', 'SLT', 0.5, 0.4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cdsaccount`
--

CREATE TABLE `cdsaccount` (
  `cdsaccid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `brokercomid` int(11) NOT NULL,
  `stockbrokerid` int(11) NOT NULL,
  `cdsaccno` varchar(15) NOT NULL,
  `opendate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdsaccount`
--

INSERT INTO `cdsaccount` (`cdsaccid`, `userid`, `brokercomid`, `stockbrokerid`, `cdsaccno`, `opendate`) VALUES
(1, 0, 1, 1, '101', '2016-08-01'),
(2, 0, 2, 2, '102', '2016-08-02'),
(3, 0, 5, 3, '105', '2016-08-03'),
(4, 0, 3, 4, '104', '2016-08-04'),
(5, 0, 5, 5, '6665645', '2016-08-06'),
(6, 0, 5, 6, '1002', '2017-09-10'),
(7, 10, 2, 7, '1002', '2017-09-10'),
(8, 10, 3, 8, '1003', '2017-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comid` int(4) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `sectorid` int(11) NOT NULL,
  `boardid` varchar(50) NOT NULL,
  `quoteddate` date NOT NULL,
  `secid` int(11) NOT NULL,
  `chairman` text NOT NULL,
  `ceo` text NOT NULL,
  `deputychairman` text NOT NULL,
  `dirid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comid`, `symbol`, `com_name`, `address1`, `address2`, `address3`, `address4`, `tel`, `fax`, `email`, `website`, `sectorid`, `boardid`, `quoteddate`, `secid`, `chairman`, `ceo`, `deputychairman`, `dirid`) VALUES
(1, 'JKH', 'JOHN KEELS HOLDINGS PLC', 'NO 350', 'Keel House', 'Galle Road', 'Colombo1', '0115252552', '011254879', 'info@keels.lk', 'www.keels.lk', 2, '1', '1949-02-13', 3, 'Mr. Gamage', 'Mr. Prageeth', 'Mr. Nimal Ranjith', 0),
(2, 'SAMP', 'SAMPATH BANK PLC', 'Nawam Nawatha', 'Colombo2', 'o', 'o', '011556486', '0', 'info@sampath.lk', 'www.sampath.lk', 1, '2', '0000-00-00', 1, '0', 'o', 'o', 0),
(3, 'NDB', 'NATIONAL DEVELOPMENT BANK PLC', 'GDGdd', 'DDFG', 'DFGDFG', 'DFGG', '464564564', '56657567', 'gdfgdf', 'gdfgfg', 1, '1', '0000-00-00', 1, 'fdgdf', 'fdgdfg', 'ddfgdfgd', 0),
(4, 'GLAS', 'PIRAMAL GLASS', 'No 113/5', 'Borupana', 'Rathmalana', 'DFD', '343232', '34', 'DFD', 'EDF', 2, '3', '0000-00-00', 2, 'FER', 'DF', 'Silva', 0),
(5, 'BIL', 'BROWNS INVESTMENT', 'xxxxxxxxxx', 'xxxxxxxx', 'xxxxxxxx', 'xxxxxxxx', '212121212', '423424', 'mpsarathw@gmail.com', 'qwqwqw', 2, '2', '0000-00-00', 2, 'wwwwwwww', 'sdsdsd', 'fsdfdsfdsf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companysecretary`
--

CREATE TABLE `companysecretary` (
  `secid` int(11) NOT NULL,
  `secretaryname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactperson` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companysecretary`
--

INSERT INTO `companysecretary` (`secid`, `secretaryname`, `address`, `tel1`, `tel2`, `fax`, `email`, `contactperson`) VALUES
(1, 'S S P Corporate Services', 'No2, Gothami Road, Colombo 8.', '0112789456', '0114789258', '0112741453', 'ssp@mail.com', 'Mr. Saman'),
(2, 'J K R Secretary', 'No 10, R A De Mel Mawatha, Colombo 2.', '0112756159', '0112712486', '0112896425', 'jkr@mail.com', 'Mr. Gamini Perera'),
(3, 'Softlogic Corprotate', 'Colombo 3', '34', '4434', '535', 'soft@email.com', 'Mr. Janka');

-- --------------------------------------------------------

--
-- Table structure for table `costname`
--

CREATE TABLE `costname` (
  `costid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costname`
--

INSERT INTO `costname` (`costid`, `description`) VALUES
(1, 'Upto Rs. 50 Mil'),
(2, 'Over Rs. 50 Mil'),
(3, 'Units');

-- --------------------------------------------------------

--
-- Table structure for table `debtintreceivable`
--

CREATE TABLE `debtintreceivable` (
  `intrecid` int(11) NOT NULL,
  `debtid` int(11) NOT NULL,
  `paymentdate` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `debtsecurity`
--

CREATE TABLE `debtsecurity` (
  `debtid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `debttype` varchar(150) NOT NULL,
  `securityid` varchar(50) NOT NULL,
  `isin` varchar(20) NOT NULL,
  `interstrate` int(11) NOT NULL,
  `maturitydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demoadd`
--

CREATE TABLE `demoadd` (
  `id` int(5) NOT NULL,
  `demoname` varchar(5) DEFAULT NULL,
  `demopass` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `directordesignation`
--

CREATE TABLE `directordesignation` (
  `dirdesigid` int(11) NOT NULL,
  `dirdesignation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directordesignation`
--

INSERT INTO `directordesignation` (`dirdesigid`, `dirdesignation`) VALUES
(1, 'Chairman'),
(2, 'Deputy Chairman'),
(3, 'CEO'),
(4, 'Deputy CEO'),
(5, 'Managing Director'),
(6, 'Joint Managing Director'),
(7, 'Director'),
(8, 'Director - Executive'),
(9, 'Director - Non Executive'),
(10, 'Director - Independent'),
(11, 'Director - Non Independednt'),
(12, 'Other'),
(13, '34'),
(14, 'dtt'),
(15, 'j');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `dirid` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `initial` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`dirid`, `title`, `initial`, `fname`, `mname`, `lname`) VALUES
(1, 4, 'F. A.', 'Dammiak', 'Nishantha', 'Gunawardana'),
(2, 7, 'H.L', 'Dineshi', 'Madushika', 'Karunarathna'),
(3, 4, 'W. M.', 'Kamani', 'Nalani', 'Jayathilaka'),
(4, 5, 'K.', 'Sunila', 'Prasadinie', 'Silva'),
(5, 5, 'T. G.', 'Kapila', 'Suranga', 'Mahanama'),
(6, 6, 'S.', 'Rohan', 'Prashad', 'Jayasumana'),
(7, 6, 'R. K.', 'Arjuna', 'Nimesh', 'Silva'),
(8, 7, 'S.', 'Sunila', 'Jayanthi', 'Galappathi'),
(9, 14, 'F. K.', 'gf', 'er', 'er'),
(10, 2, 'N.', 'Ramesh', 'Shehan', 'Kulakulasuriya'),
(11, 1, 'A.', 'Nihal', 'Udayanga', 'Jayaweera'),
(12, 7, 'gl', 'l', 'l', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `dividend`
--

CREATE TABLE `dividend` (
  `dividendid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `rate` double NOT NULL,
  `method` varchar(20) NOT NULL,
  `financialyear` varchar(20) NOT NULL,
  `xd` date NOT NULL,
  `paymentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dividend`
--

INSERT INTO `dividend` (`dividendid`, `comid`, `rate`, `method`, `financialyear`, `xd`, `paymentdate`) VALUES
(1, 1, 2.5, 'Final', '2014/2015', '2015-07-05', '2015-08-01'),
(2, 1, 1.25, 'Final', '2015/2016', '2017-01-05', '2017-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `dividentdetails`
--

CREATE TABLE `dividentdetails` (
  `did` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `announcementdate` date NOT NULL,
  `rate` double NOT NULL,
  `financialyear` year(4) NOT NULL,
  `xddate` date NOT NULL,
  `paymentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dividentdetails`
--

INSERT INTO `dividentdetails` (`did`, `comid`, `announcementdate`, `rate`, `financialyear`, `xddate`, `paymentdate`) VALUES
(1, 4, '2017-03-23', 22, 2017, '2017-03-23', '2017-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `nic`, `gender`) VALUES
(1, 'Saman', '3434343V', 'Male'),
(2, 'Kalum', '3333', 'Male'),
(3, 'Nimal', '5465', 'Male'),
(4, 'Shanika', '4645456', 'Female'),
(5, 'Perera', '3485903450', 'Male'),
(6, 'Geetha', '4545', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `equitysecurity`
--

CREATE TABLE `equitysecurity` (
  `equityid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `subtypeid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `listedqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equitysecurity`
--

INSERT INTO `equitysecurity` (`equityid`, `comid`, `subtypeid`, `type`, `issuedqty`, `listedqty`) VALUES
(1, 1, 1, 0, 125000, 125000),
(2, 1, 5, 22, 50000, 50000),
(3, 5, 1, 0, 1500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `financialdetails`
--

CREATE TABLE `financialdetails` (
  `fid` int(11) NOT NULL,
  `comid` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `quarter` varchar(20) DEFAULT NULL,
  `startedcapital` double DEFAULT NULL,
  `revenue` double DEFAULT NULL,
  `profitbeforetax` double DEFAULT NULL,
  `profitaftertax` double DEFAULT NULL,
  `totalexpenditure` double DEFAULT NULL,
  `assets` double DEFAULT NULL,
  `liabilities` double DEFAULT NULL,
  `totalincome` double DEFAULT NULL,
  `costofsales` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financialdetails`
--

INSERT INTO `financialdetails` (`fid`, `comid`, `year`, `quarter`, `startedcapital`, `revenue`, `profitbeforetax`, `profitaftertax`, `totalexpenditure`, `assets`, `liabilities`, `totalincome`, `costofsales`) VALUES
(1, 4, 0000, '32', 2312, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 4, 0000, '32', 2312, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listedboard`
--

CREATE TABLE `listedboard` (
  `boardid` int(11) NOT NULL,
  `boardname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listedboard`
--

INSERT INTO `listedboard` (`boardid`, `boardname`) VALUES
(1, 'Main Board'),
(2, 'Diri Savi Board'),
(3, 'Default Board'),
(4, 'Deling Suspended'),
(5, 'Trading Suspended'),
(6, 'Trading Halt');

-- --------------------------------------------------------

--
-- Table structure for table `log_trace`
--

CREATE TABLE `log_trace` (
  `id` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `IP` varchar(100) DEFAULT NULL,
  `logtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_trace`
--

INSERT INTO `log_trace` (`id`, `username`, `IP`, `logtime`) VALUES
(1, NULL, '::1', '2017-11-04 13:39:56'),
(2, NULL, '::1', '2017-11-04 13:59:24'),
(3, 'admin', '::1', '2017-11-04 14:00:39'),
(4, 'admin', '::1', '2017-11-04 14:10:54'),
(5, 'admin', '::1', '2017-11-04 14:11:35'),
(6, 'admin', '::1', '2017-11-04 14:14:09'),
(7, 'admin', '::1', '2017-11-04 14:14:25'),
(8, 'admin', '::1', '2017-11-04 14:14:43'),
(9, 'ba', '::1', '2017-11-04 14:19:09'),
(10, 'ba', '::1', '2017-11-04 14:28:09'),
(11, 'ba', '::1', '2017-11-04 14:52:51'),
(12, 'ba', '::1', '2017-11-04 14:53:58'),
(13, 'ba', '::1', '2017-11-04 15:00:31'),
(14, 'ba', '::1', '2017-11-04 15:28:12'),
(15, 'ba', '::1', '2017-11-04 15:30:22'),
(16, 'ba', '::1', '2017-11-04 15:32:39'),
(17, 'ba', '::1', '2017-11-04 15:33:01'),
(18, 'ttt', '::1', '2017-11-05 04:51:00'),
(19, 'ba', '::1', '2017-11-05 04:51:33'),
(20, 'ttt', '::1', '2017-11-05 04:53:00'),
(21, 'adm@gmail.com', '::1', '2017-11-05 04:53:34'),
(22, 'ttt', '::1', '2017-11-05 04:54:39'),
(23, 'ba', '::1', '2017-11-05 05:10:29'),
(24, 'ba', '::1', '2017-11-05 05:11:18'),
(25, 'adm@gmail.com', '::1', '2017-11-05 05:47:05'),
(26, 'adm@gmail.com', '::1', '2017-11-05 05:51:49'),
(27, 'rusha@ymail.com', '::1', '2017-11-05 06:04:53'),
(28, 'ttt', '::1', '2017-11-05 06:07:38'),
(29, 'adm@gmail.com', '::1', '2017-11-05 06:08:30'),
(30, 'ba', '::1', '2017-11-05 06:08:58'),
(31, 'ttt', '::1', '2017-11-05 06:09:27'),
(32, 'ba', '::1', '2017-11-05 14:22:24'),
(33, 'ttt', '::1', '2017-11-06 14:50:50'),
(34, 'adm@gmail.com', '::1', '2017-11-06 15:59:13'),
(35, 'adm@gmail.com', '::1', '2017-11-06 16:03:36'),
(36, 'adm@gmail.com', '::1', '2017-11-06 16:09:43'),
(37, 'adm@gmail.com', '::1', '2017-11-06 16:17:16'),
(38, 'ttt', '::1', '2017-11-06 16:21:47'),
(39, 'adm@gmail.com', '::1', '2017-11-06 16:24:41'),
(40, 'adm@gmail.com', '::1', '2017-11-09 15:40:03'),
(41, 'ttt', '::1', '2017-11-10 14:07:32'),
(42, 'ba', '::1', '2017-11-10 15:57:59'),
(43, 'adm@gmail.com', '::1', '2017-11-10 15:58:35'),
(44, 'ttt', '::1', '2017-11-10 16:22:47'),
(45, 'adm@gmail.com', '::1', '2017-11-10 16:23:30'),
(46, 'ba', '::1', '2017-11-10 16:43:58'),
(47, 'ba', '::1', '2017-11-10 17:09:51'),
(48, 'ttt', '::1', '2017-11-11 01:36:45'),
(49, 'ba', '::1', '2017-11-11 01:36:56'),
(50, 'adm@gmail.com', '::1', '2017-11-11 01:37:06'),
(51, 'ba', '::1', '2017-11-11 02:31:16'),
(52, 'adm@gmail.com', '::1', '2017-11-11 04:45:10'),
(53, 'ttt', '::1', '2017-11-11 04:52:20'),
(54, 'adm@gmail.com', '::1', '2017-11-11 04:57:46'),
(55, 'ttt', '::1', '2017-11-11 05:20:34'),
(56, 'adm@gmail.com', '::1', '2017-11-11 05:34:53'),
(57, 'ba', '::1', '2017-11-11 05:39:08'),
(58, 'ttt', '::1', '2017-11-11 05:43:48'),
(59, 'ba', '::1', '2017-11-11 11:12:27'),
(60, 'ttt', '::1', '2017-11-11 17:11:43'),
(61, 'ttt', '::1', '2017-11-12 01:52:03'),
(62, 'adm@gmail.com', '::1', '2017-11-12 01:52:37'),
(63, 'adm@gmail.com', '::1', '2017-11-12 01:53:11'),
(64, 'adm@gmail.com', '::1', '2017-11-12 01:53:41'),
(65, 'adm@gmail.com', '::1', '2017-11-12 01:56:32'),
(66, 'adm@gmail.com', '::1', '2017-11-12 02:00:57'),
(67, 'janaka@mail.com', '::1', '2017-11-12 02:01:30'),
(68, 'adm@gmail.com', '::1', '2017-11-12 02:01:42'),
(69, 'adm@gmail.com', '::1', '2017-11-12 02:04:30'),
(70, 'ba@sms.lk', '::1', '2017-11-12 02:04:48'),
(71, 'ba', '::1', '2017-11-12 02:04:59'),
(72, 'ba@sms.lk', '::1', '2017-11-12 02:05:09'),
(73, 'adm@gmail.com', '::1', '2017-11-12 02:09:16'),
(74, 'adm@gmail.com', '::1', '2017-11-12 02:31:00'),
(75, 'adm@gmail.com', '::1', '2017-11-12 02:36:18'),
(76, 'adm@gmail.com', '::1', '2017-11-12 10:36:40'),
(77, 'ttt', '::1', '2017-11-12 15:07:39'),
(78, 'adm@gmail.com', '::1', '2017-11-12 15:09:50'),
(79, 'ttt', '::1', '2017-11-15 15:45:50'),
(80, 'adm@gmail.com', '::1', '2017-11-15 17:04:13'),
(81, 'ttt', '::1', '2017-11-15 17:06:17'),
(82, 'ba@sms.lk', '::1', '2017-11-15 17:06:58'),
(83, 'ttt', '::1', '2017-11-16 13:36:21'),
(84, 'adm@gmail.com', '::1', '2017-11-16 13:52:37'),
(85, 'ttt', '::1', '2017-11-16 14:14:09'),
(86, 'ttt', '::1', '2017-11-17 14:04:28'),
(87, 'ttt', '::1', '2017-11-18 17:21:28'),
(88, 'adm@gmail.com', '::1', '2017-11-18 17:57:16'),
(89, 'adm@gmail.com', '::1', '2017-11-19 02:13:50'),
(90, 'ba', '::1', '2017-11-19 02:23:37'),
(91, 'ttt', '::1', '2017-11-19 02:38:08'),
(92, 'adm@gmail.com', '::1', '2017-11-19 03:02:41'),
(93, 'ttt', '::1', '2017-11-19 03:03:10'),
(94, 'adm@gmail.com', '::1', '2017-11-19 04:12:21'),
(95, 'ba', '::1', '2017-11-19 04:12:28'),
(96, 'ttt', '::1', '2017-11-19 04:13:32'),
(97, 'adm@gmail.com', '::1', '2017-11-19 05:07:39'),
(98, 'ttt', '::1', '2017-11-19 05:10:13'),
(99, 'adm@gmail.com', '::1', '2017-11-19 06:22:49'),
(100, 'ttt', '::1', '2017-11-19 06:25:50'),
(101, 'ba@sms.lk', '::1', '2017-11-19 07:08:01'),
(102, 'adm@gmail.com', '::1', '2017-11-19 07:08:13'),
(103, 'ba@sms.lk', '::1', '2017-11-19 07:15:32'),
(104, 'adm@gmail.com', '::1', '2017-11-19 08:06:44'),
(105, 'ttt', '::1', '2017-11-19 08:07:18'),
(106, 'adm@gmail.com', '::1', '2017-11-19 08:07:34'),
(107, 'ba@sms.lk', '::1', '2017-11-19 08:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `mName` varchar(255) DEFAULT NULL,
  `mDescription` varchar(255) DEFAULT NULL,
  `mPosition` varchar(50) DEFAULT NULL,
  `mView` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `mName`, `mDescription`, `mPosition`, `mView`, `userid`) VALUES
(1, 'P/L Calculator', 'P/L Calculator', 'p_left#1', 'plcalculator', 0),
(2, 'Users', 'Users', 'p_left#1', 'users', 0),
(3, 'Taxes & Charges List', 'Taxes & Charges List', 'p_left#1', 'taxes_charges', 0),
(4, 'User''s Log', 'User''s Log', 'p_left#2', 'user_log', 0),
(5, 'Main Editor Panel', 'Main Editor Panel', 'p_left#3', 'main_editor', 0),
(6, 'Funds Management', 'Funds Management', 'p_left#4', 'funds_management', 0),
(7, 'Module', 'Manage Module', 'p_left#2', 'module', 0),
(9, 'Calendar', 'Calendar', 'p_right', 'calendar', 0),
(10, 'Message', 'Message', 'p_middle', 'messages', 0),
(11, 'Test', 'Test', 'test', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nonvotingshare`
--

CREATE TABLE `nonvotingshare` (
  `nvshareid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordinaryshare`
--

CREATE TABLE `ordinaryshare` (
  `odshareid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issuedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `param`
--

CREATE TABLE `param` (
  `lable` varchar(50) NOT NULL,
  `value` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `param`
--

INSERT INTO `param` (`lable`, `value`) VALUES
('MARGIN_VALUE', '10000000');

-- --------------------------------------------------------

--
-- Table structure for table `preferenceshare`
--

CREATE TABLE `preferenceshare` (
  `pfshareid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `issedqty` int(11) NOT NULL,
  `cdsqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE `prefix` (
  `preid` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`preid`, `prefix`) VALUES
(1, 'Dr.'),
(2, 'Prof.'),
(3, 'Atty.'),
(4, 'Maj.'),
(5, 'Capt.'),
(6, 'Mr.'),
(7, 'Mrs.');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(5) NOT NULL,
  `reminder` varchar(50) DEFAULT NULL,
  `rdate` varchar(25) DEFAULT NULL,
  `rtime` varchar(10) DEFAULT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT 'ACTIVE',
  `userid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `reminder`, `rdate`, `rtime`, `datecreate`, `status`, `userid`) VALUES
(1, 'sdsadd', '2017-11-04', '14:32', '2017-11-04 15:21:00', 'ACTIVE', NULL),
(2, 'sdsaddddd', '2017-11-06', '14:32', '2017-11-04 15:21:51', 'ACTIVE', NULL),
(3, 'This is test', '2017-11-04', '08:07', '2017-11-04 15:34:00', 'ACTIVE', NULL),
(4, 'sample reminder', '2017-11-04', '12:02', '2017-11-04 15:53:04', 'ACTIVE', 3),
(5, 'pay for BIL shares', '2017-11-06', '11.00', '2017-11-05 04:52:23', 'ACTIVE', 3),
(6, 'test', '2017-11-05', '19:55', '2017-11-05 14:23:53', 'ACTIVE', 3),
(7, 'Buy', '2017-11-11', '11:13', '2017-11-11 05:42:27', 'ACTIVE', 3),
(8, 'Payment.', '2017-11-13', '10:30', '2017-11-12 02:05:21', 'ACTIVE', 6),
(9, 'Add new director to JKH', '2017-11-13', '10:00', '2017-11-12 02:05:56', 'ACTIVE', 6),
(10, 'Add new company', '2017-11-21', '08:30', '2017-11-12 02:06:35', 'ACTIVE', 6),
(11, 'Dividend details BIL', '2017-11-13', '08:00', '2017-11-12 02:07:31', 'ACTIVE', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rightshare`
--

CREATE TABLE `rightshare` (
  `rshareid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `announceddate` date NOT NULL,
  `offeredqty` int(10) NOT NULL,
  `exdate` date NOT NULL,
  `renunciationdate` date NOT NULL,
  `comments` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sectorid` int(11) NOT NULL,
  `sec_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sectorid`, `sec_name`) VALUES
(1, 'Bank & Finance and Insurance'),
(2, 'Diversified Holdings'),
(3, 'Hotels and Travels'),
(4, 'Healthcare'),
(5, 'Telecominictions'),
(6, 'Motors'),
(7, 'Information Technology'),
(8, 'Plantations'),
(9, 'Oil Palms'),
(10, 'Trading');

-- --------------------------------------------------------

--
-- Table structure for table `securitiessubtype`
--

CREATE TABLE `securitiessubtype` (
  `subtypeid` int(11) NOT NULL,
  `subtypename` varchar(50) NOT NULL,
  `subtype` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securitiessubtype`
--

INSERT INTO `securitiessubtype` (`subtypeid`, `subtypename`, `subtype`) VALUES
(1, 'Ordinary Shares', 'N'),
(2, 'Non Votting Shares', 'X'),
(3, 'Preference Shares', 'P'),
(4, 'Right Shares', 'R'),
(5, 'Warrant', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `stockbroker`
--

CREATE TABLE `stockbroker` (
  `stockbrokerid` int(11) NOT NULL,
  `adviserfname` varchar(100) NOT NULL,
  `adviserlname` varchar(100) NOT NULL,
  `tel_mob` int(11) NOT NULL,
  `tel_direct` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockbroker`
--

INSERT INTO `stockbroker` (`stockbrokerid`, `adviserfname`, `adviserlname`, `tel_mob`, `tel_direct`, `email`) VALUES
(1, '1.Amila', 'Perera', 1111, 1111, 'amila@lanka.com'),
(2, '2. Shanaka', 'Rathnayake', 22, 222, 'shadfk@ldfl.com'),
(3, '3. Nuwan', 'Pradeep', 33345, 33345, 'shadfk@jgkldfl.com'),
(4, '5. Ruwan', 'Gamage', 33, 34, 'dfjk@dfjl.com'),
(5, 'Rohan', 'Fonseka', 881, 881, 'dfjlkd#ddfk.com'),
(6, 'Rasika', 'Madushan', 715, 11715, 'rasika@gmail.com'),
(7, 'Rasikax', 'Madushan x', 0, 0, 'rasika@gmail.com'),
(8, 'Samatha', 'Fernando', 0, 3344, 'sama@gmailcom');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `date_of_birth`, `mobile`, `address`, `gender`, `added_time`) VALUES
(1, 'Nimesh', 'Perera', '0000-00-00', '678000900', 'Colombo 2', '', '2016-04-30 20:03:16'),
(2, 'Sampath', 'Dushan', '0000-00-00', '09988999', 'Malabe', '', '2016-04-30 20:39:18'),
(3, 'Kasun', 'Dinesh', '0000-00-00', '8734857893', 'Kurunagala', '', '2016-04-30 20:40:52'),
(4, 'Damith', 'Nuwan', '0000-00-00', '0992348', 'Malabe', '', '2016-05-07 16:21:04'),
(5, 'Sampath', 'Anuradha', '0000-00-00', '07889888', '23D Dawi Rd', '', '2016-05-07 16:22:43'),
(6, 'Sampath', 'Perera', '0000-00-00', '078662234', 'Malabe', '', '2016-06-04 18:28:40'),
(7, 'Ruwan', 'Silva', '0000-00-00', '34', 'dfkj', '', '2016-08-03 03:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `summary_bought_sold_funds`
--

CREATE TABLE `summary_bought_sold_funds` (
  `id` int(5) NOT NULL,
  `effectdate` varchar(25) DEFAULT NULL,
  `comid` int(5) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL COMMENT 'Deposit|Buy|Sell',
  `qty` int(5) DEFAULT NULL,
  `trade_price` decimal(10,2) DEFAULT NULL,
  `gross_value` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `tax_value` decimal(10,2) DEFAULT NULL,
  `deposit_withdraw` decimal(10,2) DEFAULT NULL,
  `buy` decimal(10,2) DEFAULT NULL,
  `sell` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `cost_per_share` decimal(10,2) DEFAULT NULL,
  `profit_loss_per_share` varchar(10) DEFAULT NULL,
  `profit_loss_amount` varchar(10) DEFAULT NULL COMMENT 'Profit / (Loss) Amount',
  `profit_loss` varchar(10) DEFAULT NULL COMMENT 'Profit / (Loss) %',
  `holding_period` varchar(10) DEFAULT NULL COMMENT 'Holding Period (as at today)',
  `datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_bought_sold_funds`
--

INSERT INTO `summary_bought_sold_funds` (`id`, `effectdate`, `comid`, `description`, `qty`, `trade_price`, `gross_value`, `tax`, `tax_value`, `deposit_withdraw`, `buy`, `sell`, `balance`, `cost_per_share`, `profit_loss_per_share`, `profit_loss_amount`, `profit_loss`, `holding_period`, `datecreated`, `userid`) VALUES
(1, '2017-10-07', 1, 'BUY', 23, '10.00', '230.00', '1.12', '1.92', NULL, '231.92', NULL, '1197.38', '10.08', NULL, NULL, NULL, NULL, '2017-10-08 06:23:21', 10),
(2, '2017-10-08', 1, 'SELL', 5, '17.00', '85.00', '1.12', '-0.95', NULL, NULL, '84.05', '1281.43', '16.81', '-0.3804', '-1.902', '-2.2129144', NULL, '2017-10-08 07:23:02', 10),
(3, '2017-10-08', 1, 'SELL', 22, '10.00', '220.00', '1.12', '-1.86', NULL, NULL, '218.14', '1415.53', '9.92', '-0.1677964', '-3.6915217', '-1.6640730', NULL, '2017-10-08 07:30:07', 10),
(4, '2017-10-08', 1, 'SELL', 1, '10.00', '10.00', '1.12', '-0.11', NULL, NULL, '9.89', '1425.42', '9.89', '-0.1954782', '-0.1954782', '-1.9385995', NULL, '2017-10-08 07:32:51', 10),
(5, '', 1, 'SELL', 23, '3.00', '69.00', '1.12', '-0.77', NULL, NULL, '68.23', '1493.65', '2.97', '-0.1075130', '-2.4728000', '-3.4975954', NULL, '2017-10-08 07:33:25', 10),
(6, '2017-11-03', 1, 'BUY', 5, '19.00', '95.00', '1.12', '4.97', NULL, '99.97', NULL, '1250.03', '19.99', NULL, NULL, NULL, NULL, '2017-11-03 12:40:21', 10),
(7, '2017-11-03', 1, 'BUY', 12, '13.00', '156.00', '1.12', '3.95', NULL, '159.95', NULL, '1090.08', '13.33', NULL, NULL, NULL, NULL, '2017-11-03 13:04:21', 10),
(8, '2017-11-01', 5, 'BUY', 1000, '10.00', '10000.00', '1.12', '82.54', NULL, '10082.54', NULL, '-8992.46', '10.08', NULL, NULL, NULL, NULL, '2017-11-05 05:08:23', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transid` int(11) NOT NULL,
  `transname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transid`, `transname`) VALUES
(1, 'Brokerage Fee'),
(2, 'CSE Fees'),
(3, 'CDS Fees'),
(4, 'SEC Cess'),
(5, 'STL');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_cost`
--

CREATE TABLE `transaction_cost` (
  `id` int(11) NOT NULL,
  `transid` int(11) NOT NULL,
  `costid` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_cost`
--

INSERT INTO `transaction_cost` (`id`, `transid`, `costid`, `value`) VALUES
(1, 1, 1, 0.64),
(2, 2, 1, 0.84),
(3, 3, 1, 0.024),
(4, 4, 1, 0.072),
(5, 5, 1, 0.3),
(6, 1, 2, 0.2),
(7, 2, 2, 0.0525),
(8, 3, 2, 0.015),
(9, 4, 2, 0.045),
(10, 5, 2, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `reqdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  `approvedate` date DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `fname`, `mname`, `lname`, `mobile`, `password`, `reqdate`, `status`, `approvedate`, `role`) VALUES
(1, 'admin', 'Ruwanx', 'Sangeewa', 'Fernando', '0778878784', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '0000-00-00 00:00:00', 1, '2017-08-31', 'admin'),
(2, 'janaka@mail.com', 'Janaka', 'Sampath', 'Jayaweera', '0714896425', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '0000-00-00 00:00:00', 1, '2017-02-15', 'user'),
(3, 'ba', 'Samanatha', 'Suresh', 'Gunasekara', '0774448962', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '0000-00-00 00:00:00', 1, '2017-02-15', 'business_analyst'),
(4, 'data@sms.lk', 'Kalum', 'Lakmal', 'Perera', '0787877878', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '2017-02-20 08:00:00', 1, '2017-02-27', 'data_entry_operator'),
(5, 'w', 'wwwwwwwww', 'wwwwwwwwwww', 'wwww', '1111111', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '2017-03-02 08:00:00', 0, '2017-03-04', 'user'),
(6, 'ba@sms.lk', 'Prasad', 'Saman', 'Kumara', '213123', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-03-02 08:00:00', 1, '2017-11-12', 'business_analyst'),
(7, 'sagara@gmail.com', 'Sagara', 'Praneeth', 'Jayasundara', '077', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-03-15 07:00:00', 1, '2017-03-16', 'user'),
(8, 'rr', 'f', 'm', 'l', 'm', '516b9783fca517eecbd1d064da2d165310b19759', '2017-08-31 18:40:23', 0, NULL, NULL),
(9, 'adm@gmail.com', 'Administrator', 'Admin', 'Nimda', '0715833470', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-08-31 18:51:46', 1, NULL, 'admin'),
(10, 'ttt', 'Sumendra', 't', 't', '3', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-08-31 18:59:40', 1, '2017-08-31', 'user'),
(11, 'rusha@ymail.com', 'Rush', 'De', 'Kahn', '.4588778878', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-08-31 19:00:06', 1, '2017-11-05', 'user'),
(12, 'nuwan@gmail.com', 'Nuwan', 'Sampath', 'Gunasekara', '0775864523', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2017-11-05 05:51:39', 0, NULL, 'user'),
(13, 'test', 'test', 'test', 'test', '1', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-11-06 16:00:45', 0, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usersharetransaction`
--

CREATE TABLE `usersharetransaction` (
  `usersharetransid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `usershareid` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `shareprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_modules`
--

CREATE TABLE `user_modules` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_modules`
--

INSERT INTO `user_modules` (`id`, `user_id`, `module_id`) VALUES
(2, 2, 1),
(87, 1, 11),
(86, 1, 10),
(85, 1, 9),
(84, 1, 7),
(83, 1, 6),
(82, 1, 5),
(81, 1, 4),
(80, 1, 3),
(79, 1, 2),
(78, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_securities`
--

CREATE TABLE `user_securities` (
  `id` int(5) NOT NULL,
  `effectdate` varchar(20) DEFAULT NULL,
  `cdsaccid` int(5) DEFAULT NULL,
  `comid` int(5) DEFAULT NULL,
  `subtypeid` int(5) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `qty_init` int(5) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `UPTO_1` double DEFAULT NULL,
  `UPTO_2` double DEFAULT NULL,
  `UPTO_3` double DEFAULT NULL,
  `UPTO_4` double DEFAULT NULL,
  `UPTO_5` double DEFAULT NULL,
  `OVER_1` double DEFAULT NULL,
  `OVER_2` double DEFAULT NULL,
  `OVER_3` double DEFAULT NULL,
  `OVER_4` double DEFAULT NULL,
  `OVER_5` double DEFAULT NULL,
  `netamount` decimal(10,2) DEFAULT NULL,
  `userid` int(5) DEFAULT NULL,
  `datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT 'BOUGHT' COMMENT 'BOUGHT|SOLD',
  `lastupdated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_securities`
--

INSERT INTO `user_securities` (`id`, `effectdate`, `cdsaccid`, `comid`, `subtypeid`, `qty`, `qty_init`, `amount`, `total`, `UPTO_1`, `UPTO_2`, `UPTO_3`, `UPTO_4`, `UPTO_5`, `OVER_1`, `OVER_2`, `OVER_3`, `OVER_4`, `OVER_5`, `netamount`, `userid`, `datecreated`, `status`, `lastupdated`) VALUES
(8, '', 7, 2, 1, 0, 5, 12, '60.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '60.67', 10, '2017-09-30 07:04:18', 'SOLD', '2017-10-01'),
(10, '2017-09-15', 7, 1, 1, 0, 5, 1500, '7500.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '7546.45', 10, '2017-10-01 18:51:26', 'SOLD', '2017-10-01'),
(11, '2017-01-01', 7, 1, 1, 0, 5, 18, '90.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '91.01', 10, '2017-10-05 16:11:55', 'SOLD', '2017-10-06'),
(12, '2017-05-23', 7, 1, 1, 0, 5, 17, '85.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '85.95', 10, '2017-10-05 16:34:53', 'SOLD', '2017-10-08'),
(13, '2017-10-07', 7, 1, 1, 10, 10, 200, '2000.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '2012.76', 10, '2017-10-07 15:12:36', 'BOUGHT', NULL),
(14, '2017-10-07', 7, 1, 1, 500, 500, 18, '9000.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '9055.63', 10, '2017-10-08 06:02:34', 'BOUGHT', NULL),
(15, '2017-10-07', 7, 2, 1, 2, 2, 24, '48.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '48.54', 10, '2017-10-08 06:13:05', 'BOUGHT', NULL),
(16, '2017-10-07', 7, 1, 1, 0, 23, 3, '69.00', 0.74, 0.094, 0.034, 0.082, 0.4, 0.3, 0.0625, 0.025, 0.055, 0.4, '70.70', 10, '2017-10-08 06:18:26', 'SOLD', '2017-10-08'),
(17, '2017-10-07', 7, 1, 1, 0, 23, 10, '230.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '231.92', 10, '2017-10-08 06:23:21', 'SOLD', '2017-10-08'),
(18, '2017-11-03', 8, 1, 1, 5, 5, 19, '95.00', 0.74, 0.094, 0.034, 0.082, 0.4, 0.3, 0.0625, 0.025, 0.055, 0.4, '99.97', 10, '2017-11-03 12:40:21', 'BOUGHT', NULL),
(19, '2017-11-03', 8, 1, 5, 12, 12, 13, '156.00', 0.74, 0.094, 0.034, 0.082, 0.4, 0.3, 0.0625, 0.025, 0.055, 0.4, '159.95', 10, '2017-11-03 13:04:21', 'BOUGHT', NULL),
(20, '2017-11-01', 8, 5, 1, 1000, 1000, 10, '10000.00', 0.65, 0.084, 0.024, 0.072, 0.35, 0.3, 0.0525, 0.015, 0.045, 0.35, '10082.54', 10, '2017-11-05 05:08:23', 'BOUGHT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_securities_sold`
--

CREATE TABLE `user_securities_sold` (
  `id` int(5) NOT NULL,
  `secid` int(5) DEFAULT NULL,
  `effectdate` varchar(20) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `UPTO_1` double DEFAULT NULL,
  `UPTO_2` double DEFAULT NULL,
  `UPTO_3` double DEFAULT NULL,
  `UPTO_4` double DEFAULT NULL,
  `UPTO_5` double DEFAULT NULL,
  `OVER_1` double DEFAULT NULL,
  `OVER_2` double DEFAULT NULL,
  `OVER_3` double DEFAULT NULL,
  `OVER_4` double DEFAULT NULL,
  `OVER_5` double DEFAULT NULL,
  `netamount` decimal(10,2) DEFAULT NULL,
  `userid` int(5) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_securities_sold`
--

INSERT INTO `user_securities_sold` (`id`, `secid`, `effectdate`, `qty`, `amount`, `total`, `UPTO_1`, `UPTO_2`, `UPTO_3`, `UPTO_4`, `UPTO_5`, `OVER_1`, `OVER_2`, `OVER_3`, `OVER_4`, `OVER_5`, `netamount`, `userid`, `datecreated`) VALUES
(1, 6, '', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:08:03'),
(2, 6, '2017-09-15', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:24:42'),
(3, 6, '', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:26:21'),
(4, 6, '2017-09-15', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:30:11'),
(5, 6, '2017-09-15', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:31:41'),
(6, 6, '2017-09-15', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:32:55'),
(7, 6, '2017-09-15', 3, 4, '12.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '11.87', 10, '2017-10-01 18:46:39'),
(8, 10, '2017-09-15', 4, 1500, '6000.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '5962.74', 10, '2017-10-01 18:52:32'),
(9, 10, '2017-09-15', 1, 150, '150.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '146.51', 10, '2017-10-01 18:53:44'),
(10, 5, '', 3, 60, '180.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '178.39', 10, '2017-10-01 20:08:00'),
(11, 8, '2017-09-15', 2, 12, '24.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23.35', 10, '2017-10-01 20:12:42'),
(12, 8, '2017-09-15', 3, 12, '36.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '35.60', 10, '2017-10-01 20:16:23'),
(13, 11, '2017-01-09', 5, 18, '90.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '88.99', 10, '2017-10-06 14:04:36'),
(14, 12, '2017-10-08', 5, 17, '85.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '84.05', 10, '2017-10-08 07:23:02'),
(15, 17, '2017-10-08', 22, 10, '220.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '218.14', 10, '2017-10-08 07:30:07'),
(16, 17, '2017-10-08', 1, 10, '10.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '9.89', 10, '2017-10-08 07:32:51'),
(17, 16, '', 23, 3, '69.00', 0.64, 0.084, 0.024, 0.072, 0.3, 0.2, 0.0525, 0.015, 0.045, 0.3, '68.23', 10, '2017-10-08 07:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_share`
--

CREATE TABLE `user_share` (
  `usershareid` int(11) NOT NULL,
  `data` date NOT NULL,
  `userbrokerid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `shareprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_stockbroker`
--

CREATE TABLE `user_stockbroker` (
  `userbrokerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `brokercomid` int(11) NOT NULL,
  `stockbrokerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_stockbroker_details`
--

CREATE TABLE `user_stockbroker_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cdsaccid` int(11) NOT NULL,
  `lable` varchar(100) DEFAULT NULL,
  `value` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warrants`
--

CREATE TABLE `warrants` (
  `warantsid` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `exchangeddate` date NOT NULL,
  `comments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankid`);

--
-- Indexes for table `bankbranch`
--
ALTER TABLE `bankbranch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `bankbranchcode`
--
ALTER TABLE `bankbranchcode`
  ADD PRIMARY KEY (`codeid`);

--
-- Indexes for table `boardofdirectors`
--
ALTER TABLE `boardofdirectors`
  ADD PRIMARY KEY (`boardofdirid`);

--
-- Indexes for table `branchgrade`
--
ALTER TABLE `branchgrade`
  ADD PRIMARY KEY (`gradeid`);

--
-- Indexes for table `brokerbankacc`
--
ALTER TABLE `brokerbankacc`
  ADD PRIMARY KEY (`brobankid`);

--
-- Indexes for table `brokercompany`
--
ALTER TABLE `brokercompany`
  ADD PRIMARY KEY (`brokercomid`);

--
-- Indexes for table `brokercomtype`
--
ALTER TABLE `brokercomtype`
  ADD PRIMARY KEY (`brocomtypeid`);

--
-- Indexes for table `broker_fund`
--
ALTER TABLE `broker_fund`
  ADD PRIMARY KEY (`brokercomid`,`userid`);

--
-- Indexes for table `broker_fund_history`
--
ALTER TABLE `broker_fund_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cal`
--
ALTER TABLE `cal`
  ADD PRIMARY KEY (`calid`);

--
-- Indexes for table `calender_event`
--
ALTER TABLE `calender_event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `cal_history`
--
ALTER TABLE `cal_history`
  ADD PRIMARY KEY (`calid`);

--
-- Indexes for table `cdsaccount`
--
ALTER TABLE `cdsaccount`
  ADD PRIMARY KEY (`cdsaccid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `companysecretary`
--
ALTER TABLE `companysecretary`
  ADD PRIMARY KEY (`secid`);

--
-- Indexes for table `costname`
--
ALTER TABLE `costname`
  ADD PRIMARY KEY (`costid`);

--
-- Indexes for table `debtintreceivable`
--
ALTER TABLE `debtintreceivable`
  ADD PRIMARY KEY (`intrecid`);

--
-- Indexes for table `debtsecurity`
--
ALTER TABLE `debtsecurity`
  ADD PRIMARY KEY (`debtid`);

--
-- Indexes for table `demoadd`
--
ALTER TABLE `demoadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directordesignation`
--
ALTER TABLE `directordesignation`
  ADD PRIMARY KEY (`dirdesigid`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`dirid`);

--
-- Indexes for table `dividend`
--
ALTER TABLE `dividend`
  ADD PRIMARY KEY (`dividendid`);

--
-- Indexes for table `dividentdetails`
--
ALTER TABLE `dividentdetails`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equitysecurity`
--
ALTER TABLE `equitysecurity`
  ADD PRIMARY KEY (`equityid`);

--
-- Indexes for table `financialdetails`
--
ALTER TABLE `financialdetails`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `listedboard`
--
ALTER TABLE `listedboard`
  ADD PRIMARY KEY (`boardid`);

--
-- Indexes for table `log_trace`
--
ALTER TABLE `log_trace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonvotingshare`
--
ALTER TABLE `nonvotingshare`
  ADD PRIMARY KEY (`nvshareid`);

--
-- Indexes for table `ordinaryshare`
--
ALTER TABLE `ordinaryshare`
  ADD PRIMARY KEY (`odshareid`);

--
-- Indexes for table `param`
--
ALTER TABLE `param`
  ADD PRIMARY KEY (`lable`);

--
-- Indexes for table `preferenceshare`
--
ALTER TABLE `preferenceshare`
  ADD PRIMARY KEY (`pfshareid`);

--
-- Indexes for table `prefix`
--
ALTER TABLE `prefix`
  ADD PRIMARY KEY (`preid`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rightshare`
--
ALTER TABLE `rightshare`
  ADD PRIMARY KEY (`rshareid`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sectorid`);

--
-- Indexes for table `securitiessubtype`
--
ALTER TABLE `securitiessubtype`
  ADD PRIMARY KEY (`subtypeid`);

--
-- Indexes for table `stockbroker`
--
ALTER TABLE `stockbroker`
  ADD PRIMARY KEY (`stockbrokerid`),
  ADD KEY `stockbrokerid` (`stockbrokerid`),
  ADD KEY `stockbrokerid_2` (`stockbrokerid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_bought_sold_funds`
--
ALTER TABLE `summary_bought_sold_funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transid`);

--
-- Indexes for table `transaction_cost`
--
ALTER TABLE `transaction_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `usersharetransaction`
--
ALTER TABLE `usersharetransaction`
  ADD PRIMARY KEY (`usersharetransid`);

--
-- Indexes for table `user_modules`
--
ALTER TABLE `user_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_securities`
--
ALTER TABLE `user_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_securities_sold`
--
ALTER TABLE `user_securities_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_share`
--
ALTER TABLE `user_share`
  ADD PRIMARY KEY (`usershareid`);

--
-- Indexes for table `user_stockbroker`
--
ALTER TABLE `user_stockbroker`
  ADD PRIMARY KEY (`userbrokerid`);

--
-- Indexes for table `user_stockbroker_details`
--
ALTER TABLE `user_stockbroker_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warrants`
--
ALTER TABLE `warrants`
  ADD PRIMARY KEY (`warantsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bankid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `bankbranch`
--
ALTER TABLE `bankbranch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;
--
-- AUTO_INCREMENT for table `bankbranchcode`
--
ALTER TABLE `bankbranchcode`
  MODIFY `codeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;
--
-- AUTO_INCREMENT for table `boardofdirectors`
--
ALTER TABLE `boardofdirectors`
  MODIFY `boardofdirid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `branchgrade`
--
ALTER TABLE `branchgrade`
  MODIFY `gradeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `brokerbankacc`
--
ALTER TABLE `brokerbankacc`
  MODIFY `brobankid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brokercompany`
--
ALTER TABLE `brokercompany`
  MODIFY `brokercomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `brokercomtype`
--
ALTER TABLE `brokercomtype`
  MODIFY `brocomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `broker_fund_history`
--
ALTER TABLE `broker_fund_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cal`
--
ALTER TABLE `cal`
  MODIFY `calid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `calender_event`
--
ALTER TABLE `calender_event`
  MODIFY `eventid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cal_history`
--
ALTER TABLE `cal_history`
  MODIFY `calid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cdsaccount`
--
ALTER TABLE `cdsaccount`
  MODIFY `cdsaccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `companysecretary`
--
ALTER TABLE `companysecretary`
  MODIFY `secid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `costname`
--
ALTER TABLE `costname`
  MODIFY `costid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `debtintreceivable`
--
ALTER TABLE `debtintreceivable`
  MODIFY `intrecid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `debtsecurity`
--
ALTER TABLE `debtsecurity`
  MODIFY `debtid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `demoadd`
--
ALTER TABLE `demoadd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `directordesignation`
--
ALTER TABLE `directordesignation`
  MODIFY `dirdesigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `dirid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dividend`
--
ALTER TABLE `dividend`
  MODIFY `dividendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dividentdetails`
--
ALTER TABLE `dividentdetails`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `equitysecurity`
--
ALTER TABLE `equitysecurity`
  MODIFY `equityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `financialdetails`
--
ALTER TABLE `financialdetails`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `listedboard`
--
ALTER TABLE `listedboard`
  MODIFY `boardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `log_trace`
--
ALTER TABLE `log_trace`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nonvotingshare`
--
ALTER TABLE `nonvotingshare`
  MODIFY `nvshareid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordinaryshare`
--
ALTER TABLE `ordinaryshare`
  MODIFY `odshareid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preferenceshare`
--
ALTER TABLE `preferenceshare`
  MODIFY `pfshareid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prefix`
--
ALTER TABLE `prefix`
  MODIFY `preid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rightshare`
--
ALTER TABLE `rightshare`
  MODIFY `rshareid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sectorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `securitiessubtype`
--
ALTER TABLE `securitiessubtype`
  MODIFY `subtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stockbroker`
--
ALTER TABLE `stockbroker`
  MODIFY `stockbrokerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `summary_bought_sold_funds`
--
ALTER TABLE `summary_bought_sold_funds`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaction_cost`
--
ALTER TABLE `transaction_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usersharetransaction`
--
ALTER TABLE `usersharetransaction`
  MODIFY `usersharetransid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_modules`
--
ALTER TABLE `user_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `user_securities`
--
ALTER TABLE `user_securities`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_securities_sold`
--
ALTER TABLE `user_securities_sold`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_share`
--
ALTER TABLE `user_share`
  MODIFY `usershareid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_stockbroker`
--
ALTER TABLE `user_stockbroker`
  MODIFY `userbrokerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_stockbroker_details`
--
ALTER TABLE `user_stockbroker_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `warrants`
--
ALTER TABLE `warrants`
  MODIFY `warantsid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
