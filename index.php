<?php


$url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com'];
$username = $dbparts['x8hl57bywc8di1sm'];
$password = $dbparts['pzr739bpfpiia8eq'];
$database = ltrim($dbparts['jd75vt0lw59dx2u6'], '/');


try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}