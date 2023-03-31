<?php
  // wrap code above to function 'connect' with try and catch, and return connected database and insert to variable $conn
  function connect() {
    try {
      $conn = mysqli_connect('0.0.0.0', 'root', 'adam1703', 'tugas_web_1', 13306);
      return $conn;
    } catch (Exception $e) {
      echo 'Database Error';
      exit;
    }
  }

  $conn = connect();

?>
