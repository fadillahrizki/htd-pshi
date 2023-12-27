-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pshi
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bpjs_kesehatans`
--

DROP TABLE IF EXISTS `bpjs_kesehatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bpjs_kesehatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `jumlah_tenaga_kerja_laki_laki` int NOT NULL,
  `jumlah_tenaga_kerja_perempuan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bpjs_kesehatans_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `bpjs_kesehatans_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bpjs_kesehatans`
--

LOCK TABLES `bpjs_kesehatans` WRITE;
/*!40000 ALTER TABLE `bpjs_kesehatans` DISABLE KEYS */;
INSERT INTO `bpjs_kesehatans` VALUES (3,3,1,2,'2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `bpjs_kesehatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bpjs_ketenagakerjaans`
--

DROP TABLE IF EXISTS `bpjs_ketenagakerjaans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bpjs_ketenagakerjaans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `no_bpjs_ketenagakerjaan_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bpjs_ketenagakerjaans_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `bpjs_ketenagakerjaans_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bpjs_ketenagakerjaans`
--

LOCK TABLES `bpjs_ketenagakerjaans` WRITE;
/*!40000 ALTER TABLE `bpjs_ketenagakerjaans` DISABLE KEYS */;
INSERT INTO `bpjs_ketenagakerjaans` VALUES (1,3,'12345678','2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `bpjs_ketenagakerjaans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cutis`
--

DROP TABLE IF EXISTS `cutis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cutis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `cuti_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cutis_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `cutis_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cutis`
--

LOCK TABLES `cutis` WRITE;
/*!40000 ALTER TABLE `cutis` DISABLE KEYS */;
INSERT INTO `cutis` VALUES (1,3,1,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(2,3,2,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(3,3,3,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(4,3,4,'2023-12-21 05:01:02','2023-12-21 05:01:02');
/*!40000 ALTER TABLE `cutis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_ketenagakerjaans`
--

DROP TABLE IF EXISTS `data_ketenagakerjaans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_ketenagakerjaans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `waktu_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_upah_terendah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_upah_tertinggi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktur_skala_upah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_ketenagakerjaans_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `data_ketenagakerjaans_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_ketenagakerjaans`
--

LOCK TABLES `data_ketenagakerjaans` WRITE;
/*!40000 ALTER TABLE `data_ketenagakerjaans` DISABLE KEYS */;
INSERT INTO `data_ketenagakerjaans` VALUES (3,3,'01:00','3000','6000','Ada','2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `data_ketenagakerjaans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_umums`
--

DROP TABLE IF EXISTS `data_umums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_umums` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemilik_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendirian_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_akte_pendirian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kepemilikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_umums_user_id_foreign` (`user_id`),
  CONSTRAINT `data_umums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_umums`
--

