-- Kelompok Leak Geprek
-- Dewa Ngakan Made Candra Yogiswara (21004019)
-- I Komang Kartika Wijaya (210040006)
-- Anak Agung Gede Wahyu Prasetya (210040163)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc214_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kodematkul` char(8) NOT NULL,
  `namamatkul` varchar(30) NOT NULL,
  `sks` char(1) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `koderuangan` char(6) NOT NULL,
  `dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kodematkul`, `namamatkul`, `sks`, `hari`, `jam`, `koderuangan`, `dosen`) VALUES
('TI213305', 'Rekayasa Perangkat Lunak', '4', 'Sabtu', '11.20-13.00', 'AB0202', 'Dewa Ngakan Made Candra Yogiswara'),
('TI061202', 'Kecerdasan Buatan', '4', 'Senin', '09.40-11.20', 'RE0612', 'I Komang Kartika Wijaya'),
('TI061203', 'Sistem Operasi', '4', 'Rabu', '08.00-11.20', 'RE0512', 'Anak Agung Gede Wahyu Prasetya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kodematkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
