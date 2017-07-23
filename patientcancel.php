<html>
<head>
<title>Patient's enquiry</title>
<script>
function validate()
{
var x=confirm("Do you want to cancel your appointment");
if(x)
return(true);
else
return(false);
}
</script>
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
<form method="post" action="patientcancel(2).php" onsubmit="return validate()">
<table align="center">
<caption>Cancel Appointment</caption>
<tr>
<th>Appointment Id</th>
<td><input type="text" name="app"/></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" value="Cancel"/></td>
</tr>
</table>
</form>
</body>
</html>