<?php
require "connection.php";

$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8mb4', $user, $password);
$broj = rand(1,9999);
$sql = 'INSERT INTO test (randomno) VALUES (:randomno)';
$stmt=$db->prepare($sql);
$stmt->execute(array(':randomno'=>$broj));
