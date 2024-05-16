-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2024 pada 11.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasibarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `kodebarang` varchar(50) NOT NULL,
  `namainvenbarang` varchar(50) NOT NULL,
  `nomorregister` varchar(50) NOT NULL,
  `kondisibarang` varchar(25) NOT NULL,
  `merkbarang` varchar(50) NOT NULL,
  `ukuranbarang` varchar(25) NOT NULL,
  `bahanbarang` varchar(25) NOT NULL,
  `tahunperolehanbarang` varchar(25) NOT NULL,
  `asalusulbarang` varchar(25) NOT NULL,
  `hargabarang` varchar(25) NOT NULL,
  `keteranganbarang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `kodebarang`, `namainvenbarang`, `nomorregister`, `kondisibarang`, `merkbarang`, `ukuranbarang`, `bahanbarang`, `tahunperolehanbarang`, `asalusulbarang`, `hargabarang`, `keteranganbarang`) VALUES
(5, '012102', 'handphone', '231313', 'baru', 'canon', '14', 'plastik', '2025', 'baru', '-', '-'),
(6, '012102', 'kamera', '-', 'bekas', '-', '-', '--', '-', '--', '-', '-'),
(7, '012102', 'Kamera', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `idbarang` int(11) NOT NULL,
  `namaelektronik` varchar(25) NOT NULL,
  `merk2` varchar(25) NOT NULL,
  `bahan2` varchar(25) NOT NULL,
  `harga2` varchar(25) NOT NULL,
  `tahunperolehan2` varchar(25) NOT NULL,
  `riwayatperolehan2` varchar(25) NOT NULL,
  `kondisi2` varchar(25) NOT NULL,
  `aspeklegal2` varchar(25) NOT NULL,
  `keterangan2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`idbarang`, `namaelektronik`, `merk2`, `bahan2`, `harga2`, `tahunperolehan2`, `riwayatperolehan2`, `kondisi2`, `aspeklegal2`, `keterangan2`) VALUES
