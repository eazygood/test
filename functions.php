<?php


function back_home() {
  echo '<li><a href="asd.php"> Back home</a></li>';
}


function currentTime() {
  date_default_timezone_set("Europe/Tallinn");
  $time = date("H:i:s");
  echo "It is $time <br>";

  if ($time > "16:12") {
    echo "It's time to go home";
  } else {
    echo "You should stay a little bit";
  }
}

// külastajate loendus

function counter(){
  $file_name = "count.txt";
  if (!file_exists($file_name)) {
    $file = fopen($file_name, 'w') or die("Can't open");
    $count = 1;
    fwrite($file, $count);
    $count = file_get_contents($file_name);
    echo "Te olete külastaja nr:".$count;
    fclose($file);
  } else {
    $file = fopen($file_name, 'r+') or die("Can't open");
    $count = file_get_contents($file_name)+1;
    fwrite($file, $count);
    echo "Te olete külastaja nr:".$count;
    fclose($file);
  }
}

function GetUserIP() {
  $ip = $_SERVER['REMOTE_ADDR'];
  $server_name = $_SERVER['SERVER_NAME'];
  $time = date("H:i:s");
  $file_name = "visitors.txt";
  $visitor = $ip." ".$server_name." ".$time."\n";+
  $file = fopen($file_name, 'w') or die("Can't open");
  fwrite($file, $visitor);
  fclose($file);
  echo "Teie aadress on: ".$ip;


}

?>
