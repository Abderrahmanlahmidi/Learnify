CREATE DATABASE LearnifyDB;

USE LearnifyDB;

INSERT INTO learnifydb.user (nom, age, email, password, role_id) 
VALUES 
-- ("Sophia Carter", 28, "Carter@gmail.com", 123456789),
-- ("Liam Johnson", 30, "LiamJ@gmail.com", 987654321),
-- ("Olivia Brown", 24, "Olivia@gmail.com", 456789123),
-- ("Noah Davis", 27, "NoahD@gmail.com", 678912345),
-- ("Emma Wilson", 22, "EmmaW@gmail.com", 234567812),
-- ("James Miller", 29, "JamesM@gmail.com", 765432198),
-- ("Ava Taylor", 23, "AvaT@gmail.com", 654321987),
-- ("Elijah Thomas", 31, "ElijahT@gmail.com", 123987654),
-- ("Isabella White", 26, "Isabella@gmail.com", 876543210),
-- ("Lucas Martin", 25, "LucasM@gmail.com", 987123654),
-- ("Mia Moore", 27, "MiaMoore@gmail.com", 564738291),
-- ("Ethan Walker", 28, "EthanW@gmail.com", 234987651),
("Amelia Hill", 24, "Amelia@gmail.com", 918273645, 1),
("Logan Adams", 29, "Logan@gmail.com", 879654321, 1),
("Harper Green", 23, "HarperG@gmail.com", 432198765, 1),
("Alexander King", 30, "AlexKing@gmail.com", 345987621, 3),
("Ella Scott", 21, "EllaS@gmail.com", 219876543, 2),
("Daniel Turner", 32, "DanielT@gmail.com", 876543219,2)


ALTER TABLE user ADD role varchar(255) NOT NULL;


CREATE TABLE learnifydb.role(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    role VARCHAR(255) NOT NULL
)

CREATE TABLE learnifydb.tags(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tag VARCHAR(255) NOT NULL
)

CREATE TABLE learnifydb.cours(

    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    contenu VARCHAR(255) NOT NULL,
    categories VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    
)

CREATE TABLE role(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(25) UNIQUE
)

INSERT INTO learnifydb.role (role_name)
VALUES 
("admin"),
("Étudiant"),
("Enseignant");


CREATE TABLE learnifydb.user(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(80),
    role_id INT,
    Foreign Key (role_id) REFERENCES role(id)
)

SELECT * FROM learnifydb.user INNER JOIN learnifydb.role ON role_id = role.id


SELECT courses.id, courses.titre, courses.description_courte, courses.description, courses.contenu, categories.name AS categorie,
        GROUP_CONCAT(tags.name SEPARATOR ', ') AS tagss , users.firstname as enseignant
        FROM courses 
        JOIN tag_course ON courses.id = tag_course.course_id
        JOIN tags ON tag_course.tag_id = tags.id
        JOIN categories ON courses.categorie_id = categories.id
        JOIN users ON courses.enseignant_id = users.id
        GROUP BY courses.id



CREATE TABLE learnifydb.courses(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  titre VARCHAR(255) NOT NULL,
  description_course VARCHAR(255) NOT NULL,
  content VARCHAR(255) NOT NULL 
)



-- id titre description_course conten




