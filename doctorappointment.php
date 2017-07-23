<?php		//DOCTOR CAN VIEW ALL HIS APPOINTMENT
session_start();
?>
<html>
<head>
<title>Doctor Portal</title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
<!--common property on each page-->	
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating Appointment details table-->
<style>
.tab1
{
margin-top:20px;
}
</style>
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Appointment details-->
<caption>Appointment Details</caption>
<tr>
<th>Patient Id</th>
<th>Patient name</th>
<th>Address</th>
<th>Contact no</th>
<th>Email-id</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select patient.pid,name,address,contact,emailid,appointment_date,appointment_time from patient natural join appointment where did='$_SESSION[did]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of appointment-->
<td><?php echo $row['pid'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['emailid'];?></td>
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