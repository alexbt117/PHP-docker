CREATE USER 'dbowner'@'%' IDENTIFIED BY 'password123!';
GRANT ALL PRIVILEGES ON * . * TO 'dbowner'@'%';
CREATE DATABASE menagerie;
USE menagerie;
create table users (id int NOT NULL AUTO_INCREMENT, username VARCHAR(100) not null, password VARCHAR(100) not null, email varchar(100) not null, PRIMARY KEY (id));
