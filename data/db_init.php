<?php
error_reporting(E_ALL); 
ini_set('display_errors',1); 
//include('check.php');
include('db_config.php');

/*
데이터베이스 생성
("mysql:host=$host;dbname=$databaseName",$databaseUser, $databasePassword);
$pdoDatabase = new PDO($host, $databaseUser, $databasePassword);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('DROP DATABASE IF EXISTS '.$databaseName);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS userdb DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci'); 
*/


/*
 * 테이블 생성
 */
$pdo = new PDO("mysql:host=$host;dbname=$databaseName",$databaseUser, $databasePassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$pdo->exec('DROP TABLE IF EXISTS admin_users;');

$pdo->exec('CREATE TABLE `admin_users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `userprofile` VARCHAR(255),
    `salt` VARCHAR(255) NOT NULL,
    `regtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `is_admin` tinyint(4) NOT NULL DEFAULT 0,
    `activate` tinyint(4) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci');
 
 
$pdo->exec('CREATE TABLE `board` (
 `no` int(11) NOT NULL AUTO_INCREMENT,
 `true_false` BOOLEAN NOT NULL,
 `category` VARCHAR(10) NOT NULL,
 `title` VARCHAR(50) NOT NULL,
 `content` VARCHAR(1500) NOT NULL,
 `id` VARCHAR(50) NOT NULL,
 `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci');


$pdo->exec('CREATE TABLE `popup` (
    `no` int(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(50) NOT NULL,
    `content` VARCHAR(1500) NOT NULL,
    `id` VARCHAR(50) NOT NULL,
    `start_date` datetime NOT NULL,
    `finish_date` datetime NOT NULL,
    `width` VARCHAR(10) NOT NULL,
    `height` VARCHAR(10) NOT NULL,
    `top_position` VARCHAR(10) NOT NULL,
    `left_position` VARCHAR(10) NOT NULL,
    `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`no`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci');


/*
 * 관리자 계정 admin 생성
 */

$default_password = 'admin';
$salt = bin2hex(openssl_random_pseudo_bytes(32));
$encrypted_password = base64_encode(encrypt($default_password, $salt));

$createAdmin = $pdo->prepare('INSERT INTO admin_users 
	(username, password, is_admin, activate, salt) VALUES
    ("admin", :password, 1, 1, :salt)');

$createAdmin->bindparam(":password", $encrypted_password);
$createAdmin->bindparam(":salt", $salt);
$createAdmin->execute();


echo "success.\n";