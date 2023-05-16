<?

class Animal {
    public $name;
    public $sound;
    
    public function makeSound() {
        echo "Hewan " . $this -> name . " suaranya: " . $this -> sound;
    }
}

$hewan = new Animal();
$hewan-> name = "jastis";
$hewan->sound = "Meow, kreeew";

$hewan->makeSound();
