<html>		<!--ADMIN CAN VIEW ALL DONORS-->
<head>
<title>Admin's Portal</title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
</head>
<body style="background-color: rgb(10,190,255);">
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image"
width=auto height=300px align="right"/>
</div>
<div id="div2">
<ul type="none">
<a href="adminadddoctor.php"><li>Add Doctor</li></a>
<a href="adminviewdoctor.php"><li>View Doctor</li></a>
<a href="adminviewpatient.php"><li>View Patient</li></a>
<a href="adminviewappointment.php"><li>View Appointment</li></a>
<a href="adminviewdonor.php"><li>View Donor</li></a>
<a href="adminlogin.php"><li>Logout</li></a>
</ul>
</div>
<br/>
<form method="post" action="adminviewdonor(2).php">
<table align="center">
<caption>Search Donor</caption>
<tr>
<th height="30px">Enter Organ</th>
<td>
<select name="organ" required/>
<option value="Kidney">Kidney</option>
<option value="Eye">Eye</option>
<option value="Liver">Liver</option>
<option value="Lungs">Lungs</option>
</select>
</td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" value="Search"/></td>
</tr>
</table>
</form>
</body>
</html>