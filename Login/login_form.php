<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
            <link rel="stylesheet" type="text/css" media="screen" href="Assets/main.css" />

        </head>
        <body>
		<h1>
			Login_Form
		</h1>


<?php

    include '../@import/db_connection.php';

        if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
            $Connected = $_SESSION['Connected'];
        }
        else {
            $Connected = false;
        }
?>

        <form action="login.php" method="post">
        Adresse E-mail : <input type="text" name="login">
        <br />
        Mot de Passe : <input type="password" name="pwd"><br />
        <input type="submit" value="Connexion">
        </form>
        <form method="get" action="register_form.php">
            <button type="submit">S'enregistrer</button>
        </form>

        </body>
</html>   