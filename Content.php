
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
<div style="width:80%; height:90%; background-color:cyan; overflow:auto; float:left;"> <h1></h1>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ass3";

$conn = new mysqli($servername, $username, $password,$dbname);
$url=$_SERVER['REQUEST_URI'];

$parts = parse_url($url);
parse_str($parts['query'], $query);

$var_value = $_SESSION['varname'];
$sql = "SELECT Pages.content,pages.menuname , Pages.id FROM Pages where Pages.id={$query['id']}";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "Products<br>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
 
  echo "Name:" .$row["menuname"]. "<br>";

   echo  "" .$row["content"].
	"<br>";
	
		
  }
} else {
  echo "0 results";
}
?>
<form action="" method="post">
<div style="height:50%; overflow:hidden;" >
Uptade: <input size="100" type="text" name="name"><br>
</div>
<input type="submit">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
  $sql = "UPDATE Pages SET Content='{$name}' WHERE id={$query['id']}";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  }
}


?>
</form>
</body>
</html>