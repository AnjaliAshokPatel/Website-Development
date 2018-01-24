<?php
	$sname=$_POST['sname'];
	$sid=$_POST['enrlmnt'];
	$s=$_POST['sem'];
	
$con=mysql_connect("localhost","root");
     mysql_select_db("58",$con);

$q="INSERT INTO student(s_name,enrlmnt_no,sem)
    VALUES('$sname','$sid','$s')";

mysql_query($q,$con);

mysql_close($con);

	header("location:"."ladmin.php");

?>