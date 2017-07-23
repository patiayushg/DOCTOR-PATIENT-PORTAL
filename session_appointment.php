<?php	//store's appointment info in session's variable
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
<script>
function validate()	//Confirm appointment
{
var x=confirm("Are you sure you want to book appointment");
if(x)
return(true);
else
return(false);
}
</script>
<link rel="stylesheet" type="text/css" href="test.css"/>
<link rel="stylesheet" type="text/css" href="test1.css"/>	<!--decorating Doctor's table-->
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
<?php
$category=$_POST['category'];
$date=$_POST['date'];
$time=$_POST['time'];
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select did,dname,daddress from doctor where dcategory='$_SESSION[category]' and did not in (select did from doctor natural join appointment where dcategory='$_SESSION[category]' and appointment_time='$_SESSION[time]' and appointment_date='$_SESSION[date]')";
$res=mysqli_query($con,$q);
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
?>
<table class="tab1" border=2px cellspacing=0px  align="center" >	<!--Table Of Doctor-->
<caption>Available Doctor Details</caption>
<tr>
<th>Doctor Id</th>
<th>Name</th>
<th>Address</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>
<tr>		<!--printing details of available doctors-->
<td><?php echo $row['did'];?></td>
<td><?php echo $row['dname'];?></td>
<td><?php echo $row['daddress'];?></td>
</tr>
<?php
}
?>
</table>
<?php
$_SESSION['category']=$category;
$_SESSION['date']=$date;
$_SESSION['time']=$time;
?>
<br/>
<hr/>
<form method="post" action="session_appointment(2).php" onsubmit="return validate()">
Fill the doctor id you want to book
<input type="text" name='docid'/> 
<br/>
<input type="submit" value="BOOK"/>
</body>
</html>