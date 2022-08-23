<?php 
session_start(); 
?>
<body>
    <?php
    if(isset($_SESSION['userid'])){
    ?>
    <script>
        location.href = "main_board.php";
    </script>
    <?php
    } else {
        ?>
        <button onclick="location.href='login.php'">로그인</button><br/>
        <button onclick="location.href='sign_up.php'">회원가입</button>
    <?php
    }
    ?>
</body>