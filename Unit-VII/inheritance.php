<?php

class ParentClass {

public function getName(){
    echo "Parent Name";
}
}

class ChildClass extends ParentClass{

public function getName(){
    echo "Children Name";
}

}

$parent = new ParentClass();
$parent->getName();

echo "<br>";

$children = new ChildClass();
$children->getName();

?>