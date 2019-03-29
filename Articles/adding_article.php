<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			AddingArticle
		</h1>


<?php

    include '../@import/db_connection.php';


    $NumArt = "93IZER";
    $title = $_POST['title'];
    $chapo = $_POST['chapo'];
    $parag1 = $_POST['parag1'];
    $subtitle1 = $_POST['subtitle1'];
    $parag2 = $_POST['parag2'];
    $subtitle2 = $_POST['subtitle2'];
    $parag3 = $_POST['parag3'];
    $conclu = $_POST['conclu'];
    $url_pic = $_POST['url_pic'];
    $them = $_POST['Them'];
    $Angle = $_POST['Angle'];
    $date = date("Y-m-d");
    $Lang = $_SESSION['LangNum'];



    $requete_add = "INSERT INTO ARTICLE (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $query = $dbPdo->prepare($requete_add);
    
    $query->bindValue(1, $NumArt, PDO::PARAM_STR);
    $query->bindValue(2, $date, PDO::PARAM_STR);
    $query->bindValue(3, $title, PDO::PARAM_STR);
    $query->bindValue(4, $chapo, PDO::PARAM_STR);
    $query->bindValue(5, $parag1, PDO::PARAM_STR);
    $query->bindValue(6, $subtitle1, PDO::PARAM_STR);
    $query->bindValue(7, $parag2, PDO::PARAM_STR);
    $query->bindValue(8, $subtitle2, PDO::PARAM_STR);
    $query->bindValue(9, $parag3, PDO::PARAM_STR);
    $query->bindValue(10, $conclu, PDO::PARAM_STR);
    $query->bindValue(11, $url_pic, PDO::PARAM_STR);
    $query->bindValue(12, $Angle, PDO::PARAM_STR);
    $query->bindValue(13, $them, PDO::PARAM_STR);
    $query->bindValue(14, $Lang, PDO::PARAM_STR);


    $query->execute();

    
    print_r($query);
    

    header ('location: show_article.php');


?>

</body>
</html>