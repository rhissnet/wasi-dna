<?php


$config = new config();
$dbhost = $config->data['dbhost'];
$dbuser = $config->data['dbuser'];
$dbpass = $config->data['dbpass'];
$dbname = $config->data['dbname'];

echo " host: ".$dbhost;
echo " user: ".$dbuser;
echo " dbpass: ".$dbpass;

// Create connection

// Check connection
if (! $conn = @mysqli_connect($dbhost, $dbuser, $dbpass)) {
    die("Connection failed: " . $conn->connect_error);
}
/*
// Create database
$sql = "CREATE DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
$conn->close();