<?php
class Employee
{
    public $employee_code,
    $employee_name,
    $employee_department,
    $employee_basic_pay,
    $employee_bonus,
    $employee_incentive,
    $employee_gross_pay;

    function __construct($code, $name, $dept, $basic, $bonus, $incentive, $gross)
    {
        $this->employee_code = $code;
        $this->employee_name = $name;
        $this->employee_department = $dept;
        $this->employee_basic_pay = $basic;
        $this->employee_bonus = $bonus;
        $this->employee_incentive = $incentive;
        $this->employee_gross_pay = $gross;
    }

    function calc()
    {
        if ($this->employee_department == 'Marketing' | 'HR' && $this->employee_basic_pay > 20000) {
            $this->employee_bonus = 0.25 * $this->employee_basic_pay;
            $this->employee_incentive = 0.15 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
        } elseif ($this->employee_department == 'Marketing' | 'HR' && $this->employee_basic_pay > 10000) {
            $this->employee_bonus = 0.15 * $this->employee_basic_pay;
            $this->employee_incentive = 0.10 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
        } elseif ($this->employee_department == 'Marketing' | 'HR' && $this->employee_basic_pay <= 10000) {
            $this->employee_bonus = 1000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
        }
        elseif($this->employee_department == 'Administration'){
            $this->employee_incentive = 3000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;

        }
    }
}
?>