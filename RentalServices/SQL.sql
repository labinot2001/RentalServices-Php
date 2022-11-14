CREATE TABLE IF NOT EXISTS `rentals` (
  `rental_id` int(11) NOT NULL AUTO_INCREMENT,
  `rental_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rental_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `rentals` (
  `rental_id` int(11) NOT NULL AUTO_INCREMENT,
  `rental_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rental_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `contactform` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_or_username` varchar(200) DEFAULT NULL,
  `message_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `cars` (CREATE TABLE IF NOT EXISTS `rentals` (
  `rental_id` int(11) NOT NULL AUTO_INCREMENT,
  `rental_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rental_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE IF NOT EXISTS `category` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_or_username` varchar(200) DEFAULT NULL,
  `message_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(200) DEFAULT NULL,
  `car_price` double DEFAULT NULL,
  `car_start` date DEFAULT NULL,
  `car_end` date DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `img_ref_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_img_ref_car` (`img_ref_car`),
  CONSTRAINT `fk_img_ref_car` FOREIGN KEY (`img_ref_car`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `imagesBrand` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `img_ref_brand` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_img_ref_brand` (`img_ref_brand`),
  CONSTRAINT `fk_img_ref_brand` FOREIGN KEY (`img_ref_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `imagesCategory` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `img_ref_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_img_ref_category` (`img_ref_category`),
  CONSTRAINT `fk_img_ref_category` FOREIGN KEY (`img_ref_category`) REFERENCES `category` (`category_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `imagesRental` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `img_ref_rental` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_img_ref_rental` (`img_ref_rental`),
  CONSTRAINT `fk_img_ref_rental` FOREIGN KEY (`img_ref_rental`) REFERENCES `rentals` (`rental_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `cr_rentals_brands_category` (
  `crbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `crbc_ref_rental` int(11) DEFAULT NULL,
  `crbc_ref_brand` int(11) DEFAULT NULL,
  `crbc_ref_category` int(11) DEFAULT NULL,
  `crbc_ref_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`crbc_id`),
  KEY `fk_crbc_ref_rental` (`crbc_ref_rental`),
  KEY `fk_crbc_ref_brand` (`crbc_ref_brand`),
  KEY `fk_crbc_ref_category` (`crbc_ref_category`),
  KEY `fk_crbc_ref_car` (`crbc_ref_car`),
  CONSTRAINT `fk_crbc_ref_rental` FOREIGN KEY (`crbc_ref_rental`) REFERENCES `rentals` (`rental_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_brand` FOREIGN KEY (`crbc_ref_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_category` FOREIGN KEY (`crbc_ref_category`) REFERENCES `category` (`category_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_car` FOREIGN KEY (`crbc_ref_car`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(200) DEFAULT NULL,
  `car_price` double DEFAULT NULL,
  `car_start` date DEFAULT NULL,
  `car_end` date DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(200) DEFAULT NULL,
  `img_ref_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_img_ref_car` (`img_ref_car`),
  CONSTRAINT `fk_img_ref_car` FOREIGN KEY (`img_ref_car`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `cr_rentals_brands_category` (
  `crbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `crbc_ref_rental` int(11) DEFAULT NULL,
  `crbc_ref_brand` int(11) DEFAULT NULL,
  `crbc_ref_category` int(11) DEFAULT NULL,
  `crbc_ref_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`crbc_id`),
  KEY `fk_crbc_ref_rental` (`crbc_ref_rental`),
  KEY `fk_crbc_ref_brand` (`crbc_ref_rental`),
  KEY `fk_crbc_ref_category` (`crbc_ref_rental`),
  KEY `fk_crbc_ref_car` (`crbc_ref_car`),
  CONSTRAINT `fk_crbc_ref_rental` FOREIGN KEY (`crbc_ref_rental`) REFERENCES `rentals` (`rental_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_brand` FOREIGN KEY (`crbc_ref_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_category` FOREIGN KEY (`crbc_ref_category`) REFERENCES `category` (`category_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_crbc_ref_car` FOREIGN KEY (`crbc_ref_car`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

