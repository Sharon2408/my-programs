<?php
$var_string = "I am String";
$var_int = 23;
$var_float = 23.6;
$var_boolean = true;
$var_array = array("Volvo", "BMW", "Toyota");
$var_decimal = 23;
$var_octal = 0673;
$var_hexadecimal = 0x55;


echo $var_string ,"<br>",$var_int ,"<br>",$var_float ,"<br>",$var_boolean , "<br>",
$var_decimal ,"<br>",$var_octal ,"<br>",$var_hexadecimal ,"<br>";

print_r($var_array);

// REFERENCE
$name = "I am variable";
$$name = "I am reference of variable";
echo $name ,"  ", $$name , "<br>";

// Global
$sample = "I am Global variable";
function message(){
global$sample;
$local = "I am local variable";
echo "Hi!",$sample," ",$local;
}
message();

function checking($name,$age){

    static $count_working_person=0;
    static $count_retired_person=0;

    if($age>60){
        $count_retired_person++;
    }
    else{
        $count_working_person++;
    }

    echo "Total no of working persons",$count_working_person;
    echo "Total no of retired persons",$count_retired_person;
}

checking('sharon',35);
checking('sharon',65);
checking('sharon',75);

$name="95";
$num = "10";

$int = (int) $name;
$float = (float) $name;
$boolean = (boolean) $name;
$string = (string) $num;
echo var_dump($float);
echo var_dump($int);
echo var_dump($boolean);
echo var_dump($num);

$emp_details = array("Emp_name"=>"Sharon","Department"=>"HR");
$salary_details = array("Net_salary"=>"35000","da"=>"2000","tax"=>"2000");

echo $emp_details["Emp_name"],'<br>',$emp_details["Department"],'<br>';
echo $salary_details["Net_salary"],'<br>',$salary_details["da"]
?>