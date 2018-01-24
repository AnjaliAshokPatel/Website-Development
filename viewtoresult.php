<?php
	if (isset($_POST['enrlmnt_no']))
	{	
		$Ernum=$_POST['enrlmnt_no'];
		
		$con=mysql_connect("localhost","root");
	

		mysql_select_db("58",$con);
		
		$q="SELECT * FROM sresult WHERE enrlmnt_no='$Ernum' ";
		echo $q;
		$r=mysql_query($q,$con);
		
		session_start();
		
		if(mysql_num_rows($r))
		{
			$_SESSION['student']=$Ernum;
			
			header("location:"."lresult.php");
		}
		
	}
	?>