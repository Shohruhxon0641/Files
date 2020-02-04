<?php
    // fopen(file_name.formoti, mode)
    $hardler = fopen('test.txt', 'r');

    $data = fread($hardler, 10000);

    var_dump($data);
    fclose($hardler);