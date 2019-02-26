<?php
include('db.php');

$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$cno=$_POST['cno'];
$mail=$_POST['email'];
$add=$_POST['add'];
$doj=$_POST['doj'];
$des=$_POST['designation'];
$q1="INSERT INTO `finalalumni`.`staff` ( `name`, `gender`, `dob`, `age`, `contact`, `email`, `joindate`, `address`,`designation`) VALUES ('$name', '$gender', '$dob', '$age', '$cno', '$mail', '$doj', '$add','$des');";
$res=mysqli_query($con,$q1);
if($res){
	echo '<script>alert("your data is successfully stored");location.href="addstaff.php"</script>';
}
else{
		echo '<script>alert("something went wrong");location.href="dbstaff.php"</script>';

}



?>