LOCK TABLES `data_umums` WRITE;
/*!40000 ALTER TABLE `data_umums` DISABLE KEYS */;
INSERT INTO `data_umums` VALUES (3,4,'Perusahaan 1','Tanjung Balai','082369378823','perusahaan1@mail.com','Usaha','Ozy','Tanjung Balai','Ozy','AKTE/01/2003','Publik','Swasta','Waiting','2023-12-21 05:01:02','2023-12-26 19:39:04');
/*!40000 ALTER TABLE `data_umums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fasilitas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `fasilitas_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fasilitas_data_umum_id_foreign` (`data_umum_id`),
  KEY `fasilitas_fasilitas_id_foreign` (`fasilitas_id`),
  CONSTRAINT `fasilitas_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fasilitas_fasilitas_id_foreign` FOREIGN KEY (`fasilitas_id`) REFERENCES `ref_fasilitas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas`
--

LOCK TABLES `fasilitas` WRITE;
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
INSERT INTO `fasilitas` VALUES (15,3,1,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(16,3,3,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(18,3,8,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(19,3,10,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(20,3,12,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(21,3,14,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(22,3,5,NULL,NULL),(23,3,7,NULL,NULL);
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas_kesejahteraans`
--

DROP TABLE IF EXISTS `fasilitas_kesejahteraans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fasilitas_kesejahteraans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `perumahan_pekerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `fasilitas_ibadah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `fasilitas_untuk_disabilitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `koperasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `fasilitas_laktasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `ruang_merokok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `armada_antar_jemput` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fasilitas_kesejahteraans_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `fasilitas_kesejahteraans_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas_kesejahteraans`
--

LOCK TABLES `fasilitas_kesejahteraans` WRITE;
/*!40000 ALTER TABLE `fasilitas_kesejahteraans` DISABLE KEYS */;
/*!40000 ALTER TABLE `fasilitas_kesejahteraans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas_keselamatan_kesehatan_kerjas`
--

DROP TABLE IF EXISTS `fasilitas_keselamatan_kesehatan_kerjas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fasilitas_keselamatan_kesehatan_kerjas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `peralatanan_perlindungan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `penyelenggaraan_makanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `pelayanan_kesehatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `ruang_pk3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `kotak_p3k` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `alat_pelindung_diri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `penanganan_limbah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fasilitas_keselamatan_kesehatan_kerjas_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `fasilitas_keselamatan_kesehatan_kerjas_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas_keselamatan_kesehatan_kerjas`
--

LOCK TABLES `fasilitas_keselamatan_kesehatan_kerjas` WRITE;
/*!40000 ALTER TABLE `fasilitas_keselamatan_kesehatan_kerjas` DISABLE KEYS */;
/*!40000 ALTER TABLE `fasilitas_keselamatan_kesehatan_kerjas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jaminan_sosials`
--

DROP TABLE IF EXISTS `jaminan_sosials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jaminan_sosials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `jamsos_id` bigint unsigned NOT NULL,
  `jumlah_lk` int NOT NULL,
  `jumlah_pr` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jaminan_sosials_data_umum_id_foreign` (`data_umum_id`),
  KEY `jaminan_sosials_jamsos_id_foreign` (`jamsos_id`),
  CONSTRAINT `jaminan_sosials_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `jaminan_sosials_jamsos_id_foreign` FOREIGN KEY (`jamsos_id`) REFERENCES `ref_jaminan_sosials` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jaminan_sosials`
--

LOCK TABLES `jaminan_sosials` WRITE;
/*!40000 ALTER TABLE `jaminan_sosials` DISABLE KEYS */;
INSERT INTO `jaminan_sosials` VALUES (11,3,1,1,2,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(12,3,2,3,4,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(13,3,3,5,6,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(14,3,4,7,8,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(15,3,5,9,100,'2023-12-21 05:01:02','2023-12-21 05:01:02');
/*!40000 ALTER TABLE `jaminan_sosials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kasus_perselisihans`
--

DROP TABLE IF EXISTS `kasus_perselisihans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kasus_perselisihans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `pemutusan_hubungan_kerja` int NOT NULL,
  `serikat_pekerja_buruh` int NOT NULL,
  `mogok_kerja` int NOT NULL,
  `lock_out` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kasus_perselisihans_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `kasus_perselisihans_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kasus_perselisihans`
--

LOCK TABLES `kasus_perselisihans` WRITE;
/*!40000 ALTER TABLE `kasus_perselisihans` DISABLE KEYS */;
INSERT INTO `kasus_perselisihans` VALUES (1,3,11,12,13,14,'2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `kasus_perselisihans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kondisi_tenaga_kerjas`
--

DROP TABLE IF EXISTS `kondisi_tenaga_kerjas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kondisi_tenaga_kerjas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `perangkat_hubungan_industri_id` bigint unsigned NOT NULL,
  `sd` json NOT NULL,
  `sltp` json NOT NULL,
  `sma` json NOT NULL,
  `d1` json NOT NULL,
  `d2` json NOT NULL,
  `d3` json NOT NULL,
  `d4` json NOT NULL,
  `s1` json NOT NULL,
  `s2` json NOT NULL,
  `s3` json NOT NULL,
  `pkwt` json NOT NULL,
  `pkwtt` json NOT NULL,
  `penyandang_disabilitas` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kondisi_tenaga_kerjas_perangkat_hubungan_industri_id_foreign` (`perangkat_hubungan_industri_id`),
  CONSTRAINT `kondisi_tenaga_kerjas_perangkat_hubungan_industri_id_foreign` FOREIGN KEY (`perangkat_hubungan_industri_id`) REFERENCES `perangkat_hubungan_industris` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kondisi_tenaga_kerjas`
--

LOCK TABLES `kondisi_tenaga_kerjas` WRITE;
/*!40000 ALTER TABLE `kondisi_tenaga_kerjas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kondisi_tenaga_kerjas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kondisi_tks`
--

DROP TABLE IF EXISTS `kondisi_tks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kondisi_tks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `lulusan_id` bigint unsigned NOT NULL,
  `jumlah_lk` int NOT NULL,
  `jumlah_pr` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kondisi_tks_data_umum_id_foreign` (`data_umum_id`),
  KEY `kondisi_tks_lulusan_id_foreign` (`lulusan_id`),
  CONSTRAINT `kondisi_tks_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kondisi_tks_lulusan_id_foreign` FOREIGN KEY (`lulusan_id`) REFERENCES `ref_lulusans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kondisi_tks`
--

LOCK TABLES `kondisi_tks` WRITE;
/*!40000 ALTER TABLE `kondisi_tks` DISABLE KEYS */;
INSERT INTO `kondisi_tks` VALUES (14,3,1,10,20,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(15,3,2,30,40,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(16,3,3,50,60,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(17,3,4,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(18,3,5,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(19,3,6,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(20,3,7,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(21,3,8,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(22,3,9,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(23,3,10,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(24,3,11,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(25,3,12,0,0,'2023-12-21 05:01:02','2023-12-21 05:01:02'),(26,3,13,1,0,'2023-12-21 05:01:02','2023-12-21 05:01:02');
/*!40000 ALTER TABLE `kondisi_tks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2023_12_16_110956_add_role_to_users_table',1),(5,'2023_12_16_113149_add_status_to_users_table',1),(6,'2023_12_16_204309_create_data_umums_table',1),(7,'2023_12_16_205054_create_data_ketenagakerjaans_table',1),(8,'2023_12_16_205112_create_sistem_pembayaran_upahs_table',1),(9,'2023_12_16_205900_create_bpjs_kesehatans_table',1),(10,'2023_12_16_210055_create_bpjs_ketenagakerjaans_table',1),(11,'2023_12_16_210150_create_program_jaminan_sosials_table',1),(12,'2023_12_16_210532_create_perangkat_hubungan_industris_table',1),(13,'2023_12_16_210729_create_kasus_perselisihans_table',1),(14,'2023_12_16_214555_create_kondisi_tenaga_kerjas_table',1),(15,'2023_12_17_041406_create_pelaksanaan_cutis_table',1),(16,'2023_12_18_072415_create_fasilitas_keselamatan_kesehatan_kerjas_table',1),(17,'2023_12_18_072515_create_fasilitas_kesejahteraans_table',1),(18,'2023_12_20_140826_create_ref_kategori_fasilitas_table',1),(19,'2023_12_20_141734_create_ref_fasilitas_table',1),(20,'2023_12_20_141748_create_ref_jaminan_sosials_table',1),(21,'2023_12_20_141802_create_ref_lulusans_table',1),(22,'2023_12_20_141813_create_ref_cutis_table',1),(23,'2023_12_20_142140_create_fasilitas_table',1),(24,'2023_12_20_142152_create_jaminan_sosials_table',1),(25,'2023_12_20_142407_create_kondisi_tks_table',1),(26,'2023_12_20_142418_create_cutis_table',1),(29,'2023_12_24_182530_create_tickets_table',2),(30,'2023_12_24_182643_create_ticket_replies_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelaksanaan_cutis`
--

DROP TABLE IF EXISTS `pelaksanaan_cutis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelaksanaan_cutis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `tahunan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `haid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `melahirkan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `sakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pelaksanaan_cutis_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `pelaksanaan_cutis_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelaksanaan_cutis`
--

LOCK TABLES `pelaksanaan_cutis` WRITE;
/*!40000 ALTER TABLE `pelaksanaan_cutis` DISABLE KEYS */;
/*!40000 ALTER TABLE `pelaksanaan_cutis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perangkat_hubungan_industris`
--

DROP TABLE IF EXISTS `perangkat_hubungan_industris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perangkat_hubungan_industris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_umum_id` bigint unsigned NOT NULL,
  `perangkat_hubungan_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perjanjian_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lks_bipartite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serikat_pekerja_buruh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_serikat_pekerja_buruh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `perangkat_hubungan_industris_data_umum_id_foreign` (`data_umum_id`),
  CONSTRAINT `perangkat_hubungan_industris_data_umum_id_foreign` FOREIGN KEY (`data_umum_id`) REFERENCES `data_umums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perangkat_hubungan_industris`
--

LOCK TABLES `perangkat_hubungan_industris` WRITE;
/*!40000 ALTER TABLE `perangkat_hubungan_industris` DISABLE KEYS */;
INSERT INTO `perangkat_hubungan_industris` VALUES (1,3,'Peraturan Perusahaan','Ada','Ada','Ada','Oke Buruh','2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `perangkat_hubungan_industris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_jaminan_sosials`
--

DROP TABLE IF EXISTS `program_jaminan_sosials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `program_jaminan_sosials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bpjs_ketenagakerjaan_id` bigint unsigned NOT NULL,
  `program_jkk` json NOT NULL,
  `program_jht` json NOT NULL,
  `program_jkm` json NOT NULL,
  `program_jp` json NOT NULL,
  `program_jkp` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `program_jaminan_sosials_bpjs_ketenagakerjaan_id_foreign` (`bpjs_ketenagakerjaan_id`),
  CONSTRAINT `program_jaminan_sosials_bpjs_ketenagakerjaan_id_foreign` FOREIGN KEY (`bpjs_ketenagakerjaan_id`) REFERENCES `bpjs_ketenagakerjaans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_jaminan_sosials`
--

LOCK TABLES `program_jaminan_sosials` WRITE;
/*!40000 ALTER TABLE `program_jaminan_sosials` DISABLE KEYS */;
/*!40000 ALTER TABLE `program_jaminan_sosials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_cutis`
--

DROP TABLE IF EXISTS `ref_cutis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_cutis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_cutis`
--

LOCK TABLES `ref_cutis` WRITE;
/*!40000 ALTER TABLE `ref_cutis` DISABLE KEYS */;
INSERT INTO `ref_cutis` VALUES (1,'Cuti Tahunan',NULL,NULL),(2,'Cuti Haid',NULL,NULL),(3,'Cuti Melahirkan',NULL,NULL),(4,'Cuti Sakit',NULL,NULL);
/*!40000 ALTER TABLE `ref_cutis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_fasilitas`
--

DROP TABLE IF EXISTS `ref_fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_fasilitas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint unsigned NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ref_fasilitas_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `ref_fasilitas_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `ref_kategori_fasilitas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_fasilitas`
--

LOCK TABLES `ref_fasilitas` WRITE;
/*!40000 ALTER TABLE `ref_fasilitas` DISABLE KEYS */;
INSERT INTO `ref_fasilitas` VALUES (1,1,'Peralatan Perlindungan',NULL,NULL),(2,1,'Penyelenggaraan Makanan',NULL,NULL),(3,1,'Pelayanan Kesehatan',NULL,NULL),(4,1,'Ruang PK3',NULL,NULL),(5,1,'Kotak P3K',NULL,NULL),(6,1,'Alat Pelindung Diri',NULL,NULL),(7,1,'Penanganan Limbah',NULL,NULL),(8,2,'Perumahan Pekerja',NULL,NULL),(9,2,'Fasilitas Ibadah',NULL,NULL),(10,2,'Fasilitas untuk Disabilitas',NULL,NULL),(11,2,'Koperasi',NULL,NULL),(12,2,'Fasilitas Laktasi',NULL,NULL),(13,2,'Ruang Merokok',NULL,NULL),(14,2,'Armada Antar Jemput',NULL,NULL);
/*!40000 ALTER TABLE `ref_fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jaminan_sosials`
--

DROP TABLE IF EXISTS `ref_jaminan_sosials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_jaminan_sosials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jaminan_sosials`
--

LOCK TABLES `ref_jaminan_sosials` WRITE;
/*!40000 ALTER TABLE `ref_jaminan_sosials` DISABLE KEYS */;
INSERT INTO `ref_jaminan_sosials` VALUES (1,'Program JKK',NULL,NULL),(2,'Program JHT',NULL,NULL),(3,'Program JKM',NULL,NULL),(4,'Program JP',NULL,NULL),(5,'Program JKP',NULL,NULL);
/*!40000 ALTER TABLE `ref_jaminan_sosials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_kategori_fasilitas`
--

DROP TABLE IF EXISTS `ref_kategori_fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_kategori_fasilitas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_kategori_fasilitas`
--

LOCK TABLES `ref_kategori_fasilitas` WRITE;
/*!40000 ALTER TABLE `ref_kategori_fasilitas` DISABLE KEYS */;
INSERT INTO `ref_kategori_fasilitas` VALUES (1,'Fasilitas Keselamatan dan Kesehatan Kerja',NULL,NULL),(2,'Fasilitas Kesejahteraan',NULL,NULL);
/*!40000 ALTER TABLE `ref_kategori_fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_lulusans`
--

DROP TABLE IF EXISTS `ref_lulusans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_lulusans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_lulusans`
--

LOCK TABLES `ref_lulusans` WRITE;
/*!40000 ALTER TABLE `ref_lulusans` DISABLE KEYS */;
INSERT INTO `ref_lulusans` VALUES (1,'SD',NULL,NULL),(2,'SLTP',NULL,NULL),(3,'SMA',NULL,NULL),(4,'D1',NULL,NULL),(5,'D2',NULL,NULL),(6,'D3',NULL,NULL),(7,'D4',NULL,NULL),(8,'S1',NULL,NULL),(9,'S2',NULL,NULL),(10,'S3',NULL,NULL),(11,'PKWT',NULL,NULL),(12,'PKWTT',NULL,NULL),(13,'Penyandang Disabilitas',NULL,NULL);
/*!40000 ALTER TABLE `ref_lulusans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistem_pembayaran_upahs`
--

DROP TABLE IF EXISTS `sistem_pembayaran_upahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sistem_pembayaran_upahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data_ketenagakerjaan_id` bigint unsigned NOT NULL,
  `harian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sistem_pembayaran_upahs_data_ketenagakerjaan_id_foreign` (`data_ketenagakerjaan_id`),
  CONSTRAINT `sistem_pembayaran_upahs_data_ketenagakerjaan_id_foreign` FOREIGN KEY (`data_ketenagakerjaan_id`) REFERENCES `data_ketenagakerjaans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistem_pembayaran_upahs`
--

LOCK TABLES `sistem_pembayaran_upahs` WRITE;
/*!40000 ALTER TABLE `sistem_pembayaran_upahs` DISABLE KEYS */;
INSERT INTO `sistem_pembayaran_upahs` VALUES (3,3,'10','11','12','2023-12-21 05:01:02','2023-12-26 19:54:50');
/*!40000 ALTER TABLE `sistem_pembayaran_upahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_replies`
--

DROP TABLE IF EXISTS `ticket_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ticket_replies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint unsigned NOT NULL,
  `author_id` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_replies_author_id_foreign` (`author_id`),
  CONSTRAINT `ticket_replies_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_replies`
--

LOCK TABLES `ticket_replies` WRITE;
/*!40000 ALTER TABLE `ticket_replies` DISABLE KEYS */;
INSERT INTO `ticket_replies` VALUES (1,1,1,'ini komentar','2023-12-24 18:57:36','2023-12-24 18:57:36');
/*!40000 ALTER TABLE `ticket_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,7,'butuh panduan pengisian formulir','tolong admin, kasih pelatihan pengisian formulir','CLOSE','LOW','2023-12-24 11:39:39','2023-12-26 21:24:43');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Perusahaan',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Waiting',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@admin.com',NULL,'$2y$10$NMzWcelUyCRmKBlbWIDXaeNrWtnoGeFJ4I3hjZiVB8BEd43zdZMJ6',NULL,'2023-12-20 22:33:12','2023-12-20 22:33:12','Admin','Verified'),(4,'Perusahaan 1','perusahaan1@mail.com',NULL,'$2y$10$in1srvdbLddMIgD20VB71ODKUSK8Luv44Dy70SZOSFP7tOwHTrhmm',NULL,'2023-12-21 05:01:02','2023-12-24 09:02:10','Perusahaan','Verified'),(7,'Testing','testing@mail.com',NULL,'$2y$10$uaGoVyQD4x2iHOUKZFn3QOcQbSIa9cJnzl.E9QSKqXxriS5Olx/ge',NULL,'2023-12-24 11:23:03','2023-12-24 11:23:03','Perusahaan','Verified');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-27 15:21:29
