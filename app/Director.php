<?php

namespace OOP;

class Director extends Employee {
    private $cabinet;

    public function __construct($name, $email, $cabinet)
    {
        $this->name = $name;
        $this->email = $email;
        $this->cabinet = $cabinet;
    }

    public function addLocation($location){
        $this->location = $location;
    }
    
    
    public function getInfo()
    {
        return [
            $this->name,
            $this->email,
            $this->location,
            $this->cabinet
        ];
    }
}