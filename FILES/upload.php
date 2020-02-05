<?php
    $my_file = $_FILES['my_file'];
    $full_path = 'test.txt';
    move_uploaded_file($my_file['tmp_name'], $full_path);
    $uploaded = fopen($full_path, 'r');
    $text = fread($uploaded, 10000);

    $pathAppend = 'matn.txt';
    $add = fopen($pathAppend, 'a');
    fwrite($add, $text);

    fclose($uploaded);

