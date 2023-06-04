<?php
if (!isset($_SESSION)) { session_start(); }
require_once 'config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
	$pdo = new PDO($dsn, $user, $password);
	return $pdo;
} 
catch (PDOException $e) {
	echo $e->getMessage();
}
?>