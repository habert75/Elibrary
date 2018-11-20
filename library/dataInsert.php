<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO booktb (title, author,publisher,yr,isbn,pages,category,description,location)
VALUES ('Mastering Visual Basic .NET', 'Evangelos Petroutsos', 'Sybex, Incorporated','2001','0782128777','1153','Computers','?','x');";
$sql .= "INSERT INTO booktb (title, author,publisher,yr,isbn,pages,category,description,location)
VALUES ('how i play golf', 'tiger Woods', 'warner','2001','4445555','320','spors','?','x');";
$sql .="INSERT INTO booktb (title, author,publisher,yr,isbn,pages,category,description,location)
VALUES ('The 7 habits of highly efective people', ' Sthen Carvey', 'Simon and chuster trade','1990','111','319','business','?','x');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>