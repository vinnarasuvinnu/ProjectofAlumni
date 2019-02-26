<?php
session_start();
$id=$_SESSION['sid'];
include('db.php');
$stype=$_POST['stype'];
$rno=$_POST['rno'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$add=$_POST['add'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$doj=$_POST['doj'];
$qual=$_POST['qual'];
$pass=$_POST['pass'];


	$filetmp=$_FILES['pimage']['tmp_name'];
	$filename=$_FILES['pimage']['name'];
	$filepath="pictures/".$filename;
	$uploaddir='pictures/';
	$uploadfile=$uploaddir.basename($filename);
	

		$q1="UPDATE `finalalumni`.`student` set `stype`='$stype', `regno`='$rno', `name`='$name', `gender`='$gender', `age`='$age', `address`='$add', `contact`='$cno', `email`='$email', `joindate`='$doj', `qual`='$qual',`password`='$pass' where stid='$id'";
		$res=mysqli_query($con,$q1);
		echo mysqli_error($con);
		if($res){
			echo '<script>alert("student is updated");location.href="stuinfo.php"</script>';
		}
		else{
		echo '<script>alert("student is not updated");location.href="stuinfo.php"</script>';

		}

	


?>