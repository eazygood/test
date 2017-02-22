<!DOCTYPE html>
<html>
<body>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>

<?php
  if ($_FILES["files"] > 0) {
    echo "You have selected a file to upload";
  }
 ?>

</body>
</html>
