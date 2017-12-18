<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules\bootstrap\dist\css\bootstrap.min.css">
  <script src="<?php echo base_url(); ?>node_modules\bootstrap\dist\css\bootstrap-theme.min.css"></script>
</head>
<body>
    <div class="container">
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('upload/do_upload');?>
        <h2 class="form-signin-heading">Upload</h2>
        <label for="inputEmail" class="">Watermark</label>
        <input type="file" class="form-control" name="watermark" size="20" />
        <label for="inputEmail" class="">Cover</label>
        <input type="file" class="form-control" name="cover" size="20" />
        <label for="inputEmail" class="">Lagu</label>
        <input type="file" class="form-control" name="lagu" size="20" />
        <label for="inputEmail" class="">Judul</label>
        <input type="text" id="" name="judul" class="form-control" placeholder="Judul" autofocus="">
        <label for="inputPassword" class="">Host</label>
        <input type="text" id="" name="host" class="form-control" placeholder="Host" required="">

        <input class="btn btn-lg btn-primary btn-block" type="submit"></input>
      <?php echo form_close(); ?>
    </div> <!-- /container -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
