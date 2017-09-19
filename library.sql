-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 08:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_isbn` varchar(15) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_authors` varchar(255) NOT NULL,
  `book_categories` varchar(255) NOT NULL,
  `book_dateadded` datetime NOT NULL,
  `book_totalquantity` int(11) NOT NULL DEFAULT '1',
  `book_publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_isbn`, `book_title`, `book_authors`, `book_categories`, `book_dateadded`, `book_totalquantity`, `book_publisher`) VALUES
(1, '1455568872', 'Crisis of Character: A White House Secret Service Officer Discloses His Firsthand Experience with Hi', 'DR S.P GUPTA', 'History', '0000-00-00 00:00:00', 9, 'Center Street (June 28, 2016)'),
(2, '446310786', 'To Kill a Mockingbird', 'M.N MISHRA', 'Fiction', '0000-00-00 00:00:00', 9, 'Grand Central Publishing'),
(3, '9.78014E+12', 'The Count of Monte Cristo', 'JIT S. CHANDAN', 'Fiction', '0000-00-00 00:00:00', 12, 'Penguin UK'),
(4, '62316095', 'Sapiens', 'JIT S. CHANDAN ,  DR B.M JAIN', 'Science', '0000-00-00 00:00:00', 13, 'Harper'),
(5, '393352978', 'The Vital Question', 'DR B.M JAIN,R.CAUVERY, K. SUDHANAYAK, M.GIRIJA & R MEENAKSHI', 'Science', '0000-00-00 00:00:00', 21, 'W. W. Norton'),
(6, '9.78112E+12', 'The Power to Compete', 'DEBI S.SAINI, SAMI A.KHAN,JEROME JOSEPH', 'Business & Economics', '0000-00-00 00:00:00', 12, 'John Wiley & Sons'),
(7, '1338099132', 'Harry Potter and the Cursed Child - Parts I & II (Special Rehearsal Edition): The Official Script Bo', 'J. K. Rowling,Jack Thorne,John Tiffany', 'Juvenile Nonfiction', '0000-00-00 00:00:00', 16, 'Arthur A. Levine Books'),
(8, '143105426', 'Pride and Prejudice', 'Jane Austen', 'Fiction', '0000-00-00 00:00:00', 7, 'Penguin Classics'),
(9, '1849511268', 'Python 3 Object Oriented Programming', 'Dusty Phillips', 'Computers', '0000-00-00 00:00:00', 10, 'Packt Pub Limited'),
(10, '4902828', 'Robinson Cruso', 'David Prochazka', 'Science', '0000-00-00 00:00:00', 10, 'Twana'),
(11, 'ISBN', 'TEST1xcx', 'Ackland Jenny', 'Biography & Autobiography,Computers', '0000-00-00 00:00:00', 5, 'ISN'),
(12, '9.78359E+12', 'Zero to One', 'Blake Masters,Peter Thiel', 'Business & Economics', '0000-00-00 00:00:00', 10, 'Campus Verlag'),
(13, '9.78144E+12', 'The Everything Kids\' Geography Book', 'J. Elizabeth Mills,Jane P. Gardner', 'Juvenile Nonfiction', '0000-00-00 00:00:00', 10, 'Adams Media'),
(14, '1740201078', 'Excel Fast Track', 'Jeff Geha', 'Mathematics', '0000-00-00 00:00:00', 20, 'Pascal Press'),
(15, '202307638', 'airpack', 'Anselm L. Strauss,Barney G. Glaser', 'Family & Relationships', '0000-00-00 00:00:00', 2, 'Transaction Publishers'),
(16, 'ISBN23', '?????????', 'Ackland Jenny', '1.0 History', '0000-00-00 00:00:00', 5, 'dfg'),
(17, '486284735', 'Pride and Prejudice', 'Jane Austen,John Doe', 'education,manners,morality,upbringing', '0000-00-00 00:00:00', 566, 'Dover Publications'),
(18, 'ISBN1234567', 'test', 'Ackland Jenny', '1.0 History', '0000-00-00 00:00:00', 22, 'testpubilsherr'),
(19, '9.78014E+12', 'Going Solo', 'Ackland Jenny', 'Authors, English', '0000-00-00 00:00:00', 1, 'd'),
(20, '141322772', 'Boy and Going Solo', 'Roald Dahl', '1.0 History', '0000-00-00 00:00:00', 1, 'Penguin Books Limited'),
(21, 'ISBN435', 'qwerty', 'Ackland Jenny', '1.0 History', '0000-00-00 00:00:00', 50, 'ytuyu'),
(22, '', 'VECTOR ANYLYSIS', 'R.D MANGLIK & Sonu.S SETH', 'PHYSICS', '0000-00-00 00:00:00', 1, 'SHIVA LAL AGARWAL AND COMPANY'),
(23, '0333 92412 6', 'DILLI SULTANAT', 'M.HABIB & KUMAR.A NAZAMI', 'History', '0000-00-00 00:00:00', 1, 'MACMILLAN INDIA LTD.'),
(24, '81-8330-020-0', 'SALTATKALIN BHARAT KA SAMAJIK & SANSKRITIK ITIHAS', 'DR. R.K PARUTHI', 'History', '0000-00-00 00:00:00', 1, 'ARJUN PUBLISING HOUSE'),
(25, '81-219-0032-8', 'SUDUR PURV', 'PAL HIBART KLIED', 'History', '0000-00-00 00:00:00', 1, 'URESIA PUBLISHING HOUSE LTD.'),
(26, '81-7178-082-2', 'PRACHIN BHARAT', 'RADHA KUMUD MUKHERJEE', 'History', '0000-00-00 00:00:00', 1, 'RAJ KAMAL'),
(27, '856140228', 'TRAVELLER IN A VANSHIED LANDSCAPED', 'WILLIAM MORWOOD', 'History', '0000-00-00 00:00:00', 1, 'GERNTRY BOOKS'),
(28, '486284735', 'Compu', 'Farid,Seli', 'computer,basic,it,education', '0000-00-00 00:00:00', 25, 'Gen Next Information Technology'),
(29, '966 3055 621', '???????? ?????? ?? ????? ???', 'Herath, Pethum Asanka', 'Fiction', '0000-00-00 00:00:00', 1, 'Sooriya Publisher'),
(30, '1.23123E+11', 'Art of War', 'Angela Royston', '1.0 History,Computers', '0000-00-00 00:00:00', 1, 'times'),
(31, 'qwe', 'hannah', 'hannah', 'Other', '2017-03-21 16:17:27', 30, 'ako'),
(32, 'qwe', 'hannah', 'hannah', 'Other', '2017-03-21 16:18:17', 30, 'ako'),
(33, 'dds', 'sassss', 'bbb', 'Other', '2017-03-21 16:18:45', 30, 'jkashdas'),
(34, 'ghg', 'ksk', 'kxk', 'Other', '2017-03-21 17:18:51', 30, 'skxs'),
(35, 'hkjh', 'hehe', 'jkhkjh', 'Other', '2017-03-21 17:25:39', 30, 'ajksh'),
(36, 'sss', 'haha', 'hahahha', 'Other', '2017-03-21 17:27:45', 30, 'ash'),
(37, 'ddzv', 'jhkjh', 'kjhkjh', 'Other', '2017-03-21 17:52:22', 24, 'kjkjh'),
(38, 'gsd342', 'hehehe', 'hahahahahah', 'Other', '2017-03-24 18:50:59', 24, 'me'),
(39, 'zxvzx', 'hahahah', 'hahahahahahah', 'Other', '2017-03-24 18:52:13', 24, 'me'),
(40, 'SDCzd', 'afs', 'sdfsd', 'Other', '2017-03-25 02:44:39', 24, 'dvsdv'),
(41, '12675', 'hgg', 'gig', 'Other', '2017-03-25 06:22:41', 24, 'jkh'),
(42, 'sdvaasdfasd', 'asdfasd', 'dfaf', 'Other', '2017-03-25 06:29:12', 24, 'sdvasd'),
(43, '122', 'asas', 'asa', 'Other', '2017-08-02 15:20:35', 1222, 'me'),
(44, '124', 'Harryp', 'j.k rowling', 'Other', '2017-08-06 10:45:17', 5, 'me'),
(45, '123', 'aaaa', 'aaa', 'Other', '2017-08-09 14:49:41', 2, 'www'),
(46, 'zzzz', 'sdfds', 'dfds', 'Other', '2017-08-09 14:50:02', 3, '3'),
(47, 'asda', 'dsfsdf', 'jhkjh', 'Other', '2017-08-09 14:50:20', 2, '3234'),
(48, '234234', '33r3', 'uhhlh', 'Other', '2017-08-09 14:50:47', 7, 'dad'),
(49, 'vdf', 'hkl', 'kllkj', 'Other', '2017-08-09 14:51:21', 2, 'kj'),
(50, '343', 'eqwe', 'hlkjlkj', 'Other', '2017-08-09 14:51:50', 8, 'ewd'),
(51, 'we224', '234234', 'hlkjk', 'Other', '2017-08-09 14:52:26', 87, 'dww'),
(52, '1234', 'Libro ng kalungkutan', 'Ma. lung c. ote', 'Other', '2017-08-12 16:16:20', 1, 'SAD'),
(55, '1234', 'Libro ng kalungkutan', 'Ma. lung c. ote', 'Other', '2017-08-12 16:34:45', 1, 'SAD'),
(59, '12312316', 'hdkjash', 'kjhdkjash', 'Other', '2017-08-13 06:46:26', 1, 'wkehwq');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `imageID` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `imagePath` text NOT NULL,
  `imageName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`imageID`, `book_id`, `imagePath`, `imageName`) VALUES
(2, 37, 'C:/wamp64/www/onlinelibrary/uploads/books/183c888cd0f7d08889566e139bc28c.png', '183c888cd0f7d08889566e139bc28c.png'),
(3, 39, 'C:/wamp64/www/onlinelibrary/uploads/books/17440244_1338961776198166_2004312085_n.png', '17440244_1338961776198166_2004312085_n.png'),
(4, 40, 'C:/wamp64/www/onlinelibrary/uploads/books/17193867_1328189570561630_47066861_o.jpg', '17193867_1328189570561630_47066861_o.jpg'),
(5, 43, 'C:/wamp64/www/onlinelibrary/uploads/books/saints.gif', 'saints.gif'),
(6, 44, 'C:/wamp64/www/onlinelibrary/uploads/books/51Ka-PPwpYL__SX328_BO1,204,203,200_.jpg', '51Ka-PPwpYL__SX328_BO1,204,203,200_.jpg'),
(7, 45, 'C:/wamp64/www/onlinelibrary/uploads/books/Capture.PNG', 'Capture.PNG'),
(8, 46, 'C:/wamp64/www/onlinelibrary/uploads/books/Snapchat-1662356908513762688.jpg', 'Snapchat-1662356908513762688.jpg'),
(9, 47, 'C:/wamp64/www/onlinelibrary/uploads/books/Snapchat-5444726762084906790.jpg', 'Snapchat-5444726762084906790.jpg'),
(10, 48, 'C:/wamp64/www/onlinelibrary/uploads/books/IMG_20160407_172141.jpg', 'IMG_20160407_172141.jpg'),
(11, 49, 'C:/wamp64/www/onlinelibrary/uploads/books/P_20160911_125052_1.jpg', 'P_20160911_125052_1.jpg'),
(12, 50, 'C:/wamp64/www/onlinelibrary/uploads/books/14324315_10206751878386822_5868350086453828496_o.jpg', '14324315_10206751878386822_5868350086453828496_o.jpg'),
(13, 51, 'C:/wamp64/www/onlinelibrary/uploads/books/Puck.png', 'Puck.png'),
(14, 55, 'C:/wamp64/www/School-Mgmt-System/uploads/books/landscape-1493849790-giphy-9.gif', 'landscape-1493849790-giphy-9.gif'),
(18, 59, 'C:/wamp64/www/School-Mgmt-System/uploads/books/14324515_10206751918147816_780.jpg', '14324515_10206751918147816_780.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_books`
--

