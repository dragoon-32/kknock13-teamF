<?php
$number = $_GET['number'];
?>
<html>
<body>

<form action="delete_act.php" method="post">
    KEY: <input type="text" name="key"><br>
    <input type="hidden" name="num" value=$number>
    <input type="submit">
</form>

</body>
</html>