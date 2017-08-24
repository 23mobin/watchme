<?php
  $errors="";
  if(!empty($this->session->userdata('error'))){
    $errors = $this->session->userdata('error');
    $this->session->unset_userdata('error');
    echo "asdsad";
  }
?>


<div class="col-md-4 col-md-offset-4">
  <form class="form-group" action="<?= base_url('welcome/login_check');?>" method="post">
    <?php if($errors != ""):?>
      <div class="text-danger text-center"><?= $errors;?></div>
    <?php endif;?>
    <label for="u_email">Email</label>
    <input class="form-control" type="text" name="u_email" >
    <label for="u_password">Password</label>
    <input class="form-control" type="text" name="u_password"><br>
    <button type="submit" name="signin" class="btn btn-primary btn-block">sign in</button>
  </form>
  <br>
</div>
