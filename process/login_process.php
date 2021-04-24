<?php 
include '../db/dbconnect.php'; 
$conn=$obj->open();

$email1=$_POST['email'];
$password1=$_POST['password'];

echo $email1, $password1;

$sql="SELECT * FROM admin";
$result=$conn->query($sql);
if($result==true)
{
    while ($row=$result->fetch_assoc()) {
        $email=$row['email'];
        $password=$row['password'];

    }
}
else {
    echo $conn->error;
}

if ($email1==$email and $password1==$password) {
    header('location: ../admin/home.php');
}
else {
    ?>
        <script>
            alert("Wrong Email or Password");
        </script>
    <?php  
    header('location: ../admin/index.php');
}



?>