<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link href="<?= base_url();?>css/style.css" rel="stylesheet">
  <link href="<?= base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" >
  <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <h3>HI <?= $u_name;?> !</h3>
  <a class="btn btn-danger" href="<?= base_url();?>user_home/logout">Logout</a>
  <br>
  <?= $u_home_content;?>










  
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="<?= base_url();?>js/jquery.js"></script>
    <script src="<?= base_url();?>js/bootstrap.js"></script>
</body>
</html>


asdasd
