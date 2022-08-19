<?php

$dbh = new PDO("mysql: host=localhost; dbname=module", "root", "");
session_start();
$Username=$_SESSION["id"];
$id=isset ($_GET['id'])? $_GET['id'] : "";
$stat = $dbh->prepare("select * from $Username where id=?");

$stat->bindParam (1, $id);

$stat->execute();

$row = $stat->fetch();

header('Content-Type: '.$row ['mime']);

echo $row['data'];

?>