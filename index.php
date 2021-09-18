<?php

try {
    $conn = new PDO("mysql:host=185.98.131.109;dbname=remid1641152", 'remid1641152', 'pjsvof51do');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}