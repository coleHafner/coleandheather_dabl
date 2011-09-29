
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- address
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address`
(
	`address_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`street_address` VARCHAR(1000),
	`city` VARCHAR(1000),
	`state` VARCHAR(1000),
	`zip` VARCHAR(1000),
	`active` TINYINT(1) DEFAULT 1,
	PRIMARY KEY (`address_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- article
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article`
(
	`article_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(1000),
	`body` VARCHAR(5000),
	`post_timestamp` INTEGER(100),
	`active` TINYINT(1) DEFAULT 1,
	`user_id` INTEGER(100) NOT NULL,
	`section_id` INTEGER(100) NOT NULL,
	`view_id` INTEGER(100) NOT NULL,
	`priority` INTEGER(100),
	`tag_string` VARCHAR(5000),
	PRIMARY KEY (`article_id`),
	INDEX `authentication_id` (`user_id`(100)),
	INDEX `section_id` (`section_id`(100)),
	INDEX `view_id` (`view_id`(100))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articleToFile
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articleToFile`;

CREATE TABLE `articleToFile`
(
	`article_to_file_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`article_id` INTEGER(100) NOT NULL,
	`file_id` INTEGER(100) NOT NULL,
	`priority` INTEGER(100),
	PRIMARY KEY (`article_to_file_id`),
	INDEX `article_id` (`article_id`(100)),
	INDEX `file_id` (`file_id`(100))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- fact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fact`;

CREATE TABLE `fact`
(
	`fact_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER(100) NOT NULL,
	`fact` VARCHAR(1000),
	`active` TINYINT(1) DEFAULT 1,
	PRIMARY KEY (`fact_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- file
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file`
(
	`file_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`file_type_id` INTEGER(100) NOT NULL,
	`file_name` VARCHAR(1000),
	`upload_timestamp` INTEGER(100),
	`active` TINYINT(1) DEFAULT 1,
	PRIMARY KEY (`file_id`),
	INDEX `file_type_id` (`file_type_id`(100))
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- fileType
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fileType`;

CREATE TABLE `fileType`
(
	`file_type_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(1000),
	`active` TINYINT(1) DEFAULT 1,
	`directory` VARCHAR(1000),
	PRIMARY KEY (`file_type_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- guest
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `guest`;

CREATE TABLE `guest`
(
	`guest_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`parent_guest_id` INTEGER(100) NOT NULL,
	`address_id` INTEGER(100) NOT NULL,
	`first_name` VARCHAR(1000),
	`last_name` VARCHAR(1000),
	`activation_code` VARCHAR(1000),
	`initial_timestamp` VARCHAR(1000) NOT NULL,
	`update_timestamp` VARCHAR(1000),
	`expected_count` TINYINT(3),
	`actual_count` TINYINT(3),
	`rsvp_through_site` TINYINT(1) NOT NULL,
	`is_attending` TINYINT(1) NOT NULL,
	`is_new` TINYINT(1) DEFAULT 0 NOT NULL,
	`active` TINYINT(1) DEFAULT 1 NOT NULL,
	PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- guestToGuestType
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `guestToGuestType`;

CREATE TABLE `guestToGuestType`
(
	`guest_to_guest_type_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`guest_id` INTEGER(100) NOT NULL,
	`guest_type_id` INTEGER(100) NOT NULL,
	PRIMARY KEY (`guest_to_guest_type_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- guestType
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `guestType`;

CREATE TABLE `guestType`
(
	`guest_type_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(1000),
	`is_special` TINYINT(1),
	`active` TINYINT(1) DEFAULT 1,
	PRIMARY KEY (`guest_type_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- section
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section`
(
	`section_id` INTEGER(100) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(1000),
	`active` TINYINT(1) DEFAULT 1,
	PRIMARY KEY (`section_id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
