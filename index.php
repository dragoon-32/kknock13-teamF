<?php
session_start();
if(isset($_SESSION['userid'])) {
    echo "<script>location.replace('main_board.php');</script>";            
}

else {
} 
?>
<body>
    <button onclick="location.href='login.php'">로그인</button><br/>
    <button onclick="location.href='sign_up.php'">회원가입</button>
</body>