CREATE TABLE `borrow_books` (
  `borrow_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `borrow_status` varchar(10) NOT NULL DEFAULT 'pending',
  `date_borrowed` datetime NOT NULL,
  `date_returned` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_books`
--

INSERT INTO `borrow_books` (`borrow_id`, `book_id`, `users_id`, `borrow_status`, `date_borrowed`, `date_returned`, `active`) VALUES
(1, 14, 4, 'returned', '2017-03-24 18:59:00', '2017-03-24 12:19:57', 0),
(9, 10, 3, 'returned', '2017-03-24 12:54:02', '2017-03-24 12:56:23', 0),
(11, 13, 6, 'returned', '2017-03-24 12:55:10', '2017-03-24 12:56:25', 0),
(13, 37, 8, 'returned', '2017-03-25 02:44:52', '2017-03-25 05:19:52', 0),
(14, 10, 4, 'pending', '2017-03-25 02:45:37', NULL, 1),
(15, 37, 9, 'returned', '2017-03-25 05:19:46', '2017-03-25 05:19:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrow_request`
--

CREATE TABLE `borrow_request` (
  `request_id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `borrow_status` varchar(10) NOT NULL DEFAULT 'pending',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `type`) VALUES
(1, 'hannah', 'hannah@maganda.com', '202cb962ac59075b964b07152d234b70', 'Female', '0', '2017-03-06 15:30:41', '2017-03-06 15:30:41', 0),
(2, 'aljohn', 'aljohnpangilinan@yahoo.com', 'hannah', 'Male', '0961666116', '2017-03-06 15:33:16', '2017-03-06 15:33:16', 0),
(3, 'test', 'test@moto.com', '098f6bcd4621d373cade4e832627b4f6', 'Male', '092828282', '2017-03-10 15:18:03', '2017-03-10 15:18:03', 0),
(4, 'hannah', 'maganda@ako.com', 'eb09d5e396183f4b71c3c798158f7c07', 'Female', '09182828282', '2017-03-10 15:20:56', '2017-03-10 15:20:56', 0),
(5, 'hannah', 'hannah@moto.com', 'eb09d5e396183f4b71c3c798158f7c07', 'Female', '09090909', '2017-03-12 07:29:21', '2017-03-12 07:29:21', 0),
(6, 'hehe', 'hehe@hehe.com', '529ca8050a00180790cf88b63468826a', 'Male', '98989898', '2017-03-12 07:30:53', '2017-03-12 07:30:53', 0),
(7, 'Hannah Liao', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Female', '098181818181', '2017-03-15 18:04:51', '2017-03-15 18:04:51', 1),
(8, 'member', 'member@member.com', 'aa08769cdcb26674c6706093503ff0a3', 'Male', '0964654533', '2017-03-16 07:03:37', '2017-03-16 07:03:37', 0),
(9, 'Reever Blu', 'panget@ako.com', '40251d26efb6b82134bb1f5078d104cb', 'Male', '8798693', '2017-03-25 05:07:26', '2017-03-25 05:07:26', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`imageID`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `borrow_books`
--
ALTER TABLE `borrow_books`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `book_id` (`book_id`) USING BTREE,
  ADD KEY `users_id` (`users_id`) USING BTREE;

--
-- Indexes for table `borrow_request`
--
ALTER TABLE `borrow_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `users_id` (`users_id`) USING BTREE,
  ADD KEY `book_id` (`book_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `borrow_books`
--
ALTER TABLE `borrow_books`
  MODIFY `borrow_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `borrow_request`
--
ALTER TABLE `borrow_request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_images`
--
ALTER TABLE `book_images`
  ADD CONSTRAINT `book_images_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `borrow_books`
--
ALTER TABLE `borrow_books`
  ADD CONSTRAINT `borrow_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `borrow_books_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `borrow_request`
--
ALTER TABLE `borrow_request`
  ADD CONSTRAINT `borrow_request_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `borrow_request_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
