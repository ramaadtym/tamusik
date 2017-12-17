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
      <?php echo form_open('regis/daftar'); ?>
        <h2 class="form-signin-heading">Sign Up</h2>
          <select class="form-control" name="role">
            <option value="produser">Produser</option>
            <option value="pendengar">Pendengar</option>
          </select>
        <label for="inputEmail" class="">Username</label>
        <input type="text" id="" name="username" class="form-control" placeholder="Username" autofocus="">
        <label for="inputPassword" class="">Password</label>
        <input type="password" id="" name="pwd" class="form-control" placeholder="Password" required="">
        <label for="inputPassword" class="">Name</label>
        <input type="text" id="" name="name" class="form-control" placeholder="name" required="">
        <label for="inputPassword" class="">Address</label>
        <input type="text" id="" name="address" class="form-control" placeholder="address" required="">
        <label for="inputPassword" class="">Phone</label>
        <input type="number" id="" name="phone" class="form-control" placeholder="phone" required="">
        <label for="inputPassword" class="">Email</label>
        <input type="email" id=""  name="email" class="form-control" placeholder="email" required="">
          <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit"></input>
      <?php echo form_close(); ?>
    </div> <!-- /container -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
