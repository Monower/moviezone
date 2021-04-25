<?php 
 include '../db/dbconnect.php';
 $conn=$obj->open();
 $id=$_POST['id'];
 $name=$_POST['mname'];
 $year=$_POST['year'];
 $category=$_POST['cat'];
 $details=$_POST['text'];

 $sql = "UPDATE movies SET name='$name', category='$category', year='$year', details='$details' WHERE id='$id'";

 if ($conn->query($sql) === TRUE) {
    /* echo "Record updated successfully"; */
    if ($category=="Bangla") {
        header('location: ../admin pages/admin_bangla.php');
    }
    elseif ($category=="English") {
        header('location: ../admin pages/admin_english.php');
    }
  } else {
    echo "Error updating record: " . $conn->error;
  }






?>