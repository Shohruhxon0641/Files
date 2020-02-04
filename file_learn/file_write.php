<?php
    // fopen(file_name.formoti, mode)
    $oqiw = fopen('test.txt', 'w');

    $data = "Hello World!";

    fwrite($oqiw, $data);
     fclose($oqiw);