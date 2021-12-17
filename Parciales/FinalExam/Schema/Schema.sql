CREATE DATABASE IF NOT EXISTS Properties;

USE Properties;

CREATE TABLE IF NOT EXISTS Properties
(
    propertyId INT NOT NULL AUTO_INCREMENT,
    address NVARCHAR(100) NOT NULL,
    phone NVARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    CONSTRAINT PK_Property PRIMARY KEY (PropertyId)  
)Engine=InnoDB;

CREATE TABLE IF NOT EXISTS users
(
    userId INT NOT NULL AUTO_INCREMENT,
    email NVARCHAR(100) NOT NULL,
    password NVARCHAR(100) NOT NULL,
    CONSTRAINT PK_User PRIMARY KEY (userId)
)Engine=InnoDB;

INSERT INTO users
	(email, password)
VALUES 
	('user@myapp.com', '123456');