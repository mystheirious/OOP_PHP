<?php
class Rectangle {
    public $width;
    public $height;
    
    public function __construct($width = 1, $height = 1) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getArea() {
        return "The area of a rectangle with width {$this->width} and height {$this->height} is " . ($this->width * $this->height) . "\n";
    }
    
    public function getPerimeter() {
        return "The perimeter of a rectangle with width {$this->width} and height {$this->height} is " . 2 * ($this->width + $this->height) . "\n";
    }
}

$rectangle1 = new Rectangle (7,5);
echo $rectangle1->getArea();
echo $rectangle1->getPerimeter();
?>
