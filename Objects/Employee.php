<?php

declare(strict_types=1);

namespace Objects;


abstract class Employee {
    protected $firstName;
    protected $lastName;
    public $salary;

    public function __construct($firstName, $lastName, $salary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    abstract public function getPosition();

    public function getInfo() {
        return "{$this->firstName} {$this->lastName}, позиция: {$this->getPosition()}, зарплата: {$this->salary} попугаев";
    }
}