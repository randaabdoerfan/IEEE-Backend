-- connected to project3 database
-- password VARCHAR(5600) >> as password is hashed so in long password won't be a problem

CREATE TABLE users (id BIGSERIAL NOT NULL PRIMARY KEY,
username VARCHAR(50) NOT NULL,
email VARCHAR(90) NOT NULL,
password VARCHAR(600) NOT NULL);