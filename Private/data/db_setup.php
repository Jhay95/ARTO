<?php

require_once('../config/config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Error handling
if ($conn->connect_error) {
    if (isset($conn)) {
        die('Failed to connect to MySQL - ' . $conn->connect_error);
    }
} else echo "Connected Successfully.\n";


// Create Table - Writers
$wsql = <<<SQL
CREATE TABLE writers (
writer_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
writer_fname VARCHAR(128) NOT NULL,
writer_lname VARCHAR(128) NOT NULL,
writer_email VARCHAR(64) NOT NULL UNIQUE ,
writer_profile TEXT,
writer_city VARCHAR(64) , 
writer_state VARCHAR(64) , 
writer_username VARCHAR(32),
writer_password VARCHAR(16) NOT NULL ,
writer_reg_date DATETIME DEFAULT NOW(),
writer_modify_date DATETIME DEFAULT NOW()
)
SQL;

// Create Table - Story
$ssql = <<<SQL
CREATE TABLE stories (
story_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
writer_id INT UNSIGNED NOT NULL,
story_title VARCHAR(128) NOT NULL,
story_slug VARCHAR(128) NOT NULL UNIQUE ,
story_body MEDIUMTEXT,
story_category SET('War', 'Family', 'Tradition') ,
story_location VARCHAR(64) ,
story_pub_date DATETIME NOT NULL DEFAULT NOW(),
story_modify_date DATETIME DEFAULT NOW(),
CONSTRAINT fk_writerid FOREIGN KEY (writer_id) REFERENCES writers(writer_id)                      
)
SQL;

// Create Table - Photos
$psql = <<<SQL
CREATE TABLE photos (
photo_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
upload_id INT UNSIGNED NOT NULL,
photo_title VARCHAR(128) NOT NULL,
photo_modify_date DATETIME NOT NULL DEFAULT NOW(),
CONSTRAINT fk_uploadid FOREIGN KEY (upload_id) REFERENCES writers(writer_id)                      
)
SQL;
if ($conn->query($wsql) === TRUE) {
    echo "Writers table successfully created.\n";
} else die('Connection error' . $conn->error);

if ($conn->query($ssql) === TRUE) {
    echo "Story table successfully created.\n";
} else die('Connection error' . $conn->error);

if ($conn->query($psql) === TRUE) {
    echo "Story table successfully created.\n";
} else die('Connection error' . $conn->error);

$conn->close();

