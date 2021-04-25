<?php 
 include '../templates/pages_header.php';
 include '../db/dbconnect.php';
$conn=$obj->open();

 $id=$_POST['id'];

 $sql="SELECT * FROM movies where ID='$id'";
 $result=$conn->query($sql);
 if ($result==true) {
    while ($row=$result->fetch_assoc()) {
        ?>
            <form action="../process/edit_process.php" method="POST" >
                <fieldset>
                        <legend>Edit</legend>
                            <p>-----------------</p>
                            <input type="hidden" value="<?php echo $row['ID']; ?>" name="id">
                            <div class="form-group">    
                                <label for="exampleInputEmail1">Name of the movie :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['name']; ?>" name="mname" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Year :</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $row['year']; ?>" name="year">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Category :</label>
                                <select class="form-control" id="exampleSelect1" name="cat" >
                                    <option>----</option>
                                    <option>Bangla</option>
                                    <option>English</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Details of the movie :</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3" name="text" ><?php echo $row['details']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                </fieldset>
            </form>


        <?php
    }
 }
 else {
     echo $conn->error;
 }

 ?>


<?php include '../templates/footer.php'; ?>
