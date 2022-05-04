<?php

// function fruits($names) {

//     foreach($names as $name) {
//         echo $name . "<br>";
//     }
// }

// $test = ["Apples", "Bananas", "Oranges"];

// fruits($test);

class hello {
    public function sayhello() {
        echo "Hello Everyone!";
    }
}

class bye {
    public function saybye() {
        echo "Bye Everyone!";
    }
}

function wow(hello $c) {
    $c->sayhello();
}

$test = new hello();

wow($test);


//Advance Example
class school {
    public function getNames(student $names) {
        foreach($names->Names() as $name) {
            echo $name . "<br>";
        }
    }
}

class student {
    public function Names() {
       return ["Ram", "Krishna", "Gopal"];
    }
}

class library {

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);

?>