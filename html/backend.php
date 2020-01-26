 <?php
    //var_dump($_GET);
    //var_dump($_POST);
    $ism = $_POST['ism'];
    $fam = $_POST['familiyasi'];
    $sharif = $_POST['sharifi'];
    $text = $_POST['matn'];
    // php7 dan eski versiyalar uchun
    if(isset($_POST['abs'])){
        $abs = $_POST['abs'];
    }
    else { 
        $abs = false;
    }
    //php7 dan yuqori versiyalar uchun
    // $abs = $_POST['abs'] ?? false;
    $abc = $_POST['abc'] ?? false;
    
    var_dump($_POST); 
    
    // $kurs = 








