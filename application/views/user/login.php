<?php
  $errors="";
  if(!empty($this->session->userdata('error'))){
    $errors = $this->session->userdata('error');
    $this->session->unset_userdata('error');
  }
?>

<div class="col-md-4 col-md-offset-4">
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
      </form>
    </div>

  </div>




  <br>
</div>
