<?php
session_start();
if(isset($_SESSION['userid'])) {
    ?>
    <meta http-equiv="refresh" content="1;URL='main_board.php'">   
    <?php        
}

else {
} 
?>
<body>
    <button onclick="location.href='login.php'">로그인</button><br/>
    <button onclick="location.href='sign_up.php'">회원가입</button>
</body>