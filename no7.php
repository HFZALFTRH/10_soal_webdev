<?php
class Person {
    private $name;
    private $age;

    public function __construct($name = '', $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function getInfo() {
        return "Nama: ".$this->name.", Umur: ".$this->age;
    }
}

$person1 = new Person("Sarah", 25);
echo $person1->getInfo();
