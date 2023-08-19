<!-- 1st Q -->
<?php

echo "Task 1<br><br><br>";
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
        if (($this->employee_department == 'Marketing' || $this->employee_department == 'HR') && ($this->employee_basic_pay > 20000)) {
            $this->employee_bonus = 0.25 * $this->employee_basic_pay;
            $this->employee_incentive = 0.15 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;

        } elseif (($this->employee_department == 'Marketing' || $this->employee_department == 'HR') && ($this->employee_basic_pay > 10000)) {
            $this->employee_bonus = 0.15 * $this->employee_basic_pay;
            $this->employee_incentive = 0.10 * $this->employee_basic_pay;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;

        } elseif (($this->employee_department == 'Marketing' || $this->employee_department == 'HR') && ($this->employee_basic_pay <= 10000)) {
            $this->employee_bonus = 1000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;

        } elseif ($this->employee_department == 'Administration') {
            $this->employee_incentive = 3000;
            $this->employee_gross_pay = $this->employee_basic_pay + $this->employee_bonus + $this->employee_incentive;

        }
    }

    function display()
    {
        echo "Employee Code : " . $this->employee_code . "<br>";
        echo "Employee Name : " . $this->employee_name . "<br>";
        echo "Employee Department : " . $this->employee_department . "<br>";
        echo "Employee Basic Pay : " . $this->employee_basic_pay . "<br>";
        echo "Employee Bonus : " . $this->employee_bonus . "<br>";
        echo "Employee Incentive : " . $this->employee_incentive . "<br>";
        echo "Employee Gross Pay : " . $this->employee_gross_pay . "<br>";
    }
}

$obj = new Employee(1002, "Harshan", "Marketing", 5000);
$obj->calc();
$obj->display();
?>


<!-- 2nd Q -->
<?php
echo "Task 2<br><br><br>";
class Persons
{
    public $person_name;
    public $person_dob;
    public $gender;
    public $address;
    public $contact_no;

 

    public function accept($name, $dob, $gender, $address, $Cno)
    {
        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->gender = $gender;
        $this->address = $address;
        $this->contact_no = $Cno;
    }
   public function display()
    {
        echo "Student Name :" . $this->person_name . "<br>";
        echo "Student DOB :" . $this->person_dob . "<br>";
        echo "Student Gender :" . $this->gender . "<br>";
        echo "Student Address :" . $this->address . "<br>";
        echo "Student Contact Number :" . $this->contact_no . "<br>";
    }
}

class Student extends Persons
{

    public $roll_no;
    public $grade;
    public $mark_1;
    public $mark_2;
    public $mark_3;
    public $total;
    public $average;
    public $result;



  public  function access($roll_no, $m1, $m2, $m3)
    {
        
        $this->roll_no = $roll_no;
        $this->mark_1 = $m1;
        $this->mark_2 = $m2;
        $this->mark_3 = $m3;
        
    }
  public  function calc1(){
        if (($this->mark_1 || $this->mark_2 || $this->mark_3) < 40) {
            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'BAD';
            $this->result = 'Fail';
        } else {

            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'GOOD';
            $this->result = 'Pass';

        }
    }
  public  function display()
    {

       parent::display();
        echo "Roll No :".$this->roll_no . "<br>";
        echo "Mark 1 :" . $this->mark_1 . "<br>";
        echo "Mark 2 :" . $this->mark_2 . "<br>";
        echo "Mark 3 :" . $this->mark_3 . "<br>";
        echo "Total Marks :" . $this->total . "<br>";
        echo "Average :" . $this->average . "<br>";
        echo "Grade :" . $this->grade . "<br>";
        echo "Result :" . $this->result . "<br>";


    }

}

$st = new Student();
$st->accept("Roshan", "08-04-2002", "Male", "Coimbatore", 948620);
$st->access(101, 98, 84, 93);
$st->calc1();
$st->display();
?>


<!-- 3rd Q -->
<?php
echo "Task 3<br><br><br>";
abstract class Persons1
{

    public $person_name;
    public $person_dob;
    public $gender;
    public $address;
    public $contact_no;

    function __construct($name, $dob, $gender, $address, $Cno)
    {
        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->gender = $gender;
        $this->address = $address;
        $this->contact_no = $Cno;
    }
   public function accept()
    {
        echo "Hiii";
    }
    public function display()
    {
    }
  public function calc_age()
    {
    }

}

class Student1 extends Persons1
{

