<?php
	$e=$_SESSION['user'];
							
	$con=mysql_connect("localhost","root");
											
	mysql_select_db("58",$con);
											
	$q="SELECT DISTINCT itemname FROM item WHERE enrlmnt_no='$e' ORDER BY itemname";
	$r=mysql_query($q,$con);
											
	while($newr=mysql_fetch_array($r))
	{
		$i=$newr['itemname'];
		echo "<option value='".$i."'>".$i;
	}
?>