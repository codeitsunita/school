-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 10:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Fullname` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Usertype` varchar(10) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Fullname`, `Username`, `Password`, `Address`, `Mobile`, `Faculty`, `Semester`, `Usertype`, `Image`) VALUES
('Binita ', 'binita', '123', '', '', 'BA', '', 'teacher', ''),
('muna', 'muna12', '234', 'dharan-2', '9878648796', 'BCA', 'second', 'teacher', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607080706090807080a0a090b0d160f0d0c0c0d1b14151016201d2222201d1f1f2428342c242631271f1f2d3d2d3135373a3a3a232b3f443f384334393a37010a0a0a0d0c0d1a0f0f1a37251f253737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737ffc00011080079007003011100021101031101ffc4001c0000030101010101010000000000000000000203010604050708ffc4003b10000201020305050408050500000000000102000304051112213141516106132271813252539114237292a1b1c1d107242562f015334382f1ffc400190101010101010100000000000000000000000103020405ffc4002b11010002020102040505010100000000000001020311211231044151811322617191a1b1c1d1f01432ffda000c03010002110311003f00fd0d5268cd654853849038580c1606e88069806980688185602958085202324a22c908f42a42aaab2070b0a60b068c160d1b4c034c034c034c052b014ac052b0119611274945d5640eab0694558538580da241ba606e9806981856066980a56508cb026560232c22a1614eab20a2ac070b0a60b1b0395452cdb00df24cea162373a869196f8da168b0ab469d40320ea187a8ce4adb71b757af4da6be814abe6576804ae7d46f9627693598eedd32ed0a560232c226cb010aca28a2414558140b0a6ca40973de2d066a2baaa2f882fbd970f5dd38bee2bbabbc7d33688b762fd562162ddd3e74eb532030e19ecf98e539dd72d389e25dfcd832f31cc0b3a86e2d74d75d358782aaf26e39743bc79cb8e66d5d5bbf9996b18efbaf6ef05c356a261d452a0fada49a1bab2ecfc72930c4c62889ef11afc2f88d4e6b4c7699dfe792e1ecb4708a156b1d2ab4454763c366649fc6738a7a70c5ade9b95cf59b67b56beba8fda14b3352ad015ab02ad53c413dc1c079f3eb3bc736b57aade6e32c56b6e9af97eaae433cb3da269b64565944d961136102aa2051440a0122b1e9ad5a650fb2c378397a8324c6e34eab69acee1e6a352e68b8a37549aaa6e5b8a637fda5e07cb6794cab37aceafcfd7fb6d7ae3b4755275f49fe27cff7796f6f28d8de3d1b0a0d5efab789a853392fda6e03f59964c95c76d523769f2fe65b62c36cd4eacb6d523ce7f68f54c61f8d5df8eef124b607fe3b64ddff006dff009ce7e1788bf36bebecefe3784c7c531f57d67fa6ff00a36274b6db6375cb0e1590383f331ff3e68ffce4fc9ff5787b717c31edc2756f2e28523658ed04a746af805cd1ff006c8e47ddce2725a23a334713e71d9d570d2d3f13c34ee639d4f7f6f57d3be7aac69d0b53a6a55cf3a9967dda0de7cf6803cfa4df24da755af9bc786b48ddefda3cbd67fddd5a5469dbd3d099851bc939927993c4f59a56b158d432bde6f3b936c2331b4749d39230951361019440aa89154020796ada575a86a59dc7744efa6ebad0f5cb3047a1f498da96dee93afd61bd72d663592bbfaf69ff007dd9795ee2d6c599969d4b9621292a660339390f4e7d338bdad5a6fcd71e3a64c9aed5ef3f6f3ff7a9b0bc392c289199a95ea1d55ab36fa8dc4f972118b14638facf7933e79cd6f488ed1e90f6e53560328095a8d3ad49a9d5457461932b0cc1124c44c6a56b3359dc777cec3a9bd8d4a962e59e9a2ebb663b4e8e2be87f022638e2693d1f8fb7a7b3d19e632c4658efe7f7f5f7529593d77eff00103adf3cd28e7e0a43cb89ea7d329631cda7aaff008f24b658ac74e2e3ebe73fd47d3f2f615c86c9bbcc9b0812612a05302858aa31552cc01214713ca49e0470dc4ed711a5de5ad4d597b6876321e447099d3256f1c2bda1a76a955a62a5c51623314f53fae597e44ce663730eeb6d56d1eabe73a7033806700ce04aaa6aab4aa0de84ede846efcbe524c6e625d45b5131ea72d2b978b12c4ed70ea5de5d54d39fb0836b39e40719c5f25691ca2a1cb22b32e962012a781e5348e6108c6508a60554c0e57b47845cda5d1c5b092e8ded555a7bd4fbc07107889e0cf86d5b7c4a24c39ebac631bb93dee1d8d55b3b9f87534b51a9e4581d07e6bf667a3c2f8ec53f2e6afbb2bc5e79aca36bfc45ed061775f46c6eca8d62bed29534aa79e633523d323ce7d2b60c768dd25c572de38b3bdece76af0bed02e56754a5c019b5bd51a5c797023ca79af8ed4eef456f16ecfbb9ccdd8ce07c2ed1f6af0becfae57954bdc119adbd21a9cfe8079cd298ed7ece2d78af770375fc45ed062975f46c12ca8d12d9e950a6ad4f3cce4a07a7acf4d7063ac6ef2f3db2de78aaf698be376c7bdc471aab7973c29d3d2b469f9950359f92fda9f37c578ec51f2e1afbbba45e39bcba1ece611737574316c58bbb7b5496a6f63ef11c00e0279f061b5adf12ed621d5319ef5498c09a98155680ead03e2e2bd99b1bf2d5297f2d58ed2c83c27cd7f69e6c9e1a97e638261cf5f765b10ee7e8f5ede95fdb0f642d4d2c9d549da0fcc7306678e3c4609f97987335db91c5bb338ae0dfd42c92ebb9a2750abdd94ab43ab74fee198e796e9f5b067ae58d5a35f496192931cc3f44ec176b07686c9a8dd155c42dc0ef00d82a2fbe3f51fbce33e1f873b8ecd30e5eb8d4f71dbded60ecf592d0b42ad88dc03dd83b4525f7cfe83f68c187e24ee7b19b2f446a3bbf3bc27b338ae33fd42f52ebb9ac751abdd97ab5faaf4fee390e59ee9de7cd5c51a88dcfa433c7499e65d758f65b10ee7e8f6f6f4ac2d8e5a8354d4cfd588da4f4d839013e4e48f119e7e6e21bc574e870aeccd8d815a957f99acbb4338f08f25fde698fc3569ccf32eb4fb4cd3d2119a0498c09ab4a1c3c81c548077bd61586b81c63411ae80e31a1cdd6ecfd951c6e8633849165768f9d5441f57594fb40af024711c76e466d19a7a2696e618ce18ea8bd7896d1ecfd956c6ebe338b117b76ef9d2471f574547b202f120713c768022734f4745788230c7575db997482e81e331d3630af9c68377b9c0c3521085a02334092b4a86060d9b39141808c84c093512615236a4f3840b6a4738555689102caa442186c9419c830995364668105794555a40e1a0830685d98181b98806c901b2019894613014b41b29684923340933ca3ceaf08b2bf5853871ce40e187381a1ba880c1fac0dd6201ac40cd7d44052dd440c2c39c042e2508cfd60459e11fcd760b6d592a1bbbeab4197d9c8120ffe647e62752ededa16b851b9a6b5f15b81498e4da4ed5f09e3cb303cf3d927b0bb59605e3298fd76f0b14428c0e7b748272e3901d37ee8e7d073ed59cb12af502e7b01724813ad403bda9f11fef18d403bda9f11fef193500ef6a7c47fbe63500ef6a7c47fbe63500ef6a7c47fbc63500ef6a7c47fbc65d40f6252a2c8ac716552573656a757353cb60c8fce4f61ad4280202e334d86acb3d1586439eef2d9d63d8325b5a919be36abd051a8787f9f28f611ba4a54a9a35be25f4962726414dd348e7b77cbc0f11e1003ecca378ff9ce404208040201008040215a60077fa400ee81ffd9),
('Sita', 'sita12', '123', 'Dharan', '9812323572', 'BCA', '', 'teacher', 0x626f6f6b2e706e67),
('sunita rajbhandari', 'sunita', 'asd', 'dharan-2', '9878648739', 'BA', 'first', 'student', '');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentpublish`
--

