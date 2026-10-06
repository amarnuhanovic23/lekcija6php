<?php
    $file = fopen("roba.txt", "w+");

    fwrite($file, "Laptop - 1784KM\n");
    fwrite($file, "Telefon - 1200KM\n");
    fwrite($file, "Kompjuter - 3999KM\n");

    fclose($file);

    $file = fopen("roba.txt", "r");

    while(!feof($file)) {
        $red = fgets($file);
        echo $red . "<br>";
    }

    fclose($file);
?>