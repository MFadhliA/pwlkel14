-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2016 pada 12.04
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE IF NOT EXISTS `angkatan` (
`no` int(11) NOT NULL,
  `thn_ajaran` char(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`no`, `thn_ajaran`) VALUES
(1, '2010/2011'),
(2, '2011/2012'),
(3, '2012/2013'),
(4, '2013/2014'),
(5, '2011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`kdBuku` int(5) NOT NULL,
  `kdKategori` char(3) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `kdPengarang` char(5) NOT NULL,
  `kdPenerbit` char(4) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `jmlStok` int(2) NOT NULL,
  `Tempat` char(6) NOT NULL,
  `preview` text,
  `jmldiPinjam` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kdBuku`, `kdKategori`, `Judul`, `kdPengarang`, `kdPenerbit`, `gambar`, `jmlStok`, `Tempat`, `preview`, `jmldiPinjam`) VALUES
(2, '1', 'Trick & Tips ipad dan iphone', 'PG002', 'PN02', 'buku/2.jpg', 24, 'R01.02', 'pemrograman IOS', 0),
(3, '1', 'Tips Coding Interfacing', 'PG001', 'PN01', 'buku/3.jpg', 1, 'R01.02', 'Visual Basic', 0),
(4, '1', 'Javascript & Jquery', 'PG002', 'PN02', 'buku/5.jpg', 2, 'R01.03', 'Belajar JQUERY dengan Mudah', 0),
(5, '1', 'Hot Tip Trick PHP', 'PG002', 'PN02', 'buku/bg.jpg', 2, 'R01.01', 'Cara Mudah Belajar PHP', 0),
(8, '4', 'saaaaaaaaaaaa', 'PG002', 'PN02', 'buku/5.jpg', 2, 'asas', 'asdsa', 0),
(10, '1', 'fgdfg', 'PG001', 'PN01', 'buku/2.jpg', 43, 'fsdfsd', 'dg', 0),
(100, '1', 'Tutorial Dreamweaver', 'PG001', 'PN01', 'buku/1.jpg', 80, 'R01.02', 'Buku yang membahas tentang pemrograman berbasis web', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` char(3) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `ket`) VALUES
('RPL', 'Rekayasa Perangkat L', NULL),
('TAV', 'Teknik Audio Video', NULL),
('TKR', 'Teknik Kendaraan Rin', NULL),
('TPM', 'Teknik Pemesinan', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku`
--

CREATE TABLE IF NOT EXISTS `kategoribuku` (
  `kdKategori` char(3) NOT NULL,
  `namaKategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoribuku`
--

INSERT INTO `kategoribuku` (`kdKategori`, `namaKategori`) VALUES
('1', 'TIK'),
('2', 'Mesin'),
('3', 'Otomotif'),
('4', 'Elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` char(3) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `id_jurusan` char(3) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `ket`) VALUES
('K01', 'RPL1', 'RPL', 'ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE IF NOT EXISTS `kembali` (
`noKembali` int(5) NOT NULL,
  `nis` char(5) NOT NULL,
  `kdBuku` char(5) NOT NULL,
  `tglKembali` date NOT NULL,
  `noPinjam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `kdPenerbit` char(4) NOT NULL,
  `namaPenerbit` varchar(30) NOT NULL,
  `alamatPenerbit` text NOT NULL,
  `noHP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`kdPenerbit`, `namaPenerbit`, `alamatPenerbit`, `noHP`) VALUES
('PN01', 'Andi', 'Jalan Menthok raya kilometer kemruyuk Yogyakarta', '+62856358975411'),
('PN02', 'Technocomp', 'Jalan Kasongan Kajen RT02 Bangunjiwo Kasihan Bantul Yogyakarta 55184', '+622746461618'),
('PN03', 'Rohim Mustofa', 'Sindet', '085743922195');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
  `idPengarang` char(5) NOT NULL,
  `namaPengarang` varchar(30) NOT NULL,
  `alamatPengarang` text,
  `noHp` varchar(25) DEFAULT NULL,
  `biografi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`idPengarang`, `namaPengarang`, `alamatPengarang`, `noHp`, `biografi`) VALUES
('PG001', 'Imam Adi Nata, M.Kom', 'Kajen RT02 Bangunjiwo Kasihan Bantul Yogyakarta 55184', '+6285643331101', 'Imam Adi Nata Lahir di Bantul tanggal 06 Januari 1988 telah menyelesaikan kuliah S2 nya di Magister Teknik Informatika STMIK Amikom Yogyakarta pada bulan januari tahun 2015 dan sekarang aktif sebagai dosen Rekayasa Perangkat Lunak di UNY'),
('PG002', 'Rochmat Husaini, M.Kom', 'Kasongan RT04 Bangunjiwo Kasihan Bantul Yogyakarta 55184', '+6285628245654', 'Menyelesaikan S1 Sistem Informasi dan S2 TI di STMIK AMIKOM Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
`noKembali` int(5) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `kdBuku` varchar(5) NOT NULL,
  `tglKembali` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`noKembali`, `nis`, `kdBuku`, `tglKembali`) VALUES
(2, '12345', '2', '2014-02-25'),
(3, '12345', '2', '2014-02-25'),
(4, '12345', '2', '2016-12-08'),
(5, '12345', '2', '2016-12-16');

--
-- Trigger `pengembalian`
--
DELIMITER //
CREATE TRIGGER `tg_kembali` AFTER INSERT ON `pengembalian`
 FOR EACH ROW update buku set jmldiPinjam = jmldiPinjam - 1, jmlStok = jmlStok + 1 where kdBuku = new.kdBuku
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE IF NOT EXISTS `pinjam` (
`noPinjam` int(5) NOT NULL,
  `nis` char(5) NOT NULL,
  `kdBuku` char(5) NOT NULL,
  `tglPinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Trigger `pinjam`
--
DELIMITER //
CREATE TRIGGER `tg_pinjam` AFTER INSERT ON `pinjam`
 FOR EACH ROW update buku set jmldiPinjam = jmldiPinjam + 1, jmlStok = jmlStok - 1 where kdBuku = new.kdBuku
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`kdSiswa` int(5) NOT NULL,
  `nis` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_kelas` char(3) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`kdSiswa`, `nis`, `nama`, `id_kelas`, `angkatan`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(1, '12345', 'Devi Yulianti', 'K01', 1, 'P', 'Kasongan', '+628564696857', 'deviyuli@adinataimam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`no_pinjam` int(11) NOT NULL,
  `petugas` char(3) NOT NULL,
  `nis` char(5) NOT NULL,
  `buku` char(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jam_pinjam` time NOT NULL,
  `max_tgl_kembali` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` char(3) NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `userName`, `password`, `level`) VALUES
('R96', 'admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kdBuku`), ADD KEY `kategori` (`kdKategori`), ADD KEY `pengarang` (`kdPengarang`), ADD KEY `penerbit` (`kdPenerbit`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
 ADD PRIMARY KEY (`kdKategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`), ADD KEY `jurusan` (`id_jurusan`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
 ADD PRIMARY KEY (`noKembali`), ADD KEY `noPinjam` (`noPinjam`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`kdPenerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
 ADD PRIMARY KEY (`idPengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
 ADD PRIMARY KEY (`noKembali`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
 ADD PRIMARY KEY (`noPinjam`), ADD UNIQUE KEY `kdBuku` (`kdBuku`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`), ADD UNIQUE KEY `kdSiswa` (`kdSiswa`), ADD KEY `angkatan` (`angkatan`), ADD KEY `kelas` (`id_kelas`), ADD KEY `kdSiswa_2` (`kdSiswa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`no_pinjam`,`nis`,`buku`,`tgl_pinjam`), ADD KEY `petugas` (`petugas`), ADD KEY `siswa` (`nis`), ADD KEY `buku` (`buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `kdBuku` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
MODIFY `noKembali` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
MODIFY `noKembali` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
MODIFY `noPinjam` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `kdSiswa` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `no_pinjam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
ADD CONSTRAINT `kategori` FOREIGN KEY (`kdKategori`) REFERENCES `kategoribuku` (`kdKategori`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penerbit` FOREIGN KEY (`kdPenerbit`) REFERENCES `penerbit` (`kdPenerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengarang` FOREIGN KEY (`kdPengarang`) REFERENCES `pengarang` (`idPengarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `kembali`
--
ALTER TABLE `kembali`
ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`noPinjam`) REFERENCES `pinjam` (`noPinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `angkatan` FOREIGN KEY (`angkatan`) REFERENCES `angkatan` (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `petugas` FOREIGN KEY (`petugas`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `siswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
