CREATE TABLE `users` (
  `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(128) NOT NULL,
  `first_name` VARCHAR(64) DEFAULT NULL,
  `last_name` VARCHAR(64) DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`email`, `first_name`, `last_name`) VALUES
('john@doe.com', 'John', 'Doe'),
('janie@doe.com', 'Janie', 'Doe');