CREATE TABLE `assignmentpublish` (
  `id` bigint(20) NOT NULL,
  `Date` date NOT NULL,
  `Deadline` date NOT NULL,
  `SubjectCode` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Assignment` blob NOT NULL,
  `Remarks` text NOT NULL,
  `Teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmentpublish`
--

INSERT INTO `assignmentpublish` (`id`, `Date`, `Deadline`, `SubjectCode`, `Faculty`, `Semester`, `Assignment`, `Remarks`, `Teacher`) VALUES
(12, '2019-08-29', '2019-08-31', 'CS01', 'BA', 'second', 0x5363616e6e657273202e706466, '', 'binita');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentreceive`
--

CREATE TABLE `assignmentreceive` (
  `Id` bigint(20) NOT NULL,
  `Date` date NOT NULL,
  `SubjectCode` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Student` varchar(20) NOT NULL,
  `Assignment` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmentreceive`
--

INSERT INTO `assignmentreceive` (`Id`, `Date`, `SubjectCode`, `Faculty`, `Student`, `Assignment`) VALUES
(2, '2019-08-30', 'CS01', 'BA', 'sunita', 0x5363616e6e657273202e706466),
(6, '2019-08-10', 'CS01', 'BA', 'sunita', 0x326e642d73656d2e706466);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` bigint(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Image` blob NOT NULL,
  `Remarks` text NOT NULL,
  `Postby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Subject`, `Date`, `Image`, `Remarks`, `Postby`) VALUES
(3, 'holiday', '0000-00-00', 0x6162632e6a706567, 'this is lorem epas', 'binita'),
(4, 'holiday', '0000-00-00', 0x6162632e6a706567, 'hello', 'binita'),
(5, 'holiday', '0000-00-00', 0x6162632e6a706567, 'this is lorem epas', 'binita'),
(6, 'holiday', '0000-00-00', 0x6162632e6a706567, 'this is lorem epas', 'binita'),
(7, 'holiday', '0000-00-00', 0x6162632e6a706567, 'this is lorem epas', 'binita'),
(8, 'holiday', '0000-00-00', 0x6162632e6a706567, 'this is lorem epas', 'binita');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `Faculty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Faculty`) VALUES
(1, 'BA'),
(0, 'BCA'),
(2, 'BCT');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Id` bigint(20) NOT NULL,
  `SubjectCode` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Notes` blob NOT NULL,
  `Teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Id`, `SubjectCode`, `Faculty`, `Semester`, `Notes`, `Teacher`) VALUES
