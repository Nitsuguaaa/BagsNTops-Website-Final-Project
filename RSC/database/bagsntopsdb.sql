SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE bagsntopsdb;

CREATE TABLE accountstb (
    accountId VARCHAR(7) NOT NULL PRIMARY KEY,
    accountName VARCHAR(20) NOT NULL,
    accountEmail VARCHAR(50) NOT NULL,
    accountPassword VARCHAR(255) NOT NULL
);
\
CREATE TABLE customertb (
    customerId VARCHAR() PRIMARY KEY,
    accountId VARCHAR(),

)

CREATE TABLE productstb (

)

CREATE TABLE 
