-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2021 at 03:21 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idm232_publichtml`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_recipes`
--

CREATE TABLE `add_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `prep_time` varchar(250) NOT NULL,
  `cook_time` varchar(250) NOT NULL,
  `servings` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `ingredients` varchar(250) NOT NULL,
  `step_1` varchar(250) NOT NULL,
  `step_2` varchar(250) NOT NULL,
  `step_3` varchar(250) NOT NULL,
  `step_4` varchar(250) NOT NULL,
  `step_5` varchar(250) NOT NULL,
  `step_6` varchar(250) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_recipes`
--

INSERT INTO `add_recipes` (`id`, `title`, `prep_time`, `cook_time`, `servings`, `description`, `image`, `ingredients`, `step_1`, `step_2`, `step_3`, `step_4`, `step_5`, `step_6`, `file_id`) VALUES
(1, 'Sausage and Pear Stuffed Acorn Squash', '30 minutes', '1 hour', '2', 'This main course dish is a real beauty! Acorn squash halves are roasted and deliciously filled with a savory sausage and pear saute.', '', '1 acorn squash, halved and seeded, 1 tablespoon olive oil, 1/2 pound sage-flavored ground breakfast sausage, 1/2 onion, diced, 1/2 cup thinly sliced cabbage', 'Preheat the oven to 400 degrees F (200 degrees C). Line a baking pan with aluminum foil and spray with oil.', 'Rub or brush 1/2 tablespoon oil on the flesh of each acorn squash half. Season with salt and pepper.Place squash halves onto the prepared baking pan, cut-side down.', 'Roast in the preheated oven until softened, about 30 minutes.', 'Meanwhile, brown sausage in a large skillet over medium heat. Add onion, cabbage, and carrots. Saute until onion is soft and translucent, 5 to 7 minutes. Add diced pear and cook until softened but still crunchy, 2 to 3 minutes longer.', 'Remove acorn squash from oven and turn over using tongs. Stuff with sausage-pear mixture. Return to oven and roast for an additional 10 minutes.', 'Enjoy!', 0),
(3, 'Simple Turkey Gravy', '10 mintues', '15 minutes', '16', '  This simple turkey gravy is...wait for it...simple! You don\'t want to use gravy from a can or from a package when it\'s this easy and delicious!', '', '1/2 cup fat from turkey drippings, 1/2 cup all-purpose flour, 1 cup liquid from turkey drippings, 2 cups turkey stock, ground pepper', 'Heat fat from turkey drippings in a saucepan over medium-low heat until liquefied, 2 to 3 minutes.', 'Whisk flour into turkey fat until golden, about 5 minutes.', 'Whisk liquid from turkey drippings and turkey stock into fat-flour mixture.', 'Increase heat to medium and cook', 'Whisk continuously, until gravy is smooth and desired consistency, 5 to 10 minutes.', 'Season with pepper', 0),
(14, 'Best Green Bean Casserole', '10 minutes', '15 minutes', '6', 'This great variation of the traditional green bean casserole is topped with French fried onions and Cheddar cheese. ', '', '2 ounce can green beans, drained, 1 can condensed cream of mushroom soup, 1 can french fried onions, 1 cup shredded cheddar cheese', 'Preheat oven to 350 degrees F (175 degrees C).', 'Place green beans and soup in a large microwave-safe bowl. Mix well and heat in the microwave on HIGH for 3 to 5 minutes.', 'tir in 1/2 cup of cheese and heat mixture for another 2 to 3 minutes. ', 'Transfer green bean mixture to a casserole dish and sprinkle with French fried onions and remaining cheese.', 'Bake in a preheated 350 degrees F (175 degrees C) oven until the cheese melts and the onions just begin to brown.', 'Enjoy!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  `file_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `role`, `email`, `username`, `password`) VALUES
(2, 'Allison', 'Drake', 'Admin', 'allie@allie.com', 'alliedrake', 'adjknjkanfjk'),
(14, 'Allie', 'Drake', 'employee', 'email@email.com', 'hihi', '$2y$10$43noXV3tYeecatYW6h4DPuLPOyy2RZBMb0Ygz1D8eo8KT4LqiADm.'),
(23, 'Allison', 'Drake', 'admin', 'allisondrake13@gmail.com', 'allisondrake', '$2y$10$VxDxc2QK3m1.sVot6SXsk..DSPOy8c70wxfnxqk5mpNogeuCpQWhS'),
(24, 'Carter', 'Drake', 'employee', 'carterdrake@rcn.com', 'carterdrake', '$2y$10$6TvbCYeEoh1FBKVptijGb.vl9JkAZUNcx1JC7kTD4Abedj3Rzcw9W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_recipes`
--
ALTER TABLE `add_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_recipes`
--
ALTER TABLE `add_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id`) REFERENCES `add_recipes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
