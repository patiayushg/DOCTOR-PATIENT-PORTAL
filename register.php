<?php			//PATIENT REGISTRATION
$uid=$_POST['uid'];
$name=$_POST['name'];
$add=$_POST['add'];
$cno=$_POST['cn'];
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','ACER','1234','software');
$qu="select * from patient";
$res=mysqli_query($con,$qu);
$num=mysqli_num_rows($res);
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
if($row['emailid']==$eid)
{
?>
<script>
alert("This email has already been registered with us");
</script>
<?php
break;
}
if($row['pid']==$uid)
{
?>
<script>
alert("This userid has already been registered with us enter some different userid");
</script>
<?php
break;
}
}
$q="insert into patient values ('$uid','$name','$add',$cno,'$eid','$pass')";
if(mysqli_query($con,$q))
echo "$name you are registered successfully";
else
echo "sorry you cannot be registered";
mysqli_close($con);
?>