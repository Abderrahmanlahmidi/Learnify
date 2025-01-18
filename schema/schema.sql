CREATE DATABASE LearnifyDB;

USE LearnifyDB;



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
("Amelia Hill", 24, "Amelia@gmail.com", 918273645, 3),
("Logan Adams", 29, "Logan@gmail.com", 879654321, 3),
("Harper Green", 23, "HarperG@gmail.com", 432198765, 3),
("Alexander King", 30, "AlexKing@gmail.com", 345987621, 3),
("Ella Scott", 21, "EllaS@gmail.com", 219876543, 2),
("Daniel Turner", 32, "DanielT@gmail.com", 876543219,2)

CREATE TABLE learnifydb.catygories(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    catygorie VARCHAR(255) NOT NULL
)

CREATE TABLE learnifydb.tags(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tags VARCHAR(255) NOT NULL
)

CREATE TABLE learnifydb.courses(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  titre VARCHAR(255) NOT NULL,
  description_course VARCHAR(255) NOT NULL,
  contenu VARCHAR(255) NOT NULL,
  catygorie_id INT,
  user_id INT,
  Foreign Key (catygorie_id) REFERENCES learnifydb.catygories(id),
  Foreign Key (user_id) REFERENCES learnifydb.user(id)
) ENGINE=INNODB;

-- Insert data into `categories` table
INSERT INTO learnifydb.catygories (catygorie) VALUES
('Programming'),
('Design'),
('Marketing'),
('Business'),
('Photography');

-- Insert data into `tags` table
INSERT INTO learnifydb.tags (tags) VALUES
('JavaScript'),
('Python'),
('UI/UX'),
('SEO'),
('Entrepreneurship');

-- Insert data into `courses` table
INSERT INTO learnifydb.courses (titre, description_course, contenu, catygorie_id, user_id) VALUES
('Learn JavaScript Basics', 
 'A course to learn the fundamentals of JavaScript.', 
 'Introduction, Variables, Functions, DOM Manipulation', 
 1, 
 1),
('Mastering Python', 
 'An advanced course on Python programming.', 
 'Advanced Functions, Data Science, Machine Learning', 
 1, 
 2),
('UI/UX Design Fundamentals', 
 'Learn how to design user-friendly interfaces.', 
 'Prototyping, Wireframing, Design Principles', 
 2, 
3),
('SEO for Beginners', 
 'Improve your website rankings with this SEO course.', 
 'Keyword Research, On-Page SEO, Backlinking', 
 3, 
 4),
('Entrepreneurship 101', 
 'A beginner\'s guide to starting your own business.', 
 'Business Planning, Funding, Marketing Strategies', 
 4, 
 4);

CREATE TABLE learnifydb.tag_courses(
   courses_id INT,
   FOREIGN KEY (courses_id) REFERENCES learnifydb.courses(id),
   tag_id INT, 
   FOREIGN KEY  (tag_id) REFERENCES learnifydb.tags(id),
   PRIMARY KEY (courses_id, tag_id)
);

INSERT INTO learnifydb.tag_courses (courses_id, tag_id) VALUES
(6, 1),
(7, 2),
(8, 3),
(9, 4),
(10, 5),
(6, 2),
(7, 1);




SELECT 
    courses.id, 
    courses.titre, 
    courses.description_course, 
    courses.contenu, 
    catygories.catygorie AS categorie, 
    GROUP_CONCAT(tags.tags SEPARATOR ', ') AS tags, 
    COUNT(tags.id) AS tag_count, 
    user.nom AS enseignant 
FROM courses 
JOIN tag_courses ON courses.id = tag_courses.courses_id 
JOIN tags ON tag_courses.tag_id = tags.id 
JOIN catygories ON courses.catygorie_id = catygories.id 
JOIN user ON courses.user_id = user.id 
GROUP BY courses.id 
ORDER BY courses.titre ASC;

