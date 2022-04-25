<?php 

//trait --- Actually you can define common function and can use from any class ----
trait hello {
    public function sayHello() {
        echo "Hello everyone ";
    }
}

trait bye {
    public function sayBye() {
        echo " Bye everyone";
    }
}

class base {
    use hello, bye;
}

class base2 {
    use hello;
}

$test = new base();

$test->sayHello();
$test->sayBye();

?>