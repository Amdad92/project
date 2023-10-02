<?php
interface Animal{
    public function makesound();
    public function move();
}
//create class dog that implements the animal interface.
class Dog implements Animal{
    public function makeSound()
    {
        return "Woof! Woof!";
    }
    public function move(){
        return "Running on four legs";
    }
}
// Create another class Bird that implements the Animal interface
class Bird implements Animal{
    public function makeSound()
    {
         return "Tweet! Tweet!";
    }
    public function move(){
        return "Flying with two wings";
    }
}
// Now let's use these classes
$dog= new Dog();
echo "Dog says: {$dog->makeSound()}.\n";
echo "Dog move: {$dog->move()}.";

$bird= new Bird();
echo "Bird says: {$bird->makeSound()}.\n";
echo "Bird flys: {$bird->move()}.";