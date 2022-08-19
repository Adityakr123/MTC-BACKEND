<?php
//  echo"Username";

if(isset($_POST["username"])){
  

    $Username = $_POST['username'];
    $password = $_POST['password'];
    $Username1="Mtc@Mnr";
    $safePassword=password_hash('Upes@Cse@MTC@2022', PASSWORD_DEFAULT);
    
    if ($Username==$Username1) {

        $passback = password_verify($password, $safePassword);
        if ($passback) {
          include 'upload.php';
            
        } 
        else {
            echo"Incorrect Password!";
        }
    }

}
?>