<?php
include "include.inc";
$content = file_get_contents("readme.txt");
echo nl2br($content); // automative put <br> in readme.txt

// write into readme
function file_write() {
  $file = fopen('something.txt', 'a') or die("Can't open");
  $text = "Esimene teksti kirjutamise proov\n";
  fwrite($file, $text);
  fclose($file);
}

file_write();
// added new text of something.txt in readme.txt
$content = file_get_contents("something.txt");
echo nl2br($content);

?>
