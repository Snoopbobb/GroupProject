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
    remember_token varchar(255),
    created_at datetime,
    updated_at datetime,
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
    user_rating INT DEFAULT NULL,
    created_at TIMESTAMP

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
    VALUES ('Seth', 'Howell', 'Sk8rSeth', '$2y$10$Tb1t0Ut7nfGos4THRN/Fte.Bfgki4zoU.2ivM3jF.UvtXavIYy6qK', 's@h.com', 'male');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Bob', 'Tabor', 'SnoopBobb', '$2y$10$Tb1t0Ut7nfGos4THRN/Fte.Bfgki4zoU.2ivM3jF.UvtXavIYy6qK', 'b@t.com', 'male');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Jordyn', 'Tacorante', 'JT', '$2y$10$Tb1t0Ut7nfGos4THRN/Fte.Bfgki4zoU.2ivM3jF.UvtXavIYy6qK', 'J@T.com', 'female');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Scott', 'Kessinger', 'Scottie2Hottie', '$2y$10$Tb1t0Ut7nfGos4THRN/Fte.Bfgki4zoU.2ivM3jF.UvtXavIYy6qK', 'S@K.com', 'male');
INSERT INTO user (first_name, last_name, username, password, email, gender)
    VALUES ('Minnie', 'Mouse', 'MinnieMouse', '$2y$10$qO1kQjmRNfbBB1U5.5nJIeZ4uWoNL1PL5g3OKRDY8JjcQ/k8u5o4S', 'minnie@mouse.com', 'female');

-- insert mountains
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Beardsley Mountain', 'More of a boulder pile than conventional Mountain just north of the 101 on Cave Creek. Home to more rock climbers than hikers', 1, 'Cave Creek Blvd & Loop 101', '560', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Camelback', 'A small but steep mountain in the heart of Scottsdale. very busy most weekend days', 2, 'Tatum & McDonald', '2706', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Dreamy Draw / Piestewa Peak Park', 'A very large park with dozens of trails. Almost as many bikers as hikers, and one of the best views in all of Phoenix', 3, 'Northern and SR-51', '2612', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Lookout Mountain Preserve', 'A small park and mountain in the north valley. watch out for bees in the summer.', 4, "N 16th St. & E Greenway PKWY", '2054', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Mcdowell Mountain Preserve', 'A long range of mountains in Norht Scottsdale that has tons of long hikes, tons of steep hike, and both!', 5, 'E Shea Blvd & Mcdowell Mountain Rd.', '4057', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('North Mountain', 'a small but central mountain that offers an amazing view of north Phoenix', 6, '7th St. & Thunderbird Rd.', '2104', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('South Mountain', 'This is another very long park that has lots and lots of long hikes, as well as a bunch of mountain biking trails.', 7, 'S 48th St. & S Pointe Pkwy', '2660', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Shaw Butte', 'Another of the "Big Seven" that is inside Narth Mountain Park', 8, 'Central Ave. & Thunderbird Rd.', '2149', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Shadow Mountain', 'A small but steep littl mountain in paradise valley that has one of the very best summit views of the city.', 9, 'Thunderbird & 32nd St.', '1928', '');
INSERT INTO mountain (name, description, image_id, crossroads, elevation, gps) VALUES ('Superstition Mountains', 'A.', 99, ' St.', '1928', '');


-- insert trails
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (2, 10, 'Echo Canyon Trail', 'One of the most traveled trails in the state, Echo Canyon trail is a solid hike with an even more solid view', '12144', '1300', 'EchoCanyonHTZ');

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 11, "Piestewa Peak Circumference Trail", "A pretty sort of famiy hike, with not a lot of elevation gain or change. Hike up about 300 ft to the trail split, and then around the mountain and back down.", "16268", "400", "PiestewaCircHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 12, "Piestewa Peak Summit Trail", "A steep and taxing hike, with over 1000 ft elevation gain in just a mile. One of the very best views of Phoenix", "5808", "1100", "PiestewaSummitHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 13, "Perl Charles Memorial Trail", "a long beautiful hike that the whole family can enjoy", "25344", "860", "PerlCharlesHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 14, "Quartz Ridge Trail", "Short but sweet trail right throught the heart of the park", "8976", "500", "QuartzRidgeHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 15, "Ruth Hamilton Trail", "a classic thats been around for ages", "4752", "430", "RuthHamiltonHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 16, "Mohave Connector Trail", "a little short but a great way to get to the other side of the park", "7920", "200", "MohaveConnectorHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 17, "Freedom Trail", "Another long but classic hike that runs through the whole of the park", "19536", "720", "FreedomTrailHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 18, "Charles M. Christiansen Memorial Trail", "one of the longest trails in Dreamy Draw", "56496", "790", "ChristiansenMemorialHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 19, "Nature Trail", "A standard quick nature hike", "7920", "80", "PiestewaSummitHTZ");
INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (3, 20, "Perl Charles Memorial Trail", "Another standard family hike that has a great view of the city", "13200", "220", "LVYatesHTZ");

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (4, 23, "Circumference and Summit Trail", "A mountain peak view for those who don't want to venture far from the city", "14256", "500", "LookoutMountainHTZ");

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (5, 21, "Tom's Thumb Trail", "A mid-length and steep hike that ends right at Tom's Thumb.", "33264", "1075", "TomsThumbHTZ");

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (6, 24, "North Mountain National Trail", "This trail features beautiful wild flowers and is rated as moderate. The trail is primarily used for birding & hiking and is accessible year-round. Dogs are also able to use this trail but must be kept on leash.", "8448", "650", "NorthMountainHTZ");

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (7, 22, "Pima Canyon National Trail", "A very long and pretty trail, that is most frequented by mountain bikers and trail runners.", "75504", "400", "PimaCanyonHTZ");

