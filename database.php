<?php

// Database configuration
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "bajrayog";      // Use the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// SQL query to create an admin table
/*$sql = "CREATE TABLE admin (
    AdminId INT(3) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(25) NOT NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

// SQL query to create a user table
/*$sql = "CREATE TABLE user(
    uid INT(3) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(25) NOT NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: ". $conn->error;
}*/

// SQL query to create the database
/*$sql = "CREATE DATABASE Bajrayog";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Database 'Bajrayog' created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}*/

// Close the connection
$conn->close();
?>












// SQL query to create a table
/*$sql = "CREATE TABLE doctor (
    did INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table doctor created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
