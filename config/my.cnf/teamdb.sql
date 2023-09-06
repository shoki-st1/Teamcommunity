CREATE DATABASE IF NOT EXISTS teamdb;
USE teamdb;

CREATE TABLE IF NOT EXISTS teamdb_table
('id'       int(11) NOT NULL AUTO_INCREMENT,
'name' text,
PRIMARY KEY ('id'),
'question' text,
PRIMARY KEY ('id'));

INSERT INTO teamdb_table (question) VALUES("sample1");
INSERT INTO teamdb_table (question) VALUES("sample2");