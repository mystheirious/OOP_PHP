<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function getDiscriminant() {
        return ($this->b ** 2) - (4 * $this->a * $this->c) . "\n";
    }
    
    public function getRoot1() {
        $d = $this->getDiscriminant();
        if ($d < 0) {
            return "Root 1: No real root\n";
        }
        return "Root 1: " . (-$this->b + sqrt($d)) / (2 * $this->a) . "\n";
    }
    
    public function getRoot2() {
        $d = $this->getDiscriminant();
        if ($d < 0) {
            return "Root 2: No real root\n";  
        }
        return "Root 2: " . (-$this->b - sqrt($d)) / (2 * $this->a) . "\n";
    }
}

$quadraticEq1 = new QuadraticEquation(4, 0, -1);
echo "Discriminant: " . $quadraticEq1->getDiscriminant();
echo $quadraticEq1->getRoot1();
echo $quadraticEq1->getRoot2();
?>
