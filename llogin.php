<html>
<head>
	<title> llogin </title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
	<script type="text/javascript">
		function chkuid(fld)
		{
			var a=fld.value;
			if(a!="admin123")
			{
				alert("Incorrect userid");
				fld.value="";
				fld.focus();
			}
			else if(a=="")
			{
				alert("Userid should not be null");
				fld.value="";
				fld.focus();
			}
		}
		function chkpwd(fld)
		{
			var a=fld.value;
			if(a!="admin123")
			{
				alert("Incorrect password");
				fld.value="";
				fld.focus();
			}
			else if(a=="")
			{
				alert("password should not be null");
				fld.value="";
				fld.focus();
			}
		}
</script>
</head>
<body>
<form> 
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
							<a href="lhome.php"><font color=black><b>Home</b></font></a>
						</td>
					</tr>
					<tr>
						<td colspan=2> &nbsp;
							<table align=center >
					<tr>
						<td> User_Id: </td>
						<td> <input type=text name="uid" onblur="chkuid(this)"> </td>
					</tr>
					<tr>
						<td> Password: </td>
						<td> <input type=password name="pwd" onblur="chkpwd(this)" > </td>
					</tr>
					<tr>
						<td></td>
						<td><a href="ladmin.php"><input type=button name="login" value="Login"></a>
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
</body>
</html>

