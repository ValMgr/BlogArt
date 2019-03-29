<?php   include '@import/db_connection.php';
    include '@import/connection_check.php'; ?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
            <link rel="stylesheet" type="text/css" media="screen" href="Assets/main.css" />

        </head>
        <body>


        <?php include '@import/header.php'; ?>

        <div class="content">

<?php

  


    $requete = "SELECT * FROM ARTICLE";
    $stmt = $dbPdo->prepare($requete);
    $stmt->execute();


    /* obj[?]   0 = NumArt / 1 = Date / 2 = Titre / 3 = Chapo / 4 = Paragraphe1 / 5 = Subtitle1 / 6 = Paragraphe2
                7 = Subtitle2 / 8 = Paragraphe3 / 9 = Conclusion / 10 = Url / 11 = NumAngl / 12 = NumThem / 13= NumLang */

                //Ne me remercier pas si vous récuperer le code, c'est de bon coeur... cheh

    while($obj = $stmt->fetch()) {
        ?> <h3 class="article-title-index"> <?php echo($obj[2]); ?> </h3>
            <img src="<?php echo($obj[10]);?>" height="50px;" width="50px;">
            <p class="chapo-index"> <?php echo($obj[3]); ?> </p>

            <form id="<?php echo($obj[0]);  ?>" action="Articles/show_article.php" method="post"> <input type="hidden" name="NumArt" value="<?php echo($obj[0]);  ?>"/> </form>
            <a href='#' style="color:black;font-family: 'Questrial', sans-serif;" onclick='document.getElementById("<?php echo($obj[0]);  ?>").submit()'>Lire la suite --></a>


<?php
    }

?>


<a href="index.php">Index.php</a>


</div>
<?php include '@import/footer.php'; ?>



</body>
</html>