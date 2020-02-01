<!DOCTYPE html>
<?php
class Person{
    public $first_name ;
    public $last_name;

    public function getFullName(){
        return $this->last_name.' '.$this->first_name;
    }
}
    // class dan obyekt (ekzemplyar) yaratish;
    $ravshan = new Person();
    // Prooerty' larga qiymat qo'yish;
    $ravshan->first_name = "Shohruhxon";
    $ravshan->last_name = "Meyliboyev";
    
    echo $ravshan->getFullName();






