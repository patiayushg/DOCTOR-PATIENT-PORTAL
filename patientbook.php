<html>		<!--BOOK APPOINTMENT-->
<head>
<title>Patient's enquiry</title>
<script>
function validate()
{
var x=document.getElementsByName("date");
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0
var yyyy = today.getFullYear();
if(dd<10)
   dd='0'+dd;
if(mm<10)
   mm='0'+mm;
var today = yyyy+'-'+mm+'-'+dd;
if(x[0].value<=today)
{
alert("invalid date you can book appointment from tomorrow");
return(false);
}
else
return(true);
}
</script>
<link rel="stylesheet" type="text/css" href="test.css"/>
</head>
<body>
<div id="div1">
<p>DOCTOR PATIENT<br/><span>PORTAL</span></p>
<img src="health.jpg" alt="Can't find the image"
width=auto height=300px align="right"/>
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
<form action="session_appointment.php" method="post" onsubmit="return validate()">
<table align="center" border=2px cellspacing=0px>
<caption>Book Appointment</caption>
<tr>
<th height=60px width=120px>Category</th>
<td align="center">
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
<th height=60px width=120px>Date</th>
<td width=200px align="center"><input type="date" name="date" required /></td>
</tr>
<tr>
<th height=60px width=120px>Time</th>
<td width=200px align="center">
<select name="time" id="s2" required>
<option value="10:00:00">10:00am</option>
<option value="10:30:00">10:30am</option>
<option value="11:00:00">11:00am</option>
<option value="11:30:00">11:30am</option>
<option value="12:00:00">12:00pm</option>
<option value="12:30:00">12:30pm</option>
<option value="15:00:00">03:00pm</option>
<option value="15:30:00">03:30pm</option>
<option value="16:00:00">04:00pm</option>
<option value="16:30:00">04:30pm</option>
</select>
</td> 
</tr>
<tr>
<td colspan=2 align="center" height=40px width=200px>
<input type="submit" value="SEARCH"/>
</td>
</tr>
</table>
</form>
</body>
</html>