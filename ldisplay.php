<?php
								session_start();
	$e=$_POST['enrlmnt'];
$con=mysql_connect("localhost","root");
     mysql_select_db("58",$con);
$q="select * from result where enrlmnt_no='$e'";

?>
<html>
<head>
	<title> ldisplay </title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head>
<body>
	<table align=center height=100% width=100%>
	<tr>
		<td class="tw"></td>
		<td>
			<table align=center height=100% width=100%>
			<tr height=20%>
				<td><img src="a.jpg" class="p"></td>
			</tr>
			<tr>
				<td>
					<table align=center height=100% width=100%>
					<tr height=5% bgcolor=skyblue>
						<td width=200  align=center>
							<font color=black><b> UTU </b></font>
						</td>
						<td align=right>
							<a href="llogin.php"><font color=black><b>Logout</b></font></a>
						</td>
					</tr>
					<tr>
						<td colspan=2> &nbsp;
							<table align=center  width=70%>
							<tr height=20%>
								
							</tr>
							</table>
							<table align=center border=1 width=70% height=70%>
							<tr>
								<td colspan=4> Student id: 
			<?php
									echo $e;
								?>  
<br>
								</td>
							</tr>
							<tr>
								<td align=center>
									Code of subject
								</td>
								<td align=center>
									Total marks
								</td>
								<td align=center>
									Obtain
								</td>
								<td align=center>
									Passing mark
								</td>
							</tr>
							<?php
							$r=mysql_query($q);
							while($row=mysql_fetch_array($r))
{
							echo "<tr>
								<td>" .$row['s_code'] ." </td>
								<td align=center> 100 </td>
								<td>".$row['grade']." </td>
								<td align=center> 35 </td>
							</tr>";
}
							?>
							</table>
							<table align=center>
							<tr> 
								<td colspan=4> </td>
							</tr>
							<tr>
								<td colspan=4 align=center> <input type="button" value="Print" name="submit"> 
								</td>
							</tr>
							</table>

						</td>
					</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
		<td class="tw"></td>
	</tr>
	</table>	
</body>
</html>

