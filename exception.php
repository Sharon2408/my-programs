<?php
$num = [];

for ($i = 1; $i <= 10; $i++) {
    array_push($num, rand(10, 100));
}
print_r($num);

function check_num(array $arr)
{
    try {
        foreach ($arr as $x) {
            if ($x % 10 == 0) {
                throw new Exception("The number in a array is divisible by 10");
            }
        }
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 2; $j < $arr[$i]; $j++) {
                if ($arr[$i] % $j == 0) {
                    throw new Exception("The number in a array is prime number");
                     
                }
                
            }
        }
        ;
        for ($k = 0; $k < count($arr); $k++) {
            echo "The square value of elements in an array : " . pow($arr[$i], 2) .
                "<br>";
        }

    } catch (Exception $e) {
        echo "<br>The error is : " . $e->getMessage() . "<br>";
    } finally {
        echo "Exception is Handled";
    }
}
check_num($num);
?>