CREATE TABLE users (
  id serial PRIMARY KEY,
  username varchar UNIQUE,
  password varchar
);