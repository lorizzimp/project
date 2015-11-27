-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `mrt`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `cus`
-- 

CREATE TABLE `cus` (
  `id` int(6) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `position` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `cus`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `reserve`
-- 

CREATE TABLE `reserve` (
  `idreserve` int(6) NOT NULL,
  `nname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`idreserve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `reserve`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `room`
-- 

CREATE TABLE `room` (
  `idroom` int(5) NOT NULL,
  `nroom` varchar(20) NOT NULL,
  `floor` varchar(5) NOT NULL,
  `size` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`idroom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `room`
-- 

