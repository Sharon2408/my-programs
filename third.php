<?php declare(strict_types=1);
function ageChecking(string $name, int $age): string {
    $result = ($age >= 18) ? "is eligible to vote" : "is not eligible to vote";
    return "<b><i>$name</i></b> $result.";
}

?>
<p><?= ageChecking("SHARON", 20) ?></p>


<!-- 1st Q -->
<?php
function Not_known(...$strings) {
    $resultArray = $strings;
   foreach($resultArray as $x){
       echo $x;
   }
}
Not_known("Hello","to","You");
?>

<!-- 2nd Q -->
<?php
function Check($var1, $var2) {
    if (is_string($var1) && is_string($var2)) {
        echo $var1 . $var2; 
    } else {
        echo $var1 * $var2;
    }
}
Check("SHA","RON");
?>


<!-- 3rd Q -->
<?php
$SI;
$CI;

function simple($P = 1000, $N = 2, $R = 5) {
  $GLOBALS['SI'] = ($P * $N * $R) / 100;
   $GLOBALS['CI'] = $P * pow((1 + $R/100), $N) - $P;
}
simple(1000,7,8);

?>
    
<span>Simple Interest (SI):<?= $SI;?></span><br>
<span>Compound Interest (CI):<?= $CI;?></span><br>


<!-- 5th Q -->

<?php
if(isset($_POST['calc_si']))  
            {  
              $SI = ($_POST['principal']*$_POST['year']*$_POST['rate'])/100;
              echo "SIMPLE INTREST IS:<br>$SI";
            }     
            elseif(isset($_POST['calc_ci']))  
            {  
              
$CI = ( $_POST['principal']*pow((1+$_POST['rate']/100),$_POST['year'])-$_POST['principal']);
echo "COMPUND INTREST IS:<br>$CI";

            }              
 
?>
<form method="post" action="">
        <label for="principal">Principal Amount:</label>
        <input type="text"  name="principal" required><br>

        <label for="years">Number of Years:</label>
        <input type="text"  name="year" required><br>

        <label for="rate">Rate of Interest:</label>
        <input type="text"  name="rate" required><br>

        <button type="submit" name="calc_si">Calculate Simple Interest</button>
        <button type="submit" name="calc_ci">Calculate Compound Interest</button>
    </form>
 
    <!-- 6th Q -->
    <?php

function add($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}


$func1 = 'strlen';
$func2 = 'strtoupper';
$func3 = 'strtolower';

$func4 = 'add';
$func5 = 'sub';
$func6 = 'multiply';


echo "String Length: " . $func1("hi") . "<br>";
echo "String Uppercase: " . $func2("hi") .  "<br>";
echo "String Lowercase: " . $func3("hi") .  "<br>";

echo "Addition: " . $func4(10,50) .  "<br>";
echo "Subtraction: " . $func5(18,8) .  "<br>";
echo "Multiplication: " . $func6(2,4) .  "<br>";
?>

<!-- 7th -->
<?php 
class Sample{
    
    function __call($name,$arg){
        
        if($name == 'add'){
        switch(count($arg)){
        case 2: return $arg[0]+$arg[1];
        case 3: return $arg[0]+$arg[1]+$arg[2];
            }
        }
        
    }
    
}

$obj = new Sample();

echo "Function with 2 argument :" . $obj->add(2,8) ."<br>";
echo "Function with 3 argument :" . $obj->add(1,2,8)."<br>";
?>