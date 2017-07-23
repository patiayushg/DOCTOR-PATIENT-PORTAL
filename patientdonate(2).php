<?php	//store's DONOR info in session's variable
session_start();
?>
<html>
<head>
<title>Patient's enquiry</title>
</head>
<body>
<?php
$flag=1;
$blood=$_POST['blood'];
$organ=$_POST['organ'];
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select * from organ where pid='$_SESSION[pid]'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['blood_group']!=$blood)
{
$flag=0;
?>
<script>
alert("Previously you have entered different blood group");
window.location.href="patientdetails.php";
</script>
<?php
break;
}
if($row['organ']==$organ)
{
$flag=0;
?>
<script>
alert("You have already registered to donate this organ");
window.location.href="patientdetails.php";
</script>
<?php
break;
}
}
if($flag==1)
{
$q="insert into organ values ('$_SESSION[pid]','$blood','$organ')";
mysqli_query($con,$q);
?>
<script>
alert("You are successfully registered");
window.location.href="patientdetails.php";
</script>
<?php
}
?>
</body>
</html>