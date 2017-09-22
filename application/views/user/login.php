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
