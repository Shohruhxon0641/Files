<?php
$a = "Shohruhxon";
echo "Mening ismim $a!";
echo '<br>';
echo "Mening ismim ".$a."!";
echo '<br>';
$b = 15;
$c = 3;
function sum(){
    global $b, $c;
    echo "<h3>b+c ning qiymati: </h3>".($b+$c);
}
sum();
//echo $b;
echo '<br>';
function dum(){
    echo "<h2>global(b)+global(c) ning qiymati: </h2>".($GLOBALS['b']+$GLOBALS['c']);
}
dum();
?>