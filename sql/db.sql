CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    username TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL
);

CREATE TABLE certifications (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    description TEXT NULL,
    image TEXT NULL,
    url TEXT NULL,
    issuer TEXT NULL,
    date TEXT NULL,
    user_id INTEGER NOT NULL REFERENCES users  
);


CREATE TABLE projects (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    description TEXT NULL,
    image TEXT NULL,
    url TEXT NULL,
    user_id INTEGER NOT NULL REFERENCES users
);

CREATE TABLE skills (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    description TEXT NULL,
    user_id INTEGER NOT NULL REFERENCES users
);

CREATE TABLE profile (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NULL,
    last_name VARCHAR(100) NULL,
    bio TEXT NULL,
    image TEXT NULL,
    phone VARCHAR(32) NULL,
    user_id INTEGER NOT NULL REFERENCES users

)