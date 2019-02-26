<?php
session_start();
include('db.php');
$name=$_POST['mail'];
$password=$_POST['pwd'];

$q1="select * from student where email='$name'";
$res=mysqli_query($con,$q1);
$row=mysqli_num_rows($res);
echo mysqli_error($con);
if($row==1){
	$q2="update student set password='$password' where email='$name'";
	if(mysqli_query($con,$q2)){
			echo '<script>alert("your password is successfully reset");location.href="forgot.php"</script>';


	}
}
else{
	echo '<script>alert("Sorry your email not found");location.href="forgot.php"</script>';

}
?>