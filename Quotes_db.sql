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


INSERT INTO quotes(quote, author, q_date, q_descr)
VALUES	('I ate my New Jersey voters ballet', 'James Corcoran', '2017-11-12', 'n/a'),
				('I’m just trying to find 13 year olds', 'Jahnke', '2018-2-25', 'playing fortnite');
