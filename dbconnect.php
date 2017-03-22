<?php


if (get_magic_quotes_gpc())
{
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process))
  {
    foreach ($val as $k => $v)
    {
      unset($process[$key][$k]);
      if (is_array($v))
      {
        $process[$key][stripslashes($k)] = $v;
        $process[] = &$process[$key][stripslashes($k)];
      }
      else
      {
        $process[$key][stripslashes($k)] = stripslashes($v);
      }
    }
  }
unset($process);
}
if (isset($_GET['addjoke'])) {
  include 'form.html.php';
  exit();
}
//--------------------- Establishing connection wtih DATABASE---------------
try {
    $pdo = new PDO('mysql:host=localhost; dbname=kta16v', 'kim', 'pass');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

} catch (PDOException $e)
{
    $output = 'Cannot connect to database ' . $e->getMessage();
    include 'output.html.php';
    exit();
}
/*
$output = 'Connect to databases:)))';
include 'output.html.php';
*/

//--------------------- HERE WE CREATE TABLE-----------------------------
/*
try {
  $sql = 'CREATE TABLE joke (
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      joketext TEXT,
      jokedate DATE NOT NULL
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
  $pdo->exec($sql);
} catch (PDOException $e) {
  $output = 'ERROR during creating the table JOKE:  ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output = 'The table JOKE successfully created';
include 'output.html.php';
*/

//---------------------INSERT DATA INTO THE TABLE---------------------------
/*
try {
  $sql = "INSERT INTO joke (joketext, jokedate)
          VALUES  ('Second data AND second joke', DATE '2017-03-20')";
  $pdo->exec($sql);
} catch (PDOException $e) {
  $output = 'Cannot create column ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output =  'Successfully added';
include 'output.html.php';
*/

//--------------------- UPDATE TABLE --------------------------------
/*
try {
  $sql = 'UPDATE joke SET jokedate="2017-03-23"
          WHERE joketext LIKE "%First%"';
  $affectedRows = $pdo->exec($sql);
} catch (PDOException $e) {
    $output = 'Error while updating the table: ' . $e->getMessage();
    include 'output.html.php';
    exit();
}

$output = 'Successfully updated ' . $affectedRows ;
include 'output.html.php';
*/

//--------------------- POST joketext $_POST --------------------------------

if (isset($_POST['joketext']))
{
  try {
      $sql = "INSERT INTO joke SET
          joketext = :joketext,
          jokedate = CURDATE()";
  $s = $pdo->prepare($sql);
  $s->bindValue(':joketext', $_POST['joketext']);
  $s->execute();

} catch (PDOException $e)
{
  $error = 'Error while adding jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}
  header('Location: .');
  exit();
}

//--------------------------- DELETE joketext -----------------------------

if (isset($_GET['deletejoke']))
{
  try {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  } catch (PDOException $e) {
    $error = 'Error while deleting jokes: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }
  header('Location: .');
  exit();
}




//--------------------- USE SELECT TABLE --------------------------------
/*
try {
  $sql = "SELECT joketext FROM joke";
  $result = $pdo->query($sql);
} catch (PDOException $e) {
  $error = 'Error while inserting jokes ' . $e->getMessage();
  include 'error.html.php';
  exit();
}
*/

try {
  $sql = "SELECT id, joketext FROM joke";
  $result = $pdo->query($sql);
} catch (PDOException $e)
{
  $error = 'Error while adding jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

//*********** Using while for working with database

/*
while ($row = $result->fetch())
{
  $jokes[] = $row['joketext'];
}

include 'jokes.html.php';
*/


//*********** Using foreach for working with database


$jokes = array();
foreach ($result as $row) {
  $jokes[] = array(
    'id' => $row['id'],
    'text' => $row['joketext']
    //'date' => $row['jokedate']
  );
}
include 'jokes.html.php';
