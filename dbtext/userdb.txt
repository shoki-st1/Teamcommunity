CREATE DATABASE IF NOT EXISTS userdb;
USE userdb;

--tableの作成--
CREATE TABLE IF NOT EXISTS userdb_table
(
  userid VARCHAR(50) PRIMARY KEY,
  password VARCHAR(255) NOT NULL
  );
