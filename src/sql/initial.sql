
DROP DATABASE testproject;
CREATE DATABASE testproject;
use testproject;

CREATE TABLE registrations (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    surnames VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    street VARCHAR(255) NOT NULL,
    number VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    postal_code VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);