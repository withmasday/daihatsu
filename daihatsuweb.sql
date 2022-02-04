-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 02.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daihatsuweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_angsuranone`
--

CREATE TABLE `db_angsuranone` (
  `id` int(11) NOT NULL,
  `car_code` varchar(25) NOT NULL,
  `angsuran_percent` int(11) NOT NULL,
  `angsuran_12bulan` int(25) NOT NULL,
  `angsuran_24bulan` int(25) NOT NULL,
  `angsuran_36bulan` int(25) NOT NULL,
  `angsuran_48bulan` int(25) NOT NULL,
  `angsuran_60bulan` int(25) NOT NULL,
  `tdp` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_angsuranone`
--

INSERT INTO `db_angsuranone` (`id`, `car_code`, `angsuran_percent`, `angsuran_12bulan`, `angsuran_24bulan`, `angsuran_36bulan`, `angsuran_48bulan`, `angsuran_60bulan`, `tdp`) VALUES
(6, 'RV31KFJNTW', 15, 9479000, 5182000, 3780000, 3097000, 2717000, 17175000),
(7, 'H1S3VMNEI0', 15, 10386000, 5676000, 4139000, 3390000, 2973000, 19042500),
(8, 'N5TAHVQ9KW', 15, 11259000, 6151000, 4485000, 3673000, 3220000, 20692500),
(9, 'U9GR7DCAZ8', 15, 11842000, 6456000, 4706000, 3853000, 3378000, 21795000),
(10, 'FSVU0DJ7HC', 15, 11997000, 6540000, 4768000, 3903000, 3422000, 22087500),
(11, 'GKNBMWL7V8', 15, 12577000, 6855000, 4997000, 4090000, 3585000, 23182500),
(12, 'DOJR9U0IXW', 15, 12196000, 6648000, 4846000, 3967000, 3478000, 22462500),
(13, 'XME82UI7LR', 15, 13017000, 7094000, 5161000, 4225000, 3703000, 24015000),
(14, '06D97EXPHM', 15, 12755000, 6952000, 5058000, 4140000, 3629000, 23520000),
(15, 'F1TVJO2DWU', 15, 13073000, 7125000, 5183000, 4243000, 3718000, 24120000),
(16, 'R7PV1IQES2', 15, 13775000, 7506000, 5460000, 4469000, 3916000, 25447500),
(17, 'YDTKN2H3RL', 15, 14093000, 7679000, 5585000, 4571000, 4005000, 26047500),
(18, 'B5AHVTM7XY', 15, 10703000, 5849000, 4265000, 3493000, 3063000, 19642500),
(19, 'NE0WZ8STR3', 15, 11545000, 6294000, 4589000, 3757000, 3294000, 21232500),
(20, 'HQI4YT0S28', 15, 12311000, 6710000, 4891000, 4004000, 3510000, 22680000),
(21, '72H0W9TE58', 15, 12747000, 6948000, 5055000, 4138000, 3627000, 23505000),
(22, 'EHWOTZ194B', 15, 13351000, 7276000, 5293000, 4332000, 3797000, 24645000),
(23, 'O0ZBTS4DIY', 15, 13787000, 7513000, 5465000, 4473000, 3919000, 25470000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_angsurantwo`
--

CREATE TABLE `db_angsurantwo` (
  `id` int(11) NOT NULL,
  `car_code` varchar(25) NOT NULL,
  `angsuran_percent` int(11) NOT NULL,
  `angsuran_12bulan` int(25) NOT NULL,
  `angsuran_24bulan` int(25) NOT NULL,
  `angsuran_36bulan` int(25) NOT NULL,
  `angsuran_48bulan` int(25) NOT NULL,
  `angsuran_60bulan` int(25) NOT NULL,
  `tdp` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_angsurantwo`
--

INSERT INTO `db_angsurantwo` (`id`, `car_code`, `angsuran_percent`, `angsuran_12bulan`, `angsuran_24bulan`, `angsuran_36bulan`, `angsuran_48bulan`, `angsuran_60bulan`, `tdp`) VALUES
(6, 'RV31KFJNTW', 20, 8891000, 4831000, 3504000, 2854000, 2491000, 22900000),
(7, 'H1S3VMNEI0', 20, 9734000, 5288000, 3834000, 3123000, 2725000, 25390000),
(8, 'N5TAHVQ9KW', 20, 10551000, 5730000, 4153000, 3382000, 2950000, 27590000),
(9, 'U9GR7DCAZ8', 20, 11097000, 6012000, 4357000, 3548000, 3095000, 29060000),
(10, 'FSVU0DJ7HC', 20, 11242000, 6090000, 4414000, 3594000, 3134000, 29450000),
(11, 'GKNBMWL7V8', 20, 11784000, 6383000, 4626000, 3765000, 3284000, 30910000),
(12, 'DOJR9U0IXW', 20, 11428000, 6191000, 4486000, 3652000, 3186000, 29950000),
(13, 'XME82UI7LR', 20, 12196000, 6606000, 4777000, 3888000, 3391000, 32020000),
(14, '06D97EXPHM', 20, 11951000, 6473000, 4682000, 3811000, 3324000, 31360000),
(15, 'F1TVJO2DWU', 20, 12248000, 6634000, 4797000, 3905000, 3405000, 32160000),
(16, 'R7PV1IQES2', 20, 12905000, 6989000, 5053000, 4113000, 3586000, 33930000),
(17, 'YDTKN2H3RL', 20, 13203000, 7149000, 5169000, 4207000, 3668000, 34730000),
(18, 'B5AHVTM7XY', 20, 10031000, 5448000, 3950000, 3217000, 2807000, 26190000),
(19, 'NE0WZ8STR3', 20, 10819000, 5862000, 4249000, 3459000, 3018000, 28310000),
(20, 'HQI4YT0S28', 20, 11535000, 6249000, 4528000, 3687000, 3215000, 30240000),
(21, '72H0W9TE58', 20, 11944000, 6469000, 4679000, 3809000, 3321000, 31340000),
(22, 'EHWOTZ194B', 20, 12508000, 6774000, 4899000, 3987000, 3477000, 32860000),
(23, 'O0ZBTS4DIY', 20, 12917000, 6995000, 5058000, 4116000, 3589000, 33960000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_artikel`
--

CREATE TABLE `db_artikel` (
  `id` int(11) NOT NULL,
  `artikel_code` varchar(25) NOT NULL,
  `artikel_name` varchar(255) NOT NULL,
  `artikel_value` varchar(2555) NOT NULL,
  `artikel_by` varchar(25) NOT NULL,
  `artikel_date` varchar(25) NOT NULL,
  `artikel_image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_artikel`
--

INSERT INTO `db_artikel` (`id`, `artikel_code`, `artikel_name`, `artikel_value`, `artikel_by`, `artikel_date`, `artikel_image`) VALUES
(1, 'FIRSTARTICLE', 'Daihatsu raih penghargaan Primaniyarta 2018 dari Pemerintah', 'sKabar gembira datang dari PT Astra Daihatsu Motor (ADM) yang berhasil meraih penghargaan pada Trade Expo Indonesia (TEI) ke-33 melalui acara Primaniyarta Export Award 2018 yang diselenggarakan Rabu, 24 Oktober 2018, bertempat di Indonesia Convention Center (ICE), BSD, Tangerang.\r\n\r\nPenghargaan diserahkan langsung oleh pemerintah Republik Indonesia (RI), melalui Menteri Perdagangan, Enggartiasto Lukita; serta Menteri Luar Negeri, Retno Marsudi, dan diterima oleh Presiden Direktur ADM, Tetsuo Miura.\r\n\r\nPada ajang yang diselenggarakan oleh Kementerian Perdagangan ini, Daihatsu terpilih sebagai kategori Extra Ordinary Performance atau \'Eksportir Berkinerja\'. Penghargaan yang diberikan ini merupakan penghargaan tertinggi dari pemerintah Indonesia kepada eksportir yang dinilai paling berprestasi di bidang ekspor.\r\n\r\nMelalui penghargaan ini, Daihatsu dinilai berhasil dalam melakukan kegiatan ekspor selama lima (5) tahun berturut-turut, dengan nilai dan volume ekspor yang selalu meningkat dengan tetap mengutamakan produk ekspor yang memiliki nilai tambah, serta penerapan standar green product yang baik.\r\n\r\nAcara ini diselenggarakan sejak tahun 2014 oleh Kementerian Perdagangan yang dibagi dalam 4 kategori, yakni, kategori eksportir berkinerja, kategori eksportir pembangunan merek global, kategori eksportir potensi unggulan, dan kategori eksportir pelopor pasar baru.\r\n\r\n\"Kami mengucapkan terima kasih atas penghargaan dan kepercayaan pemerintah Indonesia pada Daihatsu. Penghargaan ini merupakan pengakuan dari pemerintah Indonesia terhadap kinerja ekspor Daihatsu dari waktu ke waktu, sehingga semakin memotivasi kami untuk berkontribusi dengan terus mengembangkan produk dan pelayanan yang inovatif dan berkualitas, ujar Tetsuo Miura, Presiden Direktur PT Astra Daihatsu Motor (ADM).', 'yatcode', '2022/02/04', 'news-2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `category_code` varchar(25) NOT NULL,
  `category_image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_category`
--

INSERT INTO `db_category` (`id`, `category_name`, `category_code`, `category_image`) VALUES
(1, 'Daihatsu New Ayla', 'NEWAYLA', 'bgnayla.jpg'),
(2, 'Daihatsu Rocky', 'ROCKY', 'bgrocky.jpg'),
(3, 'Daihatsu New Xenia', 'NEWXENIA', 'bgxenia.jpg'),
(5, 'Daihatsu New Terios', 'NEWTERIOS', 'bgnrios.jpg'),
(6, 'Daihatsu Sigra', 'SIGRA', 'bgsigra.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_mobil`
--

CREATE TABLE `db_mobil` (
  `id` int(11) NOT NULL,
  `car_name` varchar(55) NOT NULL,
  `car_price` int(25) NOT NULL,
  `car_image` varchar(55) NOT NULL,
  `car_type` varchar(55) NOT NULL,
  `car_code` varchar(25) NOT NULL,
  `car_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_mobil`
--

INSERT INTO `db_mobil` (`id`, `car_name`, `car_price`, `car_image`, `car_type`, `car_code`, `car_detail`) VALUES
(21, 'NEW AYLA 1.0 D MT MC', 114500000, 'nayla-01.jpg', 'NEWAYLA', 'RV31KFJNTW', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(22, 'NEW AYLA 1.0 D+ MT MC', 126950000, 'nayla-02.jpg', 'NEWAYLA', 'H1S3VMNEI0', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(23, 'NEW AYLA 1.0 X MT MC', 137950000, 'nayla-03.jpg', 'NEWAYLA', 'N5TAHVQ9KW', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(24, 'NEW AYLA 1.0 X MT DLX MC', 145300000, 'nayla-04.jpg', 'NEWAYLA', 'U9GR7DCAZ8', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(25, 'NEW AYLA 1.0 X AT MC ', 147250000, 'nayla-05.jpg', 'NEWAYLA', 'FSVU0DJ7HC', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(26, 'NEW AYLA 1.0 X AT DLX MC', 154550000, 'nayla-06.jpg', 'NEWAYLA', 'GKNBMWL7V8', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(27, 'NEW AYLA 1.2 X MT MC', 149750000, 'nayla-07.jpg', 'NEWAYLA', 'DOJR9U0IXW', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(28, 'NEW AYLA 1.2 X AT MC', 160100000, 'nayla-01.jpg', 'NEWAYLA', 'XME82UI7LR', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(29, 'NEW AYLA 1.2 R MT MC', 156800000, 'nayla-02.jpg', 'NEWAYLA', '06D97EXPHM', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(30, 'NEW AYLA 1.2 R MT DLX MC', 160800000, 'nayla-03.jpg', 'NEWAYLA', 'F1TVJO2DWU', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(31, 'NEW AYLA 1.2 R AT MC', 169650000, 'nayla-03.jpg', 'NEWAYLA', 'R7PV1IQES2', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(32, 'NEW AYLA 1.2 R AT DLX MC', 173650000, 'nayla-04.jpg', 'NEWAYLA', 'YDTKN2H3RL', 'Dengan #BeraniSerius, Ayla mengusung tema Serius Serunya. Ayla tampil seru dengan desain sporty dan keren. Mengadopsi Grille dan bumper depan Ayla Turbo yang pernah dipamerkan pada GIIAS 2019 lalu, tampilan Ayla baru semakin modern dan sporty. Ditambah la'),
(33, 'SIGRA 1.0 D MT MC', 130950000, 'nsigra-01.jpg', 'SIGRA', 'B5AHVTM7XY', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si'),
(34, 'SIGRA 1.0 M MT MC', 141550000, 'nsigra-02.jpg', 'SIGRA', 'NE0WZ8STR3', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si'),
(35, 'SIGRA 1.2 X MT MC', 151200000, 'nsigra-05.jpg', 'SIGRA', 'HQI4YT0S28', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si'),
(36, 'SIGRA 1.2 X MT DLX MC', 156700000, 'nsigra-06.jpg', 'SIGRA', '72H0W9TE58', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si'),
(37, 'SIGRA 1.2 X AT MC', 164, 'nsigra-05.jpg', 'SIGRA', 'EHWOTZ194B', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si'),
(38, 'SIGRA 1.2 X AT DLX MC', 169800000, 'nsigra-06.jpg', 'NEWTERIOS', 'O0ZBTS4DIY', 'Design eksterior yang stylish dan elegan, menjadikan New Astra Daihatsu Sigra menjadi MPV 7-seater yang lebih berkelas untuk melengkapi gaya berkendara masa kini\r\n\r\nDaihatsu Sigra terbaru hadir dengan 10 varian dengan opsi pilihan warna baru Glittering Si');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) NOT NULL,
  `car_code` varchar(25) NOT NULL,
  `car_name` varchar(35) NOT NULL,
  `car_image` varchar(55) NOT NULL,
  `u_code` varchar(25) NOT NULL,
  `u_name` varchar(55) NOT NULL,
  `u_telp` varchar(25) NOT NULL,
  `u_whatsapp` varchar(25) NOT NULL,
  `u_alamat` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `pembayaran` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_users`
--

CREATE TABLE `db_users` (
  `id` int(11) NOT NULL,
  `u_code` varchar(25) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_username` varchar(25) NOT NULL,
  `u_password` varchar(55) NOT NULL,
  `u_telp` varchar(25) NOT NULL,
  `u_whatsapp` varchar(25) NOT NULL,
  `u_alamat` varchar(255) NOT NULL,
  `u_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_users`
--

INSERT INTO `db_users` (`id`, `u_code`, `u_name`, `u_username`, `u_password`, `u_telp`, `u_whatsapp`, `u_alamat`, `u_level`) VALUES
(8, 'TXMABRD94Q', 'Muhammad Hidayatz', 'yatcode', 'b8250e3a9726abd58bf57ac3955d9bd4', '081293534876', '081293534876', 'jln. mandor muhi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_angsuranone`
--
ALTER TABLE `db_angsuranone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_angsurantwo`
--
ALTER TABLE `db_angsurantwo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_artikel`
--
ALTER TABLE `db_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_mobil`
--
ALTER TABLE `db_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_angsuranone`
--
ALTER TABLE `db_angsuranone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `db_angsurantwo`
--
ALTER TABLE `db_angsurantwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `db_artikel`
--
ALTER TABLE `db_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `db_mobil`
--
ALTER TABLE `db_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `db_order`
--
ALTER TABLE `db_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
