<?php
	$e=$_POST['enrlmnt_no'];
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	$g1=$_POST['g1'];
	$g2=$_POST['g2'];
	$g3=$_POST['g3'];
	$g4=$_POST['g4'];
	$g5=$_POST['g5'];
	
$con=mysql_connect("localhost","root");
     mysql_select_db("58",$con);

$q1="INSERT INTO result (enrlmnt_no,s_code,grade)
    VALUES ('$e','$s1','$g1')";

$q2="INSERT INTO result (enrlmnt_no,s_code,grade)
    VALUES ('$e','$s2','$g2')";

$q3="INSERT INTO result (enrlmnt_no,s_code,grade)
    VALUES ('$e','$s3','$g3')";

$q4="INSERT INTO result (enrlmnt_no,s_code,grade)
    VALUES ('$e','$s4','$g4')";

$q5="INSERT INTO result (enrlmnt_no,s_code,grade)
    VALUES ('$e','$s5','$g5')";


mysql_query($q1,$con) or die("asd");
mysql_query($q2,$con) or die("asd");
mysql_query($q3,$con) or die("asd");
mysql_query($q4,$con) or die("asd");
mysql_query($q5,$con) or die("asd");

mysql_close($con);


	header("location:"."ladmin.php");

?>