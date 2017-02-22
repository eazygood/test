<!DOCTYPE html>
<html>
<body>


<a href="get-pass.php?r=w3resourse.com&s=online-tutorial"><?php echo mb_strtoupper("This is to send data") ?></a>
<?php

echo '<meta charset="UTF-8" >';
include "functions.php";
include 'view.php';
back_home();
//echo ($_POST['name']);
//include ('msg.php')

session_start();
$_SESSION['w3resource']='The largest online tutorial';
echo $_SESSION['w3resource'];



?>
</body>

</html>
