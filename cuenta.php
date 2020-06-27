<?php
    if( isset($_POST['characters']) ) {
        $chars = mb_strlen($_POST['characters'],'8bit');
        $restantes = 1224 - intval($chars);
        echo $restantes;
    } else {
        die("Solicitud no válida.");
    }
?>