(2, 'Camera Digital', 'Sony Alpha A7C Kit FE 28-', 'Aluminum alloy', '37.740.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(3, 'Lemari Es', 'SANKEN SK-V175A-BB', 'Stainless Steel', '2.990.000', '2022', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(4, 'Coffee Maker', 'Delonghi', 'Plastik', '8.436.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(5, 'Air Purifier', 'Samsung, AX60R', 'Plastik', '3.300.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(6, 'Komputer PC', 'MSI MEG Trident x 12VTE-9', 'Logam dan Plastik', '49.000.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(7, 'Video Conference', 'Logitech Rally Plus', 'Plastik', '50.000.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(8, 'Printer', 'Epson L4260', 'Logam dan Plastik', '4.450.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(9, 'Smartphone', 'Apple, Iphone 14 Pro max ', 'Plastik, timah, tungsten', '38.850.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(10, 'Laptop', 'Axioo, Mybook pro F3 (855', 'Magnesium alloy, plastik', '11.100.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(11, 'Kamera CCTV Outdoor', 'Hikvision DS-2DE2A404IW-D', 'Aluminum alloy, PC, PC+AB', '300.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `furniture`
--

CREATE TABLE `furniture` (
  `idbarang` int(11) NOT NULL,
  `namafurniture` varchar(50) NOT NULL,
  `merk3` varchar(25) NOT NULL,
  `bahan3` varchar(25) NOT NULL,
  `harga3` varchar(25) NOT NULL,
  `tahunperolehan3` varchar(25) NOT NULL,
  `riwayatperolehan3` varchar(25) NOT NULL,
  `kondisi3` varchar(25) NOT NULL,
  `aspeklegal3` varchar(25) NOT NULL,
  `keterangan3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `furniture`
--

INSERT INTO `furniture` (`idbarang`, `namafurniture`, `merk3`, `bahan3`, `harga3`, `tahunperolehan3`, `riwayatperolehan3`, `kondisi3`, `aspeklegal3`, `keterangan3`) VALUES
(2, 'Filing Cabinet Besi', 'KRISBOW', 'Besi', '2.250.000', '2018', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(3, 'Filing Cabinet Kayu', 'NOVIN', 'Kayu', '2.957.040', '2021', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(4, 'Kursi Kerja Pejabat Eselo', 'CREOLE', 'Plywood', '4.413.360', '2018', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(5, 'Kursi Kerja Pejabat Eselo', 'CREOLE', 'Plywood', '4.413.360', '2018', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(6, 'Kursi Kerja Pejabat Eselo', 'CREOLE', 'Plywood', '2.826.200', '2019', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(7, 'Kursi Kerja Pejabat Eselo', 'CREOLE', 'Plywood', '2.826.200', '2019', 'Pembelian', 'Baik', 'Faktur Pembelian', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `idbarang` int(11) NOT NULL,
  `namakendaraan` varchar(25) NOT NULL,
  `merk1` varchar(25) NOT NULL,
  `bahan1` varchar(25) NOT NULL,
  `harga1` varchar(25) NOT NULL,
  `tahunperolehan1` varchar(25) NOT NULL,
  `riwayatperolehan1` varchar(25) NOT NULL,
  `kondisi1` varchar(25) NOT NULL,
  `aspeklegal1` varchar(25) NOT NULL,
  `keterangan1` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`idbarang`, `namakendaraan`, `merk1`, `bahan1`, `harga1`, `tahunperolehan1`, `riwayatperolehan1`, `kondisi1`, `aspeklegal1`, `keterangan1`) VALUES
(2, 'Mobil Hi-Ace', '-', '-', '-', '-', '-', 'Baik', '-', '-'),
(3, 'Minibus', '-', '-', '-', '-', '-', 'Baik', '-', '-'),
(4, 'Ambulans', '-', '-', '-', '-', '-', 'Baik', '-', '-'),
(5, 'Motor', '-', '-', '-', '-', '-', 'Baik', '-', '-'),
(6, 'Sepeda', '-', '-', '-', '-', '-', 'Baik', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatan`
--

CREATE TABLE `peralatan` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `bahan` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `tahunperolehan` varchar(25) NOT NULL,
  `riwayatperolehan` varchar(25) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `aspeklegal` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peralatan`
--

INSERT INTO `peralatan` (`idbarang`, `namabarang`, `merk`, `bahan`, `harga`, `tahunperolehan`, `riwayatperolehan`, `kondisi`, `aspeklegal`, `keterangan`) VALUES
(2, 'Lampu Fotografi', ' Dison D-1080\"', 'Logam, plastik, lampu', '6.900.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(3, 'Kompor Portable ', 'Niko NK268', 'Aluminium alloy', '190.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(4, 'Tripod Microphone Stand', 'Hercules', 'Logam dan Plastik', '1.100.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(5, 'Tangga', 'Apache AP 41803 20 Meter', 'Logam', '2.300.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(6, 'Amplifier Sirine ', 'Whelen Epsilon EPSL1', 'Logam', '7.450.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(7, 'Palang Pintu parkir 8x5x3', '-', 'Plastik', '350.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(8, 'Grill Portable', 'Skitcen/Cast Iron', 'premium cast iron', '320.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(9, 'Panci Gagang Induksi', 'Modena', 'Stainless', '1.200.000', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(10, 'Alat Pemotong Kertas', 'Joyko', 'Logam', '310.000', '2022', 'Pembelian', 'Baik', 'Faktur Pembelian', '-'),
(11, 'Lambang Burung Garuda', '-', 'Logam', '2.197.700', '2023', 'Pembelian', 'Baik', 'Faktur Pembelian', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `idbarang` int(11) NOT NULL,
  `namaruangan` varchar(50) NOT NULL,
  `koderuangan` varchar(25) NOT NULL,
  `namabarangruangan` varchar(25) NOT NULL,
  `spesifikasi` varchar(25) NOT NULL,
  `aspeklegalruangan` varchar(25) NOT NULL,
  `ukuranruangan` varchar(25) NOT NULL,
  `bahanruangan` varchar(25) NOT NULL,
  `tahunperolehanruangan` varchar(25) NOT NULL,
  `jumlahruangan` varchar(25) NOT NULL,
  `hargaperolehanruangan` varchar(25) NOT NULL,
  `kondisiruangan` varchar(25) NOT NULL,
  `penggunabarang` varchar(25) NOT NULL,
  `unitkerja` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`idbarang`, `namaruangan`, `koderuangan`, `namabarangruangan`, `spesifikasi`, `aspeklegalruangan`, `ukuranruangan`, `bahanruangan`, `tahunperolehanruangan`, `jumlahruangan`, `hargaperolehanruangan`, `kondisiruangan`, `penggunabarang`, `unitkerja`) VALUES
(1, '', '', '', '', '1', '', '', '', '', '', '', '', ''),
(2, 'ksjdkajkd', 'dk', 'kdjk', '', 'kdjk', '', '', '', '', '', '', '', ''),
(3, 'kajdkjskjdkjakdj', 'kjdksjkajskd', 'kdjaksjdkajsd', '', 'dkajkjkdsad', '', '', '', '', '', '', '', ''),
(4, 'k', 'jkj', 'kjk', 'jk', 'kj', '', '', '', '', '', '', '', ''),
(5, 'tes', 'test', '', 'test', 'etes', 'tes', 't', 'e', 's', 'tes', 'tes', 'tes', 'tes'),
(6, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `jabatan`, `unit_kerja`, `email`, `password`) VALUES
(1, 'Administrator', 'Admin', 'Unit', 'admin@gmail.com', '123'),
(2, 'admin 2', 'Admin', 'Admin', 'admin2@gmail.com', 'xEYnws6y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `furniture`
--
ALTER TABLE `furniture`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
