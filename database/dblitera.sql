BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS cache (
	`key`	VARCHAR(254) NOT NULL PRIMARY KEY,
	`value`	TEXT NOT NULL,
	`expiration`	INT(15) NOT NULL
	
);
CREATE TABLE IF NOT EXISTS cache_locks (
	`key`	VARCHAR(254) NOT NULL PRIMARY KEY,
	`owner`	VARCHAR(254) NOT NULL,
	`expiration`	INT(15) NOT NULL
	
);
CREATE TABLE IF NOT EXISTS `failed_jobs` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `uuid` VARCHAR(254) NOT NULL,
    `connection` TEXT NOT NULL,
    `queue` TEXT NOT NULL,
    `payload` TEXT NOT NULL,
    `exception` TEXT NOT NULL,
    `failed_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `galeri` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `foto` VARCHAR(254) NOT NULL,
    `deskripsi` TEXT,
    `kategori` VARCHAR(254) NOT NULL
);

CREATE TABLE IF NOT EXISTS `job_batches` (
    `id` VARCHAR(254) NOT NULL PRIMARY KEY,
    `name` VARCHAR(254) NOT NULL,
    `total_jobs` INT(15) NOT NULL,
    `pending_jobs` INT(15) NOT NULL,
    `failed_jobs` INT(15) NOT NULL,
    `failed_job_ids` TEXT NOT NULL,
    `options` TEXT,
    `cancelled_at` INT(15),
    `created_at` INT(15) NOT NULL,
    `finished_at` INT(15)
);

CREATE TABLE IF NOT EXISTS `jobs` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `queue` VARCHAR(254) NOT NULL,
    `payload` TEXT NOT NULL,
    `attempts` INT(15) NOT NULL,
    `reserved_at` INT(15),
    `available_at` INT(15) NOT NULL,
    `created_at` INT(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS `kegiatan` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `deskripsi` VARCHAR(254) NOT NULL,
    `foto` VARCHAR(254) NOT NULL
);

CREATE TABLE IF NOT EXISTS `metode` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `deskripsi` VARCHAR(254) NOT NULL,
    `foto` VARCHAR(254)
);

CREATE TABLE IF NOT EXISTS `migrations` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `migration` VARCHAR(254) NOT NULL,
    `batch` INT(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
    `email` VARCHAR(254) NOT NULL PRIMARY KEY,
    `token` VARCHAR(254) NOT NULL,
    `created_at` DATETIME
);

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `tokenable_type` VARCHAR(254) NOT NULL,
    `tokenable_id` INT(15) NOT NULL,
    `name` VARCHAR(254) NOT NULL,
    `token` VARCHAR(254) NOT NULL,
    `abilities` TEXT,
    `last_used_at` DATETIME,
    `expires_at` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME
);

CREATE TABLE IF NOT EXISTS `profil` (
    `id` VARCHAR(254) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `artinama` TEXT NOT NULL,
    `sejarah` TEXT NOT NULL,
    `visi` TEXT NOT NULL,
    `unggulan` TEXT NOT NULL,
    `instagram_link` VARCHAR(254) NOT NULL,
    `whatsapp_link` VARCHAR(254) NOT NULL,
    `alamat` VARCHAR(254) NOT NULL,
    `misi` TEXT
);

CREATE TABLE IF NOT EXISTS `program` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `deskripsi` VARCHAR(254) NOT NULL,
    `sekolah` VARCHAR(254) NOT NULL
);

CREATE TABLE IF NOT EXISTS `sessions` (
    `id` VARCHAR(254) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(15),
    `ip_address` VARCHAR(254),
    `user_agent` TEXT,
    `payload` TEXT NOT NULL,
    `last_activity` INT(15) NOT NULL
);

CREATE TABLE IF NOT EXISTS `staff` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nama` VARCHAR(254) NOT NULL,
    `posisi` VARCHAR(254) NOT NULL,
    `sub_posisi` VARCHAR(254) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `foto` VARCHAR(254) NOT NULL
);

CREATE TABLE IF NOT EXISTS `team_invitations` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `team_id` INT(15) NOT NULL,
    `email` VARCHAR(254) NOT NULL,
    `role` VARCHAR(254),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS `team_user` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `team_id` INT(15) NOT NULL,
    `user_id` INT(15) NOT NULL,
    `role` VARCHAR(254),
    `created_at` DATETIME,
    `updated_at` DATETIME
);

CREATE TABLE IF NOT EXISTS `teams` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(15) NOT NULL,
    `name` VARCHAR(254) NOT NULL,
    `personal_team` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME
);

