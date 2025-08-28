<?php

class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    
    // argument a, b, c
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    // get a
    public function getA() {
        return $this->a;
    }
    
    // get b
    public function getB() {
        return $this->b;
    }
    
    // get c
    public function getC() {
        return $this->c;
    }
    
    // discriminant (b² - 4ac)
    public function getDiscriminant() {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
    
    // returns first root w quadratic formuls
    public function getRoot1() {
        $discriminant = $this->getDiscriminant();
        if ($discriminant < 0) {
            return 0; // return when no real root
        }
        return (-$this->b + sqrt($discriminant)) / (2 * $this->a);
    }
    
    // returns second root w quadratic formula
    public function getRoot2() {
        $discriminant = $this->getDiscriminant();
        if ($discriminant < 0) {
            return 0; 
        }
        return (-$this->b - sqrt($discriminant)) / (2 * $this->a);
    }
}

echo "<h3>QuadraticEquation Class Demo</h3>";

// 2 roots
echo "<b>1. ax² + bx + c = 0 where a=1, b=-3, c=2</b><br>";
echo "Equation: x² - 3x + 2 = 0<br>";
$eq1 = new QuadraticEquation(1, -3, 2);
echo "Coefficient a: " . $eq1->getA() . "<br>";
echo "Coefficient b: " . $eq1->getB() . "<br>";
echo "Coefficient c: " . $eq1->getC() . "<br>";
echo "Discriminant: " . $eq1->getDiscriminant() . "<br>";
echo "Root 1: " . $eq1->getRoot1() . "<br>";
echo "Root 2: " . $eq1->getRoot2() . "<br><br>";

// 1 root (discriminant = 0)
echo "<b>2. ax² + bx + c = 0 where a=1, b=-2, c=1</b><br>";
echo "Equation: x² - 2x + 1 = 0<br>";
$eq2 = new QuadraticEquation(1, -2, 1);
echo "Coefficient a: " . $eq2->getA() . "<br>";
echo "Coefficient b: " . $eq2->getB() . "<br>";
echo "Coefficient c: " . $eq2->getC() . "<br>";
echo "Discriminant: " . $eq2->getDiscriminant() . "<br>";
echo "Root 1: " . $eq2->getRoot1() . "<br>";
echo "Root 2: " . $eq2->getRoot2() . "<br><br>";

?>