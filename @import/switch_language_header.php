<?php

if(isset($_SESSION['Lang'])){

    if($_SESSION['Lang'] == "FR"){  ?>
    <form method="get" action="switch_language.php">
        <button type="submit">FR</button>
        </form>
<?php
    }
    if($_SESSION['Lang'] == "ENG"){ ?>
    <form method="get" action="switch_language.php">
        <button type="submit">ENG</button>
    </form>
    <?php } 
    
    }
    else{
        $_SESSION['Lang'] = "FR";
        //header('location: switch_language.php');
    }
    
    
    ?>