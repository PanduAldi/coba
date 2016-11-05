-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 19 Jan 2016 pada 01.55
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_artikel`
--

CREATE TABLE IF NOT EXISTS `t_artikel` (
  `id_artikel` int(4) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(4) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `artikel` longtext NOT NULL,
  `waktu` datetime NOT NULL,
  `penulis` varchar(60) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `sticky` enum('y','n') NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `id_kategori`, `judul`, `artikel`, `waktu`, `penulis`, `gambar`, `status`, `sticky`) VALUES
(23, 41, 'Cara Mengetahui Siapa Saja Yang Membaca Pesan di Group Whatsapp', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2016-01-18 15:14:09', 'admin', '1379580_576095932449464_1439678876_n.jpg', 'publish', 'n'),
(24, 43, '  Infinix gandeng Haier rakit ponsel di Indonesia', '<p>Pemerintah akan menerapkan aturan Tingkat Komponen Dalam Negeri (TKDN) untuk smartphone 4G pada 2017. Rencana ini membuat vendor smartphone mau tak mau harus mengikuti aturan tersebut.</p>\n<p>Beberapa vendor di antaranya juga telah siap menyambut aturan tersebut, salah satunya Infinix. Kabar itu pun dibenarkan oleh Marcia Sun, Country Manager Infinix Mobility Indonesia.</p>\n<p>Kata Marcia, Infinix telah melakukan kerja sama dengan PT Haier Electrical Appliances Indonesia untuk melakukan perakitan. Sebelumnya, diskusi kerja sama ini telah dilakukan sejak tahun 2015 lalu, sementara ''deal'' proyek itu baru saja sepakat dan melakukan MoU Januari ini.</p>\n<p>Lebih lanjut, Marcia mengatakan, ditunjuknya PT Haier Electrical Appliances Indonesia lantaran memiliki reputasi baik baik di Indonesia maupun China.</p>\n<p>"Maka dari itu, kami mempercayakan urusan perakitan pada Haier," tutur di sela-sela pembukaan Infinix House di Roxy Mas, <strong><a href="http://www.merdeka.com/tag/j/jakarta/">Jakarta</a></strong> Barat, Senin (18/1).</p>\n<p>Sebagaimana diketahui, kedua belah pihak yakni Infinix dan PT Haier Electrical Appliances Indonesia, menargetkan ponselnya bisa memenuhi TKDN 20 persen di tahun 2016, sebelum akhirnya naik menjadi 30 persen di tahun 2017. Untuk bisa mencapai itu, pihak Haier mengatakan akan melakukan localize komponen.</p>\n<p>Sementara itu, menurut Sales Departement Manager PT Haier Electrical Appliances Indonesia, Isven Dodie, pihaknya akan merakit ponsel Infinix dengan kapasitas 150 ribu setiap bulannya.</p>\n<p>"Untuk tahun 2016 menyiapkan komponen dan packaging-nya," tutur Isvan.</p>', '2016-01-18 17:23:00', 'admin', 'infinix-gandeng-haier-rakit-ponsel-di-indonesia.jpg', 'publish', 'n'),
(25, 43, 'Sah, game smartphone pertama Nintendo rilis Maret', '<p>Bukan Pokemon atau Zelda, tetapi game pertama Nintendo untuk perangkat mobile adalah Miitomo. Pasca diumumkan bulan Oktober lalu, kini jadwal rilis Miitomo sudah terungkap.</p>\n<p>Menurut Tatsumi Kimishima, presiden Nintendo, pihaknya akan meluncurkan Miitomo di toko-toko aplikasi online di bulan Maret. Pengumuman itu disampaikan oleh Kimishima di koran Jepang, Mainichi Shimbu.</p>\n<p>Miitomo sendiri adalah awal dari kiprah Nintendo di dunia game mobile. Sebab, targetnya Nintendo diharapkan sudah punya 5 game mobile hingga Maret 2017. Khusus untuk Miitomo, kemungkinan besar game ini gratis, mengingat tidak ada info soal harga dari Nintendo.</p>\n<p>Menurut Nintendo, Miitomo adalah aplikasi yang menggabungkan antara game dan chatting. Ya, pengguna bisa membuat avatar atau ''Miis'' yang dapat dipakai untuk berkomunikasi antar pemain Miitomo.</p>\n<p>Nintendo juga menambahkan bila Miitomo bisa disebut sebagai aplikasi chatting yang aman. Bahkan, petinggi Nintendo, Shinya Takahashi mengungkapkan bila Miitomo adalah aplikasi tepat bagi gamer pemalu yang susah melakukan komunikasi dengan orang lain di dunia nyata.</p>\n<p>Sayangnya, belum jelas apakah Nintendo akan memasukkan karakter game legendaris mereka dalam Miitomo. Misalnya, Donkey Kong, Link dari The Legend of Zelda, hingga Mario dan Luigi.</p>', '2016-01-18 17:23:54', 'admin', 'sah-game-smartphone-pertama-nintendo-rilis-maret.jpg', 'publish', 'n'),
(26, 43, 'Pertahankan baterai bisa dilepas ,desain LG G5 akan tampil beda', '<p>Pada Bulan Maret nanti, akan ada ajang keren MWC, di mana banyak produsen teknologi yang mengumumkan perangkat terbarunya, termasuk smartphone. Kabarnya, Samsung dan LG akan memperkenalkan smartphone paling keren saat ini pada acara bergengsi tersebut.</p>\n<p>Walaupun saat ini masih bulan Januari, ada beberapa informasi yang bocor ke berbagai media. Menurut CNet Korea, desain smartphone LG G5 terbaru akan mempertahankan bagaimana caranya smartphone modern tetap memiliki baterai yang bisa dilepas.</p>\n<p>Smartphone yang dibalut dengan logam ini memiliki desain baru yang mungkin tidak terpikirkan oleh produsen lainnya. Jika biasanya casing bagian belakang harus dilepas untuk mencabut baterai, kini bezel bagian bawah yang harus dilepas.</p>\n<p>Setelah bagian bawah di lepas, maka baterai akan otomatis keluar dengan mudah. Ya, setelah beberapa prototipe, akhirnya tim dari LG memutuskan untuk mendesain smartphone dengan bagian bawah yang bisa dilepas, bukan lagi harus membuka casing belakang untuk mencabut baterai.</p>', '2016-01-18 17:25:33', 'admin', 'pertahankan-baterai-bisa-dilepas-desain-lg-g5-akan-tampil-beda.jpg', 'publish', 'n'),
(27, 41, 'Cara Membuat Website Dengan Mudah', '<p>Tutorial ini akan menunjukkan bagaimana cara membuat sebuah website. Panduan ini ditujukan bagi para pemula, dan akan menunjukkan langkah demi langkah keseluruhan proses membuat website sendiri dari dasar banget. Pada dasarnya, asal kamu udah bisa browsing dan mengetik, maka kamu udah punya modal untuk membuat website sendiri kok.</p>\n<p>Tulisan ini merupakan bagian kecil dari berbagai tutorial tentang cara membuat website sendiri yang ada di prothelon.com ini. Untuk melihat keseluruhan tutorial tentang <a title="Kumpulan Tutorial Cara Membuat Website" href="http://prothelon.com/belajar/category/cara-membuat-website">cara membuat website</a> sendiri, kamu bisa klik <a title="Cara Membuat Website" href="http://prothelon.com/belajar/category/cara-membuat-website">di sini</a>. Saya juga membuat beberapa link menuju tutorial lain yang terkait untuk memudahkan kamu untuk mempelajari lebih lanjut topik-topik tertentu yang diperlukan. Hampir semua topik itu udah ada di prothelon.com kok. Yuk, kita mulai&hellip;</p>\n<p>Pernah bingung membedakan istilah website dan blog? Nah, pada dasarnya, semua yang kamu lihat di internet adalah website. Namun demikian, website tersebut memiliki fungsi yang berbeda-beda dan memiliki sebutan khusus tergantung pada fungsinya. Jenis website yang cukup ngetop adalah blog, social media dan toko online. &nbsp;Jadi bisa dikatakan bahwa blog adalah salah satu jenis website yang memiliki fungsi sebagai diary atau buku harian bagi pemiliknya, makanya biasanya tampilan artikel blog biasanya diurutkan berdasarkan tanggal dimulai dari yang paling baru.</p>\n<p>Website lain memiliki fungsi mirip sebuah toko, di mana kita bisa memajang foto produk, harga, deskripsi produk hingga cara pembelian. Website jenis ini kita sebut sebagai toko online. Jenis website lain yang terkenal adalah social media. Untuk jenis website ini saya tidak perlu menjelaskan panjang lebar, karena kamu pasti sudah sering menggunakannya yaitu facebook dan twitter.</p>\n<p>Pada prinsipnya ada beberapa cara untuk membuat website, saya membaginya ke dalam 4 kategori yaitu:</p>\n<ul>\n<li><a title="Membuat Website secara Instan" href="http://prothelon.com/belajar/cara-membuat-website/membuat-website-secara-instan/">Instan</a>, cara ini adalah cara tercepat, termurah (alias gratis) dan termudah dalam membuat website. Contoh paling mudah adalah menggunakan blogspot, worpress, tokobagus, dll. Cara ini memiliki kelemahan pada tingkat fleksibilitas pembuatan. Kita hanya bisa membuat website sesuai format yang sudah disediakan oleh penyedia layanannya. Silakan baca <a title="Langkah Membuat Blog di Blogspot" href="http://prothelon.com/belajar/cara-membuat-blog/langkah-membuat-blog-di-blogspot/">tutorial cara membuat website menggunakan blogspot</a>&nbsp;atau <a title="Langkah Membuat Blog di WordPress" href="http://prothelon.com/belajar/cara-membuat-blog/langkah-membuat-blog-di-wordpress/">wordpress</a> ini untuk mempelajari langkah-langkah pemuatannya.</li>\n<li><a title="Cara Membuat Website CMS WordPress dengan cPanel" href="http://prothelon.com/belajar/cara-membuat-website/cara-membuat-website-cms-wordpress-dengan-cpanel/">CMS atau Content Management System</a>. Cara ini relatif cepat seperti metode instan, namun memiliki tingkat fleksibilitas yang lebih dibandingkan cara Instan. Kamu tinggal melakukan instalasi menggunakan software CMS yang sudah disediakan. Kita bisa melakukan perubahan lebih fleksibel dengan menginstal add on pada CMS tersebut. Namun demikian, kamu pada umumnya harus menyediakan nama domain dan hosting sendiri. Contoh CMS adalah Joomla untuk website yang umum, wordpress untuk blog (ya, wordpress memiliki 2 jenis yaitu instan dan CMS), Prestashop untuk toko online, dll. Kamu bisa klik <a title="Cara Membuat Website CMS WordPress dengan cPanel" href="http://prothelon.com/belajar/cara-membuat-website/cara-membuat-website-cms-wordpress-dengan-cpanel/">tutorial membuat website CMS WordPress</a> ini untuk mempelajari langkah-langkah pembuatannya.</li>\n<li>Framework, cara ini memiliki tingkat fleksibilitas pembuatan yang lebih tinggi, namun kamu harus memiliki kemampuan web programming.</li>\n<li>Web Programming. Cara membuat website ini adalah yang paling fleksibel, namun lama dan kamu dituntut untuk memiliki kemampuan web programming. Kalau kamu udah bisa membuat website dengan cara ini, maka pada dasarnya kamu bisa membuat segala jenis website yang kamu inginkan, nyaris tanpa batas. Kalau kamu tertarik untuk mempelajari cara ini, kamu minimal harus menguasai <a title="belajar HTML" href="http://prothelon.com/belajar/belajar-html/tutorial-html">HTML</a>, <a title="belajar PHP" href="http://prothelon.com/belajar/category/belajar-php">PHP</a> dan <a title="belajar MySQL" href="http://prothelon.com/belajar/category/belajar-mysql">MySQL</a>.</li>\n</ul>\n<p>Nah, untuk membuat website dengan metode CMS, Framework dan Web Programming, kamu memerlukan domain dan hosting. Apa tuh maksudnya domain dan hosting? Mari kita pelajari bersama.</p>', '2016-01-18 22:25:36', 'admin', 'twae.png', 'publish', 'n'),
(28, 42, 'Cegah Radikalisme Perkuat Pendidikan Agama', '<p>Ketua Majelis Ulama Indonesia (MUI) Sulawesi Utara KH Abdul Wahab Abdul Gafur mengatakan menangkal radikalisme dapat dilakukan dengan memperkuat pendidikan agama dan moral anak bangsa.<br /><br />"Pendidikan agama harus dipertegas kembali begitupun dengan pendidikan moral bangsa tentang bagaimana rasa nasionalisme itu perlu ditingkatkan," kata kiai Abdul Wahab Abdul Gafur di Manado, Ahad (17/1).<br /><br />Menurut dia, rasa cinta Tanah Air dan bangsa adalah bagian dari iman sehingga tidak boleh dipisahkan antara kecintaan terhadap bangsa ini dengan agama.<br /><br />"Pendidikan seperti ini yang harus terus ditanamkan terutama kepada generasi muda, generasi bangsa Indonesia," kata kiai Abdul Wahab Abdul Gafur menerangkan.<br /><br />Menurut dia, teroris bukan baru sekarang ini muncul, sehingga peran tokoh-tokoh agama adalah terus memberikan informasi dan membekali mereka agar tidak mudah terpengaruh.<br /><br />"Kita bisa lihat sekarang ini bahwa yang direkrut adalah generasi muda. Ada yang mudah terpengaruh karena kurang mengerti tentang terorisme. Tapi ada juga yang paham, tapi ikut juga terpengaruh sesuai dengan tingkat pemahamannya," ujarnya.<br /><br />Karena itu, dia berharap, pola pendidikan dan pembinaan mental spiritual yang dilakukan tokoh-tokoh agama dapat menjadi benteng yang kuat mencegah merasuknya radikalisme pada kaum muda.<br /><br />"Kami juga berharap warga tetap meningkatkan kewaspadaan dan segera melaporkan kepada aparat berwajib apabila melihat gelagat-gelagat yang mencurigakan dari orang-orang yang tidak dikenal," ajaknya.</p>', '2016-01-19 01:42:46', 'admin', 'radikalisme-ilustrasi-_150903122645-157.jpg', 'publish', 'n'),
(29, 41, 'Cara Menghilangkan Virus Android Tanpa AntiVirus', '<p>Android memang terkenal rentan dengan serangan virus atau malware yang disisipkan pada aplikasinya. Hal ini bukan hanya karena dukungan kemudahan dalam membuat aplikasi, tetapi juga tidak ketatnya persyaratan dan seleksi aplikasi di Google Play Store sendiri. <br />Menggunakan antivirus bisa saja jadi solusi, tapi bagaimana jika ternyata virusnya disematkan pada aplikasi antivirus tersebut?<br /><br />Melakukan <em>factory reset</em> selalu disebut sebagai cara ampuh untuk menghilangkan virus di Android. Tapi, resikonya semua data dan aplikasi yang terpasang di Android akan hilang. Bisa saja di-install lagi, tapi apa Anda bisa menjamin aplikasi itu tidak membawa virus?<br /><br />Berikut cara menghilangkan virus di Android tanpa menggunakan antivirus.<br /><br /><strong>1. Masuk ke Safe Mode</strong><br /><br />Masuk ke Safe Mode akan memungkinkan Android Anda beroperasi lebih ringan karena hanya menjalankan aplikasi inti yang dibawa sistem. Saat berada di Safe Mode, semua aplikasi yang diinstall akan hilang. Tapi tenang, aplikasi tersebut bukan hilang selamanya, hanya sementara saat berada di Safe Mode saja. <br /><br />Jadi, saat di Safe Mode Anda bisa leluasa berpindah antar sistem aplikasi tanpa kendala, memudahkan Anda juga untuk mengecek atau membersihkan file-file tidak penting, seperti file <em>cache</em>.<br /><br /><strong>2. Cek aplikasi di Safe Mode</strong><br /><br />Baca selengkapnya di <a href="http://jlan.tk/s/gTtDh">http://jlan.tk/s/gTtDh</a>&nbsp;</p>', '2016-01-19 01:46:00', 'admin', 'lgo-tegal.png', 'publish', 'n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_data`
--

