/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80200 (8.2.0)
 Source Host           : localhost:3306
 Source Schema         : employee

 Target Server Type    : MySQL
 Target Server Version : 80200 (8.2.0)
 File Encoding         : 65001

 Date: 14/06/2024 11:19:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of activity
-- ----------------------------
BEGIN;
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (1, 1, 'Membuka Halaman Divisi', '2024-06-14 06:18:17', '2024-06-14 06:18:17');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (2, 1, 'Membuka Halaman Divisi', '2024-06-14 06:18:52', '2024-06-14 06:18:52');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (3, 1, 'Membuka Halaman Divisi', '2024-06-14 06:19:03', '2024-06-14 06:19:03');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (4, 1, 'Membuka Halaman Divisi', '2024-06-14 06:19:36', '2024-06-14 06:19:36');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (5, 1, 'Membuka Halaman Divisi', '2024-06-14 06:20:12', '2024-06-14 06:20:12');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (6, 1, 'Membuat Divisi Baru : IT', '2024-06-14 06:20:20', '2024-06-14 06:20:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (7, 1, 'Membuka Halaman Divisi', '2024-06-14 06:20:20', '2024-06-14 06:20:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (8, 1, 'Membuka Halaman Divisi', '2024-06-14 06:20:58', '2024-06-14 06:20:58');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (9, 1, 'Membuka Halaman Divisi', '2024-06-14 06:21:11', '2024-06-14 06:21:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (10, 1, 'Membuka Halaman Divisi', '2024-06-14 06:21:22', '2024-06-14 06:21:22');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (11, 1, 'Membuka Halaman Divisi', '2024-06-14 06:21:49', '2024-06-14 06:21:49');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (12, 1, 'Membuat Divisi Baru : HR', '2024-06-14 06:22:22', '2024-06-14 06:22:22');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (13, 1, 'Membuka Halaman Divisi', '2024-06-14 06:22:22', '2024-06-14 06:22:22');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (14, 1, 'Membuat Divisi Baru : Finance', '2024-06-14 06:22:30', '2024-06-14 06:22:30');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (15, 1, 'Membuka Halaman Divisi', '2024-06-14 06:22:30', '2024-06-14 06:22:30');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (16, 1, 'Update Divisi Baru : Finance Edit', '2024-06-14 06:24:44', '2024-06-14 06:24:44');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (17, 1, 'Membuka Halaman Divisi', '2024-06-14 06:24:44', '2024-06-14 06:24:44');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (18, 1, 'Update Divisi Baru : Finance', '2024-06-14 06:25:08', '2024-06-14 06:25:08');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (19, 1, 'Membuka Halaman Divisi', '2024-06-14 06:25:08', '2024-06-14 06:25:08');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (20, 1, 'Membuat Divisi Baru : Test', '2024-06-14 06:25:15', '2024-06-14 06:25:15');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (21, 1, 'Membuka Halaman Divisi', '2024-06-14 06:25:15', '2024-06-14 06:25:15');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (22, 1, 'Membuka Halaman Divisi', '2024-06-14 06:26:23', '2024-06-14 06:26:23');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (23, 1, 'Menghapus Divisi : ', '2024-06-14 06:26:31', '2024-06-14 06:26:31');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (24, 1, 'Membuka Halaman Divisi', '2024-06-14 06:28:03', '2024-06-14 06:28:03');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (25, 1, 'Membuat Divisi Baru : Test', '2024-06-14 06:28:11', '2024-06-14 06:28:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (26, 1, 'Membuka Halaman Divisi', '2024-06-14 06:28:11', '2024-06-14 06:28:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (27, 1, 'Menghapus Divisi : ', '2024-06-14 06:28:17', '2024-06-14 06:28:17');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (28, 1, 'Membuka Halaman Divisi', '2024-06-14 06:28:23', '2024-06-14 06:28:23');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (29, 1, 'Membuka Halaman Divisi', '2024-06-14 06:28:58', '2024-06-14 06:28:58');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (30, 1, 'Membuat Divisi Baru : test', '2024-06-14 06:29:03', '2024-06-14 06:29:03');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (31, 1, 'Membuka Halaman Divisi', '2024-06-14 06:29:03', '2024-06-14 06:29:03');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (32, 1, 'Menghapus Divisi : ', '2024-06-14 06:29:10', '2024-06-14 06:29:10');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (33, 1, 'Membuka Halaman Divisi', '2024-06-14 06:29:14', '2024-06-14 06:29:14');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (34, 1, 'Membuka Halaman Divisi', '2024-06-14 06:30:07', '2024-06-14 06:30:07');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (35, 1, 'Membuat Divisi Baru : test', '2024-06-14 06:30:14', '2024-06-14 06:30:14');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (36, 1, 'Membuka Halaman Divisi', '2024-06-14 06:30:14', '2024-06-14 06:30:14');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (37, 1, 'Menghapus Divisi : ', '2024-06-14 06:30:20', '2024-06-14 06:30:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (38, 1, 'Membuka Halaman Divisi', '2024-06-14 06:30:20', '2024-06-14 06:30:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (39, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:41:46', '2024-06-14 06:41:46');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (40, 1, 'Membuat Jabatan Baru : Leader', '2024-06-14 06:42:25', '2024-06-14 06:42:25');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (41, 1, 'Membuka Halaman Divisi', '2024-06-14 06:42:25', '2024-06-14 06:42:25');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (42, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:42:53', '2024-06-14 06:42:53');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (43, 1, 'Membuat Jabatan Baru : Staff', '2024-06-14 06:43:05', '2024-06-14 06:43:05');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (44, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:43:05', '2024-06-14 06:43:05');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (45, 1, 'Membuat Jabatan Baru : Test', '2024-06-14 06:43:11', '2024-06-14 06:43:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (46, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:43:11', '2024-06-14 06:43:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (47, 1, 'Update Jabatan : Test Edit', '2024-06-14 06:43:19', '2024-06-14 06:43:19');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (48, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:43:19', '2024-06-14 06:43:19');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (49, 1, 'Update Jabatan : Test Edit edit', '2024-06-14 06:43:52', '2024-06-14 06:43:52');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (50, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:43:52', '2024-06-14 06:43:52');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (51, 1, 'Menghapus Jabatan : ', '2024-06-14 06:43:57', '2024-06-14 06:43:57');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (52, 1, 'Membuka Halaman Jabatan', '2024-06-14 06:43:57', '2024-06-14 06:43:57');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (53, 1, 'Membuka Halaman Jabatan', '2024-06-14 07:08:51', '2024-06-14 07:08:51');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (54, 1, 'Membuka Halaman Employee', '2024-06-14 07:08:56', '2024-06-14 07:08:56');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (55, 1, 'Membuka Halaman Employee', '2024-06-14 07:10:04', '2024-06-14 07:10:04');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (56, 1, 'Membuka Halaman Jabatan', '2024-06-14 08:24:10', '2024-06-14 08:24:10');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (57, 1, 'Membuka Halaman Jabatan', '2024-06-14 08:25:54', '2024-06-14 08:25:54');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (58, 1, 'Membuka Halaman Employee', '2024-06-14 08:26:17', '2024-06-14 08:26:17');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (59, 1, 'Membuka Halaman Employee', '2024-06-14 08:35:36', '2024-06-14 08:35:36');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (60, 1, 'Membuka Halaman Employee', '2024-06-14 08:36:04', '2024-06-14 08:36:04');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (61, 1, 'Membuat Employee Baru : Arya Disastra', '2024-06-14 08:40:16', '2024-06-14 08:40:16');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (62, 1, 'Membuka Halaman Employee', '2024-06-14 08:40:16', '2024-06-14 08:40:16');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (63, 1, 'Membuka Halaman Employee', '2024-06-14 08:43:27', '2024-06-14 08:43:27');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (64, 1, 'Membuka Halaman Employee', '2024-06-14 08:43:37', '2024-06-14 08:43:37');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (65, 1, 'Membuka Halaman Employee', '2024-06-14 08:43:51', '2024-06-14 08:43:51');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (66, 1, 'Membuka Halaman Employee', '2024-06-14 08:45:23', '2024-06-14 08:45:23');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (67, 1, 'Membuka Halaman Employee', '2024-06-14 08:46:34', '2024-06-14 08:46:34');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (68, 1, 'Membuka Halaman Employee', '2024-06-14 08:47:09', '2024-06-14 08:47:09');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (69, 1, 'Membuka Halaman Employee', '2024-06-14 08:47:28', '2024-06-14 08:47:28');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (70, 1, 'Membuka Halaman Employee', '2024-06-14 08:49:20', '2024-06-14 08:49:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (71, 1, 'Membuka Halaman Employee', '2024-06-14 08:49:43', '2024-06-14 08:49:43');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (72, 1, 'Membuka Halaman Employee', '2024-06-14 08:51:35', '2024-06-14 08:51:35');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (73, 1, 'Membuka Halaman Employee', '2024-06-14 08:52:10', '2024-06-14 08:52:10');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (74, 1, 'Membuka Halaman Employee', '2024-06-14 08:52:25', '2024-06-14 08:52:25');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (75, 1, 'Membuka Halaman Employee', '2024-06-14 08:54:21', '2024-06-14 08:54:21');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (76, 1, 'Membuat Employee Baru : Arya Disastra Edit', '2024-06-14 09:08:02', '2024-06-14 09:08:02');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (77, 1, 'Membuka Halaman Employee', '2024-06-14 09:08:02', '2024-06-14 09:08:02');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (78, 1, 'Update Employee : Arya Disastra Edit 2', '2024-06-14 09:09:12', '2024-06-14 09:09:12');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (79, 1, 'Membuka Halaman Employee', '2024-06-14 09:09:12', '2024-06-14 09:09:12');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (80, 1, 'Menghapus Divisi : ', '2024-06-14 09:09:56', '2024-06-14 09:09:56');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (81, 1, 'Membuka Halaman Employee', '2024-06-14 09:09:56', '2024-06-14 09:09:56');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (82, 1, 'Membuka Halaman Divisi', '2024-06-14 09:10:00', '2024-06-14 09:10:00');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (83, 1, 'Membuka Halaman Jabatan', '2024-06-14 09:10:02', '2024-06-14 09:10:02');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (84, 1, 'Membuka Halaman Employee', '2024-06-14 09:10:05', '2024-06-14 09:10:05');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (85, 1, 'Membuka Halaman Employee', '2024-06-14 09:10:07', '2024-06-14 09:10:07');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (86, 1, 'Menghapus Employee : ', '2024-06-14 09:10:18', '2024-06-14 09:10:18');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (87, 1, 'Membuka Halaman Employee', '2024-06-14 09:10:18', '2024-06-14 09:10:18');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (88, 1, 'Membuka Halaman Employee', '2024-06-14 09:11:19', '2024-06-14 09:11:19');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (89, 1, 'Membuka Halaman Employee', '2024-06-14 09:12:43', '2024-06-14 09:12:43');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (90, 1, 'Membuka Halaman Employee', '2024-06-14 10:14:51', '2024-06-14 10:14:51');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (91, 1, 'Membuka Halaman Employee', '2024-06-14 10:18:13', '2024-06-14 10:18:13');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (92, 1, 'Membuka Halaman Employee', '2024-06-14 10:36:31', '2024-06-14 10:36:31');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (93, 1, 'Membuka Halaman Employee', '2024-06-14 10:37:19', '2024-06-14 10:37:19');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (94, 1, 'Membuka Halaman Employee', '2024-06-14 10:42:59', '2024-06-14 10:42:59');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (95, 1, 'Membuka Halaman Employee', '2024-06-14 10:44:11', '2024-06-14 10:44:11');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (96, 1, 'Membuka Halaman Employee', '2024-06-14 10:45:40', '2024-06-14 10:45:40');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (97, 1, 'Membuat Employee Baru : Agus', '2024-06-14 10:46:38', '2024-06-14 10:46:38');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (98, 1, 'Membuka Halaman Employee', '2024-06-14 10:46:38', '2024-06-14 10:46:38');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (99, 1, 'Update Employee Status : ', '2024-06-14 10:52:43', '2024-06-14 10:52:43');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (100, 1, 'Membuka Halaman Employee', '2024-06-14 10:52:43', '2024-06-14 10:52:43');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (101, 1, 'Membuka Halaman Employee', '2024-06-14 10:55:20', '2024-06-14 10:55:20');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (102, 1, 'Membuka Halaman Employee', '2024-06-14 10:55:50', '2024-06-14 10:55:50');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (103, 1, 'Membuka Halaman Employee', '2024-06-14 10:56:13', '2024-06-14 10:56:13');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (104, 1, 'Membuat Employee Baru : Aldi', '2024-06-14 10:56:44', '2024-06-14 10:56:44');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (105, 1, 'Membuka Halaman Employee', '2024-06-14 10:56:44', '2024-06-14 10:56:44');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (106, 1, 'Update Employee Status : ', '2024-06-14 10:56:54', '2024-06-14 10:56:54');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (107, 1, 'Membuka Halaman Employee', '2024-06-14 10:56:54', '2024-06-14 10:56:54');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (108, 1, 'Membuka Halaman Employee', '2024-06-14 10:57:07', '2024-06-14 10:57:07');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (109, 1, 'Membuka Halaman Employee', '2024-06-14 10:58:37', '2024-06-14 10:58:37');
INSERT INTO `activity` (`id`, `user_id`, `deskripsi`, `created_at`, `updated_at`) VALUES (110, 1, 'Membuka Halaman Employee', '2024-06-14 10:59:10', '2024-06-14 10:59:10');
COMMIT;

-- ----------------------------
-- Table structure for districts
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `districts_regency_id_foreign` (`regency_id`),
  KEY `districts_id_index` (`id`),
  CONSTRAINT `districts_regency_id_foreign` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of districts
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for divisi
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of divisi
-- ----------------------------
BEGIN;
INSERT INTO `divisi` (`id`, `nama`, `created_at`, `updated_at`) VALUES (1, 'IT', '2024-06-14 06:20:20', '2024-06-14 06:20:20');
INSERT INTO `divisi` (`id`, `nama`, `created_at`, `updated_at`) VALUES (3, 'Finance', '2024-06-14 06:22:30', '2024-06-14 06:25:08');
COMMIT;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `leader_id` int DEFAULT NULL,
  `divisi_id` int NOT NULL,
  `jabatan_id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `tanggal_bergabung` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of employee
-- ----------------------------
BEGIN;
INSERT INTO `employee` (`id`, `leader_id`, `divisi_id`, `jabatan_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `kontak`, `jenis_kelamin`, `alamat`, `tanggal_bergabung`, `status`, `created_at`, `updated_at`) VALUES (1, NULL, 1, 1, 'Arya Disastra', 'Cimahi', '2002-09-09', 'aryadisastra63@gmail.com', '089697457066', 'Laki-Laki', '800 Avenue X\r\nsuite 6B', '2024-06-14', 'aktif', '2024-06-14 08:40:16', '2024-06-14 08:40:16');
INSERT INTO `employee` (`id`, `leader_id`, `divisi_id`, `jabatan_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `kontak`, `jenis_kelamin`, `alamat`, `tanggal_bergabung`, `status`, `created_at`, `updated_at`) VALUES (3, 1, 1, 2, 'Agus', 'Cisarua', '2024-06-14', 'agus@mail.com', '82793476826', 'Laki-Laki', NULL, '2024-06-14', 'cuti', '2024-06-14 10:46:38', '2024-06-14 10:52:43');
INSERT INTO `employee` (`id`, `leader_id`, `divisi_id`, `jabatan_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `kontak`, `jenis_kelamin`, `alamat`, `tanggal_bergabung`, `status`, `created_at`, `updated_at`) VALUES (4, NULL, 3, 1, 'Aldi', 'Cicadas', '2024-06-14', 'aldi@aldi.aldi', '8723487', 'Laki-Laki', NULL, '2024-06-14', 'nonaktif', '2024-06-14 10:56:44', '2024-06-14 10:56:54');
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
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

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`) VALUES (1, 'Leader', '2024-06-14 06:42:25', '2024-06-14 06:42:25');
INSERT INTO `jabatan` (`id`, `nama`, `created_at`, `updated_at`) VALUES (2, 'Staff', '2024-06-14 06:43:05', '2024-06-14 06:43:05');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17, '2016_06_01_000001_create_oauth_auth_codes_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18, '2016_06_01_000002_create_oauth_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20, '2016_06_01_000004_create_oauth_clients_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (22, '2017_05_02_140432_create_provinces_tables', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (23, '2017_05_02_140444_create_regencies_tables', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24, '2017_05_02_142019_create_districts_tables', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (25, '2017_05_02_143454_create_villages_tables', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (26, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (27, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (28, '2021_04_26_131048_create_permission_tables', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (29, '2024_03_27_102545_add_init_permission', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (30, '2024_03_27_115805_create_activity_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (31, '2024_06_14_055931_create_divisi_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (32, '2024_06_14_063445_create_jabatan_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (34, '2024_06_14_064752_create_employee_table', 4);
COMMIT;

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
BEGIN;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (1, 'App\\Models\\User', 1);
COMMIT;

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_auth_codes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_clients
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_personal_access_clients
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_refresh_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1, 'create-divisi', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (2, 'read-divisi', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (3, 'write-divisi', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (4, 'create-user', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (5, 'read-user', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (6, 'write-user', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (7, 'create-employee', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (8, 'read-employee', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (9, 'write-employee', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (10, 'create-jabatan', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (11, 'read-jabatan', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (12, 'write-jabatan', 'web', '2024-06-14 05:51:04', '2024-06-14 05:51:04');
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `provinces_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of provinces
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for regencies
-- ----------------------------
DROP TABLE IF EXISTS `regencies`;
CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `regencies_province_id_foreign` (`province_id`),
  KEY `regencies_id_index` (`id`),
  CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of regencies
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1, 'administrator', 'web', '2024-06-14 05:51:08', '2024-06-14 05:51:08');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lembaga_id` int DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lembaga_id`, `kontak`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Super Administrator', 'admin@laravel.com', NULL, '$2y$10$hiEjWmbw9O4ptb/c7E3Shu9GOjVKDJwP3deIRZoqb2raEDz6XCTkO', NULL, NULL, NULL, '2024-06-14 05:51:08', '2024-06-14 05:51:08');
COMMIT;

-- ----------------------------
-- Table structure for villages
-- ----------------------------
DROP TABLE IF EXISTS `villages`;
CREATE TABLE `villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `villages_district_id_foreign` (`district_id`),
  KEY `villages_id_index` (`id`),
  CONSTRAINT `villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of villages
-- ----------------------------
BEGIN;
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
