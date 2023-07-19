<?php
$a=10;
var_dump($a);
$b=20.23;
var_dump($b);
$c=true;
var_dump($c);
$d="ram";
var_dump($d);
$e=["ram","sham","pavan"];
var_dump($e);
$f=null;
var_dump($f);
class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }


?>
