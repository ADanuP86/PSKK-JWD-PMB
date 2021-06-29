<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/css_login.css">

<body>

  <center>
  <h2><b>PENDAFRTARAN ONLINE SISWA BARU</b></h2>
  <h2>PESIBAR</h2>
  </center>

  <div class = "container">
    <div class="wrapper">
      <form action="<?php echo site_url('C_login/aksi_login')?>" method="post" name="Login_Form" class="form-signin">

        <h3 class="form-signin-heading">Silahkan Login</h3>
        <hr class="colorgraph">
        <br>

        <?php 
          $info = $this->session->flashdata('info');
            if (!empty($info)) {
              echo $info;
          }
        ?>
        
        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>          
       
        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button> 
        <br>

        <center>
        <a href="<?php echo base_url().'C_register/tampil_register';?>">Register</a>
        </center>

      </form>    
      
  </div>
    </div>
   
</body>
</html>
