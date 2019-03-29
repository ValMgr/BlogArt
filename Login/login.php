<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			Login
		</h1>


<?php

    include '../@import/db_connection.php';

        

    if (isset($_POST['login']) && isset($_POST['pwd'])) {

        $requete = "SELECT * FROM USER WHERE 1";
        $query = $dbPdo->prepare($requete);
        $obj = $dbPdo->query ($requete);

        foreach ($obj as $key => $array) {
                $valid_email = $array[4];
                $valid_password = $array[1];

            if ($valid_email == $_POST['login'] && $valid_password == $_POST['pwd']) {


                $_SESSION['Connected'] = true;
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['pwd'] = $_POST['pwd'];

                header ('location: ../index.php');
                //header ('location: login_form.php');
                die;
                
            }
            
            
        }


    /*else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }*/

            $_SESSION['Connected'] = false;
            $_SESSION['login'] = null;
            $_SESSION['pwd'] = null;
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
    }
?>
    
    </body>
</html>




