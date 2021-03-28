CREATE DATABASE IF NOT EXISTS notes_master;
USE notes_master;

CREATE TABLE IF NOT EXISTS users(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    surname     VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    date        DATE NOT NULL,

    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS notes(
    id      INT(255) AUTO_INCREMENT NOT NULL,
    user_id INT(255) NOT NULL,
    title   VARCHAR(255) NOT NULL,
    content MEDIUMTEXT NOT NULL,
    date    DATE NOT NULL,

    CONSTRAINT pk_notes PRIMARY KEY(id),
    CONSTRAINT fk_user_id FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;