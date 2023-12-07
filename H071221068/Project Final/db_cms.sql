-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.28-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_cms
CREATE DATABASE IF NOT EXISTS `db_cms` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_cms`;

-- membuang struktur untuk table db_cms.content
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `isi_materi` text NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not deleted 1: deleted',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel db_cms.content: ~54 rows (lebih kurang)
DELETE FROM `content`;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` (`id`, `judul`, `isi_materi`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
	(1, 'Tes2', 'ok2', 1, 1, '2023-11-29 06:33:28', '2023-11-29 07:12:16'),
	(2, 'Tes', '123', 1, 1, '2023-11-29 07:15:49', '2023-12-06 02:43:25'),
	(3, '[ Frontend ] Pengantar dan Dasar-dasar Web Development', 'Pemahaman dasar tentang bagaimana web bekerja, peran HTML, CSS, dan JavaScript, serta konsep dasar pengembangan web', 0, 2, '2023-12-06 02:44:49', '2023-12-06 02:44:49'),
	(4, '[ Frontend ] HTML (Hypertext Markup Language)', 'Struktur dasar halaman web, penggunaan tag HTML, dan cara menyusun konten', 0, 2, '2023-12-06 02:45:18', '2023-12-06 02:45:18'),
	(5, '[ Frontend ] CSS (Cascading Style Sheets)', 'Mendesain tata letak dan gaya halaman web, penggunaan selektor, properti CSS, dan teknik tata letak responsif', 0, 2, '2023-12-06 02:46:25', '2023-12-06 02:46:25'),
	(6, '[ Frontend ] JavaScript', 'Dasar-dasar pemrograman JavaScript, manipulasi DOM (Document Object Model), kejadian (events), dan AJAX untuk berinteraksi dengan server', 0, 2, '2023-12-06 02:49:37', '2023-12-06 02:49:37'),
	(7, '[ Frontend ] Framework dan Library Frontend', 'Pengenalan terhadap framework seperti React, Angular, atau Vue.js, serta pemanfaatan library UI untuk mempercepat pengembangan', 0, 2, '2023-12-06 02:51:42', '2023-12-06 02:51:42'),
	(8, '[ Frontend ] Pengenalan Progressive Web Apps (PWAs)', 'Konsep dan teknik untuk mengembangkan aplikasi web progresif yang dapat berfungsi secara offline dan memberikan pengalaman serupa aplikasi native', 0, 2, '2023-12-06 02:52:48', '2023-12-06 02:52:48'),
	(9, '[ Frontend ] Keamanan Frontend', 'Praktik terbaik untuk melindungi aplikasi web dari serangan keamanan, termasuk XSS (Cross-Site Scripting) dan CSRF (Cross-Site Request Forgery', 0, 2, '2023-12-06 02:53:15', '2023-12-06 02:53:15'),
	(10, '[ Backend ] Pengantar dan Dasar-dasar Backend Development', 'Pemahaman tentang peran backend dalam pengembangan web, server, dan konsep dasar arsitektur server-side', 0, 2, '2023-12-06 02:54:27', '2023-12-06 02:54:27'),
	(11, '[ Backend ] Bahasa Pemrograman Server-side', 'Pemilihan dan penggunaan bahasa pemrograman backend seperti Node.js (JavaScript), Python, Ruby, Java, atau PHP', 0, 2, '2023-12-06 02:55:00', '2023-12-06 02:55:00'),
	(12, '[ Backend ] Database dan Model Data', 'Desain dan implementasi basis data, pemahaman model data, dan interaksi dengan database menggunakan SQL atau NoSQL (seperti MongoDB)', 0, 2, '2023-12-06 02:55:28', '2023-12-06 02:55:28'),
	(13, '[ Backend ] API (Application Programming Interface)', 'Membangun dan merancang API untuk berkomunikasi antara frontend dan backend, termasuk RESTful dan GraphQL', 0, 2, '2023-12-06 02:56:04', '2023-12-06 02:56:04'),
	(14, '[ Backend ] Middleware dan Routing', 'Implementasi middleware untuk pemrosesan permintaan HTTP dan sistem routing untuk menangani rute pada aplikasi', 0, 2, '2023-12-06 02:56:56', '2023-12-06 02:56:56'),
	(15, '[ Backend ] Logging dan Monitoring', 'Menerapkan log dan monitoring untuk mendeteksi masalah, memantau kinerja, dan memfasilitasi pemecahan masalah', 0, 2, '2023-12-06 02:57:19', '2023-12-06 02:57:19'),
	(16, '[ UI/UX ] Pengantar UI/UX Design', 'Pemahaman dasar tentang perbedaan antara User Interface (UI) dan User Experience (UX), serta peran keduanya dalam pengembangan produk', 0, 2, '2023-12-06 02:58:52', '2023-12-06 02:58:52'),
	(17, '[ UI/UX ] Penelitian Pengguna (User Research)', 'Metode penelitian untuk memahami kebutuhan dan perilaku pengguna, seperti wawancara, survei, dan analisis pesaing', 0, 2, '2023-12-06 02:59:19', '2023-12-06 02:59:19'),
	(18, '[ UI/UX ] Wireframing', 'Membuat sketsa dan garis besar desain menggunakan wireframes untuk merencanakan tata letak dan struktur informasi', 0, 2, '2023-12-06 02:59:42', '2023-12-06 02:59:42'),
	(19, '[ UI/UX ] Prototyping', 'Membangun prototipe interaktif untuk mensimulasikan pengalaman pengguna sebelum pengembangan penuh dilakukan', 0, 2, '2023-12-06 03:00:11', '2023-12-06 03:00:11'),
	(20, '[ UI/UX ] Desain Responsif', 'Memahami dan menerapkan desain yang responsif untuk memastikan pengalaman yang baik di berbagai perangkat dan ukuran layar', 0, 2, '2023-12-06 03:00:33', '2023-12-06 03:00:33'),
	(21, '[ UI/UX ] Pengoptimalan Pengalaman Pengguna (UX Optimization)', 'Menggunakan data dan umpan balik pengguna untuk melakukan perbaikan terus-menerus pada desain dan pengalaman pengguna', 0, 2, '2023-12-06 03:01:05', '2023-12-06 03:01:05'),
	(22, '[ Data Analyst ] Pengantar Analisis Data', 'Memahami peran dan tanggung jawab seorang data analyst dalam konteks bisnis. Pengantar konsep dasar analisis data', 0, 2, '2023-12-06 03:02:30', '2023-12-06 03:02:30'),
	(23, '[ Data Analyst ] Exploratory Data Analysis (EDA)', 'Menganalisis dan menggali wawasan dari data menggunakan visualisasi dan statistik deskriptif', 0, 2, '2023-12-06 03:02:49', '2023-12-06 03:02:49'),
	(24, '[ Data Analyst ] Statistika untuk Analisis Data', 'Pemahaman dasar statistika untuk memberikan konteks dan keakuratan dalam analisis data', 0, 2, '2023-12-06 03:03:16', '2023-12-06 03:04:20'),
	(25, '[ Data Analyst ] Data Visualization', 'Membuat visualisasi data yang efektif menggunakan alat seperti Matplotlib, Seaborn, atau ggplot2', 0, 2, '2023-12-06 03:05:15', '2023-12-06 03:05:15'),
	(26, '[ Data Analyst ] Analisis Regresi dan Klasifikasi', 'Menerapkan model analisis regresi dan klasifikasi untuk memprediksi dan mengkategorikan data', 0, 2, '2023-12-06 03:06:22', '2023-12-06 03:06:22'),
	(27, '[ Data Science ] Pengantar Data Science', 'Definisi dan cakupan data science, peran data scientist, dan peran data science dalam pengambilan keputusan', 0, 2, '2023-12-06 03:10:50', '2023-12-06 03:10:50'),
	(28, '[ Data Science ] Statistika dan Matematika untuk Data Science', 'Konsep dasar statistika, probabilitas, dan aljabar linear yang diperlukan untuk pemahaman model statistika dan machine learning', 0, 2, '2023-12-06 03:11:16', '2023-12-06 03:11:16'),
	(29, '[ Data Science ] Pemodelan Prediktif', 'Menerapkan dan mengoptimalkan model untuk membuat prediksi berdasarkan data historis', 0, 2, '2023-12-06 03:11:47', '2023-12-06 03:11:47'),
	(30, '[ Data Science ] Validasi Model', 'Menggunakan teknik seperti validasi silang untuk mengukur dan meningkatkan keandalan model', 0, 2, '2023-12-06 03:12:12', '2023-12-06 03:12:12'),
	(31, '[ Data Science ] Pengolahan dan Analisis Data Textual', 'Menganalisis data teks menggunakan teknik pemrosesan bahasa alami (NLP) dan ekstraksi informasi', 0, 2, '2023-12-06 03:12:45', '2023-12-06 03:12:45'),
	(32, 'tes2', '2', 1, 10, '2023-12-06 03:13:49', '2023-12-06 03:13:52'),
	(33, '[ Data Engineering ] Pengantar Data Engineering', 'Definisi dan cakupan data engineering, peran data engineer, dan hubungannya dengan data science dan analisis data', 0, 10, '2023-12-06 03:14:47', '2023-12-06 03:14:47'),
	(34, '[ Data Engineering ] Pengenalan Sistem Manajemen Basis Data (DBMS)', 'Pemahaman tentang sistem manajemen basis data, jenis-jenisnya, dan peran dalam pengelolaan dan menyimpan data', 0, 10, '2023-12-06 03:15:50', '2023-12-06 03:15:50'),
	(35, '[ Data Engineering ] Bahasa SQL', 'Pemahaman dasar dan lanjutan tentang SQL untuk pengelolaan dan manipulasi data dalam basis data', 0, 10, '2023-12-06 03:16:12', '2023-12-06 03:16:12'),
	(36, '[ Data Engineering ] Proses ETL (Extract, Transform, Load)', 'Pengenalan terhadap konsep dan teknik ETL untuk mengekstrak, mentransformasi, dan memuat data dari berbagai sumber ke dalam basis data', 0, 10, '2023-12-06 03:16:41', '2023-12-06 03:16:41'),
	(37, '[ Data Engineering ] Data Warehousing', 'Pengenalan terhadap konsep data warehousing dan peranannya dalam menyimpan dan menyusun data untuk analisis', 0, 10, '2023-12-06 03:17:07', '2023-12-06 03:17:07'),
	(38, '[ Data Engineering ] Pengelolaan Data Streaming', 'Memahami pengolahan data secara real-time dan alat-alat untuk mengelola aliran data yang terus menerus', 0, 10, '2023-12-06 03:17:34', '2023-12-06 03:17:34'),
	(39, '[ AI Engineering ] Pengantar Kecerdasan Buatan (AI)', 'Definisi dan cakupan AI, peran AI dalam teknologi modern, dan perkembangan sejarah kecerdasan buatan', 0, 10, '2023-12-06 03:18:55', '2023-12-06 03:18:55'),
	(40, '[ AI Engineering ] Pemahaman Konsep Machine Learning', 'Pengenalan dasar tentang machine learning, jenis-jenisnya, dan bagaimana algoritma dapat belajar dari data', 0, 10, '2023-12-06 03:19:18', '2023-12-06 03:19:18'),
	(41, '[ AI Engineering ] Pemrosesan Bahasa Alami (Natural Language Processing - NLP)', 'Memahami teknologi dan algoritma yang digunakan untuk memproses dan memahami bahasa manusia oleh mesin', 0, 10, '2023-12-06 03:19:40', '2023-12-06 03:19:40'),
	(42, '[ AI Engineering ] Reinforcement Learning', 'Memahami konsep reinforcement learning dan cara menggunakan sistem hadiah dan hukuman untuk melatih model', 0, 10, '2023-12-06 03:20:05', '2023-12-06 03:21:04'),
	(43, '[ AI Engineering ] Interaksi Manusia-Mesin (Human-Machine Interaction)', 'Bagaimana manusia berinteraksi dengan sistem AI, dan bagaimana AI dapat dipasang dalam berbagai aplikasi.', 0, 10, '2023-12-06 03:20:30', '2023-12-06 03:20:30'),
	(44, '[ Data Mining ] Pengantar Data Mining', 'Definisi dan cakupan data mining, peran dan tujuan dalam mengekstraksi pola dan pengetahuan dari data', 0, 2, '2023-12-06 03:38:36', '2023-12-06 03:38:36'),
	(45, '[ Data Mining ] Praproses Data', 'Teknik pra-pemrosesan data untuk membersihkan, mengintegrasikan, dan mengubah data agar siap untuk analisis', 0, 2, '2023-12-06 03:39:04', '2023-12-06 03:39:24'),
	(46, '[ Data Mining ] Teknik Pemilihan Atribut (Attribute Selection)', 'Memilih atribut atau fitur yang paling relevan dan signifikan untuk analisis', 0, 2, '2023-12-06 03:40:02', '2023-12-06 21:17:28'),
	(47, '[ Data Mining ] Algoritma Pencarian Pola (Pattern Search Algorithms)', 'Algoritma yang digunakan untuk mencari pola dan hubungan dalam data, seperti Apriori untuk menemukan asosiasi dalam data transaksional', 0, 2, '2023-12-06 03:40:22', '2023-12-06 03:40:22'),
	(48, '[ Data Mining ] Pencarian Pola Urutan (Sequential Pattern Mining)', 'Mencari pola urutan dalam data waktu atau data yang memiliki urutan tertentu', 0, 2, '2023-12-06 03:40:46', '2023-12-06 03:40:46'),
	(49, '[ Cyber Security ] Pengantar Keamanan Siber', 'Definisi keamanan siber, pentingnya keamanan informasi, dan ancaman umum yang dihadapi sistem dan data', 0, 2, '2023-12-06 03:41:44', '2023-12-06 03:41:44'),
	(50, '[ Cyber Security ] Kerangka Hukum dan Etika Keamanan Siber', 'Memahami kerangka hukum dan etika yang mengatur keamanan siber, termasuk undang-undang privasi dan kebijakan keamanan', 0, 2, '2023-12-06 03:42:50', '2023-12-06 03:42:50'),
	(51, '[ Cyber Security ] Analisis Ancaman dan Rentang Keamanan', 'Mengidentifikasi dan menganalisis ancaman keamanan, serta menentukan rentang keamanan yang diperlukan', 0, 2, '2023-12-06 03:43:17', '2023-12-06 03:43:17'),
	(52, '[ Cyber Security ] Kriptografi', 'Prinsip-prinsip dasar kriptografi, algoritma enkripsi, dan penggunaannya untuk melindungi data dan komunikasi', 0, 2, '2023-12-06 03:43:42', '2023-12-06 03:43:42'),
	(53, '[ Cyber Security ] Serangan Malware dan Antivirus', 'Memahami jenis-jenis malware, teknik serangan,dan implementasi solusi antivirus', 0, 2, '2023-12-06 03:44:08', '2023-12-07 10:13:55'),
	(54, 'test', 'tes', 1, 2, '2023-12-06 07:53:21', '2023-12-06 07:53:37');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.course
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not deleted 1: deleted',
  `image_path` varchar(1000) NOT NULL,
  `range_course` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Membuang data untuk tabel db_cms.course: ~11 rows (lebih kurang)
DELETE FROM `course`;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`id`, `course_name`, `deskripsi`, `is_delete`, `image_path`, `range_course`, `created_by`, `created_at`, `updated_at`) VALUES
	(4, 'Frontend', 'Selamat datang di kursus Frontend yang inovatif dan komprehensif! Dalam kursus ini, Anda akan memasuki dunia yang dinamis dan kreatif dari pengembangan frontend, di mana desain visual bertemu dengan fungsionalitas yang memukau.  Kursus ini dirancang khusus untuk membekali Anda dengan keterampilan dan pengetahuan yang diperlukan untuk menjadi seorang pengembang frontend yang terampil dan adaptif. Mulai dari dasar-dasar HTML, CSS, dan JavaScript hingga konsep-konsep canggih seperti responsif design, framework frontend terkemuka, dan pengoptimalan kinerja web, kursus ini mencakup seluruh spektrum pengembangan frontend.', 0, 'public\\assets\\frontend\\img\\frontend.jpeg', '12/06/2023 - 01/18/2024', 2, '2023-12-05 06:54:03', '2023-12-05 06:54:03'),
	(5, 'Backend', 'Selamat datang di kursus Backend yang revolusioner dan menyeluruh! Kursus ini dirancang khusus untuk membimbing Anda melalui fondasi esensial dan konsep tingkat lanjut dalam pengembangan backend, mempersiapkan Anda untuk menjadi seorang pengembang backend yang ahli dan terampil.', 0, 'public\\assets\\frontend\\img\\backend.jpg', '01/18/2024 - 02/02/2024', 2, '2023-12-05 06:55:25', '2023-12-05 06:55:25'),
	(6, 'UI/UX', 'Selamat datang di kursus UI/UX, di mana kreativitas bertemu dengan fungsionalitas untuk menciptakan pengalaman pengguna yang tak terlupakan! Kursus ini dirancang khusus untuk membimbing Anda melalui proses perancangan antarmuka (UI) dan pengalaman pengguna (UX), membekali Anda dengan keterampilan yang diperlukan untuk menjadi seorang desainer UI/UX yang sukses.', 0, 'public\\assets\\frontend\\img\\ui.jpg', '03/12/2024 - 04/13/2024', 2, '2023-12-05 06:56:35', '2023-12-05 06:56:35'),
	(7, 'Data Analyst', 'Selamat datang di kursus Data Analyst, di mana Anda akan mempelajari seni dan ilmu menganalisis data untuk menggali wawasan berharga dari informasi yang ada. Kursus ini dirancang khusus untuk memberikan landasan yang kokoh dalam analisis data, mempersiapkan Anda untuk menghadapi tantangan di dunia profesional yang terus berkembang.', 0, 'public\\assets\\frontend\\img\\analyst.jpg', '04/27/2024 - 05/24/2024', 2, '2023-12-05 06:58:23', '2023-12-05 06:58:23'),
	(8, 'Data Science', 'Selamat datang di kursus Data Science, petualangan seru di dunia penemuan wawasan berharga dari data! Kursus ini dirancang khusus untuk membekali Anda dengan keterampilan dan pengetahuan yang diperlukan untuk menjadi seorang ahli data scientist yang sukses', 0, 'public\\assets\\frontend\\img\\science.jpg', '05/02/2024 - 06/21/2024', 2, '2023-12-05 07:03:29', '2023-12-05 07:03:29'),
	(9, 'Data Engineering', 'Selamat datang di kursus Data Engineering, dimana Anda akan menguasai keterampilan teknis untuk merancang, mengelola, dan mengoptimalkan infrastruktur data yang kuat. Kursus ini dirancang khusus untuk membimbing Anda melalui perjalanan mengubah data menjadi aset berharga melalui teknik pengolahan dan manajemen data yang canggih.', 0, 'public\\assets\\frontend\\img\\engineer.jpg', '06/08/2024 - 07/27/2024', 2, '2023-12-05 07:08:55', '2023-12-05 07:08:55'),
	(10, 'tes', '-', 1, '', '12/05/2023 - 12/05/2023', 2, '2023-12-05 11:21:14', '2023-12-05 11:24:40'),
	(11, 'AI Engineer', 'Selamat datang di kursus AI Engineer, sebuah perjalanan mendalam ke dunia kecerdasan buatan (AI) di mana Anda akan mempelajari teknik-teknik terbaru dalam pengembangan solusi cerdas. Kursus ini dirancang untuk memberikan pemahaman yang komprehensif tentang konsep AI dan keterampilan teknis yang diperlukan untuk merancang, mengembangkan, dan mengimplementasikan solusi AI yang inovatif.', 0, 'public\\assets\\frontend\\img\\ai.jpg', '04/11/2024 - 05/24/2024', 2, '2023-12-06 02:38:52', '2023-12-06 02:38:52'),
	(12, 'Data Mining', 'Selamat datang di kursus Data Mining, petualangan intelektual di dunia penggalian pengetahuan dari data besar! Kursus ini dirancang untuk membekali Anda dengan keterampilan yang diperlukan untuk mengidentifikasi pola, tren, dan informasi berharga dari dataset yang kompleks. Sambut tantangan baru dan pelajari teknik paling mutakhir dalam praktik data mining.', 0, 'public\\assets\\frontend\\img\\mining.jpg', '12/06/2023 - 12/06/2023', 2, '2023-12-06 02:39:38', '2023-12-06 02:39:38'),
	(13, 'Cyber Security', 'Selamat datang di kursus Cyber Security, petualangan yang mendalam di dunia keamanan digital dan perlindungan terhadap ancaman siber yang terus berkembang! Kursus ini dibuat khusus untuk memberikan Anda pemahaman mendalam tentang konsep keamanan cyber, teknik deteksi, dan strategi pertahanan terkini.', 0, 'public\\assets\\frontend\\img\\cyber.jpg', '02/20/2024 - 03/08/2024', 2, '2023-12-06 02:40:26', '2023-12-06 02:40:26'),
	(14, 'Software Developer', 'Selamat datang di kursus Software Developer, peluang tak-terbatas untuk memahami, merancang, dan membangun solusi perangkat lunak inovatif! Kursus ini dirancang khusus untuk memberikan fondasi yang kokoh dalam pengembangan perangkat lunak, mempersiapkan Anda untuk menjadi seorang pengembang perangkat lunak yang terampil dan berdaya saing.', 0, 'public\\assets\\frontend\\img\\slide2.png', '05/26/2024 - 06/29/2024', 2, '2023-12-06 02:41:22', '2023-12-07 10:13:40');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.failed_jobs: ~0 rows (lebih kurang)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.migrations: ~5 rows (lebih kurang)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.password_resets: ~0 rows (lebih kurang)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.password_reset_tokens: ~0 rows (lebih kurang)
