<?php


class EmployeeManager
{
    public $employees;

    public function __construct($employees)
    {
        $this->employees = $employees;
    }

    public function addEmployee($employee)
    {
        $this->employees[] = $employee;
    }

    public function deleteEmployee($employee)
    {
        
    }

    public function showAll()
    {
        return $this->employees;
    }
}