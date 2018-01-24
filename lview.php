<html>
<head>
	<title> lview </title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head>
<body> 
<form method=post action="ldisplay.php"> 
	<table align=center height=100% width=100%>
	<tr>
		<td class="tw"></td>
		<td>
			<table align=center height=100% width=100%>
			<tr height=20%>
				<td><img src="a.jpg" class="p" height=100% width=100%></td>
			</tr>
			<tr>
				<td>
					<table align=center height=100% width=100%>
					<tr height=5% bgcolor=skyblue>
						<td width=200  align=center>
							<font color=black> <b>UTU </b></font>
						</td>
						<td >
							<marquee hspace=1% vpace=1% direction=left><font color=black>Enter your number to view your result</font> </marquee>
							
						</td>
						<td align=right>
							<a href="lhome.php"><font color=black><b>Home</b></font></a>
						</td>
					</tr>
					<tr>
						<td colspan=2> &nbsp;
							<table align=center>
							<tr>
								<td> Enrollment_no.: </td>	
								<td> <input type=text name="enrlmnt"> </td>
								<td> </td>
								<td> 
									<input type=submit name="submit" value="View">
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
</form>
</body>
</html>

