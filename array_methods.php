<!-- Array Method shuffle() -->
<?php
$my_array = array("red","green","blue","yellow","purple");

echo "Array Method shuffle()";
echo "<br>";
print_r($my_array);
echo "<br>";
shuffle($my_array);
print_r($my_array);
echo "<br><br><br><br>";
?>
<!-- Array method rsort() -->
<?php
echo "Array method rsort()";
echo "<br>";
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?>

<!-- Array Method range() -->
<?php
echo "Array Method range()";
$number = range(0,50,10);
print_r ($number);
echo "<br>";
$alph = range('a','f');
print_r($alph);
?>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; // The current element is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo current($people) . "<br>"; // Now the current element is Joe
echo prev($people) . "<br>"; // The previous element of Joe is Peter
echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
?>