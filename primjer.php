<?php
    $file = fopen("ucenici.txt", "w");

    fwrite($file, "Amar - 18 godina\n");
    fwrite($file, "Emir - 17 godina\n");
    fwrite($file, "Nadin - 16 godina\n");
    
    fclose($file);

    $file = fopen("ucenici.txt", "r");

    while(!feof($file)) {
        $red = fgets($file);
        echo $red . "<br>";
    }

    fclose($file);
?>