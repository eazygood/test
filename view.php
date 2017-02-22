<?php



$filter_arr = array("functions", "array", "view", "files");

function menu($array) {

  for ($i=0; $i < count($array); $i++) {
    echo '<li><a href="'.$array[$i].'.php">'.$array[$i].'</a></li>';
  };

}

 ?>
