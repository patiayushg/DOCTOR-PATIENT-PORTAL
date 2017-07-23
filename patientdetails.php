<?php		//PATIENT'S INFO
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
<!--common property on each patient page-->	
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating tables of patient and his history-->
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Patient-->
<caption>Patient Details</caption>
<tr>
<th>Patient Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Email-Id</th>
</tr>
<tr>			<!--printing details of patient-->
<td><?php echo $_SESSION["pid"];?></td>
<td><?php echo $_SESSION['pname'];?></td>
<td><?php echo $_SESSION['paddress'];?></td>
<td><?php echo $_SESSION['pcontact'];?></td>
<td><?php echo $_SESSION['peid'];?></td>
</tr>
</table>
<table class="tab2" border=2px cellspacing=0px align="center">		<!--Table Of Patient's History-->
<caption>Treatment History</caption>
<tr>
<th>Treatment for</th>
<th>Note</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from treatment where pid='$_SESSION[pid]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>
<td><?php echo $row['disease']; ?></td>
<td><?php echo $row['note']; ?></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>