-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2021 at 08:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group2`
--

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `sno` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`sno`, `title`, `content`) VALUES
(1, 'Learn HTML', 'HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages. HTML was created by Berners-Lee in late 1991 but \"HTML 2.0\" was the first standard HTML specification which was published in 1995. HTML 4.01 was a major version of HTML, and it was published in late 1999. Though HTML 4.01 version is widely used but currently we are having HTML-5 version, which is an extension to HTML 4.01, and this version was published in 2012.\r\nOriginally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers. Now, HTML is being widely used to format web pages with the help of different tags available in HTML language. Some key advantages of learning HTML are to create website or customize an existing web template if you know HTML well. Become a web designer - If you want to start a career as a professional web designer, HTML and CSS designing is a must skill. You will be able to understand web if you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results. Lastly learn other languages, once you understand the basic of HTML then other related technologies like JavaScript, PHP, or angular are become easier to understand.  \r\n'),
(2, 'Learn CSS', 'CSS is the language for web and graphic designers to learn. Short for Cascading Style Sheet, CSS is the language used to add style to HTML elements. If you are unfamiliar with HTML you will have little use for CSS. We need CSS to add our own custom styles; we need CSS to add color, size, columns, and layout; we need CSS to beautify our typography; we need CSS to add background textures and images. If good HTML is the key to an organized, accessible web, then CSS is the key to a beautiful web. CSS puts the design in Web Design.'),
(3, 'Learn JavaScript', 'JavaScript is an object-oriented computer programming language commonly used to create interactive effects within web browsers. It is designed for creating network-centric applications. It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML. It is open and cross-platform. JavaScript is a must for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. Some of the key advantages of learning JavaScript are as follows: JavaScript is the most popular programming language in the world and that makes it a programmer’s great choice. Once you learnt JavaScript, it helps you developing great front-end as well as back-end software using different JavaScript based frameworks like jQuery, Node.JS etc. JavaScript is everywhere, it comes installed on every modern web browser and so to learn JavaScript you really do not need any special environment setup. JavaScript usage has now extended to mobile app development, desktop app development, and game development.');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `sno` varchar(12) NOT NULL,
  `qid` int(10) NOT NULL,
  `qno` varchar(10) NOT NULL,
  `ques` mediumtext NOT NULL,
  `opt1` mediumtext NOT NULL,
  `opt2` mediumtext NOT NULL,
  `opt3` mediumtext NOT NULL,
  `ans` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`sno`, `qid`, `qno`, `ques`, `opt1`, `opt2`, `opt3`, `ans`) VALUES
('1_1', 1, '1', 'What does HTML stand for? ', 'a. Hyper Text Markup Language', 'b. Home Text Markup Language ', 'c. Hyper Text Making Language', 'a. Hyper Text Markup Language'),
('1_2', 1, '2', 'When was HTML-5 version published? ', 'a. 2009', 'b. 2015', 'c. 2012', 'c. 2012'),
('1_3', 1, '3', 'What is HTML developed for?', 'a. Intent of defining the structure of documents like headings ', 'b. Intent of defining the structure of documents like paragraphs', 'c. Intent of defining the structure of documents like headings, paragraphs, lists, and so forth.', 'c. Intent of defining the structure of documents like headings, paragraphs, lists, and so forth.'),
('1_4', 1, '4', 'What are some key advantages of learning HTML?', 'a. Creating and customizing websites and becoming web designer', 'b. Understand the web and optimizing your website ', 'c. All of the above', 'c. All of the above'),
('2_1', 2, '1', 'Who must learn CSS?', 'a. Web and graphic designers ', 'b. Backend programmers', 'c. Everyone	\r\n', 'a. Web and graphic designers '),
('2_2', 2, '2', 'What Markup language can CSS add style to?', 'a. Java', 'b. HTML', 'c. C++	', 'b. HTML'),
('2_3', 2, '3', 'Why is CSS important to web and graphic designers?', 'a. To customize the style of the webpage', 'b. To customize the style of our Java code 	', 'c. To customize the style of the C++ code', 'a. To customize the style of the webpage'),
('2_4', 2, '4', 'What does CSS do?', 'a. Edit the style of the webpage elements', 'b. Edit the content of the webpage', ' c. None of the above', 'a. Edit the style of the webpage elements'),
('3_1', 3, '1', 'What is JavaScript? ', 'a. an object-oriented computer programming language commonly used to create interactive effects within web browsers ', 'b. a functional-oriented computer programming language commonly used to create interactive effects within web browsers ', 'c. a procedural-oriented computer programming language commonly used to create interactive effects within web browsers.', 'a. an object-oriented computer programming language commonly used to create interactive effects within web browsers '),
('3_2', 3, '2', 'JavaScript is integrated with? ', 'a. Java ', 'b. HTML', 'c. All of the above ', 'c. All of the above '),
('3_3', 3, '3', 'JavaScript is a/an? ', 'a. Open-Source language', 'b. Cross-Platform language ', 'c. All of the above', 'c. All of the above'),
('3_4', 3, '4', 'JavaScript can help with developing what types of software?', 'a. Front-end software', 'b. Back-end Software', 'c. All of the above', 'c. All of the above');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quiz1` int(10) DEFAULT NULL,
  `quiz2` int(10) DEFAULT NULL,
  `quiz3` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `password`, `dt`, `quiz1`, `quiz2`, `quiz3`) VALUES
(1, 'AA', 'TryingOut@gmail.com', '123123', '2021-11-28 23:07:42', 1, 2, 2),
(2, 'weqew', 'heylol@gmail.com', '111111', '2021-11-18 18:39:17', 4, 2, 3),
(3, 'aa', 'TryingTrying@gmail.com', '232323', '2021-11-18 19:30:21', 1, 2, 3),
(4, 'hello ', 'hi@gmail.com', '111111', '2021-11-19 13:45:05', NULL, NULL, NULL),
(5, 'Last Time', '222@gmail.com', '121212', '2021-11-19 14:22:12', 4, NULL, NULL),
(6, 'Final Check', 'FinalCheck@gmail.com', '121212', '2021-11-23 01:09:59', 2, 0, 3),
(7, 'FinaLLLLLL', 'FINALLLLLL@gmail.com', '1212', '2021-11-28 22:18:47', NULL, NULL, NULL),
(8, 'Alhatoon Algarni', 'FINALCOUNTDOWNTOTOTO@gmail.com', '12341234', '2021-11-28 23:09:03', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
