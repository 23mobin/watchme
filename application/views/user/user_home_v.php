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
<body class="B-color">
  <navbar>
    <?= $user_navbar;?>
  </navbar>

  <h3>HI <?= $u_name;?> !</h3>

  <br>
  <?= $u_home_content;?>
  <!-- chat box -->

  <div class="chat_box">
  	<div class="chat_head"> Chat Box</div>
  	<div class="chat_body">
  	<div class="user"> Krishna Teja</div>
  	</div>
    </div>

  <div class="msg_box" style="right:290px">
  	<div class="msg_head">Krishna Teja
  	  <div class="close">x</div>
  	</div>
  	<div class="msg_wrap">
  		<div class="msg_body">
  			<div class="msg_a">This is from A	</div>
  			<div class="msg_b">This is from B, and its amazingly kool nah... i know it even i liked it :)</div>
  			<div class="msg_a">Wow, Thats great to hear from you man </div>
  			<div class="msg_push"></div>
  		</div>
  	        <div class="msg_footer"><textarea class="msg_input" rows="4"></textarea></div>
         </div>
  </div>
  <!-- chat box -->



  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="<?= base_url();?>js/jquery.js"></script>
  <script src="<?= base_url();?>js/chat.js"></script>
  <script src="<?= base_url();?>js/bootstrap.js"></script>
</body>
</html>


asdasd
