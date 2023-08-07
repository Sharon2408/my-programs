<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $skills[] = array($_POST['skills']);
}

?>

<h4><?=$name;?></h4>
<h4><?=$email;?></h4>
<h4><?=$pass;?></h4>
<h4><?=$dob;?></h4>
<h4><?=$gender;?></h4>
<h4><?=$country;?></h4>
<h4><?= print_r($skills);?></h4>


