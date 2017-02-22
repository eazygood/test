<?php

   include "include.inc";

  back_home();

  $name = "Kim";

  $test_arr = array("ASd", "das", $name, 123);

  $test_arr[] = "Kimmy";

  echo "String from Array"." ".implode(":::", $test_arr);

  echo "<br>";


  for ($i = 0; $i < count($test_arr); $i++) {
    echo $test_arr[$i]."<br>";
  }

  foreach ($test_arr as $item) {
    echo $item."<br>";
  }

  var_dump($test_arr);

  // indekseeritud massiiv

  $assic_arr = array("first" => "Maksim", "secod" => "Aleksandr", "third" => "Jevgenij", "fourth" => "Maksim");

  echo $assic_arr["fourth"]."<br>";
  var_dump(array_keys($assic_arr));
  var_dump(array_values($assic_arr));

  foreach ($assic_arr as $item) {
    echo $item."<br>";
  };

  foreach (array_keys($assic_arr) as $item) {
    echo $item."<br>";
  }

  foreach ($assic_arr as $keys => $name) {
    echo $name . " " . $keys . "<br>";
  };

  $prog = "Programming";
  $OS = "Operations System";
  $it = "IT Alused";

   // 2 mõõtme maatriks
  $marks = array(
              "Maksim" =>
                      array(
                          $prog => 4,
                          $OS => 5,
                          $it => 5),
              "Kim" =>
                      array(
                          $prog => 5,
                          $OS => 5,
                          $it => 5,),
              "Aleksandr" =>
                      array(
                          $prog => 5,
                          $OS => 3,
                          $it => 4,)
              );

  $marks_id = array_keys($marks);
  $marks_nr = count($marks);
  for ($i=0; $i < $marks_nr; $i++) {
    echo "<strong>".$marks_id[$i]."</strong><br>";
    foreach ($marks[$marks_id[$i]] as $subject => $mark) {
      echo $subject." : ".$mark."<br>";
    };
  }

  //stringist massiviks
  // kuidas saada stringist koma kätte eraldi, kui tal ühikut ees pole
  $str = "Tere hommikust, täna meil on 6 tundi";
  $rus = "Хеллоу ворлд";

  echo $str.'<br>';
  echo $rus.'<br>';
  print_r(explode(" ",$str));
  echo "<br>";
  print_r(explode(", ",$rus));
  echo "<br>";
  print_r(str_split($str));
  echo "<br>";
  echo "<br>";
  echo "<br>";

  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo "<br>";
  echo $_SERVER['GATEWAY_INTERFACE'];
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['SERVER_SOFTWARE'];
  echo "<br>";
  echo $_SERVER['SERVER_PROTOCOL'];
  echo "<br>";
  echo $_SERVER['REQUEST_METHOD'];
  echo "<br>";
  echo $_SERVER['REQUEST_TIME'];
  echo "<br>";
  echo $_SERVER['QUERY_STRING'];
  echo "<br>";
  echo $_SERVER['HTTP_ACCEPT'];
  echo "<br>";
  echo $_SERVER['HTTP_REFERER'];
  echo "<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_FILENAME'];
  echo "<br>";
  echo $_SERVER['SERVER_PORT'];
  echo "<br>";
  //echo $_SERVER['SCRIPT_URI'];



?>
