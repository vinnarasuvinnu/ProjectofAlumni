<?php
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
	if(move_uploaded_file($filetmp, $uploadfile)){

		$q1="INSERT INTO `finalalumni`.`student` (`stype`, `regno`, `name`, `gender`, `age`, `address`, `contact`, `email`, `joindate`, `path`, `qual`,`password`) VALUES ('$stype', '$rno', '$name', '$gender', '$age', '$add', '$cno', '$email', '$doj', '$uploadfile', '$qual','$pass')";
		$res=mysqli_query($con,$q1);
		if($res){
			echo '<script>alert("student is added");location.href="addstudent.php"</script>';
		}
		else{
						echo '<script>alert("student is not added");location.href="addstudent.php"</script>';

		}

	}
	else{
		echo '<script>alert("sorry something went wrong");location.href="addstudent.php</script>';
	}


?>