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


<?php


$a=0;
if(isset($_POST['btn'])){

$name= $_FILES['myfile']['name'];
$Certificate_id=$_POST['certificate_id'];
$holder_name=$_POST['holdername'];
$type = $_FILES['myfile']['type'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MTC_CERTIFICATE";

$data = file_get_contents($_FILES['myfile']['tmp_name']);
$conn = mysqli_connect("localhost", "root", "", "MTC_CERTIFICATE");
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     
 }
 try{
    $conn->query("CREATE TABLE ID(id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,Holder_Name varchar(255),certificate_id varchar(255),name varchar(255),mime varchar(255),data longblob)AUTO_INCREMENT=1000000");
    }
 finally{
 
 }
$imgData =addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
// $imageProperties = getimageSize($_FILES['myfile']['tmp_name']);
// $name= $_FILES['myfile']['name'];

$sql = "INSERT INTO ID(certificate_id,Holder_Name,name,mime,data)VALUES('$Certificate_id','$holder_name','$name','$type','$imgData')";
$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
if($current_id){
$a=1;
}
// $stmt = $dbh->prepare ("insert into myblob values('',?,?,?)");

// $stmt->bindParam (1, $name);

// $stmt->bindParam (2,$type);

// $stmt->bindParam (3, $data);

// $stmt->execute();

}

?>
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
      <div class="content">
        <h1 class="topheading"></h1>
   
        <div class="box" >
            <h2 class="secondheading">Upload Document</h2>
            <br>
            <br>
            <br>
            <br>
                    
            <form method="post" action="upload.php" enctype="multipart/form-data" > 
            <input type="text" name="certificate_id" placeholder="Enter certificate id " class="certificate">
            <div>
            <input type="text" name="holdername" placeholder="Enter certificate holder name" class="certificate">
            <div>
                <input type="file" class="input topinput" style="self-align:center" name="myfile"/>
                <button name="btn" class="submit" >Upload</button>
                

</form>
<div style="padding-bottom:20px;">
<form action="../../seeupload.html">
<button class="submit" >SEE UPLOADS</button>
</form>

</div>
<?php
    if($a==1){
        echo"<div style='text-align:center; margin-top:30px;'>DATA SUCCESSFULLY ADDED</div>";
    }
?>
<p></p>

<ol>



</ol>
        </div>
        
        <br>
        <br>
        <footer style="background-color: black; color:white;text-align:center;height:80px;">
            <span ><br><div class="logo"><h4>
               COPYRIGHT @ADITYA KUMAR</h4>
             </div>
            </span>
            </footer>
      </div>



</body>
</html>
