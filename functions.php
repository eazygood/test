<?php


function back_home() {
  echo '<li><a href="asd.php"> Back home</a></li>';
};


function currentTime() {
  date_default_timezone_set("Europe/Tallinn");
  $time = date("H:i:s");
  echo "It is $time <br>";

  if ($time > "16:12") {
    echo "It's time to go home";
  } else {
    echo "You should stay a little bit";
  }
};
?>
