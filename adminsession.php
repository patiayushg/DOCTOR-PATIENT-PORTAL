<?php		//CHECK VALID ADMIN
$aid=$_POST['adminid'];
$apass=$_POST['adminpass'];
if($aid=='root'&&$apass=='root')
header("Location:adminadddoctor.php");
else
?>
<script>
alert("Invalid userid or password");
history.go(-1);
</script>