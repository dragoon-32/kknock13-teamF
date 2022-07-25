<?php $name=$_POST['NAME'];
$PW=$_POST['PASSWORD'];
$id=$_POST['ID'];
$con = mysqli_connect("localhost","ksh","qwerasdf1", "13FDB") or die ("Can't access DB");
$query = "INSERT INTO user_info (id,pw,name) values('".$id."','".$PW."','".$name."')";
$result=mysqli_query($con,$query);
if(!$result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href=".."; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href=".."; </script>
<?php } ?>

