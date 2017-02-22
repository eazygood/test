
<!DOCTYPE html>
<html>
<title>Home</title>
<script type="text/javascript">
    window.onload = function() {
      (function (){
        var date = new Date();
        var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        document.getElementsByTagName('div')[0].innerHTML = "js time: " + time;
        window.setTimeout(arguments.callee, 1000);
      })();
    };
</script>
<body>

<?php

include "include.inc";

  back_home();
  menu($filter_arr);

  echo "<strong>Hello </strong> worldik<br>";
  back_home();
  echo "<div></div>";

  currentTime();
?>

</body>
</html>
