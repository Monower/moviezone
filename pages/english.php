<?php include '../templates/pages_header.php' ?>
<?php include '../templates/pages_navbar.php' ?>
<?php 
include '../db/dbconnect.php';
$conn=$obj->open();

?>
<div class="center" >
    <h2>This is English</h2>
    <?php 
    
    $sql="SELECT name FROM movies where category='English'";
    $result=$conn->query($sql);
    if($result==true)
    {
        while ($row=$result->fetch_assoc()) {
            echo "Name:".$row['name']."<br>";

        }
    }
    else {
        echo $conn->error;
    }





?>
</div>

<?php include '../templates/footer.php' ?>