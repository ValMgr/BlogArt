<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			Edit Article
		</h1>


<?php

    include '../@import/db_connection.php';
    include '../@import/connection_check.php';

        //Oblige à la connection pour ajouter un article
       if($Connected == false){
            header ('location: ../Login/login_form.php');
       }

       //On récupère les différentes thématique
       if($_SESSION['Lang'] == "FR"){
           $Lang = "FRAN01";
           $_SESSION['LangNum'] = $Lang;  
       }
       if($_SESSION['Lang'] == "ENG"){
           $Lang = "ANGL01";
           $_SESSION['LangNum'] = $Lang;
       }

       $requete_read_them = "SELECT * FROM THEMATIQUE WHERE NumLang = ?";
       $stmt_read_them = $dbPdo->prepare($requete_read_them);
       $stmt_read_them->execute([$Lang]);

       $requete_read_angle = "SELECT * FROM ANGLE WHERE NumLang = ?";
       $stmt_read_angle = $dbPdo->prepare($requete_read_angle);
       $stmt_read_angle->execute([$Lang]);

       $NumArt = $_POST['NumArt'];

        $requete_read_article = "SELECT * FROM ARTICLE WHERE NumArt = ?";
        $stmt_read_article = $dbPdo->prepare($requete_read_article);
        $stmt_read_article->execute([$NumArt]);
   
     
        /* obj[?]   0 = NumArt / 1 = Date / 2 = Titre / 3 = Chapo / 4 = Paragraphe1 / 5 = Subtitle1 / 6 = Paragraphe2
                7 = Subtitle2 / 8 = Paragraphe3 / 9 = Conclusion / 10 = Url / 11 = NumAngl / 12 = NumThem / 13= NumLang */

                //Ne me remercier pas si vous récuperer le code, c'est de bon coeur... cheh
        


        while($obj_read_article = $stmt_read_article->fetch()) {
                   
                ?>

        <form action="editing_article.php" method="post">

        <input type="hidden" name="NumArt" value="<?php echo($obj_read_article[0]); ?>">

        <label for="title">Titre</label>
            <input type="text" name="title" value="<?php echo($obj_read_article[2]); ?>">
                <br />

            <label for="chapo">Chapo</label>
            <textarea type="text" name="chapo"><?php echo($obj_read_article[3]); ?></textarea>
                <br />

            <label for="">Paragraphe n°1</label>
            <textarea type="text" name="parag1" ><?php echo($obj_read_article[4]); ?></textarea>
                <br />

            <label for="subtitle1">Titre paragraphe n°2</label>
            <input type="text" name="subtitle1" value="<?php echo($obj_read_article[5]); ?>">
                <br />

            <label for="parag2">Paragraphe n°2</label>
            <textarea type="text" name="parag2" ><?php echo($obj_read_article[6]); ?></textarea>
                <br />

            <label for="subtitle2">Titre paragraphe n°3</label>
            <input type="text" name="subtitle2" value="<?php echo($obj_read_article[7]); ?>">
                <br />

            <label for="parag3">Paragraphe n°3</label>
            <textarea type="text" name="parag3"><?php echo($obj_read_article[8]); ?></textarea>
                <br />

            <label for="conclu">Conclusion</label>
            <textarea type="text" name="conclu"><?php echo($obj_read_article[9]); ?></textarea>
                <br />

            <label for="url_pic">Image</label>
            <input type="text" name="url_pic" value="<?php echo($obj_read_article[10]); ?>">
                <br />

            <label for="Them">Thématique</label>
            <select name="Them" id="Them">
            <?php

                while($obj = $stmt_read_them->fetch()) {
                 ?>
                    <option value="<?php  echo($obj[0]);   ?>"><?php echo($obj[1]); ?></option> <?php
                }
                 ?>
                              
            </select>
            <br/>

            <label for="Angle">Angle</label>
            <select name="Angle" id="Angle">
            <?php

                while($obj = $stmt_read_angle->fetch()) {
                 ?>
                    <option value="<?php  echo($obj[0]);   ?>"><?php echo($obj[1]); ?></option> <?php
                } ?>
                              
            </select>
            <br/>

            <input type="submit" value="Edit">
    </form>
<?php
}

?>

</body>
</html>