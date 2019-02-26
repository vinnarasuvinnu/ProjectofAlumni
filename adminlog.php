<?php
session_start();
include('db.php');
$name=$_POST['name'];
$password=$_POST['pwd'];
$q1="select * from admin where name='$name' and password='$password'";
$res=mysqli_query($con,$q1);
$row=mysqli_num_rows($res);
echo mysqli_error($con);
if($row==1){
$_SESSION['aname']=$name;
header('Location:addstaff.php');
}
else{
	echo '<script>alert("your login is unsuccessful");location.href="admin.php"</script>';

}
?>