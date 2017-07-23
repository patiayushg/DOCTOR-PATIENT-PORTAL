<html>		<!--Details of donor-->
<head>
<title>Patient's enquiry</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>
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
<caption>Donor Details</caption>
<tr>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Blood Group</th>
<th>Organ</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from patient natural join organ where organ='$_POST[organ]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['blood_group']; ?></td>
<td><?php echo $row['organ']; ?></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>