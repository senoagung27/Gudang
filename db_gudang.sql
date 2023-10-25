-- MySQL dump 10.13  Distrib 8.0.33, for macos13 (arm64)
--
-- Host: localhost    Database: gudang
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `akses_models`
--

DROP TABLE IF EXISTS `akses_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `akses_models` (
  `akses_id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othermenu_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`akses_id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akses_models`
--

LOCK TABLES `akses_models` WRITE;
/*!40000 ALTER TABLE `akses_models` DISABLE KEYS */;
INSERT INTO `akses_models` VALUES (5,'1667444041',NULL,NULL,'2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(6,'1667444041',NULL,NULL,'2','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(7,'1667444041',NULL,NULL,'2','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(8,'1667444041',NULL,NULL,'2','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(9,'1667444041',NULL,NULL,'3','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(10,'1667444041',NULL,NULL,'3','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(11,'1667444041',NULL,NULL,'3','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(12,'1667444041',NULL,NULL,'3','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(14,NULL,NULL,'1','2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(19,NULL,NULL,'2','2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(20,NULL,NULL,'2','2','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(21,NULL,NULL,'2','2','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(22,NULL,NULL,'2','2','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(27,NULL,NULL,'3','2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(28,NULL,NULL,'3','2','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(29,NULL,NULL,'3','2','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(30,NULL,NULL,'3','2','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(35,NULL,NULL,'4','2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(36,NULL,NULL,'4','2','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(37,NULL,NULL,'4','2','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(38,NULL,NULL,'4','2','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(47,NULL,NULL,'6','2','view','2023-10-24 21:50:58','2023-10-24 21:50:58'),(48,NULL,NULL,'6','2','create','2023-10-24 21:50:58','2023-10-24 21:50:58'),(49,NULL,NULL,'6','2','update','2023-10-24 21:50:58','2023-10-24 21:50:58'),(50,NULL,NULL,'6','2','delete','2023-10-24 21:50:58','2023-10-24 21:50:58'),(63,'1667444041',NULL,NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(64,'1667444041',NULL,NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(65,'1667444041',NULL,NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(66,'1667444041',NULL,NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(67,'1668509889',NULL,NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(68,'1668509889',NULL,NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(69,'1668509889',NULL,NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(70,'1668509889',NULL,NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(71,'1669390641',NULL,NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(72,'1669390641',NULL,NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(73,'1669390641',NULL,NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(74,'1669390641',NULL,NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(75,'1668510437',NULL,NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(76,'1668510437',NULL,NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(77,'1668510437',NULL,NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(78,'1668510437',NULL,NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(79,'1668510568',NULL,NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(80,'1668510568',NULL,NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(81,'1668510568',NULL,NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(82,'1668510568',NULL,NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(83,NULL,'9',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(84,NULL,'9',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(85,NULL,'9',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(86,NULL,'9',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(87,NULL,'17',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(88,NULL,'17',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(89,NULL,'17',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(90,NULL,'17',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(91,NULL,'21',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(92,NULL,'21',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(93,NULL,'21',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(94,NULL,'21',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(95,NULL,'10',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(96,NULL,'10',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(97,NULL,'10',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(98,NULL,'10',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(99,NULL,'18',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(100,NULL,'18',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(101,NULL,'18',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(102,NULL,'18',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(103,NULL,'22',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(104,NULL,'22',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(105,NULL,'22',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(106,NULL,'22',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(107,NULL,'19',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(108,NULL,'19',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(109,NULL,'19',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(110,NULL,'19',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(111,NULL,'23',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(112,NULL,'23',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(113,NULL,'23',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(114,NULL,'23',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(115,NULL,'20',NULL,'1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(116,NULL,'20',NULL,'1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(117,NULL,'20',NULL,'1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(118,NULL,'20',NULL,'1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(119,NULL,NULL,'1','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(120,NULL,NULL,'2','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(121,NULL,NULL,'3','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(122,NULL,NULL,'4','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(123,NULL,NULL,'5','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(124,NULL,NULL,'6','1','view','2023-10-24 22:32:57','2023-10-24 22:32:57'),(125,NULL,NULL,'1','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(126,NULL,NULL,'2','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(127,NULL,NULL,'3','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(128,NULL,NULL,'4','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(129,NULL,NULL,'5','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(130,NULL,NULL,'6','1','create','2023-10-24 22:32:57','2023-10-24 22:32:57'),(131,NULL,NULL,'1','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(132,NULL,NULL,'2','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(133,NULL,NULL,'3','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(134,NULL,NULL,'4','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(135,NULL,NULL,'5','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(136,NULL,NULL,'6','1','update','2023-10-24 22:32:57','2023-10-24 22:32:57'),(137,NULL,NULL,'1','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(138,NULL,NULL,'2','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(139,NULL,NULL,'3','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(140,NULL,NULL,'4','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(141,NULL,NULL,'5','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57'),(142,NULL,NULL,'6','1','delete','2023-10-24 22:32:57','2023-10-24 22:32:57');
/*!40000 ALTER TABLE `akses_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appreance_models`
--

DROP TABLE IF EXISTS `appreance_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appreance_models` (
  `appreance_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appreance_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appreance_theme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appreance_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appreance_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appreance_sidestyle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`appreance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appreance_models`
--

LOCK TABLES `appreance_models` WRITE;
/*!40000 ALTER TABLE `appreance_models` DISABLE KEYS */;
INSERT INTO `appreance_models` VALUES (2,'1','sidebar-mini','light-mode','light-menu','header-light','default-menu','2022-11-22 02:45:47','2022-11-24 06:00:20');
/*!40000 ALTER TABLE `appreance_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang_models`
--

DROP TABLE IF EXISTS `barang_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barang_models` (
  `barang_id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenisbarang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merk_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barang_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_models`
--

LOCK TABLES `barang_models` WRITE;
/*!40000 ALTER TABLE `barang_models` DISABLE KEYS */;
INSERT INTO `barang_models` VALUES (5,'12','7','2','BRG-1669390175622','Motherboard','motherboard','4000000','0','image.png','2022-11-25 08:30:12','2022-11-25 08:30:12'),(6,'13','1','7','BRG-1669390220236','Baut 24mm','baut-24mm','1000000','0','image.png','2022-11-25 08:30:50','2022-11-29 07:30:37');
/*!40000 ALTER TABLE `barang_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangkeluar_models`
--

DROP TABLE IF EXISTS `barangkeluar_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barangkeluar_models` (
  `bk_id` int unsigned NOT NULL AUTO_INCREMENT,
  `bk_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bk_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bk_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bk_jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangkeluar_models`
--

LOCK TABLES `barangkeluar_models` WRITE;
/*!40000 ALTER TABLE `barangkeluar_models` DISABLE KEYS */;
INSERT INTO `barangkeluar_models` VALUES (2,'BK-1669811950758','BRG-1669390220236','2022-11-01','Gudang Tasikmalaya','20','2022-11-30 05:39:22','2022-11-30 05:47:14'),(3,'BK-1669812439198','BRG-1669390175622','2022-11-02','Gudang Prindapan','5','2022-11-30 05:47:39','2023-07-25 21:18:25');
/*!40000 ALTER TABLE `barangkeluar_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangmasuk_models`
--

DROP TABLE IF EXISTS `barangmasuk_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barangmasuk_models` (
  `bm_id` int unsigned NOT NULL AUTO_INCREMENT,
  `bm_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bm_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bm_jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangmasuk_models`
--

LOCK TABLES `barangmasuk_models` WRITE;
/*!40000 ALTER TABLE `barangmasuk_models` DISABLE KEYS */;
INSERT INTO `barangmasuk_models` VALUES (3,'BM-1698219761131','BRG-1669390220236','2','2023-10-24','1','2023-10-25 00:43:05','2023-10-25 00:43:05');
/*!40000 ALTER TABLE `barangmasuk_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_models`
--

DROP TABLE IF EXISTS `customer_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_models` (
  `customer_id` int unsigned NOT NULL AUTO_INCREMENT,
  `customer_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_alamat` text COLLATE utf8mb4_unicode_ci,
  `customer_notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_models`
--

LOCK TABLES `customer_models` WRITE;
/*!40000 ALTER TABLE `customer_models` DISABLE KEYS */;
INSERT INTO `customer_models` VALUES (2,'Radhian Sobarna','radhian-sobarna','Sumedang','087817379229','2022-11-25 18:36:34','2022-11-25 18:43:58');
/*!40000 ALTER TABLE `customer_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `jenis_barang_models`
--

DROP TABLE IF EXISTS `jenis_barang_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis_barang_models` (
  `jenisbarang_id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenisbarang_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbarang_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbarang_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`jenisbarang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_barang_models`
--

LOCK TABLES `jenis_barang_models` WRITE;
/*!40000 ALTER TABLE `jenis_barang_models` DISABLE KEYS */;
INSERT INTO `jenis_barang_models` VALUES (11,'Elektronik','elektronik',NULL,'2022-11-25 08:24:18','2022-11-25 08:25:39'),(12,'Perangkat Komputer','perangkat-komputer',NULL,'2022-11-25 08:26:15','2022-11-25 08:27:16'),(13,'Besi','besi',NULL,'2022-11-25 08:27:33','2022-11-25 08:27:33');
/*!40000 ALTER TABLE `jenis_barang_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int NOT NULL,
  `biaya` int NOT NULL,
  `waktu_produksi` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_komponen`
--

DROP TABLE IF EXISTS `material_komponen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material_komponen` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `material_id` int NOT NULL,
  `komponen_id` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_komponen`
--

LOCK TABLES `material_komponen` WRITE;
/*!40000 ALTER TABLE `material_komponen` DISABLE KEYS */;
/*!40000 ALTER TABLE `material_komponen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_models`
--

DROP TABLE IF EXISTS `menu_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_models` (
  `menu_id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_redirect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1669390642 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_models`
--

LOCK TABLES `menu_models` WRITE;
/*!40000 ALTER TABLE `menu_models` DISABLE KEYS */;
INSERT INTO `menu_models` VALUES (1667444041,'Dashboard','dashboard','home','/dashboard','1','1','2023-10-24 21:50:58','2023-10-24 21:50:58'),(1668509889,'Master Barang','master-barang','package','-','2','2','2022-11-15 03:58:09','2022-11-15 04:03:15'),(1668510437,'Transaksi','transaksi','repeat','-','4','2','2022-11-15 04:07:17','2022-11-25 08:37:36'),(1668510568,'Laporan','laporan','printer','-','5','2','2022-11-15 04:09:28','2022-11-25 08:37:28'),(1669390641,'Customer','customer','user','/customer','3','1','2022-11-25 08:37:21','2022-11-25 08:37:36');
/*!40000 ALTER TABLE `menu_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merk_models`
--

DROP TABLE IF EXISTS `merk_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `merk_models` (
  `merk_id` int unsigned NOT NULL AUTO_INCREMENT,
  `merk_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`merk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merk_models`
--

LOCK TABLES `merk_models` WRITE;
/*!40000 ALTER TABLE `merk_models` DISABLE KEYS */;
INSERT INTO `merk_models` VALUES (1,'Huawei','huawei',NULL,'2022-11-15 11:14:09','2022-11-15 11:14:09'),(2,'Lenovo','lenovo',NULL,'2022-11-15 11:14:33','2022-11-15 11:14:45'),(7,'Steel','steel',NULL,'2022-11-25 08:29:27','2022-11-25 08:29:27');
/*!40000 ALTER TABLE `merk_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (10,'2023_10_25_020351_create_transaksis_table',1),(11,'2023_10_25_020941_create_barangs_table',1),(29,'2014_10_12_000000_create_users_table',2),(30,'2014_10_12_100000_create_password_resets_table',2),(31,'2014_10_12_200000_add_two_factor_columns_to_users_table',2),(32,'2019_08_19_000000_create_failed_jobs_table',2),(33,'2019_12_14_000001_create_personal_access_tokens_table',2),(34,'2020_09_26_202453_create_sessions_table',2),(35,'2023_07_18_061723_create_permission_tables',2),(36,'2023_10_04_092323_create_material_table',2),(37,'2023_10_04_092519_create_material_komponen_table',2),(38,'2023_10_25_025310_create_akses_models_table',2),(39,'2023_10_25_025328_create_appreance_models_table',2),(40,'2023_10_25_025345_create_barang_models_table',2),(41,'2023_10_25_025400_create_barangkeluar_models_table',2),(42,'2023_10_25_025418_create_barangmasuk_models_table',2),(43,'2023_10_25_025439_create_customer_models_table',2),(44,'2023_10_25_025453_create_jenis_barang_models_table',2),(45,'2023_10_25_025508_create_menu_models_table',2),(46,'2023_10_25_025525_create_merk_models_table',2),(47,'2023_10_25_025546_create_role_models_table',2),(48,'2023_10_25_025558_create_satuan_models_table',2),(49,'2023_10_25_025611_create_submenu_models_table',2),(50,'2023_10_25_025630_create_web_models_table',2),(51,'2023_10_25_025647_create_user_models_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_models`
--

DROP TABLE IF EXISTS `role_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_models` (
  `role_id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_models`
--

LOCK TABLES `role_models` WRITE;
/*!40000 ALTER TABLE `role_models` DISABLE KEYS */;
INSERT INTO `role_models` VALUES (1,'Super Admin','super-admin','-','2022-11-15 03:51:04','2022-11-15 03:51:04'),(2,'Admin','admin','-','2022-11-15 03:51:04','2022-11-15 03:51:04'),(3,'Operator','operator','-','2022-11-15 03:51:04','2022-11-15 03:51:04'),(4,'Manajer','manajer',NULL,'2022-12-06 02:33:27','2022-12-06 02:33:27');
/*!40000 ALTER TABLE `role_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satuan_models`
--

DROP TABLE IF EXISTS `satuan_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `satuan_models` (
  `satuan_id` int unsigned NOT NULL AUTO_INCREMENT,
  `satuan_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`satuan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satuan_models`
--

LOCK TABLES `satuan_models` WRITE;
/*!40000 ALTER TABLE `satuan_models` DISABLE KEYS */;
INSERT INTO `satuan_models` VALUES (1,'Kg','kg',NULL,'2022-11-15 10:50:38','2022-11-24 05:39:04'),(5,'Pcs','pcs',NULL,'2022-11-24 05:39:15','2022-11-24 05:39:21'),(7,'Qty','qty',NULL,'2022-11-24 05:39:59','2022-11-24 05:39:59');
/*!40000 ALTER TABLE `satuan_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submenu_models`
--

DROP TABLE IF EXISTS `submenu_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `submenu_models` (
  `submenu_id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_redirect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submenu_models`
--

LOCK TABLES `submenu_models` WRITE;
/*!40000 ALTER TABLE `submenu_models` DISABLE KEYS */;
INSERT INTO `submenu_models` VALUES (9,'1668510437','Barang Masuk','barang-masuk','/barang-masuk','1','2022-11-15 04:08:19','2022-11-15 04:08:19'),(10,'1668510437','Barang Keluar','barang-keluar','/barang-keluar','2','2022-11-15 04:08:19','2022-11-15 04:08:19'),(17,'1668509889','Jenis','jenis','/jenisbarang','1','2022-11-24 05:06:48','2022-11-24 05:06:48'),(18,'1668509889','Satuan','satuan','/satuan','2','2022-11-24 05:06:48','2022-11-24 05:06:48'),(19,'1668509889','Merk','merk','/merk','3','2022-11-24 05:06:48','2022-11-24 05:06:48'),(20,'1668509889','Barang','barang','/barang','4','2022-11-24 05:06:48','2022-11-24 05:06:48'),(21,'1668510568','Lap Barang Masuk','lap-barang-masuk','/lap-barang-masuk','1','2022-11-30 05:56:24','2022-11-30 05:56:24'),(22,'1668510568','Lap Barang Keluar','lap-barang-keluar','/lap-barang-keluar','2','2022-11-30 05:56:24','2022-11-30 05:56:24'),(23,'1668510568','Lap Stok Barang','lap-stok-barang','/lap-stok-barang','3','2022-11-30 05:56:24','2022-11-30 05:56:24');
/*!40000 ALTER TABLE `submenu_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_models`
--

DROP TABLE IF EXISTS `user_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_models` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nmlengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_models`
--

LOCK TABLES `user_models` WRITE;
/*!40000 ALTER TABLE `user_models` DISABLE KEYS */;
INSERT INTO `user_models` VALUES (1,'1','Super Administrator','superadmin','superadmin@gmail.com','undraw_profile.svg','25d55ad283aa400af464c76d713c07ad','2023-10-24 21:50:58','2023-10-24 21:50:58'),(2,'2','Administrator','admin','admin@gmail.com','undraw_profile.svg','25d55ad283aa400af464c76d713c07ad','2023-10-24 21:50:58','2023-10-24 21:50:58'),(3,'3','Operator','operator','operator@gmail.com','undraw_profile.svg','25d55ad283aa400af464c76d713c07ad','2023-10-24 21:50:58','2023-10-24 21:50:58');
/*!40000 ALTER TABLE `user_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_models`
--

DROP TABLE IF EXISTS `web_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `web_models` (
  `web_id` int unsigned NOT NULL AUTO_INCREMENT,
  `web_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`web_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_models`
--

LOCK TABLES `web_models` WRITE;
/*!40000 ALTER TABLE `web_models` DISABLE KEYS */;
INSERT INTO `web_models` VALUES (1,'Laravel 9','laravel.svg',NULL,'2023-10-24 21:50:58','2023-10-24 21:50:58');
/*!40000 ALTER TABLE `web_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'gudang'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-25 15:25:43
