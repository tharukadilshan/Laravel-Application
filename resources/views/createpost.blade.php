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
    a{
    color:black;
}
</style>
</head>
  <body>
  <div class="container-fluid">
     
  <div class="form-group col-md-4 col-md-offset-4">
  <form action="" method="post">
  <div class="form-group">
   <CENTER><h1> Add posts </h1></CENTER> 
   <hr>
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <label>Post Title</label>
    <input type="text" class="form-control" id="post" name="posttitle" placeholder="Enter Post Title">
    </div>
    
    <div class="form-group">
    <label>Description</label>
    <input type="textarea" class="form-control" id="description" name="description" placeholder="Description">
    </div>
  <br>
  <button formaction="addpost" class="btn btn-danger btn-block">INSERT</button>
  <br>
  <a href="/"> Logout </a>
</form>

</div>
</div>
  </body>
 
</html>