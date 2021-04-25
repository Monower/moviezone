<?php 
 include '../db/dbconnect.php';
 $conn=$obj->open();
$id=$_POST['id'];
$category=$_POST['category'];

$sql = "DELETE FROM movies WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    if ($category=="Bangla") {
        header('location: ../admin pages/admin_bangla.php');
    }
    elseif ($category=="English") {
        header('location: ../admin pages/admin_english.php');
    }
  } else {
    echo "Error deleting record: " . $conn->error;
  }


?>