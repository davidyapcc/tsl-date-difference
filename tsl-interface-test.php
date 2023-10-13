<?php

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private float $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float|int
    {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    private float $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float|object|int
    {
        return pow($this->sideLength, 2);
    }
}

// Usage
$circle = new Circle(5);
$square = new Square(4);

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Square Area: " . $square->calculateArea();

// In object-oriented programming, an interface is a blueprint for a class.
// It defines a set of methods that a class must implement if it claims to implement that particular interface.
// Interfaces are used to ensure that a class adheres to a specific contract or protocol,
// allowing different classes to work together in a unified way.
//
// In summary, interfaces play a crucial role in establishing contracts between different parts of a program,
// promoting code reusability, and enabling polymorphism. They are a fundamental tool in designing object-oriented systems.
