<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css"/> 
<style>
    body{
        background-color:#2d7280;
    }
    label{
        color:white;
    }
    h1{
    color:silver;
    }
</style>
</head>
  <body>
  <div class="container-fluid">
     
  <div class="form-group col-md-4 col-md-offset-4">
  <form action="" method="post">
  <div class="form-group">
   <CENTER><h1> LOG INTO YOUR ACCOUNT </h1></CENTER> 
   <hr>
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <label>Username</label>
    <input type="text" class="form-control" id="username" name="name" placeholder="Enter Your Username">
    <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Your Password">
  </div>

  <button formaction="userlogin" class="btn btn-danger btn-block">LOGIN</button> <br>
  <small> <label for="">*If you are not registered yet, Click on below Button to sign up</label></small>
  
</form>
<form action="">
<button  formaction="signup" class="btn btn-danger btn-block">CREATE AN ACCOUNT</button></form>
</div>
</div>
</body>
</html>
