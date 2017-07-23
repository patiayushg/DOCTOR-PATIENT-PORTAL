<html>		<!--ADMIN CAN VIEW ALL PATIENTS-->
<head>
<title>Admin's Portal</title>
<link rel="stylesheet" type="text/css" href="admin.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating Doctor's table-->
<style>
</style>
</head>
<body style="background-color: skyblue;">
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Patient-->
<caption>Doctor Details</caption>
<tr>
<th>Patient Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Email-Id</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from patient";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of patients-->
<td><?php echo $row['pid'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['emailid'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>