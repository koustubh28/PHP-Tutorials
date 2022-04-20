<?php 

class base {
    public static $name = 'Koustubh';

    public function show() {
        echo self::$name;  //using self we can call any variable/method outside of a class
    }
}

$test = new base();
$test->show();

?>