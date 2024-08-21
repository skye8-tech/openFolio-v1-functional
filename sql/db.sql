CREATE DATABASE OPENFOLIO();


CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    username TEXT UNIQUE NOT NULL,
    passwords VARCHAR(50) NOT NULL,
    email TEXT NOT NULL,
    address TEXT NOT NULL,
    profileDetails TEXT(100) NOT NULL
);

CREATE TABLE certifications (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    Title TEXT(30) NOT NULL,
    organisation TEXT(40) NOT NULL,
    description TEXT(250) NULL,
    image VARCHAR NULL,
    url VARCHAR NULL,
    issuer TEXT NULL,
    dateEarned date NULL,
    user_id INTEGER NOT NULL REFERENCES users  
);


CREATE TABLE projects (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    Title TEXT(30) NOT NULL,
    description TEXT(250) NULL,
    TechnologiesUsed TEXT(30) NOT NULL,
    projectLinks VARCHAR NOT NULL,
    image VARCHAR NULL,
    url VARCHAR NULL,
    user_id INTEGER NOT NULL REFERENCES users
);

CREATE TABLE skills (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT UNIQUE NOT NULL,
    proficiencyLevel TEXT(20) NOT NULL,
    description TEXT(250) NULL,
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