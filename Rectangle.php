<?php

class Rectangle {
    public $width = 1;
    public $height = 1;
    
    // constructor w specified width and height
    public function __construct($width = 1, $height = 1) {
        $this->width = $width;
        $this->height = $height;
    }
    
    // return area of rectangle
    public function getArea() {
        return $this->width * $this->height;
    }
    
    // return perimeter of rectangle
    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

echo "<h3>Rectangle Class Demo</h3>";

// create rectangles
$rect1 = new Rectangle(); /
$rect2 = new Rectangle(5, 3); 
$rect3 = new Rectangle(2.5, 4.0); 

echo "<b>Rectangle 1 (default 1x1):</b><br>";
echo "Width: " . $rect1->width . "<br>";
echo "Height: " . $rect1->height . "<br>";
echo "Area: " . $rect1->getArea() . "<br>";
echo "Perimeter: " . $rect1->getPerimeter() . "<br><br>";

echo "<b>Rectangle 2 (5x3):</b><br>";
echo "Width: " . $rect2->width . "<br>";
echo "Height: " . $rect2->height . "<br>";
echo "Area: " . $rect2->getArea() . "<br>";
echo "Perimeter: " . $rect2->getPerimeter() . "<br><br>";

echo "<b>Rectangle 3 (2.5x4.0):</b><br>";
echo "Width: " . $rect3->width . "<br>";
echo "Height: " . $rect3->height . "<br>";
echo "Area: " . $rect3->getArea() . "<br>";
echo "Perimeter: " . $rect3->getPerimeter() . "<br>";

?>
