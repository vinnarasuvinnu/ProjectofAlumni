
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
  footer
{
position: relative;
margin-top: -150px; /* negative value of footer height */
height: 150px;
clear:both;
padding-top:20px;
color:#fff;
}
.text-center{
  background-color: white;
}
.dataTables_wrapper .ui-toolbar,table.dataTable thead th.ui-state-default, table.dataTable tfoot th.ui-state-default{
  background-color: white;
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
        var table=$('#example').DataTable();
        $('#example2').DataTable();

 


             $('#down1').click(function(){

 $("#example2").tableToCSV({
                filename: 'report of staff'
            });
    });
  

         /*$.ajax({
        url:"alltoo.php",
        method:"post",
        data:{},
        success:function(data){
            console.log(data);

            var data=JSON.parse(data);
            data=data.result;
            console.log(data);
                $.each(data, function(key,value) {



            table.row.add($(
    '<tr>' +
    '<td>'+value.fname+'</td>' +
        '<td>'+value.lname+'</td>' +
    '<td>'+value.dob+'</td>' +
    '<td>'+value.gender+'</td>' +
    '<td>'+value.contact+'</td>' +
    '<td>'+value.email+'</td>' +
  



  

        '<td>'+value.ten+'</td>' +
        '<td>'+value.twel+'</td>' +
    '<td>'+value.sem1+'</td>' +
    '<td>'+value.sem2+'</td>' +
    '<td>'+value.sem3+'</td>' +
    '<td>'+value.sem4+'</td>' +
      '<td>'+value.sem5+'</td>' +
    '<td>'+value.sem6+'</td>' +

   


     

 



    '</tr>'
)).draw(false);
        

    });


        }
    })*/

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
           
           
          </ul>
        </div>
      </div>
    </nav>



   
<div class="container" style="margin-top: 200px">
<div class="row">

<div class="col-lg-12">
  <div class="text-center" style="margin-bottom: 20px;">
    <input type="button" id="down1" class="btn btn-primary" value="Download">
  </div>
  <div class="text-center">
    <h3>Staff information</h3>
  </div>

     <table id="example2" class="display table-responsive" style="width:100%;color: green;border: 1px solid green;background-color: white">
        <thead>
            <tr>
                <th>Staff name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact</th>

               

                  <th>Email</th>
                <th>Date of joining</th>
                                <th>Designation</th>

              
               
                  
            </tr>
        </thead>
        <tbody>
          <?php
          include('db.php');
          $val="new student";
          $q1="select * from staff";
          $res=mysqli_query($con,$q1);
          while($row=mysqli_fetch_array($res)){


            ?>
            <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['joindate']; ?></td>
                        <td><?php echo $row['designation']; ?></td>

          </tr>
            <?php
          }

          ?>
        </tbody>


    </table>
  </div>
</div>
</div>



    <!-- Bootstrap core JavaScript -->
    

  </body>

</html>
