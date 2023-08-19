<!-- 
    
Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators 


-->
<!-- Arithmetic operators -->
<?php
echo "Arithmetic operators <br>";

$x = 10;  
$y = 6;

echo $x + $y."<br><br>";
echo $x - $y."<br><br>";
echo $x * $y."<br><br>";
echo $x / $y."<br><br>";
echo $x % $y."<br><br>";
echo $x ** $y."<br><br>";
?>  

<!-- Assignment operators  -->

<!-- 
    
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus -->


<!-- Comparison operators -->

<!-- 
    
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.	 -->

<!-- Increment/Decrement operators -->

<!-- 
    
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one -->
<?php
$x = 10;  
echo "Pre increment".++$x."<br><br>";
echo "Post increment".$x++."<br><br>";
echo "AFTER Post increment".$x ."<br><br>";
echo "Pre decrement".--$x."<br><br>";
echo "Post decrement".$x--."<br><br>";
echo  "AFTER Post increment".$x ."<br>";


?>

<!-- Logical operators -->

<!-- 
    
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x -->

<!-- String operators -->
<!-- 
    
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1 -->




<!-- Array operators -->

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y);
echo "<br><br>";
print_r($x == $y);
echo "<br><br>";
print_r($x === $y); 
echo "<br><br>";
print_r($x != $y);
echo "<br><br>";
print_r($x <> $y);
echo "<br><br>";
print_r($x !== $y);
echo "<br><br>";
?> 


<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); 
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); 
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); 
?>  
 


<!-- Conditional assignment operators  -->

<!-- 

?:	

Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	

??	

Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7

 -->
<?php
 echo $user = $_GET["user"] ?? "anonymous";
 ?>