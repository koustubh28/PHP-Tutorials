<?php

class abc {
    public function first() {
        echo "This is first function\n";
        return $this;
    }

    public function second() {
        echo "This is a second function\n";
        return $this;
    }

    public function third() {
        echo "This is a third function\n";
        return $this;
    }
}

$test = new abc();

$test->first()->second()->third();

?>