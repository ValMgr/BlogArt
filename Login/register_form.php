<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			Register
		</h1>


<?php

    include '../@import/db_connection.php';



?>

    <form action="register.php" method="post">
            Adresse E-mail: <input type="text" name="email">
            <br />
            Username: <input type="text" name="username">
            <br />
            Password: <input type="password" name="password">
            <br />
            ConfirmPassword: <input type="password" name="valid-password">
            <br />
            
            <input type="submit" value="Connexion">
    </form>

    </body>
</html>