DELETE FROM `password_reset_tokens`;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.personal_access_tokens: ~0 rows (lebih kurang)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- membuang struktur untuk table db_cms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1: Admin, 2: Teacher, 3:Student',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not deleted 1: deleted',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Membuang data untuk tabel db_cms.users: ~5 rows (lebih kurang)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `role`, `is_delete`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', 1, 0, NULL, '$2y$12$k0sXpYlfsKb.DCROgHAQs.wdYe2quWQYoSPU7yaVVNW39utqrxj2O', 'OSjKm8BAhWoN4NKbxwnPzIwUBjAfyHVJAW9NAkHoTa84XFyglxuJCFe7Jvll', '2023-11-27 00:53:12', '2023-11-30 01:31:18'),
	(2, 'Muhammad Zabryna Andiny', 'teacher@gmail.com', 2, 0, NULL, '$2y$12$HWCtRI583U44vn/Y9vCr4.4Dgg1WSingJ2Vrzf8U/PeAjh3ZxxMI.', '85DqZOofUXHOSCZDdzKYYJU85XPu4xBwfE0GZcqs1m66UeFTzcQDEO85Xifx', '2023-11-27 00:53:12', '2023-12-06 07:55:20'),
	(3, 'Ahmad Elva Aprilia Timang', 'student@gmail.com', 3, 0, NULL, '$2y$12$HWCtRI583U44vn/Y9vCr4.4Dgg1WSingJ2Vrzf8U/PeAjh3ZxxMI.', 'ejVpa6r7Fe05Sit4JWt1vfBiNXUlgs9BuiaTRDvKCRIVlk83fVL0SGYXqt55', '2023-11-27 00:53:12', '2023-12-06 07:55:34'),
	(10, 'Mahendra Kirana', 'teacher2@gmail.com', 2, 0, NULL, '$2y$12$JA8dfq8S9HXR0cEN9bIMheITqZypjDJND1iuHZvkuqkleB/82fVQ2', 'Yg3epBeImni5YkTXbr4FY5ecZ7tee5FjBi5kGo2r4BFeTcZzSn5qw1mexub1', '2023-12-06 02:41:49', '2023-12-07 10:13:02'),
	(11, 'tes', 'tes@gmail.com', 3, 1, NULL, '$2y$12$WD5itMMVj/BxfMJylSaCPu7En2DDnVeOW5dOXfekFlYFIPQoNAwJy', NULL, '2023-12-07 10:13:20', '2023-12-07 10:13:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
