-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2018 at 05:36 PM
-- Server version: 5.7.21-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `author_name` varchar(20) NOT NULL,
  `isbn_number` bigint(13) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `item_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY (`author_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_name`, `isbn_number`, `book_name`, `item_id`, `category`, `gender`) VALUES
('Agatha Christie', 165377286, 'Murder of Roger Ackroyd', 7001, 'Fiction', 'F'),
('John Garfield', 100166200, 'Fascist Movements of 70s', 7003, 'Politics', 'M'),
('Ryan McFarland', 122100200, 'Hypnotism as an Art', 7004, 'Psychology', 'M'),
('William Shakespeare', 100117286, 'Othello', 7002, 'Drama', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` char(1) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'General',
  `address` varchar(256) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1023 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `username`, `password`, `email`, `birth_date`, `gender`, `category`, `address`) VALUES
(1009, 'Jamie', 'Lannister', 'jam600', 'jam600', 'jam600@gm.com', '1990-09-18', 'M', 'Special', '77 Old Castle Rock, Scotland-8880'),
(1010, 'Frank', 'Underwood', 'fu420', 'fu420', 'fu420@gm.com', '1962-10-04', 'M', 'General', '100 Senate Blvd, WA-10067'),
(1011, 'Claire', 'Underwood', 'cu420', 'cu420', 'cu420@gm.com', '1968-01-09', 'F', 'General', '100 Senate Blvd, WA-10067'),
(1012, 'Garry', 'Jones', 'gar543', 'gar543', 'gar543@gm.com', '1970-08-07', 'M', 'General', '65 Hicks Lane, TX-76055'),
(1013, 'Frank', 'Sinatra', 'bb', 'bb', 'bb@gm.com', '1945-08-09', 'M', 'General', '55 Chestnut St'),
(1014, 'Bob', 'Dylan', 'bob888', 'bob888bd', 'bd888@gm.com', '1945-08-06', 'M', 'General', '55 Chestnut St. Atlanta-88890'),
(1015, 'Heath', 'Ledger', 'het320', 'het320', 'het320@gm.com', '1980-02-12', 'M', 'Special', '78 Spaniolo Dr. Albuquerque'),
(1016, 'James', 'Wong', 'jam973', 'jam973', 'jw97@gm.com', '1980-02-12', 'M', 'General', '80 Woodcrest St. CA-71020'),
(1017, 'Ali', 'Hassan', 'al', 'al', 'al@gm.com', '1980-04-05', 'M', 'General', '44 Chestnut Av Atlanta'),
(1018, 'Kamal', 'Mistry', 'lm', 'km', 'km@gm.com', '1945-08-06', 'm', 'General', '77 Summit Av CA - 70192'),
(1019, 'Sneha', 'Sharma', 'sneha', 'sneha', 'sn@gm.com', '2001-02-13', 'F', 'General', '44 Chestnut Av Atlanta'),
(1020, 'James', 'Cameron', 'jam222', 'jam222', 'jam222@gm.com', '1980-02-12', 'M', 'Special', '80 Woodcrest St. CA-71020'),
(1022, 'Hello', 'Kitty', 'hey32', 'hey32', 'hey@gm.com', '2001-02-13', 'F', 'General', '55 Chestnut St. Atlanta-88890');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE IF NOT EXISTS `director` (
  `staff_id` int(11) NOT NULL,
  `director_username` varchar(20) DEFAULT NULL,
  `director_password` varchar(20) DEFAULT NULL,
  `dir_fname` varchar(20) DEFAULT NULL,
  `dir_lname` varchar(20) DEFAULT NULL,
  `bdate` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  `joining_date` date NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`staff_id`, `director_username`, `director_password`, `dir_fname`, `dir_lname`, `bdate`, `address`, `salary`, `joining_date`, `gender`) VALUES
(90001, 'georged5213', 'georged5213', 'George', 'Dempsey', '1955-08-25', '67 Westbrook Blvd, NY-00087', '9000.00', '1999-02-01', 'M'),
(90002, 'maryd9980', 'maryd9980', 'Mary', 'Dempsey', '1962-02-16', '67 Westbrook Blvd, NY-00087', '9000.00', '1999-02-01', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `description` varchar(30) NOT NULL,
  `version` varchar(10) DEFAULT NULL,
  `published_date` date NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7023 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `description`, `version`, `published_date`, `price`, `order_id`) VALUES
