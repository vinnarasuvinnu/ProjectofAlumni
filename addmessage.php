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
 a {
  color: black;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('#to').change(function(){
      var value = $('#to').val();
       $('#to').val($('#from [value="' + value + '"]').data('value'));
       $('#toval').val(value);
    })
  })
</script>
  </head>

  <body>
    <div>
    <datalist id="from">
        <?php
          include('db.php');
          $q1="select * from student";
          $res=mysqli_query($con,$q1);
          while($row=mysqli_fetch_array($res)){

            ?>
            <option data-value="<?php echo $row['name'] ?>" value="<?php echo $row['stid']; ?>"><?php echo $row['name']; ?></option>
          <?php
            
          }
          ?>

    </datalist>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
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
              <a class="nav-link" href="addmessage.php">Compose message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inbox.php">Inbox message
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
  <h2 class="text-center">Compose message</h2>

  <form class="form-horizontal" action="fullmsg.php" method="post">


  <div>
   
</div>
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="to">to</label>
      <div class="col-sm-10">          
        <input type="text" autocomplete="on" list="from" class="form-control" id="to" placeholder="Enter to" >
        <input type="hidden" name="to" id="toval">
      </div>
    </div>
  
     <div class="form-group">
      <label class="control-label col-sm-2" for="dob">date of creation</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="dob"  name="dob">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="msg">Message</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="msg" placeholder="Enter message" name="msg">
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
