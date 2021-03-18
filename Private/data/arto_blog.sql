-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2021 at 12:35 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arto_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int UNSIGNED NOT NULL,
  `writer_id` int UNSIGNED NOT NULL,
  `story_title` varchar(128) NOT NULL,
  `story_slug` varchar(128) NOT NULL,
  `story_body` mediumtext,
  `story_category` set('War','Family','Tradition') DEFAULT NULL,
  `story_location` varchar(64) DEFAULT NULL,
  `story_pub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `story_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `writer_id`, `story_title`, `story_slug`, `story_body`, `story_category`, `story_location`, `story_pub_date`, `story_modify_date`) VALUES
(4, 3, 'AI ENTERPRISE SOLUTION', 'ai-enterprise-solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Velit dignissim sodales ut eu. Feugiat vivamus at augue eget arcu. Sagittis purus sit amet volutpat consequat mauris. Integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci. Amet justo donec enim diam vulputate. In arcu cursus euismod quis viverra nibh cras pulvinar mattis. Quam lacus suspendisse faucibus interdum posuere. Volutpat blandit aliquam etiam erat velit. Et tortor consequat id porta nibh venenatis cras sed. Id diam maecenas ultricies mi eget. Dignissim sodales ut eu sem integer vitae justo eget. Et tortor at risus viverra adipiscing at in tellus. Scelerisque varius morbi enim nunc. Vitae congue mauris rhoncus aenean vel elit.\r\n\r\nIn metus vulputate eu scelerisque felis. Semper quis lectus nulla at volutpat. Semper eget duis at tellus at urna condimentum mattis pellentesque. Duis ultricies lacus sed turpis tincidunt id. Neque volutpat ac tincidunt vitae semper. Egestas sed tempus urna et pharetra pharetra. Eget nunc scelerisque viverra mauris in aliquam sem fringilla. Est ullamcorper eget nulla facilisi etiam. Donec enim diam vulputate ut pharetra sit amet aliquam id. Eu scelerisque felis imperdiet proin fermentum leo vel orci. Aliquet enim tortor at auctor. Massa enim nec dui nunc mattis enim ut. Purus viverra accumsan in nisl nisi. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Tristique senectus et netus et malesuada. Venenatis lectus magna fringilla urna porttitor. Tortor posuere ac ut consequat semper viverra nam. Arcu non odio euismod lacinia at quis risus. Nulla pharetra diam sit amet nisl suscipit.\r\n\r\nDiam in arcu cursus euismod quis viverra nibh cras pulvinar. Morbi blandit cursus risus at ultrices mi. Lacinia at quis risus sed vulputate odio ut enim. Tempus quam pellentesque nec nam aliquam sem et tortor consequat. Sollicitudin nibh sit amet commodo nulla facilisi nullam. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Amet cursus sit amet dictum. Magna sit amet purus gravida. Amet venenatis urna cursus eget nunc scelerisque viverra mauris. Iaculis nunc sed augue lacus viverra vitae congue. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. Bibendum arcu vitae elementum curabitur. Eu mi bibendum neque egestas congue quisque egestas diam. Pretium lectus quam id leo. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Mi bibendum neque egestas congue quisque.\r\n\r\nVel quam elementum pulvinar etiam non. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Eget nunc scelerisque viverra mauris in aliquam sem fringilla. Fringilla est ullamcorper eget nulla facilisi etiam. Id cursus metus aliquam eleifend. Id volutpat lacus laoreet non curabitur gravida arcu ac. At erat pellentesque adipiscing commodo elit at imperdiet. At ultrices mi tempus imperdiet nulla. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Eu nisl nunc mi ipsum faucibus vitae. A diam sollicitudin tempor id. Euismod lacinia at quis risus sed vulputate odio ut enim. Nunc sed blandit libero volutpat sed cras ornare. Enim tortor at auctor urna. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Interdum posuere lorem ipsum dolor. Convallis aenean et tortor at risus viverra adipiscing at.\r\n\r\nUltricies leo integer malesuada nunc vel risus commodo. Commodo nulla facilisi nullam vehicula ipsum. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Lorem sed risus ultricies tristique nulla aliquet. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Erat velit scelerisque in dictum non consectetur. Velit sed ullamcorper morbi tincidunt ornare massa. Felis eget nunc lobortis mattis aliquam faucibus purus. Sit amet risus nullam eget felis eget nunc. Semper viverra nam libero justo laoreet sit. Vulputate dignissim suspendisse in est ante in. Ipsum dolor sit amet consectetur. Neque vitae tempus quam pellentesque. Natoque penatibus et magnis dis parturient montes. Ultrices in iaculis nunc sed. Velit egestas dui id ornare arcu odio. Urna neque viverra justo nec ultrices dui.', 'Tradition', 'Edinburgh', '2021-03-14 12:30:52', NULL),
(5, 4, 'Create Database Tables', 'create-database-tables', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At volutpat diam ut venenatis tellus. Varius quam quisque id diam vel quam elementum pulvinar etiam. Felis imperdiet proin fermentum leo. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam. Blandit massa enim nec dui nunc mattis enim ut tellus. Id neque aliquam vestibulum morbi blandit cursus. A cras semper auctor neque vitae tempus quam. Velit sed ullamcorper morbi tincidunt ornare. Orci porta non pulvinar neque. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Eu facilisis sed odio morbi quis. Viverra mauris in aliquam sem fringilla ut morbi tincidunt. Tincidunt id aliquet risus feugiat in. Elementum integer enim neque volutpat. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Ornare arcu odio ut sem nulla pharetra diam sit amet.\r\n\r\nOdio pellentesque diam volutpat commodo. Sit amet purus gravida quis blandit turpis cursus in hac. Sapien pellentesque habitant morbi tristique senectus et netus et. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Ullamcorper sit amet risus nullam eget felis eget nunc. Tellus id interdum velit laoreet id donec ultrices. Non nisi est sit amet facilisis. Lectus nulla at volutpat diam ut venenatis tellus in. Magna etiam tempor orci eu lobortis elementum nibh. Ultricies integer quis auctor elit sed vulputate mi. Quis vel eros donec ac odio tempor orci dapibus ultrices. Nisl vel pretium lectus quam id leo in vitae. Id interdum velit laoreet id donec ultrices tincidunt arcu non. Ut tristique et egestas quis ipsum.\r\n\r\nSed tempus urna et pharetra pharetra massa massa ultricies mi. In metus vulputate eu scelerisque felis imperdiet proin fermentum. Nunc aliquet bibendum enim facilisis. In hendrerit gravida rutrum quisque non tellus orci. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed. Ullamcorper malesuada proin libero nunc consequat interdum. Faucibus a pellentesque sit amet porttitor eget dolor morbi. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Viverra accumsan in nisl nisi. Venenatis cras sed felis eget velit. Ut pharetra sit amet aliquam id. Dignissim cras tincidunt lobortis feugiat. Amet nulla facilisi morbi tempus iaculis urna. Sed enim ut sem viverra aliquet. Morbi non arcu risus quis varius quam quisque id.\r\n\r\nFacilisis sed odio morbi quis commodo odio aenean sed adipiscing. Dui id ornare arcu odio. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales. At tempor commodo ullamcorper a lacus vestibulum sed arcu. Mattis pellentesque id nibh tortor. Magna ac placerat vestibulum lectus mauris. Proin fermentum leo vel orci porta. Dignissim enim sit amet venenatis urna cursus eget nunc scelerisque. Lacus luctus accumsan tortor posuere ac ut consequat. Magna eget est lorem ipsum dolor sit. A cras semper auctor neque vitae. Elit scelerisque mauris pellentesque pulvinar pellentesque. Orci eu lobortis elementum nibh tellus molestie nunc non blandit. Nisl nisi scelerisque eu ultrices vitae. Proin nibh nisl condimentum id venenatis a. Vitae justo eget magna fermentum iaculis eu.\r\n\r\nNulla pellentesque dignissim enim sit amet venenatis urna cursus. Interdum velit laoreet id donec ultrices tincidunt arcu non. Parturient montes nascetur ridiculus mus mauris vitae. Id velit ut tortor pretium viverra suspendisse. Morbi tincidunt ornare massa eget egestas purus viverra accumsan in. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Eu ultrices vitae auctor eu augue ut lectus arcu bibendum. At tempor commodo ullamcorper a lacus. Quis ipsum suspendisse ultrices gravida. Turpis nunc eget lorem dolor sed. Mi eget mauris pharetra et ultrices neque ornare aenean. Quam lacus suspendisse faucibus interdum posuere lorem ipsum. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et.\r\n\r\nVulputate sapien nec sagittis aliquam malesuada. Gravida in fermentum et sollicitudin. Porttitor leo a diam sollicitudin tempor. Non nisi est sit amet. Netus et malesuada fames ac. Natoque penatibus et magnis dis parturient montes. Morbi tincidunt augue interdum velit euismod in pellentesque. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Proin nibh nisl condimentum id venenatis a condimentum. Nec sagittis aliquam malesuada bibendum arcu vitae elementum. Faucibus in ornare quam viverra. Amet cursus sit amet dictum. Massa vitae tortor condimentum lacinia quis. Dui ut ornare lectus sit amet est placerat in. Aenean euismod elementum nisi quis eleifend quam adipiscing. Tellus molestie nunc non blandit massa. A pellentesque sit amet porttitor. Mauris ultrices eros in cursus. Tempus quam pellentesque nec nam aliquam sem et tortor consequat.\r\n\r\nFacilisis gravida neque convallis a cras semper auctor. Diam vel quam elementum pulvinar etiam non quam lacus. Risus in hendrerit gravida rutrum quisque. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Lectus proin nibh nisl condimentum. Facilisis gravida neque convallis a. Sit amet est placerat in egestas erat imperdiet. Nam libero justo laoreet sit amet cursus sit amet. Praesent elementum facilisis leo vel fringilla est. Eu nisl nunc mi ipsum faucibus. Bibendum enim facilisis gravida neque. Aliquet nec ullamcorper sit amet risus nullam eget felis eget. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Mattis enim ut tellus elementum sagittis vitae et.\r\n\r\nEgestas purus viverra accumsan in nisl nisi. Sed id semper risus in. Sed lectus vestibulum mattis ullamcorper. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Sed vulputate odio ut enim blandit volutpat maecenas. Sit amet dictum sit amet justo. Odio ut sem nulla pharetra diam sit amet nisl suscipit. Enim ut sem viverra aliquet eget. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Eu mi bibendum neque egestas congue. Arcu dui vivamus arcu felis bibendum. Lacus sed turpis tincidunt id aliquet. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Neque ornare aenean euismod elementum nisi quis eleifend quam.\r\n\r\nFacilisis mauris sit amet massa vitae tortor. Amet commodo nulla facilisi nullam. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non tellus orci ac auctor augue mauris augue neque gravida. Integer vitae justo eget magna fermentum iaculis. Semper eget duis at tellus at urna condimentum. Eu scelerisque felis imperdiet proin fermentum. Turpis nunc eget lorem dolor sed viverra ipsum. Dictum fusce ut placerat orci.\r\n\r\nEgestas erat imperdiet sed euismod nisi. Scelerisque fermentum dui faucibus in ornare quam viverra. Arcu dui vivamus arcu felis bibendum ut. Cursus euismod quis viverra nibh cras. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Eget nunc lobortis mattis aliquam faucibus purus in massa. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lacus vel facilisis volutpat est velit egestas. Sem fringilla ut morbi tincidunt augue interdum velit euismod. A lacus vestibulum sed arcu. Ac felis donec et odio pellentesque diam. Etiam erat velit scelerisque in dictum non consectetur.', 'Tradition', 'Porthlethen', '2021-03-14 13:27:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `writer_id` int UNSIGNED NOT NULL,
  `writer_fname` varchar(128) NOT NULL,
  `writer_lname` varchar(128) NOT NULL,
  `writer_email` varchar(64) NOT NULL,
  `writer_profile` text,
  `writer_city` varchar(64) DEFAULT NULL,
  `writer_state` varchar(64) DEFAULT NULL,
  `writer_username` varchar(32) DEFAULT NULL,
  `writer_password` varchar(16) NOT NULL,
  `writer_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `writer_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`writer_id`, `writer_fname`, `writer_lname`, `writer_email`, `writer_profile`, `writer_city`, `writer_state`, `writer_username`, `writer_password`, `writer_reg_date`, `writer_modify_date`) VALUES
(3, 'Ifunanya', 'Anwunah', 'ify@gmail.com', 'Sagittis purus sit amet volutpat consequat mauris. Et dolore magna aliqua. Velit dignissim sodales ut eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Feugiat vivamus at augue eget arcu.', 'Aberdeen', 'Scotland', 'Ifunanya_Anwunah', 'kennykyu6479', '2021-03-14 12:13:04', '2021-03-17 18:10:04'),
(4, 'Judith', 'Anwunah', 'sobe@gmail.com', NULL, 'Lagos', 'Africa', 'Judith_Anwunah', 'kennykyu6479', '2021-03-14 13:25:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD UNIQUE KEY `story_slug` (`story_slug`),
  ADD KEY `fk_writerid` (`writer_id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`writer_id`),
  ADD UNIQUE KEY `writer_email` (`writer_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `writer_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `fk_writerid` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
