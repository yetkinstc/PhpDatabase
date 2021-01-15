
<html>
<head>
</head>
<body>
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
<div style="width:80%; height:90%; background-color:cyan; overflow:auto; float:left;"> <h1>You've succesfuly logged in</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ass3";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT id, username, password FROM Admin";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "Infos being shown <br>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	
    echo "id: " . $row["id"]. " - Username: " . $row["username"]. " Password: " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}

?>
 <form action="welcome.php" method="post"> <button style="witdh:20%;" onclick="">Go Admin Menu</button><br></form>

</div>
</div>

</body>
</html>

