<html>
<head>
	<title> lhome </title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
	<script language="javascript">
	image=new Array()
	image[0]="1.jpg";
	image[1]="2.jpg";
	image[2]="3.jpg";
	image[3]="4.jpg";
	image[4]="5.jpg";
	setTimeout("alimg()",1000);
x=0;
function alimg()
{
	var img =document.getElementById("imgAlter");
	img.src=image[x];
	if(x < (image.length-1))
	{
	   x++;
	}
	else
	{
	   x=0;
	}
		setTimeout("alimg()",1000);
}
</script>
	
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
							<font color=black> <b>UTU</b> </font>
						</td>
						<td align=right>
							
						</td>
					</tr>
					<tr>
						<td >
						<table align=center>
							<tr>&nbsp;</tr>
							<tr height=15%>
								<td align=center> <a href="llogin.php" ><b> ADMINISTRATOR </b></td>
							</tr>
							<tr height=15%>
								<td align=center> <a href="lview.php"><b> VIEW RESULT </b></td>
							</tr>
							<tr>
								<td> 
								</td>
							</tr>
							
						</table>
						</td>
					
					</tr>
					<tr colspan=2>
					<td> </td>
					<td align=center> 
					<img src="1.jpg" height=235 width=435 id="imgAlter" alt="alttext"> </td>
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

