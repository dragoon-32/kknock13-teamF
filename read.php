<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>

    <style>
        .read_table {
            border: 1px solid #444444;
            margin-top: 30px;
        }

        .read_title {
            height: 45px;
            font-size: 23.5px;
            text-align: center;
            background-color: #3C3C3C;
            color: white;
            width: 1000px;
        }

        .read_id {
            text-align: center;
            background-color: #EEEEEE;
            width: 30px;
            height: 33px;
        }

        .read_id2 {
            background-color: white;
            width: 60px;
            height: 33px;
            padding-left: 10px;
        }

        .read_hit {
            background-color: #EEEEEE;
            width: 30px;
            text-align: center;
            height: 33px;
        }

        .read_hit2 {
            background-color: white;
            width: 60px;
            height: 33px;
            padding-left: 10px;
        }

        .read_content {
            padding: 20px;
            border-top: 1px solid #444444;
            height: 500px;
        }

        .read_btn {
            width: 700px;
            height: 200px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
        }

        .read_btn1 {
            height: 50px;
            width: 100px;
            font-size: 20px;
            text-align: center;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
        }

        .read_comment_input {
            width: 700px;
            height: 500px;
            text-align: center;
            margin: auto;
        }

        .read_text3 {
            font-weight: bold;
            float: left;
            margin-left: 20px;
        }  +

        .read_com_id {
            width: 100px;
        }

        .read_comment {
            width: 500px;
        }
    </style>
</head>

<body>
    <?php
    $connect = mysqli_connect('localhost', 'ksh', 'qwerasdf1', '13FDB');
    $number = $_GET['number'];  // GET 방식 사용
    session_start();
    $query = "select title, text, ViewNum, user from board_info where seq = $number";
    $result = mysqli_query($connect, $query);
    $rows = mysqli_fetch_assoc($result);
    ?>

    <table class="read_table" align=center>
        <tr>
            <td colspan="4" class="read_title"><?php echo $rows['title'] ?></td>
        </tr>
        <tr>
            <td class="read_id">작성자</td>
            <td class="read_id2"><?php echo $rows['user'] ?></td>
            <td class="read_hit">조회수</td>
            <td class="read_hit2"><?php echo $rows['ViewNum'] ?></td>
        </tr>


        <tr>
            <td colspan="4" class="read_content" valign="top">
                <?php echo $rows['text'] ?></td>
        </tr>
    </table>

    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>

    <!-- MODIFY & DELETE 추후 세션처리로 보완 예정 -->
    <div class="read_btn">
        <button class="read_btn1" onclick="location.href='main_board.php'">목록</button>&nbsp;&nbsp;
        <button class="read_btn1" onclick="location.href='modify.php?number=<?= $number ?>'">수정</button>&nbsp;&nbsp;
        <button class="read_btn1" onclick="location.href='delete.php?number=<?= $number ?>'">삭제</button>
        <br><button onclick="location.href='comment_read.php?number=<?php echo $number?>'">댓글</button>
    </div>
</body>

</html>