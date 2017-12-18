<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
  <script src="node_modules\bootstrap\dist\css\bootstrap-theme.min.css"></script>
</head>
<body>
    <div class="container">
      <?php echo validation_errors(); ?>
      <?php echo form_open('auth/login'); ?>
        <h2 class="form-signin-heading">Sign in</h2>
        <label for="inputEmail" class="">Username</label>
        <input type="text" id="" name="user" class="form-control" placeholder="Username" autofocus="">
        <label for="inputPassword" class="">Password</label>
        <input type="password" id="" name="pass" class="form-control" placeholder="Password" required="">
          <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit"></input>
      <?php echo form_close(); ?>
      <a href="<?php echo base_url(); ?>Auth/daftar">Daftar</a>
    </div> <!-- /container -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
