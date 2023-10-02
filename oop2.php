<?php
class Shape{
    public function calculateArea(){
        return "Generic Area Calculation\n";
    
    }
}

class Circle extends Shape{
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return 3.14*$this->radius*$this->radius;    
    }

}
class Rectangle extends Shape{
    private $length, $width;
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->length* $this->width;
    }
}
class Triangle extends Shape{
    private $length, $breadth;
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth=$breadth;
    }
    public function calculateArea()
    {
        return 0.5*$this->length*$this->breadth;
    }
}
$genericShape=new Shape();
$specialCirlce= new Circle(5);
echo $genericShape->calculateArea();
echo "The area of a circle is:{$specialCirlce->calculateArea()}\n";
$specialRectangle= new Rectangle(50,30);
echo "The area of rectangle is: {$specialRectangle->calculateArea()}\n";
$specialTriangle=new Triangle(10,15);
echo "The area of trianle is :{$specialTriangle->calculateArea()}\n";