<?php

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

$output = 'Connect to databases:)))';
include 'output.html.php';

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

//--------------------- USE SELECT TABLE --------------------------------

try {
  $sql = "SELECT *  FROM joke";
  $result = $pdo->query($sql);
} catch (PDOException $e) {
  $error = 'Error while inserting jokes ' . $e-getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $jokes[] = $row['joketext'];
}

include 'jokes.html.php';
