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
$text=$_POST['editor1'];
print_r($_FILES['image']);

$text1=remove_special_char($text);

$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];
$error=$_FILES['image']['error'];

if ($error===0) {
    $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
    $realname=pathinfo($img_name, PATHINFO_FILENAME);
    echo $realname;
    $img_ex_lc=strtolower($img_ex);
    $allowed_exes=array("jpg","jpeg","png");
    if (in_array($img_ex_lc,$allowed_exes)) {
        $new_img_name=$realname.'.'.$img_ex_lc;
        $img_upload_path='../image/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);

        //insert into database
        $sql=
    }
    else{
        echo "cant upload files of this type";
    }
}
else{
    echo "unknown error occurred";
}


// echo $name, $year, $category, $text;

/* $sql="insert into movies (name,category,year,details)
VALUES('$name','$category','$year','$text1')";

$result=$conn->query($sql);
if ($result==true) { */
/*     echo "data inserted<br>"; */

/* if ($category=="Bangla") {
    header('location: ../admin pages/admin_bangla.php');
}
elseif ($category=="English") {
    header('location: ../admin pages/admin_english.php');
}
}
else {
    echo "data not inserted<br>".$conn->error."<br>";
}
 */








?>