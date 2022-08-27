<?php
$conn = mysqli_connect("localhost", "ksh", "qwerasdf1", "13FDB");
$key = $_POST['key'];
$num = $_POST['num'];
$query = "delete from board_info where seq = '$num'";
if($key =='ksh91giro'){
    mysqli_query($conn, $query);
}
else{
    echo "invalid key";
    ?>
    <script>
        location.replace("main_board.php");
    <?php
}
mysqli_close($connect);
?>