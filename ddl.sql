DROP DATABASE IF EXISTS blood_tracker;
CREATE DATABASE blood_tracker;
USE blood_tracker;

CREATE TABLE donor (
    `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `donor_address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` CHAR(2) NOT NULL,
    `zip_code` CHAR(5) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` CHAR(10) NOT NULL

);

CREATE TABLE blood_info (
    `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `donor_id` INT(10),
    `blood_type` VARCHAR(4) NOT NULL,
    `plasma_donation` VARCHAR(3) NOT NULL,
    `date_of_donation` VARCHAR(255) NOT NULL,
    FOREIGN KEY (donor_id) REFERENCES donor(ID)

);