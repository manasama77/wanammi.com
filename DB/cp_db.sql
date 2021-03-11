/*
 Navicat Premium Data Transfer

 Source Server         : Maria XAMPP7
 Source Server Type    : MariaDB
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : cp_db

 Target Server Type    : MariaDB
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 19/02/2019 07:49:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for apm_admin
-- ----------------------------
DROP TABLE IF EXISTS `apm_admin`;
CREATE TABLE `apm_admin`  (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`, `username`) USING BTREE,
  UNIQUE INDEX `apm_admin_unq`(`id_admin`, `username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_admin
-- ----------------------------
INSERT INTO `apm_admin` VALUES (1, 'admin', '$2y$10$eywIxwAPga8hKAyUY8hxB.bnVOetRQFv3dcd7LSeN.okK.ygR0BiO', 'Administrator', 1);
INSERT INTO `apm_admin` VALUES (2, 'adampm', '$2y$10$66NMm8W8CBxI3Ph0vBgTRetBIK3Bah3SkPT7sDG8RBzSaqO1hwTrq', 'Adam PM', 1);

-- ----------------------------
-- Table structure for apm_city
-- ----------------------------
DROP TABLE IF EXISTS `apm_city`;
CREATE TABLE `apm_city`  (
  `id_city` int(10) NOT NULL AUTO_INCREMENT,
  `id_province` int(10) NULL DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `postal_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_city`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 502 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_city
-- ----------------------------
INSERT INTO `apm_city` VALUES (1, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Barat', '23681');
INSERT INTO `apm_city` VALUES (2, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Barat Daya', '23764');
INSERT INTO `apm_city` VALUES (3, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Besar', '23951');
INSERT INTO `apm_city` VALUES (4, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Jaya', '23654');
INSERT INTO `apm_city` VALUES (5, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Selatan', '23719');
INSERT INTO `apm_city` VALUES (6, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Singkil', '24785');
INSERT INTO `apm_city` VALUES (7, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tamiang', '24476');
INSERT INTO `apm_city` VALUES (8, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tengah', '24511');
INSERT INTO `apm_city` VALUES (9, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Tenggara', '24611');
INSERT INTO `apm_city` VALUES (10, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Timur', '24454');
INSERT INTO `apm_city` VALUES (11, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Aceh Utara', '24382');
INSERT INTO `apm_city` VALUES (12, 32, 'Sumatera Barat', 'Kabupaten', 'Agam', '26411');
INSERT INTO `apm_city` VALUES (13, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Alor', '85811');
INSERT INTO `apm_city` VALUES (14, 19, 'Maluku', 'Kota', 'Ambon', '97222');
INSERT INTO `apm_city` VALUES (15, 34, 'Sumatera Utara', 'Kabupaten', 'Asahan', '21214');
INSERT INTO `apm_city` VALUES (16, 24, 'Papua', 'Kabupaten', 'Asmat', '99777');
INSERT INTO `apm_city` VALUES (17, 1, 'Bali', 'Kabupaten', 'Badung', '80351');
INSERT INTO `apm_city` VALUES (18, 13, 'Kalimantan Selatan', 'Kabupaten', 'Balangan', '71611');
INSERT INTO `apm_city` VALUES (19, 15, 'Kalimantan Timur', 'Kota', 'Balikpapan', '76111');
INSERT INTO `apm_city` VALUES (20, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Banda Aceh', '23238');
INSERT INTO `apm_city` VALUES (21, 18, 'Lampung', 'Kota', 'Bandar Lampung', '35139');
INSERT INTO `apm_city` VALUES (22, 9, 'Jawa Barat', 'Kabupaten', 'Bandung', '40311');
INSERT INTO `apm_city` VALUES (23, 9, 'Jawa Barat', 'Kota', 'Bandung', '40111');
INSERT INTO `apm_city` VALUES (24, 9, 'Jawa Barat', 'Kabupaten', 'Bandung Barat', '40721');
INSERT INTO `apm_city` VALUES (25, 29, 'Sulawesi Tengah', 'Kabupaten', 'Banggai', '94711');
INSERT INTO `apm_city` VALUES (26, 29, 'Sulawesi Tengah', 'Kabupaten', 'Banggai Kepulauan', '94881');
INSERT INTO `apm_city` VALUES (27, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka', '33212');
INSERT INTO `apm_city` VALUES (28, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Barat', '33315');
INSERT INTO `apm_city` VALUES (29, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Selatan', '33719');
INSERT INTO `apm_city` VALUES (30, 2, 'Bangka Belitung', 'Kabupaten', 'Bangka Tengah', '33613');
INSERT INTO `apm_city` VALUES (31, 11, 'Jawa Timur', 'Kabupaten', 'Bangkalan', '69118');
INSERT INTO `apm_city` VALUES (32, 1, 'Bali', 'Kabupaten', 'Bangli', '80619');
INSERT INTO `apm_city` VALUES (33, 13, 'Kalimantan Selatan', 'Kabupaten', 'Banjar', '70619');
INSERT INTO `apm_city` VALUES (34, 9, 'Jawa Barat', 'Kota', 'Banjar', '46311');
INSERT INTO `apm_city` VALUES (35, 13, 'Kalimantan Selatan', 'Kota', 'Banjarbaru', '70712');
INSERT INTO `apm_city` VALUES (36, 13, 'Kalimantan Selatan', 'Kota', 'Banjarmasin', '70117');
INSERT INTO `apm_city` VALUES (37, 10, 'Jawa Tengah', 'Kabupaten', 'Banjarnegara', '53419');
INSERT INTO `apm_city` VALUES (38, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bantaeng', '92411');
INSERT INTO `apm_city` VALUES (39, 5, 'DI Yogyakarta', 'Kabupaten', 'Bantul', '55715');
INSERT INTO `apm_city` VALUES (40, 33, 'Sumatera Selatan', 'Kabupaten', 'Banyuasin', '30911');
INSERT INTO `apm_city` VALUES (41, 10, 'Jawa Tengah', 'Kabupaten', 'Banyumas', '53114');
INSERT INTO `apm_city` VALUES (42, 11, 'Jawa Timur', 'Kabupaten', 'Banyuwangi', '68416');
INSERT INTO `apm_city` VALUES (43, 13, 'Kalimantan Selatan', 'Kabupaten', 'Barito Kuala', '70511');
INSERT INTO `apm_city` VALUES (44, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Selatan', '73711');
INSERT INTO `apm_city` VALUES (45, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Timur', '73671');
INSERT INTO `apm_city` VALUES (46, 14, 'Kalimantan Tengah', 'Kabupaten', 'Barito Utara', '73881');
INSERT INTO `apm_city` VALUES (47, 28, 'Sulawesi Selatan', 'Kabupaten', 'Barru', '90719');
INSERT INTO `apm_city` VALUES (48, 17, 'Kepulauan Riau', 'Kota', 'Batam', '29413');
INSERT INTO `apm_city` VALUES (49, 10, 'Jawa Tengah', 'Kabupaten', 'Batang', '51211');
INSERT INTO `apm_city` VALUES (50, 8, 'Jambi', 'Kabupaten', 'Batang Hari', '36613');
INSERT INTO `apm_city` VALUES (51, 11, 'Jawa Timur', 'Kota', 'Batu', '65311');
INSERT INTO `apm_city` VALUES (52, 34, 'Sumatera Utara', 'Kabupaten', 'Batu Bara', '21655');
INSERT INTO `apm_city` VALUES (53, 30, 'Sulawesi Tenggara', 'Kota', 'Bau-Bau', '93719');
INSERT INTO `apm_city` VALUES (54, 9, 'Jawa Barat', 'Kabupaten', 'Bekasi', '17837');
INSERT INTO `apm_city` VALUES (55, 9, 'Jawa Barat', 'Kota', 'Bekasi', '17121');
INSERT INTO `apm_city` VALUES (56, 2, 'Bangka Belitung', 'Kabupaten', 'Belitung', '33419');
INSERT INTO `apm_city` VALUES (57, 2, 'Bangka Belitung', 'Kabupaten', 'Belitung Timur', '33519');
INSERT INTO `apm_city` VALUES (58, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Belu', '85711');
INSERT INTO `apm_city` VALUES (59, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Bener Meriah', '24581');
INSERT INTO `apm_city` VALUES (60, 26, 'Riau', 'Kabupaten', 'Bengkalis', '28719');
INSERT INTO `apm_city` VALUES (61, 12, 'Kalimantan Barat', 'Kabupaten', 'Bengkayang', '79213');
INSERT INTO `apm_city` VALUES (62, 4, 'Bengkulu', 'Kota', 'Bengkulu', '38229');
INSERT INTO `apm_city` VALUES (63, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Selatan', '38519');
INSERT INTO `apm_city` VALUES (64, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Tengah', '38319');
INSERT INTO `apm_city` VALUES (65, 4, 'Bengkulu', 'Kabupaten', 'Bengkulu Utara', '38619');
INSERT INTO `apm_city` VALUES (66, 15, 'Kalimantan Timur', 'Kabupaten', 'Berau', '77311');
INSERT INTO `apm_city` VALUES (67, 24, 'Papua', 'Kabupaten', 'Biak Numfor', '98119');
INSERT INTO `apm_city` VALUES (68, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Bima', '84171');
INSERT INTO `apm_city` VALUES (69, 22, 'Nusa Tenggara Barat (NTB)', 'Kota', 'Bima', '84139');
INSERT INTO `apm_city` VALUES (70, 34, 'Sumatera Utara', 'Kota', 'Binjai', '20712');
INSERT INTO `apm_city` VALUES (71, 17, 'Kepulauan Riau', 'Kabupaten', 'Bintan', '29135');
INSERT INTO `apm_city` VALUES (72, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Bireuen', '24219');
INSERT INTO `apm_city` VALUES (73, 31, 'Sulawesi Utara', 'Kota', 'Bitung', '95512');
INSERT INTO `apm_city` VALUES (74, 11, 'Jawa Timur', 'Kabupaten', 'Blitar', '66171');
INSERT INTO `apm_city` VALUES (75, 11, 'Jawa Timur', 'Kota', 'Blitar', '66124');
INSERT INTO `apm_city` VALUES (76, 10, 'Jawa Tengah', 'Kabupaten', 'Blora', '58219');
INSERT INTO `apm_city` VALUES (77, 7, 'Gorontalo', 'Kabupaten', 'Boalemo', '96319');
INSERT INTO `apm_city` VALUES (78, 9, 'Jawa Barat', 'Kabupaten', 'Bogor', '16911');
INSERT INTO `apm_city` VALUES (79, 9, 'Jawa Barat', 'Kota', 'Bogor', '16119');
INSERT INTO `apm_city` VALUES (80, 11, 'Jawa Timur', 'Kabupaten', 'Bojonegoro', '62119');
INSERT INTO `apm_city` VALUES (81, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow (Bolmong)', '95755');
INSERT INTO `apm_city` VALUES (82, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Selatan', '95774');
INSERT INTO `apm_city` VALUES (83, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Timur', '95783');
INSERT INTO `apm_city` VALUES (84, 31, 'Sulawesi Utara', 'Kabupaten', 'Bolaang Mongondow Utara', '95765');
INSERT INTO `apm_city` VALUES (85, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Bombana', '93771');
INSERT INTO `apm_city` VALUES (86, 11, 'Jawa Timur', 'Kabupaten', 'Bondowoso', '68219');
INSERT INTO `apm_city` VALUES (87, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bone', '92713');
INSERT INTO `apm_city` VALUES (88, 7, 'Gorontalo', 'Kabupaten', 'Bone Bolango', '96511');
INSERT INTO `apm_city` VALUES (89, 15, 'Kalimantan Timur', 'Kota', 'Bontang', '75313');
INSERT INTO `apm_city` VALUES (90, 24, 'Papua', 'Kabupaten', 'Boven Digoel', '99662');
INSERT INTO `apm_city` VALUES (91, 10, 'Jawa Tengah', 'Kabupaten', 'Boyolali', '57312');
INSERT INTO `apm_city` VALUES (92, 10, 'Jawa Tengah', 'Kabupaten', 'Brebes', '52212');
INSERT INTO `apm_city` VALUES (93, 32, 'Sumatera Barat', 'Kota', 'Bukittinggi', '26115');
INSERT INTO `apm_city` VALUES (94, 1, 'Bali', 'Kabupaten', 'Buleleng', '81111');
INSERT INTO `apm_city` VALUES (95, 28, 'Sulawesi Selatan', 'Kabupaten', 'Bulukumba', '92511');
INSERT INTO `apm_city` VALUES (96, 16, 'Kalimantan Utara', 'Kabupaten', 'Bulungan (Bulongan)', '77211');
INSERT INTO `apm_city` VALUES (97, 8, 'Jambi', 'Kabupaten', 'Bungo', '37216');
INSERT INTO `apm_city` VALUES (98, 29, 'Sulawesi Tengah', 'Kabupaten', 'Buol', '94564');
INSERT INTO `apm_city` VALUES (99, 19, 'Maluku', 'Kabupaten', 'Buru', '97371');
INSERT INTO `apm_city` VALUES (100, 19, 'Maluku', 'Kabupaten', 'Buru Selatan', '97351');
INSERT INTO `apm_city` VALUES (101, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Buton', '93754');
INSERT INTO `apm_city` VALUES (102, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Buton Utara', '93745');
INSERT INTO `apm_city` VALUES (103, 9, 'Jawa Barat', 'Kabupaten', 'Ciamis', '46211');
INSERT INTO `apm_city` VALUES (104, 9, 'Jawa Barat', 'Kabupaten', 'Cianjur', '43217');
INSERT INTO `apm_city` VALUES (105, 10, 'Jawa Tengah', 'Kabupaten', 'Cilacap', '53211');
INSERT INTO `apm_city` VALUES (106, 3, 'Banten', 'Kota', 'Cilegon', '42417');
INSERT INTO `apm_city` VALUES (107, 9, 'Jawa Barat', 'Kota', 'Cimahi', '40512');
INSERT INTO `apm_city` VALUES (108, 9, 'Jawa Barat', 'Kabupaten', 'Cirebon', '45611');
INSERT INTO `apm_city` VALUES (109, 9, 'Jawa Barat', 'Kota', 'Cirebon', '45116');
INSERT INTO `apm_city` VALUES (110, 34, 'Sumatera Utara', 'Kabupaten', 'Dairi', '22211');
INSERT INTO `apm_city` VALUES (111, 24, 'Papua', 'Kabupaten', 'Deiyai (Deliyai)', '98784');
INSERT INTO `apm_city` VALUES (112, 34, 'Sumatera Utara', 'Kabupaten', 'Deli Serdang', '20511');
INSERT INTO `apm_city` VALUES (113, 10, 'Jawa Tengah', 'Kabupaten', 'Demak', '59519');
INSERT INTO `apm_city` VALUES (114, 1, 'Bali', 'Kota', 'Denpasar', '80227');
INSERT INTO `apm_city` VALUES (115, 9, 'Jawa Barat', 'Kota', 'Depok', '16416');
INSERT INTO `apm_city` VALUES (116, 32, 'Sumatera Barat', 'Kabupaten', 'Dharmasraya', '27612');
INSERT INTO `apm_city` VALUES (117, 24, 'Papua', 'Kabupaten', 'Dogiyai', '98866');
INSERT INTO `apm_city` VALUES (118, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Dompu', '84217');
INSERT INTO `apm_city` VALUES (119, 29, 'Sulawesi Tengah', 'Kabupaten', 'Donggala', '94341');
INSERT INTO `apm_city` VALUES (120, 26, 'Riau', 'Kota', 'Dumai', '28811');
INSERT INTO `apm_city` VALUES (121, 33, 'Sumatera Selatan', 'Kabupaten', 'Empat Lawang', '31811');
INSERT INTO `apm_city` VALUES (122, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Ende', '86351');
INSERT INTO `apm_city` VALUES (123, 28, 'Sulawesi Selatan', 'Kabupaten', 'Enrekang', '91719');
INSERT INTO `apm_city` VALUES (124, 25, 'Papua Barat', 'Kabupaten', 'Fakfak', '98651');
INSERT INTO `apm_city` VALUES (125, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Flores Timur', '86213');
INSERT INTO `apm_city` VALUES (126, 9, 'Jawa Barat', 'Kabupaten', 'Garut', '44126');
INSERT INTO `apm_city` VALUES (127, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Gayo Lues', '24653');
INSERT INTO `apm_city` VALUES (128, 1, 'Bali', 'Kabupaten', 'Gianyar', '80519');
INSERT INTO `apm_city` VALUES (129, 7, 'Gorontalo', 'Kabupaten', 'Gorontalo', '96218');
INSERT INTO `apm_city` VALUES (130, 7, 'Gorontalo', 'Kota', 'Gorontalo', '96115');
INSERT INTO `apm_city` VALUES (131, 7, 'Gorontalo', 'Kabupaten', 'Gorontalo Utara', '96611');
INSERT INTO `apm_city` VALUES (132, 28, 'Sulawesi Selatan', 'Kabupaten', 'Gowa', '92111');
INSERT INTO `apm_city` VALUES (133, 11, 'Jawa Timur', 'Kabupaten', 'Gresik', '61115');
INSERT INTO `apm_city` VALUES (134, 10, 'Jawa Tengah', 'Kabupaten', 'Grobogan', '58111');
INSERT INTO `apm_city` VALUES (135, 5, 'DI Yogyakarta', 'Kabupaten', 'Gunung Kidul', '55812');
INSERT INTO `apm_city` VALUES (136, 14, 'Kalimantan Tengah', 'Kabupaten', 'Gunung Mas', '74511');
INSERT INTO `apm_city` VALUES (137, 34, 'Sumatera Utara', 'Kota', 'Gunungsitoli', '22813');
INSERT INTO `apm_city` VALUES (138, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Barat', '97757');
INSERT INTO `apm_city` VALUES (139, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Selatan', '97911');
INSERT INTO `apm_city` VALUES (140, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Tengah', '97853');
INSERT INTO `apm_city` VALUES (141, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Timur', '97862');
INSERT INTO `apm_city` VALUES (142, 20, 'Maluku Utara', 'Kabupaten', 'Halmahera Utara', '97762');
INSERT INTO `apm_city` VALUES (143, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Selatan', '71212');
INSERT INTO `apm_city` VALUES (144, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Tengah', '71313');
INSERT INTO `apm_city` VALUES (145, 13, 'Kalimantan Selatan', 'Kabupaten', 'Hulu Sungai Utara', '71419');
INSERT INTO `apm_city` VALUES (146, 34, 'Sumatera Utara', 'Kabupaten', 'Humbang Hasundutan', '22457');
INSERT INTO `apm_city` VALUES (147, 26, 'Riau', 'Kabupaten', 'Indragiri Hilir', '29212');
INSERT INTO `apm_city` VALUES (148, 26, 'Riau', 'Kabupaten', 'Indragiri Hulu', '29319');
INSERT INTO `apm_city` VALUES (149, 9, 'Jawa Barat', 'Kabupaten', 'Indramayu', '45214');
INSERT INTO `apm_city` VALUES (150, 24, 'Papua', 'Kabupaten', 'Intan Jaya', '98771');
INSERT INTO `apm_city` VALUES (151, 6, 'DKI Jakarta', 'Kota', 'Jakarta Barat', '11220');
INSERT INTO `apm_city` VALUES (152, 6, 'DKI Jakarta', 'Kota', 'Jakarta Pusat', '10540');
INSERT INTO `apm_city` VALUES (153, 6, 'DKI Jakarta', 'Kota', 'Jakarta Selatan', '12230');
INSERT INTO `apm_city` VALUES (154, 6, 'DKI Jakarta', 'Kota', 'Jakarta Timur', '13330');
INSERT INTO `apm_city` VALUES (155, 6, 'DKI Jakarta', 'Kota', 'Jakarta Utara', '14140');
INSERT INTO `apm_city` VALUES (156, 8, 'Jambi', 'Kota', 'Jambi', '36111');
INSERT INTO `apm_city` VALUES (157, 24, 'Papua', 'Kabupaten', 'Jayapura', '99352');
INSERT INTO `apm_city` VALUES (158, 24, 'Papua', 'Kota', 'Jayapura', '99114');
INSERT INTO `apm_city` VALUES (159, 24, 'Papua', 'Kabupaten', 'Jayawijaya', '99511');
INSERT INTO `apm_city` VALUES (160, 11, 'Jawa Timur', 'Kabupaten', 'Jember', '68113');
INSERT INTO `apm_city` VALUES (161, 1, 'Bali', 'Kabupaten', 'Jembrana', '82251');
INSERT INTO `apm_city` VALUES (162, 28, 'Sulawesi Selatan', 'Kabupaten', 'Jeneponto', '92319');
INSERT INTO `apm_city` VALUES (163, 10, 'Jawa Tengah', 'Kabupaten', 'Jepara', '59419');
INSERT INTO `apm_city` VALUES (164, 11, 'Jawa Timur', 'Kabupaten', 'Jombang', '61415');
INSERT INTO `apm_city` VALUES (165, 25, 'Papua Barat', 'Kabupaten', 'Kaimana', '98671');
INSERT INTO `apm_city` VALUES (166, 26, 'Riau', 'Kabupaten', 'Kampar', '28411');
INSERT INTO `apm_city` VALUES (167, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kapuas', '73583');
INSERT INTO `apm_city` VALUES (168, 12, 'Kalimantan Barat', 'Kabupaten', 'Kapuas Hulu', '78719');
INSERT INTO `apm_city` VALUES (169, 10, 'Jawa Tengah', 'Kabupaten', 'Karanganyar', '57718');
INSERT INTO `apm_city` VALUES (170, 1, 'Bali', 'Kabupaten', 'Karangasem', '80819');
INSERT INTO `apm_city` VALUES (171, 9, 'Jawa Barat', 'Kabupaten', 'Karawang', '41311');
INSERT INTO `apm_city` VALUES (172, 17, 'Kepulauan Riau', 'Kabupaten', 'Karimun', '29611');
INSERT INTO `apm_city` VALUES (173, 34, 'Sumatera Utara', 'Kabupaten', 'Karo', '22119');
INSERT INTO `apm_city` VALUES (174, 14, 'Kalimantan Tengah', 'Kabupaten', 'Katingan', '74411');
INSERT INTO `apm_city` VALUES (175, 4, 'Bengkulu', 'Kabupaten', 'Kaur', '38911');
INSERT INTO `apm_city` VALUES (176, 12, 'Kalimantan Barat', 'Kabupaten', 'Kayong Utara', '78852');
INSERT INTO `apm_city` VALUES (177, 10, 'Jawa Tengah', 'Kabupaten', 'Kebumen', '54319');
INSERT INTO `apm_city` VALUES (178, 11, 'Jawa Timur', 'Kabupaten', 'Kediri', '64184');
INSERT INTO `apm_city` VALUES (179, 11, 'Jawa Timur', 'Kota', 'Kediri', '64125');
INSERT INTO `apm_city` VALUES (180, 24, 'Papua', 'Kabupaten', 'Keerom', '99461');
INSERT INTO `apm_city` VALUES (181, 10, 'Jawa Tengah', 'Kabupaten', 'Kendal', '51314');
INSERT INTO `apm_city` VALUES (182, 30, 'Sulawesi Tenggara', 'Kota', 'Kendari', '93126');
INSERT INTO `apm_city` VALUES (183, 4, 'Bengkulu', 'Kabupaten', 'Kepahiang', '39319');
INSERT INTO `apm_city` VALUES (184, 17, 'Kepulauan Riau', 'Kabupaten', 'Kepulauan Anambas', '29991');
INSERT INTO `apm_city` VALUES (185, 19, 'Maluku', 'Kabupaten', 'Kepulauan Aru', '97681');
INSERT INTO `apm_city` VALUES (186, 32, 'Sumatera Barat', 'Kabupaten', 'Kepulauan Mentawai', '25771');
INSERT INTO `apm_city` VALUES (187, 26, 'Riau', 'Kabupaten', 'Kepulauan Meranti', '28791');
INSERT INTO `apm_city` VALUES (188, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Sangihe', '95819');
INSERT INTO `apm_city` VALUES (189, 6, 'DKI Jakarta', 'Kabupaten', 'Kepulauan Seribu', '14550');
INSERT INTO `apm_city` VALUES (190, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', '95862');
INSERT INTO `apm_city` VALUES (191, 20, 'Maluku Utara', 'Kabupaten', 'Kepulauan Sula', '97995');
INSERT INTO `apm_city` VALUES (192, 31, 'Sulawesi Utara', 'Kabupaten', 'Kepulauan Talaud', '95885');
INSERT INTO `apm_city` VALUES (193, 24, 'Papua', 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', '98211');
INSERT INTO `apm_city` VALUES (194, 8, 'Jambi', 'Kabupaten', 'Kerinci', '37167');
INSERT INTO `apm_city` VALUES (195, 12, 'Kalimantan Barat', 'Kabupaten', 'Ketapang', '78874');
INSERT INTO `apm_city` VALUES (196, 10, 'Jawa Tengah', 'Kabupaten', 'Klaten', '57411');
INSERT INTO `apm_city` VALUES (197, 1, 'Bali', 'Kabupaten', 'Klungkung', '80719');
INSERT INTO `apm_city` VALUES (198, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Kolaka', '93511');
INSERT INTO `apm_city` VALUES (199, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Kolaka Utara', '93911');
INSERT INTO `apm_city` VALUES (200, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe', '93411');
INSERT INTO `apm_city` VALUES (201, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe Selatan', '93811');
INSERT INTO `apm_city` VALUES (202, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Konawe Utara', '93311');
INSERT INTO `apm_city` VALUES (203, 13, 'Kalimantan Selatan', 'Kabupaten', 'Kotabaru', '72119');
INSERT INTO `apm_city` VALUES (204, 31, 'Sulawesi Utara', 'Kota', 'Kotamobagu', '95711');
INSERT INTO `apm_city` VALUES (205, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kotawaringin Barat', '74119');
INSERT INTO `apm_city` VALUES (206, 14, 'Kalimantan Tengah', 'Kabupaten', 'Kotawaringin Timur', '74364');
INSERT INTO `apm_city` VALUES (207, 26, 'Riau', 'Kabupaten', 'Kuantan Singingi', '29519');
INSERT INTO `apm_city` VALUES (208, 12, 'Kalimantan Barat', 'Kabupaten', 'Kubu Raya', '78311');
INSERT INTO `apm_city` VALUES (209, 10, 'Jawa Tengah', 'Kabupaten', 'Kudus', '59311');
INSERT INTO `apm_city` VALUES (210, 5, 'DI Yogyakarta', 'Kabupaten', 'Kulon Progo', '55611');
INSERT INTO `apm_city` VALUES (211, 9, 'Jawa Barat', 'Kabupaten', 'Kuningan', '45511');
INSERT INTO `apm_city` VALUES (212, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Kupang', '85362');
INSERT INTO `apm_city` VALUES (213, 23, 'Nusa Tenggara Timur (NTT)', 'Kota', 'Kupang', '85119');
INSERT INTO `apm_city` VALUES (214, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Barat', '75711');
INSERT INTO `apm_city` VALUES (215, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Kartanegara', '75511');
INSERT INTO `apm_city` VALUES (216, 15, 'Kalimantan Timur', 'Kabupaten', 'Kutai Timur', '75611');
INSERT INTO `apm_city` VALUES (217, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu', '21412');
INSERT INTO `apm_city` VALUES (218, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Selatan', '21511');
INSERT INTO `apm_city` VALUES (219, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Utara', '21711');
INSERT INTO `apm_city` VALUES (220, 33, 'Sumatera Selatan', 'Kabupaten', 'Lahat', '31419');
INSERT INTO `apm_city` VALUES (221, 14, 'Kalimantan Tengah', 'Kabupaten', 'Lamandau', '74611');
INSERT INTO `apm_city` VALUES (222, 11, 'Jawa Timur', 'Kabupaten', 'Lamongan', '64125');
INSERT INTO `apm_city` VALUES (223, 18, 'Lampung', 'Kabupaten', 'Lampung Barat', '34814');
INSERT INTO `apm_city` VALUES (224, 18, 'Lampung', 'Kabupaten', 'Lampung Selatan', '35511');
INSERT INTO `apm_city` VALUES (225, 18, 'Lampung', 'Kabupaten', 'Lampung Tengah', '34212');
INSERT INTO `apm_city` VALUES (226, 18, 'Lampung', 'Kabupaten', 'Lampung Timur', '34319');
INSERT INTO `apm_city` VALUES (227, 18, 'Lampung', 'Kabupaten', 'Lampung Utara', '34516');
INSERT INTO `apm_city` VALUES (228, 12, 'Kalimantan Barat', 'Kabupaten', 'Landak', '78319');
INSERT INTO `apm_city` VALUES (229, 34, 'Sumatera Utara', 'Kabupaten', 'Langkat', '20811');
INSERT INTO `apm_city` VALUES (230, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Langsa', '24412');
INSERT INTO `apm_city` VALUES (231, 24, 'Papua', 'Kabupaten', 'Lanny Jaya', '99531');
INSERT INTO `apm_city` VALUES (232, 3, 'Banten', 'Kabupaten', 'Lebak', '42319');
INSERT INTO `apm_city` VALUES (233, 4, 'Bengkulu', 'Kabupaten', 'Lebong', '39264');
INSERT INTO `apm_city` VALUES (234, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Lembata', '86611');
INSERT INTO `apm_city` VALUES (235, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Lhokseumawe', '24352');
INSERT INTO `apm_city` VALUES (236, 32, 'Sumatera Barat', 'Kabupaten', 'Lima Puluh Koto/Kota', '26671');
INSERT INTO `apm_city` VALUES (237, 17, 'Kepulauan Riau', 'Kabupaten', 'Lingga', '29811');
INSERT INTO `apm_city` VALUES (238, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Barat', '83311');
INSERT INTO `apm_city` VALUES (239, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Tengah', '83511');
INSERT INTO `apm_city` VALUES (240, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Timur', '83612');
INSERT INTO `apm_city` VALUES (241, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Lombok Utara', '83711');
INSERT INTO `apm_city` VALUES (242, 33, 'Sumatera Selatan', 'Kota', 'Lubuk Linggau', '31614');
INSERT INTO `apm_city` VALUES (243, 11, 'Jawa Timur', 'Kabupaten', 'Lumajang', '67319');
INSERT INTO `apm_city` VALUES (244, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu', '91994');
INSERT INTO `apm_city` VALUES (245, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu Timur', '92981');
INSERT INTO `apm_city` VALUES (246, 28, 'Sulawesi Selatan', 'Kabupaten', 'Luwu Utara', '92911');
INSERT INTO `apm_city` VALUES (247, 11, 'Jawa Timur', 'Kabupaten', 'Madiun', '63153');
INSERT INTO `apm_city` VALUES (248, 11, 'Jawa Timur', 'Kota', 'Madiun', '63122');
INSERT INTO `apm_city` VALUES (249, 10, 'Jawa Tengah', 'Kabupaten', 'Magelang', '56519');
INSERT INTO `apm_city` VALUES (250, 10, 'Jawa Tengah', 'Kota', 'Magelang', '56133');
INSERT INTO `apm_city` VALUES (251, 11, 'Jawa Timur', 'Kabupaten', 'Magetan', '63314');
INSERT INTO `apm_city` VALUES (252, 9, 'Jawa Barat', 'Kabupaten', 'Majalengka', '45412');
INSERT INTO `apm_city` VALUES (253, 27, 'Sulawesi Barat', 'Kabupaten', 'Majene', '91411');
INSERT INTO `apm_city` VALUES (254, 28, 'Sulawesi Selatan', 'Kota', 'Makassar', '90111');
INSERT INTO `apm_city` VALUES (255, 11, 'Jawa Timur', 'Kabupaten', 'Malang', '65163');
INSERT INTO `apm_city` VALUES (256, 11, 'Jawa Timur', 'Kota', 'Malang', '65112');
INSERT INTO `apm_city` VALUES (257, 16, 'Kalimantan Utara', 'Kabupaten', 'Malinau', '77511');
INSERT INTO `apm_city` VALUES (258, 19, 'Maluku', 'Kabupaten', 'Maluku Barat Daya', '97451');
INSERT INTO `apm_city` VALUES (259, 19, 'Maluku', 'Kabupaten', 'Maluku Tengah', '97513');
INSERT INTO `apm_city` VALUES (260, 19, 'Maluku', 'Kabupaten', 'Maluku Tenggara', '97651');
INSERT INTO `apm_city` VALUES (261, 19, 'Maluku', 'Kabupaten', 'Maluku Tenggara Barat', '97465');
INSERT INTO `apm_city` VALUES (262, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamasa', '91362');
INSERT INTO `apm_city` VALUES (263, 24, 'Papua', 'Kabupaten', 'Mamberamo Raya', '99381');
INSERT INTO `apm_city` VALUES (264, 24, 'Papua', 'Kabupaten', 'Mamberamo Tengah', '99553');
INSERT INTO `apm_city` VALUES (265, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamuju', '91519');
INSERT INTO `apm_city` VALUES (266, 27, 'Sulawesi Barat', 'Kabupaten', 'Mamuju Utara', '91571');
INSERT INTO `apm_city` VALUES (267, 31, 'Sulawesi Utara', 'Kota', 'Manado', '95247');
INSERT INTO `apm_city` VALUES (268, 34, 'Sumatera Utara', 'Kabupaten', 'Mandailing Natal', '22916');
INSERT INTO `apm_city` VALUES (269, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai', '86551');
INSERT INTO `apm_city` VALUES (270, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai Barat', '86711');
INSERT INTO `apm_city` VALUES (271, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Manggarai Timur', '86811');
INSERT INTO `apm_city` VALUES (272, 25, 'Papua Barat', 'Kabupaten', 'Manokwari', '98311');
INSERT INTO `apm_city` VALUES (273, 25, 'Papua Barat', 'Kabupaten', 'Manokwari Selatan', '98355');
INSERT INTO `apm_city` VALUES (274, 24, 'Papua', 'Kabupaten', 'Mappi', '99853');
INSERT INTO `apm_city` VALUES (275, 28, 'Sulawesi Selatan', 'Kabupaten', 'Maros', '90511');
INSERT INTO `apm_city` VALUES (276, 22, 'Nusa Tenggara Barat (NTB)', 'Kota', 'Mataram', '83131');
INSERT INTO `apm_city` VALUES (277, 25, 'Papua Barat', 'Kabupaten', 'Maybrat', '98051');
INSERT INTO `apm_city` VALUES (278, 34, 'Sumatera Utara', 'Kota', 'Medan', '20228');
INSERT INTO `apm_city` VALUES (279, 12, 'Kalimantan Barat', 'Kabupaten', 'Melawi', '78619');
INSERT INTO `apm_city` VALUES (280, 8, 'Jambi', 'Kabupaten', 'Merangin', '37319');
INSERT INTO `apm_city` VALUES (281, 24, 'Papua', 'Kabupaten', 'Merauke', '99613');
INSERT INTO `apm_city` VALUES (282, 18, 'Lampung', 'Kabupaten', 'Mesuji', '34911');
INSERT INTO `apm_city` VALUES (283, 18, 'Lampung', 'Kota', 'Metro', '34111');
INSERT INTO `apm_city` VALUES (284, 24, 'Papua', 'Kabupaten', 'Mimika', '99962');
INSERT INTO `apm_city` VALUES (285, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa', '95614');
INSERT INTO `apm_city` VALUES (286, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Selatan', '95914');
INSERT INTO `apm_city` VALUES (287, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Tenggara', '95995');
INSERT INTO `apm_city` VALUES (288, 31, 'Sulawesi Utara', 'Kabupaten', 'Minahasa Utara', '95316');
INSERT INTO `apm_city` VALUES (289, 11, 'Jawa Timur', 'Kabupaten', 'Mojokerto', '61382');
INSERT INTO `apm_city` VALUES (290, 11, 'Jawa Timur', 'Kota', 'Mojokerto', '61316');
INSERT INTO `apm_city` VALUES (291, 29, 'Sulawesi Tengah', 'Kabupaten', 'Morowali', '94911');
INSERT INTO `apm_city` VALUES (292, 33, 'Sumatera Selatan', 'Kabupaten', 'Muara Enim', '31315');
INSERT INTO `apm_city` VALUES (293, 8, 'Jambi', 'Kabupaten', 'Muaro Jambi', '36311');
INSERT INTO `apm_city` VALUES (294, 4, 'Bengkulu', 'Kabupaten', 'Muko Muko', '38715');
INSERT INTO `apm_city` VALUES (295, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Muna', '93611');
INSERT INTO `apm_city` VALUES (296, 14, 'Kalimantan Tengah', 'Kabupaten', 'Murung Raya', '73911');
INSERT INTO `apm_city` VALUES (297, 33, 'Sumatera Selatan', 'Kabupaten', 'Musi Banyuasin', '30719');
INSERT INTO `apm_city` VALUES (298, 33, 'Sumatera Selatan', 'Kabupaten', 'Musi Rawas', '31661');
INSERT INTO `apm_city` VALUES (299, 24, 'Papua', 'Kabupaten', 'Nabire', '98816');
INSERT INTO `apm_city` VALUES (300, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Nagan Raya', '23674');
INSERT INTO `apm_city` VALUES (301, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Nagekeo', '86911');
INSERT INTO `apm_city` VALUES (302, 17, 'Kepulauan Riau', 'Kabupaten', 'Natuna', '29711');
INSERT INTO `apm_city` VALUES (303, 24, 'Papua', 'Kabupaten', 'Nduga', '99541');
INSERT INTO `apm_city` VALUES (304, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Ngada', '86413');
INSERT INTO `apm_city` VALUES (305, 11, 'Jawa Timur', 'Kabupaten', 'Nganjuk', '64414');
INSERT INTO `apm_city` VALUES (306, 11, 'Jawa Timur', 'Kabupaten', 'Ngawi', '63219');
INSERT INTO `apm_city` VALUES (307, 34, 'Sumatera Utara', 'Kabupaten', 'Nias', '22876');
INSERT INTO `apm_city` VALUES (308, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Barat', '22895');
INSERT INTO `apm_city` VALUES (309, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Selatan', '22865');
INSERT INTO `apm_city` VALUES (310, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Utara', '22856');
INSERT INTO `apm_city` VALUES (311, 16, 'Kalimantan Utara', 'Kabupaten', 'Nunukan', '77421');
INSERT INTO `apm_city` VALUES (312, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Ilir', '30811');
INSERT INTO `apm_city` VALUES (313, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ilir', '30618');
INSERT INTO `apm_city` VALUES (314, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu', '32112');
INSERT INTO `apm_city` VALUES (315, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu Selatan', '32211');
INSERT INTO `apm_city` VALUES (316, 33, 'Sumatera Selatan', 'Kabupaten', 'Ogan Komering Ulu Timur', '32312');
INSERT INTO `apm_city` VALUES (317, 11, 'Jawa Timur', 'Kabupaten', 'Pacitan', '63512');
INSERT INTO `apm_city` VALUES (318, 32, 'Sumatera Barat', 'Kota', 'Padang', '25112');
INSERT INTO `apm_city` VALUES (319, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas', '22763');
INSERT INTO `apm_city` VALUES (320, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas Utara', '22753');
INSERT INTO `apm_city` VALUES (321, 32, 'Sumatera Barat', 'Kota', 'Padang Panjang', '27122');
INSERT INTO `apm_city` VALUES (322, 32, 'Sumatera Barat', 'Kabupaten', 'Padang Pariaman', '25583');
INSERT INTO `apm_city` VALUES (323, 34, 'Sumatera Utara', 'Kota', 'Padang Sidempuan', '22727');
INSERT INTO `apm_city` VALUES (324, 33, 'Sumatera Selatan', 'Kota', 'Pagar Alam', '31512');
INSERT INTO `apm_city` VALUES (325, 34, 'Sumatera Utara', 'Kabupaten', 'Pakpak Bharat', '22272');
INSERT INTO `apm_city` VALUES (326, 14, 'Kalimantan Tengah', 'Kota', 'Palangka Raya', '73112');
INSERT INTO `apm_city` VALUES (327, 33, 'Sumatera Selatan', 'Kota', 'Palembang', '31512');
INSERT INTO `apm_city` VALUES (328, 28, 'Sulawesi Selatan', 'Kota', 'Palopo', '91911');
INSERT INTO `apm_city` VALUES (329, 29, 'Sulawesi Tengah', 'Kota', 'Palu', '94111');
INSERT INTO `apm_city` VALUES (330, 11, 'Jawa Timur', 'Kabupaten', 'Pamekasan', '69319');
INSERT INTO `apm_city` VALUES (331, 3, 'Banten', 'Kabupaten', 'Pandeglang', '42212');
INSERT INTO `apm_city` VALUES (332, 9, 'Jawa Barat', 'Kabupaten', 'Pangandaran', '46511');
INSERT INTO `apm_city` VALUES (333, 28, 'Sulawesi Selatan', 'Kabupaten', 'Pangkajene Kepulauan', '90611');
INSERT INTO `apm_city` VALUES (334, 2, 'Bangka Belitung', 'Kota', 'Pangkal Pinang', '33115');
INSERT INTO `apm_city` VALUES (335, 24, 'Papua', 'Kabupaten', 'Paniai', '98765');
INSERT INTO `apm_city` VALUES (336, 28, 'Sulawesi Selatan', 'Kota', 'Parepare', '91123');
INSERT INTO `apm_city` VALUES (337, 32, 'Sumatera Barat', 'Kota', 'Pariaman', '25511');
INSERT INTO `apm_city` VALUES (338, 29, 'Sulawesi Tengah', 'Kabupaten', 'Parigi Moutong', '94411');
INSERT INTO `apm_city` VALUES (339, 32, 'Sumatera Barat', 'Kabupaten', 'Pasaman', '26318');
INSERT INTO `apm_city` VALUES (340, 32, 'Sumatera Barat', 'Kabupaten', 'Pasaman Barat', '26511');
INSERT INTO `apm_city` VALUES (341, 15, 'Kalimantan Timur', 'Kabupaten', 'Paser', '76211');
INSERT INTO `apm_city` VALUES (342, 11, 'Jawa Timur', 'Kabupaten', 'Pasuruan', '67153');
INSERT INTO `apm_city` VALUES (343, 11, 'Jawa Timur', 'Kota', 'Pasuruan', '67118');
INSERT INTO `apm_city` VALUES (344, 10, 'Jawa Tengah', 'Kabupaten', 'Pati', '59114');
INSERT INTO `apm_city` VALUES (345, 32, 'Sumatera Barat', 'Kota', 'Payakumbuh', '26213');
INSERT INTO `apm_city` VALUES (346, 25, 'Papua Barat', 'Kabupaten', 'Pegunungan Arfak', '98354');
INSERT INTO `apm_city` VALUES (347, 24, 'Papua', 'Kabupaten', 'Pegunungan Bintang', '99573');
INSERT INTO `apm_city` VALUES (348, 10, 'Jawa Tengah', 'Kabupaten', 'Pekalongan', '51161');
INSERT INTO `apm_city` VALUES (349, 10, 'Jawa Tengah', 'Kota', 'Pekalongan', '51122');
INSERT INTO `apm_city` VALUES (350, 26, 'Riau', 'Kota', 'Pekanbaru', '28112');
INSERT INTO `apm_city` VALUES (351, 26, 'Riau', 'Kabupaten', 'Pelalawan', '28311');
INSERT INTO `apm_city` VALUES (352, 10, 'Jawa Tengah', 'Kabupaten', 'Pemalang', '52319');
INSERT INTO `apm_city` VALUES (353, 34, 'Sumatera Utara', 'Kota', 'Pematang Siantar', '21126');
INSERT INTO `apm_city` VALUES (354, 15, 'Kalimantan Timur', 'Kabupaten', 'Penajam Paser Utara', '76311');
INSERT INTO `apm_city` VALUES (355, 18, 'Lampung', 'Kabupaten', 'Pesawaran', '35312');
INSERT INTO `apm_city` VALUES (356, 18, 'Lampung', 'Kabupaten', 'Pesisir Barat', '35974');
INSERT INTO `apm_city` VALUES (357, 32, 'Sumatera Barat', 'Kabupaten', 'Pesisir Selatan', '25611');
INSERT INTO `apm_city` VALUES (358, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Pidie', '24116');
INSERT INTO `apm_city` VALUES (359, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Pidie Jaya', '24186');
INSERT INTO `apm_city` VALUES (360, 28, 'Sulawesi Selatan', 'Kabupaten', 'Pinrang', '91251');
INSERT INTO `apm_city` VALUES (361, 7, 'Gorontalo', 'Kabupaten', 'Pohuwato', '96419');
INSERT INTO `apm_city` VALUES (362, 27, 'Sulawesi Barat', 'Kabupaten', 'Polewali Mandar', '91311');
INSERT INTO `apm_city` VALUES (363, 11, 'Jawa Timur', 'Kabupaten', 'Ponorogo', '63411');
INSERT INTO `apm_city` VALUES (364, 12, 'Kalimantan Barat', 'Kabupaten', 'Pontianak', '78971');
INSERT INTO `apm_city` VALUES (365, 12, 'Kalimantan Barat', 'Kota', 'Pontianak', '78112');
INSERT INTO `apm_city` VALUES (366, 29, 'Sulawesi Tengah', 'Kabupaten', 'Poso', '94615');
INSERT INTO `apm_city` VALUES (367, 33, 'Sumatera Selatan', 'Kota', 'Prabumulih', '31121');
INSERT INTO `apm_city` VALUES (368, 18, 'Lampung', 'Kabupaten', 'Pringsewu', '35719');
INSERT INTO `apm_city` VALUES (369, 11, 'Jawa Timur', 'Kabupaten', 'Probolinggo', '67282');
INSERT INTO `apm_city` VALUES (370, 11, 'Jawa Timur', 'Kota', 'Probolinggo', '67215');
INSERT INTO `apm_city` VALUES (371, 14, 'Kalimantan Tengah', 'Kabupaten', 'Pulang Pisau', '74811');
INSERT INTO `apm_city` VALUES (372, 20, 'Maluku Utara', 'Kabupaten', 'Pulau Morotai', '97771');
INSERT INTO `apm_city` VALUES (373, 24, 'Papua', 'Kabupaten', 'Puncak', '98981');
INSERT INTO `apm_city` VALUES (374, 24, 'Papua', 'Kabupaten', 'Puncak Jaya', '98979');
INSERT INTO `apm_city` VALUES (375, 10, 'Jawa Tengah', 'Kabupaten', 'Purbalingga', '53312');
INSERT INTO `apm_city` VALUES (376, 9, 'Jawa Barat', 'Kabupaten', 'Purwakarta', '41119');
INSERT INTO `apm_city` VALUES (377, 10, 'Jawa Tengah', 'Kabupaten', 'Purworejo', '54111');
INSERT INTO `apm_city` VALUES (378, 25, 'Papua Barat', 'Kabupaten', 'Raja Ampat', '98489');
INSERT INTO `apm_city` VALUES (379, 4, 'Bengkulu', 'Kabupaten', 'Rejang Lebong', '39112');
INSERT INTO `apm_city` VALUES (380, 10, 'Jawa Tengah', 'Kabupaten', 'Rembang', '59219');
INSERT INTO `apm_city` VALUES (381, 26, 'Riau', 'Kabupaten', 'Rokan Hilir', '28992');
INSERT INTO `apm_city` VALUES (382, 26, 'Riau', 'Kabupaten', 'Rokan Hulu', '28511');
INSERT INTO `apm_city` VALUES (383, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Rote Ndao', '85982');
INSERT INTO `apm_city` VALUES (384, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Sabang', '23512');
INSERT INTO `apm_city` VALUES (385, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sabu Raijua', '85391');
INSERT INTO `apm_city` VALUES (386, 10, 'Jawa Tengah', 'Kota', 'Salatiga', '50711');
INSERT INTO `apm_city` VALUES (387, 15, 'Kalimantan Timur', 'Kota', 'Samarinda', '75133');
INSERT INTO `apm_city` VALUES (388, 12, 'Kalimantan Barat', 'Kabupaten', 'Sambas', '79453');
INSERT INTO `apm_city` VALUES (389, 34, 'Sumatera Utara', 'Kabupaten', 'Samosir', '22392');
INSERT INTO `apm_city` VALUES (390, 11, 'Jawa Timur', 'Kabupaten', 'Sampang', '69219');
INSERT INTO `apm_city` VALUES (391, 12, 'Kalimantan Barat', 'Kabupaten', 'Sanggau', '78557');
INSERT INTO `apm_city` VALUES (392, 24, 'Papua', 'Kabupaten', 'Sarmi', '99373');
INSERT INTO `apm_city` VALUES (393, 8, 'Jambi', 'Kabupaten', 'Sarolangun', '37419');
INSERT INTO `apm_city` VALUES (394, 32, 'Sumatera Barat', 'Kota', 'Sawah Lunto', '27416');
INSERT INTO `apm_city` VALUES (395, 12, 'Kalimantan Barat', 'Kabupaten', 'Sekadau', '79583');
INSERT INTO `apm_city` VALUES (396, 28, 'Sulawesi Selatan', 'Kabupaten', 'Selayar (Kepulauan Selayar)', '92812');
INSERT INTO `apm_city` VALUES (397, 4, 'Bengkulu', 'Kabupaten', 'Seluma', '38811');
INSERT INTO `apm_city` VALUES (398, 10, 'Jawa Tengah', 'Kabupaten', 'Semarang', '50511');
INSERT INTO `apm_city` VALUES (399, 10, 'Jawa Tengah', 'Kota', 'Semarang', '50135');
INSERT INTO `apm_city` VALUES (400, 19, 'Maluku', 'Kabupaten', 'Seram Bagian Barat', '97561');
INSERT INTO `apm_city` VALUES (401, 19, 'Maluku', 'Kabupaten', 'Seram Bagian Timur', '97581');
INSERT INTO `apm_city` VALUES (402, 3, 'Banten', 'Kabupaten', 'Serang', '42182');
INSERT INTO `apm_city` VALUES (403, 3, 'Banten', 'Kota', 'Serang', '42111');
INSERT INTO `apm_city` VALUES (404, 34, 'Sumatera Utara', 'Kabupaten', 'Serdang Bedagai', '20915');
INSERT INTO `apm_city` VALUES (405, 14, 'Kalimantan Tengah', 'Kabupaten', 'Seruyan', '74211');
INSERT INTO `apm_city` VALUES (406, 26, 'Riau', 'Kabupaten', 'Siak', '28623');
INSERT INTO `apm_city` VALUES (407, 34, 'Sumatera Utara', 'Kota', 'Sibolga', '22522');
INSERT INTO `apm_city` VALUES (408, 28, 'Sulawesi Selatan', 'Kabupaten', 'Sidenreng Rappang/Rapang', '91613');
INSERT INTO `apm_city` VALUES (409, 11, 'Jawa Timur', 'Kabupaten', 'Sidoarjo', '61219');
INSERT INTO `apm_city` VALUES (410, 29, 'Sulawesi Tengah', 'Kabupaten', 'Sigi', '94364');
INSERT INTO `apm_city` VALUES (411, 32, 'Sumatera Barat', 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', '27511');
INSERT INTO `apm_city` VALUES (412, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sikka', '86121');
INSERT INTO `apm_city` VALUES (413, 34, 'Sumatera Utara', 'Kabupaten', 'Simalungun', '21162');
INSERT INTO `apm_city` VALUES (414, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kabupaten', 'Simeulue', '23891');
INSERT INTO `apm_city` VALUES (415, 12, 'Kalimantan Barat', 'Kota', 'Singkawang', '79117');
INSERT INTO `apm_city` VALUES (416, 28, 'Sulawesi Selatan', 'Kabupaten', 'Sinjai', '92615');
INSERT INTO `apm_city` VALUES (417, 12, 'Kalimantan Barat', 'Kabupaten', 'Sintang', '78619');
INSERT INTO `apm_city` VALUES (418, 11, 'Jawa Timur', 'Kabupaten', 'Situbondo', '68316');
INSERT INTO `apm_city` VALUES (419, 5, 'DI Yogyakarta', 'Kabupaten', 'Sleman', '55513');
INSERT INTO `apm_city` VALUES (420, 32, 'Sumatera Barat', 'Kabupaten', 'Solok', '27365');
INSERT INTO `apm_city` VALUES (421, 32, 'Sumatera Barat', 'Kota', 'Solok', '27315');
INSERT INTO `apm_city` VALUES (422, 32, 'Sumatera Barat', 'Kabupaten', 'Solok Selatan', '27779');
INSERT INTO `apm_city` VALUES (423, 28, 'Sulawesi Selatan', 'Kabupaten', 'Soppeng', '90812');
INSERT INTO `apm_city` VALUES (424, 25, 'Papua Barat', 'Kabupaten', 'Sorong', '98431');
INSERT INTO `apm_city` VALUES (425, 25, 'Papua Barat', 'Kota', 'Sorong', '98411');
INSERT INTO `apm_city` VALUES (426, 25, 'Papua Barat', 'Kabupaten', 'Sorong Selatan', '98454');
INSERT INTO `apm_city` VALUES (427, 10, 'Jawa Tengah', 'Kabupaten', 'Sragen', '57211');
INSERT INTO `apm_city` VALUES (428, 9, 'Jawa Barat', 'Kabupaten', 'Subang', '41215');
INSERT INTO `apm_city` VALUES (429, 21, 'Nanggroe Aceh Darussalam (NAD)', 'Kota', 'Subulussalam', '24882');
INSERT INTO `apm_city` VALUES (430, 9, 'Jawa Barat', 'Kabupaten', 'Sukabumi', '43311');
INSERT INTO `apm_city` VALUES (431, 9, 'Jawa Barat', 'Kota', 'Sukabumi', '43114');
INSERT INTO `apm_city` VALUES (432, 14, 'Kalimantan Tengah', 'Kabupaten', 'Sukamara', '74712');
INSERT INTO `apm_city` VALUES (433, 10, 'Jawa Tengah', 'Kabupaten', 'Sukoharjo', '57514');
INSERT INTO `apm_city` VALUES (434, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Barat', '87219');
INSERT INTO `apm_city` VALUES (435, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Barat Daya', '87453');
INSERT INTO `apm_city` VALUES (436, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Tengah', '87358');
INSERT INTO `apm_city` VALUES (437, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Sumba Timur', '87112');
INSERT INTO `apm_city` VALUES (438, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Sumbawa', '84315');
INSERT INTO `apm_city` VALUES (439, 22, 'Nusa Tenggara Barat (NTB)', 'Kabupaten', 'Sumbawa Barat', '84419');
INSERT INTO `apm_city` VALUES (440, 9, 'Jawa Barat', 'Kabupaten', 'Sumedang', '45326');
INSERT INTO `apm_city` VALUES (441, 11, 'Jawa Timur', 'Kabupaten', 'Sumenep', '69413');
INSERT INTO `apm_city` VALUES (442, 8, 'Jambi', 'Kota', 'Sungaipenuh', '37113');
INSERT INTO `apm_city` VALUES (443, 24, 'Papua', 'Kabupaten', 'Supiori', '98164');
INSERT INTO `apm_city` VALUES (444, 11, 'Jawa Timur', 'Kota', 'Surabaya', '60119');
INSERT INTO `apm_city` VALUES (445, 10, 'Jawa Tengah', 'Kota', 'Surakarta (Solo)', '57113');
INSERT INTO `apm_city` VALUES (446, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tabalong', '71513');
INSERT INTO `apm_city` VALUES (447, 1, 'Bali', 'Kabupaten', 'Tabanan', '82119');
INSERT INTO `apm_city` VALUES (448, 28, 'Sulawesi Selatan', 'Kabupaten', 'Takalar', '92212');
INSERT INTO `apm_city` VALUES (449, 25, 'Papua Barat', 'Kabupaten', 'Tambrauw', '98475');
INSERT INTO `apm_city` VALUES (450, 16, 'Kalimantan Utara', 'Kabupaten', 'Tana Tidung', '77611');
INSERT INTO `apm_city` VALUES (451, 28, 'Sulawesi Selatan', 'Kabupaten', 'Tana Toraja', '91819');
INSERT INTO `apm_city` VALUES (452, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tanah Bumbu', '72211');
INSERT INTO `apm_city` VALUES (453, 32, 'Sumatera Barat', 'Kabupaten', 'Tanah Datar', '27211');
INSERT INTO `apm_city` VALUES (454, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tanah Laut', '70811');
INSERT INTO `apm_city` VALUES (455, 3, 'Banten', 'Kabupaten', 'Tangerang', '15914');
INSERT INTO `apm_city` VALUES (456, 3, 'Banten', 'Kota', 'Tangerang', '15111');
INSERT INTO `apm_city` VALUES (457, 3, 'Banten', 'Kota', 'Tangerang Selatan', '15332');
INSERT INTO `apm_city` VALUES (458, 18, 'Lampung', 'Kabupaten', 'Tanggamus', '35619');
INSERT INTO `apm_city` VALUES (459, 34, 'Sumatera Utara', 'Kota', 'Tanjung Balai', '21321');
INSERT INTO `apm_city` VALUES (460, 8, 'Jambi', 'Kabupaten', 'Tanjung Jabung Barat', '36513');
INSERT INTO `apm_city` VALUES (461, 8, 'Jambi', 'Kabupaten', 'Tanjung Jabung Timur', '36719');
INSERT INTO `apm_city` VALUES (462, 17, 'Kepulauan Riau', 'Kota', 'Tanjung Pinang', '29111');
INSERT INTO `apm_city` VALUES (463, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Selatan', '22742');
INSERT INTO `apm_city` VALUES (464, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Tengah', '22611');
INSERT INTO `apm_city` VALUES (465, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Utara', '22414');
INSERT INTO `apm_city` VALUES (466, 13, 'Kalimantan Selatan', 'Kabupaten', 'Tapin', '71119');
INSERT INTO `apm_city` VALUES (467, 16, 'Kalimantan Utara', 'Kota', 'Tarakan', '77114');
INSERT INTO `apm_city` VALUES (468, 9, 'Jawa Barat', 'Kabupaten', 'Tasikmalaya', '46411');
INSERT INTO `apm_city` VALUES (469, 9, 'Jawa Barat', 'Kota', 'Tasikmalaya', '46116');
INSERT INTO `apm_city` VALUES (470, 34, 'Sumatera Utara', 'Kota', 'Tebing Tinggi', '20632');
INSERT INTO `apm_city` VALUES (471, 8, 'Jambi', 'Kabupaten', 'Tebo', '37519');
INSERT INTO `apm_city` VALUES (472, 10, 'Jawa Tengah', 'Kabupaten', 'Tegal', '52419');
INSERT INTO `apm_city` VALUES (473, 10, 'Jawa Tengah', 'Kota', 'Tegal', '52114');
INSERT INTO `apm_city` VALUES (474, 25, 'Papua Barat', 'Kabupaten', 'Teluk Bintuni', '98551');
INSERT INTO `apm_city` VALUES (475, 25, 'Papua Barat', 'Kabupaten', 'Teluk Wondama', '98591');
INSERT INTO `apm_city` VALUES (476, 10, 'Jawa Tengah', 'Kabupaten', 'Temanggung', '56212');
INSERT INTO `apm_city` VALUES (477, 20, 'Maluku Utara', 'Kota', 'Ternate', '97714');
INSERT INTO `apm_city` VALUES (478, 20, 'Maluku Utara', 'Kota', 'Tidore Kepulauan', '97815');
INSERT INTO `apm_city` VALUES (479, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Timor Tengah Selatan', '85562');
INSERT INTO `apm_city` VALUES (480, 23, 'Nusa Tenggara Timur (NTT)', 'Kabupaten', 'Timor Tengah Utara', '85612');
INSERT INTO `apm_city` VALUES (481, 34, 'Sumatera Utara', 'Kabupaten', 'Toba Samosir', '22316');
INSERT INTO `apm_city` VALUES (482, 29, 'Sulawesi Tengah', 'Kabupaten', 'Tojo Una-Una', '94683');
INSERT INTO `apm_city` VALUES (483, 29, 'Sulawesi Tengah', 'Kabupaten', 'Toli-Toli', '94542');
INSERT INTO `apm_city` VALUES (484, 24, 'Papua', 'Kabupaten', 'Tolikara', '99411');
INSERT INTO `apm_city` VALUES (485, 31, 'Sulawesi Utara', 'Kota', 'Tomohon', '95416');
INSERT INTO `apm_city` VALUES (486, 28, 'Sulawesi Selatan', 'Kabupaten', 'Toraja Utara', '91831');
INSERT INTO `apm_city` VALUES (487, 11, 'Jawa Timur', 'Kabupaten', 'Trenggalek', '66312');
INSERT INTO `apm_city` VALUES (488, 19, 'Maluku', 'Kota', 'Tual', '97612');
INSERT INTO `apm_city` VALUES (489, 11, 'Jawa Timur', 'Kabupaten', 'Tuban', '62319');
INSERT INTO `apm_city` VALUES (490, 18, 'Lampung', 'Kabupaten', 'Tulang Bawang', '34613');
INSERT INTO `apm_city` VALUES (491, 18, 'Lampung', 'Kabupaten', 'Tulang Bawang Barat', '34419');
INSERT INTO `apm_city` VALUES (492, 11, 'Jawa Timur', 'Kabupaten', 'Tulungagung', '66212');
INSERT INTO `apm_city` VALUES (493, 28, 'Sulawesi Selatan', 'Kabupaten', 'Wajo', '90911');
INSERT INTO `apm_city` VALUES (494, 30, 'Sulawesi Tenggara', 'Kabupaten', 'Wakatobi', '93791');
INSERT INTO `apm_city` VALUES (495, 24, 'Papua', 'Kabupaten', 'Waropen', '98269');
INSERT INTO `apm_city` VALUES (496, 18, 'Lampung', 'Kabupaten', 'Way Kanan', '34711');
INSERT INTO `apm_city` VALUES (497, 10, 'Jawa Tengah', 'Kabupaten', 'Wonogiri', '57619');
INSERT INTO `apm_city` VALUES (498, 10, 'Jawa Tengah', 'Kabupaten', 'Wonosobo', '56311');
INSERT INTO `apm_city` VALUES (499, 24, 'Papua', 'Kabupaten', 'Yahukimo', '99041');
INSERT INTO `apm_city` VALUES (500, 24, 'Papua', 'Kabupaten', 'Yalimo', '99481');
INSERT INTO `apm_city` VALUES (501, 5, 'DI Yogyakarta', 'Kota', 'Yogyakarta', '55222');

-- ----------------------------
-- Table structure for apm_contact
-- ----------------------------
DROP TABLE IF EXISTS `apm_contact`;
CREATE TABLE `apm_contact`  (
  `id_contact` int(1) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fax` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_province` int(10) NULL DEFAULT NULL,
  `id_city` int(10) NULL DEFAULT NULL,
  `postal_code` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_contact`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_contact
-- ----------------------------
INSERT INTO `apm_contact` VALUES (1, 'Test', '02511234567', '02511234567', '08123456789', 'test@gmail.com', 'test', 9, 78, 16610);

-- ----------------------------
-- Table structure for apm_faq
-- ----------------------------
DROP TABLE IF EXISTS `apm_faq`;
CREATE TABLE `apm_faq`  (
  `id_faq` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `answer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_faq`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_faq
-- ----------------------------
INSERT INTO `apm_faq` VALUES (1, 'Pertanyaan', 'Jawaban');
INSERT INTO `apm_faq` VALUES (2, 'test', 'test');

-- ----------------------------
-- Table structure for apm_gallery
-- ----------------------------
DROP TABLE IF EXISTS `apm_gallery`;
CREATE TABLE `apm_gallery`  (
  `id_gallery` int(10) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_gallery`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_gallery
-- ----------------------------
INSERT INTO `apm_gallery` VALUES (1, 'b21884456fa041a003cff6f04748c34e.jpg');

-- ----------------------------
-- Table structure for apm_profile
-- ----------------------------
DROP TABLE IF EXISTS `apm_profile`;
CREATE TABLE `apm_profile`  (
  `id_profile` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_profile`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_profile
-- ----------------------------
INSERT INTO `apm_profile` VALUES (1, 'Test', 'Test', 'c6006cb58cb4cacc43fa31ff63afd532.jpg');

-- ----------------------------
-- Table structure for apm_province
-- ----------------------------
DROP TABLE IF EXISTS `apm_province`;
CREATE TABLE `apm_province`  (
  `id_province` int(10) NOT NULL AUTO_INCREMENT,
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_province`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_province
-- ----------------------------
INSERT INTO `apm_province` VALUES (1, 'Bali');
INSERT INTO `apm_province` VALUES (2, 'Bangka Belitung');
INSERT INTO `apm_province` VALUES (3, 'Banten');
INSERT INTO `apm_province` VALUES (4, 'Bengkulu');
INSERT INTO `apm_province` VALUES (5, 'DI Yogyakarta');
INSERT INTO `apm_province` VALUES (6, 'DKI Jakarta');
INSERT INTO `apm_province` VALUES (7, 'Gorontalo');
INSERT INTO `apm_province` VALUES (8, 'Jambi');
INSERT INTO `apm_province` VALUES (9, 'Jawa Barat');
INSERT INTO `apm_province` VALUES (10, 'Jawa Tengah');
INSERT INTO `apm_province` VALUES (11, 'Jawa Timur');
INSERT INTO `apm_province` VALUES (12, 'Kalimantan Barat');
INSERT INTO `apm_province` VALUES (13, 'Kalimantan Selatan');
INSERT INTO `apm_province` VALUES (14, 'Kalimantan Tengah');
INSERT INTO `apm_province` VALUES (15, 'Kalimantan Timur');
INSERT INTO `apm_province` VALUES (16, 'Kalimantan Utara');
INSERT INTO `apm_province` VALUES (17, 'Kepulauan Riau');
INSERT INTO `apm_province` VALUES (18, 'Lampung');
INSERT INTO `apm_province` VALUES (19, 'Maluku');
INSERT INTO `apm_province` VALUES (20, 'Maluku Utara');
INSERT INTO `apm_province` VALUES (21, 'Nanggroe Aceh Darussalam (NAD)');
INSERT INTO `apm_province` VALUES (22, 'Nusa Tenggara Barat (NTB)');
INSERT INTO `apm_province` VALUES (23, 'Nusa Tenggara Timur (NTT)');
INSERT INTO `apm_province` VALUES (24, 'Papua');
INSERT INTO `apm_province` VALUES (25, 'Papua Barat');
INSERT INTO `apm_province` VALUES (26, 'Riau');
INSERT INTO `apm_province` VALUES (27, 'Sulawesi Barat');
INSERT INTO `apm_province` VALUES (28, 'Sulawesi Selatan');
INSERT INTO `apm_province` VALUES (29, 'Sulawesi Tengah');
INSERT INTO `apm_province` VALUES (30, 'Sulawesi Tenggara');
INSERT INTO `apm_province` VALUES (31, 'Sulawesi Utara');
INSERT INTO `apm_province` VALUES (32, 'Sumatera Barat');
INSERT INTO `apm_province` VALUES (33, 'Sumatera Selatan');
INSERT INTO `apm_province` VALUES (34, 'Sumatera Utara');

-- ----------------------------
-- Table structure for apm_visit
-- ----------------------------
DROP TABLE IF EXISTS `apm_visit`;
CREATE TABLE `apm_visit`  (
  `id_visit` int(10) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `browser` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_visit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apm_visit
-- ----------------------------
INSERT INTO `apm_visit` VALUES (1, '::1', '2019-02-15', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36');
INSERT INTO `apm_visit` VALUES (11, '::1', '2019-02-16', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36');
INSERT INTO `apm_visit` VALUES (12, '::1', '2019-02-19', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36');

SET FOREIGN_KEY_CHECKS = 1;
