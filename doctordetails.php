<?php		//DOCTOR'S INFO
session_start();
?>
<html>
<head>
<title>Doctor Portal</title>
<link rel="stylesheet" type="text/css" href="doctor.css"/>
<!--common property on each page-->	
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating Doctor's table-->
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Doctor-->
<caption>Doctor Details</caption>
<tr>
<th>Doctor Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Category</th>
</tr>
<tr>			<!--printing details of doctor-->
<td><?php echo $_SESSION['did'];?></td>
<td><?php echo $_SESSION['dname'];?></td>
<td><?php echo $_SESSION['daddress'];?></td>
<td><?php echo $_SESSION['dcontact'];?></td>
<td><?php echo $_SESSION['dcategory'];?></td>
</tr>
</table>
</body>
</html>