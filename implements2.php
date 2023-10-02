<?php

use Circle as GlobalCircle;

interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}
class Rectangle implements Shape{
private $height,$width;
public function __construct($height,$width) {
    $this->height = $height;
    $this->width= $width;
}
public function calculateArea()
{
    return $this->height* $this->width;
}
public function calculatePerimeter()
{
    return 2*($this->height+$this->width);
}

}

$rectangle=new Rectangle(10,20);
echo "The Rectangle area is:{$rectangle->calculateArea()}\n";
echo "The Rectangle Perimeter is: {$rectangle->calculatePerimeter()}\n";

class Circle implements Shape{
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()* pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return 2* pi()* $this->radius;
    }
}
$circle=new Circle(5);
echo "Circle area is:{$circle->calculateArea()}\n";
echo "Circle Perimeter is:{$circle->calculatePerimeter()}\n";
