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
   <CENTER><h1> CREATE AN ACCOUNT </h1></CENTER> 
   <hr>
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <label>Your Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
    </div>
    
    <div class="form-group">
    <label>Email Address </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
  </div>

    <div class="form-group">
    <label>Phone Number </label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
    </div>

  <br>
  <button formaction="signup-data" class="btn btn-danger btn-block">CREATE AN ACCOUNT</button>
  
</form>
<form action="">
<button formaction="/" class="btn btn-danger btn-block">Back</button>
</form>

</div>
</div>
  </body>
 
</html>