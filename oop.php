<?php
class Animal{
  public function makeSound(){
    return "Generic Animal Sound\n";
  }  
}
class Cat extends Animal{
    public function makeSound(){
        return "Meow";
    }
} 
$animalSound=new Animal();
$specialCat= new Cat();
echo $animalSound->makeSound();
echo $specialCat->makeSound();