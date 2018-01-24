<html>
<head>
	<title> lstudent </title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head>
<body>
<form method=post action="s.php">
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
							<font color=black><b> UTU</b> </font>
						</td>
						<td align=right>
							<a href="llogin.php"><font color=black><b>Logout</b></font></a>
						</td>
					</tr>
					<tr>
						<td colspan=2> &nbsp;
							<table width=645>
						<tr>
							<td >
								<a href="lfaculty.php"><b>Add Faculty</b></a>&nbsp <br>
								<a href="lstudent.php"><b>Add Student</b></a>&nbsp;&nbsp;<br>
								<a href="lresult.php"><b>Add Result</b></a>&nbsp;&nbsp;
							</td>
							<td> </td>
						</tr>
						<tr></tr>
					<tr>
					<td> </td>
					<td>
					<table align=center>
					<tr>
						<td> Enrollment_no : </td>
						<td> <input type="text" name="enrlmnt"> </td>
					</tr>
					<tr>
						<td> Student_name : </td>
						<td> <input type="text" name="sname"> </td>
					</tr>
					<tr>
						<td>Semester:</td>
						<td> <select name="sem">	
							<option value:="sem">Semester
							<option value:="s1">1
							<option value:="s2">2
							<option value:="s3">3
							<option value:="s4">4
							</select>					
						</td>
					</tr>
					<tr>
						<td> </td>
						<td> <input type="submit" value="Submit"> </td>
					</tr>
					</td>
						<td width=30%> </td>
					</table>
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

