-- #Create the database
CREATE DATABASE IF NOT EXISTS Quotes_db;
USE Quotes_db;

-- -- #Create the quotes table
CREATE TABLE IF NOT EXISTS quotes(
	q_id 		INT 	AUTO_INCREMENT 	PRIMARY KEY		NOT NULL,
	quote 	TEXT	NOT NULL,
	author 	TEXT 	NOT NULL,
	q_date 		DATE	NOT NULL,
	q_descr	TEXT);


-- EX:
INSERT INTO quotes(quote, author, q_date, q_descr)
VALUES	('Hello', 'James Corcoran', '2017-11-12', 'n/a');
