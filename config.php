<?php 
     session_start();
            global $pdo;  
            try 
            {
              $pdo = new PDO("mysql:dbname=psdsaude;host=127.0.0.1;charset=utf8","azure", "6#vWHD_$");
              echo "CONEXÃO BEM SUCEDIDA: ".$e->getMessage();
            } catch (PDOException $e) 
            {
              echo "FALHA NA CONEXÃO: ".$e->getMessage();
              exit;
            }
?>