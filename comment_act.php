<?php
    $conn = mysqli_connect("localhost", "ksh", "qwerasdf1", "13FDB");
    $num = $_GET['idx'];
    $text = $_POST['content']
    $query = "INSERT INTO comment (con_num, text) values($num, '$text')";
	$result = mysqli_query($connect, $query);
    if ($result) {
    ?> <script>
            alert("<?php echo "댓글이 등록되었습니다." ?>");
            location.href = "comment_read.php?number=<?php echo $num; ?>";
        </script>
    <?php
    } else {
        echo "게시글 등록에 실패하였습니다.";
    }
    
    mysqli_close($connect);
?>
