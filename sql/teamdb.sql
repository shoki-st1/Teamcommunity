CREATE DATABASE IF NOT EXISTS teamdb;
USE teamdb;

CREATE TABLE IF NOT EXISTS teamdb_table
('id'       int(11) NOT NULL AUTO_INCREMENT,
'question' text,
PRIMARY KEY ('id'));

INSERT INTO teamdb_table (question) VALUES("sample1");
INSERT INTO teamdb_table (question) VALUES("sample2");
INSERT INTO teamdb_table (question) VALUES("sample3");
INSERT INTO teamdb_table (question) VALUES("sample4");