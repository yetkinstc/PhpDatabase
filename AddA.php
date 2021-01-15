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




<b>Category ID(1 to 3): </b>
<input type="number" name="value1"/>
<br><hr>
<b>Name: </b>
<input type="text" name="value2"/>
<br><hr>
<b>Position: </b>
<input type="number" name="value3"/>
<br><hr>
<b>Content: </b>
<input size=100; type="text" name="value4"/>
<br><hr>



<input type="submit" value="Result" name="add"/>
<br><hr></form>
<?php 


$subId = $_POST['value1'];
$name = $_POST['value2'];
$position = $_POST['value3'];
$content = $_POST['value4'];
if (!empty($subId) and !empty($name) and !empty($position) and !empty($content)) {
        // Define the query to inser the song request
        $sql = "insert into Pages (sub_id,menuname,position,content)
        values('$subId','$name','$position','$content')";

  // use exec() because no results are returned
 if (mysqli_query($conn, $sql)) {
  echo "The item has been added successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}else { echo "fill all the input boxes";  }


?>
<li><a href="welcome.php">Admins</li>
</div>
</div>

</body>

</html>