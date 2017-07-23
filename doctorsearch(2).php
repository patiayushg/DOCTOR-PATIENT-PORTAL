<html>	<!--Display's patient info to doctor-->
<head>
<title>Doctor's Portal</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating tables of Patient details-->
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
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Patient-->
<caption>Patient Details</caption>
<tr>
<th>Patient-Id</th>
<th>Name</th>
<th>Address</th>
<th>Contact no</th>
<th>Email-Id</th>
</tr>
<?php
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select pid,name,address,contact,emailid from patient where pid='$_POST[id]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>			<!--printing details of patient-->
<td><?php echo $row['pid'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['emailid'];?></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
<table class="tab2" border=2px cellspacing=0px align="center">		<!--Table Of Patient's History-->
<caption>Patient's History</caption>
<tr>
<th>Treatment for</th>
<th>Note</th>
</tr>
<?php
$con=mysqli_connect('localhost','prakher','1234','software');
$q="select * from treatment where pid='$_POST[id]'";
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