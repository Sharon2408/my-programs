<!-- 1st Q -->
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

    function __construct($code, $name, $dept, $basic)
    {
        $this->employee_code = $code;
        $this->employee_name = $name;
        $this->employee_department = $dept;
        $this->employee_basic_pay = $basic;
       
    }

    function calc()
    {
        if (($this->employee_department == 'Marketing' || 'HR') && ($this->employee_basic_pay > 20000)) {
            $this->employee_bonus = 0.25 * $this->employee_basic_pay;
            $this->employee_incentive = 0.15 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
            
        } elseif (($this->employee_department == 'Marketing' || 'HR') && ($this->employee_basic_pay > 10000)) {
            $this->employee_bonus = 0.15 * $this->employee_basic_pay;
            $this->employee_incentive = 0.10 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
           
        } elseif (($this->employee_department == 'Marketing' || 'HR') && ($this->employee_basic_pay <= 10000)) {
            $this->employee_bonus = 1000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
          
        }
        elseif($this->employee_department == 'Administration'){
            $this->employee_incentive = 3000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;
           
        }
    }

    function display(){
        echo "Employee Code : ".$this->employee_code. "<br>";
        echo "Employee Name : ".$this->employee_name. "<br>";
        echo "Employee Department : ".$this->employee_department. "<br>";
        echo "Employee Basic Pay : ".$this->employee_basic_pay. "<br>";
        echo "Employee Bonus : ".$this->employee_bonus. "<br>";
        echo "Employee Incentive : ".$this->employee_incentive. "<br>";
        echo "Employee Gross Pay : ".$this->employee_gross_pay. "<br>";
    }
}

$obj = new Employee(1002,"Harshan","Marketing",5000);
$obj->calc();
$obj->display();
?>

<?php

?>