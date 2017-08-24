<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>site1 home</title>
    <link href="<?= base_url();?>css/style.css" rel="stylesheet">
    <link href="<?= base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet">



  </head>
  <body>
    <h1 class="text-success">Watch Me <i class="fa fa-user text-danger"></i></h1>
    <?= $user_loging_form;?>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?= base_url();?>js/jquery.js"></script>
      <script src="<?= base_url();?>js/bootstrap.js"></script>
  </body>
</html>
