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
<body class="">
  <div class="container-fluid">
    <div class="row">
      <?= $user_navbar;?>
    </div>
    <div class="row B-color" style="margin-top:70px;">
      <div class="col-sm-2">
        <h3>HI <?= $u_name;?> ! id is <?= $u_id;?></h3>

      </div>
      <div class="col-sm-6">
        <?= $status_update_form;?>
        <?= $u_home_content;?>


                <div class="panel panel-white post panel-shadow">
                  <div class="post-heading">
                    <div class="pull-left image">
                      <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <a class="btn btn-small pull-right" href="#"><i class="fa fa-times" aria-hidden="true"></i>
                    <div class="pull-left meta">
                      <div class="title h5">
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                      </div>
                      <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                  </div>
                  <div class="post-description">
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                    <div class="stats">
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                      </a>
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-down icon"></i>12
                      </a>
                    </div>
                  </div>
                </div>




      </div>
      <div class="col-sm-2">

      </div>
    </div>
  </div>
  <!-- chat box -->
  <?php
  // echo $u_chats_contents;
  ?>
  <!-- chat box -->





  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="<?= base_url();?>js/jquery.js"></script>
  <script src="<?= base_url();?>js/chat.js"></script>
  <script src="<?= base_url();?>js/bootstrap.js"></script>
</body>
</html>
