CREATE TABLE IF NOT EXISTS `users` (
  `id_user` SERIAL,
  `username` VARCHAR(256) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE InnoDB CHARACTER SET utf8mb4;
CREATE TABLE IF NOT EXISTS `products` (
  `id` SERIAL,
  `title` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `user_id` BIGINT UNSIGNED,
  PRIMARY KEY (`id`)
) ENGINE InnoDB CHARACTER SET utf8mb4;
ALTER TABLE `products`
ADD CONSTRAINT `fk_users_products` FOREIGN KEY (`user_id`) REFERENCES `users`(`id_user`);
INSERT INTO `products` (`id`, `title`, `vendor`, `country`, `quantity`)
VALUES (1, 'Product1', 'ProductMaker', 'Austria', 134),
  (2, 'Product2', 'Product_Maker', 'Ukraine', 1234),
  (3, 'Product3', 'ProductM', 'Germany', 1);