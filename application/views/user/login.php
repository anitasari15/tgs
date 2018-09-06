<?php echo form_open('visitor/login'); ?>
    <center><div class="col-md-4 col-md-offset-4">
   <br>
   <h1 class="text-center">FORM LOGIN</h1>
   <br>
   <div class="form-group">
   <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
   </div> 
   <br>
   <div class="form-group">
   <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
   </div>  
   <br>   
   <button type="submit" class="btn btn-primary btn-block">Login</button>
  </div>
 </div>
 <br></center>
   <br>
   <br>
<?php echo form_close(); ?>