<?php
$conn = mysqli_connect("localhost", "ksh", "qwerasdf1", "13FDB");
$key = $_POST['key'];
$number = $_GET['number'];
$query = "delete from board_info where seq = $number";
if(mysqli_query($conn, $query)){
    ?>
    <script>
    location.replace("main_board.php");
    </script>
    <?php
}
else{
    echo "failed";
}
mysqli_close($connect);
?>
