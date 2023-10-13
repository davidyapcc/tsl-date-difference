<?php

class User {
    private int $id;
    private string $first_name;
    private string $last_name;
    private int $number;

    public function __construct(int $id) {
        $this->id = $id;
        $this->getUserById();
    }

    private function getUserById() {
        $query = "SELECT * FROM `users` WHERE `id`=" . $this->id;

        // Assuming that this fires a query and
        // returns the record $row

        $this->first_name = $row['first_name'];
        $this->last_name = $row['last_name'];
        $this->number = $row['number'];
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getNumber() {
        return $this->number;
    }
}

// Usage
$user = new User(1);

echo "First Name: " . $user->getFirstName() . '<br />';
echo "Last Name: " . $user->getLastName() . '<br />';
echo "Number: " . $user->getNumber() . '<br />';