(7001, 'AgathaChristieMurderofRogerAcroyd', 'Book Hardcover', 'Batch 2', '2012-03-20', '22.50', 4),
(7002, 'William Shakespeare - Othello', 'Book Paperback', 'Batch 10', '2008-03-15', '45.60', 3),
(7003, 'Fascist Movements of 70s', 'Book Hardcover', 'Batch 45', '1975-07-25', '52.75', 2),
(7004, 'Hypnotism as an Art', 'Book Hardcover', 'Batch 13', '2000-07-20', '33.50', 1),
(7005, 'Snakes in Australia', 'BOOK HARDCOVER', 'Batch 03', '2015-12-25', '88.50', 7),
(7007, 'Gone with the wind', 'Movie', 'Release 77', '1992-03-14', '16.72', 8),
(7009, 'Jurrasic Park', 'Movie', 'Batch 22', '1999-02-12', '13.00', 9),
(7010, 'Tomb Raider', 'Movie', 'Batch 12', '2002-06-12', '17.00', 10),
(7011, 'And the mountains echoed', 'Book Paperback', 'Lot 14', '2007-10-14', '12.99', 10),
(7013, 'Chronicles of Narnia', 'Book Paperback', '19.3.77', '2000-08-07', '16.00', 8),
(7016, 'Theory of Evolution', 'Book Hardcover', '166', '1920-03-10', '26.00', 10),
(7017, 'The Theory Of Everything', 'Book Paperback', '66', '2000-08-07', '18.00', 4),
(7018, 'Kuckoo', 'Book Hardcover', '123', '1920-03-10', '8.00', 1),
(7019, 'Sholay', 'Movie', '625', '1975-12-12', '20.00', 2),
(7020, 'Lagaan', 'Movie', '223', '2001-06-12', '11.99', 7),
(7021, 'A Century Is Not Enough', 'Book Paperback', '1', '2018-02-14', '17.00', 8),
(7022, 'Welcome To Arabia', 'Book Paperback', '1', '2000-08-07', '15.00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL DEFAULT 'CREDIT',
  `total_amount` decimal(5,2) NOT NULL,
  `delivery_type` varchar(20) NOT NULL DEFAULT 'STANDARD',
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `order_date`, `customer_id`, `order_status`, `quantity`, `payment_type`, `total_amount`, `delivery_type`, `staff_id`) VALUES
(1, 7004, '2018-04-13', 1007, 'Delivered', 1, 'DEBIT', '25.00', 'EXPRESS', 50001),
(2, 7003, '2018-04-03', 1009, 'Delivered', 2, 'CASH', '85.00', 'TAKE AWAY', 50002),
(3, 7002, '2018-04-13', 1008, 'In transit', 1, 'COD', '36.00', 'STANDARD', 50003),
(4, 7001, '2018-04-13', 1010, 'In transit', 4, 'CREDIT', '60.00', 'STANDARD', 50004),
(5, 7006, '2018-04-13', 1012, 'Shipped', 2, 'CREDIT', '50.00', 'EXPRESS', 50002),
(7, 7005, '2018-03-10', 1011, 'Delivered', 1, 'CREDIT', '15.00', 'DONE', 50003),
(8, 7007, '2018-03-10', 1011, 'Delivered', 1, 'CREDIT', '32.00', 'Standard', 50001),
(9, 7009, '2018-04-13', 1008, 'Delivered', 1, 'CREDIT', '8.00', 'STANDARD', 50002),
(10, 7010, '2018-04-13', 1008, 'Delivered', 1, 'CREDIT', '12.00', 'STANDARD', 50001),
(11, 7011, '2018-03-10', 1011, 'Delivered', 1, 'CASH', '6.99', 'DONE', 50003),
(12, 7010, '2018-04-13', 1011, 'Delivered', 1, 'CREDIT', '12.00', 'DONE', 50002),
(13, 7010, '2018-04-13', 1008, 'Delivered', 1, 'CREDIT', '12.00', 'DONE', 50003),
(14, 7010, '2018-04-13', 1011, 'Delivered', 1, 'CREDIT', '12.00', 'DONE', 50001),
(15, 7010, '2018-04-13', 1008, 'Delivered', 1, 'CREDIT', '12.00', 'DONE', 50002),
(16, 7021, '2018-04-23', 1008, 'In transit', 1, 'CREDIT', '12.00', 'STANDARD', 50001),
(17, 7021, '2018-04-23', 1007, 'In transit', 2, 'CREDIT', '24.00', 'STANDARD', 50002),
(18, 7021, '2018-04-23', 1011, 'Shipped', 1, 'COD', '12.00', 'STANDARD', 50004);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `country` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `country`, `item_id`) VALUES
(3426, 'Penguin Ltd', 'USA', 7003),
(7790, 'Jamerson Ltd', 'AUS', 7002),
(7863, 'McMillan International', 'ENG', 7004),
(9155, 'Harper Collins', 'USA', 7001);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_username` varchar(12) NOT NULL,
  `staff_password` varchar(12) NOT NULL,
  `staff_fname` varchar(20) NOT NULL,
  `staff_lname` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  `joining_date` date NOT NULL,
  `gender` char(1) NOT NULL,
  `reports_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `reports_to` (`reports_to`)
) ENGINE=InnoDB AUTO_INCREMENT=50005 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_username`, `staff_password`, `staff_fname`, `staff_lname`, `bdate`, `address`, `salary`, `joining_date`, `gender`, `reports_to`) VALUES
(50001, 'paul50001', 'paul50001', 'Paul', 'Hernandez', '1990-12-12', '16 Amherst Ln, OK-66754', '8000.00', '2015-08-20', 'M', 90002),
(50002, 'ryan50002', 'ryan50002', 'Ryan', 'Gosling', '1990-08-10', '01 Amherst Ln, OK-66754', '9500.00', '2015-01-10', 'M', 90001),
(50003, 'lisa50003', 'lisa50003', 'Lisa', 'Hayden', '1988-02-20', '77 Bridewater Av, NJ-08533', '7000.00', '2015-04-28', 'F', 90002),
(50004, 'ruth50004', 'ruth50004', 'Ruth', 'McLister', '1995-12-25', '90 Brick Lane, NY-08533', '6500.00', '2015-04-22', 'F', 90001);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_name`, `category`, `item_id`) VALUES
('Fascist Movement of 70s', 'Social Politics', 7003),
('Hypnotism as an Art', 'Psychology', 7004),
('Murder of Roger Acroyd', 'Thriller Fiction', 7001),
('Othello', 'Drama', 7002);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`reports_to`) REFERENCES `director` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
