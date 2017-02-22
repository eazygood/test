<?php

   include "inclide.inc";

  back_home();

  $name = "Kim";

  $test_arr = array("ASd", "das", $name, 123);

  $test_arr[] = "Kimmy";

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
  $marks = array("Maksim" => array($prog => 4, $OS => 5, $it => 5),
            "Kim" => array($prog => 5, $OS => 5, $it => 5,),
            "Aleksandr" => array($prog => 5, $OS => 3, $it => 4,));

  $marks_id = array_keys($marks);
  $marks_nr = count($marks);
  for ($i=0; $i < $marks_nr; $i++) {
    echo "<strong>".$marks_id[$i]."</strong><br>";
    foreach ($marks[$marks_id[$i]] as $subject => $mark) {
      echo $subject." : ".$mark."<br>";
    };
  }



?>
