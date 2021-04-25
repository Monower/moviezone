<?php 
include '../templates/pages_header.php'; 
include '../admin templates/admin_navbar.php';
include '../db/dbconnect.php';
$conn=$obj->open();
 
 
?>

<!-- <div class="center" > -->
<!--     <h2>This is Bangla</h2> -->
    <?php 
    
        $sql="SELECT * FROM movies where category='Bangla'";
        $result=$conn->query($sql);
        if($result==true)
        {
            while ($row=$result->fetch_assoc()) {
/*                 echo "Post ID:".$row['ID'];
                echo "Name of the movie:".$row['name']."<br>";
                echo "Category:".$row['category'];
                echo "Year:".$row['year'];
                echo "Posted at:".$row['created_at']."<br>";
                echo "Details:".$row['details']; */
                ?>
                    <div class="jumbotron">
                        <h1 class="display-3"><?php echo $row['name']; ?></h1>
                        <p class="lead"><small><?php echo "posted on: ".$row['created_at']."<br>"."category: ".$row['category']."<br>"."released on: ".$row['year']; ?></small></p>
                        <hr class="my-4">
                        <p><?php echo $row['details']; ?></p>
                    </div>

                <?php


            }
        }
        else {
            echo $conn->error;
        }


    
    
    
    ?>
<!-- </div> -->



<?php include '../templates/footer.php'; ?>