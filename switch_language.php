<?php

session_start();

if(isset($_SESSION['Lang'])){
    if($_SESSION['Lang'] =="FR"){
        $_SESSION['Lang'] = "ENG";
        header('location: index.php');
        die();
    }
    if($_SESSION['Lang'] == "ENG"){
        $_SESSION['Lang'] = "FR";
        header('location: index.php');
        die();
    }
}
else{
    $_SESSION['Lang'] = "FR";
    header('location: switch_language.php');
}


?>
