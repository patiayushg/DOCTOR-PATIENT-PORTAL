<?php
session_start();
?>
<?php
$flag=0;
$con=mysqli_connect('localhost','ACER','1234','software');
$q="select pid from patient";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($_SESSION['dpid']==$row['pid'])
{
$flag=1;
break;
}
}
if($flag==0)
{
?>
<script>
alert("Invalid Patient Id");
window.location.href="doctordetails.php";
</script>
<?php
}
else
{
$q="insert into treatment values ('$_SESSION[dpid]','$_POST[treat]','$_POST[text]')";
mysqli_query($con,$q);
mysqli_close($con);
?>
<script>
alert("Informtion inserted successfully");
window.location.href="doctordetails.php";
</script>
<?php
}
?>