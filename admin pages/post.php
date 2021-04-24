<?php include '../templates/pages_header.php'; ?>
<?php include '../admin templates/admin_navbar.php'; ?>
<form action="../process/post_process.php" method="POST" >
  <fieldset>
    <legend>New Post:</legend>
    <p>-----------------</p>

    <div class="form-group">
      <label for="exampleInputEmail1">Name of the movie :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of the movie" name="mname" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Year :</label>
      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter the year" name="year" required>
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
      <textarea class="form-control" id="exampleTextarea" rows="3" name="text" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">POST</button>
  </fieldset>
</form>
<?php include '../templates/footer.php'; ?>