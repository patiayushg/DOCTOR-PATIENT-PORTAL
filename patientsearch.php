<html>
<head>
<title>Patient's enquiry</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
</head>
<body>
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image"
 align="right"/>
</div>
<div id="div2">
<ul type="none">
<a href="patientdetails.php"><li>My Details</li></a>
<a href="patientbook.php"><li>Book Appointment</li></a>
<a href="patientview.php"><li>View Appointment</li></a>
<a href="patientcancel.php"><li>Cancel Appointment</li></a>
<a href="patientsearch.php"><li>Search Doctor</li></a>
<a href="patientdonate.php"><li>Donate Organ</li></a>
<a href="patientsearchdonor.php"><li>Search Donor</li></a>
<a href="patientlogin.php"><li>Logout</li></a>
</ul>
</div>
<br/>
<form method="post" action="patientsearch(2).php">
<table align="center">
<caption>Search Doctor</caption>
<tr>
<th height="30px">Category</th>
<td>
<select name="category" id="s1" required/>
<option value="Bone Specialist">Bone Specialist</option>
<option value="Heart Specialist">Heart Specialist</option>
<option value="Eye/Ear Specialist">Eye/Ear Specialist</option>
<option value="Dentist">Dentist</option>
<option value="Pediatrician">Pediatrician</option>
<option value="Psychiatrist">Psychiatrist</option>
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