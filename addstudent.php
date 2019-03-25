
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
#c1{
  margin-bottom: 100px;
}
 a {
  color: black;
}
</style>
<script type="text/javascript">
function calculateAge(birthMonth, birthDay, birthYear) {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth();
    var currentDay = currentDate.getDate(); 
    var calculatedAge = currentYear - birthYear;

    if (currentMonth < birthMonth - 1) {
        calculatedAge--;
    }
    if (birthMonth - 1 == currentMonth && currentDay < birthDay) {
        calculatedAge--;
    }
    return calculatedAge;
}


  
  $(document).ready(function(){
    var d = new Date();
    var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
    $('#dob').change(function(){
      var date=$('#dob').val();
      dateval=new Date( date.replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3") );
      var age = calculateAge(dateval.getMonth()+1, dateval.getDate(), dateval.getFullYear());
      $('#age').val(age);
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
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>


<div class="container" id="c1" style="margin-top: 200px;">
  <div class="card">
  <h2 class="text-center">Add student</h2>

  <form class="form-horizontal" action="dbstudent.php" method="post" enctype="multipart/form-data">

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
        <input type="text" class="form-control" id="rno" placeholder="Enter register number" name="rno">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Student name</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Gender</label>
      <div class="col-sm-10">       
      <label class="form-control">Male        <input type="radio" class="form-control"  name="gender" value="male">
</label>   
              <label class="form-control">Female                <input type="radio" class="form-control"  name="gender" value="female">
</label>   


      </div>

    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="dob">date of birth</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="dob"  name="desg">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" disabled>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="add">Address</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add" placeholder="Enter address" name="add">
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
      <label class="control-label col-sm-2" for="pass">Password:</label>
      <div class="col-sm-10">          
        <input type="pass" class="form-control" id="pass" placeholder="Enter password" name="pass">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="doj">Date of joining</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="doj" placeholder="Enter dateof joining" name="doj">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="qual">Input image</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="pimage" placeholder="Input image" name="pimage">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="qual">Enter designation</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="qual" placeholder="Enter designation" name="qual">
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
