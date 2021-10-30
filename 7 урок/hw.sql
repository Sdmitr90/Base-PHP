
drop database if exists hw;
create database hw;

use hw;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Первый', 34.13),
(2, 'Второй', 67.10),
(3, 'Третий', 98.27),
(4, 'Что-то ещё', 18.37);products