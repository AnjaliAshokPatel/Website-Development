<?php
	$fname=$_POST['fname'];
	$fid=$_POST['fid'];
	
	
$con=mysql_connect("localhost","root");
     mysql_select_db("58",$con);

$q="INSERT INTO faculty (f_name,f_id)
    VALUES ('$fname','$fid')" ;

mysql_query($q,$con) or die("asd");

mysql_close($con);

	header("location:"."ladmin.php");

?>