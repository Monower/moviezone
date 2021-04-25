<?php include '../templates/pages_header.php'; ?>
<?php include '../admin templates/admin_navbar.php'; ?>
<?php 
include '../db/dbconnect.php';
$conn=$obj->open();
?>

<h1>Latest Post:</h1>


<?php 
    
    $sql="SELECT * FROM movies where category='Bangla' order by ID DESC";
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
                        <form action="edit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                            <input type="submit" value="Edit" class="btn btn-success">
                        </form>
                        <form action="../process/delete_process.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                            <input type="hidden" name="category" value="<?php echo $row['category']; ?>">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>

                <?php

            }
    }
    else {
        echo $conn->error;
    }


    
    
    
?>


<?php include '../templates/footer.php' ?>