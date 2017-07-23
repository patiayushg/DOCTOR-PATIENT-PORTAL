<html>		<!--DOCTOR CAN ADD PATIENT DESCRIPTION-->
<head>
<title>Doctor Portal</title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
<!--common property on each page-->	
</head>
<body>
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image" align="right"/>
</div>
<div id="div2">
<ul type="none">
<a href="doctordetails.php"><li>My Details</li></a>
<a href="doctorappointment.php"><li>My Appointments</li></a>
<a href="doctorsearch.php"><li>Search Patient</li></a>
<a href="doctornote.php"><li>Add Description</li></a>
<a href="doctorlogin.php"><li>Logout</li></a>
</ul>
</div>
<br/>
<form method="post" action="doctornote(2).php">
<table align="center">
<caption>Search Patient</caption>
<tr>
<th height="30px">Patient id</th>
<td>
<input type="text" name="id" required/>
</td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" value="Search"/></td>
</tr>
</table>
</form>
</body>
</html>