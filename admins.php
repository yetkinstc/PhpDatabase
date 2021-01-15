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
 <form action="seeAdmins.php" method="post"> <button style="witdh:20%;" onclick="">See Admins</button><br></form>
 <form action="AddAdmin.php" method="post"> <button style="witdh:20%;" onclick="DropTable()">Add an Admin           </button><br></form>
 <form action="DeleteAdmin.php" method="post"> <button style="witdh:20%;" onclick="DropTable()">Delete an Admin           </button><br></form>
</div>
</div>

</body>

</html>