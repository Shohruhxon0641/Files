<?php
    //File read
    $get = file_get_contents('test.txt');
    var_dump($get);
    
    //File write
    file_put_contents('test.txt', '0123456789');