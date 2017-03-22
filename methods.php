<?php


print_r($_POST);
echo '<br>';
print_r($_GET);
echo '<br>';
//print_r($_SERVER);



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title>POST TEST</title>
   <style type="text/css">
     display: block;
     width:100%;
   </style>
 </head>
 <body>
 <!-- GET -->
   <form action="?" method="get">
      <ul>
        <li>
          <label  for="name">Name:</label>
          <input type="text" name="Name" />
        </li>
        <li>
          <input type="submit" value="Press enter" name='asd' />
        </li>
      </ul>
   </form>

<!-- POST -->
   <form action="?" method="post">
      <ul>
        <li>
          <label  for="name">Name:</label>
          <input type="text" name="Name" />
        </li>
        <li>
          <input type="submit" value="Press enter" name='asd' />
        </li>
      </ul>
   </form>


 </body>
 </html>
