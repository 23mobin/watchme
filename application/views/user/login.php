<?php
  $errors="";
  if(!empty($this->session->userdata('error'))){
    $errors = $this->session->userdata('error');
    $this->session->unset_userdata('error');
  }
?>



<div class="row">
  <form action="<?= base_url('welcome/login_check');?>" method="post">
  <div class="col-sm-5">

      <div class="form-group">
        <input type="text" name="u_email" class="form-control" placeholder="Email Address">
        <div class="login-bottom-text checkbox hidden-sm">
          <label>
            <input type="checkbox" id="">
            Keep me sign in
          </label>
        </div>
      </div>
  </div>
  <div class="col-sm-5">
     <div class="form-group">
        <input type="text" name="u_password" class="form-control" placeholder="Password">
        <div class="login-bottom-text hidden-sm"> Forgot your password?  </div>
      </div>
  </div>
  <div class="col-sm-2">
     <div class="form-group">
        <input type="submit" name="signin" value="login" class="btn btn-default btn-header-login">
      </div>
  </div>
</form>
</div>


<!-- <div class="col-md-6 col-md-offset-4">
  <form action="<?= base_url('welcome/login_check');?>" method="post">
   <?php if($errors != ""):?>
      <div class="text-danger text-center"><?= $errors;?></div>
    <?php endif;?> -->
    <!-- <label for="u_email">Email</label> -->
    <!-- <div class="col-xs-4">
      Email <input type="text" name="u_email" >
    </div>
<div class="col-xs-4">
  Password <input type="text" name="u_password">
  <button type="submit" name="signin" class="btn btn-primary pull-right">login</button>
</div>
  </form>
</div>






 <div class="panel panel-success">
    <div class="panel-heading text-center">Sign in</div>
    <div class="panel-body">
       <form class="form-group" action="<?= base_url('welcome/login_check');?>" method="post">
        <?php if($errors != ""):?>
          <div class="text-danger text-center"><?= $errors;?></div>
        <?php endif;?>
        <label for="u_email">Email</label>
        <input class="form-control" type="text" name="u_email" >
        <label for="u_password">Password</label>
        <input class="form-control" type="text" name="u_password"><br>
        <input type="checkbox" name="remember me" value="0"> Remember me
        <button type="submit" name="signin" class="btn btn-primary pull-right">login</button>
      </form> -->
