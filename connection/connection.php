<?php

try {
  $host = "localhost";
  $dbname = "todolist";
  $user = "root";
  $password = "";

  $conn = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $password);

  echo "Success with connection in database";
} catch (Exception $e) {
  echo " Erro: " . $e->getMessage();
}
