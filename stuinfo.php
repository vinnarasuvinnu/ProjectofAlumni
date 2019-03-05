<?php
session_start();
if(!isset($_SESSION['uname'])){
  echo '<script>alert("please do login to access student page");location.href="stulog.php"</script>';
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
    $('#edit').click(function(){
      $('#myModal').modal('show');
    })
  })
</script>
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
              <a class="nav-link" href="addstudent.php">Add student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stulog.php">Student Login
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="forgot.php">Forgot password
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

    <div class="col-md-6">
      <?php
        include('db.php');

       $a=$_SESSION['sid'];
       $q2="select * from student where stid='$a'";
       $re=mysqli_query($con,$q2);
       $row=mysqli_fetch_array($re);

      
      


?>
       <div class="card" style="padding: 30px">
        <h3 class="text-center"> STUDENT DETAIL </h3>
        <br>
        <p> Student Type :  </p>
        <p> Register Number : <?php echo $row['regno'];?></p>
        <p> Name : <?php echo $row['name'];?></p>
        <p> Gender : <?php echo $row['gender'];?></p>
        <p> Age : <?php echo $row['age'];?></p>
        <p> Address : <?php echo $row['address'];?></p>
        <p> Contact : <?php echo $row['contact'];?></p>
        <p> Email : <?php echo $row['email'];?></p>
        <p> Join Date : <?php echo $row['joindate'];?></p>
        <p> Image : <img src="<?php echo $row['path'];?>" class="img-responsive" height="100px" width="100px"></p>
        <p> Qualification :<?php echo $row['qual'];?> </p>
        <p> Password : <?php echo $row['password'];?></p>
        <input type="submit" value="Edit" class="btn btn-primary" id="edit">

</div>  
<br>     
    </div>
    <div class="col-md-6">
  <?php
  include('db.php');
 // `title`, `description`, `edate`, `etime`, `status`, `contact`, `email`
    $q1="select * from event";
    $res=mysqli_query($con,$q1);
    $i=1;
    while($row=mysqli_fetch_array($res)){
      ?>
      <div class="col-md-10">
      <div class="card">

        <h3 class="text-center">Event:<?php echo $i ?></h3>
        <div style="margin-left: 20px">
          <p>Title : <?php echo $row['title']; ?></p>
          <p>Date  : <?php echo $row['edate']; ?></p>
          <p>Time  : <?php echo $row['etime']; ?></p>
          <p>Status : <?php echo $row['status']; ?></p>
          <p>Contact : <?php echo $row['contact']; ?></p>
          <p>Email  : <?php echo $row['email']; ?></p>
        </div>

      </div>
    
    </div>
    <br>
      <?php
      $i++;
    }

?>
</div>
</div>
</div>



     <?php
        include('db.php');

       $a=$_SESSION['sid'];
       $q2="select * from student where stid='$a'";
       $re=mysqli_query($con,$q2);
       $row=mysqli_fetch_array($re);

      
      


?>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                    <h4 class="modal-title text-center">Edit student</h4>

           <form class="form-horizontal" action="editdb.php" method="post" enctype="multipart/form-data">

     <div class="form-group">
      <label class="control-label col-sm-2" for="rno">Studnet Type</label>
      <div class="col-sm-10">          
        <select name="stype" class="form-control">
          <option>select type</option>
          <option>old student</option>
          <option>new student</option>
        </select>
      </div>
    </div>

 <div class="form-group">
      <label class="control-label col-sm-2" for="rno">Register number</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $row['regno'];?>" id="rno" placeholder="Enter register number" name="rno">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Student name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?php echo $row['name'];?>" name="name">
      </div>
    </div>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Gender</label>
      <div class="col-sm-10">       
      <label class="form-control">Male        <input type="radio"   name="gender" value="male">
</label>   
              <label class="form-control">Female                <input type="radio"  name="gender" value="female">
</label>   


      </div>

    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="dob">date of birth</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="dob"  name="desg" value="<?php echo $row['joindate'];?>">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="age" >Age</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $row['age'];?>">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="add">Address</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add" value="<?php echo $row['address'];?>" placeholder="Enter address" name="add">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="cno">Contact no</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="cno" value="<?php echo $row['contact'];?>" placeholder="Enter contactno" name="cno">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="<?php echo $row['email'];?>" placeholder="Enter email" name="email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pass">Password:</label>
      <div class="col-sm-10">          
        <input type="pass" class="form-control" value="<?php echo $row['password'];?>" id="pass" placeholder="Enter password" name="pass">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="doj">Date of joining</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="doj" placeholder="Enter dateof joining" name="doj">
      </div>
    </div>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="qual">Enter designation</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="qual" value="<?php echo $row['qual'];?>" placeholder="Enter designation" name="qual">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </body>

</html>