(44, 'CS01', 'BA', 'Second', 0x326e642d73656d2e706466, 'binita');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` bigint(20) NOT NULL,
  `Date` date NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Remarks` text NOT NULL,
  `Notice` blob NOT NULL,
  `Postby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `Date`, `Subject`, `Remarks`, `Notice`, `Postby`) VALUES
(1, '2019-08-30', 'holiday', 'this is lorem epas', 0x326e642d73656d2e706466, 'binita'),
(2, '2019-08-07', 'holiday', 'this is lorem epas', 0x326e642d73656d2e706466, 'binita'),
(3, '2019-08-06', 'holiday', 'this is lorem epas', 0x326e642d73656d2e706466, 'binita'),
(4, '2019-08-13', 'holiday', 'this is lorem epas', 0x326e642d73656d2e706466, 'binita'),
(5, '2019-09-06', 'holiday', 'this is lorem epas', 0x326e642d73656d2e706466, 'binita');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Code` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Faculty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Code`, `Name`, `Faculty`) VALUES
('CS01', 'Computer graphics', 'BA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `assignmentpublish`
--
ALTER TABLE `assignmentpublish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignmentpublish_fk0` (`SubjectCode`),
  ADD KEY `assignmentpublish_fk1` (`Faculty`),
  ADD KEY `assignmentpublish_fk2` (`Teacher`);

--
-- Indexes for table `assignmentreceive`
--
ALTER TABLE `assignmentreceive`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `assignmentreceive_fk0` (`SubjectCode`),
  ADD KEY `assignmentreceive_fk1` (`Faculty`),
  ADD KEY `assignmentreceive_fk2` (`Student`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Events_fk0` (`Postby`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Faculty`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `notes_fk0` (`SubjectCode`),
  ADD KEY `notes_fk1` (`Faculty`),
  ADD KEY `notes_fk2` (`Teacher`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `notice_fk0` (`Postby`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignmentpublish`
--
ALTER TABLE `assignmentpublish`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assignmentreceive`
--
ALTER TABLE `assignmentreceive`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignmentpublish`
--
ALTER TABLE `assignmentpublish`
  ADD CONSTRAINT `assignmentpublish_fk0` FOREIGN KEY (`SubjectCode`) REFERENCES `subject` (`Code`),
  ADD CONSTRAINT `assignmentpublish_fk1` FOREIGN KEY (`Faculty`) REFERENCES `faculty` (`Faculty`),
  ADD CONSTRAINT `assignmentpublish_fk2` FOREIGN KEY (`Teacher`) REFERENCES `account` (`Username`);

--
-- Constraints for table `assignmentreceive`
--
ALTER TABLE `assignmentreceive`
  ADD CONSTRAINT `assignmentreceive_fk0` FOREIGN KEY (`SubjectCode`) REFERENCES `subject` (`Code`),
  ADD CONSTRAINT `assignmentreceive_fk1` FOREIGN KEY (`Faculty`) REFERENCES `faculty` (`Faculty`),
  ADD CONSTRAINT `assignmentreceive_fk2` FOREIGN KEY (`Student`) REFERENCES `account` (`Username`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `Events_fk0` FOREIGN KEY (`Postby`) REFERENCES `account` (`Username`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_fk0` FOREIGN KEY (`SubjectCode`) REFERENCES `subject` (`Code`),
  ADD CONSTRAINT `notes_fk1` FOREIGN KEY (`Faculty`) REFERENCES `faculty` (`Faculty`),
  ADD CONSTRAINT `notes_fk2` FOREIGN KEY (`Teacher`) REFERENCES `account` (`Username`);

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_fk0` FOREIGN KEY (`Postby`) REFERENCES `account` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
