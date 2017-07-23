<?php	//store's appointment info in database
session_start();
?>
<?php
$docid=$_POST['docid'];
$flag=0;
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select did from doctor where dcategory='$_SESSION[category]' and did not in (select did from doctor natural join appointment where dcategory='$_SESSION[category]' and appointment_time!='$_SESSION[time]' and appointment_date!='$_SESSION[date]')";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['did']=="$docid")
{
$flag=1;
break;
}
}
if($flag==0)
{
?>
<script>
alert("You entered wrong doctor id");
window.location.href="patientdetails.php";
</script>
<?php
}
else
{
$q="insert into appointment (pid,did,appointment_date,appointment_time) values ('$_SESSION[pid]','$docid','$_SESSION[date]','$_SESSION[time]')";
mysqli_query($con,$q);
$q1="select aid from appointment where pid='$_SESSION[pid]' and did='$docid' and appointment_date='$_SESSION[date]' and appointment_time='$_SESSION[time]'";
$res=mysqli_query($con,$q1);
$num=mysqli_num_rows($res);
$row=mysqli_fetch_array($res);
echo "Your appointment id is $row[aid].You must show it at the time of reporting.";
}
mysqli_close($con);
?>
