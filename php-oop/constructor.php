<?php

class person {
    public $name, $age;

    function __construct($name = "No Name", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    function show() {
        echo $this->name . " - " . $this->age . "<br>";
    }
}

$p1 = new person();
$p2 = new person("Koustubh Muktibodh", 28);
$p3 = new person("Kanishq", 28);

$p1->show();
$p2->show();
$p3->show();

?>