<?php 
include '../db/dbconnect.php';
$conn=$obj->open();
function remove_special_char($text)
{
    $res= str_replace( array("'")," ", $text );

    return $res;
}
$name=$_POST['mname'];
$year=$_POST['year'];
$category=$_POST['cat'];
$text=$_POST['text'];

$text1=remove_special_char($text);


// echo $name, $year, $category, $text;

$sql="insert into movies (name,category,year,details)
VALUES('$name','$category','$year','$text1')";

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
    echo "data not inserted<br>".$conn->error."<br>";
}









?>