

<?php

// $dbh =new PDO("mysql: host=localhost; dbname=module", "root", "");
// $stat = $dbh->prepare ("select * from myblob");
// $stat->execute();
// while ($row = $stat->fetch()){
//     echo "<li><a target='_blank '[href='view.php?id=".$row['id'].">".$row['name']."</a></li>";
// }
// session_start();
// $Username=$_SESSION["id"];
if(isset($_POST["certificate_id"])){
  

    $Certificate_Id = $_POST['certificate_id'];
    $conn = new mysqli("localhost", "root", "", "MTC_CERTIFICATE");  
    $sql = "SELECT * FROM ID ";  
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {
        // echo "<li><a target='_blank 'href='view.php?id=".$row['id']."'>".$row['name']."</a></li>"; 
        // 
        if ($row['certificate_id']==$Certificate_Id){
            header('Location:view.php?id='.$row['id']);
        }
        
    }
  






}



?>


</div>
</body>
</html>