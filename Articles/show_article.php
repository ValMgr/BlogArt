<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
            SHOW ARTICLE
        </h1>


<?php

    include '../@import/db_connection.php';
    include '../@import/connection_check.php';


    if(isset($_POST['NumArt'])){
        $NumArt = $_POST['NumArt'];
    }
    elseif(isset($_SESSION['NumArt'])){
        $NumArt = $_SESSION['NumArt'];
        unset($_SESSION['NumArt']);
    }
 


    $requete = "SELECT * FROM ARTICLE WHERE NumArt = ?";
    $stmt = $dbPdo->prepare($requete);
    $stmt->execute([$NumArt]);


    /* obj[?]   0 = NumArt / 1 = Date / 2 = Titre / 3 = Chapo / 4 = Paragraphe1 / 5 = Subtitle1 / 6 = Paragraphe2
                7 = Subtitle2 / 8 = Paragraphe3 / 9 = Conclusion / 10 = Url / 11 = NumAngl / 12 = NumThem / 13= NumLang */

                //Ne me remercier pas si vous récuperer le code, c'est de bon coeur... cheh

    while($obj = $stmt->fetch()) {
        
    ?>  <h3 id="title"> <?php echo($obj[2])  ?> </h3>
        <p id="chapo">  <?php echo($obj[3]); ?> </p>
        <p id="parag1">  <?php echo($obj[4]); ?> </p>
        <p id="subtitle1">  <?php echo($obj[5]); ?> </p>
        <p id="parag2">  <?php echo($obj[6]); ?> </p>
        <p id="subtitle2">  <?php echo($obj[7]); ?> </p>
        <p id="parag3">  <?php echo($obj[8]); ?> </p>
        <p id="conclu">  <?php echo($obj[9]); ?> </p>
        <img src="<?php echo($obj[10]); ?>" heigh="300px;" width="300px;">

        <a href="../index.php">Index</a>
        <form id="<?php echo($NumArt);  ?>" action="edit_article.php" method="post"> <input type="hidden" name="NumArt" value="<?php echo($NumArt);;  ?>"/> </form>
               <a href='#' onclick='document.getElementById("<?php echo($NumArt);  ?>").submit()'>Edit article</a>


        <?php

    }

        
       




?>

<br/>

</body>
</html>