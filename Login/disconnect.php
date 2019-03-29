<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			Disconnection
		</h1>


<?php

    include '../@import/db_connection.php';


        unset($_SESSION['Connected']);
        unset($_SESSION['login']);
        unset($_SESSION['pwd']);

        header ('location: ../index.php');


    
?>

</body>
</html>
    




