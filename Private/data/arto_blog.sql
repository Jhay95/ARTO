-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2021 at 03:28 AM
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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int UNSIGNED NOT NULL,
  `upload_id` int UNSIGNED DEFAULT NULL,
  `photo_title` varchar(128) DEFAULT NULL,
  `photo_size` varchar(16) DEFAULT NULL,
  `photo_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `story_category` set('War','Family','Tradition','Politics') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `story_tag` varchar(32) DEFAULT NULL,
  `story_location` varchar(64) DEFAULT NULL,
  `story_pub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `story_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `writer_id`, `story_title`, `story_slug`, `story_body`, `story_category`, `story_tag`, `story_location`, `story_pub_date`, `story_modify_date`) VALUES
(25, 9, 'Family Leave Base', 'family-leave-base', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis auctor elit sed vulputate mi. Consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Ornare quam viverra orci sagittis eu. Facilisis gravida neque convallis a cras semper auctor neque vitae. Sit amet porttitor eget dolor morbi non arcu. Condimentum vitae sapien pellentesque habitant morbi tristique senectus. Quisque non tellus orci ac auctor augue mauris augue neque. Elit ut aliquam purus sit amet luctus.\r\n\r\nNeque gravida in fermentum et sollicitudin ac orci phasellus egestas. Diam vulputate ut pharetra sit amet aliquam. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Vitae elementum curabitur vitae nunc sed velit dignissim. Faucibus in ornare quam viverra orci. Auctor augue mauris augue neque gravida in fermentum. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Sed libero enim sed faucibus turpis in eu mi. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Porttitor eget dolor morbi non arcu risus quis. A erat nam at lectus urna duis convallis. Aliquam eleifend mi in nulla posuere sollicitudin. Non nisi est sit amet. Sed odio morbi quis commodo odio aenean sed. Aliquam ut porttitor leo a.\r\n\r\nConvallis aenean et tortor at risus viverra adipiscing at in. Faucibus purus in massa tempor nec feugiat nisl. Mauris augue neque gravida in. In fermentum et sollicitudin ac orci phasellus egestas tellus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et. Ut porttitor leo a diam sollicitudin tempor. Elementum facilisis leo vel fringilla est ullamcorper. Natoque penatibus et magnis dis parturient montes. Vitae auctor eu augue ut lectus arcu bibendum at varius. Gravida rutrum quisque non tellus orci ac.\r\n\r\nAliquet nec ullamcorper sit amet risus nullam eget. Turpis tincidunt id aliquet risus feugiat in. Nunc lobortis mattis aliquam faucibus purus in massa tempor. In cursus turpis massa tincidunt dui ut ornare lectus sit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Mauris a diam maecenas sed enim ut sem. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Curabitur gravida arcu ac tortor dignissim convallis aenean et. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Augue neque gravida in fermentum. Scelerisque felis imperdiet proin fermentum leo. Purus in massa tempor nec feugiat nisl. Lectus arcu bibendum at varius vel. Tincidunt lobortis feugiat vivamus at augue eget arcu. Egestas sed sed risus pretium quam vulputate dignissim. Molestie a iaculis at erat pellentesque adipiscing commodo elit at.\r\n\r\nSollicitudin ac orci phasellus egestas tellus. Amet massa vitae tortor condimentum. Est ultricies integer quis auctor elit sed. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Sed euismod nisi porta lorem mollis aliquam. Adipiscing tristique risus nec feugiat in fermentum. Nisi porta lorem mollis aliquam ut porttitor leo. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Dictumst quisque sagittis purus sit. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Venenatis tellus in metus vulputate eu scelerisque. Sed cras ornare arcu dui vivamus.\r\n\r\nAmet venenatis urna cursus eget nunc scelerisque viverra mauris. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Diam donec adipiscing tristique risus nec. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Id nibh tortor id aliquet lectus proin nibh nisl. Porttitor rhoncus dolor purus non enim praesent. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nam at lectus urna duis convallis convallis tellus id interdum. Risus ultricies tristique nulla aliquet. Purus gravida quis blandit turpis cursus in hac habitasse. Suscipit tellus mauris a diam maecenas sed enim. Gravida arcu ac tortor dignissim convallis aenean. Ipsum dolor sit amet consectetur adipiscing elit. Dolor purus non enim praesent elementum facilisis leo. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Eget nunc scelerisque viverra mauris in aliquam sem fringilla.', 'Tradition', 'family, honour', 'Abbotswell', '2021-03-23 03:03:31', NULL),
(26, 9, 'Government Order', 'government-order', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis auctor elit sed vulputate mi. Consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Ornare quam viverra orci sagittis eu. Facilisis gravida neque convallis a cras semper auctor neque vitae. Sit amet porttitor eget dolor morbi non arcu. Condimentum vitae sapien pellentesque habitant morbi tristique senectus. Quisque non tellus orci ac auctor augue mauris augue neque. Elit ut aliquam purus sit amet luctus.\r\n\r\nNeque gravida in fermentum et sollicitudin ac orci phasellus egestas. Diam vulputate ut pharetra sit amet aliquam. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Vitae elementum curabitur vitae nunc sed velit dignissim. Faucibus in ornare quam viverra orci. Auctor augue mauris augue neque gravida in fermentum. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Sed libero enim sed faucibus turpis in eu mi. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Porttitor eget dolor morbi non arcu risus quis. A erat nam at lectus urna duis convallis. Aliquam eleifend mi in nulla posuere sollicitudin. Non nisi est sit amet. Sed odio morbi quis commodo odio aenean sed. Aliquam ut porttitor leo a.\r\n\r\nConvallis aenean et tortor at risus viverra adipiscing at in. Faucibus purus in massa tempor nec feugiat nisl. Mauris augue neque gravida in. In fermentum et sollicitudin ac orci phasellus egestas tellus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et. Ut porttitor leo a diam sollicitudin tempor. Elementum facilisis leo vel fringilla est ullamcorper. Natoque penatibus et magnis dis parturient montes. Vitae auctor eu augue ut lectus arcu bibendum at varius. Gravida rutrum quisque non tellus orci ac.\r\n\r\nAliquet nec ullamcorper sit amet risus nullam eget. Turpis tincidunt id aliquet risus feugiat in. Nunc lobortis mattis aliquam faucibus purus in massa tempor. In cursus turpis massa tincidunt dui ut ornare lectus sit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Mauris a diam maecenas sed enim ut sem. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Curabitur gravida arcu ac tortor dignissim convallis aenean et. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Augue neque gravida in fermentum. Scelerisque felis imperdiet proin fermentum leo. Purus in massa tempor nec feugiat nisl. Lectus arcu bibendum at varius vel. Tincidunt lobortis feugiat vivamus at augue eget arcu. Egestas sed sed risus pretium quam vulputate dignissim. Molestie a iaculis at erat pellentesque adipiscing commodo elit at.\r\n\r\nSollicitudin ac orci phasellus egestas tellus. Amet massa vitae tortor condimentum. Est ultricies integer quis auctor elit sed. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Sed euismod nisi porta lorem mollis aliquam. Adipiscing tristique risus nec feugiat in fermentum. Nisi porta lorem mollis aliquam ut porttitor leo. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Dictumst quisque sagittis purus sit. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Venenatis tellus in metus vulputate eu scelerisque. Sed cras ornare arcu dui vivamus.\r\n\r\nAmet venenatis urna cursus eget nunc scelerisque viverra mauris. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Diam donec adipiscing tristique risus nec. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Id nibh tortor id aliquet lectus proin nibh nisl. Porttitor rhoncus dolor purus non enim praesent. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nam at lectus urna duis convallis convallis tellus id interdum. Risus ultricies tristique nulla aliquet. Purus gravida quis blandit turpis cursus in hac habitasse. Suscipit tellus mauris a diam maecenas sed enim. Gravida arcu ac tortor dignissim convallis aenean. Ipsum dolor sit amet consectetur adipiscing elit. Dolor purus non enim praesent elementum facilisis leo. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Eget nunc scelerisque viverra mauris in aliquam sem fringilla.', 'Politics', 'legal, goverment', 'Porthlethen', '2021-03-23 03:05:52', NULL),
(27, 6, 'Kindle Home Care', 'kindle-home-care', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis auctor elit sed vulputate mi. Consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Ornare quam viverra orci sagittis eu. Facilisis gravida neque convallis a cras semper auctor neque vitae. Sit amet porttitor eget dolor morbi non arcu. Condimentum vitae sapien pellentesque habitant morbi tristique senectus. Quisque non tellus orci ac auctor augue mauris augue neque. Elit ut aliquam purus sit amet luctus.\r\n\r\nNeque gravida in fermentum et sollicitudin ac orci phasellus egestas. Diam vulputate ut pharetra sit amet aliquam. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Vitae elementum curabitur vitae nunc sed velit dignissim. Faucibus in ornare quam viverra orci. Auctor augue mauris augue neque gravida in fermentum. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Sed libero enim sed faucibus turpis in eu mi. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Porttitor eget dolor morbi non arcu risus quis. A erat nam at lectus urna duis convallis. Aliquam eleifend mi in nulla posuere sollicitudin. Non nisi est sit amet. Sed odio morbi quis commodo odio aenean sed. Aliquam ut porttitor leo a.\r\n\r\nConvallis aenean et tortor at risus viverra adipiscing at in. Faucibus purus in massa tempor nec feugiat nisl. Mauris augue neque gravida in. In fermentum et sollicitudin ac orci phasellus egestas tellus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et. Ut porttitor leo a diam sollicitudin tempor. Elementum facilisis leo vel fringilla est ullamcorper. Natoque penatibus et magnis dis parturient montes. Vitae auctor eu augue ut lectus arcu bibendum at varius. Gravida rutrum quisque non tellus orci ac.\r\n\r\nAliquet nec ullamcorper sit amet risus nullam eget. Turpis tincidunt id aliquet risus feugiat in. Nunc lobortis mattis aliquam faucibus purus in massa tempor. In cursus turpis massa tincidunt dui ut ornare lectus sit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Mauris a diam maecenas sed enim ut sem. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Curabitur gravida arcu ac tortor dignissim convallis aenean et. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Augue neque gravida in fermentum. Scelerisque felis imperdiet proin fermentum leo. Purus in massa tempor nec feugiat nisl. Lectus arcu bibendum at varius vel. Tincidunt lobortis feugiat vivamus at augue eget arcu. Egestas sed sed risus pretium quam vulputate dignissim. Molestie a iaculis at erat pellentesque adipiscing commodo elit at.\r\n\r\nSollicitudin ac orci phasellus egestas tellus. Amet massa vitae tortor condimentum. Est ultricies integer quis auctor elit sed. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Sed euismod nisi porta lorem mollis aliquam. Adipiscing tristique risus nec feugiat in fermentum. Nisi porta lorem mollis aliquam ut porttitor leo. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Dictumst quisque sagittis purus sit. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Venenatis tellus in metus vulputate eu scelerisque. Sed cras ornare arcu dui vivamus.\r\n\r\nAmet venenatis urna cursus eget nunc scelerisque viverra mauris. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Diam donec adipiscing tristique risus nec. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Id nibh tortor id aliquet lectus proin nibh nisl. Porttitor rhoncus dolor purus non enim praesent. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nam at lectus urna duis convallis convallis tellus id interdum. Risus ultricies tristique nulla aliquet. Purus gravida quis blandit turpis cursus in hac habitasse. Suscipit tellus mauris a diam maecenas sed enim. Gravida arcu ac tortor dignissim convallis aenean. Ipsum dolor sit amet consectetur adipiscing elit. Dolor purus non enim praesent elementum facilisis leo. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Eget nunc scelerisque viverra mauris in aliquam sem fringilla.', 'Tradition', 'family, honour', 'Edinburgh', '2021-03-23 03:16:43', NULL),
(28, 6, 'After Rain Comes Sunshine', 'after-rain-comes-sunshine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis auctor elit sed vulputate mi. Consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Ornare quam viverra orci sagittis eu. Facilisis gravida neque convallis a cras semper auctor neque vitae. Sit amet porttitor eget dolor morbi non arcu. Condimentum vitae sapien pellentesque habitant morbi tristique senectus. Quisque non tellus orci ac auctor augue mauris augue neque. Elit ut aliquam purus sit amet luctus.\r\n\r\nNeque gravida in fermentum et sollicitudin ac orci phasellus egestas. Diam vulputate ut pharetra sit amet aliquam. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Vitae elementum curabitur vitae nunc sed velit dignissim. Faucibus in ornare quam viverra orci. Auctor augue mauris augue neque gravida in fermentum. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Sed libero enim sed faucibus turpis in eu mi. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Porttitor eget dolor morbi non arcu risus quis. A erat nam at lectus urna duis convallis. Aliquam eleifend mi in nulla posuere sollicitudin. Non nisi est sit amet. Sed odio morbi quis commodo odio aenean sed. Aliquam ut porttitor leo a.\r\n\r\nConvallis aenean et tortor at risus viverra adipiscing at in. Faucibus purus in massa tempor nec feugiat nisl. Mauris augue neque gravida in. In fermentum et sollicitudin ac orci phasellus egestas tellus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Tristique senectus et netus et malesuada fames ac. Massa tincidunt nunc pulvinar sapien et. Ut porttitor leo a diam sollicitudin tempor. Elementum facilisis leo vel fringilla est ullamcorper. Natoque penatibus et magnis dis parturient montes. Vitae auctor eu augue ut lectus arcu bibendum at varius. Gravida rutrum quisque non tellus orci ac.\r\n\r\nAliquet nec ullamcorper sit amet risus nullam eget. Turpis tincidunt id aliquet risus feugiat in. Nunc lobortis mattis aliquam faucibus purus in massa tempor. In cursus turpis massa tincidunt dui ut ornare lectus sit. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Mauris a diam maecenas sed enim ut sem. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Curabitur gravida arcu ac tortor dignissim convallis aenean et. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Augue neque gravida in fermentum. Scelerisque felis imperdiet proin fermentum leo. Purus in massa tempor nec feugiat nisl. Lectus arcu bibendum at varius vel. Tincidunt lobortis feugiat vivamus at augue eget arcu. Egestas sed sed risus pretium quam vulputate dignissim. Molestie a iaculis at erat pellentesque adipiscing commodo elit at.\r\n\r\nSollicitudin ac orci phasellus egestas tellus. Amet massa vitae tortor condimentum. Est ultricies integer quis auctor elit sed. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Sed euismod nisi porta lorem mollis aliquam. Adipiscing tristique risus nec feugiat in fermentum. Nisi porta lorem mollis aliquam ut porttitor leo. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Dictumst quisque sagittis purus sit. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Venenatis tellus in metus vulputate eu scelerisque. Sed cras ornare arcu dui vivamus.\r\n\r\nAmet venenatis urna cursus eget nunc scelerisque viverra mauris. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Diam donec adipiscing tristique risus nec. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Id nibh tortor id aliquet lectus proin nibh nisl. Porttitor rhoncus dolor purus non enim praesent. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nam at lectus urna duis convallis convallis tellus id interdum. Risus ultricies tristique nulla aliquet. Purus gravida quis blandit turpis cursus in hac habitasse. Suscipit tellus mauris a diam maecenas sed enim. Gravida arcu ac tortor dignissim convallis aenean. Ipsum dolor sit amet consectetur adipiscing elit. Dolor purus non enim praesent elementum facilisis leo. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Eget nunc scelerisque viverra mauris in aliquam sem fringilla.', 'War', 'history', 'England', '2021-03-23 03:17:20', NULL);

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
  `writer_password` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `writer_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `writer_modify_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`writer_id`, `writer_fname`, `writer_lname`, `writer_email`, `writer_profile`, `writer_city`, `writer_state`, `writer_username`, `writer_password`, `writer_reg_date`, `writer_modify_date`) VALUES
(6, 'Judith', 'Scott', 'judy@gmail.com', NULL, 'Aberdeen', 'Scotland', 'Judith_Scott', '$2y$10$4x9agMdoyrYNg81xSflxdOIWLdDBU/4qgjmgOc1sdSvE/ntDKeplK', '2021-03-21 11:40:53', NULL),
(7, 'Jones', 'Bellway', 'jones@gmail.com', NULL, 'Belfast', 'London', 'Jones_Bellway', '$2y$10$tVAC5iRa0XR6E931gU5LOeZseoe/sWO0LfRk/9XSmE4mMHcWhD5Qe', '2021-03-21 22:31:55', NULL),
(8, 'Jane', 'Sloan', 'janes@gmail.com', NULL, 'Belfast', 'London', 'Jane_Sloan', '$2y$10$XEODsHhQ7CzCmJD6How.KOXTE53kJQM8MA4er4HjptWul7VSA5Xv.', '2021-03-21 22:48:42', NULL),
(9, 'Ify', 'Daniel', 'ify@gmail.com', '', 'Abbots', 'Aberdeen', 'Ify_Daniel', '$2y$10$GgTOZ3EST2LTjuGXAvI06OniPRmkoK4xKTROJ168VcmGWpRDwBtqe', '2021-03-21 22:58:38', '2021-03-21 23:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `fk_uploadid` (`upload_id`);

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
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `writer_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_uploadid` FOREIGN KEY (`upload_id`) REFERENCES `writers` (`writer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `fk_writerid` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`writer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
