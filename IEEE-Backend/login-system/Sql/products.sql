-- connected to project3 database

CREATE TABLE products (id BIGSERIAL NOT NULL PRIMARY KEY,
name VARCHAR(110) NOT NULL,
price INTEGER NOT NULL,
user_id INTEGER NOT NULL);