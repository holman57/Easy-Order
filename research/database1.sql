CREATE TABLE `ITEMS` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ITEMS`
--

INSERT INTO `ITEMS` (`ID`, `name`, `price`, `category`, `description`, `picture`) VALUES
(1, 'Grilled Cheese', 3, 'Lunch', 'Two pieces of bread smothered in cheese.', 'Grilled_Cheese.jpg'),
(2, 'Tomato Soup', 4, 'Lunch', 'Fresh silky smooth tomato soup.', 'Tomato_Soup.jpg'),
(3, 'Chicken Nuggets', 5, 'Lunch', 'Farm raised organic chickens.', 'Chicken_Nuggets.jpg'),
(4, 'Flatbread Pizza', 8, 'Dinner', 'These flatbread pizzas are perfect to make for a quick lunch, easy dinner, and everything in between.', 'Flatbread_Pizza.jpg'),
(5, 'Mac & Cheese', 4, 'Lunch', 'Creamy and cheesy.', 'Mac_&_Cheese.jpg');
--
-- Database: `ORDERS`
--
CREATE DATABASE IF NOT EXISTS `ORDERS` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ORDERS`;
