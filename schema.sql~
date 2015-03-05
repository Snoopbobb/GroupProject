DROP DATABASE IF EXISTS HikingTrailz;
CREATE DATABASE HikingTrailz;
USE HikingTrailz;
CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(64) NOT NULL,
    email VARCHAR(255) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    image_id INT DEFAULT NULL
);
CREATE TABLE mountain (
    mountain_id INT auto_increment primary key,
    name VARCHAR(100) NOT NULL,
    description TEXT DEFAULT NULL,
    image_id INT NOT NULL,
    crossroads VARCHAR(255) NOT NULL,
    gps VARCHAR(255) DEFAULT NULL,
    elevation INT DEFAULT NULL
);
CREATE TABLE trail (
    trail_id INT AUTO_INCREMENT PRIMARY KEY,
    mountain_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT DEFAULT NULL,
    gps VARCHAR(255) DEFAULT NULL,
    image_id INT DEFAULT NULL,
    length INT DEFAULT NULL,
    elevation_gain INT DEFAULT NULL,
    hashtag VARCHAR(255) NOT NULL,
    is_featured TINYINT DEFAULT 0,
    site_rating INT DEFAULT NULL
);
CREATE TABLE comment (
    comment_id int AUTO_INCREMENT PRIMARY KEY,
    trail_id int NOT NULL,
    user_id int NOT NULL,
    comment_description TEXT DEFAULT NULL,
    user_rating INT DEFAULT NULL
);
CREATE TABLE image (
	image_id INT auto_increment PRIMARY KEY,
	image_path VARCHAR(255) DEFAULT NULL
);
CREATE TABLE trail_image (
    image_id INT PRIMARY KEY,
    trail_id INT,
    `primary` TINYINT DEFAULT 0
);
CREATE TABLE weather (
    weather_id INT AUTO_INCREMENT PRIMARY KEY,
    week_number INT,
    mountain_id INT,
    weather_description VARCHAR(255) DEFAULT NULL,
    avg_high INT,
    avg_low INT
);


--
-- Insert sample data
--

INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Seth', 'Howell', 'Sk8rSeth', 'password', 'k@jacobs.com', 'male');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Bob', 'Tabor', 'SnoopBobb', 'password', 'b@t.com', 'male');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Jordyn', 'Tacorante', 'JT', 'password', 'J@T.com', 'female');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Scott', 'Kessinger', 'Scottie2Hottie', 'password', 'S@K.com', 'male');

INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Beardsley Mountiain', 'More of a boulder pile than conventional mountiain just north of the 101 on Cave Creek. Home to more rock climbers than hikers', 1, 'Cave Creek Blvd & Loop 101', '560', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Camelback', 'A small but steep mountain in the heart of Scottsdale. very busy most weekend days', 2, 'Tatum & McDonald', '2706', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Dreamy Draw / Piestewa Peak Park', 'A very large park with dozens of trails. Almost as many bikers as hikers, and one of the best views in all of Phoenix', 3, 'Northern and SR-51', '2612', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Lookout Mountain Preserve', 'A small park and mountain in the north valley. watch out for bees in the summer.', 4, "N 16th St. & E Greenway PKWY", '2054', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Mcdowell Mountain Preserve', 'A description', 5, 'E Shea Blvd & Mcdowell Mountain Rd.', '4057', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('North Mountain', 'A description', 6, '7th St. & Thunderbird Rd.', '2104', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('South Mountain', 'A description', 7, 'S 48th St. & S Pointe Pkwy', '2660', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Shaw Butte', 'A description', 8, 'Central Ave. & Thunderbird Rd.', '2149', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Shadow Mountain', 'A description', 9, 'Thunderbird & 32nd St.', '1928', '');



INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (2, 10, 'Echo Canyon Trail', 'One of the most traveled trails in the state, Echo Canyon trail is a solid hike with an even more solid view', '12144', '1300', '#EchoCanyonHTZ');
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 11, "Piestewa Peak Circumference Trail", "A pretty sort of famiy hike, with not a lot of elevation gain or change. Hike up about 300 ft to the trail split, and then around the mountain and back down.", "16268", "400", "#PiestewaCircHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 12, "Piestewa Peak Summit Trail", "A steep and taxing hike, with over 1000 ft elevation gain in just a mile. One of the very best views of Phoenix", "5808", "1100", "#PiestewaSummitHTZ");