<?php

// Magic methods in PHP are special methods that start with two underscores (__).
// These methods are automatically called by the PHP interpreter in specific circumstances.
// They provide a way to implement certain functionality in a class that interacts with the object's lifecycle events or operations.

// Here's an example demonstrating the use of the __construct() and __toString() magic methods:

class MyClass {
    private string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __toString() {
        return "Hello, my name is " . $this->name;
    }
}

$obj = new MyClass("John Doe");
echo $obj;

// In this example, the __construct() method initializes the object with a name when it's created.
// The __toString() method provides a string representation of the object, which allows us to directly echo the object.
//
// Magic methods are powerful tools that allow you to customize how your objects behave in various situations, enhancing the flexibility and functionality of your classes.
