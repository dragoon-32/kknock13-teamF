<?php
$conn = mysqli_connect("localhost", "ksh", "qwerasdf1", "13FDB");
$key = $_POST['key'];
$num = $_POST['num'];
$query = "delete from board_info where seq = $num";
if($key =='ksh91giro'){
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
}
else{
    echo "invalid key";
    ?>
    <script>
        location.replace("main_board.php");
    </script>
    <?php
}
mysqli_close($connect);
?>