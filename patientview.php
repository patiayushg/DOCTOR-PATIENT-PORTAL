<?php
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating tables of appointment details-->
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Patient-->
<caption>Appointment Details</caption>
<tr>
<th>Doctor name</th>
<th>Address</th>
<th>Contact no</th>
<th>Category</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select dname,daddress,dcontact,dcategory,appointment_date,appointment_time from doctor natural join appointment where pid='$_SESSION[pid]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of appointment-->
<td><?php echo $row['dname'];?></td>
<td><?php echo $row['daddress'];?></td>
<td><?php echo $row['dcontact'];?></td>
<td><?php echo $row['dcategory'];?></td>
<td><?php echo $row['appointment_date'];?></td>
<td><?php echo $row['appointment_time'];?></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>