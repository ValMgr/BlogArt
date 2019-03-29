<?php

	    // Messages of errors = On
	    ini_set('display_errors','on');
	    ini_set('display_startup_errors','on');
	    error_reporting(E_ALL);

	    ////////////////////////////////////////////////////////
		// Connexion et choix de la base de données
		$server = 'mysql:dbname=blogart;host=localhost';
		$user = 'root';
        $password = '';
        
        
        try{
            $dbPdo = new PDO($server, $user, $password);
            //echo "<h3 style=\"color:green;\">Acces Granted</h3>";
        }
        catch (PDOException $e) {
            echo "<h3 style=\"color:red;\">Acces denied to db</h3>";    
            die();
        }
        $dbPdo->query('SET NAMES UTF8');

        session_start();

?>