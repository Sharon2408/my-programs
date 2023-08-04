<!--1 Wordwrap() -->
<?php
echo "Wordwrap()";
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,1,"<br>",false);
echo "<br><br><br>";
?>

<!--2 ucwords() -->
<?php
echo "ucwords()";
echo ucwords("hello|world", "|");
echo "<br><br><br>";
?>

<!--3 ucfirst() -->
<?php
echo "ucfirst()";
echo ucfirst("hello world!");
echo "<br><br><br>";
?>

<!--4 trim() -->
<?php
echo "trim()";
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo "<br><br><br>";
?>

<!--5 rtrim() -->
<?php
echo "rtrim()";
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"Hed!");
echo "<br><br><br>";
?>

<!--6 ltrim() -->
<?php
echo "rtrim()";
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hed!");
echo "<br><br><br>";
?>


<!--7 substr_replace() -->
<?php
echo "substr_replace()";
echo substr_replace("Hello world","earth",6,2);
echo "<br><br><br>";
?>


<!--8 substr_count() -->
<?php
echo "substr_count()";
echo substr_count("Hello world. The world is nice","world");
echo "<br><br><br>";
?>

<!--9 substr() -->
<?php
echo "substr()";
echo substr("Hello world",6);
echo "<br><br><br>";
?>

<!--10 metaphone()  -->
<?php
echo "metaphone()";
$str = "Assistance";
$str2 = "Assistants";

echo metaphone($str);
echo "<br>";
echo metaphone($str2);
echo "<br><br><br>";
?>