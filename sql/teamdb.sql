CREATE DATABASE IF NOT EXISTS teamdb;
USE teamdb;

CREATE TABLE IF NOT EXISTS teamdb_table
(
  `id`         int(11) NOT NULL AUTO_INCREMENT,
  `sample`     text,
  PRIMARY KEY (`id`)
);

INSERT INTO teamdb_table (sample) VALUES ("sample1");