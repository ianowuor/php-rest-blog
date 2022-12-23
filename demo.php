<?php

$conn = mysqli_connect('localhost', 'owuorian', 'Valmamucera95');

if (!$conn) {
    die('Connection failed' . mysqli_connect_error());
}

echo 'Connected successfully';

try {
    $connn = new PDO("mysql:host=localhost;dbname=myblog", 'owuorian', 'Valmamucera95');
    // set the PDO error mode to exception
    $connn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }



?>