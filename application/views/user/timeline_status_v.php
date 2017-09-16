friends of <span class="bg-danger text-danger">
<?= $u_name;?> </span>are
<br>
<?php foreach($friends as $we){
    echo $we[0]->u_name."<br>";
    // echo $we[0]->u_id."<br>";
    // echo $we[0]->u_email."<br>";


}?>
