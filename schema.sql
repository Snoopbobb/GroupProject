DROP DATABASE IF EXISTS HikingTrailz;
CREATE DATABASE HikingTrailz;
USE HikingTrailz;

--
-- Create database tables
--
CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(50),
    image_id INT
);

CREATE TABLE mountain (
    mountain_id INT auto_increment primary key,
    mountain_name VARCHAR(100),
    mountain_description TEXT,
    image_id INT,
    mountain_crossroads VARCHAR(255),
    mountain_GPS VARCHAR(255),
    elevation VARCHAR(255)
);

CREATE TABLE trail (
    trail_id INT AUTO_INCREMENT PRIMARY KEY,
    mountain_id INT,
    trail_name VARCHAR(255),
    trail_description TEXT,
    trail_GPS VARCHAR(255),
    image_id INT,
    length INT,
    elevation_gain INT,
    hashtag VARCHAR(255)
);

CREATE TABLE comment (
  comment_id int AUTO_INCREMENT PRIMARY KEY,
  trail_id int NOT NULL,
  user_id int NOT NULL,
  comment_description TEXT,

);

CREATE TABLE image (
	image_id INT auto_increment PRIMARY KEY,
	image_description VARCHAR(255)
);

CREATE TABLE weather (
    weather_id INT AUTO_INCREMENT PRIMARY KEY,
    weather_description VARCHAR(255)
);


--
-- Insert sample data
--

INSERT INTO user (first_name, last_name, email, gender)
    VALUES ('Seth', 'Howell', 'k@jacobs.com', 'male');
INSERT INTO user (first_name, last_name, email, gender)
    VALUES ('Bob', 'Tabor', 'b@t.com', 'male');
INSERT INTO user (first_name, last_name, email, gender)
    VALUES ('Jordyn', 'Tacorante', 'J@T.com', 'female');
INSERT INTO user (first_name, last_name, email, gender)
    VALUES ('Scott', 'Kessinger', 'S@K.com', 'male');

INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Camelback', 'A description', 1, 'Tatum & McDonald', '2,706 ft');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Dreamy Draw / Piestewa Peak Park', 'A description', 3, 'Northern and SR-51', '2,612 ft');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Lookout Mountiain Preserve', 'A description', 2, "N 16th St. & E Greenway PKWY", '');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Mcdowell Mountain Preserve', 'A description', 4, 'E Shea Blvd & Mcdowell Mountain Rd.', '');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('North Mountain', 'A description', 6, '7th St. & Thunderbird Rd.', '2,104 ft');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('South Mountain', 'A description', 5, 'S 48th St. & S Pointe Pkwy', '');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Shaw Butte', 'A description', 7, 'Central Ave. & Thunderbird Rd.', '2,149 ft');
INSERT INTO mountain (mountain_name, mountain_description, image_id, location) VALUES ('Shadow Mountain', 'A description', 8, '', '1,928 ft');

-- INSERT INTO trail (mountain_id, trail_name, trail_description, trail_GPS, image_id, length, elevation_gain, hashtag) VALUES (1, NOW());

-- INSERT INTO invoice_item (invoice_id, item_id, quantity) VALUES (1, 1, 13);