CREATE TABLE IF NOT EXISTS `testi` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nama` VARCHAR(254) NOT NULL,
    `asal_sekolah` VARCHAR(254) NOT NULL,
    `universitas` VARCHAR(254) NOT NULL,
    `program_studi` VARCHAR(254) NOT NULL,
    `deskripsi` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `foto` VARCHAR(254)
);

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(254) NOT NULL,
    `email` VARCHAR(254) NOT NULL,
    `email_verified_at` DATETIME,
    `password` VARCHAR(254) NOT NULL,
    `remember_token` VARCHAR(254),
    `current_team_id` INT(15),
    `profile_photo_path` VARCHAR(254),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `two_factor_secret` TEXT,
    `two_factor_recovery_codes` TEXT,
    `two_factor_confirmed_at` DATETIME
);

INSERT INTO cache VALUES ('95588cd1a334227cfad0f0d6e54ebed9:timer','i:1723729988;',1723729988);
INSERT INTO cache VALUES ('95588cd1a334227cfad0f0d6e54ebed9','i:1;',1723729988);
INSERT INTO cache VALUES ('bd06ec0a05e271d4866302b28ec20ead:timer','i:1723770351;',1723770351);
INSERT INTO cache VALUES ('bd06ec0a05e271d4866302b28ec20ead','i:1;',1723770351);
INSERT INTO galeri VALUES (1,'2024-08-15 12:50:41','2024-08-15 12:50:41','1723726241.png','Silahkan','Outbond');
INSERT INTO galeri VALUES (2,'2024-08-15 12:55:17','2024-08-15 12:55:17','1723726517.png','Silahkann','Outbond');
INSERT INTO galeri VALUES (3,'2024-08-15 13:02:32','2024-08-15 13:02:32','1723726952.png','asd','Outbond');
INSERT INTO galeri VALUES (4,'2024-08-15 13:03:46','2024-08-15 13:03:46','1723727026.png','asd','Kelas Praktek');
INSERT INTO galeri VALUES (5,'2024-08-15 13:04:28','2024-08-15 13:04:28','1723727068.png','asdf','Kelas Praktek');
INSERT INTO galeri VALUES (6,'2024-08-15 13:17:56','2024-08-15 13:17:56','1723727876.png','Silahkan','Buka Puasa');
INSERT INTO galeri VALUES (7,'2024-08-15 13:18:04','2024-08-15 13:18:04','1723727884.png','Silahkann','Buka Puasa');
INSERT INTO kegiatan VALUES (8,'2024-08-10 07:34:51','2024-08-10 07:34:51','KBM Reguler + Post Test','1723275291.svg');
INSERT INTO kegiatan VALUES (9,'2024-08-10 07:35:49','2024-08-10 07:35:49','Belajar Kelompok Mandiri','1723275349.svg');
INSERT INTO kegiatan VALUES (10,'2024-08-10 07:36:14','2024-08-10 07:36:14','TO UTBK dan Review Assesment','1723275374.svg');
INSERT INTO kegiatan VALUES (11,'2024-08-10 07:36:24','2024-08-10 07:36:24','Kelas Praktek','1723275384.svg');
INSERT INTO kegiatan VALUES (12,'2024-08-10 07:36:35','2024-08-10 07:36:35','Pendidikan Karakter','1723275395.svg');
INSERT INTO kegiatan VALUES (13,'2024-08-10 07:36:45','2024-08-10 07:36:45','Kelas UTBK','1723275405.svg');
INSERT INTO kegiatan VALUES (14,'2024-08-10 07:37:01','2024-08-10 07:37:01','Pendidikan Kesemaptaan (Kedinasan)','1723275421.svg');
INSERT INTO kegiatan VALUES (15,'2024-08-10 07:37:09','2024-08-10 07:37:09','Konsultasi','1723275429.svg');
INSERT INTO metode VALUES (4,'2024-08-10 07:42:52','2024-08-10 07:46:25','Regular Learning.','1723275985.png');
INSERT INTO metode VALUES (5,'2024-08-10 07:43:30','2024-08-10 07:46:10','Outdoor Learning','1723275970.png');
INSERT INTO metode VALUES (6,'2024-08-10 07:43:42','2024-08-10 07:43:42','Audio Visual Learning','1723275822.png');
INSERT INTO metode VALUES (7,'2024-08-10 07:43:53','2024-08-10 07:43:53','Flash Card Learning','1723275833.png');
INSERT INTO migrations VALUES (1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES (2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES (3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES (4,'2024_08_01_152212_add_two_factor_columns_to_users_table',1);
INSERT INTO migrations VALUES (5,'2024_08_01_152242_create_personal_access_tokens_table',1);
INSERT INTO migrations VALUES (6,'2024_08_01_152243_create_teams_table',1);
INSERT INTO migrations VALUES (7,'2024_08_01_152244_create_team_user_table',1);
INSERT INTO migrations VALUES (8,'2024_08_01_152245_create_team_invitations_table',1);
INSERT INTO migrations VALUES (9,'2024_08_02_131708_staff_table',2);
INSERT INTO migrations VALUES (10,'2024_08_05_075308_testi_table',3);
INSERT INTO migrations VALUES (11,'2024_08_05_114635_profil_table',4);
INSERT INTO migrations VALUES (12,'2024_08_06_104809_kegiatan_table',5);
INSERT INTO migrations VALUES (13,'2024_08_06_133235_metode_table',6);
INSERT INTO migrations VALUES (14,'2024_08_05_101342_program_table',7);
INSERT INTO migrations VALUES (15,'2024_08_15_095040_galeri_table',8);
INSERT INTO profil VALUES ('1','2024-08-03 00:46:01','2024-08-13 12:53:16','                                                                                                Litera diambil dari kata literasi yang berasal dari bahasa Latin yaitu ''literatus", berarti orang yang <span "style=background-color: rgb(255, 255, 0);">belajar.</span> Literasi adalah istilah umum yang merujuk kepada serangkaian kemampuan dan keterampilan individu dalam membaca, menulis, berbicara, mengthitung, dan memecahkan masalah pada tingkat keahlian tertentu yang diperlukan dalam kehidupan (sumber: Wikipedia). Maka dari itu, kami memilih nama "Litera" dengan harapan siswa/i bimbingan kami dapat menjadi individu yang baik dalam segala aspek pembelajaran dan dapat meraih apa yang dicita-citakan.
                            
                            
                            ','                                Pada awal Desember 2014, kami dengan bangga meluncurkan lembaga bimbingan belajar yang kami namakan "Bina Delta," yang dimulai dengan hanya tiga kelas. Seiring dengan pesatnya pertumbuhan jumlah pendaftar, kami memutuskan untuk melakukan ekspansi. Pada Februari 2017, kami pindah ke gedung baru yang berlokasi di daerah Simpang 5, yang memungkinkan kami untuk meningkatkan kapasitas kami menjadi tujuh kelas. Langkah ini merupakan bagian dari komitmen kami untuk menyediakan fasilitas yang lebih baik dan mendukung kebutuhan belajar yang semakin berkembang.

Memasuki tahun 2024, kami telah mengambil langkah strategis dengan melakukan rebranding dari "Bina Delta" menjadi "Litera." Rebranding ini bertujuan untuk mencerminkan evolusi kami menuju manajemen yang lebih solid, inovatif, dan mandiri. Dengan nama baru ini, kami berharap dapat memperkuat visi kami dalam memberikan layanan bimbingan yang <b>berkualitas tinggi</b> dan relevan dengan kebutuhan pelajar masa kini.
                            ','<ul><li style="TEXT-align: center; ">                                    Menjadikan siswa/i berprestasi dari segala aspek pembelajaran dengan berimajinasi, kreatifitas, dan memiliki kepribadian yang baik dalam bersosialisasi dan komunikasi.
                                </li></ul>','1. Kelas Praktik
Kelas praktik kami dirancang untuk memberikan pengalaman langsung dan mendalam dalam penerapan materi akademis yang tidak dilakukan din sekolah. Dengan berfokus pada aspek praktik, siswa dapat lebih memahami dan menguasai keterampilan yang dibutuhkan melalui simulasi dan latihan yang relevan dengan dunia nyata. Hal ini tidak hanya meningkatkan pemahaman konseptual tetapi juga mempersiapkan siswa untuk menghadapi tantangan di lapangan.

2. Kelas Pendidikan Karakter
Kami percaya bahwa pendidikan tidak hanya mencakup aspek akademis tetapi juga pembentukan karakter. Kelas pendidikan karakter kami bertujuan untuk mengembangkan nilai-nilai positif seperti percaya diri, tanggung jawab, dan empati. Dengan pendekatan yang terstruktur namun menyenangkan, kami berupaya untuk membentuk siswa yang tidak hanya cerdas secara akademis tetapi juga unggul dalam moral dan etika.

3. Metode Pembelajaran Outdoor Learning
Metode Pembelajaran Outdoor Learning memungkinkan siswa untuk belajar di luar ruang kelas. Dengan menggunakan lingkungan sekitar sebagai bagian dari proses pembelajaran, siswa dapat secara langsung mengalami konsep yang dipelajari, berinteraksi dengan alam, dan mengembangkan keterampilan. Metode ini mendorong pembelajaran yang lebih dinamis dan menyenangkan, serta mendorong eksplorasi dan kreativitas.

4. Kelas Pembelajaran Kelompok Mandiri

Kelas Belajar Kelompok Mandiri adalah metode pembelajaran di mana siswa bekerja dalam kelompok kecil untuk me-review dan membahas materi pelajaran secara bersama-sama. Dalam kelas ini, siswa berperan sebagai pengajar bagi teman sebaya mereka, menyampaikan materi dan menjelaskan konsep-konsep yang telah dipelajari. Metode ini memanfaatkan interaksi antar siswa untuk mempercepat proses pemahaman dan penguasaan materi, serta mendorong siswa bekerja sama dalam kelompok kecil dengan bimbingan minimal dari guru.','https://www.instagram.com/','https://web.whatsapp.com/','Jl. KH. Mas’ud Ruko Simpang Lima (depan NICESO), Sasak Tiga Tridaya Saktii, Tambun Selatan, Kab. Bekasi Jawa Barat 14510','<p>                                    </p><p><br></p><p>1. Menyediakan tutor berkualitas tinggi yang ideal untuk mendukung pencapaian akademik siswa<span style="background-color: rgb(249 250 251 / var(--tw-bg-opacity));">.</span></p><p><span style="background-color: rgb(249 250 251 / var(--tw-bg-opacity));"><br></span></p><p>
</p><p>2. Menyajikan materi pembelajaran dengan cara yang mudah dipahami dan cepat diserap oleh siswa.</p><p><br></p><p>
</p><p>3. Memberikan layanan yang nyaman dan ramah, menciptakan suasana belajar yang menyerupai kenyamanan belajar di rumah.
4. Menawarkan konsultasi terkait materi pelajaran dan tugas rumah untuk mendukung pemahaman siswa.
                                </p>');
INSERT INTO program VALUES (4,'2024-08-10 05:44:40','2024-08-10 07:49:58','Kelas kecil (maks. 15 orang)','SMP');
INSERT INTO program VALUES (5,'2024-08-10 05:44:54','2024-08-10 05:44:54','Kelas 7-8: 2-3x pert/minggu','SMP');
INSERT INTO program VALUES (6,'2024-08-10 05:45:07','2024-08-10 05:45:07','Kelas 9: 4x pert/minggu','SMP');
INSERT INTO program VALUES (7,'2024-08-10 05:45:21','2024-08-10 05:45:21','Wifi Penunjang Pembelajaran','SMP');
INSERT INTO program VALUES (8,'2024-08-10 05:45:30','2024-08-10 05:45:30','Konsultasi PR Online','SMP');
INSERT INTO program VALUES (9,'2024-08-10 05:45:43','2024-08-10 05:45:43','Jadwal belajar intensif','SMP');
INSERT INTO program VALUES (10,'2024-08-10 05:45:53','2024-08-10 05:45:53','Kelas kecil (maks. 15 orang)','SMA');
INSERT INTO program VALUES (11,'2024-08-10 05:46:13','2024-08-10 05:46:13','Kelas 10-11 : 2-4x pert/minggu','SMA');
INSERT INTO program VALUES (12,'2024-08-10 05:46:23','2024-08-10 05:46:23','Kelas 12 : 5-6x pert/minggu','SMA');
INSERT INTO program VALUES (13,'2024-08-10 05:46:31','2024-08-10 05:46:31','Wifi Penunjang Pembelajaran','SMA');
INSERT INTO program VALUES (14,'2024-08-10 05:46:38','2024-08-10 05:46:38','Konsultasi PR Online','SMA');
INSERT INTO program VALUES (15,'2024-08-10 05:46:44','2024-08-10 05:46:50','Jadwal belajar intensif','SMA');
INSERT INTO program VALUES (16,'2024-08-10 05:47:01','2024-08-10 05:47:01','Konsultasi PTN','SMA');
INSERT INTO program VALUES (17,'2024-08-10 05:47:13','2024-08-10 05:47:13','Konsultasi Beasiswa','SMA');
INSERT INTO sessions VALUES ('Gyni8psYwxtNwqGag0LWZT1pbIkBeQBPfPPMvnX6',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRHk1N0dJcTFhT2czWW5pOWJaRzFnRU1maUlYbVEwV01vOEQ5aUZCWSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vYmltYmVsLXByb2plY3QtMS50ZXN0L2FkbWluL2dhbGVyaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkU1JFbG11QTZ5OGdLZFdhQTJYb0hSTzFsMjdJMG9ucHMwcUd1VWVSRjgzUWVCOHJ2TGNzSDIiO30=',1723770312);
INSERT INTO staff VALUES (1,'John Doe','Bebas','Bebas-Ex','2024-08-03 00:46:01','2024-08-03 00:46:01','1722645961.jpg');
INSERT INTO staff VALUES (11,'John Doe','Management','Management','2024-08-13 11:37:33','2024-08-13 11:37:33','1723549052.png');
INSERT INTO staff VALUES (12,'John Doe','Management','Management','2024-08-13 12:32:40','2024-08-13 12:32:40','1723552360.png');
INSERT INTO staff VALUES (14,'John Doexx','Management','Management','2024-08-15 12:55:55','2024-08-15 12:55:55','1723726555.png');
INSERT INTO testi VALUES (1,'Yovanetha Maria Margareth','SMAN 2 Tambun Selatan','Universitas Pendidikan Indonesia','Jurusan Keperawatan','Tentor-tentor di Bimbel Litera seru-seru bingitssssss','2024-08-10 09:23:22','2024-08-10 09:23:22','1723281802.png');
INSERT INTO testi VALUES (2,'Abdurafi Zaidan Ayyasy','SMAN 2 Tambun Selatan','Universitas Brawijaya','Jurusan Matematika','Alhamdulillah selama bergabung bersama Bimbel Litera aku selalu termotivasi dalam belajar, dan terbantu untuk memahami pelajaran lebih baik, ini semua karena lingkungan belajarnya yang sangat mendukung dibimbing langsung oleh tentor-tentor yang profesional hebat dalam mengajar dan menyesuaikan diri dengan karakter siswa','2024-08-10 09:23:53','2024-08-10 09:23:53','1723281833.png');
INSERT INTO testi VALUES (3,'Indira Galur Shauma Putri','SMAN 4 Tambun Selatan','Institut Pertanian Bogor','Komunikasi Digital dan Media','Menurut aku les di Litera bener bener seru banget karena kita bisa deket sama mentor mentornya jadi belajar juga lebih asik dan tidak membosankan. Tidak hanya itu kita juga di bimbing untuk masuk ke jurusan dan universitas yang sesuai dengan keiningan kita.','2024-08-10 09:24:17','2024-08-10 09:24:17','1723281857.png');
INSERT INTO testi VALUES (4,'Jenny Dee','SMAN 2 Lampung','Institut Teknologi Bandung','Teknik Elektro','Pelajaran dan pengalaman di program teknik elektro sangat mempersiapkan saya untuk tantangan di dunia profesional.','2024-08-10 09:24:59','2024-08-10 09:24:59','1723281899.png');
INSERT INTO users VALUES (1,'RADOT YOHANES NABABAN','radot.121140108@student.itera.ac.id',NULL,'$2y$12$SRElmuA6y8gKdWaA2XoHRO1l27I0onps0qGuUeRF83QeB8rvLcsH2','8TlMVbmRhAPHvkWm9yeJcn7myVsbjt68auReOrjAzjVmVXd650guCYgfpPCG',NULL,NULL,'2024-08-01 15:37:10','2024-08-15 14:18:52',NULL,NULL,NULL);
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" ON "failed_jobs" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "jobs_queue_index" ON "jobs" (
	"queue"
);
CREATE UNIQUE INDEX IF NOT EXISTS "personal_access_tokens_token_unique" ON "personal_access_tokens" (
	"token"
);
CREATE INDEX IF NOT EXISTS "personal_access_tokens_tokenable_type_tokenable_id_index" ON "personal_access_tokens" (
	"tokenable_type",
	"tokenable_id"
);
CREATE INDEX IF NOT EXISTS "sessions_last_activity_index" ON "sessions" (
	"last_activity"
);
CREATE INDEX IF NOT EXISTS "sessions_user_id_index" ON "sessions" (
	"user_id"
);
CREATE UNIQUE INDEX IF NOT EXISTS "team_invitations_team_id_email_unique" ON "team_invitations" (
	"team_id",
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "team_user_team_id_user_id_unique" ON "team_user" (
	"team_id",
	"user_id"
);
CREATE INDEX IF NOT EXISTS "teams_user_id_index" ON "teams" (
	"user_id"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
COMMIT;
