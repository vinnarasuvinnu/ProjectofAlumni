<?php
session_start();
include('db.php');
$name=$_POST['email'];
$password=$_POST['pwd'];
$q1="select * from student where email='$name' and password='$password'";
$res=mysqli_query($con,$q1);
$row=mysqli_num_rows($res);
echo mysqli_error($con);
if($row==1){
	$row1=mysqli_fetch_array($res);
$_SESSION['uname']=$name;
$_SESSION['sid']=$row1['stid'];
header('Location:stuinfo.php');
}
else{
	echo '<script>alert("your login is unsuccessful");location.href="stulog.php"</script>';

}
?>