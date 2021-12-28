CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
INSERT INTO `products` (`id`, `title`, `vendor`, `country`, `quantity`)
VALUES (1, 'Product1', 'ProductMaker', 'Austria', 134),
  (2, 'Product2', 'Product_Maker', 'Ukraine', 1234),
  (3, 'Product3', 'ProductM', 'Germany', 1);