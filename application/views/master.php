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

    <header class=" login-header">
    <div class="container-fluid" style="padding:20px;">
    <div class="container">


	<div class="row ">
		<div class="col-sm-6">
			<h1 class="logo">Watch me</h1>
		</div>
		<div class="col-sm-6 ">
			<?= $user_loging_form;?>
		</div>
	</div>
  </div>
	</div>
</header>
<article class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="login-main">
					<!-- image bof logo -->
				</div>
			</div>
			<div class="col-sm-4">
				<div class="">

				<h3><i class="fa fa-shield"></i> Register now</h3>
			  	<hr>
				<div class="form-group">
				  <label class="control-label" for="">Email Address</label>
				  <input type="text" class="form-control" placeholder="Email Address">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Password</label>
				  <input type="text" class="form-control" placeholder="Password">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Repeat Password</label>
				  <input type="text" class="form-control" placeholder="Repeat Password">
				</div>

				<div class="">
					<label>Birthday</label>
				  <div class="form-group">
					  <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Day</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Month</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Year</option>
					 	</select>
					  </div>

				  </div>
				</div>

				<small>
					By clicking Sign Up, you agree to our Terms and that you have read our
					 Data Use Policy, including our Cookie Use.
				</small>
				<div style="height:10px;"></div>
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <input type="submit" class="btn btn-primary">
				</div>

				  </div>
			</div>
			</div>
		</div>
</article>
<footer class="container">
<hr>
<div class="footer-options">
<ul >
	<li><a href="#">Mobile</li>
	<li><a href="#">Find Friends</li>
	<li><a href="#">Badges</li>
	<li><a href="#">People</li>
	<li><a href="#">Pages</li>
	<li><a href="#">Places</a></li>
	<li><a href="#">Games</a></li>
	<li><a href="#">Locations</a></li>
	<li><a href="#">About</a></li>
</ul>
</div>
<div style="clear:both"></div>
<small class="copyrights"> © Copyrights reserved  2014</small>
</footer>




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?= base_url();?>js/jquery.js"></script>
      <script src="<?= base_url();?>js/bootstrap.js"></script>
  </body>
</html>
