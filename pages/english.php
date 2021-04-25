<?php include '../templates/pages_header.php' ?>
<?php include '../templates/pages_navbar.php' ?>
<?php 
include '../db/dbconnect.php';
$conn=$obj->open();

?>


    <?php 
    
        $sql="SELECT * FROM movies where category='English' order by ID DESC";
        $result=$conn->query($sql);
        if($result==true)
        {
            while ($row=$result->fetch_assoc()) {
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


<?php include '../templates/footer.php' ?>