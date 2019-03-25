<?php
include('db.php');
session_start();

$msg=$_POST['msg'];
$from=$_SESSION['sid'];
$to=$_POST['to'];
$doj=$_POST['dob'];
echo $from;
$q1="INSERT INTO `finalalumni`.`message` (`mfrom`, `mto`, `cdate`, `message`) VALUES ( '$from', '$to', '$doj', '$msg')";
if(mysqli_query($con,$q1)){
	echo mysqli_error($con);
	echo '<script>alert("message is sent");location.href="addmessage.php"</script>';
}
else{
	echo mysqli_error($con);
	echo '<script>alert("message not sent");location.href="addmessage.php"</script>';
}


?>