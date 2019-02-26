<?php
include('db.php');
$tit=$_POST['etitle'];
$edate=$_POST['edate'];
$des=$_POST['desc'];
$time=$_POST['time'];
$status=$_POST['stat'];
$cno=$_POST['cno'];
$mail=$_POST['email'];
$q1="INSERT INTO `finalalumni`.`event` (`title`, `description`, `edate`, `etime`, `status`, `contact`, `email`) VALUES ('$tit', '$des', '$edate', '$time', '$status', '$cno', '$mail')";
$res=mysqli_query($con,$q1);
if($res){
	echo '<script>alert("event added");location.href="addevent.php"</script>';
}
else{
		echo '<script>alert("event is not added");location.href="addevent.php"</script>';

}



?>