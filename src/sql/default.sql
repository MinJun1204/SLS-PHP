-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-09-12 07:42
-- 서버 버전: 8.0.17
-- PHP 버전: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `id10675326_suninsls`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `sls`
--

CREATE TABLE `sls` (
  `id` int(2) NOT NULL COMMENT '노트북 번호',
  `user` varchar(10) NOT NULL COMMENT '사용자',
  `c1` int(1) NOT NULL DEFAULT '0' COMMENT '1교시 사용',
  `c2` int(1) NOT NULL DEFAULT '0' COMMENT '2교시 사용',
  `c3` int(1) NOT NULL DEFAULT '0' COMMENT '3교시 사용',
  `c4` int(1) NOT NULL DEFAULT '0' COMMENT '4교시 사용',
  `c5` int(1) NOT NULL DEFAULT '0' COMMENT '5교시 사용',
  `c6` int(1) NOT NULL DEFAULT '0' COMMENT '6교시 사용',
  `c7` int(1) NOT NULL DEFAULT '0' COMMENT '7교시 사용',
  `broken` int(1) NOT NULL DEFAULT '0' COMMENT '고장 여부'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Sunin Laptop System';

--
-- 테이블의 덤프 데이터 `sls`
--

INSERT INTO `sls` (`id`, `user`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `broken`) VALUES
(1, '', 0, 0, 0, 0, 0, 0, 0, 0),
(2, '', 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', 0, 0, 0, 0, 0, 0, 0, 0),
(5, '', 0, 0, 0, 0, 0, 0, 0, 0),
(6, '', 0, 0, 0, 0, 0, 0, 0, 0),
(7, '', 0, 0, 0, 0, 0, 0, 0, 0),
(8, '', 0, 0, 0, 0, 0, 0, 0, 0),
(9, '', 0, 0, 0, 0, 0, 0, 0, 0),
(10, '', 0, 0, 0, 0, 0, 0, 0, 0),
(11, '', 0, 0, 0, 0, 0, 0, 0, 0),
(12, '', 0, 0, 0, 0, 0, 0, 0, 0),
(13, '', 0, 0, 0, 0, 0, 0, 0, 0),
(14, '', 0, 0, 0, 0, 0, 0, 0, 0),
(15, '', 0, 0, 0, 0, 0, 0, 0, 0),
(16, '', 0, 0, 0, 0, 0, 0, 0, 0),
(17, '', 0, 0, 0, 0, 0, 0, 0, 0),
(18, '', 0, 0, 0, 0, 0, 0, 0, 0),
(19, '', 0, 0, 0, 0, 0, 0, 0, 0),
(20, '', 0, 0, 0, 0, 0, 0, 0, 0),
(21, '', 0, 0, 0, 0, 0, 0, 0, 0),
(22, '', 0, 0, 0, 0, 0, 0, 0, 0),
(23, '', 0, 0, 0, 0, 0, 0, 0, 0),
(24, '', 0, 0, 0, 0, 0, 0, 0, 0),
(25, '', 0, 0, 0, 0, 0, 0, 0, 0),
(26, '', 0, 0, 0, 0, 0, 0, 0, 0),
(27, '', 0, 0, 0, 0, 0, 0, 0, 0),
(28, '', 0, 0, 0, 0, 0, 0, 0, 0),
(29, '', 0, 0, 0, 0, 0, 0, 0, 0),
(30, '', 0, 0, 0, 0, 0, 0, 0, 0),
(31, '', 0, 0, 0, 0, 0, 0, 0, 0),
(32, '', 0, 0, 0, 0, 0, 0, 0, 0),
(33, '', 0, 0, 0, 0, 0, 0, 0, 0),
(34, '', 0, 0, 0, 0, 0, 0, 0, 0),
(35, '', 0, 0, 0, 0, 0, 0, 0, 0),
(36, '', 0, 0, 0, 0, 0, 0, 0, 0),
(37, '', 0, 0, 0, 0, 0, 0, 0, 0),
(38, '', 0, 0, 0, 0, 0, 0, 0, 0),
(39, '', 0, 0, 0, 0, 0, 0, 0, 0),
(40, '', 0, 0, 0, 0, 0, 0, 0, 0),
(41, '', 0, 0, 0, 0, 0, 0, 0, 0),
(42, '', 0, 0, 0, 0, 0, 0, 0, 0),
(43, '', 0, 0, 0, 0, 0, 0, 0, 0),
(44, '', 0, 0, 0, 0, 0, 0, 0, 0),
(45, '', 0, 0, 0, 0, 0, 0, 0, 0),
(46, '', 0, 0, 0, 0, 0, 0, 0, 0),
(47, '', 0, 0, 0, 0, 0, 0, 0, 0),
(48, '', 0, 0, 0, 0, 0, 0, 0, 0),
(49, '', 0, 0, 0, 0, 0, 0, 0, 0),
(50, '', 0, 0, 0, 0, 0, 0, 0, 0),
(51, '', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `sls`
--
ALTER TABLE `sls`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `sls`
--
ALTER TABLE `sls`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT '노트북 번호', AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
