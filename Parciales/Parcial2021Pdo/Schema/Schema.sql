CREATE DATABASE IF NOT EXISTS Businesses;

USE Businesses;

CREATE TABLE IF NOT EXISTS Businesses
(
    businessId INT NOT NULL AUTO_INCREMENT,
    category NVARCHAR(100) NOT NULL,
    name NVARCHAR(100) NOT NULL,
    email NVARCHAR(100) NOT NULL,
    address NVARCHAR(100) NOT NULL,
    CONSTRAINT PK_Business PRIMARY KEY (businessId),    
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