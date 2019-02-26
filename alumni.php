
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
                <script src="jquery.tabletoCSV.js" type="text/javascript"></script>
<style type="text/css">
  h3{
    color:black;
  }
  li{
    margin-right: 100px;
  }
  body{
  background-image: url(s.jpg);
}
.dataTables_wrapper .ui-toolbar,table.dataTable thead th.ui-state-default, table.dataTable tfoot th.ui-state-default{
  background-color: white;
}
 a {
  color: black;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
            var table=$('#example').DataTable();

  })
</script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
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
                     

          </ul>
        </div>
      </div>
    </nav>
<div class="container" id="c1" style="margin-top: 200px;">
  <div class="card">
    <h3 class="text-center">Search alumni</h3>
    <table id="example" class="display table-responsive" style="width:100%;color: green;border: 1px solid green;background-color: white">
        <thead>
            <tr>
                <th>Register no</th>
                <th>Alumni name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact</th>

               

                  <th>Email</th>
                <th>Date of joining</th>
                <th>Image</th>
                <th>Designation</th>
               
                  
            </tr>
        </thead>
        <tbody>
          <?php
          include('db.php');
          $val="new student";
          $q1="select * from student where stype='$val'";
          $res=mysqli_query($con,$q1);
          while($row=mysqli_fetch_array($res)){


            ?><tr>
            <td><?php echo $row['regno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['joindate']; ?></td>
            <td><img src="<?php echo $row['path']; ?>" width="50" height="50"></td>
            <td><?php echo $row['qual']; ?></td></tr>
            <?php
          }

          ?>
        </tbody>


    </table></div></div>


    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->


  </body>

</html>