CREATE TABLE IF NOT EXISTS `t_data` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_menu` varchar(12) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_data`
--

INSERT INTO `t_data` (`id`, `judul`, `deskripsi`, `id_menu`, `penulis`) VALUES
(2, 'Profil Saya', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/1509228_690439754320708_113093576_n.jpg?oh=2bbb2a8693cf887e9d84fde016970c0d&amp;oe=5707718B&amp;__gda__=1463606520_8263d8763fb5d3397a0198de84737208" alt="" width="293" height="391" /></p>\n<p>&nbsp;</p>\n<p>Nama : Miftahul Ulumudin</p>\n<p>Alamat : banjarharjo</p>', '', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event`
--

CREATE TABLE IF NOT EXISTS `t_event` (
  `id_event` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `waktu_update` datetime NOT NULL,
  `penulis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `kategori`) VALUES
(41, 'tutorial'),
(42, 'agama'),
(43, 'teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_menu`
--

CREATE TABLE IF NOT EXISTS `t_menu` (
  `id_menu` varchar(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_parent` int(3) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nama`, `id_parent`, `level`) VALUES
('1', 'Kampus', 0, 0),
('1.1', 'Sambutan Ketua', 1, 1),
('1.2', 'Sejarah STIKOM Banyuwangi', 1, 1),
('1.3', 'Visi dan Misi', 1, 1),
('1.4', 'Sasaran dan Tujuan', 1, 1),
('1.5', 'Struktur Organisasi', 1, 1),
('1.6', 'Profil STIKOM Banyuwangi', 1, 1),
('10', 'Galeri Kegiatan', 0, 10),
('11', 'Download', 0, 10),
('12', 'Guest Book', 0, 10),
('13', 'Hubungi Kami', 0, 10),
('14', 'Intranet STIKOM', 0, 10),
('2', 'Akademik', 0, 0),
('2.1', 'Teknik Informatika', 2, 1),
('2.2', 'Manajemen Informartika', 2, 1),
('2.3', 'Peraturan Akademik', 2, 1),
('2.4', 'Kalender Akademik', 2, 1),
('2.5', 'Tenaga Pengajar', 2, 1),
('3', 'Penelitian & Pengembangan', 0, 0),
('3.1', 'Jurnal Penelitian', 3, 1),
('3.2', 'Pengabdian Masyarakat', 3, 1),
('4', 'Organisasi Mahasiswa', 0, 0),
('4.1', 'Badan Eksekutif Mahasiswa (BEM)', 4, 1),
('4.2', 'Unit Kegiatan Mahasiswa Kloso', 4, 1),
('4.3', 'Unit Kegiatan Mahasiswa Kamera', 4, 1),
('4.4', 'Alumni', 4, 1),
('5', 'Sarana Prasarana', 0, 0),
('5.1', 'Gedung', 5, 1),
('5.2', 'Laboratorium', 5, 1),
('5.3', 'Kelas', 5, 1),
('5.4', 'Perpustakaan', 5, 1),
('5.5', 'Koneksi Internet', 5, 1),
('5.6', 'Sarana Umum', 5, 1),
('6', 'Berita', 0, 10),
('7', 'Agenda', 0, 10),
('8', 'Pengumuman', 0, 10),
('9', 'Elearning', 0, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_produk`
--

CREATE TABLE IF NOT EXISTS `t_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_produk`
--

INSERT INTO `t_produk` (`id`, `nama`, `deskripsi`, `img`) VALUES
(2, 'Template Web Toko Online', '<p>Untuk Anda yang sedang mencari Template toko online yang mudah di edit dengan tampilan yang sangat Responsive. bisa digunakan untuk Tugas Sekolah/Kuliah maupun untuk di implementasikan langsung sebagai toko online silahkan coba produk kami ini.</p>\n<p><span style="font-weight: bold;">Fitur yang anda dapat:</span></p>\n<p>&nbsp; &nbsp; 1. Template Website Responsive dengan Qualitas HD</p>\n<p>&nbsp; &nbsp; 2. &nbsp;Terdapat 5 Page/Halaman &amp; mudah di modifikasi diantaranya :</p>\n<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;a. &nbsp;Index/halaman awal</p>\n<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;b. Contact</p>\n<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;c. Shopping cart (Keranjang Belanja)</p>\n<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;d. Detail Produk</p>\n<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;e. Registrasi pelanggan baru</p>\n<p>&nbsp; &nbsp; 3. Desain rapi dan elegant</p>\n<p>&nbsp; &nbsp; 4. script yang digunakan dibuat sendiri. bisa anda edit.</p>\n<p>Link Demo di sini :</p>\n<p><a href="http://www.abdoel.hol.es">http://www.abdoel.hol.es</a></p>\n<p>Jika anda membutuhkan bantuan silahkan hubungi saya :).</p>', '201512195674cb762f5b0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'miftah', 'miftah', '0860dfc81a442d5c56230c8f5cebf1d5', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
