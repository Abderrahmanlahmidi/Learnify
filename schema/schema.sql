CREATE DATABASE LearnifyDB;

USE LearnifyDB;

CREATE TABLE user(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(80)

)

INSERT INTO learnifydb.user (nom, age, email, password) 
VALUES 
("Jack Richard", 25, "Richard@gmail.com", 234567890),
("Robin Molly", 26, "Molly@gmail.com", 8768687);





ALTER TABLE user ADD role varchar(255) NOT NULL;