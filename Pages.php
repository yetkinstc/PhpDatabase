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
session_start();


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


<?php 
$sql = "select menuname , id FROM Subjects";
$result = mysqli_query($conn, $sql);

$sql2 = "select menuname FROM Pages where Subjects.id=Pages.sub_id";
$result2 = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result) > 0) {
	echo "Infos being shown <br>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  
    echo "<a href='pro.php?id=";
	echo $row["id"];
	echo "' onclick=' ";
	$_SESSION['varname'] = $row["id"];
	echo "'>";
    
    echo "" .$row["menuname"]. "<br>";
	echo "</a>";
  }
} else {
  echo "0 results";
}



?>
<li><a href="welcome.php">Admins</li>
<li><a href="DeleteA.php">Delete an article</li>
<li><a href="AddA.php">Add an article</li>
</div>
</div>

</body>

</html>