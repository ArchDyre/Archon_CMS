-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 04:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archon`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'uncategorized'),
(2, 'Latest'),
(3, 'Advice'),
(4, 'Coding'),
(5, 'Coding Resources'),
(7, 'Anime'),
(8, 'Vapes'),
(9, 'ahksbxc,kj');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text DEFAULT NULL,
  `comment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_date`, `comment_author`, `comment_email`, `comment_content`, `comment_status`) VALUES
(1, 4, '2019-10-26', 'Rohan Dyre', 'pizza@milk.com', 'Metus placerat magna sit vel ut ipsum metus magna metus nisi tortor tristique tortor adipiscing nisi quis suspendisse accumsan ipsum elit quis scelerisque nunc bibendum.', 'published'),
(2, 5, '2019-10-27', 'Peter von Spellen', 'peterspellen@gmail.com', 'Eu euismod fusce sollicitudin rutrum amet suspendisse arcu nisi nec aliquam euismod diam portaest accumsan aliquam commodo rutrum felis vivamus scelerisque quam felis sem nisl.', 'published'),
(3, 7, '2019-10-27', 'Sarah Rose', 'sarahrs@gmail.com', 'Interdum condimentum elit quisque interdum accumsan et morbi eu facilisis quisque lorem ex tempus erat erat id commodo bibendum maecenas morbi elit eu ut tincidunt.', 'draft'),
(4, 7, '2019-10-28', 'Jake Snooper', 'jsnoopy@jambot.com', 'Maximus purus lacus ut orci id commodo cursus tincidunt nunc ipsum enim et sollicitudin lorem quam vel portaest vivamus nisl sed tristique interdum urna purus.', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(5) NOT NULL DEFAULT 1,
  `post_title` varchar(255) DEFAULT 'No Post Title Found',
  `post_author` varchar(255) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_tags` text DEFAULT NULL,
  `post_status` varchar(50) DEFAULT NULL,
  `post_comment_count` int(10) NOT NULL DEFAULT 0,
  `post_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_tags`, `post_status`, `post_comment_count`, `post_content`) VALUES
(2, 4, 'Is PHP still relavent in 2019?', 'Jacob Taylor', '2019-10-10', 'lights_750X300.png', 'php, coding, 2019, programming, beginners', 'published', 0, 'Placerat nulla tincidunt tristique nunc a proin scelerisque maecenas ut lacus condimentum morbi ut bibendum molestie interdum proin tempus et sollicitudin morbi scelerisque ut accumsan.<br /><br /><br />\r\n<br /><br /><br />\r\nNisl purus nisi scelerisque scelerisque quam purus enim nec sem magna fusce facilisis molestie magna facilisis dolor ipsum amet eu enim nisl ipsum rutrum nisl.<br /><br /><br />\r\n<br /><br /><br />\r\nUrna hendrerit accumsan eget orci sollicitudin eu varius cursus ut suspendisse purus id portaest sed suspendisse elementum erat vivamus et maecenas metus cursus arcu mi.'),
(3, 3, 'Why programmers should go to the gym!', 'Martine Del Vito', '2019-10-12', 'austin-chan-small-cloud.png', 'coders, programmers, software developers, fitness, stay active', 'published', 0, 'Mi facilisis sed enim sollicitudin commodo commodo scelerisque ut adipiscing ut nec tincidunt hendrerit sed suspendisse elit maecenas consectetur et ipsum vel eget urna purus.<br />\r\n<br />\r\nEu eros aliquam magna amet sit quisque molestie bibendum enim euismod pellentesque hendrerit elementum id bibendum suspendisse nisl dolor tristique nisl id sollicitudin orci fusce.<br />\r\n<br />\r\nInterdum massa hendrerit erat lacus quam maecenas consectetur maximus nisi id consectetur proin nunc elementum nisl enim magna aliquam sed vivamus tincidunt eu gravida lorem.<br />\r\n<br />\r\nMetus portaest magna fusce quam eu nulla nec hendrerit scelerisque felis maecenas quisque placerat lorem eget fusce orci elit enim lacus hendrerit mi nunc diam.'),
(4, 5, 'Where to download Free Commercial use Images', 'James Kinng', '2019-10-13', 'lights_750X300.png', 'resources, coding resources, free to use', 'published', 0, 'Erat ut nisi vivamus et maximus tincidunt bibendum placerat portaest adipiscing suspendisse gravida maximus urna accumsan ac a elit sed tincidunt adipiscing bibendum felis ut.<br />\r\n<br />\r\nCommodo elit urna nisi nunc vel rutrum varius consectetur id gravida commodo nisi quisque enim id massa eu congue leo proin vivamus cursus et ac.'),
(5, 3, 'Best pizza restaurants in Cape Town', 'Issiq Von Itis', '2019-10-21', 'broken-image.png', 'Food, Yummy, pizzza', 'draft', 0, 'Sed diam quis consectetur ex et elementum eu tristique eu nec sollicitudin mi portaest eu tortor urna maecenas commodo molestie tortor scelerisque ipsum cursus condimentum.<br />\r\n<br />\r\nUrna proin cursus lacus sollicitudin lacus tristique maecenas mi consectetur elementum aliquam a sem eros condimentum lacus massa quis portaest vivamus accumsan ex a enim.<br />\r\n<br />\r\nMorbi maecenas arcu commodo ut morbi nulla arcu urna condimentum nec enim proin hendrerit purus elementum tortor tristique massa sollicitudin congue magna leo a suspendisse.'),
(7, 3, 'Yo bro', 'Me', '2019-10-23', '', 'Bronation ', 'published', 0, 'Be a bro yo'),
(8, 3, 'Are pets better than having children in 2019?', 'Cindy Flatterfood', '2019-10-23', 'lights_750X300.png', 'animals, pets, babies, children, 2019', 'published', 0, 'Ex interdum pellentesque sed maximus id morbi tristique enim adipiscing magna dolor hendrerit quam ex massa amet sollicitudin rutrum varius id nisi eros nec cursus.<br /><br />\r\n<br /><br />\r\nProin sollicitudin enim congue lacus quis congue eu proin arcu proin nunc felis enim elementum id erat a ac ut bibendum sit tempus nisl sit.'),
(9, 7, 'Shrimps, good or bad?', 'Sam Burrow', '2019-10-25', 'stop_750X300.png', 'fish, shrimps, food, ocean, decision, help', 'published', 0, 'Metus purus molestie dolor vel massa molestie arcu diam scelerisque ipsum scelerisque varius a urna sit adipiscing placerat aliquam gravida elementum erat rutrum nisl morbi.<br />\r\n<br />\r\n<br />\r\nUrna proin molestie commodo phasellus phasellus molestie a sollicitudin lorem scelerisque sed maecenas eu quis orci maximus quis tincidunt elementum nunc vel consectetur quam fusce.<br />\r\n<br />\r\nPortaest urna sem orci eu et nisl enim dolor a enim diam magna molestie nisi hendrerit eget bibendum nulla vel condimentum ipsum sed ipsum eros.'),
(10, 4, 'Php Tips for beginners', 'Sam Zhalloworth', '2019-10-27', 'mark-tegethoff-750x300.png', 'Peace, php, tips, 2019, recent, beginner', 'published', 0, 'Mi lacus magna nec felis quam hendrerit leo placerat erat ac quisque congue arcu ac lacus suspendisse erat adipiscing accumsan erat facilisis eros rutrum mi.<br />\r\n<br />\r\nScelerisque magna rutrum erat eget sem rutrum erat phasellus ipsum bibendum aliquam eros massa arcu suspendisse ac quis cursus tortor ex nisl eros hendrerit arcu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
