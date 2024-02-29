<?php    
if (isset($_GET['ano'])) {
    $ano = $_GET['ano'];

    if (($ano % 100 != 0 && $ano % 4 == 0) || $ano % 400 == 0) {
        echo "O ano é bissexto!";
    } else {
        echo "O ano não é bissexto!";
    }
}
