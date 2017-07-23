<html>		<!--ADMIN CAN VIEW ALL DOCTORS-->
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Doctor-->
<caption>Doctor Details</caption>
<tr>
<th>Doctor Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Category</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from doctor";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of doctor-->
<td><?php echo $row['did'];?></td>
<td><?php echo $row['dname'];?></td>
<td><?php echo $row['daddress'];?></td>
<td><?php echo $row['dcontact'];?></td>
<td><?php echo $row['dcategory'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>