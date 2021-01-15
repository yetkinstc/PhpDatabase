<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE ass3";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
mysqli_close($conn); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ass3";
$conn = new mysqli($servername, $username, $password,$dbname);


	$sql="CREATE TABLE Admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL UNIQUE,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error, "<br>";
}
$sql="CREATE TABLE Subjects (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
menuname VARCHAR(30) NOT NULL UNIQUE,
position INT(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$sql="INSERT INTO Subjects(id, menuname, position)
VALUES ('1','TOYS','1'),('2','ELECTRONICS','2'),('3','GAMES','3')";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql="CREATE TABLE Pages (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sub_id INT(6) NOT NULL ,
menuname VARCHAR(30) NOT NULL ,
position INT(30) ,
content VARCHAR(1111) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$sql="INSERT INTO Pages(id,sub_id, menuname, position,content)
VALUES ('1','1','TOYS','1','we sell noting'),('2','2','ELECTRONICS','2','we sell noting'),('3','3','GAMES','3','we sell noting')";


if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$sql="INSERT INTO Admin(id, username, password)
VALUES ('1','admin','1234')";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
header("location: homepage.php");
?>