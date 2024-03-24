<?php

class Employee {
    private $name;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Salary cannot be negative.". PHP_EOL;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

// instanse create
$employee = new Employee();
$employee->setName("Emran Masud");
$employee->setSalary(20000);

echo "Employee Name: " . $employee->getName() . PHP_EOL;
echo "Employee Salary: " . $employee->getSalary(). PHP_EOL;