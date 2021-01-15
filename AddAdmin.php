<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ass3";
$conn = new mysqli($servername, $username, $password,$dbname);



?>
<div style="width:100%; height:100%;   overflow:auto; position:relative;" >
<div style="background-color:blue; width:100%; height:10%; overflow:auto;">dasdas 
</div>

<div style="width:14%; height:82%; background-color:red; overflow:auto; float:left; padding:3%;"> 
<ul>
<li><a href="admin.php">Add/See/Delete Admin</li>
  <li><a href="Pages.Php">Go to Articles</a></li>
  <li><a href="logout.php">log out</a></li>
</ul>

</div>
<div style="width:80%; height:90%; background-color:cyan; overflow:auto; float:left;"> <h1></h1>
<form method="post">

<b>Enter Id: </b>

<input type="number" name="value1"/>
<br><hr>
<b>Enter Username: </b>
<input type="text" name="value2"/>
<br><hr>
<b>Enter:Password </b>
<input type="text" name="value3"/>

<input type="submit" value="Result" name="add"/>
<br><hr></form>
<?php 

if (!empty($_POST['value1']) and !empty($_POST['value2']) and !empty($_POST['value3']))
{$Id = $_POST['value1'];
$number2 = $_POST['value2'];
$number3 = $_POST['value3'];

$sql="INSERT INTO Admin(id, username, password)
VALUES ('$Id','$number2','$number3')";
echo "<br> <br>";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
  echo "empty";
}

?>
<li><a href="welcome.php">Admins</li>
</div>
</div>

</body>

</html>