<?php include '../templates/pages_header.php'; ?>
<form action="../process/login_process.php" method="POST" >
  <fieldset  >
    <legend>Admin Login</legend>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required >
    </div>
    <button type="submit" class="btn btn-primary">login</button>
  </fieldset>
</form>
<?php include '../templates/footer.php'; ?>