-- users table (used for login, signup, sessions, etc)
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL,
  PRIMARY KEY (`userId`)
);


-- blog posts that are loaded into the forum.php and article.php. alter requests sent from forum and create as well.
-- added to by create.php
CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY(`id`)
);

-- table for storing the upcoming events in timeline.php
-- make sure to sort in ascending/descending order of date as appropriate
CREATE TABLE `events` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL,
    `image_link` VARCHAR(255),
    PRIMARY KEY (`id`)
);
