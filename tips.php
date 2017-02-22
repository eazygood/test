<?php
include "include.inc";

back_home();

// teeme ise kasutajale salasõna

$pass = crypt("Passw0rd", base64_encode("Passw0rd"));

echo $pass.'<br>';

echo realpath(dirname(__FILE__));

phpinfo();

?>
