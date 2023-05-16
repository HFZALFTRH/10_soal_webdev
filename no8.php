<?php
class Circle {
    private $radius;

    public function __construct($radius = 0) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return $this->radius ** 2 * 3.14;
    }
}

$circle1 = new Circle(10);
echo "Area lingkaran = " . number_format($circle1->calculateArea());
