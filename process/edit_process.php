<?php 
 include '../db/dbconnect.php';
 $conn=$obj->open();
 function remove_special_char($details)
{
    $res= str_replace( array("'")," ", $details );

    return $res;
}
 $id=$_POST['id'];
 $name=$_POST['mname'];
 $year=$_POST['year'];
 $category=$_POST['cat'];
 $details=$_POST['editor1'];

 $details1=remove_special_char($details);

 $sql = "UPDATE movies SET name='$name', category='$category', year='$year', details='$details1' WHERE id='$id'";

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