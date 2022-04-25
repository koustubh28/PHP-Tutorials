<?php 

class base {
    protected static $name = ' Koustubh';

    public function show() {
        echo static::$name;  //using self we can call any variable/method outside of a class
        echo self::$name;  //using self we can call any variable/method outside of a class
    }
}

class derived extends base {
    protected static $name = " Muktibodh";
}

$test = new derived();

$test->show();

?>