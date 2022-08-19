<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
<nav>
        <div class="logo">
          MODULE
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
        </label>
        <ul>
           
           <!-- <li><a href="#">ABOUT US</a></li> -->
           <li><a href="Register.php">Register</a></li>
           <li><a class="login.html"  href="#">Login</a></li>
           <!-- <li><a href="#">Gallery</a></li>
           <li><a href="#">Feedback</a></li> -->
        </ul>
     </nav>
      <div class="content" style="margin-top:-200px">

<?php
// $dbh =new PDO("mysql: host=localhost; dbname=module", "root", "");
// $stat = $dbh->prepare ("select * from myblob");
// $stat->execute();
// while ($row = $stat->fetch()){
//     echo "<li><a target='_blank '[href='view.php?id=".$row['id'].">".$row['name']."</a></li>";
// }
session_start();
$Username=$_SESSION["id"];
$conn = mysqli_connect("localhost", "root", "", "module");  
                 
$query = "SELECT * FROM $Username";  
$result = mysqli_query($conn, $query);  
while($row = mysqli_fetch_array($result)) {
   echo "<li><a target='_blank 'href='view.php?id=".$row['id']."'>".$row['name']."</a></li>"; 
}


?>

<a href="upload.php"><button class="submit" >UPLOAD NEW</button></a>
<a href="default.html"><button class="submit" >DEFAULT FORMATS</button></a>
<footer style="background-color: black; color:white;text-align:center;height:80px;">
            <span ><br><div class="logo"><h4>
               COPYRIGHT @ADITYA KUMAR</h4>
             </div>
            </span>
            </footer>
</div>
</body>
</html>