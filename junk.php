<!DOCTYPE html>
<html>
<body>

<?php
echo '<meta charset="UTF-8" >';
include "functions.php";
include 'view.php';
back_home();
$height=50;
$width =0;
if ($width) {
  echo "The are of the rectangle is ".$height*$width;
} else
{
  echo "The width needs to be a non-zero number<br>";
}
// This is a class of student
class student {
function marks_calculation() {
  echo "Display marks</br>";
}
}
//class has been copied
$student1 = new student;
$student1->marks_calculation();


//Valid constants name
define("COUNTRY_NAME","India");
define("CITYNAME", "New Delphi");

echo COUNTRY_NAME;

?>
</body>

</html>
