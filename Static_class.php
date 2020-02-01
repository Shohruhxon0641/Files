<?php
class TextClass{
    public static $VAR_1 = 100;

    public static function getVAR(){
        return self::$VAR_1+9;
    }

}
echo TextClass::$VAR_1;
Echo '<br>';
echo TextClass::getVAR();
