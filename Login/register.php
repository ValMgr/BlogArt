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
    </body>
</html>

<?php

    include '../@import/db_connection.php';




        if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['valid-password'])) {

            if ($_POST['password'] == $_POST['valid-password']) {

                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                 $requete = "INSERT INTO USER (Login, Pass, EMail) VALUES (?,?,?)";
                 $query = $dbPdo->prepare($requete);
         
                 $query->bindValue(1, $username, PDO::PARAM_STR);
                 $query->bindValue(2, $password, PDO::PARAM_STR);
                 $query->bindValue(3, $email, PDO::PARAM_STR);
               
                 $query->execute();

                header ('location: login_form.php');
            }
            else {
                $_SESSION['Connected'] = false;
                echo '<body onLoad="alert(\'Les mots de passe ne correspondent pas.\')">';
                echo '<meta http-equiv="refresh" content="0;URL=register_form.php">';
            }
        }
        else {
            echo 'Les variables du formulaire ne sont pas déclarées.';
        }

?>

