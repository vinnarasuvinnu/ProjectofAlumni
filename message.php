<?php
session_start();
if(!isset($_SESSION['uname'])){
  echo '<script>alert("please do login to access student page");location.href="inbox.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>gov colg</title>

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
  </head>

  <body>

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



   
<div class="container" style="margin-top: 200px">
  <div class="row">
    <?php
    include('db.php');
    $id=$_SESSION['sid'];
    $q1="select * from message where mto ='$id'";
    $res=mysqli_query($con,$q1);
    while($row=mysqli_fetch_array($res)){
      $toid=$row['mfrom'];
      $q2="select name from student where stid='$toid'";
      $res1=mysqli_query($con,$q2);
      $row2=mysqli_fetch_array($res1);
    ?>
    <div class="col-lg-3" style="margin-bottom: 10px;">
  <div class="card">
    <h3 class="text-center"></h3>
    <p style="margin-left: 10px"><b>From:<?php echo $row2['name']; ?></b></p>
    <p style="margin-left: 10px"><?php echo $row['message']; ?></p>
  </div>
</div>
<?php
}
?>
</div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
