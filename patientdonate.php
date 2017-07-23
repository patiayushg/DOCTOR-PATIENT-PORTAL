<?php		//FORM TO DONATE ORGAN
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
<script>
function validate()
{
var x= confirm("Are you sure you want to insert information");
if(x)
return(true);
return(false);
}
</script>
<link rel="stylesheet" type="text/css" href="test.css"/>
<!--common property on each patient page-->	
</head>
<body>
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image" align="right"/>
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
<form action="patientdonate(2).php" method="post" onsubmit="return validate()">
<table align="center" border=2px cellspacing=0px>
<caption>REGISTRATION</caption>
<tr>
<th height=60px width=120px>Patient Id</th>
<td align="center">
<input type="text" value="<?php echo $_SESSION['pid']?>" readonly/>
</td>
</tr>
<tr>
<th height=60px width=120px>Name</th>
<td align="center">
<input type="text" value="<?php echo $_SESSION['pname']?>" readonly/>
</td>
</tr>
<tr>
<th height=60px width=120px>Address</th>
<td align="center">
<input type="text" value="<?php echo $_SESSION['paddress']?>" readonly/>
</td>
</tr>
<tr>
<th height=60px width=120px>Contact no</th>
<td><input type="text" value="<?php echo $_SESSION['pcontact']?>" readonly/></td>
<tr>
<th height=60px width=120px>Blood Group</th>
<td>
<select name="blood" id="s1" required/>
<option value="O-">O-</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="A+">A+</option>
<option value="B-">B-</option>
<option value="B+">B+</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>
</select>
</td>
</tr>
<tr>
<th height=60px width=120px>Organ</th>
<td>
<select name="organ" id="s2" required/>
<option value="Kidney">Kidney</option>
<option value="Eye">Eye</option>
<option value="Liver">Liver</option>
<option value="Lungs">Lungs</option>
</select>
</td>
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px>
<input type="submit"/>
</td>
</tr>
</table>
</form>
<?php
?>
</body>
</html>