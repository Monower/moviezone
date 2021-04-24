<?php 
include '../db/dbconnect.php';
$conn=$obj->open();
$name=$_POST['mname'];
$year=$_POST['year'];
$category=$_POST['cat'];
$text=$_POST['text'];


// echo $name, $year, $category, $text;

$sql="insert into movies (name,category,year,details)
VALUES('$name','$category','$year','$text')";

$result=$conn->query($sql);
if ($result==true) {
/*     echo "data inserted<br>"; */
?>
<script>

alert('data insertted');

</script>

<?php
header('Location: ../admin pages/post.php');
}
else {
    echo "data not inserted<br>".$conn->connect_error."<br>";
}









?>