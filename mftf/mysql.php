<?php

while (true) {
  try {
    $conn = new PDO('mysql:host=db;dbname=magento', 'root', 'magento');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    exit();
  } catch (Exception $e) {
  }
  echo 'Database is unavailable - sleeping';
  sleep(1);
}
