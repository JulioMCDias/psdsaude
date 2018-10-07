<?php 
session_start();

	global $pdo;	
	
	try {
		$pdo = new PDO("mysql:dbname=psdsaude;host=localhost;charset=utf8","root", "");
	} catch (PDOException $e) {
		echo "FALHA NA CONEXÃO: ".$e->getMessage();
		exit;
	}
?>