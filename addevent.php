
<?php
session_start();
if(!isset($_SESSION['aname'])){
  echo '<script>alert("please do login to access admin page");location.href="admin.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
<style type="text/css">
 a {
  color: black;
}
  h3{
    color:black;
  }
  li{
    margin-right: 100px;
  }
  footer
{
position: relative;
margin-top: -150px; /* negative value of footer height */
height: 150px;
clear:both;
padding-top:20px;
color:#fff;
}
body{
  background-image: url(s.jpg);
}
</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Alumni</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addstaff.php">Add staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.php">Event publish
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>


<div class="container" style="margin-top: 200px;margin-bottom: 100px">
  <div class="card">
  <h2 class="text-center">Add Event</h2>

  <form class="form-horizontal" action="dbevent.php" method="post">

     <div class="form-group">
      <label class="control-label col-sm-2" for="etitle">Event Title</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="etitle" placeholder="Enter title" name="etitle">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="desc">Description</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="desc" placeholder="Enter description" name="desc">
      </div>
    </div>
  
     <div class="form-group">
      <label class="control-label col-sm-2" for="edate">Event date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="edate"  name="edate">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="time">Time</label>
      <div class="col-sm-10">          
        <input type="time" class="form-control" id="time" placeholder="Enter time" name="time">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="add">Status</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="stat" placeholder="Enter status" name="stat">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="cno">Contact no</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="cno" placeholder="Enter contactno" name="cno">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>

   


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
