<?php
$connect = mysqli_connect("localhost", "ksh", "qwerasdf1", "13FDB") or die("fail");

$id = $_POST['name'];                   //Writer
$title = $_POST['title'];               //Title
$content = $_POST['content'];           //Content
$date = date('Y-m-d H:i:s');            //Date



$query = "INSERT INTO board_info (b, user, a, title, ViewNum, text, te) 
        values(432, '$id', 164, '$title', 121, '$content', 1234)";


$result = mysqli_query($connect, $query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.href = "main_board.php";
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>