    public $roll_no;
    public $grade;
    public $mark_1;
    public $mark_2;
    public $mark_3;
    public $total;
    public $average;
    public $result;
    public $age;

    function __construct($name, $dob, $gender, $address, $Cno, $roll_no, $m1, $m2, $m3)
    {
        parent::__construct($name, $dob, $gender, $address, $Cno);
        $this->roll_no = $roll_no;
        $this->mark_1 = $m1;
        $this->mark_2 = $m2;
        $this->mark_3 = $m3;

    }

    function accept()
    {
        if (($this->mark_1 || $this->mark_2 || $this->mark_3) < 40) {
            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'BAD';
            $this->result = 'Fail';
        } else {

            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'GOOD';
            $this->result = 'Pass';

        }
    }

    function calc_age()
    {
        $from = new DateTime($this->person_dob);
        $to = new DateTime('today');
        $this->age = $from->diff($to)->y;
     
    }
    function display()
    {

        echo "Student Name :" . $this->person_name . "<br>";
        echo "Student Roll Number :" . $this->roll_no . "<br>";
        echo "Student DOB :" . $this->person_dob . "<br>";
        echo "Student Gender :" . $this->gender . "<br>";
        echo "Student Address :" . $this->address . "<br>";
        echo "Student Contact Number :" . $this->contact_no . "<br>";
        echo "Mark 1 :" . $this->mark_1 . "<br>";
        echo "Mark 2 :" . $this->mark_2 . "<br>";
        echo "Mark 3 :" . $this->mark_3 . "<br>";
        echo "Total Marks :" . $this->total . "<br>";
        echo "Average :" . $this->average . "<br>";
        echo "Grade :" . $this->grade . "<br>";
        echo "Result :" . $this->result . "<br>";
        echo "Your Age :" . $this->age ." years". "<br>";
    }
}

$p = new Student1("Shareon", "2002-04-08", "Male", "London", "9486", 101, 98, 54, 67);
$p->accept();
$p->calc_age();
$p->display();
?>

<!-- 4th Q -->
<?php
echo "Task 4<br><br><br>";
interface  Accept
{
    const PASS_MARK = 40;
  public function accept();
}

interface display
{

   public  function display();

}
class Persons3
{

    public $person_name;
    public $person_dob;
    public $gender;
    public $address;
    public $contact_no;

    function __construct($name, $dob, $gender, $address, $Cno)
    {
        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->gender = $gender;
        $this->address = $address;
        $this->contact_no = $Cno;
    }
  
}

class Student3 extends Persons3 implements Accept,display
{

    public $roll_no;
    public $grade;
    public $mark_1;
    public $mark_2;
    public $mark_3;
    public $total;
    public $average;
    public $result;


    function __construct($name, $dob, $gender, $address, $Cno, $roll_no, $m1, $m2, $m3)
    {
        parent::__construct($name, $dob, $gender, $address, $Cno);
        $this->roll_no = $roll_no;
        $this->mark_1 = $m1;
        $this->mark_2 = $m2;
        $this->mark_3 = $m3;

    }

    function accept()
    {
        if (($this->mark_1 || $this->mark_2 || $this->mark_3) < self::PASS_MARK) {
            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'BAD';
            $this->result = 'Fail';
        } else {

            $this->total = $this->mark_1 + $this->mark_2 + $this->mark_3;
            $this->average = $this->total / 3;
            $this->grade = 'GOOD';
            $this->result = 'Pass';

        }
    }


    function display()
    {

        echo "Student Name :" . $this->person_name . "<br>";
        echo "Student Roll Number :" . $this->roll_no . "<br>";
        echo "Student DOB :" . $this->person_dob . "<br>";
        echo "Student Gender :" . $this->gender . "<br>";
        echo "Student Address :" . $this->address . "<br>";
        echo "Student Contact Number :" . $this->contact_no . "<br>";
        echo "Mark 1 :" . $this->mark_1 . "<br>";
        echo "Mark 2 :" . $this->mark_2 . "<br>";
        echo "Mark 3 :" . $this->mark_3 . "<br>";
        echo "Total Marks :" . $this->total . "<br>";
        echo "Average :" . $this->average . "<br>";
        echo "Grade :" . $this->grade . "<br>";
        echo "Result :" . $this->result . "<br>";

    }
}
$i = new Student3("John Doe", "2002-04-08", "Male", "London", "9486", 101, 98, 54, 67) ;
$i->accept();
$i->display();
?>


