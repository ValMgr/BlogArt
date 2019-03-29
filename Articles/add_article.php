<?php
    include '../@import/db_connection.php';
    include '../@import/connection_check.php';
?>


<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>(SUR)VIE ETUDIANTE</title>
        </head>
        <body>
		<h1>
			Add Article
		</h1>


<?php


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

       $requete = "SELECT * FROM THEMATIQUE WHERE NumLang = ?";
       $stmt = $dbPdo->prepare($requete);
       $stmt->execute([$Lang]);

       $requete2 = "SELECT * FROM ANGLE WHERE NumLang = ?";
       $stmt2 = $dbPdo->prepare($requete2);
       $stmt2->execute([$Lang]);
   
      
        
?>

<form action="adding_article.php" method="post">

            <label for="title">Titre</label>
            <input type="text" name="title">
                <br />

            <label for="chapo">Chapo</label>
            <textarea type="text" name="chapo"></textarea>
                <br />

            <label for="">Paragraphe n°1</label>
            <textarea type="text" name="parag1"></textarea>
                <br />

            <label for="subtitle1">Titre paragraphe n°2</label>
            <input type="text" name="subtitle1">
                <br />

            <label for="parag2">Paragraphe n°2</label>
            <textarea type="text" name="parag2"></textarea>
                <br />

            <label for="subtitle2">Titre paragraphe n°3</label>
            <input type="text" name="subtitle2">
                <br />

            <label for="parag3">Paragraphe n°3</label>
            <textarea type="text" name="parag3"></textarea>
                <br />

            <label for="conclu">Conclusion</label>
            <textarea type="text" name="conclu"></textarea>
                <br />

            <label for="url_pic">Image</label>
            <input type="text" name="url_pic">
                <br />

            <label for="Them">Thématique</label>
            <select name="Them" id="Them">
            <?php

                while($obj = $stmt->fetch()) {
                 ?>
                    <option value="<?php  echo($obj[0]);   ?>"><?php echo($obj[1]); ?></option> <?php
                }
                 ?>
                              
            </select>
            <br/>

            <label for="Angle">Angle</label>
            <select name="Angle" id="Angle">
            <?php

                while($obj = $stmt2->fetch()) {
                 ?>
                    <option value="<?php  echo($obj[0]);   ?>"><?php echo($obj[1]); ?></option> <?php
                } ?>
                              
            </select>
            <br/>

            <input type="submit" value="Add">
    </form>

    </body>
</html>
