<?php
class Student {
    private $nama;
    private $usia;

    public function getNama() {
        return $this->nama;
    }

    public function setNama(string $nama) {
        $this->nama = $nama;
    }

    public function getusia() {
        return $this->usia;
    }

    public function setusia(int $usia) {
        $this->usia = $usia;
    }
}

$student1 = new Student();
$student1->setNama("John");
$student1->setusia(20);

echo $student1->getNama();
echo $student1->getusia(); 