INSERT INTO trail (mountain_id, image_id, name, description, length, elevation_gain, hashtag) VALUES (9, 25, "Shadow Mountain Big Loop #310", "Although there are quite a number of natural and semi-blazed trails in the Shadow Mountain complex, there are only two, numbered trails. 'Shadow Mountain Big Loop'is one of the numbered trails and is 'Trail 310.'' Trail 310 is a short, refreshing hikes for beginners.", "9081", "1500", "ShadowMountainHTZ");



-- mountain images
INSERT INTO image (image_id, image_path) VALUES (1, '/css/images/Sup2HDR.jpg');
INSERT INTO image (image_id, image_path) VALUES (2, '/css/images/Camelback/CamelbackMountainPanorama.jpg');
INSERT INTO image (image_id, image_path) VALUES (3, '/css/images/DreamyDraw/PiestewaPeak.jpg');
INSERT INTO image (image_id, image_path) VALUES (4, '/css/images/LookoutMountain/');
INSERT INTO image (image_id, image_path) VALUES (5, '/css/images/McDowellMountains/IMG_8261.jpg');
INSERT INTO image (image_id, image_path) VALUES (6, '/css/images/NorthMountain/NorthMTN.jpg');
INSERT INTO image (image_id, image_path) VALUES (7, '/css/images/SouthMountain/sunset.jpg');
INSERT INTO image (image_id, image_path) VALUES (8, '/css/images/ShawButte/');
INSERT INTO image (image_id, image_path) VALUES (9, '/css/images/ShadowMountain/ShadowMTN.jpg');
INSERT INTO image (image_id, image_path) VALUES (99, '/css/images/Sup2HDR.jpg');

-- trail images
INSERT INTO image (image_id, image_path) VALUES (10, '/css/images/Camelback/EchoCanyon1.jpg');
INSERT INTO image (image_id, image_path) VALUES (21, '/css/images/McDowellMountains/TomsThumbSNOW.jpg');
INSERT INTO image (image_id, image_path) VALUES (22, '/css/images/SouthMountain/PimaCanyon.jpg');
INSERT INTO image (image_id, image_path) VALUES (12, '/css/images/DreamyDraw/Summit.jpg');
INSERT INTO image (image_id, image_path) VALUES (11, '/css/images/DreamyDraw/PiestewaCirc.jpg');
INSERT INTO image (image_id, image_path) VALUES (16, '/css/images/DreamyDraw/MohaveConnector.jpg');
INSERT INTO image (image_id, image_path) VALUES (17, '/css/images/DreamyDraw/Freedom.jpg');
INSERT INTO image (image_id, image_path) VALUES (18, '/css/images/DreamyDraw/CharlesC.jpg');
INSERT INTO image (image_id, image_path) VALUES (19, '/css/images/DreamyDraw/Nature.jpg');

INSERT INTO comment(trail_id, user_id, comment_description) VALUES (1, 4, "this trail was ok. I have seen better.");
INSERT INTO comment(trail_id, user_id, comment_description) VALUES (1, 1, "I love this trail. you would love it");
INSERT INTO comment(trail_id, user_id, comment_description) VALUES (1, 5, "this is an awesome trail");
INSERT INTO comment(trail_id, user_id, comment_description) VALUES (1,2, " I hated this trail. it smells. there are a lot of bees, and it is too hard!Waste of time and energy");
INSERT INTO comment(trail_id, user_id, comment_description) VALUES (1, 3, "I am so into this trail, it really is a great time, i cannot wait to come back. you have to check it out!");
